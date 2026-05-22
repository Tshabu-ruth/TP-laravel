<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégories — Dashboard</title>
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
            <a href="categories.html" class="nav-item active"><span>◎</span> Catégories</a>
            <a href="#" class="nav-item"><span>◇</span> Commentaires <span class="nav-badge">250</span></a>
            <div class="nav-section-label">Utilisateurs</div>
            <a href="users.html" class="nav-item"><span>○</span> Utilisateurs</a>
            <div class="nav-section-label">Paramètres</div>
            <a href="#" class="nav-item"><span>◻</span> Réglages</a>
        </nav>
        <div class="sidebar-footer">
            <div class="sidebar-user">
                <div class="user-avatar">A</div>
                <div>
                    <div style="font-size:0.85rem;font-weight:500">Admin</div>
                    <div style="font-size:0.7rem;color:var(--muted)">Super administrateur</div>
                </div>
            </div>
        </div>
    </aside>

    <div class="main">
        <div class="topbar">
            <div class="topbar-title">Catégories</div>
            <a href="index.html"
                style="font-size:0.78rem;color:var(--muted);text-decoration:none;padding:0.45rem 1rem;border:1px solid var(--border)">↗
                Voir le blog</a>
        </div>

        <div class="content">
            <div class="grid-layout">

                <!-- LISTE -->
                <div class="panel">
                    <div class="panel-header">
                        <div class="panel-title">Toutes les catégories (5)</div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Slug</th>
                                <th>Articles</th>
                                <th>Créée le</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-muted">1</td>
                                <td><strong>Vitae</strong></td>
                                <td class="text-muted">vitae</td>
                                <td><span class="cat-count">10 articles</span></td>
                                <td class="text-muted">17 avr. 2026</td>
                                <td>
                                    <div class="actions"><button class="btn btn-edit"
                                            onclick="openEditCat('Vitae','vitae')">Éditer</button><button
                                            class="btn btn-danger">Suppr.</button></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">2</td>
                                <td><strong>Dignissimos</strong></td>
                                <td class="text-muted">dignissimos</td>
                                <td><span class="cat-count">10 articles</span></td>
                                <td class="text-muted">17 avr. 2026</td>
                                <td>
                                    <div class="actions"><button class="btn btn-edit"
                                            onclick="openEditCat('Dignissimos','dignissimos')">Éditer</button><button
                                            class="btn btn-danger">Suppr.</button></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">3</td>
                                <td><strong>Optio</strong></td>
                                <td class="text-muted">optio</td>
                                <td><span class="cat-count">10 articles</span></td>
                                <td class="text-muted">17 avr. 2026</td>
                                <td>
                                    <div class="actions"><button class="btn btn-edit"
                                            onclick="openEditCat('Optio','optio')">Éditer</button><button
                                            class="btn btn-danger">Suppr.</button></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">4</td>
                                <td><strong>Aperiam</strong></td>
                                <td class="text-muted">aperiam</td>
                                <td><span class="cat-count">10 articles</span></td>
                                <td class="text-muted">17 avr. 2026</td>
                                <td>
                                    <div class="actions"><button class="btn btn-edit"
                                            onclick="openEditCat('Aperiam','aperiam')">Éditer</button><button
                                            class="btn btn-danger">Suppr.</button></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">5</td>
                                <td><strong>Tenetur</strong></td>
                                <td class="text-muted">tenetur</td>
                                <td><span class="cat-count">10 articles</span></td>
                                <td class="text-muted">17 avr. 2026</td>
                                <td>
                                    <div class="actions"><button class="btn btn-edit"
                                            onclick="openEditCat('Tenetur','tenetur')">Éditer</button><button
                                            class="btn btn-danger">Suppr.</button></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- CREATE FORM -->
                <div class="panel">
                    <div class="panel-header">
                        <div class="panel-title">Nouvelle catégorie</div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="form-label">Nom <span class="required">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="Nom de la catégorie"
                                required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug"
                                placeholder="slug-de-la-categorie">
                            <div class="form-hint" style="margin-top:0.3rem">Généré automatiquement depuis le nom si
                                laissé vide.</div>
                        </div>
                        <button class="btn btn-primary" style="width:100%;margin-top:0.5rem">Créer la
                            catégorie</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- EDIT MODAL -->
    <div class="modal-overlay" id="editModal">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">Modifier la catégorie</div>
                <button class="modal-close"
                    onclick="document.getElementById('editModal').classList.remove('open')">✕</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">Nom <span class="required">*</span></label>
                    <input type="text" class="form-control" id="edit-name" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" id="edit-slug">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-ghost"
                    onclick="document.getElementById('editModal').classList.remove('open')">Annuler</button>
                <button class="btn btn-primary">Sauvegarder</button>
            </div>
        </div>
    </div>

    <script>
        function openEditCat(name, slug) {
            document.getElementById('edit-name').value = name;
            document.getElementById('edit-slug').value = slug;
            document.getElementById('editModal').classList.add('open');
        }
        document.querySelectorAll('.modal-overlay').forEach(overlay => {
            overlay.addEventListener('click', e => {
                if (e.target === overlay) overlay.classList.remove('open');
            });
        });
    </script>
</body>

</html>
