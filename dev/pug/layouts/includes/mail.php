<?
	if (count($_POST)!=0) {
		$msg = 'Заявка с лендинга Любимая Ферма #1<br>';
		if (isset($_POST['phone'])) {
			$msg .= 'Телефон: '.$_POST['phone'].'<br>';
		}
		if (isset($_POST['email'])) {
			$msg .= 'E-mail: '.$_POST['email'].'<br>';
		}
		if (isset($_POST['message'])) {
			$msg .= 'Хочу: '.$_POST['message'].'<br>';
		}
		$title = 'Заявка с лендинга Любимая Ферма #1';
		if (!empty($_POST['msg'])) $msg .= '<br>'.$_POST['msg'];
    $to = 'pavlova@blackstonekeeping.com,komkov@blackstonekeeping.com';
		$header = 'MIME-Version: 1.0' . "\n" .
			'Content-type: text/html; charset=UTF-8'. "\n" .
			"From: Lubimaya Ferma <hi@lubimaya-ferma.ru>\n";
    if (@mail($to, $title, $msg, $header))
    	die('1');
	}
	if (count($_POST)!=0) die('0');
?>
