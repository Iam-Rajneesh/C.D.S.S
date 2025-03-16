<?php
include_once './include/config.php';
if (isset($_POST['Upload'])) {
  $name = $_POST['name'];
  $about = $_POST['about'];
  $cause = $_POST['causes'];
  $symptoms = $_POST['symptoms'];
  $treatment = $_POST['treatment'];
  $medicines = $_POST['medicines'];

  $query = mysqli_query($con, "INSERT INTO disease_entry(name_disease, about_disease, causes_disease, symptoms_disease, treatment_disease, medicines_disease) values('$name', '$about', '$cause', '$symptoms', '$treatment', '$medicines')");
  if ($query) {
    echo "<script>alert('Disease Uploaded successfully!');</script>";
  } else {
    echo "<script>alert('Unable to process your request. Try again!');</script>";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
    integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Clinical Decision Support System
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</head>

<body>
  <br><br><br><br>
  <div class="container">

    <div class="tab-pane" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">

      <form class="form-group" name="demo_entryform" method="post">

        <div class="row">
          <div class="col-md-4"><label>Name of Disease:</label></div>
          <div class="col-md-8">
            <textarea id="disease" cols="86" rows="3" name="name" required></textarea>
          </div><br><br><br>

          <div class="col-md-4"><label>About of Disease:</label></div>
          <div class="col-md-8">
            <textarea id="allergy" cols="86" rows="5" name="about" required></textarea>
          </div><br><br><br>

          <div class="col-md-4"><label>Causes of Disease:</label></div>
          <div class="col-md-8">
            <textarea id="prescription" cols="86" rows="10" name="causes" required></textarea>
          </div><br><br><br>

          <div class="col-md-4"><label>Symptoms of Disease:</label></div>
          <div class="col-md-8">
            <textarea id="symptom" cols="86" rows="10" name="symptoms" required></textarea>
          </div><br><br><br>

          <div class="col-md-4"><label>Treatment for Disease:</label></div>
          <div class="col-md-8">
            <textarea id="symptom" cols="86" rows="10" name="treatment" required></textarea>
          </div><br><br><br>

          <div class="col-md-4"><label>Medicines for Disease:</label></div>
          <div class="col-md-8">
            <textarea id="symptom" cols="86" rows="10" name="medicines" required></textarea>
          </div><br><br><br>
          <input type="submit" name="Upload" value="Upload" class="btn btn-success" style="margin-left: 40pc;">

      </form>
      <br>

    </div>
  </div>





  </div>






</body>

</html>