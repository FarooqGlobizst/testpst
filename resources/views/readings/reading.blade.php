<table width="90%" align="center">
    <thead class="table table-bordered table-light">
        <tr>
          <th>#</th>
          <th>Account Number</th>
          <th>Meter Number</th>
          <th>Consumer Name</th>
          <th>Area</th>
          <th>Meter Location</th>
          <th>Meter Type</th>
          <th>Obstacle Code</th>
          <th>Reading (sm3)</th>
          <th>Actual CF</th>
          <th>Contractual CF</th>
          <th>Current CF Variant</th>
          <th>CF Variant 1</th>
          <th>CF Variant 2</th>
          <th>CF Variant 3</th>
          <th>Average 3 Month Consumption</th>
          <th>MMBTU (sm3)</th>
          <th>Issue Code</th>
          <th>Image</th>
          <th>Trend</th>
          <th>Supervisor</th>
          <th>Superuser / Final Approver</th>
        </tr>
      </thead>
    @foreach ($readings as $reading)
    <tr>
        <td>{{ $reading->id }}</td>
        <td>{{ $reading->meter->consumer['consumer_number'] }}</td>
        <td>{{ $reading->meter_id }}</td>
        <td>{{ $reading->meter->consumer['consumer_name'] }}</td>
        <td>{{ $reading->meter->consumer['area_code'] }}</td>
        <td>{{ $reading->meter['meter_location_id'] }}</td>
        <td>{{ $reading->meter['meter_type'] }}</td>
        <td>{{ $reading->obstacle_code_id }}</td>
        <td>{{ $reading->reading }}</td>
        @if ($reading->meter->z_factor == 0)
            <td>{{ 0 }}</td>
        @else
        <td>{{ $reading->meter->cf_factor / $reading->meter->z_factor }}</td>
        @endif
        
        
    </tr>

    
    @endforeach
</table>

      
    {!! $readings->links() !!}
      
        
