<?php
include"modul/partials/header.php";
$page = isset($_GET['page'])?$_GET['page'] :'';
switch ($page) {
  case 'about':
    include"modul/about.php";
    break;
    case'pmb':
      include"modul/pmb.php";
      break;
      case'kerjasama':
      include"modul/kerjasama.php";
      break;
      case'kontak':
      include"modul/kontak.php";
      break;
      case'ketua':
      include"modul/ketua.php";
      break;
      case'dosen':
      include"modul/dosen.php";
      break;
      case'dema':
      include"modul/dema.php";
      break;
  
  default:
    include"modul/home.php";
    break;
}

include "modul/partials/footer.php";
?>