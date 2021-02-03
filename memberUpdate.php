<?php

$host = "localhost";
$user = "root";
$passwordHost = "";
$database = "club";


$conn = mysqli_connect($host, $user, $passwordHost, $database);
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}



if (isset($_POST['UserName'])) {
    $name = $_POST['UserName'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $dateBirth = $_POST['dateofbirth'];
    $insta = $_POST['insta'];
    $twt = $_POST['twt'];
    $snap = $_POST['snap'];

    if ($_POST['oldPassword'] == "") {
        $oldPassword = $_SESSION['password'];
        $newPassword = $_SESSION['password'];
    } else {
        $oldPassword = $_POST['oldPassword'];
        $newPassword = $_POST['newPassword'];
        $confirmPass = $_POST['newPasswordconfirm'];
    }


    if (!empty($_POST['UserName']) && !empty($_POST['email']) && !empty($_POST['dateofbirth'])) {

        if ($_POST['newPassword'] === $_POST['newPasswordconfirm']) {
            if ($_SESSION['password'] == $oldPassword) {


                $SELECTEmail = "SELECT email From accounts Where email = ?     Limit 1";
                $SELECTUser = "SELECT account_username From accounts Where   account_username = ?    Limit 1";
                $UPDATE = "update accounts set account_username=? ,account_fullname=? , password=?, email=?, Date_of_birth=? ,account_twitter=? , account_instgram=? , account_snapchat=?  where account_username='{$_SESSION['username']}'  and email='{$_SESSION['email']}' ";
                $sql = "select * from accounts where (account_username='$name' and password=$newPassword) Or (email='$email' and password=$newPassword) ;";
                //Prepare statement
                if ($email != $_SESSION['email']) {
                    $stmt = $conn->prepare($SELECTEmail);
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $stmt->bind_result($email);
                    $stmt->store_result();
                    $rnum = $stmt->num_rows;
                    if ($rnum == 0) {
                        $stmt->close();
                    } else {
                        echo "<script>alert('Someone already register using this email')</script>";
                        die;
                    }
                } else if ($name != $_SESSION['username']) {
                    $stmt = $conn->prepare($SELECTUser);
                    $stmt->bind_param("s", $name);
                    $stmt->execute();
                    $stmt->bind_result($name);
                    $stmt->store_result();
                    $rnum = $stmt->num_rows;
                    if ($rnum == 0) {
                        $stmt->close();
                    } else {
                        echo "<script>alert('Someone already register using this user name')</script>";
                        die;
                    }
                }

                $stmt = $conn->prepare($UPDATE);

                $stmt->bind_param("ssssssss", $name, $fullName,  $newPassword,  $email, $dateBirth, $twt, $insta, $snap);

                $stmt->execute();


                $stmt->close();
                $stmt = $conn->prepare($sql);

                $result = mysqli_query($conn, $sql)
                    or die("failed to data base" . mysqli_error($conn));


                $row = mysqli_fetch_array($result);

                $_SESSION['fullname'] = $row['ACCOUNT_FULLNAME'];
                $_SESSION['username'] = $row['ACCOUNT_USERNAME'];
                $_SESSION['email'] = $row['EMAIL'];
                $_SESSION['password'] = $row['PASSWORD'];
                $_SESSION['dateBirth'] = $row['Date_of_birth'];
                $_SESSION['twt'] = $row['ACCOUNT_TWITTER'];
                $_SESSION['insta'] = $row['ACCOUNT_INSTGRAM'];
                $_SESSION['snap'] = $row['ACCOUNT_SNAPCHAT'];

                echo "<script>alert('New record updated sucessfully')</script>";
                echo "<script>location.href='memberProfile.php?id={$_SESSION['account_id']}'</script>";
            } else {
                echo "<script>alert('the old password is not correct')</script>";
            }
            $stmt->close();
            $conn->close();
        } else {
            echo " <script>alert('password and confirm password are not same !!')</script> ";
        }
    } else {
        echo 'wrooooooooooooooooooooooooooooooong';
    }
}
