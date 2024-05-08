<!DOCTYPE html>
<html>
<head>
    <title>Quadratic Equation Discriminant Result</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $discriminant = pow($b, 2) - (4 * $a * $c);

        echo "Discriminant = " . $discriminant;
    }
    ?>
</body>
</html>