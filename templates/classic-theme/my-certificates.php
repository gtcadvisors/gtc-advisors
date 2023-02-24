<?php include_once TEMPLATE_PATH.'/header.php'; ?>
<link rel="stylesheet" href="<?php _esc(TEMPLATE_URL);?>/assets/vendors/datatables/datatables.min.css">
<link href="<?php _esc(TEMPLATE_URL);?>/css/dash/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?php _esc(TEMPLATE_URL);?>/css/dash/bootstrap.min.css">
<link rel="stylesheet" href="<?php _esc(TEMPLATE_URL);?>/assets/css/font-awesome-all.css">
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">   
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script>  
  <script>   -->
  <style type="text/css">
  .table>:not(:first-child) {
    border-top: 1px solid rgb(0 0 0/13%) !important;
}
.table tr td:last-child, .table tr th:last-child {
    /* display: inline-flex; */
    float: right;
}
@media screen and (max-width: 600px){
table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: 14px;
    text-align: left !important;
}
}
</style>
<!-- Dashboard Container -->
<div class="dashboard-container">

    <?php include_once TEMPLATE_PATH.'/dashboard_sidebar.php'; ?>


    <!-- Dashboard Content
    ================================================== -->
<div class="dashboard-content-container" data-simplebar>
<div class="dashboard-content-inner" >

<div class="content content-page">
<div class="container-fluid">
<div class="row">
<div class="col-xl-11 col-md-8">
<nav class="user-tabs mb-4">
<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
<li class="nav-item">
<a class="nav-link" href="<?php url("RESUMES") ?>"><?php _e("My Resumes") ?></a>
</li>
<li class="nav-item">
<a class="nav-link active" href="<?php url("CERTIFICATES") ?>"><?php _e("My Certificates") ?> </a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php url("LICENSES") ?>"><?php _e("My Licenses") ?></a>
</li>
</ul>
</nav>

<div class="my-projects-view">
<div class="row">
<div class="col-lg-12">
<div class="">
<div class="card">
<div class="card-header">
<div class="row justify-content-between align-items-center">
<div class="col">
<h5 class="card-title">My Certificates</h5>
</div>
<div class="col-auto">
<a href="<?php url("ADD-CERTIFICATE") ?>" class="btn btn-primary btn-rounded"><i class="fas fa-plus"></i> <?php _e("Add New Certificate") ?></a>
</div>
</div>
</div>
<div class="card-body">
<div class="table-responsive table-box">
<table class="table table-center table-hover">
<thead class="thead-pink">
<tr class="justify-content-center">
<th><?php _e("File Preview") ?></th>
<th><?php _e("Certificate Name") ?></th>
<th><?php _e("Certificate From") ?></th>
<th><?php _e("Actions") ?></th>
</tr>
</thead>
<tbody>
<?php
 if($certifications){
foreach ($items as $item){ 
?>
<tr class="" data-item-id="<?php _esc($item['id'])?>">
<td><img src="<?php _esc($config['site_url']);?>storage/certifications/<?php _esc($item['filename'])?>" style="max-width:70px;" alt="<?php _esc($item['certificate_name'])?>"></td>
<td><?php _esc($item['certificate_name'])?></td>
<td><?php _esc($item['certificate_from'])?></td>
<td>
<div class="action">
<a href="<?php _esc($config['site_url']);?>storage/certifications/<?php _esc($item['filename'])?>" title="<?php _esc($item['filename'])?>" target="_blank" class="file-circle me-2"><i class="fas fa-cloud-download-alt"></i></a>
<a href="<?php url("EDIT-CERTIFICATE") ?>/<?php _esc($item['id'])?>" class="file-circle me-2"><i class="fas fa-pen"></i></a>

<a href="#" class="file-circle ico ajax-delete-resume" data-tippy-placement="top" title="<?php _e("Delete") ?>"><i class="fas fa-trash-alt"></i></a>
</div>
</td>
<?php }
}else{ ?>
<tr>
<td colspan="5" class="text-center"><?php _e("No Certificate found.") ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="<?php _esc(TEMPLATE_URL);?>/js/plugins/bootstrap.bundle.min.js"></script>
<script src="<?php _esc(TEMPLATE_URL);?>/js/plugins/script.js"></script>

<?php include_once TEMPLATE_PATH.'/overall_footer_dashboard.php'; ?>

<div class="modal fade" id="file">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<div class="modal-header">
<h4 class="mb-0">Add Files</h4>
<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
</div>
<div class="modal-body">
<form action="files.html">
<div class="modal-info">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>Title</label>
<input type="text" class="form-control">
</div>
<div class="form-group">
<label>Link</label>
<input type="text" class="form-control">
</div>
<label class="br-0 file-upload image-upbtn">
upload Files <input type="file">
</label>
</div>
</div>
</div>
<div class="submit-section text-end">
<button type="submit" class="btn btn-primary submit-btn">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="edit-file">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">
<div class="modal-header">
<h4 class="mb-0">Edit Files</h4>
<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
</div>
<div class="modal-body">
<form action="files.html">
<div class="modal-info">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>Title</label>
<input type="text" class="form-control" value="Image for Section background">
</div>
<div class="form-group">
<label>Link</label>
<input type="text" class="form-control" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
</div>
<div class="d-flex align-items-center">
<img src="assets/img/file-logo.png" class="img-fluid me-2" alt="Logo">
<label class="br-0 file-upload image-upbtn">
upload Files <input type="file">
</label>
</div>
</div>
</div>
</div>
<div class="submit-section text-end">
<button type="submit" class="btn btn-primary submit-btn">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>