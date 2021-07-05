<?php
include "db_connect.php";
$id = $_GET['id'];
$id = mysqli_real_escape_string($conn, $id);
$delete_note = mysqli_query($conn, "DELETE FROM seller_notes WHERE id=$id");

if ($delete_note) {
    header('Location:dashboard.php');
} else {
    echo "Query Failed for Id=" . $id . "<br>Refresh the page<br>" . "<a href='dashboard.php'>dashboard</a>";
    echo "<br><br><a href='http://localhost/NotesMarketPlace/front/delete_draft.php?id=$id'>Retry!</a>";
}