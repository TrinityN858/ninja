<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<script type="text/javascript" href=""></script>
	<style type="text/css">
		#goldcount{
			margin: 0px auto;
			width:960;
		}
		#gold count span{
			border: 1px solid black;
			display: inline-block;
			width: 100px;
			padding: 5px;
		} 
		#location{
			border: 1px solid red;
			width: 960px;
			margin: 0px auto;
		}
		.box{
			border: 1px solid blue;
			display: inline-block;
			width: 200px;
			margin-right: 20px;
			min-height: 200px;
			text-align: center;

		}
		#activites{
			width: 960px;
			margin: 0px auto;
		}
		.log{
			border: 1px solid green;
			min-height: 200px;
		}
	</style>
	<title>Ninja Gold Game</title>
</head>
<body>
<h1>I want to play a game....</h1>
<img src="">
<div id="goldcount">
<p>Your gold:<span><?=$this->session->userdata('goldAmount')?></span></p>
</div>

<div id="location">
	<div class="box">
		<h3>farm</h3>
		<p>(earn 10 to 20 gold)</p>
		<form action="farm" method="get"><button>find gold</button></form>
	</div>
	<div class="box">
		<h3>cave</h3>
		<p>(earn 5 to 10 gold)</p>
		<form action="cave" method="get"><button>find gold</button></form>
	</div>
	<div class="box">
		<h3>house</h3>
		<p>(earn 2 to 5 gold)</p>
		<form action="house" method="get"><button>find gold</button></form>
	</div>
	<div class="box">
		<h3>casino</h3>
		<p>(earn or loses 0-50 gold)</p>
		<form action="casino" method="get"><button>find gold</button></form>
	</div>

	

</div>
<div id="activities">
	<p>Activities</p>
	<div class="log">
		<?php
			// $reverse=Array_reverse($this->session->userdata('activities'));
			foreach($activities as $activity){
				// echo $activities . '<br>';
			?>
			<p><?= $activity?></p>
			<?php
			}
		?>
	</div>
</div>

</body>
</html>