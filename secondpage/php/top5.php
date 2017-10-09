<?php
header("Content-Type: application/json; charset=UTF-8");

$posicaoget = $_GET['posicaoget'];
$categoriaget = $_GET['categoriaget'];

$conexao = mysqli_connect("localhost", "root", "","cartolafc");

switch($categoriaget){
    // TOTAL PESO
    case 'total_peso':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_peso, f.foto 
        FROM results2015p p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_peso'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }
    break;
    //TOTAL DE FALTAS SOFRIDAS
    case 'total_fs':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_fs, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_fs'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }
    break;
    //TOTAL DE PASSES ERRADOS
    case 'total_pe':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_pe, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_pe'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }       
    break;
    //TOTAL DE ASSISTENCIAS
    case 'total_a':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_a, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_a'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }       
    break;
    //TOTAL DE FINALIZAÇÃO NA TRAVE
    case 'total_ft':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_ft, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_ft'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }       
    break;
    //TOTAL DE FINALIZAÇAÕ DEFENDIDA
    case 'total_fd':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_fd, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_fd'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        } 
    break;
    //TOTAL DE FINALIZAÇÕES PARA FORA
    case 'total_ff':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_ff, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_ff'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        } 
    break;
    //TOTAL DE GOLS
    case 'total_g':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_g, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_g'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        } 
    break;
    //TOTAL DE IMPEDIMENTO
    case 'total_i':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_i, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_i'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        } 
    break;
    //TOTAL PENALTIS PERDIDOS
    case 'total_pp':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_pp, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_pp'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        } 
    break;
    //TOTAL DE ROUBADAS DE BOLA
    case 'total_rb':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_rb, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_rb'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }    
    break;
    //TOTAL DE FALTAS COMETIDAS
    case 'total_fc':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_fc, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_fc'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        } 
    break;
    //TOTAL DE GOLS CONTRA
    case 'total_gc':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_gc, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_gc'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }   
    break;
    //TOTAL DE CARTÕES AMARELO
    case 'total_ca':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_ca, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_ca'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }          
    break;
    //TOTAL DE CATÕES VERMELHO
    case 'total_cv':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_cv, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_cv'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }  
    break;
    //TOTAL DE JOGOS SEM SOFRER GOL
    case 'total_sg':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_sg, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_sg'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }    
    break;
    //TOTAL DE DEFESAS DIFICEIS
    case 'total_dd':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_dd, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_dd'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }        
    break;
    //TOTAL DE DEFESAS DE PENALTI
    case 'total_dp':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_dp, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_dp'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }               
    break;
    //TOTAL DE GOLS SOFRIDOS
    case 'total_gs':
        $check = mysqli_query($conexao, "SELECT p.id, p.apelido, p.clube_id, p.posicao_id, p.total_gs, f.foto 
        FROM results2015 p JOIN fotos f ON p.id = f.id WHERE p.posicao_id = '$posicaoget' ORDER by $categoriaget DESC LIMIT 5");

        $row = mysqli_num_rows($check);
        if($row > 0) {
            $i = 0;
            $atletas = array('atleta' => array());
            while($row=mysqli_fetch_array($check)){
                $atletas['atleta'][$i]['id'] = $row['id'];
                $atletas['atleta'][$i]["apelido"] = utf8_encode($row['apelido']);
                $atletas['atleta'][$i]["clube_id"] = ($row['clube_id']);
                $atletas['atleta'][$i]["posicao_id"] = ($row['posicao_id']);
                $atletas['atleta'][$i]["total_peso"] = $row['total_gs'];
                $atletas['atleta'][$i]["foto"] = $row['foto'];
                $i++;        
            }
            echo json_encode($atletas,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }         
    break;
}

   
?>