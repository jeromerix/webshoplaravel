<!doctype html>
@extends('layout')

@section('title','welcomepage')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .logo{
                margin-left: 280px;
                display: flex;
                justify-content: left;

            }
        </style>
    </head>
    <header>
    <div class="logo"><img src="img/testlogo.png" width="200" heigth"200" alt="logowebshop"></div>
      <div class="content">
        <div class="title m-b-md">
            Buy Online
        </div>

        <div class="links">
                      @if (Route::has('login'))
                      @auth
           <a href="{{ url('/home') }}">Home</a>
                      @else
           <a href="{{ route('login') }}">Login</a>
                      @if (Route::has('register'))
           <a href="{{ route('register') }}">Register</a>
                      @endif
                      @endauth
                      @endif
            <a href="/myarticles">my articles</a>
            <a href="/addmyarticle">sell an item</a>
            <a href="/passwordreset">password reset</a>
            <a href="/profiles">users</a>
            <a href="http://127.0.0.1:8000/logout">logout</a>
        </div>
    </div></header>
    <body>
      <div class="test">
	 <h2>Hi, <b>{{Auth::user()->name}}</b>. Welcome to Buy Online</h2>
	<form action="welcome.php" method="post">
	<input type="text" name="valueToSearch" placeholder="search" class="form-control"><br>
	<div class='filterbackbutton'>
	<input type="submit" name="search" value="filter" class="btn btn-default">
	&nbsp;
	<a href='welcome.php'>reset</a>
</div><table class="table table-striped">
	<tr>
	<br><th>seller</th>
		<th>price</th>
		<th>articles</th>
		<th>info</th>
		<th>timestamp</th>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	</tr>
</table>
</form></div>
</body>
</html>
    </body>
</html>
