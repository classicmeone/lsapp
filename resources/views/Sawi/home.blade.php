@extends('layouts.sawi')
@section('title', 'Homepage')
@section("active","hm")
@section('content')
@include('Sawi.slider')
<h1>  Asalam alaykum waramotulahi wabarakatu </h1>
<section class="main-info">
        <div class="container">
            <div class="row-fluid">
                <div class="span9">
                    <h4>Welcome To SAWI</h4>
                    <p class="no-margin">
                            he root directory of a fresh Laravel installation contains a variety of folders:
                            The app directory, as you might expect, contains the core code of your application. We’ll explore
                            this folder in more detail soon.
                            The bootstrap folder contains a few files that bootstrap the framework and configure autoloading,
                            as well as a cache folder that contains a few framework generated files for bootstrap performance
                            optimization.
                            The config directory, as the name implies, contains all of your application’s configuration files.
                            The database folder contains your database migration and seeds. If you wish, you may also use this
                            folder to hold an SQLite database.
                            The public directory contains the front controller and your assets (images, JavaScript, CSS, etc.).
                            The resources directory contains your views, raw assets (LESS, SASS, CoffeeScript), and localization files.
                            The storage directory contains compiled Blade templates, file based sessions, file caches, and other
                            files generated by the framework. This folder is segregated into app, framework, and logs directories.
                            The app directory may be used to store any files utilized by your application. The framework
                            directory is used to store framework generated files and caches. Finally, the logs directory contains
                            your application’s log files.
                    </p>
                </div>
                <div class="span3">
                 <h3 class="btn btn-success btn-large pull-right"> News And Events </h3>
                 <a class="btn btn-success btn-large pull-right" href="#">News And Events</a>
                    <ul class="newsevt">
                        <li class="btn btn-success btn-large pull-right"><a href=""> New Or Event 1 </a></li>
                        <li class="btn btn-success btn-large pull-right"><a href="">News or Event Two</a> </li>
                    </ul> 
                </div>
            </div>
        </div>
    </section>
@endsection