@include("layouts.nav")



    <!-- Main Content -->
    <div class="main-content">

        <!-- Topbar / Header -->
        <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
            <div>
                <h4 class="fw-bold mb-0">Kontrol Paneli</h4>
                <small class="text-muted">Performans metrikleri ve güncel görevler.</small>
            </div>
            <div>
                <button class="btn btn-light border me-2"><i class="fa-regular fa-bell"></i></button>
                <button class="btn btn-primary-custom"><i class="fa-solid fa-plus me-2"></i>Yeni Proje</button>
            </div>
        </div>

        <!-- KPI Cards -->
        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="card-clean">
                    <div class="stat-label">Onaylanan Teklifler</div>
                    <div class="stat-value">₺124.500</div>
                    <span class="badge-status bg-light-success"><i class="fa-solid fa-trend-up me-1"></i> %8 Artış</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-clean">
                    <div class="stat-label">Bekleyen Ödemeler</div>
                    <div class="stat-value">₺18.200</div>
                    <span class="badge-status bg-light-warning">3 Fatura</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-clean">
                    <div class="stat-label">Devam Eden İşler</div>
                    <div class="stat-value">4</div>
                    <span class="badge-status bg-light-info">1 Gecikmeli</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-clean">
                    <div class="stat-label">Başarı Oranı (Lead)</div>
                    <div class="stat-value">%72</div>
                    <span class="text-muted small">Son 30 gün</span>
                </div>
            </div>
        </div>

        <!-- Data Tables & Lists -->
        <div class="row g-4">
            <!-- Pipeline Table -->
            <div class="col-lg-8">
                <div class="card-clean">
                    <h6 class="fw-bold mb-4">Son Teklifler & Durumları</h6>
                    <div class="table-responsive">
                        <table class="table table-minimal table-borderless w-100">
                            <thead>
                                <tr>
                                    <th>Müşteri</th>
                                    <th>Kategori</th>
                                    <th>Tutar</th>
                                    <th>Tarih</th>
                                    <th>Durum</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="fw-semibold">Global Lojistik A.Ş.</div>
                                    </td>
                                    <td class="text-muted">B2B Portal</td>
                                    <td class="fw-semibold">₺65.000</td>
                                    <td class="text-muted">12 Ağu 2026</td>
                                    <td><span class="badge-status bg-light-warning">Beklemede</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="fw-semibold">TechNova Mimarlık</div>
                                    </td>
                                    <td class="text-muted">Kurumsal Web Sitesi</td>
                                    <td class="fw-semibold">₺32.000</td>
                                    <td class="text-muted">10 Ağu 2026</td>
                                    <td><span class="badge-status bg-light-success">Kazanıldı</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="fw-semibold">Zeta E-Ticaret</div>
                                    </td>
                                    <td class="text-muted">API Entegrasyonu</td>
                                    <td class="fw-semibold">₺14.500</td>
                                    <td class="text-muted">05 Ağu 2026</td>
                                    <td><span class="badge-status bg-light-info">İncelemede</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Action Items -->
            <div class="col-lg-4">
                <div class="card-clean">
                    <h6 class="fw-bold mb-4">Yaklaşan Görevler</h6>

                    <div class="d-flex align-items-start gap-3 mb-3 border-bottom pb-3">
                        <input class="form-check-input mt-1" type="checkbox">
                        <div>
                            <div class="fw-semibold" style="font-size: 0.9rem;">Global Lojistik toplantısı</div>
                            <div class="text-muted small">Yarın, 14:00 - Google Meet</div>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3 mb-3 border-bottom pb-3">
                        <input class="form-check-input mt-1" type="checkbox">
                        <div>
                            <div class="fw-semibold" style="font-size: 0.9rem;">TechNova sözleşme iletimi</div>
                            <div class="text-muted small">Bugün, 17:00'ye kadar e-posta gönder.</div>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3">
                        <input class="form-check-input mt-1" type="checkbox">
                        <div>
                            <div class="fw-semibold" style="font-size: 0.9rem;">Aylık gelir/gider raporu</div>
                            <div class="text-muted small">Muhasebeciye evrakları ilet.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('layouts.footer')
