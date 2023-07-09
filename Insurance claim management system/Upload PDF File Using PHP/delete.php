<?php
include 'db.php';

if (isset($_GET['file'])) {
    $filename = $_GET['file'];
    $filepath = 'pdf/' . $filename;

    if (file_exists($filepath)) {
        if (is_file($filepath)) {
            $sql = "DELETE FROM pdf_data WHERE pdf = '$filename'";
            if (mysqli_query($conn, $sql)) {
                unlink($filepath); // Delete the file from the server
                header("Location: display_pdf.php");
                echo 'File deleted successfully.';
            } else {
                echo 'Error deleting file from the database.';
            }
        } else {
            echo 'The specified path is not a file.';
        }
    } else {
        echo 'File not found.';
    }
}
?>
