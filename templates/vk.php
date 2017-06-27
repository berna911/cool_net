<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Главная</title>
	<link rel="stylesheet" href="./libs/bootstrap.min.css">
	<link rel="stylesheet" href="./css/vk.css">
</head>
<body>
       <div id="top_header" class="container-fluid">
       	 <div id="top_header_logo"><img src="" alt="Image not found!"></div>
       	 <div id="top_header_menu">
       	 	<ul>
       	 		<li><a>Пошук</a></li>
       	 		<li><a>Карти</a></li>
       	 		<li><a>Підтримка</a></li>
       	 		<li><a>Вийти</a></li>
       	 	</ul>
       	 </div>
       </div>
       <div style="margin: auto; width:66.66666667%" id="bod">
		 <div id="left_menu" class="col-md-2">
		 	<ul>
		 		<a href="/my_page"><li>Моя сторінка</li></a>
		 		<a href="/news"><li>Новини</li></a>
		 		<a href="/dialogs"><li>Повідомлення</li></a>
		 		<a href="/friends"><li>Друзі</li></a>
		 		<a href=""><li>Спільноти</li></a>
		 		<a href=""><li>Фотографії</li></a>
		 		<a href=""><li>Музика</li></a>
		 		<a href=""><li>Відео</li></a>
		 		<a href=""><li>Ігри</li></a>
		 		<a href=""><li>Налаштування</li></a>
		 	</ul>
		 </div>
		 <div class="col-md-9" id="bod">
			<?php include 'views/'.$content_view; ?>
		 </div>	
	   </div>	
	<script src="./libs/jquery.js"></script>
	<script src="./js/basic.js"></script>
</body>
</html>