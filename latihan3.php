<?php
$mahasiswa=[
    ["Dikisantoso","212310019","Informatika","dikis7256@gmail.com","bakauheni"],
    ["Ahsanul","212310009","Informatika","ahsanul@gmail.com","Cirebon"],
    ["elsa","212310019","Informatika","elzawidysarii21@gmail.com","jabung"],
    ]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
    <style>
        .mahasiswa{
            width:180px;
            height:80px;
            background-color:salmon;
            float:left;
            text-align:center;
            line-height:50px;
            margin:4px;
        }
    </style>


</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) :?>
    <ul>
        <?php foreach($mhs as $siswa) : ?>
            <li class="maha"><?= $siswa;?></li>
            <?php endforeach;?>
    </ul>
    <?php endforeach;?>
</body>
</html>