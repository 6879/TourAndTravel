@extends('project/admin/inc/header')

                  @section('content')
			  <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            
                                            <li class="breadcrumb-item active">Members</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">All Members</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                       
                        <div class="row" id="app">
                            <div class="col-sm-12">
                                <div class="card-box">
                                   

                                    <table data-toggle="table"
                                           data-page-size="10"
                                           data-buttons-class="xs btn-light"
                                           data-pagination="true" class="table-bordered">
                                        <thead class="thead-light">
                                        <tr>
                                            
                                            <th data-field="id" data-switchable="false">ID</th>
                                            <th data-field="name">Name</th>
                                            <th data-field="email">Email</th>
                                            <th data-field="ref">Ref No</th>
                                            <th data-field="user-status" >Status</th>
                                            <th data-field="action" class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                      <tbody  v-for="(member, index) in members">
                                                        <tr v-if="(index % 10 == 0)">
                                            <td> @{{member.id}}</td>
                                            <td> @{{member.name}}</td>
                                            <td> @{{member.email}}</td>
                                            <td> @{{member.reference}}</td>
                                            <td v-if="member.status==1"> <span class="badge bg-soft-success text-success">Active</span></td>
                                            <td v-if="member.status==0"> <span class="badge bg-soft-danger text-danger">pending</span></td>
                                               
                                               <td v-if="member.status==0">
                                             
                                                    <button  type="button" class="btn btn-success waves-effect waves-light" v-on:click="editStatus(member.id)">Approve</button>                             
                                                    
                                                  </td>
 
                                               <td v-else>
                                             
                                                    <button type="button" class="btn btn-danger waves-effect waves-light" v-on:click="cancleMember(member.id)"><i class="mdi mdi-close"></i>Cancle</button>                             
                                                    
                                                  </td>
                                        </tr>
                                        </tbody>
                                        <tbody>
                                        
                                        <tr>
                                           
                                            
                                        </tr>
                                        </tbody>
                                    </table>

                                </div> <!-- end card-box -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                      


                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->
            </div>

       @stop
  
                               
