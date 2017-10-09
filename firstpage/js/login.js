function login(){
	var x = document.getElementById("nomedotime").value;
	$.get( "http://localhost/cartolatig/php/login.php?nomedocartoleiro="+x, function( data ) {
  	
  alert( "Load was performed." );
});
	
}