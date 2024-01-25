<?php
function Peserta($anak, $Peserta, $anak1, $anak2, $anak3, $anak4, $anak5, $anak6, $anak7 ){
    for($anak; $anak <= $Peserta; $anak++){
        if($anak == $anak7 || $anak == $anak5){
            echo"Peserta didik no  absen $anak Sakit <br />";
        }else if($anak == $anak4 || $anak == $anak3){
            echo"Peserta didik no  absen $anak Terlambat <br />";
        }else if($anak == $anak1 || $anak == $anak2 || $anak == $anak6){
            echo"Peserta didik no  absen $anak Tidak hadir <br />";
        }else{
            echo"Peserta didik no  absen $anak Hadir <br />";
        }
    }
}
echo Peserta(1, 15, 2, 3, 6, 8, 9, 10, 13);


?>