<?php include('header.php'); ?>


<div class="others-head-area oha-contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="others-head">
                    <h2 class="oh-title">Contact</h2>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                <div class="contact-area-head">
                    <div class="section-title text-center">
                        <h2>Use Form to <span>contact us</span></h2>
                        <p>Please fill in the form and we will get back to you within 24 hours.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-7 col-xs-12">
                <div class="contact-form-area">
                    <div class="cf-msg" style="display: none;"></div>
                    <form action="mail.php" method="post" id="cf">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="cf-input-box">
                                    <input type="text" placeholder="Your name here" id="fname" name="fname">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="cf-input-box">
                                    <input type="email" placeholder="Email" id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="cf-input-box">
                                    <input type="text" placeholder="Subject" id="subject" name="subject">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="cf-input-box">
                                    <textarea class="contact-textarea" placeholder="Message" id="msg" name="msg"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="cf-input-box">
                                    <button id="submit" class="cont-submit btn-contact" name="submit">SEND MESSAGE</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1 col-sm-5 col-xs-12">
                <div class="contact2-contact-elements contact-elements">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="ce-box">
                            <h2>Meet Us</h2>
                            <p>Siddharthanagar-3, </p>
                            <p>Bhairahawa, Rupandehi</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="ce-box">
                            <h2>phone</h2>
                            <p>(+977) 71 525188</p>
                            <p>(+977) 71 525190</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="ce-box">
                            <h2>email</h2>
                            <p>acplumbini@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="ce-box">
                            <h2>website</h2>
                            <a href="#">http://www.hotelacp.com.np</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="find-location-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                <div class="find-location-head">
                    <div class="section-title text-center">
                        <h2>Find <span>Our location</span></h2>
                        <p>We are located in center of Bhairahawa City.  </p>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="find-location-map">
                    <div class="gmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442.35803286467103!2d83.45612185952754!3d27.504596562910752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39969bd93fc61091%3A0xd6da88ee2d288a4c!2sHotel%20Center%20Point!5e0!3m2!1sen!2sau!4v1611625616927!5m2!1sen!2sau" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>
