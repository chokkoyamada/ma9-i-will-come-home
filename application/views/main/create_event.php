<div>
イベントを作る
<div class="well">
<?php echo form_open('main/submit_event'); ?>
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
招待する人

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
