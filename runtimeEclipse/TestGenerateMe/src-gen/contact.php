
<?php
include('header.php');
?>

<?php
$error ="";
$success = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $From = "hello@juliusz.uk";
    $To = "julek175j@gmail.com";
    $Subject = "Contact form";
    $Name = Trim(stripslashes($_POST['Name']));
    $Tel = Trim(stripslashes($_POST['Phone']));
    $Email = Trim(stripslashes($_POST['Email']));
    $Message = Trim(stripslashes($_POST['Message']));

 
// prepare email body text
    $Body = "";
    $Body .= "New message from : ";
    $Body .= $Name;
    $Body .= "\n";
    $Body .= "Contact no: ";
    $Body .= $Tel;
    $Body .= "\n";
    $Body .= "Email address: ";
    $Body .= $Email;
    $Body .= "\n";
    $Body .= "Message: ";
    $Body .= $Message;
    $Body .= "\n";

    $send = mail($To, $Subject, $Body, "From: <$From>");

    if ($send) {
        $success = "Message sent!";
    } else {
        $error ="Error sending the e-mail!";
    }
}

?>


<div class="row"><br><br><br><br><br><br><br></div>
<div class="container">




    <div class="row" style="display: flex; align-items: center;">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 title"> <center><h1>Send us an e-mail!</h1></center></div>
        <div class="col-sm-3"></div>
    </div>


    <div class="row" style="display: flex; align-items: center;">
        <div class="col-sm-4 "></div>
        <div class="col-sm-4 ">
            <br>
            <b><center><font color="red"><?php echo $error ?></font> </b></center>
            <b><center><font color="green"><?php echo $success ?></font> </center></b>




            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                    <label for="TitleLabel">Name</label>
                    <input type="text" name="Name" class="form-control" value="" placeholder="Provide your name...">
                </div>
                <div class="form-group">
                    <label for="TitleLabel">E-mail address</label>
                    <input type="text" name="Email" class="form-control" value="" placeholder="Provide your e-mail address...">
                </div>
                <div class="form-group">
                    <label for="TitleLabel">Phone number</label>
                    <input type="text" name="Phone" class="form-control" value="" placeholder="Provide your phone number...">
                </div>
                <div class="form-group">
                    <label for="DescriptionLabel">Message</label>
                    <textarea type="text" name="Message" class="form-control" placeholder="Enter your message..." value="" rows="8"></textarea>
                </div>
                <br>
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </form>




        </div>
        <div class="col-sm-4 "></div>
    </div>

    <br><br><br><br><br><br>
</div>
</div>
</body>
</html>




