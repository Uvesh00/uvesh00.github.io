<?php
		if(isset($_POST['submit'])){
			$to = "uveshmemon.um777@gmail.com";
			$subject = $_POST['subject'];
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$from = $_POST['email'];
			$headers = "From : $from";

			mail($to, $subject, $name, $phone, $headers);

			echo "Mail Sent!";
		}
	?>