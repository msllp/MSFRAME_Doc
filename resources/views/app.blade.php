<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ isset($title) ? $title . ' - ' : null }}MS Frame - The PHP Framework For Cloud application</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Taylor Otwell">
    <meta name="description" content="MS Frame - The PHP Framework For Cloud application">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (isset($canonical))
        <link rel="canonical" href="{{ url($canonical) }}" />
    @endif
    <link href='https://fonts.googleapis.com/css?family=Miriam+Libre:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ mix('/assets/css/laravel.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
    <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/7737514/7707592/css/fonts.css" />
    <link rel="apple-touch-icon" href="/favicon.png">
</head><body class="@yield('body-class', 'docs') language-php" style="padding-top: 0px;">
<div class="laracon-banner">
    <!-- <img src="/assets/svg/laracon-logo.svg" alt=""> -->

    Get a best solution to draw digital path of your business !
    <a href="https://www.millionsllp.com">Get a proposal for you!</a>

    <!--         Laracon US 2019 tickets are now available!
            <a href="https://www.eventbrite.com/e/laracon-us-2019-tickets-51733090065">Get your tickets today!</a> -->
</div>
<span class="overlay"></span>

<nav class="main">
    <a href="/" class="brand nav-block">

        <img src="{{asset('assets/img/logo_final.png')}}" style="height: 72px;margin-right: 3px;">
        <span style="padding-top: 25px;">Frame</span>
    </a>

   

    <ul class="main-nav">
        @include('partials.main-nav')
    </ul>

    @if (Request::is('docs*') && isset($currentVersion))
        @include('partials.switcher')
    @endif

    <div class="responsive-sidebar-nav">
        <a href="#" class="toggle-slide menu-link btn">&#9776;</a>
    </div>
</nav>

@yield('content')

<footer class="main">
    <ul>
        @include('partials.main-nav')
    </ul>
    <p>MS Frame is a Trademark ™ by Million Solutions LLP.</p>
    <p class="less-significant">
        <a href="http://www.millionsllp.com">
            Copyright &copy; by Million Solutions LLP <br> Designed by<br>
            <img src="{{asset('assets/img/logo_final.png')}}" style="height: 72px;margin-right: 3px;"><br>
            Million Solutions LLP
        </a>
    </p>
</footer>

<script>
    var algolia_app_id      = '{{ Config::get('algolia.connections.main.id', false) }}';
    var algolia_search_key  = '{{ Config::get('algolia.connections.main.search_key', false) }}';
    var version             = '{{ isset($currentVersion) ? $currentVersion : DEFAULT_VERSION }}';
</script>

@include('partials.algolia_template')

<script src="{{ mix('/assets/js/laravel.js') }}"></script>
<script src="/assets/js/viewport-units-buggyfill.js"></script>
<script>window.viewportUnitsBuggyfill.init();</script>

</body>
</html>
