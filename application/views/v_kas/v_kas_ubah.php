  <!-- Main Content -->
  <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Ubah Data</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Components</a></div>
              <div class="breadcrumb-item">Tambah</div>
            </div>
          </div>

          <div class="section-body">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <a href="<?php echo base_url("kas/v_kas"); ?>" class="btn btn-danger">Kembali</a>
                    </div>

                    <?php 
                        foreach($ubah_kas as $uk){
                    ?>
                    <form role="form" action="<?php echo base_url("kas/simpan_ubah_kas/$uk->id_kas"); ?>" method="post">
                        <div class="card-body">
                            <div class="form-group row mb-4">
                              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="jenis_kas" class="form-control selectric">
                                      <option value="<?php echo $uk->id_kas; ?>"><?php if($uk->jenis_kas == "km"){echo "Kas Masuk";}else{echo "Kas Keluar";} ?></option>
                                      <option value="km">Kas Masuk</option>
                                      <option value="kk">Kas Keluar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nominal</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nominal" value="<?php echo $uk->nominal; ?>" class="form-control">
                            </div>
                            </div>
                            <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="keterangan" value="<?php echo $uk->keterangan; ?>" class="form-control">
                            </div>
                            </div>
                            <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                            </div>
                            </div>
                            </div>
                        </div>
                    </form>
                    <?php } ?>
                    </div>
                </section>
                </div>          
          </div>
        </div>
      </section>
    </div>

    

    
    

         
