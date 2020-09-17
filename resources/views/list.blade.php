<!-- 投稿フォーム -->
@include("parts.form")

<h2>記事一覧</h2>

@foreach ($item_list as $item)
<div class="entry">
  <h5>{{ $item->title }}</h5>
  <div>
    {{ $item->body }}
  </div>
</div>
@endforeach

@if(count($item_list) < 1)
<p>投稿がありません</p>
@endif