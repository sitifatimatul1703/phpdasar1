<?php
//pengulangan pada array
//for / foreach
$angka = [3,2,15,20,11] ;
?>
<DOCTYPE html>
    <html>
        <head>
            <title>Latian 2</title>
            <style>
    div{
        width: 50px
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;

    }
</style>
</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
    <div><?php echo $angka[$i]; ?></div>
    <?php } ?>
</body>
</html>