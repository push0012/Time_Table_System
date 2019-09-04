@extends('layouts.app')

@section('content')
<section class="s-space-bottom-full bg-accent-shadow-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="gradient-wrapper item-mb">
                    <div class="gradient-title">
                        <h2>Class Time Table</h2>
                    </div>
                    <div class="input-layout1 gradient-padding">
                        <div class="section-title-left-dark child-size-xl title-bar item-mb">
                            <h3>Display Class Time Table</h3>
                        </div> 
                        <input class="btn btn-outline-primary btn-sm" type="button" id="addRow" value="Add Subject">
                        <div class="table-responsive">
                            <div class="container_top">
                                <div class="container">
                                <br>
                                
                                <table class="table" border="1" style="width:100%">
                                    <thead>
                                        <tr class="bg-success">
                                            <th style="width:35px;" >Start Time</th>
                                            <th style="width:80px;">Monday</th>
                                            <th style="width:80px;">Tuesday</th>
                                            <th style="width:80px;">Wednesday</th>
                                            <th style="width:80px;">Thursday</th>
                                            <th style="width:80px;">Friday</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr >
                                            <td>8.30</td>
                                            @foreach($timetables as $timetable)
                                            @if ($timetable->dayofweek == 0 && $timetable->sizeofday == 0)
                                            <td >
                                                <p style="line-height:15px; margin: 0px 0px 0px 0px;">{{ $timetable->subject_title }} ( {{$timetable->method}} )</p>
                                                <p style="line-height:15px;">{{$timetable->last_name }} ( {{$timetable->classroom_name }} )</p>
                                            </td>
                                            @endif
                                            @endforeach

                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>9.30</td>
                                            @foreach($timetables as $timetable)
                                            @if ($timetable->dayofweek == 0 && $timetable->sizeofday == 1)
                                            <td>
                                                <p>{{ $timetable->subject_title }} ( {{$timetable->method}} ) </p>
                                                <p>{{ $timetable->last_name }} ( {{ $timetable->classroom_name }} ) </p>
                                            </td>
                                            @endif
                                            @endforeach
                                            
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>10.30</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>11.30</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr class="bg-dark text-white">
                                            <td>12.30</td>
                                            <td>B</td>
                                            <td>R</td>
                                            <td>E</td>
                                            <td>A</td>
                                            <td>K</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>1.30</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.30</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.30</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection