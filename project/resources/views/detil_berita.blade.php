@extends("main")

@section('container')
<div class="container mt-5">
    <div class="row">
        <h1>{{ $title }}</h1>

            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/' . $db->foto) }}" alt="foto" />
                    <div class="card-body">
                        <h5 style="color: rgb(12, 150, 110)" class="card-title"><a href="/berita/{{ $db->slug }}">{{ $db->judul_berita }}</a></h5>
                        <p class="card-text">{{ $db->excerpt }}</p>
                        <div class="text-end">
                            <a href="/berita/{{ $db->slug }}" class="btn btn-primary">Details berita</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
