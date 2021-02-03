<?php 
if(isset($_POST['coachName'])){

 
session_start();


$host = "localhost";
$user = "root";
$passwordHost = "";
$database = "club";


$conn = mysqli_connect($host, $user, $passwordHost, $database);
if (!$conn) {
  die("connection failed" . mysqli_connect_error());
}



 
$coachName = $_POST['coachName'];
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPass = $_POST['confirmPassword'];
$dateBirth = $_POST['dateofbirth'];
$gender = $_POST['gender'];

//not require

$certifcation = $_POST['certifcation'];
$insta = $_POST['insta'];
$twt = $_POST['twt'];
$snap = $_POST['snap'];

//picture
// $picture = $_FILES['picture'];
$pic_name = $_FILES['picture']['name'];

$picture="img/".$pic_name;
// $picExt = explode('.',$pic_name);
// $picActualExt = strtolower(end($pic_name));

// $allowed = array('jpg','jpeg','png','pdf');
 
// if(in_array($picActualExt,$allowed)){

// }else{
//     "Only picture uploaded";
// }

// if(getimagesize($pic_tmp)==false){
//  echo "please choose an image !!"  ; 
// }else {

// $pictre = base64_encode(file_get_contents(addslashes($pic_tmp)));
// }


//dataBase



if (!empty($_POST['coachName']) && !empty($_POST['fullName']) && !empty($_POST['password']) && !empty($_POST['gender']) && !empty($_POST['email']) && !empty($_POST['dateofbirth'])  ) {
    if($_POST['password']===$_POST['confirmPassword']){
    
   
        $SELECT = "SELECT email,account_username From accounts Where email = ? or account_username = ? Limit 1";
        $INSERT_ACC = "INSERT Into accounts (account_id , account_username , account_fullname ,Date_of_birth, gender, password , email , account_instgram , account_twitter , account_snapchat) values( (select MAX(a.ACCOUNT_ID)+1 from accounts a) ,  ?, ?, ?, ?, ?, ?, ?, ?, ?) ";
        $INSERT_Ch = "   INSERT Into coaches (coach_id  , picture , certifcation ) values (  (select account_id from accounts where account_username = ? )  ,?,?) ";
        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("ss", $email ,$coachName);
        $stmt->execute();
        $stmt->bind_result($email,$coachName);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
             if ($rnum==0) {
               $stmt->close();

               $stmt = $conn->prepare($INSERT_ACC);
    
               $stmt->bind_param("sssssssss", $coachName, $fullName , $dateBirth , $gender , $password,  $email , $insta , $twt , $snap );
         
               $stmt->execute();


               $stmt->close();
               $stmt = $conn->prepare($INSERT_Ch);
    
               $stmt->bind_param("sss" , $coachName ,  $picture , $certifcation  );
         
               $stmt->execute();
               $_SESSION['username'] = $coachName;
               $_SESSION['password'] = $password;



               echo "<script>alert('New coach inserted sucessfully')</script>";
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
