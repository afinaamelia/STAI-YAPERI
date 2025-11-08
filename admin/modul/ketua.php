<div class="container mt-4">

  <!-- Judul Halaman -->
  <div class="text-center mb-4">
    <h2 class="fw-bold text-success">Input & Data Ketua Yaperi</h2>
    <p class="text-muted">Kelola data Ketua STAI YAPERI dengan mudah dan terorganisir.</p>
    <hr class="mx-auto" style="width: 200px; height: 3px; background: linear-gradient(135deg, #11998e, #38ef7d); border: none;">
  </div>

  <?php
    // Mengecek apakah sudah ada data ketua
    $cekdata = $koneksi->query("SELECT * FROM tb_ketua");
    $sudahAda = $cekdata->num_rows > 0;

    // Pesan Notifikasi
    $notif = "";

    // Jika tombol Edit diklik
    if (isset($_GET['edit'])) {
        $id_edit = $_GET['edit'];
        $edit = $koneksi->query("SELECT * FROM tb_ketua WHERE id_ketua='$id_edit'");
        $data = $edit->fetch_assoc();
    }

    // Hapus Data
    if (isset($_GET['hapus'])) {
        $id_hapus = $_GET['hapus'];
        $ambil = $koneksi->query("SELECT * FROM tb_ketua WHERE id_ketua='$id_hapus'");
        $hapusdata = $ambil->fetch_assoc();
        $folder = __DIR__ . '/../gbr/';

         // Cek dan hapus file gambar lama jika ada
    if (!empty($hapusdata['gambar']) && file_exists($folder . $hapusdata['gambar'])) {
        unlink($folder . $hapusdata['gambar']);
    }
        $koneksi->query("DELETE FROM tb_ketua WHERE id_ketua='$id_hapus'");
        $notif = "<div class='alert alert-success text-center'><i class='fa fa-check-circle'></i> Data berhasil dihapus!</div>";
        $sudahAda = false; 
    }

    // Tambah Data
    if (isset($_POST['btn'])) {
        $gbr = $_FILES['gambar']['name'];
        $nm = $_POST['nm'];
     $folder = __DIR__ . '/../gbr/'; // path absolut ke folder gbr
      if (!file_exists($folder)) {
          mkdir($folder, 0777, true); // buat otomatis kalau belum ada
      }
      move_uploaded_file($_FILES['gambar']['tmp_name'], $folder . $gbr);


        move_uploaded_file($_FILES['gambar']['tmp_name'], $folder . $gbr);
        $sqlketua = $koneksi->query("INSERT INTO tb_ketua(gambar, namaketua) VALUE('$gbr','$nm')");
        $notif = "<div class='alert alert-success text-center'><i class='fa fa-check-circle'></i> Data berhasil ditambahkan!</div>";
        $sudahAda = true;
    }

// Update Data
if (isset($_POST['update'])) {
    $id = $_POST['id_ketua'];
    $nm = $_POST['nm'];
    $gbr = $_FILES['gambar']['name'];
    $folder = __DIR__ . '/../gbr/';
    $gambar_lama = $_POST['gambar_lama']; // ambil dari hidden input

    if ($gbr != '') {
        // Hapus gambar lama kalau ada file baru
        if (!empty($gambar_lama) && file_exists($folder . $gambar_lama)) {
            unlink($folder . $gambar_lama);
        }

        move_uploaded_file($_FILES['gambar']['tmp_name'], $folder . $gbr);
        $update = $koneksi->query("UPDATE tb_ketua SET namaketua='$nm', gambar='$gbr' WHERE id_ketua='$id'");
    } else {
        // Kalau gak upload gambar baru → tetap pakai yang lama
        $update = $koneksi->query("UPDATE tb_ketua SET namaketua='$nm', gambar='$gambar_lama' WHERE id_ketua='$id'");
    }

    // Kirim redirect dengan parameter notif sukses
    echo "<script>window.location.href='?page=ketua&status=updated';</script>";
    exit;
}

