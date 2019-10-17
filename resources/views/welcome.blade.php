@extends('layouts.app')
@section('content')

<section class="hero-area">
    <div class="d-flex flex-row block">

    <!--==========Header====================================-->
        <div class="container">
            <div class="row" style="width: 100vh">
                <div class="col-md-12">
                    <div class="block">
                        <h1>Welcome</h1>
                        <p>If you need a beautifully designed website, I am here to help you get what you want.  My name is Thomas Bockhorn.  I am a freelance web developer.</p>
                        <ul>
                            <li class="list-inline-item">
                                <a data-scroll href="#services" class="btn btn-main">Explore</a>
                            </li>
                            <li class="list-inline-item">
                                <a data-scroll href="#about" class="btn btn-transparent">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>

<!--========Start About Section ==================================== -->
<section id="services" class="service-2 section">
    <div class="container">
        <div class="row">

        <!-- section title -->
            <div class="title text-center"  >
              <h2>My Services</h2>
              <div class="border"></div>
              <p>A website is more than just a header or title.  Websites require a whole list of services to make it successful.  Let Tecktonet.com help you by building a website you can be proud of. </p>
            </div>
        <!-- /section title -->

            <div class="col-md-4 text-center">
                <img class="img-fluid" src="{{asset('..\css\template\images\about\web-design-2038872_1280.jpg')}}" class="inline-block" alt="">
            </div>
            <div class="col-md-8">
                <div class="row text-center">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <i class="fas fa-file-code"></i>
                            <h4>Custom Web Development</h4>
                            <p>I can build a custom full stack web application.  Whether you need a custom front-end website or a complete custom web application, I am here to build.</p>
                         </div>
                    </div><!-- END COL -->

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <i class="fas fa-mobile-alt"></i>
                            <h4>Responsive Web Design</h4>
                            <p>All my builds are responsive.  A good websites needs to be seen from multiple devices.  I build all my websites so that viewers from multiple devices can enjoy your site.</p>
                        </div>
                    </div><!-- END COL -->

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <i class="fab fa-wordpress"></i>
                            <h4>Custom Wordpress themes</h4>
                            <p>If you need a Wordpress theme, I can build you a custom Wordpress theme: blog to e-store.</p>
                        </div>
                    </div><!-- END COL -->

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <i class="fas fa-upload"></i>
                            <h4>Website Deployment</h4>
                            <p>After a custom build, I will deploy your new site and setup a new URL address to point to the new site.</p>
                        </div>
                    </div><!-- END COL -->

                </div>
            </div>
        </div>    <!-- End row -->
    </div>    <!-- End container -->
</section>   <!-- End section -->

<!--====Start About Section==================================== -->
<section class="about-2 section" id="about">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="title text-center"  >
                <h2>Tecktonet.com</h2>
                <div class="border"></div>
                    <p>“Your website is the center of your digital eco-system, like a brick and mortar location, the experience matters once a customer enters, just as much as the perception they have of you before they walk through the door.” - Leland Dieno</p>
            </div>
            <!-- /section title -->
            <div class="col-md-6">
                <img src="{{ asset('../css/template/images/about/about-2.png')}}" class="img-thumbnail" alt="">
            </div>
            <div class="col-md-6">
                <ul class="checklist">
                    <li>All my websites can be seen through various devices: desktop to smartphone.</li>
                    <li>Each build will provide a lasting experience to viewers.</li>
                    <li>Each website will be easy to navigate and provide self-explanatory directions.</li>
                    <li>Each website will be pleasing to the viewer.</li>
                    <li>Tecktonet.com offers options to fix future issues from the first deployment so you have a given a well-built product.</li>
                </ul>
                <a href="{{url('about')}}" class="btn btn-main mt-20">Learn More</a>
            </div>
        </div> 		<!-- End row -->
    </div>   	<!-- End container -->
</section>   <!-- End section -->

<!--====Start Call To Action==================================== -->
<section class="call-to-action section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Let's Create Something Together</h2>
                <p>Let's talk to see how my skills in building aesthetically pleasing and functional websites can help you. </p>
                <a href="{{url('contact')}}" class="btn btn-main">Contact Me</a>
            </div>
        </div> 		<!-- End row -->
    </div>   	<!-- End container -->
</section>   <!-- End section -->

<!--Start Counter Section==================================== -->
<section  class="counter-wrapper section-sm" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title">
                    <h2>Tecktonet.com's Stats</h2>
                    <div class="border"></div>
                    <p> <a id="link" href="https://www.brainyquote.com">Create a website that expresses something about who you are that won't fit into the template available to you on a social networking site. - Jaron Lanier</a></p>
                </div>
            </div>
            @isset($Projects)
                <!-- first count item -->
                <div class="col-md-3 col-sm-6 col-xs-6 text-center " >
                    <div class="counters-item">
                        <i class="fas fa-user-tie"></i>
                        <div>
                            <span class="counter" data-count="150">{{
                                $number = count($Projects)
                            }}</span>
                        </div>
                        <h3>Happy Clients</h3>
                    </div>
                </div> <!-- end first count item -->

                <!-- second count item -->
                <div class="col-md-3 col-sm-6 col-xs-6 text-center " >
                    <div class="counters-item">
                        <i class="fas fa-project-diagram"></i>
                        <div>
                            <span class="counter" data-count="130">{{
                                $number = count($Projects)
                            }}</span>
                        </div>
                        <h3>Projects completed</h3>
                    </div>
                </div><!-- end second count item -->

                <!-- third count item -->
                <div class="col-md-3 col-sm-6 col-xs-6 text-center "  >
                    <div class="counters-item">
                        <i class="fas fa-comments"></i>
                        <div>
                            <span class="counter" data-count="99">{{
                                $number = count($Projects)
                            }}</span>
                            </div>
                    <h3>Positive feedback</h3>

                    </div>
                </div><!-- end third count item -->

                <!-- fourth count item -->
                <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                    <div class="counters-item kill-border">
                        <i class="fas fa-mug-hot"></i>
                        <div>
                            <span class="counter" data-count="250">{{
                                $number = count($Projects) + 3
                            }}</span>
                        </div>
                        <h3>Cups of Coffee</h3>
                    </div>
                </div><!-- end fourth count item -->
            </div> 		<!-- end row -->
        @endisset
    </div>   	<!-- end container -->
</section>   <!-- end section -->

<!-- Start Project=========================================== -->
<section class="testimonial section" id="testimonial">
    <div class="container">
        <div class="row justify-content-center">

        <!-- section title -->
            <div class="title text-center col-lg-12">
                <h2 id="project"> Latest <span class="color">Projects</span></h2>
                <div class="border"></div>
                <p id="project">Design is not just what it looks like and feels like. Design is how it works.
                <br>― Steve Jobs</br></p>
            </div>

            @isset($Projects)
                @foreach($Projects as $project)
                    <div class="card col-lg-3" style="width: 18rem;">
                        <img src="{{ asset('storage/'.$project->image) }}" alt="{{$project->image}}" class="card-img-top">
                        <div class="card-body">
                        <h5 class="card-title">{{$project->title }}</h5>
                        <p class="card-text">{{str_limit($project->description, $limit = 50, $end = '...')}}</p>
                        <a class="btn btn-main" href="{{route('projects.show', $project->id)}}">Read more</a>
                    </div>
                </div>
                @endforeach
            @endisset

        </div>	    <!-- End row -->
    </div>       <!-- End container -->
</section>    <!-- End Section -->

<!--Start Blog Section=========================================== -->
<section class="blog" id="blog">
    <div class="container">
        <div class="row justify-content-center">

            <!-- section title -->
            <div class="title text-center col-lg-12">
                <h2> Latest <span class="color">Posts</span></h2>
                <div class="border"></div>
                <p>Website without visitors is like a ship lost in the horizon.
                <br>― Dr. Christopher Dayagdag</br></p>
            </div>
            <!-- /section title -->

            @isset($Blog_Posts)
                @foreach($Blog_Posts as $post)
                    <div class="card col-lg-3" style="width: 18rem;">
                        <img src="{{ asset('storage/'.$post->image) }}" alt="{{$post->image}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title }}</h5>
                            <p class="card-text">{{str_limit($post->description, $limit = 50, $end = '...')}}</p>
                            <a class="btn btn-main" href="{{route('blog.show', $post->id)}}">Read more</a>
                        </div>
                    </div>
                @endforeach
            @endisset

        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->

@endsection

