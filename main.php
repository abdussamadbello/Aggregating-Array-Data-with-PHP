<?php


$json_data=
    '[{
        "mon": "Jan",
        "month_orders": "349"
    },
    {
        "mon": "Feb",
        "month_orders": "414"
    },
    {
        "mon": "Mar",
        "month_orders": "401"
    },
    {
        "mon": "Apr",
        "month_orders": "481"
    },
    {
        "mon": "May",
        "month_orders": "444"
    },
    {
        "mon": "Jun",
        "month_orders": "526"
    },
    {
        "mon": "Jul",
        "month_orders": "565"
    },
    {
        "mon": "Aug",
        "month_orders": "591"
    },
    {
        "mon": "Sep",
        "month_orders": "800"
    },
    {
        "mon": "Oct",
        "month_orders": "848"
    },{
        "mon": "Nov",
        "month_orders": "557"
    },{
        "mon": "Mar",
        "month_orders": "401"
    },
    {
        "mon": "Apr",
        "month_orders": "481"
    },
    {
        "mon": "May",
        "month_orders": "444"
    },
    {
        "mon": "Jun",
        "month_orders": "526"
    }
   ]';
   
    
    $data_1=json_decode($json_data,true);
    
    $newdata =array();


foreach ($data_1 as $key => $value) {
   $month=$value['mon'];
   $month_orders=$value['month_orders'];
   switch($month){
   case 'Jan':
   $index=1;
   computedata($month,$month_orders,$index );
   break;
   case 'Feb':
   $index=2;
   computedata($month,$month_orders,$index );
   break;
   case 'Mar':
   $index=3;
   computedata($month,$month_orders,$index );
   break;
   case 'Apr':
   $index=4;
   computedata($month,$month_orders,$index );
   break;
   case 'May':
   $index=5;
   computedata($month,$month_orders,$index );
   break;
   case 'Jun':
   $index=6;
   computedata($month,$month_orders,$index );
   break;
   case 'Jul':
   $index=7;
   computedata($month,$month_orders,$index );
   break;
   case 'Aug':
   $index=8;
   computedata($month,$month_orders,$index );
   break;
   case 'Sep':
   $index=9;
   computedata($month,$month_orders,$index );
   break;
   case 'Oct':
   $index=10;
   computedata($month,$month_orders,$index );
   break;
   case 'Nov':
   $index=11;
   computedata($month,$month_orders,$index );
   break;
   case 'Dec':
   $index=12;
   computedata($month,$month_orders,$index );
   break;
   }
}


function computedata($month,$orders,$index){
global $newdata;
if (!isset($newdata[$index]['month_orders'])){
  $newdata[$index]['month_orders']= '0';
}
$val1 = $month;
$val2=$newdata[$index]['month_orders'] + $orders;
$newdata[$index]=array('mon'=>$val1,'month_orders'=>$val2);

}

print_r($newdata);

?>