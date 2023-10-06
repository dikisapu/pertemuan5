<?php
$angka = [1,23,4,34];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
    <style>
        .angka{
            width:50px;
            height: 50px;
            background-color:salmon;
            text-Align:center;
            line-height:50px;
            margin:3px;
            float:left;
        }
        .clear{
            clear:both;
        }
    </style>
</head>
<body>
    <?php for( $i=0;$i< count($angka);$i ++){ ?>
    <div class="angka"><?php echo $angka[$i] ?></div>
    <?php }?>

    <!-- catatan untuk foreach
    cara baca atau artinya adalah "untuk setiap element yang ada pada array
    contohh foreach($angka as a) dipresentasikan menjadi a atau
    dalam bentuk plural contoh jumlah banyak dibuat dikit seperti books
    menjadi book, students menjadi student" -->

    <div class="clear"></div>
    <?php foreach($angka as $a){ ?>
        <div class="angka"><?php echo $a?></div>
    <?php }?>
    <div class="clear"></div>

    <?php foreach( $angka as $a) : ?>
        <div class="angka"><?= $a; ?></div>
    <?php endforeach; ?>


</body>
</html>