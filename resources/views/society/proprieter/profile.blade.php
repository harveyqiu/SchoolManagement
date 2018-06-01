@extends('society.proprieter.template')

@section('content')
    <form action="" method="post">
        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label">社团名称</label>
                    <div class="control">
                        <input class="input" name="SocietyName" value="{{$society->name}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label">社长姓名</label>
                    <div class="control is-expanded">
                        <input class="input" type="text" value="{{$society->proprieter_name}}" name="ProprieterName">
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">社长年级</label>
                    <div class="control is-expanded">
                        <div class="select" style="width:100%">
                            <select name="ProprieterGrade" style="width:100%;">
                                @if ($society->proprieter_grade == 1)
                                    <option label="高一" value="1" selected="selected"></option>
                                    <option label="高二" value="2"></option>
                                    <option label="高三" value="3"></option>
                                @elseif($society->proprieter_grade == 2)
                                    <option label="高一" value="1"></option>
                                    <option label="高二" value="2" selected="selected"></option>
                                    <option label="高三" value="3"></option>
                                @elseif($society->proprieter_grade ==3)
                                    <option label="高一" value="1"></option>
                                    <option label="高二" value="2"></option>
                                    <option label="高三" value="3" selected="selected"></option>
                                @endif
                            </select>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">社长班级</label>
                    <div class="control is-expanded">
                        <div class="select" style="width:100%">
                            <select name="ProprieterClass" style="width:100%">
                                @foreach(range(1,13) as $i)
                                    @if ($i == $society->proprieter_class)
                                        <option value="{{$i}}" selected="selected">{{$i}}</option>
                                        @continue
                                    @elseif($i != $society->proprieter_class)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @continue
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">社长QQ</label>
                    <div class="control">
                        <input class="input" type="number" name="ProprieterQQ" value="{{$society->proprieter_qq}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label">社团邮箱</label>
                    <div class="control">
                        <input class="input" type="email" name="SocietyEmail" value="{{$society->email}}">
                    </div>
                </div>

            </div>
            <div class="column">
                <div class="field">
                    <label class="label">
                        是否招新
                    </label>
                    <div class="control">
                        <div class="control is-expanded">
                            <div class="select" style="width:100%">
                                <select name="Recruit" style="width:100%">
                                    @if ($society->recruit == true)
                                        <option label="是" value="1" selected="selected"></option>
                                        <option label="否" value="0"></option>
                                    @elseif($society->recruit == false)
                                        <option label="是" value="1"></option>
                                        <option label="否" value="0" selected="selected"></option>
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label">社团介绍</label>
                    <div class="control">
                        <textarea class="textarea" name="SocietyIntroduction">{{$society->introduction}}</textarea>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">社团成就</label>
                    <div class="control">
                        <textarea class="textarea" name="SocietyAchievement">{$society->achievements}}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="field">
                    <div class="control">
                        <button class="button is-link" style="height:50px;width:100%">提交</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection