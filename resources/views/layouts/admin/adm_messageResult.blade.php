@extends("layouts.master")	 
@section("queryResults")
<h1>Latest messages</h1>
<table class="formTable">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Created date</th>
    </tr>
    @foreach($messages as $m)
    <tr>
        <td>{{$m['name']}}</td>
        <td>{{$m['email']}}</td>
        <td>{{$m['message']}}</td>
        <td>{{$m['created_at']}}</td>
    </tr>
    @endforeach
</table>


@stop