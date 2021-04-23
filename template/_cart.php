
<div>
    <?php
    require 'PHPmailer/Exception.php';
    require 'PHPmailer/PHPMailer.php';
    require 'PHPmailer/SMTP.php';


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $contactno = $_POST['contactno'];
        $email_address = $_POST['email-address'];
        $bike_select1 = $_POST['select1'];
        $bike_select2 = $_POST['select2'];
        $delivery_select = $_POST['select3'];
        $drop_off = $_POST['drop-off'];
        $drop_location = $_POST['drop-location'];


        $sql = "INSERT INTO cart ( first_name1,last_name1,contact_no,Email_address,bike_info,bike_no,delivery_type,drop_off,drop_location)
        VALUES (?,?,?,?,?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$firstname, $lastname, $contactno, $email_address, $bike_select1, $bike_select2, $delivery_select, $drop_off, $drop_location]);

        if ($result) {

            echo '<script>
alert("Form Successfully submitted.You will be contacted sortly");</script>';

            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;
            // Gmail ID which you want to use as SMTP server
            $mail->Username = 'rentoorg@gmail.com';
            // Gmail Password
            $mail->Password = 'Rento9841';
            $mail->Subject = 'Welcome To Rento';
            // Email ID from which you want to send the email
            $mail->setFrom('rentoorg@gmail.com');
            // Recipient Email ID where you want to receive emails
            $mail->isHTML(true);
            $mail->Body = "<h4>Dear Customer,</h4></br><p>Welcome to Rento.Feel free to contact us if you need any support.</p></br><h4>Thank You!</h4>" ;
            $mail->addAddress($_POST['email-address']);

            $mail->send();

//        echo $firstname. " " . $lastname. " " . $contactno. " " . $email_address. " ";


        }
//        $result="";








    }
    ?>

</div>


