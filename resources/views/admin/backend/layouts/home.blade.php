@extends('admin.master')
@section('content')


<form>
  <div class="mb-3">
    <label>Catagory Tilte</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label">Prices</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection					