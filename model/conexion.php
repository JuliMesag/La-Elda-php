<?php

function conectarBD(){
    $db = mysqli_connect('localhost', 'root', 'password', 'DB_La_Elda');

    if($db){
        echo "se conecto re full mi papá";
    }else{
        echo "no se conecto nada";
    }

}