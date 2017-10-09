var global_aux;
var verification;
var verification2;


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




function teste(){alert("asd");}
