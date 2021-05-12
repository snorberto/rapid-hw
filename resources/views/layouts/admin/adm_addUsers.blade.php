@extends("layouts.master")	 
@section("queryResults")
<table class="formTable">
  <form method="POST" action="postAddUser" id="adm_addUserForm">
  @csrf
  <tr>
    <td><label>Name:</label></td><td><input class="FormInput" type="text" name="name" pattern="[A-Z,a-z, ]{8}[A-Z,a-z, ]*" required></td>
    <td><label>E-mail:</label></td><td><input class="FormInput" type="email" name="email" required></td>
    <td><label>Pasword:</label></td><td><input class="FormInput" type="password" name="password" required></td>        
  </tr>
  <tr>
  <td><label>Select Role:</label></td>
  <td><select class="FormInput" name="is_admin" id="usrRoleSel">
    <option value=1>Admin</option>
    <option value=0>User</option>
</select></td>
  </tr>
  <tr>
    <td></td><td><input class="FormInput" type="submit" value="Add User"></td>
  </tr>
  </form>
</table>
@stop