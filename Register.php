<?php 
if(isset($_POST['userName'])){


session_start();

$host = "localhost";
$user = "root";
$passwordHost = "";
$database = "club";


$conn = mysqli_connect($host, $user, $passwordHost, $database);
if (!$conn) {
  die("connection failed" . mysqli_connect_error());
}


 
$userName = $_POST['userName'];
$fullName = $_POST['fullName'];
$email = $_POST['emailAdd'];
$password = $_POST['password'];
$confirmPass = $_POST['confirmpassword'];
$dateBirth = $_POST['dateofbirth'];
$gender = $_POST['gender'];
$insta = $_POST['insta'];
$twt = $_POST['twt'];
$snap = $_POST['snap'];

 


//dataBase



if (!empty($_POST['userName']) && !empty($_POST['fullName']) && !empty($_POST['password']) && !empty($_POST['gender']) && !empty($_POST['emailAdd']) && !empty($_POST['dateofbirth'])  ) {
    if($_POST['password']===$_POST['confirmpassword']){
    
   
        $SELECT = "SELECT email,account_username From accounts Where email = ? or account_username = ? Limit 1";
        $INSERT = "INSERT Into accounts (account_id ,account_username ,account_fullname, password, gender, email, Date_of_birth ,account_instgram,account_twitter,account_snapchat) values( (select MAX(a.ACCOUNT_ID)+1 from accounts a) , ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("ss", $email ,$userName);
        $stmt->execute();
        $stmt->bind_result($email,$userName);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
             if ($rnum==0) {
               $stmt->close();
               $stmt = $conn->prepare($INSERT);
    
               $stmt->bind_param("sssssssss", $userName,$fullName, $password, $gender, $email, $dateBirth , $insta , $twt , $snap);
         
               $stmt->execute();
               $_SESSION['username'] = $userName;
               $_SESSION['password'] = $password;
               echo "<script>alert('New record inserted sucessfully')</script>";
               echo "<script>location.href='signinImpl.php'</script>";
             } else {
               echo "<script>alert('Someone already register using this email')</script>";
         
             }
        $stmt->close();
        $conn->close();
    }else{
        echo " <script>alert('password and confirm password are not same !!')</script> ";
    }
        
       
 }
  else {
    echo " <script>alert('All field are required')</script> ";
    
    
   }
}
?>
