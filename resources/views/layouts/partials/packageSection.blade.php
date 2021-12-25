<div class="container tour-images mb-5">
    <h1 class="card-title text-center text-uppercase text-white bg-dark p-3 mt-2">Packages</h1>
    <div class="row justify-content-around">
        @foreach ($packages as $package)
            <div class="col-md-4">
                <div class="card shadow h-100" style="width: 20rem;">
                    <div class="inner">
                        <img src="images/package-images/{{ $package->image }}" class="card-img-top"
                            alt="{{ $package->name }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $package->name }}</h5>
                        <p class="card-text text-justify">{{ $package->description }}</p>
                        @include('layouts.user.viewPackage')
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
