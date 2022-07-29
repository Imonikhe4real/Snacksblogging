<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/w3.css">

        <title>www.nafiusnackblog.com</title>
    </head>
    <body>
    <div class="w3-top">
    <div class="w3-border-0" style="height:100px;width:100%;background:darkorange;">
    <font size="+2"><br><center>WELCOME TO NAFIU SNACK BLOG.COM</center></font>
</div>
     <div class="w3-bar w3-black">
        <a href="/homes" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Home</a>
            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Register</a>
                        @endif
                    @endauth
            @endif
  <a href="/contact" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Contact</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>

<div id="demo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
  <a href="/homes" class="w3-bar-item w3-button" style="font-weight:bolder;">Home</a>
  <a href="{{ route('register') }}" class="w3-bar-item w3-button" style="font-weight:bolder;">Register</a>
  <a href="{{ route('login') }}" class="w3-bar-item w3-button" style="font-weight:bolder;">Login</a>
  <a href="/contact" class="w3-bar-item w3-button" style="font-weight:bolder;">Contact</a>
</div>
<script>
function myFunction() {
  var x = document.getElementById("demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
</div>
<div class="w3-border-0" style="height:400px;width:100%;">
    
</div>
<div class="w3-row">
   <div class="w3-half"> 
    <div class="w3-card w3-blue" style="height:450px;width:100%;">
         <center><br><br><u><font size="+2"><b>PUFF PUFF</b></font></u></center>

          
        <center><p style="font-weight:bolder;font-size: 20px;">
               Puff puff,as it is called in Nigeria,is a traditional African snack made of fried dough.other names for the food include buffloaf or boflot in Ghana,Botokoin in Togo,gato in Guinea,bofloto in the ivory coast,mikate in congo,micate or bolinho in Angola,Anglophone in Cameroon,legemat in Sudan,Kala in liberia,Vetkoek/Amagwinya/Magwinya in SouthAfrica and Zimbabwe.           
           </p></center>

    </div>
   </div>
   <div class="w3-half">
    <div class="w3-card-0 w3-blue" style="height:450px;width:100%;"><br><br>
        <center><img src="/img/puffpuff.jpeg" style="height:300px;width:80%"></center>
    <center><br><a href="{{ route('register') }}"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;text-decoration:none;"><br>Comment</div></a></center>
    </div>
   </div>
</div>
<div class="w3-border-0" style="height:200px;width:100%;">
    
</div>
<div class="w3-row">
   <div class="w3-half"> 
    <div class="w3-card" style="height:450px;width:100%;background-color:black;">
           <center><br><br><u><font size="+2"><b style="color:white;">BURGER</b></font></u></center>
               
          <center><p style="font-weight:bolder;font-size: 20px;color:white;">
               Burger is a food consisting of fillings - usually a patty of ground meat,typically beef-placed inside a sliced bun or bread roll.Burgers are often served with cheese,lettuce,tomato,onion,pickles,bacon,orchilis;condiments such as ketchup,mustard,mayonnaise,relish,or a special sauce often a variation of thousand island dressing.
           </p></center>


    </div>
   </div>
   <div class="w3-half">
    <div class="w3-card-0" style="height:450px;width:100%;background-color:black;"><br><br>
        <center><img src="/img/burger1.jpeg" style="height:300px;width:80%"></center>
    <center><br><a href="{{ route('register') }}"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
    </div>
   </div>
</div>
<div class="w3-border-0" style="height:200px;width:100%;">
    
</div>
<div class="w3-row">
   <div class="w3-half"> 
    <div class="w3-card" style="height:450px;width:100%;background-color:orange;">
         <center><br><br><u><font size="+2"><b>SAMOSA</b></font></u></center>
           
            <center><p style="font-weight:bolder;font-size: 20px;">
               A Samosa is a fried or baked pastry with a savory filling,including ingredientssuch as spiced potatoes,onions,aand peas.it may take different forms,including triangular,cone,or half-moon shapes,depending on the region.Samosas are often accompanied by chutney,and have origins in medieval times or earlier.           
           </p></center>

    </div>
   </div>
   <div class="w3-half">
    <div class="w3-card-0" style="height:450px;width:100%;background-color:orange;"><br><br>
        <center><img src="/img/samosa.jpeg" style="height:300px;width:80%"></center>
    <center><br><a href="{{ route('register') }}"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
    </div>
   </div>
</div>
<div class="w3-border-0" style="height:200px;width:100%;">
    
</div>
<div class="w3-row">
   <div class="w3-half"> 
    <div class="w3-card" style="height:450px;width:100%;background-color:darkgreen;">
         <center><br><br><u><font size="+2"><b>CHINESE SPRING ROLL</b></font></u></center>

        <center><p style="font-weight:bolder;font-size: 20px;">
             Chinese Spring Roll, are savory rolls with cabbage and other vegetable fillings inside a thinly wrapped cylindrical pastry. They are usually eaten during the Spring Festival in mainland China,hence the name.Meat varieties,particularly pork,are also popular.          
           </p></center>

    </div>
   </div>
   <div class="w3-half">
    <div class="w3-card-0" style="height:450px;width:100%;background-color:darkgreen;"><br><br>
        <center><img src="/img/chinesespringroll.jpeg" style="height:300px;width:80%"></center>
    <center><br><a href="{{ route('register') }}"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
    </div>
   </div>
</div>
<div class="w3-border-0" style="height:200px;width:100%;">
    
</div>
<div class="w3-bar">
    <div class="w3-button">&laquo;</div>
    <a href="/" class="w3-button w3-hover-green">1</a>
    <a href="/page2" class="w3-button w3-hover-red">2</a>
    <a href="/page3" class="w3-button w3-hover-orange">3</a>
    <div class="w3-button">&raquo;</div>
</div>
<footer class="w3-border-0" style="height:200px;width:100%;background-color:black;">
     <br>
     <center><h3 style="font-weight:bolder;color:white;font-size:20px;">Blog Developed By Nafiu</h3></center>
     <br>
     <div style="color:white;font-size:20px;"><center>Copyright &copyright 2022</center></div>
</footer>

</body>
</html>
