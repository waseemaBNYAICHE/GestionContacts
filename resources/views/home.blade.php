@extends('layouts.app')
@section('content')


        <div class="row">
            <div  class="card-body" class="col-md-2">
                       
             </div>
            <div  class="card-body" class="col-md-2">
                        <p><button class="btn p-3 btn-success">Add Contact</button></p>
             </div>
            
        </div>
        <div class="container">
    
          <div class="row" >
            <div class="col-md-2">
                <div class="list-group">
                
                <a href="{{ url('home') }}" class="btn p-3 mb-1 btn-info list group-item list group-item-action">
                    Contacts &nbsp; <span class="badge badge-warning">10</span>
                </a>
                
                <a href="{{ url('groupes') }}" class="btn p-3 mb-0 btn-info list group-item list group-item-action">
                    Groupes &nbsp; <span class="badge badge-warning">3</span>
                </a>
                
                </div>
            </div>

            <div class="col-md-10">

                <div class="card card-default">
                    <card class="p-3 mb-0 bg-info text-white">Contact List</card>
                    
                </div>
                <div>
                    <table class="table" border=1>

                     <thead>
                     <th scope="col">ID Contact</th>
                     <th scope="col">First Name</th>
                     <th scope="col">Last Name</th>
                     <th scope="col">Email</th>
                     <th scope="col">Phone</th>
                     <th scope="col">Location</th>
                     <th scope="col">Photo</th>
                     <th scope="col">CRUD</th>
                     </thead>

                     @foreach ($contact as $item)
                     <tr>
                         <td>{{ $item->id }}</td>
                         <td>{{ $item->firstname }}</td>
                         <td>{{ $item->lastname }}</td>
                         <td>{{ $item->email }}</td>
                         <td>{{ $item->phone}}</td>
                         <td>{{ $item->location }}</td>
                         <td>{{ $item->photo }}</td>

                         <td>
                          <button class="btn btn-info">View</button> 
                          <button class="btn btn-warning">Update</button> 
                          <button class="btn btn-danger">Delete</button>
                         </td>
                         
                    </tr>
                    
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    
</div>
@endsection

