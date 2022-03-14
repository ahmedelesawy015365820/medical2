<?php  
$active = "contact";
require_once("include/header.php"); 
?>

<div id="carouselExampleFade" class="carousel slide carousel-fade " data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item item carousel-one active " style="background-image: url('image/contact.jpg');"></div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <div class="caro">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </div>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <div class="caro">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </div>
    </a>
</div>
<!----------- start location ------------>
<section class="location">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 contact-us-map">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.855676293289!2d39.17127898505846!3d21.552497885716985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjHCsDMzJzA5LjAiTiAzOcKwMTAnMDguNyJF!5e0!3m2!1sar!2seg!4v1617984764935!5m2!1sar!2seg"  allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <?php
                    // These must be at the top of your script, not inside a function
                    use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\Exception;
                    use PHPMailer\PHPMailer\SMTP;

                    //Load composer's autoloader
                    require 'vendor/autoload.php';

                    if($_SERVER["REQUEST_METHOD"] == "POST" ){

                        $errors = [];

                        $full_name = filter_var($_POST["full_name"], FILTER_SANITIZE_STRING) ; // required
                        $email_from = $_POST["email"] ; // required
                        $telephone = filter_var($_POST["telephone"], FILTER_SANITIZE_NUMBER_INT) ; //  required
                        $subject = filter_var($_POST["subject"],FILTER_SANITIZE_STRING ) ; //  required
                        $comments = filter_var($_POST["comments"], FILTER_SANITIZE_STRING ) ; // required
                        $type = $_POST["type"];

                        if(empty($full_name)){
                            $errors[] = "full name is empty"; 
                        }
                        if(empty($email_from)){
                            $errors[] = "email  is empty";
                        }
                        if(empty($telephone)){
                            $errors[] = "telephone  is empty";
                        }
                        if(empty($subject)){
                            $errors[] = "subject  is empty";
                        }
                        if(empty($comments)){
                            $errors[] = "message  is empty";
                        }
                        if(empty($type)){
                          $errors[] = "type  is empty";
                      }

                        if(empty($errors)){
                            $mail = new PHPMailer();
                            $mail->isSMTP();
                            $mail->SMTPAuth = true;
                            $mail->Host = "advancedvisions.co";
                            $mail->Username = "alielshamy@advancedvisions.co";
                            $mail->Password = "Sa562981100";
                            $mail->SMTPSecure = "ssl";
                            $mail->Port = "465";

                            $mail->isHtml(True);
                            $mail->From = $email_from ;     
                            $mail->FromName = $full_name;
                            $mail->addAddress("alielshamy@advancedvisions.co");
                            $mail->addReplyTo("$email_from", 'Information');
                            $mail->Subject = $subject;

                            $email_message = "<div><b style='color:brown'>Name: </b> 
                            <span style='color:#006BA6;font-size:20px;'>$full_name</span></div>" ;

                            $email_message .= "<div><b style='color:brown'>Email: </b> 
                            <span style='color:#006BA6;font-size:20px;'>$email_from</span></div>";

                            $email_message .= "<div><b style='color:brown'>Telephone: </b>
                            <span style='color:#006BA6;font-size:20px;'>$telephone</span></div>";

                            $email_message .= "<div><b style='color:brown'>type: </b>
                            <span style='color:#006BA6;font-size:20px;'>$type</span></div>";

                            $email_message .= "<div><b style='color:brown'>subject: </b>
                            <span style='color:#006BA6;font-size:20px;'>$subject</span></div>";

                            $email_message .= "<div><b style='color:brown;'>message: </b>
                            <span style='color:#006BA6;font-size:16px;'>$comments</span></div>";

                            $mail->Body = $email_message;

                            if($mail->send()){
                                $success = '<div class="alert alert-success">success send</div>';
                            }else{
                                $faild = '<div class="alert alert-danger">faild send</div>';
                            }
                        }
                    }

                    ?>
                <div class="col-md-5">
                  <div class="info-contact">
                    <h2>Get in touch with us</h2>
                    <ul class="list-unstyled">
                      <li>⁦+966 56 298 1100⁩</li>
                      <li>alielshamy@advancedvisions.co</li>
                      <li>info@advancedvisions.co	</li>
                    </ul>
                    <ul class="list-unstyled">
                      <li>Al Andauls District</li>
                      <li>, Jeddah, KSA</li>
                    </ul>
                    <ul class="list-unstyled">
                      <li>Open hours:</li>
                      <li>Sunday-Thursday: 9am To 5pm</li>
                      <li>Friday-Saturday: Closed</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-7 contact-us-email">
                  <form class="row  contact-us-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ; ?>">
                    <div class="form-group col-md-12">
                      <input type="text" class="form-control form-control-lg fullname" autocomplete="off" autofocus name="full_name"  id="exampleFormControlInput1"maxlength="50" size="30" placeholder="FullName*" required>
                    </div>
                    <div class="form-group col-md-12">
                      <input type="email" class="form-control form-control-lg" name="email" autocomplete="off" id="exampleFormControlInput1" maxlength="50" size="30" placeholder="Email*" required>
                    </div>
                    <div class="form-group col-md-12">
                      <input type="tel" class="form-control form-control-lg" name="telephone" autocomplete="off" maxlength="30" size="30" id="exampleFormControlInput1" placeholder="telephone*" required>
                    </div>
                    <div class="form-group col-md-12">
                      <select class="form-control" name="type">
                        <option value="Sales">Sales</option>
                        <option value="services">services</option>
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <input type="text" class="form-control form-control-lg" name="subject" autocomplete="off" maxlength="30" size="30" id="exampleFormControlInput1" placeholder="Subject*" required>
                    </div>
                    <div class="form-group col-md-12">
                      <textarea class="form-control" name="comments" maxlength="1000" id="exampleFormControlTextarea1" placeholder="Message*" rows="7" required></textarea>
                    </div>
                    <button type="submit" class=" btn btn-lg" >Submit Now</button>
                  </form>
                </div>
            </div>
        </div>
      </section>
    <!------------ end-location -------------->
<?php  require_once("include/footer.php"); ?>