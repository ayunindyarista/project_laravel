
  <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/Dashboard">Dashboard</a></li>
                    </ul>
                  </li>
                  <!--
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu"> -->
                      <!--
                      <li><a><i class="fa fa-edit"></i> Master <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="Form">Form Validation</a></li>
                        <li><a href="CategoriesCreate">Form Categori</a></li>
                        <li><a href="CustomerCreate">Form Customer</a></li>
                        <li><a href="ProductCreate">Form Product</a></li>
                        <li><a href="UserCreate">Form User</a></li>
                      </ul>

                      <li><a><i class="fa fa-edit"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="#">Form Sales</a></li>
                        <li><a href="#">Form Detil Sales</a></li>
                      </ul>
                    -->
                    <!--
                    </ul>
                  </li> -->
                  <li><a href="/SalesDetailCreate"><i class="fa fa-desktop"></i> Poin Of Sales</span></a>
                  </li>
                  
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a><i class="fa fa-table"></i> Tabel Master <span class="fa fa-chevron-down"></span></a>
                       <ul class="nav child_menu">
                        <!--
                         <li><a href="CategoriesIndex">Tabel Index Categories</a></li>
                         <li><a href="CustomerIndex">Tabel Index Customer</a></li>
                         <li><a href="ProductIndex">Tabel Index Produk</a></li>
                         <li><a href="UserIndex">Tabel Index User</a></li>
                         -->
                         <li><a href="{{ url('/CategoriesIndex') }}">Tabel Index Categories</a></li>
                         <li><a href="{{ url('/CustomerIndex') }}">Tabel Index Customer</a></li>
                         <li><a href="{{ url('/ProductIndex') }}">Tabel Index Produk</a></li>
                         <li><a href="{{ url('/UserIndex') }}">Tabel Index User</a></li>
                       
                       </ul>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->