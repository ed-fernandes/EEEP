
package Model;


public class MPessoa {
    private int id;
    private String pes_nome;
    private String pes_senha;

    public MPessoa(int id, String pes_nome, String pes_senha) {
        this.id = id;
        this.pes_nome = pes_nome;
        this.pes_senha = pes_senha;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getPes_nome() {
        return pes_nome;
    }

    public void setPes_nome(String pes_nome) {
        this.pes_nome = pes_nome;
    }

    public String getPes_senha() {
        return pes_senha;
    }

    public void setPes_senha(String pes_senha) {
        this.pes_senha = pes_senha;
    }
    
}
