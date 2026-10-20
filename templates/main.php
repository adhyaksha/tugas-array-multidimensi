<?php
require_once __DIR__ . "/../config/data.php";
require_once __DIR__ . "/../config/funtion.php";
?>
<main>
    <h1>Selamat datang di perhitungan nilai siswa</h1>

    <form method="post">
        <button type="submit" name="hitung">Hitung rata rata</button>
        <button type="submit" name="lulus">cek kelulusan</button>
    </form>

    <?php
    $hasil  = hitungratarata($nama);
    $lulus = cekkelulusan($hasil);
    $hitung = isset($_POST['hitung']);
    $cek    = isset($_POST['lulus']);
    ?>

    <?php foreach ($hasil as $i => $h) { ?>
        <p>
            nama : <?= htmlspecialchars($h['nama']) ?><br>

            <?php if ($hitung || $cek) { ?>
                total nilai : <?= $h['total'] ?><br>
                rata-rata : <?= $h['rata'] ?><br>
            <?php } ?>

            <?php if ($cek) { ?>
                status : <?= htmlspecialchars($lulus[$i]['status']) ?><br>
            <?php } ?>
        </p>
        <hr>
    <?php } ?>
</main>