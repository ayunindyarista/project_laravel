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
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
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
                          <td><a href="CategoriesEdit{{ $c->CATEGORY_ID }}" class="btn btn-success">Edit</a></td>
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