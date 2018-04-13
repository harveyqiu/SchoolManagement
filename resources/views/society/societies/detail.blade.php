@extends('society.template')

@section('content')
    <div>
        <div class="hero is-primary">
            <div class="hero-body">
                <div class="container">
                    <div class="colmuns">
                        <div class="column">
                            <p class="title"></p>
                            <div class="content">
                                <p>社团QQ群: </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-foot">
                <div class="container">
                    <nav class="tabs is-boxed">
                        <ul>
                            <li>
                                <a href="/">活动</a>
                            </li>
                            <li>
                                <a href="">杰出成员</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="columns">
                    <div class="column is-three-quarters">
                        <section class="section">
                            <div class="container">
                                <h1 class="title">社团介绍</h1>
                                <div class="content">
                                    <p></p>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="column">
                        <section class="section">
                            <a class="button is-warning is-large">社团未招新</a>
                            <form action="" method="post">
                                <input hidden name="ClubId" value="" />
                                <button class="button is-info is-large">
                                    加入该社团
                                </button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection