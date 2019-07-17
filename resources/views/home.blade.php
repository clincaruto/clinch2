@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 p-5">
            <img src="/images/cham3.png" style="height: 120px;" class="rounded-circle">
        </div>

        <div class="col-lg-9 pt-5">
            <div> <h1>{{ $user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><b>158</b> posts</div>
                <div class="pr-5"><b>23k</b> followers</div>
                <div class="pr-5"> <b>212</b> following </div>
            </div>
                <br>
            <div class="font-weight-bold"> {{ $user->profile->title }} </div>
            <div> {{ $user->profile->description }}</div>
            <div><a href="#"> {{ $user->profile->url }}</div>

        </div>


        <div class="row pt-4">
            <div class="col-lg-4" >
              <img src="/images/program3.jpg" class="w-100" style="height: 300px;">  
            </div>
            
            <div class="col-lg-4" >
                <img src="/images/collage.png" class="w-100" style="height: 300px;"> 
            </div>

            <div class="col-lg-4">
                <img src="/images/program5.jpg" class="w-100" style="height: 300px;"> 
            </div>


        </div>
        

    </div>
</div>
@endsection
