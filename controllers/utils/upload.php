<?php
    class uploadFile{

        public static function upload($file){
            $img_file = $file;
            $tmp_img =  $img_file["tmp_name"];
            $type = $img_file["type"];
            $img_name = time().$img_file["name"];
            $img_error = $img_file["error"];
            $img_size = $img_file["size"];
            $img_size_mo = ($img_size/1024)/1024;
            $max_size_mo = 3;
            $destination = "files/post/".$img_name;

            if($img_size_mo < $max_size_mo){
                if(move_uploaded_file($tmp_img, $destination)){
                    return $img_name;
                }else{
                    return false;
                }
            }else{
                return false;
            }
            
        }
    }