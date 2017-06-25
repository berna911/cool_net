<div id="page_left" class="col-md-4">
<div id="page_avatar" class="col-md-12">
	<img src="./img/header.jpg" alt="Image not found" class="col-md-12">
	<input type="button" value="Додати/змінити фото" id="page_addPhoto" />
</div>
<div id="page_reit" class="col-md-12">100%</div>
<div id="page_gifts" class="col-md-12">
	<label>Подарунки</label><br />
	<ul>
		<li class="col-md-4"><img src="" alt="Image not found"></li>
		<li class="col-md-4"><img src="" alt="Image not found"></li>
		<li class="col-md-4"><img src="" alt="Image not found"></li>
	</ul>
</div>
<div id="page_friends" class="col-md-12">
	<label>Друзі </label><br />
	<ul>
		<li class="col-md-4"><img src="" alt="Image not found"></li>
		<li class="col-md-4"><img src="" alt="Image not found"></li>
		<li class="col-md-4"><img src="" alt="Image not found"></li>
		<li class="col-md-4"><img src="" alt="Image not found"></li>
		<li class="col-md-4"><img src="" alt="Image not found"></li>
		<li class="col-md-4"><img src="" alt="Image not found"></li>
	</ul>
</div>
<div id="page_friends_online" class="col-md-12">
	<label>Друзі онлайн</label>
	<ul>
		<li class="col-md-4"><img src="" alt="Image not found"></li>
		<li class="col-md-4"><img src="" alt="Image not found"></li>
		<li class="col-md-4"><img src="" alt="Image not found"></li>
		<li class="col-md-4"><img src="" alt="Image not found"></li>
		<li class="col-md-4"><img src="" alt="Image not found"></li>
		<li class="col-md-4"><img src="" alt="Image not found"></li>
	</ul>
</div>
<div id="page_interest_pages" class="col-md-12">
	<label>Цікаві сторінки</label>
	<ul>
		<li class="col-md-12"><img src="" alt="Image not found"></li>
		<li class="col-md-12"><img src="" alt="Image not found"></li>
		<li class="col-md-12"><img src="" alt="Image not found"></li>
		<li class="col-md-12"><img src="" alt="Image not found"></li>
		<li class="col-md-12"><img src="" alt="Image not found"></li>
		<li class="col-md-12"><img src="" alt="Image not found"></li>
	</ul>
</div>
<div id="page_photo" class="col-md-12">
	<label>Фотоальбоми</label>
	<ul>
		<li class="col-md-12"><img src="" alt="Image not found"></li>
		<li class="col-md-12"><img src="" alt="Image not found"></li>
	</ul>
</div>
<div id="page_video" class="col-md-12">
	<label>Відеозаписи</label>
	<ul>
		<li class="col-md-12"><img src="" alt="Image not found"></li>
		<li class="col-md-12"><img src="" alt="Image not found"></li>
	</ul>
</div>	
</div>

