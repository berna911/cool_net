<title>Max Berna</title>
<div id="page_left" class="col-md-4">
<div id="page_avatar" class="col-md-12">
	<img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found" class="col-md-12">
	<input type="button" value="Додати/змінити фото" id="page_addPhoto" />
</div>
<div id="page_reit" class="col-md-12">100%</div>
<div id="page_gifts" class="col-md-12">
	<label>Подарунки</label><br />
	<ul>
		<li class="col-md-4"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"></li>
		<li class="col-md-4"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"></li>
		<li class="col-md-4"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"></li>
	</ul>
</div>
<div id="page_friends" class="col-md-12">
	<label>Друзі </label><label style="color: #EEEEEE;"><?php echo $data['user_friends_count'] - 1; ?></label><br />
	<ul>
        <?php  
            for($i = 0; $i < $data['user_friends_count'] - 1; $i++)
            {
        ?>
		  <li class="col-md-4"><img src="./img/<?php echo $data['user_friends_avatar'][$i]; ?>" alt="Image not found"><label><?php echo $data['user_friends_name'][$i]; ?></label></li>
		<?php } ?>
	</ul>
</div>
<div id="page_friends_online" class="col-md-12">
	<label>Друзі онлайн</label>
	<ul>
		<li class="col-md-4"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"><label><?php echo $data['main_name']; ?></label></li>
		<li class="col-md-4"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"><label><?php echo $data['main_name']; ?></label></li>
		<li class="col-md-4"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"><label><?php echo $data['main_name']; ?></label></li>
		<li class="col-md-4"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"><label><?php echo $data['main_name']; ?></label></li>
		<li class="col-md-4"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"><label><?php echo $data['main_name']; ?></label></li>
		<li class="col-md-4"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"><label><?php echo $data['main_name']; ?></label></li>
	</ul>
</div>
<div id="page_interest_pages" class="col-md-12">
	<label>Цікаві сторінки</label>
	<ul>
		<li class="col-md-12"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"></li>
		<li class="col-md-12"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"></li>
		<li class="col-md-12"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"></li>
		<li class="col-md-12"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"></li>
		<li class="col-md-12"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"></li>
		<li class="col-md-12"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"></li>
	</ul>
</div>
<div id="page_photo" class="col-md-12">
	<label>Фотоальбоми</label>
	<ul>
		<li class="col-md-12"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"></li>
		<li class="col-md-12"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"></li>
	</ul>
</div>
<div id="page_video" class="col-md-12">
	<label>Відеозаписи</label>
	<ul>
		<li class="col-md-12"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"></li>
		<li class="col-md-12"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found"></li>
	</ul>
</div>	
</div>

