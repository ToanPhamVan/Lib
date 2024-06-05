<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $search = mysqli_real_escape_string($db, $_POST['search']);
    $query = "SELECT * FROM books WHERE name LIKE '%$search%'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div>" . $row['name'] . "</div>";
        }
    } else {
        echo "Sorry! No book found.";
    }
}
?>
