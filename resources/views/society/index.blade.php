@extends('society.template')

@section('content')
    <section class="hero is-info is-fullheight">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    建平中学学生平台
                </h1>
                <h2 class="subtitle">
                    Jianping Students' Platform
                </h2>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="columns">
            <div class="column">
                <div class="content" style="text-align:right;margin-top: 15%">
                    <p class="title is-1">
                        Made by JEEK
                    </p>
                    <p class="subtitle">
                        Made by Harvey Qiu & Cheney Ni & Artanic Qiu
                    </p>
                </div>

            </div>
            <div class="column">
                <div class="content">
                    <img src="{{ URL::asset('image/png/JEEK_ICON.png') }}" style="height: 400px;width: 400px;">
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="content is-pulled-right">
                    <svg xmlns="http://www.w3.org/2000/svg" height="200" viewBox="0 0 84.1 57.6">
                        <path fill="#FB503B"
                              d="M83.8 26.9c-.6-.6-8.3-10.3-9.6-11.9-1.4-1.6-2-1.3-2.9-1.2s-10.6 1.8-11.7 1.9c-1.1.2-1.8.6-1.1 1.6.6.9 7 9.9 8.4 12l-25.5 6.1L21.2 1.5c-.8-1.2-1-1.6-2.8-1.5C16.6.1 2.5 1.3 1.5 1.3c-1 .1-2.1.5-1.1 2.9S17.4 41 17.8 42c.4 1 1.6 2.6 4.3 2 2.8-.7 12.4-3.2 17.7-4.6 2.8 5 8.4 15.2 9.5 16.7 1.4 2 2.4 1.6 4.5 1 1.7-.5 26.2-9.3 27.3-9.8 1.1-.5 1.8-.8 1-1.9-.6-.8-7-9.5-10.4-14 2.3-.6 10.6-2.8 11.5-3.1 1-.3 1.2-.8.6-1.4zm-46.3 9.5c-.3.1-14.6 3.5-15.3 3.7-.8.2-.8.1-.8-.2-.2-.3-17-35.1-17.3-35.5-.2-.4-.2-.8 0-.8S17.6 2.4 18 2.4c.5 0 .4.1.6.4 0 0 18.7 32.3 19 32.8.4.5.2.7-.1.8zm40.2 7.5c.2.4.5.6-.3.8-.7.3-24.1 8.2-24.6 8.4-.5.2-.8.3-1.4-.6s-8.2-14-8.2-14L68.1 32c.6-.2.8-.3 1.2.3.4.7 8.2 11.3 8.4 11.6zm1.6-17.6c-.6.1-9.7 2.4-9.7 2.4l-7.5-10.2c-.2-.3-.4-.6.1-.7.5-.1 9-1.6 9.4-1.7.4-.1.7-.2 1.2.5.5.6 6.9 8.8 7.2 9.1.3.3-.1.5-.7.6z"></path>
                    </svg>
                </div>
            </div>
            <div class="column">
                <div class="content">
                    <p class="title is-1">
                        Made with Laravel
                    </p>
                    <p class="subtitle">
                        Thanks for Laravel
                    </p>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="content is-pulled-right">
                    <img src="https://bulma.io/images/bulma-logo.png"
                         alt="Bulma: a modern CSS framework based on Flexbox" width="400" height="100">
                </div>
            </div>
            <div class="column">
                <div class="content">
                    <p class="title is-1">
                        Beautified by Bulma
                    </p>
                    <p class="subtitle">
                        My favorite CSS Frame -- Bulma
                    </p>
                </div>

            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    <strong>JPSP</strong>
                    by Harvey Qiu & Cheney Ni & Artanic Qiu
                </p>
                <p>
                    The source code is licensed
                    <a href="http://opensource.org/licenses/mit-license.php">MIT</a>
                </p>

            </div>

        </div>
    </footer>
@endsection