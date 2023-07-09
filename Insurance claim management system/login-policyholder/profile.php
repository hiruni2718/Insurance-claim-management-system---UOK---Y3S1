<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>IT SourceCode</title>
    <link rel="stylesheet" href="libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/style.css">
</head>
<?php
include 'db_conn.php';
session_start();
$email = $_SESSION['email'];
$query = mysqli_query($db_name, "SELECT * FROM users WHERE email='$email'");
$row = mysqli_fetch_array($query);
?>
<h1>User Profile</h1>
<div class="profile-input-field">
    <h3>Please Fill-out All Fields</h3>
    <form method="post" action="#">
        <div class="form-group">
            <label>Fullname</label>
            <input type="text" class="form-control" name="name" style="width:20em;" placeholder="Enter your Fullname"
                   value="<?php echo $row['name']; ?>" required/>
        </div>
        <div class="form-group">
            <label>Gender</label>
            <input type="text" class="form-control" name="gender" style="width:20em;" placeholder="Enter your Gender"
                   required value="<?php echo $row['gender']; ?>"/>
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control" name="age" style="width:20em;" placeholder="Enter your Age"
                   value="<?php echo $row['age']; ?>">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" style="width:20em;" required
                   placeholder="Enter your Address" value="<?php echo $row['address']; ?>"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
            <center>
                <a href="logout.php">Log out</a>
            </center>
        </div>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $fullname = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    // You don't need this line, remove it
    // $email = $_POST['email'];

    // Retrieve the user ID from the session instead of email
    $id = $_SESSION['id'];

    $query = "UPDATE users SET name = '$fullname', gender = '$gender', age = '$age', address = '$address'
              WHERE user_id = '$id'";
    $result = mysqli_query($db_name, $query) or die(mysqli_error($db_name));

    if ($result) {
        ?>
        <script type="text/javascript">
            alert("Update Successful.");
            window.location = "index.php";
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("Update Failed.");
        </script>
        <?php
    }
}
?>
</html>

