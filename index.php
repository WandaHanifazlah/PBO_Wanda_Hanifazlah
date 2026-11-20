<?php

//panggil file PropertyConstant
require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//object
$produk = new Produk();

$produk->setkode('P0001')
        ->setnama('laptop')
        ->setharga('10000000')
        ->setstok('5');

//hasil
echo "Produk: ". $produk->getnama();
echo "<br/>";

echo "Harga: ". $produk->getharga();
echo "<br/>";

echo "Stok: ". $produk->getstok();
echo "<br/>";

echo "Pajak: ". $produk->pajak() . "%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp." . $produk->total();