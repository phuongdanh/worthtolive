
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>Categories</title>
<base href="http://localhost/opencart/upload/admin/" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<script type="text/javascript" src="view/javascript/jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="view/javascript/bootstrap/js/bootstrap.min.js"></script>
<link href="view/stylesheet/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="view/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
<link href="view/javascript/summernote/summernote.css" rel="stylesheet" />
<script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>
<script src="view/javascript/jquery/datetimepicker/moment.js" type="text/javascript"></script>
<script src="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<link href="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
<link type="text/css" href="view/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />
<script src="view/javascript/common.js" type="text/javascript"></script>
</head>
<body>
<div id="container">
<header id="header" class="navbar navbar-static-top">
  <div class="navbar-header">
        <a type="button" id="button-menu" class="pull-left"><i class="fa fa-indent fa-lg"></i></a>
        <a href="http://localhost/opencart/upload/admin/index.php?route=common/dashboard&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ" class="navbar-brand"><img src="view/image/logo.png" alt="OpenCart" title="OpenCart" /></a></div>
    <ul class="nav pull-right">
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span class="label label-danger pull-left">1</span> <i class="fa fa-bell fa-lg"></i></a>
      <ul class="dropdown-menu dropdown-menu-right alerts-dropdown">
        <li class="dropdown-header">Orders</li>
        <li><a href="http://localhost/opencart/upload/admin/index.php?route=sale/order&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ&amp;filter_order_status=5,1,2,12,3" style="display: block; overflow: auto;"><span class="label label-warning pull-right">0</span>Processing</a></li>
        <li><a href="http://localhost/opencart/upload/admin/index.php?route=sale/order&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ&amp;filter_order_status=5,3"><span class="label label-success pull-right">0</span>Completed</a></li>
        <li><a href="http://localhost/opencart/upload/admin/index.php?route=sale/return&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ"><span class="label label-danger pull-right">0</span>Returns</a></li>
        <li class="divider"></li>
        <li class="dropdown-header">Customers</li>
        <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_online&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ"><span class="label label-success pull-right">0</span>Customers Online</a></li>
        <li><a href="http://localhost/opencart/upload/admin/index.php?route=customer/customer&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ&amp;filter_approved=0"><span class="label label-danger pull-right">0</span>Pending approval</a></li>
        <li class="divider"></li>
        <li class="dropdown-header">Products</li>
        <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/product&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ&amp;filter_quantity=0"><span class="label label-danger pull-right">1</span>Out of stock</a></li>
        <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/review&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ&amp;filter_status=0"><span class="label label-danger pull-right">0</span>Reviews</a></li>
        <li class="divider"></li>
        <li class="dropdown-header">Affiliates</li>
        <li><a href="http://localhost/opencart/upload/admin/index.php?route=marketing/affiliate&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ&amp;filter_approved=1"><span class="label label-danger pull-right">0</span>Pending approval</a></li>
      </ul>
    </li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-life-ring fa-lg"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
        <li class="dropdown-header">Stores <i class="fa fa-shopping-cart"></i></li>
                <li><a href="http://localhost/opencart/upload/" target="_blank">Your Store</a></li>
                <li class="divider"></li>
        <li class="dropdown-header">Help <i class="fa fa-life-ring"></i></li>
        <li><a href="http://www.opencart.com" target="_blank">Homepage</a></li>
        <li><a href="http://docs.opencart.com" target="_blank">Documentation</a></li>
        <li><a href="http://forum.opencart.com" target="_blank">Support Forum</a></li>
      </ul>
    </li>
    <li><a href="http://localhost/opencart/upload/admin/index.php?route=common/logout&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ"><span class="hidden-xs hidden-sm hidden-md">Logout</span> <i class="fa fa-sign-out fa-lg"></i></a></li>
  </ul>
  </header>
<nav id="column-left"><div id="profile">
  <div>
        <i class="fa fa-opencart"></i>
      </div>
  <div>
    <h4>John Doe</h4>
    <small>Administrator</small>
  </div>
