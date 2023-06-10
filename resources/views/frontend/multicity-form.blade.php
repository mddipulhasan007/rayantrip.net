<!-- <form method="post" action="{{ route('postStep1') }}">
    @csrf -->
<form method="post" action="">
    <ul class="one-round-sec">
            <li class="from-fly">
                <label for="from_city">From</label>
                <input class="form-control" id="from_city"
                        type="text" value="Dhaka"
                        name="from_city" required />
                <input class="form-control"
                        id="from_city_short_apt_name" type="text"
                        value="DAC, Hazrat Shahjalal International Airport Bangladesh"
                        name="from_city_short_apt_name" required />
            </li>
            <li class="to-fly">
                <label for="to_city">To</label>
                <input class="form-control" id="to_city"
                        type="text" value="Cox's Bazar"
                        name="to_city" required />
                <input class="form-control"
                        id="to_city_short_apt_name" type="text"
                        value="CXB, Coxs Bazar"
                        name="to_city_short_apt_name" required />
            </li>
            <li class="departure-fly departure-fly-multi">
                <label for="from">Departure</label>
                <input type="text" class="form-control"
                        id="from" name="dept_date_from"
                        value="11 Jun 2023, Saturday"
                        placeholder="11 Jun 2023, Saturday" required>
            </li>
            
            <li class="travel-class-fly">
                <label for="trav_count">Travellers &
                        Class</label>
                <div
                        class="d-flex align-items-center gap-2 trav-sec">
                        <input type="text"
                            class="form-control trav_count"
                            id="trav_count" name="trav_count"
                            value="1" required readonly> Traveller
                </div>
                
                <input type="text" class="form-control"
                        id="trav_class"
                        value="First Class" readonly>

                <div
                        class="travelllers-class-select-popup d-none">
                        <div class="close-popup">
                            <i
                                    class="fa-solid fa-circle-xmark close-popup-btn"></i>
                        </div>
                        <div class="travelllers-class-select-1">
                            <span class="pcount">Adult</span>
                            <button type='button'
                                    class='btn btn-danger btn-sm '
                                    id='mbA'
                                    onmousedown='modIn(this)'
                                    onmouseup='clearAll()'
                                    onmouseleave='clearAll()'>-</button>
                            <input type='number' id='A'
                                    onchange='imposeMinMax(this)'
                                    value='1' max='10' min='1'
                                    step='1'>
                            <button type='button'
                                    class='btn btn-danger btn-sm '
                                    id='pbA'
                                    onmousedown='modIn(this)'
                                    onmouseup='clearAll()'
                                    onmouseleave='clearAll()'>+</button>
                        </div>
                        <div class="travelllers-class-select-2">
                        <span class="pcount">Children</span>
                            <button type='button'
                                    class='btn btn-danger btn-sm signBut'
                                    id='mbB'
                                    onmousedown='modIn(this)'
                                    onmouseup='clearAll()'
                                    onmouseleave='clearAll()'>-</button>
                            <input type='number' id='B'
                                    onchange='imposeMinMax(this)'
                                    value='0' max='10' min='0'
                                    step='1' style='width: 50px;'>
                            <button type='button'
                                    class='btn btn-danger btn-sm '
                                    id='pbB'
                                    onmousedown='modIn(this)'
                                    onmouseup='clearAll()'
                                    onmouseleave='clearAll()'>+
                            </button>
                        </div>
                        <div class="travelllers-class-select-3">
                        <span class="pcount">Infants</span>
                            <button type='button'
                                    class='btn btn-danger btn-sm signBut'
                                    id='mbC'
                                    onmousedown='modIn(this)'
                                    onmouseup='clearAll()'
                                    onmouseleave='clearAll()'>-</button>
                            <input type='number' id='C'
                                    onchange='imposeMinMax(this)'
                                    value='0' max='10' min='0'
                                    step='1' style='width: 50px;'>
                            <button type='button'
                                    class='btn btn-danger btn-sm '
                                    id='pbC'
                                    onmousedown='modIn(this)'
                                    onmouseup='clearAll()'
                                    onmouseleave='clearAll()'>+</button>
                        </div>
                        <button class="btn btn-primary apply-btn" type="button" value="ADD"
                            onclick="addition()">Apply</button>
                </div>
            </li>
    </ul>
    <div id="faqs" class="faq-row-main">
        <ul class="one-round-sec">
                <li class="from-fly">
                    <label for="from_city">From</label>
                    <input class="form-control" id="from_city"
                            type="text" value="Dhaka"
                            name="from_city" required />
                    <input class="form-control"
                            id="from_city_short_apt_name" type="text"
                            value="DAC, Hazrat Shahjalal International Airport Bangladesh"
                            name="from_city_short_apt_name" required />
                </li>
                <li class="to-fly">
                    <label for="to_city">To</label>
                    <input class="form-control" id="to_city"
                            type="text" value="Cox's Bazar"
                            name="to_city" required />
                    <input class="form-control"
                            id="to_city_short_apt_name" type="text"
                            value="CXB, Coxs Bazar"
                            name="to_city_short_apt_name" required />
                </li>
                <li class="departure-fly departure-fly-multi">
                    <label for="from">Departure</label>
                    <input type="text" class="form-control"
                            id="from" name="dept_date_from"
                            value="11 Jun 2023, Saturday"
                            placeholder="11 Jun 2023, Saturday" required>
                </li>
                
                <li class="travel-class-fly hover-none">
                    <a href="javascript:void(0)" onclick="addfaqs();"
                        class="btn btn-success">
                        <i class="fa-solid fa-plus"></i>
                            ADD City
                    </a>
                </li>
        </ul>
    </div>
    <div class="filter-bottom-select-fare-type">
            <h4 class="select-type-title">Select A Fare Type:</h4>
            <div class="bottom-check-option">
                <div class="form-check">
                        <input class="form-check-input"
                            type="radio" name="fare_type"
                            id="regular_fares1"
                            value="Regular Fares 1" checked required>
                        <label class="form-check-label"
                            for="regular_fares1">
                            Regular Fares 1
                        </label>
                </div>
                <div class="form-check">
                        <input class="form-check-input"
                            type="radio" name="fare_type"
                            id="armed_forces_fares"
                            value="Armed Forces Fares 2" required>
                        <label class="form-check-label"
                            for="armed_forces_fares">
                            Armed Forces Fares 2
                        </label>
                </div>
                <div class="form-check">
                        <input class="form-check-input"
                            type="radio" name="fare_type"
                            id="student_fares2"
                            value="Student Fares 2" required>
                        <label class="form-check-label"
                            for="student_fares2">
                            Student Fares 2
                        </label>
                </div>
            </div>
    </div>
    <!-- <div class="bottom-search-main">
        <button type="submit"
            class="btn btn-primary filter-main-search">Search</button>
    </div> -->
</form>