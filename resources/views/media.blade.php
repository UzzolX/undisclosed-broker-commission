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
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="header-title text-center">
                            <h1>Media</h1>
                            <p>Our twitter feed</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-100 pb-100" style="background-color:#F7F8FA;">
            <div class="container">
                <div class="all-media">
                    <div class="row">
                        <div class="col-xl-2">

                        </div>
                        <div class="col-xl-8">
                            <a class="twitter-timeline" data-lang="en" data-theme="light" href="https://twitter.com/UECclaims?ref_src=twsrc%5Etfw">Tweets by UECclaims</a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <div class="col-xl-2">


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