@extends('layouts.app')

@section('content')

<section class="s-space-bottom-full bg-accent-shadow-body">
    <div class="container">
       
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="gradient-wrapper item-mb">
                    <div class="gradient-title">
                        <h2>Add Subjects</h2>
                    </div>
                    <div class="input-layout1 gradient-padding">
                     
                        <div class="section-title-left-dark child-size-xl title-bar item-mb">
                            <h3>Add Subjects Detail Plan Here</h3>
                        </div> 
                        <form id="subjectfrm" >
                            <input class="btn btn-outline-primary btn-sm" type="button" id="addSubject" value="Add Subject">
                            <input class="btn btn-outline-danger btn-sm" type="button" id="removeSubject" value="Remove Row">
                                                        
                            <table id="subjectTable" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="max-width:15px !important;">Subject ID</th>
                                        <th style="min-width: 150px !important;">Subject Name</th>
                                        <th >Method</th>
                                        <th >Needs</th>
                                        <th >Credits</th>
                                    </tr>
                                </thead>
                            </table>
                            <br>
                            <center>									
                             <button class="default-big-btn" id="redditSubject" type="button" value="Submit">Submit</button>
                             <button class="default-big-btn form-cancel" type="button" value="">Cancel</button>		
                         </center>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 @endsection