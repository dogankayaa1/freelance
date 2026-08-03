@include('layouts.nav')
<!-- PREMIUM SAAS UI REDESIGN -->
<!-- Modern UI Applied -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- SVG Gradient -->
<div class="main-content">
    <!-- Header -->
    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-block-end: 2rem;">
        <div>
            <div style="display: flex; align-items: center; gap: 1rem; margin-block-end: 0.5rem;">
                <h1 style="font-size: 2rem; font-weight: 800; letter-spacing: -0.03em;">E-Ticaret Platformu</h1>
                <span class="badge-glass">Devam Eden</span>
            </div>
            <p style="color: var(--text-secondary); margin: 0; font-size: 1rem;">Modern e-ticaret sitesi geliştirilmesi projesi</p>
        </div>
        <div style="display: flex; gap: 0.75rem;">
            <button class="btn-secondary" data-bs-toggle="modal" data-bs-target="#addFileModal"><i class="fa-solid fa-file-export"></i> Rapor</button>
            <button class="btn-premium" data-bs-toggle="modal" data-bs-target="#addTaskModal"><i class="fa-solid fa-plus"></i> Yeni Görev</button>
        </div>
    </div>

    <!-- Bento Grid -->
    <div class="bento-grid">
        <div class="bento-card col-span-4" style="display: flex; align-items: center; gap: 1.5rem;">
            <div class="progress-ring-container">
                <svg width="80" height="80"><circle class="progress-ring-circle" cx="40" cy="40" r="36"></circle><circle class="progress-ring-fill" cx="40" cy="40" r="36"></circle></svg>
                <div class="progress-ring-text">65%</div>
            </div>
            <div>
                <div style="font-size: 0.875rem; color: var(--text-secondary); font-weight: 600; margin-block-end: 0.25rem;">Genel İlerleme</div>
                <div style="font-size: 1.25rem; font-weight: 700;">İyi Gidiyor</div>
            </div>
        </div>

        <div class="bento-card col-span-4" style="display: flex; flex-direction: column; justify-content: center;">
            <div style="display: flex; justify-content: space-between; margin-block-end: 1rem;">
                <div>
                    <div style="font-size: 0.75rem; color: var(--text-secondary); font-weight: 600; text-transform: uppercase;">Bütçe</div>
                    <div class="text-gradient" style="font-size: 1.5rem; font-weight: 800;">₺150.000</div>
                </div>
                <div style="text-align: right;">
                    <div style="font-size: 0.75rem; color: var(--text-secondary); font-weight: 600; text-transform: uppercase;">Öncelik</div>
                    <div style="font-size: 1rem; font-weight: 700; color: var(--accent-danger);">Yüksek</div>
                </div>
            </div>
        </div>

        <div class="bento-card col-span-4" style="display: flex; flex-direction: column; justify-content: center;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <div style="font-size: 0.75rem; color: var(--text-secondary); font-weight: 600; text-transform: uppercase;">Müşteri</div>
                    <div style="font-weight: 600; font-size: 1rem;">ABC Şirketi</div>
                </div>
                <div style="text-align: right;">
                    <div style="font-size: 0.75rem; color: var(--text-secondary); font-weight: 600; text-transform: uppercase;">Teslim Tarihi</div>
                    <div style="font-weight: 600; font-size: 1rem;">30 Eyl 2026</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs & Tasks -->
    <div class="bento-card col-span-full">
        <div class="tabs-container">
            <button class="tab-btn active"><i class="fa-solid fa-list-check" style="margin-inline-end: 0.5rem;"></i>Görevler</button>
            <button class="tab-btn"><i class="fa-solid fa-folder" style="margin-inline-end: 0.5rem;"></i>Dosyalar</button>
            <button class="tab-btn"><i class="fa-solid fa-timeline" style="margin-inline-end: 0.5rem;"></i>Timeline</button>
            <button class="tab-btn"><i class="fa-solid fa-users" style="margin-inline-end: 0.5rem;"></i>Ekibim</button>
        </div>

        <div class="task-group">
            <div class="task-group-header">
                <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: var(--accent-primary);"></span>
                Tasarım (Design)
            </div>
            
            <label class="task-card">
                <input type="checkbox" class="custom-checkbox">
                <div class="task-content">
                    <div class="task-title">Tasarım mockuplarını hazırla</div>
                    <div class="task-desc">Figma'da tüm ekran mockuplarını hazırlayıp paylaş. Son Tarih: 15 Ağustos</div>
                </div>
                <div class="task-actions">
                    <button class="icon-btn" data-bs-toggle="modal" data-bs-target="#editTaskModal"><i class="fa-solid fa-pen"></i></button>
                    <button class="icon-btn" data-bs-toggle="modal" data-bs-target="#deleteTaskModal"><i class="fa-solid fa-trash"></i></button>
                </div>
            </label>
            
            <label class="task-card">
                <input type="checkbox" class="custom-checkbox" checked>
                <div class="task-content">
                    <div class="task-title">Wireframe çizimleri</div>
                    <div class="task-desc">Müşteriye sunulacak ilk eskizler.</div>
                </div>
                <div class="task-actions">
                    <button class="icon-btn" data-bs-toggle="modal" data-bs-target="#editTaskModal"><i class="fa-solid fa-pen"></i></button>
                    <button class="icon-btn" data-bs-toggle="modal" data-bs-target="#deleteTaskModal"><i class="fa-solid fa-trash"></i></button>
                </div>
            </label>
        </div>

        <div class="task-group">
            <div class="task-group-header">
                <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: var(--accent-success);"></span>
                Veritabanı
            </div>
            
            <label class="task-card">
                <input type="checkbox" class="custom-checkbox">
                <div class="task-content">
                    <div class="task-title">Veritabanı şemasını tasarla</div>
                    <div class="task-desc">MySQL veritabanı şemasını ve ilişkileri tasarla.</div>
                </div>
                <div class="task-actions">
                    <button class="icon-btn" data-bs-toggle="modal" data-bs-target="#editTaskModal"><i class="fa-solid fa-pen"></i></button>
                    <button class="icon-btn" data-bs-toggle="modal" data-bs-target="#deleteTaskModal"><i class="fa-solid fa-trash"></i></button>
                </div>
            </label>
        </div>
    </div>
