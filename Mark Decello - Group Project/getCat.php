<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','','abc123','forum');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"forum");
$sql="SELECT * FROM categories WHERE cat_id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>cat ID</th>
<th>categories</th>
<th>description</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['cat_id'] . "</td>";
    echo "<td>" . $row['cat_name'] . "</td>";
    echo "<td>" . $row['cat_description'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>