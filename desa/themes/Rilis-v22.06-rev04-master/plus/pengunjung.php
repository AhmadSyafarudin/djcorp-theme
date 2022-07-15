<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php

$CI =& get_instance();
$CI->load->library('user_agent');

if ($CI->agent->is_browser())
{
        $browser = $CI->agent->browser().' '.$CI->agent->version();
}
elseif ($CI->agent->is_robot())
{
        $browser = $CI->agent->robot();
}
elseif ($CI->agent->is_mobile())
{
        $browser = $CI->agent->mobile();
}
else
{
        $browser = 'Tidak ditemukan';
}

$ip = $CI->input->ip_address();
$os = $CI->agent->platform();

if(!isset($_SESSION['MemberOnline']))
{
	$cek = $this->db->query("SELECT Tanggal,ipAddress FROM sys_traffic WHERE Tanggal='".date("Y-m-d")."'");
	if($cek->num_rows()==0)
	{
		$up = $this->db->query("INSERT INTO sys_traffic (Tanggal,ipAddress,Jumlah) VALUES ('".date("Y-m-d")."','".$ip."','1')");
		$_SESSION['MemberOnline']=date('Y-m-d H:i:s');
	}
	else
	{
		$res = $cek->result_array();
		$ipaddr = $res['ipAddress'].$ip;
		$up = $this->db->query("UPDATE sys_traffic SET Jumlah=Jumlah + 1,ipAddress='".$ipx."' WHERE Tanggal='".date("Y-m-d")."'");
		$_SESSION['MemberOnline']=date('Y-m-d H:i:s');
	}
}

$rs = $this->db->query('SELECT Jumlah AS Visitor FROM sys_traffic WHERE Tanggal="'.date("Y-m-d").'" LIMIT 1');
if($rs->num_rows()>0)
{
	$visitor = $rs->row(0);
	$today = $visitor->Visitor;
}
else
{
	$today = 0;
}

$strSQL = "SELECT Jumlah AS Visitor FROM sys_traffic WHERE Tanggal=(SELECT DATE_ADD(CURDATE(),INTERVAL -1 DAY) FROM sys_traffic LIMIT 1) LIMIT 1";
$rs = $this->db->query($strSQL);
if($rs->num_rows()>0)
{
	$visitor = $rs->row(0);
	$yesterday = $visitor->Visitor;
}
else
{
	$yesterday = 0;
}

$rs = $this->db->query('SELECT SUM(Jumlah) as Total FROM sys_traffic');
$visitor = $rs->row(0);
$total = $visitor->Total;
		
?>


	<table style="width:100%;">
		<tr>
			<td width="35%">Hari Ini</td>
			<td width="5%" style="text-align:center;">:</td>
			<td width="60%"><?= ribuan($statistik_pengunjung['hari_ini']); ?></td>
		</tr>
		<tr>
			<td width="35%">Kemarin</td>
			<td width="5%" style="text-align:center;">:</td>
			<td width="60%"><?= ribuan($statistik_pengunjung['kemarin']); ?></td>
		</tr>
		<tr>
			<td width="35%">Total</td>
			<td width="5%" style="text-align:center;">:</td>
			<td width="60%"><?= ribuan($statistik_pengunjung['total']); ?></td>
		</tr>
		<tr>
			<td width="35%">IP Anda</td>
			<td width="5%" style="text-align:center;">:</td>
			<td width="60%"><?= $statistik_pengunjung['ip_address']; ?></td>
		</tr>
		<tr>
			<td width="35%">Browser</td>
			<td width="5%" style="text-align:center;">:</td>
			<td width="60%"><?= $statistik_pengunjung['browser']; ?></td>
		</tr>
		<tr>
			<td width="35%">OS</td>
			<td width="5%" style="text-align:center;">:</td>
			<td width="60%"><?= $statistik_pengunjung['os']; ?></td>
		</tr>
	</table>



