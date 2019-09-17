<?php

	class Otomotif{
		

			public $jdl, $pnrbt, $nmpnls, $hal;
			public function __construct($jdl = " Nama Mobil", $pnrbt = "Type ", $nmpnls = "Warna", $hal = "Harga"){
				$this->jdl = $jdl;
				$this->pnrbt = $pnrbt;
				$this->nmpnls = $nmpnls;
				$this->hal = $hal;
			
			}
			public function getinfoBook(){

				$bku = "<br>Nama Mobil : {$this->jdl}, <br>Type : {$this->pnrbt}, <br>Warna : {$this->nmpnls}, <br>Harga : {$this->hal}";

				return $bku;		
			}
	}

	Class BukuSatu extends Otomotif {

		public function getinfoBook(){
			$bku = " Mobil 1 : ".parent::getinfoBook();
			return $bku;
		
		}
	}
	class BukuDua extends Otomotif{

		public $rwyt;
		public function __construct($jdl, $pnrbt, $nmpnls, $hal, $rwyt){
			parent::__construct($jdl, $pnrbt, $nmpnls,$hal, $rwyt);
			$this->rwyt = $rwyt;
		}
		public function getinfoBook(){

			$bku = " Mobil 2 : ".parent::getinfoBook();
			return $bku;
		}
	}	

	$bku1 = new BukuSatu("Toyota", "Avanza", "Silver", "300.000.000");
	$bku2 = new BukuDua("Hino", "Hino Dutro 110 HD", "Merah", "350.000.000", "250.000 ");

	echo $bku1->getinfoBook();
	echo "<br>";
	echo "<br>";
	echo $bku2->getinfoBook();


?>