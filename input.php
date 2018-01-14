<?php
	$str="";
	//если существуют переменные
	if(isset($_POST["fio"], $_POST["mail"], $_POST["question"])){
			$str = "Ваш вопрсоc успешно отправлен!";
		} else {
			$str = "Возникла ошибка!";
				exit;
	}
	echo $str;
	
?>