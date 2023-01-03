<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>UEC | HOME</title>
    @include('partials.head')

</head>

<body>

    <!----------------------------------------nav area start---------------------------------------->
    @include('partials.nav')
    <!----------------------------------------nav area end---------------------------------------->

    <!----------------------------------------main area start---------------------------------------->
    <main>
        <!--top banner start-->
        <section style="background-color:#F7F8FA;">
            <div class="container">
                <div class="banner">
                    <div class="row banner-info">
                        <div class="col-xl-6">
                            <div class="claim-form">
                                <h2> How much is my business energy claim worth?</h2>
                                <p>Please get in touch with us regarding your business energy claim via this contact form</p>
                                    @if(Session::has('message'))
                                    <div class="alert alert-success">
                                        {{Session::get('message')}}
                                    </div>
                                    @endif
                                    <form action="{{route('index.storeClaimTop')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <input name="name" type="text" placeholder="Name">
                                        </div>
                                        <div class="col-xl-12">
                                            <input name="phone" type="number" placeholder="Mobile">
                                        </div>
                                        <div class="col-xl-12">
                                            <input name="email" type="email" placeholder="Email">
                                        </div>
                                        <div class="col-xl-12">
                                            <select name="used_broker" id="Broker">
                                                <option disabled selected hidden>Have you used a Broker?
                                                </option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        {{-- <div class=" col-xl-12">
                                            <input name="file" type="file" data-multiple-caption="{count} files selected" multiple
                                                 id="file" class="inputfile">
                                            <label for="file"><span>Choose a file&hellip;</span></label>
                                        </div> --}}
                                        <div class="col-xl-12">
                                            <button type="submit"> submit</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="video">
                                <video controls playsinline autoplay muted preload="metadata" loop="true">
                                    <source
                                        src="{{asset('frontend-assets/assets/video/Undisclosed Energy Commission - What is Business Energy Claim.mp4')}}"
                                        type="video/mp4"></video>

                                <div class="c1-shpae position-absolute">
                                    <img src="{{asset('frontend-assets/assets/image/shape/c1.png')}}" alt="">
                                </div>
                                <div class="c2-shpae position-absolute">
                                    <img src="{{asset('frontend-assets/assets/image/shape/c2.png')}}" alt="">
                                </div>
                                <div class="star-shpae position-absolute">
                                    <img ssrc="{{asset('frontend-assets/assets/image/shape/star.png')}}" alt="">
                                </div>
                                <div class="unmute-shpae position-absolute">
                                    <img src="{{asset('frontend-assets/assets/image/shape/umute.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--top banner end-->
        <section class="pt-100 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="uk">
                            <h3>
                                We are Undisclosed Broker Commission, the market leader in recouping hidden broker
                                commissions for businesses all around the UK.
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row most-all-claim">
                    <div class="col-xl-6">
                        <div class="most-claim">
                            <h3>
                                Most business energy claims are upwards of £45,000.
                            </h3>
                            <p>
                                Qualifying criteria for making a business energy claim against the broker is very
                                simple. The following are the only two criteria you need to meet to start your business
                                energy claim:
                            </p>
                        </div>

                    </div>
                    <div class="col-xl-6">
                        <div class="most-claim-box">
                            <div class="col-xl-6">
                                <div class="most-claim-single-box">
                                    <img src="{{asset('frontend-assets/assets/image/shape/1.png')}}" alt="">
                                    <p>
                                        You have used an energy broker for your business energy supply
                                    </p>
                                </div>

                            </div>
                            <div class="col-xl-6">
                                <div class="most-claim-single-box">
                                    <img src="{{asset('frontend-assets/assets/image/shape/2.png')}}" alt="">
                                    <p>
                                        The broker failed to disclose that you are paying their commission every time
                                        you pay a Utility bill through inflating the cost of each kWh you use

                                    </p>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="claim-easy">
                            <h3>
                                Business Energy Claim made easy
                            </h3>
                            <p>
                                We have worked tirelessly to make the process of business energy claim as easy as
                                possible. Our friendly advisors at Undisclosed Broker Commission will do all the work
                                for you, at strictly No Win No Fee - the claim process is completely stress free!
                                <br> If you were not aware that you are paying the brokers commission each time your
                                business pays its energy bill, we will find out how much money your business is due back
                                – Simply click the link below to calculate your
                                business energy claim size.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-100 pb-100 energy-claim-all" style="background-image:url(frontend-assets/assets/image/claim.jpg); 
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        position: relative;
        text-align: center;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="energy-claim">
                            <h1>
                                Why make a business energy claim?
                            </h1>
                            <ul style="text-align: start;">
                                <li> Business energy prices are raising at an uncontrollable rate. Reducing costs and
                                    overheads are more of a priority now than ever.</li>

                                <li>The energy sector is heavily regulated. The broker industry is not. The energy
                                    ombudsman stepped in to advise that businesses were being taken advantage of without
                                    their knowledge because of the brokers hidden commission.</li>


                                <li>The Ombudsman insisted all brokers are honest and clear with clients in terms of how
                                    much commission they would receive from the supplier </li>

                                <li> Due to the unambiguity around the broker commission model, energy suppliers
                                    actively encouraged brokers to carry on with this process. This is seen as bribery.
                                </li>

                                <li> We will assist you in getting back what your business shouldn’t have paid in the
                                    first place. The business energy claim we make on your behalf is completely No Win
                                    No Fee. All money recovered comes from the energy supplier.
                                    Our payment model is very straight forward. We only get paid if the business energy
                                    claim is successful. Our fees are 30% of the claim, and your business will be
                                    awarded 70% of the claim size. </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-title">
                            <h1>
                                Contact Us
                            </h1>
                            <span>
                                Get In Touch
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="contact">
                            <form action="{{route('index.storeClaim')}}" method="POST">
                                @csrf
                                <input name="name" type="text" placeholder="Name">
                                <input name="phone" type="number" placeholder="Mobile">
                                <input name="email" type="email" placeholder="Email">
                                <textarea name="message" placeholder="Your message"></textarea>
                                <button type="submit"> Send massage </button>
                            </form>
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
