<?php

class biodatasiswa{
	public $nama;
	public $nama_ortu;
	public $ttl;
	public $kelas;
	public $jurusan;
	public $wali_kelas;
	public $alamat;

public function __construct($n,$or,$ttl,$k,$j,$wk,$al)
{
	$this->nama = $n;
	$this->namaor = $or;
	$this->ttl = $ttl;
	$this->kelas = $k;
	$this->jurusan = $j;
	$this->wali = $wk;
	$this->alamat =$al;
}
}
  ?>