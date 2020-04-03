<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Saranaku App</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Saranaku - Your management friend</title>

    <link rel="stylesheet" href="{{ asset('css/semantic-ui/semantic.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fawesome/all.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet" />

    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('js/semantic.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('js/fawesome/all.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/custom-scripts/template/sidebar-setting.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/custom-scripts/template/spinner-settings.js')}}""></script>
    <script type="text/javascript" src="{{ asset('js/custom-scripts/template/master.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom-scripts/template/ajax-config.js') }}"></script>
<body style="background-color: #202020;">
    <div class="ui top vertical inverted sidebar labeled icon menu">
        <a class="item" onclick="getPage(HOME)">
            <i class="home icon"></i>
            Home
        </a>
        <a class="item" onclick="getPage(USER)">
            <i class="user icon"></i>
            Manage User
        </a>
        <a class="item" onclick="getPage(CASHIER)">
            <i class="chart line icon"></i>
            Transaction
        </a>
        <a class="item">
            <i class="clipboard list icon"></i>
            Manage Stock
        </a>
        <a class="item">
            <i class="money bill alternate outline icon"></i>
            Finance
        </a>
        <a class="item">
            <i class="cog icon"></i>
            Settings
        </a>
        <a class="item">
            <i class="question circle icon"></i>
            Need Help?
        </a>
    </div>

    {{-- <div id="spinner-loading" class="ui segment d-none">
        <p></p>
        <div class="ui active dimmer">
            <div class="ui loader"></div>
        </div>
    </div> --}}

    <div class="pusher">
        <div class="ui inverted menu">
            <button class="item ui primary button" onclick="exe()">
                <i class="th icon"></i>
            </button>
            <div class="header item">
                Saranaku
            </div>
            <div class="right menu">
                <a class="ui item" href="/auth/logout">
                    Logout
                </a>
            </div>
        </div>

        <div class="ui container">
            <div id="spinner-loading" class="ui disabled dimmer">
                <div class="ui loader"></div>
            </div>
            <span id="page-child">

            </span>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/custom-scripts/url-list.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom-scripts/template/variables.js')}}"></script>

    <span id="modal-place">

    </span>

    @include('exceptions/no-connection-modal')

    <script type="text/javascript" src="{{ asset('js/custom-scripts/template/exception.js')}}"></script>

    <script type="text/javascript">
        //Initialization
        var currentPage = {!! json_encode($currentPage) !!};

        getPageAjax(currentPage);
    </script>
</body>
</html>
