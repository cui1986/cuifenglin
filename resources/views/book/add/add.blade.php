<table>
  <form action="/book/add" method="post">
    {{ csrf_field()}}
        <tr><th>名前:</th><td>
          <input type="text" name="namei" value="{{old('name')}}">
        </td></tr>
        <tr><th>内容:</th><td>
          <input type="text" name="book_introduction" value="{{old('book_introduction')}}">
        </td></tr>
        <tr><th>コード:</th><td>
          <input type="text" name="book_code" value="{{old('book_code')}}">
        </td></tr>
        <tr><th></th><td><input type="submit" value="提交"></td></tr>
    </form>
  </table>
