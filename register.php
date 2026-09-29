
<?php
$name=$_POST['name'];
$pass = $_POST['password'];
$email = $_POST['email'];
$crno = $_POST['creditcard'];
$phno = $_POST['phone'];
if(!preg_match("/^[A-Z a-z]+$/",$name)){
echo "invalid name";
}
elseif (!preg_match("/^[A-Za-z0-9]{8,}$/", $pass)) {
    echo "Invalid Password";
}
 elseif(!preg_match("/^[0-9]{16}$/", $crno)) {
        echo "Credit card number must contain exactly 16 digits";
    }
elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
    echo "Invalid Email";
}

elseif (!preg_match("/^[6-9][0-9]{9}$/", $phno)) {
    echo "Invalid Phone Number";
}
else {
    echo "Registration Successful";
}
?>