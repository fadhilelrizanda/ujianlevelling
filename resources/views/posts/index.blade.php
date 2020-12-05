@extends('template')

@section('content')
<div class=" card card-body bg-light mb-5">
    <div class="row ">
        <div class="col-md-6">
            <h1>PKM 2021</h1>
            <p>
                Program Kreativitas Mahasiswa (PKM) adalah suatu wadah yang dibentuk
                oleh Direktorat Jenderal Pembelajaran dan Kemahasiswaan Kementerian Riset,
                Teknologi, dan Pendidikan Tinggi Republik Indonesia dalam memfasilitasi potensi
                yang dimiliki mahasiswa Indonesia untuk mengkaji, mengembangkan, dan menerapkan ilmu
                dan teknologi yang
                telah dipelajarinya diperkuliahan kepada masyarakat luas.
            </p>
        </div>

        <div class="col-md-6">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/univ1.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="img/univ2.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="img/univ3.jpg" class="d-block w-100" alt="..." />
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>





<div class=" card card-body bg-light mt-5">

    <div class="row mt-5 ">
        <h1 class="text-center m-auto">Jenis Jenis PKM </h1>
    </div>

    <div class="row mt-5">
        <div class="offset-md-1 col-md-4 card text-white bg-primary ">
            <div class="card-header">PKM</div>
            <div class="card-body">
                <h5 class="card-title">PKM KC</h5>
                <p class="card-text">Program bantuan ilmu pengetahuan, teknologi dan seni dalam upaya peningkatan kinerja, membangun keterampilan usaha, penataan dan perbaikan lingkungan, penguatan kelembagaan masyarakat,</p>
            </div>
        </div>

        <div class="offset-md-1 col-md-4 card text-white bg-secondary ">
            <div class="card-header">PKM</div>
            <div class="card-body">
                <h5 class="card-title">PKM T</h5>
                <p class="card-text">Program bantuan teknologi (mutu bahan baku, prototype model, peralatan atau proses produksi, pengolahan limbah, sistem jaminan mutu dan lain lain) atau manajemen (pemasaran, pembukuan, status usaha dan lain-lain) atau lainnya bagi industry berskala mikro atau kecil</p>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="offset-md-1 col-md-4 card text-white bg-success">
            <div class="card-header">PKM</div>
            <div class="card-body">
                <h5 class="card-title">PKM M</h5>
                <p class="card-text">Program bantuan ilmu pengetahuan, teknologi dan seni dalam upaya peningkatan kinerja, membangun keterampilan usaha, penataan dan perbaikan lingkungan, penguatan kelembagaan masyarakat,</p>
            </div>
        </div>

        <div class="offset-md-1 col-md-4 card text-white bg-danger ">
            <div class="card-header">PKM</div>
            <div class="card-body">
                <h5 class="card-title">PKM P</h5>
                <p class="card-text">Merupakan program penelitian yang bertujuan untuk mengidentifikasi faktor penentu mutu produk, menemukan hubungan sebab-akibat antara 2 atau lebih faktor, menguji percobaan sebuah bentuk atau peralatan</p>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="offset-md-3 col-md-4 card text-white bg-info ">
            <div class="card-header">PKM</div>
            <div class="card-body">
                <h5 class="card-title">PKM K</h5>
                <p class="card-text">Program pengembangan keterampilan mahasiswa dalam berwirausaha dan berorientasi pada profit. </p>
            </div>
        </div>


    </div>



</div>


@endsection