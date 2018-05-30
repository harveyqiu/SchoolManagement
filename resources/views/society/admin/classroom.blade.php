@extends('society.admin.template')

@section('content')
    <div id="app">
        <div class="columns">
            <div class="column" v-for="classroom in classrooms" style="border: 1px black solid;">
                <div v-if="classroom.state === 0">
                    <p>空</p>
                </div>
                <div v-else-if="classroom['state'] === 1">
                    <p>已由 @{{ classroom['club'] }}使用</p>
                    <p>@{{ classroom['start_datetime'] }} - @{{ classroom['end_datetime'] }}</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://vuejs.org/js/vue.min.js"></script>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                classrooms: [
                    {
                        'state': 0
                    },
                    {
                        'state': 1,
                        'club': 'JEEK',
                        'start_datetime': 'today',
                        'end_datetime': 'today'
                    }
                ]
            }
        })
    </script>



@endsection