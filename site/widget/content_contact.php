<?php 
require 'site/db/db_contact.php';

?>


<div class="contact">
    <div class="row">
        <div class="col-md-5 col-sm-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10843.554137453884!2d108.21673440146981!3d16.077144280256952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142183a58864477%3A0x6d3d6dfa3cff482f!2zVHJ1bmcgdMOibSBIw6BuaCBjaMOtbmggxJDDoCBO4bq1bmc!5e0!3m2!1sen!2s!4v1462419672176" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen>
                
            </iframe>
        </div>
        <div class="col-md-7 col-sm-7">
            <form class="form-horizontal" method="post">
                <h5 class="text-info">We always look forward to your message from you!</h5><hr>
                <div class="form-group">
                    <label class="col-md-2 col-sm-2">Your name: </label>
                    <div class="col-md-10 col-sm-10">
                        <input class="form-control" name="user_name" type="text" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 col-sm-2">Your email: </label>
                    <div class="col-md-10 col-sm-10">
                        <input class="form-control" name="user_email" type="email" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 col-sm-2">Your message: </label>
                    <div class="col-md-10 col-sm-10">
                        <textarea class="form-control" name="user_message" required="" rows="5"></textarea>
                    </div>
                </div>
                <div class="col-md-offset-2">
                    <button class="btn btn-danger" type="submit" name="submit">Send</button>
                </div>
            </form>
            <div class="contact">
                <hr>
                <h6><b>Contact to us:</b></h6>
                <p>Email: worthtolive@gmail.com</p>
                <p>Facebook: facebook.com/worthtolive</p>
                <p>Hotline: <a href="">0164 919 952</a></p>
            </div>
        </div>
    </div>
</div>
