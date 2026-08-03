@include('layouts.nav')

 

    <!-- Main Content -->
    <div class="main-content">

        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title">Finansal Raporlar</h1>
            <p class="page-subtitle">Gelir, gider ve transfer hareketlerinizi görüntüleyin ve analiz edin.</p>

            <div class="action-buttons">
                <button class="btn btn-primary-custom"><i class="fa-solid fa-download"></i> Rapor İndir</button>
                <button class="btn btn-secondary"
                    style="border: 1px solid var(--border-light); background-color: transparent; color: var(--text-dark); border-radius: 6px; padding: 0.5rem 1rem; font-weight: 500;"><i
                        class="fa-solid fa-filter"></i> Filtrele</button>
            </div>
        </div>

        <!-- Summary Cards -->
        <div class="summary-cards-grid">
            <div class="card-clean">
                <div class="stat-label">Toplam Gelir</div>
                <div class="stat-value">₺125,450.00</div>
                <small style="color: #166534; font-weight: 600;">+12.5% geçen aya göre</small>
            </div>

            <div class="card-clean">
                <div class="stat-label">Toplam Gider</div>
                <div class="stat-value">₺84,320.00</div>
                <small style="color: #991b1b; font-weight: 600;">-5.2% geçen aya göre</small>
            </div>

            <div class="card-clean">
                <div class="stat-label">Net Kazanç</div>
                <div class="stat-value">₺41,130.00</div>
                <small style="color: #166534; font-weight: 600;">+17.8% geçen aya göre</small>
            </div>

            <div class="card-clean">
                <div class="stat-label">Aktif Projeler</div>
                <div class="stat-value">₺32,500.00</div>
                <small style="color: var(--text-muted); font-weight: 600;">Devam eden işler</small>
            </div>
        </div>

        <!-- Chart Container -->
        <div class="chart-container">
            <div class="section-header" style="margin-bottom: 1rem;">
                <h3 class="section-title">Gelir ve Gider Grafiği</h3>
            </div>
            <div
                style="height: 320px; display: flex; align-items: center; justify-content: center; color: var(--text-muted); background-color: #f9fafb; border-radius: 6px;">
                <i class="fa-solid fa-chart-line" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                <p>Grafik Alanı (Chart.js veya benzeri kütüphane ile)</p>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon-wrapper stat-icon-income">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                </div>
                <h4 style="font-size: 1.5rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.25rem;">
                    ₺125,450</h4>
                <p style="color: var(--text-muted); font-size: 0.875rem; margin-bottom: 0.5rem;">Toplam Gelir (Bu Ay)
                </p>
                <small style="color: #166534; font-weight: 600;">+₺18,250 (+16.9%)</small>
            </div>

            <div class="stat-card">
                <div class="stat-icon-wrapper stat-icon-expense">
                    <i class="fa-solid fa-arrow-trend-down"></i>
                </div>
                <h4 style="font-size: 1.5rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.25rem;">
                    ₺84,320</h4>
                <p style="color: var(--text-muted); font-size: 0.875rem; margin-bottom: 0.5rem;">Toplam Gider (Bu Ay)
                </p>
                <small style="color: #991b1b; font-weight: 600;">-₺4,820 (-5.4%)</small>
            </div>

            <div class="stat-card">
                <div class="stat-icon-wrapper stat-icon-transfer">
                    <i class="fa-solid fa-exchange-alt"></i>
                </div>
                <h4 style="font-size: 1.5rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.25rem;">
                    ₺12,850</h4>
                <p style="color: var(--text-muted); font-size: 0.875rem; margin-bottom: 0.5rem;">Toplam Transfer (Bu Ay)
                </p>
                <small style="color: var(--text-muted); font-weight: 600;">Geçen ayla aynı</small>
            </div>
        </div>

        <!-- Monthly Overview -->
        <div class="monthly-overview">
            <div class="section-header">
                <h3 class="section-title">Aylar Özeti</h3>
                <button class="btn btn-primary-custom" style="padding: 0.5rem 1rem; font-size: 0.875rem;"><i
                        class="fa-solid fa-download"></i> Excel İndir</button>
            </div>

            <table class="table table-minimal">
                <thead>
                    <tr>
                        <th>Ay</th>
                        <th>Gelir</th>
                        <th>Gider</th>
                        <th>Net Kazanç</th>
                        <th>Toplam İşlem</th>
                        <th>Durum</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Ağustos 2026</strong></td>
                        <td class="text-end">₺125,450.00</td>
                        <td class="text-end">₺84,320.00</td>
                        <td class="text-end"><strong style="color: #166534;">₺41,130.00</strong></td>
                        <td class="text-center"><strong>142</strong></td>
                        <td><span class="badge-status bg-light-success">Başarılı</span></td>
                    </tr>
                    <tr>
                        <td><strong>Temmuz 2026</strong></td>
                        <td class="text-end">₺107,200.00</td>
                        <td class="text-end">₺89,140.00</td>
                        <td class="text-end"><strong style="color: #166534;">₺18,060.00</strong></td>
                        <td class="text-center"><strong>128</strong></td>
                        <td><span class="badge-status bg-light-success">Başarılı</span></td>
                    </tr>
                    <tr>
                        <td><strong>Haziran 2026</strong></td>
                        <td class="text-end">₺98,750.00</td>
                        <td class="text-end">₺84,320.00</td>
                        <td class="text-end"><strong style="color: #166534;">₺14,430.00</strong></td>
                        <td class="text-center"><strong>115</strong></td>
                        <td><span class="badge-status bg-light-success">Başarılı</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Transaction List -->
        <div class="transaction-list">
            <div class="section-header">
                <h3 class="section-title">Son İşlemler</h3>

                <div style="display: flex; gap: 0.5rem;">
                    <button class="tab-btn active"><i class="fa-solid fa-list"></i> Liste</button>
                    <button class="tab-btn"><i class="fa-solid fa-table"></i> Tablo</button>
                </div>
            </div>

            <!-- Filter Tabs -->
            <div class="filter-tabs">
                <button class="tab-btn active" style="border-radius: 6px;">Tümü</button>
                <button class="tab-btn" style="border-radius: 6px;"><i class="fa-solid fa-arrow-down"></i>
                    Gelir</button>
                <button class="tab-btn" style="border-radius: 6px;"><i class="fa-solid fa-arrow-up"></i> Gider</button>
            </div>

            <!-- Transaction Items -->
            <div id="transactionList">
                <div class="transaction-item">
                    <div class="transaction-icon icon-income">
                        <i class="fa-brands fa-cc-visa"></i>
                    </div>
                    <div class="transaction-details">
                        <div class="transaction-title">Proje Ödemesi - XYZ Corp</div>
                        <div class="transaction-date">2 Ağustos 2026 • Web Geliştirme Projesi</div>
                    </div>
                    <div class="transaction-amount amount-positive">+₺15,000.00</div>
                </div>

                <div class="transaction-item">
                    <div class="transaction-icon icon-expense">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <div class="transaction-details">
                        <div class="transaction-title">Müşteriden Gider - ABC Ltd</div>
                        <div class="transaction-date">1 Ağustos 2026 • Teknik Danışmanlık</div>
                    </div>
                    <div class="transaction-amount amount-negative">-₺3,500.00</div>
                </div>

                <div class="transaction-item">
                    <div class="transaction-icon icon-transfer">
                        <i class="fa-solid fa-arrow-right-arrow-left"></i>
                    </div>
                    <div class="transaction-details">
                        <div class="transaction-title">Transfer - Banka Hesabı</div>
                        <div class="transaction-date">31 Temmuz 2026 • İç Transfer</div>
                    </div>
                    <div class="transaction-amount amount-positive">+₺8,750.00</div>
                </div>

                <div class="transaction-item">
                    <div class="transaction-icon icon-income">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <div class="transaction-details">
                        <div class="transaction-title">Freelance Proje - TechStart</div>
                        <div class="transaction-date">30 Temmuz 2026 • Mobil Uygulama Geliştirme</div>
                    </div>
                    <div class="transaction-amount amount-positive">+₺12,500.00</div>
                </div>

                <div class="transaction-item">
                    <div class="transaction-icon icon-expense">
                        <i class="fa-solid fa-cloud"></i>
                    </div>
                    <div class="transaction-details">
                        <div class="transaction-title">AWS Cloud Fatura</div>
                        <div class="transaction-date">29 Temmuz 2026 • Bulut Hizmetleri</div>
                    </div>
                    <div class="transaction-amount amount-negative">-₺1,850.00</div>
                </div>

                <div class="transaction-item">
                    <div class="transaction-icon icon-income">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <div class="transaction-details">
                        <div class="transaction-title">API Geliştirme - DataFlow Inc</div>
                        <div class="transaction-date">28 Temmuz 2026 • REST API Tasarımı</div>
                    </div>
                    <div class="transaction-amount amount-positive">+₺9,250.00</div>
                </div>

                <div class="transaction-item">
                    <div class="transaction-icon icon-transfer">
                        <i class="fa-solid fa-money-bill-transfer"></i>
                    </div>
                    <div class="transaction-details">
                        <div class="transaction-title">Transfer - Freelance Hesabı</div>
                        <div class="transaction-date">25 Temmuz 2026 • Proje Ödemesi</div>
                    </div>
                    <div class="transaction-amount amount-positive">+₺18,000.00</div>
                </div>

                <div class="transaction-item">
                    <div class="transaction-icon icon-expense">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <div class="transaction-details">
                        <div class="transaction-title">Ofis Kirası</div>
                        <div class="transaction-date">24 Temmuz 2026 • Aylık Kira Ödemesi</div>
                    </div>
                    <div class="transaction-amount amount-negative">-₺5,500.00</div>
                </div>

                <div class="transaction-item">
                    <div class="transaction-icon icon-income">
                        <i class="fa-solid fa-mobile-screen"></i>
                    </div>
                    <div class="transaction-details">
                        <div class="transaction-title">Mobil Uygulama - StartupXYZ</div>
                        <div class="transaction-date">22 Temmuz 2026 • iOS/Android Geliştirme</div>
                    </div>
                    <div class="transaction-amount amount-positive">+₺22,500.00</div>
                </div>

                <div class="transaction-item">
                    <div class="transaction-icon icon-expense">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="transaction-details">
                        <div class="transaction-title">Email Hosting - Google Workspace</div>
                        <div class="transaction-date">21 Temmuz 2026 • İş Email Hizmetleri</div>
                    </div>
                    <div class="transaction-amount amount-negative">-₺450.00</div>
                </div>

            </div>
        </div>

    </div>

@include('layouts.footer')
