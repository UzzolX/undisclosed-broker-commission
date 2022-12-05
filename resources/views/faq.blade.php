<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>UEC | FAQ</title>
    @include('partials.head')

</head>

<body>

    <!----------------------------------------top area start---------------------------------------->
    <@include('partials.nav')
    <!----------------------------------------top area end---------------------------------------->
    <!----------------------------------------main area start---------------------------------------->
    <main>
        <section style="background-color:#F7F8FA;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="header-title text-center">
                            <h1>FAQ’s</h1>
                            <p>Have any question</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <!--FAQ box start-->
                        <div class="faq-single-main">
                            <a data-bs-target="#e" data-bs-toggle="collapse">
                                <div class="faq-box"> <span> What is an undisclosed broker commission?  </span> <i class="ti-plus"></i> </div>
                            </a>
                            <div class="collapse" id="e">
                                <div class="ans-all">
                                    <p> Your business is entitled to make a business energy claim if you have used a broker for your energy supply and the commission you were being charged by the broker was kept hidden.</p>
                                </div>
                            </div>
                        </div>
                        <!--FAQ box end-->
                        <!--FAQ box start-->
                        <div class="faq-single-main">
                            <a data-bs-target="#a" data-bs-toggle="collapse">
                                <div class="faq-box"> <span>Are undisclosed broker commissions a common practice in the business energy world? </span> <i class="ti-plus"></i> </div>
                            </a>
                            <div class="collapse" id="a">
                                <div class="ans-all">
                                    <p>Over half of UK businesses have used a broker for their energy supply. There is a very realistic chance your business has used an energy broker who has failed to disclose the commission they are receiving from the energy
                                        supplier, if this is the case you are completely entitled to make a claim against the energy company to get the commission paid back to you. </p>
                                    <p>The business energy claim is made against your energy supplier rather than the broker.</p>
                                </div>
                            </div>
                        </div>
                        <!--FAQ box end-->
                        <!--FAQ box start-->
                        <div class="faq-single-main">
                            <a data-bs-target="#b" data-bs-toggle="collapse">
                                <div class="faq-box"> <span>How does my business make a business energy claim? </span> <i class="ti-plus"></i> </div>
                            </a>
                            <div class="collapse" id="b">
                                <div class="ans-all">
                                    <p>Here at Undisclosed Broker Commission we do the work for you. With our no win no fee model, your claim is risk free as there are no upfront cost to you. A simple five-minute call with one of our UK based advisors is
                                        enough to get the ball rolling. We will simply ask you to provide us with your business energy bills, from this we will be able to tell you your estimated claim size and the next steps. </p>
                                </div>
                            </div>
                        </div>
                        <!--FAQ box end-->
                        <!--FAQ box start-->
                        <div class="faq-single-main">
                            <a data-bs-target="#c" data-bs-toggle="collapse">
                                <div class="faq-box"> <span>How much money can I potentially get back if I make a business energy claim? </span> <i class="ti-plus"></i> </div>
                            </a>
                            <div class="collapse" id="c">
                                <div class="ans-all">
                                    <p> UK businesses could be owed billions because of mis-sold energy contracts. The size of your business energy claim is entirely dependent on the brokers pricing model and the amount of energy your business uses. </p>
                                </div>
                            </div>
                        </div>
                        <!--FAQ box end-->
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