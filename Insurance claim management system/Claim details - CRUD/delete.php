<?php
include "db_conn.php";

if (isset($_GET["policy_id"])) {
  $policy_id = $_GET["policy_id"];

  $sql = "DELETE FROM submitted_claim WHERE policy_id = '$policy_id'";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data deleted successfully");
    exit(); // Add an exit() to stop executing the rest of the code
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}
?>
