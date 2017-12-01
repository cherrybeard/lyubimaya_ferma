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
<!DOCTYPE html><html lang='ru'>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="«Любимая ферма» создана для ценителей вкусной и здоровой еды.">
  <meta name="keywords" content="Любимая ферма, рынок, москва, ферма">
  <meta name="viewport" content="width=device-width">
  <meta property="og:title" content="Любимая ферма">
  <meta property="og:description" content="«Любимая ферма» создана для ценителей вкусной и здоровой еды.">
  <meta property="og:image" content="http://lyubimayaferma.ru/img/share.jpg">
  <meta property="og:url" content="http://lyubimayaferma.ru">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="icon" href="img/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/apple-icon.png">
  <title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?></title><?php wp_head(); ?>
</head><body>