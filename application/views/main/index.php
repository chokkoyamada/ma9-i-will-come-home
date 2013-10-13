<div>
<span class="glyphicon glyphicon-circle-arrow-up">前の週へ</span>
</div>

<?php for($x=1; $x<8; $x++): ?>
<hr>

<div class="row">
  <div class="col-xs-3 col-md-1">
	10/<?php echo $x . "(月)"; ?>
  </div>
  <div class="col-xs-4 col-md-2">
<span class="glyphicon glyphicon-user icon-color-red"></span>
<span class="glyphicon glyphicon-user icon-color-red"></span>
<span class="glyphicon glyphicon-user icon-color-grey"></span>
<span class="glyphicon glyphicon-user icon-color-grey"></span>

  </div>
  <div class="col-xs-4 col-md-2">
<span class="glyphicon glyphicon-glass icon-color-red"></span>
<span class="glyphicon glyphicon-glass icon-color-red"></span>
<span class="glyphicon glyphicon-glass icon-color-grey"></span>
</div>
</div>

<?php endfor; ?>
<hr />
<div>
<span class="glyphicon glyphicon-circle-arrow-down">次の週へ</span>
</div>
