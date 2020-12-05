@extends('template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>List Pendaftar PKM</h2>
        </div>

    </div>
</div>



<table class="table table-bordered">
    <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>Nama Ketua</th>
            <th>Email</th>
            <th>Jenis PKM</th>
            <th>Anggota 1</th>
            <th>Anggota 2</th>
            <th>Link</th>

        </tr>
    </thead>
    <?php
    $i = 0;
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




        @csrf



        </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $posts->links() !!}

@endsection