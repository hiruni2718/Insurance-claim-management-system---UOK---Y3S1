<?php
include "db_conn.php";

$policy_id = $_GET["policy_id"] ?? "";

if (isset($_POST["submit"])) {
  $policyholder_id = $_POST['policyholder_id'];
  $description = $_POST['description'];
  $premium_amount = $_POST['premium_amount'];
  $claim_amount = $_POST['claim_amount'];
  $admit_date = $_POST['admit_date'];
  $discharge_date = $_POST['discharge_date'];
  $death_date = $_POST['death_date'];
  $death_reason = $_POST['death_reason'];
  $hospital_name = $_POST['hospital_name'];
  $bank_name = $_POST['bank_name'];
  $branch = $_POST['branch'];
  $acc_no = $_POST['acc_no'];

  $sql = "UPDATE `submitted_claim` SET `policyholder_id`='$policyholder_id', `description`='$description',
  `premium_amount`='$premium_amount', `claim_amount`='$claim_amount', `admit_date`='$admit_date', `discharge_date`='$discharge_date',
  `death_date`='$death_date', `death_reason`='$death_reason', `hospital_name`='$hospital_name', `bank_name`='$bank_name', `branch`='$branch',
  `acc_no`='$acc_no' WHERE `policy_id` = '$policy_id'";

  $result = mysqli_query($conn, $sql);
  // $row = mysqli_fetch_assoc($result);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
    exit();
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
  integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
  crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP CRUD Application</title>
</head>

<body>
  <!-- <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    Update claim details
  </nav> -->

  <div class="container">
    <div class="text-center mb-4">
      <h3>Update claim details</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
        // $sql = "SELECT * FROM 'submitted_claim' WHERE policy_id = $policy_id LIMIT 1";
        $sql = "SELECT * FROM `submitted_claim` WHERE policy_id = '$policy_id' LIMIT 1";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="col">
          <label for="policyholder_id" class="form-label">Policyholder ID:</label>
          <input type="text" class="form-control" name="policyholder_id" id="policyholder_id" value="<?php echo isset($row['policyholder_id']) ? $row['policyholder_id'] : ''; ?>">
        </div>
        
        <div class="col">
  <label for="description" class="form-label">Description:</label>
  <input type="currency" class="form-control" name="description" id="description" value="<?php echo isset($row['description']) ? $row['description'] : ''; ?>">
</div>
<div class="col">
  <label for="premium_amount" class="form-label">Premium amount:</label>
  <input type="currency" class="form-control" name="premium_amount" id="premium_amount" value="<?php echo isset($row['premium_amount']) ? $row['premium_amount'] : ''; ?>">
</div>
        <div class="col">
          <label class="form-label">Claim amount:</label>
          <input type="text" class="form-control" name="claim_amount" id="claim_amount" value="<?php echo isset($row['claim_amount']) ? $row['claim_amount'] : ''; ?>">
        </div>
        <div class="col">
          <label class="form-label">Admit date:</label>
          <input type="date" class="form-control" name="admit_date" id="admit_date" value="<?php echo isset($row['admit_date']) ? $row['admit_date'] : ''; ?>">
        </div>
        <div class="col">
          <label class="form-label">Discharge date:</label>
          <input type="date" class="form-control" name="discharge_date" id="discharge_date" value="<?php echo isset($row['discharge_date']) ? $row['discharge_date'] : ''; ?>">
        </div>
        <div class="col">
          <label class="form-label">Death date:</label>
          <input type="date" class="form-control" name="death_date" id="death_date" value="<?php echo isset($row['death_date']) ? $row['death_date'] : ''; ?>">
        </div>
        <div class="col">
          <label class="form-label">Death reason:</label>
          <input type="text" class="form-control" name="death_reason" id="death_reason" value="<?php echo isset($row['death_reason']) ? $row['death_reason'] : ''; ?>">
        </div>
        <div class="col">
          <label class="form-label">Hospital name:</label>
          <input type="text" class="form-control" name="hospital_name" id="hospital_name" value="<?php echo isset($row['hospital_name']) ? $row['hospital_name'] : ''; ?>">
        <div class="col">
          <label class="form-label">Bank name:</label>
          <input type="text" class="form-control" name="bank_name" id="bank_name" value="<?php echo isset($row['bank_name']) ? $row['bank_name'] : ''; ?>">
        </div>
        <div class="col">
          <label class="form-label">Branch:</label>
          <input type="text" class="form-control" name="branch" id="branch" value="<?php echo isset($row['branch']) ? $row['branch'] : ''; ?>">
        </div>
        <div class="col">
          <label class="form-label">Account number:</label>
          <input type="varchar" class="form-control" name="acc_no" id="acc_no" value="<?php echo isset($row['acc_no']) ? $row['acc_no'] : ''; ?>">
        </div>
        <br>
        <br>
        </div>
        <button type="submit" class="btn btn-success" name="submit">Update</button>
        <a href="index.php" class="btn btn-danger">Cancel</a>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
