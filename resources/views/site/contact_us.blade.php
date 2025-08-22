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
    <div class="container contact padding-top-30" ng-controller="aboutPage" style="margin-top: 20px">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="widget-item info-contact">
                    <div class="headquarters_contact">
                        <h3>Thông tin liên hệ</h3>
                    </div>

                    <ul>
                        <li class="contact-i">
                            <div class="icon_contact"><i class="fa fa-map-signs"></i></div>
                            <div class="text_contact">
                                {{ $config->address_company }}
                            </div> <br>
                            <div class="text_contact">
                                Văn phòng giao dịch:
                            </div>
                            <div class="text_contact">
                                {!! $config->address_center_insurance !!}
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

            <style>
                /* ==== Tone xanh dương chính ==== */
                :root{
                    --brand-700:#0054A6;
                    --brand-600:#0054A6;
                    --brand-500:#0054A6;
                    --brand-100:#e3f2fd;
                    --ink:#0f172a;
                }

                /* Thẻ bao form */
                #login-contact .contact-card{
                    background: linear-gradient(180deg, var(--brand-100), #fff);
                    border: 1px solid rgba(33,150,243,.25);
                    border-radius: 18px;
                    padding: 20px;
                    /*box-shadow: 0 18px 40px rgba(33,150,243,.18);*/
                }

                /* Tiêu đề */
                #login-contact .contact-title{
                    display:flex; align-items:center; gap:10px;
                    font-size:20px; font-weight:700; color:var(--brand-700);
                    margin: 0 0 14px;
                }

                /* Lưới 2 cột cho name/phone */
                #login-contact .form-row{
                    display:grid; grid-template-columns:1fr; gap:14px;
                }
                @media (min-width: 768px){
                    #login-contact .form-row{ grid-template-columns:1fr 1fr; gap:16px; }
                }

                /* Nhóm field */
                #login-contact .field{ margin:0 0 10px; }
                #login-contact .field label{
                    display:block; font-weight:600; margin-bottom:8px; color:#1b3b6f;
                }

                /* Ô điều khiển có icon */
                #login-contact .control{ position:relative; }
                #login-contact .control.has-icon i{
                    position:absolute; left:14px; top:50%; transform:translateY(-50%);
                    pointer-events:none; opacity:.55; font-size:15px;
                }
                #login-contact .control.has-icon.textarea i{
                    top:18px; transform:none;
                }

                /* Input/textarea */
                #login-contact .form-contact-a{
                    width:100%;
                    background:#f8fbff;
                    border:1.5px solid #cfe4ff;
                    border-radius:12px;
                    padding:12px 14px 12px 44px !important; /* chừa chỗ cho icon */
                    font-size:16px; color:var(--ink);
                    transition: border-color .2s ease, box-shadow .2s ease, background .2s ease;
                    outline:none;
                }
                #login-contact textarea.form-contact-a{
                    min-height:140px; resize:vertical; padding-left:44px;
                }
                #login-contact .form-contact-a::placeholder{ color:#5b7aa6; opacity:.9; }
                #login-contact .form-contact-a:hover{ border-color:var(--brand-500); }
                #login-contact .form-contact-a:focus{
                    border-color:var(--brand-600); background:#fff;
                    /*box-shadow:0 0 0 4px rgba(33,150,243,.18);*/
                }

                /* Gợi ý/ghi chú nhỏ */
                #login-contact .hint{ display:block; margin-top:6px; font-size:12px; color:#5b7aa6; }

                /* Lỗi tổng và lỗi từng trường */
                #login-contact #errorFills{
                    margin-top:10px; padding:10px 12px; border-radius:10px;
                    background:#ffefef; color:#c62828 !important; border:1px solid #ffcdd2;
                    font-weight:500;
                }
                #login-contact .invalid-feedback.d-block{
                    margin-top:6px; font-size:13px; color:#c62828;
                }

                /* Khu vực nút gửi */
                #login-contact .actions{
                    display:flex; align-items:center; gap:12px; margin-top:8px;
                }

                /* Nút gửi */
                #login-contact .btn-contact-plane.btn{
                    padding:12px 18px; border:none; border-radius:12px;
                    display:inline-flex; align-items:center; gap:10px;
                    background: linear-gradient(135deg, var(--brand-600), var(--brand-500));
                    box-shadow:0 12px 24px rgba(33,150,243,.35);
                    transition: transform .15s ease, box-shadow .15s ease, opacity .15s ease;
                    font-weight:600;
                }
                #login-contact .btn.btn-primary{
                    background: linear-gradient(135deg, var(--brand-600), var(--brand-500)) !important;
                    border-color: var(--brand-600) !important;
                    color:#fff;
                }
                #login-contact .btn-contact-plane.btn:hover{ transform:translateY(-2px); box-shadow:0 16px 32px rgba(33,150,243,.45); }
                #login-contact .btn-contact-plane.btn:active{ transform:translateY(0); box-shadow:0 8px 16px rgba(33,150,243,.3); }
                #login-contact .btn-contact-plane.btn:focus{ outline:none; box-shadow:0 0 0 4px rgba(33,150,243,.25); }

                /* Loading */
                #login-contact .form-status{ color:#1b3b6f; font-size:14px; }

            </style>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" ng-cloak>
                <div class="page-login page_contact">
                    <div id="login-contact">
                        <form method="post" id="contactForm" accept-charset="UTF-8" novalidate ng-submit="submitForm()">
                            <div class="contact-card">
                                <h3 class="contact-title">
                                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                                    Liên hệ với chúng tôi
                                </h3>

                                <div class="form-row">
                                    <!-- Họ tên -->
                                    <div class="field">
                                        <label for="contact_name">Họ và tên</label>
                                        <div class="control has-icon">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <input type="text" id="contact_name" name="name"
                                                   class="form-control form-contact-a"
                                                   placeholder="Nguyễn Văn A" required minlength="2"
                                                   ng-model="form.name">
                                        </div>
                                        <small class="hint">Vui lòng nhập đầy đủ họ tên.</small>
                                        <div class="invalid-feedback d-block" ng-if="errors['name']"><% errors['name'][0] %></div>
                                    </div>

                                    <!-- Số điện thoại -->
                                    <div class="field">
                                        <label for="contact_phone">Số điện thoại</label>
                                        <div class="control has-icon">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <input type="tel" id="contact_phone" name="phone"
                                                   class="form-control form-contact-a"
                                                   placeholder="09xx xxx xxx" required
                                                   pattern="^(\+?84|0)\d{9,10}$"
                                                   ng-model="form.phone">
                                        </div>
                                        <small class="hint">Định dạng: 09xx xxx xxx</small>
                                        <div class="invalid-feedback d-block" ng-if="errors['phone']"><% errors['phone'][0] %></div>
                                    </div>
                                </div>

                                <!-- Nội dung -->
                                <div class="field">
                                    <label for="contact_message">Nội dung</label>
                                    <div class="control has-icon textarea">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                        <textarea id="contact_message" name="message" rows="5"
                                                  class="form-control form-contact-a"
                                                  placeholder="Bạn cần hỗ trợ vấn đề gì?" required minlength="5"
                                                  ng-model="form.message"></textarea>
                                    </div>
                                </div>

                                <div class="actions">
                                    <button type="submit"
                                            class="btn btn-primary btn-contact-plane"
                                            ng-click="submitForm()" ng-disabled="loading">
                                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                        Gửi liên hệ
                                    </button>
                                    <span class="form-status" ng-if="loading">
        <i class="fa fa-spinner fa-spin"></i> Đang gửi…
      </span>
                                </div>

                                <p id="errorFills" ng-if="formError"><% formError %></p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>


        <div class="box-maps">
            <div class="iFrameMap">
                <div class="google-map">
                    <div id="contact_map" class="map">
                        {!! $config->location !!}
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
