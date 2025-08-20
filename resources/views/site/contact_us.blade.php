@extends('site.layouts.master')
@section('title')
    Liên hệ - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{@$config->image->path ?? ''}}
@endsection

@section('css')
    <style>
        .invalid-feedback {
            /*display: none;*/
            width: 100%;
            margin-top: 0.25rem;
            font-size: 100%;
            color: #dc3545;
        }
    </style>

    <style>
        .send-success-message {
            display: flex;
            align-items: center;
            background-color: #e6ffed; /* nền xanh nhạt */
            border: 1px solid #71d58b; /* viền xanh tươi */
            color: #2d6a4f; /* chữ xanh đậm */
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 1rem;
            gap: 12px; /* khoảng cách icon - text */
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 10px;
        }

        .send-success-message i {
            font-size: 1.4rem;
        }

        .send-success-message p {
            margin: 0;
            line-height: 1.4;
        }
    </style>
@endsection

@section('content')
    <section class="bread-crumb">
        <div class="container">

            <ul class="breadcrumb">
                <li class="home">
                    <a href="{{ route('front.home-page') }}"><span>Trang chủ</span></a>
                    <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
                </li>

                <li><strong><span>Liên hệ</span></strong></li>

            </ul>

        </div>
    </section>
    <div class="container contact padding-top-30" ng-controller="aboutPage" >
        <div class="box-maps">
            <div class="iFrameMap">
                <div class="google-map">
                    <div id="contact_map" class="map">
                        {!! $config->location !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="widget-item info-contact">
                    <div class="headquarters_contact">
                        <h3></h3>
                    </div>

                    <ul>
                        <li class="contact-i">
                            <div class="icon_contact"><i class="fa fa-map-signs"></i></div>
                            <div class="text_contact">
                                {{ $config->address_company }}
                            </div> <br>
                            <div class="text_contact">
                               VPGD: {{ $config->address }}
                            </div>
                        </li>
                        <li class="contact-i">
                            <div class="icon_contact"><i class="fa fa-paper-plane"></i></div>
                            <div class="text_contact"><a href=""><span class="__cf_email__"
                                                                       data-cfemail=""> {{ $config->email }}</span></a>
                            </div>
                        </li>
                        <li class="contact-i">
                            <div class="icon_contact" style="font-size: 17px;"><i class="fa fa-phone"></i></div>
                            <div class="text_contact"><a href="tel:{{ $config->hotline }}">{{ $config->hotline }}</a>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" ng-cloak>
                <div class="page-login page_contact">
                    <div id="login-contact">
                        <h1 class="title-head hidden"><span>Liên hệ</span></h1>

                        <form method="post" id="contactForm" accept-charset="UTF-8">

                            <p id="errorFills" style="margin-bottom:10px; color: red;"></p>
                            <div id="emtry_contact" class="form-signup form_contact clearfix">
                                <fieldset class="form-group-contact" style="float: left">
                                    <input type="text" name="name" id="name"
                                           class="form-control form-control-lg form-contact-a form-contact-1"
                                           placeholder="Nhập họ tên">
                                    <div class="invalid-feedback d-block" ng-if="errors['name']"><% errors['name'][0] %></div>

                                </fieldset>

                                <fieldset class="form-group-contact">
                                    <input type="email" name="phone" style="border-bottom:none"
                                           placeholder="Nhập số điện thoại"
                                           class="form-control form-control-lg form-contact-a">
                                    <div class="invalid-feedback d-block" ng-if="errors['phone']"><% errors['phone'][0] %></div>
                                </fieldset>
                                <fieldset class="form-group-contact">
                                    <textarea name="message" id="comment"
                                              class="form-control form-control-lg form-contact-a" rows="5"
                                              placeholder="Nội dung"
                                               minlength="5"></textarea>
                                    <div class="f-right btn-submit-contact">
                                        <button type="button" class="btn btn-primary btn-contact-plane" ng-click="submitForm()"  ng-disabled="loading">
                                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <style>
        .google-map {
            width: 100%;
            margin-bottom: 50px;
        }

        .google-map .map {
            width: 100%;
            height: 450px;
            background: #dedede
        }
    </style>


@endsection

@push('scripts')
    <script>
        app.controller('aboutPage', function ($rootScope, $scope, $interval) {
            console.log(2)
            $scope.errors = [];
            $scope.sendSuccess = false;
            $scope.submitForm = function () {
                var url = "{{route('front.submitContact')}}";
                var data = jQuery('#contactForm').serialize();
                $scope.loading = true;
                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: data,
                    success: function (response) {
                        if (response.success) {
                            toastr.success(response.message);
                            jQuery('#contactForm')[0].reset();
                            $scope.errors = [];
                            $scope.sendSuccess = true;
                            $scope.$apply();
                        } else {
                            $scope.errors = response.errors;
                            toastr.warning(response.message);

                            console.log($scope.errors)
                        }
                    },
                    error: function () {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function () {
                        $scope.loading = false;
                        $scope.$apply();
                    }
                });
            }

        })
    </script>
@endpush
