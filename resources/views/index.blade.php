@extends('layout.header')

@section('title')
Home
@endsection
@section('content')
<div class="homeback">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between ps-lg-5 pt-lg-4">
            <div class="col-lg-6 col-md-6 col-12 pt-4 ps-lg-5">
                <div class="pt-lg-4 ">
                    <h3 class="text-white homeheading pt-lg-4">Purchase and Sale </h3>
                    <h3 class="text-white homeheading"> Of Pre-Owned Cars </h3>
                </div>

                <div class="pt-4">
                    <p class="text-white lh-lg fs-6" style="color: #FFFFFF;">Are you looking for amazing pre-owned
                        cars
                        purchase and sale </p>
                    <p class="text-white  fs-6" style="color: #FFFFFF;">services? Don’t worry! We got it for you!
                    </p>
                </div>

                <div class="pt-4">
                    <button class="loginbtn btn btn-lg rounded-0 fs-6   px-lg-5 py-lg-3 " style="font-weight: 900;">Buy
                        A Car</button>
                </div>

                <div class="pt-5 fs-4 fw-bold">
                    <p style="color: #01C0FA;">Trade or sell your car now <span class="fw-bold fs-4"> > </span></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12 pt-lg-4 pe-lg-5 ">
                <img src="../images/car1.png" class="img-fluid" alt="car1">
            </div>

            <div class="col-12 pb-2 ">
                <div class="text-white  d-flex justify-content-center align-items-center">

                    <span><button class="round-button "></button></span>
                    <span class="px-1"><button class="round-button bg-primary"></button></span>
                    <span><button class="round-button "></button></span>
                    <span class="px-1"><button class="round-button "></button></span>

                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- card buy and sell -->

<div class=" conback">
    <div class="container d-flex justify-content-between mt-lg-0 mt-md-0 mt-4">
        <div class="row pt-lg-5 pb-lg-5 justify-content-between buyselcard ">
            <div class="col-12 text-center pt-lg-5 pb-lg-5">
                <p class="homeheading2">Reasons to Buy/Sale a Car</p>
            </div>

            <div class="col-lg-4 col-md-4 col-12 pb-lg-4 mb-3 pt-lg-0 pt-md-0 pt-3">
                <div class="card h-100 rounded-4  border border-0">
                    <img src="../images/homebuysell1.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body rounded-4 flex-1 p-4">
                        <p class="card-text lh-lg">3 month warranty on any mechanical issue which you can extend to
                            12 months for and extra payment</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 pb-lg-4 mb-3 pt-lg-0 pt-md-0 pt-3">
                <div class="card  h-100 rounded-4 border border-0">
                    <img src="../images/homebuysell2.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body rounded-4 p-4 m-0">
                        <p class="card-text lh-lg ">You don´t have to deal directly with the seller but through
                            Carsafe as intermediary</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-12 pb-lg-4 mb-3 pt-lg-0 pt-md-0 pt-3">
                <div class="card h-100 rounded-4 border border-0 ">
                    <img src="../images/homebuysell3.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body rounded-4 p-4  m-0">
                        <p class="lh-lg">Pre apply to a credit to pay for the car</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- cards on featured cars -->
