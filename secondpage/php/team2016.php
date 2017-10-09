<?php
header("Content-Type: application/json; charset=UTF-8");

$conexao = mysqli_connect("localhost", "root", "","cartolafc");

    $check = mysqli_query($conexao, "SELECT * FROM best2016");

    $row = mysqli_num_rows($check);
    if($row > 0) {
        $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = $row['clube_id'];
                $atletas['atleta'][$i]["posicao_id"] = $row['posicao_id'];
                $atletas['atleta'][$i]["total_fs"] = $row['total_fs'];
                $atletas['atleta'][$i]["total_pe"] = $row['total_pe'];
                $atletas['atleta'][$i]["total_a"]= $row['total_a'];
                $atletas['atleta'][$i]["total_ft"] = $row['total_ft'];
                $atletas['atleta'][$i]["total_fd"] = $row['total_fd'];
                $atletas['atleta'][$i]["total_ff"] = $row['total_ff'];
                $atletas['atleta'][$i]["total_g"]= $row['total_g'];
                $atletas['atleta'][$i]["total_i"]= $row['total_i'];
                $atletas['atleta'][$i]["total_pp"] = $row['total_pp'];
                $atletas['atleta'][$i]["total_rb"] = $row['total_rb'];
                $atletas['atleta'][$i]["total_fc"] = $row['total_fc'];
                $atletas['atleta'][$i]["total_gc"] = $row['total_gc'];
                $atletas['atleta'][$i]["total_ca"] = $row['total_ca'];
                $atletas['atleta'][$i]["total_cv"] = $row['total_cv'];
                $atletas['atleta'][$i]["total_sg"] = $row['total_sg'];
                $atletas['atleta'][$i]["total_dd"] = $row['total_dd'];
                $atletas['atleta'][$i]["total_dp"] = $row['total_dp'];
                $atletas['atleta'][$i]["total_gs"] = $row['total_gs'];
                $atletas['atleta'][$i]["total_peso"] = $row['total_peso'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];

                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }