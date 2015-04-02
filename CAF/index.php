<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Les sorties du CAF Marseille Provence</title>
</head>
<body>
<header></header>
<nav></nav>
<div>
    <form action="action_page.php" method="POST">
        <label>Type de sortie</label>
        <select name='type'>
            <option value='1' selected>Rando</option>
            <option value='2'>Escalade</option>
            <option value='3'>Spéléo</option>
            <option value='4'>Rando-Escalade</option>
        </select>
        <label>Date</label><input type="date" name="date">

        <input type="submit" value="OK" >
    </form>
    <?php
        echo ($_POST['type']);
        echo ("<BR>");
        echo ($_POST['date']);
     ?>
</div>
<footer></footer>
</body>
</html>