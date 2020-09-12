<?php

	class Animal {
		public $cat, $dog, $goat, $cow;

		public function terbang() {
			if($this->jumlah_kaki === 4) {
				echo "Tidak Bisa Terbang";
			} else {
				echo "Bisa Terbang";
			}
		}

	}

	class Kucing extends Animal {
		public function bersuara(){
			return "Meooong";
		}
	}

	class Anjing extends Animal {
		public function bersuara(){
			return "GukGukGuk";
		}
	}

	class Kambing extends Animal {
		public function bersuara(){
			return "Mbek Mbek";
		}
	}

	class Sapi extends Animal {
		public function bersuara(){
			return "Mok Mok Mok";
		}
	}

	$cat = new Kucing;
	$cat->jumlah_kaki = 4;
	$cat->tidak_terbang = "Tidak Bisa Terbang";
	echo "Cat Adalah Kucing <br>";
	echo "Jumlah Kakinya Sebanyak : ".$cat->jumlah_kaki. "<br>";
	echo $cat->tidak_terbang. "<br>";
	echo "Suaranya : ".$cat->bersuara(). "<br>";

	echo "<hr>";

	$dog = new Anjing;
	$dog->jumlah_kaki = 4;
	$dog->tidak_terbang = "Tidak Bisa Terbang";
	echo "Dog Adalah Anjing <br>";
	echo "Jumlah Kakinya Sebanyak : ".$cat->jumlah_kaki. "<br>";
	echo $dog->tidak_terbang. "<br>";
	echo "Suaranya : ".$dog->bersuara(). "<br>";

	echo "<hr>";

	$goat = new Kambing;
	$goat->jumlah_kaki = 4;
	$goat->tidak_terbang = "Tidak Bisa Terbang";
	echo "Goat Adalah Kambing <br>";
	echo "Jumlah Kakinya Sebanyak : ".$goat->jumlah_kaki. "<br>";
	echo $goat->tidak_terbang. "<br>";
	echo "Suaranya : ".$goat->bersuara(). "<br>";

	echo "<hr>";

	$cow = new Sapi;
	$cow->jumlah_kaki = 4;
	$cow->tidak_terbang = "Tidak Bisa Terbang";
	echo "Goat Adalah Sapi <br>";
	echo "Jumlah Kakinya Sebanyak : ".$cow->jumlah_kaki. "<br>";
	echo $cow->tidak_terbang. "<br>";
	echo "Suaranya : " .$cow->bersuara()."<br>"

	?>