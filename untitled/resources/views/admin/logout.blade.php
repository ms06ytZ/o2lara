
<b>ログアウト</b>

<div class="logout">
    <form action="/login" method="post"> 
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div >name：
            <input type="text" name="name" value="{{$user->name}}">
        </div>
        <div >email：
            <input type="text" name="email" value="{{$user->email}}">
        </div>
        <div>password：
            <input type="password" name="password" value="{{$user->password}}">
        </div>
        <input type="submit" value="ログアウト"></a>
    </form>
</div>
