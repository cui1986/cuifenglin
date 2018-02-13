<table border="1" cellspacing="0">
  <tr><h4>Message详细一覧</h4>
    <th>id</th>
    <th>作者id</th>
    <th>标题</th>
    <th>内容</th>
  </tr>
  @foreach ($items as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->person_id}}</td>
      <td>{{$item->title}}</td>
      <td>{{$item->content}}</td>

    </tr>
  @endforeach
</table>
<td><a href="{{url('message')}}">返回</td>
