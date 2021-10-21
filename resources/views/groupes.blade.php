@extends('layouts.app')
@section('content')


        <div class="row">
            <div  class="card-body" class="col-md-2">
                       
             </div>
            <div  class="card-body" class="col-md-2">
                        <p><button class="btn btn-success">Add Contact</button></p>
             </div>
            
        </div>
<div class="container">
    
          <div class="row" >
            <div class="col-md-2">
                <div class="list-group">
                
                <a href="{{ url('home') }}" class="btn btn-info list group-item list group-item-action">
                    Contacts &nbsp; <span class="badge badge-warning">10</span>
                </a>
                <br>
                <a href="{{ url('groupes') }}" class="btn btn-info list group-item list group-item-action">
                    Groupes &nbsp; <span class="badge badge-warning">3</span>
                </a>
                
                </div>
            </div>

            <div class="col-md-10">

                <div class="card card-default">
                    <card class="p-3 mb-0 bg-info text-white">Category List</card>
                    
                </div>
                <div>
                    <table class="table" border=1>

                     <thead>
                     
                     <th scope="col"> Category Name</th>
                     </thead>
                     @foreach ($category as $item)
                     <tr>
                         <td>{{ $item->id }}</td>
                         <td>{{ $item->name }}</td>
                        
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