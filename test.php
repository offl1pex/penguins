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
 $ins2 = 27;
 function cent($param) {
    $cents = $param * 2.54;  
    $cents = round($cents);
    return $cents;
 }
?>  
        <p><?php echo $ins ?> дюймов = <?php echo cent($ins) ?> сантиметров.</p>  
        <p><?php echo $ins2 ?> дюймов = <?php echo cent($ins2) ?> сантиметров.</p>  
 
    </body> 
</html>