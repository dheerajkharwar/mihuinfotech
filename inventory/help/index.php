<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Documentation</title>
  <link rel='shortcut icon' href='../theme/images/favicon.ico' />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../theme/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../theme/css/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../theme/css/ionicons-2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../theme/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../theme/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="style.css">

  <!-- Lightbox -->
  <link rel="stylesheet" href="../theme/plugins/lightbox/ekko-lightbox.css">
</head>

<body class="skin-blue fixed" data-spy="scroll" data-target="#scrollspy">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <!-- Logo -->
      <a href="/inventory/help" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>D</b>DT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Inventory With POS</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li><a href="https://mihuinfotech.com" target="_blank">Mihu Infotech</a></li>

          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <div class="sidebar" id="scrollspy">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="nav sidebar-menu">
          <li class="header">TABLE OF CONTENTS</li>
          <li class="active"><a href="#introduction"><i class="fa fa-circle-o"></i> Introduction</a></li>

          <li><a href="#login"><i class="fa fa-circle-o"></i> Login</a></li>
          <li><a href="#dashboard"><i class="fa fa-circle-o"></i> Dashboard</a></li>
          <li><a href="#categorys"><i class="fa fa-circle-o"></i> Categories</a></li>
          <li><a href="#brands"><i class="fa fa-circle-o"></i> Brands</a></li>
          <li><a href="#items"><i class="fa fa-circle-o"></i> Items</a></li>
          <li><a href="#print_labels"><i class="fa fa-circle-o"></i> Print Labels</a></li>
          <li><a href="#suppliers"><i class="fa fa-circle-o"></i> Suppliers</a></li>
          <li><a href="#customers"><i class="fa fa-circle-o"></i> Customers</a></li>
          <li><a href="#purchase"><i class="fa fa-circle-o"></i> Purchases</a></li>
          <li><a href="#purchase_return"><i class="fa fa-circle-o"></i> Purchases Return</a></li>
          <li><a href="#sales"><i class="fa fa-circle-o"></i> Sales</a></li>
          <li><a href="#sales_return"><i class="fa fa-circle-o"></i> Sales Return</a></li>
          <li><a href="#expenses"><i class="fa fa-circle-o"></i> Expenses</a></li>
          <li><a href="#places"><i class="fa fa-circle-o"></i> Places</a></li>
          <li><a href="#users"><i class="fa fa-circle-o"></i> Users</a></li>

          <li><a href="#other_reports"><i class="fa fa-circle-o"></i> Reports</a></li>
          <li><a href="#sms"><i class="fa fa-circle-o"></i> SMS</a></li>
          <li><a href="#settings"><i class="fa fa-circle-o"></i> Settings</a></li>

          <!-- FAQ: Solutions -->
          <li><a href="#full_group_by"><i class="fa fa-circle-o"></i>Full Group BY Check</a></li>

          <li><a href="#support"><i class="fa fa-circle-o"></i> Support</a></li>


        </ul>
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <h1>
          &ldquo;Inventory with POS&rdquo; -Inventory Management System Documentation

        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Documentation</li>
        </ol>
      </div>

      <!-- Main content -->
      <div class="content body">

        <section id="start">
          <a href="#start">
            <hr>
          </a>
          <div class="row">
            <div class="col-sm-8">
              <p class="lead">
                <b>Thank you</b> for purchasing my application. If you have any questions that are beyond the scope of
                this help file, please feel free to email via my user page contact form <a target="_blank"
                  href="https://dizto.in">here</a>. Thank you so much!
              </p>
            </div>
            <div class="col-sm-4">
              <p class="prepend-top">
                <strong>
                  Created year: 2024<br>
                  Email: <a href="mailto: mihu.infotech@gmail.com">mihu.infotech@gmail.com</a><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Or <a href="mailto: dheerajkharwar101@gmail.com">dheerajkharwar101@gmail.com</a>
                </strong>
              </p>
            </div>
          </div>

        </section><!-- /#start -->
        <section id="introduction">
          <h2 class="page-header"><a href="#introduction">Introduction</a></h2>
          <p class="lead">
            <b>Inventory with POS</b> is a web application software user can track Items & Stock Items, Manage
            Suppliers, Manage Customers, Items Categories, Sales, Purchase, Manage users and get all the reports which
            are require to your office and many more features.
          </p>
        </section><!-- /#introduction -->

        <section id="login">
          <h2 class="page-header"><a href="#login">Login</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">

            <b>Login Screen:</b> <br />
          <table style="margin-left: 2%;">
            <b>
              <tr>
                <td>Username : </td>
                <td>admin</td>
              </tr>
              <tr>
                <td>Password :</td>
                <td>123456</td>
              </tr>
            </b>
          </table>
          <br />
          <p style="margin-left: 2%;">
            <b>Forgot Password:</b> <br />
            Login Screen -> Click on "I Forgot my Password link"
            <br />
            Here you have enter registered email id, after submitting you will get One Time Password(OTP). Please enter
            that OTP in next form for password change.
            </ul>
          </p>
          </p>



          </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/login.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/forgot_password.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <div class="callout callout-warning lead">
            <h4>Alert !</h4>
            <p>After login you need to change the admin password for security purpose.</p>
          </div>
        </section><!-- /#introduction -->


        <!-- ============================================================= -->

        <section id="dashboard">
          <h2 class="page-header"><a href="#dashboard">Dashboard</a></h2>
          <p class="lead">
          <h3>All in one desk.</h3>
          <p style="margin-left: 2%;">
          <ul>
            <li>Attractive dashboard</li>
            <li>View Shortcut links of most usable links</li>
            <ul>
              <li>POS Shortcut Link</li>
              <li>New Category</li>
              <li>New Item</li>
              <li>New Supplier</li>
              <li>New Customer</li>
              <li>New Purchase</li>
              <li>New Sales</li>
            </ul>
            <li>View Total number of Suppliers</li>
            <li>View Total number of Customers</li>
            <li>View Total number of Purchases</li>
            <li>View Total number of Sales</li>
            <li>View Expired Items List</li>
            <li>View stock alert</li>
            <li>View recently added items list.</li>
            <li>Bar Chart of Sales and Purchase</li>
            <li>Pie Chart of Sales Items %</li>
          </ul>
          </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/dashboard.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          </p>
        </section>


        <!-- ============================================================= -->
        <section id="categorys">
          <h2 class="page-header"><a href="#categorys">Categories</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">

            <b>New Category:</b> <br />
            Category -> New Category
            <br />
            Adding a Categorys it's a very easy task. Enter Category name, description(Optional field) and click on Save
            button.
            <br />
            <b>Categorys List:</b> <br />
            Categorys -> Categorys List
            <br />
            You can view the all the added categorys list and you can manage categorys list by Delete & Edit actions.
            </ul>
          </p>

          <p style="margin-left: 2%;"> <b>New Category :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/category-add.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Categories List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/categorys-list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>

          </p>
        </section>
        <!-- ============================================================= -->
        <section id="brands">
          <h2 class="page-header"><a href="#brands">Brands</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">

            <b>New Brand:</b> <br />
            Brand -> New Brand
            <br />
            Adding a Brands it's a very easy task. Enter Brand name, description(Optional field) and click on Save
            button.
            <br />
            <b>Brands List:</b> <br />
            Brands -> Brands List
            <br />
            You can view the all the added Brands list and you can manage Brands list by Delete & Edit actions.
            </ul>
          </p>

          <p style="margin-left: 2%;"> <b>New Brand :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/brand-add.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Brands List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/brands-list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>

          </p>
        </section>
        <!-- ============================================================= -->
        <section id="items">
          <h2 class="page-header"><a href="#items">Items</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">

            <b>New Item:</b> <br />
            Items -> New Item
            <br />
            Adding a Items it's a very easy task. Enter Item name, Select Category, Unit, SKU(Optional Field), Alert
            Quantity(Optional field), Select Image(Optional field),Purchase Price(Without Tax), Select Tax, Tax
            Type(Inclusive / Exclusive), Profit Margin(in Percentage %) , Available/Current Stock(+/-) (Optional Field),
            Add Lot number(Optional), Expired Date(Optional) and click on Save button.

            <br />
          <p style="margin-left: 2%;">
            <b>Items List:</b> <br />
            Items -> Items List
            <br />
            You can view the all the added Items list and you can manage Items list by Delete & Edit actions.
          </p>
          </ul>
          </p>

          <p style="margin-left: 2%;"> <b>New Item :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/item-add.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Items List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/items-list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>

          </p>
        </section>
        <!-- ============================================================= -->
        <section id="print_labels">
          <h2 class="page-header"><a href="#print_labels">Print Labels</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">

            <b>Item:</b> <br />
            Items -> Print Labels
            <br />
            Select Items From Search Box and Select Number of quantities of Labels and Click on Preview Button and take
            prints.

            <br />
          </p>

          <p style="margin-left: 2%;"> <b>Print Labels :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/print_labels.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>


          </p>
        </section>
        <!-- ============================================================= -->
        <section id="suppliers">
          <h2 class="page-header"><a href="#suppliers">Suppliers</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">

            <b>New Supplier:</b> <br />
            Suppliers -> New Supplier
            <br />
            Adding a Suppliers it's a very easy task. Enter Supplier name, Mobile, Phone, Email, GST Number, TAX Number,
            Opening Balance, Country(Optional field), State, City, Postcode(Optional field), Address(Optional field) and
            click on Save button.
            <br />

            <b>Suppliers List:</b> <br />
            Suppliers -> Suppliers List
            <br />
            You can view the all the added Suppliers list and you can manage Suppliers list by Delete & Edit actions.
            <br>
            * Due Payments <br>
            Suppliers -> Suppliers List -> Action Button -> Due Payments<br>
            * Return Due Payments <br>
            Suppliers -> Suppliers List -> Action Button -> Return Due Payments

            <br />
            <b>Import Suppliers:</b> <br />
            Suppliers -> Import Supplier
            <br />
          </p>

          <p style="margin-left: 2%;"> <b>New Supplier :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/supplier-add.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Suppliers List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/suppliers-list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Due Payments :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/supplier-due-payments.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Return Due Payments :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/supplier-return-due-payments.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Import Suppliers :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/import_suppliers.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>

          </p>
        </section>
        <!-- ============================================================= -->
        <section id="customers">
          <h2 class="page-header"><a href="#customers">Customers</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">

            <b>New Customer:</b> <br />
            Customers -> New Customer
            <br />
            Adding a Customers it's a very easy task. Enter Customer name, Mobile, Phone, Email, GST Number, TAX Number,
            Opening Balance, Country(Optional field), State, City, Postcode(Optional field), Address(Optional field) and
            click on Save button.
            <br />

            <b>Customers List:</b> <br />
            Customers -> Customers List
            <br />
            You can view the all the added Customers list and you can manage Customers list by Delete & Edit actions.
            <br>
            * Due Payments <br>
            Customers -> Customers List -> Action Button -> Due Payments<br>
            * Return Due Payments <br>
            Customers -> Customers List -> Action Button -> Return Due Payments

            <br />
            <b>Import Customers:</b> <br />
            Customers -> Import Customers
            <br />
          </p>

          <p style="margin-left: 2%;"> <b>New Customer :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/customer-add.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Customers List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/customers-list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Due Payments :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/customer-due-payments.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Return Due Payments :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/customer-return-due-payments.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Import Customers :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/import_customers.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          </p>
        </section>
        <!-- ============================================================= -->
        <section id="purchase">
          <h2 class="page-header"><a href="#purchase">Purchase</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">

            <b>New Purchase:</b> <br />
            Purchase -> New Purchase
          <ul>
            <li><b>New Purchase :</b> Creating or entering a Purchase information in inventory is a very easy task. You
              need to select date, Suppliers name from selection box (Also user can Instantly create Supplier), Purchase
              Status(Received / Pending / Ordered), and reference number(Optional field),
              and you need select the items from the Search Box, here you search item by item name, Barcode, Itemcode,
              after selecting item from search box, all other information will be shown in the same row, it includes
              Item name,Purchase quantity, purchase price, Tax, Discount, and Total amount and you select any number of
              items in purchase table.
              You also enter Other charges, Discount on All Items, Purchase Note and Purchase Payment Informations in
              signle form.</li>
            <li><b>Purchase Invoice :</b> Create the Purchase Invoice you can take the print or create PDF File.</li>
            <li><b>Barcode Print :</b> You will barcode list based item quantity, each item type have its group unique
              barcode/item code.</li>

          </ul>
          </p>
          <p style="margin-left: 2%;">
            <b>Purchases List:</b> <br />
            Purchase -> Purchase List
            <br />
            You can view the all the added Purchases list and you can Purchases list by Delete & Edit actions.
          </p>
          <p style="margin-left: 2%;">
            <b>Pay Purchases Payments:</b> <br />
            Purchase -> Purchase List -> Click on Action Button -> Click on Pay now
          </p>
          <p style="margin-left: 2%;">
            <b>View Purchases Payments:</b> <br />
            Purchase -> Purchase List -> Click on Action Button -> Click on View Payments
          </p>


          <p style="margin-left: 2%;"> <b>New Purchase :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/purchase-entry.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Purchases List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/purchases-list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Purchase Invoice :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/purchase-invoice.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Barcode Print :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/barcode-print.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Purchase Invoice Print :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/purchase-invoice-print.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Purchase Invoice PDF :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/purchase_invoice_pdf.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>

          <p style="margin-left: 2%;"> <b>Purchase Payments :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/purchase-payments.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Pay Purchase Payments:</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/pay-purchase-payments.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>


          </p>
        </section>
        <!-- ============================================================= -->
        <section id="purchase_return">
          <h2 class="page-header"><a href="#purchase_return">Purchase Return</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">

            <b>New Purchase Return:</b> <br />
            Purchase -> Purchase Return List -> Create New
          <ul>
            <li><b>New Purchase Return:</b> Creating or entering a Purchase Return information in inventory is a very
              easy task. You need to select date, Suppliers name from selection box (Also user can Instantly create
              Supplier), Purchase Return Status(Return / Cancel), and reference number(Optional field),
              and you need select the items from the Search Box, here you search item by item name, Barcode, Itemcode,
              after selecting item from search box, all other information will be shown in the same row, it includes
              Item name,Purchase quantity, purchase price, Tax, Discount, and Total amount and you select any number of
              items in purchase table.
              You also enter Other charges, Discount on All Items, Purchase Note and Purchase Payment Informations in
              signle form.</li>
            <li><b>Purchase Return Invoice :</b> Create the Purchase Invoice you can take the print or create PDF File.
            </li>


          </ul>
          </p>
          <p style="margin-left: 2%;">
            <b>Purchases Return List:</b> <br />
            Purchase -> Purchase Return List
            <br />
            You can view the all the added Purchases Returns list and you can Purchases Return list by Delete & Edit
            actions.
          </p>
          <p style="margin-left: 2%;">
            <b>Pay Purchases Return Payments:</b> <br />
            Purchase -> Purchase Return List -> Click on Action Button -> Click on Pay now
          </p>
          <p style="margin-left: 2%;">
            <b>View Purchases Return Payments:</b> <br />
            Purchase -> Purchase Return List -> Click on Action Button -> Click on View Payments
          </p>


          <p style="margin-left: 2%;"> <b>New Purchase Return:</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/purchase-return-entry.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Purchases Return List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/purchase-return-list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Purchase Return Invoice :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/purchase-return-invoice.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>

          <p style="margin-left: 2%;"> <b>Purchase Return Invoice Print :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/purchase-return-invoice-print.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Purchase Return Invoice PDF :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/purchase_return_invoice_pdf.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>

          <p style="margin-left: 2%;"> <b>Purchase Return Payments :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/purchase-return-payments.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Pay Purchase Return Payments:</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/pay-purchase-return-payments.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>


          </p>
        </section>

        <!-- ============================================================= -->
        <section id="sales">
          <h2 class="page-header"><a href="#sales">Sales</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">

            <b>New Sales:</b> <br />
            Sales -> POS
          <ul>
            <li>
              <b>POS Sales :</b>
              Easy version sales entry. Here you can sell to Specific or Walk-in Customer.
              <p>Select Items from Item Search box using Item name, Barcode or Item code.<br>
                Select Items From Right Side Box, Also given category wise search and Specific Item Wise search Box.<br>
                From Items List You can Increase or Decrese Item Quantities. On Total amount You Provide Discount on
                Overall sales.<br>
                Payments Can Be access with Cash Or Multiple Payments Oprions!</p>
            </li>
            <li><b>Send SMS :</b> If you want you can send the SMS to Existing/Saved Customer when Invoice Generate. SMS
              Template available in SMS -> SMS Templates menu bar. [Note: Walk-in Customer will receive any SMS]</li>

            <li><b>POS Invoice :</b> POS Formatted invoice.</li>

          </ul>
          </p>

          <p style="margin-left: 2%;">

            <b>New Sales:</b> <br />
            Sales -> New Sales
          <ul>
            <li>Creating or entering a Sales information in inventory is a very easy task. Select Customer,You need
              select the items from the table, where item name has the standard search box for items name, here you need
              to select item name, all other information will be shown in the same row, it includes HSN, available
              quantity, sales quantity,UQC,GST% and you select any number of items in purchase table and click on Save
              button.</li>
            <li><b>Send SMS :</b> If you want you can send the SMS to Existing/Saved Customer when Invoice Generate. SMS
              Template available in SMS -> SMS Templates menu bar. [Note: Walk-in Customer will receive any SMS]</li>
            <li><b>Sales Invoice :</b> Create the Sales Invoice you can take the print.</li>
            <li><b>POS Invoice :</b> You can print sales invoice in POS machine.</li>
            <li><b>Sales payments :</b> You will get Sales payments options</li>
          </ul>
          </p>
          <p style="margin-left: 2%;">
            <b>Sales List:</b> <br />
            Sales -> Sales List
            <br />
            You can view the all the added Sales list and you can Sales list by Delete & Edit actions.
          </p>
          <p style="margin-left: 2%;">
            <b>Pay Sales Payments:</b> <br />
            Sales -> Sales List -> Click on Action Button -> Click on Pay now
          </p>
          <p style="margin-left: 2%;">
            <b>View Sales Payments:</b> <br />
            Sales -> Sales List -> Click on Action Button -> Click on View Payments
          </p>
          <p style="margin-left: 2%;"> <b>POS :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/pos.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>POS Payment:</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/pos-payment.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>


          <p style="margin-left: 2%;"> <b>Detailed Sales Entry:</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sales-add.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Sales List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sales-list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Sales Invoice :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sales-invoice.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Sales Invoice Print :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sales-invoice-print.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Sales Invoice PDF :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sales_invoice_pdf.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>POS Invoice for Sales :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sales-pos-invoice.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Pay Sales Payments :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/pay-sales-payment.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>View Sales Payments :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/view-sales-payments.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>

          </p>
        </section>
        <!-- ============================================================= -->
        <section id="sales_return">
          <h2 class="page-header"><a href="#sales_return">Sales Return</a></h2>
          <p class="lead">

          <p style="margin-left: 2%;">

            <b>New Sales Return:</b> <br />
            Sales -> Sales Return List -> Create new
          <ul>
            <li>Creating or entering a Sales return information in inventory is a very easy task. Select Customer,You
              need select the items from the table, where item name has the standard search box for items name, here you
              need to select item name, all other information will be shown in the same row, available quantity, sales
              quantity,UQC,Tax and you select any number of items in purchase table and click on Save button.</li>
            <li><b>Send SMS :</b> If you want you can send the SMS to Existing/Saved Customer when Invoice Generate. SMS
              Template available in SMS -> SMS Templates menu bar. [Note: Walk-in Customer will receive any SMS]</li>
            <li><b>Sales Invoice :</b> Create the Sales Return Invoice you can take the print.</li>
            <li><b>POS Invoice :</b> You can print sales invoice in POS machine.</li>
            <li><b>Sales Return payments :</b> You will get Sales return payments options</li>
          </ul>
          </p>
          <p style="margin-left: 2%;">
            <b>Sales Return List:</b> <br />
            Sales -> Sales Return List
            <br />
            You can view the all the added Sales return list and you can Sales return list by Delete & Edit actions.
          </p>
          <p style="margin-left: 2%;">
            <b>Pay Sales Return Payments:</b> <br />
            Sales -> Sales Return List -> Click on Action Button -> Click on Pay now
          </p>
          <p style="margin-left: 2%;">
            <b>View Sales Payments:</b> <br />
            Sales -> Sales Return List -> Click on Action Button -> Click on View Payments
          </p>

          <p style="margin-left: 2%;"> <b>Detailed Sales Entry:</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sales-return-add.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Sales Return List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sales-return-list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Sales Return Invoice :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sales-return-invoice.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Sales Return Invoice Print :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sales-return-invoice-print.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Sales Return Invoice PDF :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sales_return_invoice_pdf.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>POS Invoice for Sales Return:</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sales-return-pos-invoice.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Pay Sales Payments :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/pay-sales-return-payment.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>View Sales Payments :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/view-sales-return-payments.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>

          </p>
        </section>
        <!-- ============================================================= -->
        <section id="expenses">
          <h2 class="page-header"><a href="#expenses">Expenses</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">

            <b>New Expense Category:</b> <br />
            Expense -> New Expense Category
            <br />
            Creating or entering a Expense Category information in inventory is a very easy task. Enter Category Name,
            Enter Description and click on Save button.
          </p>
          <p style="margin-left: 2%;">
            <b>Expense Category List:</b> <br />
            Expense -> Expense Category List
            <br />
            You can view the all the added Expense Category list and you can Sales list by Delete & Edit actions.
          <p style="margin-left: 2%;">
            <b>New Expense:</b> <br />
            Expense -> New Expense
            <br />
            Creating or entering a Expense information in inventory is a very easy task. Select Date, Select Category
            Name, enter Expense for, enter Amount, enter Reference no., enter Note and click on Save button.
          </p>
          <p style="margin-left: 2%;">
            <b>Expense List:</b> <br />
            Expense -> Expense List
            <br />
            You can view the all the added Expense list and you can Sales list by Delete & Edit actions.
          </p>

          <p style="margin-left: 2%;"> <b>New Expense Category :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/expense_category.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>

          <p style="margin-left: 2%;"> <b>Expense Category List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/expense_category_list.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>New Expense :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/expense_add.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Expense List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/expenses_list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>


          </p>
        </section>
        <!-- ============================================================= -->
        <section id="places">
          <h2 class="page-header"><a href="#places">Places</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">

            <b>New Country:</b> <br />
            Places -> New Country
            <br />
            Adding a Country it's a very easy task. Enter Country name and click on Save button.
            <br />
            <b>Country List:</b> <br />
            Places -> Country List
            <br />
            You can view the all the added Country list and you can manage Country list by Delete & Edit actions.
            <br />

            <b>New State:</b> <br />
            Places -> New State
            <br />
            Adding a State it's a very easy task. Enter State name, select country name and click on Save button.
            <br />
            <b>States List:</b> <br />
            Places -> States List
            <br />
            You can view the all the added State list and you can manage State list by Delete & Edit actions.
          </p>

          <p style="margin-left: 2%;"> <b>New Country :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/country-add.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Countries List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/countrys-list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>New State :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/state-add.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>States List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/states-list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>

          </p>
        </section>


        <!-- ============================================================= -->
        <section id="users">
          <h2 class="page-header"><a href="#users">Users</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">

            <b>Roles List:</b> <br />
            Users -> Roles List
            <br />
            You can view the all the added Roles list and you can manage Roles list by Delete & Edit actions.
            <br>
            <b>New Role:</b> <br />
            Users -> Roles List -> New Role
            <br />
            Adding a Role it's a very easy task. Enter Role name, Description(Optional field), Select Persmissions for
            that role and click on Save button.
            <br />

            <b>Users List:</b> <br />
            Settings -> Users List
            <br />
            You can view the all the added users list and you can manage users by status active and inactive
            operation(Enable or Disable Users).
            <br />
            <b>Create User:</b> <br />
            Settings -> Create User
            <br />
            Adding a User it's a very easy task. Enter user name, Mobile number, Email ID, Role(Admin/Sales/Purchase),
            enter password and confirm the password fields of the new user and click on Save button.
            <br />

          </p>

          <p style="margin-left: 2%;"> <b>Roles List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/roles_list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>New Role :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/create_role.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>New User :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/create_user.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Users List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/users_list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>

          </p>
        </section>
        <!-- ============================================================= -->
        <section id="other_reports">
          <h2 class="page-header"><a href="#other_reports">Reports</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">
            <b>Sales Report:</b> <br />
            Reports -> Sales Report
            <br />
          <ul>
            <li>Select from date, to date and customer name-> click on show button.</li>
            <li>In the same form it will shows all the required information</li>
            <li>You can export the report data into excel format.</li>
          </ul>
          <br />
          </p>
          <b>Sales Return Report:</b> <br />
          Reports -> Sales Return Report
          <br />
          <ul>
            <li>Select from date, to date and customer name-> click on show button.</li>
            <li>In the same form it will shows all the required information</li>
            <li>You can export the report data into excel format.</li>
          </ul>
          <br />
          </p>
          <p style="margin-left: 2%;">
            <b>Purchase Report:</b> <br />
            Reports -> Purchase Report
            <br />
          <ul>
            <li>Select from date, to date and Supplier name-> click on show button.</li>
            <li>In the same form it will shows all the required information</li>
            <li>You can export the report data into excel format.</li>
          </ul>
          <br />
          </p>
          <p style="margin-left: 2%;">
            <b>Purchase Return Report:</b> <br />
            Reports -> Purchase Return Report
            <br />
          <ul>
            <li>Select from date, to date and Supplier name-> click on show button.</li>
            <li>In the same form it will shows all the required information</li>
            <li>You can export the report data into excel format.</li>
          </ul>
          <br />
          </p>
          <p style="margin-left: 2%;">
            <b>Expense Report:</b> <br />
            Reports -> Expense Report
            <br />
          <ul>
            <li>Select from date, to date and Category name-> click on show button.</li>
            <li>In the same form it will shows all the required information</li>
            <li>You can export the report data into excel format.</li>
          </ul>
          <br />
          </p>
          <p style="margin-left: 2%;">
            <b>Profit & Loss Report:</b> <br />
            Reports -> Profit & Loss Report
            <br />
          </p>

          <p style="margin-left: 2%;">
            <b>Stock Report:</b> <br />
            Reports -> Stock Report Item Wise
            <br />
            <br />
            Reports -> Stock Report Brand Wise
            <br />
          </p>

          <p style="margin-left: 2%;">
            <b>Item Sales Report:</b> <br />
            Reports -> Item Sales Report
            <br />
          <ul>
            <li>Select from date, to date and Item name-> click on show button.</li>
            <li>In the same form it will shows all the required information</li>
            <li>You can export the report data into excel format.</li>
          </ul>
          <br />
          </p>

          <p style="margin-left: 2%;">
            <b>Purchase Payments Report:</b> <br />
            Reports -> Purchase Payments Report
            <br />
          <ul>
            <li>Select from date, to date and Supplier name-> click on show button.</li>
            <li>In the same form it will shows all the required information</li>
            <li>You can export the report data into excel format.</li>
          </ul>
          <br />
          </p>
          <p style="margin-left: 2%;">
            <b>Sales Payments Report:</b> <br />
            Reports -> Sales Payments Report
            <br />
          <ul>
            <li>Select from date, to date and Customer name-> click on show button.</li>
            <li>In the same form it will shows all the required information</li>
            <li>You can export the report data into excel format.</li>
          </ul>
          <br />
          </p>

          <p style="margin-left: 2%;">
            <b>Expired Items Report:</b> <br />
            Reports -> Expired Items Report
            <br />
          <ul>
            <li>Select from date and Item name-> click on show button.</li>
            <li>In the same form it will shows all the required information</li>
            <li>You can export the report data into excel format.</li>
          </ul>
          <br />
          </p>
          <p style="margin-left: 2%;"> <b>Report: Sales Report :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sales-report.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Report: Sales Return Report :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sales-return-report.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Report: Purchase Report :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/purchase-report.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Report: Purchase Return Report :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/purchase-return-report.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Report: Expense Report :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/expense-report.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Report: Profit & Loss Report :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/pl_report.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Report: Stock Report Item Wise :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/stock_report.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Report: Stock Report Brand Wise :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/stock_report_2.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>

          <p style="margin-left: 2%;"> <b>Report: Item Sales Report :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/item_sales_report.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>

          <p style="margin-left: 2%;"> <b>Report: Purchase Payments Report :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/purchase_payments_report.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Report: Sales Payments Report :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sales_payments_report.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>

          <p style="margin-left: 2%;"> <b>Report: Expired Items Report :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/expired_items_report.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>

          </p>
        </section>
        <!-- ============================================================= -->
        <section id="sms">
          <h2 class="page-header"><a href="#sms">SMS</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">
            <b>SMS API:</b> <br />
            SMS -> SMS API
            <br />
            You need create API or enter API details here, almost all API works in this application. URL Based API works
            great.
            You need to enter:
          <ol>
            <li>URL - SMS API url link that is web link.</li>
            <li>Mobile Key - You need key of the mobile number in api. Ex: mobile, mobiles, phone etc., depends on
              Service provider</li>
            <li>Message Key - You need key of the message text key.</li>
            <li>After that you can enter other API keys and values linke Auth Key, sender ID, route etc.</li>
          </ol>
          <div class="callout callout-warning lead">
            <h4>Note !</h4>
            <p>You need to active the status for sending the SMS in whole application else application will send the SMS
            </p>
          </div>
          <br />
          <b>SMS Templates:</b> <br />
          SMS -> SMS Templates
          <br />
          Current application added sales Template, you can edit this Template, and provided the keys for value.
          <br />
          <br />
          <b>Send SMS :</b> <br />
          SMS -> Send SMS
          <br />
          You can send message to any number of mobiles.
          You need to enter mobile number with comma.
          Ex: 999999999,8888888888,7777777777
          <br />
          <br />

          </p>

          <p style="margin-left: 2%;"> <b>SMS API :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sms_api.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>SMS Templates :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/sms_templates.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>

          <p style="margin-left: 2%;"> <b>Send SMS :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/send_sms.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>


          </p>
        </section>
        <!-- ============================================================= -->
        <section id="settings">
          <h2 class="page-header"><a href="#settings">Settings</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">
            <b>Company Profile:</b> <br />
            Settings -> Company Profile
            <br />
            You can update the company profile information's like Company name, Phone, Mobile, Email, GST Number, VAT
            Number, PAN Number, Bank Details, Website link, Country, State, Postcode,Address and Invoice Logo.
            <br />
            <b>Site Settings:</b> <br />
            Settings -> Site Settings
            <br />
            Site: Update Site Name, Timezone, Date Format, Time Format, Currency, Currency Symbol Placement & Site Logo.
            <br />
            Sales:
          <ol>
            <li>Update Default Sales Discount</li>
            <li>Enable to Disable the Paid amount and refund amount in invoice, (this features matters only for POS
              Invoice)</li>
            <li>Select Sales Invoice Formats</li>
            <li>Enter the Footer details of the sales Invoice</li>
          </ol>
          <br />

          Prefixes: Update Prefixes of the Auto Generate Codes.
          <br />
          <b>Tax :</b> <br />
          Settings -> Tax List
          <br />
          Tax Add: Add Tax Name & Tax Percentage.
          <br />
          Tax List: View Tax List also user can edit & delete it.

          <br />
          <b>Units :</b> <br />
          Settings -> Units List
          <br />
          Unit Add: Add Unit Name & Description(Optional Field).
          <br />
          Units List: View Units List also user can edit & delete it.

          <br />

          <b>Payment Types List :</b> <br />
          Settings -> Payment Types List
          <br />
          Payment Types Add: Add Payment Type Name
          <br />
          Payment Types List: View Payment Types List also user can edit & delete it.

          <br />

          <b>Currency List :</b> <br />
          Settings -> Currency List
          <br />
          Currency Add: Add Currency Name , Currency Code [Ex: USD, INR] (Optional), Currency Symbol (Dollar Symbol or
          Rupee Symbol Ex: $)
          <br />
          Currency List: View Currency List also user can edit & delete it.

          <br />


          <b>Change Password:</b> <br />
          Settings -> Change Password
          <br />
          Loged user can change the password. You need to enter current password, New password and confirm password
          fields and click save button.
          <br />

          <b>Database Updater:</b> <br />
          Settings -> Database Updater
          <br />
          You can update the database of application having the new updates.
          <br />
          <b>Database Backup:</b> <br />
          Settings -> Database Backup
          <br />
          By clicking on Database Backup icon/name you can able to download the database on you system.
          </p>

          <p style="margin-left: 2%;"> <b>Company Profile :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/company_profile.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Site Settings :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/site_settings1.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/site_settings2.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/site_settings3.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Tax Add :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/tax_add.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Tax List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/tax_list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Unit Add :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/unit_add.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Units List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/units_list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>

          <p style="margin-left: 2%;"> <b>Payment Types Add :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/payment_types_add.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Payment Types List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/payment_types_list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>

          <p style="margin-left: 2%;"> <b>Currency Add :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/currency_add.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Currency List :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/currency_list.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>

          <p style="margin-left: 2%;"> <b>Database Updater :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/db_update.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>
          <p style="margin-left: 2%;"> <b>Change Password :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/change_password.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>


          </p>
        </section>
        <!-- ============================================================= -->
        <section id="full_group_by">
          <h2 class="page-header"><a href="#full_group_by">Full Group By</a></h2>
          <p class="lead">
          <p style="margin-left: 2%;">

          <p style="margin-left: 2%;"> <b>Correct way :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/full_group_by_valid.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>


          <p style="margin-left: 2%;"> <b>Invalid way :</b> </p>
          <p style="margin-left: 2%;">
            <img src="screen-shots/full_group_by.png" height="80%" width="80%" style="border: 1px solid #27e1c7">
          </p>


          <p>
            <b>If it is FULL_GROUP_GROUP_BY exist, then we need to disable it:</b> <br />
            Please Enter the given command in SQL.
            <br />
            SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
            <br />
            <br />

            NOTE:
          <ul>
            <li>If this command asking Permission of the Super Admin, then you should contact your hosting privider or
              Super admin of your server to execute this command.</li>
            <li>If you are on Local system, after entering command, you should restart your Server(Apache & MySQL).</li>
          </ul>

          </p>

          <p style="margin-left: 2%;">
            <img src="screen-shots/full_group_by_command.png" height="80%" width="80%"
              style="border: 1px solid #27e1c7">
          </p>

          <br />



          </p>
        </section>
        <!-- ============================================================= -->
        <!-- ============================================================= -->
        <section id="support">
          <h2 class="page-header"><a href="#support">Support</a></h2>
          <p class="lead">
            If any issues or product customization you can email us on Email: <a
              href="emailto: mihu.infotech@gmail.com ">mihu.infotech@gmail.com</a> Or <a
              href="mailto: dheerajkharwar101@gmail.com">dheerajkharwar101@gmail.com</a>.
          </p>

          <p class="lead">
            <br />
            Thanks for showing interest in Inventory With POS.<br />
            Mihu Infotech


          </p>
        </section>



        <!-- ============================================================= -->

      </div><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.*
      </div>
      <strong>Year: 2024 Mihu Infotech
    </footer>


    <!-- <div class="control-sidebar-bg"></div> -->

  </div><!-- ./wrapper -->

  <!-- jQuery 2.2.3 -->
  <script src="../theme/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="../theme/bootstrap/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="../theme/plugins/fastclick/fastclick.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../theme/dist/js/app.min.js"></script>
  <!-- SlimScroll 1.3.0 -->
  <script src="../theme/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
  <script src="docs.js"></script>
  <!-- Lightbox -->
  <script src="../theme/plugins/lightbox/ekko-lightbox.js"></script>
  <script type="text/javascript">
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
      event.preventDefault();
      $(this).ekkoLightbox();
    });

    jQuery(document).ready(function ($) {
      var link = $(location).attr('href');
      var jump_to = link.split("#");

      link = jump_to[1].trim();
      if (link != '' && link != 'undefined') {
        console.log("jump_to[1]=" + jump_to[1]);
        document.location = "#" + jump_to[1];
      }
    });
  </script>
</body>

</html>