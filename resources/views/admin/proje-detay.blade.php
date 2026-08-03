@include('layouts.nav')
    <style>
        :root {
            --bg-body: #f3f4f6;
            --bg-surface: #ffffff;
            --border-light: #e5e7eb;
            --text-dark: #111827;
            --text-muted: #6b7280;
            --brand-primary: #2563eb;
            --brand-hover: #1d4ed8;
            --sidebar-width: 250px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-body);
            color: var(--text-dark);
            margin: 0;
            padding: 0;
        }

        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background-color: var(--bg-surface);
            border-right: 1px solid var(--border-light);
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            overflow-y: auto;
            z-index: 1000;
        }

        .brand-logo {
            padding: 1.5rem;
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--text-dark);
            border-bottom: 1px solid var(--border-light);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .brand-logo i {
            color: var(--brand-primary);
        }

        .nav-menu {
            padding: 1rem 0.5rem;
        }

        .nav-item-custom {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: var(--text-muted);
            text-decoration: none;
            border-radius: 6px;
            margin-bottom: 0.25rem;
            font-weight: 500;
            transition: all 0.2s ease-in-out;
        }

        .nav-item-custom i {
            width: 24px;
            font-size: 1.1rem;
        }

        .nav-item-custom:hover,
        .nav-item-custom.active {
            background-color: #eff6ff;
            color: var(--brand-primary);
        }

        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
        }

        /* Cards */
        .card-clean {
            background-color: var(--bg-surface);
            border: 1px solid var(--border-light);
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            padding: 1.5rem;
            height: 100%;
        }

        /* Stats Typography */
        .stat-label {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .stat-value {
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--text-dark);
            margin: 0.5rem 0;
        }

        /* Badges */
        .badge-status {
            padding: 0.35em 0.65em;
            font-weight: 500;
            border-radius: 4px;
            font-size: 0.75rem;
        }

        .bg-light-success {
            background-color: #dcfce7;
            color: #166534;
        }

        .bg-light-warning {
            background-color: #fef08a;
            color: #854d0e;
        }

        .bg-light-info {
            background-color: #e0f2fe;
            color: #075985;
        }

        /* Tables */
        .table-minimal th {
            font-size: 0.75rem;
            text-transform: uppercase;
            color: var(--text-muted);
            border-bottom: 2px solid var(--border-light);
            padding-bottom: 0.75rem;
        }

        .table-minimal td {
            vertical-align: middle;
            color: var(--text-dark);
            border-bottom: 1px solid var(--border-light);
            padding: 1rem 0.5rem;
        }

        /* Buttons */
        .btn-primary-custom {
            background-color: var(--brand-primary);
            color: white;
            border: none;
            border-radius: 6px;
            padding: 0.5rem 1rem;
            font-weight: 500;
        }

        .btn-primary-custom:hover {
            background-color: var(--brand-hover);
            color: white;
        }

        /* Secondary Button */
        .btn-secondary-custom {
            background-color: transparent;
            border: 1px solid var(--border-light);
            color: var(--text-dark);
            border-radius: 6px;
            padding: 0.5rem 1rem;
            font-weight: 500;
        }

        .btn-secondary-custom:hover {
            background-color: #f9fafb;
            color: var(--text-dark);
        }

        /* Danger Button */
        .btn-danger-custom {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 0.5rem 1rem;
            font-weight: 500;
        }

        .btn-danger-custom:hover {
            background-color: #bb2d3b;
            color: white;
        }

        /* Task Item */
        .task-item {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 0.75rem;
            transition: all 0.2s ease-in-out;
            cursor: pointer;
            border: 1px solid var(--border-light);
        }

        .task-item:hover {
            background-color: #f9fafb;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .task-item.completed {
            background-color: #f3f4f6;
            opacity: 0.7;
        }

        .task-item.completed .task-title {
            text-decoration: line-through;
            color: var(--text-muted);
        }

        /* Task Status Badges */
        .badge-task-status {
            padding: 0.35em 0.65em;
            font-weight: 500;
            border-radius: 4px;
            font-size: 0.75rem;
        }

        .bg-light-todo {
            background-color: #fef3c7;
            color: #92400e;
        }

        .bg-light-in-progress {
            background-color: #dbeafe;
            color: #1e40af;
        }

        .bg-light-review {
            background-color: #fcd34d;
            color: #854d0e;
        }

        .bg-light-done {
            background-color: #dcfce7;
            color: #166534;
        }

        /* Category Badges - Base Style */
        .badge-category {
            padding: 0.25em 0.5em;
            font-weight: 500;
            border-radius: 4px;
            font-size: 0.7rem;
            text-transform: capitalize;
        }

        /* Category-specific colors */
        .badge-category--frontend {
            background-color: #e0f2fe;
            color: #075985;
        }

        .badge-category--backend {
            background-color: #fef3c7;
            color: #92400e;
        }

        .badge-category--database {
            background-color: #dcfce7;
            color: #166534;
        }

        .badge-category--testing {
            background-color: #fcd34d;
            color: #854d0e;
        }

        .badge-category--documentation {
            background-color: #f3f4f6;
            color: var(--text-muted);
        }

        .badge-category--deployment {
            background-color: #dbeafe;
            color: #1e40af;
        }

        .badge-category--design {
            background-color: #fae8ff;
            color: #7c3aed;
        }

        .badge-category--research {
            background-color: #eff6ff;
            color: var(--brand-primary);
        }

        /* Progress Bar */
        .progress-bar-custom {
            height: 8px;
            border-radius: 4px;
            background-color: var(--brand-primary);
        }

        /* Step-by-Step Progress Styles */
        .step-container {
            padding: 1.5rem 0;
        }

        .step-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--border-light);
        }

        .step-checkbox-wrapper {
            position: relative;
            flex-shrink: 0;
        }

        .step-checkbox {
            width: 36px;
            height: 36px;
            margin-right: 1rem;
            cursor: pointer;
            accent-color: var(--brand-primary);
        }

        .step-checkbox:checked+.step-checkmark::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1.2rem;
            color: white;
        }

        .step-checkmark {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            background-color: #f9fafb;
            border: 2px solid var(--border-light);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease-in-out;
        }

        .step-checkbox:checked+.step-checkmark {
            background-color: var(--brand-primary);
            border-color: var(--brand-primary);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        }

        .step-content h6 {
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .step-content p {
            color: var(--text-muted);
            line-height: 1.5;
            margin-bottom: 0.75rem;
        }

        .step-meta {
            display: flex;
            gap: 1rem;
            font-size: 0.875rem;
            color: var(--text-muted);
        }

        .step-badge {
            padding: 0.25em 0.5em;
            border-radius: 4px;
            font-size: 0.75rem;
            text-transform: capitalize;
        }

        /* Priority Badges */
        .priority-high {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .priority-medium {
            background-color: #fef3c7;
            color: #92400e;
        }

        .priority-low {
            background-color: #dcfce7;
            color: #166534;
        }

        /* Step Status Badges */
        .status-todo {
            background-color: #fef3c7;
            color: #92400e;
        }

        .status-in-progress {
            background-color: #dbeafe;
            color: #1e40af;
        }

        .status-review {
            background-color: #fcd34d;
            color: #854d0e;
        }

        .status-done {
            background-color: #dcfce7;
            color: #166534;
        }

        /* Tabs */
        .nav-tabs-custom {
            border-bottom: 1px solid var(--border-light);
            margin-bottom: 1.5rem;
        }

        .nav-link-custom {
            color: var(--text-muted);
            padding: 1rem 1.5rem;
            border-radius: 6px;
            margin-right: 0.5rem;
            font-weight: 500;
            transition: all 0.2s ease-in-out;
        }

        .nav-link-custom:hover {
            color: var(--text-dark);
            background-color: #f9fafb;
        }

        .nav-link-custom.active {
            color: var(--brand-primary);
            background-color: #eff6ff;
        }

        /* File Attachment */
        .file-attachment {
            display: flex;
            align-items: center;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 0.75rem;
            background-color: #f9fafb;
            border: 1px solid var(--border-light);
        }

        .file-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #eff6ff;
            border-radius: 8px;
            margin-right: 1rem;
        }

        /* Timeline */
        .timeline-item {
            padding-left: 2rem;
            position: relative;
            padding-bottom: 1.5rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: -1.5rem;
            width: 2px;
            background-color: var(--border-light);
        }

        .timeline-item:last-child::before {
            display: none;
        }

        .timeline-dot {
            position: absolute;
            left: -6px;
            top: 0;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background-color: var(--brand-primary);
            border: 3px solid #f9fafb;
        }

        /* Action Buttons */
        .action-btn {
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            color: var(--text-muted);
            background-color: transparent;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        .action-btn:hover {
            background-color: #eff6ff;
            color: var(--brand-primary);
        }

        /* Modal Styles */
        .modal-header {
            border-bottom: 1px solid var(--border-light);
            padding-bottom: 1rem;
        }

        .modal-body {
            padding-top: 0;
        }

        .form-label {
            font-weight: 500;
            color: var(--text-dark);
            margin-bottom: 0.25rem;
        }

        /* Category Filter Tabs */
        .category-tabs-custom {
            display: flex;
            gap: 0.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border-light);
            margin-bottom: 1.5rem;
            overflow-x: auto;
        }

        .category-tab {
            padding: 0.75rem 1.25rem;
            background-color: #f9fafb;
            border: 1px solid var(--border-light);
            border-radius: 8px 8px 0 0;
            color: var(--text-muted);
            font-weight: 600;
            cursor: pointer;
            white-space: nowrap;
            transition: all 0.2s ease-in-out;
        }

        .category-tab:hover {
            background-color: #eff6ff;
            color: var(--brand-primary);
        }

        .category-tab.active {
            background-color: #eff6ff;
            border-bottom-color: transparent;
            color: var(--brand-primary);
        }

        /* Task Group Styles */
        .task-group-header {
            padding: 1.25rem 0 0.75rem;
            margin-top: 1.5rem;
            border-top: 2px solid var(--border-light);
        }

        .task-group-title {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.75rem;
        }

        .task-group-count {
            background-color: #f3f4f6;
            color: var(--text-muted);
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            font-size: 0.875rem;
            margin-left: auto;
        }

        .task-group-count.empty {
            background-color: #eff6ff;
            color: var(--brand-primary);
        }

        /* Sort Controls */
        .sort-controls {
            display: flex;
            gap: 0.75rem;
            align-items: center;
            margin-bottom: 1.25rem;
            padding: 1rem;
            background-color: #f9fafb;
            border-radius: 8px;
        }

        .sort-select {
            flex: 1;
            min-width: 200px;
        }

        /* Task Progress Bar */
        .task-progress-container {
            margin-top: 1.5rem;
            padding: 1.5rem;
            background-color: #f9fafb;
            border-radius: 8px;
        }

        .progress-labels {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.75rem;
            font-size: 0.875rem;
        }

        .progress-bar-custom-grouped {
            height: 12px;
            border-radius: 6px;
            background-color: #e5e7eb;
            overflow: hidden;
        }

        .progress-segment {
            height: 100%;
            transition: width 0.3s ease-in-out;
        }

        /* Category Color Indicators */
        .category-indicator {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            margin-right: 0.5rem;
        }
    </style>

    <!-- Modals -->
    <div class="modal fade" id="addTaskModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Yeni Görev Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addTaskForm">
                        <div class="mb-3">
                            <label for="taskTitle" class="form-label">Görev Başlığı</label>
                            <input type="text" class="form-control form-control-lg" id="taskTitle"
                                placeholder="Örn: Tasarım mockuplarını hazırla" required>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="taskStatus" class="form-label">Durum</label>
                                <select class="form-select form-control-lg" id="taskStatus" required>
                                    <option value="todo">Yapılacaklar (Todo)</option>
                                    <option value="in-progress">Devam Eden</option>
                                    <option value="review">İnceleme</option>
                                    <option value="done">Tamamlanmış</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="taskPriority" class="form-label">Öncelik</label>
                                <select class="form-select form-control-lg" id="taskPriority" required>
                                    <option value="high">Yüksek</option>
                                    <option value="medium">Orta</option>
                                    <option value="low">Düşük</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="taskCategory" class="form-label">Kategori</label>
                            <select class="form-select form-control-lg" id="taskCategory" required>
                                <option value="">Seçiniz...</option>
                                <option value="frontend">Frontend (UI/UX)</option>
                                <option value="backend">Backend (API/Veri)</option>
                                <option value="database">Veritabanı</option>
                                <option value="testing">Test & QA</option>
                                <option value="documentation">Dokümantasyon</option>
                                <option value="deployment">Deploy & DevOps</option>
                                <option value="design">Tasarım (Design)</option>
                                <option value="research">Araştırma</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="taskDescription" class="form-label">Açıklama</label>
                            <textarea class="form-control form-control-lg" id="taskDescription" rows="3"
                                placeholder="Görev detaylarını buraya yazın..."></textarea>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="taskDueDate" class="form-label">Son Tarih</label>
                                <input type="date" class="form-control form-control-lg" id="taskDueDate" required>
                            </div>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="assigneeCheck">
                            <label for="assigneeCheck" class="form-check-label">Atama Yap</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-secondary-custom" data-bs-dismiss="modal">İptal</button>
                    <button type="submit" form="addTaskForm" class="btn-primary-custom">Kaydet</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Task Modal -->
    <div class="modal fade" id="editTaskModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Görevi Düzenle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editTaskForm">
                        <input type="hidden" id="editTaskId">

                        <div class="mb-3">
                            <label for="editTaskTitle" class="form-label">Görev Başlığı</label>
                            <input type="text" class="form-control form-control-lg" id="editTaskTitle" required>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="editTaskStatus" class="form-label">Durum</label>
                                <select class="form-select form-control-lg" id="editTaskStatus" required>
                                    <option value="todo">Yapılacaklar (Todo)</option>
                                    <option value="in-progress">Devam Eden</option>
                                    <option value="review">İnceleme</option>
                                    <option value="done">Tamamlanmış</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="editTaskPriority" class="form-label">Öncelik</label>
                                <select class="form-select form-control-lg" id="editTaskPriority" required>
                                    <option value="high">Yüksek</option>
                                    <option value="medium">Orta</option>
                                    <option value="low">Düşük</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="editTaskCategory" class="form-label">Kategori</label>
                            <select class="form-select form-control-lg" id="editTaskCategory" required>
                                <option value="">Seçiniz...</option>
                                <option value="frontend">Frontend (UI/UX)</option>
                                <option value="backend">Backend (API/Veri)</option>
                                <option value="database">Veritabanı</option>
                                <option value="testing">Test & QA</option>
                                <option value="documentation">Dokümantasyon</option>
                                <option value="deployment">Deploy & DevOps</option>
                                <option value="design">Tasarım (Design)</option>
                                <option value="research">Araştırma</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="editTaskDescription" class="form-label">Açıklama</label>
                            <textarea class="form-control form-control-lg" id="editTaskDescription" rows="3"></textarea>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="editTaskDueDate" class="form-label">Son Tarih</label>
                                <input type="date" class="form-control form-control-lg" id="editTaskDueDate">
                            </div>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="editAssigneeCheck">
                            <label for="editAssigneeCheck" class="form-check-label">Atama Yap</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-secondary-custom" data-bs-dismiss="modal">İptal</button>
                    <button type="submit" form="editTaskForm" class="btn-primary-custom">Güncelle</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Task Modal -->
    <div class="modal fade" id="deleteTaskModal" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Görevi Sil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p id="deleteTaskTitle" class="fw-bold mb-3"></p>
                    <p class="text-muted small">Bu görevi silmek istediğinizden emin misiniz?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-secondary-custom" data-bs-dismiss="modal">İptal</button>
                    <button type="button" id="confirmDeleteTaskBtn" class="btn-danger-custom">Sil</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add File Modal -->
    <div class="modal fade" id="addFileModal" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dosya Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addFileForm">
                        <div class="mb-3">
                            <label for="fileName" class="form-label">Dosya Adı</label>
                            <input type="text" class="form-control form-control-lg" id="fileName"
                                placeholder="Örn: mockup.pdf" required>
                        </div>

                        <div class="mb-3">
                            <label for="fileType" class="form-label">Dosya Tipi</label>
                            <select class="form-select form-control-lg" id="fileType" required>
                                <option value="pdf">PDF</option>
                                <option value="docx">Word</option>
                                <option value="xlsx">Excel</option>
                                <option value="pptx">PowerPoint</option>
                                <option value="zip">ZIP</option>
                                <option value="image">Görsel</option>
                            </select>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="filePublicCheck">
                            <label for="filePublicCheck" class="form-check-label">Herkese Açık</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-secondary-custom" data-bs-dismiss="modal">İptal</button>
                    <button type="submit" form="addFileForm" class="btn-primary-custom">Kaydet</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Main Content -->
    <div class="main-content">
        <!-- Breadcrumb & Actions -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <nav aria-label="breadcrumb" style="font-size: 0.875rem;">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" style="color: var(--text-muted); text-decoration: none;"><i
                                class="fa-solid fa-house me-1"></i>Kontrol Paneli</a></li>
                    <li class="breadcrumb-item"><a href="/proje-detay"
                            style="color: var(--text-muted); text-decoration: none;">Proje Yönetimi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">E-Ticaret Platformu</li>
                </ol>
            </nav>

            <div class="d-flex gap-2">
                <button type="button" id="addTaskBtn" class="btn-primary-custom">
                    <i class="fa-solid fa-plus me-2"></i>Yeni Görev Ekle
                </button>
                <button type="button" class="btn-secondary-custom">
                    <i class="fa-solid fa-file-export me-2"></i>Rapor İndir
                </button>
            </div>
        </div>

        <!-- Project Header -->
        <div class="card-clean p-4 mb-4">
            <div class="d-flex justify-content-between align-items-start mb-3">
                <div>
                    <h1 class="fw-bold mb-2" style="font-size: 1.5rem;">E-Ticaret Platformu</h1>
                    <p class="text-muted mb-0 small">Modern e-ticaret sitesi geliştirilmesi projesi</p>
                </div>
                <span class="badge-status bg-light-info">Devam Eden</span>
            </div>

            <div class="row g-3 align-items-center">
                <div class="col-md-4">
                    <label class="small text-muted">Müşteri</label>
                    <p class="fw-bold mb-0">ABC Şirketi</p>
                </div>
                <div class="col-md-4">
                    <label class="small text-muted">Öncelik</label>
                    <span class="badge bg-danger mb-0">YÜKSEK</span>
                </div>
                <div class="col-md-4">
                    <label class="small text-muted">Bütçe</label>
                    <p class="fw-bold mb-0">₺150,000</p>
                </div>
            </div>

            <hr class="my-3" style="border-color: var(--border-light);">

            <div class="row g-4">
                <div class="col-md-6">
                    <label class="small text-muted mb-1 d-block">Başlangıç</label>
                    <p class="fw-bold mb-0">2 Ağustos 2026</p>
                </div>
                <div class="col-md-6">
                    <label class="small text-muted mb-1 d-block">Bitiş</label>
                    <p class="fw-bold mb-0">30 Eylül 2026</p>
                </div>
            </div>

            <div class="mt-4">
                <label class="small text-muted mb-2 d-block">Proje Açıklaması</label>
                <p class="text-dark mb-0" style="line-height: 1.6;">
                    Modern e-ticaret sitesi geliştirilmesi projesi. Kullanıcı dostu arayüz, güvenli ödeme sistemleri,
                    hızlı ve responsive tasarım ile müşterilerinize en iyi alışveriş deneyimini sunmak için çalışıyoruz.
                </p>
            </div>

            <div class="mt-4">
                <label class="small text-muted mb-2 d-block">İlerleme</label>
                <div class="d-flex align-items-center gap-3">
                    <div style="flex: 1;">
                        <div class="progress" style="height: 8px; background-color: #e5e7eb; border-radius: 4px;">
                            <div class="progress-bar-custom" style="width: 65%;"></div>
                        </div>
                    </div>
                    <span class="fw-bold">65%</span>
                </div>
            </div>

            <!-- Category Filter Tabs -->
            <div class="category-tabs-custom">
                <button type="button" class="category-tab active" data-category="all">
                    <i class="fa-solid fa-layer-group me-2"></i>Tümü (<span id="count-all">5</span>)
                </button>
                <button type="button" class="category-tab" data-category="frontend">
                    <i class="fa-solid fa-code me-2"></i>Frontend (<span id="count-frontend">0</span>)
                </button>
                <button type="button" class="category-tab" data-category="backend">
                    <i class="fa-solid fa-server me-2"></i>Backend (<span id="count-backend">0</span>)
                </button>
                <button type="button" class="category-tab" data-category="design">
                    <i class="fa-solid fa-palette me-2"></i>Tasarım (<span id="count-design">1</span>)
                </button>
                <button type="button" class="category-tab" data-category="database">
                    <i class="fa-solid fa-database me-2"></i>Veritabanı (<span id="count-database">1</span>)
                </button>
                <button type="button" class="category-tab" data-category="testing">
                    <i class="fa-solid fa-vial me-2"></i>Test & QA (<span id="count-testing">1</span>)
                </button>
                <button type="button" class="category-tab" data-category="deployment">
                    <i class="fa-solid fa-cloud me-2"></i>Deploy (<span id="count-deployment">1</span>)
                </button>
            </div>

            <!-- Sort Controls -->
            <div class="sort-controls">
                <label for="taskSortSelect" class="small fw-bold mb-0">Sıralama:</label>
                <select id="taskSortSelect" class="form-select sort-select">
                    <option value="status-priority-date">Öncelik & Durum</option>
                    <option value="date-descending">Son Tarih (En Yakın)</option>
                    <option value="priority-descending">Yüksek Öncelikten</option>
                    <option value="due-date-ascending">Son Tarihe Göre</option>
                </select>
            </div>

        </div>

        <!-- Tabs -->
        <ul class="nav nav-tabs-custom" id="projectTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link-custom active" id="tasks-tab" data-bs-toggle="tab"
                    data-bs-target="#tasks-content" type="button" role="tab">
                    <i class="fa-solid fa-check-square me-2"></i>Görevler
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link-custom" id="files-tab" data-bs-toggle="tab" data-bs-target="#files-content"
                    type="button" role="tab">
                    <i class="fa-solid fa-folder me-2"></i>Dosyalar
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link-custom" id="timeline-tab" data-bs-toggle="tab"
                    data-bs-target="#timeline-content" type="button" role="tab">
                    <i class="fa-solid fa-calendar me-2"></i>Zaman Çizelgesi
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link-custom" id="team-tab" data-bs-toggle="tab" data-bs-target="#team-content"
                    type="button" role="tab">
                    <i class="fa-solid fa-users me-2"></i>Ekibim
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="card-clean p-4 mb-4" id="tasks-content" role="tabpanel">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold mb-0"><i class="fa-solid fa-check-square me-2"></i>Görev Listesi</h5>
                <button type="button" id="addTaskBtnTab" class="btn-primary-custom btn-sm">
                    <i class="fa-solid fa-plus me-1"></i>Ekle
                </button>
            </div>

            <!-- Tasks -->
            <div id="tasksList">
                <!-- Task 1: Design Category -->
                <div class="task-group" data-category="design">
                    <div class="task-group-header">
                        <div class="task-group-title">
                            <span class="category-indicator" style="background-color: #fae8ff;"></span>
                            <i class="fa-solid fa-palette me-2"></i>Tasarım Görevleri
                            <span id="count-design-group" class="task-group-count empty">1</span>
                        </div>
                    </div>

                    <!-- Task 1 -->
                    <div class="task-item" data-id="1" data-status="in-progress" data-priority="high">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h6 class="mb-0 fw-bold text-dark task-title">Tasarım mockuplarını hazırla</h6>
                            <span class="badge-task-status bg-light-in-progress">Devam Eden</span>
                        </div>
                        <p class="small text-muted mb-2" style="line-height: 1.5;">Figma'da tüm ekran mockuplarını
                            hazırlayıp paylaş.</p>

                        <div class="d-flex justify-content-between align-items-center small">
                            <span class="text-muted"><i class="fa-solid fa-clock me-1"></i>Son Tarih: 15 Ağustos
                                2026</span>

                            <div class="btn-group" role="group">
                                <button type="button" class="action-btn" onclick="editTask(1)" title="Düzenle">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button type="button" class="action-btn" onclick="deleteTask(1)" title="Sil">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Task Progress Bar -->
                    <div class="task-progress-container">
                        <div class="progress-labels">
                            <span><strong>%65</strong> Tamamlanan Görevler</span>
                            <span><strong>%35</strong> Kalan Görevler</span>
                        </div>
                        <div class="progress-bar-custom-grouped">
                            <div class="progress-segment" style="width: 65%; background-color: #dcfce7;"></div>
                            <div class="progress-segment" style="width: 35%; background-color: #e5e7eb;"></div>
                        </div>
                    </div>
                </div>

                <!-- Task 2: Database Category -->
                <div class="task-group" data-category="database">
                    <div class="task-group-header">
                        <div class="task-group-title">
                            <span class="category-indicator" style="background-color: #dcfce7;"></span>
                            <i class="fa-solid fa-database me-2"></i>Veritabanı Görevleri
                            <span id="count-database-group" class="task-group-count empty">1</span>
                        </div>
                    </div>

                    <!-- Task 2 -->
                    <div class="task-item completed" data-id="2" data-status="todo" data-priority="medium">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h6 class="mb-0 fw-bold text-dark task-title">Veritabanı şemasını tasarla</h6>
                            <span class="badge-task-status bg-light-todo">Yapılacaklar (Todo)</span>
                        </div>
                        <p class="small text-muted mb-2" style="line-height: 1.5;">MySQL veritabanı şemasını ve
                            ilişkileri
                            tasarla.</p>

                        <div class="d-flex justify-content-between align-items-center small">
                            <span class="text-muted"><i class="fa-solid fa-clock me-1"></i>Son Tarih: 20 Ağustos
                                2026</span>

                            <div class="btn-group" role="group">
                                <button type="button" class="action-btn" onclick="editTask(2)" title="Düzenle">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button type="button" class="action-btn" onclick="deleteTask(2)" title="Sil">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Task Progress Bar -->
                    <div class="task-progress-container">
                        <div class="progress-labels">
                            <span><strong>%65</strong> Tamamlanan Görevler</span>
                            <span><strong>%35</strong> Kalan Görevler</span>
                        </div>
                        <div class="progress-bar-custom-grouped">
                            <div class="progress-segment" style="width: 65%; background-color: #dcfce7;"></div>
                            <div class="progress-segment" style="width: 35%; background-color: #e5e7eb;"></div>
                        </div>
                    </div>
                </div>

                <!-- Task 3: Documentation Category -->
                <div class="task-group" data-category="documentation">
                    <div class="task-group-header">
                        <div class="task-group-title">
                            <span class="category-indicator" style="background-color: #f3f4f6;"></span>
                            <i class="fa-solid fa-file-alt me-2"></i>Dokümantasyon Görevleri
                            <span id="count-documentation-group" class="task-group-count empty">1</span>
                        </div>
                    </div>

                    <!-- Task 3 -->
                    <div class="task-item completed" data-id="3" data-status="todo" data-priority="low">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h6 class="mb-0 fw-bold text-dark task-title">API dokümantasyonunu hazırla</h6>
                            <span class="badge-task-status bg-light-todo">Yapılacaklar (Todo)</span>
                        </div>
                        <p class="small text-muted mb-2" style="line-height: 1.5;">Swagger/OpenAPI dokümantasyonunu
                            hazırla.
                        </p>

                        <div class="d-flex justify-content-between align-items-center small">
                            <span class="text-muted"><i class="fa-solid fa-clock me-1"></i>Son Tarih: 25 Ağustos
                                2026</span>

                            <div class="btn-group" role="group">
                                <button type="button" class="action-btn" onclick="editTask(3)" title="Düzenle">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button type="button" class="action-btn" onclick="deleteTask(3)" title="Sil">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Task Progress Bar -->
                    <div class="task-progress-container">
                        <div class="progress-labels">
                            <span><strong>%65</strong> Tamamlanan Görevler</span>
                            <span><strong>%35</strong> Kalan Görevler</span>
                        </div>
                        <div class="progress-bar-custom-grouped">
                            <div class="progress-segment" style="width: 65%; background-color: #dcfce7;"></div>
                            <div class="progress-segment" style="width: 35%; background-color: #e5e7eb;"></div>
                        </div>
                    </div>
                </div>

                <!-- Task 4: Testing Category -->
                <div class="task-group" data-category="testing">
                    <div class="task-group-header">
                        <div class="task-group-title">
                            <span class="category-indicator" style="background-color: #fcd34d;"></span>
                            <i class="fa-solid fa-vial me-2"></i>Test & QA Görevleri
                            <span id="count-testing-group" class="task-group-count empty">1</span>
                        </div>
                    </div>

                    <!-- Task 4 -->
                    <div class="task-item completed" data-id="4" data-status="todo" data-priority="high">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h6 class="mb-0 fw-bold text-dark task-title">Test senaryolarını yaz</h6>
                            <span class="badge-task-status bg-light-todo">Yapılacaklar (Todo)</span>
                        </div>
                        <p class="small text-muted mb-2" style="line-height: 1.5;">Manuel ve otomatik test senaryolarını
                            hazırla.</p>

                        <div class="d-flex justify-content-between align-items-center small">
                            <span class="text-muted"><i class="fa-solid fa-clock me-1"></i>Son Tarih: 28 Ağustos
                                2026</span>

                            <div class="btn-group" role="group">
                                <button type="button" class="action-btn" onclick="editTask(4)" title="Düzenle">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button type="button" class="action-btn" onclick="deleteTask(4)" title="Sil">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Task Progress Bar -->
                    <div class="task-progress-container">
                        <div class="progress-labels">
                            <span><strong>%65</strong> Tamamlanan Görevler</span>
                            <span><strong>%35</strong> Kalan Görevler</span>
                        </div>
                        <div class="progress-bar-custom-grouped">
                            <div class="progress-segment" style="width: 65%; background-color: #dcfce7;"></div>
                            <div class="progress-segment" style="width: 35%; background-color: #e5e7eb;"></div>
                        </div>
                    </div>
                </div>

                <!-- Task 5: Deployment Category -->
                <div class="task-group" data-category="deployment">
                    <div class="task-group-header">
                        <div class="task-group-title">
                            <span class="category-indicator" style="background-color: #dbeafe;"></span>
                            <i class="fa-solid fa-cloud me-2"></i>Deploy & DevOps Görevleri
                            <span id="count-deployment-group" class="task-group-count empty">1</span>
                        </div>
                    </div>

                    <!-- Task 5 -->
                    <div class="task-item completed" data-id="5" data-status="todo" data-priority="medium">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h6 class="mb-0 fw-bold text-dark task-title">Deploy ve sunucu ayarları</h6>
                            <span class="badge-task-status bg-light-todo">Yapılacaklar (Todo)</span>
                        </div>
                        <p class="small text-muted mb-2" style="line-height: 1.5;">Production sunucuya deploy ve
                            güvenlik
                            ayarlarını yap.</p>

                        <div class="d-flex justify-content-between align-items-center small">
                            <span class="text-muted"><i class="fa-solid fa-clock me-1"></i>Son Tarih: 30 Eylül
                                2026</span>

                            <div class="btn-group" role="group">
                                <button type="button" class="action-btn" onclick="editTask(5)" title="Düzenle">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button type="button" class="action-btn" onclick="deleteTask(5)" title="Sil">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Task Progress Bar -->
                    <div class="task-progress-container">
                        <div class="progress-labels">
                            <span><strong>%65</strong> Tamamlanan Görevler</span>
                            <span><strong>%35</strong> Kalan Görevler</span>
                        </div>
                        <div class="progress-bar-custom-grouped">
                            <div class="progress-segment" style="width: 65%; background-color: #dcfce7;"></div>
                            <div class="progress-segment" style="width: 35%; background-color: #e5e7eb;"></div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Empty State -->
            <div id="tasksEmptyState" style="display: none; text-align: center; padding: 3rem 1rem;">
                <i class="fa-solid fa-check-square" style="font-size: 4rem; margin-bottom: 1rem; opacity: 0.5;"></i>
                <h5 class="fw-bold mb-2">Henüz Görev Yok</h5>
                <p class="small text-muted mb-3">İlk görevinizi eklemek için "Yeni Görev Ekle" butonuna tıklayın.</p>
            </div>
        </div>

        <!-- Files Tab -->
        <div class="card-clean p-4 mb-4" id="files-content" role="tabpanel" style="display: none;">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold mb-0"><i class="fa-solid fa-folder me-2"></i>Proje Dosyaları</h5>
                <button type="button" id="addFileBtnTab" class="btn-primary-custom btn-sm">
                    <i class="fa-solid fa-plus me-1"></i>Dosya Ekle
                </button>
            </div>

            <!-- Files -->
            <div id="filesList">
                <!-- File 1 -->
                <div class="file-attachment" data-id="1" data-type="pdf">
                    <div class="file-icon">
                        <i class="fa-solid fa-file-pdf text-danger"></i>
                    </div>
                    <div style="flex: 1;">
                        <h6 class="mb-0 fw-bold text-dark">requirements.pdf</h6>
                        <p class="small text-muted mb-0">Müşteri gereksinimleri dokümanı - 2.5 MB</p>
                    </div>
                    <span class="badge bg-light-info" style="background-color: #e0f2fe; color: #075985;">PDF</span>
                </div>

                <!-- File 2 -->
                <div class="file-attachment" data-id="2" data-type="docx">
                    <div class="file-icon">
                        <i class="fa-solid fa-file-word text-primary"></i>
                    </div>
                    <div style="flex: 1;">
                        <h6 class="mb-0 fw-bold text-dark">tasarim-brief.docx</h6>
                        <p class="small text-muted mb-0">Tasarım brief dokümanı - 850 KB</p>
                    </div>
                    <span class="badge bg-light-info" style="background-color: #e0f2fe; color: #075985;">Word</span>
                </div>

                <!-- File 3 -->
                <div class="file-attachment" data-id="3" data-type="zip">
                    <div class="file-icon">
                        <i class="fa-solid fa-file-archive text-warning"></i>
                    </div>
                    <div style="flex: 1;">
                        <h6 class="mb-0 fw-bold text-dark">assets-v1.zip</h6>
                        <p class="small text-muted mb-0">Görsel varlıklar paketi - 45 MB</p>
                    </div>
                    <span class="badge bg-light-info" style="background-color: #fef3c7; color: #92400e;">ZIP</span>
                </div>

                <!-- Empty State -->
                <div id="filesEmptyState" style="display: none; text-align: center; padding: 3rem 1rem;">
                    <i class="fa-solid fa-folder-open" style="font-size: 4rem; margin-bottom: 1rem; opacity: 0.5;"></i>
                    <h5 class="fw-bold mb-2">Henüz Dosya Yok</h5>
                    <p class="small text-muted mb-3">İlk dosyanızı eklemek için "Dosya Ekle" butonuna tıklayın.</p>
                </div>
            </div>
        </div>

        <!-- Timeline Tab -->
        <div class="card-clean p-4 mb-4" id="timeline-content" role="tabpanel" style="display: none;">
            <h5 class="fw-bold mb-4"><i class="fa-solid fa-calendar me-2"></i>Zaman Çizelgesi</h5>

            <!-- Timeline Items -->
            <div class="mb-4">
                <div class="timeline-item" data-status="completed">
                    <div class="d-flex align-items-start mb-2">
                        <div class="timeline-dot"></div>
                        <div style="flex: 1;">
                            <h6 class="mb-0 fw-bold text-dark">Proje Başlangıcı</h6>
                            <p class="small text-muted mb-0">2 Ağustos 2026 - Proje onaylandı ve ekip oluşturuldu.</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-status="completed">
                    <div class="d-flex align-items-start mb-2">
                        <div class="timeline-dot"></div>
                        <div style="flex: 1;">
                            <h6 class="mb-0 fw-bold text-dark">Tasarım Mockupları Tamamlandı</h6>
                            <p class="small text-muted mb-0">15 Ağustos 2026 - Tüm ekran mockupları Figma'da hazırlandı.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-status="in-progress">
                    <div class="d-flex align-items-start mb-2">
                        <div class="timeline-dot"></div>
                        <div style="flex: 1;">
                            <h6 class="mb-0 fw-bold text-dark">Frontend Geliştirme</h6>
                            <p class="small text-muted mb-0">20 Ağustos 2026 - React/Next.js ile frontend kodlaması
                                devam ediyor.</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-status="todo">
                    <div class="d-flex align-items-start mb-2">
                        <div class="timeline-dot"></div>
                        <div style="flex: 1;">
                            <h6 class="mb-0 fw-bold text-dark">Backend Geliştirme</h6>
                            <p class="small text-muted mb-0">25 Ağustos 2026 - API endpoints ve veritabanı işlemleri.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-status="todo">
                    <div class="d-flex align-items-start mb-2">
                        <div class="timeline-dot"></div>
                        <div style="flex: 1;">
                            <h6 class="mb-0 fw-bold text-dark">Test ve QA</h6>
                            <p class="small text-muted mb-0">30 Ağustos 2026 - Manuel ve otomatik testler.</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item" data-status="todo">
                    <div class="d-flex align-items-start mb-2">
                        <div class="timeline-dot"></div>
                        <div style="flex: 1;">
                            <h6 class="mb-0 fw-bold text-dark">Production Deploy</h6>
                            <p class="small text-muted mb-0">30 Eylül 2026 - Canlı sunucuya deploy ve final teslimi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Tab -->
        <div class="card-clean p-4 mb-4" id="team-content" role="tabpanel" style="display: none;">
            <h5 class="fw-bold mb-4"><i class="fa-solid fa-users me-2"></i>Proje Ekibi</h5>

            <!-- Team Members -->
            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="card-clean p-3 text-center">
                        <div
                            style="width: 80px; height: 80px; border-radius: 50%; margin: 0 auto 1rem; background-color: #eff6ff; display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-user" style="font-size: 2.5rem; color: var(--brand-primary);"></i>
                        </div>
                        <h6 class="mb-0 fw-bold text-dark">Ahmet Yılmaz</h6>
                        <p class="small text-muted mb-1">Frontend Developer</p>
                        <span class="badge bg-light-success"
                            style="background-color: #dcfce7; color: #166534;">Aktif</span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-clean p-3 text-center">
                        <div
                            style="width: 80px; height: 80px; border-radius: 50%; margin: 0 auto 1rem; background-color: #fef3c7; display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-user" style="font-size: 2.5rem; color: #92400e;"></i>
                        </div>
                        <h6 class="mb-0 fw-bold text-dark">Ayşe Demir</h6>
                        <p class="small text-muted mb-1">UI/UX Designer</p>
                        <span class="badge bg-light-success"
                            style="background-color: #dcfce7; color: #166534;">Aktif</span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-clean p-3 text-center">
                        <div
                            style="width: 80px; height: 80px; border-radius: 50%; margin: 0 auto 1rem; background-color: #fcd34d; display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-user" style="font-size: 2.5rem; color: #854d0e;"></i>
                        </div>
                        <h6 class="mb-0 fw-bold text-dark">Mehmet Kaya</h6>
                        <p class="small text-muted mb-1">Backend Developer</p>
                        <span class="badge bg-light-success"
                            style="background-color: #dcfce7; color: #166534;">Aktif</span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-clean p-3 text-center">
                        <div
                            style="width: 80px; height: 80px; border-radius: 50%; margin: 0 auto 1rem; background-color: #e0f2fe; display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-user" style="font-size: 2.5rem; color: #075985;"></i>
                        </div>
                        <h6 class="mb-0 fw-bold text-dark">Fatma Şahin</h6>
                        <p class="small text-muted mb-1">QA Engineer</p>
                        <span class="badge bg-light-success"
                            style="background-color: #dcfce7; color: #166534;">Aktif</span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-clean p-3 text-center">
                        <div
                            style="width: 80px; height: 80px; border-radius: 50%; margin: 0 auto 1rem; background-color: #f9fafb; display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-user" style="font-size: 2.5rem; color: var(--text-muted);"></i>
                        </div>
                        <h6 class="mb-0 fw-bold text-dark">+3 Ekip Üyesi</h6>
                        <p class="small text-muted mb-1">Daha fazla eklemek için tıklayın</p>
                        <button type="button" class="btn-primary-custom btn-sm mt-2">Ekle</button>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-clean p-3 text-center">
                        <div
                            style="width: 80px; height: 80px; border-radius: 50%; margin: 0 auto 1rem; background-color: #f9fafb; display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-user" style="font-size: 2.5rem; color: var(--text-muted);"></i>
                        </div>
                        <h6 class="mb-0 fw-bold text-dark">+1 Ekip Üyesi</h6>
                        <p class="small text-muted mb-1">Daha fazla eklemek için tıklayın</p>
                        <button type="button" class="btn-primary-custom btn-sm mt-2">Ekle</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Task Button (fixed bottom-right on mobile) -->
        <button type="button" id="addTaskBtnMobile" class="btn-primary-custom float-end mt-3 d-none">
            <i class="fa-solid fa-plus me-2"></i>Yeni Görev Ekle
        </button>

    </div>



    <script>
        // Sample task data (in production, this would come from a backend)
        let tasks = [
            { id: 1, title: "Tasarım mockuplarını hazırla", status: "in-progress", priority: "high", category: "design", dueDate: "2026-08-15", description: "Figma'da tüm ekran mockuplarını hazırlayıp paylaş.", assignee: null },
            { id: 2, title: "Veritabanı şemasını tasarla", status: "todo", priority: "medium", category: "database", dueDate: "2026-08-20", description: "MySQL veritabanı şemasını ve ilişkileri tasarla.", assignee: null },
            { id: 3, title: "API dokümantasyonunu hazırla", status: "todo", priority: "low", category: "documentation", dueDate: "2026-08-25", description: "Swagger/OpenAPI dokümantasyonunu hazırla.", assignee: null },
            { id: 4, title: "Test senaryolarını yaz", status: "todo", priority: "high", category: "testing", dueDate: "2026-08-28", description: "Manuel ve otomatik test senaryolarını hazırla.", assignee: null },
            { id: 5, title: "Deploy ve sunucu ayarları", status: "todo", priority: "medium", category: "deployment", dueDate: "2026-09-30", description: "Production sunucuya deploy ve güvenlik ayarlarını yap.", assignee: null }
        ];

        // Sample files data
        let files = [
            { id: 1, name: "requirements.pdf", type: "pdf", size: "2.5 MB", public: true },
            { id: 2, name: "tasarim-brief.docx", type: "docx", size: "850 KB", public: false },
            { id: 3, name: "assets-v1.zip", type: "zip", size: "45 MB", public: true }
        ];

        // Initialize Bootstrap Modals
        const addTaskModal = new bootstrap.Modal(document.getElementById('addTaskModal'));
        const editTaskModal = new bootstrap.Modal(document.getElementById('editTaskModal'));
        const deleteTaskModal = new bootstrap.Modal(document.getElementById('deleteTaskModal'));
        const addFileModal = new bootstrap.Modal(document.getElementById('addFileModal'));

        // DOM Elements
        const tasksList = document.getElementById('tasksList');
        const tasksEmptyState = document.getElementById('tasksEmptyState');
        const filesList = document.getElementById('filesList');
        const filesEmptyState = document.getElementById('filesEmptyState');
        const addTaskBtn = document.getElementById('addTaskBtn');
        const addTaskBtnTab = document.getElementById('addTaskBtnTab');
        const addTaskBtnMobile = document.getElementById('addTaskBtnMobile');
        const addFileBtnTab = document.getElementById('addFileBtnTab');

        // Task Status Badge Classes
        function getTaskStatusBadgeClass(status) {
            switch (status) {
                case 'done': return 'bg-light-done';
                case 'review': return 'bg-light-review';
                case 'in-progress': return 'bg-light-in-progress';
                default: return 'bg-light-todo';
            }
        }

        // Priority Badge Classes
        function getPriorityBadgeClass(priority) {
            switch (priority) {
                case 'high': return 'badge bg-danger';
                case 'medium': return 'badge bg-warning text-dark';
                case 'low': return 'badge bg-success';
                default: return 'badge bg-secondary';
            }
        }

        // Category Display Name Helper (with CSS class)
        function getCategoryDisplayInfo(category) {
            const categoryMap = {
                'frontend': { name: 'Frontend', cssClass: 'badge-category--frontend' },
                'backend': { name: 'Backend', cssClass: 'badge-category--backend' },
                'database': { name: 'Veritabanı', cssClass: 'badge-category--database' },
                'testing': { name: 'Test & QA', cssClass: 'badge-category--testing' },
                'documentation': { name: 'Dokümantasyon', cssClass: 'badge-category--documentation' },
                'deployment': { name: 'Deploy & DevOps', cssClass: 'badge-category--deployment' },
                'design': { name: 'Tasarım', cssClass: 'badge-category--design' },
                'research': { name: 'Araştırma', cssClass: 'badge-category--research' }
            };
            return categoryMap[category] || { name: 'Genel', cssClass: '' };
        }

        // Category Count Helper
        function getCategoryCount(category) {
            if (category === 'all') return tasks.length;
            return tasks.filter(t => t.category === category).length;
        }

        // Sort Tasks by Selected Criteria
        function sortTasks(tasks, sortValue) {
            const priorityOrder = { high: 3, medium: 2, low: 1 };

            if (sortValue === 'status-priority-date') {
                // Öncelik & Durum sıralaması
                return tasks.sort((a, b) => {
                    // Önce status'a göre (done < review < in-progress < todo)
                    const statusOrder = { 'done': 0, 'review': 1, 'in-progress': 2, 'todo': 3 };
                    if (statusOrder[a.status] !== statusOrder[b.status]) {
                        return statusOrder[a.status] - statusOrder[b.status];
                    }
                    // Sonra önceliğe göre (high > medium > low)
                    return priorityOrder[b.priority] - priorityOrder[a.priority];
                });
            } else if (sortValue === 'date-descending') {
                // Son Tarih (En Yakın)
                return tasks.sort((a, b) => new Date(a.dueDate) - new Date(b.dueDate));
            } else if (sortValue === 'priority-descending') {
                // Yüksek Öncelikten
                return tasks.sort((a, b) => priorityOrder[b.priority] - priorityOrder[a.priority]);
            } else if (sortValue === 'due-date-ascending') {
                // Son Tarihe Göre
                return tasks.sort((a, b) => new Date(a.dueDate) - new Date(b.dueDate));
            }

            return tasks;
        }

        // Render Tasks List with Category Filtering and Sorting
        function renderTasks() {
            const sortValue = document.getElementById('taskSortSelect')?.value || 'status-priority-date';
            const sortedTasks = sortTasks(tasks, sortValue);

            if (sortedTasks.length === 0) {
                tasksEmptyState.style.display = 'block';
                addTaskBtn.classList.add('d-none');
                addTaskBtnTab.classList.add('d-none');
                addTaskBtnMobile.classList.remove('d-none');
            } else {
                tasksEmptyState.style.display = 'none';
                addTaskBtn.classList.remove('d-none');
                addTaskBtnTab.classList.remove('d-none');
                addTaskBtnMobile.classList.add('d-none');

                // Update category counts in tabs
                document.getElementById('count-all').textContent = sortedTasks.length;

                const allCategories = ['frontend', 'backend', 'design', 'database', 'testing', 'deployment'];
                allCategories.forEach(cat => {
                    const countEl = document.getElementById(`count-${cat}`);
                    if (countEl) {
                        countEl.textContent = sortedTasks.filter(t => t.category === cat).length;
                    }
                });

                // Update category group counts
                document.getElementById('count-design-group').textContent =
                    sortedTasks.filter(t => t.category === 'design').length;
                document.getElementById('count-database-group').textContent =
                    sortedTasks.filter(t => t.category === 'database').length;
                document.getElementById('count-documentation-group').textContent =
                    sortedTasks.filter(t => t.category === 'documentation').length;
                document.getElementById('count-testing-group').textContent =
                    sortedTasks.filter(t => t.category === 'testing').length;
                document.getElementById('count-deployment-group').textContent =
                    sortedTasks.filter(t => t.category === 'deployment').length;

                // Group tasks by category and render
                const groupedTasks = {};

                // Map for existing categories in UI
                const uiCategories = {
                    'design': 'design',
                    'database': 'database',
                    'documentation': 'documentation',
                    'testing': 'testing',
                    'deployment': 'deployment'
                };

                sortedTasks.forEach(task => {
                    if (!groupedTasks[task.category]) {
                        groupedTasks[task.category] = [];
                    }
                    groupedTasks[task.category].push(task);
                });

                // Render each category group
                tasksList.innerHTML = Object.keys(groupedTasks).map(category => {
                    const categoryTasks = groupedTasks[category];

                    return `
                    <div class="task-group" data-category="${category}">
                        <div class="task-group-header">
                            <div class="task-group-title">
                                <span class="category-indicator"
                                    style="background-color: ${getCategoryColor(category)};"></span>
                                <i class="fa-solid fa-layer-group me-2"></i>${getCategoryDisplayName(category).toUpperCase()} Görevleri
                                <span id="count-${category}-group" class="task-group-count empty">${categoryTasks.length}</span>
                            </div>
                        </div>

                        ${categoryTasks.map(task => {
                        const categoryInfo = getCategoryDisplayInfo(task.category);
                        return `
                            <div class="task-item ${task.status === 'done' ? 'completed' : ''}"
                                data-id="${task.id}"
                                data-status="${task.status}"
                                data-priority="${task.priority}">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h6 class="mb-0 fw-bold text-dark task-title">${escapeHtml(task.title)}</h6>
                                    <span class="badge-task-status ${getTaskStatusBadgeClass(task.status)}">
                                        ${task.status.replace('-', ' ').toUpperCase()}
                                    </span>
                                </div>
                                <p class="small text-muted mb-2" style="line-height: 1.5;">${escapeHtml(task.description)}</p>

                                <div class="d-flex justify-content-between align-items-center small">
                                    <span class="text-muted"><i class="fa-solid fa-clock me-1"></i>Son Tarih: ${formatDate(task.dueDate)}</span>

                                    <div class="btn-group" role="group">
                                        <button type="button" class="action-btn" onclick="editTask(${task.id})" title="Düzenle">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                        <button type="button" class="action-btn" onclick="deleteTask(${task.id})" title="Sil">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>`;
                    }).join('')}

                        <!-- Task Progress Bar -->
                        <div class="task-progress-container">
                            <div class="progress-labels">
                                <span><strong>%65</strong> Tamamlanan Görevler</span>
                                <span><strong>%35</strong> Kalan Görevler</span>
                            </div>
                            <div class="progress-bar-custom-grouped">
                                <div class="progress-segment" style="width: 65%; background-color: ${getCategoryColor(category)};"></div>
                                <div class="progress-segment" style="width: 35%; background-color: #e5e7eb;"></div>
                            </div>
                        </div>
                    </div>`;
                }).join('');

                // Update task status badges in timeline
                updateTimelineStatus();
            }
        }

        // Render Files List
        function renderFiles() {
            if (files.length === 0) {
                filesEmptyState.style.display = 'block';
                addFileBtnTab.classList.add('d-none');
            } else {
                filesEmptyState.style.display = 'none';
                addFileBtnTab.classList.remove('d-none');

                filesList.innerHTML = files.map(file => `
                    <div class="file-attachment" data-id="${file.id}" data-type="${file.type}">
                        <div class="file-icon">
                            <i class="fa-solid fa-file-${file.type === 'pdf' ? 'pdf' : file.type === 'docx' ? 'word' : file.type === 'xlsx' ? 'excel' : file.type === 'pptx' ? 'powerpoint' : file.type === 'image' ? 'image-portrait' : 'archive'} ${file.type === 'pdf' ? 'text-danger' : file.type === 'docx' ? 'text-primary' : file.type === 'xlsx' ? 'text-success' : file.type === 'pptx' ? 'text-warning' : file.type === 'image' ? 'text-info' : 'text-secondary'}"></i>
                        </div>
                        <div style="flex: 1;">
                            <h6 class="mb-0 fw-bold text-dark">${escapeHtml(file.name)}</h6>
                            <p class="small text-muted mb-0">${file.size}</p>
                        </div>
                        <span class="badge bg-light-info" style="background-color: #e0f2fe; color: #075985;">${file.type.toUpperCase()}</span>
                    </div>
                `).join('');
            }
        }

        // Update Timeline Status
        function updateTimelineStatus() {
            const timelineItems = document.querySelectorAll('.timeline-item');
            tasks.forEach(task => {
                const item = Array.from(timelineItems).find(item =>
                    item.querySelector('h6').textContent.includes(task.title.split('(')[0].trim())
                );
                if (item) {
                    // Update status class and dot color
                    const statusClass = item.getAttribute('data-status');
                    let dotColor = 'var(--brand-primary)';

                    switch (statusClass) {
                        case 'completed': dotColor = '#166534'; break;
                        case 'in-progress': dotColor = '#075985'; break;
                        case 'review': dotColor = '#854d0e'; break;
                    }

                    const dot = item.querySelector('.timeline-dot');
                    if (dot) {
                        dot.style.backgroundColor = dotColor;
                    }
                }
            });
        }

        // Format Date
        function formatDate(dateStr) {
            const date = new Date(dateStr);
            return date.toLocaleDateString('tr-TR', { day: '2-digit', month: 'short', year: 'numeric' });
        }

        // Escape HTML
        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        // Add New Task
        function addTask() {
            const title = document.getElementById('taskTitle').value.trim();
            const status = document.getElementById('taskStatus').value;
            const priority = document.getElementById('taskPriority').value;
            const category = document.getElementById('taskCategory').value;
            const description = document.getElementById('taskDescription').value.trim();
            const dueDate = document.getElementById('taskDueDate').value;

            if (!title || !dueDate || !category) {
                alert('Lütfen zorunlu alanları doldurun!');
                return;
            }

            tasks.push({
                id: Date.now(),
                title,
                status,
                priority,
                category,
                description,
                dueDate,
                assignee: null
            });

            // Reset form and close modal
            document.getElementById('addTaskForm').reset();
            addTaskModal.hide();
            renderTasks();
        }

        // Edit Task
        function editTask(id) {
            const task = tasks.find(t => t.id === id);
            if (!task) return;

            document.getElementById('editTaskId').value = task.id;
            document.getElementById('editTaskTitle').value = task.title;
            document.getElementById('editTaskStatus').value = task.status;
            document.getElementById('editTaskPriority').value = task.priority;
            document.getElementById('editTaskCategory').value = task.category;
            document.getElementById('editTaskDescription').value = task.description;
            document.getElementById('editTaskDueDate').value = task.dueDate;

            editTaskModal.show();
        }

        // Delete Task
        function deleteTask(id) {
            const task = tasks.find(t => t.id === id);
            if (!task) return;

            document.getElementById('deleteTaskTitle').textContent = task.title;
            deleteTaskModal.show();
        }

        // Confirm Delete Task
        document.getElementById('confirmDeleteTaskBtn').addEventListener('click', () => {
            const taskId = parseInt(document.getElementById('deleteTaskTitle').dataset.id || 0);
            tasks = tasks.filter(t => t.id !== taskId);
            deleteTaskModal.hide();
            renderTasks();
        });

        // Add New File
        function addFile() {
            const name = document.getElementById('fileName').value.trim();
            const type = document.getElementById('fileType').value;
            const publicFlag = document.getElementById('filePublicCheck').checked;

            if (!name) {
                alert('Lütfen dosya adını girin!');
                return;
            }

            files.push({
                id: Date.now(),
                name,
                type,
                size: '1.5 MB', // Default size
                public: publicFlag
            });

            // Reset form and close modal
            document.getElementById('addFileForm').reset();
            addFileModal.hide();
            renderFiles();
        }

        // Event Listeners
        document.getElementById('addTaskForm').addEventListener('submit', (e) => {
            e.preventDefault();
            addTask();
        });

        document.getElementById('editTaskForm').addEventListener('submit', (e) => {
            e.preventDefault();

            const id = parseInt(document.getElementById('editTaskId').value);
            const taskIndex = tasks.findIndex(t => t.id === id);

            if (taskIndex !== -1) {
                tasks[taskIndex].title = document.getElementById('editTaskTitle').value.trim();
                tasks[taskIndex].status = document.getElementById('editTaskStatus').value;
                tasks[taskIndex].priority = document.getElementById('editTaskPriority').value;
                tasks[taskIndex].description = document.getElementById('editTaskDescription').value.trim();
                tasks[taskIndex].dueDate = document.getElementById('editTaskDueDate').value;

                editTaskModal.hide();
                renderTasks();
            }
        });

        addTaskBtn.addEventListener('click', () => {
            addTaskModal.show();
        });

        addTaskBtnTab.addEventListener('click', () => {
            addTaskModal.show();
        });

        addTaskBtnMobile.addEventListener('click', () => {
            addTaskModal.show();
        });

        addFileBtnTab.addEventListener('click', () => {
            addFileModal.show();
        });

        document.getElementById('addFileForm').addEventListener('submit', (e) => {
            e.preventDefault();
            addFile();
        });

        // Category Display Name Helper
        function getCategoryDisplayName(category) {
            const categoryMap = {
                'design': 'Tasarım',
                'database': 'Veritabanı',
                'documentation': 'Dokümantasyon',
                'testing': 'Test & QA',
                'deployment': 'Deploy & DevOps'
            };
            return categoryMap[category] || 'Genel';
        }

        // Category Color Helper (for progress bars and indicators)
        function getCategoryColor(category) {
            const colorMap = {
                'design': '#fae8ff',
                'database': '#dcfce7',
                'documentation': '#f3f4f6',
                'testing': '#fcd34d',
                'deployment': '#dbeafe'
            };
            return colorMap[category] || '#eff6ff';
        }

        // Category Tab Event Listeners
        const categoryTabs = document.querySelectorAll('.category-tab');
        categoryTabs.forEach(tab => {
            tab.addEventListener('click', function () {
                const selectedCategory = this.getAttribute('data-category');

                // Update active tab styling
                categoryTabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                // Filter tasks by category
                if (selectedCategory === 'all') {
                    renderTasks();
                } else {
                    const filteredTasks = tasks.filter(t => t.category === selectedCategory);

                    const sortValue = document.getElementById('taskSortSelect')?.value || 'status-priority-date';
                    const sortedFilteredTasks = sortTasks(filteredTasks, sortValue);

                    if (sortedFilteredTasks.length === 0) {
                        tasksEmptyState.style.display = 'block';
                        addTaskBtn.classList.add('d-none');
                        addTaskBtnTab.classList.add('d-none');
                        addTaskBtnMobile.classList.remove('d-none');
                    } else {
                        tasksEmptyState.style.display = 'none';
                        addTaskBtn.classList.remove('d-none');
                        addTaskBtnTab.classList.remove('d-none');
                        addTaskBtnMobile.classList.add('d-none');

                        // Update category group counts for filtered view
                        document.getElementById('count-design-group').textContent =
                            sortedFilteredTasks.filter(t => t.category === 'design').length;
                        document.getElementById('count-database-group').textContent =
                            sortedFilteredTasks.filter(t => t.category === 'database').length;
                        document.getElementById('count-documentation-group').textContent =
                            sortedFilteredTasks.filter(t => t.category === 'documentation').length;
                        document.getElementById('count-testing-group').textContent =
                            sortedFilteredTasks.filter(t => t.category === 'testing').length;
                        document.getElementById('count-deployment-group').textContent =
                            sortedFilteredTasks.filter(t => t.category === 'deployment').length;

                        // Group tasks by category and render (even if filtered, keep same structure)
                        const groupedTasks = {};

                        sortedFilteredTasks.forEach(task => {
                            if (!groupedTasks[task.category]) {
                                groupedTasks[task.category] = [];
                            }
                            groupedTasks[task.category].push(task);
                        });

                        tasksList.innerHTML = Object.keys(groupedTasks).map(category => {
                            const categoryTasks = groupedTasks[category];

                            return `
                            <div class="task-group" data-category="${category}">
                                <div class="task-group-header">
                                    <div class="task-group-title">
                                        <span class="category-indicator"
                                            style="background-color: ${getCategoryColor(category)};"></span>
                                        <i class="fa-solid fa-layer-group me-2"></i>${getCategoryDisplayName(category).toUpperCase()} Görevleri
                                        <span id="count-${category}-group" class="task-group-count empty">${categoryTasks.length}</span>
                                    </div>
                                </div>

                                ${categoryTasks.map(task => {
                                const categoryInfo = getCategoryDisplayInfo(task.category);
                                return `
                                    <div class="task-item ${task.status === 'done' ? 'completed' : ''}"
                                        data-id="${task.id}"
                                        data-status="${task.status}"
                                        data-priority="${task.priority}">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h6 class="mb-0 fw-bold text-dark task-title">${escapeHtml(task.title)}</h6>
                                            <span class="badge-task-status ${getTaskStatusBadgeClass(task.status)}">
                                                ${task.status.replace('-', ' ').toUpperCase()}
                                            </span>
                                        </div>
                                        <p class="small text-muted mb-2" style="line-height: 1.5;">${escapeHtml(task.description)}</p>

                                        <div class="d-flex justify-content-between align-items-center small">
                                            <span class="text-muted"><i class="fa-solid fa-clock me-1"></i>Son Tarih: ${formatDate(task.dueDate)}</span>

                                            <div class="btn-group" role="group">
                                                <button type="button" class="action-btn" onclick="editTask(${task.id})" title="Düzenle">
                                                    <i class="fa-solid fa-pen"></i>
                                                </button>
                                                <button type="button" class="action-btn" onclick="deleteTask(${task.id})" title="Sil">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Category Badge -->
                                        <span class="badge-category ${categoryInfo.cssClass || ''}">${escapeHtml(categoryInfo.name)}</span>
                                    </div>`;
                            }).join('')}

                                <!-- Task Progress Bar -->
                                <div class="task-progress-container">
                                    <div class="progress-labels">
                                        <span><strong>%65</strong> Tamamlanan Görevler</span>
                                        <span><strong>%35</strong> Kalan Görevler</span>
                                    </div>
                                    <div class="progress-bar-custom-grouped">
                                        <div class="progress-segment" style="width: 65%; background-color: ${getCategoryColor(category)};"></div>
                                        <div class="progress-segment" style="width: 35%; background-color: #e5e7eb;"></div>
                                    </div>
                                </div>
                            </div>`;
                        }).join('');
                    }
                }

                // Update active tab styling for category tabs
                categoryTabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Sort Select Event Listener
        const sortSelect = document.getElementById('taskSortSelect');
        if (sortSelect) {
            sortSelect.addEventListener('change', function () {
                renderTasks();
            });
        }

        // Initial Render
        renderTasks();
        renderFiles();
    </script>


@include('layouts.footer')
