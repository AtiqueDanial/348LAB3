<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            padding: 5px;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h1>Multiplication Table</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get and validate input
        $size = intval($_POST["size"]);

        if ($size <= 0) {
            echo "<p>Please enter a positive number.</p>";
        } else {
            echo "<table>";
            
            // Top header row
            echo "<tr><th>*</th>";
            for ($col = 1; $col <= $size; $col++) {
                echo "<th>$col</th>";
            }
            echo "</tr>";

            // Table body
            for ($row = 1; $row <= $size; $row++) {
                echo "<tr>";
                echo "<th>$row</th>"; // Row header
                for ($col = 1; $col <= $size; $col++) {
                    echo "<td>" . ($row * $col) . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        }
    } else {
        echo "<p>No size was entered.</p>";
    }
    ?>
</body>
</html>
