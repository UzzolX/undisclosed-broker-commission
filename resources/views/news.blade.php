<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>UEC | NEWS</title>
    @include('partials.head')

</head>

<body>

    <!----------------------------------------top area start---------------------------------------->
    @include('partials.nav')
    <!----------------------------------------top area end---------------------------------------->
    <!----------------------------------------main area start---------------------------------------->
    <main>
        <section style="background-color:#F7F8FA;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="header-title text-center">
                            <h1>NEWS</h1>
                            <p>First Special News Here</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="all-news">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 ">
                            <div class="single-blog">
                                <img src="{{asset('frontend-assets/assets/image/news.jpg')}}" alt="">
                                <div class="main-news-disc">
                                    <h4>Coming Soon.</h4>
                                    <a href="#">Read More...</a>y
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="single-blog">
                                <img src="{{asset('frontend-assets/assets/image/news.jpg')}}" alt="">
                                <div class="main-news-disc">
                                    <h4>LoComing Soon.</h4>
                                    <a href="#">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="single-blog">
                                <img src="{{asset('frontend-assets/assets/image/news.jpg')}}" alt="">
                                <div class="main-news-disc">
                                    <h4>Coming Soon.</h4>
                                    <a href="#">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="single-blog">
                                <img src="{{asset('frontend-assets/assets/image/news.jpg')}}" alt="">
                                <div class="main-news-disc">
                                    <h4>Coming Soon.</h4>
                                    <a href="#">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="single-blog">
                                <img src="{{asset('frontend-assets/assets/image/news.jpg')}}" alt="">
                                <div class="main-news-disc">
                                    <h4>Coming Soon.</h4>
                                    <a href="#">Read More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!----------------------------------------main area end---------------------------------------->
    <!--footer area start-->
    @include('partials.footer')
    <!--footer area end-->
    @include('partials.script')


</body>

</html>