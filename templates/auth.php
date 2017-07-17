<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Авторизація</title>
	<link rel="stylesheet" href="/libs/bootstrap.min.css">
	<link rel="stylesheet" href="/css/auth.css" />
</head>
<body>
	<div id="top_header" class="container-fluid">
       	 <div id="top_header_logo"><img src="" alt="Image not found!"></div>
       	 <div id="top_header_menu">
       	 	<ul>
       	 		<li><a href="friends_search">Реєстрація</a></li>
       	 	</ul>
       	 </div>
    </div>
    <div style="margin: auto; width:66.66666667%" id="bod">
		 <div id="left_menu" class="col-md-3">
		 	<label class="col-md-12">Ваш логін або e-mail</label><input id="auth_login" class="col-md-12" type="text" placeholder="Логін">
		 	<label class="col-md-12">Ваш пароль</label><input id="auth_pass" class="col-md-12" type="password" placeholder="Пароль">
		 	<a href="" class="col-md-12" id="remind_pass">Забули пароль</a>
		 	<button class="col-md-12" id="auth_but">Увійти</button>
		 </div>
		 <div class="col-md-8" id="bod">
			<?php include 'views/'.$content_view; ?>
		 </div>	
	   </div>

	<script src="/libs/jquery.js"></script>
	<script src="/js/auth.js"></script>
</body>
</html>