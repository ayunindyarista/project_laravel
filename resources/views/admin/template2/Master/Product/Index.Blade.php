@extends('admin/template2/Admin2')
@section('konten')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Index Product</h3>
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
                      <li><a href="ProductCreate" class="btn btn-primary">Tambahkan Data</a>
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
                          <th>Produk ID </th>
                          <th>Categories Name</th>
                          <th>Product Name</th>
                          <th>Product Price</th>
                          <th>Product Stok</th>
                          <th>Explanation</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($product as $p)
                        <tr>
                          <td scope="row">{{ $loop->iteration }}</td>
                          <td>{{ $p -> PRODUCT_ID }}</td>
                          <td>{{ $p -> CATEGORY_NAME }}</td>
                          <td>{{ $p -> PRODUCT_NAME }}</td>
                          <td>{{ $p -> PRODUCT_PRICE }}</td>
                          <td>{{ $p -> PRODUCT_STOCK }}</td>
                          <td>{{ $p -> EXPLANATION }}</td>
                          <td>
                            <a href="/ProductEdit{{ $p->PRODUCT_ID }}" class="btn btn-success">Edit</a>
                            <a href="/ProductDestroy{{ $p->PRODUCT_ID }}" class="btn btn-danger">Delete</a>
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