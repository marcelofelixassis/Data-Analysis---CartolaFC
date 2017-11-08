var global_aux;
var verification;
var verification2;

window.onload = function(){
	var obj = JSON.parse(localStorage.getItem("login"));
	document.getElementById("nomedotime").innerHTML = obj.times[0].nome;
	document.getElementById("nomedocartola").innerHTML = obj.times[0].nome_cartola;
	document.getElementById("imagemdoclube").src = obj.times[0].url_escudo_png;
}

var obj_goleiro = [
	{'value' : 'total_peso', 'text': 'Geral'},
	{'value' : 'total_gc', 'text': 'Gol Contra'},
	{'value' : 'total_ca', 'text': 'Cartão Amarelo'},
	{'value' : 'total_cv', 'text': 'Cartão Vermelho'},
	{'value' : 'total_sg', 'text': 'Jogo Sem Sofrer Gol'},
	{'value' : 'total_dd', 'text': 'Defesa Dificil'},
	{'value' : 'total_dp', 'text': 'Defesa de Pênalti'},
	{'value' : 'total_gs', 'text': 'Gol Sofrido'}
];

var obj_lateral = [
	{'value' : 'total_peso', 'text': 'Geral'},
	{'value' : 'total_fs', 'text': 'Faltas Sofridas'},
	{'value' : 'total_pe', 'text': 'Passe Errado'},
	{'value' : 'total_a', 'text': 'Assistência'},
	{'value' : 'total_ft', 'text': 'Finalização na Trave'},
	{'value' : 'total_fd', 'text': 'Finalização Defendida'},
	{'value' : 'total_ff', 'text': 'Finalização Para Fora'},
	{'value' : 'total_g', 'text': 'Gol'},
	{'value' : 'total_pp', 'text': 'Pênaltis Perdidos'},
	{'value' : 'total_rb', 'text': 'Roubadas de Bola'},
	{'value' : 'total_fc', 'text': 'Faltas Cometidas'},
	{'value' : 'total_gc', 'text': 'Gol Contra'},
	{'value' : 'total_ca', 'text': 'Cartão Amarelo'},
	{'value' : 'total_cv', 'text': 'Cartão Vermelho'},
	{'value' : 'total_sg', 'text': 'Jogo Sem Sofrer Gol'},
];

var obj_zagueiro = [
	{'value' : 'total_peso', 'text': 'Geral'},
	{'value' : 'total_fs', 'text': 'Faltas Sofridas'},
	{'value' : 'total_pe', 'text': 'Passe Errado'},
	{'value' : 'total_a', 'text': 'Assistência'},
	{'value' : 'total_ft', 'text': 'Finalização na Trave'},
	{'value' : 'total_fd', 'text': 'Finalização Defendida'},
	{'value' : 'total_ff', 'text': 'Finalização Para Fora'},
	{'value' : 'total_g', 'text': 'Gol'},
	{'value' : 'total_pp', 'text': 'Pênaltis Perdidos'},
	{'value' : 'total_rb', 'text': 'Roubadas de Bola'},
	{'value' : 'total_fc', 'text': 'Faltas Cometidas'},
	{'value' : 'total_gc', 'text': 'Gol Contra'},
	{'value' : 'total_ca', 'text': 'Cartão Amarelo'},
	{'value' : 'total_cv', 'text': 'Cartão Vermelho'},
	{'value' : 'total_sg', 'text': 'Jogo Sem Sofrer Gol'},
];

var obj_meiocampo = [
	{'value' : 'total_peso', 'text': 'Geral'},
	{'value' : 'total_fs', 'text': 'Faltas Sofridas'},
	{'value' : 'total_pe', 'text': 'Passe Errado'},
	{'value' : 'total_a', 'text': 'Assistência'},
	{'value' : 'total_ft', 'text': 'Finalização na Trave'},
	{'value' : 'total_fd', 'text': 'Finalização Defendida'},
	{'value' : 'total_ff', 'text': 'Finalização Para Fora'},
	{'value' : 'total_g', 'text': 'Gol'},
	{'value' : 'total_i', 'text': 'Impedimento'},
	{'value' : 'total_pp', 'text': 'Pênaltis Perdidos'},
	{'value' : 'total_rb', 'text': 'Roubadas de Bola'},
	{'value' : 'total_fc', 'text': 'Faltas Cometidas'},
	{'value' : 'total_gc', 'text': 'Gol Contra'},
	{'value' : 'total_ca', 'text': 'Cartão Amarelo'},
	{'value' : 'total_cv', 'text': 'Cartão Vermelho'},
	{'value' : 'total_sg', 'text': 'Jogo Sem Sofrer Gol'},
];