<div class="container-fluid mt-md-5 featuredback">
    <div class="row">
        <div class="col-12">
            <div class=" pb-lg-4 ps-lg-5 d-flex justify-content-between ">
                <p class="homeheading2 ps-lg-5 mt-5">Our Featured Cars</p>
                <div class="pe-lg-5 mt-5 "><img src="../images/homearrow.png" class="img-fluid" width="100px"
                        height="38.12px  "></div>
            </div>
        </div>
        <div class="col-lg-3 ps-lg-5 pt-lg-0 pt-md-0 pt-3">
            <div class="card h-100 ms-lg-4 border border-0 rounded-4  cardproductdetail">
                <img src="../images/car7.png" class="card-img-top img-fluid rounded-top-4 " alt="card1">

                <div class="card-body ">
                    <p class="fw-bold m-0 pt-lg-4 ps-lg-4">Honda Accord EXL</p>
                    <p class=" pt-lg-2 fw-semibold  ps-lg-4" style="color: #5F626B;">2015 - 105,360 km - Monterey
                    </p>
                    <div class="d-flex pt-lg-3 pb-lg-3 ps-lg-4 "><span class="fs-5 fw-bold"
                            style="color: #0167EC;">$256,999</span>
                        <del class="fw-lighter ps-lg-4 fw-bold" style="color: #696969;">$256,999</del>
                    </div>
                </div>
            </div>



        </div>


        <div class="col-lg-3 ps-lg-5 pt-lg-0 pt-md-0 pt-3">
            <div class="card h-100 ms-lg-4 border border-0 rounded-4  cardproductdetail">
                <img src="../images/car2.png" class="card-img-top img-fluid rounded-top-4 " alt="card1">

                <div class="card-body ">
                    <p class="fw-bold m-0 pt-lg-4 ps-lg-4">Ford Edge SEL Plus</p>
                    <p class=" pt-lg-2 fw-semibold  ps-lg-4" style="color: #5F626B;">2015 - 105,360 km - Monterey
                    </p>
                    <div class="d-flex pt-lg-3 pb-lg-3 ps-lg-4 "><span class="fs-5 fw-bold"
                            style="color: #0167EC;">$256,999</span>
                        <del class="fw-lighter ps-lg-4 fw-bold" style="color: #696969;">$256,999</del>
                    </div>
                </div>
            </div>



        </div>



        <div class="col-lg-3 ps-lg-5 pt-lg-0 pt-md-0 pt-3">
            <div class="card h-100 ms-lg-4 border border-0 rounded-4  cardproductdetail">
                <img src="../images/car3.png" class="card-img-top img-fluid rounded-top-4 " alt="card1">

                <div class="card-body ">
                    <p class="fw-bold m-0 pt-lg-4 ps-lg-4">Jeep Grand Cherokee Summit</p>
                    <p class=" pt-lg-2 fw-semibold  ps-lg-4" style="color: #5F626B;">2015 - 105,360 km - Monterey
                    </p>
                    <div class="d-flex pt-lg-3 pb-lg-3 ps-lg-4 "><span class="fs-5 fw-bold"
                            style="color: #0167EC;">$256,999</span>
                        <del class="fw-lighter ps-lg-4 fw-bold" style="color: #696969;">$256,999</del>
                    </div>
                </div>
            </div>



        </div>


        <div class="col-lg-3 pe-lg-5 pt-lg-0 pt-md-0 pt-3">
            <div class="card h-100 border border-0 ms-lg-4 rounded-4   cardproductdetail">
                <img src="../images/car4.png" class="card-img-top img-fluid rounded-top-4  " alt="card1">
                <div class="card-body">
                    <p class="pt-lg-4 ps-lg-4 m-0 fw-bold">Audi A1 Hatch Back Cool</p>
                    <p class="card-text fw-semibold pt-lg-2 pt-lg-2 ps-lg-4" style="color: #5F626B;">2015 - 105,360
                        km - Monterey</p>
                    <div class="d-flex pt-lg-3 pb-lg-3  ps-lg-4"><span class="fs-5 fw-bold"
                            style="color: #0167EC;">$256,999</span>
                        <del class="fw-bold ps-lg-4" style="color: #696969;">$256,999</del>
                    </div>
                </div>
            </div>



        </div>

    </div>
</div>

<!-- home heading high quatily -->

<div class="container mt-lg-5 mt-md-5 mt-5">
    <div class=" row  pt-lg-5">
        <div class="col-12 text-center">
            <h3 class="homeheading3">High Quality Output, </h3>
            <span class="homeheading3">Awesome Services</span>
        </div>
    </div>
</div>

<!-- cards buy sell change -->

