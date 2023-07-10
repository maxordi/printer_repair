@extends('layouts.restore')


@section('content')



    <section class="page-header">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">

                    <h3>
                        Services
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / Services
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <!--  HOME HIGHLIGHTS SECTION 1 -->

    <section class="section-content-block section-home-highlights">

        <div class="container wow fadeInUp">

            <div class="row section-heading-wrapper">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Our Awesome Services</h2>
                    <p class="section-subheading">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur eu ante non ex lobortis posuere volutpat nec orci morbi facilisis massa lectus volutpat posuere volutpat
                    </p>
                </div> <!-- end .col-sm-10  -->
            </div> <!--  end .row  -->

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="highlight-block xs-margin margin-bottom-20">
                        <div class="highlight-block-inner">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                            <h5>Repair Computer </h5>
                            <p>Quisque imperdiet porta imperdiet. Nam venenatis pulvinar quam, et vulputate libero mattis.</p>
                            <a class="bg_1" href="#"> <i class="fa fa-arrow-right"></i></a>
                        </div> <!--  end .main_highlights  -->
                    </div> <!--  end .main_highlights  -->
                </div> <!--  end .col-md-3  -->

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="highlight-block xs-margin margin-bottom-20">
                        <div class="highlight-block-inner">
                            <i class="fa fa-building-o" aria-hidden="true"></i>
                            <h5>Repair Mobile</h5>
                            <p>Quisque imperdiet porta imperdiet. Nam venenatis pulvinar quam, et vulputate libero mattis.</p>
                            <a class="bg_1" href="#"> <i class="fa fa-arrow-right"></i></a>
                        </div> <!--  end .main_highlights  -->
                    </div> <!--  end .main_highlights  -->
                </div> <!--  end .col-md-3  -->

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="highlight-block xs-margin margin-bottom-20">
                        <div class="highlight-block-inner">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                            <h5>Repair Laptop</h5>
                            <p>Quisque imperdiet porta imperdiet. Nam venenatis pulvinar quam, et vulputate libero mattis.</p>
                            <a class="bg_1" href="#"> <i class="fa fa-arrow-right"></i></a>
                        </div> <!--  end .main_highlights  -->
                    </div> <!--  end .main_highlights  -->
                </div> <!--  end .col-md-3  -->

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="highlight-block xs-margin">
                        <div class="highlight-block-inner">
                            <i class="fa fa-building-o" aria-hidden="true"></i>
                            <h5>Repair Tablet</h5>
                            <p>Quisque imperdiet porta imperdiet. Nam venenatis pulvinar quam, et vulputate libero mattis.</p>
                            <a class="bg_1" href="#"> <i class="fa fa-arrow-right"></i></a>
                        </div> <!--  end .main_highlights  -->
                    </div> <!--  end .main_highlights  -->
                </div> <!--  end .col-md-3  -->

            </div> <!--  end .row  -->


        </div> <!--  end .container  -->

    </section> <!--  end our-services -->

    <!--  PRICE PLAN SECTION  -->

    <section class="section-content-block section-price-plan section-secondary-bg">

        <div class="container">

            <div class="row section-heading-wrapper">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Создание заявки</h2>
                    <p class="section-subheading">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur eu ante non ex lobortis posuere volutpat nec orci morbi facilisis massa lectus volutpat posuere volutpat
                    </p>
                </div> <!-- end .col-sm-10  -->
            </div> <!--  end .row  -->

            <div class="row">
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material mx-2"
                                  method="post" action="{{route('repair_requests.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-12">Брэнд принтера</label>
                                    <div class="col-md-12">
                                        <select name="printer_brand_id" id="brand" class="form-control">
                                            <option value="">Выберите брэнд</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->brand }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('printer_brand_id')
                                @foreach($errors->get('printer_brand_id') as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                                @enderror

                                <div class="form-group">
                                    <label class="col-md-12">Модель</label>
                                    <div class="col-md-12">
                                        <select name="printer_model_id" class="form-control form-control-line">
                                            @foreach($models as $model)
                                                <option value="{{ $model->id }}">{{ $model->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('printer_model_id')
                                @foreach($errors->get('printer_model_id') as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                                @enderror

                                <div class="form-group">
                                    <label class="col-md-12">Фамилия Имя Отчество</label>
                                    <div class="col-md-12">
                                        <input type="text" name="client_name"
                                               class="form-control form-control-line">
                                    </div>
                                </div>
                                @error('client_name')
                                @foreach($errors->get('client_name') as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                                @enderror

                                <div class="form-group">
                                    <label class="col-md-12">Контактный телефон</label>
                                    <div class="col-md-12">
                                        <input type="text" name="phone"
                                               class="form-control form-control-line">
                                    </div>
                                </div>
                                @error('phone')
                                @foreach($errors->get('phone') as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                                @enderror

                                <div class="form-group">
                                    <label class="col-md-12">Адрес</label>
                                    <div class="col-md-12">
                                        <input type="text" name="address"
                                               class="form-control form-control-line">
                                    </div>
                                </div>
                                @error('address')
                                @foreach($errors->get('address') as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                                @enderror

                                <div class="form-group">
                                    <label class="col-md-12">Примечание</label>
                                    <div class="col-md-12">
                                        <textarea type="text" name="issue_description"
                                                  class="form-control form-control-line @error('note') is-invalid @enderror">
                                        </textarea>
                                    </div>
                                    @error('note')
                                    @foreach($errors->get('note') as $error)
                                        @dump($error)
                                    @endforeach
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-warning text-white">Создать заявку</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>


        </div> <!-- end .container  -->

    </section> <!-- end .price-plan-section  -->


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

    <!-- CLIENT TESTIMONIAL SECTION  -->

    <section class="section-client-testimonial">

        <div class="container">

            <div class="row">
                <div class="col-md-6 wow fadeInLeft">
                    <div class="row testimonial-text">

                        <h3 class="text-center">Our Clients <br/>Opinion About Us</h3>
                        <div class="testimonial-container text-center">

                            <div class="col-md-12 col-sm-12">

                                <div class="testimony-layout-1">

                                    <p>
                                        Lorem ipsum dolor sit amet diam brute integre eapri. Per fugitzril apeirian cumea eaap pareat euripidi utmel graeci doming. Duo dicat apeirian facilisi ne Per fugitzril apeirian cumea eaap pareat.
                                    </p>

                                    <h6>Deborah Beck</h6>
                                    <span>CTO, Deborah Softwares, USA</span>

                                </div> <!-- end .testimony-layout-1  -->

                            </div> <!--  end col-sm-12  -->

                            <div class="col-md-12 col-sm-12">

                                <div class="testimony-layout-1">

                                    <p>
                                        Lorem ipsum dolor sit amet diam brute integre eapri. Per fugitzril apeirian cumea eaap pareat euripidi utmel graeci doming. Duo dicat apeirian facilisi ne Per fugitzril apeirian cumea eaap pareat.
                                    </p>


                                    <h6>Harry Williams</h6>
                                    <span class="bq-author-info">CEO, HW Tech Inc, Bulgaria</span>

                                </div> <!-- end .testimony-layout-1  -->

                            </div> <!--  end col-sm-12  -->

                            <div class="col-md-12 col-sm-12">

                                <div class="testimony-layout-1">

                                    <p>
                                        Lorem ipsum dolor sit amet diam brute integre eapri. Per fugitzril apeirian cumea eaap pareat euripidi utmel graeci doming. Duo dicat apeirian facilisi ne Per fugitzril apeirian cumea eaap pareat.
                                    </p>


                                    <h6>Harry Williams</h6>
                                    <span class="bq-author-info">CEO, HW Tech Inc, Bulgaria</span>

                                </div> <!-- end .testimony-layout-1  -->

                            </div> <!--  end col-sm-12  -->


                        </div> <!-- end .testimonial-container  -->
                    </div>
                </div> <!-- end .col-md-6 -->

                <div class="col-md-6 wow fadeInRight">
                    <div class="testimonial-image">
                        <img src="{{asset('site/images/client-image.jpg')}}" alt="Client">
                    </div>
                </div>

            </div> <!-- end row  -->

        </div> <!-- end .container  -->

    </section> <!--  end .section-client-testimonial -->



@endsection
