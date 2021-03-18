@extends('layouts.client')


@section('content')
    <!-- ==================== 
	     Banner Section
	========================= -->

    <div class="banner-section">
        <div
            class="banner-item"
            style="background-image: url(assets/image/banner-img.jpg);"
        >
            <div class="overlay-color"></div>
            <div class="container">
                <div class="banner-content">
                    <h1 class="title" data-aos="fade-up">
                        #1 Choice of professionals
                    </h1>
                    <h3 class="subtitle" data-aos="fade-down">
                        Change your trading forever
                    </h3>
                    <a href="#" class="button-1" data-aos="fade-down"
                        >START NOW
                        <i class="fa fa-angle-right" aria-hidden="true"></i
                    ></a>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== 
     Service Section
    ========================= -->
    <div class="service-section bg-lights small-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box" data-aos="fade-up">
                        <div class="icon">
                            <i
                                class="fa fa-line-chart"
                                aria-hidden="true"
                            ></i>
                        </div>
                        <h3 class="title">Gamechanger</h3>
                        <p>
                            Elite FX Signals helps you take back control of
                            your charts in real time.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box" data-aos="fade-down">
                        <div class="icon">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                        </div>
                        <h3 class="title">Gamechanger</h3>
                        <p>
                            Elite FX Signals helps you take back control of
                            your charts in real time.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box" data-aos="fade-up">
                        <div class="icon">
                            <i class="fa fa-undo" aria-hidden="true"></i>
                        </div>
                        <h3 class="title">Gamechanger</h3>
                        <p>
                            Elite FX Signals helps you take back control of
                            your charts in real time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==================== 
     Block Section
    ========================= -->
    <div class="block-section big-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="block-content">
                        <h2 class="title">Elite FX Signals</h2>
                        <p>
                            Elite FX Signals, Elite FX Robot Trader and
                            Elite FX Training academy are all part of the
                            parent company Elite FX Group. Based in the
                            Netherlands and operating from around the world
                            we are Your Personalised Trading Solutions
                            guide. At Elite FX we are always hungry and
                            strive for continued success. We imprint this
                            into all our students and provide a personal
                            touch to all those that want to be supported to
                            becoming financially independent and secure. At
                            Elite FX we allow you access to our live Forex
                            Signal Service so that you retain an income
                            source so that you have time to do what we ask
                            of you. What do we want ? We want you to learn
                            to become successful independent retail traders!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-img">
                        <img src="assets/image/logo.png" alt="img" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==================== 
     Pricing Section
    ========================= -->
    <div class="pricing-section big-spacer">
        <div class="container">
            <div class="section-title">
                <h2>Introducing the Elite FX VIP Package</h2>
            </div>
            <div class="pricing-table">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pricing-box">
                            @if($vip_package)
                            <div class="header">
                                {{$vip_package->name}}
                            </div>
                            <h2 class="amount">
                                ${{$vip_package->price}}
                            </h2>
                            {{-- <ul class="list">
                                <li>
                                    <span
                                        >Elite FX Trading Software for one real
                                        and one demo account.</span
                                    >
                                </li>
                                <li>
                                    <span
                                        >Elite FX for one real and one demo
                                        account.</span
                                    >
                                </li>
                                <li>
                                    <span
                                        >Elite FX Trad for one real and one demo
                                        account.</span
                                    >
                                </li>
                                <li>
                                    <span
                                        >Elite FX Trading real and one demo
                                        account.</span
                                    >
                                </li>
                            </ul> --}}
                            {!!$vip_package->description!!}
                            <form action="{{route('client.cart.add')}}" method="POST">
                                @csrf
                                <input type="text" name="package_id" class="d-none" value="{{$vip_package->id}}">
                                <input type="text" name="quantity" class="d-none" value="1">
                                <div class="button">
                                    <button type="submit" class="button-2">Add to cart</button>
                                </div>
                            </form>
                        @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="pricing-content">
                            <h2 class="title">More features:</h2>
                            <ul class="module">
                                <li>
                                    <span
                                        >Maximize you’re profits with a
                                        breakeven function</span
                                    >
                                </li>
                                <li>
                                    <span
                                        >Maximize you’re profits with a
                                        breakeven function</span
                                    >
                                </li>
                                <li>
                                    <span
                                        >Maximize you’re profits with a
                                        breakeven function</span
                                    >
                                </li>
                                <li>
                                    <span
                                        >Maximize you’re profits with a
                                        breakeven function</span
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== 
     Feature Section
    ========================= -->
    <div class="feature-section bg-lights small-spacer">
        <div class="container">
            <div class="section-title">
                <h2>How it works</h2>
                <p>
                    Generate a passive income with a one-time purchase and
                    set up while giving you 100% full transparency and
                    complete control of the funds in your own account. You
                    can withdraw at any time.
                </p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="feature-box" data-aos="fade-up">
                        <div class="icon">
                            <i class="fa fa-undo" aria-hidden="true"></i>
                        </div>
                        <h3 class="title">Gamechanger</h3>
                        <p>
                            Elite FX Signals helps you take back control of
                            your charts in real time.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box" data-aos="fade-down">
                        <div class="icon">
                            <i class="fa fa-undo" aria-hidden="true"></i>
                        </div>
                        <h3 class="title">Gamechanger</h3>
                        <p>
                            Elite FX Signals helps you take back control of
                            your charts in real time.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box" data-aos="fade-up">
                        <div class="icon">
                            <i class="fa fa-undo" aria-hidden="true"></i>
                        </div>
                        <h3 class="title">Gamechanger</h3>
                        <p>
                            Elite FX Signals helps you take back control of
                            your charts in real time.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box" data-aos="fade-down">
                        <div class="icon">
                            <i class="fa fa-undo" aria-hidden="true"></i>
                        </div>
                        <h3 class="title">Gamechanger</h3>
                        <p>
                            Elite FX Signals helps you take back control of
                            your charts in real time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== 
     Plan Section
    ========================= -->
    <div class="plan-section big-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="plan-content">
                        <h3 class="title">Exclusive Trading Courses</h3>
                        <p>
                            Get instant acces to theory and practical
                            material we consider the essential building
                            blocks to becoming an independent trader. We
                            want you to learn to become a successful
                            independent retail trader!
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="plan-content">
                        <h3 class="title">Exclusive Trading Courses</h3>
                        <p>
                            Get instant acces to theory and practical
                            material we consider the essential building
                            blocks to becoming an independent trader. We
                            want you to learn to become a successful
                            independent retail trader!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== 
     Testimonial Section
    ========================= -->
    <div class="testimonial-section small-spacer bg-lights">
        <div class="container">
            <div class="section-title">
                <h2>What our clients say</h2>
            </div>
            <div class="testimonial-slider control-hide">
                <div class="testimonial-item">
                    <img src="assets/image/author-img.png" alt="image" />
                    <p>
                        “I’m a costumer for more then a year now, and I’m
                        still a very happy costumer. Great support, the
                        products and signals work very we’ll and you get
                        back more then what you paid for. Really worth
                        investing in!”
                    </p>
                </div>
                <div class="testimonial-item">
                    <img src="assets/image/author-img.png" alt="image" />
                    <p>
                        “I’m a costumer for more then a year now, and I’m
                        still a very happy costumer. Great support, the
                        products and signals work very we’ll and you get
                        back more then what you paid for. Really worth
                        investing in!”
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ==================== 
     Questions Section
    ========================= -->

    <div class="questions-section small-spacer">
        <div class="container">
            <div class="partnership">
                <h2 class="title">
                    In partnership with
                </h2>
                <a href="#" class="logo"
                    ><img src="assets/image/part-logo.jpg" alt="logo"
                /></a>
            </div>
            <div class="contact-us">
                <h2 class="title">Got questions? Contacts us</h2>
                <a href="#" class="button-2"
                    >Contact Us
                    <i class="fa fa-angle-right" aria-hidden="true"></i
                ></a>
            </div>
        </div>
    </div>

@endsection

@push('custom-js')
<script>
    $('ul').addClass('list')
</script>
@endpush