<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   // $claim_id = $_POST['claim_id'];
   $policy_id = $_POST['policy_id'];
   $policyholder_id = $_POST['policyholder_id'];
   $description = $_POST['description'];
   $premium_amount = $_POST['premium_amount'];
   $claim_amount = $_POST['claim_amount'];
   $admit_date = $_POST['admit_date'];
   $discharge_date = $_POST['discharge_date'];
  //  $death_date = $_POST['death_date'];
  //  $death_reason = $_POST['death_reason'];
   $hospital_name = $_POST['hospital_name'];
   $bank_name = $_POST['bank_name'];
   $branch = $_POST['branch'];
   $acc_no = $_POST['acc_no'];

   $sql = "INSERT INTO submitted_claim (policy_id, policyholder_id, description, premium_amount, claim_amount, admit_date, discharge_date, hospital_name, bank_name, branch, acc_no) 
VALUES ('$policy_id', '$policyholder_id', '$description', '$premium_amount', '$claim_amount', '$admit_date', '$discharge_date', '$hospital_name', '$bank_name', '$branch', '$acc_no')";


   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>PHP CRUD Application</title>
</head>

<body>
   <!-- <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      Add new claim details
   </nav> -->

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New claim</h3>
         <p class="text-muted">Complete the form below to add a new claim</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">policy ID:</label>
                  <input type="text" class="form-control" name="policy_id">
               </div>

               <div class="col">
                  <label class="form-label">policyholder ID:</label>
                  <input type="text" class="form-control" name="policyholder_id">
               </div>
            </div>
            <div class="col">
               <label class="form-label">Description:</label>
               <input type="text" class="form-control" name="description">
            </div>
            <div class="col">
                  <label class="form-label">Premium amount:</label>
                  <input type="text" class="form-control" name="premium_amount">
               </div>
               <div class="col">
                  <label class="form-label">Claim amount:</label>
                  <input type="text" class="form-control" name="claim_amount">
               </div>
            
            <div class="col">
               <label class="form-label">Admit date:</label>
               <input type="date" class="form-control" name="admit_date">
            </div>
            <div class="col">
                  <label class="form-label">Discharge date:</label>
                  <input type="date" class="form-control" name="discharge_date">
               </div>

               <!-- <div class="col">
                  <label class="form-label">Death date:</label>
                  <input type="date" class="form-control" name="death_date">
               </div>
          
            <div class="col">
               <label class="form-label">Death reason:</label>
               <input type="text" class="form-control" name="death_reason">
            </div> -->
            <div class="col">
                  <label class="form-label">Hospital name:</label>
                  <input type="text" class="form-control" name="hospital_name">
               </div>
               <div class="col">
                  <label class="form-label">Bank name:</label>
                  <input type="text" class="form-control" name="bank_name">
               </div>
               <div class="col">
                  <label class="form-label">Branch:</label>
                  <input type="text" class="form-control" name="branch">
               </div>
               <div class="col">
                  <label class="form-label">Account number:</label>
                  <input type="varchar" class="form-control" name="acc_no">
               </div>
               <br>
               <br>
            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>