<?php
require_once('vendor/autoload.php');
require_once("views/upload.php");
$s3File=new awsUploader();
if (!empty($_FILES)) {
    if ($s3File->validation()) {
        $s3File->uploadFile();
    }
}
?>