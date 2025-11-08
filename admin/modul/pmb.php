<div class="container mt-4">

  <!-- Judul Halaman -->
  <div class="text-center mb-4">
    <h2 class="fw-bold text-success">Input & Data PMB</h2>
    <p class="text-muted">Kelola data PMB STAI YAPERI dengan mudah dan terorganisir.</p>
    <hr class="mx-auto" style="width:200px; height:3px; background:linear-gradient(135deg,#11998e,#38ef7d); border:none;">
  </div>

  <?php
  // === CEK APAKAH DATA SUDAH ADA ===
  $cekdata = $koneksi->query("SELECT * FROM tb_pmb");
  $dataAda = $cekdata->num_rows > 0;
  $dataEdit = isset($_GET['edit']) ? $koneksi->query("SELECT * FROM tb_pmb WHERE id_pmb='{$_GET['edit']}'")->fetch_assoc() : null;

  // === TAMBAH / EDIT DATA ===
  if (isset($_POST['btn'])) {
      $tahun = $_POST['tahun'];
      $gambar = $_FILES['gambar']['name'];
      $folder = __DIR__ . '/../gbr/';

      if (!file_exists($folder)) mkdir($folder, 0777, true);

      // EDIT DATA
      if (!empty($_POST['id_edit'])) {
          $id = $_POST['id_edit'];
          $ambil = $koneksi->query("SELECT * FROM tb_pmb WHERE id_pmb='$id'");
          $data = $ambil->fetch_assoc();

          if (!empty($gambar)) {
              if (file_exists($folder . $data['gambar'])) unlink($folder . $data['gambar']);
              move_uploaded_file($_FILES['gambar']['tmp_name'], $folder . $gambar);
              $koneksi->query("UPDATE tb_pmb SET `Tahun Akademik`='$tahun', gambar='$gambar' WHERE id_pmb='$id'");
          } else {
              $koneksi->query("UPDATE tb_pmb SET `Tahun Akademik`='$tahun' WHERE id_pmb='$id'");
          }
          echo "<div class='alert alert-success text-center'><i class='fa fa-check-circle'></i> Data berhasil diperbarui!</div>";

      } else {
          // TAMBAH BARU
          move_uploaded_file($_FILES['gambar']['tmp_name'], $folder . $gambar);
          $koneksi->query("INSERT INTO tb_pmb(`Tahun Akademik`, gambar) VALUES ('$tahun','$gambar')");
          echo "<div class='alert alert-success text-center'><i class='fa fa-check-circle'></i> Data berhasil ditambahkan!</div>";
      }
  }

  // === HAPUS DATA ===
  if (isset($_GET['hapus'])) {
      $id_hapus = $_GET['hapus'];
      $ambil = $koneksi->query("SELECT * FROM tb_pmb WHERE id_pmb='$id_hapus'");
      $hapusdata = $ambil->fetch_assoc();
      $folder = __DIR__ . '/../gbr/';

      if (!empty($hapusdata['gambar']) && file_exists($folder . $hapusdata['gambar'])) unlink($folder . $hapusdata['gambar']);
      $koneksi->query("DELETE FROM tb_pmb WHERE id_pmb='$id_hapus'");
      echo "<div class='alert alert-success text-center'><i class='fa fa-check-circle'></i> Data berhasil dihapus!</div>";
      $dataAda = false; // setelah hapus, form jadi aktif lagi
  }
  ?>

  <div class="row g-4">

    <!-- === FORM INPUT / ALERT === -->
    <div class="col-sm-4">
      <div class="card border-0 shadow-lg rounded-4">
        <div class="card-header text-white fw-bold" style="background:linear-gradient(135deg,#11998e,#38ef7d);">
          <i class="fa fa-user-plus me-2"></i> 
          <?= isset($dataEdit) ? 'Edit Data PMB' : 'Input Data PMB'; ?>
        </div>

        <div class="card-body">
          <?php if ($dataAda && !isset($dataEdit)) { ?>
            <!-- Pesan jika data sudah ada -->
           <div class="alert alert-warning text-center mb-0 bg-danger text-white">
              <i class="fa fa-exclamation-triangle"></i> Data PMB sudah ada!<br>
             Silakan edit atau hapus data lama.
            </div>
          <?php } else { ?>
            <!-- Form tampil hanya jika belum ada data ATAU sedang edit -->
            <form method="POST" enctype="multipart/form-data" id="formPMB">
              <input type="hidden" name="id_edit" value="<?= $dataEdit['id_pmb'] ?? '' ?>">

              <div class="mb-3">
                <label class="form-label fw-semibold">Tahun Akademik:</label>
                <input type="text" class="form-control" name="tahun"
                       value="<?= $dataEdit['Tahun Akademik'] ?? '' ?>"
                       placeholder="Masukkan Tahun Akademik" required>
              </div>

              <div class="mb-3">
                <label class="form-label fw-semibold">Gambar:</label>
                <input type="file" class="form-control" name="gambar" <?= isset($dataEdit) ? '' : 'required' ?>>
                <?php if (!empty($dataEdit['gambar'])) { ?>
                  <div class="mt-2 text-center">
                    <img src="gbr/<?= $dataEdit['gambar'] ?>" style="width:100px; border-radius:8px;">
                  </div>
                <?php } ?>
              </div>

              <button type="submit" name="btn" class="btn w-100 text-white fw-bold"
                      style="background:linear-gradient(135deg,#11998e,#38ef7d); border:none;">
                <i class="fa fa-paper-plane"></i> <?= isset($dataEdit) ? 'Update' : 'Submit'; ?>
              </button>

              <?php if (isset($dataEdit)) { ?>
                <a href="?page=pmb" class="btn btn-danger w-100 mt-2">
                  <i class="fa fa-times-circle"></i> Batal Edit
                </a>
              <?php } ?>
            </form>
          <?php } ?>
        </div>
      </div>
    </div>

    <!-- === OUTPUT DATA === -->
    <div class="col-sm-8">
      <div class="card border-0 shadow-lg rounded-4">
        <div class="card-header text-white fw-bold" style="background:linear-gradient(135deg,#11998e,#38ef7d);">
          <i class="fa fa-table me-2"></i> Output Data PMB
        </div>
        <div class="card-body output-scroll">
          <table class="table table-hover table-bordered align-top text-start">
            <thead class="text-center">
              <tr class="text-success">
                <th>No</th>
                <th>Tahun Akademik</th>
                <th>Gambar</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              $sql = $koneksi->query("SELECT * FROM tb_pmb ORDER BY id_pmb DESC");
              while ($data = $sql->fetch_array()) {
              ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td class="fw-semibold"><?= $data['Tahun Akademik'] ?></td>
                  <td><img src="gbr/<?= $data['gambar'] ?>" alt="Gambar" style="width:80px; border-radius:8px;"></td>
                  <td>
                    <a href="?page=pmb&edit=<?= $data['id_pmb'] ?>" class="btn btn-sm btn-success">
                      <i class="fa fa-edit"></i> Edit
                    </a>
                    <a href="?page=pmb&hapus=<?= $data['id_pmb'] ?>" class="btn btn-sm btn-danger">
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
.card { border: none; border-radius: 15px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); }
.card-header { border-top-left-radius: 15px !important; border-top-right-radius: 15px !important; }
.output-scroll { max-height: 520px; overflow-y: auto; }
.table { font-size:13px; }
.table tbody td { vertical-align: middle !important; text-align: center !important; }
.table thead th { background: linear-gradient(135deg,#e9ecef,#dee2e6); text-transform: uppercase; }
.output-scroll::-webkit-scrollbar { width: 8px; }
.output-scroll::-webkit-scrollbar-thumb { background: grey; border-radius: 10px; }
</style>
