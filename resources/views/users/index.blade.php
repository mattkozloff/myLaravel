@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>USERS</h1></div>

                <div class="card-body">
                  
                  <h3> Users </h3>
                    <table class="table">
                    <thead class="thead-light">
                        <tr class="table-active">
                            <th><strong> Name </strong></th>
                            <th><strong> Email </strong></th>
                        </tr>
                    </thead>
                        @foreach($users as $user)
                        <tbody>
                        <tr> 
                           <td>{{ $user['name']}}</td>
                           <td>{{ $user['email']}}</td>
                        </tr>
                        </tbody>
                        @endforeach
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection