<!-- Project Portofolio
 * Web Developer    : Muhammad Rafli Putra
 * Company      : Warung Bang Rafli Cell
 * Release Date : 1 Maret 2021
 * Website      : https://www.muhrafliputra26.web.id, https://www.muhrafliputra.com
 * E-mail       : muhrafliputra26business@gmail.com
 * Phone        : +62 ( 404 )
 ---->

<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $nama_db = "dbpenjualanindomie";
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db);

  if(!$koneksi) {
    die ("Koneksi dengan database gagal: ". 'mysql_connect_error'());
  }
?>

<?php
$host     = 'localhost';
$user     = 'root'; // diisi dengan user database kalian biasanya
                    // defaultnya bernama root jika kita belum 
                    // merubahnya
$password = '';  //diisi dengan password database kalian biasanya
                 // defaultnya kosong
$db       = 'dbpenjualanindomie'; //diisi dengan nama database kalian
  
$con = mysqli_connect($host, $user, $password, $db);

if (!$con) {
    die("koneksi gagal:" .mysqli_connect_error());
}
?>