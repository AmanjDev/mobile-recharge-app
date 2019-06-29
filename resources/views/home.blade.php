@extends('layout')

@section('body')
    <div class="row">
        <div class="offset-2 col-md-8">
            <div class="navbar navbar-expand-lg">
                    <div class="navbar-inner">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupported">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupported">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active signup">
                                <a href="#" class="nav-link">کردنەوەی هەژمار<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item signin">
                                <a href="#" class="nav-link">چوونەژوورەوە</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top"></div>

    @endsection
