@extends('layout.head')
    @section('content')
        <section id="contact" class="container">
            @include('partials.header')
            <div id="data-table">
                <div class="container my-5">
                    <div class="table-container">
                        <table class="table align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                               @if($data['users'])
                                    @foreach($data['users'] as $user)
                                    <tr>
                                        <td>{{$user->first_name}} {{$user->last_name}}</td>
                                        <td>{{$user->company_name}}</td>
                                        <td>{{$user->phone_number}}</td>
                                        <td>{{$user->email_address}}</td>
                                         <td class="d-flex">
                                            <a href="{{route('edit-contact', ['id' => $user->id])}}" class="btn btn-sm btn-custom">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                           <form action="{{route('delete-contact', ['id' => $user->id])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <button class="btn btn-sm btn-danger ms-1">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                           </form>
                                        </td>
                                    </tr>
                                    @endforeach
                               @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    @endsection