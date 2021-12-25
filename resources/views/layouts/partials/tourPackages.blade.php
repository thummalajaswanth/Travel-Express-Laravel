<div class="container-fluid" id="premiumPackage">
    <h1>Premium Packages</h1>
    <div class="border"></div>
    <div class="row">
        @foreach ($packages as $package)
            <div class="col-md-3">
                <div class="single-content">
                    <img src="images/package-images/{{ $package->image }}">
                    <div class="text-content">
                        <h4>{{ $package->name }}</h4>
                        {{-- @include('layouts.user.viewPackage') --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
