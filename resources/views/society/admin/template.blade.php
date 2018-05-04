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
<nav class="navbar ">
    <div class="navbar-brand">
        <a class="navbar-item" href="">
            建平中学学生平台
        </a>
    </div>

    <div class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item " href="">
                关于
            </a>
            <a class="navbar-item " href="">
                联系我们
            </a>
        </div>
        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="">欢迎,</a>
                <div class="navbar-dropdown">
                    <a class="navbar-item" href="/profile">
                        修改信息
                    </a>
                    <a class="navbar-item" href="">
                        注销
                    </a>
                </div>

            </div>

            <div class="navbar-item">
                <div class="field">
                    <p class="control">
                        <a href="{{ URL::to('society/admin/login') }}">登陆</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="columns">
    <div class="column is-one-fifth">
        <aside class="menu">
            <p class="menu-label">
                总览
            </p>
            <ul class="menu-list">
                <li>
                    <a href="{{URL::to('/society/admin/')}}">仪表盘</a>
                </li>
            </ul>
            <p class="menu-label">
                社团
            </p>
            <ul class="menu-list">
                <li>
                    <a href="{{URl::action('SocietyController@listForAdmin')}}">所有社团</a>
                </li>
                <li>
                    <a href={{URL::action('SocietyController@unconfirmedListForAdmin')}}>未审核社团</a>
                </li>
                <li>
                    <a href="{{URL::action('PostController@listForAdmin')}}">社团活动记录</a>
                </li>
            </ul>
            <p class="menu-label">
                招新
            </p>
            <ul class="menu-list">
                <li>
                    <a href="">公共教室列表</a>
                </li>
            </ul>
            <p class="menu-label">
                活动
            </p>
            <ul class="menu-list">
                <li>
                    <a href="">列表</a>
                </li>
            </ul>
            <p class="menu-label">
                文件
            </p>
            <ul class="menu-list">
                <li>
                    <a href="">上传</a>
                </li>
                <li>
                    <a href="">下载</a>
                </li>
            </ul>
            <p class="menu-label">
                用户
            </p>
            <ul class="menu-list">
                <li>
                    <a href="">批量创建用户</a>
                    <a href="">创建单一用户</a>
                </li>
            </ul>
        </aside>
    </div>
    <div class="column">
        @section('content')

        @show
    </div>
</div>
</body>
</html>
