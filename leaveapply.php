    <?php
    session_start();
    if (!isset($_SESSION['emp_firstName'])) {
        header("Location: index.php");
    }
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF=8">
            <title>FORM</title>
            <meta name="keywords" content="HTML,CSS">
            <meta name="viewport" conent="width=device-width, initial-scale=1.0"> 
            <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
            
            <style>
                body {
                    margin: 0;
                    padding: 0;
                    color: #222222;
                    background-color: #f2f2f0;
                    background-color: #56385a;
                    background-image: url("/images/cover.png");
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    background-attachment: fixed;
                    padding: 20px;
                    overflow-x: hidden;
                    font-family:"Muli", sans-serif, -apple-system, BlinkMacSystemFont,
                                "Helvetica Neue", Helvetica, sans-serif;
                    outline: none;

                }
                .Welcome{
                    text-align: center;
                    color: #ffff;
                    font-family:    Arial, Helvetica, sans-serif;
                    font-size:      40px;
                    font-weight:    bold;

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
                    color: #ffff;
                    height: 150px;
                    text-align: center;
                    height: 100px;
                    font-size: 56px;
                    font-weight: 50px;
                    padding-top: 10px;
                    margin-bottom: 25px;
                    background-color:#56385a;

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

                #info{
                    display: none;
                }
                                
                .topnav {
                position: relative;
                overflow: hidden;
                background-color: #56385a;
                }

                .topnav a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
                }

                .topnav a:hover {
                background-color: #ddd;
                color: black;
                }

                .topnav a.active {
                background-color:#56385a ;
                color: white;
                }

                .topnav-centered a {
                float: none;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                }

                .topnav-right {
                float: right;
                }

                /* Responsive navigation menu (for mobile devices) */
                @media screen and (max-width: 600px) {
                .topnav a, .topnav-right {
                    float: none;
                    display: block;
                }
                
                .topnav-centered a {
                    position: relative;
                    top: 0;
                    left: 0;
                    transform: none;
                }
                }
            </style>

        </head>
        <body >
            <!-- Top navigation -->
            <div class="topnav">

            <div class="topnav-centered">
            </div>
            <div class="topnav-right">
            <a href="#about">LeaveInfo</a>
            <a href="logout.php">LogOut</a>
            </div>

</div>

        <div class="Welcome">
        <?php echo "Welcome, ".$_SESSION['emp_firstName']." ".$_SESSION['emp_lastName'];  ?>
            </div>
            
            

            <h1>Employee Leave Application Form</h1>
            <p>Please fill in the form with all the required necessary information.</p>
            <br><hr><br>
            
            <div class="register">
            <form id="register" action="Connection_leaveApply.php" autocomplete="on" method="post">

                <label>empID : </label>
                <?php echo $_SESSION['emp_ID']; ?>
                <br><br>

                <label>Leave Code : </label>
                <select id="leaveCode" name="leaveCode">
                    <option value="CL">CL</option>
                    <option value="EL">EL</option>
                    <option value="HPL">HPL</option>
                    <option value="RH">RH</option>
                </select>
                <br><br>

                <label class="Date">Leave From : </label>
                <input type="date" name="leaveFrom" placeholder="dd-mm-yyyy" id="date" required>
                <br><br>

                <label class="Date">Leave To : </label>
                <input type="date" name="leaveTo" placeholder="dd-mm-yyyy" id="date" required>
                <br><br>
                
                <label>Reason for Leave : </label>

                <select id="leaveReason" name="leaveReason">
                    <option value="MEDICAL">MEDICAL</option>
                    <option value="LTC">LTC</option>
                    <option value="MARRIAGE LEAVE">MARRIAGE LEAVE</option>
                    <option value="PREPARATORY LEAVE">PREPARATORY LEAVE</option>
                    <option value="MATERNITY LEAVE">MATERNITY LEAVE</option>
                    <option value="OTHER">OTHER</option>
                </select>
                <br><br>
                <div id="info">
                <label>Additional Information</label>
                <br>
                <textarea cols="30" rows="5" placeholder="Reason in detail..." type="text" name="additionalInfo"></textarea>
                <br><br>
                </div>
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

        <script type="text/javascript">
            const el = document.getElementById('leaveReason');
            const box = document.getElementById('info');

            el.addEventListener('change', function handleChange(event) {
            if (event.target.value === 'OTHER') {
                box.style.display = 'block';
            } else {
                box.style.display = 'none';
            }
        });

        </script>

        </body>
    </html>