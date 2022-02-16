<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/inscription.css">
</head>

<body>    
    <div class="left">
        <h1>Welcome to Water, Energy, Food NEXUS Innovation Week « Paving the Way Towards Entrepreneurship </h1>
        <div class="image">
            <!-- <img src="../IMG/innovlogo.jfif" alt="" style="border-radius: 70%;"> -->
        </div>
    </div>
    <div class="form">
        <span style="float: right;">Already have an account ? <a href="./form_login.php">Login</a></span>
        <h1>REGISTER ACCOUNT</h1>
        <form action="" method="POST">
            <div class="field">
                <input name="name"  type="text" required>
                <span></span>
                <label class="label" for="name">Name <span>*</span></label>
            </div>
            <div class="field">
                <input name="firstname" type="text" required>
                <span></span>
                <label class="label" for="firstname">Firstname <span>*</span></label>
            </div>
            <div class="field">
                <input name="email" type="email" required>
                <span></span>
                <label class="label" for="email">Email <span>*</span></label>
            </div>            
            <div class="field select">
                <div class="title s_title">
                    <label class="label_select" for="title">Title</label>
                    <select name="title" id="">
                        <option value="M.">M.</option>
                        <option value="Ms.">Ms.</option>
                    </select>
                </div>

                <div class="age_range s_title">
                    <label class="label_select" for="age_range">Age range</label>
                    <select name="age_range" id="">
                        <option value="18-24">18-24</option>
                        <option value="25-34">25-34</option>
                        <option value="35-44">35-44</option>
                        <option value="45-54">45-54</option>
                        <option value="55-64">55-64</option>
                        <option value="">+64</option>
                    </select>
                </div>
            </div>
            <div class="field">
                <input onmouseout="check()" name="password1" id="pass1" type="password" required>
                <span></span>
                <label class="label" for="password1">Choose a password <span>*</span></label>
            </div>
            <div class="field">
                <span id="invalid" style="position: absolute;top: 0px;right: 0;height: 2px;color: red;transition: 0.5s;"></span>
                <input onmouseout="check()" name="password2" id="pass2" type="password" required>
                <span> </span>
                <label class="label" for="password2">Confirme password<span>*</span></label>
            </div>
            <div class="field select">
                <div class="s_title">
                    <label for="level">Level</label>
                    <select name="level" id="level">
                        <option value="Bac">Bac</option>
                        <option value="Bac+1">Bac+1</option>
                        <option value="Bac+2">Bac+2</option>
                        <option value="Bac+3">Bac+3</option>
                        <option value="Bac+4">Bac+4</option>
                        <option value="Bac+5">Bac+5</option>
                    </select>
                </div>
                <div class="s_title">
                    <label for="sector">Sector </label>
                    <select name="sector" id="sector">
                        <option value="Literature">Literature</option>
                        <option value="Business">Business</option>
                        <option value="Computer science">Computer science</option>
                    </select>
                </div>
            </div>               
            <div class="field select">
                <div class="title s_title">
                    <label for="country">Country</label>
                    <select name="country" id="country">
                        <option value="Maroc">Maroc</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="France">France</option>
                    </select>

                </div>

                <div class="s_title">
                    <label for="city">City</label>
                    <select name="city" id="city">
                        <option value="Rabat">Rabat</option>
                        <option value="Ouaga">Ouaga</option>
                        <option value="Fes">Fes</option>
                    </select>
                </div>
            </div>
            <div class="contract">
                <input name="checkbox" type="checkbox" required>
                <label for="checkbox">I Agree To Eventoo Terms & Conditions, Platform Terms, and Privacy Policy</label>
            </div>
            <div class="contract">
                <input name="checkbox" type="checkbox" required>
                <label for="checkbox">I agree to receive product updates and marketing communications from Eventoo</label>
            </div>
            <div class="action">                
                <input type="reset" id="reset" value="Cancel">
                <input type="submit" id="submit" name="register" value="REGISTER" id="">
            </div>
            <div style="margin: 0 0 10% 10%; font-size: 18px; font-style: italic;" class="query">
                <span>Already have an account ? <a href="./form_login.php">Login</a></span>
            </div>            
                     
        </form>
    </div>
    <script>
        function check() {
            let pass1 = document.getElementById('pass1').value;
            let pass2 = document.getElementById('pass2').value;
            if (pass1 != '' && pass2 != '' && pass1 != pass2) {
                document.getElementById('pass2').value = '';
                document.getElementById('invalid').textContent = 'Not matching';
            } else {
                if (document.getElementById('pass2').value == document.getElementById('pass1').value)
                    document.getElementById('invalid').textContent = '';
            }
        }

        // function validate() {

        //     var a = document.getElementById("pass1").value;
        //     var b = document.getElementById("pass2").value;

        //     if (a != b) {

        //         document.getElementById("pass1").value="";
        //         document.getElementById("pass2").value="";

        //         return false;
        //     }
        // }
    </script>


</body>

</html>