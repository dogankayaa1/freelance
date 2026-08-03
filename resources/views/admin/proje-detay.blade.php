@include('layouts.nav')

<style>
    /* Premium Workspace Styles */
    :root {
        --kanban-bg: #f1f5f9;
        --card-bg: #ffffff;
        --milestone-active: #3b82f6;
        --milestone-inactive: #e2e8f0;
    }
    
    body {
        background-color: #f8fafc;
    }

    .main-content {
        padding: 2.5rem;
        animation: fadeUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Milestone Tracker */
    .milestone-tracker {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: white;
        padding: 2rem;
        border-radius: 24px;
        box-shadow: 0 10px 40px -10px rgba(0,0,0,0.04);
        margin-bottom: 2rem;
        position: relative;
    }

    .milestone-line {
        position: absolute;
        top: 50%;
        left: 3rem;
        right: 3rem;
        height: 4px;
        background: var(--milestone-inactive);
        transform: translateY(-50%);
        z-index: 1;
        border-radius: 2px;
    }
    
    .milestone-line-fill {
        position: absolute;
        top: 50%;
        left: 3rem;
        width: 50%; /* Adjust based on progress */
        height: 4px;
        background: var(--milestone-active);
        transform: translateY(-50%);
        z-index: 2;
        border-radius: 2px;
        transition: width 1s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .milestone-step {
        position: relative;
        z-index: 3;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
        background: white;
        padding: 0 1rem;
    }

    .milestone-dot {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: white;
        border: 4px solid var(--milestone-inactive);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    
    .milestone-step.completed .milestone-dot {
        border-color: var(--milestone-active);
        background: var(--milestone-active);
        color: white;
    }
    
    .milestone-step.active .milestone-dot {
        border-color: var(--milestone-active);
        box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.2);
    }
    
    .milestone-step.active .milestone-dot::after {
        content: '';
        width: 12px;
        height: 12px;
        background: var(--milestone-active);
        border-radius: 50%;
    }

    .milestone-label {
        font-size: 0.85rem;
        font-weight: 700;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    
    .milestone-step.completed .milestone-label,
    .milestone-step.active .milestone-label {
        color: #0f172a;
    }

    /* Bento Overview */
    .project-bento {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 1.5rem;
        margin-bottom: 2.5rem;
    }

    .project-card {
        background: white;
        border-radius: 24px;
        padding: 1.75rem;
        box-shadow: 0 10px 40px -10px rgba(0,0,0,0.03);
        border: 1px solid rgba(0,0,0,0.02);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    
    /* Kanban Board */
    .kanban-wrapper {
        background: white;
        border-radius: 24px;
        padding: 2rem;
        box-shadow: 0 10px 40px -10px rgba(0,0,0,0.03);
    }
    
    .kanban-board {
        display: flex;
        gap: 1.5rem;
        overflow-x: auto;
        padding-bottom: 1rem;
        min-height: 500px;
    }
    
    .kanban-column {
        flex: 1;
        min-width: 280px;
        background: var(--kanban-bg);
        border-radius: 16px;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    
    .kanban-column-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 0.5rem;
    }
    
    .kanban-column-title {
        font-size: 0.95rem;
        font-weight: 700;
        color: #334155;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .kanban-badge {
        background: #e2e8f0;
        color: #475569;
        font-size: 0.75rem;
        padding: 0.15rem 0.5rem;
        border-radius: 10px;
        font-weight: 800;
    }

    .kanban-card {
        background: var(--card-bg);
        border-radius: 12px;
        padding: 1.25rem;
        box-shadow: 0 4px 10px rgba(0,0,0,0.02);
        border: 1px solid rgba(0,0,0,0.05);
        cursor: grab;
        transition: all 0.2s ease;
    }
    
    .kanban-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.05);
        border-color: #cbd5e1;
    }
    
    .kanban-card:active {
        cursor: grabbing;
    }
    
    .task-tag {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 6px;
        font-size: 0.7rem;
        font-weight: 700;
        margin-bottom: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    
    .tag-design { background: #eff6ff; color: #3b82f6; }
    .tag-dev { background: #f0fdf4; color: #22c55e; }
    .tag-content { background: #fff7ed; color: #f97316; }
    
    .task-title {
        font-size: 0.95rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 0.5rem;
        line-height: 1.4;
    }
    
    .task-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 1rem;
        color: #64748b;
        font-size: 0.8rem;
        font-weight: 600;
    }
    
    .task-assignee {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #e2e8f0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.7rem;
        color: #475569;
        font-weight: 800;
        border: 2px solid white;
    }
    
    .add-task-btn {
        background: transparent;
        border: 2px dashed #cbd5e1;
        color: #64748b;
        padding: 0.75rem;
        border-radius: 12px;
        font-weight: 600;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.2s;
        text-align: center;
    }
    
    .add-task-btn:hover {
        border-color: #3b82f6;
        color: #3b82f6;
        background: #eff6ff;
    }

    /* Timer Widget */
    .timer-widget {
        background: linear-gradient(135deg, #1e293b, #0f172a);
        color: white;
        border-radius: 20px;
        padding: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .timer-display {
        font-family: 'Courier New', Courier, monospace;
        font-size: 2.5rem;
        font-weight: 800;
        letter-spacing: 2px;
    }
    
    .timer-btn {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: #3b82f6;
        color: white;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        cursor: pointer;
        transition: all 0.3s;
        box-shadow: 0 0 20px rgba(59, 130, 246, 0.4);
    }
    
    .timer-btn:hover {
        transform: scale(1.1);
        background: #2563eb;
    }

    .kanban-card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px dashed #e2e8f0;
    }

    .kanban-time {
        font-size: 0.75rem;
        font-weight: 700;
        color: #64748b;
        display: flex;
        align-items: center;
        gap: 0.25rem;
        background: #f1f5f9;
        padding: 0.2rem 0.5rem;
        border-radius: 6px;
    }

    .kanban-actions {
        display: flex;
        gap: 0.25rem;
    }

    .kanban-action-btn {
        background: transparent;
        border: none;
        color: #94a3b8;
        cursor: pointer;
        font-size: 0.85rem;
        padding: 0.2rem;
        border-radius: 4px;
        transition: all 0.2s;
    }

    .kanban-action-btn:hover {
        color: #3b82f6;
        background: #eff6ff;
    }
    
    .kanban-action-btn.delete:hover {
        color: #ef4444;
        background: #fef2f2;
    }

</style>

<div class="main-content">
    <!-- Header -->
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 2rem;">
        <div>
            <div style="font-size: 0.85rem; font-weight: 700; color: #64748b; margin-bottom: 0.5rem; text-transform: uppercase; letter-spacing: 0.05em;">
                <a href="/proje" style="color: inherit; text-decoration: none;"><i class="fa-solid fa-arrow-left me-2"></i> Projeler</a> / Web Geliştirme
            </div>
            <div style="display: flex; align-items: center; gap: 1rem;">
                <h1 style="font-size: 2.25rem; font-weight: 800; color: #0f172a; letter-spacing: -0.03em; margin: 0;">{{ $proje->proje_adi ?? "Proje Detayı" }}</h1>
                <span class="badge-glass" style="background: #eff6ff; color: #3b82f6; border-color: #bfdbfe;">{{ $proje->durum ?? "Aktif" }}</span>
            </div>
        </div>
        <div style="display: flex; gap: 1rem;">
            <button class="btn btn-outline" style="border-radius: 12px;"><i class="fa-solid fa-file-invoice me-2"></i> Fatura Kes</button>
            <button class="btn btn-premium" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8); border-radius: 12px; color: white; padding: 0.75rem 1.5rem; font-weight: 700; border: none;" data-bs-toggle="modal" data-bs-target="#addTaskModal">
                <i class="fa-solid fa-plus me-2"></i> Yeni Görev
            </button>
        </div>
    </div>

    @php
        $incompleteTasks = isset($tasks) ? $tasks->where('status', '!=', 'done') : collect();
        $activeMilestone = 1;
        
        if (!isset($tasks) || $tasks->count() == 0) {
            $activeMilestone = 1;
        } elseif ($incompleteTasks->count() == 0) {
            $activeMilestone = 5; // All done
        } else {
            $minMilestone = 5;
            foreach ($incompleteTasks as $t) {
                $tag = mb_strtolower(trim($t->tag ?? ''));
                $m = 1;
                if ($tag === 'keşif & analiz' || $tag === 'i̇çerik' || $tag === 'icerik') {
                    $m = 1;
                } elseif ($tag === 'tasarım' || $tag === 'tasarim') {
                    $m = 2;
                } elseif ($tag === 'frontend' || $tag === 'backend') {
                    $m = 3;
                } elseif ($tag === 'test') {
                    $m = 4;
                }
                
                if ($m < $minMilestone) {
                    $minMilestone = $m;
                }
            }
            $activeMilestone = $minMilestone == 5 ? 1 : $minMilestone;
        }
        $fillWidth = ($activeMilestone - 1) * 25;
    @endphp

    <!-- Milestone Tracker -->
    <div class="milestone-tracker" id="milestoneTracker">
        <div class="milestone-line"></div>
        <div class="milestone-line-fill" id="milestoneFill" style="width: {{ $fillWidth ?? 0 }}%;"></div>
        
        <div class="milestone-step {{ ($activeMilestone ?? 1) > 1 ? 'completed' : (($activeMilestone ?? 1) == 1 ? 'active' : '') }}">
            <div class="milestone-dot">{!! ($activeMilestone ?? 1) > 1 ? '<i class="fa-solid fa-check" style="font-size: 14px;"></i>' : '' !!}</div>
            <div class="milestone-label">1. Keşif & Analiz</div>
        </div>
        <div class="milestone-step {{ ($activeMilestone ?? 1) > 2 ? 'completed' : (($activeMilestone ?? 1) == 2 ? 'active' : '') }}">
            <div class="milestone-dot">{!! ($activeMilestone ?? 1) > 2 ? '<i class="fa-solid fa-check" style="font-size: 14px;"></i>' : '' !!}</div>
            <div class="milestone-label">2. UI/UX Tasarım</div>
        </div>
        <div class="milestone-step {{ ($activeMilestone ?? 1) > 3 ? 'completed' : (($activeMilestone ?? 1) == 3 ? 'active' : '') }}">
            <div class="milestone-dot">{!! ($activeMilestone ?? 1) > 3 ? '<i class="fa-solid fa-check" style="font-size: 14px;"></i>' : '' !!}</div>
            <div class="milestone-label">3. Geliştirme</div>
        </div>
        <div class="milestone-step {{ ($activeMilestone ?? 1) > 4 ? 'completed' : (($activeMilestone ?? 1) == 4 ? 'active' : '') }}">
            <div class="milestone-dot">{!! ($activeMilestone ?? 1) > 4 ? '<i class="fa-solid fa-check" style="font-size: 14px;"></i>' : '' !!}</div>
            <div class="milestone-label">4. Test & Revizyon</div>
        </div>
        <div class="milestone-step {{ ($activeMilestone ?? 1) == 5 ? 'completed active' : '' }}">
            <div class="milestone-dot">{!! ($activeMilestone ?? 1) == 5 ? '<i class="fa-solid fa-check" style="font-size: 14px;"></i>' : '' !!}</div>
            <div class="milestone-label">5. Teslim</div>
        </div>
    </div>


    @php
        $totalMinutes = isset($tasks) ? (int) $tasks->sum('time_spent') : 0;
        $totalHours = floor($totalMinutes / 60);
        $remMinutes = $totalMinutes % 60;
        
        $totalDays = floor($totalHours / 8);
        $remHours = $totalHours % 8;
        
        if ($totalDays > 0) {
            $timerString = sprintf("%dg %02d:%02d", $totalDays, $remHours, $remMinutes);
        } else {
            $timerString = sprintf("%02d:%02d", $totalHours, $remMinutes);
        }
        
        $hourlyIncome = 0;
        $dailyIncome = 0;
        if ($totalMinutes > 0 && isset($proje->butce) && $proje->butce > 0) {
            $hourlyIncome = $proje->butce / ($totalMinutes / 60);
            $dailyIncome = $hourlyIncome * 8;
        }
    @endphp
    <!-- Project Bento Metrics -->
    <div class="project-bento">
        <!-- Timer -->
        <div class="col-span-4" style="grid-column: span 4;">
            <div class="timer-widget h-100">
                <div>
                    <div style="font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; color: #94a3b8; margin-bottom: 0.5rem;">Çalışma Zamanı (Toplam)</div>
                    <div class="timer-display">{{ $timerString }}</div>
                    <div style="font-size: 0.8rem; color: #64748b; margin-top: 0.5rem;">Kayıtlı: {{ $totalMinutes }} Dakika</div>
                </div>
                <button class="timer-btn">
                    <i class="fa-solid fa-pause"></i>
                </button>
            </div>
        </div>

        <!-- Budget -->
        <div class="project-card col-span-4" style="grid-column: span 4;">
            <div>
                <div style="font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; color: #64748b; margin-bottom: 1rem;">Finans Durumu</div>
                <div style="font-size: 2rem; font-weight: 800; color: #0f172a;">₺{{ number_format($proje->butce ?? 0, 2) }}</div>
            </div>
            <div style="margin-top: 1.5rem;">
                <div style="display: flex; justify-content: space-between; font-size: 0.85rem; font-weight: 600; margin-bottom: 0.25rem;">
                    <span style="color: #64748b;">Saatlik Gelir</span>
                    <span style="color: #22c55e;">₺{{ number_format($hourlyIncome, 2, ',', '.') }} / saat</span>
                </div>
                <div style="display: flex; justify-content: space-between; font-size: 0.85rem; font-weight: 600; margin-bottom: 0.5rem;">
                    <span style="color: #64748b;">Günlük Gelir (8 saat)</span>
                    <span style="color: #3b82f6;">₺{{ number_format($dailyIncome, 2, ',', '.') }} / gün</span>
                </div>
                <div style="height: 6px; background: #f1f5f9; border-radius: 3px; overflow: hidden;">
                    <div style="height: 100%; width: {{ $hourlyIncome > 0 ? '100' : '0' }}%; background: #22c55e; border-radius: 3px;"></div>
                </div>
            </div>
        </div>

        <!-- Client Notes -->
        <div class="project-card col-span-4" style="grid-column: span 4; background: linear-gradient(to bottom right, #ffffff, #f8fafc);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                <div style="font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; color: #64748b;">Müşteri İletişimi</div>
                <button style="border: none; background: transparent; color: #3b82f6; font-weight: 600; font-size: 0.85rem;">Tümünü Gör</button>
            </div>
            <div style="display: flex; gap: 1rem; align-items: flex-start; background: white; padding: 1rem; border-radius: 12px; border: 1px solid #e2e8f0;">
                <div style="width: 32px; height: 32px; border-radius: 50%; background: #fef3c7; color: #d97706; display: flex; align-items: center; justify-content: center; font-size: 0.85rem;"><i class="fa-solid fa-comment-dots"></i></div>
                <div>
                    <div style="font-size: 0.85rem; font-weight: 700; color: #0f172a; margin-bottom: 0.25rem;">Ahmet Bey (Müşteri)</div>
                    <div style="font-size: 0.8rem; color: #475569; line-height: 1.4;">"Ana sayfa hero bölümündeki renkleri biraz daha canlı yapabilir miyiz?"</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kanban Workspace -->
    <div class="kanban-wrapper">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0;"><i class="fa-solid fa-table-columns me-2 text-primary"></i> İş Panosu (Kanban)</h3>
            <div style="display: flex; gap: 0.5rem;">
                <button class="btn btn-outline" style="padding: 0.5rem 1rem; font-size: 0.85rem; border-radius: 8px;"><i class="fa-solid fa-filter me-1"></i> Filtre</button>
            </div>
        </div>
        
        <div class="kanban-board">
            
            @php
                $columns = [
                    'todo' => ['title' => 'Yapılacaklar', 'color' => '#94a3b8', 'bg' => '#f1f5f9'],
                    'in_progress' => ['title' => 'Devam Edenler', 'color' => '#3b82f6', 'bg' => '#eff6ff'],
                    'review' => ['title' => 'Müşteri Onayında', 'color' => '#f59e0b', 'bg' => '#fffbeb'],
                    'done' => ['title' => 'Tamamlananlar', 'color' => '#22c55e', 'bg' => '#f0fdf4']
                ];
                
                $tags = [
                    'Tasarım' => 'tag-design',
                    'Frontend' => 'tag-dev',
                    'Backend' => 'tag-dev',
                    'İçerik' => 'tag-content'
                ];
            @endphp

            @foreach($columns as $status => $col)
            <div class="kanban-column" {{ $status == 'done' ? 'style="opacity: 0.8;"' : '' }}>
                <div class="kanban-column-header">
                    <div class="kanban-column-title">
                        <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: {{ $col['color'] }};"></span>
                        {{ $col['title'] }}
                    </div>
                    <div class="kanban-badge">{{ isset($tasks) ? $tasks->where('status', $status)->count() : 0 }}</div>
                </div>
                
                @if(isset($tasks))
                    @foreach($tasks->where('status', $status) as $task)
                    <div class="kanban-card" style="cursor: pointer; {{ $status == 'done' ? 'text-decoration: line-through; color: #94a3b8;' : '' }}{{ $status == 'in_progress' ? 'border-left: 3px solid #3b82f6;' : '' }}">
                        <div class="task-tag {{ $tags[$task->tag ?? 'Tasarım'] ?? 'tag-design' }}" {!! $status == 'done' ? 'style="filter: grayscale(1);"' : '' !!}>{{ $task->tag ?? 'Genel' }}</div>
                        <div class="task-title" {!! $status == 'done' ? 'style="color: #94a3b8;"' : '' !!}>{{ $task->name }}</div>
                        <div class="task-meta">
                            @if($task->due_date)
                            <div><i class="fa-regular fa-clock me-1"></i> {{ \Carbon\Carbon::parse($task->due_date)->format('d M') }}</div>
                            @endif
                            @if($status == 'done')
                            <div style="color: #22c55e;"><i class="fa-solid fa-check-double me-1"></i> Bitti</div>
                            @endif
                        </div>
                        <div class="kanban-card-footer">
                            <div class="kanban-time" title="Harcanan Süre">
                                <i class="fa-solid fa-stopwatch text-primary"></i> {{ $task->time_spent ? $task->time_spent . ' dk' : '0 dk' }}
                            </div>
                            <div class="kanban-actions">
                                <button type="button" class="kanban-action-btn" data-bs-toggle="modal" data-bs-target="#viewTaskModal{{ $task->id }}" title="Detay"><i class="fa-solid fa-eye"></i></button>
                                <button type="button" class="kanban-action-btn" data-bs-toggle="modal" data-bs-target="#editTaskModal{{ $task->id }}" title="Düzenle"><i class="fa-solid fa-pen"></i></button>
                                @if($status != 'done')
                                <button type="button" class="kanban-action-btn" data-bs-toggle="modal" data-bs-target="#completeTaskModal{{ $task->id }}" style="color: #22c55e;" title="Tamamlandı"><i class="fa-solid fa-check"></i></button>
                                @endif
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bu görevi silmek istediğinize emin misiniz?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="kanban-action-btn delete" title="Sil"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
                
                @if($status == 'todo')
                <button class="add-task-btn" data-bs-toggle="modal" data-bs-target="#addTaskModal">
                    <i class="fa-solid fa-plus me-1"></i> Yeni Görev
                </button>
                @endif
            </div>
            @endforeach

        </div>
    </div>
</div>

<!-- Modals -->
<div class="modal fade" id="addTaskModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 20px; border: none;">
            <div class="modal-header" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0; padding: 1.5rem;">
                <h5 class="modal-title" style="font-weight: 800; color: #0f172a;">Yeni Görev Kartı</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ isset($proje) ? route('tasks.store', $proje->id) : '#' }}" method="POST">
                @csrf
                <div class="modal-body" style="padding: 1.5rem;">
                    <div class="mb-3">
                        <label class="form-label fw-bold small text-muted">Görev Adı</label>
                        <input type="text" name="name" class="form-control" style="background: #f8fafc; border-radius: 10px;" placeholder="Ne yapılması gerekiyor?" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold small text-muted">Aşama / Sütun</label>
                            <select name="status" class="form-select" style="background: #f8fafc; border-radius: 10px;" required>
                                <option value="todo">Yapılacaklar (To Do)</option>
                                <option value="in_progress">Devam Edenler (In Progress)</option>
                                <option value="review">Müşteri Onayında (Review)</option>
                                <option value="done">Tamamlananlar (Done)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold small text-muted">Etiket</label>
                            <select name="tag" class="form-select" style="background: #f8fafc; border-radius: 10px;">
                                <option value="Keşif & Analiz">Keşif & Analiz</option>
                                <option value="Tasarım">Tasarım</option>
                                <option value="Frontend">Frontend</option>
                                <option value="Backend">Backend</option>
                                <option value="İçerik">İçerik</option>
                                <option value="Test">Test</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold small text-muted">Açıklama</label>
                        <textarea name="description" class="form-control" rows="3" style="background: #f8fafc; border-radius: 10px;"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label fw-bold small text-muted">Son Tarih</label>
                            <input type="date" name="due_date" class="form-control" style="background: #f8fafc; border-radius: 10px;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 1px solid #f1f5f9; padding: 1.25rem;">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" style="border-radius: 10px; font-weight: 600;">İptal</button>
                    <button type="submit" class="btn btn-primary" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8); border: none; border-radius: 10px; font-weight: 600;">Oluştur</button>
                </div>
            </form>
        </div>
    </div>
</div>

@if(isset($tasks))
@foreach($tasks as $task)
<div class="modal fade" id="viewTaskModal{{ $task->id }}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 20px; border: none;">
            <div class="modal-header" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0; padding: 1.5rem;">
                <h5 class="modal-title" style="font-weight: 800; color: #0f172a;">Görev Detayı</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" style="padding: 1.5rem;">
                <h4 style="font-weight: 700; color: #1e293b; margin-bottom: 1rem;">{{ $task->name }}</h4>
                <div class="mb-3">
                    <span class="badge" style="background: #e2e8f0; color: #475569; padding: 0.5em 0.75em; border-radius: 8px;">{{ $task->tag ?? 'Genel' }}</span>
                    @if($task->status == 'todo')
                        <span class="badge bg-secondary" style="padding: 0.5em 0.75em; border-radius: 8px;">Yapılacaklar</span>
                    @elseif($task->status == 'in_progress')
                        <span class="badge bg-primary" style="padding: 0.5em 0.75em; border-radius: 8px;">Devam Edenler</span>
                    @elseif($task->status == 'review')
                        <span class="badge bg-warning text-dark" style="padding: 0.5em 0.75em; border-radius: 8px;">Müşteri Onayında</span>
                    @elseif($task->status == 'done')
                        <span class="badge bg-success" style="padding: 0.5em 0.75em; border-radius: 8px;">Tamamlananlar</span>
                    @endif
                </div>
                <div class="mb-3">
                    <strong style="color: #64748b; font-size: 0.85rem; text-transform: uppercase;">Açıklama:</strong>
                    <p style="color: #334155; margin-top: 0.25rem;">{{ $task->description ?: 'Açıklama bulunmuyor.' }}</p>
                </div>
                @if($task->due_date)
                <div>
                    <strong style="color: #64748b; font-size: 0.85rem; text-transform: uppercase;">Son Tarih:</strong>
                    <p style="color: #334155; margin-top: 0.25rem;"><i class="fa-regular fa-clock me-1"></i> {{ \Carbon\Carbon::parse($task->due_date)->format('d M Y') }}</p>
                </div>
                @endif
            </div>
            <div class="modal-footer" style="border-top: 1px solid #f1f5f9; padding: 1.25rem;">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal" style="border-radius: 10px; font-weight: 600;">Kapat</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editTaskModal{{ $task->id }}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius: 20px; border: none;">
            <div class="modal-header" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0; padding: 1.5rem;">
                <h5 class="modal-title" style="font-weight: 800; color: #0f172a;">Görevi Düzenle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body" style="padding: 1.5rem;">
                    <div class="mb-3">
                        <label class="form-label fw-bold small text-muted">Görev Adı</label>
                        <input type="text" name="name" class="form-control" style="background: #f8fafc; border-radius: 10px;" value="{{ $task->name }}" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold small text-muted">Aşama / Sütun</label>
                            <select name="status" class="form-select" style="background: #f8fafc; border-radius: 10px;" required>
                                <option value="todo" {{ $task->status == 'todo' ? 'selected' : '' }}>Yapılacaklar (To Do)</option>
                                <option value="in_progress" {{ $task->status == 'in_progress' ? 'selected' : '' }}>Devam Edenler (In Progress)</option>
                                <option value="review" {{ $task->status == 'review' ? 'selected' : '' }}>Müşteri Onayında (Review)</option>
                                <option value="done" {{ $task->status == 'done' ? 'selected' : '' }}>Tamamlananlar (Done)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold small text-muted">Etiket</label>
                            <select name="tag" class="form-select" style="background: #f8fafc; border-radius: 10px;">
                                <option value="Keşif & Analiz" {{ $task->tag == 'Keşif & Analiz' ? 'selected' : '' }}>Keşif & Analiz</option>
                                <option value="Tasarım" {{ $task->tag == 'Tasarım' ? 'selected' : '' }}>Tasarım</option>
                                <option value="Frontend" {{ $task->tag == 'Frontend' ? 'selected' : '' }}>Frontend</option>
                                <option value="Backend" {{ $task->tag == 'Backend' ? 'selected' : '' }}>Backend</option>
                                <option value="İçerik" {{ $task->tag == 'İçerik' ? 'selected' : '' }}>İçerik</option>
                                <option value="Test" {{ $task->tag == 'Test' ? 'selected' : '' }}>Test</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold small text-muted">Açıklama</label>
                        <textarea name="description" class="form-control" rows="3" style="background: #f8fafc; border-radius: 10px;">{{ $task->description }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label fw-bold small text-muted">Son Tarih</label>
                            <input type="date" name="due_date" class="form-control" style="background: #f8fafc; border-radius: 10px;" value="{{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('Y-m-d') : '' }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold small text-muted">Harcanan Süre (Dakika)</label>
                            <input type="number" name="time_spent" class="form-control" style="background: #f8fafc; border-radius: 10px;" placeholder="Örn: 120" value="{{ $task->time_spent }}" min="0">
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 1px solid #f1f5f9; padding: 1.25rem;">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" style="border-radius: 10px; font-weight: 600;">İptal</button>
                    <button type="submit" class="btn btn-primary" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8); border: none; border-radius: 10px; font-weight: 600;">Kaydet</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="completeTaskModal{{ $task->id }}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 20px; border: none;">
            <div class="modal-header" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0; padding: 1.5rem;">
                <h5 class="modal-title" style="font-weight: 800; color: #0f172a;">Görevi Tamamla</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="name" value="{{ $task->name }}">
                <input type="hidden" name="status" value="done">
                <input type="hidden" name="tag" value="{{ $task->tag }}">
                <input type="hidden" name="description" value="{{ $task->description }}">
                <input type="hidden" name="due_date" value="{{ $task->due_date }}">
                
                <div class="modal-body" style="padding: 1.5rem;">
                    <p style="color: #475569; margin-bottom: 1rem;">Bu görevi tamamlamak üzeresiniz. Görevi kaç dakikada bitirdiğinizi aşağıya yazabilirsiniz.</p>
                    <div class="mb-3">
                        <label class="form-label fw-bold small text-muted">Harcanan Süre (Dakika)</label>
                        <input type="number" name="time_spent" class="form-control" style="background: #f8fafc; border-radius: 10px;" placeholder="Örn: 120" value="{{ $task->time_spent }}" min="0">
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 1px solid #f1f5f9; padding: 1.25rem;">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" style="border-radius: 10px; font-weight: 600;">İptal</button>
                    <button type="submit" class="btn btn-success" style="border-radius: 10px; font-weight: 600;"><i class="fa-solid fa-check"></i> Tamamla</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endif


<script>
    function setMilestone(stepIndex) {
        const steps = document.querySelectorAll('#milestoneTracker .milestone-step');
        const fillLine = document.getElementById('milestoneFill');
        
        // Find current active step
        let currentActive = 1;
        steps.forEach((step, index) => {
            if (step.classList.contains('active')) currentActive = index + 1;
        });

        // Validation: Prevent advancing if there are pending tasks
        if (stepIndex > currentActive) {
            const columns = document.querySelectorAll('.kanban-column');
            let hasPendingTasks = false;
            
            // Check "Yapılacaklar" (To Do) and "Devam Edenler" (In Progress) columns
            if (columns[0] && columns[0].querySelectorAll('.kanban-card').length > 0) hasPendingTasks = true;
            if (columns[1] && columns[1].querySelectorAll('.kanban-card').length > 0) hasPendingTasks = true;

            if (hasPendingTasks) {
                showToast(`Önceki aşamalara ait tamamlanmamış görevleriniz var. Önce onları tamamlamalısınız!`, 'error');
                return; // Stop execution, don't advance
            }
        }
        
        steps.forEach((step, index) => {
            const currentStep = index + 1;
            const dot = step.querySelector('.milestone-dot');
            
            // Reset classes
            step.classList.remove('completed', 'active');
            dot.innerHTML = '';
            
            if (currentStep < stepIndex) {
                step.classList.add('completed');
                dot.innerHTML = '<i class="fa-solid fa-check" style="font-size: 14px;"></i>';
            } else if (currentStep === stepIndex) {
                step.classList.add('active');
            }
        });
        
        // Calculate width (0%, 25%, 50%, 75%, 100%)
        const percentages = [0, 25, 50, 75, 100];
        fillLine.style.width = percentages[stepIndex - 1] + '%';
        
        // Simulate saving
        showToast(`Proje aşaması "${steps[stepIndex-1].querySelector('.milestone-label').innerText}" olarak güncellendi.`, 'success');
    }

    // Add toast system if not exists
    function showToast(message, type = 'success') {
        let container = document.getElementById('toastContainer');
        if (!container) {
            container = document.createElement('div');
            container.id = 'toastContainer';
            container.className = 'toast-container position-fixed bottom-0 end-0 p-3';
            container.style.zIndex = '1050';
            document.body.appendChild(container);
        }

        let toastClass = 'bg-primary';
        if (type === 'success') toastClass = 'bg-success';
        if (type === 'error') toastClass = 'bg-danger';

        const toastHtml = `
            <div class="toast show ${toastClass} border-0" role="alert" style="margin-top: 10px;">
                <div class="toast-header text-white" style="background: rgba(0,0,0,0.1);">
                    <i class="fa-solid fa-circle-info me-2"></i>
                    <strong class="me-auto">Bilgi</strong>
                    <button type="button" class="btn-close btn-close-white" onclick="this.closest('.toast').remove()"></button>
                </div>
                <div class="toast-body text-white">
                    ${message}
                </div>
            </div>
        `;
        
        container.insertAdjacentHTML('beforeend', toastHtml);
        
        setTimeout(() => {
            if(container.lastElementChild) {
                container.lastElementChild.remove();
            }
        }, 3000);
    }



</script>

@include('layouts.footer')
