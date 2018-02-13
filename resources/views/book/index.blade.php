<table border="1">
      <tr>
        <th>Id</th>
        <th>Book_name</th>
        <th>Book_introduction</th>
        <th>Book_code</th>
        <th>view</th>
        <th>edit</th>
        <th>削除</th>
      </tr>
    @foreach ($items as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->book_name}}</td>
        <td>{{$item->book_introduction}}</td>
        <td>{{$item->book_code}}</td>
        <td><a href="find/{{$item->id}}">view</td>
        <td><a href="edit/{{$item->id}}">edit</td>
        <td><a href="book/del/{{$item->id}}">delete</td>
      </tr>
    @endforeach
</table>
