@include('layouts.nav')


    <!-- Main Content -->
    <div class="main-content">

        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title">Ayarlar</h1>
            <p class="page-subtitle">Hesap, güvenlik ve tercihlerinizi yönetin.</p>

            <div class="action-buttons">
                <button class="btn btn-premium"><i class="fa-solid fa-download"></i> Rapor İndir</button>
                <button class="btn btn-secondary"
                    style="border: 1px solid var(--border-light); background-color: transparent; color: var(--text-dark); border-radius: 6px; padding: 0.5rem 1rem; font-weight: 500;"><i
                        class="fa-solid fa-filter"></i> Filtrele</button>
            </div>
        </div>

        <!-- Settings Tabs -->
        <div class="settings-tabs">
            <button class="tab-btn-settings active" onclick="showTab('profile')"><i class="fa-solid fa-user"></i> Profil
                & Hesap</button>
            <button class="tab-btn-settings" onclick="showTab('security')"><i class="fa-solid fa-shield-halved"></i>
                Güvenlik</button>
            <button class="tab-btn-settings" onclick="showTab('notifications')"><i class="fa-solid fa-bell"></i>
                Bildirimler</button>
            <button class="tab-btn-settings" onclick="showTab('preferences')"><i class="fa-solid fa-sliders"></i>
                Tercihler</button>
        </div>

        <!-- Profile Section -->
        <div id="profile" class="settings-section active">
            <div class="bento-card">
                <h3 style="font-size: 1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">Profil
                    Bilgileri</h3>

                <!-- Profile Header -->
                <div class="profile-header">
                    <div class="profile-avatar">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="profile-info">
                        <h2>Ahmet Yılmaz</h2>
                        <p class="profile-role">Senior PHP Developer</p>
                        <p class="profile-email">ahmet.yilmaz@bizdev.com</p>
                    </div>
                </div>

                <!-- Form -->
                <form>
                    <div class="two-column-form">
                        <div class="form-group-label">Ad Soyad</div>
                        <input type="text" class="form-control" value="Ahmet Yılmaz">

                        <div class="form-group-label">Telefon</div>
                        <input type="tel" class="form-control" value="+90 5XX XXX XX XX">

                        <div class="form-group-label">Şehir</div>
                        <input type="text" class="form-control" value="İstanbul">

                        <div class="form-group-label">Adres</div>
                        <textarea class="form-control" rows="3"
                            style="padding: 0.75rem 1rem; border: 1px solid var(--border-light); border-radius: 6px; font-size: 0.875rem; background-color: #f9fafb;">İstanbul, Kadıköy, Moda Mah.</textarea>
                    </div>

                    <div class="two-column-form" style="margin-top: 1.5rem;">
                        <div class="form-group-label">LinkedIn URL</div>
                        <input type="url" class="form-control" placeholder="https://linkedin.com/in/yourprofile">

                        <div class="form-group-label">Website</div>
                        <input type="url" class="form-control" value="https://www.yourwebsite.com">
                    </div>

                    <!-- Toggle Switches -->
                    <div style="margin-top: 2rem;">
                        <div class="toggle-switch">
                            <div class="toggle-label">
                                <strong>E-posta Doğrulama</strong>
                                <div class="toggle-description">E-postalarınızı doğrulamak için gelen e-postaları
                                    kontrol edin.</div>
                            </div>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                        </div>

                        <div class="toggle-switch">
                            <div class="toggle-label">
                                <strong>Karanlık Mod</strong>
                                <div class="toggle-description">Uygulama arayüzünü karanlık modda görüntüleyin.</div>
                            </div>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>

                        <div class="toggle-switch">
                            <div class="toggle-label">
                                <strong>İki Faktörlü Doğrulama</strong>
                                <div class="toggle-description">Ek güvenlik katmanı olarak 2FA'yı aktif edin.</div>
                            </div>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="action-buttons-save">
                        <button type="submit" class="btn btn-premium"><i class="fa-solid fa-check"></i>
                            Kaydet</button>
                        <button type="reset" class="btn btn-secondary"
                            style="border: 1px solid var(--border-light); background-color: transparent; color: var(--text-dark); border-radius: 6px; padding: 0.5rem 1rem; font-weight: 500;"><i
                                class="fa-solid fa-rotate-right"></i> Sıfırla</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Security Section -->
        <div id="security" class="settings-section">
            <div class="bento-card">
                <h3 style="font-size: 1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">Güvenlik
                    Ayarları</h3>

                <!-- Security Methods -->
                <div class="security-methods">
                    <div class="security-item">
                        <div class="security-info">
                            <div class="security-title"><i class="fa-solid fa-key"></i> Şifre Değiştir</div>
                            <div class="security-desc">Hesap şifrenizi güncelleyin ve daha güvenli hale getirin.</div>
                        </div>
                        <button class="btn btn-premium" style="padding: 0.5rem 1rem; font-size: 0.875rem;"><i
                                class="fa-solid fa-pen"></i></button>
                    </div>

                    <div class="security-item">
                        <div class="security-info">
                            <div class="security-title"><i class="fa-brands fa-google"></i> Google 2FA</div>
                            <div class="security-desc">Google Authenticator ile iki faktörlü doğrulamayı aktif edin.
                            </div>
                        </div>
                        <label class="switch" style="margin-left: 1rem;">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                    </div>

                    <div class="security-item">
                        <div class="security-info">
                            <div class="security-title"><i class="fa-brands fa-facebook"></i> Facebook 2FA</div>
                            <div class="security-desc">Facebook ile giriş yaparken iki faktörlü doğrulamayı kullanın.
                            </div>
                        </div>
                        <label class="switch" style="margin-left: 1rem;">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>

                    <div class="security-item">
                        <div class="security-info">
                            <div class="security-title"><i class="fa-brands fa-apple"></i> Apple 2FA</div>
                            <div class="security-desc">Apple ile giriş yaparken iki faktörlü doğrulamayı kullanın.</div>
                        </div>
                        <label class="switch" style="margin-left: 1rem;">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>

                    <div class="security-item">
                        <div class="security-info">
                            <div class="security-title"><i class="fa-solid fa-key"></i> Şifre Yedekleme</div>
                            <div class="security-desc">Tüm 2FA yedeklerini ve şifreleri güvenli bir yerde saklayın.
                            </div>
                        </div>
                        <button class="btn btn-premium" style="padding: 0.5rem 1rem; font-size: 0.875rem;"><i
                                class="fa-solid fa-download"></i></button>
                    </div>

                    <!-- Action Buttons -->
                    <div class="action-buttons-save">
                        <button type="submit" class="btn btn-premium"><i class="fa-solid fa-check"></i>
                            Kaydet</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notifications Section -->
        <div id="notifications" class="settings-section">
            <div class="bento-card">
                <h3 style="font-size: 1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">Bildirim
                    Tercihleri</h3>

                <!-- Notification Categories -->
                <div class="notification-categories">
                    <div class="notification-category active" onclick="selectNotificationCategory(this, 'all')">
                        <i class="fa-solid fa-bell notification-icon"></i>
                        <div class="notification-title">Tümü</div>
                    </div>

                    <div class="notification-category" onclick="selectNotificationCategory(this, 'email')">
                        <i class="fa-solid fa-envelope notification-icon"></i>
                        <div class="notification-title">E-posta</div>
                    </div>

                    <div class="notification-category" onclick="selectNotificationCategory(this, 'push')">
                        <i class="fa-solid fa-bell notification-icon"></i>
                        <div class="notification-title">Push Bildirimleri</div>
                    </div>

                    <div class="notification-category" onclick="selectNotificationCategory(this, 'sms')">
                        <i class="fa-solid fa-phone notification-icon"></i>
                        <div class="notification-title">SMS</div>
                    </div>

                    <div class="notification-category" onclick="selectNotificationCategory(this, 'slack')">
                        <i class="fa-brands fa-slack notification-icon"></i>
                        <div class="notification-title">Slack</div>
                    </div>

                    <div class="notification-category" onclick="selectNotificationCategory(this, 'webhook')">
                        <i class="fa-solid fa-plug notification-icon"></i>
                        <div class="notification-title">Webhook</div>
                    </div>
                </div>

                <!-- Notification Settings -->
                <div style="margin-top: 2rem;">
                    <h4 style="font-size: 0.875rem; font-weight: 600; color: var(--text-dark); margin-bottom: 1rem;">
                        Bildirim Kategorileri</h4>

                    <!-- Email Notifications -->
                    <div class="toggle-switch">
                        <div class="toggle-label">
                            <strong>E-posta Bildirimleri</strong>
                            <div class="toggle-description">Yeni işlemler ve aktiviteler için e-posta bildirimlerini
                                alın.</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                    </div>

                    <!-- Push Notifications -->
                    <div class="toggle-switch">
                        <div class="toggle-label">
                            <strong>Push Bildirimleri</strong>
                            <div class="toggle-description">Tarayıcı bildirimlerini aktif edin.</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                    </div>

                    <!-- SMS Notifications -->
                    <div class="toggle-switch">
                        <div class="toggle-label">
                            <strong>SMS Bildirimleri</strong>
                            <div class="toggle-description">Önemli işlemler için SMS bildirimlerini alın.</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>

                    <!-- Slack Notifications -->
                    <div class="toggle-switch">
                        <div class="toggle-label">
                            <strong>Slack Bildirimleri</strong>
                            <div class="toggle-description">Slack üzerinden bildirimleri alın.</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>

                    <!-- Webhook Notifications -->
                    <div class="toggle-switch">
                        <div class="toggle-label">
                            <strong>Webhook Bildirimleri</strong>
                            <div class="toggle-description">REST API webhook'ları ile entegre olun.</div>
                        </div>
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                    </div>

                    <!-- Action Buttons -->
                    <div class="action-buttons-save">
                        <button type="submit" class="btn btn-premium"><i class="fa-solid fa-check"></i>
                            Kaydet</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Preferences Section -->
        <div id="preferences" class="settings-section">
            <div class="bento-card">
                <h3 style="font-size: 1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">Uygulama
                    Tercihleri</h3>

                <!-- App Preferences Grid -->
                <div class="app-preferences-grid">
                    <div class="preference-item active" onclick="selectPreferenceCategory(this, 'dashboard')">
                        <i class="fa-solid fa-chart-line preference-icon"></i>
                        <div class="preference-title">Dashboard</div>
                        <div style="font-size: 0.75rem; color: var(--text-muted); margin-top: 0.25rem;">Ana panel
                            görünümü</div>
                    </div>

                    <div class="preference-item" onclick="selectPreferenceCategory(this, 'reports')">
                        <i class="fa-solid fa-file-pdf preference-icon"></i>
                        <div class="preference-title">Raporlar</div>
                        <div style="font-size: 0.75rem; color: var(--text-muted); margin-top: 0.25rem;">Varsayılan rapor
                            formatı</div>
                    </div>

                    <div class="preference-item" onclick="selectPreferenceCategory(this, 'invoices')">
                        <i class="fa-solid fa-file-invoice preference-icon"></i>
                        <div class="preference-title">Faturalar</div>
                        <div style="font-size: 0.75rem; color: var(--text-muted); margin-top: 0.25rem;">Fatura
                            şablonları</div>
                    </div>

                    <div class="preference-item" onclick="selectPreferenceCategory(this, 'projects')">
                        <i class="fa-solid fa-folder preference-icon"></i>
                        <div class="preference-title">Projeler</div>
                        <div style="font-size: 0.75rem; color: var(--text-muted); margin-top: 0.25rem;">Proje görünümü
                        </div>
                    </div>

                    <div class="preference-item" onclick="selectPreferenceCategory(this, 'clients')">
                        <i class="fa-solid fa-address-book preference-icon"></i>
                        <div class="preference-title">Müşteriler</div>
                        <div style="font-size: 0.75rem; color: var(--text-muted); margin-top: 0.25rem;">Müşteri listesi
                            düzeni</div>
                    </div>

                    <div class="preference-item" onclick="selectPreferenceCategory(this, 'settings')">
                        <i class="fa-solid fa-gear preference-icon"></i>
                        <div class="preference-title">Genel Ayarlar</div>
                        <div style="font-size: 0.75rem; color: var(--text-muted); margin-top: 0.25rem;">Sistem ayarları
                        </div>
                    </div>
                </div>

                <!-- Theme Options -->
                <h4 style="font-size: 0.875rem; font-weight: 600; color: var(--text-dark); margin-bottom: 1rem;">Tema
                    Seçenekleri</h4>

                <div class="theme-options">
                    <div class="theme-option active" onclick="selectThemeOption(this, 'light')">
                        <div class="theme-preview"
                            style="background-color: #ffffff; border: 1px solid var(--border-light);"></div>
                        <strong>Aydınlık</strong>
                        <div style="font-size: 0.75rem; color: var(--text-muted); margin-top: 0.25rem;">Temiz ve
                            profesyonel</div>
                    </div>

                    <div class="theme-option" onclick="selectThemeOption(this, 'dark')">
                        <div class="theme-preview"
                            style="background-color: #1f2937; border: 1px solid var(--border-light);"></div>
                        <strong>Karanlık</strong>
                        <div style="font-size: 0.75rem; color: var(--text-muted); margin-top: 0.25rem;">Göz yormayan
                            tonlar</div>
                    </div>

                    <div class="theme-option" onclick="selectThemeOption(this, 'system')">
                        <div class="theme-preview"
                            style="background-color: #f3f4f6; border: 1px solid var(--border-light);"></div>
                        <strong>Sistem</strong>
                        <div style="font-size: 0.75rem; color: var(--text-muted); margin-top: 0.25rem;">Sistem temasını
                            kullan</div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons-save">
                    <button type="submit" class="btn btn-premium"><i class="fa-solid fa-check"></i>
                        Kaydet</button>
                </div>
            </div>
        </div>

    </div>

@include('layouts.footer')
