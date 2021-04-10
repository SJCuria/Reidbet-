<?php
include (base.php);
                
                    
                if (isset($_POST['registrate'])) {
                    if (strlen($_POST['usuario']) >= 1 &&
                    strlen($_POST['mail']) >= 1 &&
                    strlen($_POST['contraseña']) >= 1) {
                    
                        $usuario = trim($_POST['usuario']);
                        $mail = trim($_POST['mail']);
                        $contraseña = trim($_POST['contraseña']);
                        $consulta = "INSERT INTO users(usuario, mail, `contraseña`) VALUES ('$usuario','$mail','$contraseña')";
                        
                        
                    } 
                    
                } else {
                    echo "error";
                }
                
            ?>
