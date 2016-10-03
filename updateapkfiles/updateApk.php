<?php
header ( 'Content-type:text/json' );

$action = $_POST ['action'];
switch($action){
	case 'getServerApkInfo':
		sendServerApkInfo();
		break;
	default :
            echo "Unkown Data ： 未知数据";
		break;
}

function sendServerApkInfo()
{
	$returnArray = array ();

	$arrayApkVersion = array (
			'ApkName' => "FingerShop.apk",
			'ApkVersionCode' => "2",
			'ApkVersionName' => "1.0.1",
			'ApkUpdateFlag' => "NO",
			'ApkUpdateUrl' => "http://192.168.2.31:8899/ApkUpdateFiles/FingerShop.apk",
			'ApkUpdateDialogTitle' => "软件更新",
			'ApkUpdateDialogContent' => "发现新版本，是否更新",
			'ApkUpdateDialogDescription' => "新增功能;优化了用户体验",
			'ApkRetryDialogTitle' => "下载失败",
			'ApkRetryDialogContent' => "下载失败，是否重新下载",
			'ApkDownloadDialogTitle' => "正在下载",
			'ApkDownloadDialogContent' => "正在下载，请稍后...",
			'ApkDownloadDir' => "JingRuiWorkFiles/ApkUpdate/",
			'ApkShowDebug' => "YES"
	);
	$returnArray [] = $arrayApkVersion;

	$returnValue = json_encode ( $returnArray );
	echo $returnValue;
}
