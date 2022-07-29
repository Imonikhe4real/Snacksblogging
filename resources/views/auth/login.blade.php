<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/w3.css">
    
    <title></title>
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
                        <a href="/home" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Home</a>
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
<div class="w3-border-0" style="height:200px;width:100%;">
    
</div>
<center><div class="card-header" style="font-weight: bolder;background-color:black;color:white;">{{ __('Login') }}</div>
                    <form method="POST" action="{{ route('login') }}" style="background-color:black;">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="font-weight:bolder;color:skyblue;">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="color:white;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="font-weight:bolder;color:skyblue;">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert" style="color:white;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember"style="font-weight:bolder; color:white;">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="font-weight:bolder;background-color:skyblue;color:black;">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))<br>
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
             </center>
<div class="w3-border-0" style="height:100px;width:100%;">
    
</div>
<div class="w3-row">
   <div class="w3-half"> 
    <div class="w3-card" style="height:450px;width:100%;background-color:hotpink;">
        <center><br><br><u><font size="+2"><b>DONOUGHT</b></font></u></center>
        <center><p style="font-weight:bolder;font-size:20px;">A Donought is a type of food made from leavened fried dough.it is popular in many countries and is prepared in various forms as a sweet snack that can be homemade or purchased in bakeries,supermarkets,food stalls,and franchised speciality vendors.</p></center>

    </div>
   </div>
   <div class="w3-half">
    <div class="w3-card-0" style="height:450px;width:100%;background-color:hotpink;"><br><br>
        <center><img src="/img/donought.jpeg" style="height:300px;width:80%"></center>
    <center><br><a href="/donought"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
    </div>
   </div>
</div>
<div class="w3-border-0" style="height:200px;width:100%;">
    
</div>
<div class="w3-row">
   <div class="w3-half"> 
    <div class="w3-card" style="height:450px;width:100%;background-color:yellow;">
         <center><br><br><u><font size="+2"><b>HOT DOG</b></font></u></center>

        <center><p style="font-weight:bolder;font-size: 20px;">
            A Hot dog is a food consisting of grilled or steamed sausage served in the slit of a partially sliced bun.The team hot dog can also be refer to the sausage itself.The sausage used is a wiener or a frankfurter.The names of these sausages also commonly refer to their assembled dish.
        </p></center>

    </div>
   </div>
   <div class="w3-half">
    <div class="w3-card-0" style="height:450px;width:100%;background-color:yellow;"><br><br>
        <center><img src="/img/hotdog.jpeg" style="height:300px;width:80%"></center>
    <center><br><a href="{{ route('login') }}"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
    </div>
   </div>
</div>
<div class="w3-border-0" style="height:200px;width:100%;">
    
</div>
<div class="w3-row">
   <div class="w3-half"> 
    <div class="w3-card" style="height:450px;width:100%;background-color:orangered;">
         <center><br><br><u><font size="+2"><b>FISH ROLL</b></font></u></center>
          <center><p style="font-weight:bolder;font-size: 20px;">
               Fish roll is a tasty snack with fish filling.There are two ways which it's usually prepared.e.gthe deep fried version and the baked version with the former being more popular.For the filling,any typeof fresh fish can be used but the most preferable fish for this snack  is mackerel fish(also known as Titus).
           </p></center>

            

    </div>
   </div>
   <div class="w3-half">
    <div class="w3-card-0" style="height:450px;width:100%;background-color:orangered;"><br><br>
        <center><img src="/img/fishroll.jpeg" style="height:300px;width:80%"></center>
    <center><br><a href="{{ route('login') }}"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
    </div>
   </div>
</div>
<div class="w3-border-0" style="height:200px;width:100%;">
    
</div>
<div class="w3-row">
   <div class="w3-half"> 
    <div class="w3-card" style="height:450px;width:100%;background-color:red;">
         <center><br><br><u><font size="+2"><b>PIZZA</b></font></u></center>

        <center><p style="font-weight:bolder;font-size: 20px;">
               Pizza is a dish of italian origin,consisting of a usually round,flat base of leavened wheat-based dough topped with tomatoes,cheese and often various other ingredients,which is then bakedat a high temmperature.
               traditionally in a wood-fired oven.A small pizza is sometimes called a pizzetta.           
           </p></center>

    </div>
   </div>
   <div class="w3-half">
    <div class="w3-card-0" style="height:450px;width:100%;background-color:red;"><br><br>
        <center><img src="/img/pizza.jpeg" style="height:300px;width:80%"></center>
    <center><br><a href="{{ route('login') }}"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
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
<footer class="w3-border-0" style="height:100px;width:100%;background-color:black;">
     
</footer>


</body>
</html>
