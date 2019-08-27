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
                                <h2>Add Class Rooms/Labs And Search Class Rooms/Labs</h2>
                            </div>
                            <div class="input-layout1 gradient-padding">
                               
                                <div class="section-title-left-dark child-size-xl title-bar item-mb">
                                    <h3>Add Class Room and Lab Details:</h3>
                                    
                                </div> 
								
				
                                
                                 
									<form action="">
									
										<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-mb-2"></div>
										
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-mb-4">
                                        <label class="col-form-label">Class Room ID </label>
                                        </div>
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                         <input type="text" name="classroom_id " id="classroom_id"/></br></br>
										</div>
                                        
                                    </div>
									
									
										<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-mb-2"></div>
										
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-mb-4">
                                        <label class="col-form-label">Name  </label>
                                        </div>
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                         <input type="text" name="classroom_name" id="classroom_name" placeholder="classroomname" /></br></br>
										</div>
                                        
                                    </div>									
                                        
                                    
									
									
										<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-mb-2"></div>
										
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-mb-4">
                                        <label class="col-form-label">Location</label>
                                        </div>
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                         <input type="text" name="location" id="location" placeholder="location" /></br></br>
										</div>
                                        
                                    </div>		

										<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-mb-2"></div>
										
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-mb-4">
                                        <label class="col-form-label">Student Capacity</label>
                                        </div>
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                         <input type="text" name="student_capacity" id="student_capacity" placeholder="student_capacity" /></br></br>
										</div>
                                        
                                    </div>		

										<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-mb-2"></div>
										
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-mb-4">
                                        <label class="form-check-label" for="formCheck-1" >Lab</label>
                                        </div>
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                         <input class="form-check-input" type="checkbox" id="lab" name="lab"></br></br>
										</div>
                                        
                                    </div>	


										<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-mb-2"></div>
										
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-mb-4">
                                        <label class="form-check-label" for="formCheck-1">Class Room</label>
                                        </div>
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                         <input class="form-check-input" type="checkbox" id="class_room" name="class_room"></br></br>
										</div>
                                        
                                    </div>	
<center>									
							<button class="default-big-btn" type="submit" value="Login">Submit</button>
                            <button class="default-big-btn form-cancel" type="submit" value="">Cancel</button>		
									
</center>
   
                                    
                            </div>
                        </div>
         
                  
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <div class="sidebar-item-box">
                            <div class="gradient-wrapper">
                                <div class="gradient-title">
                                    <h3>Search Class Room</h3>
                                </div>
                                <ul class="sidebar-seller-information">
									   <li><center>
                                       Enter Class Room ID</br>
									   <input type="text" id="search_class_room"/>
									   </br>
									   <a href="#" class="btn btn-default">
									   <i class="fa fa-search" aria-hidden="true"></i>Search
									   </a></center>
									   
                                    </li>
									   <li><center>
                                       Enter Lab ID</br>
									   <input type="text" id="search_class_room"/>
									   </br>
									   <a href="#" class="btn btn-default">
									   <i class="fa fa-search" aria-hidden="true"></i>Search
									   </a></center>
									   
                                    </li>
                                   
                                
                                 
                                </ul>
                            </div>
                        </div>
                    
                       
                    </div>
                </div>
            </div>
        </section>

        @endsection