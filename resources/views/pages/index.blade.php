@extends('layouts.app')

@section('content')
    
<div class="jumbotron text-center">
    <h1 class="display-3"><?php echo $title?></h1>
    
    <hr class="my-2">
    <p>This is the laravel application by "Phumlani Mhlungu".</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
    </p>
</div>

    
@endsection    
