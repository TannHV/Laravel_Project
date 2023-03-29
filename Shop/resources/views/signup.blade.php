@extends('layout.master') @section('body')
<!-- Breadcrumb Start -->
<div class="mt-5 pt-5">

</div>
<!-- Section: Design Block -->
<section class="text-center mt-5 pt-5">

    <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -100px;background: hsla(0, 0%, 100%, 0.8);backdrop-filter: blur(30px)">
        <div class="card-body py-5 px-md-5">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-5">Sign up now</h2>
                    <form method="post" action="/register">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <div>
                                @foreach ($errors->all() as $error)
                                <span class="block">{{ $error }}</span><br>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <div class="control-group">
                            <input type="text" name="username" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" name="pass" class="form-control" placeholder="Your Password" required="required" data-validation-required-message="Please enter a password" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" name="pass_confirmation" class="form-control" placeholder="Confirm Password" required="required" data-validation-required-message="Please enter a password" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-success py-2 px-4 w-100 " type="submit" id="sendMessageButton">
                                <span class="text-light">Registered</span>
                            </button>
                        </div>
                        @csrf
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

