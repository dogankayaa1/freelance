@include('layouts.nav')

<style>
    /* Premium Modernizations */
    :root {
        --primary-glow: rgba(37, 99, 235, 0.4);
        --success-glow: rgba(22, 163, 74, 0.4);
        --warning-glow: rgba(217, 119, 6, 0.4);
        --glass-bg: rgba(255, 255, 255, 0.8);
        --glass-border: rgba(255, 255, 255, 0.6);
    }

    body {
        background-color: #f4f7f9; /* Very light subtle blue-grey for depth */
    }

    .main-content {
        animation: fadeSlideUp 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        padding: 2.5rem;
    }

    @keyframes fadeSlideUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .page-header {
        margin-bottom: 2.5rem;
    }

    .page-title {
        font-size: 1.8rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 0.5rem;
        letter-spacing: -0.02em;
    }

    .page-description {
        color: #64748b;
        font-size: 1rem;
    }

    /* Glass Cards */
    .glass-card {
        background: var(--glass-bg);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid var(--glass-border);
        border-radius: 20px;
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.05);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .glass-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.1);
        border-color: rgba(255,255,255,0.9);
    }

    /* Stats Grid */
    .modern-stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2.5rem;
    }

    .modern-stat-card {
        padding: 1.75rem;
        display: flex;
        align-items: center;
    }

    .modern-stat-card::after {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(135deg, rgba(255,255,255,0.6) 0%, rgba(255,255,255,0) 100%);
        pointer-events: none;
    }

    .modern-stat-icon {
        width: 64px;
        height: 64px;
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.75rem;
        margin-right: 1.5rem;
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }
    
    .modern-stat-card:hover .modern-stat-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .icon-blue { background: linear-gradient(135deg, #60a5fa, #2563eb); color: white; box-shadow: 0 10px 20px -5px var(--primary-glow); }
    .icon-green { background: linear-gradient(135deg, #4ade80, #16a34a); color: white; box-shadow: 0 10px 20px -5px var(--success-glow); }
    .icon-orange { background: linear-gradient(135deg, #fbbf24, #d97706); color: white; box-shadow: 0 10px 20px -5px var(--warning-glow); }
    .icon-purple { background: linear-gradient(135deg, #c084fc, #9333ea); color: white; box-shadow: 0 10px 20px -5px rgba(147, 51, 234, 0.4); }

    .modern-stat-label {
        font-size: 0.85rem;
        color: #64748b;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 0.25rem;
    }

    .modern-stat-value {
        font-size: 2rem;
        font-weight: 800;
        color: #0f172a;
        line-height: 1.1;
    }

    /* Modern Filters */
    .modern-filter-group {
        background: white;
        padding: 1.5rem 1.75rem;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        margin-bottom: 2.5rem;
        display: flex;
        flex-wrap: wrap;
        gap: 1.25rem;
        align-items: flex-end;
    }

    .modern-input-wrapper {
        flex: 1;
        min-width: 220px;
        display: flex;
        flex-direction: column;
    }

    .modern-input-wrapper label {
        font-size: 0.85rem;
        font-weight: 700;
        color: #475569;
        margin-bottom: 0.5rem;
        padding-left: 0.25rem;
    }

    .modern-input {
        background: #f8fafc;
        border: 2px solid transparent;
        border-radius: 12px;
        padding: 0.875rem 1.25rem;
        font-size: 0.95rem;
        color: #1e293b;
        transition: all 0.3s ease;
        outline: none;
        font-weight: 500;
    }

    .modern-input:focus {
        background: #ffffff;
        border-color: #3b82f6;
        box-shadow: 0 4px 15px rgba(59, 130, 246, 0.15);
    }

    /* Buttons */
    .btn-gradient {
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        color: white;
        border: none;
        padding: 0.875rem 1.75rem;
        border-radius: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        box-shadow: 0 8px 20px rgba(37, 99, 235, 0.25);
    }

    .btn-gradient:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 25px rgba(37, 99, 235, 0.35);
        color: white;
    }
    
    .btn-outline {
        background: white;
        color: #3b82f6;
        border: 2px solid #e0e7ff;
        padding: 0.875rem 1.75rem;
        border-radius: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-outline:hover {
        background: #eff6ff;
        border-color: #bfdbfe;
        color: #1d4ed8;
    }

    /* Top Action Bar */
    .action-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .action-bar .total-count {
        font-size: 1.1rem;
        color: #475569;
        font-weight: 500;
    }
    
    .action-bar .total-count strong {
        color: #0f172a;
        font-weight: 800;
    }

    /* Modern Table */
    .modern-table-container {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 40px -10px rgba(0,0,0,0.05);
        overflow: hidden;
    }

    .modern-table {
        width: 100%;
        border-collapse: collapse;
    }

    .modern-table th {
        background: #f8fafc;
        padding: 1.25rem 1.5rem;
        font-size: 0.85rem;
        font-weight: 700;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        text-align: left;
        border-bottom: 2px solid #e2e8f0;
        white-space: nowrap;
    }

    .modern-table td {
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid #f1f5f9;
        color: #334155;
        vertical-align: middle;
        font-weight: 500;
        transition: all 0.2s ease;
    }

    /* Column Highlight */
    .col-amount {
        font-weight: 800 !important;
        color: #0f172a !important;
    }
    
    .col-client {
        font-weight: 700 !important;
        color: #1e293b !important;
    }

    .col-id {
        color: #94a3b8 !important;
        font-weight: 600 !important;
        font-size: 0.9rem;
    }

    .modern-table tbody tr {
        transition: all 0.3s ease;
        position: relative;
    }

    .modern-table tbody tr:hover {
        background-color: #fafbfd;
        transform: scale(1.002); 
        box-shadow: 0 10px 30px -10px rgba(0,0,0,0.05);
        z-index: 10;
    }
    
    /* Left border indicator on hover */
    .modern-table tbody tr::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        background: #3b82f6;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .modern-table tbody tr:hover::before {
        opacity: 1;
    }

    /* Modern Badges */
    .modern-badge {
        padding: 0.5em 1.25em;
        border-radius: 2rem;
        font-size: 0.85rem;
        font-weight: 700;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        letter-spacing: 0.02em;
    }
    
    .modern-badge::before {
        content: '';
        width: 8px;
        height: 8px;
        border-radius: 50%;
        box-shadow: 0 0 8px currentColor;
    }

    .badge-pending { background: #fef3c7; color: #b45309; }
    .badge-pending::before { background: #f59e0b; }
    
    .badge-approved { background: #dcfce7; color: #15803d; }
    .badge-approved::before { background: #22c55e; }
    
    .badge-draft { background: #f1f5f9; color: #475569; }
    .badge-draft::before { background: #94a3b8; }

    /* Action Buttons (Table) */
    .action-group {
        display: flex;
        gap: 0.5rem;
        justify-content: flex-end;
    }

    .btn-icon {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: none;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        font-size: 1.1rem;
    }

    /* Dim action buttons until row is hovered for cleaner look */
    .action-group .btn-icon {
        opacity: 0.6;
    }
    .modern-table tbody tr:hover .action-group .btn-icon {
        opacity: 1;
    }

    .btn-icon-view { background: #eff6ff; color: #3b82f6; }
    .btn-icon-view:hover { background: #3b82f6; color: white; transform: translateY(-3px); box-shadow: 0 5px 15px rgba(59, 130, 246, 0.3); }
    
    .btn-icon-approve { background: #f0fdf4; color: #22c55e; }
    .btn-icon-approve:hover { background: #22c55e; color: white; transform: translateY(-3px); box-shadow: 0 5px 15px rgba(34, 197, 94, 0.3); }
    
    .btn-icon-edit { background: #f5f3ff; color: #8b5cf6; }
    .btn-icon-edit:hover { background: #8b5cf6; color: white; transform: translateY(-3px); box-shadow: 0 5px 15px rgba(139, 92, 246, 0.3); }

    /* Modern Pagination */
    .modern-pagination {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1.5rem;
        background: white;
        border-top: 1px solid #e2e8f0;
    }
    
    .pagination-info {
        color: #64748b;
        font-size: 0.95rem;
        font-weight: 500;
    }
    
    .pagination-controls {
        display: flex;
        gap: 0.5rem;
    }
    
    .page-btn {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #e2e8f0;
        background: white;
        color: #475569;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.2s;
    }
    
    .page-btn:hover, .page-btn.active {
        background: #3b82f6;
        color: white;
        border-color: #3b82f6;
    }
</style>


<div class="main-content">
    <!-- Page Header -->
    <div class="page-header">
        <h1 class="page-title">Teklif Yönetimi</h1>
        <p class="page-description">Mevcut tekliflerinizi görüntüleyin, düzenleyin ve modern bir arayüzle takip edin.</p>
    </div>

    <!-- Stats Overview -->
    <div class="modern-stats-grid">
        <div class="glass-card modern-stat-card">
            <div class="modern-stat-icon icon-blue">
                <i class="fa-solid fa-file-signature"></i>
            </div>
            <div>
                <div class="modern-stat-label">Toplam Teklif</div>
                <div class="modern-stat-value">15</div>
            </div>
        </div>

        <div class="glass-card modern-stat-card">
            <div class="modern-stat-icon icon-green">
                <i class="fa-solid fa-check"></i>
            </div>
            <div>
                <div class="modern-stat-label">Onaylanan</div>
                <div class="modern-stat-value">7</div>
            </div>
        </div>

        <div class="glass-card modern-stat-card">
            <div class="modern-stat-icon icon-orange">
                <i class="fa-solid fa-clock"></i>
            </div>
            <div>
                <div class="modern-stat-label">Bekleyen</div>
                <div class="modern-stat-value">6</div>
            </div>
        </div>

        <div class="glass-card modern-stat-card">
            <div class="modern-stat-icon icon-purple">
                <i class="fa-solid fa-money-bill-trend-up"></i>
            </div>
            <div>
                <div class="modern-stat-label">Toplam Tutar</div>
                <div class="modern-stat-value">₺251.5K</div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="modern-filter-group">
        <div class="modern-input-wrapper">
            <label for="status-filter">Teklif Durumu</label>
            <select class="modern-input" id="status-filter">
                <option value="">Tümü</option>
                <option value="draft">Bekliyor</option>
                <option value="pending">Onay Bekliyor</option>
                <option value="approved">Onaylandı</option>
                <option value="rejected">Reddedildi</option>
            </select>
        </div>

        <div class="modern-input-wrapper">
            <label for="client-filter">Müşteri Ara</label>
            <input type="text" class="modern-input" id="client-filter" placeholder="İsim veya şirket girin...">
        </div>

        <div class="modern-input-wrapper">
            <label for="date-range">Tarih Aralığı</label>
            <div style="display: flex; gap: 0.5rem;">
                <input type="date" class="modern-input" style="flex:1" id="date-from">
                <input type="date" class="modern-input" style="flex:1" id="date-to">
            </div>
        </div>

        <div class="modern-input-wrapper" style="flex: 0; min-width: auto;">
            <button class="btn-gradient" style="height: 100%;">
                <i class="fa-solid fa-filter"></i> Filtrele
            </button>
        </div>
    </div>

    <!-- Action Bar -->
    <div class="action-bar">
        <div class="total-count">
            Toplam <strong>15</strong> teklif listeleniyor
        </div>
        <div style="display: flex; gap: 1rem;">
            <button class="btn-outline">
                <i class="fa-solid fa-download"></i> CSV İndir
            </button>
            <button class="btn-gradient" data-bs-toggle="modal" data-bs-target="#newQuoteModal">
                <i class="fa-solid fa-plus"></i> Yeni Teklif
            </button>
        </div>
    </div>

    <!-- Quotes Table -->
    <div class="modern-table-container">
        <table class="modern-table">
            <thead>
                <tr>
                    <th>Teklif No</th>
                    <th>Müşteri</th>
                    <th>Hizmet/Tür</th>
                    <th>Tutar</th>
                    <th>Tarih</th>
                    <th>Durum</th>
                    <th style="text-align: right;">İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                <tr>
                    <td class="col-id">#TEK-2026-001</td>
                    <td class="col-client">Ahmet Yılmaz</td>
                    <td>Web Tasarım Hizmeti</td>
                    <td class="col-amount">₺15.000,00</td>
                    <td>15 Tem 2026</td>
                    <td><span class="modern-badge badge-pending">Onay Bekliyor</span></td>
                    <td>
                        <div class="action-group">
                            <button class="btn-icon btn-icon-view" data-bs-toggle="modal" data-bs-target="#viewQuoteModal" title="Görüntüle"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn-icon btn-icon-approve" data-bs-toggle="modal" data-bs-target="#approveQuoteModal" title="Onayla"><i class="fa-solid fa-check"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Row 2 -->
                <tr>
                    <td class="col-id">#TEK-2026-002</td>
                    <td class="col-client">Ayşe Demir</td>
                    <td>Mobil Uygulama Geliştirme</td>
                    <td class="col-amount">₺45.000,00</td>
                    <td>18 Tem 2026</td>
                    <td><span class="modern-badge badge-approved">Onaylandı</span></td>
                    <td>
                        <div class="action-group">
                            <button class="btn-icon btn-icon-view" data-bs-toggle="modal" data-bs-target="#viewQuoteModal" title="Görüntüle"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn-icon btn-icon-edit" data-bs-toggle="modal" data-bs-target="#editQuoteModal" title="Düzenle"><i class="fa-solid fa-pen"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Row 3 -->
                <tr>
                    <td class="col-id">#TEK-2026-003</td>
                    <td class="col-client">Mehmet Kaya</td>
                    <td>Dijital Pazarlama Paketi</td>
                    <td class="col-amount">₺25.000,00</td>
                    <td>20 Tem 2026</td>
                    <td><span class="modern-badge badge-draft">Bekliyor</span></td>
                    <td>
                        <div class="action-group">
                            <button class="btn-icon btn-icon-view" data-bs-toggle="modal" data-bs-target="#viewQuoteModal" title="Görüntüle"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn-icon btn-icon-approve" data-bs-toggle="modal" data-bs-target="#approveQuoteModal" title="Onayla"><i class="fa-solid fa-check"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Row 4 -->
                <tr>
                    <td class="col-id">#TEK-2026-004</td>
                    <td class="col-client">Fatma Şahin</td>
                    <td>Sosyal Medya Yönetimi</td>
                    <td class="col-amount">₺8.500,00</td>
                    <td>21 Tem 2026</td>
                    <td><span class="modern-badge badge-approved">Onaylandı</span></td>
                    <td>
                        <div class="action-group">
                            <button class="btn-icon btn-icon-view" data-bs-toggle="modal" data-bs-target="#viewQuoteModal" title="Görüntüle"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn-icon btn-icon-edit" data-bs-toggle="modal" data-bs-target="#editQuoteModal" title="Düzenle"><i class="fa-solid fa-pen"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Row 5 -->
                <tr>
                    <td class="col-id">#TEK-2026-005</td>
                    <td class="col-client">Can Arslan</td>
                    <td>E-Ticaret Kurulumu</td>
                    <td class="col-amount">₺35.000,00</td>
                    <td>22 Tem 2026</td>
                    <td><span class="modern-badge badge-pending">Onay Bekliyor</span></td>
                    <td>
                        <div class="action-group">
                            <button class="btn-icon btn-icon-view" data-bs-toggle="modal" data-bs-target="#viewQuoteModal" title="Görüntüle"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn-icon btn-icon-approve" data-bs-toggle="modal" data-bs-target="#approveQuoteModal" title="Onayla"><i class="fa-solid fa-check"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Row 6 -->
                <tr>
                    <td class="col-id">#TEK-2026-006</td>
                    <td class="col-client">Zeynep Öztürk</td>
                    <td>Kurumsal Web Sitesi</td>
                    <td class="col-amount">₺22.500,00</td>
                    <td>23 Tem 2026</td>
                    <td><span class="modern-badge badge-approved">Onaylandı</span></td>
                    <td>
                        <div class="action-group">
                            <button class="btn-icon btn-icon-view" data-bs-toggle="modal" data-bs-target="#viewQuoteModal" title="Görüntüle"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn-icon btn-icon-edit" data-bs-toggle="modal" data-bs-target="#editQuoteModal" title="Düzenle"><i class="fa-solid fa-pen"></i></button>
                        </div>
                    </td>
                </tr>
                
                <!-- Row 7 -->
                <tr>
                    <td class="col-id">#TEK-2026-007</td>
                    <td class="col-client">Burak Yıldız</td>
                    <td>SEO Optimizasyonu</td>
                    <td class="col-amount">₺12.000,00</td>
                    <td>24 Tem 2026</td>
                    <td><span class="modern-badge badge-pending">Onay Bekliyor</span></td>
                    <td>
                        <div class="action-group">
                            <button class="btn-icon btn-icon-view" data-bs-toggle="modal" data-bs-target="#viewQuoteModal" title="Görüntüle"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn-icon btn-icon-approve" data-bs-toggle="modal" data-bs-target="#approveQuoteModal" title="Onayla"><i class="fa-solid fa-check"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Row 8 -->
                <tr>
                    <td class="col-id">#TEK-2026-008</td>
                    <td class="col-client">Selin Aydın</td>
                    <td>Kurumsal Kimlik Tasarımı</td>
                    <td class="col-amount">₺18.000,00</td>
                    <td>25 Tem 2026</td>
                    <td><span class="modern-badge badge-approved">Onaylandı</span></td>
                    <td>
                        <div class="action-group">
                            <button class="btn-icon btn-icon-view" data-bs-toggle="modal" data-bs-target="#viewQuoteModal" title="Görüntüle"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn-icon btn-icon-edit" data-bs-toggle="modal" data-bs-target="#editQuoteModal" title="Düzenle"><i class="fa-solid fa-pen"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Row 9 -->
                <tr>
                    <td class="col-id">#TEK-2026-009</td>
                    <td class="col-client">Oğuz Çelik</td>
                    <td>Logo Tasarımı</td>
                    <td class="col-amount">₺5.500,00</td>
                    <td>26 Tem 2026</td>
                    <td><span class="modern-badge badge-draft">Bekliyor</span></td>
                    <td>
                        <div class="action-group">
                            <button class="btn-icon btn-icon-view" data-bs-toggle="modal" data-bs-target="#viewQuoteModal" title="Görüntüle"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn-icon btn-icon-approve" data-bs-toggle="modal" data-bs-target="#approveQuoteModal" title="Onayla"><i class="fa-solid fa-check"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Row 10 -->
                <tr>
                    <td class="col-id">#TEK-2026-010</td>
                    <td class="col-client">Dilara Koç</td>
                    <td>Kurumsal Web Sitesi</td>
                    <td class="col-amount">₺38.000,00</td>
                    <td>27 Tem 2026</td>
                    <td><span class="modern-badge badge-approved">Onaylandı</span></td>
                    <td>
                        <div class="action-group">
                            <button class="btn-icon btn-icon-view" data-bs-toggle="modal" data-bs-target="#viewQuoteModal" title="Görüntüle"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn-icon btn-icon-edit" data-bs-toggle="modal" data-bs-target="#editQuoteModal" title="Düzenle"><i class="fa-solid fa-pen"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Modern Pagination -->
        <div class="modern-pagination">
            <div class="pagination-info">
                Toplam 15 tekliften <strong>1 - 10</strong> arası gösteriliyor
            </div>
            <div class="pagination-controls">
                <a href="#" class="page-btn"><i class="fa-solid fa-chevron-left"></i></a>
                <a href="#" class="page-btn active">1</a>
                <a href="#" class="page-btn">2</a>
                <a href="#" class="page-btn"><i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>


<!-- New Quote Modal -->
<div class="modal fade" id="newQuoteModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
            <div class="modal-header" style="background: linear-gradient(135deg, #f8fafc, #ffffff); border-bottom: 1px solid #e2e8f0; padding: 1.5rem;">
                <h5 class="modal-title" style="font-weight: 800; color: #0f172a;">Yeni Teklif Oluştur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" style="padding: 1.5rem;">
                <form id="newQuoteForm">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label" style="font-weight: 600; color: #475569;">Müşteri</label>
                            <select class="form-select" style="border-radius: 10px; background: #f8fafc;" required>
                                <option value="">Müşteri Seçin...</option>
                                <option>Ahmet Yılmaz</option>
                                <option>Ayşe Demir</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" style="font-weight: 600; color: #475569;">Hizmet Türü</label>
                            <input type="text" class="form-control" style="border-radius: 10px; background: #f8fafc;" placeholder="Örn: Web Tasarım" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label" style="font-weight: 600; color: #475569;">Tutar (₺)</label>
                            <input type="number" class="form-control" style="border-radius: 10px; background: #f8fafc;" placeholder="0,00" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" style="font-weight: 600; color: #475569;">Tarih</label>
                            <input type="date" class="form-control" style="border-radius: 10px; background: #f8fafc;" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight: 600; color: #475569;">Teklif Detayları</label>
                        <textarea class="form-control" rows="4" style="border-radius: 10px; background: #f8fafc;" placeholder="Teklif içeriğini buraya yazın..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="border-top: 1px solid #f1f5f9; padding: 1.25rem;">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal" style="border-radius: 10px; font-weight: 600;">İptal</button>
                <button type="submit" form="newQuoteForm" class="btn btn-primary" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8); border: none; border-radius: 10px; font-weight: 600; padding: 0.5rem 1.5rem;">Oluştur</button>
            </div>
        </div>
    </div>
</div>


<!-- View Quote Modal -->
<div class="modal fade" id="viewQuoteModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
            <div class="modal-header" style="background: linear-gradient(135deg, #f8fafc, #ffffff); border-bottom: 1px solid #e2e8f0; padding: 1.5rem;">
                <h5 class="modal-title" style="font-weight: 800; color: #0f172a;"><i class="fa-solid fa-file-signature me-2 text-primary"></i>Teklif Detayları</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" style="padding: 1.5rem;">
                <div class="mb-3">
                    <label class="form-label text-muted small fw-bold">Müşteri</label>
                    <p class="fw-bold mb-0">Ahmet Yılmaz</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-muted small fw-bold">Hizmet Türü</label>
                    <p class="mb-0">Web Tasarım Hizmeti</p>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label text-muted small fw-bold">Tutar</label>
                        <p class="fw-bold text-dark mb-0">₺15.000,00</p>
                    </div>
                    <div class="col-6">
                        <label class="form-label text-muted small fw-bold">Tarih</label>
                        <p class="mb-0">15 Tem 2026</p>
                    </div>
                </div>
                <div>
                    <label class="form-label text-muted small fw-bold">Açıklama</label>
                    <p class="bg-light p-3 rounded" style="font-size: 0.95rem;">Kurumsal web sitesi tasarımı, mobil uyumluluk ve temel SEO optimizasyonu dahil.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Quote Modal -->
<div class="modal fade" id="editQuoteModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
            <div class="modal-header" style="background: linear-gradient(135deg, #f8fafc, #ffffff); border-bottom: 1px solid #e2e8f0; padding: 1.5rem;">
                <h5 class="modal-title" style="font-weight: 800; color: #0f172a;"><i class="fa-solid fa-pen me-2" style="color: #8b5cf6;"></i>Teklifi Düzenle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" style="padding: 1.5rem;">
                <form id="editQuoteForm">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label" style="font-weight: 600; color: #475569;">Müşteri</label>
                            <input type="text" class="form-control" style="border-radius: 10px; background: #f8fafc;" value="Ayşe Demir" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" style="font-weight: 600; color: #475569;">Hizmet Türü</label>
                            <input type="text" class="form-control" style="border-radius: 10px; background: #f8fafc;" value="Mobil Uygulama Geliştirme" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label" style="font-weight: 600; color: #475569;">Tutar (₺)</label>
                            <input type="number" class="form-control" style="border-radius: 10px; background: #f8fafc;" value="45000" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" style="font-weight: 600; color: #475569;">Durum</label>
                            <select class="form-select" style="border-radius: 10px; background: #f8fafc;">
                                <option>Bekliyor</option>
                                <option>Onay Bekliyor</option>
                                <option selected>Onaylandı</option>
                                <option>Reddedildi</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight: 600; color: #475569;">Açıklama</label>
                        <textarea class="form-control" rows="3" style="border-radius: 10px; background: #f8fafc;">iOS ve Android için native mobil uygulama geliştirme süreci.</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="border-top: 1px solid #f1f5f9; padding: 1.25rem;">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal" style="border-radius: 10px; font-weight: 600;">İptal</button>
                <button type="submit" form="editQuoteForm" class="btn btn-primary" style="background: linear-gradient(135deg, #8b5cf6, #7c3aed); border: none; border-radius: 10px; font-weight: 600; padding: 0.5rem 1.5rem;">Güncelle</button>
            </div>
        </div>
    </div>
</div>

<!-- Approve Quote Modal -->
<div class="modal fade" id="approveQuoteModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
            <div class="modal-body text-center" style="padding: 2rem 1.5rem;">
                <i class="fa-solid fa-circle-check fa-3x mb-3" style="color: #22c55e;"></i>
                <h5 class="fw-bold mb-2">Teklifi Onayla</h5>
                <p class="text-muted small mb-4">Bu teklifi onaylamak istediğinize emin misiniz?</p>
                <div class="d-flex justify-content-center gap-2">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" style="border-radius: 10px; font-weight: 600;">Vazgeç</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" style="background: linear-gradient(135deg, #22c55e, #16a34a); border: none; border-radius: 10px; font-weight: 600;">Evet, Onayla</button>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')

