<table border="1" cellspacing="0">
  <tr><h4>Message一覧表</h4>
    <th>id</th>
    <th>作者id</th>
    <th>标题</th>
    <th>内容</th>
    <th>编辑</th>

  </tr>
  @foreach ($items as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->auther_id}}</td>
      <td>{{$item->title}}</td>
      <td>{{$item->content}}</td>
      <td><a href="add/{{$item->id}}">编辑</td>

    </tr>
  @endforeach

</table>
<td><a href="auther/">作者详细</td>
