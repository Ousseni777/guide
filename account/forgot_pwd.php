<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.1.1/css/bootstrap.css" />
    <link rel="stylesheet" href="./css/inscription.css">

    <title>forget password</title>
    <style>
        #info_pass {
            margin-left: 10%;
            width: 70%;
            padding: 1%;
            text-align: center;
            font-size: 20px;
            font-style: italic;
            box-shadow: -2px 1px 2px -2px rgba(0, 0, 0, 0.2), 2px 2px 5px 2px rgba(0, 0, 0, 0.19);
            -webkit-box-shadow: -2px 1px 2px -2px rgba(0, 0, 0, 0.2), 2px 2px 5px 2px rgba(0, 0, 0, 0.19);
            -moz-box-shadow: -2px 1px 2px -2px rgba(0, 0, 0, 0.2), 2px 2px 5px 2px rgba(0, 0, 0, 0.19);
        }

        .info_request {
            position: absolute;
            top: 60%;
            left: 5%;
            font-size: 18px;
            font-weight: bold;
        }
        
    </style>
</head>

<body>


    <div class="left" style="height: 100vw;">
        <h1>Welcome to Water, Energy, Food NEXUS Innovation Week « Paving the Way Towards Entrepreneurship </h1>
        <div class="image">
            
        </div>
    </div>
    <div class="form" style="top: 50%; width: 60%;">
        <?php
        if (isset($info_request)) {
            if ($info_request) {
                echo '<div id="info_pass">
                <span>Le mot de passe a été envoyé à ' . $email. '</span>
            </div>';
            }else{
                echo '<div id="info_pass">
                <span> '.$email. ' introuvable  <a href="inscription.php">Sign Up</a></span>
            </div>';
            }
        }
        ?>
        <h1>FORGOT YOUR PASSWORD ?</h1>

        <form method="POST" action="./forgot_pwd.php">
            <div class="field">
                <input name="email" type="email" required>
                <span></span>
                <label class="label" style="margin-left: -45%;" for="email">Email <span>*</span></label>
            </div>
            <span style="float: right; font-size: 16px; font-weight: bold; font-style: italic;">Enter your email address to receive your password by Email</span>
            <div class="action">
                <input style="width: 85%;" type="submit" id="submit" name="conn" value="GET YOUR PASSWORD" id="">
            </div>
        </form>
        <?php if(isset($info_request)){
            if($info_request)
                echo '<a class="info_request" href="./form_login.php">Login</a>';
            else
                echo '<a class="info_request" href="inscription.php">Sign Up</a>';
        } ?>
    </div>

</body>

</html>