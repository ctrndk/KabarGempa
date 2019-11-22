<?php
function h3ader(){
	echo "\n=================================================";
	echo "\n   KABAR GEMPA TERAKHIR | By @CTRNDK  @[V.01]";
	echo "\n_________________________________________________\n";
}

function getdata(){
	$url = "http://data.bmkg.go.id/autogempa.xml";
	$get = file_get_contents($url, False);
	$data = simplexml_load_string($get) or die("Error: Tidak Dapat Terhubung Ke Server!");
	echo "\n";
	echo " Tanggal   : ".$data->gempa->Tanggal."\n";
	echo " Jam       : ".$data->gempa->Jam."\n";
	echo "            -----------------------------------\n";
	echo " Lintang   : ".$data->gempa->Lintang."\n";
	echo " Bujur     : ".$data->gempa->Bujur."\n";
	echo " Magnitude : ".$data->gempa->Magnitude."\n";
	echo " Kedalaman : ".$data->gempa->Kedalaman."\n";
	echo "            -----------------------------------\n";
	echo " Wilayah   : ".$data->gempa->Wilayah1."\n";
	echo " Potensi   : ".$data->gempa->Potensi."\n";
	echo "\n=================================================";
	echo "\n            @CTRNDK - PENAT MEDIA";
	echo "\n=================================================";
}
system('clear');
	h3ader();
	getdata();

