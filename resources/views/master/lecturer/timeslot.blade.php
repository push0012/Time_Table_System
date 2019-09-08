@extends('layouts.app')
@section('title', 'Add Lecturer's Free Timeslots')
@section('content')
<section class="s-space-bottom-full bg-accent-shadow-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <div class="gradient-wrapper item-mb">
                    <div class="gradient-title">
                        <h2>Add Lecturer's Free Timeslots</h2>
                    </div>
                    <div class="input-layout1 gradient-padding">
                        <div class="section-title-left-dark child-size-xl title-bar item-mb">
                            <h3>Add Timeslots</h3>
                        </div> 
                        <div class="table-responsive">
                            <div class="container_top">
                                <div class="container">
                                    
                            <form action="{{ url('lecturer_free') }}" method="POST">
                                    <div class="form-group row">
                                        <label for="lecturer_id" class="col-md-2 col-form-label text-md-left">{{ __('Lecturer Name') }}</label>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                            <select class="form-control text-md-left" name="lecturer_id">
                                                <option value="0" disabled selected>Select Lecturer ...</option>
                                                @foreach($lecturers as $lecturer)
                                                <option value="{{$lecturer->lecturer_id}}">
                                                    {{$lecturer->title." ".$lecturer->last_name." ".$lecturer->initial}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div> 
                                    </div>
                                    <div class="form-group row">
                                        <label for="start_date" class="col-md-2 col-form-label text-md-left">{{ __('Start Date') }}</label>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                            <input class="form-control" type="date" name="start_date" id="start_date" />
                                        </div> 
                                    </div>
                                    <div class="form-group row">
                                        <label for="end_date" class="col-md-2 col-form-label text-md-left">{{ __('End Date') }}</label>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                            <input class="form-control" type="date" name="end_date" id="end_date" />
                                        </div> 
                                    </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Start Time</th>
                                            <th>Monday</th>
                                            <th>Tuesday</th>
                                            <th>Wednesday</th>
                                            <th>Thursday</th>
                                            <th>Friday</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>8.30</td>
                                            <td><input type="checkbox" class="radio" value="1" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="9" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="17" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="25" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="33" name="free_time[]" /></td>
                                        </tr>
                                        <tr>
                                            <td>9.30</td>
                                            <td><input type="checkbox" class="radio" value="2" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="10" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="18" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="26" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="34" name="free_time[]" /></td>
                                        </tr>
                                        <tr>
                                            <td>10.30</td>
                                            <td><input type="checkbox" class="radio" value="3" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="11" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="19" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="27" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="35" name="free_time[]" /></td>
                                        </tr>
                                        <tr>
                                            <td>11.30</td>
                                            <td><input type="checkbox" class="radio" value="4" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="12" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="20" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="28" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="36" name="free_time[]" /></td>
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
                                            <td><input type="checkbox" class="radio" value="6" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="14" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="22" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="30" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="38" name="free_time[]" /></td>
                                        </tr>
                                        <tr>
                                            <td>2.30</td>
                                            <td><input type="checkbox" class="radio" value="7" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="15" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="23" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="31" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="39" name="free_time[]" /></td>
                                        </tr>
                                        <tr>
                                            <td>3.30</td>
                                            <td><input type="checkbox" class="radio" value="8" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="16" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="24" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="32" name="free_time[]" /></td>
                                            <td><input type="checkbox" class="radio" value="40" name="free_time[]" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <center>
                                <input class="default-big-btn" type="submit" value="Submit">
                                <button class="default-big-btn form-cancel" type="reset" value="reset">Cancel</button>
                            </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection