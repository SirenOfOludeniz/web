<!DOCTYPE html>
<html>
<head>
	<?php 
	$title = "Feuerwind Official";
	require_once "blocks/head.php"; 
	$news = getNews(3);
	?>
</head>
<body>
	<?php require_once "blocks/header.php"; ?>
	
	
	<div id="wrapper">
		<div id="leftCol">

			<?php
				for ($i=0; $i < count($news); $i++) { 
					if (i == 0) {
						echo "<div id=\"bigArticls\">";
					} else {
						echo "<div class=\"article\">";
					}
					echo '<img src="img/fenix.jpg" alt="Article1">
				<h2>Article1</h2>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
				<a href="article.php"><div class="more">Далее</div></a>
			</div>';
			if($i == 0) {
				echo "<div class=\"clear\"><br></div>";
				}
			}


			?>
		
			
			<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
			<!--
			<div id="bigArticle"> 
				<img src="img/fenix.jpg" alt="Article1">
				<h2>Article1</h2>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
				<a href="article.php"><div class="more">Далее</div></a>
			</div>
			<div class="clear"><br></div>
			<div class="article">
				<img src="img/fenix.jpg" alt="Article1">
				<h2>Article1</h2>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
				<a href="article.php"><div class="more">Далее</div></a>
			</div>
			<div class="article">
				<img src="img/fenix.jpg" alt="Article1">
				<h2>Article1</h2>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
				<a href="article.php"><div class="more">Далее</div></a>
			</div>
-->
		</div>
		<?php require_once "blocks/rightCol.php" ?>
	</div>
<?php require_once "blocks/footer.php"; ?>


</body>
</html>