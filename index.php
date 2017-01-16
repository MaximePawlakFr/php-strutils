<?php
require('./Class/StrUtils.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>StrUtils</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
  <?php
  $str = new StrUtils();
  $str->setBold();
  echo $str->getStr();

  $strIta = new StrUtils();
  $strIta->setItalic();
  echo $strIta->getStr();

  $strUnderline = new StrUtils();
  $strUnderline->setUnderline();
  echo $strUnderline->getStr();

  $strCapitalize = new StrUtils();
  $strCapitalize->setCapitalize();
  echo $strCapitalize->getStr();

  $strUglify = new StrUtils();
  $strUglify->setUglify();
  echo $strUglify->getStr();
  ?>

</body>
</html>
