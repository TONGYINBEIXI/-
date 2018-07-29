<?php  
// $a = [
// 	'0'=>['name'=>'zhangsan','sex'=>'nan'],
// 	'1'=>['name'=>'lisi','sex'=>'nan'],
// ];
//     // $c=['name'=>'wangwu','sex'=>'nv'];
//     # $a['3']=$a['1'];
//      // $a['3']=array('name'=>'wangwu','sex'=>'nv');
//      // // $a['3']=['name'=>'wangwu','sex'=>'nv'];
//      // $a['0']=['name'=>'zhangsan','sex'=>'nan','age'=>18];
//      // $a['1']=['name'=>'zhangsan','sex'=>'nan','age'=>18];
//      // $a['3']=['name'=>'zhangsan','sex'=>'nan','age'=>18];
//      // echo "<pre>";
//      // print_r($a);
//     echo "<pre>";
//     $b = array();
//     $b = [];
// foreach ($a as $k=>$v) {
// 			$v['age']=18;
//             $b[$k] = $v;

//           // 
//           //   echo "<pre>";
//           # print_r($v);
//             // echo "<pre>";
// }

// print_r($b);

// // $b = [1,2,3,4,5,6];

// // echo $b[6]=7;

$a=3;
$b=5;
echo $a.$b.'</br>';
$a=&$b;
echo $a.$b.'</br>';

$b=4;
 echo $a.$b.'</br>';
 $a=1;
