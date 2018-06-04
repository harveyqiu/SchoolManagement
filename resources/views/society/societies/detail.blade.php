@extends('society.template')

@section('content')
    <div>
        <div class="hero is-info">
            <div class="hero-body">
                <div class="container">
                    <div class="colmuns">
                        <div class="column">
                            <p class="title">{{$society->name}}</p>
                            <div class="content">
                                <p>{{$society->recruit_qq_group}}</p>
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
                                <a href="">活动</a>
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
                                    <p>{{$society->introduction}}</p>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="column">
                        <section class="section">
                            @if ($society->recruit == '1')
                                <form action="{{URL::to('/society/societies/join')}}" method="post">
                                    @csrf
                                    @if (\Illuminate\Support\Facades\Auth::guard('student')->check())
                                    <input hidden name="user_id" value="{{request()->user()->user_id}}">
                                    <input hidden name="society_id" value="{{$society->society_id}}">
                                        {{--todo: test when logged in with the guard of society what will happen--}}

                                    @endif

                                    <button class="button is-info is-large" type="submit">
                                        加入该社团
                                    </button>
                                </form>
                            @else
                                <a class="button is-warning is-large">社团未招新</a>
                            @endif

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection