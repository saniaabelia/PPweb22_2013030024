<?php 
class konversinilai{
	public $nilai;
	function nilai($z){
		$this -> nilai=$z;
	}
	function konversi(){
		if($this ->nilai<=100 && $this ->nilai>=85){$grade='A';
		}elseif($this ->nilai<85 && $this ->nilai>=75){$grade='B';
		}elseif($this ->nilai<75 && $this ->nilai>=65){$grade='C';
		}elseif($this ->nilai<65 && $this ->nilai>=55){$grade='D';
		}else {$grade ='E';
		}return $grade;			
	}
	function form_nilai(){
		echo '<form method="GET">';
		echo "<h1>Konversi Nilai</h1>";
		echo '<input type="text" name="nilai" placeholder="masukkan nilai">';
		echo '<br><input type="submit" name="konversi">';
		echo '</form>';
	}
}
$score = new konversinilai;
$score->form_nilai();
if (isset($_GET['konversi'])){
	echo 'nilai : '.$_GET['nilai'];
	echo "<br> nilai dikonversi : ";
	$x=$score->nilai($_GET['nilai']);
	echo $score->konversi();
	}
 ?>

