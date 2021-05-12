@extends("layouts.master")	 
@section("queryResults")
<h1>List of users</h1>
<table class="formTable">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Is Admin</th>
        <th>Operation</th>
    </tr>
    @foreach($messages as $m)
    <tr>
        <td>{{$m['id']}}</td>
        <td>{{$m['name']}}</td>
        <td>{{$m['email']}}</td>
        <td>{{$m['is_admin']}}</td>
        <td>
            <a href={{"adm_userDelete/".$m['id']}}>Delete User</a>
            <a href={{"adm_userUpdate/".$m['id']}}>Edit User</a>
        </td>
        
    </tr>
    @endforeach
</table>

@stop