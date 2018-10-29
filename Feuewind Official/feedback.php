<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	<?php 
	$title = "Написать нам";
	require_once "blocks/head.php"; 
	?>
	<!--<script src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
	<!--<script type="text/javascript" src="js\jquery-3.3.1.js"></script>-->
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready (function () {
			$("#done").click (function() {
			    $('#messageShow').hide();
				var name = $("#name").val();
				var email = $("#email").val();
				var subject = $("#subject").val();
				var message = $("#message").val();
				var fail = "";
				if (name.length < 3) {
					fail = "Имя меньше 3 символов";
				} else if (email.split('@').length - 1 == 0 || email.split('.').length - 1 == 0) {
					fail = "Некорректный email";
				} else if (subject.length < 5) {
					fail = "Тема сообщения не менее 5 символов";
				} else if (message.length < 5) {
					fail = "сообщение не менее 5 символов";
				}
				if (fail != "") {
					$('#messageShow').html (fail + "<div class='clear'><br></div>");
					$('#messageShow').show ();
					return false;
				}
				$.ajax({
                    url: 'ajax/feedback.php',
                    type: 'POST',
                    cache: false,
                    data: {'name': name, 'email': email, 'subject': subject, 'message': message},
                    dataType: 'html',
                    success: function (data) {

                            $('#messageShow').html(data + "<div class='clear'><br></div>");
                            $('#messageShow').show();

                    }
                });
			});
		});
	</script>
</head>
<body>
	<?php require_once "blocks/header.php"; ?>
	
	
	<div id="wrapper">
		<div id="leftCol">
            <!--<form name="feedback" action="ajax/feedback.php" method="post">-->
			<input type="text" placeholder="Имя" id="name" name="name"><br>
			<input type="text" placeholder="email" id="email" name="email"><br>
			<input type="text" placeholder="Тема сообщения" id="subject" name="subject"><br>
			<textarea name="message" placeholder="Введите ваше сообщение" id="message"></textarea><br>
			<div id="messageShow"></div>
			<input type="button" name="done" id="done" value="Отправить">
            <!--</form>-->
		

		</div>
		<?php require_once "blocks/rightCol.php" ?>
	</div>
<?php require_once "blocks/footer.php"; ?>


</body>
</html>