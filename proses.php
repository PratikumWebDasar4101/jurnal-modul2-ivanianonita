
$angka=$_POST['angka'];

echo "angka = $angka<br>";
echo "Bentuk Piramida<br>";

function rekrusif($angka){
	global $i;
	rekrusif2($i, $angka);
	echo"<br>";
	if (--$angka>$i){
		rekrusif($angka);
	}
}
function rekrusif2($j,$angka){
	global $i;
	if($j > $i - $angka){
		echo"*";
		rekrusif2($j-1, $angka);
	}
}

$inputan = $_POST["input"];
$i=0;
rekrusif($inputan);

for($i=1;$i<=$inputan; $i++){
	if($i % 2 == 0){
		$genap[]=$i;

	}else{
		$ganjil[]=$i;
	}
}
 foreach ($genap as $bil_genap) {
 	echo $bil_genap.',';
 	# code...
 }
 echo"<br>";
 foreach($ganjil as $bil_ganjil){
 	echo $bil_ganjil.',';
 }
 <?php 
//Tuliskan kode anda di bawah ini

?>
