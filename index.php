<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 9</title>
</head>
<body>
    <?php
    // https://stackoverflow.com/questions/1691646/php-echo-text-color
    // echo '<span style="color:magenta;text-align:center;">P</span>HP Tutorial';

    // https://www.w3resource.com/php-exercises/php-basic-exercise-9.php
    $text = 'PHP Tutorial';
    $text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
    echo $text;
?>

</body>
</html>