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

<div class="col-xl-12 col-md-12 ">
                    <div class="dashboard-box">
                        <div class="headline">
                            <h3><i class="icon-material-baseline-notifications-none"></i> <?php _e("News Feed") ?></h3>
                        </div>
                        <div class="content">
                            <div class="header-notifications-content with-padding">
                                <ul>
                                    <?php
                                    foreach($notification as $note){
                                        $id = $note['product_id'];
                                        $sender = $note['sender_name'];
                                        $title = $note['product_title'];
                                        $product_id = $note['product_id'];
                                        $msg = $note['message'];
                                        ?>
                                        <li class="notifications-not-read">
                                            <?php if($note['type'] == "new_order"){ ?>
                                                <a href="<?php url("SERVICE_ORDERS") ?>/<?php _esc($id) ?>">
                                                    <span class="notification-icon"><i class="icon-material-outline-assignment"></i></span>
                                                    <span class="notification-text"><strong>#<?php _esc($product_id) ?></strong> <?php _e("New order") ?> <span class="color"><?php _esc($title) ?></span></span>
                                                </a>
                                            <?php }elseif($note['type'] == "milestone_created"){ ?>
                                                <a href="<?php url("MILESTONE") ?>/<?php _esc($id) ?>">
                                                    <span class="notification-icon"><i class="icon-material-outline-assignment"></i></span>
                                                    <span class="notification-text"><strong><?php _esc($sender) ?></strong> <?php _e("created a milestone") ?> <?php _esc($msg) ?> <?php _e("for") ?> <span class="color"><?php _esc($title) ?></span></span>
                                                </a>
                                            <?php }elseif($note['type'] == "milestone_request_release"){ ?>
                                                <a href="<?php url("MILESTONE") ?>/<?php _esc($id) ?>">
                                                    <span class="notification-icon"><i class="icon-material-outline-assignment"></i></span>
                                                    <span class="notification-text"><strong><?php _esc($sender) ?></strong> <?php _e("Request for release") ?> <?php _e("Milestone") ?> <?php _esc($msg) ?> <?php _e("for") ?> <span class="color"><?php _esc($title) ?></span></span>
                                                </a>
                                            <?php }elseif($note['type'] == "milestone_released"){ ?>
                                                <a href="<?php url("MILESTONE") ?>/<?php _esc($id) ?>">
                                                    <span class="notification-icon"><i class="icon-material-outline-assignment"></i></span>
                                                    <span class="notification-text"><strong><?php _esc($sender) ?></strong> <?php _e("Milestone") ?> <?php _e("Released") ?> <?php _esc($msg) ?> <?php _e("for") ?> <span class="color"><?php _esc($title) ?></span></span>
                                                </a>
                                            <?php }elseif($note['type'] == "deposit"){ ?>
                                                <a href="javascript:void(0);">
                                                    <span class="notification-icon"><i class="icon-material-outline-monetization-on"></i></span>
                                                    <span class="notification-text"><strong><?php _esc($sender) ?></strong> <?php _e("Deposit") ?> <?php _esc($msg) ?> <?php _e("to") ?> <span class="color"><?php _e("Wallet") ?></span></span>
                                                </a>
                                            <?php }else{ ?>

                                                </a>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
</div>

<script src="<?php _esc(TEMPLATE_URL); ?>/css/dash/apexchart/apexcharts.min.js"></script>
<script>
'use strict';$(document).ready(function(){function generateData(baseval,count,yrange){var i=0;var series=[];while(i<count){var x=Math.floor(Math.random()*(750-1+1))+1;;var y=Math.floor(Math.random()*(yrange.max-yrange.min+1))+yrange.min;var z=Math.floor(Math.random()*(75-15+1))+15;series.push([x,y,z]);baseval+=86400000;i++;}
return series;}
var options={series:[85,75,60,40],chart:{toolbar:{show:false},height:250,type:'radialBar',},plotOptions:{radialBar:{offsetY:0,startAngle:0,endAngle:270,hollow:{margin:5,size:'50%',background:'transparent',image:undefined,},dataLabels:{name:{show:false,},value:{show:false,}}}},colors:['#7B46BE','#FA6CA4','#FACD3A','#24C0DC'],labels:['Applied Jobs','Messenger','Facebook','LinkedIn'],legend:{show:false,floating:true,fontSize:'16px',position:'bottom',offsetX:160,offsetY:15,labels:{useSeriesColors:true,},markers:{size:0},formatter:function(seriesName,opts){return seriesName+":  "+opts.w.globals.series[opts.seriesIndex]},itemMargin:{vertical:3}},responsive:[{breakpoint:480,options:{legend:{show:false}}}]};var chart=new ApexCharts(document.querySelector("#chartradial"),options);chart.render();var options={series:[{name:"profile view",data:[100,150,200,250,200,250,200,200,200,200,300,350]}],chart:{height:360,type:'line',toolbar:{show:false},zoom:{enabled:false}},dataLabels:{enabled:false},colors:["#2C76DC"],stroke:{curve:'straight',width:[1]},markers:{size:4,colors:["#2C76DC"],strokeColors:"#2C76DC",strokeWidth:1,hover:{size:7,}},grid:{position:'front',borderColor:'#ddd',strokeDashArray:7,xaxis:{lines:{show:true}}},xaxis:{categories:['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],lines:{show:false,}},yaxis:{lines:{show:true,}}};var chart=new ApexCharts(document.querySelector("#chartprofile"),options);chart.render();
});
</script>
<?php
include_once TEMPLATE_PATH.'/overall_footer_dashboard.php';
