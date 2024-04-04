<nav>
    <img src="../asset/img/logo.png" alt="" width="210px" height="170px">
    <img src="{{ url('storage/'. auth()->user()->image_profile) }}" alt="" width="100px" height="100px">
</nav>
<div class="menu-user">
    <div class="title-data">
        <img src="{{ url('storage/'. auth()->user()->image_profile) }}" alt="">
        <p>{{ auth()->user()->name }}</p>
    </div>
    <ul>
        <li id="logout">
            <span>Logout</span>
        </li>
        <li>
            <span>Data data</span>
            <span> > </span>
        </li>
        <ul>
            <li>Dokter</li>
            <li>Pasien</li>
            <li>Jadwal Pertemuan</li>
            <li>Poliklinik</li>
            <li>Pendaftaran</li>
            <li>Rekam Medis</li>
            <li>Obat</li>
            <li>Rawat Inap</li>
        </ul>
    </ul>
</div>
