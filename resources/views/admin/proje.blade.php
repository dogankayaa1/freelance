
    @include('layouts.nav')
    <!-- Modals -->
    <div class="modal fade" id="addProjectModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Yeni Proje Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addProjectForm">
                        <div class="mb-3">
                            <label for="projectName" class="form-label">Proje Adı</label>
                            <input type="text" class="form-control form-control-lg" id="projectName"
                                placeholder="Örn: E-Ticaret Platformu" required>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="clientSelect" class="form-label">Müşteri</label>
                                <select class="form-select form-control-lg" id="clientSelect" required>
                                    <option value="">Seçiniz...</option>
                                    <option value="1">ABC Şirketi</option>
                                    <option value="2">XYZ Ltd.</option>
                                    <option value="3">Müşteri 3</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="projectStatus" class="form-label">Durum</label>
                                <select class="form-select form-control-lg" id="projectStatus" required>
                                    <option value="planning">Planlama</option>
                                    <option value="in-progress">Devam Eden</option>
                                    <option value="completed">Tamamlanmış</option>
                                    <option value="on-hold">Beklemede</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="projectDescription" class="form-label">Açıklama</label>
                            <textarea class="form-control form-control-lg" id="projectDescription" rows="3"
                                placeholder="Proje detaylarını buraya yazın..."></textarea>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="startDate" class="form-label">Başlangıç Tarihi</label>
                                <input type="date" class="form-control form-control-lg" id="startDate" required>
                            </div>
                            <div class="col-md-6">
                                <label for="endDate" class="form-label">Bitiş Tarihi</label>
                                <input type="date" class="form-control form-control-lg" id="endDate" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="projectBudget" class="form-label">Bütçe (₺)</label>
                            <input type="number" class="form-control form-control-lg" id="projectBudget"
                                placeholder="0.00" min="0" step="100">
                        </div>

                        <div class="mb-3">
                            <label for="prioritySelect" class="form-label">Öncelik</label>
                            <select class="form-select form-control-lg" id="prioritySelect" required>
                                <option value="high">Yüksek</option>
                                <option value="medium">Orta</option>
                                <option value="low">Düşük</option>
                            </select>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="notifyCheck">
                            <label for="notifyCheck" class="form-check-label">Tamamlanma Bildirimi Gönder</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-secondary-custom" data-bs-dismiss="modal">İptal</button>
                    <button type="submit" form="addProjectForm" class="btn-primary-custom">Kaydet</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Project Modal -->
    <div class="modal fade" id="editProjectModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Projeyi Düzenle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editProjectForm">
                        <input type="hidden" id="editProjectId">

                        <div class="mb-3">
                            <label for="editProjectName" class="form-label">Proje Adı</label>
                            <input type="text" class="form-control form-control-lg" id="editProjectName" required>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="editClientSelect" class="form-label">Müşteri</label>
                                <select class="form-select form-control-lg" id="editClientSelect" required>
                                    <option value="">Seçiniz...</option>
                                    <option value="1">ABC Şirketi</option>
                                    <option value="2">XYZ Ltd.</option>
                                    <option value="3">Müşteri 3</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="editProjectStatus" class="form-label">Durum</label>
                                <select class="form-select form-control-lg" id="editProjectStatus" required>
                                    <option value="planning">Planlama</option>
                                    <option value="in-progress">Devam Eden</option>
                                    <option value="completed">Tamamlanmış</option>
                                    <option value="on-hold">Beklemede</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="editProjectDescription" class="form-label">Açıklama</label>
                            <textarea class="form-control form-control-lg" id="editProjectDescription"
                                rows="3"></textarea>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="editStartDate" class="form-label">Başlangıç Tarihi</label>
                                <input type="date" class="form-control form-control-lg" id="editStartDate">
                            </div>
                            <div class="col-md-6">
                                <label for="editEndDate" class="form-label">Bitiş Tarihi</label>
                                <input type="date" class="form-control form-control-lg" id="editEndDate">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="editProjectBudget" class="form-label">Bütçe (₺)</label>
                            <input type="number" class="form-control form-control-lg" id="editProjectBudget" min="0"
                                step="100">
                        </div>

                        <div class="mb-3">
                            <label for="editPrioritySelect" class="form-label">Öncelik</label>
                            <select class="form-select form-control-lg" id="editPrioritySelect" required>
                                <option value="high">Yüksek</option>
                                <option value="medium">Orta</option>
                                <option value="low">Düşük</option>
                            </select>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="editNotifyCheck">
                            <label for="editNotifyCheck" class="form-check-label">Tamamlanma Bildirimi Gönder</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-secondary-custom" data-bs-dismiss="modal">İptal</button>
                    <button type="submit" form="editProjectForm" class="btn-primary-custom">Güncelle</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmModal" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Projeyi Sil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p id="deleteProjectName" class="fw-bold mb-3"></p>
                    <p class="text-muted small">Bu projeyi silmek istediğinizden emin misiniz?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-secondary-custom" data-bs-dismiss="modal">İptal</button>
                    <button type="button" id="confirmDeleteBtn" class="btn-danger-custom">Sil</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Main Content -->
    <div class="main-content">
        <h2 class="mb-4 fw-bold" style="font-size: 1.5rem;">Proje Yönetimi</h2>

        <!-- Stats Cards -->
        <div class="row mb-4 g-3">
            <div class="col-md-3 col-sm-6">
                <div class="card-clean">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="stat-label">Toplam Proje</span>
                        <i class="fa-solid fa-folder text-primary" style="font-size: 1.5rem;"></i>
                    </div>
                    <p class="mb-0 fw-bold fs-4" id="totalProjects">0</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card-clean">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="stat-label">Devam Eden</span>
                        <i class="fa-solid fa-spinner text-primary" style="font-size: 1.5rem;"></i>
                    </div>
                    <p class="mb-0 fw-bold fs-4" id="activeProjects">0</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card-clean">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="stat-label">Tamamlanan</span>
                        <i class="fa-solid fa-check-circle text-primary" style="font-size: 1.5rem;"></i>
                    </div>
                    <p class="mb-0 fw-bold fs-4" id="completedProjects">0</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card-clean">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="stat-label">Bekleyen</span>
                        <i class="fa-solid fa-clock text-primary" style="font-size: 1.5rem;"></i>
                    </div>
                    <p class="mb-0 fw-bold fs-4" id="pendingProjects">0</p>
                </div>
            </div>
        </div>

        <!-- Filter Bar -->
        <div class="filter-bar">
            <div class="row g-3 align-items-end">
                <div class="col-md-4">
                    <label class="form-label small">Durum Filtresi</label>
                    <select class="form-select" id="statusFilter">
                        <option value="">Tümü</option>
                        <option value="planning">Planlama</option>
                        <option value="in-progress">Devam Eden</option>
                        <option value="completed">Tamamlanmış</option>
                        <option value="on-hold">Beklemede</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label small">Öncelik Filtresi</label>
                    <select class="form-select" id="priorityFilter">
                        <option value="">Tümü</option>
                        <option value="high">Yüksek</option>
                        <option value="medium">Orta</option>
                        <option value="low">Düşük</option>
                    </select>
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="button" id="applyFiltersBtn" class="btn-primary-custom w-100">Filtre Uygula</button>
                </div>
            </div>
        </div>

        <!-- Projects Table -->
        <div class="card-clean p-3">
            <div class="table-responsive">
                <table class="table table-minimal mb-0" id="projectsTable">
                    <thead>
                        <tr>
                            <th style="width: 50px;">İşlem</th>
                            <th>Proje Adı</th>
                            <th>Müşteri</th>
                            <th>Durum</th>
                            <th>Öncelik</th>
                            <th>Başlangıç</th>
                            <th>Bitiş</th>
                            <th style="width: 120px;">Bütçe</th>
                        </tr>
                    </thead>
                    <tbody id="projectsTableBody">
                        <!-- Projects will be dynamically loaded here -->
                    </tbody>
                </table>

                <!-- Empty State (shown when no projects) -->
                <div class="empty-state" id="emptyState" style="display: none;">
                    <i class="fa-solid fa-folder-open"></i>
                    <h5 class="fw-bold">Henüz Proje Yok</h5>
                    <p class="small mb-3">İlk projenizi eklemek için "Yeni Proje Ekle" butonuna tıklayın.</p>
                    <button type="button" id="addProjectBtnEmpty" class="btn-primary-custom">Yeni Proje Ekle</button>
                </div>
            </div>
        </div>

        <!-- Add Project Button (fixed bottom-right on mobile) -->
        <button type="button" id="addProjectBtn" class="btn-primary-custom float-end mt-3 d-none">
            <i class="fa-solid fa-plus me-2"></i>Yeni Proje Ekle
        </button>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Sample project data (in production, this would come from a backend)
        let projects = [
            { id: 1, name: "E-Ticaret Platformu", client: "ABC Şirketi", status: "in-progress", priority: "high", startDate: "2026-07-15", endDate: "2026-09-30", budget: 150000, description: "Modern e-ticaret sitesi geliştirilmesi" },
            { id: 2, name: "Mobil Uygulama Tasarımı", client: "XYZ Ltd.", status: "planning", priority: "medium", startDate: "2026-08-01", endDate: "2026-10-15", budget: 75000, description: "iOS ve Android için mobil uygulama tasarımı" },
            { id: 3, name: "Kurumsal Web Sitesi", client: "Müşteri 3", status: "completed", priority: "low", startDate: "2026-06-01", endDate: "2026-07-01", budget: 45000, description: "Kurumsal kimlik ve web sitesi yenileme" }
        ];

        // Initialize Bootstrap Modals
        const addProjectModal = new bootstrap.Modal(document.getElementById('addProjectModal'));
        const editProjectModal = new bootstrap.Modal(document.getElementById('editProjectModal'));
        const deleteConfirmModal = new bootstrap.Modal(document.getElementById('deleteConfirmModal'));

        // DOM Elements
        const projectsTableBody = document.getElementById('projectsTableBody');
        const emptyState = document.getElementById('emptyState');
        const addProjectBtn = document.getElementById('addProjectBtn');
        const addProjectBtnEmpty = document.getElementById('addProjectBtnEmpty');
        const statusFilter = document.getElementById('statusFilter');
        const priorityFilter = document.getElementById('priorityFilter');
        const applyFiltersBtn = document.getElementById('applyFiltersBtn');

        // Status Badge Classes
        function getStatusBadgeClass(status) {
            switch (status) {
                case 'completed': return 'bg-light-success';
                case 'in-progress': return 'bg-light-info';
                case 'on-hold': return 'bg-light-warning';
                default: return 'bg-light-info';
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

        // Render Projects Table
        function renderProjects(projectsToRender = projects) {
            const filteredProjects = applyFilters() ? filterProjects() : projectsToRender;

            if (filteredProjects.length === 0) {
                emptyState.style.display = 'block';
                addProjectBtn.classList.add('d-none');
                addProjectBtnEmpty.classList.remove('d-none');
            } else {
                emptyState.style.display = 'none';
                addProjectBtn.classList.remove('d-none');
                addProjectBtnEmpty.classList.add('d-none');

                projectsTableBody.innerHTML = filteredProjects.map(project => `
                    <tr>
                        <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="action-btn" onclick="editProject(${project.id})" title="Düzenle">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button type="button" class="action-btn" onclick="deleteProject(${project.id})" title="Sil">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                        <td>
                            <strong>${escapeHtml(project.name)}</strong><br>
                            <small class="text-muted">${escapeHtml(project.description)}</small>
                        </td>
                        <td>${escapeHtml(project.client)}</td>
                        <td><span class="badge-status ${getStatusBadgeClass(project.status)}">${project.status.replace('-', ' ').toUpperCase()}</span></td>
                        <td><span class="${getPriorityBadgeClass(project.priority)}">${project.priority.toUpperCase()}</span></td>
                        <td>${formatDate(project.startDate)}</td>
                        <td>${formatDate(project.endDate)}</td>
                        <td>₺${parseInt(project.budget).toLocaleString('tr-TR')}</td>
                    </tr>
                `).join('');

                // Update stats
                updateStats();
            }
        }

        // Apply Filters
        function applyFilters() {
            const status = statusFilter.value;
            const priority = priorityFilter.value;
            return status || priority;
        }

        // Filter Projects
        function filterProjects() {
            let filtered = [...projects];

            if (statusFilter.value) {
                filtered = filtered.filter(p => p.status === statusFilter.value);
            }

            if (priorityFilter.value) {
                filtered = filtered.filter(p => p.priority === priorityFilter.value);
            }

            return filtered;
        }

        // Update Stats
        function updateStats() {
            document.getElementById('totalProjects').textContent = projects.length.toLocaleString('tr-TR');
            document.getElementById('activeProjects').textContent = projects.filter(p => p.status === 'in-progress').length.toLocaleString('tr-TR');
            document.getElementById('completedProjects').textContent = projects.filter(p => p.status === 'completed').length.toLocaleString('tr-TR');
            document.getElementById('pendingProjects').textContent = projects.filter(p => p.status === 'on-hold' || p.status === 'planning').length.toLocaleString('tr-TR');
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

        // Add New Project
        function addProject() {
            const name = document.getElementById('projectName').value.trim();
            const client = document.getElementById('clientSelect').value;
            const status = document.getElementById('projectStatus').value;
            const description = document.getElementById('projectDescription').value.trim();
            const startDate = document.getElementById('startDate').value;
            const endDate = document.getElementById('endDate').value;
            const budget = parseInt(document.getElementById('projectBudget').value) || 0;
            const priority = document.getElementById('prioritySelect').value;

            if (!name || !client || !startDate || !endDate) {
                alert('Lütfen zorunlu alanları doldurun!');
                return;
            }

            projects.push({
                id: Date.now(),
                name,
                client,
                status,
                description,
                startDate,
                endDate,
                budget,
                priority
            });

            // Reset form and close modal
            document.getElementById('addProjectForm').reset();
            addProjectModal.hide();
            renderProjects();
        }

        // Edit Project
        function editProject(id) {
            const project = projects.find(p => p.id === id);
            if (!project) return;

            document.getElementById('editProjectId').value = project.id;
            document.getElementById('editProjectName').value = project.name;
            document.getElementById('editClientSelect').value = project.client.split(' ')[0] === 'ABC' ? '1' :
                project.client.split(' ')[0] === 'XYZ' ? '2' : '3';
            document.getElementById('editProjectStatus').value = project.status;
            document.getElementById('editProjectDescription').value = project.description;
            document.getElementById('editStartDate').value = project.startDate;
            document.getElementById('editEndDate').value = project.endDate;
            document.getElementById('editProjectBudget').value = project.budget;
            document.getElementById('editPrioritySelect').value = project.priority;

            editProjectModal.show();
        }

        // Delete Project
        function deleteProject(id) {
            const project = projects.find(p => p.id === id);
            if (!project) return;

            document.getElementById('deleteProjectName').textContent = project.name;
            deleteConfirmModal.show();
        }

        // Confirm Delete
        document.getElementById('confirmDeleteBtn').addEventListener('click', () => {
            const projectId = parseInt(document.getElementById('deleteProjectName').dataset.id || 0);
            projects = projects.filter(p => p.id !== projectId);
            deleteConfirmModal.hide();
            renderProjects();
        });

        // Event Listeners
        document.getElementById('addProjectForm').addEventListener('submit', (e) => {
            e.preventDefault();
            addProject();
        });

        document.getElementById('editProjectForm').addEventListener('submit', (e) => {
            e.preventDefault();

            const id = parseInt(document.getElementById('editProjectId').value);
            const projectIndex = projects.findIndex(p => p.id === id);

            if (projectIndex !== -1) {
                projects[projectIndex].name = document.getElementById('editProjectName').value.trim();
                projects[projectIndex].client = document.getElementById('editClientSelect').options[document.getElementById('editClientSelect').selectedIndex].text;
                projects[projectIndex].status = document.getElementById('editProjectStatus').value;
                projects[projectIndex].description = document.getElementById('editProjectDescription').value.trim();
                projects[projectIndex].startDate = document.getElementById('editStartDate').value;
                projects[projectIndex].endDate = document.getElementById('editEndDate').value;
                projects[projectIndex].budget = parseInt(document.getElementById('editProjectBudget').value) || 0;
                projects[projectIndex].priority = document.getElementById('editPrioritySelect').value;

                editProjectModal.hide();
                renderProjects();
            }
        });

        statusFilter.addEventListener('change', () => {
            applyFiltersBtn.click();
        });

        priorityFilter.addEventListener('change', () => {
            applyFiltersBtn.click();
        });

        applyFiltersBtn.addEventListener('click', () => {
            renderProjects();
        });

        addProjectBtn.addEventListener('click', () => {
            addProjectModal.show();
        });

        addProjectBtnEmpty.addEventListener('click', () => {
            addProjectModal.show();
        });

        // Initial Render
        renderProjects();
    </script>
    @include('layouts.footer')