<div class="backbg">
    <div class="placessection">
        <div class="flexplacessection1">
            <div class="flexplacessection">

                <form action="cart.php" method="post">
                    <h3 class="howt0oh3" style="margin-bottom: 40px; color:#eb4034">Please fill up the form in detail for the Rental</h3>
                    <div class="form-group">
                        <label class="control-label col-sm-1" for="firstname" style="display: inline; font-size: 19px;">Firstname*</label><br>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="firstname" required placeholder="Enter your First Name" style="width:215%; margin-top: 20px;"><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="lastname" style="display: inline; font-size: 19px;">Lastname*</label><br>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="lastname" required placeholder="Enter your Last name" style="width:215%; margin-top: 20px;"><br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="contactno" style="display: inline; font-size: 19px;">Contact number*</label><br>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="contactno" required placeholder="Enter your Contact No." style="width:215%; margin-top: 20px;"><br>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Email-address" style="display: inline; font-size: 19px;">Email-address*</label><br>
                        <div class="col-sm-6">
                            <input class="form-control" type="email" name="email-address" required placeholder="Enter your Email-address" style="width:215%; margin-top: 20px;"><br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="bikeselect1" style="display: inline; font-size: 19px;">Select Bike Model*</label><br>
                        <div class="col-sm-6">
                            <SELECT class="form-control" name="select1" required style="width:215%; margin-top: 20px;">

                                <OPTION Value="Commencal el Camino">Commencal el Camino</OPTION>
                                <OPTION Value="Fury Yt200 Mountain Bike">Fury Yt200 Mountain Bike</OPTION>
                                <OPTION Value="Giant Anthem">Giant Anthem</OPTION>
                                <OPTION Value="Giant Stance">Giant Stance</OPTION>
                                <OPTION Value="Gitano Jd 4.0 Bike">Gitano Jd 4.0 Bike</OPTION>
                                <OPTION Value="Impel 5.3 Kross Bike">Impel 5.3 Kross Bike</OPTION>
                                <OPTION Value="Jamis Durango Comp 29Er">Jamis Durango Comp 29Er</OPTION>
                                <OPTION Value="Marlin 7">Marlin 7</OPTION>
                                <OPTION Value="Maximus Kross 26T W/Disc">Maximus Kross 26T W/Disc</OPTION>
                                <OPTION Value="Phoenix Blue/Black">Phoenix Blue/Black</OPTION>
                                <OPTION Value="Trinx m136">Trinx m136</OPTION>
                                <OPTION Value="Xids Black/Red">Xids Black/Red</OPTION>
                                <OPTION Value="Xtraxx Black-Green">Xtraxx Black-Green</OPTION>
                                <OPTION Value="Bajaj Pulsar 220CC">Bajaj Pulsar 220CC</OPTION>
                                <OPTION Value="HERO XPULSE 200CC">HERO XPULSE 200CC</OPTION>
                                <OPTION Value="Honda CRF 250CC">Honda CRF 250CC</OPTION>
                                <OPTION Value="Honda XR 190CC">Honda XR 190CC</OPTION>
                                <OPTION Value="KTM Duke 200CC">KTM Duke 200CC</OPTION>
                                <OPTION Value="ROYAL ENFIELD 411CC">ROYAL ENFIELD 411CC</OPTION>
                                <OPTION Value="TVS APACHE RTR 200CC">Bajaj Pulsar 220CC</OPTION>
                                <OPTION Value="Yamaha FZS 150CC">Yamaha FZS 150CC</OPTION>

                            </SELECT><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="bikeselect2" style="display: inline; font-size: 19px;">Number of bikes*</label><br>
                        <div class="col-sm-6">
                            <SELECT class="form-control" name="select2" required style="width:215%; margin-top: 20px;">

                                <OPTION Value="1">1</OPTION>
                                <OPTION Value="2">2</OPTION>
                                <OPTION Value="3">3</OPTION>
                                <OPTION Value="4">4</OPTION>
                                <OPTION Value="5">5</OPTION>
                                <OPTION Value="6">6</OPTION>
                                <OPTION Value="7">7</OPTION>
                                <OPTION Value="8">8</OPTION>
                                <OPTION Value="9">9</OPTION>
                                <OPTION Value="10">10</OPTION>


                            </SELECT><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="bikeselect3" style="display: inline; font-size: 19px;">Service Type*</label><br>
                        <div class="col-sm-6">
                            <SELECT class="form-control" name="select3" required style="width:215%; margin-top: 20px;">

                                <OPTION Value="Home-Delivery">Home-Delivery</OPTION>
                                <OPTION Value="Collect">Collect</OPTION>



                            </SELECT><br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="drop-off" style="display: inline; font-size: 19px;">Drop Off*</label><br>
                        <div class="col-sm-6">
                            <input class="form-control" type="date" name="drop-off" required style="width:215%; margin-top: 20px;"><br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="drop-location" style="display: inline; font-size: 19px;">Drop location*</label><br>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="drop-location" required placeholder="Enter your Drop-location" style="width:215%; margin-top: 20px;"><br>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" name="submit" value="SUBMIT" class="btnmar2" > <!--style="background-color: #c92b20; border: none;"-->
                        </div>
                    </div>

                </form>

            </div>

            <div class="detailsflex">
                <h3>Booking Procedure: </h3>
                <p class="howtop1">We have simple form and terms and conditions, which you need to fill up before hiring the bikes.  Here are some required documents which you need to submit before renting motorbike at City Motorbike.</p>
                <h3>Required Documents:</h3>
                <div class="listmar">
                    <ul class="ulfont">
                        <li  style="list-style: square;">You need to provide following documents before hiring the bike.</li>
                        <li  style="list-style: square;">Original Passport with Nepalese visa or refundable cash deposit.</li>
                        <li  style="list-style: square;">Id card or Citizenship card original.</li>
                        <li  style="list-style: square;">Valid driving license from your country or International Driving license for the hire.</li>
                        <li  style="list-style: square;">Or Someone from Nepal who can stay as a Guarantor for the security along with his/her citizenship, Address, Contact details or requesting for the bike hire with their letter head where you are working or travel agents.</li>
                    </ul>
                </div>
                <h3>For delivery</h3>
                <div class="listmar">
                    <ul>
                        <li style="list-style: square;">If you are going with home delivery option you will be recieving an email after you fill up the registration form.we will then deliver the product to your address.</li>
                        <li style="list-style: square;">If you are going with collect you can visit <a href="https://goo.gl/maps/hE7bwwepx4M3f3NF6" style="text-decoration: none; color: #eb4034;">28 Kilo,Dhulikhel Store</a> and the item product will be delivered to you there.</li>

                    </ul>
                </div>
                <p class="howtop1">We have bike expertise who don’t compromise in mechanism and we don’t compromise in the service. We assure you that we provide all conditioned and maintained motorbikes.</p><br>
                <p class="howtop1">If you have any questions, please write us on <a href="#" style="text-decoration: none; color: #c92b20;">Rento.com@gmail.com</a> </p>
                <p class="howtop1">Thank you.</p>

            </div>

        </div>



    </div>
</div>

