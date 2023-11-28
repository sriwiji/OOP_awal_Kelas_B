<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {

  private $nama;
  private $nim;
  private $matkul;
  private $dosenkiller;
  private $citacita;


  public function __construct($nama, $nim, $matkul, $dosenkiller, $citacita){
    $this->Nama = $nama;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->dosenkiller = $dosenkiller;
    $this->citacita = $citacita;
  }


  function get_nama() {
    return $this->Nama;
  }
  function get_nim(){
    return $this->nim;
  }
  function get_matkul(){
    return $this->matkul;
  }
  function get_dosenkiller(){
    return $this->dosenkiller;
  }
    function get_citacita(){
    return $this->citacita;
  }
}

$sriwiji = new Mahasiswa('sriwiji', '2255201058', 'PBO', 'bapak arip', 'pengusaha');
echo $sriwiji->get_nama();
echo "<br>";
echo $sriwiji->get_nim();
echo "<br>";
echo $sriwiji->get_matkul();
echo "<br>";
echo $sriwiji->get_dosenkiller();
echo "<br>";
echo $sriwiji->get_citacita();
?>

</body>
</html>
