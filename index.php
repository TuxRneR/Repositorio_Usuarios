<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= renderList("Mi lista de elementos") ?>

    <h6>El Chepe</h6>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique tempore ratione eveniet optio non corporis voluptate, quam totam facere velit qui perferendis dolor deserunt obcaecati ab pariatur veritatis, aperiam commodi.</p>

    <span>Ya vistes que si filtrastes</span>
    
    
</body>
</html>


<?php 

    function renderList(string $titulo): void {

        echo "<span></span>";
        echo "<h1>{$titulo}</h1>";  
        echo "<ul>";
            
            $items = array(2,3,4,5,6,7);

            foreach ($items as $item) {
                echo "<li>{$item}</li>";
            }
        echo "</ul>";
    }
    
?>