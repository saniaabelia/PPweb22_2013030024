<html>
<head>
<title>kalkurator sederhana</title>
</lirik rel="style sheet"type="text/css" href="kalkulator style.css">
</head>
<body>
    <?php
    if (isset($_POST['hitung'])){
        $bill1=$_POST['bil1'];
        $bill2=$_POST['bil2'];
        $operasi=$_POST['operasi'];
        switch ($operasi){
            case'tambah':$hasil=$bil1+$bil2;break;
            case'kurang':$hasil=$bil1-$bil2;break;
            case'kali':$hasil=$bil1*$bil2;break;
            case'bagi':$hasil=$bil1/$bil2;break;
        }
    }
    ?>
    <div class="kalkulator">
        <h2 class="judul">KALKULATOR</h2>
        <from method="post"action="index.php">
            <input type="text"name="bil1"class="bil" auto complate="off"placeholder="Bilangan pertama">
            <input type="text"name="bil2"class="bil" auto complate="off"placeholder="Bilangan kedua">
            <select class="opt"name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
</select>
<input type="submit" name="hitung" value="hitung" class="tombol">
</form>
<?php if(isset($_POST ['hitung'])){?>
    <input type="text"value="<?php echo $hasil?>"class="bil">
<?php } else {?>
    <input type="text" value=" " class="bil">
    <?php } ?>
    </div>
    </body>
</html>