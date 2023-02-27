@extends('layout.admin')

@section('content')
<div class="container-fluid p-5">
    <h4 class="mb-3">Create Profil Lulusan</h4>
    <form method="POST" action="{{ url('profil-lulusan') }}">
        @csrf
        <div class="mb-3">
            <label for="kode_pl" class="form-label">Kode PL</label>
            <input type="text" name="kode_pl" id="kode_pl" class="form-control" placeholder="Kode PL">
        </div>
        <div class="mb-3">
            <label for="profil_lulusan" class="form-label">Profil Lulusan</label>
            <input type="text" name="profil_lulusan" id="profil_lulusan" class="form-control" placeholder="Profil Lulusan">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
    <h4 class="mt-5 mb-3">Daftar Profil Lulusan</h4>
    @foreach ($pls as $pl)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $pl->kode_pl }}</h5>
            <p class="card-text">{{ $pl->profil_lulusan }}</p>
            <form action="/profil-lulusan/{{ $pl->kode_pl }}" method="POST">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection