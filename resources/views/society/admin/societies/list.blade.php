@extends('society.admin.template')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th>
                    社团ID
                </th>
                <th>
                    社团名称
                </th>
                <th>
                    是否招新
                </th>
                <th>
                    星
                </th>
                <th>
                    社长
                </th>
                <th>
                    详情
                </th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>
                    社团ID
                </th>
                <th>
                    社团名称
                </th>
                <th>
                    是否招新
                </th>
                <th>
                    星
                </th>
                <th>
                    社长
                </th>
                <th>
                    详情
                </th>
            </tr>
        </tfoot>
        <tbody>
        @foreach($societies as $society)
            <tr>
                <th>{{$society->id}}</th>
                <th>{{$society->name}}</th>
                <th>
                    @if ($society->recruit == 1)
                        是
                    @else
                        否
                    @endif
                </th>
                <th>
                    {{ $society->stars }}
                </th>
                <th>
                    高
                    @if ($society->proprieter_grade == 1)
                        一
                    @elseif ($society->proprieter_grade == 2)
                        二
                    @elseif ($society->proprieter_grade == 3)
                        三
                    @endif
                    ({{ $society->proprieter_class }})班 {{$society->proprieter_name}}
                </th>
                <th>
                    <a href="{{URL::action('SocietyController@detailForAdmin',['id'=>$society->id])}}">查看详情</a>
                </th>
            </tr>
        @endforeach
        </tbody>

    </table>
@endsection