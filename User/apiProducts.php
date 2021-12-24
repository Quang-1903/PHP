<?php
session_start();

// if (!empty($_POST)){
	require_once('../database.php');

	if (isset($_POST['action'])) {
		$action=$_POST['action'];
	}
	if (isset($_POST['id'])) {
		$id=$_POST['id'];
	}
	switch ($action) {
		case 'add':
			addToCart($id);
			break;
		case 'delete':
			deletaItem($id);
			break;
		
	}

//}
 
function addToCart($id){
	$cart=[];
	if(isset($_SESSION['cart'])){
		$cart=$_SESSION['cart'];

	}
	$isFind= false;
	for ($i=0; $i < count($cart); $i++) { 
		if ($cart[$i]['MaSP']==$id) {
			$cart[$i]['SoLuong']++;
			$isFind = true;
			break;
		}
	}
	if (!$isFind) {

	    $tsanpham = executeSingleResult("select * from sanpham where MaSP='$id'");	
         $tsanpham['SoLuong']=1;
	    $cart[]=$tsanpham;
	}

	//update session
	$_SESSION['cart']=$cart;
}
function deletaItem($id){
	$cart=[];
	if(isset($_SESSION['cart'])){
		$cart=$_SESSION['cart'];

	}
	for ($i=0; $i < count($cart); $i++) { 
		if ($cart[$i]['MaSP']==$id) {
            array_splice($cart, $i,1);
			break;
		}
	}

	//update session
	$_SESSION['cart']=$cart;
}