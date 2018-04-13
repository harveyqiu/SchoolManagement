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
            <th>{{  $post.ClubObject.ClubName }}</th>
            <th>{{ $post.ClubObject.ClubObject.username }}</th>
            <th>{{ $post.LinkmanName }}</th>
            <th>{{ $post.Date }} {{ $post.Time }}</th>
            <th>{{ $post.Stars }}</th>
            <th><a href="">详情</a></th>
        </tr>
        {% endfor %}
        </tbody>
    </table>

    @endsection