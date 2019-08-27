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
                                <h2>Add Lecturer Details</h2>
                            </div>
                            <div class="input-layout1 gradient-padding">
                               
                                <div class="section-title-left-dark child-size-xl title-bar item-mb">
                                    <h3>Add Lecturer</h3>
                                    
                                </div> 
								
				
                                
                                 
									<form action="">
									
										<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-mb-2"></div>
										
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-mb-4">
                                        <label class="col-form-label" >lecturer id</label>
                                        </div>
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                         <input type="text" id="lecturer_id" name="lecturer_id"></br></br>
										</div>
                                        
                                    </div>
										<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-mb-2"></div>
										
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-mb-4">
                                        <label class="col-form-label">Title</label>
                                        </div>
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
										<input type="text" id="titile" name="titile "></br></br>
										</div>
                                        
                                    </div>
	                                        	

										<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-mb-2"></div>
										
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-mb-4">
                                        <label class="col-form-label">Initial</label>
                                        </div>
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                       <input type="text" id="initial" name="initial"></br></br>
										</div>
                                        
										</div>
									
										
                                        
 										<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-mb-2"></div>
										
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-mb-4">
                                        <label class="col-form-label">First Name</label>
                                        </div>
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                         <input type="text" id="first_name" name="first_name"></br></br>
										</div>  
										</div>										


                                        
 										<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-mb-2"></div>
										
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-mb-4">
                                        <label class="col-form-label">Last name</label></div>  

                                       
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                        <input type="text" id="last_name" name="last_name "></br></br>
										</div>
										</div>
																			

                                        
 										<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-mb-2"></div>
										
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-mb-4">
                                        <label class="col-form-label">Department</label>
                                        </div>
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                         <input type="text" name="department" id="department"></br></br>
										</div> </div>   	
								
																	
									
									
                                  
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
                                    <h3>Search Lecturer</h3>
                                </div>
                                <ul class="sidebar-seller-information">
									   <li><center>
                                       Enter Lecturer ID/Name</br>
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