@extends('admin.master')
@section('content')

<div class="card">
									
										<div class="card-header">
											<div class="card-title"><h2>Contact Us<h2></div>
										</div>
										<div class="card-body">
                                        <div class="form-group">
												<label for="smallInput">Page title title</label>
												<input type="text" class="form-control form-control-sm" id="Price" placeholder="Price">
											</div>
                                        <div class="form-group">
											<label for="email">Email Address</label>
											<input type="email" class="form-control" id="email" placeholder="Enter Email">
											<!-- <small id="emailHelp" class="form-text text-muted">vv</small> -->
										</div>
                                        
                                            <div class="form-group">
												<label for="largeInput">Mobile Number</label>
												<input type="text" class="form-control form-control" id="Description" placeholder="Description">
											</div>
                                            <div class="form-group">
												<label for="largeInput">Page Description</label>
												<input type="text" class="form-control form-control" id="Description" placeholder="Description">
											</div>
                                            
											
										 <div class="card-action">
											
       							 			 <button type="submit" class="btn btn-success">update </button>
											
										</div>
									</div>
									
								</div>
                                @endsection