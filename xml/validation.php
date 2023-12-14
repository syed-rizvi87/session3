<?php
$xml=new DOMDocument();
$xml -> load("session2.xml");
if($xml ->validate()){
    echo"valid";
}
else{
    echo"invalid";
}
?>