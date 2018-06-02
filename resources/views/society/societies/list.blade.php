@extends('society.template')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-mobile">
                <div class="column">
                    <a class="button is-primary is-pulled-right" href="{{URL::to('/society/societies/establish')}}">创建社团</a>
                </div>
            </div>
            <div class="columns is-multiline is-mobile">
                @foreach ($societies as $society)
                    <div class="column is-one-quarter">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-1by1">
                                    <img src="../../assets/dp.jpg">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <p class="title is-4 has-text-centered">
                                        {{ $society->name }}
                                    </p>

                                </div>
                            </div>
                            <footer class="card-footer">
                                <a class="card-footer-item"
                                   href="{{URL::action('SocietyController@detail',['id'=>$society->society_id])}}">
                                    查看该社团
                                </a>
                            </footer>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $societies->links() }}
        </div>
    </section>

@endsection