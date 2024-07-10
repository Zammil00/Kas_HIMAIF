<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Kas</h1>
      <div class="section-header-breadcrumb">
        <!-- <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Components</a></div> -->
        <div class="breadcrumb-item">Data Kas Masuk / Keluar</div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4><a href="<?php echo base_url("kas/v_tambah_kas"); ?>" class="btn btn-success">Tambah</a></h4>
              <div class="card-header-form">
                <form>
                  <!-- <div class="input-group">
                          <input type="text" name="cari" class="form-control" placeholder="Cari Berdasar Keterangan">
                          <div class="input-group-btn">
                            <a href="" class="btn btn-primary"><i class="fa fa-search"></i></a>
                          </div>
                        </div> -->
                  <a href="#" class="btn btn-info">Cetak</a>
                </form>
              </div>
            </div>

            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped table-md">
                  <tr>
                    <th>#</th>
                    <th>Jenis Kas</th>
                    <th></th>
                    <th>Keterangan</th>
                    <th>Created</th>
                    <th>Aksi</th>
                  </tr>

                  <?php
                  $no = 1;
                  foreach ($data->result() as $tk) {
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td>
                        <?php
                        if ($tk->jenis_kas == "km") {
                          echo "<span class='badge badge-success'>Masuk</span>";
                        } else {
                          echo "<span class='badge badge-danger'>Keluar</span>";
                        }
                        ?>
                      </td>
                      <td>Rp. <?php echo number_format($tk->nominal, 0, ".", "."); ?></td>
                      <td><?php echo $tk->keterangan; ?></td>
                      <td><?php echo $tk->created; ?></td>
                      <td>
                        <a href="<?php echo base_url("kas/v_ubah_kas/$tk->id_kas"); ?>"
                          class="btn btn-icon btn-warning"><i class="far fa-edit" title="Ubah Data"></i></a>
                        <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                      </td>
                    </tr>
                    <?php
                  }
                  ?>
                </table>
              </div>
            </div>
            <div class="card-footer text-right">
              <nav class="d-inline-block">
                <!-- <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#"><span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul> -->
                <b><?php echo $pagination; ?></b>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</section>
</div>