<div id="page_right" style="float: right;" class="col-md-8">
<div id="page_info" class="col-md-12">
    <div class="col-md-12" id="page_info_top">
    	<div id="page_info_name" class="col-md-5"><?php echo $data['main_name']; ?> <?php echo $data['main_lastName']; ?></div>
    	<div id="page_info_lastOn" class="col-md-7">Був на сайті 20 хвилин назад</div>
    </div>
    <div class="col-md-12" id="page_info_status"><?php echo $data['main_status']; ?></div>
    <div id="page_info_onshow" class="col-md-12">
    	<label class="col-md-6">День народження: </label><label class="col-md-6"><?php echo $data['main_birthdate']; ?></label><br />
    	<label class="col-md-6">Сімейне положення: </label><label class="col-md-6"><?php echo $data['main_relationship']; ?></label><br />
    	<label class="col-md-6">Місто: </label><label class="col-md-6"><?php echo $data['main_city']; ?></label><br />
    	<label class="col-md-6">Місце роботи: </label><label class="col-md-6"><?php echo $data['int_deatel']; ?></label><br />
    	<label class="col-md-6">Веб-сайт: </label><label class="col-md-6"><?php echo $data['cont_sait']; ?></label><br />
    </div>
    <button id="page_info_more" class="col-md-12">Показати більше інформації</button>
    	<div id="page_info_unshow" class="col-md-12">
    	<div id="page_info_main" class="col-md-12">
    		<label class="page_info_title">Основна інформація</label><br />

    		<label class="col-md-6">Рідне місто: </label><label class="col-md-6"><?php echo $data['main_city']; ?></label><br />
    		<label class="col-md-6">Мови: </label><label class="col-md-6"><?php echo $data['main_languages']; ?></label><br />
    		<label class="col-md-6">Дідусі/бабусі: </label><label class="col-md-6"><?php echo $data['main_grandfamily']; ?></label><br />
    		<label class="col-md-6">Батьки: </label><label class="col-md-6"><?php echo $data['main_family']; ?></label><br />
    		<label class="col-md-6">Брати/Сестри: </label><label class="col-md-6"><?php echo $data['main_brSys']; ?></label><br />
    		<label class="col-md-6">Діти: </label><label class="col-md-6"><?php echo $data['main_childs']; ?></label><br />
    		<label class="col-md-6">Онуки: </label><label class="col-md-6"><?php echo $data['main_grandchilds']; ?></label><br />
    	</div>
    	<div id="page_info_cont" class="col-md-12">
    		<label class="page_info_title">Контактна інформація</label><br />

    		<label class="col-md-6">Місце знаходження: </label><label class="col-md-6"><?php echo $data['cont_country']; ?>, <?php echo $data['cont_city']; ?>, <?php echo $data['cont_rayon']; ?>, <?php echo $data['cont_metro']; ?>, <?php echo $data['cont_street']; ?> <?php echo $data['cont_name']; ?></label><br />
    		<label class="col-md-6">Телефон: </label><label class="col-md-6"><?php echo $data['cont_telephone']; ?></label><br />
    		<label class="col-md-6">Додатковий телефон: </label><label class="col-md-6"><?php echo $data['cont_secondTelephone']; ?></label><br />
    		<label class="col-md-6">Скайп: </label><label class="col-md-6"><?php echo $data['cont_skype']; ?></label><br />
    		<label class="col-md-6">Веб-сайт: </label><label class="col-md-6"><?php echo $data['cont_sait']; ?></label><br />
    	</div>
    	<div id="page_info_career" class="col-md-12">
    		<label class="page_info_title">Кар'єра</label><br />

    		<label class="col-md-6">Місце роботи: </label><label class="col-md-6"><?php echo $data['car_jobPlace']; ?>, <?php echo $data['car_start']; ?> - <?php echo $data['car_end']; ?>, <?php echo $data['car_country']; ?>, <?php echo $data['car_dol']; ?></label><br />
    	</div>
   		 <div id="page_info_obr" class="col-md-12">
    		<label class="page_info_title">Навчання</label><br />

            <label class="col-md-6">Місце рзташування: </label><label class="col-md-6"><?php echo $data['high_country']; ?>, <?php echo $data['high_city']; ?></label><br />
    		<label class="col-md-6">Внз: </label><label class="col-md-6"><?php echo $data['high_vuz']; ?></label><br />
    		<label class="col-md-6">Факультет: </label><label class="col-md-6"><?php echo $data['high_fakultet']; ?></label><br />
    		<label class="col-md-6">Кафедра: </label><label class="col-md-6"><?php echo $data['']; ?></label><br />
    		<label class="col-md-6">Форма навчання: </label><label class="col-md-6"><?php echo $data['high_study_form']; ?></label><br />
    		<label class="col-md-6">Статус: </label><label class="col-md-6"><?php echo $data['high_status']; ?></label><br />
    		<label class="col-md-6">Школа: </label><label class="col-md-6"><?php echo $data['sr_country']; ?>, <?php echo $data['sr_school']; ?>, <?php echo $data['sr_start']; ?> - <?php echo $data['sr_end']; ?>, <?php echo $data['sr_date']; ?>, <?php echo $data['sr_class']; ?>, <?php echo $data['sr_specialization']; ?></label><br />
    	</div>

    	<div id="page_info_war" class="col-md-12">
    		<label class="page_info_title">Воєнна служба</label><br />

    		<label class="col-md-6">Військова частина: </label><label class="col-md-6"><?php echo $data['war_country']; ?>, <?php echo $data['war_chast']; ?> <?php echo $data['war_start']; ?> - <?php echo $data['war_end']; ?></label>	
    	</div>

    	<div id="page_info_lifePos" class="col-md-12">
        <label class="page_info_title">Життєва позиція</label><br />

    		<label class="col-md-6">Політика: </label><label class="col-md-6"><?php echo $data['lifePos_politic']; ?></label><br />
    		<label class="col-md-6">Світогляд: </label><label class="col-md-6"><?php echo $data['lifePos_world']; ?></label><br />
    		<label class="col-md-6">Головне в житті: </label><label class="col-md-6"><?php echo $data['lifePos_life']; ?></label><br />
    		<label class="col-md-6">Головне в людях: </label><label class="col-md-6"><?php echo $data['lifePos_people']; ?></label><br />
    		<label class="col-md-6">Відношення до куріння: </label><label class="col-md-6"><?php echo $data['lifePos_smoke']; ?></label><br />
    		<label class="col-md-6">Відношення до алкогол: </label><label class="col-md-6"><?php echo $data['lifePos_alco']; ?></label><br />
    		<label class="col-md-6">Мене вдохновляє: </label><label class="col-md-6"><?php echo $data['lifePos_vdoh']; ?></label><br />
   	 	</div>
   	 	<div id="page_info_int" class="col-md-12">
   	 		<label class="page_info_title">Особиста інформація</label><br />

   	 		<label class="col-md-6">Діяльність: </label><label class="col-md-6"><?php echo $data['int_deatel']; ?></label><br />
    		<label class="col-md-6">Інтереси: </label><label class="col-md-6"><?php echo $data['int_interest']; ?></label><br />
    		<label class="col-md-6">Улюблена музика: </label><label class="col-md-6"><?php echo $data['int_music']; ?></label><br />
    		<label class="col-md-6">Улюблені фільми: </label><label class="col-md-6"><?php echo $data['int_films']; ?></label><br />
    		<label class="col-md-6">Улюблені телешоу: </label><label class="col-md-6"><?php echo $data['int_teleshow']; ?></label><br />
    		<label class="col-md-6">Улюблені книги: </label><label class="col-md-6"><?php echo $data['int_books']; ?></label><br />
    		<label class="col-md-6">Улюблені ігри: </label><label class="col-md-6"><?php echo $data['int_games']; ?></label><br />
    		<label class="col-md-6">Улюблені цитати: </label><label class="col-md-6"><?php echo $data['int_citats']; ?></label><br />
    		<label class="col-md-6">Про мене: </label><label class="col-md-6"><?php echo $data['int_about']; ?></label><br />
   	 	</div>
    </div>
