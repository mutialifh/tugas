<?php
$cakes = [
    [
        "name" => "Kue Coklat",
        "description" => "Kue coklat lezat dengan lapisan ganache coklat.",
        "price" => 100000,
        "image" => "coklat.jpg" 
    ],
    [
        "name" => "Kue Red Velvet",
        "description" => "Kue red velvet dengan krim keju yang lezat.",
        "price" => 150000,
        "image" => "redvelvet.jpg" 
    ],
    [
        "name" => "Kue Keju",
        "description" => "Kue keju lembut dengan taburan keju parut di atasnya.",
        "price" => 175000,
        "image" => "keju.jpg"
    ],
    [
        "name" => "Kue Matcha",
        "description" => "Kue Matcha dengan rasa matcha yang enak.",
        "price" => 200000,
        "image" => "greentea.jpg"
    ],
    [
        "name" => "Kue Tiramisu",
        "description" => "Kue tiramisu klasik dengan aroma kopi yang kuat.",
        "price" => 165000,
        "image" => "tiramisu.jpg"
    ],
    [
        "name" => "Kue Pandan",
        "description" => "Kue pandan lembut dengan aroma khas pandan.",
        "price" => 90000,
        "image" => "pandan.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .card {
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 16px;
            text-align: center;
        }
        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        .card h3 {
            margin: 10px 0;
            font-size: 18px;
        }
        .card p {
            font-size: 14px;
            color: #555;
        }
        .card span {
            font-weight: bold;
            color: #000;
        }
    </style>
    <title>Kue Kartu</title>
</head>
<body>

<div class="card-container">
    <?php foreach ($cakes as $cake): ?>
        <div class="card">
            <img src="<?= $cake['image'] ?>" alt="<?= $cake['name'] ?>">
            <h3><?= $cake['name'] ?></h3>
            <p><?= $cake['description'] ?></p>
            <span>Rp <?= number_format($cake['price'], 0, ',', '.') ?></span>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
