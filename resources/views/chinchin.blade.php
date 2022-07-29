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
<div class="w3-border-0" style="height:50px;width:100%;background-color:black;">
    <a href="/dashboard" style="color:white;font-weight:bolder;text-decoration:none;">BACK TO DASHBOARD</a>

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
<div class="w3-border-0" style="height:400px;width:100%;">
    
</div>
<div class="w3-border-0" style="height:1000px;width:100%;background-color:orange;">
    <center><br><b><font size="+1">CHIN CHIN </font></b></center>
     <br><br>
    <center><img src="/img/chinchin2.jpeg" style="height:300px;width:80%"></center>
    <br><br>
    <center>
@if( $message  = Session::get('success'))
 <div class="alert alert-success">
     <p>{{ $message }}</p>
 </div>
 @endif
    <form action="/chinchin" method="post">
       @csrf
       <h1>WRITE YOUR COMMENT HERE </h1>
      <table>
        <tr>
            <td>Fullnames</td>
            <td><input type="text" name="fullnames"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone"></td>
        </tr> 
        <tr>
            <td>Snacks name</td>
            <td><select name="snacks">
                <option value="chinchin">chinchin</option>
            </select></td>
        </tr>
        <tr>
        <tr>
            <td>Comment</td>
            <td><textarea name="comment" cols="30" rows="10"></textarea></td>
        </tr>           
        <tr>
            <td><input type="submit" name="SEND" value="SEND" style="font-weight:bolder;background-color:black;color:white;display:block;"></td>
        </tr> 

      </table>

    </form>

</center>
</div>
<center>
    @foreach( $rows as $row )
<br><br>
  Fullnames : {{ $row->fullnames }}<br>
  Email : {{ $row->email }}<br>
  Snacks : {{ $row->snacks }}<br>
  Comment : {{ $row->comment }}<br> 
  Posted at {{ $row->created_at }}<br>
@endforeach
</center>

</body>
</html>