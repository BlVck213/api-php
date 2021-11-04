<?php

include('connection.php');


function read($conn){

    $sql = "SELECT * FROM tbl_pessoa";

    if ($resultado = mysqli_query($conn, $sql)) {

        $dados = mysqli_fetch_all($resultado);

        echo json_encode(array("status"=>"sucess", "data"=>$dados));

    } else {
 
        echo json_encode(array("status"=>"error", "data"=>mysqli_error($conn)));

    }


    function create($nome, $sobrenome, $email, $celular, $fotografia, $conn){

        $sql = "INSERT INTO tbl_pessoa (nome, sobrenome, email, celular, fotografia) VALUES('$nome', '$sobrenome', '$email', '$celular', '$fotografia')";

                if (mysqli_query($conn, $sql)) {
                    echo json_encode(array("status"=>"sucess", "data"=>"Os dados foram inseridos com sucesso"));
                } else {
                    echo json_encode(array("status"=>"error", "data"=>"Os dados não foram inseridos com sucesso"));
                }
                

    }
    

}