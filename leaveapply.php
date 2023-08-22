<?php
session_start();
if (!isset($_SESSION['emp_firstName'])) {
    header("Location: index.php");
}
echo "Welcome ".$_SESSION['emp_firstName']." ".$_SESSION['emp_lastName'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF=8">
        <title>FORM</title>
        <meta name="keywords" content="HTML,CSS">
        <meta name="viewport" conent="width=device-width, initial-scale=1.0"> 
        
        <style>
            body {
                background-color: rgb(184, 230, 199);
                padding: 60px;
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            }

            /*div {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
                margin: 100px auto 0px auto;
            }*/

            hr{
                min-height: 2px;
                background: #332f2f;
            }
            div.register{
                border-radius: 5px;
                background-color: #f2f2f2;
                padding-top: 10px;
                padding-bottom: 20px;
                font-size: 25px;
            }

            h2{ 
                text-align: center;
                padding: 22px;
                font-family: sans-serif;
                margin: 0;
            }
            
            form#register{
                margin: 30px 40px 0px 60px;
            }

            label{
                font-family: sans-serif;
                font-size: 24px;
                
            }
            select{
                width: 310px;
                height: 40px;
                position: absolute;
                left: 350px;
                border: 1px solid rgb(211, 203, 203);
                border-radius: 3px;
                padding: 4px;
                box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3);
            }
            option{
                font-family: sans-serif;
                font-size: 24px;
                padding: 4px;
            }

            input#leaveCode{
                width: 300px;
                height: 30px;
                position: absolute;
                left: 350px;
                border: 1px solid rgb(211, 203, 203);
                border-radius: 3px;
                padding: 4px;
                box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3);
            }

            div.register1{
                border-radius: 5px;
                background-color: #f2f2f2;
                padding-top: 10px;
                padding-bottom: 10px;
                font-size: 25px;
            }

            form#register1{
               margin: 30px 40px 0px 60px;
           }

           span#reason1,span#reason3,span#reason5{
               height: 15px;
               padding: 12px;
           }

           input#reason2,input#reason4,input#reason6{
                position: absolute;
                left: 420px;
           }

           span#reason2,span#reason4,span#reason6{
                position: absolute;
                left: 460px;
                height: 12px;
           }
        
           input#date{
                position: absolute;
                left: 320px;
                width: 220px;
                height: 30px;
                border: 1px solid rgb(211, 203, 203);
                border-radius: 3px;  
                box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3);
           }

            input#submit {
                background-color: #2dc432;
                font-family: sans-serif;
                font-size: 24px;

                font-weight: 500;
                width: 300px;
                color: white;
                padding: 15px 20px;
                margin: 8px 0;
                border-radius: 13px;
                cursor: pointer;
                box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3);
    
                /*position: absolute;
                left: 340px;*/
            }

            input#submit:hover {
                background-color: #339e38;
            }

            label,span,h2{
                text-shadow: inset 1px 1px 5px rgba(0,0,0,0.3);
                
            }

            h1{
                color: rgb(2, 2, 13);
                height: 150px;
                text-align: center;
                height: 100px;
                font-size: 56px;
                font-weight: 50px;
                padding-top: 10px;
                margin-bottom: 25px;
                background-color:rgb(108, 152, 107);
            } 
            p{
                color: red;
                text-align: center;
                font-size: 22px;
                font-family: sans-serif;
                
            }

            textarea {
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                font-size: 22px;
                resize: none;
            }
            .Text{
                display:flex;
                align-items: center;
            }

        </style>

    </head>
    <body >
        <a href="logout.php"> <input type="submit" name="" value="LogOut"> </a>
        <h1>Employee Leave Application Form</h1>
        <p>Please fill in the form with all the required necessary information.</p>
        <br><hr><br>
        
        <div class="register">
        <form id="register" action="Connection_leaveApply.php" autocomplete="on" method="post">

            <label>empID</label>
            <?php echo $_SESSION['emp_ID']; ?>
            <br><br>

            <label>Leave Code</label>
            <select id="leaveCode" name="leaveCode">
                <option value="CL">CL</option>
                <option value="EL">EL</option>
                <option value="HPL">HPL</option>
                <option value="RH">RH</option>
            </select>
            <br><br>

            <label class="Date">Application Date</label>
            <input type="date" placeholder="dd-mm-yyyy" id="date">
            <br><br>

            <label class="Date">Leave From</label>
            <input type="date" name="leaveFrom" placeholder="dd-mm-yyyy" id="date">
            <br><br>

            <label class="Date">Leave To</label>
            <input type="date" name="leaveTo" placeholder="dd-mm-yyyy" id="date" >
            <br><br>
            
            <label>Reason for Leave</label>
            <br>&nbsp;&nbsp;&nbsp;

            <input type="radio" id="reason1" name="leaveReason">&nbsp;
            <label for="reason1"><span id="reason1">MEDICAL</span></label>

            <input type="radio" id="reason2" name="leaveReason">&nbsp;
            <label for="reason2"><span id="reason2">LTC</span></label><br>&nbsp;&nbsp;&nbsp;

            <input type="radio" id="reason3" name="leaveReason">&nbsp;
            <label for="reason3"></label><span id="reason3">MARRIAGE LEAVE</span></label>

            <input type="radio" id="reason4" name="leaveReason" >&nbsp;
            <label for="reason4"><span id="reason4">PREPARATORY LEAVE </span></label><br>&nbsp;&nbsp;&nbsp;

            <input type="radio" id="reason5" name="leaveReason">&nbsp;
            <label for="reason5"><span id="reason5">MATERNITY LEAVE</span></label>

            <input type="radio" id="reason6" name="leaveReason" value="Other">
            <label for="reason6"><span id="reason6">OTHER</span></label><br><br>

            
            <label>Additional Information</label>
            <br>
            <textarea cols="30" rows="5" placeholder="Reason in detail..." type="text" name="message"></textarea>
            <br><br>
            <label for="declare"><b>Declaration</b></label>
      <div class="Text">
      <input type="checkbox" id="declare" name="declare" value="declare" required/>
      <p>
        I,hereby,request leave/absence from duty as indicated above and certify
        that such leave/absenceis requested for the purpose indicated. I
        understand that falsification on this form may be grounds for
        disciplinary action.
      </p>
      </div>

            <input type="submit" name="Submit" id="submit" value="Send Request">
           <br><br>
        </form>
    </div><br>

    </body>
</html>