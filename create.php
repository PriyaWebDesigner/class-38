
<?php

include 'config.php';

?>

<?php

if(isset($_post['submit'])){

    $name  = $_post['Name'];
    $dob   = $_post['Date_of_Birth'];
    $place = $_post['Birthplace'];
    $works = $_post['His_Her_Works'];

    $query = "INSERT INTO authors (Name, Date_of_Birth, Birthplace, His_Her_Works) VALUES ('$name', '$dob', '$place', '$works')";
    $insertData = mysqli_query($connection, $query);

    if($insertData){
        // echo 'Data inserted successfully';
        header('location:index.php');
        
    }
    else{
        echo 'Failed to insert Data';
    }


}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>PHP CRUD</title>
  </head>
  <body>
  <section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Insert Data</a>
        </li>
    </div>
  </div>
</nav>
    </section>
    <section class="mt-5 container">
    <form action="" method="post">
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" class="form-control" name="Name" id="Name" required>
  </div>
  <div class="mb-3">
    <label for="Date_of_Birth" class="form-label">Date of Birth</label>
    <input type="text" class="form-control" name="Date_of_Birth" id="Date_of_Birth" required>
  </div>
  <div class="mb-3">
    <label for="Birthplace" class="form-label">Birthplace</label>
    <input type="text" class="form-control" name="Birthplace" id="Birthplace" required>
  </div>
  <div class="mb-3">
    <label for="His_Her_Works" class="form-label">His/Her Works</label>
    <input type="text" class="form-control" name="His_Her_Works" id="His_Her_Works" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>