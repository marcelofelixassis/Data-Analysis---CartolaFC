/*******************************************************************************************
* That function get the name of user team to perform login and load all the functions inside 
*******************************************************************************************/
function login(){

	var x = document.getElementById("nomedotime").value;

	$.get( "http://localhost/cartolatig/php/login.php?nomedocartoleiro="+x, function( data ) {
  	alert( "Load was performed." );
	});

}