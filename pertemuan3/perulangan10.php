<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latian 1</title>
</head>
<body>

<table border="1"cellpadding="10" cellspacing="0" >
    <?php for($i =1; $i <=5; $i++ ) : ?>
        <tr>
    <?php for( $j =1; $j <= 5; $j++ ): ?>
        <td> echo "$i, $j"; ?></td>
    <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>