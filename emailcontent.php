orm>
					<?php
					if(isset($_POST['submit']))
					{
						$name = $_POST['yourname'];
						$email = $_POST['email'];
						$subject = $_['subject'];
						$message = $_['message'];
						
						$mailTo = "imamali_safari@hotmail.com";
						
						$headers="From: ".$mailFrom;
						$txt ="You have received an e-mail from ".$name."./n/n".$message;

						mail($mailTo, $subject, $txt, $headers);
						header("Location: index.php?mailsend")
						}