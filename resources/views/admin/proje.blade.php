@include('layouts.nav')

<style>
    /* ===== MODERN PROJE YÖNETIMI ===== */
    body { background: #f0f4f8; }

    .main-content { animation: fadeSlideUp 0.55s cubic-bezier(0.16,1,0.3,1); }

    @keyframes fadeSlideUp {
        from { opacity:0; transform:translateY(24px); }
        to   { opacity:1; transform:translateY(0); }
    }

    /* ---------- PAGE HEADER ---------- */
    .page-header-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .page-title-main {
        font-size: 1.9rem;
        font-weight: 800;
        color: #0f172a;
        letter-spacing: -0.03em;
        margin: 0;
    }
    .page-subtitle {
        color: #64748b;
        margin: 0.25rem 0 0;
        font-size: 0.95rem;
    }

    /* ---------- STATS GRID ---------- */
    .modern-stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px,1fr));
        gap: 1.25rem;
        margin-bottom: 2rem;
    }
    .stat-card-m {
        background: rgba(255,255,255,0.85);
        backdrop-filter: blur(14px);
        -webkit-backdrop-filter: blur(14px);
        border: 1px solid rgba(255,255,255,0.7);
        border-radius: 20px;
        padding: 1.5rem;
        display: flex;
        align-items: center;
        gap: 1.25rem;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 28px -8px rgba(0,0,0,0.06);
        transition: transform .35s cubic-bezier(.4,0,.2,1), box-shadow .35s;
    }
    .stat-card-m:hover { transform: translateY(-5px); box-shadow: 0 18px 36px -10px rgba(0,0,0,0.1); }
    .stat-card-m::after {
        content:''; position:absolute; inset:0;
        background: linear-gradient(135deg,rgba(255,255,255,.55) 0%,rgba(255,255,255,0) 60%);
        pointer-events:none;
    }
    .stat-icon-m {
        width:60px; height:60px; border-radius:16px;
        display:flex; align-items:center; justify-content:center;
        font-size:1.6rem; flex-shrink:0;
        transition: transform .4s cubic-bezier(.34,1.56,.64,1);
    }
    .stat-card-m:hover .stat-icon-m { transform: scale(1.12) rotate(6deg); }
    .icon-m-blue   { background:linear-gradient(135deg,#60a5fa,#2563eb); color:#fff; box-shadow:0 8px 18px -4px rgba(37,99,235,.35); }
    .icon-m-green  { background:linear-gradient(135deg,#4ade80,#16a34a); color:#fff; box-shadow:0 8px 18px -4px rgba(22,163,74,.35); }
    .icon-m-purple { background:linear-gradient(135deg,#c084fc,#9333ea); color:#fff; box-shadow:0 8px 18px -4px rgba(147,51,234,.35); }
    .icon-m-orange { background:linear-gradient(135deg,#fbbf24,#d97706); color:#fff; box-shadow:0 8px 18px -4px rgba(217,119,6,.35); }

    .stat-info-m .label { font-size:.8rem; font-weight:700; text-transform:uppercase; letter-spacing:.05em; color:#64748b; margin-bottom:.2rem; }
    .stat-info-m .value { font-size:2rem; font-weight:800; color:#0f172a; line-height:1.1; }

    /* ---------- FILTER BAR ---------- */
    .modern-filter-bar {
        background:#fff;
        border-radius:18px;
        padding:1.25rem 1.5rem;
        display:flex; flex-wrap:wrap; gap:1rem; align-items:flex-end;
        box-shadow:0 4px 20px rgba(0,0,0,.04);
        margin-bottom:1.75rem;
    }
    .filter-field { flex:1; min-width:180px; display:flex; flex-direction:column; gap:.4rem; }
    .filter-field label { font-size:.82rem; font-weight:700; color:#475569; padding-left:.1rem; }
    .modern-select {
        background:#f8fafc; border:2px solid transparent; border-radius:12px;
        padding:.75rem 1rem; font-size:.92rem; color:#1e293b; font-weight:500;
        outline:none; transition:all .25s;
        appearance:none; cursor:pointer;
    }
    .modern-select:focus { background:#fff; border-color:#3b82f6; box-shadow:0 4px 14px rgba(59,130,246,.14); }

    /* ---------- ACTION BAR ---------- */
    .action-bar-m {
        display:flex; justify-content:space-between; align-items:center;
        margin-bottom:1.25rem; flex-wrap:wrap; gap:.75rem;
    }
    .action-bar-m .count-info { color:#475569; font-size:.95rem; font-weight:500; }
    .action-bar-m .count-info strong { color:#0f172a; font-weight:800; }

    /* ---------- BUTTONS ---------- */
    .btn-grad {
        background:linear-gradient(135deg,#3b82f6,#1d4ed8);
        color:#fff; border:none; border-radius:12px;
        padding:.8rem 1.5rem; font-weight:700; font-size:.9rem;
        display:inline-flex; align-items:center; gap:.5rem;
        cursor:pointer; transition:all .3s;
        box-shadow:0 6px 18px rgba(37,99,235,.25);
    }
    .btn-grad:hover { transform:translateY(-2px); box-shadow:0 10px 22px rgba(37,99,235,.35); color:#fff; }
    .btn-grad-red {
        background:linear-gradient(135deg,#f87171,#dc2626);
        color:#fff; border:none; border-radius:12px;
        padding:.8rem 1.5rem; font-weight:700; font-size:.9rem;
        display:inline-flex; align-items:center; gap:.5rem;
        cursor:pointer; transition:all .3s;
        box-shadow:0 6px 18px rgba(220,38,38,.25);
    }
    .btn-grad-red:hover { transform:translateY(-2px); box-shadow:0 10px 22px rgba(220,38,38,.35); color:#fff; }
    .btn-ghost {
        background:#fff; color:#475569; border:2px solid #e2e8f0;
        border-radius:12px; padding:.8rem 1.5rem; font-weight:700; font-size:.9rem;
        display:inline-flex; align-items:center; gap:.5rem;
        cursor:pointer; transition:all .3s;
    }
    .btn-ghost:hover { background:#f8fafc; border-color:#cbd5e1; color:#1e293b; }

    /* ---------- TABLE ---------- */
    .modern-table-wrap {
        background:#fff; border-radius:20px;
        box-shadow:0 8px 32px -8px rgba(0,0,0,.06); overflow-x:auto; overflow-y:hidden;
    }
    .modern-table { width:100%; border-collapse:collapse; }
    .modern-table thead th {
        background:#f8fafc; padding:1.1rem 1.25rem;
        font-size:.8rem; font-weight:700; color:#64748b;
        text-transform:uppercase; letter-spacing:.05em;
        border-bottom:2px solid #e2e8f0; white-space:nowrap; text-align:left;
    }
    .modern-table tbody td {
        padding:1.1rem 1.25rem; border-bottom:1px solid #f1f5f9;
        color:#334155; vertical-align:middle; font-weight:500;
        transition:background .2s;
    }
    .modern-table tbody tr { transition:all .25s; }
    .modern-table tbody tr:hover { background:#fafbff; }
    .modern-table tbody tr:hover td { color:#0f172a; }
    .modern-table tbody td:first-child { border-left: 3px solid transparent; transition: border-color .3s; }
    .modern-table tbody tr:hover td:first-child { border-left-color: #3b82f6; }

    .project-name-cell strong { font-size:1rem; color:#0f172a; }
    .project-name-cell small  { color:#94a3b8; font-size:.82rem; }

    /* Status Badges */
    .status-pill {
        display:inline-flex; align-items:center; gap:.4rem;
        padding:.35em 1em; border-radius:999px;
        font-size:.8rem; font-weight:700; letter-spacing:.02em;
        white-space:nowrap;
    }
    .status-pill::before { content:''; width:7px; height:7px; border-radius:50%; }
    .status-inprogress { background:#eff6ff; color:#1d4ed8; }
    .status-inprogress::before { background:#3b82f6; box-shadow:0 0 6px #3b82f6; }
    .status-completed  { background:#f0fdf4; color:#15803d; }
    .status-completed::before  { background:#22c55e; box-shadow:0 0 6px #22c55e; }
    .status-planning   { background:#f5f3ff; color:#7c3aed; }
    .status-planning::before   { background:#8b5cf6; box-shadow:0 0 6px #8b5cf6; }
    .status-onhold     { background:#fefce8; color:#a16207; }
    .status-onhold::before     { background:#eab308; box-shadow:0 0 6px #eab308; }

    /* Priority Badges */
    .priority-pill {
        display:inline-block; padding:.3em .9em; border-radius:999px;
        font-size:.78rem; font-weight:700; letter-spacing:.03em;
    }
    .priority-high   { background:#fee2e2; color:#b91c1c; }
    .priority-medium { background:#fef9c3; color:#854d0e; }
    .priority-low    { background:#dcfce7; color:#15803d; }

    /* Action icon buttons */
    .tbl-actions { display:flex; gap:.4rem; justify-content:flex-end; opacity:.5; transition:opacity .2s; }
    .modern-table tbody tr:hover .tbl-actions { opacity:1; }
    .tbl-btn {
        width:36px; height:36px; border-radius:10px; border:none;
        display:inline-flex; align-items:center; justify-content:center;
        cursor:pointer; font-size:1rem; transition:all .25s;
    }
    .tbl-btn-view   { background:#f0fdf4; color:#15803d; }
    .tbl-btn-view:hover   { background:#15803d; color:#fff; transform:translateY(-3px); box-shadow:0 5px 12px rgba(21,128,61,.3); }
    .tbl-btn-edit   { background:#f0f9ff; color:#0284c7; }
    .tbl-btn-edit:hover   { background:#0284c7; color:#fff; transform:translateY(-3px); box-shadow:0 5px 12px rgba(2,132,199,.3); }
    .tbl-btn-delete { background:#fff1f2; color:#e11d48; }
    .tbl-btn-delete:hover { background:#e11d48; color:#fff; transform:translateY(-3px); box-shadow:0 5px 12px rgba(225,29,72,.3); }

    /* ---------- EMPTY STATE ---------- */
    .empty-state-m {
        text-align:center; padding:4rem 2rem; display:none;
    }
    .empty-state-m .empty-icon { font-size:3.5rem; color:#cbd5e1; margin-bottom:1rem; }
    .empty-state-m h5 { color:#475569; font-weight:700; margin-bottom:.5rem; }
    .empty-state-m p { color:#94a3b8; font-size:.9rem; }

    /* ---------- MODAL (modern) ---------- */
    .modal-content {
        border:1px solid rgba(255,255,255,.8);
        border-radius:20px !important;
        box-shadow:0 30px 60px -10px rgba(0,0,0,.18);
        overflow:hidden;
    }
    .modal-header {
        background:linear-gradient(135deg,#f8fafc,#fff);
        border-bottom:1px solid #e2e8f0;
        padding:1.25rem 1.5rem;
    }
    .modal-title { font-weight:800; color:#0f172a; font-size:1.1rem; }
    .modal-body  { padding:1.5rem; }
    .modal-footer { border-top:1px solid #f1f5f9; padding:1rem 1.5rem; gap:.75rem; }

    .modern-form-label {
        font-size:.83rem; font-weight:700; color:#475569;
        margin-bottom:.45rem; display:block; padding-left:.1rem;
    }
    .modern-form-control {
        background:#f8fafc; border:2px solid transparent; border-radius:12px;
        padding:.8rem 1rem; font-size:.93rem; color:#1e293b; font-weight:500;
        outline:none; transition:all .25s; width:100%;
    }
    .modern-form-control:focus { background:#fff; border-color:#3b82f6; box-shadow:0 4px 14px rgba(59,130,246,.14); }

    /* Delete Modal */
    .delete-modal-icon { font-size:3rem; color:#e11d48; margin-bottom:1rem; }
</style>

{{-- Flash Messages --}}
@if(session('success'))
    <div id="flash-success" style="position:fixed;top:80px;right:20px;z-index:9999;min-width:320px;background:linear-gradient(135deg,#dcfce7,#f0fdf4);border:1px solid #86efac;border-radius:14px;padding:1rem 1.25rem;box-shadow:0 10px 30px rgba(22,163,74,.2);display:flex;align-items:center;gap:.75rem;animation:fadeSlideUp .4s ease;">
        <i class="fa-solid fa-circle-check" style="color:#16a34a;font-size:1.3rem;"></i>
        <span style="color:#15803d;font-weight:600;flex:1;">{{ session('success') }}</span>
        <button onclick="this.parentElement.remove()" style="background:none;border:none;color:#15803d;cursor:pointer;font-size:1.1rem;"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <script>setTimeout(()=>{ const el=document.getElementById('flash-success'); if(el) el.style.opacity='0', el.style.transform='translateY(-10px)', setTimeout(()=>el.remove(),400); el.style.transition='all .4s'; },4000);</script>
@endif
@if(session('error') || $errors->any())
    <div style="position:fixed;top:80px;right:20px;z-index:9999;min-width:320px;background:linear-gradient(135deg,#fee2e2,#fff1f2);border:1px solid #fca5a5;border-radius:14px;padding:1rem 1.25rem;box-shadow:0 10px 30px rgba(220,38,38,.18);">
        <i class="fa-solid fa-triangle-exclamation" style="color:#dc2626;"></i>
        @foreach($errors->all() as $e)<div style="color:#b91c1c;font-weight:500;font-size:.9rem;">{{ $e }}</div>@endforeach
    </div>
@endif

<!-- ===== ADD PROJECT MODAL ===== -->
<div class="modal fade" id="addProjectModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div style="display:flex;align-items:center;gap:.75rem;">
                    <div style="width:36px;height:36px;background:linear-gradient(135deg,#60a5fa,#2563eb);border-radius:10px;display:flex;align-items:center;justify-content:center;color:#fff;">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <h5 class="modal-title">Yeni Proje Ekle</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('proje.store') }}" method="POST" id="addProjectForm">
                    @csrf
                    <div class="mb-3">
                        <label class="modern-form-label">Proje Adı <span style="color:#e11d48">*</span></label>
                        <input name="proje_adi" type="text" class="modern-form-control" id="projectName" placeholder="Örn: E-Ticaret Platformu" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-span-6">
                            <label class="modern-form-label">Müşteri <span style="color:#e11d48">*</span></label>
                            <select name="musteri" class="modern-form-control" id="clientSelect" required>
                                <option value="">Seçiniz...</option>
                                <option value="ABC Şirketi">ABC Şirketi</option>
                                <option value="XYZ Ltd.">XYZ Ltd.</option>
                                <option value="Müşteri 3">Müşteri 3</option>
                            </select>
                        </div>
                        <div class="col-span-6">
                            <label class="modern-form-label">Durum <span style="color:#e11d48">*</span></label>
                            <select name="durum" class="modern-form-control" id="projectStatus" required>
                                <option value="planning">Planlama</option>
                                <option value="in-progress">Devam Eden</option>
                                <option value="completed">Tamamlandı</option>
                                <option value="on-hold">Beklemede</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="modern-form-label">Açıklama</label>
                        <textarea name="aciklama" class="modern-form-control" id="projectDescription" rows="3" placeholder="Proje detaylarını buraya yazın..."></textarea>
                    </div>
                    <div class="row mb-3">
                        <div class="col-span-6">
                            <label class="modern-form-label">Başlangıç Tarihi <span style="color:#e11d48">*</span></label>
                            <input name="baslangic" type="date" class="modern-form-control" id="startDate" required>
                        </div>
                        <div class="col-span-6">
                            <label class="modern-form-label">Bitiş Tarihi <span style="color:#e11d48">*</span></label>
                            <input name="bitis" type="date" class="modern-form-control" id="endDate" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-span-6">
                            <label class="modern-form-label">Bütçe (₺)</label>
                            <input name="butce" type="number" class="modern-form-control" id="projectBudget" placeholder="0.00" min="0" step="100">
                        </div>
                        <div class="col-span-6">
                            <label class="modern-form-label">Öncelik <span style="color:#e11d48">*</span></label>
                            <select name="oncelik" class="modern-form-control" id="prioritySelect" required>
                                <option value="high">🔴 Yüksek</option>
                                <option value="medium">🟡 Orta</option>
                                <option value="low">🟢 Düşük</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-ghost" data-bs-dismiss="modal">İptal</button>
                <button type="submit" form="addProjectForm" class="btn-grad"><i class="fa-solid fa-floppy-disk"></i> Kaydet</button>
            </div>
        </div>
    </div>
</div>

<!-- ===== EDIT PROJECT MODAL ===== -->
<div class="modal fade" id="editProjectModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div style="display:flex;align-items:center;gap:.75rem;">
                    <div style="width:36px;height:36px;background:linear-gradient(135deg,#a78bfa,#7c3aed);border-radius:10px;display:flex;align-items:center;justify-content:center;color:#fff;">
                        <i class="fa-solid fa-pen"></i>
                    </div>
                    <h5 class="modal-title">Projeyi Düzenle</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="editProjectForm">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="modern-form-label">Proje Adı <span style="color:#e11d48">*</span></label>
                        <input type="text" name="proje_adi" class="modern-form-control" id="editProjectName" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-span-6">
                            <label class="modern-form-label">Müşteri <span style="color:#e11d48">*</span></label>
                            <select name="musteri" class="modern-form-control" id="editClientSelect" required>
                                <option value="">Seçiniz...</option>
                                <option value="ABC Şirketi">ABC Şirketi</option>
                                <option value="XYZ Ltd.">XYZ Ltd.</option>
                                <option value="Müşteri 3">Müşteri 3</option>
                            </select>
                        </div>
                        <div class="col-span-6">
                            <label class="modern-form-label">Durum <span style="color:#e11d48">*</span></label>
                            <select name="durum" class="modern-form-control" id="editProjectStatus" required>
                                <option value="planning">Planlama</option>
                                <option value="in-progress">Devam Eden</option>
                                <option value="completed">Tamamlandı</option>
                                <option value="on-hold">Beklemede</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="modern-form-label">Açıklama</label>
                        <textarea name="aciklama" class="modern-form-control" id="editProjectDescription" rows="3"></textarea>
                    </div>
                    <div class="row mb-3">
                        <div class="col-span-6">
                            <label class="modern-form-label">Başlangıç Tarihi</label>
                            <input type="date" name="baslangic" class="modern-form-control" id="editStartDate">
                        </div>
                        <div class="col-span-6">
                            <label class="modern-form-label">Bitiş Tarihi</label>
                            <input type="date" name="bitis" class="modern-form-control" id="editEndDate">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-span-6">
                            <label class="modern-form-label">Bütçe (₺)</label>
                            <input type="number" name="butce" class="modern-form-control" id="editProjectBudget" min="0" step="100">
                        </div>
                        <div class="col-span-6">
                            <label class="modern-form-label">Öncelik <span style="color:#e11d48">*</span></label>
                            <select name="oncelik" class="modern-form-control" id="editPrioritySelect" required>
                                <option value="high">🔴 Yüksek</option>
                                <option value="medium">🟡 Orta</option>
                                <option value="low">🟢 Düşük</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-ghost" data-bs-dismiss="modal">İptal</button>
                <button type="submit" form="editProjectForm" class="btn-grad"><i class="fa-solid fa-check"></i> Güncelle</button>
            </div>
        </div>
    </div>
</div>

<!-- ===== DELETE CONFIRM MODAL ===== -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body text-center" style="padding:2rem 1.5rem;">
                <div class="delete-modal-icon"><i class="fa-solid fa-triangle-exclamation"></i></div>
                <h5 style="font-weight:800;color:#0f172a;margin-bottom:.5rem;">Projeyi Sil</h5>
                <p id="deleteProjectName" style="color:#e11d48;font-weight:700;margin-bottom:.5rem;"></p>
                <p style="color:#64748b;font-size:.9rem;margin-bottom:0;">Bu projeyi kalıcı olarak silmek istediğinizden emin misiniz? Bu işlem geri alınamaz.</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn-ghost" data-bs-dismiss="modal">Vazgeç</button>
                <form action="" method="POST" id="deleteProjectForm" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-grad-red"><i class="fa-solid fa-trash"></i> Evet, Sil</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ===== MAIN CONTENT ===== -->
<div class="main-content">

    <!-- Page Header -->
    <div class="page-header-bar">
        <div>
            <h1 class="page-title-main">Proje Yönetimi</h1>
            <p class="page-subtitle">Tüm projelerinizi tek bir yerden görüntüleyin ve yönetin.</p>
        </div>
        <button type="button" id="addProjectBtn" class="btn-grad" style="display:none;">
            <i class="fa-solid fa-plus"></i> Yeni Proje
        </button>
    </div>

    <!-- Stats Grid -->
    <div class="modern-stats-grid">
        <div class="stat-card-m">
            <div class="stat-icon-m icon-m-blue"><i class="fa-solid fa-folder"></i></div>
            <div class="stat-info-m">
                <div class="label">Toplam Proje</div>
                <div class="value" id="totalProjects">0</div>
            </div>
        </div>
        <div class="stat-card-m">
            <div class="stat-icon-m icon-m-green"><i class="fa-solid fa-spinner"></i></div>
            <div class="stat-info-m">
                <div class="label">Devam Eden</div>
                <div class="value" id="activeProjects">0</div>
            </div>
        </div>
        <div class="stat-card-m">
            <div class="stat-icon-m icon-m-purple"><i class="fa-solid fa-circle-check"></i></div>
            <div class="stat-info-m">
                <div class="label">Tamamlanan</div>
                <div class="value" id="completedProjects">0</div>
            </div>
        </div>
        <div class="stat-card-m">
            <div class="stat-icon-m icon-m-orange"><i class="fa-solid fa-clock"></i></div>
            <div class="stat-info-m">
                <div class="label">Bekleyen</div>
                <div class="value" id="pendingProjects">0</div>
            </div>
        </div>
    </div>

    <!-- Filter Bar -->
    <div class="modern-filter-bar">
        <div class="filter-field">
            <label>Durum Filtresi</label>
            <select class="modern-select" id="statusFilter">
                <option value="">Tüm Durumlar</option>
                <option value="planning">Planlama</option>
                <option value="in-progress">Devam Eden</option>
                <option value="completed">Tamamlandı</option>
                <option value="on-hold">Beklemede</option>
            </select>
        </div>
        <div class="filter-field">
            <label>Öncelik Filtresi</label>
            <select class="modern-select" id="priorityFilter">
                <option value="">Tüm Öncelikler</option>
                <option value="high">🔴 Yüksek</option>
                <option value="medium">🟡 Orta</option>
                <option value="low">🟢 Düşük</option>
            </select>
        </div>
        <div style="display:flex;align-items:flex-end;">
            <button type="button" id="applyFiltersBtn" class="btn-grad" style="height:fit-content;">
                <i class="fa-solid fa-filter"></i> Filtrele
            </button>
        </div>
    </div>

    <!-- Action Bar -->
    <div class="action-bar-m">
        <div class="count-info">Toplam <strong id="countDisplay">0</strong> proje listeleniyor</div>
    </div>

    <!-- Projects Table -->
    <div class="modern-table-wrap">
        <table class="modern-table" id="projectsTable">
            <thead>
                <tr>
                    <th>Proje Adı</th>
                    <th>Müşteri</th>
                    <th>Durum</th>
                    <th>Öncelik</th>
                    <th>Başlangıç</th>
                    <th>Bitiş</th>
                    <th>Bütçe</th>
                    <th style="text-align:right;">İşlemler</th>
                </tr>
            </thead>
            <tbody id="projectsTableBody"></tbody>
        </table>

        <!-- Empty State -->
        <div class="empty-state-m" id="emptyState">
            <div class="empty-icon"><i class="fa-solid fa-folder-open"></i></div>
            <h5>Henüz Proje Yok</h5>
            <p>İlk projenizi eklemek için aşağıdaki butona tıklayın.</p>
            <button type="button" id="addProjectBtnEmpty" class="btn-grad mt-2">
                <i class="fa-solid fa-plus"></i> Yeni Proje Ekle
            </button>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // ---- Data from Laravel ----
    let projects = @json($projeler);

    // ---- Modals ----
    const addProjectModal    = new bootstrap.Modal(document.getElementById('addProjectModal'));
    const editProjectModal   = new bootstrap.Modal(document.getElementById('editProjectModal'));
    const deleteConfirmModal = new bootstrap.Modal(document.getElementById('deleteConfirmModal'));

    // ---- DOM ----
    const projectsTableBody = document.getElementById('projectsTableBody');
    const emptyState        = document.getElementById('emptyState');
    const addProjectBtn     = document.getElementById('addProjectBtn');
    const addProjectBtnEmpty= document.getElementById('addProjectBtnEmpty');
    const statusFilter      = document.getElementById('statusFilter');
    const priorityFilter    = document.getElementById('priorityFilter');
    const applyFiltersBtn   = document.getElementById('applyFiltersBtn');
    const countDisplay      = document.getElementById('countDisplay');

    // ---- Badge Helpers ----
    function statusClass(s) {
        return { 'in-progress':'status-inprogress', 'completed':'status-completed', 'planning':'status-planning', 'on-hold':'status-onhold' }[s] || 'status-planning';
    }
    function statusLabel(s) {
        return { 'in-progress':'Devam Eden', 'completed':'Tamamlandı', 'planning':'Planlama', 'on-hold':'Beklemede' }[s] || s;
    }
    function priorityClass(p) {
        return { 'high':'priority-high', 'medium':'priority-medium', 'low':'priority-low' }[p] || '';
    }
    function priorityLabel(p) {
        return { 'high':'Yüksek', 'medium':'Orta', 'low':'Düşük' }[p] || p;
    }

    function formatDate(d) {
        if (!d) return '—';
        return new Date(d).toLocaleDateString('tr-TR', { day:'2-digit', month:'short', year:'numeric' });
    }
    function esc(t) { const d=document.createElement('div'); d.textContent=t; return d.innerHTML; }

    // ---- Render ----
    function renderProjects(list = projects) {
        const status   = statusFilter.value;
        const priority = priorityFilter.value;
        let filtered = list.filter(p =>
            (!status   || p.durum   === status) &&
            (!priority || p.oncelik === priority)
        );

        countDisplay.textContent = filtered.length;

        if (filtered.length === 0) {
            emptyState.style.display = 'block';
            document.getElementById('projectsTable').style.display = 'none';
            addProjectBtn.style.display = 'none';
        } else {
            emptyState.style.display = 'none';
            document.getElementById('projectsTable').style.display = '';
            addProjectBtn.style.display = 'flex';

            projectsTableBody.innerHTML = filtered.map(p => `
                <tr>
                    <td class="project-name-cell">
                        <a href="/proje/${p.id}/detay" style="text-decoration: none; color: inherit;">
                            <strong>${esc(p.proje_adi)}</strong><br>
                            <small>${esc(p.aciklama || '')}</small>
                        </a>
                    </td>
                    <td>${esc(p.musteri)}</td>
                    <td><span class="status-pill ${statusClass(p.durum)}">${statusLabel(p.durum)}</span></td>
                    <td><span class="priority-pill ${priorityClass(p.oncelik)}">${priorityLabel(p.oncelik)}</span></td>
                    <td style="white-space:nowrap;">${formatDate(p.baslangic)}</td>
                    <td style="white-space:nowrap;">${formatDate(p.bitis)}</td>
                    <td style="font-weight:700;color:#0f172a;">₺${parseInt(p.butce||0).toLocaleString('tr-TR')}</td>
                    <td>
                        <div class="tbl-actions">
                            <a href="/proje/${p.id}/detay" class="tbl-btn tbl-btn-view" title="Detaylar"><i class="fa-solid fa-eye"></i></a>
                            <button class="tbl-btn tbl-btn-edit" onclick="editProject(${p.id})" title="Düzenle"><i class="fa-solid fa-pen"></i></button>
                            <button class="tbl-btn tbl-btn-delete" onclick="deleteProject(${p.id})" title="Sil"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
            `).join('');

            updateStats();
        }
    }

    // ---- Stats ----
    function updateStats() {
        document.getElementById('totalProjects').textContent     = projects.length;
        document.getElementById('activeProjects').textContent    = projects.filter(p=>p.durum==='in-progress').length;
        document.getElementById('completedProjects').textContent = projects.filter(p=>p.durum==='completed').length;
        document.getElementById('pendingProjects').textContent   = projects.filter(p=>p.durum==='on-hold'||p.durum==='planning').length;
    }

    // ---- Edit ----
    function editProject(id) {
        const p = projects.find(p => p.id === id);
        if (!p) return;
        document.getElementById('editProjectForm').action = '/proje/' + id;
        document.getElementById('editProjectName').value        = p.proje_adi;
        document.getElementById('editClientSelect').value       = p.musteri;
        document.getElementById('editProjectStatus').value      = p.durum;
        document.getElementById('editProjectDescription').value = p.aciklama;
        document.getElementById('editStartDate').value          = p.baslangic;
        document.getElementById('editEndDate').value            = p.bitis;
        document.getElementById('editProjectBudget').value      = p.butce;
        document.getElementById('editPrioritySelect').value     = p.oncelik;
        editProjectModal.show();
    }

    // ---- Delete ----
    function deleteProject(id) {
        const p = projects.find(p => p.id === id);
        if (!p) return;
        document.getElementById('deleteProjectForm').action = '/proje/' + id;
        document.getElementById('deleteProjectName').textContent = p.proje_adi;
        deleteConfirmModal.show();
    }

    // ---- Event Listeners ----
    statusFilter.addEventListener('change',   () => renderProjects());
    priorityFilter.addEventListener('change', () => renderProjects());
    applyFiltersBtn.addEventListener('click', () => renderProjects());
    addProjectBtn.addEventListener('click',      () => addProjectModal.show());
    addProjectBtnEmpty.addEventListener('click', () => addProjectModal.show());

    // ---- Init ----
    renderProjects();
</script>

@include('layouts.footer')
