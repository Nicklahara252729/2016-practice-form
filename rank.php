<?php
$angka=array(23,45,34,56,25,45);
$jml=count($angka)-1;
for($i=0;$i<=$jml;$i++){
    echo"angka ke".$i."=".$angka[$i]."<br>";
}
for($a=0;$a<=$jml;$a++){
    for($b=$a;$b<=$jml;$b++){
        if($angka[$b]<$angka[$a]){
            $tmp=$angka[$b];
            $angka[$b]=$angka[$a];
            $angka[$a]=$tmp;
        }
    }
}
echo"<br>";
echo"hasil urutan data ASC <br>";
for($i=0;$i<=$jml;$i++){
    echo $angka[$i].'<br>';
}
?>