@extends('layouts.app')
@section('content')

<!--Header====================================-->
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-4">About</h2>
            </div>
        </div>
    </div>
</section>

<!--Main section===========================-->
<section class="m-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img id="profile_image" src="{{ asset('../css/template/images/team/IMG_0249.jpg')}}" alt="" class="img-thumbnail">
            </div>
            <div class="col-md-8">
                <p>Hi</p>
                <p>Building websites are fun and challanging.  Websites can also be creative endevors that inspire.</p>
                <p>I first got into web development with an invitation by Udacity including a nice Google scholarship for their front-end web development program.
                    After taking a few lessions, I became hooked on all things web development.  To further my education, I took and continue to take Udemy courses
                    for both front-end and back-end development.  The beauty of both technical and asthetic spheres and how they interacted together fascinated me.
                    Just like architecture, good websites need to consider both form and function.
                </p>
                <p>My other source of inspiration is history and the art of telling stories.  I received a Master degree in history.  Good historical narratives and websites
                    share how important the central theme is and how essential the human connection is.  History and websites can be dry and boring, or can be interesting and
                    compelling.  It all depends on the content.  I try to make compelling websites that garner viewer's attention.
                </p>
                <p>
                    Let me help you build a website that will keep bringing in vistors, that will provide a compelling narrative, that will be easy for a vistory to use,
                    and that will be clean and asthetically pleasing.  Let's build a website that you can be proud of.
                </p>
                <p>
                    -Thomas Bockhorn
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
