@include("layouts.nav")

<div class="main-content">
    <!-- Topbar -->
    <div class="bento-card col-span-full" style="display: flex; justify-content: space-between; align-items: center; margin-block-end: 2rem;">
        <div>
            <h1 class="text-gradient" style="font-size: 1.8rem; font-weight: 800; letter-spacing: -.03em; margin: 0;">Kontrol Paneli 👋</h1>
            <p style="color: var(--text-secondary); font-size: .95rem; margin: .2rem 0 0;">Performans metrikleri, teklifler ve güncel görevleriniz.</p>
        </div>
        <div style="display: flex; gap: .75rem;">
            <button class="btn-secondary" style="position: relative;">
                <i class="fa-regular fa-bell"></i>
                <span style="width: 9px; height: 9px; background: var(--accent-danger); border-radius: 50%; position: absolute; top: 8px; right: 8px; box-shadow: 0 0 0 2px var(--bg-surface);"></span>
            </button>
            <a href="{{ route('proje.index') }}" class="btn-premium" style="text-decoration:none;">
                <i class="fa-solid fa-plus"></i> Yeni Proje
            </a>
        </div>
    </div>

    <!-- KPI Cards -->
    <div class="bento-grid">
        <div class="bento-card col-span-3">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-block-end: 1rem;">
                <div>
                    <div style="font-size: .8rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); margin-block-end: .3rem;">Onaylanan Teklifler</div>
                    <div style="font-size: 2rem; font-weight: 800; color: var(--text-primary); line-height: 1.1; letter-spacing: -.02em;">₺124.500</div>
                </div>
                <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, oklch(0.65 0.15 260), var(--accent-primary)); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; box-shadow: var(--shadow-sm);">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                </div>
            </div>
            <span class="badge-glass" style="background: rgba(34, 197, 94, 0.1); color: #15803d; border-color: rgba(34, 197, 94, 0.2);">
                <i class="fa-solid fa-arrow-trend-up"></i> %8 artış
            </span>
        </div>

        <div class="bento-card col-span-3">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-block-end: 1rem;">
                <div>
                    <div style="font-size: .8rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); margin-block-end: .3rem;">Bekleyen Ödemeler</div>
                    <div style="font-size: 2rem; font-weight: 800; color: var(--text-primary); line-height: 1.1; letter-spacing: -.02em;">₺18.200</div>
                </div>
                <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, #fbbf24, #d97706); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; box-shadow: var(--shadow-sm);">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                </div>
            </div>
            <span class="badge-glass" style="background: rgba(234, 179, 8, 0.1); color: #b45309; border-color: rgba(234, 179, 8, 0.2);">
                <i class="fa-solid fa-receipt"></i> 3 Fatura
            </span>
        </div>

        <div class="bento-card col-span-3">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-block-end: 1rem;">
                <div>
                    <div style="font-size: .8rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); margin-block-end: .3rem;">Devam Eden İşler</div>
                    <div style="font-size: 2rem; font-weight: 800; color: var(--text-primary); line-height: 1.1; letter-spacing: -.02em;">4</div>
                </div>
                <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, #4ade80, #16a34a); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; box-shadow: var(--shadow-sm);">
                    <i class="fa-solid fa-spinner"></i>
                </div>
            </div>
            <span class="badge-glass">
                <i class="fa-solid fa-triangle-exclamation"></i> 1 Gecikmeli
            </span>
        </div>

        <div class="bento-card col-span-3">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-block-end: 1rem;">
                <div>
                    <div style="font-size: .8rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); margin-block-end: .3rem;">Başarı Oranı</div>
                    <div style="font-size: 2rem; font-weight: 800; color: var(--text-primary); line-height: 1.1; letter-spacing: -.02em;">%72</div>
                </div>
                <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, #c084fc, #9333ea); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; box-shadow: var(--shadow-sm);">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
            </div>
            <span class="badge-glass" style="background: var(--bg-surface-hover); color: var(--text-secondary); border-color: var(--border-subtle);">
                <i class="fa-regular fa-calendar"></i> Son 30 gün
            </span>
        </div>
    </div>

    <!-- Content Grid -->
    <div class="bento-grid">
        <!-- LEFT: Recent Quotes + Progress -->
        <div class="col-span-8" style="display:flex;flex-direction:column;gap:1.25rem;">
            <!-- Recent Quotes Table -->
            <div class="bento-card">
                <div style="font-size: 1.1rem; font-weight: 800; color: var(--text-primary); margin-block-end: 1.5rem; display: flex; align-items: center; gap: .75rem;">
                    <div style="width: 36px; height: 36px; border-radius: 10px; background: rgba(37,99,235,0.1); color: var(--accent-primary); display: flex; align-items: center; justify-content: center; font-size: 1rem;">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>
                    Son Teklifler & Durumları
                    <a href="{{ url('/teklifler') }}" style="color: var(--accent-primary); font-size: .85rem; font-weight: 700; margin-inline-start: auto;">Tümünü Gör &rarr;</a>
                </div>
                <div class="table-responsive">
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th style="font-size: .75rem; font-weight: 700; text-transform: uppercase; letter-spacing: .05em; color: var(--text-secondary); padding: .75rem 1rem; border-bottom: 2px solid var(--border-subtle); text-align: left;">Müşteri</th>
                                <th style="font-size: .75rem; font-weight: 700; text-transform: uppercase; letter-spacing: .05em; color: var(--text-secondary); padding: .75rem 1rem; border-bottom: 2px solid var(--border-subtle); text-align: left;">Kategori</th>
                                <th style="font-size: .75rem; font-weight: 700; text-transform: uppercase; letter-spacing: .05em; color: var(--text-secondary); padding: .75rem 1rem; border-bottom: 2px solid var(--border-subtle); text-align: left;">Tutar</th>
                                <th style="font-size: .75rem; font-weight: 700; text-transform: uppercase; letter-spacing: .05em; color: var(--text-secondary); padding: .75rem 1rem; border-bottom: 2px solid var(--border-subtle); text-align: left;">Tarih</th>
                                <th style="font-size: .75rem; font-weight: 700; text-transform: uppercase; letter-spacing: .05em; color: var(--text-secondary); padding: .75rem 1rem; border-bottom: 2px solid var(--border-subtle); text-align: left;">Durum</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid var(--border-subtle); transition: background 0.2s;">
                                <td style="padding: 1rem;"><div style="font-weight: 700; color: var(--text-primary);">Global Lojistik A.Ş.</div></td>
                                <td style="padding: 1rem; color: var(--text-secondary); font-size: .9rem;">B2B Portal</td>
                                <td style="padding: 1rem; font-weight: 800; color: var(--text-primary);">₺65.000</td>
                                <td style="padding: 1rem; color: var(--text-secondary); font-size: .87rem;">12 Ağu 2026</td>
                                <td style="padding: 1rem;"><span class="badge-glass" style="background: rgba(234,179,8,0.1); color: #b45309; border-color: rgba(234,179,8,0.2);">Beklemede</span></td>
                            </tr>
                            <tr style="border-bottom: 1px solid var(--border-subtle); transition: background 0.2s;">
                                <td style="padding: 1rem;"><div style="font-weight: 700; color: var(--text-primary);">TechNova Mimarlık</div></td>
                                <td style="padding: 1rem; color: var(--text-secondary); font-size: .9rem;">Kurumsal Web</td>
                                <td style="padding: 1rem; font-weight: 800; color: var(--text-primary);">₺32.000</td>
                                <td style="padding: 1rem; color: var(--text-secondary); font-size: .87rem;">10 Ağu 2026</td>
                                <td style="padding: 1rem;"><span class="badge-glass" style="background: rgba(34,197,94,0.1); color: #15803d; border-color: rgba(34,197,94,0.2);">Kazanıldı</span></td>
                            </tr>
                            <tr>
                                <td style="padding: 1rem;"><div style="font-weight: 700; color: var(--text-primary);">Zeta E-Ticaret</div></td>
                                <td style="padding: 1rem; color: var(--text-secondary); font-size: .9rem;">API Entegrasyonu</td>
                                <td style="padding: 1rem; font-weight: 800; color: var(--text-primary);">₺14.500</td>
                                <td style="padding: 1rem; color: var(--text-secondary); font-size: .87rem;">05 Ağu 2026</td>
                                <td style="padding: 1rem;"><span class="badge-glass">İncelemede</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Project Progress -->
            <div class="bento-card">
                <div style="font-size: 1.1rem; font-weight: 800; color: var(--text-primary); margin-block-end: 1.5rem; display: flex; align-items: center; gap: .75rem;">
                    <div style="width: 36px; height: 36px; border-radius: 10px; background: rgba(124, 58, 237, 0.1); color: #7c3aed; display: flex; align-items: center; justify-content: center; font-size: 1rem;">
                        <i class="fa-solid fa-bars-progress"></i>
                    </div>
                    Proje Tamamlanma Oranları
                </div>

                <div style="margin-block-end: 1.25rem;">
                    <div style="display: flex; justify-content: space-between; margin-block-end: .4rem;">
                        <span style="font-size: .85rem; font-weight: 600; color: var(--text-secondary);">E-Ticaret Platformu</span>
                        <strong style="font-size: .85rem; font-weight: 800; color: var(--text-primary);">68%</strong>
                    </div>
                    <div style="height: 8px; background: var(--bg-surface-hover); border-radius: 999px; overflow: hidden; border: 1px solid var(--border-subtle);">
                        <div style="height: 100%; width: 68%; background: linear-gradient(90deg, oklch(0.65 0.15 260), var(--accent-primary)); border-radius: 999px;"></div>
                    </div>
                </div>

                <div style="margin-block-end: 1.25rem;">
                    <div style="display: flex; justify-content: space-between; margin-block-end: .4rem;">
                        <span style="font-size: .85rem; font-weight: 600; color: var(--text-secondary);">Mobil Uygulama Tasarımı</span>
                        <strong style="font-size: .85rem; font-weight: 800; color: var(--text-primary);">42%</strong>
                    </div>
                    <div style="height: 8px; background: var(--bg-surface-hover); border-radius: 999px; overflow: hidden; border: 1px solid var(--border-subtle);">
                        <div style="height: 100%; width: 42%; background: linear-gradient(90deg, #c084fc, #9333ea); border-radius: 999px;"></div>
                    </div>
                </div>

                <div style="margin-block-end: 1.25rem;">
                    <div style="display: flex; justify-content: space-between; margin-block-end: .4rem;">
                        <span style="font-size: .85rem; font-weight: 600; color: var(--text-secondary);">Kurumsal Web Sitesi</span>
                        <strong style="font-size: .85rem; font-weight: 800; color: var(--text-primary);">100%</strong>
                    </div>
                    <div style="height: 8px; background: var(--bg-surface-hover); border-radius: 999px; overflow: hidden; border: 1px solid var(--border-subtle);">
                        <div style="height: 100%; width: 100%; background: linear-gradient(90deg, #4ade80, #16a34a); border-radius: 999px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT: Tasks -->
        <div class="col-span-4">
            <div class="bento-card" style="position:sticky; top: 20px;">
                <div style="font-size: 1.1rem; font-weight: 800; color: var(--text-primary); margin-block-end: 1.5rem; display: flex; align-items: center; gap: .75rem;">
                    <div style="width: 36px; height: 36px; border-radius: 10px; background: rgba(217, 119, 6, 0.1); color: #d97706; display: flex; align-items: center; justify-content: center; font-size: 1rem;">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                    Yaklaşan Görevler
                    <span style="margin-inline-start: auto; background: var(--bg-base); border: 1px solid var(--border-subtle); color: var(--text-primary); font-size: .75rem; font-weight: 700; padding: .25em .75em; border-radius: 999px;">3</span>
                </div>

                <div class="task-group" style="margin-block-end: 0;">
                    <label class="task-card">
                        <input type="checkbox" class="custom-checkbox">
                        <div class="task-content">
                            <div class="task-title">Global Lojistik toplantısı</div>
                            <div class="task-desc"><i class="fa-regular fa-clock me-1"></i>Yarın, 14:00 — Google Meet</div>
                        </div>
                    </label>

                    <label class="task-card">
                        <input type="checkbox" class="custom-checkbox">
                        <div class="task-content">
                            <div class="task-title">TechNova sözleşme iletimi</div>
                            <div class="task-desc"><i class="fa-regular fa-envelope me-1"></i>Bugün, 17:00'ye kadar</div>
                        </div>
                    </label>

                    <label class="task-card">
                        <input type="checkbox" class="custom-checkbox" checked>
                        <div class="task-content">
                            <div class="task-title">Aylık gelir/gider raporu</div>
                            <div class="task-desc"><i class="fa-regular fa-file-alt me-1"></i>Muhasebeciye evrakları ilet</div>
                        </div>
                    </label>
                </div>

                <div style="margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid var(--border-subtle); text-align: center;">
                    <a href="#" style="color: var(--accent-primary); font-size: .85rem; font-weight: 700;">Tüm Görevleri Gör &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
