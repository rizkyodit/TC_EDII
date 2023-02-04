<style>
  label {
    width: 350px
  }

  input {
    width: 500px;
  }

  table input {
    width: 200px;
  }

  div {
    margin: 10px;
  }

  button {
    margin-left: 100px;
    margin-right: 100px;
    margin-top: 50px;
  }
</style>

<div class="container" style="margin-bottom: 50px;">
  <div class="d-flex justify-content-center">
    <img src="https://edi-indonesia.co.id/wp-content/uploads/2018/12/product-default-logo-detail.jpg" alt="logo edii">
  </div>
  <h1 class="d-flex justify-content-center" style="text-decoration:underline">Data Pribadi Pelamar</h1>
  <hr>
  <?php if (isset($action) && $action != 'show') { ?>
    <form action="<?php echo isset($action) && $action == 'update' ? 'EntryData/update/' . $id : 'EntryData/insert' ?>" method="post">
    <?php } ?>
    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="id_user" value="<?php echo isset($id_user) ? $id_user : '' ?>" hidden>
    <div>
      <label for="posisi_dilamar">POSISI YANG DILAMAR</label>
      <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="posisi_dilamar" value="<?php echo isset($posisi_dilamar) ? $posisi_dilamar : '' ?>">
    </div>
    <div>
      <label for="nama">NAMA</label>
      <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="nama" value="<?php echo isset($nama) ? $nama : '' ?>">
    </div>
    <div>
      <label for="ktp">NO. KTP</label>
      <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="ktp" value="<?php echo isset($ktp) ? $ktp : '' ?>">
    </div>
    <div>
      <label for="ttl">TEMPAT. TANGGAL LAHIR</label>
      <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="ttl" value="<?php echo isset($ttl) ? $ttl : '' ?>">
    </div>
    <div>
      <label>JENIS KELAMIN</label>
      <input style="width:auto" <?php echo isset($action) && $action == 'show' ? 'disabled' : '' ?> type="radio" id="L" name="jk" value="L" <?php echo isset($jk) && $jk == 'L' ? 'checked' : '' ?>>
      <label style="width:auto" for="L">LAKI-LAKI</label>
      <input style="width:auto" <?php echo isset($action) && $action == 'show' ? 'disabled' : '' ?> type="radio" id="P" name="jk" value="P" <?php echo isset($jk) && $jk == 'P' ? 'checked' : '' ?>>
      <label style="width:auto" for="P">PEREMPUAN</label>
    </div>
    <div>
      <label for="agama">AGAMA</label>
      <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="agama" value="<?php echo isset($agama) ? $agama : '' ?>">
    </div>
    <div>
      <label for="golongan_darah">GOLONGAN DARAH</label>
      <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="golongan_darah" value="<?php echo isset($golongan_darah) ? $golongan_darah : '' ?>">
    </div>
    <div>
      <label for="status">STATUS</label>
      <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="status" value="<?php echo isset($status) ? $status : '' ?>">
    </div>
    <div>
      <label for="alamat_ktp">ALAMAT KTP</label>
      <textarea rows="4" cols="65" maxlength="200" style="border-radius: 5px;" <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="alamat_ktp" value="<?php echo isset($alamat_ktp) ? $alamat_ktp : '' ?>"></textarea>
    </div>
    <div>
      <label for="alamat_tinggal">ALAMAT TINGGAL</label>
      <textarea rows="4" cols="65" maxlength="200" style="border-radius: 5px;" <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="alamat_tinggal" value="<?php echo isset($alamat_tinggal) ? $alamat_tinggal : '' ?>"></textarea>
    </div>
    <div>
      <label for="email">EMAIL</label>
      <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="email" name="email" value="<?php echo isset($email) ? $email : '' ?>">
    </div>
    <div>
      <label for="no_tlp">NO. TELP</label>
      <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="no_telp" value="<?php echo isset($no_telp) ? $no_telp : '' ?>">
    </div>
    <div>
      <label for="emergency">ORANG TERDEKAT YANG DAPAT DIHUBUNGI</label>
      <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="emergency" value="<?php echo isset($emergency) ? $emergency : '' ?>">
    </div>
    <div>
      <table border="2">
        <label for="">BIODATA</label>
        <tr>
          <td>
            <table border="2">
              <thead>
                <label>PENDIDIKAN TERAKHIR</label>
                <tr>
                  <th>Jenjang Pendidikan Terakhir</th>
                  <th>Nama Institusi Akademik</th>
                  <th>Jurusan</th>
                  <th>Tahun Lulus</th>
                  <th>IPK</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="pendidikan_terakhir[jenjang_pendidikan][]" value="<?php echo isset($pendidikan_terakhir->jenjang_pendidikan[0]) ? $pendidikan_terakhir->jenjang_pendidikan[0] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="pendidikan_terakhir[institusi][]" value="<?php echo isset($pendidikan_terakhir->institusi[0]) ? $pendidikan_terakhir->institusi[0] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="pendidikan_terakhir[jurusan][]" value="<?php echo isset($pendidikan_terakhir->jurusan[0]) ? $pendidikan_terakhir->jurusan[0] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="pendidikan_terakhir[tahun_lulus][]" value="<?php echo isset($pendidikan_terakhir->tahun_lulus[0]) ? $pendidikan_terakhir->tahun_lulus[0] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="pendidikan_terakhir[ipk][]" value="<?php echo isset($pendidikan_terakhir->ipk[0]) ? $pendidikan_terakhir->ipk[0] : '' ?>">
                  </td>
                </tr>
                <tr>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="pendidikan_terakhir[jenjang_pendidikan][]" value="<?php echo isset($pendidikan_terakhir->jenjang_pendidikan[1]) ? $pendidikan_terakhir->jenjang_pendidikan[1] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="pendidikan_terakhir[institusi][]" value="<?php echo isset($pendidikan_terakhir->institusi[1]) ? $pendidikan_terakhir->institusi[1] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="pendidikan_terakhir[jurusan][]" value="<?php echo isset($pendidikan_terakhir->jurusan[1]) ? $pendidikan_terakhir->jurusan[1] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="pendidikan_terakhir[tahun_lulus][]" value="<?php echo isset($pendidikan_terakhir->tahun_lulus[1]) ? $pendidikan_terakhir->tahun_lulus[1] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="pendidikan_terakhir[ipk][]" value="<?php echo isset($pendidikan_terakhir->ipk[1]) ? $pendidikan_terakhir->ipk[1] : '' ?>">
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td>
            <table border="2">
              <thead>
                <label>RIWAYAT PELATIHAN</label>
                <tr>
                  <th>Nama Kursus/Seminar</th>
                  <th>Sertifikat (ada/tidak)</th>
                  <th>Tahun</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="riwayat_pelatihan[nama_kursus][]" value="<?php echo isset($riwayat_pelatihan->nama_kursus[0]) ? $riwayat_pelatihan->nama_kursus[0] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="riwayat_pelatihan[sertifikat][]" value="<?php echo isset($riwayat_pelatihan->sertifikat[0]) ? $riwayat_pelatihan->sertifikat[0] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="riwayat_pelatihan[tahun][]" value="<?php echo isset($riwayat_pelatihan->tahun[0]) ? $riwayat_pelatihan->tahun[0] : '' ?>">
                  </td>
                </tr>
                <tr>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="riwayat_pelatihan[nama_kursus][]" value="<?php echo isset($riwayat_pelatihan->nama_kursus[1]) ? $riwayat_pelatihan->nama_kursus[1] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="riwayat_pelatihan[sertifikat][]" value="<?php echo isset($riwayat_pelatihan->sertifikat[1]) ? $riwayat_pelatihan->sertifikat[1] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="riwayat_pelatihan[tahun][]" value="<?php echo isset($riwayat_pelatihan->tahun[1]) ? $riwayat_pelatihan->tahun[1] : '' ?>">
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td>
            <table border="2">
              <thead>
                <label>RIWAYAT PEKERJAAN</label>
                <tr>
                  <th>Nama Perusahaan</th>
                  <th>Posisi Terakhir</th>
                  <th>Pendapatan Terakhir</th>
                  <th>Tahun</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="riwayat_pekerjaan[nama_perusahaan][]" value="<?php echo isset($riwayat_pekerjaan->nama_perusahaan[0]) ? $riwayat_pekerjaan->nama_perusahaan[0] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="riwayat_pekerjaan[posisi][]" value="<?php echo isset($riwayat_pekerjaan->posisi[0]) ? $riwayat_pekerjaan->posisi[0] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="riwayat_pekerjaan[pendapatan][]" value="<?php echo isset($riwayat_pekerjaan->pendapatan[0]) ? $riwayat_pekerjaan->pendapatan[0] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="riwayat_pekerjaan[tahun][]" value="<?php echo isset($riwayat_pekerjaan->tahun[0]) ? $riwayat_pekerjaan->tahun[0] : '' ?>">
                  </td>
                </tr>
                <tr>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="riwayat_pekerjaan[nama_perusahaan][]" value="<?php echo isset($riwayat_pekerjaan->nama_perusahaan[1]) ? $riwayat_pekerjaan->nama_perusahaan[1] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="riwayat_pekerjaan[posisi][]" value="<?php echo isset($riwayat_pekerjaan->posisi[1]) ? $riwayat_pekerjaan->posisi[1] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="riwayat_pekerjaan[pendapatan][]" value="<?php echo isset($riwayat_pekerjaan->pendapatan[1]) ? $riwayat_pekerjaan->pendapatan[1] : '' ?>">
                  </td>
                  <td>
                    <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="riwayat_pekerjaan[tahun][]" value="<?php echo isset($riwayat_pekerjaan->tahun[1]) ? $riwayat_pekerjaan->tahun[1] : '' ?>">
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </table>
    </div>
    <div>
      <label for="skill">SKILL</label>
      <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="skill" placeholder="Tuliskan keahlian & Keterampilan yang saat ini anda miliki." value="<?php echo isset($skill) ? $skill : '' ?>">
    </div>
    <div>
      <label>BERSEDIA DITEMPATKAN DI SELURUH KANTOR PERUSAHAAN</label>
      <input style="width:auto" <?php echo isset($action) && $action == 'show' ? 'disabled' : '' ?> type="radio" id="ya" name="kesediaan" value=1 <?php echo isset($kesediaan) && $kesediaan == 1 ? 'checked' : '' ?>>
      <label style="width:auto" for="ya">YA</label>
      <input style="width:auto" <?php echo isset($action) && $action == 'show' ? 'disabled' : '' ?> type="radio" id="tidak" name="kesediaan" value=0 <?php echo isset($kesediaan) && $kesediaan == 0 ? 'checked' : '' ?>>
      <label style="width:auto" for="tidak">TIDAK</label>
    </div>
    <div>
      <label for="expected">PENGHASILAN YANG DIHARAPKAN</label>
      <input <?php echo isset($action) && $action == 'show' ? 'readonly' : '' ?> type="text" name="expected" value="<?php echo isset($expected) ? $expected : '' ?>">
    </div>
    <div class="d-flex justify-content-center align-items-center">
      <?php if (isset($action) && $action != 'show') { ?>
        <button type="submit" class="btn btn-primary">submit</button>
      <?php } ?>
      <button class="btn btn-warning">
        <a href="<?php echo base_url('home') ?>">
          cancel
        </a>
      </button>
    </div>
    <?php if (isset($action) && $action != 'show') { ?>
    </form>
  <?php } ?>
</div>