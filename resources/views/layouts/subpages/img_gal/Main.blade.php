@extends("layouts.index")	 
@section("content")
<h1>Events & Gallery</h1>
<div class="navbar">
    <a class="link {{ Request::is('View') ? 'active' : '' }}" href="img_View">View Pictures</a>
    @auth
        <a class="link {{ Request::is('Upload') ? 'active' : '' }}" href="img_Upload">Upload Picture</a>
    @endauth
</div>
<div id="queryResults">
    @yield("queryResults")
</div>

@stop