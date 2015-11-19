<?php  
   session_start();
   ob_start();
?>  


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>ElevenOne Foods - Delete products</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css" media="screen" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style-portfolio.css">
    <link rel="stylesheet" href="../css/picto-foundry-food.css" />
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="../favicon-1.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/javascript" href="../js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css" />
    <script>
        function counter(txt){
            document.getElementById('counter').innerHTML = txt.value.length+'/520';
            }  
        function show_err() {
            document.getElementById('err_alert').style.display = 'block';
            }
        function show_suc() {
            document.getElementById('success_alert').style.display = 'block';
            }  
    </script>
</head>

<body background="../images/landing_bg.jpg" style="background-attachment: fixed;">

<div class="container">
<div class="page-header" style="border-bottom:none;">
    <div id="userPanel" style="position:absolute; background:rgba(200,200,200, 0.8); padding:10px; border-radius=5px; margin-left: 400px;">
                            <?php 
                                echo "<strong style='font-size:1.3em;'>".@$_SESSION['username']."</strong>";
                                echo "<a href='../logout.php'><button class='text-center form-btn form-btn' style='width: 80px; height: 30px; padding: 5px; font-size: 0.7em; float: right;' >Logout</button></a>";
                            ?>
                        </div>
    <h1 style="background: rgba(200,200,200, 0.6); width: auto;"><small>Product Showcase </small> <a class="navbar-brand" href="#">ElevenOne Foods</a></h1>
</div>
<div class="container">
    <div class="row">
        <form role="form" method="POST" action="pController.php?flag=delete">
            <div class="col-lg-5 col-md-8" style="background: rgba(255,255,255,0.7); left:25%; padding:20px;  border-radius:5px; margin-bottom: 50px;">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span> Required</strong></div>
                <div class="form-group">
                    <label for="">Product ID</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="pID" id="pID" placeholder="Enter Product ID" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
        
        <div class="col-lg-5 col-md-push-1">
            <div class="col-md-12">                
                <div id="success_alert" class="alert alert-success">
                <center>
                    <strong><span class="glyphicon glyphicon-ok"></span> Product deleted from the system successfully.</strong>
                </center>
                </div>
                <div id="err_alert" class="alert alert-danger">
                <center>
                    <span class="glyphicon glyphicon-remove"></span><strong> Error! Please re-check the Product ID.</strong>
                </center>
                </div>

        <script type="text/javascript">
            document.getElementById('success_alert').style.display = 'none';
            document.getElementById('err_alert').style.display = 'none';
        </script>
        
        <?php
            if ($_GET['flag']=='err'){
                echo"<script>show_err();</script>";         
            }elseif ($_GET['flag']=='success') {
               echo"<script>show_suc();</script>";
            }
        ?>

            </div>
        </div>
        
</div>
</div>

</div>
</body>
</html>