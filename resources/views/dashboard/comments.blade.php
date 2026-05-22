<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaires — Dashboard</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>

    <aside class="sidebar">
        <div class="sidebar-brand">
            <a href="index.html" class="sidebar-logo">Le Blog</a>
            <div class="sidebar-sub">Administration</div>
        </div>
        <nav class="sidebar-nav">
            <div class="nav-section-label">Vue d'ensemble</div>
            <a href="dashboard.html" class="nav-item"><span>◈</span> Dashboard</a>
            <div class="nav-section-label">Contenu</div>
            <a href="articles.html" class="nav-item"><span>✦</span> Articles <span class="nav-badge">50</span></a>
            <a href="categories.html" class="nav-item"><span>◎</span> Catégories</a>
            <a href="comments.html" class="nav-item active"><span>◇</span> Commentaires <span
                    class="nav-badge">250</span></a>
            <div class="nav-section-label">Utilisateurs</div>
            <a href="users.html" class="nav-item"><span>○</span> Utilisateurs</a>
            <div class="nav-section-label">Paramètres</div>
            <a href="settings.html" class="nav-item"><span>◻</span> Réglages</a>
        </nav>
        <div class="sidebar-footer">
            <div class="sidebar-user">
                <div class="u-av">A</div>
                <div>
                    <div style="font-size:0.85rem;font-weight:500">Admin</div>
                    <div style="font-size:0.7rem;color:var(--muted)">Super administrateur</div>
                </div>
            </div>
        </div>
    </aside>

    <div class="main">
        <div class="topbar">
            <div class="topbar-title">Commentaires</div>
            <a href="index.html"
                style="font-size:0.78rem;color:var(--muted);text-decoration:none;padding:0.45rem 1rem;border:1px solid var(--border)">↗
                Voir le blog</a>
        </div>

        <div class="content">

            <div class="stats-row">
                <div class="stat-card">
                    <div class="stat-icon">◇</div>
                    <div class="stat-info">
                        <div class="stat-num">250</div>
                        <div class="stat-lbl">Total</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon" style="color:var(--success)">◈</div>
                    <div class="stat-info">
                        <div class="stat-num">218</div>
                        <div class="stat-lbl">Approuvés</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon" style="color:var(--warning)">◎</div>
                    <div class="stat-info">
                        <div class="stat-num">24</div>
                        <div class="stat-lbl">En attente</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon" style="color:#E74C3C">✕</div>
                    <div class="stat-info">
                        <div class="stat-num">8</div>
                        <div class="stat-lbl">Spam</div>
                    </div>
                </div>
            </div>

            <div class="tabs">
                <button class="tab active">Tous (250)</button>
                <button class="tab">En attente (24)</button>
                <button class="tab">Approuvés (218)</button>
                <button class="tab">Spam (8)</button>
            </div>

            <div class="toolbar">
                <input type="search" class="search-input" placeholder="Rechercher dans les commentaires...">
                <select class="filter">
                    <option>Tous les articles</option>
                    <option>Excepturi eligendi aliquid...</option>
                    <option>Aut repellat ut qui et</option>
                    <option>Sed molestiae omnis...</option>
                </select>
                <button class="btn btn-ghost" style="margin-left:auto">Tout approuver</button>
            </div>

            <div class="comments-list">

                <div class="comment-row pending">
                    <div class="c-avatar" style="background:#E67E22;color:#fff">WR</div>
                    <div>
                        <div class="c-meta">
                            <span class="c-author">Weldon Walter</span>
                            <span class="badge badge-pending">En attente</span>
                            <span class="c-date">17 avr. 2026 à 06:35</span>
                        </div>
                        <div class="c-article">Sur : <a href="#">Sed molestiae omnis ratione ea enim ea</a></div>
                        <div class="c-text" style="margin-top:0.5rem">Molestiae modi minus molestiae. Perspiciatis
                            blanditiis libero earum quod eos omnis placeat nesciunt.</div>
                    </div>
                    <div class="c-actions">
                        <button class="btn btn-success" onclick="openView()">Voir</button>
                        <button class="btn btn-success" style="color:var(--success)">✓</button>
                        <button class="btn btn-warning">Spam</button>
                        <button class="btn btn-danger">✕</button>
                    </div>
                </div>

                <div class="comment-row pending">
                    <div class="c-avatar" style="background:#8E44AD;color:#fff">SF</div>
                    <div>
                        <div class="c-meta">
                            <span class="c-author">Sherman Feeney</span>
                            <span class="badge badge-pending">En attente</span>
                            <span class="c-date">17 avr. 2026 à 06:35</span>
                        </div>
                        <div class="c-article">Sur : <a href="#">Sed molestiae omnis ratione ea enim ea</a>
                        </div>
                        <div class="c-text" style="margin-top:0.5rem">Quis nemo architecto ea rerum iusto nulla. Vel
                            ut soluta ipsum nihil aut natus suscipit explicabo perspiciatis.</div>
                    </div>
                    <div class="c-actions">
                        <button class="btn btn-success" onclick="openView()">Voir</button>
                        <button class="btn btn-success">✓</button>
                        <button class="btn btn-warning">Spam</button>
                        <button class="btn btn-danger">✕</button>
                    </div>
                </div>

                <div class="comment-row approved">
                    <div class="c-avatar" style="background:#27AE60;color:#fff">VK</div>
                    <div>
                        <div class="c-meta">
                            <span class="c-author">Veronica Kunze</span>
                            <span class="badge badge-approved">Approuvé</span>
                            <span class="c-date">17 avr. 2026 à 06:35</span>
                        </div>
                        <div class="c-article">Sur : <a href="#">Sed molestiae omnis ratione ea enim ea</a>
                        </div>
                        <div class="c-text" style="margin-top:0.5rem">Iure atque aspernatur aliquid dolor id. Officiis
                            expedita pariatur aperiam commodi eligendi.</div>
                    </div>
                    <div class="c-actions">
                        <button class="btn btn-success" onclick="openView()">Voir</button>
                        <button class="btn btn-warning">Spam</button>
                        <button class="btn btn-danger">✕</button>
                    </div>
                </div>

                <div class="comment-row approved">
                    <div class="c-avatar" style="background:#2E86AB;color:#fff">HB</div>
                    <div>
                        <div class="c-meta">
                            <span class="c-author">Henriette Bode</span>
                            <span class="badge badge-approved">Approuvé</span>
                            <span class="c-date">17 avr. 2026 à 06:35</span>
                        </div>
                        <div class="c-article">Sur : <a href="#">Sed molestiae omnis ratione ea enim ea</a>
                        </div>
                        <div class="c-text" style="margin-top:0.5rem">Omnis aut voluptates dolor et sapiente. Tenetur
                            eligendi earum qui sunt qui facilis unde iure perferendis.</div>
                    </div>
                    <div class="c-actions">
                        <button class="btn btn-success" onclick="openView()">Voir</button>
                        <button class="btn btn-warning">Spam</button>
                        <button class="btn btn-danger">✕</button>
                    </div>
                </div>

                <div class="comment-row approved">
                    <div class="c-avatar" style="background:#C0392B;color:#fff">DE</div>
                    <div>
                        <div class="c-meta">
                            <span class="c-author">Dr. Evert Yost</span>
                            <span class="badge badge-approved">Approuvé</span>
                            <span class="c-date">17 avr. 2026 à 06:35</span>
                        </div>
                        <div class="c-article">Sur : <a href="#">Sed molestiae omnis ratione ea enim ea</a>
                        </div>
                        <div class="c-text" style="margin-top:0.5rem">Aspernatur vero ratione et qui qui architecto.
                            Aut amet repellendus totam molestiae error doloremque qui aspernatur.</div>
                    </div>
                    <div class="c-actions">
                        <button class="btn btn-success" onclick="openView()">Voir</button>
                        <button class="btn btn-warning">Spam</button>
                        <button class="btn btn-danger">✕</button>
                    </div>
                </div>

                <div class="comment-row spam">
                    <div class="c-avatar" style="background:#555;color:#fff">??</div>
                    <div>
                        <div class="c-meta">
                            <span class="c-author">Colt Christiansen</span>
                            <span class="badge badge-spam">Spam</span>
                            <span class="c-date">17 avr. 2026 à 07:12</span>
                        </div>
                        <div class="c-article">Sur : <a href="#">Sit ad perferendis possimus ut</a></div>
                        <div class="c-text" style="margin-top:0.5rem">Numquam at excepturi id. Click here to win free
                            prizes!!! Lorem ipsum dolor sit amet consectetur...</div>
                    </div>
                    <div class="c-actions">
                        <button class="btn btn-success" onclick="openView()">Voir</button>
                        <button class="btn btn-success">Restaurer</button>
                        <button class="btn btn-danger">Suppr. déf.</button>
                    </div>
                </div>

                <div class="comment-row approved">
                    <div class="c-avatar" style="background:#1ABC9C;color:#fff">CC</div>
                    <div>
                        <div class="c-meta">
                            <span class="c-author">Julien Prohaska</span>
                            <span class="badge badge-approved">Approuvé</span>
                            <span class="c-date">17 avr. 2026 à 09:44</span>
                        </div>
                        <div class="c-article">Sur : <a href="#">Excepturi eligendi aliquid iste laboriosam</a>
                        </div>
                        <div class="c-text" style="margin-top:0.5rem">Ut reiciendis et totam animi sed commodi facere
                            amet. Voluptatem itaque aut accusamus perspiciatis fugit.</div>
                    </div>
                    <div class="c-actions">
                        <button class="btn btn-success" onclick="openView()">Voir</button>
                        <button class="btn btn-warning">Spam</button>
                        <button class="btn btn-danger">✕</button>
                    </div>
                </div>

                <div class="comment-row pending">
                    <div class="c-avatar" style="background:#9B59B6;color:#fff">LH</div>
                    <div>
                        <div class="c-meta">
                            <span class="c-author">Lavinia Hickle</span>
                            <span class="badge badge-pending">En attente</span>
                            <span class="c-date">17 avr. 2026 à 11:22</span>
                        </div>
                        <div class="c-article">Sur : <a href="#">Aut repellat ut qui et</a></div>
                        <div class="c-text" style="margin-top:0.5rem">Debitis cumque nihil est molestias iste et.
                            Laudantium aliquam adipisci tempora suscipit voluptatem rem quos.</div>
                    </div>
                    <div class="c-actions">
                        <button class="btn btn-success" onclick="openView()">Voir</button>
                        <button class="btn btn-success">✓</button>
                        <button class="btn btn-warning">Spam</button>
                        <button class="btn btn-danger">✕</button>
                    </div>
                </div>

            </div>

            <div class="pagination">
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">…</button>
                <button class="page-btn">13</button>
                <button class="page-btn">→</button>
            </div>
        </div>
    </div>

    <!-- VIEW MODAL -->
    <div class="modal-overlay" id="viewModal">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">Détail du commentaire</div>
                <button class="modal-close"
                    onclick="document.getElementById('viewModal').classList.remove('open')">✕</button>
            </div>
            <div class="modal-body">
                <div style="margin-bottom:1.5rem">
                    <div class="info-row"><span class="info-label">Auteur</span><span>Weldon Walter</span></div>
                    <div class="info-row"><span class="info-label">Email</span><span
                            style="color:var(--muted)">luciano.sporer@example.net</span></div>
                    <div class="info-row"><span class="info-label">Article</span><a href="#"
                            style="color:var(--accent);text-decoration:none;font-size:0.85rem">Sed molestiae omnis
                            ratione ea enim ea</a></div>
                    <div class="info-row"><span class="info-label">Date</span><span
                            style="color:var(--muted);font-size:0.85rem">17 avril 2026 à 06:35</span></div>
                    <div class="info-row"><span class="info-label">Statut</span><span class="badge badge-pending">En
                            attente</span></div>
                </div>
                <div class="form-group">
                    <label class="form-label">Contenu du commentaire</label>
                    <textarea class="form-control">Molestiae modi minus molestiae. Perspiciatis blanditiis libero earum quod eos omnis placeat nesciunt ut ut.</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-ghost"
                    onclick="document.getElementById('viewModal').classList.remove('open')">Fermer</button>
                <button class="btn" style="background:transparent;color:#E74C3C;border:1px solid #E74C3C">Marquer
                    spam</button>
                <button class="btn btn-primary">Approuver</button>
            </div>
        </div>
    </div>

    <script>
        function openView() {
            document.getElementById('viewModal').classList.add('open');
        }
        document.querySelectorAll('.modal-overlay').forEach(o => o.addEventListener('click', e => {
            if (e.target === o) o.classList.remove('open');
        }));
        document.querySelectorAll('.tab').forEach(t => t.addEventListener('click', function() {
            document.querySelectorAll('.tab').forEach(x => x.classList.remove('active'));
            this.classList.add('active');
        }));
    </script>
</body>

</html>
