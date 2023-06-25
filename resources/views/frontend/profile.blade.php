@include('layout.frontend.header')


<div class="container mt-5">
    <div class="row pt-5">
		<div class="col-md-3 mt-4">
			<div class="card">
				<div class="card-header">Profile Info</div>
				<div class="user-profile-main">
					<div class="user-profile">
					<i class="fa-solid fa-user"></i>
					</div>
					<a href="#" class=" text-right"><i class="fa-regular fa-pen-to-square"></i> Edit</a> 
                </div>
				<div class="card-body">
					<ul class="nav nav-pills mb-3 d-flex flex-column gap-3" id="pills-tab" role="tablist">
					    <li>
							<a class="dropdown-item" href="#personal-section"><i class="fa-solid fa-user"></i> Personal Info</a>
						</li>
                        <li>
							<a class="dropdown-item" href="#travel-section"><i class="fa-regular fa-user"></i> Travelers</a>
						</li>
						<li>
							<a class="dropdown-item" href="#setting-section"><i class="fa-solid fa-gear"></i> Settings</a>
						</li>
						<li>
							<a class="dropdown-item" href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-9 mt-4">
		    <div class="card" id="personal-section">
				<div class="card-header w-100 d-flex align-items-center justify-content-between">
					<span>Profile</span> 
					<a href="{{ route('editprofile') }}" class=" text-right"><i class="fa-regular fa-pen-to-square"></i> Edit</a> 
				</div>
				<div class="card-body">
					<table role="table" class="table b-table" id="__BVID__264">

						<tbody role="rowgroup">
							<tr role="row" class="">
								<td role="cell" width="40%" class="user-field border-top-0">Name</td>
								<td role="cell" class="user-data border-top-0">
									N/A
								</td>
							</tr>
							<tr role="row" class="">
								<td role="cell" class="user-field">Gender</td>
								<td role="cell" class="user-data">Male</td>
							</tr>
							<tr role="row" class="">
								<td role="cell" class="user-field">Present Address</td>
								<td role="cell" class="user-data">N/A</td>
							</tr>
							<tr role="row" class="">
								<td role="cell" class="user-field">Permanent Address</td>
								<td role="cell" class="user-data">N/A</td>
							</tr>
							<tr role="row" class="">
								<td role="cell" class="user-field">Marital Status</td>
								<td role="cell" class="user-data">
									N/A
								</td>
							</tr>
							<tr role="row" class="">
								<td role="cell" class="user-field">Date of Birth</td>
								<td role="cell" class="user-data">
									N/A
								</td>
							</tr>
							<tr role="row" class="">
								<td role="cell" class="user-field">Passport Country</td>
								<td role="cell" class="user-data">
									Bangladesh
								</td>
							</tr>
							<tr role="row" class="">
								<td role="cell" class="user-field">Passport Number</td>
								<td role="cell" class="user-data">
									N/A
								</td>
							</tr>
							<tr role="row" class="">
								<td role="cell" class="user-field">Passport Expiry Date</td>
								<td role="cell" class="user-data">
									N/A
								</td>
							</tr>
							<tr role="row" class="">
								<td role="cell" class="user-field">National ID</td>
								<td role="cell" class="user-data">N/A</td>
							</tr>
							<tr role="row" class="">
								<td role="cell" class="user-field">Nationality</td>
								<td role="cell" class="user-data">
									Bangladesh
								</td>
							</tr>
							<tr role="row" class="">
								<td role="cell" class="user-field">Emergency Contact</td>
								<td role="cell" class="user-data">
									N/A
								</td>
							</tr>
							<tr role="row" class="">
								<td role="cell" class="user-field">Religion</td>
								<td role="cell" class="user-data">
									N/A
								</td>
							</tr>
							<tr role="row" class="">
								<td role="cell" class="user-field">Language Preference</td>
								<td role="cell" class="user-data">
									N/A
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="card mt-5" id="travel-section">
				<div class="card-header w-100 d-flex align-items-center justify-content-between">
					<span>Traveler Info</span> 
					<small>You have traveller</small>
				</div>
				<div class="card-body">
                    Rayantrip User <a href="#" class=" text-right" disabled>Primary Traveler</a> <br/>
                    {{$user_email}}
				</div>
			</div>
			<div class="card mt-5" id="setting-section">
				<div class="card-header w-100 d-flex align-items-center justify-content-between">
					<span>Settings</span> 
					<small>Manage your email address and password</small>
				</div>
				<div class="card-body">
					<h6>Basic information</h6>
					ID: rt0{{$user_id}} <br>
					Name: {{$user_name}} <br>
					Email: {{$user_email}} <br>
					Password: <a href="{{ route('editprofile') }}" class=" text-right">Chnage Password?</a>  <br>
				</div>
			</div>
		</div>
	</div>
</div>

@include('layout.frontend.footer')
