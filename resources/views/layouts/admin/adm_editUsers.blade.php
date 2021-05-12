@extends("layouts.master")	 
@section("queryResults")
    <h1>Edit User</h1>
    <table class="formTable">
        <form method="POST" action="postEditUser" id="adm_editUserForm">        
        @csrf
        <input type="hidden" name="id" value="{{$user_details['id']}}">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
        <tr>
            <td><input type="text" name="name" value="{{$user_details['name']}}"></td>
            <td><input type="text" name="email" value="{{$user_details['email']}}"></td>
            <td><input type="text" name="is_admin" value="{{$user_details['is_admin']}}"></td>
        </tr>
        <tr><td colspan="3"><input class="FormInput" type="submit" value="Update"></td></tr>
        </form>
</table>
@stop