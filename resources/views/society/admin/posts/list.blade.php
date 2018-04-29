@extends('society.admin.template')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>
                社团名称
            </th>
            <th>
                社团ID
            </th>
            <th>
                联系人
            </th>
            <th>
                日期 时间
            </th>
            <th>
                评分
            </th>
            <th>
                详情
            </th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>
                社团名称
            </th>
            <th>
                社团ID
            </th>
            <th>
                联系人
            </th>
            <th>
                日期 时间
            </th>
            <th>
                评分
            </th>
            <th>
                详情
            </th>
        </tr>
        </tfoot>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th>社团名称</th>
                <th>{{ $post->id }}</th>
                <th>{{ $post->linkman_name }}</th>
                <th>{{ $post->date }} {{ $post->time }}</th>
                <th>{{ $post->stars }}</th>
                <th><a href="{{URL::action('PostController@detailForAdmin',['id'=>$post->id])}}">详情</a></th>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$posts->links()}}
@endsection