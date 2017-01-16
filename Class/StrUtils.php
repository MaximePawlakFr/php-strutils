<?php
class StrUtils {
  private $str;

  public function __construct($value = "Hello world"){
    $this->str = $value;
  }

  public function bold(){
    return $this->str = "<span class='gras'>$this->str</span>";
  }

  public function italic(){
    return $this->str = "<span class='italic'>$this->str</span>";
  }

  public function underline(){
    return $this->str = "<span class='underline'>$this->str</span>";
  }

  public function capitalize(){
      return $this->str = "<span class='capitalize'>$this->str</span>";
  }

  public function uglify(){
    $this->bold();
    $this->italic();
    $this->underline();
    $this->capitalize();
    return $this->str;
  }

  public function getStr(){
    return $this->str;
  }

}
