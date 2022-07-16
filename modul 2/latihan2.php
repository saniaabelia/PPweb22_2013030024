<html>
<head>
    <tittle>Konversi Nilai</tittle>
</head>
<body>

<?php
function nilai($angka){
    if ($angka >= 90 and $angka <=100){
        $nilai = "A";
    }
    else if ($angka >=85) {
        $nilai = "B+";
    }
    else if ($angka >=80) {
        $nilai = "B";
    }
    else if ($angka >=75) {
        $nilai = "B-";
    }
    else if ($angka >=70) {
        $nilai = "C+";
    }
    else if ($angka >=65) {
        $nilai = "C";
    }
    else if ($angka >=60) {
        $nilai = "C-";
    }
    else if ($angka >=50) {
        $nilai = "D";
    }
    else if ($angka >=0 and $angka <50) {
        $nilai = "E";
    }
    return $nilai;
}
?>
<form action="latihan2.php" method="get">
<p>Nilai Angka
<input type="number" name="nilai">
<input type="submit" name="btn" value="Konversi">
</form>
</body>
</html>
<!-- <p>Nilai Huruf
<input type="text" value="<?= nilai ($nilai)?>">
-->
<?php
    if (isset ($_GET['btn'])){

    echo "Nilai Huruf : ".$_GET['nilai']."(".nilai ($_GET['nilai']).")";
    }
?>