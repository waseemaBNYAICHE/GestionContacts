@extends('contacts.layout')

@section('content')

        <div class="container">
        <div  class="shadow-lg p-3 mb-5 bg-white rounded">   

        <div class="row">
        <div class="col-lg-10">
        
                <h2 class="p-3 mb-2 bg-info text-white">Contact Management</h2>
            
        </div>
        </div>
    
          <div class="row" >
            <div class="col-md-2">
                <div class="list-group">
                
                <a class="btn p-3 mb-1 btn-info list group-item list group-item-action">
                    Contacts &nbsp; <span class="badge badge-warning">10</span>
                </a>
                
                <a href="{{ url('groupes') }}" class="btn p-3 mb-0 btn-info list group-item list group-item-action">
                    Groupes &nbsp; <span class="badge badge-warning">3</span>
                </a>
                
                </div>
            </div> </div>
            
            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


            <div class="row" >
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('contacts.create') }}"> Add new contact</a>
            </div>
            </div>

            <div class="col-md-12">

                <div class="card card-default">
                    <card class="p-3 mb-0 bg-info text-white">Contact List</card>
                    
                </div>
                <div>
                    <table class="table" border="1">

                     <thead>
                     <th scope="col">ID Contact</th>
                     <th scope="col">First Name</th>
                     <th scope="col">Last Name</th>
                     <th scope="col">Email</th>
                     <th scope="col">Phone</th>
                     <th scope="col">Location</th>
                     <th scope="col">Actions</th>
                     </thead>

                     @foreach ($contact as $item)
                     <tr>
                         <td>{{ $item->id }}</td>
                         <td>{{ $item->firstname }}</td>
                         <td>{{ $item->lastname }}</td>
                         <td>{{ $item->email }}</td>
                         <td>{{ $item->phone}}</td>
                         <td>{{ $item->location }}</td>
                        

                         <td>
                         <form  action="{{ route('contacts.destroy',$item->id) }}" method="POST">
   
                    <a class="btn btn-outline-primary" href="{{ route('contacts.show',$item->id) }}">Show</a>
    
                    <a class="btn btn-outline-success" href="{{ route('contacts.edit',$item->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-outline-danger" >Delete</button>
                </form>
                        
                         </td>
 
                    </tr>
                    
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    
</div>



</div>
@endsection



