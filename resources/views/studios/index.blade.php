@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MeruBeat</div>

                <div class="card-body">
                    @foreach($studios as $studio)

                        <ul class="list-group">

                          <li class="list-group-item"><a href="/studios/show" >{{$studio->studio_name}}</a></li>
                       
                        
                        </ul>
                  @endforeach  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
