<?php include_once TEMPLATE_PATH.'/header.php'; ?>
<!-- Dashboard Container -->
<div class="dashboard-container">
    <?php
    include_once TEMPLATE_PATH.'/dashboard_sidebar.php';
    ?>
    <!-- Dashboard Content
    ================================================== -->
    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner" >
<link href="<?php _esc(TEMPLATE_URL); ?>/css/dash/style.css" rel="stylesheet">            
<div class="row">
<div class="col-xl-12 col-sm-8 d-flex">
<div class="card flex-fill">
<div class="pro-head">
<h5 class="card-title mb-0">Your Profile View</h5>
<div class="month-detail">
<select class="form-control">
<option value="0">Last 6 months</option>
<option value="1">Last 2 months</option>
</select>
</div>
</div>
<div class="pro-body">
<div id="chartprofile"></div>
</div>
</div>
</div>
<!-- <div class="col-xl-4 d-flex">
<div class="flex-fill card">
<div class="pro-head b-0">
<h5 class="card-title mb-0">Static Analytics</h5>
</div>
<div class="pro-body">
<div id="chartradial"></div>
<ul class="static-list">
<li><span><i class="fas fa-circle text-violet me-1"></i> Applied Jobs</span> <span class="sta-count">30</span></li>
<li><span><i class="fas fa-circle text-pink me-1"></i> Active Proposals</span> <span class="sta-count">30</span></li>
<li><span><i class="fas fa-circle text-yellow me-1"></i> Applied Proposals</span> <span class="sta-count">30</span></li>
<li><span><i class="fas fa-circle text-blue me-1"></i> Bookmarked Projects</span> <span class="sta-count">30</span></li>
</ul>
</div>
</div>
</div> -->
</div>
<script src="<?php _esc(TEMPLATE_URL); ?>/css/dash/apexchart/apexcharts.min.js"></script>
<script src="<?php _esc(TEMPLATE_URL); ?>/css/dash/apexchart/chart-data.js"></script>
<?php
include_once TEMPLATE_PATH.'/overall_footer_dashboard.php';
