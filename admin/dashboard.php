<?php
require_once('includes.php');

$banned_user = ORM::for_table($config['db']['pre'].'user')->where('status',2)->count();

$quick_fetch= ORM::for_table($config['db']['pre'].'balance')->find_one(1);
$totalearning = $quick_fetch['total_earning']." ".$config['currency_sign'];

$resumes = ORM::for_table($config['db']['pre'].'resumes')->count();
$licenses = ORM::for_table($config['db']['pre'].'licenses')->count();
$certificates = ORM::for_table($config['db']['pre'].'certifications')->count();

$freelancers = ORM::for_table($config['db']['pre'].'user')->where('user_type','freelancer')->count();
$agency = ORM::for_table($config['db']['pre'].'user')->where('user_type','agency')->count();
$total_user = ORM::for_table($config['db']['pre'].'user')->where('user_type','user')->count();
?>

<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <!-- Stats -->
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <a class="card" href="app/resumes.php">
                    <div class="card-block clearfix">
                        <div class="pull-right">
                            <p class="h6 text-muted m-t-0 m-b-xs" style="text-transform:uppercase;">Resumes</p>
                            <p class="h3 text-blue m-t-sm m-b-0" style="font-weight:700;font-size:2rem;"><?php echo $resumes; ?></p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48 "><img src="<?php echo ADMINURL; ?>assets/images/cv.png" style="max-width:50px;filter:sepia(100%) hue-rotate(190deg) saturate(500%);"></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- .col-sm-6 -->

            <div class="col-sm-6 col-lg-3">
                <a class="card bg-orange bg-inverse" href="app/licenses">
                    <div class="card-block clearfix">
                        <div class="pull-right">
                            <p class="h6 text-muted m-t-0 m-b-xs" style="text-transform:uppercase;">Licenses</p>
                            <p class="h3 m-t-sm m-b-0" style="font-weight:700;font-size:2rem;"><?php echo $licenses; ?></p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48"><img src="<?php echo ADMINURL; ?>assets/images/license.png" style="max-width:50px;filter:sepia(100%) hue-rotate(190deg) saturate(500%);"></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a class="card bg-red bg-inverse" href="app/certificates">
                    <div class="card-block clearfix">
                <div class="pull-right">
                <p class="h6 text-muted m-t-0 m-b-xs" style="text-transform:uppercase;">Certificates</p>
                <p class="h3 m-t-sm m-b-0" style="font-weight:700;font-size:2rem;"><?php echo $certificates; ?></p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48 ">
                            <img src="<?php echo ADMINURL; ?>assets/images/certificate.png" style="max-width:50px;filter:sepia(100%) hue-rotate(190deg) saturate(500%);"></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- .col-sm-6 -->
            <div class="col-sm-6 col-lg-3">
                <a class="card bg-green bg-inverse" href="#">
                    <div class="card-block clearfix">
                        <div class="pull-right">
                            <p class="h6 text-muted m-t-0 m-b-xs" style="text-transform:uppercase;">Banned Users</p>
                            <p class="h3 m-t-sm m-b-0" style="font-weight:700;font-size:2rem;"><?php echo $banned_user; ?></p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="shadow img-avatar img-avatar-48"><img src="<?php echo ADMINURL; ?>assets/images/banned.png" style="max-width:50px;filter:sepia(100%) hue-rotate(190deg) saturate(500%);"></span>

                        </div>
                    </div>
                </a>
            </div>
            <!-- .col-sm-6 -->
            <div class="col-sm-6 col-lg-3">
                <a class="card bg-purple bg-inverse" href="global/users.php">
                    <div class="card-block clearfix">
                        <div class="pull-right">
                            <p class="h6 text-muted m-t-0 m-b-xs" style="text-transform:uppercase;">Total Users</p>
                            <p class="h3 m-t-sm m-b-0" style="font-weight:700;font-size:2rem;"><?php echo $total_user; ?></p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48"><img src="<?php echo ADMINURL; ?>assets/images/group.png" style="max-width:50px;filter:sepia(100%) hue-rotate(190deg) saturate(500%);"></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-3">
                <a class="card bg-cyan bg-inverse" href="#">
                    <div class="card-block clearfix">
                        <div class="pull-right">
                            <p class="h6 text-muted m-t-0 m-b-xs" style="text-transform:uppercase;">Freelancers</p>
                            <p class="h3 m-t-sm m-b-0" style="font-weight:700;font-size:2rem;"><?php echo $freelancers; ?></p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48"><img src="<?php echo ADMINURL; ?>assets/images/freelance.png" style="max-width:50px;filter:sepia(100%) hue-rotate(190deg) saturate(500%);"></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a class="card bg-teal bg-inverse" href="#">
                    <div class="card-block clearfix">
                        <div class="pull-right">
                            <p class="h6 text-muted m-t-0 m-b-xs" style="text-transform:uppercase;">Agencies</p>
                            <p class="h3 m-t-sm m-b-0" style="font-weight:700;font-size:2rem;"><?php echo $agency; ?></p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48"><img src="<?php echo ADMINURL; ?>assets/images/office-building.png" style="max-width:50px;filter:sepia(100%) hue-rotate(190deg) saturate(500%);"></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <a class="card bg-blue bg-inverse" href="#">
                    <div class="card-block clearfix">
                        <div class="pull-right">
                            <p class="h6 text-muted m-t-0 m-b-xs" style="text-transform:uppercase;">Total Income</p>
                            <p class="h3 m-t-sm m-b-0"><?php echo $totalearning; ?></p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-cash fa-1-5x"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- .row -->
        <!-- End stats -->

        <div class="row">
            <div class="col-lg-8">
                <!-- Transactions history Widget -->
                <div class="card">
                    <div class="card-header">
                        <h4>Posts Statistics</h4>
                    </div>
                    <div class="card-block">
                        <div style="height: 238px;"><canvas class="js-chartjs-lines4"></canvas></div>
                    </div>
                </div>
                <!-- .card -->
                <!-- End Transactions history Widget -->
            </div>
            <!-- .col-lg-8 -->

            <div class="col-lg-4">
                <!-- Weekly users Widget -->
                <div class="card">
                    <div class="card-header">
                        <h4>Weekly users </h4>
                    </div>
                    <div class="card-block">
                        <div style="height: 238px;"><canvas class="js-chartjs-bars3"></canvas></div>
                    </div>
                </div>
                <!-- .card -->
                <!-- End Weekly users Widget -->
            </div>
            <!-- .col-lg-4 -->
        </div>
        <!-- .row -->

        <!-- .row -->
        <div class="row">
            <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Recent Jobs</h4>
                    </div>
                    <div class="card-block">
                        <?php
                        $getItem = get_items('','',false,1,5);
                        foreach ($getItem as $ads) {
                            $ad_id          = $ads['id'];
                            $ad_title       = $ads['product_name'];
                            $featured       = $ads['featured'];
                            $urgent         = $ads['urgent'];
                            $highlight      = $ads['highlight'];
                            $ad_category    = $ads['category'];
                            $ad_location    = $ads['location'];
                            $ad_created_at  = $ads['created_at'];
                            $ad_pic         = $ads['image'];
                            $ad_link        = $ads['link'];
                            $pro_employer        = $ads['username'];
                            ?>
                            <div class="pro-list">
                                <div class="pro-img p-r-10">
                                    <a href="#">
                                        <img src="../storage/products/<?php echo $ad_pic; ?>" alt="<?php echo $ad_title ?>" style="width:75px; height: 75px;">
                                    </a>
                                </div>
                                <div class="pro-detail">
                                    <h5 class="m-t-0 m-b-5">
                                        <a href="post_detail.php?id=<?php echo $ad_id;?>"><?php echo $ad_title; ?></a>
                                    </h5>
                                    <p class="text-muted font-12 m-b-5"><a href="<?php echo $link['PROFILE']; ?>/<?php echo $pro_employer; ?>" target="_blank"><?php echo $pro_employer; ?></a> | <i class="fa fa-map-marker"></i> <?php echo $ad_location; ?> </p>
                                    <p class="text-muted font-12"><?php echo $ad_created_at; ?> </p>
                                </div>
                            </div>

                        <?php } ?>

                        <div class="text-right">
                            <a href="posts.php" class="btn btn-sm btn-rounded btn-info m-t-10">View All</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Recent Projects</h4>
                    </div>
                    <div class="card-block">
                        <?php
                        $getItem = get_projects('','',false,1,6);
                        foreach ($getItem as $ads) {
                            $ad_id          = $ads['id'];
                            $ad_title       = $ads['product_name'];
                            $featured       = $ads['featured'];
                            $urgent         = $ads['urgent'];
                            $highlight      = $ads['highlight'];
                            $ad_category    = $ads['category'];
                            $ad_created_at  = $ads['created_at'];
                            $pro_employer        = $ads['username'];
                            $ad_link        = $ads['link'];
                            ?>
                            <div class="pro-list">
                                <div class="pro-detail">
                                    <h5 class="m-t-0 m-b-5">
                                        <a href="<?php echo $config['site_url']; ?>project/<?php echo $ad_id;?>" target="_blank"><?php echo $ad_title; ?></a>
                                    </h5>
                                    <p class="text-muted font-12"><a href="<?php echo $link['PROFILE']; ?>/<?php echo $pro_employer; ?>" target="_blank"><?php echo $pro_employer; ?></a> | <?php echo $ad_created_at; ?> </p>
                                </div>
                            </div>

                        <?php } ?>

                        <div class="text-right">
                            <a href="projects.php" class="btn btn-sm btn-rounded btn-info m-t-10">View All</a>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Recent Registered </h4>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Registered Time</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                $rows = ORM::for_table($config['db']['pre'].'user')
                                    ->order_by_desc('id')
                                    ->limit(10)
                                    ->find_many();

                                foreach ($rows as $info) {
                                    $username = $info['username'];
                                    $status = $info['status'];
                                    $type = $info['user_type'] == 'user' ? 'Freelancer': 'Agency';
                                    if ($status == "0"){
                                        $status = '<span class="label label-info">ACTIVE</span>';
                                    }
                                    elseif($status == "1")
                                    {
                                        $status = '<span class="label label-success">VERIFIED</span>';
                                    }
                                    else{
                                        $status = '<span class="label label-warning">BANNED</span>';
                                    }
                                    ?>
                                    <tr>
                                        <td class="txt-oflo"><?php echo $info['name']; ?>
                                            <p class="text-muted m-b-0 fs-12"><a href="<?php echo $link['PROFILE']; ?>/<?php echo $username; ?>" target="_blank">@ <?php echo $username; ?></a></p>
                                        </td>
                                        <td class="txt-oflo"><?php echo $type; ?></td>
                                        <td><span class="label label-info label-rounded"><?php echo $info['email']; ?></span> </td>
                                        <td class="txt-oflo"><?php echo $status; ?></td>
                                        <td class="txt-oflo"><?php echo timeAgo($info['created_at']); ?></td>
                                    </tr>
                                <?php } ?>


                                </tbody>
                            </table>
                            <a href="global/users.php">Check all Users</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- .container-fluid -->
    <!-- End Page Content -->

