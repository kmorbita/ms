<?php 


if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = '';
}

switch($page){
    case 'dashboard':
    include('dashboard.php');
    break;
    case 'changepass':
    include('changepass.php');
    break;
    case 'item':
    include('item.php');
    break;
    case 'withdraw':
    include('withdraw.php');
    break;
    case 'borrower':
    include('borrower.php');
    break;
    default:
    include('dashboard.php');
    break;
}
?>
