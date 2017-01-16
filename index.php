<?php
require('./Class/StrUtils.php');

$str = new StrUtils('Yop le monde');
$str->bold();

$strIta = new StrUtils('Yop le monde');
$strIta->italic();

$strUnderline = new StrUtils('Yop le monde');
$strUnderline->underline();

$strCapitalize = new StrUtils('Yop le monde');
$strCapitalize->capitalize();

$strUglify = new StrUtils('Yop le monde');
$strUglify->uglify();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>StrUtils</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
  <div>
    <?= $str->getStr()?>
  </div>
  <div>
    <?= $strIta->getStr()?>
  </div>
  <div>
    <?= $strUnderline->getStr()?>
  </div>
  <div>
    <?= $strCapitalize->getStr()?>
  </div>
  <div>
    <?= $strUglify->getStr()?>
  </div>
</body>
</html>
