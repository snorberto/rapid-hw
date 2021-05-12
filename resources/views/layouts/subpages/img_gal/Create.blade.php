@extends("layouts.subpages.img_gal.Main")	
@section("queryResults")
@if($errors->any())
<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif
<table class="formTable">        

    <form method="post" action="{{ route('ImageGallery.store') }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @csrf
        <tr>
            <th>Title</th>
            <th>Select Image</th>
        </tr>
        <tr> 
            <td><input type="text" name="title" class="form-control input-lg" /></td>
            <td><input type="file" name="image" /></td>
        </tr>
        <tr>
            <td><input type="submit" name="add" class="btn btn-primary input-lg" value="Add" /></td>
        </tr>
    </form>
</table>
@stop