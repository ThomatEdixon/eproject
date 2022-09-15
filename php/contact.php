<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/contact.css">
    <title>Contact us</title>
</head>

<div class = "contact">
    <div class="header-contact">
        <div class="contact-title">
            <h1 class="text-center">Contact us</h1>
            <div>
                <nav class="contact-description text-center">
                    <a href="#">Home</a>/Contact us
                </nav>
            </div>
        </div>
    </div>
    <div class="contact-title-header">
        <h2>Looking for product support?</h2>
        <div class = "contact-support">
            <p>Visit our archive of installation and user guides, or submit your support question – including photos <br>  – to our technical team, so that we can get back to you quickly.</p>
            <a href="#">GET SUPPORT</a>
        </div>
    </div>
    <div class = "form-contact">
        <form method="post">
            <h2>Request information</h2>
            <p class="title">If you are in need of additional information not found on our web site or would just like to learn more about the company in general, please complete the following form.</p>
            <div class="contact-name">
                <div class="first-name">
                    <label ><h3>First name *</h3> </label> <br>
                    <input type="text" name="first_name" class="first-name">
                </div>
                <div class="last-name">
                    <label ><h3>Last name *</h3></label><br>
                    <input type="text" name="last_name" class="last-name">
                </div>
            </div>
            <div>
            <div class="contact-organization">
                <div class="problems">
                    <label ><h3>Please enter your questions or comments: *</h3> </label> <br>
                    <input type="text" name="problem" class="problem">
                </div>
                <div class="organization">
                    <label ><h3>Organization *</h3></label><br>
                    <input type="text" name="organization" class="organization">
                </div>
            </div>
            </div>
            <div class="address">
                <label ><h3>Address *</h3></label>
                <div class = "address-detail">
                    <input type="text" name="address" class="address" placeholder="Address" >
                    <input type="text" name ="country" class="country" placeholder="Country" >
                </div>
                <div class = "address-detail">
                    <input type="text" name="city" class="city" placeholder="City" >
                    <input type="text" name="state" class="state" placeholder="State/Province" >
                </div>
            </div>
            <div class="contact-email">
                <label ><h3>Email *</h3></label>
                <div>
                    <input type="text" name="email" class="email">
                </div>
            </div>
            <div class="contact-signup">
                <label ><h3>Sign up Email *</h3></label>
                <div class="signup-email">
                    <input type="radio" name="signup" value="yes"><label>I would like to receive emails from Fanimation about new products, special promotions and other updates.</label>
                    <br>
                    <input type="radio" name="signup" value="no"><label>No thank you.</label>
                </div>
            </div>
            <div class="contact-submit">
                <input type="submit" name="submit" value="Submit" >
            </div>
            <div class="contact-comments">
                <p><i>Fields marked with * are required.</i></p>
                <p><i>The data entered into this form is kept strictly confidential. Fanimation® does not sell, transfer or otherwise distribute personal data.</i></p>
            </div>
        </form>
    </div>
</div>

</html>