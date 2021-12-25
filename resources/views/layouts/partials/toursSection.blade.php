<div class="container tour-images mb-5">
    <h1 class="card-title text-center text-uppercase text-white bg-dark p-3 mt-2">Tours</h1>
    <div class="row justify-content-center">
        @foreach ($tours as $tour)
            <div class="col-md-4">
                <div class="card shadow h-100" style="width: 20rem;">
                    <div class="inner">
                        <img src="images/tour-package-images/{{ $tour->image }}" class="card-img-top"
                            alt="{{ $tour->name }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $tour->name }}</h5>
                        <p class="card-text text-justify">{{ $tour->description }}</p>
                        @include('layouts.user.viewTour')
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
