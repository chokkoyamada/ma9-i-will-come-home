<div>
イベントを作る
<div class="well">
<?php echo form_open('main/index'); ?>
<div>
イベント名
<?php echo form_input(); ?>
</div>
<div id="datetimepicker1" class="input-append date">
開始日
<input data-format="yyyy/MM/dd" type="text"></input>
<span class="add-on">
<span class="glyphicon glyphicon-calendar"></span>
</span>
</div>
<div id="datetimepicker1" class="input-append date">
終了日
<input data-format="yyyy/MM/dd" type="text"></input>
<span class="add-on">
<span class="glyphicon glyphicon-calendar"></span>
</span>
</div>
<div>
招待する友だち
<ul>
<?php foreach(array("国枝さん", "河合さん", "林さん", "田村さん") as $friend): ?>
<li>
<?php echo form_checkbox('newsletter', 'accept', false); ?>
<?php echo $friend; ?>
</li>
<?php endforeach; ?>
</ul>
</div>
<?php echo form_submit('mysubmit', "作成"); ?>
</div>
<script type="text/javascript">
  $(function() {
    $('#datetimepicker1').datetimepicker({
      language: 'en'
    });
  });
  $(function() {
    $('#datetimepicker2').datetimepicker({
      language: 'en'
    });
  });
</script>
</div>
</div>
