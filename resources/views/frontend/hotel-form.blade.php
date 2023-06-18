<form method="post" action="{{ route('postStephotel1') }}">
    @csrf
    <ul class="one-round-sec">
            <li class="from-fly" style="width:30%;">
                <label for="from_city">Enter City of Property</label>
                <input class="form-control" id="from_city"
                        type="text" value="Cox's Bazar"
                        name="hotel_name" required />
                <input class="form-control"
                        id="country_name" type="text"
                        value="Bangladesh"
                        name="country_name" required />
            </li>
            <li class="departure-fly" style="width:20%;">
                <label for="from">Check-in Date</label>
                <input type="text" class="form-control"
                        id="from" name="checkin_date_from"
                        value="20 Jun 2023"
                        placeholder="20 Jun 2023" required>
            </li>
            <li class="return-fly" style="width:20%;">
                <label for="to">Check-out Date</label>
                <input type="text" class="form-control" id="to"
                        name="checkout_date_from"
                        value="22 Jun 2023"
                        placeholder="22 Jun 2023">
            </li>
            <li class="travel-class-fly" style="width:30%;">
                <label for="trav_count">Guest(s) & Room(s)</label>
                <div
                        class="d-flex align-items-center gap-0 trav-sec">
                        <input type="text"
                            class="form-control trav_count"
                            id="trav_count" name="guest_count"
                            value="2" required readonly> Guest
                </div>
                
                <select class="form-select w-50" name="room_count" aria-label="Default select example">
                        <option value="1" selected>1 Room</option>
                        <option value="2">2 Room</option>
                        <option value="3">3 Room</option>
                        <option value="4">4 Room</option>
                </select>

                <div
                        class="travelllers-class-select-popup d-none">
                        <div class="close-popup">
                            <i
                                    class="fa-solid fa-circle-xmark close-popup-btn"></i>
                        </div>
                        <div class="travelllers-class-select-1">
                            <span class="pcount">Adults</span>
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
                        <span class="pcount">Childs(0-10 yr)</span>
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
                        <span class="pcount">Childs(0-5 yr)</span>
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
        <div class="hotel-filter-type">
                <h4>Search For</h4>
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="business" id="business">
                        <label class="form-check-label" for="business">
                           Business
                        </label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="couples" id="couples">
                        <label class="form-check-label" for="couples">
                           Couples
                        </label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="families" id="families">
                        <label class="form-check-label" for="families">
                           Families
                        </label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="friends" id="friends">
                        <label class="form-check-label" for="friends"> 
                            Friends
                        </label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="solo" id="solo">
                        <label class="form-check-label" for="solo">
                           Solo
                        </label>
                </div>
        </div>
        <div class="bottom-search-main">
                <button type="submit"
                class="btn btn-primary filter-main-search">Search</button>
        </div>
</form>