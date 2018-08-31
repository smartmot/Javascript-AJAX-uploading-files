<?php
function upload($input_name, $folder, $new_filename){
            $original_name = basename($_FILES[$input_name]["name"]);
            $extention = strtolower(pathinfo($original_name,PATHINFO_EXTENSION));
            $filename =  $new_filename . "." . $extention;
            $new_file = $folder . $filename;
            return move_uploaded_file($_FILES[$input_name]["tmp_name"], $new_file);
        }
        if (isset($_FILES["fileupload"])){
            upload("fileupload", "uploaded/", "new_file_name");
        }
?>