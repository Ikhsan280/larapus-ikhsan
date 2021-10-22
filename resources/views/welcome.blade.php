@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Larapus
                </div>
                <div class="card-body">
                    Selamat Datang di <strong>Larapus </strong>
                </div>
            </div>
        </div>
    </div>

<main class="py-4">
    @yield('content')
</main>

    <footer class="fixed-bottom">
        <center>
            copyright &copy; larapus Made With Love
            Developed By <a href="a">Ikhsan</a>
        </center>
    </footer>
@endsection