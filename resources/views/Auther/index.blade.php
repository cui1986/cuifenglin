<form action="" method="get">
  {{  csrf_field()  }}
  名前<input type="text" name="name" value = "{{$name}}"><br>
  年齢<input type="text" name="min" value = "{{$min}}">
  <input type="text" name="max" value = "{{$max}}">
  <input type="submit" value="搜索">
</form>
@if (isset($finds))
<table border="5">
  <tr>
    <th>Author</th>
  </tr>
  <tr>
    <th>{{ $finds->getData() }}</th>
  </tr>
</table>
@endif
<table border="1" >
  <tr><th>Auther一覧表</th><th>Message一覧表</th></tr>
  @foreach ($items as $item)
    <tr>
      <td>{{$item->getData()}}</td>
      <td>

        @if($item->messages != null)
          <table width="100%">
            @foreach ($item->messages as $obj)
              <tr><td>{{$obj->getData()}}</td></tr>
            @endforeach
          </table>
        @endif
      </td>
    </tr>
  @endforeach
</table>
<td><a href="message/">一覧表戻る</td>
  @if (Auth::check())
  <p>USRE: {{$user->name. '('. $user->emali .')'}}</p>
  @else
  <p>**(<a herf="{{url('login')}}">ログイン</a>|<a href="{{url('regster')}}">登録</a>)</p>
  @endif
