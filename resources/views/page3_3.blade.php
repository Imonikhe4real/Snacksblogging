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
<div class="w3-border-0" style="height:50px;width:100%;background-color:black;"></div>
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
    <center><br><a href="/cake"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
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
    <center><br><a href="/buns"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
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
    <center><br><a href="/meatpie"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
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
    <center><br><a href="/chinchin"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
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
