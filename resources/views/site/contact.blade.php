@extends('layouts.restore')


@section('content')



    <!--  PAGE HEADING -->

    <section class="page-header" data-stellar-background-ratio="0.1">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">


                    <h3>
                        Contact Us
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / Contact
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->


    <!--  MAIN CONTENT  -->


    <section class="section-google-map-block wow fadeInUp">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2350.4806000894805!2d27.5514755!3d53.9054352!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcfeb62c1c569%3A0x8270a91d103ade05!2z0L_RgC3Rgi4g0J_QvtCx0LXQtNC40YLQtdC70LXQuSAxLCDQnNC40L3RgdC6IDIyMDAwNCwg0JHQtdC70LDRgNGD0YHRjA!5e0!3m2!1sru!2sde!4v1687700376643!5m2!1sru!2sde" width="2540" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section> <!-- end .section-content-block  -->



    <section class="section-content-block section-contact-block">

        <div class="container">

            <div class="row">

                <div class="col-sm-6 wow fadeInLeft">

                    <div class="contact-form-block">

                        <h2 class="contact-title">Say hello to us</h2>

                        <form action="#" method="post" id="contact-form">

                            <div class="form-group">
                                <input type="text" class="form-control" id="author" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="url" placeholder="Subject">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="comment" id="comment" placeholder="Message"></textarea>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-custom">Send Now</button>
                            </div>

                        </form>

                    </div> <!-- end .contact-form-block  -->

                </div> <!--  end col-sm-6  -->

                <div class="col-sm-6 wow fadeInRight">

                    <div class="content-block">

                        <h2 class="contact-title">Contact us</h2>

                        <ul class="contact-info">
                            <li>
                                <span class="icon-container"><i class="fa fa-home"></i></span>
                                <address>3100 C/A Mouchak,Sylhet,Bangladesh</address>
                            </li>
                            <li>
                                <span class="icon-container"><i class="fa fa-phone"></i></span>
                                <address><a href="#">+093-120-525-9162</a></address>
                            </li>
                            <li>
                                <span class="icon-container"><i class="fa fa-envelope"></i></span>
                                <address><a href="mailto:">query@yourdomain.com</a></address>
                            </li>
                            <li>
                                <span class="icon-container"><i class="fa fa-globe"></i></span>
                                <address><a href="#">www.yourdomain.com</a></address>
                            </li>
                        </ul>

                        <h2 class="contact-title">We are social</h2>

                        <div class="social-icons margin-top-11 clearfix">
                            <a title="Tweet It" href="#" class="btn btn-social-icon btn-twitter petition_share">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a title="Share at Facebook" href="" class="btn btn-social-icon btn-facebook petition_share">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a title="Share at Google+" href="" class="btn btn-social-icon btn-goggle-plus petition_share">
                                <i class="fa fa-google-plus"></i>
                            </a>

                            <a title="Share at Pinterest" href="" class="btn btn-social-icon btn-pinterest petition_share">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </div>

                    </div> <!-- end .content-block  -->

                </div> <!--  end col-sm-6  -->

            </div> <!-- end row  -->

        </div> <!--  end .container -->

    </section> <!-- end .section-content-block  -->


    <!--  CTA SECTION  -->

    <section class="cta-section-3">

        <div class="container">

            <div class="row">

                <div class="col-md-10 col-sm-12">
                    <h2>Do you have any question? Feel free to request for a quote</h2>
                </div>

                <div class="col-md-2 col-sm-12">
                    <a href="#" class="btn">REQUEST FOR QUOTE</a>
                </div>

            </div>

        </div>

    </section> <!-- end .cta-section-3  -->


@endsection
