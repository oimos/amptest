<!doctype html>
<html amp lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="amphtml" href="{{$canonical_url}}">
    {{-- <link rel="canonical" href="@yield('canonical')"> --}}
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    @yield('schema')
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
    <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.1.js"></script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom>
      {{$styles}}
    </style>
  </head>
  <body>
    <p class="message">
      このページは　<span class="message_em">
        {{$message}}
      </span>　です。
    </p>
    <nav class="nav">
        @yield('menubar')
    </nav>

    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
  </body>
</html>