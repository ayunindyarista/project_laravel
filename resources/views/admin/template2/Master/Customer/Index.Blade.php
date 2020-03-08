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
                            <a href="CustomerEdit{{ $c->CUSTOMER_ID }}" class="btn btn-success">Edit</a>
                            <a href="CustomerDestroy{{ $c->CUSTOMER_ID }}" class="btn btn-danger">Delete</a>
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