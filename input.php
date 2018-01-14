<?php
	include("res.php");
	$str="";
	//если существуют переменные
	if(isset($_POST["fio"], $_POST["mail"], $_POST["question"])){
		$fio= ($_POST["fio"]);
		$mail = ($_POST["mail"]);
		$question = ($_POST["question"]);
		// вставка в базу
		$query = mysql_query("insert into res (fio, mail, question) values ('".$fio."','".$mail."','".$question."')");
		if ($query == 'true') {
			$str = "Ваш вопрсоc успешно отправлен!";
		} else {
			$str = "Возникла ошибка!".mysql_error();
		}
	}else{
		echo "Не введены данные. Попробуйте еще раз.";
		exit;
	}
	echo $str;
?>