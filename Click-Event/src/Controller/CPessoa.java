
package Controller;

import Model.Conexao;
import Model.MPessoa;
import java.sql.ResultSet;

public class CPessoa {
    MPessoa mpes = new MPessoa(0,"","");
    Conexao conexao = new Conexao();
    ResultSet resultset;
    
    public void Cadastrar(String pes_nom,String pes_senha){
        
        mpes.setPes_nome(pes_nom);
        mpes.setPes_senha(pes_senha);
        
        conexao.InserirSQL("INSERT INTO tb_pessoa (pes_senha ,pes_nome)  VALUES ('"+mpes.getPes_senha()+
                "','"+mpes.getPes_nome()+"')");
    }
    
    public void Conectar(){
        conexao.Conectar();
    }
    
    public void Desconectar(){
        conexao.Desconectar();
    }

  
}
