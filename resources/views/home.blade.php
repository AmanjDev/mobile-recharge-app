@extends('layout')

@section('body')
    <div class="row">
        <header class="offset-2 col-md-8 navbar navbar-expand-xl navbar-dark primary-color">
            <a class="navbar-brand" href="/"> <div class="brand"></div></a>
            <div class="navbar-inner">
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">ماڵەوە</a>
                        </li>
                        <li class="nav-item">
                            <a href="/blog" class="nav-link">بلاگی ماڵپەڕ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">ئێمە کێین</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav left-nav">
                        <li class="nav-item signup">
                            <a href="/register" class="nav-link">ناونووسی</a>
                        </li>
                        <li class="nav-item">
                            <a href="/signin" class="nav-link">چوونەژوورەوە</a>
                        </li>
                    </ul>
                </div>
            </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        </header>
    </div>
    <div class="clearfix top"></div>


    {{-- Create main Content--}}

    <div class="row">
        <section class="offset-2 col-md-8 card flex-center">
            <div class="col-md-3 card">
               <div class="view overlay">
                   <img class="card-img-top" src="{{asset('images/reload.png')}}">
               </div>
            </div>
        </section>
    </div>


@endsection
