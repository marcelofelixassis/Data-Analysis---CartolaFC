window.onload = function(){
	var obj = JSON.parse(localStorage.getItem("login"));
	document.getElementById("nomedotime").innerHTML = obj.times[0].nome;
	document.getElementById("nomedocartola").innerHTML = obj.times[0].nome_cartola;
	document.getElementById("imagemdoclube").src = obj.times[0].url_escudo_png;
	loadbest();
}

function loadbest() {
	$.ajax({
        method: "get",
        url: "http://localhost/cartolatig/secondpage/php/team2016.php",    
        success: function(value){
        	console.log(value);
        	preencher_campo(value);
        	preencher_best2015(value);
        	
        }
    });
}

function preencher_campo(data){
	console.log("asd");
		$("#jogadores").append(
	      	'<div style="position:absolute; top:175px; left:70px;">'+
              '<img src='+data.atleta[0].foto+' class="img-circle">'+
            '</div>'+

            '<div style="position:absolute; top:290px; left:230px;">'+
              '<img src='+data.atleta[3].foto+' class="img-circle">'+
            '</div>'+

            '<div style="position:absolute; top:60px; left:230px;">'+
              '<img src='+data.atleta[4].foto+' class="img-circle">'+
            '</div>'+

            '<div style="position:absolute; top:230px; left:160px;">'+
              '<img src='+data.atleta[1].foto+' class="img-circle">'+
            '</div>'+

            '<div style="position:absolute; top:120px; left:160px;">'+
              '<img src='+data.atleta[2].foto+' class="img-circle">'+
            '</div>'+

            '<div style="position:absolute; top:90px; left:330px;">'+
              '<img src='+data.atleta[5].foto+' class="img-circle">'+
            '</div>'+

            '<div style="position:absolute; top:250px; left:330px;">'+
              '<img src='+data.atleta[6].foto+' class="img-circle">'+
            '</div>'+

            '<div style="position:absolute; top:210px; left:450px;">'+
              '<img src='+data.atleta[7].foto+' class="img-circle">'+
            '</div>'+

            '<div style="position:absolute; top:130px; left:450px;">'+
              '<img src='+data.atleta[8].foto+' class="img-circle">'+
            '</div>'+

            '<div style="position:absolute; top:120px; left:600px;">'+
              '<img src='+data.atleta[9].foto+' class="img-circle">'+
            '</div>'+

            '<div style="position:absolute; top:230px; left:600px;">'+
              '<img src='+data.atleta[10].foto+' class="img-circle">'+
            '</div>'
    	);
}

function preencher_best2015(data){
	for(var i = 0; i < 12; i++){
		$("#best2015 tbody").append(
	      	"<tr>" +
	        "<td><img src="+data.atleta[i].foto+"></td>" +
	        "<td>"+ data.atleta[i].apelido +"</td>" +
	        "<td>"+ data.atleta[i].total_fs+"</td>" +
	        "<td>"+ data.atleta[i].total_pe +"</td>" +
	        "<td>"+ data.atleta[i].total_a +"</td>" +
	        "<td>"+ data.atleta[i].total_ft +"</td>" +
	        "<td>"+ data.atleta[i].total_fd +"</td>" +
	        "<td>"+ data.atleta[i].total_ff +"</td>" +
	        "<td>"+ data.atleta[i].total_g +"</td>" +
	        "<td>"+ data.atleta[i].total_i +"</td>" +
	        "<td>"+ data.atleta[i].total_pp +"</td>" +
	        "<td>"+ data.atleta[i].total_rb +"</td>" +
	        "<td>"+ data.atleta[i].total_fc +"</td>" +
	        "<td>"+ data.atleta[i].total_gc +"</td>" +
	        "<td>"+ data.atleta[i].total_ca +"</td>" +
	        "<td>"+ data.atleta[i].total_cv +"</td>" +
	        "<td>"+ data.atleta[i].total_sg +"</td>" +
	        "<td>"+ data.atleta[i].total_dd +"</td>" +
	        "<td>"+ data.atleta[i].total_dp +"</td>" +
	        "<td>"+ data.atleta[i].total_gs +"</td>" +
	        "<td>"+ data.atleta[i].total_peso +"</td>" +
	      	"</tr>"
    	);
	}
}