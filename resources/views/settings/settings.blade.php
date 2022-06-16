@extends('layouts.settingsLayout')
@section('general-wrapper')
<div class="general-wrapper">
    <header>
        <div class="profile-container">
            <nav>
                <a href="{{url('../home_layout')}}"><i class="fa-solid fa-arrow-left"></i></a>
            </nav>
            <img src="{{asset(('pictures/user-picture/Bradd.jpg'))}}" alt="" class="user-profile">

            <div class="basic-info">
                <h1>Marcelo  <span> 18 </span>     <span><i class="fa-solid fa-circle-check check-icon"></i></span></h1>
            </div>
            <div class="profile-buttons">
                <div class="div-buttons config"><i class="fa-solid fa-gear config-icon"></i></div>
                <div class="div-buttons pencil"><i class="fa-solid fa-pencil pencil-icon"></i></div>
                <div class="div-buttons camera"><i class="fa-solid fa-camera camera-icon"></i></div>
            </div>
        </div>
    </header>

    <footer>
        <h1>Upgrade your account!</h1>
    </footer>
</div>


@endsection
