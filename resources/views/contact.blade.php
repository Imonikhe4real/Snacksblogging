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
<div class="w3-border-0" style="height:800px;width:100%;background-color:darkred;">
      <br><br> <center> <b style="color:white">@if( $message  = Session::get('success'))
 <div class="alert alert-success">
     <p>{{ $message }}</p>
 </div>
 @endif</b></center>
        <center>
        <form action="/contact" method="post">
             @csrf
             <p><center><b><font color="white"><br><br>CONTACT US</font></b></center></p>
             <table style="color:white;font-weight:bolder;">
                  <tr>
                      <td>Firstname:</td>
                      <td><input type="text" name="firstname" placeholder="type firstname" required></td>
                  </tr>
                   <tr>
                      <td>Lastname:</td>
                      <td><input type="text" name="lastname" placeholder="type lastname" required></td>
                  </tr>
                   <tr>
                      <td>Email:</td>
                      <td><input type="text" name="email" placeholder="type email" required></td>
                  </tr>
                   <tr>
                      <td>Message:</td>
                      <td><textarea name="message" cols="25" rows="10"></textarea></td>
                  </tr>
                    <tr>
                      <center><td><input type="submit" name="submit" value="SEND"></td></center>
                  </tr>

             </table>
        </form>
      </center>
</div>
<div class="w3-border-0" style="height:400px;width:100%;">
    
</div>
<footer class="w3-border-0" style="height:200px;width:100%;background-color:black;">
     <br>
     <center><h3 style="font-weight:bolder;color:white;font-size:20px;">Blog Developed By Nafiu</h3></center>
     <br>
     <div style="color:white;font-size:20px;"><center>Copyright &copyright 2022</center></div>
</footer>


</body>
</html>

