
<?php
echo"<html>
    <head>
        <link rel='stylesheet'
          href=
'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    
        <style>
            .b{
                background-color: rgb(49, 49, 49);
                width:600px;
                height: 450px;
            }
            #d1{
                border: 2px solid green;
                margin-left: -490px;
                border-radius: 18px;

                
                
            }
            #d2{
               margin-left: -490px;
               border-radius: 18px;

            }
            #btn{
                margin-left: 200px;
                background-color: rgb(220, 235, 10);
                border-radius: 18px;
                height:50px;
                width:300px;
            }
            .icon1{
        margin-left:-500px;
}

            

            
        </style>
    </head>
    <body style='background-color:black;''><center><br><div class='b'><br><br>
        <div ><input type='text' id='d2'  placeholder='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name' style='width:500px; height:45px;'>
            <i class='fa fa-user icon1'></i></div><br>
    <div><input type='text' id='d1' placeholder='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone' style='width:500px; height:45px;'><i class='fa fa-mobile-phone icon1'></i></div><br>
    <div><input type='text' id='d1' placeholder='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email' style='width:500px; height:45px;'><i class='fa fa-envelope icon1'></i></div><br>
    <div><input type='password'   id='d1' placeholder='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; password' style='width:500px; height:45px;'><i class='fa fa-key icon1'></i></div><br>
    <div><span><input type='radio' class='d3' name='radio'><label style='color: white;'>I Agree to terms and conditions.</label></span><br>    
    <br><div><button id='btn'><center>Create Account</center></button></div>
     </center></div>
    </body>               
</html>"?>