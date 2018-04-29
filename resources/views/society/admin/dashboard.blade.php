@extends('society.admin.template')

@section('content')

    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <article class="tile is-child box">
                <p class="title">Hello World</p>
                <p class="subtitle">What is up?</p>
            </article>
        </div>
        <div class="tile is-parent">
            <article class="tile is-child box">
                <p class="title">未审核社团活动记录</p>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque
                        tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                </div>
            </article>
        </div>
    </div>

    <div class="tile is-ancestor">
        <div class="tile is-vertical is-8">
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <p class="title">Middle box</p>
                    <p class="subtitle">With an image</p>
                    <figure class="image is-4by3">
                        <img src="https://bulma.io/images/placeholders/640x480.png">
                    </figure>
                </article>
            </div>
        </div>
        <div class="tile is-parent">
            <article class="tile is-child box">
                <div class="content">
                    <p class="title">公共教室</p>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar,
                            at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus
                            ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio
                            felis ut quam.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>

@endsection