<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 170px;
      }
    </style>
  </head>
  <body>
    <div class="div1">
      <?php
      include 'db.php';

      $sql="SELECT pdf from pdf_data";
      $query=mysqli_query($conn,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
      <embed type="application/pdf" src="pdf/<?php echo $info['pdf'] ; ?>" width="900" height="500">
    <?php
      }

      ?>

    </div>

  </body>
</html> -->



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Display PDF</title>
  <style media="screen">

    .pdf-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 30px;
    }
    .pdf-item {
      border: 2px solid black;
      margin-bottom: 20px;
      padding: 10px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .pdf-item embed {
      margin-right: 10px;
    }
    .pdf-buttons {
      margin-left: auto;
    }
    .search-form {
      margin-bottom: 20px;
    }
    .search-form form {
      text-align: center;
      margin-bottom: 20px;
    }

    .search-form input[type="text"],
    .search-form button {
      height: 30px;
      padding: 0 10px;
    }

    .search-form button {
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    .search-form button:hover {
      background-color: #45a049;
    }

    .pdf-buttons a {
      display: inline-block;
      padding: 8px 16px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .pdf-buttons a:hover {
      background-color: #45a049;
    }

  </style>
</head>
<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    Submitted policyholder documents
  </nav>
  <div class="search-form">
    <form action="" method="GET">
      <input type="text" name="search" placeholder="Search PDF" />
      <button type="submit">Search</button>
    </form>
  </div>

  <div class="pdf-container">
    <?php
    include 'db.php';

    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $sql = "SELECT pdf FROM pdf_data WHERE pdf LIKE '%$search%'";
    $query = mysqli_query($conn, $sql);
    while ($info = mysqli_fetch_array($query)) {
      $pdfFile = $info['pdf'];
      $pdfFilePath = "pdf/$pdfFile";
    ?>
      <div class="pdf-item">
        <embed type="application/pdf" src="<?php echo $pdfFilePath; ?>" width="600" height="400">
        <div class="pdf-buttons">
          <a href="download.php?file=<?php echo $pdfFile; ?>" target="_blank">Download</a>
          <a href="delete.php?file=<?php echo $pdfFile; ?>">Delete</a>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</body>
</html>
