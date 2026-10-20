<?php
function hitungratarata($data) {
    $hasil = [];

    foreach ($data as $value) {
        $nilai = array_slice($value, 1);
        $total = array_sum($nilai);

        $hasil[] = [
            'nama' => $value[0],
            'total' => $total,
            'rata' => round($total / count($nilai), 1)
        ];
    }

    return $hasil;
}

function cekKelulusan($data) {
    $lulus = [];

    foreach ($data as $h) {
        if ($h['rata'] >= 80) {
            $status = 'lulus sangat baik';
        } elseif ($h['rata'] >= 75) {
            $status = 'lulus';
        } else {
            $status = 'tidak lulus';
        }

        $lulus[] = [
            'nama'   => $h['nama'],
            'rata'   => $h['rata'],
            'status' => $status
        ];
    }

    return $lulus;
}



?>
