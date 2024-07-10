  <!-- Main Content -->
  <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Data</h1>
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

                    <form role="form" action="<?php echo base_url("kas/tambah_kas"); ?>" method="post">
                        <div class="card-body">
                            <div class="form-group row mb-4">
                              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="jenis_kas" class="form-control selectric">
                                        <option value="kk">Kas Keluar</option>
                                        <option value="km">Kas Masuk</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nominal</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="number" name="nominal" placeholder="" required class="form-control">
                            </div>
                            </div>
                            <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="keterangan" placeholder="" required class="form-control">
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
                    </div>
                </section>
                </div>          
          </div>
        </div>
      </section>
    </div>

    <!-- <script type="text/javascript">
        var rupiah = document.getElementById('rupiah');
        rupiah.addEventListener('keyup', function(e){
          // tambahkan 'Rp.' pada saat form di ketik
          // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
          rupiah.value = formatRupiah(this.value, 'Rp. ');
        });
    
        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix){
          var number_string = angka.replace(/[^,\d]/g, '').toString(),
          split   		= number_string.split(','),
          sisa     		= split[0].length % 3,
          rupiah     		= split[0].substr(0, sisa),
          ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
    
          // tambahkan titik jika yang di input sudah menjadi angka ribuan
          if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
          }
    
          rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
          return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
	</script> -->


    

    
    

         