</div>

<!-- Modals -->
<div class="modal fade" id="addTaskModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Yeni Görev Oluştur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" style="filter: invert(1) grayscale(100%) brightness(200%);"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Görev Adı</label>
                    <input type="text" class="form-control" placeholder="Örn: Landing page tasarımı">
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Durum</label>
                        <select class="form-select">
                            <option>Todo</option>
                            <option>In Progress</option>
                            <option>Review</option>
                            <option>Done</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Öncelik</label>
                        <select class="form-select">
                            <option>Yüksek</option>
                            <option>Orta</option>
                            <option>Düşük</option>
                        </select>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select class="form-select">
                        <option value="">Seçiniz...</option>
                        <option value="frontend">Frontend (UI/UX)</option>
                        <option value="backend">Backend (API/Veri)</option>
                        <option value="database">Veritabanı</option>
                        <option value="testing">Test & QA</option>
                        <option value="design">Tasarım (Design)</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Açıklama</label>
                    <textarea class="form-control" rows="3" placeholder="Görev detaylarını buraya yazın..."></textarea>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Son Tarih</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
                
                <div class="mb-3" style="display: flex; align-items: center; gap: 0.5rem;">
                    <input type="checkbox" class="custom-checkbox" id="assigneeCheck" style="width: 20px; height: 20px; border-radius: 4px;">
                    <label for="assigneeCheck" style="font-size: 0.875rem; font-weight: 600; color: var(--text-primary); cursor: pointer; margin: 0;">Bana Ata</label>
                </div>
            </div>
            <div class="modal-footer" style="display: flex; gap: 0.5rem; justify-content: flex-end;">
                <button type="button" class="btn-secondary" data-bs-dismiss="modal">İptal</button>
                <button type="button" class="btn-premium">Kaydet</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editTaskModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Görevi Düzenle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" style="filter: invert(1) grayscale(100%) brightness(200%);"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Görev Adı</label>
                    <input type="text" class="form-control" value="Tasarım mockuplarını hazırla">
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Durum</label>
                        <select class="form-select">
                            <option>Todo</option>
                            <option selected>In Progress</option>
                            <option>Review</option>
                            <option>Done</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Öncelik</label>
                        <select class="form-select">
                            <option selected>Yüksek</option>
                            <option>Orta</option>
                            <option>Düşük</option>
                        </select>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select class="form-select">
                        <option value="">Seçiniz...</option>
                        <option value="frontend">Frontend (UI/UX)</option>
                        <option value="backend">Backend (API/Veri)</option>
                        <option value="database">Veritabanı</option>
                        <option value="testing">Test & QA</option>
                        <option value="design" selected>Tasarım (Design)</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Açıklama</label>
                    <textarea class="form-control" rows="3">Figma'da tüm ekran mockuplarını hazırlayıp paylaş.</textarea>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Son Tarih</label>
                        <input type="date" class="form-control" value="2026-08-15">
                    </div>
                </div>
                
                <div class="mb-3" style="display: flex; align-items: center; gap: 0.5rem;">
                    <input type="checkbox" class="custom-checkbox" id="editAssigneeCheck" checked style="width: 20px; height: 20px; border-radius: 4px;">
                    <label for="editAssigneeCheck" style="font-size: 0.875rem; font-weight: 600; color: var(--text-primary); cursor: pointer; margin: 0;">Bana Ata</label>
                </div>
            </div>
            <div class="modal-footer" style="display: flex; gap: 0.5rem; justify-content: flex-end;">
                <button type="button" class="btn-secondary" data-bs-dismiss="modal">İptal</button>
                <button type="button" class="btn-premium">Kaydet</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteTaskModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body text-center" style="padding: 2rem 1.5rem;">
                <i class="fa-solid fa-triangle-exclamation" style="font-size: 3rem; color: var(--accent-danger); margin-block-end: 1rem;"></i>
                <h5 class="modal-title" style="margin-block-end: 0.5rem;">Emin misiniz?</h5>
                <p style="color: var(--text-secondary); margin-block-end: 1.5rem;">Bu görev kalıcı olarak silinecektir.</p>
                <div style="display: flex; gap: 0.5rem; justify-content: center;">
                    <button type="button" class="btn-secondary" data-bs-dismiss="modal">İptal</button>
                    <button type="button" class="btn-premium" style="background: linear-gradient(to right in oklch, var(--accent-danger), oklch(0.5 0.2 25)); border-color: transparent;">Sil</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addFileModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Rapor İndir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" style="filter: invert(1) grayscale(100%) brightness(200%);"></button>
            </div>
            <div class="modal-body text-center">
                <p style="color: var(--text-secondary);">Projenin güncel durumuyla ilgili rapor PDF formatında indirilecektir.</p>
            </div>
            <div class="modal-footer" style="display: flex; gap: 0.5rem; justify-content: flex-end;">
                <button type="button" class="btn-secondary" data-bs-dismiss="modal">İptal</button>
                <button type="button" class="btn-premium">İndir</button>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
