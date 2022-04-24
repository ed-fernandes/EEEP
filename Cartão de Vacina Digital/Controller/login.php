<?php

if (isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
    switch ($tipo) {
        case 0:
            echo " <script type='text/javascript'> alert ('dados insuficientes'); location.href='../index.php';</script> ";
            break;
        case 1:
           include "../Model/MAgente.php";
            $MAgente = new MAgente(null, "", "", "","age_login","age_senha");
            $result = $MAgente->login("bb", "aaa");
            if (mysqli_num_rows($result) > 0) {
        header("location:../View/Agente/index.php");
            }
            
            while
                ($row = $result->fetch_assoc()) {
                echo "login:" . $row["age_login"] . " senha: " . $row["age_senha"] . "<br>";
               
            }
            break;
            
               case 2:
            include "../Model/MPostoDeSaude.php";
            $MPostoDeSaude = new MPostoDeSaude(null,"psf_login","psf_senha");
            $result = $MPostoDeSaude->login($_POST['usu_nome'], $_POST['usu_senha']);
            while
                ($row = $result->fetch_assoc()) {
                echo "login:" . $row["psf_login"] . " senha: " . $row["psf_senha"] . "<br>";
                header("location:../View/PostoDeSaude/index.php");
            }
            break;
            
            case 3:
            include "../Model/MPopulacao.php";
            $MPopulacao = new MPopulacao(null, "", "", "","","","","","","","","pop_login","pop_senha");
            $result = $MPopulacao->login($_POST['usu_nome'], $_POST['usu_senha']);
            while
                ($row = $result->fetch_assoc()) {
                echo "login:" . $row["pop_login"] . " senha: " . $row["pop_senha"] . "<br>";
                header("location:../View/Populacao/index.php");
            }
            break;
    
             case 4:
            include "../Model/MSecretaria.php";
            $MSecretaria = new MSecretaria("sec_login","sec_senha","");
            $result = $MSecretaria->login($_POST['usu_nome'], $_POST['usu_senha']);
            while
                ($row = $result->fetch_assoc()) {
                echo "login:" . $row["sec_login"] . " senha: " . $row["sec_senha"] . "<br>";
                header("location:../View/Secretaria/index.php");
            }
            break;
            
                }
}
?>