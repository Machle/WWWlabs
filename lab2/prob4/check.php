<?php

require_once('classes.php');

$requirements = [
	"user" => [
						"max" => 255,
						"min" => 5
					],
	
	"pass" => [
						"max" => 255,
						"min" => 8
					]
];
$validate = new ValidateLogin($_POST, $requirements);
if(!$validate->isValid()){
	$validate->printError();
	echo "Последно поле, което съдържа невалидна стойност: ".$validate->getInvalidField();
} else { 
	echo "Валидацията е успешна!";
}
?>