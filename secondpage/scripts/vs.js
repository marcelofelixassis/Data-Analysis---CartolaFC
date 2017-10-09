var valor = 0;
var valor2 = 0;
var nomedoclube1, nomedoclube2;

window.onload = function(){
	var obj = JSON.parse(localStorage.getItem("login"));
	document.getElementById("nomedotime").innerHTML = obj.times[0].nome;
	document.getElementById("nomedocartola").innerHTML = obj.times[0].nome_cartola;
	document.getElementById("imagemdoclube").src = obj.times[0].url_escudo_png;
	getclubes();
}

function getclubes(){
	$.ajax({
        method: "get",
        url: "http://localhost/cartolatig/secondpage/php/selectall_vs_select.php",    
        success: function(value){
        	preencher_select(value);	
        }
    });
}

function preencher_select(value){
	select = document.getElementById('clube1');
	for (var i = 0; i < 20; i++){
	    var opt = document.createElement('option');
	    opt.value = value.clube[i].id;
	    opt.innerHTML = value.clube[i].abreviacao.toUpperCase() + " - " + value.clube[i].nome;
	    select.appendChild(opt);
	}

	select = document.getElementById('clube2');
	for (var i = 0; i < 20; i++){
	    var opt = document.createElement('option');
	    opt.value = value.clube[i].id;
	    opt.innerHTML = value.clube[i].abreviacao.toUpperCase() + " - " + value.clube[i].nome;
	    select.appendChild(opt);
	}
}


jQuery( ".select1" ).change(function() {
  valor = document.getElementById("clube1").value;
  document.getElementById("clube1img").src = "style/escudos/"+valor+".png";
});

jQuery( ".select2" ).change(function() {
  valor = document.getElementById("clube2").value;
  document.getElementById("clube2img").src = "style/escudos/"+valor+".png";
});


var nome_primeirotime, nome_segundotime;
var dados_clube1;
var dados_clube2;



function comparar(){
	nome_primeirotime = document.getElementById("clube1").options[document.getElementById("clube1").selectedIndex].text;
	document.getElementById("nomedoclube1").innerHTML = nome_primeirotime;
	valor = document.getElementById("clube1").value;

	nome_segundotime =  document.getElementById("clube2").options[document.getElementById("clube2").selectedIndex].text;
	document.getElementById("nomedoclube2").innerHTML = nome_segundotime
	valor2 = document.getElementById("clube2").value;

	pesquisajogadoresclube1();
	pesquisajogadoresclube2();

	carregardadosparagrafico_time1(valor);
	carregardadosparagrafico_time2(valor2);

	setTimeout(grafico, 3000);
}

function carregardadosparagrafico_time1(idclube){
	$.ajax({
        method: "get",
        url: "http://localhost/cartolatig/secondpage/php/pegar_pesos_grafico.php?idclube="+idclube,    
        success: function(value){
        	console.log(value);
        	dados_clube1 = value;
        }
    });	
}


function carregardadosparagrafico_time2(idclube){
	$.ajax({
        method: "get",
        url: "http://localhost/cartolatig/secondpage/php/pegar_pesos_grafico.php?idclube="+idclube,    
        success: function(value){
        	dados_clube2 = value;
        }
    });	
}



function pesquisajogadoresclube1(){
	$.ajax({
        method: "get",
        url: "http://localhost/cartolatig/secondpage/php/get_atletas_clube.php?idclube="+valor,    
        success: function(value){
        	preencherlistclub1(value);
        }
    });
}

function preencherlistclub1(data){
	for(var i = 0; i < data.atletas.length; i++){
		var index = i + 1;
		$("#clube1list tbody").append(
	      	"<tr>" +
	        "<td>"+index+"</td>"+
	        "<td><img src="+data.atletas[i].foto+"></td>" +
	        "<td>"+ data.atletas[i].apelido +"</td>" +
	      	"</tr>"
    	);
	}
}

function pesquisajogadoresclube2(){
	$.ajax({
        method: "get",
        url: "http://localhost/cartolatig/secondpage/php/get_atletas_clube.php?idclube="+valor2,    
        success: function(value){
        	preencherlistclub2(value);
        }
    });
}

function preencherlistclub2(data){
	for(var i = 0; i < data.atletas.length; i++){
		var index = i + 1;
		$("#clube2list tbody").append(
	      	"<tr>" +
	        "<td>"+index+"</td>"+
	        "<td><img src="+data.atletas[i].foto+"></td>" +
	        "<td>"+ data.atletas[i].apelido +"</td>" +
	      	"</tr>"
    	);
	}
}


function grafico(){
	console.log(dados_clube1);
	console.log(dados_clube2);
    $(document).ready(function(){
        Highcharts.chart('container', {

		    chart: {
		      backgroundColor: {
		            linearGradient: [0, 0, 500, 500],
		            stops: [
		                [0, 'rgb(105,105,105)'],
		                [1, 'rgb(169,169,169)']
		            ]
		        },
		        polar: true,
		        type: 'line'
		    },

		    title: {
		    	 style: {
            		color: '#FFFFFF',
            		font: '20px "Trebuchet MS", Verdana, sans-serif'
        		},
		        text: nome_primeirotime +" Vs "+ nome_segundotime,
		        x: -80
		    },

		    pane: {
		        size: '90%'
		    },

		    xAxis: {
		        categories: ['Atacante', 'Meio Campo', 'Lateral', 'Zagueiro', 'Goleiro', ''],
		        tickmarkPlacement: 'on',
		        lineWidth: 0
		    },

		    yAxis: {
		    	 style: {
            		color: '#FFFFFF'
            		
        		},
		        gridLineInterpolation: 'polygon',
		        lineWidth: 3,
		        min: 5,
		        endOnTick: true,
                showLastLabel: true,
                tickPositions: [100, 300, 500, 700, 1000]
		    },

		    tooltip: {
		        shared: true,
		        pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.0f} Pontos</b><br/>'
		    },

		    legend: {
		        align: 'right',
		        verticalAlign: 'top',
		        y: 90,
		        layout: 'vertical'
		    },

		    series: [{
		        name: nome_primeirotime,
		        data: [dados_clube1['somaatacante'], dados_clube1['somameiocampo'], dados_clube1['somalateral'], dados_clube1['somazagueiro'], dados_clube1['somagoleiro'], 100],
		        pointPlacement: 'on'
		    }, {
		        name: nome_segundotime,
		        data: [dados_clube2['somaatacante'], dados_clube2['somameiocampo'], dados_clube2['somalateral'], dados_clube2['somazagueiro'], dados_clube2['somagoleiro'], 100],
		        pointPlacement: 'on'
		    }]
		});
    });
}





