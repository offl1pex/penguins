<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Конвертор</title>
    </head>
    <body>
        <h1>Преобразование из дюймов в сантиметры</h1>
        <?php 
            $ins = 20; 
            $cents = $ins * 2.54; 
            $cents = round($cents); 

            $ins1 = 27; 
            $cents1 = $ins1 * 2.54; 
            $cents1 = round($cents1);
        ?>
        <p><?php echo $ins ?> дюймов = <?php echo $cents ?> сантиметров.</p>

        <?php  echo "<br>"?>

        <p><?php echo $ins1 ?> дюймов = <?php echo $cents1 ?> сантиметров.</p>
    </body>
</html>