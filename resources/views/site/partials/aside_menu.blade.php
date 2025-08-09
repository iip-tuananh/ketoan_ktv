
<aside class="aside-item sidebar-category blog-category">
    <div class="aside-heading">
        <button data-target=".bs-example-js-aside-category" data-toggle="collapse" type="button"
                class="navbar-toggle">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <h2 class="title-head"><span>Danh mục</span></h2>
    </div>
    <div class="aside-content">
        <nav
            class="nav-category  navbar-toggleable-md navbar-collapse collapse navPillsDuc bs-example-js-aside-category">
            <ul class="nav navbar-pills">


                <li class="nav-item">
                    <i class="fa fa-caret-right"></i>
                    <a class="nav-link" href="{{ route('front.about_page') }}">Giới thiệu</a></li>

                @foreach($postCategory as $pCate)
                    <li class="nav-item">
                        <i class="fa fa-caret-right"></i>
                        <a class="nav-link" href="{{ route('front.getPostCategory', $pCate->slug) }}">{{ $pCate->name }}</a></li>
                @endforeach


                <li class="nav-item">
                    <i class="fa fa-caret-right"></i>
                    <a class="nav-link" href="{{ route('front.contact') }}">Liên hệ</a>
                </li>


            </ul>
        </nav>
    </div>
</aside>
