<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<div class="wrapper">
		<nav id="sidebar">

		        <div class="sidebar-header">
		            <h3>Admin Sidebar</h3>
		            <strong><i class="fa fa-user"></i></strong>
		        </div>

		        <ul class="list-unstyled components">
		            <li class="active">
		                <a href="#">
		                	<i class="fa fa-home"></i>
		                	Dashboard
		                </a>
		            </li>
		            <li>
		                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
		                    <i class="fa fa-plus"></i>
		                    Add New Items
		                </a>
		                <ul class="collapse list-unstyled" id="pageSubmenu">
		                    <li>
		                        <a href="#">Sales</a>
		                    </li>
		                    <li>
		                        <a href="#">Maintenance</a>
		                    </li>
		                </ul>
		            </li>
		            <li>
		                <a href="#">
		                    <i class="fa fa-users"></i>
		                    Clients
		                </a>
		            </li>
		            <li>
		                <a href="#">
		                    <i class="fa fa-cart-plus "></i>
		                    Add Sales
		                </a>
		            </li>
		            <li>
		                <a href="#">
		                    <i class="fa fa-link"></i>
		                    Add branch
		                </a>
		            </li>
		            <li>
		                <a href="#">
		                    <i class="fa fa-paper-plane"></i>
		                    Contact
		                </a>
		            </li>
		            <a href="#">
		                <i class="fa fa-briefcase"></i>
		                Summary
		            </a>
		        </ul>

	    </nav>
		<div id="content" class="container">

		        <nav class="navbar navbar-expand-lg navbar-light bg-light">
		            <div class="container-fluid">

		                <button type="button" id="sidebarCollapse" class="btn btn-info">
		                    <span class="fa fa-bars"></span>
		                </button>
		                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		                    <i class="fas fa-align-justify"></i>
		                </button>
		                <div class="collapse navbar-collapse" id="navbarSupportedContent">
		                    <ul class="nav navbar-nav ml-auto">
		                        <li class="nav-item active">
		                            <a class="nav-link" href="#">Dashboard</a>
		                        </li>
		                        <li class="nav-item">
		                            <a class="nav-link" href="#">Add New Sales</a>
		                        </li>
		                        <li class="nav-item">
		                            <a class="nav-link" href="#">Add New Maintenance</a>
		                        </li>
		                    </ul>
		                </div>
		            </div>
		        </nav>
		        <h3 align="left"><i class="fa fa-home fa-lg"></i> Dashboard</h3>
		        <div class="row">
		        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		        		<div id="admin_well_t" style="">
		        			<h1><i class="fa fa-money"></i></h1>
		                    <span>30,000 Br</span> <br>
		                    <label>Total Income</label>
		        		</div>
		        	</div>
		        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		        		<div id="admin_well_r">
		        			<h1><i class="fa fa-cart-plus"></i></h1>
		                    <span>3200</span><br>
		                    <label>Total Selled Items</label>
		        		</div>
		        	</div>
		        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		        		<div id="admin_well_q">
		                    <h1><i class="fa fa-shopping-basket"></i></h1>
		                    <span>30,000</span> <br>
		                    <span>N<sup><u>o</u></sup> Items in Stock</span>
		        		</div>
		        	</div>

		        </div>

		        <div id="views">
		            <div class="row">
		                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		                    <table class="table table-striped">
		                        <h2>Leatest Sells List</h2>
		                        <thead>
		                            <tr>
		                              <th scope="col">#</th>
		                              <th scope="col">First</th>
		                              <th scope="col">Last</th>
		                              <th scope="col">Handle</th>
		                              <th scope="col">Operations</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                            <tr>
		                              <th scope="row">1</th>
		                              <td>Mark</td>
		                              <td>Otto</td>
		                              <td>@mdo</td>
		                              <td>
		                                    <button class="btn btn-primary btn-sm">
		                                        <i class="fa fa-edit"></i>
		                                    </button>
		                                    <button class="btn btn-success btn-sm">
		                                        <i class="fa fa-eye"></i>
		                                    </button>
		                                    <button class="btn  btn-danger btn-sm">
		                                        <i class="fa fa-close"></i>
		                                    </button>
		                               </td>
		                            </tr>
		                            <tr>
		                              <th scope="row">2</th>
		                              <td>Jacob</td>
		                              <td>Thornton</td>
		                              <td>@fat</td>
		                              <td>
		                                    <button class="btn btn-primary btn-sm">
		                                        <i class="fa fa-edit"></i>
		                                    </button>
		                                    <button class="btn btn-success btn-sm">
		                                        <i class="fa fa-eye"></i>
		                                    </button>
		                                    <button class="btn  btn-danger btn-sm">
		                                        <i class="fa fa-close"></i>
		                                    </button>
		                               </td>
		                            </tr>
		                            <tr>
		                              <th scope="row">3</th>
		                              <td>Larry</td>
		                              <td>the Bird</td>
		                              <td>@twitter</td>
		                              <td>
		                                    <button class="btn btn-primary btn-sm">
		                                        <i class="fa fa-edit"></i>
		                                    </button>
		                                    <button class="btn btn-success btn-sm">
		                                        <i class="fa fa-eye"></i>
		                                    </button>
		                                    <button class="btn  btn-danger btn-sm">
		                                        <i class="fa fa-close"></i>
		                                    </button>
		                               </td>
		                            </tr>
		                        </tbody>
		                    </table>
		                    
		                </div>
		                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		                    <table class="table table-striped">
		                        <h2>Leatest maintenances List</h2>
		                        <thead>
		                            <tr>
		                              <th scope="col">#</th>
		                              <th scope="col">First</th>
		                              <th scope="col">Last</th>
		                              <th scope="col">Handle</th>
		                              <th scope="col">operations</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                            <tr>
		                              <th scope="row">1</th>
		                              <td>Mark</td>
		                              <td>Otto</td>
		                              <td>@mdo</td>
		                              <td>
		                                    <button class="btn btn-primary btn-sm">
		                                        <i class="fa fa-edit"></i>
		                                    </button>
		                                    <button class="btn btn-success btn-sm">
		                                        <i class="fa fa-eye"></i>
		                                    </button>
		                                    <button class="btn  btn-danger btn-sm">
		                                        <i class="fa fa-close"></i>
		                                    </button>
		                               </td>
		                            </tr>
		                            <tr>
		                              <th scope="row">2</th>
		                              <td>Jacob</td>
		                              <td>Thornton</td>
		                              <td>@fat</td>
		                              <td>
		                                    <button class="btn btn-primary btn-sm">
		                                        <i class="fa fa-edit"></i>
		                                    </button>
		                                    <button class="btn btn-success btn-sm">
		                                        <i class="fa fa-eye"></i>
		                                    </button>
		                                    <button class="btn  btn-danger btn-sm">
		                                        <i class="fa fa-close"></i>
		                                    </button>
		                               </td>
		                            </tr>
		                            <tr>
		                              <th scope="row">3</th>
		                              <td>Larry</td>
		                              <td>the Bird</td>
		                              <td>@twitter</td>
		                              <td>
		                                    <button class="btn btn-primary btn-sm">
		                                        <i class="fa fa-edit"></i>
		                                    </button>
		                                    <button class="btn btn-success btn-sm">
		                                        <i class="fa fa-eye"></i>
		                                    </button>
		                                    <button class="btn  btn-danger btn-sm">
		                                        <i class="fa fa-close"></i>
		                                    </button>
		                               </td>
		                            </tr>
		                        </tbody>
		                    </table>
		                    
		                </div>
		                
		            </div>
		            
		        </div>

		        <div class="row" id="sample_list">
		            <div class="col-lg-8 well">
		                <h3>Sortage instock</h3>
		                <table class="table table-striped table-borderless">
		                    <thead>
		                        <tr>
		                            <th>Items</th>
		                            <th>AVA in stock</th>
		                            <th>price</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <tr>
		                            <td>Iphone Charger</td>
		                            <td><span class="badge">2</span></td>
		                            <td>75 Br</td>
		                        </tr>
		                        <tr>
		                            <td>Samsung Battery</td>
		                            <td><span class="badge">4</span></td>
		                            <td>200 Br</td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>
		            <div class="col-lg-4 well">
		                <div class="row">
		                    <div class="col-lg-12" style="min-height: 200px;">
		                        <h3>Maintenance Experts</h3>
		                        <div class="row">
		                            <div class="col-lg-6">
		                                <img src="{{ asset('storage/images/avater.jpg') }}" style="">
		                            </div>
		                            <div class="col-lg-6">
		                                <span>Name</span>
		                                <span>+251-9-13-22-44</span><br>
		                                <span>Mexico Branch</span><br>
		                                <span>Selles Man</span><br>
		                            </div>
		                            <div class="col-lg-6">
		                                <img src="{{ asset('storage/images/avater.jpg') }}" style="">
		                            </div>
		                            <div class="col-lg-6">
		                                <span>Name</span>
		                                <span>+251-9-13-22-44</span><br>
		                                <span>Mexico Branch</span><br>
		                                <span>Selles Man</span><br>
		                            </div>
		                        </div>
		                    </div>

		                </div>
		                <hr>
		                <div class="row">
		                    <div class="col-lg-12" style="min-height: 200px;">
		                        <h3>Sales Experts</h3>
		                        <div class="row">
		                            <div class="col-lg-6">
		                                <img src="">
		                            </div>
		                            <div class="col-lg-6">
		                                <span>Name</span>
		                                <span>+251-9-13-22-44</span><br>
		                                <span>Mexico Branch</span><br>
		                                <span>Selles Man</span><br>
		                            </div>
		                            <div class="col-lg-6">
		                                <img src="">
		                            </div>
		                            <div class="col-lg-6">
		                                <span>Name</span>
		                                <span>+251-9-13-22-44</span><br>
		                                <span>Mexico Branch</span><br>
		                                <span>Selles Man</span><br>
		                            </div>
		                        </div>
		                    </div>

		                </div>
		            </div>
		           
		        </div>

	    </div>
	</div>
</body>
</html>