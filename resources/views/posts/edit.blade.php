@extends('template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Edit Post</h2>
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

<form action="{{ route('posts.update',$post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nama">Nama Ketua</label>
        <input type="text" value="{{ $post->nama }}" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">

    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" value="{{ $post->email }}" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Jenis PKM</label>
        <select class="form-control" value="{{ $post->jenis }}" name="jenis" id="exampleFormControlSelect1">
            <option value="PKM KC">PKM KC</option>
            <option value="PKM T">PKM T</option>
            <option value="PKM M">PKM M</option>
            <option value="PKM P">PKM P</option>
            <option value="PKM AI">PKM AI</option>
        </select>
    </div>

    <div class="form-group">
        <label>Anggota 1</label>
        <input type="text" name="anggota1" value="{{ $post->anggota1 }}" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Anggota 1">

    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Anggota 2</label>
        <input type="text" name="anggota2" class="form-control" value="{{ $post->anggota2 }}" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Anggota 2">

    </div>



    <div class="form-group">
        <label for="exampleInputEmail1">Link Proposal</label>
        <input type="text" name="link" class="form-control" name="email" value="{{ $post->link }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Link proposal">

    </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">File</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="filepkm">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection