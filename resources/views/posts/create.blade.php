@extends('template')
@section('content')

<div class="card card-body bg-light">
    <div class="row separ mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Masukkan Proposal</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif




    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Ketua</label>
            <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">

        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis PKM</label>
            <select class="form-control" name="jenis" id="exampleFormControlSelect1">
                <option value="PKM KC">PKM KC</option>
                <option value="PKM T">PKM T</option>
                <option value="PKM M">PKM M</option>
                <option value="PKM P">PKM P</option>
                <option value="PKM K">PKM K</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Anggota 1</label>
            <input type="text" name="anggota1" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Anggota 1">

        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Anggota 2</label>
            <input type="text" name="anggota2" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Anggota 2">

        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Link Proposal</label>
            <input type="text" name="link" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Link proposal">

        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">File</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="filepkm">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection