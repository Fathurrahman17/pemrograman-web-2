<!DOCTYPE html>
    <head>
        <title>Operator Aritmatika</title>
    </head>
    <body>       
    <table  width="452" border="0" align="center"  cellpadding="0" cellspacing="1"  bgcolor="#000" style="padding: 2px">
    <tr>
            <td align="center"  bgcolor="#FFFFFF"><font  color="#000000">
                    <h2> Operator Aritmatika </h2>
                    <p>20192205102 - Fathurrahman </p>
                    <p>
                    <?php
                        $hari=date('l');
                        $bulan=date('m');
                        $tanggal=date('d');
                        $tahun=date('Y'); 

                        switch ($hari) 
                        {
                            case"Sunday":$hari="Minggu";break;
                            case"Monday":$hari="Senin";break;
                            case"Tuesday":$hari="Selasa";break;
                            case"Wednesday":$hari="Rabu";break;
                            case"Thursday":$hari="Kamis";break;
                            case"Friday":$hari="Jumat";break;
                            case"Saturday":$hari="Sabtu";break;
                        }

                        switch($bulan)
                        {
                            case"1":$bulan="Januari";break;
                            case"2":$bulan="Februari";break;
                            case"3":$bulan="Maret";break;
                            case"4":$bulan="April";break;
                            case"5":$bulan="Mei";break;
                            case"6":$bulan="Juni";break;
                            case"7":$bulan="Juli";break;
                            case"8":$bulan="Agustus";break;
                            case"9":$bulan="September";break;
                            case"10":$bulan="Oktober"; break;
                            case"11":$bulan="November";break;
                            case"12":$bulan="Desember";break;
                            }
                        echo "<br/>$hari, $tanggal-$bulan-$tahun ";echo date(" G:i:s");
                        ?>
                        </td>
                    </tr>
                    </p>
            
            <form action="" method="post">
            <tr>
            <td  bgcolor="#FFFFFF"><table width="452"  border="0" align="center" cellpadding="5"  cellspacing="0">
        <tr>
                   <td> <label class="col-sm-4 col-form-label ">Angka Pertama</label></td>
                       <td> <input type="text" class="form-control" name="angka1"></td>
        </tr>
        <tr>
                    <td><label class="col-sm-4 col-form-label">Angka Kedua</label></td>
                    <td><input type="text" class="form-control" name="angka2"></td>
        </tr>
        <tr>
            <td><input type="submit" class="btn btn-primary" name="hitung" value="hitung"/><td>
        </tr>
        </table>
        <table  width="452" border="0" align="center"  cellpadding="0" cellspacing="1"   style="padding: 2px">
            <?php
                $angka1 = isset($_POST["angka1"]) ? $_POST["angka1"] : "";               
                $angka2 = isset($_POST["angka2"]) ? $_POST["angka2"] : "";  

                
                    if($angka1 == "")
                    {
                        echo "
                        <tr>
                        <td>Angka pertama tidak boleh kosong</td> 
                        </tr>";
                    }
                
                    else if($angka2 == "")
                    {
                        echo "
                        <tr>
                        <td>Angka kedua tidak boleh kosong</td> 
                        </tr>";   
                    }
                    else if($angka1<$angka2)
                            {
                                echo "
                        <tr>
                        <td>Angka pertama harus lebih besar dari angka kedua</td> 
                        </tr>";
                            }
                    else
                    {
                        echo "";
                    }
            ?>
            </table>
            <p><h2>Hasil Operasi Aritmatika</h2></p>
            <?php
            if($angka1 && $angka2)
                        {
                            if($angka1<$angka2)
                            {
                                echo "";
                            }
                            else
                            {
                            echo "# Hasil Penjumlahan   = ".($angka1 + $angka2)."</br>";
                            echo "# Hasil Pengurangan   = ".($angka1 - $angka2)."</br>";
                            echo "# Hasil Perkalian     = ".($angka1 * $angka2)."</br>";
                            echo "# Hasil Pembagian     = ".($angka1 / $angka2)."</br>";
                            echo "# Sisa Hasil Bagi     = ".($angka1 % $angka2);
                            }
                        }
                        else
                        {
                            echo "";
                        }
            ?>
            </table>
          </form>
      </div>
    </body>
</html>