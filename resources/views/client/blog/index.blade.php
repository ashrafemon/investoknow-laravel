@extends('layouts.client')


@section('content')
    <!-- ==================== 
	     Blog Section
	========================= -->
    <div class="blog-section big-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="blog-post">
                        <a href="#"
                            ><img
                                src="{{asset('assets/image/Trading-psychology-1-680x380.png')}}"
                                alt="img"
                        /></a>
                        <div class="blog-content">
                            <a href="single.html"
                                ><h4 class="title">
                                    Trading psychology
                                </h4></a
                            >
                            <a href="single.html" class="button-2"
                                >Read more</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection