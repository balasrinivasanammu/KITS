<?php
/*
class balaji {
  public static function mango() {
    echo "Hello guys!";
  }

  public function __construct() {
    self::mango();
  }
}

new balaji();*/
?>

<?php
class balaji {
  static function mango() 
  {
    echo "Hello mango!";
  }
  private function orange()
  {
    echo "Hello orange!";
  }

}
balaji::mango();
$sai=new balaji();
$sai->orange();


?>



