@include('layouts.nav')
  

    <!-- Main Content -->
    <main class="main-content">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">Müşteriler</h2>
                <p class="text-muted mb-0">Müşteri listesi ve detayları</p>
            </div>
            <button class="btn btn-premium" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
                <i class="fa-solid fa-plus me-2"></i> Yeni Müşteri Ekle
            </button>
        </div>

        <!-- Stats Cards -->
        <div class="bento-grid">
            <div class="col-span-3">
                <div class="bento-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="stat-label mb-1">Toplam Müşteri</p>
                            <h4 class="mb-0 fw-bold text-dark">24</h4>
                        </div>
                        <div class="bg-light-info rounded p-3">
                            <i class="fa-solid fa-users fa-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-3">
                <div class="bento-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="stat-label mb-1">Aktif Müşteriler</p>
                            <h4 class="mb-0 fw-bold text-dark">22</h4>
                        </div>
                        <div class="bg-light-success rounded p-3">
                            <i class="fa-solid fa-check-circle fa-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-3">
                <div class="bento-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="stat-label mb-1">Yeni Müşteriler</p>
                            <h4 class="mb-0 fw-bold text-dark">5</h4>
                        </div>
                        <div class="bg-light-warning rounded p-3">
                            <i class="fa-solid fa-user-plus fa-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-3">
                <div class="bento-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="stat-label mb-1">Toplam Gelir</p>
                            <h4 class="mb-0 fw-bold text-dark">₺125K</h4>
                        </div>
                        <div class="bg-light-info rounded p-3">
                            <i class="fa-solid fa-sack-dollar fa-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search & Filter -->
        <div class="bento-card mb-4">
            <div class="bento-grid align-items-center">
                <div class="col-span-6">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i
                                class="fa-solid fa-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0" placeholder="Müşteri ara...">
                    </div>
                </div>
                <div class="col-span-3">
                    <select class="form-select" aria-label="Durum Filtresi">
                        <option value="">Tüm Durumlar</option>
                        <option value="active">Aktif</option>
                        <option value="pending">Beklemede</option>
                        <option value="inactive">Pasif</option>
                    </select>
                </div>
                <div class="col-span-3">
                    <button class="btn btn-premium w-100"><i
                            class="fa-solid fa-filter me-2"></i>Filtrele</button>
                </div>
            </div>
        </div>

        <!-- Customers Table -->
        <div class="bento-card">
            <div class="table-responsive">
                <table class="table table mb-0" id="customersTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Müşteri Adı</th>
                            <th>Email</th>
                            <th>Tel</th>
                            <th>Durum</th>
                            <th>Giriş Tarihi</th>
                            <th>Aksiyonlar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-id="1024">
                            <td>#1024</td>
                            <td><strong>Ahmet Yılmaz</strong></td>
                            <td>ahmet.yilmaz@email.com</td>
                            <td>+90 532 123 4567</td>
                            <td><span class="badge-glass">Aktif</span></td>
                            <td>12/05/2024</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewCustomerModal" title="Görüntüle"><i
                                            class="fa-solid fa-eye"></i></button>
                                    <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editCustomerModal" title="Düzenle"><i
                                            class="fa-solid fa-pen"></i></button>
                                    <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal" title="Sil"><i
                                            class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="1025">
                            <td>#1025</td>
                            <td><strong>Ayşe Demir</strong></td>
                            <td>ayse.demir@email.com</td>
                            <td>+90 534 765 4321</td>
                            <td><span class="badge-glass">Aktif</span></td>
                            <td>15/05/2024</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary"><i
                                            class="fa-solid fa-eye"></i></button>
                                    <button class="btn btn-sm btn-outline-secondary"><i
                                            class="fa-solid fa-pen"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i
                                            class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="1026">
                            <td>#1026</td>
                            <td><strong>Mehmet Kaya</strong></td>
                            <td>mehmet.kaya@email.com</td>
                            <td>+90 538 987 6543</td>
                            <td><span class="badge-glass">Beklemede</span></td>
                            <td>18/05/2024</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary"><i
                                            class="fa-solid fa-eye"></i></button>
                                    <button class="btn btn-sm btn-outline-secondary"><i
                                            class="fa-solid fa-pen"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i
                                            class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr data-id="1027">
                            <td>#1027</td>
                            <td><strong>Fatma Şahin</strong></td>
                            <td>fatma.sahin@email.com</td>
                            <td>+90 536 456 7890</td>
                            <td><span class="badge-glass">Aktif</span></td>
                            <td>20/05/2024</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary"><i
                                            class="fa-solid fa-eye"></i></button>
                                    <button class="btn btn-sm btn-outline-secondary"><i
                                            class="fa-solid fa-pen"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i
                                            class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <nav aria-label="Müşteri Sayfalama" class="mt-3">
                <ul class="pagination pagination-sm mb-0 justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link border text-muted" href="#"><i class="fa-solid fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link bg-primary text-white" href="#">1</a></li>
                    <li class="page-item">
                        <a class="page-link border text-muted" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link border text-muted" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link border text-muted" href="#"><i class="fa-solid fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>

    <!-- Add Customer Modal -->
    <div class="modal fade" id="addCustomerModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Yeni Müşteri Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="addCustomerForm">
                        <div class="bento-grid mb-3">
                            <div class="col-span-6">
                                <label for="firstName" class="form-label">Ad</label>
                                <input type="text" class="form-control" id="firstName" required>
                            </div>
                            <div class="col-span-6">
                                <label for="lastName" class="form-label">Soyad</label>
                                <input type="text" class="form-control" id="lastName" required>
                            </div>
                        </div>
                        <div class="bento-grid mb-3">
                            <div class="col-span-8">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-span-4">
                                <label for="phone" class="form-label">Telefon</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>
                        </div>
                        <div class="bento-grid mb-3">
                            <div class="col-span-12">
                                <label for="company" class="form-label">Şirket
                                    (Opsiyonel)</label>
                                <input type="text" class="form-control" id="company">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">İptal</button>
                    <button type="submit" form="addCustomerForm" class="btn btn-premium">Kaydet</button>
                </div>
            </div>
        </div>
    </div>

    <!-- View Customer Modal -->
    <div class="modal fade" id="viewCustomerModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Müşteri Detayları</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <div id="customerDetailsContent">
                        <!-- Dynamic content will be loaded here -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Kapat</button>
                    <button type="button" class="btn btn-premium">Kaydet Değişiklikler</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Customer Modal -->
    <div class="modal fade" id="editCustomerModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Müşteri Düzenle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="editCustomerForm">
                        <input type="hidden" id="editCustomerId">
                        <div class="bento-grid mb-3">
                            <div class="col-span-6">
                                <label for="editFirstName" class="form-label">Ad</label>
                                <input type="text" class="form-control" id="editFirstName" required>
                            </div>
                            <div class="col-span-6">
                                <label for="editLastName" class="form-label">Soyad</label>
                                <input type="text" class="form-control" id="editLastName" required>
                            </div>
                        </div>
                        <div class="bento-grid mb-3">
                            <div class="col-span-8">
                                <label for="editEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="editEmail" required>
                            </div>
                            <div class="col-span-4">
                                <label for="editPhone" class="form-label">Telefon</label>
                                <input type="tel" class="form-control" id="editPhone">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">İptal</button>
                    <button type="submit" form="editCustomerForm" class="btn btn-premium">Güncelle</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmModal" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Sil Onayı</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4 text-center">
                    <i class="fa-solid fa-triangle-exclamation fa-3x text-warning mb-3"></i>
                    <p class="text-muted small">Bu müşteriyi silmek istediğinizden emin misiniz?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">İptal</button>
                    <button type="button" id="confirmDeleteBtn" class="btn btn-danger" data-bs-dismiss="modal">Sil</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3 z-index-10" id="toastContainer"></div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Add Customer Form Submit
            const addCustomerForm = document.getElementById('addCustomerForm');
            if (addCustomerForm) {
                /*
                addCustomerForm.addEventListener('submit', function (e) {
                    e.preventDefault();

                    // Show success toast
                    showToast('Müşteri başarıyla eklendi!', 'success');

                    // Reset form and close modal
                    addCustomerForm.reset();
                    const modal = bootstrap.Modal.getInstance(document.getElementById('addCustomerModal'));
                    if (modal) modal.hide();
                });
                */
            }

            // Edit Customer Form Submit
            const editCustomerForm = document.getElementById('editCustomerForm');
            if (editCustomerForm) {
                /*
                editCustomerForm.addEventListener('submit', function (e) {
                    e.preventDefault();

                    // Show success toast
                    showToast('Müşteri başarıyla güncellendi!', 'success');

                    // Reset form and close modal
                    editCustomerForm.reset();
                    const modal = bootstrap.Modal.getInstance(document.getElementById('editCustomerModal'));
                    if (modal) modal.hide();
                });
                */
            }

            // View Customer Modal - Load sample data
            document.querySelectorAll('.btn-outline-primary').forEach(btn => {
                btn.addEventListener('click', function (e) {
                    const row = this.closest('tr');
                    const nameCell = row.querySelector('td:nth-child(2) strong').textContent;
                    
                    document.getElementById('customerDetailsContent').innerHTML = `
                        <div class="row mb-3">
                            <div class="col-span-6">
                                <label class="form-label small text-muted fw-semibold">Ad Soyad</label>
                                <p class="mb-0 fw-bold">${nameCell}</p>
                            </div>
                            <div class="col-span-6">
                                <label class="form-label small text-muted fw-semibold">Durum</label>
                                <span class="badge-glass">${row.querySelector('td:nth-child(5)').textContent.trim()}</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted fw-semibold">Email</label>
                            <p class="mb-0">${row.querySelector('td:nth-child(3)').textContent}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted fw-semibold">Telefon</label>
                            <p class="mb-0">${row.querySelector('td:nth-child(4)').textContent}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted fw-semibold">Giriş Tarihi</label>
                            <p class="mb-0">${row.querySelector('td:nth-child(6)').textContent}</p>
                        </div>
                    `;
                });
            });

            // Edit Modal - Populate
            document.querySelectorAll('.btn-outline-secondary').forEach(btn => {
                btn.addEventListener('click', function (e) {
                    const row = this.closest('tr');
                    const nameCell = row.querySelector('td:nth-child(2) strong').textContent;
                    const parts = nameCell.split(' ');
                    document.getElementById('editFirstName').value = parts[0] || '';
                    document.getElementById('editLastName').value = parts.slice(1).join(' ') || '';
                    document.getElementById('editEmail').value = row.querySelector('td:nth-child(3)').textContent;
                    document.getElementById('editPhone').value = row.querySelector('td:nth-child(4)').textContent;
                });
            });

            // Delete Confirmation Modal Trigger
            document.querySelectorAll('.btn-outline-danger').forEach(btn => {
                btn.addEventListener('click', function (e) {
                    const row = this.closest('tr');
                    if (!row) return;

                    const idCell = row.querySelector('td:nth-child(1)').textContent.replace('#', '');
                    const confirmBtn = document.getElementById('confirmDeleteBtn');
                    if(confirmBtn) {
                        confirmBtn.dataset.customerId = idCell;
                    }
                });
            });

            // Confirm Delete
            document.getElementById('confirmDeleteBtn')?.addEventListener('click', function () {
                const customerId = this.dataset.customerId;

                showToast(`Müşteri #${customerId} başarıyla silindi!`, 'success');

                // Remove row from table
                const row = document.querySelector(`#customersTable tbody tr[data-id="${customerId}"]`);
                if (row) {
                    row.remove();

                    // If no rows left, show message
                    if (document.querySelectorAll('#customersTable tbody tr').length === 0) {
                        showToast('Liste boş!', 'info');
                    }
                }

                
            });

            // Toast Helper Function
            function showToast(message, type = 'success') {
                const container = document.getElementById('toastContainer');
                const toastClass = type === 'success' ? 'bg-success' :
                    type === 'info' ? 'bg-info' : 'bg-primary';

                const toastHtml = `
                    <div class="toast show ${toastClass} border-0" role="alert">
                        <div class="toast-header text-white">
                            <i class="fa-solid fa-circle-info me-2"></i>
                            <strong class="me-auto">${type.toUpperCase()}</strong>
                            <small>${new Date().toLocaleTimeString()}</small>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
                        </div>
                        <div class="toast-body text-white">
                            ${message}
                        </div>
                    </div>
                `;

                container.insertAdjacentHTML('beforeend', toastHtml);

                // Remove after 5 seconds
                setTimeout(() => {
                    const toast = container.lastElementChild;
                    const bsToast = bootstrap.Toast.getInstance(toast);
                    bsToast.hide();
                }, 5000);
            }

            // Close modal on outside click
            document.querySelectorAll('.modal').forEach(modalEl => {
                modalEl.addEventListener('click', function (e) {
                    if (e.target === this) {
                        const modal = bootstrap.Modal.getInstance(this);
                        if (modal) modal.hide();
                    }
                });
            });

            // Keyboard shortcuts
            document.addEventListener('keydown', function (e) {
                // Ctrl + K to focus search
                if (e.ctrlKey && e.key === 'k') {
                    e.preventDefault();
                    const searchInput = document.querySelector('#customersTable tbody');
                    if (searchInput) searchInput.focus();
                }
            });
        });
    </script>
@include('layouts.footer')