</main>

<?php include("footer.php"); ?>

<!--Code For Chart-->
<!-- Page Plugins -->
<script src="assets/js/plugins/slick/slick.min.js"></script>
<script src="assets/js/plugins/chartjs/Chart.min.js"></script>


<?php
$today = date('Y-m-d');
$todayPost = ORM::for_table($config['db']['pre'].'project')->where_like('created_at', ''.$today.'%')->count();
$todayUser = ORM::for_table($config['db']['pre'].'user')->where_like('created_at', ''.$today.'%')->count();

$minusValue = $today;
$minusValue2 = $today;
$minusValue3 = $today;
$chartPostValue = "'".$todayPost."'";
$chartUserValue = "'".$todayUser."'";
$chartWeeklyLable = "'".date('M-d')."'";
for ($x = 0; $x <= 5; $x++) {
    $minusValue = date('M-d', strtotime('-1 day', strtotime($minusValue)));
    $chartWeeklyLable .= ",'".$minusValue."'";

    $minusValue2 = date('Y-m-d', strtotime('-1 day', strtotime($minusValue2)));
    $rows = ORM::for_table($config['db']['pre'].'product')->where_like('created_at', ''.$minusValue2.'%')->count();
    $chartPostValue .= ",'".$rows."'";

    $minusValue3 = date('Y-m-d', strtotime('-1 day', strtotime($minusValue3)));
    $rows = ORM::for_table($config['db']['pre'].'user')->where_like('created_at', ''.$minusValue3.'%')->count();
    $chartUserValue .= ",'".$rows."'";
}
?>

<script>
    // Lines Chart Data 3
    var $dashChartLinesData3 = {
        labels: [<?php echo $chartWeeklyLable; ?>],
        datasets: [
            {
                label: 'This Week',
                fillColor: App.hexToRgba( App.colors.blue, 50 ),
                pointColor: App.colors.blue,
                data: [<?php echo $chartUserValue; ?>]
            }
        ]
    };

    // Lines Chart Data 4
    var $dashChartLinesData4 = {
        labels: [<?php echo $chartWeeklyLable; ?>],
        datasets: [
            {
                label: 'This Week',
                strokeColor: App.colors.blue,
                pointColor: '#fff',
                pointStrokeColor: App.colors.blue,
                data: [<?php echo $chartPostValue; ?>]
            }
        ]
    };
</script>
<!--Code For Chart-->
<!-- Page JS Code -->
<script src="<?php echo ADMINURL; ?>assets/js/pages/index.js"></script>
<script>
    $(function()
    {
        // Init page helpers (Slick Slider plugin)
        App.initHelpers('slick');
    });
</script>

</body>

</html>
