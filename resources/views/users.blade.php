@extends('layout.app')

@section('title', 'Users')

@section('body')
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                USERS
            </h1>
            </div>
            
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#add">
                              <i class="fas fa-plus-circle"></i>
                                Add
                          </a>
                          @include('userModal')
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @php
                                $page = "users";
                            @endphp
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>PHONE</th>
                                    <th>ROLE</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    @php
                                        $id = $user->id;
                                    @endphp
                                    <tr>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            {{ $user->phone }}
                                        </td>
                                        <td>
                                            {{ $user->role->name }}
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Button group">
                                               <a  class="btn btn-warning" href="#" role="button" data-toggle="modal" data-target="#edit{{ $user->id }}">
                                                    <i class="fas fa-edit"></i>
                                                     Edit
                                                </a>
                                                
                                                <a class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target="#delete{{ $user->id }}">
                                                    <i class="fas fa-trash"></i>
                                                     Delete
                                                </a> 
                                            </div>
                                        </td>
                                    </tr>
                                    @include('userEditModal')
                                    @include('deleteModal')
                                @endforeach

                            </tbody>
                           
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div> 
                </div>
            </div>
        </div>
    </div>
    
      <!-- /.card -->
@endsection