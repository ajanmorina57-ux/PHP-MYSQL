<DOCTYPE html>
<table border="1">
    <tr>
        <th>Phones</th>
        <th>In Stock</th>
        <th>Solid</th>

    </tr>


<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }


        tr:hover {
            background-color: #b0abab;
        }
</style>

<?php

$phone = array( 
        array("Samsung S24" , 20 , 10),
        array("Samsung S23" , 20 , 10),
        array("Samsung S22" , 20 , 10),
        array("Samsung S21" , 20 , 10)
);

for($row=0; $row<count($phone); $row++) {
    echo "<tr>";
    for($col=0; $col<3; $col++) {
        echo "<td>" . $phone[$row][$col] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
