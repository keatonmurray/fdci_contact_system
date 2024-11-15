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
                                            <form action="{{ route('delete-contact', ['id' => $user->id]) }}" method="POST" id="delete-form-{{ $user->id }}" style="display:none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button class="delete-btn btn btn-sm btn-custom ms-1" data-id="{{ $user->id }}">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                               @endif
                            </tbody>
                        </table>
                    </div>
                    <br><br>
                    <div class="d-flex justify-content-end align-items-center h-100">
                        {{ $data['users']->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </section>
    @endsection