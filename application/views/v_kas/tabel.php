<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <!-- <h4></h4>  -->
        <p>
          Tanggal <b><?php echo date('d-m-20y'); ?> </b>
          <br />
          * Masuk :
          <?php foreach ($total_masuk_hari_ini as $tmhi) {
            if ($tmhi == NULL) {
              echo "Tidak Ada Kas Masuk";
            } else {
              echo "Rp." . number_format($tmhi->total, 0, ".", ".");
            }
          } ?>
          <br />
          * Keluar :
          <?php foreach ($total_keluar_hari_ini as $tkhi) {
            if ($tkhi == NULL) {
              echo "Tidak Ada Kas Keluar";
            } else {
              echo "Rp." . number_format($tkhi->total, 0, ".", ".");
            }
          } ?>
        </p>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-md">
            <tr>
              <th>#</th>
              <th>Jenis Kas</th>
              <th></th>
              <th>Keterangan</th>
              <th>Waktu</th>
            </tr>
            <?php
            $no = 1;
            foreach ($tran_hari_ini as $thi) { ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td> <?php
                if ($thi->jenis_kas == "km") {
                  echo "<span class='badge badge-success'>Masuk</span>";
                } else {
                  echo "<span class='badge badge-danger'>Keluar</span>";
                }
                ?></td>
                <td>Rp. <?php echo number_format($thi->nominal, 0, ".", "."); ?></td>
                <td><?php echo $thi->keterangan; ?></td>
                <td>
                  <?php
                  echo $thi->created;
                  ?>
                </td>
              </tr>
            <?php } ?>
          </table>
        </div>
      </div>
      <div class="card-footer text-right">
        <nav class="d-inline-block">
          <!-- <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul> -->
          <!-- <b><?php echo $pagination; ?></b> -->
        </nav>
      </div>
    </div>
  </div>
</div>
</div>
</div>