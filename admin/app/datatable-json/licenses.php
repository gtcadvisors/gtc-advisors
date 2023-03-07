<?php
define("ROOTPATH", dirname(dirname(dirname(__DIR__))));
define("APPPATH", ROOTPATH."/php/");
require_once ROOTPATH . '/includes/autoload.php';
require_once ROOTPATH . '/includes/lang/lang_'.$config['lang'].'.php';
admin_session_start();
$pdo = ORM::get_db();

// initilize all variable
$params = $columns = $order = $totalRecords = $data = array();
$params = $_REQUEST;
if($params['draw'] == 1)
    $params['order'][0]['dir'] = "desc";
//define index of column
$columns = array(
    0 =>'r.id',
    1 =>'r.filename',
    2 =>'r.license_name',
    3 =>'r.license_from',
    4 =>'r.license_number',
    5 =>'u.username'
);

$where = $sqlTot = $sqlRec = "";

// check search value exist
if( !empty($params['search']['value']) ){
    if(isset($_GET['status'])) {
        $where .=" WHERE ";
        $where .=" u.username LIKE '%".$params['search']['value']."%' ";
        $where .=" OR c.license_name LIKE '".$params['search']['value']."%' ";
        $where .=" OR ct.license_from LIKE '".$params['search']['value']."%' ";
    }
    elseif(isset($_GET['hide'])) {
        $where .=" WHERE ";
        $where .=" u.username LIKE '%".$params['search']['value']."%' ";
        $where .=" OR c.license_name LIKE '".$params['search']['value']."%' ";
        $where .=" OR ct.license_from LIKE '".$params['search']['value']."%' ";
    }
    else{
        $where .=" WHERE ";
        $where .=" u.username LIKE '%".$params['search']['value']."%' ";
        $where .=" OR c.license_name LIKE '".$params['search']['value']."%' ";
        $where .=" OR ct.license_from LIKE '".$params['search']['value']."%' ";
    }
}


// getting total number records without any search
$sql = "SELECT r.*, u.username FROM `".$config['db']['pre']."licenses` r
LEFT JOIN `".$config['db']['pre']."user` u ON u.id = r.user_id";
$sqlTot .= $sql;
$sqlRec .= $sql;
//concatenate search sql if value exist
if(isset($where) && $where != '') {
    $sqlTot .= $where;
    $sqlRec .= $where;
}

$sqlRec .=  " ORDER BY ". $columns[$params['order'][0]['column']]." ".$params['order'][0]['dir']." LIMIT ".$params['start']." ,".$params['length']." ";


$queryTot = $pdo->query($sqlTot);
$totalRecords = $queryTot->rowCount();
$queryRecords = $pdo->query($sqlRec);

//iterate on results row and create new index array of data
foreach ($queryRecords as $row) {
    $id = $row['id'];
    $username = $row['username'];
    $filename = $row['filename'];
    $title = htmlspecialchars($row['license_name']);
    $from = htmlspecialchars($row['license_from']);
    $number = htmlspecialchars($row['license_number']);

    $row0 = '<td>
                <label class="css-input css-checkbox css-checkbox-default">
                    <input type="checkbox" class="service-checker" value="'.$id.'" id="row_'.$id.'" name="row_'.$id.'"><span></span>
                </label>
            </td>';
    $row1 = '<td class="text-center">
                <a href="'.$config['site_url'].'storage/licenses/'.$filename.'" title="'.$filename.'" class="btn btn-primary" target="_blank">
                    <i class="fa fa-eye"></i> Preview
                </a>
            </td>';
    $row2 = '<td>'.$title.'</td>';
    $row3 = '<td>'.$from.'</td>';
    $row4 = '<td>'.$number.'</td>';
    $row5 = '<td class="hidden-xs">'.$username.'</td>';

    $row6 = '<td class="text-center">
                <div class="btn-group">
                    <a href="#" title="Delete" class="btn btn-xs btn-default item-js-delete" data-ajax-action="deleteLicen"><i class="ion-close"></i></a>
                </div>
            </td>';
    $value = array(
        "DT_RowId" => $id,
        0 => $row0,
        1 => $row1,
        2 => $row2,
        3 => $row3,
        4 => $row4,
        5 => $row5,
        6 => $row6
    );
    $data[] = $value;



}

$json_data = array(
    "draw"            => intval( $params['draw'] ),
    "recordsTotal"    => intval( $totalRecords ),
    "recordsFiltered" => intval($totalRecords),
    "data"            => $data   // total data array
);

echo json_encode($json_data);  // send data as json format
?>
