
<?php
$db = new mysqli('localhost', 'root', '', 'egzamin');
$sql = "SELECT * FROM wycieczki WHERE dostepna = 1";
$result = $db->query($sql);

    while ($row = $result->fetch_assoc()) {
        $dataWyjazdu = $row['dataWyjazdu'];
        $cel = $row['cel'];
        $cena = $row['cena'];
        $dostepna = $row['dostepna'];
        echo "
<style>
table {
    border-collapse: collapse;
}
th {
    border: 1px solid #000;
    text-align: left;
    padding: 8px;
    width: 100px;
}
th:nth-child(even) {
    background-color: #dddddd;
}
</style> 
<table>
    <tr>
    <th>$dataWyjazdu</th>
    <th>$cel</th>
    <th>$cena</th>
    <th>$dostepna</th>
    </tr>
</table>";
    }

$db->close();
?>