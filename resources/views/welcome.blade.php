<h1>Test</h1>

@forelse($student_name as $value) 
    {!! $value !!} <br>
    <!-- {{ $value }} <br> -->
@empty
    Sorry! No result is found
@endforelse

<!-- @foreach($student_name as $value) 
    {{ $value }} <br>
@endforeach

@for($i=1;$i<=10;$i++)
    {{ $i.' ' }}
@endfor -->

<!-- @php
$i=10
@endphp

@if($i==10)
This is fine
@else
This is not fine
@endif -->