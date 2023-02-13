<?php
	ini_set('display_errors', 1);

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$servername = "localhost";
		$username = "simada";
		$password = "xB1mW6oU5pgB9b";
		 
		// Connection
		$conn = mysqli_connect($servername, $username, $password);
		if (!$conn) {
		  die("Connection failed: "
			  . mysqli_connect_error());
		}
				
		$result = $conn->query("INSERT INTO `simada`.`orders` (`date`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES ('" . $_POST['datetimes'] . "', '" . $_POST['name'] . "', '" . $_POST['phone'] . "', '" . $_POST['email'] . "', NULL, NULL);", MYSQLI_USE_RESULT);
	    
// 	    $message = '';
// 	    
// 	    if($_POST['action'] == 'steps'){	    
// 		    $message .= '<p><b>Сфера деятельности:</b></p>';
// 		    $message .= $args['post']['radioinput'];
// 			
// 			$message .= '<p><b>Cистема налогообложения:</b></p>';
// 		    $message .= $args['post']['radioinput2'];
// 			
// 			$message .= '<p><b>Дополнительные модули к кассе:</b></p>';
// 			if(isset($args['post']['Модуль «ЕГАИС»'])){
// 				$message .= '<p>Модуль «ЕГАИС»</p>';
// 			}
// 			if(isset($args['post']['Модуль «Маркировка»'])){
// 				$message .= '<p>Модуль «Маркировка»</p>';
// 			}
// 			if(isset($args['post']['Эквайринг'])){
// 				$message .= '<p>Эквайринг</p>';
// 			}		
// 			if(isset($args['post']['Модули не нужны'])){
// 				$message .= '<p>Модули не нужны</p>';
// 			}
// 			
// 			$message .= '<p><b>Дополнительные модули к кассе:</b></p>';
// 			if(isset($args['post']['Мобильность'])){
// 				$message .= '<p>Мобильность</p>';
// 			}
// 			if(isset($args['post']['Стоимость'])){
// 				$message .= '<p>Стоимость</p>';
// 			}
// 			if(isset($args['post']['Гарантии'])){
// 				$message .= '<p>Гарантии</p>';
// 			}		
// 			if(isset($args['post']['Техническая поддержка'])){
// 				$message .= '<p>Техническая поддержка</p>';
// 			}
// 	
// 			$message .= '<p>ФИО: '.$args['post']['Name'].'</p>';
// 			$message .= '<p>Телефон: '.$args['post']['Phone'].'</p>';
// 		} else {
// 			$message .= '<p>ФИО: '.$args['post']['Name2'].'</p>';
// 			$message .= '<p>Телефон: '.$args['post']['Phone2'].'</p>';
// 			$message .= '<p>E-mail: '.$args['post']['email'].'</p>';			
// 		}  	
// 		
// 	   
// 	    $site = $_SERVER['HTTP_HOST'];
// 	
// 	    $from = array('noreply@' . $site);
// 	    $to = 'apostolovdrums@gmail.com';
// 	    
// 	    if($_POST['action'] == 'steps'){
// 	    	$subject = 'Ответы на вопросы с сайта ' . $site;
// 	    } else {
// 		    $subject = 'Заявка на подключение с сайта ' . $site;
// 	    }
// // 	    $message = 'Новое сообщение с сайта ' . $site . ':<br>';
// 	
// 	    $headers = "MIME-Version: 1.0\r\n";
// 	    $headers .= "Content-type: text/html; charset=utf-8\r\n";
// 	    $headers .= "From: " . implode(',', $from) . "\r\n";
// 	
// 		if(!mail($to, $subject, $message, $headers)){
// 			echo 'error';
// 		}
	}

//echo json_encode($res);
// Header("Location: /thanks.html");

?>