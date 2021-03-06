<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

    <title>Harmony - Free responsive Bootstrap admin template by Themestruck.com</title>


    <!-- Font awesome -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="/css/app.css">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="/admin-sources/css/dataTables.bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="/admin-sources/css/bootstrap-social.css">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="/css/bootstrap-select.css">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="/admin-sources/css/fileinput.min.css">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="/css/awesome-bootstrap-checkbox.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="/admin-sources/css/style.css">
    <!-- Custom Stye -->
    <link rel="stylesheet" href="/admin-sources/css/custom.css">

    @yield('header')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="/js/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/admin-sources/js/bootstrap-select.min.js"></script>
    <script src="/admin-sources/js/jquery.dataTables.min.js"></script>
    <script src="/js/jquery.formatter.min.js"></script>
</head>

<body>
<div class="brand clearfix">
    <a href="index.html" class="logo"><img src="/admin-sources/images/logo.jpg" class="img-responsive" alt=""></a>
    <span class="menu-btn"><i class="fa fa-bars"></i></span>
    <ul class="ts-profile-nav">
        <li><a href="#">Help</a></li>
        <li><a href="#">Settings</a></li>
        <li class="ts-account">
            <a href="#"><img src="/admin-sources/images/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
            <ul>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Edit Account</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </li>
    </ul>
</div>

<div class="ts-main-content">
    <nav class="ts-sidebar">
        <ul class="ts-sidebar-menu">
            <li class="ts-label">Search</li>
            <li>
                <input type="text" class="ts-sidebar-search" placeholder="Search here...">
            </li>
            <li class="ts-label">Main</li>
            <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('settingsMainPage') }}"><i class="fa fa-table"></i> Site Ayarları</a></li>
            <li><a href="#"><i class="fa fa-desktop"></i> {{ trans('text.admin.menu.users') }}</a>
                <ul>
                    <li><a href="{{ route('usersMainPage') }}">{{ trans('text.admin.menu.allusers') }}</a></li>
                    <li><a href="{{ route('getNewUser') }}">{{ trans('text.admin.menu.newuser') }}</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-desktop"></i> {{ trans('text.admin.menu.categories') }}</a>
                <ul>
                    <li><a href="{{ route('categoriesMainPage') }}">{{ trans('text.admin.menu.allcategories') }}</a></li>
                    <li><a href="{{ route('getNewCategory') }}">{{ trans('text.admin.menu.newcategory') }}</a></li>
                </ul>
            </li>

            <li><a href="#"><i class="fa fa-desktop"></i> {{ trans('text.admin.menu.articles') }}</a>
                <ul>
                    <li><a href="{{ route('articlesMainPage') }}">{{ trans('text.admin.menu.allarticles') }}</a></li>
                    <li><a href="{{ route('getNewArticle') }}">{{ trans('text.admin.menu.newarticle') }}</a></li>
                </ul>
            </li>

            <li><a href="{{ route('slidesMainPage') }}"><i class="fa fa-desktop"></i>{{ trans('text.admin.menu.slides') }}</a></li>

            <li><a href="{{ route('guestbookMainPage') }}"><i class="fa fa-desktop"></i>{{ trans('text.admin.menu.guestbooks') }}</a></li>

            <li><a href="#"><i class="fa fa-desktop"></i> {{ trans('text.admin.menu.menus') }}</a>
                <ul>
                    <li><a href="{{ route('menusMainPage') }}">{{ trans('text.admin.menu.allmenus') }}</a></li>
                    <li><a href="{{ route('getNewMenu') }}">{{ trans('text.admin.menu.newmenu') }}</a></li>
                </ul>
            </li>
            <!-- Account from above -->
            <ul class="ts-profile-nav">
                <li><a href="#">Help</a></li>
                <li><a href="#">Settings</a></li>
                <li class="ts-account">
                    <a href="#"><img src="/admin-sources/images/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Edit Account</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>

        </ul>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="row">

                        @yield('content')

                        <div class="col-md-4">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Loading Scripts -->
<script src="/admin-sources/js/dataTables.bootstrap.min.js"></script>
<script src="/admin-sources/js/Chart.min.js"></script>
<script src="/admin-sources/js/fileinput.js"></script>
<script src="/admin-sources/js/chartData.js"></script>
<script src="/admin-sources/js/main.js"></script>
<script>
    function string_to_slug(str) {
        str = str.replace(/^\s+|\s+$/g, ''); // trim
        str = str.toLowerCase();

        // remove accents, swap ñ for n, etc
        var from = "àáäâèéëêìíïîışòóöôùúüûñçğ·/_,:;";
        var to   = "aaaaeeeeiiiiisoooouuuuncg------";
        for (var i=0, l=from.length ; i<l ; i++) {
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }
        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes

        return str;
    }
</script>
@yield('footer')
</body>

</html>