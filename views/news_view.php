<title>Новини</title>
<div id="news_cont" class="col-md-8">
<div id="news_add" class="col-md-12">
		<li class="col-md-1 news_add_li"><img src="" alt="Img" /></li>
		<li class="col-md-9"><input type="text" placeholder="Додати запис"></li>
		<li class="news_add_li"><i>P</i></li>
		<li class="news_add_li"><i>V</i></li>
		<li class="news_add_li"><i>M</i></li>
	
</div>
<?php for( $i = 0; $i < $data['author_count']; $i++ ){?>
<div id="news_list" class="col-md-12">
	<div class="news_list_avatar col-md-2"><img src="/img/<?php echo $data['author_avatar'][$i]; ?>" alt="Image not"></div>
	<div id="news_list_authDate" class="col-md-8"><?php echo $data['author_name'][$i]; ?> <?php echo $data["author_lastName"][$i]; ?><br />27 червня 19:41</div>
	<div id="news_list_drop" class="col-md-1">D</div>
	<div id="news_list_text" class="col-md-12"><?php echo $data['news_text'][$i]; ?></div>
	<div id="news_list_bottom" class="col-md-12">
        <ul>
            <li>Подобається</li>
            <li>Коментувати</li>
            <li>А</li>
        </ul>
	</div>
</div>
<?php } ?>
</div>
<div id="news_right" class="col-md-4">
<div id="friends_set" class="col-md-12">
	<ul>
		<li>Новини</li>
		<li>Рекомендації</li>
		<li>Пошук</li>
		<li>Статьї</li>
		<li>Оновлення</li>
		<li>Коментарі</li>
	</ul>
</div>
<div id="friends_vozm" class="col-md-12">
	<label>Можливі друзі</label><br />
	<ul>
		<li>
			<ul>
				<li class="col-md-3"><img src="" alt="Im!" /></li>
				<li>Max berna <a><br /><a>Додати в друзі</a></li>
				<li></li>
			</ul>
		</li>
		<li>
			<ul>
				<li class="col-md-3"><img src="" alt="Im!" /></li>
				<li>Max berna<br /><a>Додати в друзі</a></li>
			</ul>
		</li>
		<li>
			<ul>
				<li class="col-md-3"><img src="" alt="Im!" /></li>
				<li>Max berna<br /><a>Додати в друзі</a></li>
			</ul>
		</li>
		<li>
			<ul>
				<li class="col-md-3"><img src="" alt="Im!" /></li>
				<li>Max berna<br /><a>Додати в друзі</a></li>
			</ul>
		</li>
		<li>
			<ul>
				<li class="col-md-3"><img src="" alt="Im!" /></li>
				<li>Max berna<br /><a>Додати в друзі</a></li>
			</ul>
		</li>
		<li>
			<ul>
				<li class="col-md-3"><img src="" alt="Im!" /></li>
				<li>Max berna<br /><a>Додати в друзі</a></li>
			</ul>
		</li>
	</ul>
	<a class="col-md-12" id="friends_view_all_but">Показати всіх <i>N</i></a>
</div>
</div>