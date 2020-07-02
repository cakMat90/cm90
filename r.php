<?php
date_default_timezone_set('Asia/Surabaya');
include "function.php";
echo "\e[99m_________________\e[99m".date('[d-m-Y] [H:i:s]')."\e[99m________________\n";
echo "\e[92m鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻琝n";
echo "\e[92m鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻琝n";
echo "\e[99m      \e[99m Dorr Gofood!! Gunakan Dengan Bijak! \e[99m \n";
echo "\e[99m   \e[99m                 @Warkop BSMW _ \e[99m \n";
echo "\e[92m  ==============================================\n";
echo "\e[94m  =\e[97m 馃じ  1. VOUCHER GOFOOD EATLAH 鉁�1�71锟�1�77          馃嚠馃嚛 \e[92m=\n";
echo "\e[94m  =\e[94m 馃じ  2. VOUCHER GOFOOD 20K MINBEL 30K  鉁�1�71锟�1�77 馃嚠馃嚛 \e[92m=\n";
echo "\e[94m  =\e[97m 馃じ  3. VOUCHER GOFOOD 10K MINBEL 30K  鉁�1�71锟�1�77 馃嚠馃嚛 \e[92m=\n";
echo "\e[94m  =\e[94m 馃じ  4. VOUCHER DISKON Lainnya   鉁�1�71锟�1�77     馃嚠馃嚛 \e[92m=\n";
echo "\e[91m  ==============================================\n";
echo "\e[91m鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻琝n";
echo "\e[99m Sudah Punya User Id (Y/N ?: ";	
$pilihy = trim(fgets(STDIN));
if($pilihy == "y" || $pilihy == "sudah")
echo "\e[93m鈻柆鈻柆鈻琾ilih y atau sudah鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻琝n";
	goto login;
login:
echo "\e[93m鈻柆鈻柆鈻瑃uliskan bacaan kk di bawah ini鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆\n";
$pass =  ( '鈺�1�71锟�1�77 User Login : ' );
echo "\033[30;40m";
$user = trim(fgets(STDIN));
echo "\033[0m";
if($user == "kk")
{
	echo "\e[91m鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻琝n";
	echo "\e[91m鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻琝n";
	echo "\e[91m Ketik Nama Anda ?: ";
	$input = trim(fgets(STDIN));
	echo "\e[99m鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻琝n";
		goto ulang;
}
else
{
		echo "\e[99m鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻琝n";	
		echo "\e[91m鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻琝n";
		echo "\e[93m[馃毇]        \e[91mMasukkan User Registrasi      \e[93m [馃毇]\n";
	        echo "\e[93m[馃毇]              \e[91m鈿狅笍 WARNING 鈿狅笍             \e[93m [馃毇]\n";
		echo "\e[93m[馃毇]           \e[91mSEGERA MINTA IZIN          \e[93m [馃毇]\n";
	        echo "\e[93m[馃毇]             \e[91m@warkop BSMW      \e[93m [馃毇]\n";
		echo "\e[99m鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻琝n";
goto login;
}
	return rtrim( $input, "\n" );
ulang:
echo "\n";
echo "\e[99m            (Halo Apa Kabarmu $input)               \n";
echo "\e[89m鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻柆鈻琝n";
// function change(){
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        echo color("green","馃摬鈻讹笍 Nomor : ");
        // $no = trim(fgets(STDIN));
        $nohp = trim(fgets(STDIN));
        $nohp = str_replace("62","62",$nohp);
        $nohp = str_replace("(","",$nohp);
        $nohp = str_replace(")","",$nohp);
        $nohp = str_replace("-","",$nohp);
        $nohp = str_replace(" ","",$nohp);

        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            if (substr(trim($nohp),0,3)=='62') {
                $hp = trim($nohp);
            }
            else if (substr(trim($nohp),0,1)=='0') {
                $hp = '62'.substr(trim($nohp),1);
        }
         elseif(substr(trim($nohp), 0, 2)=='62'){
            $hp = '6'.substr(trim($nohp), 1);
        }
        else{
            $hp = '1'.substr(trim($nohp),0,13);
        }
    }
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$hp.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("pink","馃摱鈻讹笍 Kode verifikasi sudah di kirim")."\n";
        otp:
        echo color("purple","馃挰鈻讹笍 Otp : ");
        $otp = trim(fgets(STDIN));
  
