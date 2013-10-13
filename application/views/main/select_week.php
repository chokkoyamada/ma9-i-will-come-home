<div>
週選択
<div class="well">
<?php echo form_open('main/submit_week'); ?>
<div id="datetimepicker1" class="input-append date">
<input data-format="yyyy/MM/dd" type="text"></input>
<span class="add-on">
<span class="glyphicon glyphicon-calendar"></span>
</span>
</div>
<?php echo form_submit('mysubmit', "移動する"); ?>
</div>
<script type="text/javascript">
  $(function() {
    $('#datetimepicker1').datetimepicker({
      language: 'en'
    });
  });
</script>
</div>
