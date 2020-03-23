@extends('admin/template2/Admin2')
@section('konten')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Index User</h3>
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
                      <li><a href="/UserCreate" class="btn btn-primary">Tambahkan Data</a>
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
                          <th> # </th>
                          <th>User Id</th>
                          <th>Fist Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Password</th>
                          <th>Job Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($user as $u)
                        <tr>
                          <td scope="row">{{ $loop->iteration }}</td>
                          <td>{{ $u -> USER_ID }}</td>
                          <td>{{ $u -> FIRST_NAME }}</td>
                          <td>{{ $u -> LAST_NAME }}</td>
                          <td>{{ $u -> EMAIL }}</td>
                          <td>{{ $u -> PHONE }}</td>
                          <td>{{ $u -> PASSWORD }}</td>
                          <td>{{ $u -> JOB_STATUS }}</td>
                          <td>
                            <a href="/UserEdit{{ $u->USER_ID }}" class="btn btn-success">Edit</a>
                            <a href="/UserDestroy{{ $u->USER_ID }}" class="btn btn-danger">Delete</a>
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