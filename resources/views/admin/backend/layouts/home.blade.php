@extends('admin.master')
@section('content')

<div class="card">
										<div class="card-header">
											<div class="card-title">Form Control Styles</div>
										</div>
										<div class="card-body">
											<div class="form-group">
												<label for="largeInput">Large Input</label>
												<input type="text" class="form-control form-control-lg" id="largeInput" placeholder="Large Input">
											</div>
											<div class="form-group">
												<label for="largeInput">Default Input</label>
												<input type="text" class="form-control form-control" id="defaultInput" placeholder="Default Input">
											</div>
											<div class="form-group">
												<label for="smallInput">Small Input</label>
												<input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
											</div>
											<div class="form-group">
												<label for="largeSelect">Large Select</label>
												<select class="form-control form-control-lg" id="largeSelect">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>
											<div class="form-group">
												<label for="defaultSelect">Default Select</label>
												<select class="form-control form-control" id="defaultSelect">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>
											<div class="form-group">
												<label for="smallSelect">Small Select</label>
												<select class="form-control form-control-sm" id="smallSelect">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>
										</div>
										<div class="card-action">
											<button class="btn btn-success">Submit</button>
											<button class="btn btn-danger">Cancel</button>
										</div>
									</div>

@endsection					