@include('layouts.nav')

<div class="main-content">

    <!-- Page Header -->
    <div class="bento-card col-span-full" style="display: flex; justify-content: space-between; align-items: center; margin-block-end: 2rem;">
        <div>
            <h1 class="text-gradient" style="font-size: 1.8rem; font-weight: 800; letter-spacing: -.03em; margin: 0;">Finansal Raporlar</h1>
            <p style="color: var(--text-secondary); font-size: .95rem; margin: .2rem 0 0;">Gelir, gider ve transfer hareketlerinizi görüntüleyin ve analiz edin.</p>
        </div>
        <div style="display: flex; gap: .75rem;">
            <button class="btn-secondary" data-bs-toggle="modal" data-bs-target="#addTransactionModal"><i class="fa-solid fa-plus"></i> Yeni İşlem Ekle</button>
            <button class="btn-premium"><i class="fa-solid fa-download"></i> Rapor İndir</button>
        </div>
    </div>

    <!-- Summary Cards -->
    <div class="bento-grid">
        <div class="bento-card col-span-3">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-block-end: 1rem;">
                <div>
                    <div style="font-size: .8rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); margin-block-end: .3rem;">Toplam Gelir</div>
                    <div style="font-size: 2rem; font-weight: 800; color: var(--text-primary); line-height: 1.1; letter-spacing: -.02em;">₺{{ number_format($toplamGelir ?? 0, 2, ',', '.') }}</div>
                </div>
                <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, #4ade80, #16a34a); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; box-shadow: var(--shadow-sm);">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                </div>
            </div>
        </div>

        <div class="bento-card col-span-3">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-block-end: 1rem;">
                <div>
                    <div style="font-size: .8rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); margin-block-end: .3rem;">Toplam Gider</div>
                    <div style="font-size: 2rem; font-weight: 800; color: var(--text-primary); line-height: 1.1; letter-spacing: -.02em;">₺{{ number_format($toplamGider ?? 0, 2, ',', '.') }}</div>
                </div>
                <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, var(--accent-danger), #9f1239); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; box-shadow: var(--shadow-sm);">
                    <i class="fa-solid fa-arrow-trend-down"></i>
                </div>
            </div>
        </div>

        <div class="bento-card col-span-3">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-block-end: 1rem;">
                <div>
                    <div style="font-size: .8rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); margin-block-end: .3rem;">Net Kazanç</div>
                    <div style="font-size: 2rem; font-weight: 800; color: var(--text-primary); line-height: 1.1; letter-spacing: -.02em;">₺{{ number_format($netKazanc ?? 0, 2, ',', '.') }}</div>
                </div>
                <div style="width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, oklch(0.65 0.15 260), var(--accent-primary)); color: white; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; box-shadow: var(--shadow-sm);">
                    <i class="fa-solid fa-wallet"></i>
                </div>
            </div>
        </div>

        <div class="bento-card col-span-3">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-block-end: 1rem;">
                <div>
                    <div style="font-size: .8rem; font-weight: 700; text-transform: uppercase; color: var(--text-secondary); margin-block-end: .3rem;">Aktif Projeler</div>
                    <div style="font-size: 2rem; font-weight: 800; color: var(--text-primary); line-height: 1.1; letter-spacing: -.02em;">₺{{ number_format($aktifProjeler ?? 0, 2, ',', '.') }}</div>
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
                            @forelse($aylikOzet ?? [] as $ozet)
                            <tr style="border-bottom: 1px solid var(--border-subtle); transition: background 0.2s;">
                                <td style="padding: 1rem; font-weight: 700; color: var(--text-primary);">{{ $ozet->ay_adi }}</td>
                                <td style="padding: 1rem; text-align: right; color: var(--text-secondary);">₺{{ number_format($ozet->gelir, 2, ',', '.') }}</td>
                                <td style="padding: 1rem; text-align: right; color: var(--text-secondary);">₺{{ number_format($ozet->gider, 2, ',', '.') }}</td>
                                <td style="padding: 1rem; text-align: right; font-weight: 800; color: {{ $ozet->net >= 0 ? '#15803d' : '#b91c1c' }};">₺{{ number_format($ozet->net, 2, ',', '.') }}</td>
                                <td style="padding: 1rem; text-align: center; font-weight: 700; color: var(--text-primary);">{{ $ozet->toplam_islem }}</td>
                                <td style="padding: 1rem; text-align: center;">
                                    @if($ozet->net >= 0)
                                        <span class="badge-glass" style="background: rgba(34, 197, 94, 0.1); color: #15803d;">Pozitif</span>
                                    @else
                                        <span class="badge-glass" style="background: rgba(239, 68, 68, 0.1); color: #b91c1c;">Negatif</span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="6" class="text-center p-3 text-muted">Aylık veri bulunamadı.</td></tr>
                            @endforelse
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
                    
                    @forelse($islemler ?? [] as $islem)
                    <div style="display: flex; align-items: center; gap: 1rem; padding: 1rem; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); transition: all 0.2s;" onmouseover="this.style.background='var(--bg-surface-hover)'" onmouseout="this.style.background=''">
                        @if($islem->tip == 'gelir')
                        <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(34, 197, 94, 0.1); color: #15803d; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;">
                            <i class="fa-solid fa-arrow-down"></i>
                        </div>
                        @elseif($islem->tip == 'gider')
                        <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(239, 68, 68, 0.1); color: #b91c1c; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;">
                            <i class="fa-solid fa-arrow-up"></i>
                        </div>
                        @else
                        <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(139, 92, 246, 0.1); color: #6d28d9; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;">
                            <i class="fa-solid fa-arrow-right-arrow-left"></i>
                        </div>
                        @endif

                        <div style="flex: 1; min-width: 0;">
                            <div style="font-weight: 700; color: var(--text-primary); font-size: 0.95rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $islem->baslik }}</div>
                            <div style="font-size: 0.8rem; color: var(--text-secondary);">{{ \Carbon\Carbon::parse($islem->tarih)->format('d M Y') }} • {{ $islem->kategori ?? 'Genel' }}</div>
                        </div>
                        
                        @if($islem->tip == 'gelir')
                        <div style="font-weight: 800; color: #15803d; font-size: 1rem;">+₺{{ number_format($islem->tutar, 2, ',', '.') }}</div>
                        @elseif($islem->tip == 'gider')
                        <div style="font-weight: 800; color: #b91c1c; font-size: 1rem;">-₺{{ number_format($islem->tutar, 2, ',', '.') }}</div>
                        @else
                        <div style="font-weight: 800; color: var(--text-primary); font-size: 1rem;">₺{{ number_format($islem->tutar, 2, ',', '.') }}</div>
                        @endif
                    </div>
                    @empty
                    <p class="text-muted text-center p-3">Henüz işlem bulunmuyor.</p>
                    @endforelse

                </div>

                <div style="margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid var(--border-subtle); text-align: center;">
                    <a href="#" style="color: var(--accent-primary); font-size: .85rem; font-weight: 700;">Tüm İşlemleri Gör &rarr;</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Add Transaction Modal -->
