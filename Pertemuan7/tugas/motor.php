<?php
class Motor {
  public $merk;
  public $bensin;
  public $topSpeed;
  public $cc;

  public function __construct($merk, $bensin, $topSpeed, $cc) {
    $this->merk = $merk;
    $this->bensin = $bensin;
    $this->topSpeed = $topSpeed;
    $this->cc = $cc;
  }

  public function jalan($jarak) {
    $bensinyangdiperlukan = $jarak / 30;
     // 1 liter bensin untuk 30km

    if ($bensinyangdiperlukan <= $this->bensin) {
      $this->bensin -= $bensinyangdiperlukan;
      echo "<br>Motor $this->merk jalan sejauh $jarak km dan masih memiliki $this->bensin liter bensin.\n";
    } else {
      echo "<br>Bensin tidak cukup untuk menempuh jarak sejauh $jarak km.\n";
    }
  }
}

$motor = new Motor("Honda", 10, 100, 150);
$motor->jalan(60); 
$motor->jalan(500);