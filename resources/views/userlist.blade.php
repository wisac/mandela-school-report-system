@extends('layouts.master')
@section('headerTitle','User List')
@section('content')
<div class="content-body " >
    <!-- row -->
    <div class="container-fluid">
        <!-- Column starts -->
						<div class="col-xl-12">
							<div class="card" id="accordion-three">
								<div class="card-header flex-wrap d-flex justify-content-between px-3">
									<div>
									<h4 class="card-title">Users </h4>
									<p class="m-0 subtitle">Add <code>users</code> class with <code>datatables</code></p>
									</div>
									<ul class="nav nav-tabs dzm-tabs" id="myTab-2" role="tablist">
										<li class="nav-item" role="presentation">
											<a href="{{route('user')}}" class="nav-link active "   type="button" role="tab" >Add New User</a>
										</li>
										
									</ul>
								</div>
							   
									<!-- /tab-content -->	
									<div class="tab-content" id="myTabContent-2">
										<div class="tab-pane fade show active" id="withoutSpace" role="tabpanel" aria-labelledby="home-tab-2">
											 <div class="card-body p-0">
												<div class="table-responsive">
													<table id="example3" class="display table" style="min-width: 845px">
														<thead>
															<tr>
																<th></th>
																<th>Surname Name</th>
																<th>Other Name</th>
																<th>Email</th>
																<th>Gender</th>
																<th>Phone</th>
																<th>Marital Status</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
                                                            @foreach($users as $user)
                                                            <tr>
																<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
																<td>{{$user->surname}}</td>
																<td>{{$user->othername}}</td>
																<td>{{$user->email}}</td>
																<td>{{$user->gender}}</td>
																<td>{{$user->phone}}</a></td>
																<td>{{$user->marital_status}}</a></td>
																<td>
																	<div class="d-flex">
																		<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
																		<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
																	</div>												
																</td>												
															</tr>
                                                            @endforeach
															
															 
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane fade " id="withoutSpace-html" role="tabpanel" aria-labelledby="home-tab-2">
											<div class="card-body pt-0 p-0 code-area">	
	</div>
										</div>
									</div>
									<!-- /tab-content -->		
							   
							</div>
						</div>
                    <!-- Column ends -->
    </div>

</div>
@endsection