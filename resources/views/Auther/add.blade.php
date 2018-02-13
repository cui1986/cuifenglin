<table>
  <form action="" method="post">
    {{ csrf_field()}}
          <tr><th>名前:</th><td>
            <input type="text" name="namei">
          </td></tr>
          <tr><th>年齢:</th><td>
            <input type="text" name="age" >
          </td></tr>
          <tr><th>性別:</th><td>
          <input type="text" name="gender">
          </td></tr>
          <tr><th></th><td><input type="submit" value="提交"></td></tr>
  </form>
</table>
