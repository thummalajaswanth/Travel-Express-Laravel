<div></div>
<footer class="page-footer bg-dark text-white">
    <div class="bg-info">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-12 text-center">
                    <a href="#"><i class="fab fa-facebook-f text-white mr-4"></i></a>
                    <a href="#"><i class="fab fa-twitter text-white mr-4"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g text-white mr-4"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in text-white mr-4"></i></a>
                    <a href="#"><i class="fab fa-instagram text-white"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center text-md-left mt-5 text-white">
        <div class="row">
            <div class="col-md-3 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Travel Express</h6>
                <hr class="bg-info mb-4 mt-0 d-inline-block mx-auto">
                <p class="mt-2 text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, quisquam
                    qui a corrupti asperiores ea nam quo velit rem, nulla placeat voluptatem eveniet facilis
                    repudiandae?</p>
            </div>

            <div class="col-md-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Quick Links</h6>
                <hr class="bg-info mb-4 mt-0 d-inline-block mx-auto">
                <ul class="list-unstyled">
                    <li class="my-2"><a class="text-white" href="/">Home</a></li>
                    <li class="my-2"><a class="text-white" href="/gallery">Gallery</a></li>
                    <li class="my-2"><a class="text-white" href="/tours">Tours & Packages</a></li>
                </ul>
            </div>

            <div class="col-md-3 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Contact US</h6>
                <hr class="bg-info mb-4 mt-0 d-inline-block mx-auto">
                <ul class="list-unstyled">
                    <li class="my-2"><i class="fas fa-home mr-3"></i> Eluru, Andhrapradesh</li>
                    <li class="my-2"><i class="fas fa-envelope mr-3"></i> travelexpress@gmail.com</li>
                    <li class="my-2"><i class="fas fa-phone mr-3"></i> +91 9876543210</li>
                    <li class="my-2"><i class="fas fa-print mr-3"></i> +230 250 157</li>
                </ul>
            </div>

            <div class="col-md-4 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Connect With Us</h6>
                <hr class="bg-info mb-4 mt-0 d-inline-block mx-auto">
                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form action="/mail/send" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="Email" class="form-control form-control-sm" name="email"
                            placeholder="Please Enter Your Email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="2" placeholder="Leave a Message"></textarea>
                    </div>
                    <div class="form-text">
                        <input type="submit" class="btn btn-info" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="copyright text-center py-2">
        <p>Designed by Kailash Tuta</p>
    </div>
</footer>
