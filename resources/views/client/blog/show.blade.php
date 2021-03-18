@extends('layouts.client')

@section('content')
    <!-- ==================== 
	     Blog Section
	========================= -->
    <div class="blog-section big-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <img
                        src="{{asset('assets/image/Trading-psychology-1-680x380.png')}}"
                        alt="image"
                        class="feature-img"
                    />
                    <div class="entry-content">
                        <h6>Trading psychology</h6>
                        <p>
                            Financial Markets are neither moral nor immoral
                            – they’re amoral. The markets have no emotions
                            at all, so it’s completely up to the traders how
                            they perceive the market to be. If your goal in
                            the long run is to attain and maintain the
                            status of a trader, it’s very important to
                            develop a mindset that helps you observe the
                            market from an unemotional perspective.
                        </p>
                        <p>
                            Your mindset will ultimately define your
                            reactions during losing trades or large profits
                            – will you be able to stay calm during these
                            events and avoid reacting based on emotions?
                            Trading is one of the most challenging,
                            exhilarating and profitable careers you can
                            choose. And when we say challenging, think
                            challenging right down to the core of your
                            identity.
                        </p>
                        <p>
                            This is because our brains were created to help
                            us survive a hostile physical environment. As a
                            result, our brains are “hard-wired” to react in
                            ways that don’t serve us well in our journey to
                            becoming consistently profitable independent
                            professional traders.
                        </p>
                        <p>
                            This is one thing for sure, if you want to be
                            successful at trading you need to study and
                            practice. If you don’t learn how to trade before
                            you start trading with real money you will go
                            through a great deal of fear, pain, and loss of
                            money. And this emotional rollercoaster can be
                            extremely unpleasant, let’s have a look, at the
                            number of emotions, and the sequence and the
                            rate at which they can appear, one after
                            another.
                        </p>
                        <img
                            src="{{asset('assets/image/trading-psychology.png')}}"
                            alt="image"
                        />
                        <p>
                            have proper risk management guidelines in place,
                            there is no need to worry about trades at all.
                            In the end, what can go wrong? Even if a trade
                            hits your stop-loss level, it’s not the end of
                            the world. Losing trades happen all the time,
                            and even professional traders have a winning
                            rate closer to 50%, much less than what you
                            might think. With a high enough reward-to-risk
                            ratio, which is the ratio of your potential
                            profit and potential loss on a single trade,
                            you’ll still end up in profit even with a 50%
                            winning rate.
                        </p>
                    </div>
                    <h3 class="social-share-title">Share this :</h3>
                    <ul class="social-share">
                        <li>
                            <a href="#"
                                ><i
                                    class="fa fa-facebook"
                                    aria-hidden="true"
                                ></i
                                >Share</a
                            >
                        </li>
                        <li>
                            <a href="#"
                                ><i
                                    class="fa fa-facebook"
                                    aria-hidden="true"
                                ></i
                                >Share</a
                            >
                        </li>
                        <li>
                            <a href="#"
                                ><i
                                    class="fa fa-facebook"
                                    aria-hidden="true"
                                ></i
                                >Share</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="sidebar-wrap">
                        <h4 class="sidebar-title">Most read blogs</h4>
                        <div class="sidebar-widget">
                            <a href="single.html" class="block"
                                ><img
                                    src="{{asset('assets/image/sidebar-blog.png')}}"
                                    alt="image"
                                />
                                <h5>Chart patterns</h5></a
                            >
                        </div>
                        <h4 class="sidebar-title">Categories</h4>
                        <div class="sidebar-widget">
                            <ul class="category">
                                <li>
                                    <a href="#"
                                        ><i
                                            class="fa fa-folder-o"
                                            aria-hidden="true"
                                        ></i
                                        >Patterns</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i
                                            class="fa fa-folder-o"
                                            aria-hidden="true"
                                        ></i
                                        >Patterns</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection