@extends('layouts.app')
@section('content')

<!--Header====================================-->
<section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="display-4">Contact</h2>
                </div>
            </div>
        </div>
</section>


<!-- Start Contact Us=========================================== -->
<section class="m-4">
    <div class="container">
        <div class="row">
            <!-- Contact Details -->
            <div class="contact-details col-md-6 " >
                <h3>Contact Details</h3>
                    <p>Please contact for more information or a quote.</p>
                    <ul class="contact-short-info" >
                        <li>
                            <i class="tf-ion-android-phone-portrait"></i>
                            <span>Phone: 256.679.6197</span>
                        </li>
                        <li>
                            <i class="tf-ion-android-mail"></i>
                            <span>Email: Thomas.Bockhorn@tecktonet.com</span>
                        </li>
                    </ul>
                    <!-- Footer Social Links -->
                    <div class="social-icon">
                        <ul>
                            <li><a href="https://www.facebook.com/Tecktonetcom-2165797016970290"><i class="tf-ion-social-facebook"></i></a></li>
                            <li><a href="https://twitter.com/tecktonet"><i class="tf-ion-social-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/thomasbockhorn"><i class="tf-ion-social-linkedin-outline"></i></a></li>
                        </ul>
                    </div><!--/. End Footer Social Links -->
                </div><!-- / End Contact Details -->

                <!-- Contact Form -->
                <div class="contact-form col-md-6 " >
                    <form id="contact-form" method="post" action="{{ route('contact.store')}}" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                        </div>
                        <div class="form-group">
                            <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                        </div>
                        <div id="cf-submit">
                            <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                        </div>
                    </form>
                </div><!-- ./End Contact Form -->
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->






@endsection
