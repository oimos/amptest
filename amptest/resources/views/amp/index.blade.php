@extends('layouts.amp')

@section('title', 'AMP Sample Page')

@section('canonical', 'test canonical')

@section('schema')
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "Open-source framework for publishing content",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
        "logo.jpg"
        ]
    }
</script>
@endsection

@section('menubar')
<ul class="h-menu">
    <p class="menutitle">メニュー</p>
    <li>1</li>
    <li>2</li>

    @foreach($items as $item)
    <ul>
        <li>{{$item->name}}</li>
        <li>{{$item->price}}</li>
        <li>{{$item->img}}</li>
    </ul>
    @endforeach

</ul>
@endsection

@section('content')
<amp-list
  width="auto"
  height="400"
  layout="fixed-height"
  src="https://amptest.devel/amp_data"
  class="m1"
  items="data">
  <template
    type="amp-mustache"
    id="amp-template-id">
    <div>
        <p>@{{name}}</p>
        <p>@{{price}}</p>
        <amp-img src="@{{img}}" alt="" width="16" height="16"></amp-img>
    </div>
  </template>
</amp-list>
@endsection

<amp-state id="favorite"
  credentials="include"
  src="/favorite">
</amp-state>

@section('footer')
copyright @2018
@endsection
