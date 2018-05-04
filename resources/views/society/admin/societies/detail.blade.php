@extends('society.admin.template')

@section('content')

    <div class="content">
        <h2>
            社团ID
        </h2>
        <p>
            {{$society->society_id}}
        </p>
        <h2>
            社团名称
        </h2>
        <p>{{$society->name}}</p>
        <h2>
            社长
        </h2>
        <p>
            高
            @if ($society->proprieter_grade == 1)
                一
            @elseif ($society->proprieter_grade == 2)
                二
            @elseif ($society->proprieter_grade == 3)
                三
            @endif
            ({{ $society->proprieter_class }})班 {{$society->proprieter_name}}
        </p>
        <h2>
            社团介绍
        </h2>
        <p>
            {{$society->introduction}}
        </p>
        <h2>
            是否招新
        </h2>
        <p>
            @if ($society->recruit == 1)
                是
            @else
                否
            @endif
        </p>
        <h2>
            星
        </h2>
        <p>
            {{$society->stars}}
        </p>
        <h2>
            社团类型
        </h2>
        <p>
            {{$society->type}}
        </p>
        <h2>
            审核情况
        </h2>
        <p>
            @if ($society->confirmed == 0)
                <p style="color:red">未审核</p>
            @elseif ($society->confirmed == 1)
                <p>已审核</p>
            @else
             未知情况
            @endif            
        </p>
        <div class="field">
    
            @if ($society->confirmed == 0)
                <div class="control">
                        <a class="button is-primary">审核通过</a>
                </div>
            @elseif ($society->confirmed == 1)
                <div class="control">
                    <a class="button is-danger">销毁该社团</a>
                <div>
            @endif
        </div>
    </div>

    @endsection