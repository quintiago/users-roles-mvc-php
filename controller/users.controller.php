<?php

class ctrUsers
{
    static public function ctrShowUsers()
    {
        $table = "users";
        $response = mdlUsers::mdlShowUsers($table);
        return $response;
    }

    static public function ctrsaveusers()
    {
        if (isset($_POST["name_users"])) {
            if (isset($_FILES["upImgUsers"]["tmp_name"]) && !empty($_FILES["upImgUsers"]["tmp_name"])) {
                list($width, $high) = getimagesize($_FILES["upImgUsers"]["tmp_name"]);
                $newWidth = 480;
                $newHigh = 382;

                /*===================================================================
                WE CREATE THE DIRECTORY WHERE WE ARE GOING TO SAVE THE USER'S PHOTO
                ===================================================================*/
                $directory = "views/images/users";

                /*===================================================================
                ACCORDING TO THE IMAGE TYPE WE APPLY THE DEFAULT PHP FUNCTIONS
                ===================================================================*/
                if ($_FILES["upImgUsers"]["type"] == "image/jpeg") {
                    $aleatory = mt_rand(100, 999);
                    $route = $directory . "/" . $aleatory . ".jpg";
                    $origin = imagecreatefromjpeg($_FILES["upImgUsers"]["tmp_name"]);
                    $destination = imagecreatetruecolor($newWidth, $newHigh);
                    imagecopyresized($destination, $origin, 0, 0, 0, 0, $newWidth, $newHigh, $width, $high);
                    imagejpeg($destination, $route);
                } else if ($_FILES["upImgUsers"]["type"] == "image/png") {
                    $aleatory = mt_rand(100, 999);
                    $route = $directory . "/" . $aleatory . ".png";
                    $origin = imagecreatefrompng($_FILES["upImgUsers"]["tmp_name"]);
                    $destination = imagecreatetruecolor($newWidth, $newHigh);
                    imagealphablending($destination, FALSE);
                    imagesavealpha($destination, TRUE);
                    imagecopyresized($destination, $origin, 0, 0, 0, 0, $newWidth, $newHigh, $width, $high);
                    imagepng($destination, $route);
                } else {
                    echo '<script>
                    swal({
                        type:"error",
                        title: "¡CORREGIR!",
                        text: "¡No se permiten formatos diferentes a JPG y/o PNG!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar
                    }).then(function(result){
                        if(result.value){
                            history.back();
                        }
                    })
                    </script>';
                    return;
                }
                $encryptPassword = crypt($_POST["pass_user"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                $data = array(
                    "name_user" => $_POST["name_users"],
                    "name_user" => $_POST["name_user"],
                    "pass_user" => $encryptPassword,
                    "rol_user" => $_POST["rol_user"],
                    "picture" => $route,
                );

                echo "</pre>";
                print_r($data);
                echo "</pre>";
            }
        }
    }
}
