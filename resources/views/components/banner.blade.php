<div class="container">
    <div id="carouselExample" class="carousel slide my-4 mx-auto" data-bs-ride="carousel" style="max-width: 960px;">
        <div class="carousel-inner rounded shadow" style="height: 380px; overflow: hidden;">
            <div class="carousel-item active">
                <img src="{{ asset('images/banner1.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner2.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Banner 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner3.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Banner 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>
