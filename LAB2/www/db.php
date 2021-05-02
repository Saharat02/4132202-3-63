<?php

try{
    $mysqli = new mysqli("localhost","root","test","mydb");
    echo "connected!!!";
}
catch(Exception $e){
    echo $e->getMessage();
    echo "Error?!?"
    
}
