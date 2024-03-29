<?php
$con =mysqli_connect("localhost","root"," ","Bharath");
if($con){
    die('connection failed')
}
if(isset($_post['submit']))
{
    $community = $_POST['community'];
    $member = $_POST['member'];
    $regno = $_POST['regno'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $mobileNumber = $_POST['mobileNumber'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $PresentAddress = $_POST['PresentAddress'];
    $PermanentAddress = $_POST['PermanentAddress'];
    $businessName = $_POST['businessName'];
    $designation = $_POST['designation'];
    $specialization = $_POST['specialization'];
    $skills = $_POST['skills'];

    $sql_query = "insert into user_details(community,member,regno,fname,email,pass,mobileNumber,dob,gender,PresentAddress,PermanentAddress,businessName,designation,specialization,skills) 
    values('$community','$member','$regno','$fname','$email','$pass','$mobileNumber','$dob','$gender','$PresentAddress','$PermanentAddress','$businessName','$designation','$specialization','$skills')"
    if(mysqli_query($con,$sql_query))
    {
        echo"Success";
    }
    else{
        echo"erro";
    }
    mysqli_close($con);
}
?>[p]