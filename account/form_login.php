<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="./css/inscription.css">
    
    <title>login</title>
    <style>
        #invalid{
            position: absolute;
            color: red;
            top: 90px;
            left: 35%;
            font-style: italic;
            font-size: 18px;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="left">
    <h1>Welcome to Water, Energy, Food NEXUS Innovation Week « Paving the Way Towards Entrepreneurship </h1>
    <div class="image">
        
    </div>
    </div>
    <div class="form" style="top: 50%; width: 60%;">
    <h1>LOGIN</h1>    
        
        <form  method="POST" action="connexion.php"> 
            <div class="field">
                <input name="email" type="email" required>
                <span></span>
                <label class="label" for="email">Email <span>*</span></label>
                <a style="float: right; top: 45px; right: 0; text-decoration: none; font-weight: bold; position: absolute;" href="./forgot_pwd.php">Forgot your password ?</a>
            </div>
            <div class="field">
                
                <input name="password1" type="password" required>
                <span></span>
                <label class="label" for="password1">Password <span>*</span></label>
            </div>
            <div class="action">
                <!-- <a href=""><span>NEXT</span> <span><img src="../IMG/icons/next.png" alt="next"></span> </a> -->                
                <input style="width: 85%;" type="submit" id="submit" name="conn" value="LOG IN" id="">
            </div>
            <div class="query" style="margin-left: 10%; font-size: 18px; font-style: italic;">
                <span>Don't have account ? <a href="./inscription.php">Sign up</a></span>
            </div>
        </form>
    </div>

</body>

</html>