<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enter colors</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <?php
        //get our form values
        $name = $_GET['name'];
        $color1 = $_GET['color1'];
        $color2 = $_GET['color2'];
        $color3 = $_GET['color3'];

        //echo out some dynamic results
        echo "<h1>Do you like the color, ".$name."?</h1>";
        echo "<style>html { background-image: linear-gradient(".
             $color1.", ".$color2.", ".$color3."); }</style>";
    ?>
</body>
</html>

