<?php
include 'connxion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM exercice WHERE id = $id";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $dateC = $_POST['dateC'];

    $query = "UPDATE exercice SET titre = '$titre', auteur = '$auteur',
date_creation= '$dateC'  WHERE id = $id";
    if (mysqli_query($connect, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="titre" value="<?php echo $row['titre']; ?>" required>
        <input type="text" name="auteur" value="<?php echo $row['auteur']; ?>" required>
        <input type="date" name="dateC" value="<?php echo $row['date_creation']; ?>" required>
        <input type="submit" name="update" value="Update">
    </form>
</body>

</html>