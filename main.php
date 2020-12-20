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
   $index=0;
   computedata($month,$month_orders,$index );
   break;
   case 'Feb':
   $index=1;
   computedata($month,$month_orders,$index );
   break;
   case 'Mar':
   $index=2;
   computedata($month,$month_orders,$index );
   break;
   case 'Apr':
   $index=3;
   computedata($month,$month_orders,$index );
   break;
   case 'May':
   $index=4;
   computedata($month,$month_orders,$index );
   break;
   case 'Jun':
   $index=5;
   computedata($month,$month_orders,$index );
   break;
   case 'Jul':
   $index=6;
   computedata($month,$month_orders,$index );
   break;
   case 'Aug':
   $index=7;
   computedata($month,$month_orders,$index );
   break;
   case 'Sep':
   $index=8;
   computedata($month,$month_orders,$index );
   break;
   case 'Oct':
   $index=9;
   computedata($month,$month_orders,$index );
   break;
   case 'Nov':
   $index=10;
   computedata($month,$month_orders,$index );
   break;
   case 'Dec':
   $index=11;
   computedata($month,$month_orders,$index );
   break;
   }
}


function computedata($month,$orders,$index){

//referencing the new array as a global scope after initializatioon  
global $newdata;

//check if array is empty/undefined, if yes set it to 0
if (!isset($newdata[$index]['month_orders'])){
  $newdata[$index]['month_orders']= '0';
}

//fill the variables
$val1 = $month;
//add month order variable to existing month order array
$val2=$newdata[$index]['month_orders'] + $orders;
//add variables to the new array according to the index
$newdata[$index]=array('mon'=>$val1,'month_orders'=>$val2);

}

print_r($newdata);

?>