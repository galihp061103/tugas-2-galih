<?php
$barang ="rokok surya";

switch ($barang) {
   case "rokok surya":
       echo ("Harga $barang adalah Rp 34.000,00");
       break;
   case "rokok sempurna":
       echo ("Harga $barang adalah Rp 30.000,00");
       break;
   case "rokok twizz":
       echo ("Harga $barang adalah Rp 22.000,00");
       break;
   case "rokok Troy":
       echo ("Harga $barang adalah Rp 18.000,00");
       break;
   case "rokok LA":
       echo ("Harga $barang adalah Rp 29.000,00");
       break;
   default:
       echo("Mungkin anda sudah kena kanker tenggorokan");
       break;  
   }