<div id="page_right" style="float: right;" class="col-md-8">
<div id="page_info" class="col-md-12">
    <div class="col-md-12" id="page_info_top">
    	<div id="page_info_name"><?php echo $data['main_name']; ?> <?php echo $data['main_lastName']; ?></div>
    	<div id="page_info_lastOn">Був на сайті 20 хвилин назад</div>
    </div>
    <div class="col-md-12" id="status">Hi guys!!!</div>
    <div id="page_info_onshow">
    	<label>День народження: </label><label><?php echo $data['']; ?></label><br />
    	<label>Сімейне положення: </label><label><?php echo $data['']; ?></label><br />
    	<label>Місто: </label><label><?php echo $data['']; ?></label><br />
    	<label>Місце роботи: </label><label><?php echo $data['']; ?></label><br />
    	<label>Веб-сайт: </label><label><?php echo $data['']; ?></label><br />
    </div>
    <button id="page_info_more" class="col-md-12">Показати більше інформації</button>
    	<div id="page_info_unshow">
    	<div id="page_info_main">
    		<label>Основна інформація</label>

    		<label>Рідне місто: </label><label><?php echo $data['']; ?></label><br />
    		<label>Мови: </label><label><?php echo $data['']; ?></label><br />
    		<label>Дідусі/бабусі: </label><label><?php echo $data['']; ?></label><br />
    		<label>Батьки: </label><label><?php echo $data['']; ?></label><br />
    		<label>Брати/Сестри: </label><label><?php echo $data['']; ?></label><br />
    		<label>Діти: </label><label><?php echo $data['']; ?></label><br />
    		<label>Онуки: </label><label><?php echo $data['']; ?></label><br />
    	</div>
    	<div id="page_info_cont">
    		<label>Контактна інформація</label>

    		<label>Місце знаходження: </label><label><?php echo $data['']; ?></label><br />
    		<label>Телефон: </label><label><?php echo $data['']; ?></label><br />
    		<label>Додатковий телефон: </label><label><?php echo $data['']; ?></label><br />
    		<label>Скайп: </label><label><?php echo $data['']; ?></label><br />
    		<label>Веб-сайт: </label><label><?php echo $data['']; ?></label><br />
    	</div>
    	<div id="page_info_career">
    		<label>Кар'єра</label>

    		<label>Місце роботи: </label><label><?php echo $data['']; ?></label><br />
    	</div>
   		 <div id="page_info_obr">
    		<label>Навчання</label>

    		<label>Внз: </label><label><?php echo $data['']; ?></label><br />
    		<label>Факультет: </label><label><?php echo $data['']; ?></label><br />
    		<label>Кафедра: </label><label><?php echo $data['']; ?></label><br />
    		<label>Форма навчання: </label><label><?php echo $data['']; ?></label><br />
    		<label>Статус: </label><label><?php echo $data['']; ?></label><br />
    		<label>Школа: </label><label><?php echo $data['']; ?></label><br />
    	</div>

    	<div id="page_info_war">
    		<label>Воєнна служба</label>

    		<label>Військова частина: </label><label><?php echo $data['']; ?></label>	
    	</div>

    	<div id="page_info_lifePos">
    		<label>Політика: </label><label><?php echo $data['']; ?></label><br />
    		<label>Світогляд: </label><label><?php echo $data['']; ?></label><br />
    		<label>Життєва позиція: </label><label><?php echo $data['']; ?></label><br />
    		<label>Головне в житті: </label><label><?php echo $data['']; ?></label><br />
    		<label>Головне в людях: </label><label><?php echo $data['']; ?></label><br />
    		<label>Відношення до куріння: </label><label><?php echo $data['']; ?></label><br />
    		<label>Відношення до алкоголю: </label><label><?php echo $data['']; ?></label><br />
    		<label>Що вдохновляє: </label><label><?php echo $data['']; ?></label><br />
   	 	</div>
   	 	<div id="page_info_int">
   	 		<label>Особиста інформація</label>

   	 		<label>Діяльність: </label><label><?php echo $data['']; ?></label><br />
    		<label>Інтереси: </label><label><?php echo $data['']; ?></label><br />
    		<label>Улюблена музика: </label><label><?php echo $data['']; ?></label><br />
    		<label>Улюблені фільми: </label><label><?php echo $data['']; ?></label><br />
    		<label>Улюблені телешоу: </label><label><?php echo $data['']; ?></label><br />
    		<label>Улюблені книги: </label><label><?php echo $data['']; ?></label><br />
    		<label>Улюблені ігри: </label><label><?php echo $data['']; ?></label><br />
    		<label>Улюблені цитати: </label><label><?php echo $data['']; ?></label><br />
    		<label>Про мене: </label><label><?php echo $data['']; ?></label><br />
   	 	</div>
    </div>
</div>
<div id="page_4_photo" class="col-md-12">
	<label>Фотографії <?php echo $data['main_name']; ?></label><br />
	<img src="" alt="Image not found!" class="col-md-3">
	<img src="" alt="Image not found!" class="col-md-3">
	<img src="" alt="Image not found!" class="col-md-3">
	<img src="" alt="Image not found!" class="col-md-3">
</div>
<div id="page_add_wall" class="col-md-12">
	<ul>
		<li><img src="" alt="Img" /></li>
		<li><input type="text" placeholder="Додати запис"></li>
		<li><i>P</i></li>
		<li><i>V</i></li>
		<li><i>M</i></li>
	</ul>
</div>
<div id="page_wall_set">
	<ul>
		<li>Всі записи</li>
		<li>Записи <?php echo $data['main_name']; ?></li>
		<li><i>S</i></li>
	</ul>
</div>
<div id="page_wall" class="col-md-12">
	<div class="page_wall_avatar"><img src="" alt="Image not"></div>
	<div id="page_wall_auth"><?php echo $data['main_name']; ?> <?php echo $data['main_lastName']; ?></div>
	<div id="page_wall_text">Запис</div>
	<div id="page_wall_likes">Подобається <?php echo $data['']; ?></div>
	<div id="page_wall_comments">Коментувати</div>
	<div id="page_wall_toMe"><i>A</i></div>
</div>
</div>