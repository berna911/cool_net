<title>Діалоги</title>
<?php 
	//echo "<pre style='color: #fff;'>", print_r(DB::getInstance('SELECT main_name, main_lastName, sys_avatar FROM us_main WHERE id = 4') -> results()), "</pre>";
 ?>
<div id="dialogs_cont" class="col-md-8">
	<div id="dialogs_search" class="col-md-12">
			<li class="col-md-1"><i>S</i></li>
			<li class="col-md-10"><input type="text" placeholder="Пошук"></li>
			<li class="col-md-1"><i>I</i></li>
	</div>
	<?php for( $i = 0; $i < $data["counter"]; $i++ ){ ?>
	<div id="dialogs_list" class="col-md-12">
			<li class="dialogs_list_my_ava col-md-3"><img class="col-md-12" src="/img/<?php echo $data['mes_avatar'][$i]; ?>" alt="Image" /></li>
			<a href="/messages/default/<?php echo $data['dialog_id'][$i]; ?>" class="col-md-7"><li class="col-md-9"><?php echo $data["mes_name"][$i]; ?> <?php echo $data["mes_lastName"][$i]; ?></li>
			
			<li class="col-md-12" style="margin-left: -20px; margin-top: 5px;"><?php echo $data["mes_text"][$i]; ?></li></a>
			<li class="col-md-3" style="font-size: 10px; color: gray;"><?php echo $data["mes_date"][$i]; ?></li>
	</div>
	<?php } ?>
</div>

<div id="dialogs_set" class="col-md-4">
	<ul>
		<li>Всі повідомлення</li>
		<li>Непрочитані</li>
		<li>Важливі повідомлення</li>
	</ul>
</div>