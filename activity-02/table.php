<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Table</title>
</head>
<body>
    <?php
        $products = array
        (
            array("No." => 1, "Name" => "Product A", "Price" => 10.50, "Stock" => 12),
            array("No." => 2, "Name" => "Product B", "Price" => 5.60, "Stock" => 7),
            array("No." => 3, "Name" => "Product C", "Price" => 7.00, "Stock" => 5),
            array("No." => 4, "Name" => "Apple", "Price" => 3.60, "Stock" => 20),
            array("No." => 5, "Name" => "Orange", "Price" => 2.50, "Stock" => 20),
            array("No." => 6, "Name" => "Pineapple", "Price" => 4, "Stock" => 10)
        );
    ?>
    <Table border = 1>
        <tr>
            <th>No.</th>
            <th>Product</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>

        <?php
            foreach($products as $p)
            {
        ?>
                <tr>
                    <td><?= $p["No."] ?></td>
                    <td><?= $p["Name"] ?></td>
                    <td><?= $p["Price"] ?></td>
                    <td><?= $p["Stock"] ?></td>
                </tr>
        <?php
            }
        ?>
    </Table>
        
    <?php
    
    ?>
</body>
</html>