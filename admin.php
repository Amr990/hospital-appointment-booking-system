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
        
    
    <section class="page"class=" vh-100 bg-image">
            <div class="logo">
            <img src="images/logo.png">
            <h2>Gad Hospital</h2>
        </div>
     <table>
         <tbody>
                   <tr>  
                      <th>Num</th>
                      <th>Patient Name</th>
                      <th>Specialty</th>
                      <th>Time</th>
                      <th>Date</th>
                   </tr>
         </tbody>
  </table>
        </section>
      
   
   <?php
 $host = "localhost";
 $user = "root";
 $password = "";
 $dbName  = "hospital system";

 $conn = mysqli_connect($host, $user, $password, $dbName);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT num, name, specialty,time,date FROM patients";
$result = $conn->query($sql);

if ($result->num_rows > 0) {


    while($row = $result->fetch_assoc()) {


  echo "<tr><td>" . $row['num'] . "</td><td>" . $row['name'] . "</td><td>" . $row['specialty'] . "</td><td>" . $row['time'] . "</td></td>". $row['date'] . "</td></tr>";
  
  }
} else {
  echo "faield";
}
$conn->close();
?>
  

            </body>
</html>