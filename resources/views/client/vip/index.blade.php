@extends('layouts.client')

@section('content')
    <!-- ==================== 
	     Page Title
	========================= -->
    <div class="page-title page-bg">
        <div class="overlay-color"></div>
        <div class="container">
            <h3 class="title text-center">VIP Package</h3>
        </div>
    </div>

    <!-- ==================== 
     About Section
    ========================= -->
    <div class="about-section">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-8">
                    <h1>Introducing the Elite FX VIP package</h1>
                    <p>
                        Making money as a Forex trader can be extremely
                        challenging. Elite FX Signals is working to change
                        that with a remarkably reliable, easy-to-use, and
                        transparent trading robot that is set to be a game
                        changer. It eliminates any obstacles in analytical
                        and trading activity. Improve your forex trading
                        instantly with a professional forex expert.
                    </p>
                    <div class="row">
                        <div class="col-md-8">
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
                <div class="col-md-4">
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
            </div>
            <div class="section-border"></div>
            <div class="row">
                <div class="col-md-3">
                    <div class="feature-box">
                        <div class="icon">
                            <i
                                class="fa fa-line-chart"
                                aria-hidden="true"
                            ></i>
                        </div>
                        <p>High accurate trading results</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <div class="icon">
                            <i
                                class="fa fa-check-square-o"
                                aria-hidden="true"
                            ></i>
                        </div>
                        <p>High accurate trading results</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <div class="icon">
                            <i class="fa fa-shield" aria-hidden="true"></i>
                        </div>
                        <p>High accurate trading results</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <div class="icon">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                        </div>
                        <p>High accurate trading results</p>
                    </div>
                </div>
            </div>
            <div class="earned-pips">
                <h1 class="title">Earned Pips - Histors</h1>
                <div id="chart">
                    <div id="timeline-chart"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== 
     Milestone-quote Section
    ========================= -->
    <div class="milestone-quote-section big-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-10 m-auto">
                    <blockquote class="quote-block">
                        <p>
                            <strong
                                >Every trader has strengths and weakness.
                                Some are good holders of winners, but may
                                hold their losers a little too long. Others
                                may cut their winners a little short, but
                                are quick to take their losses. As long as
                                you stick to your own style, you get the
                                good and bad in your own approach.</strong
                            >
                        </p>
                    </blockquote>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="milestone-block">
                                <div class="icon">
                                    <i
                                        class="fa fa-users"
                                        aria-hidden="true"
                                    ></i>
                                </div>
                                <h2 class="title">5145</h2>
                                <p>Happy Clients Worldwide</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="milestone-block">
                                <div class="icon">
                                    <i
                                        class="fa fa-users"
                                        aria-hidden="true"
                                    ></i>
                                </div>
                                <h2 class="title">5145</h2>
                                <p>Happy Clients Worldwide</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== 
     CallToAction Section
    ========================= -->

    <div class="calltoaction-section bg-purple small-spacer">
        <div class="container">
            <div class="calltoaction-content">
                <div class="icon">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                </div>
                <h2 class="title">Join Our Telegram Channel Today</h2>
                <a href="#" class="button-2">Become A Member</a>
            </div>
        </div>
    </div>

    <!-- ==================== 
     Testimonial Section
    ========================= -->
    <div class="testimonial-section mt-5">
        <div class="container">
            <div class="section-title">
                <h2>What our clients say</h2>
            </div>
            <div class="testimonial-slider dots-hide">
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
            <div class="contact-us">
                <h2 class="title">Got questions? Contacts us</h2>
                <a href="support.html" class="button-2"
                    >Contact Us
                    <i class="fa fa-angle-right" aria-hidden="true"></i
                ></a>
            </div>
        </div>
    </div>
@endsection

@push('custom-js')
<script src="{{asset('assets/js/apexcharts.js')}}"></script>
<script type="text/javascript">
    var options = {
        chart: {
            height: 255,
            type: "bar",
            stacked: !0,
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "20%",
            },
        },
        dataLabels: {
            enabled: !1,
        },
        stroke: {
            show: !0,
            width: 2,
            colors: ["transparent"],
        },
        series: [
            {
                name: "Actual Time",
                data: [65, 80, 81, 56, 89],
            },
            {
                name: "Expected Time",
                data: [89, 80, 65, 59, 80],
            },
        ],
        legend: {
            show: 1,
        },
        // colors:e,
        xaxis: {
            categories: [
                "1 Feb",
                "8 Feb",
                "15 Feb",
                "22 Feb",
                "29 Feb",
            ],
            axisBorder: {
                show: !1,
            },
        },
        yaxis: {
            labels: {
                formatter: function (e) {
                    return e + "Hrs.";
                },
                offsetX: -15,
            },
        },
        fill: {
            opacity: 1,
        },
        title: {
            text: "Pen by avinash for timesheet",
        },
        tooltip: {
            y: {
                formatter: function (e) {
                    return e + "Hrs.";
                },
            },
        },
    };

    var chart = new ApexCharts(
        document.querySelector("#timeline-chart"),
        options
    );

    chart.render();

    $('ul').addClass('list')
</script>
@endpush