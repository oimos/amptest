<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="canonical" href={{$canonical_url}}>
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <title>title</title>
  <link rel="stylesheet" href="{{asset('/css/app.css')}}" />
</head>
<body>
  <div class="container">
    <p>
      <p class="image_wrap">
        <img src="{{asset('/img/amp-logo.jpg')}}" width="100%" >
      </p>
      <div id="app"></div>

    {{-- <p class="message">
      このページは　<span class="message_em">{{$message}}</span>　です。
    </p> --}}
    </section>
  </div>
  <script src="{{asset('/js/app.js')}}"></script>
</body>
</html>