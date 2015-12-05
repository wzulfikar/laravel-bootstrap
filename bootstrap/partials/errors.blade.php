<div class="alert alert-dismissible alert-danger buffer-top">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>Oops!</h4>
  <ul>
  @foreach($errors as $error)
  <li>{{ $error }}</li>
  @endforeach
  </ul>
</div>