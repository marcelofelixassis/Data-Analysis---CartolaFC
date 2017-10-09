<?php
header("Content-Type: application/json; charset=UTF-8");

$idclube = $_GET["idclube"];

$conexao = mysqli_connect("localhost", "root", "","cartolafc");

    $check = mysqli_query($conexao, "SELECT id, apelido, (total_fs + total_pe + total_a + total_ft + total_fd + total_ff + total_g + total_i + total_pp + total_rb + total_fc + total_gc + total_ca + total_cv + total_sg + total_dd + total_dp + total_gs) as total_peso FROM results2015 WHERE clube_id = '$idclube' and posicao_id = 1");



    $row = mysqli_num_rows($check);
    if($row > 0) {
        $i = 0;
        $somagoleiro = 0;
        while($row=mysqli_fetch_array($check)){
            $somagoleiro = $somagoleiro + $row['total_peso'];        
        }
    }



    $check = mysqli_query($conexao, "SELECT id, apelido, (total_fs + total_pe + total_a + total_ft + total_fd + total_ff + total_g + total_i + total_pp + total_rb + total_fc + total_gc + total_ca + total_cv + total_sg + total_dd + total_dp + total_gs) as total_peso FROM results2015 WHERE clube_id = '$idclube' and posicao_id = 2");



    $row = mysqli_num_rows($check);
    if($row > 0) {
        $i = 0;
        $somalateral = 0;
        $time = array('primeirotime' => array());
        while($row=mysqli_fetch_array($check)){
            $somalateral = $somalateral + $row['total_peso'];        
        }
    }




    $check = mysqli_query($conexao, "SELECT id, apelido, (total_fs + total_pe + total_a + total_ft + total_fd + total_ff + total_g + total_i + total_pp + total_rb + total_fc + total_gc + total_ca + total_cv + total_sg + total_dd + total_dp + total_gs) as total_peso FROM results2015 WHERE clube_id = '$idclube' and posicao_id = 3");



    $row = mysqli_num_rows($check);
    if($row > 0) {
        $i = 0;
        $somazagueiro = 0;
        $time = array('primeirotime' => array());
        while($row=mysqli_fetch_array($check)){
            $somazagueiro = $somazagueiro + $row['total_peso'];        
        }
    }





    $check = mysqli_query($conexao, "SELECT id, apelido, (total_fs + total_pe + total_a + total_ft + total_fd + total_ff + total_g + total_i + total_pp + total_rb + total_fc + total_gc + total_ca + total_cv + total_sg + total_dd + total_dp + total_gs) as total_peso FROM results2015 WHERE clube_id = '$idclube' and posicao_id = 4");



    $row = mysqli_num_rows($check);
    if($row > 0) {
        $i = 0;
        $somameiocampo = 0;
        $time = array('primeirotime' => array());
        while($row=mysqli_fetch_array($check)){
            $somameiocampo = $somameiocampo + $row['total_peso'];        
        }
    }








    $check = mysqli_query($conexao, "SELECT id, apelido, (total_fs + total_pe + total_a + total_ft + total_fd + total_ff + total_g + total_i + total_pp + total_rb + total_fc + total_gc + total_ca + total_cv + total_sg + total_dd + total_dp + total_gs) as total_peso FROM results2015 WHERE clube_id = '$idclube' and posicao_id = 5");



    $row = mysqli_num_rows($check);
    if($row > 0) {
        $i = 0;
        $somaatacante = 0;
        $time = array('primeirotime' => array());
        while($row=mysqli_fetch_array($check)){
            $somaatacante = $somaatacante + $row['total_peso'];        
        }
    }

    $time = array();
    $time['somagoleiro'] = $somagoleiro;
    $time['somalateral'] = $somalateral;
    $time['somazagueiro'] = $somazagueiro;
    $time['somameiocampo'] = $somameiocampo;
    $time['somaatacante'] = $somaatacante;

    echo json_encode($time,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

?>