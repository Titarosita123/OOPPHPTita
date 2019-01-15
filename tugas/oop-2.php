<?php

Class Orang {
	public $nama = 'Rosita';
	public $jeniskelamin;

	public function makan()
	{
		return $this->nama.'sedang makan <br>';
	}
}
Class AnakOrang extends OPrangTua {
	public function biodata(){
		return "Nama : {$this->nama} <br>".
			"Jenis Kelamin : {$this->jeniskelamin} <br>".
			"=================================================<p>";
	}
}
 $anak = new AnakOrang;
 $anak->nama = "Tita Rosita";
 $anak->jeniskelamin = "Perempuan";
 echo $anak->biodata();
 echo $anak->makan();
