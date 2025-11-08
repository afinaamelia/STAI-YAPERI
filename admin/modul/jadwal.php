<div class="container mt-4">

  <!-- Judul Halaman -->
  <div class="text-center mb-4">
    <h2 class="fw-bold text-success">Input & Data Jadwal Kuliah</h2>
    <p class="text-muted">Kelola jadwal kuliah STAI YAPERI dengan mudah dan terorganisir.</p>
    <hr class="mx-auto" style="width:200px; height:3px; background:linear-gradient(135deg,#11998e,#38ef7d); border:none;">
  </div>

  <?php
  $notif = "";
  $folder = __DIR__ . '/../gbr/';

  if (!file_exists($folder)) mkdir($folder, 0777, true);

  // HAPUS DATA
  if (isset($_GET['hapus'])) {
      $id_hapus = $_GET['hapus'];
      $ambil = $koneksi->query("SELECT * FROM tb_jadwal WHERE id_jadwal='$id_hapus'");
      $hapusdata = $ambil->fetch_assoc();

      if (!empty($hapusdata['gambar']) && file_exists($folder . $hapusdata['gambar'])) {
          unlink($folder . $hapusdata['gambar']);
      }

      $koneksi->query("DELETE FROM tb_jadwal WHERE id_jadwal='$id_hapus'");
      $notif = "<div class='alert alert-success text-center'><i class='fa fa-check-circle'></i> Data berhasil dihapus!</div>";
  }

  // EDIT MODE
  $editMode = false;
  $dataEdit = [];
  if (isset($_GET['edit'])) {
      $editMode = true;
      $id_edit = $_GET['edit'];
      $ambil = $koneksi->query("SELECT * FROM tb_jadwal WHERE id_jadwal='$id_edit'");
      $dataEdit = $ambil->fetch_assoc();
  }

  // TAMBAH / UPDATE DATA
  if (isset($_POST['btn'])) {
      $judul = $_POST['judul_semester'];
      $gambarBaru = $_FILES['gambar']['name'];
      $tmp = $_FILES['gambar']['tmp_name'];

      if (!empty($_POST['id_edit'])) {
          $id_edit = $_POST['id_edit'];

          if (!empty($gambarBaru)) {
              $ambil = $koneksi->query("SELECT * FROM tb_jadwal WHERE id_jadwal='$id_edit'");
              $lama = $ambil->fetch_assoc();
              if (!empty($lama['gambar']) && file_exists($folder . $lama['gambar'])) {
                  unlink($folder . $lama['gambar']);
              }
              move_uploaded_file($tmp, $folder . $gambarBaru);
              $koneksi->query("UPDATE tb_jadwal SET judul_semester='$judul', gambar='$gambarBaru' WHERE id_jadwal='$id_edit'");
          } else {
              $koneksi->query("UPDATE tb_jadwal SET judul_semester='$judul' WHERE id_jadwal='$id_edit'");
          }

          $notif = "<div class='alert alert-success text-center'><i class='fa fa-check-circle'></i> Data berhasil diupdate!</div>";
          $editMode = false;
      } else {
          if (!empty($gambarBaru)) {
              move_uploaded_file($tmp, $folder . $gambarBaru);
              $koneksi->query("INSERT INTO tb_jadwal (judul_semester, gambar) VALUES ('$judul', '$gambarBaru')");
              $notif = "<div class='alert alert-success text-center'><i class='fa fa-check-circle'></i> Data berhasil ditambahkan!</div>";
          } else {
              $notif = "<div class='alert alert-warning text-center'><i class='fa fa-exclamation-triangle'></i> Harap pilih gambar terlebih dahulu!</div>";
          }
      }
  }
  ?>

  <!-- Notifikasi -->
  <div id="notif-area">
    <?= $notif ?>
  </div>

  <script>
    setTimeout(() => {
      const notif = document.getElementById('notif-area');
      if (notif) notif.innerHTML = '';
    }, 3000);
  </script>

  <div class="row g-4">

    <!-- Form Input / Edit -->
    <div class="col-sm-4">
      <div class="card border-0 shadow-lg rounded-4">
        <div class="card-header text-white fw-bold" style="background:linear-gradient(135deg,#11998e,#38ef7d);">
          <i class="fa fa-upload me-2"></i> 
          <?= $editMode ? "Edit Data Jadwal Kuliah" : "Input Data Jadwal Kuliah" ?>
        </div>

        <div class="card-body">
          <form method="POST" enctype="multipart/form-data">
            <?php if ($editMode): ?>
              <input type="hidden" name="id_edit" value="<?= $dataEdit['id_jadwal'] ?>">
              <div class="mb-3 text-center">
                <label class="form-label fw-semibold mb-2">Gambar Lama:</label><br>
                <img src="gbr/<?= $dataEdit['gambar'] ?>" alt="Gambar Lama" style="width:100px; border-radius:8px;">
              </div>
            <?php endif; ?>

            <div class="mb-3">
              <label class="form-label fw-semibold">Judul Semester:</label>
              <input type="text" class="form-control" name="judul_semester" 
                     value="<?= $editMode ? htmlspecialchars($dataEdit['judul_semester']) : '' ?>" 
                     placeholder="Masukkan judul semester" required>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Upload <?= $editMode ? 'Gambar Baru (opsional):' : 'Gambar Jadwal:' ?></label>
              <input type="file" class="form-control" name="gambar" <?= $editMode ? '' : 'required' ?>>
              <small class="text-muted">Format gambar: JPG, JPEG, atau PNG.</small>
            </div>

            <button type="submit" name="btn" class="btn w-100 text-white fw-bold mt-3"
                    style="background:linear-gradient(135deg,#11998e,#38ef7d); border:none;">
              <i class="fa fa-paper-plane"></i> <?= $editMode ? 'Update' : 'Submit' ?>
            </button>
            <?php if ($editMode): ?>
              <a href="?page=jadwal" class="btn btn-danger w-100 fw-bold mt-2"><i class="fa fa-times-circle"></i> Batal Edit</a>
            <?php endif; ?>
          </form>
        </div>
      </div>
    </div>

    <!-- Output Data -->
    <div class="col-sm-8">
      <div class="card border-0 shadow-lg rounded-4">
        <div class="card-header text-white fw-bold" style="background:linear-gradient(135deg,#11998e,#38ef7d);">
          <i class="fa fa-table me-2"></i> Output Data Jadwal Kuliah
        </div>

        <div class="card-body output-scroll">
          <table class="table table-hover table-bordered align-top text-start">
            <thead class="text-center">
              <tr class="text-success">
                <th>No</th>
                <th>Judul Semester</th>
                <th>Gambar Jadwal</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
             $sqloutput = $koneksi->query("SELECT * FROM tb_jadwal ORDER BY id_jadwal ASC");
              while ($tampil = $sqloutput->fetch_array()) {
              ?>
              <tr>
                <td><?= $no++ ?></td>
                <td class="fw-semibold"><?= htmlspecialchars($tampil['judul_semester']) ?></td>
                <td>
                  <img src="gbr/<?= $tampil['gambar'] ?>" alt="Jadwal" style="width:100px; border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.2);">
                </td>
                <td class="action-cell">
                  <a href="?page=jadwal&edit=<?= $tampil['id_jadwal'] ?>" class="btn btn-sm btn-success text-white mb-1">
                    <i class="fa fa-edit"></i> Edit
                  </a>
                  <a href="?page=jadwal&hapus=<?= $tampil['id_jadwal'] ?>" class="btn btn-sm btn-danger">
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
  white-space: normal;
  text-align: center;
}
.table img {
  border-radius: 6px;
  object-fit: cover;
}
.table {
  min-width: 118px;
  font-size:15px;
}
.table thead {
  background-color: #f7f7f9;
}
.table thead th {
  padding: 12px 10px;
  text-align: center;
  font-size: 14px;
  background: linear-gradient(135deg, #e9ecef, #dee2e6);
}
.action-cell {
  text-align: center !important;
  vertical-align: middle !important;
}
</style>
