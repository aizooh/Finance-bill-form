<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback results</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="bg-black">
    <div class="container">
        <div class="row mt-5">
       <div class="col">
        <div class="card mt-5">
        <div class="card-header">  
            <h2 class="display-6 text-center "> Feedback Results </h2>   
            </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <tr class="bg-black text-white">
                        <td>id</td>
                        <td>name</td>
                        <td>email</td>
                        <td>feedback</td>
                        <td>rating</td>
                        <td>submision_date </td>
            </tr>
            <tr >
<?php 
$con =  new mysqli('localhost', 'root', '', 'campaign_feedback');
if ($result->num_rows > 0) {
    echo "<table>"; // Open the table outside the loop
    echo "<tr class='bg-black text-white'>"; // Table header row
    echo "<th>id</th><th>name</th><th>email</th><th>feedback</th><th>rating</th><th>submission_date</th>";
    echo "</tr>";
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["ID"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["email"] . "</td>";
      echo "<td>" . htmlspecialchars($row["Feedback"]) . "</td>"; // Escape feedback data
      echo "<td>" . $row["Rating"] . "</td>";
      echo "<td>" . $row["Submission_date"] . "</td>";
      echo "</tr>";
    }
    echo "</table>"; // Close the table after the loop
  } else {
    echo "<p class='no-results'>No feedback found.</p>"; // Improved error message with formatting
  }
$con->close();


?>
           
            </table>
            </div>
 </div>
 </div>
</div>
 </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
