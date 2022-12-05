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
        <section class="pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2">

                    </div>
                    <div class="col-xl-8">
                        <div class="all-news-details">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-news-details">
                                        <img src="{{asset('frontend-assets/assets/image/news.jpg')}}" alt="">
                                        <span> <i class="ti-time"></i>  6 min ago</span>
                                        <div class="main-news-titel">
                                            <h3>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</h3>
                                            <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
                                                College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                                                Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular
                                                during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                                                those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by
                                                H. Rackham.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">

                    </div>
                    <div class="col-xl-3">

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