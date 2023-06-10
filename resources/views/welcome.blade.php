<h1>Test</h1>

    @foreach($student_name as $value) 
        {{ $value }} <br>
    @endforeach

    @for($i=1;$i<=10;$i++)
        {{ $i.' ' }}
    @endfor