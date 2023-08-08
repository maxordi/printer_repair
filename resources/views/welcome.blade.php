@extends('layouts.restore')


@section('content')


    <!--  HOME HIGHLIGHTS SECTION 1 -->

    <section class="section-content-block section-home-highlights">

        <div class="container wow fadeInUp">

            <div class="row section-heading-wrapper">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Our Awesome Services</h2>
                    <p class="section-subheading">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur eu ante non ex lobortis
                        posuere volutpat nec orci morbi facilisis massa lectus volutpat posuere volutpat
                    </p>
                </div> <!-- end .col-sm-10  -->
            </div> <!--  end .row  -->

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="highlight-block xs-margin text-center margin-bottom-20">
                        <div class="highlight-block-inner">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                            <h5>Repair Computer </h5>
                            <p>Quisque imperdiet porta imperdiet. Nam venenatis pulvinar quam, et vulputate libero
                                mattis.</p>
                            <a class="bg_1" href="#"> <i class="fa fa-arrow-right"></i></a>
                        </div> <!--  end .main_highlights  -->
                    </div> <!--  end .main_highlights  -->
                </div> <!--  end .col-md-3  -->

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="highlight-block xs-margin text-center margin-bottom-20">
                        <div class="highlight-block-inner">
                            <i class="fa fa-building-o" aria-hidden="true"></i>
                            <h5>Repair Mobile</h5>
                            <p>Quisque imperdiet porta imperdiet. Nam venenatis pulvinar quam, et vulputate libero
                                mattis.</p>
                            <a class="bg_1" href="#"> <i class="fa fa-arrow-right"></i></a>
                        </div> <!--  end .main_highlights  -->
                    </div> <!--  end .main_highlights  -->
                </div> <!--  end .col-md-3  -->

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="highlight-block xs-margin text-center margin-bottom-20">
                        <div class="highlight-block-inner">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                            <h5>Repair Laptop</h5>
                            <p>Quisque imperdiet porta imperdiet. Nam venenatis pulvinar quam, et vulputate libero
                                mattis.</p>
                            <a class="bg_1" href="#"> <i class="fa fa-arrow-right"></i></a>
                        </div> <!--  end .main_highlights  -->
                    </div> <!--  end .main_highlights  -->
                </div> <!--  end .col-md-3  -->

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="highlight-block xs-margin text-center">
                        <div class="highlight-block-inner">
                            <i class="fa fa-building-o" aria-hidden="true"></i>
                            <h5>Repair Tablet</h5>
                            <p>Quisque imperdiet porta imperdiet. Nam venenatis pulvinar quam, et vulputate libero
                                mattis.</p>
                            <a class="bg_1" href="#"> <i class="fa fa-arrow-right"></i></a>
                        </div> <!--  end .main_highlights  -->
                    </div> <!--  end .main_highlights  -->
                </div> <!--  end .col-md-3  -->

            </div> <!--  end .row  -->


        </div> <!--  end .container  -->

    </section> <!--  end our-services -->

    <!-- TEAM SECTION 2 -->

    <section class="section-content-block section-our-team  section-secondary-bg">

        <div class="container">

            <div class="row section-heading-wrapper">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Our Awesome Team</h2>
                    <p class="section-subheading">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam
                    </p>
                </div> <!-- end .col-sm-10  -->
            </div> <!--  end .row  -->

            <div class="row">
                @foreach ($musters as $muster)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="team-layout-1 text-center xs-margin">
                            <figure class="team-member">
                                <a href="#" title="{{ $muster->full_name }}">
                                    <img src="{{ Storage::url($muster->img) }}" alt="{{ $muster->full_name }}" />
                                </a>
                            </figure>
                            <h3>{{ $muster->full_name }}</h3>
                            <h4>{{ $muster->specialty }}</h4>
                            <div class="team-social-share clearfix">
                                <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!--  end .section-our-team -->

    <!--  QUOTE CALL SECTION  -->

    <section class="section-content-block quote-call-section">

        <div class="container wow fadeInUp">

            <div class="row">

                <div class="col-md-12">
                    <div class="quote-call text-center">
                        <h3 class="quote-no"> (1 - 900) - 987 - 5432 </h3>
                        <p class="quote-subheading"> Toll Free Quote Request </p>
                    </div>
                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .quote-call-section  -->

    <!-- CLIENT LOGO SECTION  -->

    <section class="section-content-block section-secondary-bg section-client-logo">

        <div class="container">

            <div class="row section-heading-wrapper">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Brand We Work With</h2>
                    <p class="section-subheading">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam
                    </p>
                </div> <!-- end .col-sm-10  -->
            </div> <!--  end .row  -->

            <div class="row">

                <div class="logo-items logo-layout-1 text-center">

                    <div class="logo">

                        <img src="site/images/logo_1.png" alt=""/>

                    </div>

                    <div class="logo">

                        <img src="site/images/logo_2.png" alt=""/>

                    </div>

                    <div class="logo">

                        <img src="site/images/logo_3.png" alt=""/>

                    </div>

                    <div class="logo">

                        <img src="site/images/logo_4.png" alt=""/>

                    </div>

                    <div class="logo">

                        <img src="site/images/logo_5.png" alt=""/>

                    </div>


                </div> <!-- end .testimonial-container  -->

            </div> <!-- end row  -->

        </div> <!-- end .container  -->

    </section> <!--  end .section-client-logo -->


@endsection
