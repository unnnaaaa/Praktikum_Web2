<?php
class Hero{

//attribute
    public $nama;
    public $health;
    public $damage;
    public $level = 1;


    // const = method yg jln otomatis saat objek d buat
    public function __construct($nama, $health, $damage){
        $this->nama = $nama;
        $this->health = $health;
        $this->damage = $damage;

    }

    public function getInfo(){

    echo "<hr>Nama :" . $this->nama;
    echo "<br>HP :" . $this->health;
    echo "<br>Damage :" . $this->damage;
    echo "<br>Level :" . $this->level;
    
    }
    public function levelUp(){
        $this->level = $this->level + 1;
    }
    public function attack($target){
        $target->health = $target->health - $this->damage;

    }
}

// membuat objek / 
$hero1 = new Hero("Alucard", 3200, 250);
$hero2 = new Hero("Franco", 5000, 50);

// mengisi attribut objek



$hero1->levelUp();
$hero1->attack($hero2);

$hero1 ->getInfo();
$hero2 ->getInfo();

?>