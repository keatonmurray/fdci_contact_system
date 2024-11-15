@extends('layout.head')

@section('content')
    <section id="contact" class="container">
        @include('partials.header')
        <div id="edit-contact" class="d-flex justify-content-center vh-100">
            <form action="{{route('update-contact', ['id' => $user->id])}}" method="POST" class="w-50 mt-4">
                @csrf
                @method('PUT')
                <h4 class="mb-4 text-center">Edit contact</h4>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="first_name" class="form-label mt-2">First Name</label>
                        <input type="text" name="first_name" class="form-control line-input mb-2" value="{{old('first_name', $user->first_name)}}">
                        @error('first_name')
                            <p class="text-small text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="last_name" class="form-label mt-2">Last Name</label>
                        <input type="text" name="last_name" class="form-control line-input mb-2" value="{{old('last_name', $user->last_name)}}">
                        @error('last_name')
                            <p class="text-small text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="phone_number" class="form-label mt-2">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control line-input mb-2" value="{{old('phone_number', $user->phone_number)}}">
                        @error('phone_number')
                            <p class="text-small text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="email_address" class="form-label mt-2">Email Address</label>
                        <input type="email" name="email_address" class="form-control line-input mb-2" value="{{old('email_address', $user->email_address)}}">
                        @error('email_address')
                            <p class="text-small text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="company_name" class="form-label mt-2">Company Name</label>
                        <input type="email" name="company_name" class="form-control line-input mb-2" value="{{old('company_name', $user->company_name)}}">
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