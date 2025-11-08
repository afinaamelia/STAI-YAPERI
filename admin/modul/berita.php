<div class="container mt-4">

  <!-- Judul Halaman -->
  <div class="text-center mb-4">
    <h2 class="fw-bold text-success">Input & Data Berita STAI YAPERI</h2>
    <p class="text-muted">Kelola Berita STAI YAPERI dengan mudah dan terorganisir.</p>
    <hr class="mx-auto" style="width: 200px; height: 3px; background: linear-gradient(135deg, #11998e, #38ef7d); border: none;">
  </div>

  <?php
  // 🔹 Notifikasi
  $notif = "";

  // 🔹 Cek apakah ada data
  $cekdata = $koneksi->query("SELECT * FROM tb_berita");
  $sudahAda = $cekdata->num_rows > 0;

  // 🔹 Jika tombol Edit diklik
  if (isset($_GET['edit'])) {
      $id_edit = $_GET['edit'];
      $edit = $koneksi->query("SELECT * FROM tb_berita WHERE id_berita='$id_edit'");
      $data = $edit->fetch_assoc();
  }

  // 🔹 Hapus Data
  if (isset($_GET['hapus'])) {
      $id_hapus = $_GET['hapus'];
      $ambil = $koneksi->query("SELECT * FROM tb_berita WHERE id_berita='$id_hapus'");
      $hapusdata = $ambil->fetch_assoc();
      $folder = __DIR__ . '/../gbr/';
      if (!empty($hapusdata['gambar']) && file_exists($folder . $hapusdata['gambar'])) {
          unlink($folder . $hapusdata['gambar']);
      }
      $koneksi->query("DELETE FROM tb_berita WHERE id_berita='$id_hapus'");
      $notif = "<div class='alert alert-success text-center'><i class='fa fa-check-circle'></i> Data berhasil dihapus!</div>";
  }

  // 🔹 Tambah Data
  if (isset($_POST['btn'])) {
      $no = $_POST['nomor'];
      $jdl = $_POST['judul'];
      $tgl = $_POST['tanggal'];
      $wkt = $_POST['waktu'];
      $gbr = $_FILES['gambar']['name'];
      $dskrp = $_POST['deskripsi'];
      $folder = __DIR__ . '/../gbr/'; // path absolut ke folder gbr
      if (!file_exists($folder)) {
          mkdir($folder, 0777, true); // buat otomatis kalau belum ada
      }

      move_uploaded_file($_FILES['gambar']['tmp_name'], $folder . $gbr);
     $sql = "INSERT INTO tb_berita(nomor,judul,tanggal,waktu,gambar,deskripsi)
        VALUES('$no','$jdl','$tgl','$wkt','$gbr','$dskrp')";
if ($koneksi->query($sql)) {
    $notif = "<div class='alert alert-success text-center'><i class='fa fa-check-circle'></i> Data berhasil ditambahkan!</div>";
} else {
    echo "<div class='alert alert-danger text-center'><b>Error:</b> " . $koneksi->error . "</div>";
}

  }

  // 🔹 Update Data
  if (isset($_POST['update'])) {
      $id = $_POST['id_berita'];
      $no = $_POST['nomor'];
      $jdl = $_POST['judul'];
      $tgl = $_POST['tanggal'];
      $wkt = $_POST['waktu'];
      $gbr = $_FILES['gambar']['name'];
      $dskrp = $_POST['deskripsi'];
      $folder = __DIR__ . '/../gbr/';
      $gambar_lama = $_POST['gambar_lama'];

      if ($gbr != '') {
          if (!empty($gambar_lama) && file_exists($folder . $gambar_lama)) {
              unlink($folder . $gambar_lama);
          }
          move_uploaded_file($_FILES['gambar']['tmp_name'], $folder . $gbr);
          $update = $koneksi->query("UPDATE tb_berita SET nomor='$no', judul='$jdl', tanggal='$tgl', waktu='$wkt', gambar='$gbr', deskripsi='$dskrp' WHERE id_berita='$id'");
      } else {
          $update = $koneksi->query("UPDATE tb_berita SET nomor='$no', judul='$jdl', tanggal='$tgl', waktu='$wkt', deskripsi='$dskrp' WHERE id_berita='$id'");
      }

      echo "<script>window.location.href='?page=berita&status=updated';</script>";
      exit;
  }

  if (isset($_GET['status']) && $_GET['status'] == 'updated') {
      $notif = "<div class='alert alert-success text-center'><i class='fa fa-check-circle'></i> Data berhasil diperbarui!</div>";
  }
  ?>

  <!-- Notifikasi -->
  <div id="notif-area"><?= $notif ?></div>
  <script>
    setTimeout(() => {
      const notif = document.getElementById('notif-area');
      if (notif) notif.innerHTML = '';
    }, 3000);
  </script>

  <div class="row g-4">

    <!-- FORM INPUT / EDIT -->
    <div class="col-sm-4">
      <div class="card border-0 shadow-lg rounded-4">
        <div class="card-header text-white fw-bold" style="background: linear-gradient(135deg, #11998e, #38ef7d);">
          <i class="fa fa-plus-circle"></i> <?= isset($data) ? "Edit Data Berita" : "Input Data Berita"; ?>
        </div>
        <div class="card-body">

          <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_berita" value="<?= isset($data) ? $data['id_berita'] : ''; ?>">
            <div class="mb-3">
              <label class="form-label">Nomor Berita:</label>
              <input type="number" class="form-control" name="nomor" value="<?= isset($data) ? $data['nomor'] : ''; ?>" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Judul Berita:</label>
              <input type="text" class="form-control" name="judul" value="<?= isset($data) ? $data['judul'] : ''; ?>" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Tanggal:</label>
              <input type="date" class="form-control" name="tanggal" value="<?= isset($data) ? $data['tanggal'] : ''; ?>" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Waktu:</label>
              <input type="text" class="form-control" name="waktu" value="<?= isset($data) ? $data['waktu'] : ''; ?>" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Gambar Berita:</label>
              <input type="file" class="form-control" name="gambar" <?= isset($data) ? '' : 'required' ?>>
              <?php if (isset($data) && $data['gambar'] != '') { ?>
                <img src="gbr/<?= $data['gambar']; ?>" class="mt-2 rounded" style="width:100%; max-width:120px;">
                <input type="hidden" name="gambar_lama" value="<?= $data['gambar']; ?>">
              <?php } ?>
            </div>

            <div class="mb-3">
              <label class="form-label">Deskripsi:</label>
              <textarea class="form-control" name="deskripsi" rows="3"><?= isset($data) ? $data['deskripsi'] : ''; ?></textarea>
            </div>

              <?php if (isset($data)) { ?>
                <button type="submit" name="update" class="btn w-100 text-white fw-bold mt-3"
                        style="background: linear-gradient(135deg, #11998e, #38ef7d); border: none;">
                  <i class="fa fa-paper-plane"></i> Update
                </button>

                <!-- ✅ Tombol Batal Edit -->
                <a href="?page=berita" class="btn w-100 btn-danger fw-bold mt-2">
                  <i class="fa fa-times-circle"></i> Batal Edit
                </a>
              <?php } else { ?>
                <button type="submit" name="btn" class="btn w-100 text-white fw-bold mt-3"
                        style="background: linear-gradient(135deg, #11998e, #38ef7d); border: none;">
                  <i class="fa fa-paper-plane"></i> Submit
                </button>
              <?php } ?>
          </form>

        </div>
      </div>
    </div>


