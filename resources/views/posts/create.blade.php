@extends('themes.auth.main')

@section('content')

<form class="needs-validation" action="/posts" method="POST" novalidate="">
     @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="" value="" required>
            <div class="invalid-feedback">
                Valid first name is required.
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="body">Body</label>
            <input type="text" class="form-control" id="body" name="body" placeholder="" value="" required>
            <div class="invalid-feedback">
                Valid last name is required.
            </div>
        </div>
    </div>

    <div class="mb-3">
       
        <div class="input-group">
            
            <input type="submit" class="form-control" value="submit" placeholder="Username" >
            <div class="invalid-feedback" style="width: 100%;">
                Your username is required.
            </div>
        </div>
    </div>
     @if(count($errors))
     <div class="form-group">
         <div class="alert alert-danger" >
             <ul >
                 @foreach($errors->all() as $error)
                 <li >{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     </div>
     @endif
@endsection


@section('footer')

@endsection