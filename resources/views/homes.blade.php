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
        <a href="/home" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Home</a>
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
  <a href="/home" class="w3-bar-item w3-button" style="font-weight:bolder;">Home</a>
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
      <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
          <center><div class="w3-border-0" style="height:300px;width:80%;border-radius:200px;background-color:hotpink;"><br><br><br><br><br><font size="+2"><b><center><q>Diana having a bite of the delicious donought</q></center></div></center></b></font>
          </div>
      </div>
    <div class="w3-half">
      <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
         <center><img src="/img/donoughteater.jpeg" style="height:300px;width:80%;"></center>
      </div>
  </div> 
 </div>

<div class="w3-row"> 
    <div class="w3-half">
        <div class="w3-light-grey" style="height:400px;width:100%;">
          <center><img src="/img/hotdogeater.jpeg" style="height:300px;width:80%;"></center>              
          </div>
    </div>
    <div class="w3-half">
        <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
                <center><div class="w3-border-0" style="height:300px;width:80%;border-radius:200px;background-color:yellow;"><br><br><br><br><br><font size="+2"><b><center><q>Kim so excited about the hotdog she is about to eat</q></center></div></center></b></font></div></center>
              </div>
          </div>
    </div>
</div>

<div class="w3-row">
  <div class="w3-half">
      <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
    <center><div class="w3-border-0" style="height:300px;width:80%;border-radius:200px;background-color:orangered;"><br><br><br><br><br><font size="+2"><b><center><q>The Fish Roll is so Yummy that she does not want to stop having the bite</q></center></div></center></b></font>
          </div></center>
     </div>
<div class="w3-half">
 <div class="w3-light-grey" style="height:400px;width:100%;">
      <center><img src="/img/fishrolleater.jpeg" style="height:300px;width:80%;"></center>
 </div>   
</div>
</div>




 <div class="w3-row"> 
    <div class="w3-half">
        <div class="w3-light-grey" style="height:400px;width:100%;">
          <center><img src="/img/pizzaeater.jpeg" style="height:300px;width:80%;"></center>              
          </div>
    </div>
    <div class="w3-half">
        <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
                <center><div class="w3-border-0" style="height:300px;width:80%;border-radius:250px;background-color:red;color:white;">
                    <br><br><br><br><br><font size="+2"><b><center><q>Cecilia enjoying the sweetness of the Pizza</q></center></div></center></b></font>
          
                </div></center>
              </div>
          </div>
    </div>
</div>


<div class="w3-row">
  <div class="w3-half">
      <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
          <center><div class="w3-border-0 w3-blue" style="height:300px;width:80%;border-radius:200px;background-color:hotpink;"><br><br><br><br><br><font size="+2"><b><center><q>The  delicious and sumptous Puff Puff</q></center></div></center></b></font>
          </div>
      </div>
    <div class="w3-half">
      <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
         <center><img src="/img/puffpuffeater.jpeg" style="height:300px;width:80%;"></center>
      </div>
  </div> 
 </div>


 <div class="w3-row"> 
    <div class="w3-half">
        <div class="w3-light-grey" style="height:400px;width:100%;">
          <center><img src="/img/burgereater.jpeg" style="height:300px;width:80%;"></center>              
          </div>
    </div>
    <div class="w3-half">
        <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
                <center><div class="w3-border-0" style="height:300px;width:80%;border-radius:200px;background-color:black;color:white;"><br><br><br><br><br><font size="+2"><b><center><q>Tony loving the taste of the tastee burger</q></center></div></center></b></font></div></center>
              </div>
          </div>
    </div>
</div>

<div class="w3-row">
  <div class="w3-half">
      <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
          <center><div class="w3-border-0" style="height:300px;width:80%;border-radius:200px;background-color:orange;"><br><br><br><br><br><font size="+2"><b><center><q>Sharma so surprised about the much samosa he will be eating any moment from now.</q></center></div></center></b></font>
          </div>
      </div>
    <div class="w3-half">
      <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
         <center><img src="/img/samosaeater.jpeg" style="height:300px;width:80%;"></center>
      </div>
  </div> 
 </div>

  <div class="w3-row"> 
    <div class="w3-half">
        <div class="w3-light-grey" style="height:400px;width:100%;">
          <center><img src="/img/springrolleater.jpg" style="height:300px;width:80%;"></center>              
          </div>
    </div>
    <div class="w3-half">
        <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
                <center><div class="w3-border-0" style="height:300px;width:80%;border-radius:200px;background-color:darkgreen;color:white;"><br><br><br><br><br><font size="+2"><b><center><q>seonglee and gina are ready to consume the Chinese Spring Roll</q></center></div></center></b></font></div></center>
              </div>
          </div>
    </div>
</div>

<div class="w3-row">
  <div class="w3-half">
      <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
          <center><div class="w3-border-0" style="height:300px;width:80%;border-radius:200px;background-color:darkred;color:white;"><br><br><br><br><br><font size="+2"><b><center><q>Russell just loves the shape of the cake and wants to get the taste and feeling of the sugary cake</q></center></div></center></b></font>
          </div>
      </div>
    <div class="w3-half">
      <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
         <center><img src="/img/cakeeater.jpeg" style="height:300px;width:80%;"></center>
      </div>
  </div> 
 </div>

   <div class="w3-row"> 
    <div class="w3-half">
        <div class="w3-light-grey" style="height:400px;width:100%;">
          <center><img src="/img/bunseater.jpeg" style="height:300px;width:80%;"></center>              
          </div>
    </div>
    <div class="w3-half">
        <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
                <center><div class="w3-border-0" style="height:300px;width:80%;border-radius:200px;background-color:sandybrown;"><br><br><br><br><br><font size="+2"><b><center><q>John has so much buns to eat</q></center></div></center></b></font></div></center>
              </div>
          </div>
    </div>
</div>

<div class="w3-row">
  <div class="w3-half">
      <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
          <center><div class="w3-border-0" style="height:300px;width:80%;border-radius:200px;background-color:coral;"><br><br><br><br><br><font size="+2"><b><center><q>Jessica smiling because of the baked Meat pie she has in her hand</q></center></div></center></b></font>
          </div>
      </div>
    <div class="w3-half">
      <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
         <center><img src="/img/meatpieeater.jpeg" style="height:300px;width:80%;"></center>
      </div>
  </div> 
 </div>

   <div class="w3-row"> 
    <div class="w3-half">
        <div class="w3-light-grey" style="height:400px;width:100%;">
          <center><img src="/img/chinchineater.jpeg" style="height:300px;width:80%;"></center>              
          </div>
    </div>
    <div class="w3-half">
        <div class="w3-light-grey" style="height:400px;width:100%;"><br><br>
                <center><div class="w3-border-0" style="height:300px;width:80%;border-radius:200px;background-color:orange;"><br><br><br><br><br><font size="+2"><b><center><q>family eating the fried chin chin </q></center></div></center></b></font></div></center>
              </div>
          </div>
    </div>
</div>
<div class="w3-border-0" style="height:200px;width:100%;">
    
</div>
<footer class="w3-border-0" style="height:200px;width:100%;background-color:black;">
     <br>
     <center><h3 style="font-weight:bolder;color:white;font-size:20px;">Blog Developed By Nafiu</h3></center>
     <br>
     <div style="color:white;font-size:20px;"><center>Copyright &copyright 2022</center></div>
</footer>


</body>
</html>