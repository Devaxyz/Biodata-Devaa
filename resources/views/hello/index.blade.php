<?php
// Data biodata
$nama = "Deva Arjuna";
$alamat = "Jl.Permata 1, Aik Merbau";
$tanggal_lahir = "2008-07-20";
$hobi = ["Berenang", "Main Game", "Mendengar Musik"];
$cita_cita = "Pengusaha";

// Fungsi format tanggal lahir
function formatTanggal($tanggal) {
    return date("d F Y", strtotime($tanggal));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Biodata Deva</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
            color: #333;
            padding: 30px;
        }
        .biodata-container {
            background: white;
            max-width: 500px;
            margin: auto;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        .item {
            margin-bottom: 15px;
        }
        .label {
            font-weight: 700;
            color: #2980b9;
        }
        ul {
            margin: 5px 0 0 20px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="biodata-container">
        <h1>Biodata Saya</h1>
        <div class="item">
            <span class="label">Nama:</span> <?= htmlspecialchars($nama) ?>
        </div>
        <div class="item">
            <span class="label">Alamat:</span> <?= htmlspecialchars($alamat) ?>
        </div>
        <div class="item">
            <span class="label">Tanggal Lahir:</span> <?= formatTanggal($tanggal_lahir) ?>
        </div>
        <div class="item">
            <span class="label">Hobi:</span>
            <ul>
                <?php foreach ($hobi as $h) : ?>
                    <li><?= htmlspecialchars($h) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="item">
            <span class="label">Cita-cita:</span> <?= htmlspecialchars($cita_cita) ?>
        </div>
    </div>
</body>
</html>
