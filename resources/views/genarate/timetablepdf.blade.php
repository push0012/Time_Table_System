<html>
<header>
<style>
table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
}
td{
    padding-left: 5px;
    padding-right: 5px;
    padding-bottom: 2px;
    padding-top: 2px;
    
}
body{
    padding: 5px !important;
}
p{
    font-size:0.7em;
    font-weight: bold;
}
@page{
   
   margin-top: 0cm;
   margin-bottom: 0cm;
   margin-left:0.5cm;
}
.row1{
    padding-top: 0px;
    line-height:20px;
    margin: 0px 0px 0px 0px;
}
.row2{
    
    margin: 0px 0px 0px 0px;
}
</style>
</header>
<body>
<p style="padding-top:2px;" align="center">University of Vocational Technology (UNIVOTEC)</p>
<p align="center">Department of ICT</p>
<p align="center">{{ $course }}</p>
<p align="center">Batch - {{$dates->ac_year}}/{{ $dates->ac_year + 1}}</p>
<strong>TimeTable: Semester {{ $semester }}</strong>
<strong style="float:right;">From: {{ $dates->start_date }} To {{ $dates->end_date }}</strong>
    <table class="table" style="border:2px solid black; width:100%">
        <thead>
            <tr class="bg-success">
                <th style="margin-right:0px !important; width: 10px;" >Start Time</th>
                <th style="width:80px;">Monday</th>
                <th style="width:80px;">Tuesday</th>
                <th style="width:80px;">Wednesday</th>
                <th style="width:80px;">Thursday</th>
                <th style="width:80px;">Friday</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="margin-right:0px !important;">8.30- 9.30</td>
                <td>
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 0 && $timetable->sizeofday == 0)
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    @endif
                    @endforeach
                </td>

                <td>
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 1 && $timetable->sizeofday == 0)
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 2 && $timetable->sizeofday == 0)
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 3 && $timetable->sizeofday == 0)
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 4 && $timetable->sizeofday == 0)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
            </tr>


            <tr>
                <td>9.30 - 10.30</td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 0 && $timetable->sizeofday == 1)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >

                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 1 && $timetable->sizeofday == 1)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 2 && $timetable->sizeofday == 1)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 3 && $timetable->sizeofday == 1)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 4 && $timetable->sizeofday == 1)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>10.30 - 11.30</td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 0 && $timetable->sizeofday == 2)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 1 && $timetable->sizeofday == 2)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 2 && $timetable->sizeofday == 2)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 3 && $timetable->sizeofday == 2)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 4 && $timetable->sizeofday == 2)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>11.30 - 12.30</td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 0 && $timetable->sizeofday == 3)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 1 && $timetable->sizeofday == 3)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 2 && $timetable->sizeofday == 3)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 3 && $timetable->sizeofday == 3)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 4 && $timetable->sizeofday == 3)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
            </tr>
            <tr class="bg-dark text-white" align="center" >
                <td align="left">12.30 - 1.30</td>
                <td>B</td>
                <td>R</td>
                <td>E</td>
                <td>A</td>
                <td>K</td>
                
            </tr>
            <tr>
                <td>1.30 - 2.30</td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 0 && $timetable->sizeofday == 5)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 1 && $timetable->sizeofday == 5)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 2 && $timetable->sizeofday == 5)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 3 && $timetable->sizeofday == 5)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 4 && $timetable->sizeofday == 5)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>2.30 - 3.30</td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 0 && $timetable->sizeofday == 6)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 1 && $timetable->sizeofday == 6)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 2 && $timetable->sizeofday == 6)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 3 && $timetable->sizeofday == 6)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 4 && $timetable->sizeofday == 6)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>3.30 - 4.30</td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 0 && $timetable->sizeofday == 7)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 1 && $timetable->sizeofday == 7)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 2 && $timetable->sizeofday == 7)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 3 && $timetable->sizeofday == 7)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
                <td >
                    @foreach($timetables as $timetable)
                    @if ($timetable->dayofweek == 4 && $timetable->sizeofday == 7)
                    
                    <p class="row1">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                    <p class="row2">({{$timetable->short_name }} )  {{$timetable->classroom_name }} - {{$timetable->location }}</p>
                    
                    @endif
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>