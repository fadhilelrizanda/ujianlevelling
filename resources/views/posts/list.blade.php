@extends('template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Tutorial CRUD Laravel 8 untuk Pemula - Ilmucoding.com</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('posts.create') }}"> Create Post</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Ketua</th>
        <th>Email</th>
        <th>Jenis PKM</th>
        <th>Anggota 1</th>
        <th>Anggota 2</th>
        <th>Link</th>
        <th>Action</th>
    </tr>
    <?php
    $i = 1;
    ?>
    @foreach ($posts as $post)
    <tr>
        <td class="text-center">{{ ++$i }}</td>
        <td>{{ $post->nama }}</td>
        <td>{{ $post->email }}</td>
        <td>{{ $post->jenis}}</td>
        <td>{{ $post->anggota1 }}</td>
        <td>{{ $post->anggota2 }}</td>
        <td>{{ $post->link }}</td>



        <td class="text-center">
            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">



                <a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$post->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $posts->links() !!}

@endsection