@extends('admin/template2/Admin2')
@section('konten')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Index Customer</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a href="/CustomerCreate" class="btn btn-primary">Tambahkan Data</a>
                      </li>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>ID Customer</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Street</th>
                          <th>City</th>
                          <th>State</th>
                          <th>Zip Code</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($customer as $c)
                        <tr>
                          <td scope="row">{{ $loop->iteration }}</td>
                          <td>{{ $c -> CUSTOMER_ID }}</td>
                          <td>{{ $c -> FIRST_NAME }}</td>
                          <td>{{ $c -> LAST_NAME }}</td>
                          <td>{{ $c -> PHONE }}</td>
                          <td>{{ $c -> EMAIL }}</td>
                          <td>{{ $c -> STREET }}</td>
                          <td>{{ $c -> CITY }}</td>
                          <td>{{ $c -> STATE }}</td>
                          <td>{{ $c -> ZIP_CODE }}</td>
                          <td>
                            <!-- Button trigger modal EDIT -->
                          
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#EditModal{{ $c->CUSTOMER_ID }}">
                              Edit
                            </button>
                      
                            <!-- /Button trigger modal -->
                            
                            <!-- Modal -->
                              <div class="modal fade" id="EditModal{{ $c->CUSTOMER_ID }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <!-- Modal Content -->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Customer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        
                                            
                                        <form class="form-horizontal form-label-left" action="/CustomerUpdate" method="POST">
                      
                                          {{ csrf_field() }}

                                          <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customerid"> CUSTOMER ID <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="customerid" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                                              data-validate-words="2" name="customerid" value="{{ $c->CUSTOMER_ID }}" readonly>
                                            </div>
                                          </div>

                                          <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstname"> First Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="firstname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                                              data-validate-words="2" name="firstname" required="required" value="{{ $c->FIRST_NAME }}"
                                              type="text">
                                            </div>
                                          </div>

                                          <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lasttname"> Last Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="lastname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                                              data-validate-words="2" name="lastname" required="required" 
                                              type="text" value="{{ $c->LAST_NAME }}">
                                            </div>
                                          </div>

                                          <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone"> No Telpon <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="phone" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                                              data-validate-words="2" name="phone" required="required" 
                                              type="text" value-"{{ $c->PHONE }}">
                                            </div>
                                          </div>

                                          <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"> Email <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="email" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                                              data-validate-words="2" name="email" required="required" 
                                              type="email" value="{{ $c->EMAIL }}">
                                            </div>
                                          </div>

                                          <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="street"> Alamat <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="street" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                                              data-validate-words="2" name="street" required="required" 
                                              type="text" value="{{ $c->STREET }}">
                                            </div>
                                          </div>

                                          <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city"> Kota 
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="city" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                                              data-validate-words="2" name="city" " 
                                              type="text" value="{{ $c->CITY}}">
                                            </div>
                                          </div>

                                          <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state"> Negara 
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="state" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                                              data-validate-words="2" name="state" 
                                              type="text" value="{{ $c->STATE }}">
                                            </div>
                                          </div>

                                          <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="zipcode"> Kode Zip 
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="zipcode" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                                              data-validate-words="2" name="zipcode" 
                                              type="text" value="{{ $c->ZIP_CODE }}">
                                            </div>
                                          </div>

                                      </div>
                                      <div class="modal-footer">
                                      
                                           <button id="submit" value="SimpanData" type="submit" class="btn btn-primary">Update</button>
                                       
                                        <!--<button type="submit" class="btn btn-danger" name="" data-dismiss="modal" onClick="formSubmit()">Delete</button>-->
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                        
                                      </div>
                                      </form>
                                    </div>

                                </div>
                              </div>
                            <!-- /Modal -->

                            <!-- Button trigger modal DELETE -->
                          
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteModal{{ $c->CUSTOMER_ID }}">
                              Delete
                            </button>
                      
                            <!-- /Button trigger modal -->

                            <!-- Modal -->
                              <div class="modal fade" id="DeleteModal{{ $c->CUSTOMER_ID }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <!-- Modal Content -->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Customer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        
                                        {{ csrf_field() }}
                                        
                                        <!--
                                        {{ method_field('DELETE') }}
                                      -->
                                        Apakah Anda Yakin Ingin Menghapus?
                                      </div>
                                      <div class="modal-footer">
                                      
                                        <a href="/CustomerDestroy{{ $c->CUSTOMER_ID }}">
                                          <button type="button" class="btn btn-danger" data-dismiss"modal">
                                            Delete
                                          </button>
                                        </a>
                                        <!--<button type="submit" class="btn btn-danger" name="" data-dismiss="modal" onClick="formSubmit()">Delete</button>-->
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        
                                      </div>
                                    </div>

                                </div>
                              </div>
                            <!-- /Modal -->


                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /page content -->
        @endsection