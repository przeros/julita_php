<?php
require_once 'DB_ini.php';

if(isset($_POST['deleteAllImages']))
{
    $db =  get_db();
    $images = $db->images->find(); 
    foreach($images as $image) {
        $db->images->deleteOne($image);
    }

    $files = glob('uploaded_images/*');
    foreach($files as $file) { 
        if(is_file($file)) {
            unlink($file);
        }
    }

    header("Location: galeria.php");             
    die();
}

?>