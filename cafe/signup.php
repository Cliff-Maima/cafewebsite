
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
<link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">



<div class="col-lg-6">

    <div class="contact-form">
        <form id="contact" action="register.php" method="post">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Sign Up page</h4>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <fieldset>
                        <input name="firstname" type="text" id="firstname" placeholder="FirstName" required="">
                    </fieldset>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <fieldset>
                        <input name="lastname" type="text" id="lastname" placeholder="LastName" required="">
                    </fieldset>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <fieldset>
                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                    </fieldset>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <fieldset>
                        <input name="phone" type="text" id="phonenumber" placeholder="phone number" required="">
                    </fieldset>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <fieldset>
                        <input name="password" type="password" id="password" placeholder="password" required="">
                    </fieldset>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <fieldset>
                        <input name="confirmpassword" type="password" id="confirmpassword" placeholder="confirm password" required="">
                    </fieldset>
                </div>



                <div class="col-lg-12 ">
                    <fieldset>
                        <button type="submit" id="form-submit" name = "submit" class="main-button-icon">sign up</button>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>
</div>