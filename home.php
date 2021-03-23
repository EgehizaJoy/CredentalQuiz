
<?php
use Phppot\student;
if (! empty($_POST["signup-btn"])) {
    require_once './Model/students.php';
    $student = new Student();
    $registrationResponse = $student->registerStudent();
}
?>
<HTML>
<HEAD>
<TITLE>Student For</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
    rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
    rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<BODY>
    <div class="phppot-container">
        <div class="sign-up-container">
            <div class="login-signup">
                <a href="index.php">Login</a>
            </div>
            <div class="">
                <form name="sign-up" action="" method="post"
                    onsubmit="return signupValidation()">
                    <div class="signup-heading">Student Form</div>
                <?php
    if (! empty($registrationResponse["status"])) {
        ?>
                    <?php
        if ($registrationResponse["status"] == "error") {
            ?>
                    <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        } else if ($registrationResponse["status"] == "success") {
            ?>
                    <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        }
        ?>
                <?php
    }
    ?>
                <div class="error-msg" id="error-msg"></div>
                    <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                              name<span class="required error" id="name-info"></span>
                            </div>
                            <input class="input-box-330" type="text" name="name"
                                id="name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                Email<span class="required error" id="email-info"></span>
                            </div>
                            <input class="input-box-330" type="email" name="email" id="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                phoneno<span class="required error" id="phoneno-info"></span>
                            </div>
                            <input class="input-box-330" type="tel"
                                name="phoneno" id="phoneno">
                        </div>
                    </div>
                    <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                Gender<span class="required error"
                                    id="confirm-password-info"></span>
                            </div>
                            <input class="input-box-330" type="text"
                                name="gender" id="gender">
                        </div>


                    </div>

                        <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                             Age<span class="required error" id="age"></span>
                            </div>
                            <input class="input-box-330" type="number"
                                name="age" id="age">
                        </div>
                    </div>


                     <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                StudentImage<span class="required error" id="studentimage"></span>
                            </div>
                            <input class="input-box-330" type="tel"
                                name="studentimage" id="studentimage">
                        </div>
                    </div>


                       <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                Reg_Day<span class="required error" id="reg_day"></span>
                            </div>
                            <input class="input-box-330" type="text"
                                name="reg_day" id="reg_day">
                        </div>
                    </div>

                    <div class="row">
                        <input class="btn" type="submit" name="signup-btn"
                            id="signup-btn" value="Sign up">
                    </div>
                </form>
            </div>
        </div>
    </div>



</BODY>
</HTML>
