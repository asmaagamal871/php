<?php
class counter{
private $count;



public function __construct(){
   $this->count=$this->getCount();
}

public function getCount(){
    if(file_exists(_counter_file_)){
        return intval(file_get_contents(_counter_file_));

    }else{
        return 0;
    }
}

public function increment(){
    if(isset($_SESSION[_session_key_counter])){
        $this->count++;
        $_SESSION[_session_key_counter]=true;
        return $this->count;
    }else{
        return false;
    }
    
}

public function updateCounter(){
    $fp=fopen(_counter_file_,"w+");
    fwrite($fb,$this->count);
    fclose($fb);
}

public function incrementAndUpdate(){
    if($this->increment()!=false){
        $this->updateCounter();

    }
}

}

?>