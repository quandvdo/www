<div class="col-md-12 col-lg-3 order-lg-first order-last mt-3 mt-lg-0">
    <div class="form-container py-3">
        <h4 class="black bold mt-3 px-4 pb-2 text-center">Search your Destination</h4>
        <form id="sidebar-form" class="px-xl-5 px-lg-3 px-5">
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
                        <select class="form-control" id="inlineFormInputName1">
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
                        <select class="form-control" id="inlineFormInputName2">
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
                        <select class="form-control" id="inlineFormInputName3">
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
    @include('frontend.components.partials.quick-contact')
    <a href="#"><img src="{{asset('images/promotion.jpg')}}"
                     class="w-100 img-fluid mx-auto d-block mt-4"
                     alt=""></a>
</div>