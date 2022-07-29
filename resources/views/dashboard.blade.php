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
<div class="w3-border-0" style="height:50px;width:100%;background-color:black;"><br>
    <marquee direction="left" style="color:white;font-weight:bolder;">WELCOME TO NAFIU'S SNACK BLOG.COM</marquee>
</div>
<div class="container w3-gray">
    <div class="row justify-content-center w3-gray">
        <div class="col-md-8 w3-gray">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div> 

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}<br>
                    <div class="w-border-o" style="height:100px;width:100%;">
<a href="#"> {{ Auth::user()->name }}</a><br>
<a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
 {{ __('Logout') }}
</a>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>
</div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<div class="w3-border-0" style="height:300px;width:100%;">
    
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
    <center><br><a href="/hotdog"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
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
    <center><br><a href="/fishroll"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
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
    <center><br><a href="/pizza"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
    </div>
   </div>
</div>
<div class="w3-border-0" style="height:200px;width:100%;">
    
</div>
<div class="w3-bar">
    <div class="w3-button">&laquo;</div>
    <a href="/dashboard" class="w3-button w3-hover-green">1</a>
    <a href="/page2_2" class="w3-button w3-hover-red">2</a>
    <a href="/page3_3" class="w3-button w3-hover-orange">3</a>
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
