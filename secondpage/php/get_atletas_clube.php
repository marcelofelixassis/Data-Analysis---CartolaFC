<?php
header("Content-Type: application/json; charset=UTF-8");

$idclube = $_GET["idclube"];

$conexao = mysqli_connect("localhost", "root", "","cartolafc");

    $check = mysqli_query($conexao, "SELECT p.apelido, f.foto 
        FROM atletas2015 p JOIN fotos f ON p.id = f.id 
        WHERE p.clube_id = '$idclube' ORDER by p.posicao_id ASC");



    $row = mysqli_num_rows($check);
    if($row > 0) {
        $i = 0;
            $atletas = array('atletas' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atletas'][$i]['apelido'] = utf8_encode($row['apelido']);
                $atletas['atletas'][$i]["foto"] = $row['foto'];
                $i++;        
            }
        echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
?>