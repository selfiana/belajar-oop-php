<?php 

// define( 'NAMA', 'Padaherang');
// echo NAMA;
// echo "<br>";
// const UMUR = 32;
// echo UMUR;


// class Coba {
// 	 const NAMA = 'Padaherang';
// }

// echo Coba::NAMA;



// function coba() {
// 	return __FUNCTION__;
// }

// echo coba();

class Coba{
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

 ?>