<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
</head>
<body>
<style>
    table {
        border-collapse: collapse;
    }

    td, th {
        border: 1px solid black;
        padding: 5px;
    }
</style>

<table>
    <tr>
    <th></th>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<th>$i</th>";
        }
        ?>
    </tr>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<th>$i</th>";
            for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
            }
        ?>
</table>

</body>
</html>