var obj_atacante = [
	{'value' : 'total_peso', 'text': 'Geral'},
	{'value' : 'total_fs', 'text': 'Faltas Sofridas'},
	{'value' : 'total_pe', 'text': 'Passe Errado'},
	{'value' : 'total_a', 'text': 'Assistência'},
	{'value' : 'total_ft', 'text': 'Finalização na Trave'},
	{'value' : 'total_fd', 'text': 'Finalização Defendida'},
	{'value' : 'total_ff', 'text': 'Finalização Para Fora'},
	{'value' : 'total_g', 'text': 'Gol'},
	{'value' : 'total_i', 'text': 'Impedimento'},
	{'value' : 'total_pp', 'text': 'Pênaltis Perdidos'},
	{'value' : 'total_rb', 'text': 'Roubadas de Bola'},
	{'value' : 'total_fc', 'text': 'Faltas Cometidas'},
	{'value' : 'total_gc', 'text': 'Gol Contra'},
	{'value' : 'total_ca', 'text': 'Cartão Amarelo'},
	{'value' : 'total_cv', 'text': 'Cartão Vermelho'},
	{'value' : 'total_sg', 'text': 'Jogo Sem Sofrer Gol'},
];


function change_select(){
	var posicao = document.getElementById("posicao").value;
	var x = document.getElementById("categoria");

	if(posicao == 1){
		for(var i = 0; i < obj_goleiro.length; i++){
    		var option = document.createElement("option");
    		option.text = obj_goleiro[i]["text"];
    		option.value = obj_goleiro[i]["value"];
    		x.add(option);
		}
	}

	if(posicao == 2){
		for(var i = 0; i < obj_lateral.length; i++){
    		var option = document.createElement("option");
    		option.text = obj_lateral[i]["text"];
    		option.value = obj_lateral[i]["value"];
    		x.add(option);
		}
	}

	if(posicao == 3){
		for(var i = 0; i < obj_zagueiro.length; i++){
    		var option = document.createElement("option");
    		option.text = obj_zagueiro[i]["text"];
    		option.value = obj_zagueiro[i]["value"];
    		x.add(option);
		}
	}

	if(posicao == 4){
		for(var i = 0; i < obj_meiocampo.length; i++){
    		var option = document.createElement("option");
    		option.text = obj_meiocampo[i]["text"];
    		option.value = obj_meiocampo[i]["value"];
    		x.add(option);
		}
	}

	if(posicao == 5){
		for(var i = 0; i < obj_atacante.length; i++){
    		var option = document.createElement("option");
    		option.text = obj_atacante[i]["text"];
    		option.value = obj_atacante[i]["value"];
    		x.add(option);
		}
	}
}

window.onload = function(){
	var obj = JSON.parse(localStorage.getItem("login"));
	document.getElementById("nomedotime").innerHTML = obj.times[0].nome;
	document.getElementById("nomedocartola").innerHTML = obj.times[0].nome_cartola;
	document.getElementById("imagemdoclube").src = obj.times[0].url_escudo_png;
}

function pesquisaavancada_desc(){
	var categoria = document.getElementById("categoria").value;
	var posicao = document.getElementById("posicao").value;
	$.ajax({
        method: "get",
        url: "http://localhost/cartolatig/secondpage/php/top5.php?posicaoget="+posicao+"&categoriaget="+categoria,    
        success: function(data){
        	preencher_top5desc(data);
        }
    });
}

function pesquisaavancada_asc(){
	var categoria = document.getElementById("categoria").value;
	var posicao = document.getElementById("posicao").value;
	$.ajax({
        method: "get",
        url: "http://localhost/cartolatig/secondpage/php/top5asc.php?posicaoget="+posicao+"&categoriaget="+categoria,    
        success: function(value){
        	preencher_top5asc(value);
        }
    });
}

function preencher_top5desc(data){
	if(verification == 1){
		document.getElementById("top5").deleteRow(5);
		document.getElementById("top5").deleteRow(4);
		document.getElementById("top5").deleteRow(3);
		document.getElementById("top5").deleteRow(2);
		document.getElementById("top5").deleteRow(1);
	}
	for(var i = 0; i < 6; i++){
		var index = i + 1;
		$("#top5 tbody").append(
	      	"<tr>" +
	        "<td>"+index+"</td>"+
	        "<td><img src="+data.atleta[i].foto+"></td>" +
	        "<td>"+ data.atleta[i].apelido +"</td>" +
	        "<td>"+ data.atleta[i].total_peso +"</td>" +
	      	"</tr>"
    	);
    verification = 1;
	}
}


function preencher_top5asc(data){
	if(verification2 == 1){
		document.getElementById("top5asc").deleteRow(5);
		document.getElementById("top5asc").deleteRow(4);
		document.getElementById("top5asc").deleteRow(3);
		document.getElementById("top5asc").deleteRow(2);
		document.getElementById("top5asc").deleteRow(1);
	}
	for(var j = 0; j < 6; j++){
		var index = j + 1;
		$("#top5asc tbody").append(
	      	"<tr>" +
	        "<td>"+index+"</td>"+
	        "<td><img src="+data.atleta[j].foto+"></td>" +
	        "<td>"+ data.atleta[j].apelido +"</td>" +
	        "<td>"+ data.atleta[j].total_peso +"</td>" +
	      	"</tr>"
    	);
    verification2 = 1;
	}
}