<div class="bysellback">
    <div class="container conwid pt-lg-0 pt-md-0 pt-4 ">
        <div class="row pt-lg-5 pb-lg-5  buyselcard2 ">


            <div class="col-lg-4 col-md-4 col-12 pb-lg-4 mb-3 ">
                <div class="h-100 text-center border border-1 pt-lg-5 pt-md-5 pt-3 boxshadow-buysell rounded-4 mydiv"
                    style="background-color:#FFFFFF">
                    <div class="d-flex justify-content-center">
                        <span class="cartaback d-flex justify-content-center pt-lg-0 pt-md-0 pt-2">
                            <i class="bi bi-cart usericoncart fs-1"></i>
                        </span>
                    </div>

                    <p class="fs-3 fw-bold pt-lg-5" style="color: #015EEB;">Buy a used car</p>
                    <p class="text-center">Lorem ipsum dolor sit amet,</p>
                    <p>consectetur adipiscing elit, sed do</p>
                    <p>eiusmod tempor </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 pb-lg-4 mb-3 ">
                <div class="h-100 text-center border border-1 pt-lg-5 pt-md-5 pt-3 boxshadow-buysell rounded-4 mydiv "
                    style="background-color:#FFFFFF">
                    <div class="d-flex justify-content-center">
                        <span class="cartaback d-flex justify-content-center pt-lg-0 pt-md-0 pt-2">
                            <i class="bi bi-bag usericoncart fs-1"></i>
                        </span>
                    </div>

                    <p class="fs-3 pt-lg-5 fw-bold" style="color: #015EEB;">Buy a used car</p>
                    <p class="text-center">Lorem ipsum dolor sit amet,</p>
                    <p>consectetur adipiscing elit, sed do</p>
                    <p>eiusmod tempor </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12 pb-lg-4 mb-3">
                <div class="h-100 text-center border border-1 pt-lg-5  pt-md-5 pt-3 boxshadow-buysell rounded-4 mydiv "
                    style="background-color:#FFFFFF">
                    <div class="d-flex justify-content-center">
                        <span class="cartaback d-flex justify-content-center pt-lg-0 pt-md-0 pt-2">
                            <i class="bi bi-arrow-left-right usericoncart fs-1"></i>
                        </span>
                    </div>

                    <p class="fs-3 pt-lg-5 fw-bold" style="color: #015EEB;">Buy a used car</p>
                    <p class="text-center">Lorem ipsum dolor sit amet,</p>
                    <p>consectetur adipiscing elit, sed do</p>
                    <p>eiusmod tempor </p>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- manage -->
<div class="managebackblue pt-lg-5 ">
    <div class="container-fluid ">
        <div class="manageback">
            <div class="row buyselcard3 pt-lg-5 ">
                <div class="col-lg-6 col-md-6 col-12 pt-lg-0 pt-md-0 pt-4">
                    <div class="homeheading4 text-lg-start text-md-start text-center ">
                        <p class="">Manage your purchase/</p>
                        <p class=" ">sale of pre-owned cars</p>
                        <p class=" ">with our app</p>
                    </div>


                    <div class="row pt-lg-5">
                        <div class="col-lg col-12 d-flex align-items-center">
                            <span class="pb-lg-3"><img src="../images/manageshield.svg" class="img-fluid"></span>
                            <div class="userinfo">
                                <span class="fs-5" style="color: #585C65;">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.</span>
                                <p class="lh-lg fs-5" style="color:#585C65">Venenatis eget malesuada vulputate ante
                                    quam
                                    iaculis ac.</p>
                            </div>
                        </div>

                    </div>

                    <div class="row ">
                        <div class="col-lg col-12 d-flex align-items-center">
                            <span class="pb-lg-3"><img src="../images/manageshield.svg" class="img-fluid"></span>
                            <div class="userinfo">
                                <span class="fs-5" style="color: #585C65;">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Elit ut </span>
                                <p class="lh-lg fs-5" style="color:#585C65">mauris pharetra vitae, malesuada.
                                    Gravida
                                    phasellus quis vel.</p>
                            </div>
                        </div>

                    </div>

                    <div class="row ">
                        <div class="col-lg col-12 d-flex align-items-center">
                            <span class="pb-lg-3"><img src="../images/manageshield.svg" class="img-fluid"></span>
                            <div class="userinfo">
                                <p class="fs-5 " style="color: #585C65;">Pre apply to a credit to pay for the car
                                </p>

                            </div>
                        </div>

                    </div>

                    <div class=" pt-lg-4  pt-lg-0 pt-md-0 pt-4 text-lg-start text-md-start text-center">
                        <button class="managebtn btn btn-lg rounded-0 fw-bold px-lg-5 py-lg-3  ">Get To know the Car
                            Safe</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 text-lg-start text-center   ">
                    <div class="phone">
                        <img src="../images/homemanage.png" class="img-fluid  " style="position: relative; top: 40px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')
@endsection



















