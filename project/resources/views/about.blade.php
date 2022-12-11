@extends("main")


@section('container')
<div id="carouselExampleControls" class="carousel slide py-4" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/meme.jpg" class="d-block img-fluid mx-auto w-50" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/face2.jpg" class="d-block img-fluid mx-auto w-50" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/face3.png" class="d-block img-fluid mx-auto w-75" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



@endsection