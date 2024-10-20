<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:void(0)" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Fuel Station</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="javascript:void(0)" class="d-block"><?= $this->session->userdata('user') ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <?php
                if ($_SESSION['type'] == 'admin') {
                ?>
                    <li class="nav-item">
                        <a href="dashboard" class="nav-link<?= $page == 'dashboard' ? ' active' : '' ?>">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                <?php
                }
                ?>
                <li class="nav-item">
                    <a href="profile" class="nav-link<?= $page == 'profile' ? ' active' : '' ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            profile
                        </p>
                    </a>
                </li>
                <?php
                if ($_SESSION['type'] == 'admin') {
                ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link<?= $page == 'Masters' ? ' active' : '' ?>">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Masters
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="masters/vehicle" class="nav-link<?= $page == 'vehicle' ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Vehicle</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="masters/usertype" class="nav-link<?= $page == 'usertype' ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User Type</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="masters/user" class="nav-link<?= $page == 'user' ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="masters/item" class="nav-link<?= $page == 'item' ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Item</p>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="masters/nozzle" class="nav-link<?= $page == 'nozzle' ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Nozzle</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="masters/cashier" class="nav-link<?= $page == 'cashier' ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Cashier</p>
                                </a>
                            </li> -->
                        </ul>
                    </li>
                <?php
                }
                ?>
                <li class="nav-item">
                    <a href="order" class="nav-link<?= $page == 'order' ? ' active' : '' ?>">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Orders
                            <!-- <span class="right badge badge-danger">New</span> -->
                        </p>
                    </a>
                </li>
                <?php
                if ($_SESSION['type'] == 'admin') { ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Reports
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="reports/sale" class="nav-link<?= $page == 'sale report' ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sale Report</p>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="reports/report2" class="nav-link<?= $page == 'report2' ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>report2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/uplot.html" class="nav-link<?= $page == 'dashboard' ? ' active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>report3</p>
                                </a>
                            </li> -->
                        </ul>
                    </li>
                <?php
                }
                ?>
                <li class="nav-item">
                    <a href="logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>