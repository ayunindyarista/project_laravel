@extends('admin/template2/Admin2')
@section('konten')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Index Category</h3>
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

                      <<li><a href="/CategoriesCreate" class="btn btn-primary">Tambahkan Data</a>
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
                          <th>Categories Id</th>
                          <th>Categories Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($categories as $c)
                        <tr>
                          <td>{{ $c -> CATEGORY_ID }}</td>
                          <td>{{ $c -> CATEGORY_NAME }}</td>
                          <td>
                            
                            <!-- Button trigger modal EDIT -->
                          
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#EditModal{{ $c->CATEGORY_ID }}">
                              Edit
                            </button>
                      
                            <!-- /Button trigger modal -->
                            
                            <!-- Modal -->
                              <div class="modal fade" id="EditModal{{ $c->CATEGORY_ID }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <!-- Modal Content -->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Categories</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        
                                            
                                              <form class="form-horizontal form-label-left" action="/CategoriesUpdate" method="POST">
                                                
                                                {{ csrf_field() }}

                                                
                                                <div class="item form-group">
                                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoriesid"> Categories Id </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                     <input id="categoriesid" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                                                        data-validate-words="2" name="categoriesid" value="{{ $c->CATEGORY_ID }}" readonly>
                                                      
                                                  </div>
                                                </div>
                                              

                                                <div class="item form-group">
                                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoriesname"> Categories Name <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input id="categoriesname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                                                    data-validate-words="2" name="categoriesname" value="{{ $c->CATEGORY_NAME }}" placeholder="Masukan Kategori" required="required" 
                                                    type="text">
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
                          
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteModal{{ $c->CATEGORY_ID }}">
                              Delete
                            </button>
                      
                            <!-- /Button trigger modal -->

                            <!-- Modal -->
                              <div class="modal fade" id="DeleteModal{{ $c->CATEGORY_ID }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <!-- Modal Content -->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Categories</h5>
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
                                      
                                        <a href="/CategoriesDestroy{{ $c->CATEGORY_ID }}">
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
   
        @endsection