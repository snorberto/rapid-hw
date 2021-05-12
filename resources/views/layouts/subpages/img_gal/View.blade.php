@extends("layouts.subpages.img_gal.Main")	 
@section("queryResults")
<h1>Uploaded Pictures</h1>
<table class="formTable">
    <tr>
        <th>Title</th>
        <th>Image</th>
        <th>Operation</th>
    </tr>
    @foreach($pictures as $p)
    <tr>
        <td>{{$p['title']}}</td>
        <td><img src="{{ URL::to('/') }}/images/{{ $p->image }}" class="img-thumbnail" /></td>
        <td>
            <a href={{"img_pictureDelete/".$p['id']}}>Delete picture</a>
            <a href="{{ route('ImageGallery.edit', $p->id) }}" class="btn btn-info">Edit Picture</a> 
        </td>        
    </tr>
    @endforeach
</table>

@stop