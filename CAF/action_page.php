<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$categories=html_entity_decode(($_POST['type']));
$date = ($_POST['day']);
/*
echo ($categories);
echo ("<BR>");
echo ($date);
echo ("<BR>");
*/
$user='CAF';
$pass='caf';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=sorties', $user, $pass);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    ?>
    <table>
    <tr>
    <td>Titre</td><td>Lieu</td>
    <td>Date</td><td>Type</td>
    <td>Responsable</td><td>Participants</td>
    <td>Complet</td>
    <td>Statut</td><td>Description</td>
    </tr>

    <?php
    foreach($dbh->query("SELECT * from sorties WHERE type='$categories'") as $row) {
        echo("<tr>");
        for ($i=1;$i<=9;$i++){
        echo("<td>");
        print_r($row[$i]);
        echo ("</td>");
        }
        echo("<tr>");
    }
    $dbh = null;
?>
</table>
</body>
</html>
