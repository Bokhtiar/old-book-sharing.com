<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{ route('admin.dashboard') }}">
                        <!-- <img src="assets/images/logo.png" alt="" /> --><span>{{ Auth::user()->name }}</span>
                    </a></div>
                <li class="label">Main</li>
                <li><a class="" href="{{ route('admin.dashboard') }}"><i class="ti-home"></i>
                        Dashboard </span></a>
                </li>

                <li><a class="" href="{{ route('admin.user') }}"><i class="ti-home"></i>
                        Users </span></a>
                </li>

                <li>
                    <a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Category <span
                            class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="@route('admin.category.index')">All Category</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Author <span
                            class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="@route('admin.author.index')">All Authors</a>
                        </li>
                        <li>
                            <a href="@route('admin.author.create')">Author create</a>
                        </li>
                    </ul>
                </li>

                <li><a href="@route('admin.location.index')"><i class="ti-calendar"></i> Locations </a></li>
                <li><a href="@route('admin.book.index')"><i class="ti-calendar"></i> Books </a></li>
                <li><a href="@route('admin.book.create')"><i class="ti-calendar"></i> Book create </a></li>


                <li><a href="@route('admin.user-post')"><i class="ti-user"></i> User Pending Post</a></li>
                <li><a href="{{ url('admin/order/orders') }}"><i class="ti-layout-grid2-alt"></i> Order List</a></li>
                <li><a href="@route('admin.message.index')"><i class="ti-user"></i> Message List</a></li>
                <li><a href="{{ url('admin/logout') }}"><i class="ti-close"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->
