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
                     