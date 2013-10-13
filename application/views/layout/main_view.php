<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title><?php echo $title; ?></title>
	<style type='text/css'>
	body {
		min-height: 2000px;
		padding-top: 70px;
	}
	.icon-color-blue, .icon-color-blue a {
	  color: #0080ff;
	}
	.icon-color-red, .icon-color-red a {
	  color: #ff0000;
	}
	.icon-color-grey, .icon-color-grey a {
	  color: #808080;
	}
	</style>

	<!-- Bootstrap core CSS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

	<link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<script src="/js/bootstrap-datetimepicker.min.js"></script>
  </head>
  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/main/"><?php echo $title; ?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li 
			<?php 
				if($this->uri->segment(1) === 'main' && ($this->uri->segment(2) === 'index' || $this->uri->segment(2) === false))
				{
					echo "class='active'";
				} 
			?>
			><a href="/main/">トップ</a>
			</li>
            <li 
			<?php 
				if($this->uri->segment(1) === 'main' && $this->uri->segment(2) === 'create_schedule')
				{
					echo "class='active'";
				} 
			?>
			><a href="/main/create_schedule">帰る日を入力</a></li>
            <li
			<?php 
				if($this->uri->segment(1) === 'main' && $this->uri->segment(2) === 'create_event')
				{
					echo "class='active'";
				} 
			?>
			><a href="/main/create_event">イベントを作る</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/main/select_week/">週選択</a></li>
            <li
			<?php 
				if($this->uri->segment(1) === 'account')
				{
					echo "class='active'";
				} 
			?>
			><a href="/account/">アカウント編集</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
<div id="content_header">
<?php echo $content_header; ?>
</div>
<div id="content_body">
<?php echo  $content_body; ?>
</div>
<div id="content_footer">
<?php echo $content_footer; ?>
</div>
    </div> <!-- /container -->

  </body>
</html>
</body>
</html>
