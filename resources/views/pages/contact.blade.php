@extends('layouts.app')
@section('title', 'About')
@section('content')
    <!-- contact section start -->
    <div class="contact_section layout_padding margin_top90">
        <div class="container">
            <h1 class="contact_taital">Get In Touch</h1>
            <p class="contact_text">majority have suffered alteration in some form, by injected humour, or </p>
            <div class="contact_section_2 layout_padding">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact_main">
                            <input type="text" class="mail_text" placeholder="Full Name" name="Full Name">
                            <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number">
                            <input type="text" class="mail_text" placeholder="Email" name="Email">
                            <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                            <div class="send_bt"><a href="#">SEND</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="map_main">
                            <div class="map-responsive">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385.65902254144527!2d111.05102381538697!3d-6.625901607353578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70d57e591068ab%3A0xbccdbe7a00ff2290!2sCV.%20KARYA%20MUKTI%20SENTOSA%20(KMS%20BETON)!5e1!3m2!1sid!2sid!4v1676869833331!5m2!1sid!2sid"
                                    width="600" height="400" style="bborder:0; width: 100%;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->
@endsection
