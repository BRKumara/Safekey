<!DOCTYPE html>
<html>
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <body>

        <!-- Sidebar -->
        <div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5; width:300px;" id="mySidebar">

            <a href="Admin.php" class="w3-bar-item w3-button w3-border w3-hover-teal glyphicon" style="font-size:20px; padding: 15px;">Main</a>
            <a href="Add_Device.php" class="w3-bar-item w3-button w3-border w3-hover-teal glyphicon" style="font-size:17px; padding: 15px;"> Add Device</a>
            <a href="Edit_Device.php" class="w3-bar-item w3-button w3-border w3-hover-teal glyphicon" style="font-size:17px; padding: 15px;">Edit Device</a>
            <a href="Reply_Inqueries.php" class="w3-bar-item w3-button w3-border w3-hover-teal glyphicon" style="font-size:17px; padding: 15px;">Reply Inqueries</a>
            <a href="View_Device.php" class="w3-bar-item w3-button w3-border w3-hover-teal glyphicon" style="font-size:17px; padding: 15px;"> View Device</a>

        </div>


        <!-- Page Content -->
        <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:hand;" id="myOverlay"></div>
        <div class="w3-bar w3-black" style="opacity: 0.8;">



            <div>

                <button class="w3-button w3-white w3-xlarge w3-hover-teal w3-bar-item" style="margin-left: 0px;" onclick="w3_open()">&#9776;</button>
                <p style=" font-family: Georgia;font-size:24px;font-weight:5px;">&nbsp; &nbsp;Home Security System

                    <a href="logout.php" style=" font-size:18px;margin-top:3px; margin-right:4px;  position: absolute; right: 0;">Sign Out</a>
                </p>  
                <div style="">


                </div>
            </div>

        </div>

    </div>

    <div style="width: 260px;;height:45px;background-color:white;color: #17D4FE;margin-left:1%;   ">
        <?php echo date(" l jS \of F Y"); ?> <?php include 'Include_Time.php'; ?> 


    </div>
    <script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }
    </script>

</body>
</html>
