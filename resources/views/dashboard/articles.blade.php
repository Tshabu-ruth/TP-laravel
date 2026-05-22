@extends('dashboard')

@section('title', 'Articles')

@section('topbar-actions')
    <button class="btn btn-primary" onclick="document.getElementById('createModal').classList.add('open')">+
        Nouvel article</button>
@endsection

@section('content')
    <div class="toolbar">
        <input type="search" class="search-input" placeholder="Rechercher un article...">
        <select class="filter">
            <option>Toutes les catégories</option>
            <option>Vitae</option>
            <option>Dignissimos</option>
            <option>Optio</option>
            <option>Aperiam</option>
            <option>Tenetur</option>
        </select>
        <select class="filter">
            <option>Tous les statuts</option>
            <option>Publié</option>
            <option>Brouillon</option>
        </select>
    </div>

    <div class="panel">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Catégorie</th>
                    <th>Auteur</th>
                    <th>Statut</th>
                    <th>Publié le</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-muted">1</td>
                    <td class="truncate">Sed molestiae omnis ratione ea enim ea</td>
                    <td class="text-muted">Vitae</td>
                    <td class="text-muted">Annetta Runolfsson</td>
                    <td><span class="badge badge-published">Publié</span></td>
                    <td class="text-muted">21 jan. 2012</td>
                    <td>
                        <div class="actions"><button class="btn btn-edit" onclick="openEdit()">Éditer</button><button
                                class="btn btn-danger">Suppr.</button></div>
                    </td>
                </tr>
                <tr>
                    <td class="text-muted">2</td>
                    <td class="truncate">Sit ad perferendis possimus ut</td>
                    <td class="text-muted">Vitae</td>
                    <td class="text-muted">Janet Davis</td>
                    <td><span class="badge badge-published">Publié</span></td>
                    <td class="text-muted">20 nov. 1996</td>
                    <td>
                        <div class="actions"><button class="btn btn-edit" onclick="openEdit()">Éditer</button><button
                                class="btn btn-danger">Suppr.</button></div>
                    </td>
                </tr>
                <tr>
                    <td class="text-muted">3</td>
                    <td class="truncate">Veniam maxime autem enim</td>
                    <td class="text-muted">Vitae</td>
                    <td class="text-muted">Madalyn Lowe</td>
                    <td><span class="badge badge-published">Publié</span></td>
                    <td class="text-muted">1 oct. 1990</td>
                    <td>
                        <div class="actions"><button class="btn btn-edit" onclick="openEdit()">Éditer</button><button
                                class="btn btn-danger">Suppr.</button></div>
                    </td>
                </tr>
                <tr>
                    <td class="text-muted">4</td>
                    <td class="truncate">Tempora aut et incidunt ad ipsa</td>
                    <td class="text-muted">Vitae</td>
                    <td class="text-muted">Alena Heathcote</td>
                    <td><span class="badge badge-draft">Brouillon</span></td>
                    <td class="text-muted">—</td>
                    <td>
                        <div class="actions"><button class="btn btn-edit" onclick="openEdit()">Éditer</button><button
                                class="btn btn-danger">Suppr.</button></div>
                    </td>
                </tr>
                <tr>
                    <td class="text-muted">5</td>
                    <td class="truncate">Cumque itaque dolorum non est praesentium</td>
                    <td class="text-muted">Vitae</td>
                    <td class="text-muted">Brennan Purdy II</td>
                    <td><span class="badge badge-draft">Brouillon</span></td>
                    <td class="text-muted">—</td>
                    <td>
                        <div class="actions"><button class="btn btn-edit" onclick="openEdit()">Éditer</button><button
                                class="btn btn-danger">Suppr.</button></div>
                    </td>
                </tr>
                <tr>
                    <td class="text-muted">27</td>
                    <td class="truncate">Excepturi eligendi aliquid iste laboriosam et soluta cum</td>
                    <td class="text-muted">Optio</td>
                    <td class="text-muted">Jacklyn Lueilwitz</td>
                    <td><span class="badge badge-published">Publié</span></td>
                    <td class="text-muted">15 jul. 2015</td>
                    <td>
                        <div class="actions"><button class="btn btn-edit" onclick="openEdit()">Éditer</button><button
                                class="btn btn-danger">Suppr.</button></div>
                    </td>
                </tr>
                <tr>
                    <td class="text-muted">31</td>
                    <td class="truncate">Aut repellat ut qui et</td>
                    <td class="text-muted">Aperiam</td>
                    <td class="text-muted">Dr. Travon Kirlin</td>
                    <td><span class="badge badge-published">Publié</span></td>
                    <td class="text-muted">8 oct. 2019</td>
                    <td>
                        <div class="actions"><button class="btn btn-edit" onclick="openEdit()">Éditer</button><button
                                class="btn btn-danger">Suppr.</button></div>
                    </td>
                </tr>
                <tr>
                    <td class="text-muted">50</td>
                    <td class="truncate">Sed laudantium facilis dolore non sunt</td>
                    <td class="text-muted">Tenetur</td>
                    <td class="text-muted">Esteban Murphy</td>
                    <td><span class="badge badge-published">Publié</span></td>
                    <td class="text-muted">4 nov. 1980</td>
                    <td>
                        <div class="actions"><button class="btn btn-edit" onclick="openEdit()">Éditer</button><button
                                class="btn btn-danger">Suppr.</button></div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="pagination">
            <button class="page-btn active">1</button>
            <button class="page-btn">2</button>
            <button class="page-btn">3</button>
            <button class="page-btn">4</button>
            <button class="page-btn">5</button>
            <button class="page-btn">→</button>
        </div>
    </div>

    <!-- CREATE MODAL -->
    <div class="modal-overlay" id="createModal">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">Nouvel article</div>
                <button class="modal-close"
                    onclick="document.getElementById('createModal').classList.remove('open')">✕</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">Titre <span class="required">*</span></label>
                    <input type="text" class="form-control" name="title" placeholder="Titre de l'article" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="slug-de-l-article">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Catégorie <span class="required">*</span></label>
                        <select class="form-control" name="category_id" required>
                            <option value="">— Choisir —</option>
                            <option value="1">Vitae</option>
                            <option value="2">Dignissimos</option>
                            <option value="3">Optio</option>
                            <option value="4">Aperiam</option>
                            <option value="5">Tenetur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Auteur <span class="required">*</span></label>
                        <select class="form-control" name="user_id" required>
                            <option value="">— Choisir —</option>
                            <option value="6">Annetta Runolfsson</option>
                            <option value="132">Jacklyn Lueilwitz</option>
                            <option value="186">Dr. Travon Kirlin</option>
                            <option value="246">Mrs. Tia Lemke</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Contenu <span class="required">*</span></label>
                    <textarea class="form-control" name="content" placeholder="Contenu de l'article..." required></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Date de publication</label>
                    <input type="datetime-local" class="form-control" name="published_at">
                    <small style="color:var(--muted);font-size:0.72rem;margin-top:0.3rem">Laisser vide pour enregistrer
                        en brouillon</small>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-ghost"
                    onclick="document.getElementById('createModal').classList.remove('open')">Annuler</button>
                <button class="btn btn-primary">Créer l'article</button>
            </div>
        </div>
    </div>

    <!-- EDIT MODAL -->
    <div class="modal-overlay" id="editModal">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">Modifier l'article</div>
                <button class="modal-close"
                    onclick="document.getElementById('editModal').classList.remove('open')">✕</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">Titre <span class="required">*</span></label>
                    <input type="text" class="form-control" name="title"
                        value="Sed molestiae omnis ratione ea enim ea" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug"
                        value="sed-molestiae-omnis-ratione-ea-enim-ea-2071">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Catégorie <span class="required">*</span></label>
                        <select class="form-control" name="category_id" required>
                            <option value="1" selected>Vitae</option>
                            <option value="2">Dignissimos</option>
                            <option value="3">Optio</option>
                            <option value="4">Aperiam</option>
                            <option value="5">Tenetur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Auteur <span class="required">*</span></label>
                        <select class="form-control" name="user_id" required>
                            <option value="6" selected>Annetta Runolfsson</option>
                            <option value="132">Jacklyn Lueilwitz</option>
                            <option value="186">Dr. Travon Kirlin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Contenu <span class="required">*</span></label>
                    <textarea class="form-control" name="content" required>Aut amet eum voluptatem voluptatem quibusdam tempore. Quod non delectus iste. Quos quo et qui. Ullam adipisci deserunt sit velit quam quia consequatur.</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Date de publication</label>
                    <input type="datetime-local" class="form-control" name="published_at" value="2012-01-21T16:27">
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
        function openEdit() {
            document.getElementById('editModal').classList.add('open');
        }
        document.querySelectorAll('.modal-overlay').forEach(overlay => {
            overlay.addEventListener('click', e => {
                if (e.target === overlay) overlay.classList.remove('open');
            });
        });
    </script>
@endsection
