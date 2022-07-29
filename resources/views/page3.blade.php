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
    <div class="w3-card" style="height:450px;width:100%;background-color:darkred;">
         <center><br><br><u><font size="+2"><b>CAKE</b></font></u></center>

          
        <center><p style="font-weight:bolder;font-size: 20px;color:white;">
              A Cake is a flour confection made from flour,sugar,and other ingredients,and is usually  baked.In their oldest forms,cakes were modifications of bread,but cakes now cover a wide range of preparations that can be simple or elaborate, and which share features with desserts  such pastries,meringues,custards,and pies.        
           </p></center>

    </div>
   </div>
   <div class="w3-half">
    <div class="w3-card-0" style="height:450px;width:100%;background-color:darkred;"><br><br>
        <center><img src="/img/cake.jpeg" style="height:300px;width:80%"></center>
    <center><br><a href="{{ route('register') }}"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
    </div>
   </div>
</div>
<div class="w3-border-0" style="height:200px;width:100%;">
    
</div>
<div class="w3-row">
   <div class="w3-half"> 
    <div class="w3-card" style="height:450px;width:100%;background-color:sandybrown;">
         <center><br><br><u><font size="+2"><b>BUNS</b></font></u></center>
          
           <center><p style="font-weight:bolder;font-size:20px;">
               Buns is any of wide variety of variously shaped bread rolls,usually leavened and slightly sweetened or plain,sometimes containing spices,dried currants,e.t.c.          
           </p></center>

    </div>
   </div>
   <div class="w3-half">
    <div class="w3-card-0" style="height:450px;width:100%;background-color:sandybrown;"><br><br>
        <center><img src="/img/buns.jpeg" style="height:300px;width:80%"></center>
    <center><br><a href="{{ route('register') }}"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
    </div>
   </div>
</div>
<div class="w3-border-0" style="height:200px;width:100%;">
    
</div>
<div class="w3-row">
   <div class="w3-half"> 
    <div class="w3-card " style="height:450px;width:100%;background-color:coral;">
         <center><br><br><u><font size="+2"><b>MEAT PIE</b></font></u></center>
        
        <center><p style="font-weight:bolder;font-size:20px;">
        A meat pie is a pie with a filling of meat and often other savoryingredients.The are found in cuisines worldwide.Meat pies are usually baked,fried, or deep fried to brown  them and develop the flavour through the Mallard reaction.Many varieties have a flaky crust.
    </p></center>

    </div>
   </div>
   <div class="w3-half">
    <div class="w3-card-0" style="height:450px;width:100%;background-color:coral;"><br><br>
        <center><img src="/img/meatpie.jpeg" style="height:300px;width:80%"></center>
    <center><br><a href="{{ route('register') }}"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
    </div>
   </div>
</div>
<div class="w3-border-0" style="height:200px;width:100%;">
    
</div>
<div class="w3-row">
   <div class="w3-half"> 
    <div class="w3-card" style="height:450px;width:100%;background-color:orange;">
         <center><br><br><u><font size="+2"><b>CHIN CHIN</b></font></u></center>

             <center><p style="font-weight:bolder;font-size:20px;">
              Chin Chin is a fried snack in West Africa.it is similar to the Scandinavian snack klenat,a crunchy,donut-like baked or fried dough of wheat flour,and other customary baking items.Chin chin may contain cowpeas.Many people bake it with ground nutmeg for flavour.
             </p></center>


    </div>
   </div>
   <div class="w3-half">
    <div class="w3-card-0" style="height:450px;width:100%;background-color:orange;"><br><br>
        <center><img src="/img/chinchin2.jpeg" style="height:300px;width:80%"></center>
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
