@extends('main')


@section('container')

<section>
    <div class="container py-5 rounded-md">
        <div class="p-4 position-relative" style="background-color: #B7C4CF">
            <div class="row my-3 ">
                <div class="col">

                    <article>
                        <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h1>
                        <p>laboriosam, recusandae quae exercitationem et explicabo mollitia minus
                            voluptates ipsam, hic incidunt id sequi
                        </p>
                        <a href="#card" class="btn btn-dark stretched-link">Go somewhere</a>
                        <article>
                </div>
                <div class="col d-none d-lg-block">
                    <img src="img/room1.jpg" class="rounded float-start position-absolute 
                            top-0 end-0" width="40%" height="120%" alt="...">
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container" style="margin: 8rem auto 4rem auto">
        <div class="row">
            <?php foreach([1, 2, 3, 4] as $image): ?>
            <div class="col">
                <div class="card text-bg-dark text-black overflow-hidden">
                    <img src=<?php echo "img/room$image.jpg" ?> class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            </h5>
                            <p class="card-text"><small>Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <?php endforeach?>
        </div>
    </div>

</section>

<section>
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col">
                <h2>Lorem ipsum dolor sit amet consectetur.</h2>
            </div>
            <div class="col-sm-12 col-md-6">
                <article>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et in libero corporis voluptate animi,
                        nostrum nisi sint voluptatum quas magnam culpa, facilis ullam, expedita ut? Repellat
                        voluptatibus veritatis enim pariatur?</p>

                    <button type="button" class="btn btn-outline-info">
                        <span class="fw-normal">
                            More About use
                        </span>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg>
                    </button>

                </article>
            </div>
        </div>
    </div>
</section>

{{-- cards details --}}
<section id="card">
    <div class="container" style="margin: 8rem auto;">
        <div class="row mx-auto gap-5 gap-xl-0">
            <?php foreach([1, 2, 3] as $image): ?>
            <div class="col">
                <div class="mx-auto card" style="width: 18rem;">
                    <img src="img/meme.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card {{$image}}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary disabled">Go somewhere</a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>


@endsection