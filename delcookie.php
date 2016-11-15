<?php
for ($i = 1;$i<10 ; $i++) { 
	$fo =  @fopen("cailonchau".$i.".txt", "w+" );
	fwrite($fo," ");
	fclose($fo);
	vudz('http://domain/lammoi'.$i.'.php');
}
header('Location: index.php');
function vudz($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
?>