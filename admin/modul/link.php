<div class="container mt-4">
  <div class="text-center mb-4">
    <h2 class="fw-bold text-success">Input & Data Link Pendaftaran</h2>
    <p class="text-muted">Kelola link pendaftaran STAI YAPERI dengan mudah dan cepat.</p>
    <hr class="mx-auto" style="width:200px; height:3px; background:linear-gradient(135deg,#11998e,#38ef7d); border:none;">
  </div>

  <?php
  // === Tambah Data ===
  if (isset($_POST['btn'])) {
      $daftar = $_POST['daftar'];

      $cek = $koneksi->query("SELECT * FROM tb_link");
      if ($cek->num_rows > 0) {
          echo "<div class='alert alert-warning text-center mt-2' id='notif'>
                  <i class='fa fa-exclamation-circle'></i> Data sudah ada! Hapus dulu sebelum menambah baru.
                </div>";
      } else {
          $koneksi->query("INSERT INTO tb_link(daftar) VALUES ('$daftar')");
          echo "<div class='alert alert-success text-center mt-2' id='notif'>
                  <i class='fa fa-check-circle'></i> Data berhasil ditambahkan!
                </div>";
      }
  }

  // === Hapus Data ===
  if (isset($_GET['hapus'])) {
      $id_hapus = $_GET['hapus'];
      $koneksi->query("DELETE FROM tb_link WHERE id_bayar='$id_hapus'");
      echo "<div class='alert alert-success text-center mt-2' id='notif'>
              <i class='fa fa-check-circle'></i> Data berhasil dihapus!
            </div>";
  }

  // === Cek apakah sudah ada data ===
  $cekData = $koneksi->query("SELECT * FROM tb_link");
  $sudahAda = $cekData->num_rows > 0;
  ?>

  <div class="row g-4">
    <!-- === FORM INPUT === -->
    <div class="col-sm-4">
      <div class="card border-0 shadow-lg rounded-4">
        <div class="card-header text-white fw-bold" style="background:linear-gradient(135deg,#11998e,#38ef7d);">
          <i class="fa fa-link me-2"></i> Input Link Pendaftaran
        </div>

        <div class="card-body">
          <?php if (!$sudahAda) { ?>
            <form method="POST" id="formLink">
              <div class="mb-3">
                <label class="form-label fw-semibold">Link Pendaftaran:</label>
                <input type="text" class="form-control" name="daftar" placeholder="Masukkan link pendaftaran" required>
              </div>

              <button type="submit" name="btn" class="btn w-100 text-white fw-bold"
                      style="background:linear-gradient(135deg,#11998e,#38ef7d); border:none;">
                <i class="fa fa-paper-plane"></i> Submit
              </button>
            </form>
          <?php } else { ?>
             <div class="alert alert-warning text-center mb-0 bg-danger text-white">
              <i class="fa fa-exclamation-triangle"></i> Data Ketua sudah ada!<br>
             Silakan edit atau hapus data lama.
            </div>
          <?php } ?>
        </div>
      </div>
    </div>

    <!-- === OUTPUT DATA === -->
    <div class="col-sm-8">
      <div class="card border-0 shadow-lg rounded-4">
        <div class="card-header text-white fw-bold" style="background:linear-gradient(135deg,#11998e,#38ef7d);">
          <i class="fa fa-table me-2"></i> Output Data Link Pendaftaran
        </div>

        <div class="card-body output-scroll">
          <table class="table table-hover table-bordered align-top text-start">
            <thead class="text-center">
              <tr class="text-success">
                <th>No</th>
                <th>Link Pendaftaran</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              $sql = $koneksi->query("SELECT * FROM tb_link ORDER BY id_bayar DESC");
              while ($data = $sql->fetch_array()) {
              ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td class="fw-semibold text-start"><?= htmlspecialchars($data['daftar']) ?></td>
                  <td class="text-center">
                    <a href="?page=link&hapus=<?= $data['id_bayar'] ?>" 
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

<!-- ===== CSS TAMBAHAN ===== -->
<style>
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
     .table tbody tr td {
        vertical-align: middle !important;
        text-align: center !important;
        white-space: normal;
      }
.output-scroll {
  max-height: 520px;
  overflow-y: auto;
  overflow-x: auto;
  padding-bottom: 0.5rem;
}
.output-scroll::-webkit-scrollbar {
  width: 8px;
}
.output-scroll::-webkit-scrollbar-thumb {
  background: grey;
  border-radius: 10px;
}
#notif {
  transition: opacity 0.5s ease, transform 0.5s ease;
}
#notif.fade-out {
  opacity: 0;
  transform: translateY(-10px);
}
</style>

<!-- ===== SCRIPT AUTO HIDE NOTIF ===== -->
<script>
setTimeout(() => {
  const notif = document.getElementById('notif');
  if (notif) {
    notif.classList.add('fade-out');
    setTimeout(() => {
      notif.remove();
      // refresh halaman setelah notifikasi hilang
      window.location.href = '?page=link';
    }, 500);
  }
}, 2000);
</script>

