<?php

function conectarBD(){
    $db = mysqli_connect('localhost', 'root', 'password', 'DB_La_Elda');

    if($db){
        echo "Conectado";
    }else{
        echo "no se conecto";
    }

}
