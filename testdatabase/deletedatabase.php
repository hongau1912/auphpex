<?php 
    require_once('/Applications/XAMPP/xamppfiles/htdocs/auphpex/testdatabase/model/connectdatabase.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM testdatabase WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if( $result) {
        header('Location: http://localhost/auphpex/testdatabase/readdatabase.php');
    }
?>