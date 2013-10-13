<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title><?php echo $title; ?></title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

	<link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<script src="/js/bootstrap-datetimepicker.min.js"></script>
	<style type='text/css'>
	body {
		padding-top: 50px;
		background-color: #fdf0d2;
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
	.customcolor-header {
	  background-color: #F5B229;
      padding-bottom: 0px;
	  border-width: 0px;
	}
	.customcolor-header a:visited {
		color: white;
	}
	.customcolor-header a:link {
		color: white;
	}
	.customcolor-header a:hover {
		color: white;
	}
	.customcolor-subheader {
	  background-color: #918879;
	  display:block;
	  padding: -20px,-20px,-20px,-20px;
      margin: -20px,-20px,-20px,-20px;
      width:1680px;
	  height:40px;
	  box-sizing: border-box; 
	  color: white;
	}
	.customcolor-subheader a:visited {
		color: white;
	}
	.customcolor-subheader a:link {
		color: white;
	}
	.customcolor-subheader a:hover {
		color: white;
	}
	.customcolor-event {
	  background-color: #89C22B;
	}
	.customcolor-calendar {
	  background-color: #FDFDD2;
	}
	.customcolor-font {
	  background-color: #38230D;
	}
	.customcolor-background {
	  background-color: #fdf0d2;
	}
	</style>

  </head>
  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top customcolor-header">
      <div class="container customcolor-header">
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
<div id="content_body">
<?php echo  $content_body; ?>
</div>
  </body>
</html>
</body>
</html>
