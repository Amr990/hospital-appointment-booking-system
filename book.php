<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gad Hospital</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/JannaLTRegular.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>


  <div class="main">


    <section class="page" class=" vh-100 bg-image">
      <div class="logo">
        <img src="images/logo.png">
        <h2>Gad Hospital</h2>
      </div>
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                  <h2 class=" text-center mb-5">Welcome to Gad Hospital</h2>

                  <form action="book.php" method="post">


                    <div class="form-outline mb-4">
                      <input type="text" placeholder="Patient Name" id="form3Example1cg" class="form-control form-control-lg" name="name" required/>
                    </div>

                    <div class="form-outline mb-4">
                      <select name="specialty" class="form-select" aria-label="Default select example" required>
                          <option selected >choose a specialty</option>
                          <option value="1">General practice</option>
                          <option value="2">Pediatrics</option>
                          <option value="3">Radiology</option>
                          <option value="4">Ophthalmology</option>
                          <option value="5">Sports medicine and rehabilitation</option>
                          <option value="6">Oncology</option>
                          <option value="7">Dermatology</option>
                          <option value="8">Emergency Medicine</option>


                      </select>

                    </div>

                    <div class="form-outline mb-4">
                      <input type="time" min="12:00" max="21:00" required  id="form3Example1cg" class="form-control form-control-lg" name="time" />
                    </div>


                    <div class="form-outline mb-4">
                      <input type="date" id="form3Example1cg" class="form-control form-control-lg" name="date" required />

                    </div>


                    <div class="d-flex justify-content-center">
                      <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="submit">book</button>
                    </div>



                  </form>
                  <?php

                  $host = "localhost";
                  $user = "root";
                  $password = "";
                  $dbName  = "hospital system";

                  $conn = mysqli_connect($host, $user, $password, $dbName);

                  if (isset($conn) ) {
                    //echo "connnnected";
                    $pName            = $_POST['name'];
                    $pSpecialty       = $_POST['specialty'];
                    $pTime            = $_POST['time'];
                    $pDate            = $_POST['date'];
                  }
              

                  if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                  }
                  
                  $sql = "INSERT INTO patients (name, specialty, time, date)
                  VALUES ('$pName', '$pSpecialty', '$pTime', '$pDate')";
                  
                  if ($conn->query($sql) === TRUE) {
                    echo "successfully";
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                  
                  $conn->close();
                  


                  ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>

</html>