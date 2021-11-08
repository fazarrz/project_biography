<?php

  if(!defined('INDEX')) die('');

?>
<h2 class="dashboard-title">Beranda</h2>
<div class="dashboard-cards">
    <div class="card-single">
        <div class="card-body">
            <span class="fa fa-eye"></span>
            <div>
                <h5>Pengakses</h5>
                <h4>200.000</h4>
            </div>
        </div>
        <div class="card-footer">
            <a href="#">Lihat semua</a>
        </div>
    </div>
    <div class="card-single">
        <div class="card-body">
            <span class="fa fa-user"></span>
            <div>
                <h5>Penulis</h5>
                <h4>150</h4>
            </div>
        </div>
        <div class="card-footer">
            <a href="#">Lihat semua</a>
        </div>
    </div>
    <div class="card-single">
        <div class="card-body">
            <span class="fa fa-folder"></span>
            <div>
                <h5>Proyek</h5>
                <h4>200.000</h4>
            </div>
        </div>
        <div class="card-footer">
            <a href="#">Lihat semua</a>
        </div>
    </div>
</div>
<section class="recent">
    <div class="activity-grid">
        <div class="activity-card">
            <h3>Riwayat Aktifitas</h3>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Biografi</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>828</td>
                            <td>Messi</td>
                            <td>1/2/2021</td>
                            <td>
                                <span class="badge danger">
                                    Non-aktif
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1241</td>
                            <td>Ronaldo</td>
                            <td>2/4/2021</td>
                            <td>
                                <span class="badge success">
                                    Aktif
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>12412</td>
                            <td>Deden Sukamana</td>
                            <td>2/7/2021</td>
                            <td>
                                <span class="badge success">
                                    Aktif
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </thead>
            </table>
        </div>
        <div class="summary">
            <div class="summary-card">
                <div class="summary-single">
                    <span class="fa fa-check-square-o"></span>
                    <div>
                        <h5>2000</h5>
                        <small>Proyek Aktif</small>
                    </div>
                </div>
                <div class="summary-single">
                    <span class="fa fa-briefcase"></span>
                    <div>
                        <h5>21</h5>
                        <small>Proyek Non-Aktif</small>
                    </div>
                </div>
                <div class="summary-single">
                    <span class="fa fa-address-book-o""></span>
                    <div>
                        <h5>1900</h5>
                        <small>Proyek Biografi</small>
                    </div>
                </div>
                <div class="summary-single">
                    <span class="fa fa-address-card"></span>
                    <div>
                        <h5>2100</h5>
                        <small>Proyek AutoBiografi</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>