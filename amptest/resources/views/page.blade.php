<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="amphtml" href="{{$canonical_url}}">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <title>title</title>
  <link rel="stylesheet" href="{{asset('/css/app.css')}}" />
</head>
<body>
  <div class="container">
    <p>
      <h1 class="page_title">AMP Sample Page</h1>
      <p class="image_wrap">
        <img src="{{asset('/images/amp-logo.jpg')}}" width="100%" >
      </p>
      <p>
        ＡＭＰ実装サンプルページです。
      </p>
    <p class="message">
      このページは　<span class="message_em">{{$message}}</span>　です。
    </p>
    </section>
  </div>
</body>
</html>