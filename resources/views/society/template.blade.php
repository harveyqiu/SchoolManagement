<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>建平中学学生平台</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
<section class="hero is-fullheight">
    <div class="hero-head">
        <nav class="navbar">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{URL::to('/society')}}">
                    建平中学学生平台
                </a>
                <div class="navbar-burger" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-start">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link ">
                            社团
                        </a>
                        <div class="navbar-dropdown ">
                            <a class="navbar-item " href=" {{ URL::to('/society/societies/list') }} ">
                                社团列表
                            </a>
                            <a class="navbar-item ">
                                社团动态
                            </a>
                        </div>
                    </div>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link ">
                            活动
                        </a>
                        <div class="navbar-dropdown ">
                            <a class="navbar-item ">
                                活动报名
                            </a>
                            <a class="navbar-item ">
                                活动动态
                            </a>
                        </div>
                    </div>
                    <a class="navbar-item" href="#">
                        失物招领
                    </a>
                    <a class="navbar-item" href="">
                        关于
                    </a>
                    <a class="navbar-item" href="">
                        联系我们
                    </a>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link ">
                            欢迎你，
                        </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item " href="">个人中心</a>
                            <a class="navbar-item " href="">社团</a>
                            <a class="navbar-item " href="">活动</a>
                            <a class="navbar-item " href="">更改密码</a>
                            <a class="navbar-item " href="">注销</a>
                        </div>
                    </div>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link " href="">
                            登录
                        </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item " href="{{URL::to('/society/login')}}">
                                学生登录
                            </a>
                            <a class="navbar-item " href="">
                                社长登录
                            </a>
                            <a class="navbar-item " href="">
                                社团部登录
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="hero-body">
        <div class="container">
            @section('content')

            @show
        </div>
    </div>

</section>
</body>
</html>
