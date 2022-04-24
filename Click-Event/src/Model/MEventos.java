
package Model;


public class MEventos {
    private int id_eve;
    private String tipo_eve;
    private String nom_eve;
    private int con_eve;
    private int buf_eve;
    private int loc_eve;

    public MEventos(int id_eve, String tipo_eve, String nom_eve, int con_eve, int buf_eve, int loc_eve) {
        this.id_eve = id_eve;
        this.tipo_eve = tipo_eve;
        this.nom_eve = nom_eve;
        this.con_eve = con_eve;
        this.buf_eve = buf_eve;
        this.loc_eve = loc_eve;
    }

    public int getId_eve() {
        return id_eve;
    }

    public void setId_eve(int id_eve) {
        this.id_eve = id_eve;
    }

    public String getTipo_eve() {
        return tipo_eve;
    }

    public void setTipo_eve(String tipo_eve) {
        this.tipo_eve = tipo_eve;
    }

    public String getNom_eve() {
        return nom_eve;
    }

    public void setNom_eve(String nom_eve) {
        this.nom_eve = nom_eve;
    }

    public int getCon_eve() {
        return con_eve;
    }

    public void setCon_eve(int con_eve) {
        this.con_eve = con_eve;
    }

    public int getBuf_eve() {
        return buf_eve;
    }

    public void setBuf_eve(int buf_eve) {
        this.buf_eve = buf_eve;
    }

    public int getLoc_eve() {
        return loc_eve;
    }

    public void setLoc_eve(int loc_eve) {
        this.loc_eve = loc_eve;
    }

}
