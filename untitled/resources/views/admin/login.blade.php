
<b>ログイン</b>

<div class="login">
    <form action="/login" method="post"> 
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div>password：

            <input type="password" name="password" value="">
        </div>
        <input type="submit" value="ログイン">
        
        
    </form>

</div>
