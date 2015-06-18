<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<table>
<tr>
<td bgcolor="#cccccc" align="center">Distance</td>
<td bgcolor="#cccccc" align="center">Cost</td>
</tr>
<?php
    $distance = 50;
    while ($distance <= 50) {
        echo "<tr>
        <td align=\"right\">".$distance."</td>
        <td align=\"right\">".($distance / 10)."</td>
        </tr>\n";
        $distance += 50;
    }
?>
</table>
</body>
</html>
