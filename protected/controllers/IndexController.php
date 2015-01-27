<?php


	class IndexController extends Controller
	{
		
			//untuk menyatakan bahwa kita menggunakan layout
			public $layout='homepage';

			public function actionIndex()
			{
				
				/*if (isset($_POST['Data'])) {
					//ambil data dari form	
					$data = $_POST['Data'];
					//set email to
					$emailTo = $data['email'];
					//set subject
					$subject = 'Free Konsultan';
					//set message
					$message = $data['message'];
					//panggil php mailer
					$mail = Yii::app() -> Smtpmail;
					
					//add replay to (penerima membalas akan ditujukan ke email ini)
					$mail -> AddReplyTo('kuuga@shariveweb.com', '');
					//add bcc
					$mail -> AddBcc('k_kuuga@yahoo.com');
					//menyatakan email dikirim dari siapa
					$mail -> SetFrom('info@shariveweb.com', 'noreply shariveweb.com');
					//set subject
					$mail -> Subject = $subject;
					//set message untuk dikirim
					$mail -> MsgHTML($message);
					//set email address to dikirim
					$mail -> AddAddress($emailTo, "");
					//jika email tidak dikirim maka tampilkan error
					if (!$mail -> Send()) {
						echo "Mailer Error: " . $mail -> ErrorInfo;
					} else {
						//else tampilkan sukses
						echo "Message sent!";
					}
				}*/
				$this->render('index');
				
			}
	}

?>