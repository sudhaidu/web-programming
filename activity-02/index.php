<h3>My First PHP Program</h3>
<h3>3.3<br></h3>
<html>
    <body>
        <h1>Hello, from "Romero"!</h1>
    </body>
</html>
<h3>3.6<br></h3>
<?php
    echo "Hello, World!";
?>

<br>
<h3>4.1<br></h3>
<?php

    $x = 30;
    $y = 12;
    $sum1 = $x + $y;
    $sum2 = $sum1 * 2;

    $sum3 = $x % $y;

    echo "The total sum is: $sum2.";
?>

<br>
<h3>6.2<br></h3>
<?php
    echo "The total remainder that's left is: $sum3";
?>

<br><br>
<h3>7, 7.2<br></h3>
<?php
    for($i = 1; $i < 100; $i++)
    {
        $i += 2;
        echo "3 - 100 = $i <br>";
    }
?>

<br><br>
<h3>7.2<br></h3>
<?php
    for($i = 1; $i < 100; $i++)
    {
        $i += 4;
        echo "5 - 100 = $i <br>";
    }
?>

<br><br>
<h3>8.2<br></h3>
<?php

    $products = array("Product A", "Product B", "Product C");
    echo $products[0];

?>

<br>
<h3>8.3<br></h3>
<?php
    $products = array("Product A", "Product B", "Product C");
    $products [1] = "Product BA";
    var_dump($products)
?>

<br>
<h3>8.4<br></h3>
<?php
    $products = array("Product A", "Product B", "Product C");
    foreach($products as $p)
    {
        echo "$p <br>";
    }
?>

<br>
<h3>8.5<br></h3>
<?php 
    $products = array("name" => "Product A", "price" => 10.50, "stock" => 12);
    echo $products["name"];
?>

<br><br>

<?php

    $products = array

                    (
                        array("name" => "Product A", "price" => 10.50, "stock" => 12),
                        array("name" => "Product A", "price" => 5.60, "stock" => 7),
                        array("name" => "Product A", "price" => 7.00, "stock" => 5)
                    );

?>

<br>
<h3>8.8<br></h3>
<?php 
    foreach($products as $p)
    {
        echo $p["name"] . " is " . $p["price"] . " pesos <br>";
    }
?>