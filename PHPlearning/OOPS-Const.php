<?php
class Baby {
  const MSG = "Welcome to IT WORLD ";
  public $apple=100;
}


echo Baby::MSG;
$sai=new Baby();
print($sai->apple);

?>

<?php
/*
class Baby {
  const MSG = "Thank you for coming!";
  public function welcome() {
    echo self::MSG;
  }
}

$goodbye = new Baby();
$goodbye->welcome();
*/
?>