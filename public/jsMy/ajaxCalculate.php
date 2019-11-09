<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$weight = $_POST['weight'];
$height = $_POST['height'];
if (!empty($name) && !empty($email) && !empty($weight) && !empty($height)) { 
	if ($weight >= 300 || $height >= 300 || $height < 0 || $weight < 0) {
		echo '<div class="error">Введите данные в указанных выше промежутках!!!</div>';
	} else {
		$result = round($weight / (($height/100) *($height/100)) , 2);
		$str = '';
		$str .= '<p>Ваше имя: ' . $name . '</p>';
		$str .= '<p>Ваш email: ' . $email . '</p>';
		$str .= '<p>Индекс массы тела равен: ' . $result . '</p>';
		$str .= '<p>У Вас ';
		if ($result < 18.5) {
			$str .= 'дефицит массы тела';
		} elseif ($result >= 18.5 && $result <= 24.9) {
			$str .= 'нормальная масса тела';
		} elseif ($result >= 25) {
			$str .= 'избыточная масса тела';
		}
		$str .= '</p>';
		echo '<div class="calculate">' . $str . '</div>';
	}
} else {
	echo '<div class="error">Вы ввели неверно заполненные данные!!!</div>';
}
?>