<ul class="nav navbar-nav">
    <li><a href="/">Blog Home</a></li>
    @if (Auth::check())
        <li @if(Request::is('admin/post*'))  class="active" @endif ><a href="post">Posts</a></li>
        <li @if(Request::is('admin/tag*'))   class="active" @endif ><a href="tag">Tags</a></li>
        <li @if(Request::is('admin/upload')) class="active" @endif><a href="upload">Uploads</a></li>
    @endif
</ul>

<ul class="nav navbar navbar-right">
    @if(Auth::guest())
        <li><a href="{{ url('auth/login') }}">Login</a></li>
    @else
        <li><a href="{{ url('auth/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
    @endif
</ul>