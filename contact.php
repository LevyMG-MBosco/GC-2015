<?php
//set CAPTCHA
$date = date("Ymd");
$rand = rand(0,9999999999999);
$height = "80";
$width  = "240";
$img    = "$date$rand-$height-$width.jpgx";
// check for contact form
$error = array();
if($_POST) {
   // check for captcha
   if(file_get_contents("http://www.opencaptcha.com/validate.php?ans=".$_POST['captcha']."&img=".$_POST['img'])=='pass') {
            $captcha = true;
    }
    else {
        $error[] = "You did not enter the CAPTCHA correctly.";
    }
    if($captcha == true) {

            // captcha is all bueno, validate required fields
            if(!$_POST["name"]):
                $error[] = "Please enter your name.";
            endif;
            if(!$_POST["email"]):
                $error[] = "Please enter your e-mail address.";
            endif;
            if(!$_POST["company"]):
                $error[] = "Please enter your company name.";
            endif;
            if(!$_POST["comments"]):
                $error[] = "Please enter your comments or inquiry.";
            endif;

            // if no errors, fire off the contact form; then add in an error message anyways cause im lazy
            if(array_sum($error) == 0):

                // assemble the message

                $subject = "General Carbide Website Inquiry";

                $headers = 'From: noreply@generalcarbide.com' . "\r\n" .
                           'Reply-To: noreply@generalcarbide.com' . "\r\n" .
                           'X-Mailer: PHP/' . phpversion();


                $message =  "Name: " . $_POST["name"] ."\r";
                $message .= "Email: " . $_POST["email"] ."\r";
                $message .= "Company: " . $_POST["company"] ."\r";

                if($_POST["phone"]):
                    $message .= "Phone: " . $_POST["phone"] ."\r";
                endif;

                if($_POST["state"]):
                    $message .= "State: " . $_POST["state"] ."\r";
                endif;

                $message .= "Comments: " . $_POST["comments"] ."\r";

                // php mail function it works 60% of the time...every time...

                mail("mike@levymgi.com", $subject, $message, $headers);
                mail("greg@levymgi.com", $subject, $message, $headers);

                // Maybe eventually we can do an AJAX form for them, but these people really don't appreciate that shit in the long run

                //echoing html roflcopter
                $error[] = "<h3>Your inquiry has been sent.  Please allow 24 hours for a pigeon to carry this message to it's recipients.</h3>";
            endif;

    }

}


?>

