<div class="container mt-4">

  <!-- Judul Halaman -->
  <div class="text-center mb-4">
    <h2 class="fw-bold text-success">Input & Data Struktural Yaperi</h2>
    <p class="text-muted">Kelola data Struktural STAI YAPERI dengan mudah dan terorganisir.</p>
    <hr class="mx-auto" style="width: 200px; height: 3px; background: linear-gradient(135deg, #11998e, #38ef7d); border: none;">
  </div>

  <?php
  $notif = "";

  // Cek apakah sudah ada data
  $cek = $koneksi->query("SELECT COUNT(*) as jml FROM tb_dosen");
  $cekData = $cek->fetch_assoc();
  $sudahAda = $cekData['jml'] > 0;

  // Ambil data untuk edit
  if (isset($_GET['edit'])) {
      $id_edit = $_GET['edit'];
      $edit = $koneksi->query("SELECT * FROM tb_dosen WHERE id_dosen='$id_edit'");
      $data = $edit->fetch_assoc();
  }

  // Hapus data
  if (isset($_GET['hapus'])) {
      $id_hapus = $_GET['hapus'];
      $ambil = $koneksi->query("SELECT * FROM tb_dosen WHERE id_dosen='$id_hapus'");
      $hapusdata = $ambil->fetch_assoc();
      $folder = __DIR__ . '/../gbr/';

      if (!empty($hapusdata['gambar1']) && file_exists($folder . $hapusdata['gambar1'])) unlink($folder . $hapusdata['gambar1']);
      if (!empty($hapusdata['gambar2']) && file_exists($folder . $hapusdata['gambar2'])) unlink($folder . $hapusdata['gambar2']);

      $koneksi->query("DELETE FROM tb_dosen WHERE id_dosen='$id_hapus'");
      $notif = "<div class='alert alert-success text-center'><i class='fa fa-check-circle'></i> Data berhasil dihapus!</div>";
      $sudahAda = false;
  }

  // Tambah data baru
  if (isset($_POST['btn'])) {
      $gbr1 = $_FILES['gambar1']['name'];
      $gbr2 = $_FILES['gambar2']['name'];
      $folder = __DIR__ . '/../gbr/';

      if (!file_exists($folder)) mkdir($folder, 0777, true);
      move_uploaded_file($_FILES['gambar1']['tmp_name'], $folder . $gbr1);
      move_uploaded_file($_FILES['gambar2']['tmp_name'], $folder . $gbr2);

      $koneksi->query("INSERT INTO tb_dosen(gambar1, gambar2) VALUES('$gbr1', '$gbr2')");
      $notif = "<div class='alert alert-success text-center'><i class='fa fa-check-circle'></i> Data berhasil ditambahkan!</div>";
      $sudahAda = true;
  }

  // Update data
  if (isset($_POST['update'])) {
      $id = $_POST['id_dosen'];
      $gbr1 = $_FILES['gambar1']['name'];
      $gbr2 = $_FILES['gambar2']['name'];
      $folder = __DIR__ . '/../gbr/';
      $lama1 = $_POST['gambar1_lama'];
      $lama2 = $_POST['gambar2_lama'];

      if ($gbr1 != '') {
          if (!empty($lama1) && file_exists($folder . $lama1)) unlink($folder . $lama1);
          move_uploaded_file($_FILES['gambar1']['tmp_name'], $folder . $gbr1);
      } else {
          $gbr1 = $lama1;
      }

      if ($gbr2 != '') {
          if (!empty($lama2) && file_exists($folder . $lama2)) unlink($folder . $lama2);
          move_uploaded_file($_FILES['gambar2']['tmp_name'], $folder . $gbr2);
      } else {
          $gbr2 = $lama2;
      }

      $koneksi->query("UPDATE tb_dosen SET gambar1='$gbr1', gambar2='$gbr2' WHERE id_dosen='$id'");
      echo "<script>window.location.href='?page=dosen&status=updated';</script>";
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
    <!-- Form Input/Edit -->
    <div class="col-sm-4">
      <div class="card border-0 shadow-lg rounded-4">
        <div class="card-header text-white fw-bold" style="background: linear-gradient(135deg, #11998e, #38ef7d);">
          <i class="fa fa-upload me-2"></i>
          <?= isset($data) ? 'Edit Data Struktural' : 'Input Data Struktural'; ?>
        </div>

        <div class="card-body">
          <?php if ($sudahAda && !isset($data)) { ?>
            <div class="alert alert-warning text-center mb-0 bg-danger text-white">
              <i class="fa fa-exclamation-triangle"></i> Data Struktural sudah ada!<br>
             Silakan edit atau hapus data lama.
            </div>
          <?php } else { ?>
            <form method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_dosen" value="<?= isset($data) ? $data['id_dosen'] : ''; ?>">

              <div class="mb-3">
                <label class="form-label fw-semibold">Struktural STAI YAPERI:</label>
                <input type="file" class="form-control" name="gambar1" id="gambar1" <?= isset($data) ? '' : 'required' ?>>
                <?php if (isset($data) && $data['gambar1'] != '') { ?>
                  <img src="gbr/<?= $data['gambar1'] ?>" class="mt-2 rounded" style="width:100%; max-width:150px;">
                  <input type="hidden" name="gambar1_lama" value="<?= $data['gambar1'] ?>">
                <?php } ?>
              </div>

              <div class="mb-3 mt-3">
                <label class="form-label fw-semibold">Struktural Dosen & Pengajar:</label>
                <input type="file" class="form-control" name="gambar2" id="gambar2" <?= isset($data) ? '' : 'required' ?>>
                <?php if (isset($data) && $data['gambar2'] != '') { ?>
                  <img src="gbr/<?= $data['gambar2'] ?>" class="mt-2 rounded" style="width:100%; max-width:150px;">
                  <input type="hidden" name="gambar2_lama" value="<?= $data['gambar2'] ?>">
                <?php } ?>
              </div>

  <?php if (isset($data)) { ?>
                <button type="submit" name="update" class="btn w-100 text-white fw-bold mt-3"
                        style="background: linear-gradient(135deg, #11998e, #38ef7d); border: none;">
                  <i class="fa fa-paper-plane"></i> Update
                </button>

                <!-- ✅ Tombol Batal Edit -->
                <a href="?page=dosen" class="btn w-100 btn-danger fw-bold mt-2">
                  <i class="fa fa-times-circle"></i> Batal Edit
                </a>
              <?php } else { ?>
                <button type="submit" name="btn" class="btn w-100 text-white fw-bold mt-3"
                        style="background: linear-gradient(135deg, #11998e, #38ef7d); border: none;">
                  <i class="fa fa-paper-plane"></i> Submit
                </button>
              <?php } ?>
            </form>
          <?php } ?>
        </div>
      </div>
    </div>

    <!-- Output Data -->
    <div class="col-sm-8">
      <div class="card border-0 shadow-lg rounded-4">
        <div class="card-header text-white fw-bold" style="background: linear-gradient(135deg, #11998e, #38ef7d);">
          <i class="fa fa-database me-2"></i> Output Data Struktural STAI YAPERI
        </div>

        <div class="card-body output-scroll">
          <table class="table table-hover table-bordered align-top text-start">
            <thead class="text-center">
              <tr>
                <th>No</th>
                <th>Struktural STAI YAPERI</th>
                <th>Struktural Dosen & Pengajar</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              $sqloutput = $koneksi->query("SELECT * FROM tb_dosen");
              while ($tampil = $sqloutput->fetch_array()) {
              ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><img src="gbr/<?= $tampil['gambar1'] ?>" style="width:90px; border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.2);"></td>
                  <td><img src="gbr/<?= $tampil['gambar2'] ?>" style="width:90px; border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.2);"></td>
                  <td class="text-center">
                    <a href="?page=dosen&edit=<?= $tampil['id_dosen'] ?>" class="btn btn-sm btn-success">
                      <i class="fa fa-edit"></i> Edit
                    </a>
                    <a href="?page=dosen&hapus=<?= $tampil['id_dosen'] ?>" class="btn btn-sm btn-danger ms-2" onclick="return confirm('Yakin ingin hapus data ini?')">
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
  </div>
</div>

<style>

.card {
  border: none;
  border-radius: 15px;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
}

.card-header {
  border-top-left-radius: 15px !important;
  border-top-right-radius: 15px !important;
}

/* Container scroll hanya untuk isi tabel */
.output-scroll {
  display: block;
  max-height: 520px;
  overflow-y: auto;
  overflow-x: auto;
  padding-bottom: 0.5rem;
  width: 100%;
  position: relative;
}

/* Biar tabel ga geser-geser */
.output-scroll table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 0;
  background-color: #f7f7f9;
}

/* Kepala tabel tetap di atas (sticky header) */
.output-scroll thead th {
  position: sticky;
  top: 0;
  background: linear-gradient(135deg, #e9ecef, #dee2e6);
  z-index: 2;
}

/* Biar teks semua rata tengah */
.table td,
.table th {
  vertical-align: middle !important;
  text-align: center !important;
  font-size: 13px;
  padding: 10px;
}

/* Warna dan garis tabel */
.table {
  border: 1px solid #ddd;
  font-size: 15px;
}

.table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

.table tbody tr:hover {
  background-color: #eefaf0;
}

/* Scrollbar custom */
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

</style>
