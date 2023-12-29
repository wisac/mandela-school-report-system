@extends('layouts/master')

@section('title', 'User')
@section('headerTitle','User')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New User</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            @if($errors->any())
                                @foreach ($errors as $error)
                                <div class="alert alert-danger solid alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                    <strong>Error!</strong>{{session('$error')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                    </button>
                                </div>
                                @endforeach
                            @endif
                            @if(session()->has('error'))
                            <div class="alert alert-danger solid alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                <strong>Error!</strong>{{session('error')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                </button>
                            </div>
                            @endif
                            @if(session()->has('success'))
                            <div class="alert alert-danger solid alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                <strong>Error!</strong>{{session('error')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
                                </button>
                            </div>
                            @endif
                            <form action="{{route('user.post')}}" class="needs-validation" novalidate  method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom01">Username
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" name="name" class="form-control" id="validationCustom01"  placeholder="Enter a username.." required>
                                                <div class="invalid-feedback">
                                                    Please enter a username.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom06">Surname
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" name="surname" class="form-control" id="validationCustom06" placeholder="surname" required>
                                                <div class="invalid-feedback">
                                                    Please enter Surname.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom05">Other name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" name="othername" class="form-control" id="validationCustom05" placeholder="other name" required>
                                                <div class="invalid-feedback">
                                                    Please enter Other name.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom02">Email <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" name="email" class="form-control" id="validationCustom02"  placeholder="Your valid email.." required>
                                                <div class="invalid-feedback">
                                                    Please enter Email.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Password
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" name="password" class="form-control" id="validationCustom03" placeholder="Choose a safe one.." required>
                                                <div class="invalid-feedback">
                                                    Please enter a password.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Confirm Password
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input name="password_confirmation" type="password" class="form-control" id="validationCustom03" placeholder="Choose a safe one.." required>
                                                <div class="invalid-feedback">
                                                    Please enter a password.
                                                </div>
                                            </div>
                                        </div>
                                       {{-- Space here --}}
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom12">Choose Role
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="choose_role" class="form-select wide form-control" id="validationCustom12" required >
                                                    <option selected disabled value="">Please select</option>
                                                    <option value="html">HTML</option>
                                                    <option value="css">CSS</option>
                                                    <option value="javascript">JavaScript</option>
                                                    <option value="angular">Angular</option>
                                                    <option value="angular">React</option>
                                                    <option value="vuejs">Vue.js</option>
                                                    <option value="ruby">Ruby</option>
                                                    <option value="php">PHP</option>
                                                    <option value="asp">ASP.NET</option>
                                                    <option value="python">Python</option>
                                                    <option value="mysql">MySQL</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a one.
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom05">Gender
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="gender" class="form-select wide form-control" id="validationCustom05" required>
                                                    <option selected disabled value="">Please select</option>
                                                    <option value="html">Male</option>
                                                    <option value="css">Female</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a one.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom08">Phone
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input name="phone" type="text" class="form-control" id="validationCustom08" placeholder="212-999-0000" required>
                                                <div class="invalid-feedback">
                                                    Please enter a phone no.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom05">Marital Status
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="marital_status" class="form-select wide form-control" id="validationCustom05" required >
                                                    <option selected disabled value="">Please select</option>
                                                    <option value="html">Single</option>
                                                    <option value="css">Married</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a one.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom05">ID Type
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="id_type" class="form-select wide form-control" id="validationCustom05" required>
                                                    <option selected disabled value="">Please select</option>
                                                    <option value="html">Ghana card</option>
                                                    <option value="css">NHIS</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a one.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom11">Id Number
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" name="id_number" class="form-control" id="validationCustom11" placeholder="4" required>
                                                <div class="invalid-feedback">
                                                    Please select a range.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label"><a
                                                    href="javascript:void(0);">Terms &amp; Conditions</a> <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="validationCustom12" required>
                                                  <label class="form-check-label" for="validationCustom12">
                                                    Agree to terms and conditions
                                                  </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-lg-8 ms-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection