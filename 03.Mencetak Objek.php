<?php
class buah {
    public $nama;
    public $warna;
 
    public function __construct($nama, $warna){
      $this->nama = $nama;
      $this->warna = $warna;
    }
  }
  
  $apel = new buah("apel", "merah");
  $melon = new buah("melon", "hijau");
  print_r($apel);
  print "<p>";
  print_r($melon);


  echo "<br><br><strong>by dewi puspita sari";
