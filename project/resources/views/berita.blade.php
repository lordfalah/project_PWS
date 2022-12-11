@extends("main")
@section('container')
<div class="container mt-5">
    <div class="row">
        @foreach ($berita as $detailBerita)
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/{{ $detailBerita->foto }}.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="color: rgb(12, 150, 110)" class="card-title"><a
                            href="/berita/{{ $detailBerita->slug }}">{{ $detailBerita->judul_berita }}</a></h5>
                    <p class="card-text">{{ $detailBerita->excerpt }}</p>
                    <div class="text-end">
                        <a href="/berita/{{ $detailBerita->slug }}" class="btn btn-primary">Details berita</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection