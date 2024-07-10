                    <ul class="dropdown-menu dropdown-menu-sm">
                        <li class="dropdown-title">Pilih Bulan</li>
                          <li><a href="<?php echo base_url('kas/index');?>" class="<?php echo $this->uri->segment(1) == 'v_januari' ? 'active' : ''; ?> dropdown-item">Semua Bulan</a></li>
                          <li><a href="<?php echo base_url('bulan/v_januari');?>" class="<?php echo $this->uri->segment(1) == 'v_januari' ? 'active' : ''; ?> dropdown-item">Januari</a></li>
                          <li><a href="<?php echo base_url('bulan/v_februari'); ?>" class="<?php echo $this->uri->segment(1) == 'v_februari' ? 'active' : ''; ?>dropdown-item">Februari</a></li>
                          <li><a href="<?php echo base_url('bulan/v_maret'); ?>" class="<?php echo $this->uri->segment(1) == 'v_maret' ? 'active' : '' ?>dropdown-item">Maret</a></li>
                          <li><a href="<?php echo base_url('bulan/v_april'); ?>" class="<?php echo $this->uri->segment(1) == 'v_april' ? 'active' : '' ?>dropdown-item">April</a></li>
                          <li><a href="<?php echo base_url('bulan/v_mei'); ?>" class="<?php echo $this->uri->segment(1) == 'v_mei' ? 'active' : '' ?>dropdown-item">Mei</a></li>
                          <li><a href="<?php echo base_url('bulan/v_juni'); ?>" class="<?php echo $this->uri->segment(1) == 'v_juni' ? 'active' : '' ?>dropdown-item">Juni</a></li>
                          <li><a href="<?php echo base_url('bulan/v_juli'); ?>" class="<?php echo $this->uri->segment(1) == 'v_juli' ? 'active' : '' ?>dropdown-item">Juli</a></li>
                          <li><a href="<?php echo base_url('bulan/v_agustus'); ?>" class="<?php echo $this->uri->segment(1) == 'v_agustus' ? 'active' : '' ?>dropdown-item">Agustus</a></li>
                          <li><a href="<?php echo base_url('bulan/v_september'); ?>" class="<?php echo $this->uri->segment(1) == 'v_september' ? 'active' : '' ?>dropdown-item">September</a></li>
                          <li><a href="<?php echo base_url('bulan/v_oktober'); ?>" class="<?php echo $this->uri->segment(1) == 'v_oktober' ? 'active' : '' ?>dropdown-item">Oktober</a></li>
                          <li><a href="<?php echo base_url('bulan/v_november'); ?>" class="<?php echo $this->uri->segment(1) == 'v_november' ? 'active' : '' ?>dropdown-item">November</a></li>
                          <li><a href="<?php echo base_url('bulan/v_desember'); ?>" class="<?php echo $this->uri->segment(1) == 'v_desember' ? 'active' : ''; ?>dropdown-item">Desember</a></li>
                      </ul>