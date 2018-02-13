<table>
  <form action="" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$form->id}}">
    <tr><th>名前:</th><td>{{$form->book_name}}</td></tr>
    <tr><th>内容:</th><td>{{$form->book_introduction}}</td></tr>
    <tr><th>コード:</th><td>{{$form->book_code}}</td></tr>
    <tr><th></th><td><input type="submit" value="削除"></td></tr>
  </form>
</table>