<style>
/* Style umum sama kayak halaman ketua */
.card {
  border: none;
  border-radius: 15px;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
}

.card-header {
  border-top-left-radius: 15px !important;
  border-top-right-radius: 15px !important;
}

/* Scroll hanya di output */
.output-scroll {
  max-height: 520px;
  overflow-y: auto;
  overflow-x: auto;
  padding-bottom: 0.5rem;
}

/* Semua isi tabel rata atas */
.table tbody tr td {
  vertical-align: top !important;
  white-space: normal;
  text-align: justify;
}

/* Gambar biar kelihatan rapi */
.table img {
  border-radius: 6px;
  object-fit: cover;
}

/* Header tabel biar soft */
.table thead {
  background-color: #f7f7f9;
}

/* Scrollbar halus dan minimalis */
.output-scroll::-webkit-scrollbar {
  width: 8px;
  height: 8px;
}
.output-scroll::-webkit-scrollbar-thumb {
  background: grey;
  border-radius: 10px;
}
.output-scroll::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 10px;
}

/* Table jadi lebih lebar dari container */
.table {
  min-width: 1187px; /* biar teks gak numpuk dan spasi antar kolom lega */
   font-size:15px;
}
/* Header tabel (background abu elegan) */
.table thead {
  font-weight: 600;
  text-transform: uppercase;
}

