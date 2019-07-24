<!DOCTYPE html>
<html>
<head>
	<title>masterpage</title>
	<meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <!-- Bootstrap CSS -->

   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   <!-- Site CSS -->
   <link rel="stylesheet" href="{{asset('style.css')}}">
   <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="{{asset('css/custom.css')}}">
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="{{asset('css/3dslider.css')}}" />
   
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <style type="text/css">
   	.inner-page-banner{
   		margin-top: 0px;
   		height: 650px;
   		align-items: center;
   		justify-content: center;
   		display: flex;
   	}
   	.input{
	border-radius: 50px;
	text-align: center;
	margin: 10px;
	width: 300px;
	height: 50px;
	border-width: 0px;
}
	.button_login{
		margin-top: 10px;
	margin-left: 100px;
	background-color: orange;
	border-radius: 20px;
	border-width: 0px;
	height: 30px;
	width: 100px;
	text-align: center;
}
   </style>
   </head>
<body>
	<br>
   <div class="inner-page-banner">
   		<form>
   			<input type="text" name="username" class="input" placeholder="username">
   			<br>
   			<input type="password" name="username" class="input" placeholder="password">
   			<br>
   			<input type="submit" name="" class="button_login" value="login">
   		</form>
   </div>



<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="{{asset('js/3dslider.js')}}"></script>

@yield('js')
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/6.2.4/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#reserved-urls -->

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>

</body>
</html>