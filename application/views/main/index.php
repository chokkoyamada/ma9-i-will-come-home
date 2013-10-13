<div class='container customcolor-subheader'>
	<span class="glyphicon glyphicon-circle-arrow-up">前の週へ</span>
</div>
<div class='container'>
<?php for($x=0; $x<7; $x++): ?>
	<hr>
	<div class="row">
		<div class="col-xs-2 col-md-1">
			10/<?php echo $x + 1 . "(月)"; ?>
		</div>

		<div class="col-xs-4 col-md-2">
			<?php if($me[$x]): ?>
			<span class="glyphicon glyphicon-user icon-color-blue"></span>
			<?php endif; ?>
			<?php foreach($users[$x] as $user): ?>
			<a href='/user/'><span class="glyphicon glyphicon-user <?php if($user['friend']){echo 'icon-color-red';}else{echo 'icon-color-grey';} ?>"></span></a>
			<?php endforeach; ?>
		</div>

		<div class="col-xs-4 col-md-2">
			<?php foreach($events[$x] as $event): ?>
			<a href='/event/'><span class="glyphicon glyphicon-glass <?php if($event['public']){echo 'icon-color-red';}else{echo 'icon-color-grey';} ?>"></span></a>
			<?php endforeach; ?>
		</div>
	</div>
<?php endfor; ?>
</div>
<hr />
<div class='container customcolor-subheader'>
	<span class="glyphicon glyphicon-circle-arrow-down">次の週へ</span>
</div>
