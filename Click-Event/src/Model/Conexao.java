package Model;

import com.mysql.jdbc.Connection;
import com.mysql.jdbc.Statement;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import javax.swing.JOptionPane;

public class Conexao {
    
    private final String driver = "com.mysql.jdbc.Driver";
    private Connection conexao;
    private Statement statement;
    private ResultSet resultset;
    
    public void Conectar() {
        try {
            Class.forName(driver);
            conexao = (Connection) DriverManager.getConnection("jdbc:mysql://localhost/clickevents", "root", "");
            statement = (Statement) conexao.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE, ResultSet.CONCUR_READ_ONLY);

        } catch (SQLException | ClassNotFoundException ex) {

            JOptionPane.showMessageDialog(null, "erro ao conectar");

        }
    }

    public void InserirSQL(String SQL) {
        try {
            statement.execute(SQL);
            JOptionPane.showMessageDialog(null, "Salvo com Sucesso");
        } catch (SQLException ex) {
            JOptionPane.showMessageDialog(null, "Erro ao inserir: " + ex);
        }

    }
    public void ExcluirSQL(String SQL){
        try {
            statement.execute(SQL);
            JOptionPane.showMessageDialog(null, "Excluído");
        } catch (SQLException e) {
            JOptionPane.showMessageDialog(null, e);
        }    
    }
    public void Desconectar() {
        try {
            conexao.close();
        } catch (SQLException ex) {
            JOptionPane.showMessageDialog(null, "Erro ao desconectar: " + ex);

        }
    }

    public ResultSet PesquisaSQL(String SQL) {
        try {
            resultset = statement.executeQuery(SQL);
          
            } catch (SQLException ex) {
            JOptionPane.showMessageDialog(null, "Erro ao pesquisar: " + ex);
        }
        return resultset;
    }



}