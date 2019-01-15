<?php 

Class Orang {
	public $nama = 'Rosita';
	public $jeniskelamin = 'Perempaun';

	public function setData($nm = 'Rexa', $jk ='Laki-laki'){
		$this->nama = $nm;
		$this->jeniskelamin = $jk;
	}

	public function makan()
	return "{$this->nama} sedang makan <br>";
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
 $anak->setData('Tita','Perempuan');
 echo $anak->biodata();
 echo $anak->makan();


 ?>