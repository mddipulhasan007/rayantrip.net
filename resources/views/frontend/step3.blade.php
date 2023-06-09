<!-- Step 3 Form -->
<form method="post" action="{{ route('postStep3') }}">
    @csrf
    <!-- Display Step 1 Data -->
    <p>Field 1: {{ $step1Data['from_city'] }}</p>
    <p>Field 1: {{ $step1Data['from_city_short_apt_name'] }}</p>
    <p>Field 1: {{ $step1Data['to_city'] }}</p>
    <p>Field 1: {{ $step1Data['to_city_short_apt_name'] }}</p>
    <p>Field 1: {{ $step1Data['dept_date_from'] }}</p>
    <p>Field 1: {{ $step1Data['trav_count'] }}</p>
    <p>Field 1: {{ $step1Data['fare_type'] }}</p>
    <p>Field 1: {{ $step2Data['package'] }}</p>
    
    <!-- Step 3 Fields -->
    <input type="hidden" name="from_city" value="{{ $step1Data['from_city'] }}">
    <input type="hidden" name="from_city_short_apt_name" value="{{ $step1Data['from_city_short_apt_name'] }}">
    <input type="hidden" name="to_city" value="{{ $step1Data['to_city'] }}">
    <input type="hidden" name="to_city_short_apt_name" value="{{ $step1Data['to_city_short_apt_name'] }}">
    <input type="hidden" name="dept_date_from" value="{{ $step1Data['dept_date_from'] }}">
    <input type="hidden" name="trav_count" value="{{ $step1Data['trav_count'] }}">
    <input type="hidden" name="fare_type" value="{{ $step1Data['fare_type'] }}">
    <input type="hidden" name="package" value="{{ $step2Data['package'] }}">

    <input type="text" name="total_price" placeholder="total price" required>
    <button type="submit">Place Booking</button>
</form>