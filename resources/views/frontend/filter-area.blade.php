
                    <div class="trip-type-way">
                        <ul class="nav nav-pills mb-3" id="pills-tab-way" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active one-way-active" data-bs-toggle="pill" href="#pills-one-way">
                                            One Way
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link round-way-active" data-bs-toggle="pill" href="#pills-one-way">
                                            Round Trip
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link multi-way-active" data-bs-toggle="pill" href="#pills-one-way">
                                            Multi-City
                                    </a>
                                </li>
                        </ul>
                    </div>
                    <div class="from-to-fling-main">
                        <div class="tab-content" id="pills-tab-wayContent">
                                <div class="one-round-multy-fly container tab-pane active" id="pills-one-way">
                                    <div class="search-main-section">
                                            <!----------------------------- Start One Way First Form ------------------------------->
                                            @include('frontend.oneway-form')
                                            <!----------------------------- end Form ------------------------------->
                                    </div>
                                </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>