</div>
<div id="page_4_photo" class="col-md-12">
	<label>Фотографії <?php echo $data['main_name']; ?></label><br />
	<img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found!" class="col-md-3">
	<img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found!" class="col-md-3">
	<img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found!" class="col-md-3">
	<img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not found!" class="col-md-3">
</div>
<div id="page_add_wall" class="col-md-12">
	<ul>
		<li class="col-md-1"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Img" /></li>
		<li class="col-md-9"><input type="text" placeholder="Додати запис"></li>
		<li class="col-md-2"><i>P</i><i>V</i><i>M</i></li>
	</ul>
</div>

<div id="page_wall" class="col-md-12">
    <?php  
    for($i = 0; $i < $data['user_wall_count']; $i++)
    {
    ?>
    <div class="page_wall_view col-md-12">
    <?php 
        if($i == 0)
        {
            echo '
                <div id="page_wall_set">
                     <ul>
                            <li>Всі записи</li>
                            <li>Записи <?php echo $data["main_name"]; ?></li>
                            <li id="page_info_wall_set_s"><i>S</i></li>
                     </ul>
                </div>
            ';
        }
    ?>
	<div id="page_wall_avatar" class="col-md-2"><img src="./img/<?php echo $data['sys_avatar']; ?>" alt="Image not"></div>
	<div id="page_wall_authDate" class="col-md-6"><?php echo $data['main_name']; ?> <?php echo $data['main_lastName']; ?> <br /> <?php echo $data['user_wall_date'][$i]; ?></div>
    <div id="page_wall_drop">D</div>
	<div id="page_wall_text" class="col-md-12"><?php echo $data['user_wall_text'][$i]; ?></div>
	<div id="page_wall_bottom" class="col-md-12">
        <ul>
            <li>Подобається <?php echo $data['user_wall_likes'][$i]; ?></li>
            <li>Коментувати</li>
            <li>А</li>
        </ul>
	</div>
    </div>
    <?php } ?>
</div>
</div>