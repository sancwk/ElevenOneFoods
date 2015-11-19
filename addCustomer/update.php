<?php
	require 'php/updatedb.php';
?><head>
    <meta charset="utf-8" />
    <title>
    	<div class="head">
    		Customer Registration
        </div>
    </title>
    

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/val.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Update Your Account</h1>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="col-lg-12" >
    	<div class="col-lg-3" id="11">
        
        </div>
        
        <div class="col-lg-6">
            <div class="row">
                <form role="form" action="php/updatedb.php" method="post" autocomplete="off">
                    <div class="col-lg-12">
                        <div class="well well-sm"><strong class="xxx" style="color:#F00A3C;"><span class="glyphicon glyphicon-asterisk" ></span>Required Field</strong></div>
                        <h3>Enter Firat Name and Last Name To Update</h3>
                        <div class="form-group">
                            <label for="InputName1">First Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="InputName2">Last Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="InputName0" id="InputName0" placeholder="Enter Name" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div><br><br>
                        
                         <h3>Enter New Details</h3>
                         
                        <div class="form-group">
                            <label for="InputName1">First Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="InputName1" id="InputName1" placeholder="Enter Name" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="InputName2">Last Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="InputName2" id="InputName2" placeholder="Enter Name" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="InputTel">Telephone</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="InputTel" id="InputTel" placeholder="(xxx) xxx-xxxx" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="InputEmail">Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="you@example.com" required>
                                
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="InputEmail2">Confirm Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="InputEmail2" name="InputEmail2" placeholder="you@example.com" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="InputPassword1">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="InputPassword1" name="InputPassword1" placeholder="Password" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="InputPassword2">Confirm Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="InputPassword2" name="InputPassword2" placeholder="Confirm Password" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                  
                        <input type="submit" name="submit" id="submit" value="Update" onClick="return ConfirmVal();" class="btn btn-info pull-right">
                    </div>
                </form>
                
            </div>
        </div>
        <div class="col-lg-3" id="22">
        
        </div>
    </div>
</div>
<!-- Registration form - END -->

</div>

</body>
</html>