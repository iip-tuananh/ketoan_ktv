<!-- Footer -->
<footer class="footer_main">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 full-xs">
                    <div class="footer_top_title">
                        <h4>Kết nối cộng đồng</h4>
                    </div>
                    <div class="footer_top_social">
                        <ul class="inline-list social-icons">

                            <li>
                                <a class="icon-fallback-text" href="{{ $config->twitter }}">
                                    <span class="fa fa-twitter" aria-hidden="true"></span>

                                </a>
                            </li>


                            <li>
                                <a class="icon-fallback-text" href="{{ $config->facebook }}">
                                    <span class="fa fa-facebook" aria-hidden="true"></span>

                                </a>
                            </li>

                            <li>
                                <a class="icon-fallback-text" href="{{ $config->instagram }}">
                                    <span class="fa fa-instagram" aria-hidden="true"></span>

                                </a>
                            </li>


                            <li>
                                <a class="icon-fallback-text" href="{{ $config->email }}" rel="publisher">
                                    <span class="fa fa-google-plus" aria-hidden="true"></span>

                                </a>
                            </li>





                        </ul>

                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 full-xs hidden-xs">


                    <div class="subcribe">
                        <div class="footer_top_title">
                            <h4>Đăng ký nhận bản tin</h4>
                        </div>
                        <div class="footer_top_form_register">



                            <form action="#" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">

                                <input type="email" class="footer_top_form_register_input" value="" placeholder="Email của bạn" name="EMAIL" id="mail" aria-label="general.newsletter_form.newsletter_email" >
                                <button  class="btn btn-primary subscribe footer_top_form_register_input_action" name="subscribe" id="subscribe">Đăng ký</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom padding-top-30 padding-bottom-30">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 full-xs">


					<span class="wsp"><span class="mobile">© 2025 - Bản quyền thuộc về <span>{{ $config->web_title }}</span></span>

						</span>

                    <p>


                       {{ $config->address_company }}
                    </p>


                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 full-xs text-right text-left-mobile">

                    <p>Điện thoại: <a href="tel:{{ $config->hotline }}">{{ $config->hotline }} | {{ $config->zalo }}</a></p>

                    <p>Email: <a href="#"><span class="__cf_email__" >{{ $config->email }}</span></a></p>

                </div>
            </div>

        </div>
    </div>
</footer>
<!-- End Footer -->