</div>
<ul id="menu">
  <li id="dashboard"><a href="http://localhost/opencart/upload/admin/index.php?route=common/dashboard&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ"><i class="fa fa-dashboard fa-fw"></i> <span>Dashboard</span></a></li>
  <li id="catalog"><a class="parent"><i class="fa fa-tags fa-fw"></i> <span>Catalog</span></a>
    <ul>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/category&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Categories</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/product&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Products</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/recurring&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Recurring Profiles</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/filter&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Filters</a></li>
      <li><a class="parent">Attributes</a>
        <ul>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/attribute&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Attributes</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/attribute_group&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Attribute Groups</a></li>
        </ul>
      </li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/option&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Options</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/manufacturer&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Manufacturers</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/download&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Downloads</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/review&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Reviews</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=catalog/information&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Information</a></li>
    </ul>
  </li>
  <li id="extension"><a class="parent"><i class="fa fa-puzzle-piece fa-fw"></i> <span>Extensions</span></a>
    <ul>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=extension/installer&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Extension Installer</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=extension/modification&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Modifications</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=extension/analytics&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Analytics</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=extension/captcha&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Captcha</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=extension/feed&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Feeds</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=extension/fraud&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Anti-Fraud</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=extension/module&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Modules</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=extension/payment&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Payments</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=extension/shipping&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Shipping</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=extension/total&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Order Totals</a></li>
          </ul>
  </li>
  <li id="design"><a class="parent"><i class="fa fa-television fa-fw"></i> <span>Design</span></a>
    <ul>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=design/layout&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Layouts</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=design/banner&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Banners</a></li>
    </ul>
  </li>
  <li id="sale"><a class="parent"><i class="fa fa-shopping-cart fa-fw"></i> <span>Sales</span></a>
    <ul>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=sale/order&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Orders</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=sale/recurring&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Recurring Orders</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=sale/return&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Returns</a></li>
      <li><a class="parent">Gift Vouchers</a>
        <ul>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=sale/voucher&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Gift Vouchers</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=sale/voucher_theme&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Voucher Themes</a></li>
        </ul>
      </li>
      <li><a class="parent">PayPal</a>
        <ul>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=payment/pp_express/search&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Search</a></li>
        </ul>
      </li>
    </ul>
  </li>
  <li id="customer"><a class="parent"><i class="fa fa-user fa-fw"></i> <span>Customers</span></a>
    <ul>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=customer/customer&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Customers</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=customer/customer_group&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Customer Groups</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=customer/custom_field&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Custom Fields</a></li>
    </ul>
  </li>
  <li><a class="parent"><i class="fa fa-share-alt fa-fw"></i> <span>Marketing</span></a>
    <ul>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=marketing/marketing&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Marketing</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=marketing/affiliate&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Affiliates</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=marketing/coupon&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Coupons</a></li>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=marketing/contact&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Mail</a></li>
    </ul>
  </li>
  <li id="system"><a class="parent"><i class="fa fa-cog fa-fw"></i> <span>System</span></a>
    <ul>
      <li><a href="http://localhost/opencart/upload/admin/index.php?route=setting/store&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Settings</a></li>
      <li><a class="parent">Users</a>
        <ul>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=user/user&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Users</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=user/user_permission&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">User Groups</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=user/api&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">API</a></li>
        </ul>
      </li>
      <li><a class="parent">Localisation</a>
        <ul>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/location&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Store Location</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/language&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Languages</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/currency&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Currencies</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/stock_status&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Stock Statuses</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/order_status&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Order Statuses</a></li>
          <li><a class="parent">Returns</a>
            <ul>
              <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/return_status&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Return Statuses</a></li>
              <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/return_action&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Return Actions</a></li>
              <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/return_reason&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Return Reasons</a></li>
            </ul>
          </li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/country&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Countries</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/zone&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Zones</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/geo_zone&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Geo Zones</a></li>
          <li><a class="parent">Taxes</a>
            <ul>
              <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/tax_class&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Tax Classes</a></li>
              <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/tax_rate&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Tax Rates</a></li>
            </ul>
          </li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/length_class&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Length Classes</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=localisation/weight_class&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Weight Classes</a></li>
        </ul>
      </li>
      <li><a class="parent">Tools</a>
        <ul>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=tool/upload&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Uploads</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=tool/backup&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Backup / Restore</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=tool/error_log&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Error Logs</a></li>
        </ul>
      </li>
    </ul>
  </li>
  <li id="reports"><a class="parent"><i class="fa fa-bar-chart-o fa-fw"></i> <span>Reports</span></a>
    <ul>
      <li><a class="parent">Sales</a>
        <ul>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/sale_order&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Orders</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/sale_tax&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Tax</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/sale_shipping&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Shipping</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/sale_return&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Returns</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/sale_coupon&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Coupons</a></li>
        </ul>
      </li>
      <li><a class="parent">Products</a>
        <ul>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/product_viewed&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Viewed</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/product_purchased&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Purchased</a></li>
        </ul>
      </li>
      <li><a class="parent">Customers</a>
        <ul>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_online&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Customers Online</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_activity&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Customer Activity</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_order&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Orders</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_reward&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Reward Points</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/customer_credit&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Credit</a></li>
        </ul>
      </li>
      <li><a class="parent">Marketing</a>
        <ul>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/marketing&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Marketing</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/affiliate&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Affiliates</a></li>
          <li><a href="http://localhost/opencart/upload/admin/index.php?route=report/affiliate_activity&amp;token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ">Affiliate Activity</a></li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
<div id="stats">
  <ul>
    <li>
      <div>Orders Completed <span class="pull-right">0%</span></div>
      <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">0%</span> </div>
      </div>
    </li>
    <li>
      <div>Orders Processing <span class="pull-right">0%</span></div>
      <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">0%</span> </div>
      </div>
    </li>
    <li>
      <div>Other Statuses <span class="pull-right">0%</span></div>
      <div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="sr-only">0%</span> </div>
      </div>
    </li>
  </ul>
</div>
</nav>

<footer id="footer"><a href="http://www.opencart.com">OpenCart</a> &copy; 2009-2016 All Rights Reserved.<br />Version 2.1.0.2</footer></div>
</body></html>
