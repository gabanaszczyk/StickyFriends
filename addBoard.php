<?php
    require_once('connect.php');
    

	session_start();

	if ((!isset($_SESSION['zalogowany']))){
		header('Location: index.php');
		exit();
	}


    $conn = new mysqli($host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Error: " . $conn->connect_error);
    }

    $nazwa = $_POST['tablica-nazwa'];
    $userID = $_SESSION['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $sql = "INSERT INTO `tablice`(`id`, `nazwa`, `ownerID`) VALUES (NULL, '$nazwa', '$userID')";

        if ($conn->query($sql) === TRUE) {
            header('Location: app.php');
        } else {
            echo "<p>Error: " . $conn->error . "</p>";
        }
    }
    $conn->close();
?>