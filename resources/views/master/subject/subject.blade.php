@extends('layouts.app')

@section('content')

<section class="s-space-bottom-full bg-accent-shadow-body">
            <div class="container">
         
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                        <div class="gradient-wrapper item-mb">
                            <div class="gradient-title">
                                <h2>Add Subjects</h2>
                            </div>
                            <div class="input-layout1 gradient-padding">
                               
                                <div class="section-title-left-dark child-size-xl title-bar item-mb">
                                    <h3>Add Subjects Here</h3>
                                </div> 
                                    <form method="POST" id="subjectfrm" action="{{ url('subject') }}">
                                    <input type="button" id="addRow" value="Add Row">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Subject ID</th>
                                                <th>Subject Name</th>
                                                <th>Method</th>
                                                <th>Needs</th>
                                                <th>Credits</th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <br>
                            <center>									
							    <button class="default-big-btn" type="submit" value="Submit">Submit</button>
                                <button class="default-big-btn form-cancel" type="submit" value="">Cancel</button>		
                            </center>
   
                                    
                            </div>
                        </div>
         
                  
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <div class="sidebar-item-box">
                            <div class="gradient-wrapper">
                                <div class="gradient-title">
                                    <h3>Search Subject Details</h3>
                                </div>
                                <ul class="sidebar-seller-information">
									   <li><center>
                                       Enter Subject ID/Name</br>
									   <input type="text" id="search_class_room"/>
									   </br>
									   <a href="#" class="btn btn-default">
									   <i class="fa fa-search" aria-hidden="true"></i>Search
									   </a></center>
									   
                                   
                                
                                 
                                </ul>
                            </div>
                        </div>
                    
                       
                    </div>
                </div>
            </div>
        </section>


@endsection