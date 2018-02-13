
<table>
  <form action="hello" method="post">
      {{ csrf_field()}}
      @if ($errors->has('name'))
      <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
      @endif
        <tr><th>名前:</th><td>
          <input type="text" name="namei" value="{{old('name')}}">
        </td></tr>
      @if ($errors->has('mail'))
        <tr><th>ERROR</th><td>{{$errors->first('mail')}}</td></tr>
      @endif
        <tr><th>mail:</th><td>
          <input type="text" name="mail" value="{{old('mail')}}">
        </td></tr>
      @if ($errors->has('age'))
        <tr><th>ERROR</th><td>{{$errors->first('age')}}</td></tr>
      @endif
        <tr><th>年齢:</th><td>
          <input type="text" name="age" value="{{old('age')}}">
        </td></tr>
      @if ($errors->has('gender'))
        <tr><th>ERROR</th><td>{{$errors->first('gender')}}</td></tr>
      @endif
        <tr><th>性別:</th><td>
          男
        <input type="radio" value="gender" name="man"
            @if(old('gender') == 'man')
              checked
            @endif
            >
          女
        <input type="radio" value="gender" name="women"
            @if(old('gender') == 'women')
              checked
            @endif
            >
          </td></tr>
        @if ($errors->has('subject'))
          <tr><th>ERROR</th><td>{{$errors->first('subject')}}</td></tr>
        @endif
          <tr><th>学部:</th><td><select name="subject" value="subject">
            <option value="">選択</option>
            <option value="文学部"
              @if(old('subject') == '文学部')
                checked
              @endif
              >文学部</option>
              <option value="理学部"
                @if(old('subject') == '理学部')
                  checked
                @endif
                >理学部</option>
            </select>

        <tr><th></th><td><input type="submit" value="提交"></td></tr>
  </table>
