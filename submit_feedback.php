 <?php
$name=$_POST['name'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];
$rating=$_POST['rating'];

$conn =  new mysqli('localhost', 'root', '', 'campaign_feedback');

if ($conn->connect_error){
    die('Conncetion Failed :'.$conn->connect_error);
}else{
 $stmt =$conn->prepare("insert into feedback (name,email,feedback,rating) values(?,?,?,?)");
 $stmt->bind_param("sssi" ,$name,$email,$feedback,$rating);
 $stmt->Execute();
 echo"Thank you for your Feedback...";

 $stmt->close();
 $conn->close();
}
?>