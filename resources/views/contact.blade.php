<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>UEC | CONTACT</title>
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
                            <h1>Get In Touch</h1>
                            <p>Get in touch with us right away and one of our friendly advisors will call you back
                                within the same working day. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-50 pb-50">
            <div class="container">
                <div class="contact-contean">
                    <div class="contact-img">
                        <img src="{{asset('frontend-assets/assets/image/cc.jpg')}}" alt="">
                    </div>
                    <div class="contact-p">
                        <p>
                            It is completely obligation free. The claim size for undisclosed energy commission/broker
                            commission varies depending on your business’s energy consumption. All we need to find out
                            your claim size is a copy of your business’s energy bill. That’s it. Get
                            in touch with us right now!
                        </p>
                        <a href="#"><button>Submit</button></a>
                    </div>

                </div>
            </div>
        </section>
        <section class="pt-50 pb-100">
            <div class="container">
                <div class="main-contact-box">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="contact-titel">
                                <h3>Get in touch</h3>
                                <div class="contact-us">
                                    <form action="Name">
                                        <input type="text" placeholder="Name">
                                        <input type="number" placeholder="Mobile">
                                        <input type="email" placeholder="Email">
                                        <textarea placeholder="Your message"></textarea>
                                        <button type="submit"> Send massage </button>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-5 address">
                            <h3>Our Information</h3>

                            <div class="address-all-info">
                                <div class="address-info">
                                    <i class="ti-mobile"></i> <span>0179865320</span>
                                </div>
                                <div class="address-info">
                                    <i class="ti-email"></i> <span>undisclossedclaims@gmail.com</span>
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