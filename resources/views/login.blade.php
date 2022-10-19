@extends('layoute')

@section('content')

<div class="container">
<div class="row">

    <div class="card mt-5">
        <div class="card-header">
          
             login
        </div>
        <div class="card-header">
          
            <form action="{{route('Login')}}" method="POST">
                @csrf
                <div class="mb-3 col-4 ">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" >
                </div>
                <div class="mb-3">
                  <label for="passwer" class="form-label">Password</label>
                  <input type="password" class="form-control" id="passwerd" name="passwerd">
                </div>
             
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
       </div>
    </div>
</div>
</div>

@endsection
