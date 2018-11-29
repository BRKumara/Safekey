<?php
// session_start();
if (isset($_SESSION['type'])) {
    if ($_SESSION['type'] == 'superadmin') {
        ?>







        <!DOCTYPE html>
        <html>

            <head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>SAFE KEY IOT Based Home Security System </title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

                <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
                <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                <!------ footer ---------->
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">


            </head>

            <body style="background-color:white;">



                <!--Sidebar-->
                <div>
        <?php include 'Include_Main_Admin_sidebar.php'; ?>

                </div>

                <div class="w3-card-4_1">
                    <h3 style="text-align:  center; color: white; margin-top: 5px; ">Add Admin</h3>
                </div>
                <br>
                <div class="w3-card-4_2">
                    <form method="POST" action="Add_admin.php">
                        </br>



                        <div class="input-group" style="margin-left: 5px;" >

                            <input class="requiredstyle" type="text" id="name" name="name" placeholder=" Name">
                            <span class="error_form" id="firstname_error_message"></span>
                        </div>
                        </br>


                        <div class="input-group" style="margin-left: 5px;" >

                            <input class="requiredstyle" type="text" id="username" name="username" placeholder="User name">
                            <span class="error_form" id="lastname_error_message"></span>
                        </div>
                        </br>
                        <div class="input-group" style="margin-left: 5px;" >

                            <input class="requiredstyle" type="text" id="phonenumber" name="phonenumber" placeholder=" Phone Numbers">
                            <span class="error_form" id="phonenumber_error_message"></span>

                        </div>
                        </br>

                        <div class="input-group" style="margin-left: 5px;" >

                            <input class="requiredstyle" type="text" id="city" name="area" placeholder="Area" >
                            <span class="error_form" id="area_error_message"></span>

                        </div>
                        </br>
                        <div class="input-group" style="margin-left: 5px;" >

                            <input class="requiredstyle" type="text" id="address" name="address" placeholder=" Address" >
                            <span class="error_form" id="address_error_message"></span>

                        </div><br>

                        <div class="input-group" style="margin-left: 5px;" >

                            <input class="requiredstyle" type="text" id="email" name="email" placeholder=" Email">
                            <span class="error_form" id="email_error_message"></span>
                        </div>
                        </br>
                        <div class="input-group" style="margin-left: 5px;" >

                            <input class="requiredstyle" type="Password" id="password" name="password" placeholder=" Create Password">
                            <span class="error_form" id="password_error_message"></span>
                        </div>
                        </br>
                        <div class="input-group" style="margin-left: 5px;" >

                            <input class="requiredstyle" type="Password" id="confirm_password" name="confirm_password" placeholder=" Confirm Password" >
                            <span class="error_form" id="cpassword_error_message"></span>
                        </div>
                        </br>

                        <button class="button3" type="submit"style= "border-radius: 5px; color: white;">Register</button>

                    </form>
                </div>
            </div>
            <br>

            <br>
            <br>

            <style>
                .w3-card-4_1{
                    width:400px;
                    height:50px; 
                    margin: auto;
                    opacity: 0.9;
                    border-radius: 2px;
                    background-color: #000000;
                    padding-top: 10px;

                }
                .w3-card-4_2{
                    width:400px;
                    height:460px;
                    margin: auto;
                    text-align: center;
                    border-radius: 5px;
                    opacity: 0.9;
                    background-color: #000000;

                }


                .requiredstyle{
                    height: 35px; 
                    border-radius: 5px; 
                    width: 350px;
                }

                .footer {

                    left: 0;
                    bottom: 0;
                    width: 100%;
                    background-color: #000000;
                    color: white;
                    text-align: center;
                    opacity: 0.8;
                }
                .button3 {
                    background-color: #000000;
                    color: black; 
                    opacity: 1.5;
                    width: 100%;
                    height:50px;
                }

                .button3:hover {
                    background-color: #32CD32 ;
                    color: #FFFFFF;
                    font-weight: 700;
                    font-size: 20px;
                }



            </style>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {


                $name = $_POST['name'];
                $username = $_POST['username'];
                $phonenumber = $_POST['phonenumber'];
                $area = $_POST['area'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $password = $_POST['password'];



                $servername = "localhost";
                $uname = "root";
                $psword = "";
                $dbname = "iot_home_security";


                $conn = new mysqli($servername, $uname, $psword, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }


                $sql1 = "SELECT * FROM login WHERE username='$username'";
                $result1 = mysqli_query($conn, $sql1);
                $sql2 = "INSERT INTO comp_user (name, phone_number, email, area, password, username, role) VALUES ('$name','$phonenumber','$email','$area','$password','$username','admin')";
                $sql3 = "INSERT INTO login (u_type,username,password) VALUES ('admin','$username','$password')";

                if (mysqli_num_rows($result1) == 0) {
                    if (mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3)) {

                        echo "New record created successfully";
                        //popup msg!!!
                    } else {
                        echo "Error: " . $sql1 . "<br>" . $conn->error;
                    }
                } else {
                    echo "Username Exists!";
                }
                $conn->close();
            }
            ?>


            <script type="text/javascript">
                $(function () {


                    $("#firstname_error_message").hide();
                    $("#lastname_error_message").hide();
                    $("#email_error_message").hide();
                    $("#phonenumber_error_message").hide();
                    $("#aera_error_message").hide();
                    $("#address_error_message").hide();
                    $("#password_error_message").hide();
                    $("#cpassword_error_message").hide();

                    var error_fname = false;
                    var error_lastname = false;
                    var error_email = false;
                    var error_phonenumber = false;
                    var error_area = false;
                    var error_address = false;
                    var error_password = false;
                    var error_cpassowrd = false;

                    $("#firstname").focusout(function () {
                        check_fname();
                    });
                    $("#lastname").focusout(function () {
                        check_lastname();
                    });

                    $("#email").focusout(function () {
                        check_email();
                    });


                    function check_deviceid() {
                        var pattern = /^[0-9]*$/;
                        var deviceid = $("#deviceid").val();
                        if (deviceid !== '') {

                            if (pattern.test(fname)) {

                                $("#deviceid_error_message").hide();
                                $("#deviceid").css("border-bottom", "2px solid #34F458");
                            } else {

                                $("#deviceid_error_message").html("Should contain only  Integer Numbers");
                                $("#deviceid_error_message").show();
                                $("#deviceid").css("border-bottom", "2px solid #F90A0A");
                                error_fname = true;
                            }
                        } else {
                            $("#deviceid_error_message").html("Should not be Empty");
                            $("#deviceid_error_message").show();
                            $("#deviceid").css("border-bottom", "2px solid #F90A0A");
                            error_fname = true;
                        }
                    }

                    function check_fname() {
                        var pattern = /^[a-zA-Z]*$/;
                        var fname = $("#firstname").val();
                        if (fname !== '') {

                            if (pattern.test(fname)) {

                                $("#firstname_error_message").hide();
                                $("#firstname").css("border-bottom", "2px solid #34F458");
                            } else {

                                $("#firstname_error_message").html("Should contain only Alphabets");
                                $("#firstname_error_message").show();
                                $("#firstname").css("border-bottom", "2px solid #F90A0A");
                                error_fname = true;
                            }
                        } else {
                            $("#firstname_error_message").html("Should not be Empty");
                            $("#firstname_error_message").show();
                            $("#firstname").css("border-bottom", "2px solid #F90A0A");
                            error_fname = true;
                        }
                    }


                    function check_lastname() {
                        var pattern = /^[a-zA-Z]*$/;
                        var lastname = $("#lastname").val();
                        if (lastname !== '') {

                            if (pattern.test(lastname)) {

                                $("#lastname_error_message").hide();
                                $("#lastname").css("border-bottom", "2px solid #34F458");
                            } else {

                                $("#lasstname_error_message").html("Should contain only Alphabets");
                                $("#lastname_error_message").show();
                                $("#lastname").css("border-bottom", "2px solid #F90A0A");
                                error_fname = true;
                            }
                        } else {
                            $("#lastname_error_message").html("Should not be Empty");
                            $("#lastname_error_message").show();
                            $("#lastname").css("border-bottom", "2px solid #F90A0A");
                            error_fname = true;
                        }
                    }

                    function check_email() {
                        var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                        var email = $("#email").val();
                        if (pattern.test(email) && email !== '') {
                            $("#email_error_message").hide();
                            $("#email").css("border-bottom", "2px solid #34F458");
                        } else {
                            $("#email_error_message").html("Invalid Email");
                            $("#email_error_message").show();
                            $("#email").css("border-bottom", "2px solid #F90A0A");
                            error_email = true;
                        }
                    }

                    $("#registration_form").submit(function () {
                        error_fname = false;
                        // error_sname = false;
                        error_email = false;
                        error_password = false;
                        //error_retype_password = false;

                        check_fname();
                        check_sname();
                        check_email();
                        check_password();
                        check_retype_password();
                        if (error_fname === false) {
                            alert("Registration Successfull");
                            return true;
                        } else {
                            alert("Please Fill the form Correctly");
                            return false;
                        }


                    });
                });
            </script>





            <?php
        } else {
            header("location: Login.php");
        }
    } else {
        header("location: Login.php");
    }
    ?>
