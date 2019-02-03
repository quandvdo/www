@extends('frontend._layout.main')

@section('content')
    @component('frontend.components.subheader',
        ['title' => 'Find Your Destination',
        'img' => 'destinations.jpg'])
    @endcomponent

    <!-- Section 3 Tours-->

    <section id="section3" class="tour-list-sidebar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-3 order-lg-first order-last mt-3 mt-lg-0">
                    <div class="form-container py-3">
                        <h4 class="black bold mt-3 px-4 pb-2 text-center">Search your Destination</h4>
                        <form id="sidebar-form" class="px-xl-5 px-lg-3 px-4">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="inputEmail3"
                                               placeholder="Search Tours">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <select class="form-control" id="inlineFormInputName32">
                                            <option selected>Any month</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="1">April</option>
                                            <option value="2">May</option>
                                            <option value="3">June</option>
                                            <option value="1">July</option>
                                            <option value="2">August</option>
                                            <option value="3">September</option>
                                            <option value="3">Octuber</option>
                                            <option value="3">November</option>
                                            <option value="3">December</option>
                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fas fa-calendar"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <select class="form-control" id="inlineFormInputName1">
                                            <option selected>Tour Type</option>
                                            <option value="1">Adventure</option>
                                            <option value="2">Romantic</option>
                                            <option value="3">Vacation</option>
                                            <option value="3">Explore</option>
                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fas fa-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <select class="form-control" id="inlineFormInputName4">
                                            <option selected>Sort by Name</option>
                                            <option value="1">Price low to high</option>
                                            <option value="2">Price high to low</option>
                                            <option value="3">Sort by Date</option>
                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fas fa-sort-amount-up"></i>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input class="form-control py-2 border-right-0 border" type="search"
                                               placeholder="Destination" id="example-search-input">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-compass"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="d-block">
                                        <p class=" text-center">
                                            <label class="text-center" for="amount">Price range:</label>
                                            <input class="text-center" type="text" id="amount" readonly>
                                        </p>
                                    </div>
                                    <div id="slider-range"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn col-sm-12 my-2 btn-primary">Search</button>

                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="more-info mx-auto my-4">
                        <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Quick Contact</h6>
                        <div class="pb-2">
                            <a href="tel:+133331111"><h5 class="grey text-center tel-info"><i
                                            class="fas primary-color fa-phone faa-tada animated mr-2 grey my-lg-0 mb-1"></i>(+1)
                                    3333.1111</h5></a>
                            <a href="mailto:hello@ourcompany.com"><h5 class="grey text-center mail-info"><i
                                            class="fas fa-envelope faa-horizontal animated primary-color mr-2"></i>hello@ourcompany.com
                                </h5></a>
                        </div>
                    </div>
                    <a href="#"><img src="images/promotion.jpg" class="w-100 img-fluid mx-auto d-block mt-4"
                                     alt=""></a>
                </div>

                <div class="col-lg-3 col-md-4 col-12">
                    <div class="complete-image mb-4">
                        <a class="" href="#" target="_blank">
                            <div class="destination-item">
                                <img src="images/costarica.jpg" class="img-fluid destination-item"
                                     alt="costarica">
                                <h6 class="white front">Costa Rica</h6>
                            </div>
                        </a>
                    </div>
                    <div class="complete-image mb-4">
                        <a class="" href="#" target="_blank">
                            <div class="destination-item">
                                <img src="images/japan.jpg" class="img-fluid destination-item" alt="costarica">
                                <h6 class="white front">Japan</h6>
                            </div>
                        </a>
                    </div>
                    <div class="complete-image mb-4">
                        <a class="" href="#" target="_blank">
                            <div class="destination-item">
                                <img src="images/london.jpg" class="img-fluid destination-item" alt="costarica">
                                <h6 class="white front">England</h6>
                            </div>
                        </a>
                    </div>
                    <div class="complete-image mb-lg-0 mb-4">
                        <a class="" href="#" target="_blank">
                            <div class="destination-item">
                                <img src="images/chinadestination.jpg" class="img-fluid destination-item"
                                     alt="costarica">
                                <h6 class="white front">China</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="complete-image mb-4">
                        <a class="" href="#" target="_blank">
                            <div class="destination-item">
                                <img src="images/switzerland2.jpg" class="img-fluid destination-item"
                                     alt="costarica">
                                <h6 class="white front">Switzerland</h6>
                            </div>
                        </a>
                    </div>
                    <div class="complete-image mb-4">
                        <a class="" href="#" target="_blank">
                            <div class="destination-item">
                                <img src="images/california.jpg" class="img-fluid destination-item"
                                     alt="costarica">
                                <h6 class="white front">California, U.S.A.</h6>
                            </div>
                        </a>
                    </div>
                    <div class="complete-image mb-4">
                        <a class="" href="#" target="_blank">
                            <div class="destination-item">
                                <img src="images/peru.jpg" class="img-fluid destination-item" alt="costarica">
                                <h6 class="white front">Peru</h6>
                            </div>
                        </a>
                    </div>
                    <div class="complete-image mb-lg-0 mb-4">
                        <a class="" href="#" target="_blank">
                            <div class="destination-item">
                                <img src="images/australia.jpg" class="img-fluid destination-item"
                                     alt="costarica">
                                <h6 class="white front">Australia</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="complete-image mb-4">
                        <a class="" href="#" target="_blank">
                            <div class="destination-item">
                                <img src="images/netherlands.jpg" class="img-fluid destination-item"
                                     alt="costarica">
                                <h6 class="white front">Netherlands</h6>
                            </div>
                        </a>
                    </div>
                    <div class="complete-image mb-4">
                        <a class="" href="#" target="_blank">
                            <div class="destination-item">
                                <img src="images/newyork.jpg" class="img-fluid destination-item" alt="costarica">
                                <h6 class="white front">New York, U.S.A</h6>
                            </div>
                        </a>
                    </div>
                    <div class="complete-image mb-4">
                        <a class="" href="#" target="_blank">
                            <div class="destination-item">
                                <img src="images/india.jpg" class="img-fluid destination-item" alt="costarica">
                                <h6 class="white front">India</h6>
                            </div>
                        </a>
                    </div>
                    <div class="complete-image mb-lg-0 mb-5">
                        <a class="" href="#" target="_blank">
                            <div class="destination-item">
                                <img src="images/argentina.jpg" class="img-fluid destination-item"
                                     alt="costarica">
                                <h6 class="white front">Argentina</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End section 3 tours-->

@endsection
