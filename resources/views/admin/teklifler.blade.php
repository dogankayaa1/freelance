@include('layouts.nav')


    <!-- Main Content -->
    <div class="main-content">
        <!-- Page Header -->
        <div style="margin-bottom: 2rem;">
            <h1 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">Teklif Yönetimi</h1>
            <p style="color: var(--text-muted);">Mevcut tekliflerinizi görüntüleyin, düzenleyin ve takip edin.</p>
        </div>

        <!-- Stats Overview -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon blue">
                    <i class="fa-solid fa-file-signature"></i>
                </div>
                <div>
                    <div class="stat-label">Toplam Teklif</div>
                    <div class="stat-value" id="total-quotes">0</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">
                    <i class="fa-solid fa-check"></i>
                </div>
                <div>
                    <div class="stat-label">Onaylanan</div>
                    <div class="stat-value" id="approved-quotes">0</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                    <div class="stat-label">Bekleyen</div>
                    <div class="stat-value" id="pending-quotes">0</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon purple">
                    <i class="fa-solid fa-money-bill-trend-up"></i>
                </div>
                <div>
                    <div class="stat-label">Toplam Tutar</div>
                    <div class="stat-value" id="total-amount">₺0.00</div>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class="filter-group">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
                <div>
                    <label class="form-label-sm">Teklif Durumu</label>
                    <select class="form-control-sm" id="status-filter">
                        <option value="">Tümü</option>
                        <option value="draft">Bekliyor</option>
                        <option value="pending">Onay Bekliyor</option>
                        <option value="approved">Onaylandı</option>
                        <option value="rejected">Reddedildi</option>
                    </select>
                </div>

                <div>
                    <label class="form-label-sm">Müşteri</label>
                    <input type="text" class="form-control-sm" id="client-filter" placeholder="Ara...">
                </div>

                <div>
                    <label class="form-label-sm">Tarih Aralığı</label>
                    <input type="date" class="form-control-sm" id="date-from" style="margin-bottom: 0.5rem;">
                    <input type="date" class="form-control-sm" id="date-to" style="margin-top: 0.5rem;">
                </div>

                <div style="display: flex; align-items: flex-end;">
                    <button class="btn-primary-custom" onclick="applyFilters()"
                        style="flex: 1; margin-bottom: 0.25rem;">
                        <i class="fa-solid fa-filter"></i> Filtrele
                    </button>
                </div>
            </div>
        </div>

        <!-- Action Bar -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <div>
                <span class="stat-label">Toplam <span id="total-count"
                        style="font-weight: 700; color: var(--text-dark);">0</span> teklif</span>
            </div>
            <div style="display: flex; gap: 0.5rem;">
                <button class="btn-primary-custom" onclick="exportToCSV()">
                    <i class="fa-solid fa-download"></i> CSV İndir
                </button>
                <button class="btn-primary-custom" onclick="createNewQuote()">
                    <i class="fa-solid fa-plus"></i> Yeni Teklif
                </button>
            </div>
        </div>

        <!-- Quotes Table -->
        <div class="card-clean">
            <table class="table table-minimal table-hover" style="width: 100%; border-collapse: collapse;">
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
                <tbody id="quotes-table-body">
                    <!-- Sample data -->
                    <tr>
                        <td>#TEK-2026-001</td>
                        <td><strong>Ahmet Yılmaz</strong></td>
                        <td>Web Tasarım Hizmeti</td>
                        <td style="font-weight: 700;">₺15.000,00</td>
                        <td>2026-07-15</td>
                        <td><span class="badge-status bg-light-info">Onay Bekliyor</span></td>
                        <td style="text-align: right;">
                            <div class="table-actions">
                                <button class="btn-action-sm btn-primary-custom" onclick="viewQuote('#TEK-2026-001')"><i
                                        class="fa-solid fa-eye"></i></button>
                                <button class="btn-action-sm" style="background-color: #dcfce7; color: #166534;"
                                    onclick="approveQuote('#TEK-2026-001')"><i class="fa-solid fa-check"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#TEK-2026-002</td>
                        <td><strong>Ayşe Demir</strong></td>
                        <td>Mobil Uygulama Geliştirme</td>
                        <td style="font-weight: 700;">₺45.000,00</td>
                        <td>2026-07-18</td>
                        <td><span class="badge-status bg-light-success">Onaylandı</span></td>
                        <td style="text-align: right;">
                            <div class="table-actions">
                                <button class="btn-action-sm btn-primary-custom" onclick="viewQuote('#TEK-2026-002')"><i
                                        class="fa-solid fa-eye"></i></button>
                                <button class="btn-action-sm" style="background-color: #f3e8ff; color: #6b21a8;"
                                    onclick="editQuote('#TEK-2026-002')"><i class="fa-solid fa-pen"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#TEK-2026-003</td>
                        <td><strong>Mehmet Kaya</strong></td>
                        <td>Dijital Pazarlama Paketi</td>
                        <td style="font-weight: 700;">₺25.000,00</td>
                        <td>2026-07-20</td>
                        <td><span class="badge-status bg-light-warning">Bekliyor</span></td>
                        <td style="text-align: right;">
                            <div class="table-actions">
                                <button class="btn-action-sm btn-primary-custom" onclick="viewQuote('#TEK-2026-003')"><i
                                        class="fa-solid fa-eye"></i></button>
                                <button class="btn-action-sm" style="background-color: #dcfce7; color: #166534;"
                                    onclick="approveQuote('#TEK-2026-003')"><i class="fa-solid fa-check"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#TEK-2026-004</td>
                        <td><strong>Fatma Şahin</strong></td>
                        <td>Sosyal Medya Yönetimi</td>
                        <td style="font-weight: 700;">₺8.500,00</td>
                        <td>2026-07-21</td>
                        <td><span class="badge-status bg-light-success">Onaylandı</span></td>
                        <td style="text-align: right;">
                            <div class="table-actions">
                                <button class="btn-action-sm btn-primary-custom" onclick="viewQuote('#TEK-2026-004')"><i
                                        class="fa-solid fa-eye"></i></button>
                                <button class="btn-action-sm" style="background-color: #f3e8ff; color: #6b21a8;"
                                    onclick="editQuote('#TEK-2026-004')"><i class="fa-solid fa-pen"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#TEK-2026-005</td>
                        <td><strong>Can Arslan</strong></td>
                        <td>E-Ticaret Kurulumu</td>
                        <td style="font-weight: 700;">₺35.000,00</td>
                        <td>2026-07-22</td>
                        <td><span class="badge-status bg-light-info">Onay Bekliyor</span></td>
                        <td style="text-align: right;">
                            <div class="table-actions">
                                <button class="btn-action-sm btn-primary-custom" onclick="viewQuote('#TEK-2026-005')"><i
                                        class="fa-solid fa-eye"></i></button>
                                <button class="btn-action-sm" style="background-color: #dcfce7; color: #166534;"
                                    onclick="approveQuote('#TEK-2026-005')"><i class="fa-solid fa-check"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#TEK-2026-006</td>
                        <td><strong>Zeynep Öztürk</strong></td>
                        <td>Kurumsal Web Sitesi</td>
                        <td style="font-weight: 700;">₺22.500,00</td>
                        <td>2026-07-23</td>
                        <td><span class="badge-status bg-light-success">Onaylandı</span></td>
                        <td style="text-align: right;">
                            <div class="table-actions">
                                <button class="btn-action-sm btn-primary-custom" onclick="viewQuote('#TEK-2026-006')"><i
                                        class="fa-solid fa-eye"></i></button>
                                <button class="btn-action-sm" style="background-color: #f3e8ff; color: #6b21a8;"
                                    onclick="editQuote('#TEK-2026-006')"><i class="fa-solid fa-pen"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#TEK-2026-007</td>
                        <td><strong>Burak Yıldız</strong></td>
                        <td>SEO Optimizasyonu</td>
                        <td style="font-weight: 700;">₺12.000,00</td>
                        <td>2026-07-24</td>
                        <td><span class="badge-status bg-light-info">Onay Bekliyor</span></td>
                        <td style="text-align: right;">
                            <div class="table-actions">
                                <button class="btn-action-sm btn-primary-custom" onclick="viewQuote('#TEK-2026-007')"><i
                                        class="fa-solid fa-eye"></i></button>
                                <button class="btn-action-sm" style="background-color: #dcfce7; color: #166534;"
                                    onclick="approveQuote('#TEK-2026-007')"><i class="fa-solid fa-check"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#TEK-2026-008</td>
                        <td><strong>Selin Aydın</strong></td>
                        <td>Kurumsal Kimlik Tasarımı</td>
                        <td style="font-weight: 700;">₺18.000,00</td>
                        <td>2026-07-25</td>
                        <td><span class="badge-status bg-light-success">Onaylandı</span></td>
                        <td style="text-align: right;">
                            <div class="table-actions">
                                <button class="btn-action-sm btn-primary-custom" onclick="viewQuote('#TEK-2026-008')"><i
                                        class="fa-solid fa-eye"></i></button>
                                <button class="btn-action-sm" style="background-color: #f3e8ff; color: #6b21a8;"
                                    onclick="editQuote('#TEK-2026-008')"><i class="fa-solid fa-pen"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#TEK-2026-009</td>
                        <td><strong>Oğuz Çelik</strong></td>
                        <td>Logo Tasarımı</td>
                        <td style="font-weight: 700;">₺5.500,00</td>
                        <td>2026-07-26</td>
                        <td><span class="badge-status bg-light-warning">Bekliyor</span></td>
                        <td style="text-align: right;">
                            <div class="table-actions">
                                <button class="btn-action-sm btn-primary-custom" onclick="viewQuote('#TEK-2026-009')"><i
                                        class="fa-solid fa-eye"></i></button>
                                <button class="btn-action-sm" style="background-color: #dcfce7; color: #166534;"
                                    onclick="approveQuote('#TEK-2026-009')"><i class="fa-solid fa-check"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#TEK-2026-010</td>
                        <td><strong>Dilara Koç</strong></td>
                        <td>Kurumsal Web Sitesi</td>
                        <td style="font-weight: 700;">₺38.000,00</td>
                        <td>2026-07-27</td>
                        <td><span class="badge-status bg-light-success">Onaylandı</span></td>
                        <td style="text-align: right;">
                            <div class="table-actions">
                                <button class="btn-action-sm btn-primary-custom" onclick="viewQuote('#TEK-2026-010')"><i
                                        class="fa-solid fa-eye"></i></button>
                                <button class="btn-action-sm" style="background-color: #f3e8ff; color: #6b21a8;"
                                    onclick="editQuote('#TEK-2026-010')"><i class="fa-solid fa-pen"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#TEK-2026-011</td>
                        <td><strong>Hakan Şen</strong></td>
                        <td>Mobil Uygulama Geliştirme</td>
                        <td style="font-weight: 700;">₺55.000,00</td>
                        <td>2026-07-28</td>
                        <td><span class="badge-status bg-light-info">Onay Bekliyor</span></td>
                        <td style="text-align: right;">
                            <div class="table-actions">
                                <button class="btn-action-sm btn-primary-custom" onclick="viewQuote('#TEK-2026-011')"><i
                                        class="fa-solid fa-eye"></i></button>
                                <button class="btn-action-sm" style="background-color: #dcfce7; color: #166534;"
                                    onclick="approveQuote('#TEK-2026-011')"><i class="fa-solid fa-check"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#TEK-2026-012</td>
                        <td><strong>Pınar Erkin</strong></td>
                        <td>Dijital Pazarlama Paketi</td>
                        <td style="font-weight: 700;">₺30.000,00</td>
                        <td>2026-07-29</td>
                        <td><span class="badge-status bg-light-success">Onaylandı</span></td>
                        <td style="text-align: right;">
                            <div class="table-actions">
                                <button class="btn-action-sm btn-primary-custom" onclick="viewQuote('#TEK-2026-012')"><i
                                        class="fa-solid fa-eye"></i></button>
                                <button class="btn-action-sm" style="background-color: #f3e8ff; color: #6b21a8;"
                                    onclick="editQuote('#TEK-2026-012')"><i class="fa-solid fa-pen"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#TEK-2026-013</td>
                        <td><strong>Emre Doğan</strong></td>
                        <td>Sosyal Medya Yönetimi</td>
                        <td style="font-weight: 700;">₺10.500,00</td>
                        <td>2026-07-30</td>
                        <td><span class="badge-status bg-light-info">Onay Bekliyor</span></td>
                        <td style="text-align: right;">
                            <div class="table-actions">
                                <button class="btn-action-sm btn-primary-custom" onclick="viewQuote('#TEK-2026-013')"><i
                                        class="fa-solid fa-eye"></i></button>
                                <button class="btn-action-sm" style="background-color: #dcfce7; color: #166534;"
                                    onclick="approveQuote('#TEK-2026-013')"><i class="fa-solid fa-check"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#TEK-2026-014</td>
                        <td><strong>Ceren İnan</strong></td>
                        <td>E-Ticaret Kurulumu</td>
                        <td style="font-weight: 700;">₺42.000,00</td>
                        <td>2026-08-01</td>
                        <td><span class="badge-status bg-light-success">Onaylandı</span></td>
                        <td style="text-align: right;">
                            <div class="table-actions">
                                <button class="btn-action-sm btn-primary-custom" onclick="viewQuote('#TEK-2026-014')"><i
                                        class="fa-solid fa-eye"></i></button>
                                <button class="btn-action-sm" style="background-color: #f3e8ff; color: #6b21a8;"
                                    onclick="editQuote('#TEK-2026-014')"><i class="fa-solid fa-pen"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>#TEK-2026-015</td>
                        <td><strong>Kerem Yıldız</strong></td>
                        <td>SEO Optimizasyonu</td>
                        <td style="font-weight: 700;">₺14.500,00</td>
                        <td>2026-08-02</td>
                        <td><span class="badge-status bg-light-info">Onay Bekliyor</span></td>
                        <td style="text-align: right;">
                            <div class="table-actions">
                                <button class="btn-action-sm btn-primary-custom" onclick="viewQuote('#TEK-2026-015')"><i
                                        class="fa-solid fa-eye"></i></button>
                                <button class="btn-action-sm" style="background-color: #dcfce7; color: #166534;"
                                    onclick="approveQuote('#TEK-2026-015')"><i class="fa-solid fa-check"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="pagination-custom">
                <a href="#" class="page-item" onclick="changePage(-1)"><i class="fa-solid fa-chevron-left"></i></a>
                <span style="padding: 0.375rem 0.625rem; color: var(--text-muted); font-size: 0.875rem;">1-15 /
                    48</span>
                <a href="#" class="page-item" onclick="changePage(1)"><i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </div>

        <!-- Modal for Quote Details -->
        <div class="modal fade" id="quoteModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border: 1px solid var(--border-light); border-radius: 8px;">
                    <div class="modal-header"
                        style="background-color: #f9fafb; border-bottom: 1px solid var(--border-light); padding: 1rem 1.25rem;">
                        <h5 class="modal-title" id="quoteModalTitle">Teklif Detayları</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body" style="padding: 1.25rem;">
                        <!-- Modal content will be populated dynamically -->
                    </div>
                    <div class="modal-footer"
                        style="border-top: 1px solid var(--border-light); padding: 1rem 1.25rem; justify-content: space-between;">
                        <span id="quoteModalStatus"></span>
                        <div>
                            <button type="button" class="btn-primary-custom me-2" data-bs-dismiss="modal">Kapat</button>
                            <button type="button" class="btn-primary-custom" onclick="exportQuotePDF()">PDF
                                İndir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@include('layouts.footer')
