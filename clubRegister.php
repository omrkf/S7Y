<?php 
if(isset($_POST['clubName'])){

 

session_start();

$host = "localhost";
$user = "root";
$passwordHost = "";
$database = "club";


$conn = mysqli_connect($host, $user, $passwordHost, $database);
if (!$conn) {
  die("connection failed" . mysqli_connect_error());
}



 
$clubName = $_POST['clubName'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPass = $_POST['confirmPassword'];
$workTime = $_POST['workStart']."-".$_POST['workEnd'];

$kind = $_POST['kind'];

//not require

$pic_name = $_FILES['picture']['name'];

$picture="img/".$pic_name;
$descript= $_POST['descript'];
$insta = $_POST['insta'];
$twt = $_POST['twt'];
$snap = $_POST['snap'];
$location=" ";


 


//dataBase



if (!empty($_POST['clubName']) && !empty($workTime) && !empty($_POST['password']) &&  !empty($_POST['email'])   ) {
    if($_POST['password']===$_POST['confirmPassword']){
    
   
        $SELECT = "SELECT email,account_username From accounts Where email = ? or account_username = ? Limit 1";
        $INSERT_ACC = "INSERT Into accounts (account_id , account_username , password , email, account_instgram , account_twitter , account_snapchat) values( (select MAX(a.ACCOUNT_ID)+1 from accounts a) , ?, ?, ?, ?, ?, ?) ";
        $INSERT_C = "   INSERT Into clubs (club_id , club_name , description , work_time , picture , location) values (  (select account_id from accounts where account_username = ? ) ,?,?,?,?,?) ";
        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("ss", $email ,$clubName);
        $stmt->execute();
        $stmt->bind_result($email,$clubName);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
             if ($rnum==0) {
               $stmt->close();

               $stmt = $conn->prepare($INSERT_ACC);
    
               $stmt->bind_param("ssssss", $clubName, $password,  $email ,$insta,$twt,$snap );
         
               $stmt->execute();


               $stmt->close();
               $stmt = $conn->prepare($INSERT_C);
    
               $stmt->bind_param("ssssss",$clubName, $clubName,$descript,$workTime ,$picture  ,$location );
         
               $stmt->execute();


               $_SESSION['username'] = $clubName;
               $_SESSION['password'] = $password;

               echo "<script>alert('New club inserted sucessfully')</script>";
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
