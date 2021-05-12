@extends("layouts.subpages.img_gal.Main") 
@section("queryResults")
<h1>Edit Picture</h1>
<table class="formTable">
<form method="post" action="{{ route('ImageGallery.update', $data->id) }}" enctype="multipart/form-data">
    @csrf
        <tr>
            <th>Title</th>
            <th>New Picture</th>
            <th>Current Picture</th>
        </tr>
        <tr>
            <td><input type="text" name="title" value="{{ $data->title }}" class="form-control input-lg" /></td>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">
            <td><input type="file" name="image" /></td>
            <td><img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" /></td>
            <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
        </tr>
        <tr><td colspan="3"><input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" /></td></tr>       
    </form>
</table>
@stop