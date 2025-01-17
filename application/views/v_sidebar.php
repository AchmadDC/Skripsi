<ul class="nav nav-list">
    <li>
        <a href="<?php echo base_url()?>index.php/dashboard">
            <i class="icon-dashboard green"></i>
            <span class="menu-text"> <b> Dashboard </b> </span>
        </a>
    </li>

    <?php if ($this->session->userdata('role_user') == 'Admin'): ?>
    <li>
        <a href="<?php echo base_url()?>index.php/user">
            <i class="icon-key green"></i>
            <span class="menu-text"> <b> User </b> </span>
        </a>
    </li>
    <li>
        <a href="<?php echo base_url()?>index.php/pegawai">
            <i class="icon-user green"></i>
            <span class="menu-text"> <b> Pegawai </b> </span>
        </a>
    </li>
    <?php endif; ?>

    <li>
        <a href="<?php echo base_url()?>index.php/program">
            <i class="icon-briefcase green"></i>
            <span class="menu-text"> <b> Program </b> </span>
        </a>
    </li>

    <li>
        <a href="<?php echo base_url()?>index.php/kriteria">
            <i class="icon-edit green"></i>
            <span class="menu-text"> <b> Kriteria Penilaian </b> </span>
        </a>
    </li>

    <?php if ($this->session->userdata('role_user') == 'Admin'): ?>
    <li>
        <a href="<?php echo base_url()?>index.php/penilaian">
            <i class="icon-book green"></i>
            <span class="menu-text"> <b> Penilaian </b> </span>
        </a>
    </li>
    <?php endif; ?>

    <li class="active open">
        <a href="#" class="dropdown-toggle">
            <i class="icon-file-alt green"></i>

            <span class="menu-text">
                Laporan Kinerja
                <span class="badge badge-primary "></span>
            </span>

            <b class="arrow icon-angle-down grey"></b>
        </a>

        <ul class="submenu">
            <li>
                <a href="<?php echo base_url()?>index.php/laporan">
                    <i class="icon-double-angle-right"></i>
                    Penilaian Kinerja
                </a>
            </li>
            <li>
                <a href="<?php echo base_url()?>index.php/kinerja">
                    <i class="icon-double-angle-right"></i>
                    Laporan
                </a>
            </li>
        </ul>
    </li>
</ul><!--/.nav-list-->

<div class="sidebar-collapse" id="sidebar-collapse">
    <i class="icon-double-angle-left"></i>
</div>
