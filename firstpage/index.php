<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/jquery.datetimepicker.css">
<script src="js/login.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  var nomedocartoleiro = $("#nomedocartoleiro");
    $("#entrar").click(function(){
        $.get("http://localhost/cartolatig/firstpage/php/login.php?nomedocartoleiro="+nomedocartoleiro.val(), function(data, status){
            if(data){
              localStorage.setItem("login", data); 
              window.location.replace("http://localhost/cartolatig/secondpage");   
            }
        });
    });
});
</script>
<div class="main">
    <div class="container">
      <center>
         <div class="middle">
            <div id="login">
               <form>
                  <fieldset class="clearfix">
                     <p><span class="fa fa-futbol-o"></span><input type="text"  Placeholder="Nome Cartoleiro" id="nomedocartoleiro" required></p> 
                     <div>
                       <button type="button" id="entrar" class="btn btn-primary">ENTRAR</button>
                     </div>
                  </fieldset>
                  <div class="clearfix"></div>
               </form>
               <div class="clearfix"></div>
            </div> <!-- end login -->
            <img src="logo.png" height="100" width="100">
         </div>
      </center>
   </div>
</div>