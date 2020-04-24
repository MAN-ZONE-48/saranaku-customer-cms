<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Saranaku - Your management friend</title>

    @yield('css_before')
    <link rel="stylesheet" href="{{ asset('css/semantic-ui/semantic.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet" />

    <style>
        body{
            overflow: hidden;
            background: #E5E5E5;
            background: #202020;
            font-family: 'Exo 2', sans-serif;
        }

        .font-exo{
            font-family: 'Exo 2', sans-serif;
        }

        div{
            padding: 0;
            margin: 0;
        }

        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
        }
    </style>

    @yield('css_after')

    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/semantic.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom-scripts/utilities/validations.js') }}"></script>
    @yield('js_before')
</head>
<body id="pixabay-backdrop">
    <section id="login-box" class="ui raised very padded text container segment">
        <form method="POST" action="login" class="ui large form">
            <h2 class="ui header">Login</h2>
            <div class="ui grid">
                <div class="sixteen wide column">
                    <div class="field">
                        <label>Username</label>
                            <input type="text" name="username-textbox" placeholder="Username" />
                    </div>
                </div>
                <div class="sixteen wide column">
                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="password-textbox" placeholder="Password" />
                    </div>
                </div>
            </div>

            <div class="ui grid">
                <div class="sixteen wide column">
                    <a href="javascript:void(0);" class="im-sorry-for-deleting-yu-anchor" onclick="$('#forgot-password-modal').modal('show');">Forgot your password?</a>
                </div>
            </div>

            <div class="ui right aligned grid">
                <div class="sixteen wide column">
                    <button type="submit" class="fluid ui teal large button">Login</button>
                </div>
                <div class="sixteen wide column">
                    <a href="/home">

                    <button type="button" class="fluid ui black large button">
                            Back to Dashboard
                    </button>
                </a>

                </div>
            </div>
        </form>
    </section>

    <footer>
        <div class="ui inverted vertical footer segment">
            <div class="ui container">
              Saranaku 2020. All Rights Reserved.
            </div>
          </div>
    </footer>

    @include('auth/functions/forgot-password-modal')
</body>
</html>
