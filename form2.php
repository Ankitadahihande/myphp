
<?php
echo"<html>
    <head>
        <link rel='stylesheet'
          href=
'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    
        <style>
            body{
                background-color: blue;
            }
            select{
                width:410px;
            }
            .square {
            height: 10px;
            width: 10px;
            background-color:white;
            text-align: right;
            
            }
            #d {
    width: 450px;
  border: 3px dashed;
  padding: 25px;
  margin: 10px;
  border-color: white;
}
    
.icon1{
    margin-left:-180px;
}
.d1{
    margin-left: -170px;
}
.d2{
    margin-left: -200px;

}
.d3{
    width:354px;
    margin-left: -352px;

}
.d4{
    width:354px;
    margin-left: -50px;
 
}
.icon2{
    margin-left:-365px;  
}
.d5{
    width:357px;
    height:22px;
    margin-left: -345px;


}
.icon3{
    margin-left:-353px;  


}
.icon4{
    margin-left:-360px;  


}

.d6{
    margin-left: -250px;

}
.d7{
    margin-left: -355px;
    width:357px;


}
.d8{
    margin-right: -39px;
}
.d9{
    background-color: gray;
}
    

</style></head>
    <body><center>
        <div id='d'>
            <h2 style='color:white'>Welcome  to Registration</h2>
    <input type='text' class='d1' placeholder='&nbsp;&nbsp; FirstName '>
    <i class='fa fa-user icon1'></i>
    <input type='text' class='d2' placeholder='&nbsp;&nbsp; LastName '>
    <i class='fa fa-user icon1'></i><br><br>
    <div><input type='text' class='d3' placeholder='&nbsp;&nbsp; Mother Full Name '>
    <i class='fa fa-user icon2'></i></div><br>
    <div></i><input style='width:30%'' type='date' class='d4' placeholder='(mm/dd/yy) date of birth'></div><br>
    <div>
        <select class='d5'>
            <option>&nbsp;&nbsp;&nbsp;&nbsp;select nationality(citizian)</option>
            <option>Indian</option>
            <option>American</option>
            <option>Chaina</option>
        </select><i class='fa fa-flag icon3'></i>
       </div><br>
    <div class='d6'>
        <input type='radio' id='gender'>
        <label  style='color:white' style='width:30%' for='female'>Female</label>
        <input  type='radio' id='gender'>
        <label  style='color:white' style='width:30%'' for='male'>male</label>
    </div><br>
    <div><input type='text' class='d3' placeholder='&nbsp;&nbsp;&nbsp;&nbsp;Email Address '>
        <i class='fa fa-envelope icon2'></i></div><br>
        <div><input type='text' class='d3' placeholder='&nbsp;&nbsp;&nbsp;&nbsp;Password '>
            <i class='fa fa-key icon2'></i></div><br>
            <div><input type='text' class='d3' placeholder='&nbsp;&nbsp;&nbsp;&nbsp;Confirm password'>
                <i class='fa fa-key icon2'></i></div><br>
            
        
        <div><input type='text' class='d7' placeholder='&nbsp;&nbsp;&nbsp;&nbsp;Mobile Number'>
            <i class='fa fa-mobile-phone icon4'></i></div><br>
            <div><input type='text' class='d8' placeholder='Enter capcha'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type='text' class='d9' placeholder='capcha'></div><br>
                <div><input class='square' id='gender'>
                <label  style='color:white' style='width:30%' for='female'>I agree the terms</label></div><br>
                 <button  style='background-color: greenyellow; width:200px; height: 30px;'>Create Account</button><br>

        
    


                
    </center>
    </body>
</html>"?>