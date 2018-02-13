
<table border="1" cellspacing="0">
    <tr>
      <th>Id</th>
      <th>Book_name</th>
      <th>Book_introduction</th>
      <th>Book_code</th>
      <th>view</th>

    </tr>

    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->book_name}}</td>
      <td>{{$item->book_introduction}}</td>
      <td>{{$item->book_code}}</td>
      <td><a href="{{url('book')}}">返回</td>

    </tr>
</table>
