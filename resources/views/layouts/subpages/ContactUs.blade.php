@extends("layouts.index")		 
@section("content")
<table class="formTable">
  <form method="POST" action="postContactMessage" id="contactForm">
  @csrf
  <tr>
    <td><label>E-mail:</label></td><td><input class="FormInput" type="email" name="email" required></td>
    <td><label>Name:</label></td><td><input class="FormInput" type="text" name="name" pattern="[A-Z,a-z, ]{8}[A-Z,a-z, ]*" required></td>
  </tr>
  <tr>
    <td><label>Message:</label></td><td><textarea class="FormInput" rows="4" cols="50" name="comment" form="contactForm" required>
    Please provide a message to the team</textarea></td>
    <td><label></label></td><td><input class="FormInput" type="submit" value="Send"></td>
  </tr>
  </form>
</table>
@stop