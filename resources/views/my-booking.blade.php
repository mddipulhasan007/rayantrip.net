@include('layout.frontend.header')

<div class="container mt-5">
    <div class="row pt-5">
		<div class="col-md-3 mt-4">
			<div class="card">
				<div class="card-header">Booking Category</div>
				<div class="card-body">
					<ul class="nav nav-pills mb-3 d-flex flex-column gap-3" id="pills-tab" role="tablist">
					    <li>
							<a class="dropdown-item" href="#flight-section"><i class="fa-solid fa-jet-fighter-up"></i> Flight</a>
						</li>
                        <li>
							<a class="dropdown-item" href="#hotel-section"><i class="fa-solid fa-hotel"></i> Hotel</a>
						</li>
						<li>
							<a class="dropdown-item" href="#tour-section"><i class="fa-solid fa-person-running"></i> Tour</a>
						</li>
						<li>
							<a class="dropdown-item" href="#visa-section"><i class="fa-solid fa-plane"></i> Visa</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-9 mt-4">
		    <div class="card" id="flight-section">
				<div class="card-header w-100 d-flex align-items-center justify-content-between">
					<span>Flight List</span> 
					<small>Manage your Flight</small>
				</div>
				<div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Flight ID</th>
                            <th scope="col">From City</th>
                            <th scope="col">To City	</th>
                            <th scope="col">Depart On Date</th>
                            <th scope="col">Return On Date</th>
                            <th class="text-center" scope="col">Total Traveller</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($user->bookings as $flight)
                                <tr>

                                    <td>rtf{{ $flight->id }}</td>
                                    <td>{{ $flight->from_city }}</td>
                                    <td>{{ $flight->to_city }}</td>
                                    <td>{{ $flight->dept_date_from }}</td>
                                    <td>{{ $flight->return_date_to }}</td>
                                    <td class="text-center">{{ $flight->trav_count }}</td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
				</div>
			</div>
			<div class="card mt-5" id="hotel-section">
				<div class="card-header w-100 d-flex align-items-center justify-content-between">
					<span>Hotel List</span> 
					<small>Manage your Hotel</small>
				</div>
				<div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Hotel Name</th>
                            <th scope="col">Checkin Date</th>
                            <th scope="col">Checkout Date</th>
                            <th class="text-center" scope="col">Guest & Room</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>Zinzira Hotel</td>
                                <td>25 june 2023</td>
                                <td>28 june 2023</td>
                                <td class="text-center">5 & 2</td>
                            </tr>
                            <tr>
                               <td scope="row">2</td>
                                <td>Saimon Cox's Bazar</td>
                                <td>26 june 2023</td>
                                <td>29 june 2023</td>
                                <td class="text-center">2 & 1</td>
                            </tr>
                            <tr>
                               <td scope="row">3</td>
                                <td>Khan Cox's Bazar</td>
                                <td>26 june 2023</td>
                                <td>29 june 2023</td>
                                <td class="text-center">2 & 1</td>
                            </tr>
                        </tbody>
                    </table>
				</div>
			</div>
            <div class="card mt-5" id="tour-section">
				<div class="card-header w-100 d-flex align-items-center justify-content-between">
					<span>Tour List</span> 
					<small>Manage your Tours</small>
				</div>
				<div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tour Name</th>
                            <th scope="col">Checkin Date</th>
                            <th scope="col">Checkout Date</th>
                            <th class="text-center" scope="col">Guest & Room</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>Cox's Bazar</td>
                                <td>26 june 2023</td>
                                <td>29 june 2023</td>
                                <td class="text-center">2 & 1</td>
                            </tr>
                            
                        </tbody>
                    </table>
				</div>
			</div>
			<div class="card mt-5" id="visa-section">
				<div class="card-header w-100 d-flex align-items-center justify-content-between">
					<span>Visa List</span> 
					<small>Manage your Visa</small>
				</div>
				<div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Country Name</th>
                            <th scope="col">Date of Entry</th>
                            <th scope="col">Date of Exit</th>
                            <th class="text-center" scope="col">Traveller</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>India</td>
                                <td>25 june 2023</td>
                                <td>28 june 2023</td>
                                <td class="text-center">2</td>
                            </tr>
                            <tr>
                               <td scope="row">2</td>
                                <td>United State</td>
                                <td>26 june 2023</td>
                                <td>29 june 2023</td>
                                <td class="text-center">3</td>
                            </tr>
                            <tr>
                               <td scope="row">3</td>
                                <td>Dubai</td>
                                <td>26 june 2023</td>
                                <td>29 june 2023</td>
                                <td class="text-center">4</td>
                            </tr>
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>
</div>

@include('layout.frontend.footer')
