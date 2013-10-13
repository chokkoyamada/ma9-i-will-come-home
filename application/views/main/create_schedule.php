<div>
帰省日を選択してください
<div class="well">
<?php echo form_open('main/submit_schedule'); ?>

<div id="datetimepicker1" class="input-append date">
開始日
<input data-format="yyyy/MM/dd" type="text"></input>
<span class="add-on">
<span class="glyphicon glyphicon-calendar"></span>
</span>
</div>

<div id="datetimepicker2" class="input-append date">
終了日
<input data-format="yyyy/MM/dd" type="text"></input>
<span class="add-on">
<span class="glyphicon glyphicon-calendar"></span>
</span>
</div>

<?php echo form_submit('mysubmit', "この日に帰省する"); ?>
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
