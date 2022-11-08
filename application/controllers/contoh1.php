<?php
class Contoh1 extends CI_Controller
{
     public function index()
     {
          echo "<h1> MyBio </h1>";
          echo "Nama           : Hilda <br>
          Tempat Lahir   : Bekasi <br>
          Tanggal Lahir  : 2 April 2002";
     }
     public function halo()
     {
          echo "halo, ini controller halo()";
     }
}