@extends('layout.head')

@section('content')
    <section id="contact" class="container">
        @include('partials.header')
        <div id="add-contact" class="d-flex justify-content-center vh-100">
            <form action="{{route('save-contact')}}" method="POST" class="w-50 mt-4">
                @csrf
                <h4 class="mb-4 text-center">Create new contact</h4>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="first_name" class="form-label mt-2">First Name</label>
                        <input type="text" name="first_name" class="form-control line-input mb-2">
                        @error('first_name')
                            <p class="text-small text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="last_name" class="form-label mt-2">Last Name</label>
                        <input type="text" name="last_name" class="form-control line-input mb-2">
                        @error('last_name')
                            <p class="text-small text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="phone_number" class="form-label mt-2">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control line-input mb-2">
                        @error('phone_number')
                            <p class="text-small text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="email_address" class="form-label mt-2">Email Address</label>
                        <input type="email" name="email_address" class="form-control line-input mb-2">
                        @error('email_address')
                            <p class="text-small text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="company_name" class="form-label mt-2">Company Name</label>
                        <input type="email" name="company_name" class="form-control line-input mb-2">
                        @error('company_name')
                            <p class="text-small text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="float-end d-flex mt-4">
                    <button class="btn btn-custom" type="submit">
                        <i class="fa-solid fa-check me-2"></i>
                        Save
                    </button>
                    <a href="{{route('contact')}}" class="btn btn-custom ms-2" type="button">
                        <i class="fa-solid fa-x me-2"></i>
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </section>
@endsection