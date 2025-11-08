<div class="container mt-4">

  <!-- Judul Halaman -->
  <div class="text-center mb-4">
    <h2 class="fw-bold text-success">Input & Data Kalender Akademik</h2>
    <p class="text-muted">Kelola data kalender akademik STAI YAPERI dengan mudah dan terorganisir.</p>
    <hr class="mx-auto" style="width:200px; height:3px; background:linear-gradient(135deg,#11998e,#38ef7d); border:none;">
  </div>

  <?php
  $notif = "";

  // Cek apakah sudah ada data
  $cek_data = $koneksi->query("SELECT * FROM tb_akademik");
  $jumlah_data = $cek_data->num_rows;

  // Hapus Data
  if (isset($_GET['hapus'])) {
      $id_hapus = $_GET['hapus'];
      $ambil = $koneksi->query("SELECT * FROM tb_akademik WHERE id_akademik='$id_hapus'");
      $hapusdata = $ambil->fetch_assoc();
      $folder = __DIR__ . '/../gbr/';
      if (!empty($hapusdata['gambar']) && file_exists($folder . $hapusdata['gambar'])) {
          unlink($folder . $hapusdata['gambar']);
      }
      $koneksi->query("DELETE FROM tb_akademik WHERE id_akademik='$id_hapus'");
      $notif = "<div class='alert alert-success text-center'><i class='fa fa-check-circle'></i> Data berhasil dihapus!</div>";
      echo "<script>setTimeout(() => { window.location='?page=akademik'; }, 1000);</script>";
  }

  // Tambah Data
  if (isset($_POST['btn'])) {
      $folder = __DIR__ . '/../gbr/';
      if (!file_exists($folder)) mkdir($folder, 0777, true);

      $gbr = $_FILES['gambar']['name'];
      $tmp = $_FILES['gambar']['tmp_name'];

      if (!empty($gbr)) {
          move_uploaded_file($tmp, $folder . $gbr);
          $sql = $koneksi->query("INSERT INTO tb_akademik (gambar) VALUES ('$gbr')");
          $notif = "<div class='alert alert-success text-center'><i class='fa fa-check-circle'></i> Data berhasil ditambahkan!</div>";
          echo "<script>setTimeout(() => { window.location='?page=akademik'; }, 1000);</script>";
      } else {
          $notif = "<div class='alert alert-warning text-center'><i class='fa fa-exclamation-triangle'></i> Harap pilih gambar terlebih dahulu!</div>";
      }
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

    <!-- Input Data -->
    <div class="col-sm-4">
      <div class="card border-0 shadow-lg rounded-4">
        <div class="card-header text-white fw-bold" style="background:linear-gradient(135deg,#11998e,#38ef7d);">
          <i class="fa fa-upload me-2"></i> Input Kalender Akademik
        </div>

        <div class="card-body">
          <?php if ($jumlah_data >= 1) { ?>
              <div class="alert alert-warning text-center mb-0 bg-danger text-white">
                <i class="fa fa-exclamation-triangle"></i> Data Kalender Akademik sudah ada!<br>
                Hapus data lama terlebih dahulu untuk menambah baru.
              </div>
          <?php } else { ?>
          <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label class="form-label fw-semibold">Upload Gambar Kalender:</label>
              <input type="file" class="form-control" name="gambar" required>
              <small class="text-muted">Pilih 1 gambar kalender akademik (JPG/PNG).</small>
            </div>

            <button type="submit" name="btn" class="btn w-100 text-white fw-bold mt-3"
                    style="background:linear-gradient(135deg,#11998e,#38ef7d); border:none;">
              <i class="fa fa-paper-plane"></i> Submit
            </button>
          </form>
          <?php } ?>
        </div>
      </div>
    </div>

    <!-- Output Data -->
    <div class="col-sm-8">
      <div class="card border-0 shadow-lg rounded-4">
        <div class="card-header text-white fw-bold" style="background:linear-gradient(135deg,#11998e,#38ef7d);">
          <i class="fa fa-table me-2"></i> Output Data Kalender Akademik
        </div>

        <div class="card-body output-scroll">
          <table class="table table-hover table-bordered align-top text-center">
            <thead class="text-center">
              <tr class="text-success">
                <th>No</th>
                <th>Gambar Kalender Akademik</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              $sqloutput = $koneksi->query("SELECT * FROM tb_akademik");
              while ($tampil = $sqloutput->fetch_array()) {
              ?>
              <tr>
                <td><?= $no++ ?></td>
                <td>
                  <img src="gbr/<?= $tampil['gambar'] ?>" alt="Kalender" style="width:100px; border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.2);">
                </td>
                <td class="text-center">
                  <a href="?page=akademik&hapus=<?= $tampil['id_akademik'] ?>" 
                     class="btn btn-sm btn-danger">
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
.output-scroll {
  max-height: 520px;
  overflow-y: auto;
  overflow-x: auto;
  padding-bottom: .5rem;
}
.table tbody tr td {
  vertical-align: middle !important;
  text-align: center !important;
  white-space: normal;
}
.table img {
  border-radius: 6px;
  object-fit: cover;
}
.table thead {
  background-color: #f7f7f9;
}
.table {
  min-width: 118px;
  font-size: 15px;
}
.table thead th {
  padding: 12px 10px;
  text-align: center;
  font-size: 14px;
  background: linear-gradient(135deg, #e9ecef, #dee2e6);
}
</style>
