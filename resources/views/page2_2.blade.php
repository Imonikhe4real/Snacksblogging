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
    <center><br><a href="/puffpuff"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;text-decoration:none;"><br>Comment</div></a></center>
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
    <center><br><a href="/burger"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
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
    <center><br><a href="/samosa"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
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
    <center><br><a href="/springroll"><div class="w3-border" style="height:50px;width:300px;background-color:black;border-radius:20px;font-weight:bolder;color:white;"><br>Comment</div></a></center>
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
