<?php 

Class Orang {
	public $nama = 'Rosita';
	public $jeniskelamin;

	public function makan()
	{
		return $this->nama.'sedang makan <br>';
	}
}

$saya = new Orang;
$saya->nama = 'Tita';
echo $saya->makan();

$saya->nama = 'Siska';
echo $saya->makan();