<title>Друзі</title>
<div id="friends_cont" class="col-md-8">
	<div id="friends_top">
		<ul>
			<li>Всі друзі</li>
			<li>Друзі онлайн</li>
			<li id="friends_search_but">Знайти друзів</li>
		</ul>
	</div>
	<div id="friends_search" class="col-md-12">
		<i class="col-md-1">S</i>
		<input type="text" placeholder="Ім'я друга" class="col-md-8">
		
		<a class="col-md-3"><label>Параметри<label><i>D</i></a>
	</div>
	<div id="friends_view">
		<?php for( $i = 0; $i < $data['counter'] - 1; $i++ ){ ?>
		<ul>
			<li class="col-md-2"><a><img src="./img/<?php echo $data['avatar'][$i]; ?>" alt="Image!" /></a></li>
			<li><a href="/my_page/user/<?php echo $data['id'][$i]; ?>" style="font-size: 18px" id="friends_view_name"><?php echo $data['name'][$i]; ?> <?php echo $data['lastName'][$i]; ?></a><br /><a>Написати повідомлення</a></li>
			<li style="float: right;"><i>D</i></li>
		</ul>
		<?php } ?>
	</div>
</div>
<div id="friends_set" class="col-md-4">
	<ul>
		<li>Мої друзі</li>
		<li>Заявки в друзі</li>
		<li>Телефонна книга</li>
		<li>Нові друзі</li>
		<li>Пошук друзів</li>
		<li>Списки друзів<i>D</i></li>
	</ul>
</div>
<div id="friends_vozm" class="col-md-4">
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