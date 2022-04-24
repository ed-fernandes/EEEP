      <input type='text' name='campo_desI' placeholder='Destino inicial' required='' class='form-control my-2'
                   <?php
                    if ($rot_desI != null) {
                        echo "  value=" . $rot_desI . "";
                    }
                    ?> ><br>
                    <input type='text' name='campo_desF' placeholder='Destino final' required='' class='form-control my-2' 
                       <?php
                    if ($rot_desF != null) {
                        echo "  value=" . $rot_desF . "";
                    }
                    ?> ><br>



                    <div class="py-5 header-site3" id="Rotas">
    <div class="container section-aquamarine">
        <div class="row">
            <div class="col-md-12 animate-in-down">
            <h1 class="text-white mt-4">Rotas</h1>
            <form name="formRotas" method="POST"  <?php echo "action=?acao=$acao"; ?>>
                 <input type="hidden"  name="age_id" class="form-control my-2" <?php
                    if (isset($_GET['idAgente'])) {
                        echo "  value=" . $age_id . "";
                    }
                    ?> >
                  <input type="hidden" name="rot_id" class="form-control my-2" <?php
                    if (isset($_GET['idRotas'])) {
                        echo "  value=" . $rot_id . "";
                    }
                    ?> ><br>
              
                     
                     <input type='button' value='Pesquisar Agente' class='btn btn-warning' data-toggle='modal' data-target='#pesquisarAgt'>
                     <br>
                     <br>







                     while ($row = $result->fetch_assoc()) {
        $rot_id = $row['rot_id'];
        $rot_desI = $row['rot_desI'];
        $rot_desF = $row['rot_desF'];        
    }