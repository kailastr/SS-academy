<?php 

$title = "SS Admission form";
require("header.php");

?>

<style>
    *
    {
        margin: 0; 
        padding: 0;
    }

    .bodydiv
    {
        background: url("images/bg2.jpg");
        background-repeat: no-repeat;
        background-size: cover;      
        margin-top: 0%;

    }

    h2{
        text-align: center;
        padding: 20px;        
        color:#ffff;

    }

    div.admform{
        background-color:rgba(0,0,0,0.5);
       
        font-size: 18px;
        border-radius: 10px;
        border: 1px, solid rgba(255,255,255,0.3);
        box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
        color:#ffff;
        margin-top: 10%;
        margin-bottom: 10%;
      

    }

    form#admform{
        margin: 40px;

    }

    label{
        font-size: 18px;

    }

    #name{
        width: 300px;
        border: 1px solid #add;
        border-radius: 3px;
        outline: 0;
        padding: 7px;
        background-color: #ffff;
        box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3);
        margin-left: 25px;
    }

    input#submit{
        width: 300px;
        padding: 7px;
        font-size: 16px;
        font-weight: 600;
        border: none;
        border-radius: 3px;
        background-color: rgba(250,100,0,0.8);
        color: #ffff;
        cursor: pointer;
        border: 1px solid rgba(255,255,255,0.3);
        box-shadow: 1px 1px 5px rgba(0,0,0,0.3);   
        margin-left: 25px;

    }

    label,span,h2{
        text-shadow: 1px 1px 5px rgba(0,0,0,0.3);
        margin-left: 20px;
    }

</style>
<div class="bodydiv">
<div class="main">
    <div class="container">  <div class="admform">
        <div class="row">
       
            <div class="col-md-4 col-xs-3" style=""></div>
            <div class="col-md-4 col-xs-6">
           
        <h2>Admission Form</h2>
        <form id="admission" method="post" action="admconnect.php">
            <label>First Name</label>
            <br>
            <input type="text" name="fname" id="name" placeholder="Enter your first name" required>
            <br>
            <br>

            <label>Last Name</label>
            <br>
            <input type="text" name="lname" id="name" placeholder="Enter your last name" required>
            <br>
            <br>

            <label>Enter your phone number</label>
            <br>
            <input type="text" name="num" id="name" placeholder="Enter your contact number" pattern="{10}" required> 
            <br>
            <br>

            <label>Parent's Name</label>
            <br>
            <input type="text" name="pname" id="name" placeholder="Enter your Parent's name" required>
            <br>
            <br>


            <label>Enter another phone number</label>
            <br>
            <input type="number" name="anum" id="name" placeholder="Enter your contact number" required>
            <br>
            <br>

            <label>Enter your Date of Birth</label>
            <br>
            <input type="date" name="dob" id="name" required>
            <br>
            <br>

            <label>Choose the class for Admission</label>
            <br>
            <select name="standard" id="name" required>
            <option value="" selected disabled hidden>Choose class</option>
                <optgroup label="High Schools">
                    <option value="eight">8<sup>th</sup></option>
                    <option value="nine">9<sup>th</sup></option>
                    <option value="ten">10<sup>th</sup></option>
                </optgroup>
                <optgroup label="Higher Secondary">
                    <option value="s1">+1 Science</option>
                    <option value="s2">+2 Science</option>
                    <option value="c1">+1 Commerce</option>
                    <option value="c2">+2 Commerce</option>
                </optgroup>
            </select>
            <br>
            <br>

            <input type="submit" value="Submit" name="submit" id="submit" required>
            <br>
            <br>
</form>
</div>
            </div>
            <div class="col-md-4 col-xs-3"></div>
            
        </div>
    </div>
</div>    

<?php require_once('footer.php'); ?>