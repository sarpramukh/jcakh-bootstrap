
<?php require './header.html'; ?>

<?php 
$errmsg='';
if(isset($_POST['submit'])){
    $to = "sarpramukh@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $user_name = $_POST['username'];
    $subject = "Form submission by ".$user_name;
    $subject2 = "Copy of your form submission to Jasper Curry and kabab house";
    $message = $user_name . " wrote the following:" . "\n\n" ."Phone number : ".$_POST['phone']."\n\n". $_POST['message'];
    $message2 = "Here is a copy of your message " . $user_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $user_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
 else{
     if(!isset($_POST['submit'])){
         $errmsg='Please enter required field';
     }
     else
     {
         $errmsg='';    
     }
     
 }
?>

<!--Contact us-->
<div class="container">
    <section id="contact">
    <div class="page-header" >
        <h3>Contact Us</h3>
    </div>
        
        <div class="row">
            <div class="col-lg-4">
                <p>Contact us or send message on address below :</p>
                <address>
                    <strong> Jasper Curry and Kabab House </strong><br/>
                    PO Box number 667 <br/>
                    632, connought drive <br/>
                    Jasper, AB <br/>
                    T0E1E0 <br/>
                    
                    P: 780 852 2227
                    <!-- jaspercurry@outlook.com -->
                    
                </address>
            </div>
            <div class="col-lg-8">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <span class="err"><?php echo $errmsg; ?></span>
                        </div>
                    </div> <!-- End form group-->
                    
                    <div class="form-group">
                        <label for="user-name" class="col-lg-2 control-label"> Name </label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="user-name" name="username"  placeholder="Enter your name - Required" />
                            
                        </div>
                    </div> <!-- End form group-->
                    
                    <div class="form-group">
                        <label for="user-email" class="col-lg-2 control-label"> Email </label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" id="user-email" name="email" placeholder="Enter your email - Required" />
                            
                        </div>
                    </div> <!-- End form group-->
                    
                    <div class="form-group">
                        <label for="user-phone" class="col-lg-2 control-label"> Phone </label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="user-phone" name="phone" placeholder="Enter your Phone" />
                            
                        </div>
                    </div> <!-- End form group-->
                    
                    <div class="form-group">
                        <label for="user-name" class="col-lg-2 control-label"> Message </label>
                        <div class="col-lg-10">
                            <textarea name="user-message" id="user-message" class="form-control" name="message" cols="20" rows="10" placeholder="Enter your message - Required"></textarea>
                            
                        </div>
                    </div> <!-- End form group-->
                    <div class="form-group">
                        
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit"  class="btn btn-primary">Submit</button>
                        </div>
                    </div> <!-- End form group-->
                </form>
            </div>
        </div> <!-- End row -->    
    </section>
</div>

<?php require './footer.html'; ?>