<?php include_once('includes/header.php'); ?>
<div id="nav-anchor"></div>
<div class="interior-page-wrap container">
  <div class="col-xs-12">
    <h1 class="text-center">Contact General Carbide</h1>
  </div>
  <div class="row">
      <div class="container">
        <p style="text-align: center;">For additional information about General Carbide products or services, complete the form below.</p>
              <div class="col-md-9">

                      <form class="form-horizontal" method="post" action="contact.php">

                              <div class="form-group">
                                  <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <label for=="name" class="pull-right">Your Name:</label>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <input name="name" type="text" placeholder="Name" class="form-control" required>
                                        </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <label for=="email" class="pull-right">Email Address:</label>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <input name="email" type="text" placeholder="Email" class="form-control" required>
                                        </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <label for=="title" class="pull-right">Title:</label>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <input name="title" type="text" placeholder="Title" class="form-control" required>
                                        </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <label for="company" class="pull-right">Company:</label>
                                        </div>
                                         <div class="col-lg-8 col-md-12">
                                            <input type="text" name="company" placeholder="Company" class="form-control" required>
                                        </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <label for="address1" class="pull-right">Address Line 1:</label>
                                        </div>
                                         <div class="col-lg-8 col-md-12">
                                            <input type="text" name="address1" placeholder="Address Line 1" class="form-control" required>
                                        </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <label for="address2" class="pull-right">Address Line 2:</label>
                                        </div>
                                         <div class="col-lg-8 col-md-12">
                                            <input type="text" name="address2" placeholder="Addres Line 2" class="form-control" required>
                                        </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-lg-4 col-md-12">
                                    <label for="city" class="pull-right">City:</label>
                                  </div>
                                  <div class="col-lg-8 col-md-12">
                                    <input name="city" type="text" placeholder="City" class="form-control">
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-lg-4 col-md-12">
                                    <label for="state" class="pull-right">State:</label>
                                  </div>
                                  <div class="col-lg-8 col-md-12">
                                    <select name="state" class="form-control">
                                      <option value="" selected="selected">Select state/province</option>
                                      <option value="AL">Alabama</option>
                                      <option value="AK">Alaska</option>
                                      <option value="AB">Alberta</option>
                                      <option value="AZ">Arizona</option>
                                      <option value="AR">Arkansas</option>
                                      <option value="BC">British Columbia</option>
                                      <option value="CA">California</option>
                                      <option value="CO">Colorado</option>
                                      <option value="CT">Connecticut</option>
                                      <option value="DE">Delaware</option>
                                      <option value="DC">District of Columbia</option>
                                      <option value="FL">Florida</option>
                                      <option value="GA">Georgia</option>
                                      <option value="HI">Hawaii</option>
                                      <option value="ID">Idaho</option>
                                      <option value="IL">Illinois</option>
                                      <option value="IN">Indiana</option>
                                      <option value="IA">Iowa</option>
                                      <option value="KS">Kansas</option>
                                      <option value="KY">Kentucky</option>
                                      <option value="LA">Louisiana</option>
                                      <option value="ME">Maine</option>
                                      <option value="MB">Manitoba</option>
                                      <option value="MD">Maryland</option>
                                      <option value="MA">Massachusetts</option>
                                      <option value="MI">Michigan</option>
                                      <option value="MN">Minnesota</option>
                                      <option value="MS">Mississippi</option>
                                      <option value="MO">Missouri</option>
                                      <option value="MT">Montana</option>
                                      <option value="NE">Nebraska</option>
                                      <option value="NV">Nevada</option>
                                      <option value="NB">New Brunswick</option>
                                      <option value="NH">New Hampshire</option>
                                      <option value="NJ">New Jersey</option>
                                      <option value="NM">New Mexico</option>
                                      <option value="NY">New York</option>
                                      <option value="NF">Newfoundland</option>
                                      <option value="NC">North Carolina</option>
                                      <option value="ND">North Dakota</option>
                                      <option value="NT">Northwest Territories</option>
                                      <option value="NS">Nova Scotia</option>
                                      <option value="OH">Ohio</option>
                                      <option value="OK">Oklahoma</option>
                                      <option value="ON">Ontario</option>
                                      <option value="OR">Oregon</option>
                                      <option value="PA">Pennsylvania</option>
                                      <option value="PE">Prince Edward Island</option>
                                      <option value="PR">Puerto Rico</option>
                                      <option value="QC">Quebec</option>
                                      <option value="RI">Rhode Island</option>
                                      <option value="SK">Saskatchewan</option>
                                      <option value="SC">South Carolina</option>
                                      <option value="SD">South Dakota</option>
                                      <option value="TN">Tennessee</option>
                                      <option value="TX">Texas</option>
                                      <option value="UT">Utah</option>
                                      <option value="VT">Vermont</option>
                                      <option value="VA">Virginia</option>
                                      <option value="WA">Washington</option>
                                      <option value="WV">West Virginia</option>
                                      <option value="WI">Wisconsin</option>
                                      <option value="WY">Wyoming</option>
                                      <option value="YT">Yukon Territories</option>
                                      <option value="AA">Military -- AA</option>
                                      <option value="AE">Military -- AE</option>
                                      <option value="AP">Military -- AP</option>
                                      <option>Not Applicable</option>
                                    </select>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-lg-4 col-md-12">
                                    <label for="zip" class="pull-right">Zip:</label>
                                  </div>
                                  <div class="col-lg-8 col-md-12">
                                    <input name="zip" type="text" placeholder="Zip" class="form-control">
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-lg-4 col-md-12">
                                    <label for="phone" class="pull-right">Phone:</label>
                                  </div>
                                  <div class="col-lg-8 col-md-12">
                                    <input name="phone" type="text" placeholder="Phone" class="form-control">
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-lg-4 col-md-12">
                                    <label for="mobile" class="pull-right">Mobile:</label>
                                  </div>
                                  <div class="col-lg-8 col-md-12">
                                    <input name="mobile" type="text" placeholder="Mobile" class="form-control">
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                  <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <label for="comments" class="pull-right">Comments:</label>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <textarea name="comments" class="form-control" placeholder="Your comment(s) or inquiry..." required></textarea>
                                        </div>
                                  </div>
                              </div>

                            <div class="form-group">
                                  <div class="row">
                                        <div class="col-lg-12 col-lg-offset-4">
                                            <p><label for='captcha'>CAPTCHA:</label></p>
                                             <?php echo "<input class='form-control' type='hidden' name='img' value='$img'>";
                                                    echo "<a href='http://www.opencaptcha.com'><img src='http://www.opencaptcha.com/img/$img' height='$height' alt='captcha' width='$width' border='0' /></a><br /><br />";
                                                    echo "<div class='row col-xs-4'><input type=text name='captcha' class='form-control' placeholder='Enter The CAPTCHA' /></div>";
                                                ?>
                                        </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="row">
                                        <div class="col-lg-12 col-lg-offset-4">
                                            <input type="submit" class="btn btn-danger lol btn-lg" value="Submit">
                                        </div>
                                  </div>
                              </div>
                      </form>
                  </div>
           <div class="col-md-3 contact-info text-center">
             <div class="panel panel-default">
               <div class="panel-heading">
                 <p>General Carbide Corporation</p>
               </div>
               <div class="panel-body">
                 <ul>
                   <li>1151 Garden Street</li>
                   <li>Greensburg, PA 15601-6417</li>
                   <li></li>
                   <li>Tel: 800.245.2465   /   +1 724.836.3000</li>
                   <li>Fax: 800.547.2659   /   +1 724.836.6274</li>
                   <li><a href="mailto:sales@generalcarbide.com">sales@generalcarbide.com</a></li>
                 </ul>
               </div>
             </div>

             <div class="panel panel-default">
               <div class="panel-heading">
                 <p>Global Sales Repesentatives</p>
               </div>
               <div class="regions panel-body">
                 <ul>
                   <li><a OnClick="$('#africaModal').modal('show');">Africa</a></li>
                   <li><a OnClick="$('#asiaModal').modal('show');">Asia</a></li>
                   <li><a OnClick="$('#australiaModal').modal('show');">Australia</a></li>
                   <li><a OnClick="$('#canadaModal').modal('show');">Canada</a></li>
                   <li><a OnClick="$('#centralModal').modal('show');">Central America</a></li>
                   <li><a OnClick="$('#europeModal').modal('show');">Europe</a></li>
                   <li><a OnClick="$('#middleModal').modal('show');">Middle East</a></li>
                   <li><a OnClick="$('#southModal').modal('show');">South America</a></li>
                   <li><a OnClick="$('#americaModal').modal('show');">United States</a></li>
                 </ul>
               </div>
             </div>

             <div class="modal fade" id="africaModal">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h1>Sales Representative for Africa</h1>
                   </div>
                   <div class="modal-body">
                     <div class="modal-sub">
                       <h2>Denis Pasay</h2>
                       <p>General Carbide</p>
                       <p>1151 Garden Street</p>
                       <p>Greensburg, PA 15601</p>
                       <p>USA</p>
                       <br />
                       <p>T: 800.245.2465 • 724.836.3000</p>
                       <p>F: 800.547.2659 • 724.836.6274</p>
                       <p>E: <a href="mailto:dfpasay@generalcarbide.com">dfpasay@generalcarbide.com</a></p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

             <div class="modal fade" id="asiaModal">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h1 class="modal-title">Sales Representative for Asia</h1>
                   </div>
                   <div class="modal-body">
                     <div class="modal-sub">
                       <div class="modal-sub-head">
                         South Korea
                       </div>
                       <h2>Mr. Jin Ju</h2>
                       <p>JT Solution</p>
                       <p>267, Banwol-dong, Hwasung-si</p>
                       <p>Kyeonggi-do, Korea 445-330</p>
                       <br />
                       <p>T: 070-7099-9500</p>
                       <p>E: jujmail@naver.com</p>
                     </div>
                     <hr />
                     <div class="modal-sub">
                       <div class="modal-sub-head">
                         China
                       </div>
                       <h2>Mr. Sunny Huang</h2>
                       <p>Shanghai Sino-Carbide Co., Ltd</p>
                       <p>Room 1101, Building 58</p>
                       <p>2878 Gaoqing Road</p>
                       <p>Pudong, Shanghai 200123</p>
                       <br />
                       <p>T: 0086 21 33840918</p>
                       <p>F: 0086 21 33840086</p>
                       <p>M: 0086 15802116907</p>
                       <p>E: sunny.ai.huang@gmail.com</p>
                       <p>W: www.sino-carbide.com</p>
                     </div>
                     <hr />
                     <div class="modal-sub">
                       <div class="modal-sub-head">
                         Malaysia
                       </div>
                       <h2>Kuan Hoong Khim (Kuan)</h2>
                       <p>Hartmetall Technik Sdn. Bhd. (879370-P)</p>
                       <p>No. 28-1, Jalan Jurureka U1/40</p>
                       <p>Hicom Glenmarie Industrial Park</p>
                       <p>40150 Shah Alam</p>
                       <p>Setangor D.E </p>
                       <p>Malaysia</p>

                       <p>E: hkkuan@gmail.com</p>
                     </div>
                     <hr />
                     <div class="modal-sub">
                       <div class="modal-sub-head">
                         Thailand
                       </div>
                       <h2>Mr. Mingkwan Jakpromthong</h2>
                       <p>Alliance Engineering Supply Co.,Ltd.</p>
                       <p>202/640-641 Soi Ramkhamhaeng68 (Suphapong2), Huamark</p>
                       <p>Bangkapi, Bangkok 10240</p>
                       <br />
                       <p>T: 0-2735-2666-9</p>
                       <p>F: 0-27352670</p>
                       <p>M: +(66)8-4767-2200</p>
                       <p>E: mingkwan.alliance@gmail.com</p>
                     </div>
                     <hr />
                     <div class="modal-sub">
                       <div class="modal-sub-head">
                         Other Asian Countries
                       </div>
                       <h2>Denis Pasay</h2>
                       <p>General Carbide</p>
                       <p>1151 Garden Street</p>
                       <p>Greensburg, PA 15601</p>
                       <p>USA</p>
                       <br />
                       <p>T: 800.245.2465 • 724.836.3000</p>
                       <p>F: 800.547.2659 • 724.836.6274</p>
                       <p>E: <a href="mailto:dfpasay@generalcarbide.com">dfpasay@generalcarbide.com</a></p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

             <div class="modal fade" id="australiaModal">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h1 class="modal-title">Sales Representative for Australia</h1>
                   </div>
                   <div class="modal-body">
                     <div class="modal-sub">
                       <h2>Denis Pasay</h2>
                       <p>General Carbide</p>
                       <p>1151 Garden Street</p>
                       <p>Greensburg, PA 15601</p>
                       <p>USA</p>

                       <p>T: 800.245.2465 • 724.836.3000</p>
                       <p>F: 800.547.2659 • 724.836.6274</p>
                       <p>E: <a href="mailto:dfpasay@generalcarbide.com">dfpasay@generalcarbide.com</a></p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

             <div class="modal fade" id="canadaModal">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h1 class="modal-title">Sales Representative for Canada</h1>
                   </div>
                   <div class="modal-body">
                     <div class="modal-sub">
                       <h2>Denis Pasay</h2>
                       <p>General Carbide</p>
                       <p>1151 Garden Street</p>
                       <p>Greensburg, PA 15601</p>
                       <p>USA</p>
                       <br />
                       <p>T: 800.245.2465 • 724.836.3000</p>
                       <p>F: 800.547.2659 • 724.836.6274</p>
                       <p>E: <a href="mailto:dfpasay@generalcarbide.com">dfpasay@generalcarbide.com</a></p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

             <div class="modal fade" id="centralModal">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h1 class="modal-title">Sales Representative for Central America</h1>
                   </div>
                   <div class="modal-body">
                     <div class="modal-sub">
                       <div class="modal-sub-head">
                         Mexico
                       </div>
                       <h2>Oswaldo Acosa Hurtado</h2>
                       <p>Aldo Herramientas</p>
                       <p>Lazaro Cardenas No. 1570</p>
                       <p>Col. Sta Ma. Aztahuacan</p>
                       <p>09500 Mexico D.F.</p>
                       <p>Mexico</p>
                       <br />
                       <p>T: 52 5693.3756</p>
                       <p>F: 52 5692.5702</p>
                       <p>E: aldohtas@prodigy.net.mx</p>
                     </div>
                     <hr />
                     <div class="modal-sub">
                       <div class="modal-sub-head">
                         Other Central American Countries
                       </div>
                       <h2>Denis Pasay</h2>
                       <p>General Carbide</p>
                       <p>1151 Garden Street</p>
                       <p>Greensburg, PA 15601</p>
                       <p>USA</p>
                       <br />
                       <p>T: 800.245.2465 • 724.836.3000</p>
                       <p>F: 800.547.2659 • 724.836.6274</p>
                       <p>E: <a href="mailto:dfpasay@generalcarbide.com">dfpasay@generalcarbide.com</a></p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>


             <div class="modal fade" id="europeModal">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h1 class="modal-title">Sales Representative for Europe</h1>
                   </div>
                   <div class="modal-body">
                     <div class="modal-sub">

                       <h2>Denis Pasay</h2>
                       <p>General Carbide</p>
                       <p>1151 Garden Street</p>
                       <p>Greensburg, PA 15601</p>
                       <p>USA</p>
                       <br />
                       <p>T: 800.245.2465 • 724.836.3000</p>
                       <p>F: 800.547.2659 • 724.836.6274</p>
                       <p>E: <a href="mailto:dfpasay@generalcarbide.com">dfpasay@generalcarbide.com</a></p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>


             <div class="modal fade" id="middleModal">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h1 class="modal-title">Sales Representative for Middle East</h1>
                   </div>
                   <div class="modal-body">
                     <div class="modal-sub">
                       <h2>Denis Pasay</h2>
                       <p>General Carbide</p>
                       <p>1151 Garden Street</p>
                       <p>Greensburg, PA 15601</p>
                       <p>USA</p>
                       <br />
                       <p>T: 800.245.2465 • 724.836.3000</p>
                       <p>F: 800.547.2659 • 724.836.6274</p>
                       <p>E: <a href="mailto:dfpasay@generalcarbide.com">dfpasay@generalcarbide.com</a></p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>


             <div class="modal fade" id="southModal">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h1 class="modal-title">Sales Representative for South America</h1>
                   </div>
                   <div class="modal-body">
                     <div class="modal-sub">
                       <h2>Denis Pasay</h2>
                       <p>General Carbide</p>
                       <p>1151 Garden Street</p>
                       <p>Greensburg, PA 15601</p>
                       <p>USA</p>

                       <p>T: 800.245.2465 • 724.836.3000</p>
                       <p>F: 800.547.2659 • 724.836.6274</p>
                       <p>E: <a href="mailto:dfpasay@generalcarbide.com">dfpasay@generalcarbide.com</a></p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>


             <div class="modal fade" id="americaModal">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h1 class="modal-title">Sales Representative for United States</h1>
                   </div>
                   <div class="modal-body">
                     <div class="modal-sub">
                       <h2>Denis Pasay</h2>
                       <p>General Carbide</p>
                       <p>1151 Garden Street</p>
                       <p>Greensburg, PA 15601</p>
                       <p>USA</p>

                       <p>T: 800.245.2465 • 724.836.3000</p>
                       <p>F: 800.547.2659 • 724.836.6274</p>
                       <p>E: <a href="mailto:dfpasay@generalcarbide.com">dfpasay@generalcarbide.com</a></p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>


           </div>
          </div>

        </div>
      </div>
  </div>
</div>

<?php include_once('includes/footer.php'); ?>