// Tampilkan notifikasi sukses setelah redirect
if (isset($_GET['status']) && $_GET['status'] == 'updated') {
    $notif = "<div class='alert alert-success text-center'>
                <i class='fa fa-check-circle'></i> Data berhasil diperbarui!
              </div>";
}

  ?>

  <!-- Notifikasi -->
  <div id="notif-area">
    <?= $notif ?>
  </div>

  <script>
    // Auto-hide notif setelah 3 detik
    setTimeout(() => {
      const notif = document.getElementById('notif-area');
      if (notif) notif.innerHTML = '';
    }, 3000);
  </script>

  <div class="row g-4">

    <!-- Card Input / Edit Data Ketua -->
    <div class="col-sm-4">
      <div class="card border-0 shadow-lg rounded-4">
        <div class="card-header text-white fw-bold" style="background: linear-gradient(135deg, #11998e, #38ef7d);">
          <i class="fa fa-user-plus me-2"></i>
          <?= isset($data) ? 'Edit Data Ketua' : 'Input Data Ketua'; ?>
        </div>

        <div class="card-body">
          <?php if ($sudahAda && !isset($data)) { ?>
            <div class="alert alert-warning text-center mb-0 bg-danger text-white">
              <i class="fa fa-exclamation-triangle"></i> Data Ketua sudah ada!<br>
             Silakan edit atau hapus data lama.
            </div>
          <?php } else { ?>
           <form method="POST" enctype="multipart/form-data" onsubmit="return validasiForm()">
  <input type="hidden" name="id_ketua" value="<?= isset($data) ? $data['id_ketua'] : ''; ?>">

  <div class="mb-3">
  <label class="form-label fw-semibold">Gambar Ketua:</label>
  <input type="file" class="form-control" name="gambar" id="gambar" <?= isset($data) ? '' : 'required' ?>>
  
  <?php if (isset($data) && $data['gambar'] != '') { ?>
    <img src="gbr/<?= $data['gambar']; ?>" class="mt-2 rounded" style="width: 100%; max-width: 120px;">
    <p class="text-muted small mt-1">File lama: <b><?= $data['gambar']; ?></b></p>
    <!-- simpan nama file lama di input tersembunyi -->
    <input type="hidden" name="gambar_lama" value="<?= $data['gambar']; ?>">
  <?php } ?>
</div>


  <div class="mb-3 mt-3">
    <label class="form-label fw-semibold">Nama Ketua:</label>
    <input type="text" class="form-control" placeholder="Masukkan nama ketua" name="nm" id="nm"
          value="<?= isset($data) ? $data['namaketua'] : ''; ?>" required>
  </div>

  <?php if (isset($data)) { ?>
                <button type="submit" name="update" class="btn w-100 text-white fw-bold mt-3"
                        style="background: linear-gradient(135deg, #11998e, #38ef7d); border: none;">
                 <i class="fa fa-paper-plane"></i> Update
                </button>

                <!-- ✅ Tombol Batal Edit -->
                <a href="?page=ketua" class="btn w-100 btn-danger fw-bold mt-2">
                  <i class="fa fa-times-circle"></i> Batal Edit
                </a>
              <?php } else { ?>
                <button type="submit" name="btn" class="btn w-100 text-white fw-bold mt-3"
                        style="background: linear-gradient(135deg, #11998e, #38ef7d); border: none;">
                  <i class="fa fa-paper-plane"></i> Submit
                </button>
              <?php } ?>
            </form>
      <script>
function validasiForm() {
  const nm = document.getElementById('nm').value.trim();
  const gbr = document.getElementById('gambar').value.trim();
  const isEdit = document.querySelector('button[name="update"]') !== null;

  if (!isEdit && (nm === '' || gbr === '')) {
    alert('Harap isi semua field sebelum submit!');
    return false;
  }

  if (isEdit && nm === '') {
    alert('Nama ketua tidak boleh kosong!');
    return false;
  }

  return true;
}
</script>


          <?php } ?>
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
        vertical-align: middle !important;
        text-align: center !important;
        white-space: normal;
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
  min-width: 118px; /* biar teks gak numpuk dan spasi antar kolom lega */
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

/* Kolom gambar agak lebih sempit */
.table td:nth-child(2),
.table th:nth-child(2) {
  width: 2px;
   text-align: center;
  }
/* Kolom nama agak lebih sempit */
.table td:nth-child(3),
.table th:nth-child(3) {
  width: 120px;
  text-align: center;
}
/* Kolom aksi sejajar tengah */
.table td:last-child,
.table th:last-child {
  width: 96px;
  text-align: center;
  vertical-align: middle !important;
}
/* Kolom no rata tengah */
.table td:nth-child(1),
.table th:nth-child(1) {
  text-align: center;
  width: 10px;
}
</style>
    <!-- Card Output Data Ketua -->
    <div class="col-sm-8">
      <div class="card border-0 shadow-lg rounded-4">
        <div class="card-header text-white fw-bold" style="background: linear-gradient(135deg, #11998e, #38ef7d);">
          <i class="fa fa-table me-2"></i> Output Data Ketua
        </div>
       <div class="card-body output-scroll">
      <table class="table table-hover table-bordered align-top text-start">
        <thead class="text-center">
              <tr class="text-success">
                <th>No</th>
                <th>Gambar Ketua</th>
                <th>Nama Ketua</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                $sqloutput = $koneksi->query('SELECT * FROM tb_ketua');
                while ($tampil = $sqloutput->fetch_array()) {
              ?>
              <tr>
                <td><?= $no++ ?></td>
                <td>
                  <img src="gbr/<?= $tampil['gambar'] ?>" alt="" style="width:70px; border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.2);">
                </td>
                <td class="fw-semibold"><?= $tampil['namaketua'] ?></td>
                <td>
                  <a href="?page=ketua&edit=<?= $tampil['id_ketua'] ?>" class="btn btn-sm btn-success">
                    <i class="fa fa-edit"></i> Edit
                  </a>
                  <a href="?page=ketua&hapus=<?= $tampil['id_ketua'] ?>" class="btn btn-sm btn-danger ms-2">
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
