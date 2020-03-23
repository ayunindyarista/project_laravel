@extends('admin/template2/Admin2')
@section('konten')
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Edit Product</h3>
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
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    @foreach($product as $p)
                    <form class="form-horizontal form-label-left" action="/ProductUpdate" method="POST">
                      
                      {{ csrf_field() }}

                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="productid"> Produk ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="productid" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                          data-validate-words="2" name="productid" placeholder="Masukan Nama Produk" required="required" 
                          type="text" value="{{ $p->PRODUCT_ID }}" readonly>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoriesid"> Categories Name </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="categoriesid" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                              data-validate-words="2" name="categoriesid" value="{{ $p->CATEGORY_ID }}" readonly>
                            
                       
                        </div>
                      </div>
                    

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="productname"> Produk Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="productname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                          data-validate-words="2" name="productname" placeholder="Masukan Nama Produk" required="required" 
                          type="text" value="{{ $p->PRODUCT_NAME }}">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="productprice"> Product Price <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                          data-validate-words="2" name="productprice" required="required" 
                          type="number" value="{{ $p->PRODUCT_PRICE }}">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="productstock"> Product Stok <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="productstock" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                          data-validate-words="2" name="productstock" required="required" 
                          type="number" value="{{ $p->PRODUCT_STOCK }}">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="explanation"> Explanation <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="resizable_textarea form-control" id="explanation" name="explanation" value="{{ $p->EXPLANATION }}"
                          placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out...">
                          </textarea>                       
                        </div>
                      </div>
                      

                      <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Cancel</button>
                            <button id="submit" value="SimpanData" type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                      </div>
        
                </div>
               
            </div>
              </div>
            </div>
                    </form>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>


            </div>
          </div>
        </div>
        <!-- end page contentc-->

        @endsection