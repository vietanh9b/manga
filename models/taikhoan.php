<?php
    function load_all_tk(){
        $sql="select * from taikhoan where 1";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }
    function delete_tk($id){
        $sql = "DELETE FROM taikhoan WHERE id=" .$id;
        pdo_execute($sql);
    }
    function UserLogIn() {
        return isset($_SESSION['iduser']);
    }
    function getLogInUserName() {
        if (UserLogIn()) {
            $userInfo = $_SESSION['username']; 
            return $userInfo;
        } else {
            return null;
        }
    }
//    đăng ký
    function insert_taikhoan($username,$email,$pass){
        $query="INSERT INTO `taikhoan` (`id`, `user_name`, `pass_word`, `email`, `role`, `so_tien`) 
    VALUES (NULL, '".$username."', '".$pass."', '".$email."', '0','0');";
        $insert_tk=pdo_execute($query);
        return $insert_tk;
    }

function find_taikhoan($username,$pass){
    $query="SELECT * FROM `taikhoan` WHERE `taikhoan`.`user_name`='$username' and `taikhoan`.`pass_word`='$pass';";
    $find_tk=pdo_query_one($query);
    return $find_tk;
}
function find_taikhoan_admin($username,$pass){
    $query="SELECT * FROM `admin` WHERE `admin`.`user_name`='$username' and `admin`.`pass_word`='$pass';";
    $find_tk=pdo_query_one($query);
    return $find_tk;
}
function find_matkhau($pass){
    $query="SELECT * FROM `taikhoan` WHERE `taikhoan`.`pass_word`='$pass';";
    $find_mk=pdo_query_one($query);
    return $find_mk;
}
function doi_matkhau($new_mk){
    $query="UPDATE `taikhoan` SET `pass_word` = ".$new_mk." WHERE `taikhoan`.`id` = ".$_SESSION['iduser'].";";
    $change_mk=pdo_execute($query);
    return $change_mk;
    }
function sendMail($email) {
    $sql="SELECT * FROM taikhoan WHERE email='$email'";
    $taikhoan = pdo_query_one($sql);

    if ($taikhoan != false) {
        sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);
        return "gui email thanh cong";
    } else {
        return "Email bạn nhập ko có trong hệ thống";
    }
}

function sendMailPass($email, $username, $pass) {
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'datahihi1100@gmail.com';                     //SMTP username
        $mail->Password   = 'datahihih1';                               //SMTP password
//        mật khẩu ứng dụng
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('datahihi1100@gmail.com', 'datahihi1');
        $mail->addAddress($email, $username);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Nguoi dung quen mat khau';
        $mail->Body    = 'Mau khau cua ban la' .$pass;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>