<?php
header("Content-Type: application/json; charset=UTF-8");

$conexao = mysqli_connect("localhost", "root", "","cartolafc");

    $check = mysqli_query($conexao, "SELECT * FROM clubes2015");

    $row = mysqli_num_rows($check);
    if($row > 0) {
        $i = 0;
            $atletas = array('clube' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['clube'][$i]['id'] = $row['id'];
                $atletas['clube'][$i]["nome"] = utf8_encode($row['nome']);
                $atletas['clube'][$i]['abreviacao'] = $row['abreviacao'];
                $i++;        
            }
        echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
?>