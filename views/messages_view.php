<title>Повідомлення</title>
<div id="messages_cont" class="col-md-8">
   <?php for( $i = 0; $i < $data["counter"]; $i++ ){ ?>
	<div class="messages_list">
		<li><img src="/img/<?php echo $data['avatar'][$i]; ?>" alt="Img" /></li>
		<li><?php echo $data["name"][$i]; ?></li>
		<li><?php echo $data["date"][$i]; ?></li><br />
		<li style="margin-left: 35px;"><?php echo $data["text"][$i]; ?></li>
	</div>
   <?php } ?>	

	<div id="messages_new_message" class="col-md-12">
		<li class="col-md-1">P</li></textarea>
		<li class="col-md-10"><textarea placeholder="Пишіть повідомлення" rows="2" id="messages_new_message_textarea"></textarea></li>
		<li class="col-md-1">L</li>
		<li class="col-md-3" style="float: right;"><button idd="<?php echo $data['dialog_id']; ?>" id="messages_new_message_button_li">Надіслати</button></li>
	</div>
</div>

<div id="messages_set" class="col-md-4">
	<ul>
		<li>Всі повідомлення</li>
		<li>Непрочитані</li>
		<li>Важливі повідомлення</li>
		<li>Denia Shatilovich</li>
	</ul>
</div>