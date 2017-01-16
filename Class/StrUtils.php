<?php
class StrUtils {
  private $str;

  public function __construct(){
    $this->str = "Hello world";
  }

  public function setBold(){
    return $this->str = "<span class='gras'>$this->str</span>";
  }

  public function setItalic(){
    return $this->str = "<span class='italic'>$this->str</span>";
  }

  public function setUnderline(){
    return $this->str = "<span class='underline'>$this->str</span>";
  }

  public function setCapitalize(){
      return $this->str = "<span class='capitalize'>$this->str</span>";
  }

  public function setUglify(){
    $this->setBold();
    $this->setItalic();
    $this->setUnderline();
    $this->setCapitalize();
    return $this->str;
  }

  public function getStr(){
    return $this->str;
  }

}
