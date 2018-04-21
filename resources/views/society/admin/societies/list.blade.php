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
            </tr>
        </tfoot>
        <tbody>
        @foreach($societies as $society)
            <tr>
                <th>{{$society->id}}</th>
                <th>{{$society->name}}</th>
            </tr>
        @endforeach
        </tbody>

    </table>
@endsection