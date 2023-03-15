<?php
require_once("./config.php");
use Aws\S3\S3Client;
class awsUploader{
    
    private $_s3;
    public function __construct(){
        
        $this ->_s3 = S3Client::factory(array(
            'credentials' => array(
                'key' => _access_key,
                'secret' =>_secret_access_key,
            ), 'region' => _region,
            'version' => 'latest'
        ));
    }

    public function validation()
    {
        if ($_FILES["fileToUpload"]["size"] > 3000000) {
            die("file size is too large");
        } elseif (!stristr($_FILES["fileToUpload"]["type"], "image")) {
            die("file type must be image");
        } else {
            return true;
        }
    }


   public function uploadFile(){
    try {
        $id = uniqid();
        $file = $_FILES["fileToUpload"]['tmp_name'];
        $this->_s3->upload(_bucket_name,$id,$_FILES["fileToUpload"]['tmp_name']);
    } catch (Aws\S3\Exception\S3Exception $e) {
        echo "There was an error uploading the file.\n";
    }
    die("file uploaded successfully");
   }

}
?>