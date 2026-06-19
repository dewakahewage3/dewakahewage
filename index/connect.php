<?php $server_name="localhost";
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $email_subject = $_POST['email_subject'];
    $your_message = $_POST['your_message']; 

$con=new mysqli('localhost','root','','contact_me');

if($con)
{
    echo "Connection Successfull";
    $sql="insert into 'contact'(full_name,email,number,email_subject,your_message)values('$full_name','$email','$number','$email_subject','$your_message')";
    $result=mysqli_query($con,$sql);
    if(result){
        echo "Details submitted successfully";
    }else{
        die(mysqli_error($con));
    }
} else {
    die(mysqli_error($con));
}
}