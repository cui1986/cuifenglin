<table>
  <form action="" method="post">
    {{ csrf_field()}}
    @if($errors -> has('auther_id'))
        <tr><th>ERROR</th><td>{{$errors->first('auther_id')}}</td></tr>
        @endif
          <tr><th>個人ID:</th><td>
            <input type="number" name="auther_id" value="{{old('auther_id')}}">
          </td></tr>
        @if ($errors->has('title'))
          <tr><th>ERROR</th><td>{{$errors->first('title')}}</td></tr>
        @endif
          <tr><th>标题:</th><td>
            <input type="text" name="title" value="{{old('title')}}">
          </td></tr>
        @if ($errors->has('content'))
          <tr><th>ERROR</th><td>{{$errors->first('content')}}</td></tr>
        @endif
        <tr><th>内容:</th><td>
          <input type="text" name="content" value="{{old('content')}}">
        </td></tr>
        <tr><th></th><td><input type="submit" value="更新"></td></tr>
    </form>
  </table>
