<?php
include 'connxion.php';

if (isset($_POST['submit'])) {

    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $datec = $_POST['dateC'];
    $query = "INSERT INTO exercice(titre,auteur,date_creation) values( '$titre',' $auteur','$datec') ";
    mysqli_query($connect, $query);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>js</title>
</head>

<body>
    <form action="" method="POST">
        <fieldset>
            <legend>ajouter un exerice</legend>
            <input type="text" name="titre" placeholder="ajouter titre">
            <input type="text" name="auteur" placeholder="ajouter auter">
            <input type="date" name="dateC">
            <input type="submit" name="submit" value="ajouter titre">

        </fieldset>

    </form>

    <table border="1">
        <thead>
            <tr>
                <th>titre</th>
                <th>autour</th>
                <th>date</th>
                <th>action</th>

            </tr>
        </thead>

        <tbody>
            <?php
$query = "SELECT * from exercice ";
$res = mysqli_query($connect, $query);
while (
    $row = mysqli_fetch_assoc($res)
) {
    echo "<tr>

                          <td>{$row['titre']}</td>
                          <td>{$row['auteur']}</td>
                          <td>{$row['date_creation']}</td>

<td>

<a href='edit.php?id={$row['id']}'>edit</a>
<a href='delete.php?id={$row['id']}'>delete</a>

</td>

                </tr>";
}
?>
        </tbody>
    </table>
</body>

</html>