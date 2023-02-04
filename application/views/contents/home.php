<div>
  <div class="d-flex justify-content-between align-items-center" style="height: 50px; background-color: grey;">
    <button class="btn btn-primary ml-4">
      <a href="<?php echo base_url("EntryData") ?>">
        Entry Biodata
      </a>
    </button>
    <?php if ($data_user->is_admin == '1') { ?>
    <div class="d-flex justify-content-center align-items-center">
      <form action="<?php echo base_url('home/search') ?>" method="post" >
        <input type="text" name="email" value="<?php echo $data_user->email ?>" hidden>
        <div>
          <input type="text" name="search" id="search" value="<?php echo isset($search) ? $search['search'] : '' ?>">
          <select name="category" id="category" value="<?php echo isset($search) ? $search['category'] : '' ?>" style="border-radius: 5px;">
            <option value="nama" <?php echo isset($search) && $search['category'] == 'nama' ? 'selected' : '' ?>>nama</option>
            <option value="posisi_dilamar" <?php echo isset($search) && $search['category'] == 'posisi_dilamar' ? 'selected' : '' ?>>posisi yang dilamar</option>
            <option value="pendidikan_terakhir" <?php echo isset($search) && $search['category'] == 'pendidikan_terakhir' ? 'selected' : '' ?>>tingkat pendidikan terakhir</option>
          </select>
          <button type="submit" class="btn btn-primary" style="text-decoration: none; color: black;">search</button>
          <button class="btn btn-danger">
            <a href="<?php echo base_url('home') ?>">
              cancel
            </a>
          </button>
        </div>
      </form>
    </div>
    <?php } ?>
    <button class="btn btn-danger mr-4">
      <a href="<?php echo base_url("home/logout") ?>">
        logout
      </a>
    </button>
  </div>

  <div class="d-flex justify-content-center align-items-center" style="min-height: 200px;">
    <table border="2" id="data">
      <tr>
        <th>no</th>
        <th>nama</th>
        <th>tempat & tanggal lahir</th>
        <th>posisi yang dilamar</th>
        <th>action</th>
      </tr>
      <?php if (isset($data) && $data != null) {
        foreach ($data as $key => $val) { ?>
          <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $val['nama'] ?></td>
            <td><?php echo $val['ttl'] ?></td>
            <td><?php echo $val['posisi_dilamar'] ?></td>
            <td>
              <button class="btn btn-outline-primary">
                <a href="<?php echo base_url("EntryData/show/" . $val['id']) ?>">
                show
              </a>
            </button>
            <button class="btn btn-outline-success">
              <a href="<?php echo base_url("EntryData/edit/" . $val['id']) ?>">
              edit
            </a>
          </button>
          <button class="btn btn-outline-danger">
            <a href="<?php echo base_url("EntryData/delete/" . $val['id']) ?>">
            delete
                </a>
              </button>
            </td>
          </tr>
          <?php }
      } else { ?>
        <td colspan="5">
          no data
        </td>
        <?php } ?>
      </tr>
    </table>
  </div>
</div>