<table>
  <form action="" method="post">
    {{ csrf_field()}}
        <input type="hidden" name="id" value="{{$form->id}}">
        @if($errors -> has('book_name'))
        <tr><th>ERROR</th><td>{{$errors->first('book_name')}}</td></tr>
        @endif
          <tr><th>名前:</th><td>
          <input type="text" name="book_name" value="{{$form->book_name}}">
          </td></tr>
        @if ($errors->has('book_introduction'))
          <tr><th>ERROR</th><td>{{$errors->first('book_introduction')}}</td></tr>
        @endif
          <tr><th>内容:</th><td>
          <input type="text" name="book_introduction" value="{{$form->book_introduction}}">
          </td></tr>
        @if ($errors->has('book_code'))
          <tr><th>ERROR</th><td>{{$errors->first('book_code')}}</td></tr>
        @endif
          <tr><th>コード:</th><td>
          <input type="text" name="book_code" value="{{$form->book_code}}">
          </td></tr>
        <tr><th></th><td><input type="submit" value="更新"></td></tr>
  </form>
</table>
