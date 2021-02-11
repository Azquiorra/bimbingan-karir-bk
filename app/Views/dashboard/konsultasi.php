<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h4 mb-4 text-gray-800">Riwayat Konsultasi</h1>
    <div class="row mb-4">
        <div class="col-md-12 card-konten">
            <div class="item">
                <div class="featured-image mb-3">
                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_1.svg" alt="This is a cool picture" />
                </div>
                <div class="description">
                    <h5 class="font-weight-bold">Tamaki Erina</h5>
                    <p class="text-muted">Tanggal : 16 July 2020</p>
                    <span class="badge status badge-success">Selesai</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <a href="#" data-toggle="modal" data-target="#chattingModal" class="custom-card">
            <div class="col-md-12 card-konten">
                <div class="item">
                    <div class="featured-image mb-3">
                        <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_3.svg" alt="This is a cool picture" />
                    </div>
                    <div class="description">
                        <h5 class="font-weight-bold">Senku Ishigami</h5>
                        <p class="text-muted">Tanggal : 08 July 2020</p>
                        <span class="badge status badge-danger"> Belum Selesai</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="row mb-4">
        <div class="col-md-12 card-konten">
            <div class="item">
                <div class="featured-image mb-3">
                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_3.svg" alt="This is a cool picture" />
                </div>
                <div class="description">
                    <h5 class="font-weight-bold">Senku Ishigami</h5>
                    <p class="text-muted">Tanggal : 08 July 2020</p>
                    <span class="badge status badge-danger"> Belum Selesai</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-konsultasi fade" id="chattingModal" tabindex="-1" aria-labelledby="chattingModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" id="konsultasiContent">
            <div class="modal-header" id="konsultasiHeader">
                <div class="msg-header-img">
                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_3.svg" class="profile" alt="Cool">
                </div>
                <div class="active">
                    <p>Senku Ishigami</p>
                </div>
                <div class="header-icons">
                    <i class="fas fa-ellipsis-v"></i>
                    <a href="#" data-toggle="modal" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="modal-body" id="konsultasiBody">
                <div class="msg-inbox">
                    <div class="chats">
                        <div class="msg-page">
                            <div class="received-chats">
                                <div class="received-chats-img">
                                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_3.svg" alt="Guru">
                                </div>
                                <div class="received-msg">
                                    <div class="received-msg-inbox">
                                        <p>Selamat siang, pak</p>
                                    </div>
                                </div>
                            </div>
                            <div class="outgoing-chats">
                                <div class="outgoing-msg-inbox">
                                    <p>Selamat siang</p>
                                </div>
                                <div class="outgoing-chats-img">
                                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_2.svg" alt="Guru">
                                </div>
                            </div>
                            <div class="received-chats">
                                <div class="received-chats-img">
                                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_3.svg" alt="Guru">
                                </div>
                                <div class="received-msg">
                                    <div class="received-msg-inbox">
                                         <p>Mohon maaf mengganggu waktunya sebentar, pak</p>
                                    </div>
                                </div>
                            </div>
                            <div class="outgoing-chats">
                                    <div class="outgoing-msg-inbox">
                                        <p>Oh iya, tidak apa-apa</p>
                                    </div>
                                <div class="outgoing-chats-img">
                                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_2.svg" alt="Guru">
                                </div>
                            </div>
                            <div class="outgoing-chats">
                                    <div class="outgoing-msg-inbox">
                                        <p>Ada apa di waktu hari ini?</p>
                                    </div>
                                <div class="outgoing-chats-img">
                                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_2.svg" alt="Guru">
                                </div>
                            </div>
                            <div class="received-chats">
                                <div class="received-chats-img">
                                    <img src="<?= base_url(); ?>/assets-dashboard/img/undraw_profile_3.svg" alt="Guru">
                                </div>
                                <div class="received-msg">
                                    <div class="received-msg-inbox">
                                        <p>Maaf pak, saya sedikit bermasalah dengan kehidupan saya</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" id="konsultasiFooter">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Tulis pesan disini...">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-paper-plane"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>