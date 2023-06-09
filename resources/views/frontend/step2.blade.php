<!-- Step 2 Form -->
<form method="post" action="{{ route('postStep2') }}">
    @csrf
    <!-- Display Step 1 Data -->
    <p>Field 1: {{ $step1Data['from_city'] }}</p>
    <p>Field 1: {{ $step1Data['from_city_short_apt_name'] }}</p>
    <p>Field 1: {{ $step1Data['to_city'] }}</p>
    <p>Field 1: {{ $step1Data['to_city_short_apt_name'] }}</p>
    <p>Field 1: {{ $step1Data['dept_date_from'] }}</p>
    <p>Field 1: {{ $step1Data['trav_count'] }}</p>
    <p>Field 1: {{ $step1Data['fare_type'] }}</p>
    
    <!-- Step 2 Fields -->
    <input type="text" name="package" placeholder="package" required>
    <button type="submit">Next</button>
</form>