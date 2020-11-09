<?php
    use PHPMailer\PHPMailer\PHPMailer;
    include 'config.php';

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

    $Id=$_GET['id'];


$query="Select ListOfPeople,StartTime,EndTime from interview_schedule where id='$Id' ";
$res=mysqli_query($con,$query);
if($res)
{$row=mysqli_fetch_array($res);
    

$arr = preg_split ("/\,/",$row['ListOfPeople'] );
//print_r($arr);
$st=$row['StartTime'];
$en=$row['EndTime'];
//echo $st." ".$en;
for($i=0;$i<sizeof($arr);$i++)
{

        $name = 'Anand Kumar';
        $email = 'ana2702nd@gmail.com';
        $subject = 'Interview Timings';
        $body = 'You have an interview scheduled from '.$st.' to '.$en;

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "justtotest112@gmail.com";
        $mail->Password = 'Anand@123';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress($arr[$i]);
        $mail->Subject = $subject;
        $mail->Body = $body;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }



}

}
else
{
    echo "None fpund";
}
echo '<script>alert("mail sent")</script>';
header("Location:view.php");


    
?>
