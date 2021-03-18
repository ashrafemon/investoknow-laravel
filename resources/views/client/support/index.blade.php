@extends('layouts.client')


@section('content')
    <!-- ==================== 
	     Support Section
	========================= -->
    <div class="support-section small-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="support-content">
                        <div class="support-item">
                            <h4 class="title">
                                <i
                                    class="fa fa-map-marker"
                                    aria-hidden="true"
                                ></i>
                                Elite FX Signals
                            </h4>
                            <p>
                                Hoge Vorst 29<br />
                                Bassevelde – 9968<br />
                                België
                            </p>
                            <p>
                                VAT number: BE 0745.815.974<br />
                                Registration number: 0745.815.974
                            </p>
                        </div>
                        <div class="support-item">
                            <h4 class="title">
                                <i
                                    class="fa fa-envelope"
                                    aria-hidden="true"
                                ></i
                                >E-mail
                            </h4>
                            <p><a href="#">contact@elitefxsignals.nl</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="support-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26360909.888257876!2d-113.74875964478716!3d36.242299409623534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1590954613684!5m2!1sen!2sbd"
                            width="600"
                            height="450"
                            frameborder="0"
                            style="border: 0;"
                            allowfullscreen=""
                            aria-hidden="false"
                            tabindex="0"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==================== 
     Contact-form Section
    ========================= -->
    <div class="contact-form-section bg-light small-spacer">
        <div class="container">
            <div class="contact-title">
                <div class="icon">
                    <i class="fa fa-comments" aria-hidden="true"></i>
                </div>
                <h3 class="title">We are ready to help you. Contact Us.</h3>
                <p>
                    Got a question? We’d love to hear from you. Send us a
                    message an we’ll respond as soon as possible
                </p>
            </div>
            <div class="contact-form">
                <form action="#">
                    <div class="form-group">
                        <label for="">Email address</label>
                        <input type="email" class="form-control" id="" />
                    </div>
                    <div class="form-group">
                        <label for="">Email address</label>
                        <input type="email" class="form-control" id="" />
                    </div>
                    <div class="form-group">
                        <label for="">Email address</label>
                        <input type="email" class="form-control" id="" />
                    </div>
                    <div class="form-group">
                        <label for="">Email address</label>
                        <textarea
                            type="email"
                            rows="5"
                            class="form-control"
                            id=""
                        ></textarea>
                    </div>
                    <button type="submit" class="button-2 button-full">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection