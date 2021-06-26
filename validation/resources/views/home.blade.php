
@extends("main")

@section("title_content")

user-details

@endsection

@section("display_content")

<div class="container bg-light margin border border-1 mt-4">
<form class="p-4" method="POST" action="form">

<h2>mmmmmmmmmmmmmmmmmmm</h2>
@csrf 
Name : <input type="text" class="form-control inp_margin" palaceholer="enter name here" name="name">
@error('name')<small class="text-danger">{{$message}}</small></br>@enderror


Date of Birth : <input type="date" class="form-control inp_margin" palaceholer="enter name here" name="date_of_birth">
@error('date_of_birth')<small class="text-danger">{{$message}}</small></br>@enderror


Email : <input type="email" class="form-control inp_margin" palaceholer="enter name here" name="email">
@error('email') <small class="text-danger">{{$message}}</small> </br>@enderror

password: <input type="number" class="form-control inp_margin" palaceholer="enter name here" name="password">
@error('password') <small class="text-danger">{{$message}}</small></br>  @enderror



<button type="submit" class="btn-success sbm_margin mt-3" id="btn-1">send</button>
</form>

@if(Session::has("message"))
<div class="alert alert-success alert-dismissible fade show">
    <strong>{{(Session::get("message"))}}</strong> 
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif   

</div>

@endsection