.table thead th {
  padding: 12px 10px;
  text-align: center;
  font-size: 14px;
  letter-spacing: 0.1px;
  background: linear-gradient(135deg, #e9ecef, #dee2e6); /* abu lembut dengan gradasi */
}

/* Kolom judul agak lebih sempit */
.table td:nth-child(2),
.table th:nth-child(2) {
  width: 260px;
   text-align: center;
  }
/* Kolom tanggal agak lebih sempit */
.table td:nth-child(3),
.table th:nth-child(3) {
  width: 120px;
  text-align: center;
}
/* Kolom waktu agak lebih sempit */
.table td:nth-child(4),
.table th:nth-child(4 ) {
  width: 120px;
  text-align: center;
}
/* Kolom deskripsi lebih lebar */
.table td:nth-child(6),
.table th:nth-child(6) {
  width: 350px;
}

/* Kolom aksi sejajar tengah */
.table td:last-child,
.table th:last-child {
  width: 100px;
  text-align: center;
  vertical-align: middle !important;
}
/* Kolom judul agak lebih sempit */
.table td:nth-child(5),
.table th:nth-child(5) {
  width: 150px;
  text-align: center;
  }
/* Kolom nomor berita rata tengah */
.table td:nth-child(1),
.table th:nth-child(1) {
  text-align: center;
  width: 1rem;
}

/* Style untuk deskripsi dengan efek baca selengkapnya */
.deskripsi-singkat {
  max-height: 11rem;
  overflow: hidden;
  position: relative;
  text-align: justify;
}

.deskripsi-singkat::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 20px;
  background: linear-gradient(to bottom, rgba(255,255,255,0), #fff);
}

.read-more {
  color: #0d6efd;
  cursor: pointer;
  font-size: 0.875rem;
  font-weight: 500;
  text-decoration: none;
}

.read-more:hover {
  text-decoration: underline;
}
</style>

<!-- OUTPUT DATA BERITA -->
<div class="col-sm-8">
  <div class="card border-0 shadow-lg rounded-4">
    <div class="card-header text-white fw-bold" style="background: linear-gradient(135deg, #11998e, #38ef7d);">
      <i class="fa fa-database"></i> Output Data Berita
    </div>

    <div class="card-body output-scroll">
      <table class="table table-hover table-bordered align-top text-start">
        <thead class="text-center">
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sqloutput = $koneksi->query("SELECT * FROM tb_berita");
          while ($tampil = $sqloutput->fetch_array()) {
            $deskripsi = $tampil['deskripsi'];
          ?>
          <tr>
            <td><?= $tampil['nomor'] ?></td>
            <td><?= $tampil['judul'] ?></td>
            <td><?= $tampil['tanggal'] ?></td>
            <td><?= $tampil['waktu'] ?></td>
            <td><img src="gbr/<?= $tampil['gambar'] ?>" style="width:80px; height:60px;"></td>
            <td>
              <div class="deskripsi-singkat" id="desk-<?= $tampil['id_berita'] ?>">
                <?= nl2br($deskripsi) ?>
              </div>
              <a class="read-more" data-id="<?= $tampil['id_berita'] ?>">Baca Selengkapnya</a>
            </td>
            <td class="text-center align-middle">
              <a href="?page=berita&edit=<?= $tampil['id_berita'] ?>" class="btn btn-success btn-sm mb-1">
                      <i class="fa fa-edit"></i> Edit
                    </a><br>
                    <a href="?page=berita&hapus=<?= $tampil['id_berita'] ?>" class="btn btn-danger btn-sm">
                      <i class="fa fa-trash"></i> Hapus
                    </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
// Script untuk "Baca Selengkapnya"
document.querySelectorAll(".read-more").forEach(btn => {
  btn.addEventListener("click", () => {
    const id = btn.getAttribute("data-id");
    const deskripsi = document.getElementById("desk-" + id);

    if (deskripsi.classList.contains("deskripsi-singkat")) {
      deskripsi.classList.remove("deskripsi-singkat");
      btn.textContent = "Tutup";
    } else {
      deskripsi.classList.add("deskripsi-singkat");
      btn.textContent = "Baca Selengkapnya";
    }
  });
});
</script>

