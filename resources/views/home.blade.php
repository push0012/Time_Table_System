@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Dashboard</h1></div>

                <div class="card-body">
                    <div class="container justify-content-center">
                        <div class="row justify-content-center">
                            <div class="col-md-6 dash">
                                <a href="{{ url('classroom') }}" class="linkdash">
                                    <i class="fas fa-chalkboard fa-5x"></i><br>
                                    <span class="badge badge-secondary names">Classroom</span>
                                </a>
                            </div>

                            <div class="col-md-6 dash">
                                <a href="{{ url('course') }}" class="linkdash">
                                    <i class="fas fa-award fa-5x"></i><br>
                                    <span class="badge badge-secondary names">Course</span>
                                </a>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 dash">
                                <a href="{{ url('subject') }}" class="linkdash">
                                    <i class="fas fa-laptop-code fa-5x"></i><br>
                                    <span class="badge badge-secondary names">Subject</span>
                                </a>
                            </div>
                            <div class="col-md-6 dash">
                                <a href="{{ url('lecturer') }}" class="linkdash">
                                    <i class="fas fa-chalkboard-teacher fa-5x"></i><br>
                                    <span class="badge badge-secondary names">Lecturer</span>
                                </a>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 dash">
                                <a href="{{ url('course_subject') }}" class="linkdash">
                                    <i class="fas fa-shapes fa-5x"></i><br>
                                    <span class="badge badge-secondary names">Semester Plan</span>
                                </a>
                            </div>

                            <div class="col-md-6 dash">
                                <a href="{{ url('course') }}" class="linkdash">
                                    <i class="fas fa-calendar-alt fa-5x"></i><br>
                                    <span class="badge badge-secondary names">Timetable</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
