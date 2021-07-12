<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
	<header class="header">
		<div class="btn-menu">
			<i class="fa fa-bars fa-lg">&nbspMENU</i>
		</div>

		<nav class="menu">
			<ul>
				<li>
					<a href="index">
						<img src="css/images/seta-menu.png">
						Home
					</a>
				</li>
				<div class="traco-separa"></div>
				<li>
					<a href="extincao">
						<img src="css/images/seta-menu.png">
						Extinção
					</a>
				</li>
				<div class="traco-separa"></div>
				<li>
					<a href="mudancas-climaticas">
						<img src="css/images/seta-menu.png">
						Mudanças Climáticas
					</a>
				</li>
			</ul>
		</nav>

		<!-- JQUERY MENU MOBILE-->
		<script>
			$(".btn-menu").click(function() {
			    $(".menu").toggle(400);
			});
		</script>
	</header>