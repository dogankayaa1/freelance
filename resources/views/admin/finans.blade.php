@include('layouts.nav')

<div class="main-content">

    <!-- Page Header -->
    <div class="bento-card col-span-full" style="display: flex; justify-content: space-between; align-items: center; margin-block-end: 2rem;">
        <div>
            <h1 class="text-gradient" style="font-size: 1.8rem; font-weight: 800; letter-spacing: -.03em; margin: 0;">Finansal Raporlar</h1>
            <p style="color: var(--text-secondary); font-size: .95rem; margin: .2rem 0 0;">Gelir, gider ve transfer hareketlerinizi görüntüleyin ve analiz edin.</p>
        </div>
        <div style="display: flex; gap: .75rem;">
            <button class="btn-secondary"><i class="fa-solid fa-filter"></i> Filtrele</button>
            <button class="btn-premium"><i class="fa-solid fa-download"></i> Rapor İndir</button>
        </div>
    </div>

    <!-- Summary Cards -->
    <div class="bento-grid">
        <div class="bento-card col-span-3">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-block-end: 1rem;">
                <div>
                    <div style="font-size: .8rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); margin-block-end: .3rem;">Toplam Gelir</div>
                    <div style="font-size: 2rem; font-weight: 800; color: var(--text-primary); line-height: 1.1; letter-spacing: -.02em;">₺125,450</div>
                </div>
                <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, #4ade80, #16a34a); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; box-shadow: var(--shadow-sm);">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                </div>
            </div>
            <span class="badge-glass" style="background: rgba(34, 197, 94, 0.1); color: #15803d; border-color: rgba(34, 197, 94, 0.2);">
                +12.5% geçen aya göre
            </span>
        </div>

        <div class="bento-card col-span-3">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-block-end: 1rem;">
                <div>
                    <div style="font-size: .8rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); margin-block-end: .3rem;">Toplam Gider</div>
                    <div style="font-size: 2rem; font-weight: 800; color: var(--text-primary); line-height: 1.1; letter-spacing: -.02em;">₺84,320</div>
                </div>
                <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, var(--accent-danger), #9f1239); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; box-shadow: var(--shadow-sm);">
                    <i class="fa-solid fa-arrow-trend-down"></i>
                </div>
            </div>
            <span class="badge-glass" style="background: rgba(225, 29, 72, 0.1); color: #be123c; border-color: rgba(225, 29, 72, 0.2);">
                -5.2% geçen aya göre
            </span>
        </div>

        <div class="bento-card col-span-3">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-block-end: 1rem;">
                <div>
                    <div style="font-size: .8rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); margin-block-end: .3rem;">Net Kazanç</div>
                    <div style="font-size: 2rem; font-weight: 800; color: var(--text-primary); line-height: 1.1; letter-spacing: -.02em;">₺41,130</div>
                </div>
                <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, oklch(0.65 0.15 260), var(--accent-primary)); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; box-shadow: var(--shadow-sm);">
                    <i class="fa-solid fa-wallet"></i>
                </div>
            </div>
            <span class="badge-glass" style="background: rgba(34, 197, 94, 0.1); color: #15803d; border-color: rgba(34, 197, 94, 0.2);">
                +17.8% geçen aya göre
            </span>
        </div>

        <div class="bento-card col-span-3">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-block-end: 1rem;">
                <div>
                    <div style="font-size: .8rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); margin-block-end: .3rem;">Aktif Projeler</div>
                    <div style="font-size: 2rem; font-weight: 800; color: var(--text-primary); line-height: 1.1; letter-spacing: -.02em;">₺32,500</div>
                </div>
                <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, #fbbf24, #d97706); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; box-shadow: var(--shadow-sm);">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
            </div>
            <span class="badge-glass" style="background: var(--bg-surface-hover); color: var(--text-secondary); border-color: var(--border-subtle);">
                Devam eden işler
            </span>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="bento-grid">
        
        <!-- LEFT: Chart and Monthly Table -->
        <div class="col-span-8" style="display:flex; flex-direction:column; gap: 1.25rem;">
            
            <!-- Chart Container -->
            <div class="bento-card">
                <div style="font-size: 1.1rem; font-weight: 800; color: var(--text-primary); margin-block-end: 1.5rem; display: flex; align-items: center; gap: .75rem;">
                    <div style="width: 36px; height: 36px; border-radius: 10px; background: rgba(37,99,235,0.1); color: var(--accent-primary); display: flex; align-items: center; justify-content: center; font-size: 1rem;">
                        <i class="fa-solid fa-chart-area"></i>
                    </div>
                    Gelir ve Gider Grafiği
                </div>
                <div style="height: 320px; display: flex; align-items: center; justify-content: center; color: var(--text-tertiary); background-color: var(--bg-surface-hover); border: 1px dashed var(--border-strong); border-radius: var(--radius-md);">
                    <div style="text-align: center;">
                        <i class="fa-solid fa-chart-line" style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.5;"></i>
                        <p style="margin: 0; font-weight: 600;">Grafik Alanı (Chart.js veya benzeri kütüphane ile)</p>
                    </div>
                </div>
            </div>

            <!-- Monthly Overview -->
            <div class="bento-card">
                <div style="font-size: 1.1rem; font-weight: 800; color: var(--text-primary); margin-block-end: 1.5rem; display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: .75rem;">
                        <div style="width: 36px; height: 36px; border-radius: 10px; background: rgba(16, 185, 129, 0.1); color: #10b981; display: flex; align-items: center; justify-content: center; font-size: 1rem;">
                            <i class="fa-regular fa-calendar-days"></i>
                        </div>
                        Aylar Özeti
                    </div>
                    <button class="btn-secondary" style="font-size: 0.8rem; padding: 0.4rem 0.8rem;"><i class="fa-solid fa-download"></i> Excel</button>
                </div>

                <div class="table-responsive">
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th style="font-size: .75rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); padding: .75rem 1rem; border-bottom: 2px solid var(--border-subtle); text-align: left;">Ay</th>
                                <th style="font-size: .75rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); padding: .75rem 1rem; border-bottom: 2px solid var(--border-subtle); text-align: right;">Gelir</th>
                                <th style="font-size: .75rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); padding: .75rem 1rem; border-bottom: 2px solid var(--border-subtle); text-align: right;">Gider</th>
                                <th style="font-size: .75rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); padding: .75rem 1rem; border-bottom: 2px solid var(--border-subtle); text-align: right;">Net Kazanç</th>
                                <th style="font-size: .75rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); padding: .75rem 1rem; border-bottom: 2px solid var(--border-subtle); text-align: center;">Toplam İşlem</th>
                                <th style="font-size: .75rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); padding: .75rem 1rem; border-bottom: 2px solid var(--border-subtle); text-align: center;">Durum</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid var(--border-subtle); transition: background 0.2s;">
                                <td style="padding: 1rem; font-weight: 700; color: var(--text-primary);">Ağustos 2026</td>
                                <td style="padding: 1rem; text-align: right; color: var(--text-secondary);">₺125,450.00</td>
                                <td style="padding: 1rem; text-align: right; color: var(--text-secondary);">₺84,320.00</td>
                                <td style="padding: 1rem; text-align: right; font-weight: 800; color: #15803d;">₺41,130.00</td>
                                <td style="padding: 1rem; text-align: center; font-weight: 700; color: var(--text-primary);">142</td>
                                <td style="padding: 1rem; text-align: center;"><span class="badge-glass" style="background: rgba(34, 197, 94, 0.1); color: #15803d;">Başarılı</span></td>
                            </tr>
                            <tr style="border-bottom: 1px solid var(--border-subtle); transition: background 0.2s;">
                                <td style="padding: 1rem; font-weight: 700; color: var(--text-primary);">Temmuz 2026</td>
                                <td style="padding: 1rem; text-align: right; color: var(--text-secondary);">₺107,200.00</td>
                                <td style="padding: 1rem; text-align: right; color: var(--text-secondary);">₺89,140.00</td>
                                <td style="padding: 1rem; text-align: right; font-weight: 800; color: #15803d;">₺18,060.00</td>
                                <td style="padding: 1rem; text-align: center; font-weight: 700; color: var(--text-primary);">128</td>
                                <td style="padding: 1rem; text-align: center;"><span class="badge-glass" style="background: rgba(34, 197, 94, 0.1); color: #15803d;">Başarılı</span></td>
                            </tr>
                            <tr>
                                <td style="padding: 1rem; font-weight: 700; color: var(--text-primary);">Haziran 2026</td>
                                <td style="padding: 1rem; text-align: right; color: var(--text-secondary);">₺98,750.00</td>
                                <td style="padding: 1rem; text-align: right; color: var(--text-secondary);">₺84,320.00</td>
                                <td style="padding: 1rem; text-align: right; font-weight: 800; color: #15803d;">₺14,430.00</td>
                                <td style="padding: 1rem; text-align: center; font-weight: 700; color: var(--text-primary);">115</td>
                                <td style="padding: 1rem; text-align: center;"><span class="badge-glass" style="background: rgba(34, 197, 94, 0.1); color: #15803d;">Başarılı</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- RIGHT: Transaction List -->
        <div class="col-span-4">
            <div class="bento-card" style="position: sticky; top: 20px;">
                <div style="font-size: 1.1rem; font-weight: 800; color: var(--text-primary); margin-block-end: 1.5rem; display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: .75rem;">
                        <div style="width: 36px; height: 36px; border-radius: 10px; background: rgba(139, 92, 246, 0.1); color: #8b5cf6; display: flex; align-items: center; justify-content: center; font-size: 1rem;">
                            <i class="fa-solid fa-list-ul"></i>
                        </div>
                        Son İşlemler
                    </div>
                </div>

                <div class="tabs-container" style="margin-block-end: 1rem; border-bottom: none; padding: 0;">
                    <button class="tab-btn active" style="padding: 0.4rem 0.8rem; background: var(--bg-surface-hover); border-radius: var(--radius-sm); border: 1px solid var(--border-subtle);">Tümü</button>
                    <button class="tab-btn" style="padding: 0.4rem 0.8rem;"><i class="fa-solid fa-arrow-down" style="color: #10b981;"></i> Gelir</button>
                    <button class="tab-btn" style="padding: 0.4rem 0.8rem;"><i class="fa-solid fa-arrow-up" style="color: #ef4444;"></i> Gider</button>
                </div>

                <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                    
                    <!-- Item -->
                    <div style="display: flex; align-items: center; gap: 1rem; padding: 1rem; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); transition: all 0.2s;" onmouseover="this.style.background='var(--bg-surface-hover)'" onmouseout="this.style.background=''">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(34, 197, 94, 0.1); color: #15803d; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;">
                            <i class="fa-brands fa-cc-visa"></i>
                        </div>
                        <div style="flex: 1; min-width: 0;">
                            <div style="font-weight: 700; color: var(--text-primary); font-size: 0.95rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Proje Ödemesi - XYZ Corp</div>
                            <div style="font-size: 0.8rem; color: var(--text-secondary);">2 Ağu 2026 • Web Geliştirme</div>
                        </div>
                        <div style="font-weight: 800; color: #15803d; font-size: 1rem;">+₺15,000</div>
                    </div>

                    <!-- Item -->
                    <div style="display: flex; align-items: center; gap: 1rem; padding: 1rem; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); transition: all 0.2s;" onmouseover="this.style.background='var(--bg-surface-hover)'" onmouseout="this.style.background=''">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(239, 68, 68, 0.1); color: #b91c1c; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                        <div style="flex: 1; min-width: 0;">
                            <div style="font-weight: 700; color: var(--text-primary); font-size: 0.95rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Teknik Danışmanlık</div>
                            <div style="font-size: 0.8rem; color: var(--text-secondary);">1 Ağu 2026 • ABC Ltd</div>
                        </div>
                        <div style="font-weight: 800; color: #b91c1c; font-size: 1rem;">-₺3,500</div>
                    </div>
                    
                    <!-- Item -->
                    <div style="display: flex; align-items: center; gap: 1rem; padding: 1rem; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); transition: all 0.2s;" onmouseover="this.style.background='var(--bg-surface-hover)'" onmouseout="this.style.background=''">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(139, 92, 246, 0.1); color: #6d28d9; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;">
                            <i class="fa-solid fa-arrow-right-arrow-left"></i>
                        </div>
                        <div style="flex: 1; min-width: 0;">
                            <div style="font-weight: 700; color: var(--text-primary); font-size: 0.95rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Banka Hesabı Transferi</div>
                            <div style="font-size: 0.8rem; color: var(--text-secondary);">31 Tem 2026 • İç Transfer</div>
                        </div>
                        <div style="font-weight: 800; color: var(--text-primary); font-size: 1rem;">₺8,750</div>
                    </div>

                    <!-- Item -->
                    <div style="display: flex; align-items: center; gap: 1rem; padding: 1rem; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); transition: all 0.2s;" onmouseover="this.style.background='var(--bg-surface-hover)'" onmouseout="this.style.background=''">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(34, 197, 94, 0.1); color: #15803d; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <div style="flex: 1; min-width: 0;">
                            <div style="font-weight: 700; color: var(--text-primary); font-size: 0.95rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Freelance Proje - TechStart</div>
                            <div style="font-size: 0.8rem; color: var(--text-secondary);">30 Tem 2026 • Uygulama</div>
                        </div>
                        <div style="font-weight: 800; color: #15803d; font-size: 1rem;">+₺12,500</div>
                    </div>

                </div>

                <div style="margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid var(--border-subtle); text-align: center;">
                    <a href="#" style="color: var(--accent-primary); font-size: .85rem; font-weight: 700;">Tüm İşlemleri Gör &rarr;</a>
                </div>
            </div>
        </div>

    </div>
</div>

@include('layouts.footer')
