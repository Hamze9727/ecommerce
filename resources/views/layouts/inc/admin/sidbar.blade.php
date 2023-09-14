 <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <ul class="nav">
         <li class="nav-item">
             <a class="nav-link" href="index.html">

                 <span class="menu-title">Dashboard</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                 aria-controls="ui-basic">
                 <i class="mdi mdi-circle-outline menu-icon"></i>
                 <span class="menu-title">UI Elements</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="ui-basic">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                     <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                     </li>
                 </ul>
             </div>
         </li>

         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#category" aria-expanded="false"
                 aria-controls="category">
                 <i class="mdi mdi-plus"></i>
                 <span class="menu-title">category</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="category">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category/create') }}">add
                             category</a>
                     </li>
                     <li class="nav-item"> <a href="{{ url('admin/category') }}" class="nav-link"
                             href="view category">view
                             category</a>
                     </li>
                 </ul>
             </div>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="{{ url('admin/sliders') }}">
                 <i class="mid mdi-view-carousel menu-icon"></i>
                 <span class="menu-title">Home slider</span>
             </a>
         </li>

         <li class="nav-item"> <a class="nav-link" href="{{ url('admin/Brand') }}">
                 <i class="mdi mdi-view-headline menu-icon"></i>
                 <span class="menu-title">brands</span>

         </li>
         <li class="nav-item"> <a class="nav-link" href="{{ url('admin/colors') }}">
                 <i class="mdi mdi-view-headline menu-icon"></i>
                 <span class="menu-title">colors</span>

         </li>

         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#products" aria-expanded="false"
                 aria-controls="products">

                 <i class="mdi mdi-plus-circle menu-icon"></i>
                 <span class="menu-title">products</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="products">
                 <ul class="nav flex-column sub-menu">
                     <a class="nav-link" class="bi bi-bag-plus-fill" href="{{ url('admin/Products/create') }}">
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                             <path fill-rule="evenodd"
                                 d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z" />
                         </svg>
                         addproducts</a>
         </li>
         <li class="nav-item"> <a class="nav-link" href="{{ url('admin/Products') }}">products view</a>
         </li>
     </ul>
     </div>
     </li>
     </ul>
 </nav>


 {{-- <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Sales</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category/create') }}">ِAdd
                            Category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category') }}">View Category</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">Products</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/Products/create') }}">ِAdd
                            Products</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/Products') }}">View Products</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/Brand') }}">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Brands</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/colors') }}">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Colors</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">User </span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/sliders') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Home Slider</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Site Setting</span>
            </a>
        </li>
    </ul>
</nav>
 --}}