<div class="modal fade" id="addTransactionModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
            <div class="modal-header" style="background: linear-gradient(135deg, #f8fafc, #ffffff); border-bottom: 1px solid #e2e8f0; padding: 1.5rem;">
                <h5 class="modal-title" style="font-weight: 800; color: #0f172a;"><i class="fa-solid fa-plus me-2" style="color: #3b82f6;"></i>Yeni İşlem Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" style="padding: 1.5rem;">
                <form id="addTransactionForm" action="{{ route('finans.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" style="font-weight: 600; color: #475569;">İşlem Tipi</label>
                        <select name="tip" class="form-select" style="border-radius: 10px; background: #f8fafc;" required>
                            <option value="gelir">Gelir (+)</option>
                            <option value="gider">Gider (-)</option>
                            <option value="transfer">Transfer</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight: 600; color: #475569;">Başlık</label>
                        <input type="text" name="baslik" class="form-control" style="border-radius: 10px; background: #f8fafc;" placeholder="Örn: Proje Ödemesi, Ofis Gideri vb." required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label" style="font-weight: 600; color: #475569;">Tutar (₺)</label>
                            <input type="number" step="0.01" name="tutar" class="form-control" style="border-radius: 10px; background: #f8fafc;" placeholder="0,00" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" style="font-weight: 600; color: #475569;">Tarih</label>
                            <input type="date" name="tarih" class="form-control" style="border-radius: 10px; background: #f8fafc;" value="{{ date('Y-m-d') }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight: 600; color: #475569;">Kategori (Opsiyonel)</label>
                        <input type="text" name="kategori" class="form-control" style="border-radius: 10px; background: #f8fafc;" placeholder="Maaş, Vergi, Lisans, vb.">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight: 600; color: #475569;">Açıklama</label>
                        <textarea name="aciklama" class="form-control" rows="2" style="border-radius: 10px; background: #f8fafc;" placeholder="İşlem ile ilgili notlarınız..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="border-top: 1px solid #f1f5f9; padding: 1.25rem;">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal" style="border-radius: 10px; font-weight: 600;">İptal</button>
                <button type="submit" form="addTransactionForm" class="btn btn-primary" style="background: linear-gradient(135deg, #3b82f6, #2563eb); border: none; border-radius: 10px; font-weight: 600; padding: 0.5rem 1.5rem;">Kaydet</button>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
