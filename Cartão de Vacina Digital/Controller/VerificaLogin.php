<?php

session_start();
require_once '../../Model/conexao.php';
if (isset($_SESSION['tipo'])) {
    $tipo = $_SESSION['tipo'];
    switch ($tipo) {
        case 0:
            echo " <script type='text/javascript'> alert ('dados insuficientes'); location.href='../index.php';</script> ";
            break;
        case 1:
            include "../../Model/MAgente.php";
            $MAgente = new MAgente("", "","","","","","");
            $result = $MAgente->login($_SESSION['age_login'], $_SESSION['age_senha']);
            if (mysqli_num_rows($result) < 1) {
                ?>
                <script type='text/javascript'>
                    alert('Usuário não logado');
                    location.href = '../';
                </script>

                <?php

            }
            break;
            
                      case 2:
            include "../../Model/MPostoDeSaude.php";
            $MPostoDeSaude = new MPostoDeSaude("", "", "");
            $result = $MPostoDeSaude->login($_SESSION['psf_login'], $_SESSION['psf_senha']);
            if (mysqli_num_rows($result) < 1) {
                ?>
                <script type='text/javascript'>
                    alert('Usuário não logado');
                    location.href = '../';
                </script>

                <?php

            }
          break;
                case 3:
            include "../../Model/MPopulacao.php";
            $MPopulacao = new MPopulacao("", "", "", "", "", "", "", "", "", "", "", "","","");
            $result = $MPopulacao->login($_SESSION['pop_login'], $_SESSION['pop_senha']);
            if (mysqli_num_rows($result) < 1) {
                ?>
                <script type='text/javascript'>
                    alert('Usuário não logado');
                    location.href = '../';
                </script>

                <?php

            }  
            break;
             case 4:
            include "../../Model/MSecretaria.php";
            $MSecretaria= new MSecretaria("", "", "");
            $result = $MSecretaria->login($_SESSION['sec_login'], $_SESSION['sec_senha']);
            if (mysqli_num_rows($result) < 1) {
                ?>
                <script type='text/javascript'>
                    alert('Usuário não logado');
                    location.href = '../';
                </script>

                <?php

            }   
            
            
    }
} else {
 header("Location: ../");   
}
?>