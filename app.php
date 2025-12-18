<?php

	session_start();

	if ((!isset($_SESSION['zalogowany']))){
		header('Location: index.php');
		exit();
	}

?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Friends</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="post" action="addboard.php">
        <input type="text" name="tablica-nazwa" placeholder="Nowa tablica">
        <input type="submit" value="Dodaj tablice">
    </form>
    <?php

    require_once('connect.php');


    $conn = new mysqli($host, $db_user, $db_password, $db_name);

    $userID = $_SESSION['id'];
    
    if ($result->num_rows > 0) {
        // Pętla do wyświetlania wierszy jako akapity

        $sql = "SELECT * FROM example_table"; // Zmień "example_table" na nazwę swojej tabeli
        $result = $conn->query($sql);

        while ($wiersz = $result->fetch_assoc()) {
            if($wiersz['ownerID'] === $userID)
            echo "<p><strong>ID:</strong> " . htmlspecialchars($row['id']) . "</p>";
            echo "<p><strong>Nazwa:</strong> " . htmlspecialchars($row['nazwa']) . "</p>";
            echo "<hr>"; // Separator między rekordami
            }
        }
    
    ?>
</body>
</html>