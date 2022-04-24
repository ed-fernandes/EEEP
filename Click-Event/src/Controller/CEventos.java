
package Controller;

import Model.Conexao;
import Model.MEventos;
import java.sql.ResultSet;

public class CEventos {
    MEventos meve = new MEventos(0,"","",0,0,0);
    Conexao conexao = new Conexao();
    ResultSet resultset; 
    
    public void Inserir(String nom_eve,String tipo_eve, int con_eve, int buf_eve, int loc_eve){
        
        meve.setNom_eve(nom_eve);
        meve.setTipo_eve(tipo_eve);
        meve.setCon_eve(con_eve);
        meve.setBuf_eve(buf_eve);
        meve.setLoc_eve(loc_eve);
        
        conexao.InserirSQL("INSERT INTO tb_evento (nom_eve, evt_tipo, con_eve, buf_eve, loc_eve)  VALUES ('"+meve.getNom_eve()+"','"+meve.getTipo_eve()+"','"+meve.getCon_eve()+
                "','"+meve.getBuf_eve()+"','"+meve.getLoc_eve()+"')");
    }
    public void Conectar(){
        conexao.Conectar();
    }
    
    public void Desconectar(){
        conexao.Desconectar();
    }

}