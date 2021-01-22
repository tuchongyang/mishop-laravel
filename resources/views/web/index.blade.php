商城首页
@if( $user)
    <h3>欢迎，{{ Auth::user()->username }}</h3>
@else
    未登陆
@endif