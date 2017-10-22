<?php
require_once 'latihan.php';

$data = new biodatasiswa('Salman','udin','bandung','XI RPL 1','rpl','rahmat','pamekaran');

echo 'Namanya ..'.$data->nama."<br>";
echo 'Nama Ortu nya ..'.$data->namaor."<br>";
echo 'Tempat Lahir..'.$data->ttl."<br>";
echo 'Kelas .. '.$data->kelas."<br>";
echo 'jurusannya..'.$data->jurusan."<br>";
echo 'Wali kelas nya ..'.$data->wali."<br>";
echo 'Alamatnya ..'.$data->alamat."<br>";

  ?>