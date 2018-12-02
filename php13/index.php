<?php
class Couple {
  public $vardas;
  public $pavarde;

  public function labas() {
    return 'Labas, mano vardas <i>' . $this -> vardas . '</i>, mano  pavardė: ' . $this -> pavarde . '<br>';
  }
}
$man = new Couple();
$woman = new Couple();

$man -> vardas = "Jonas";
$man -> pavarde = "Jonaitis";

$woman -> vardas = "Jone";
$woman -> pavarde = "Jonaite";

echo $man -> labas();
echo $woman -> labas();
 ?>
