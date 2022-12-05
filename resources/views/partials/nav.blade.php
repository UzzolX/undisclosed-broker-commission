<section class="nav-menu">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container-fluid p-0">
                        <a class="navbar-brand" href="/">
                            <img src="{{asset('frontend-assets/assets/image/logo/Final-logo-UEC.png')}}" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav d-flex align-items-center main-menu">
                                <div class="menu-list navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link " href="/">Start Claim</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{route('news-index')}}">News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{route('media-index')}}">Media</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{route('faq-index')}}">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{route('contact-index')}}">Contact Us</a>
                                    </li>

                                </div>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
