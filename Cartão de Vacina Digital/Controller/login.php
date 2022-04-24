<?php

if (isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
    switch ($tipo) {
        case 0:
            echo " <script type='text/javascript'> alert ('dados insuficientes'); location.href='../index.php';</script> ";
            break;
        case 1:
            include "../Model/MAgente.php";
            $MAgente = new MAgente("", "","","","","","");
            $result = $MAgente->login($_POST['usu_nome'], $_POST['usu_senha']);
            if (mysqli_num_rows($result) > 0) {
                while ($row = $result->fetch_assoc()) {
                    session_start();
                    $_SESSION['tipo'] = 1;
                    $_SESSION['age_id'] = $row["age_id"];
                    $_SESSION['age_login'] = $row["age_login"];
                    $_SESSION['age_senha'] = $row["age_senha"];
                    header("Location: ../View/Agente/");
                }
            } else {
                ?>
                <script type='text/javascript'>
                    alert('Dados incorretos!');
                    location.href = '../';
                </script>
                <?php
            }
            break;
            
              case 2:
            include "../Model/MPostoDeSaude.php";
           $MPostoDeSaude = new MPostoDeSaude("","","");
            $result = $MPostoDeSaude->login($_POST['usu_nome'], $_POST['usu_senha']);
            if (mysqli_num_rows($result) > 0) {
                while ($row = $result->fetch_assoc()) {
                    session_start();
                    $_SESSION['tipo'] = 2;
                    $_SESSION['psf_id'] = $row["psf_id"];
                    $_SESSION['psf_login'] = $row["psf_login"];
                    $_SESSION['psf_senha'] = $row["psf_senha"];
                    header("Location: ../View/PostoDeSaude/#inicio");
                }
            } else {
                ?>
                <script type='text/javascript'>
                    alert('Dados incorretos!');
                    location.href = '../';
                </script>
                <?php
            }
            break;
            
              case 3:
            include "../Model/MPopulacao.php";
            $MPopulacao = new MPopulacao("", "", "", "","","","","","","","","","","");
            $result = $MPopulacao->login($_POST['usu_nome'], $_POST['usu_senha']);
            if (mysqli_num_rows($result) > 0) {
                while ($row = $result->fetch_assoc()) {
                    session_start();
                    $_SESSION['tipo'] = 3;
                    $_SESSION['pop_login'] = $row["pop_login"];
                    $_SESSION['pop_id'] = $row["pop_id"];
                    $_SESSION['pop_senha'] = $row["pop_senha"];
                    header("Location: ../View/Populacao/");
                }
            } else {
                ?>
                <script type='text/javascript'>
                    alert('Dados incorretos!');
                    location.href = '../';
                </script>
                <?php
            }
            break;
            
              case 4:
            include "../Model/MSecretaria.php";
            $MSecretaria = new MSecretaria("","","");
            $result = $MSecretaria->login($_POST['usu_nome'], $_POST['usu_senha']);
            if (mysqli_num_rows($result) > 0) {
                while ($row = $result->fetch_assoc()) {
                    session_start();
                    $_SESSION['tipo'] = 4;
                    $_SESSION['sec_id'] = $row["sec_id"];
                    $_SESSION['sec_login'] = $row["sec_login"];
                    $_SESSION['sec_senha'] = $row["sec_senha"];
                    header("Location: ../View/Secretaria/");
                }
            } else {
                ?>
                <script type='text/javascript'>
                    alert('Dados incorretos!');
                    location.href = '../';
                </script>
                <?php
            }
            break;
    }
}
?>