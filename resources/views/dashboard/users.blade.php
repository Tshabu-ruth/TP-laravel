@extends('dashboard')

@section('content')
        <div class="content">
            <div class="toolbar">
                <input type="search" class="search-input" placeholder="Rechercher un utilisateur...">
            </div>

            <div class="panel">
                <div class="panel-header">
                    <div class="panel-title">Tous les utilisateurs (305)</div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Vérifié</th>
                            <th>Inscrit le</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-muted">1</td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-init" style="background:#7B4F9E;color:#fff">CP</div>Prof. Collin
                                    Predovic Jr.
                                </div>
                            </td>
                            <td class="text-muted">jesus.wintheiser@example.com</td>
                            <td><span class="verified">✓ Vérifié</span></td>
                            <td class="text-muted">17 avr. 2026</td>
                            <td>
                                <div class="actions"><button class="btn btn-edit"
                                        onclick="openEdit('Prof. Collin Predovic Jr.','jesus.wintheiser@example.com')">Éditer</button><button
                                        class="btn btn-danger">Suppr.</button></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">2</td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-init" style="background:#2E86AB;color:#fff">IM</div>Mrs. Ima Metz
                                </div>
                            </td>
                            <td class="text-muted">maude.graham@example.com</td>
                            <td><span class="verified">✓ Vérifié</span></td>
                            <td class="text-muted">17 avr. 2026</td>
                            <td>
                                <div class="actions"><button class="btn btn-edit"
                                        onclick="openEdit('Mrs. Ima Metz','maude.graham@example.com')">Éditer</button><button
                                        class="btn btn-danger">Suppr.</button></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">6</td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-init" style="background:#C0392B;color:#fff">AR</div>Annetta
                                    Runolfsson
                                </div>
                            </td>
                            <td class="text-muted">valentine11@example.org</td>
                            <td><span class="verified">✓ Vérifié</span></td>
                            <td class="text-muted">17 avr. 2026</td>
                            <td>
                                <div class="actions"><button class="btn btn-edit"
                                        onclick="openEdit('Annetta Runolfsson','valentine11@example.org')">Éditer</button><button
                                        class="btn btn-danger">Suppr.</button></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">132</td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-init" style="background:#27AE60;color:#fff">JL</div>Jacklyn
                                    Lueilwitz
                                </div>
                            </td>
                            <td class="text-muted">jacobi.vesta@example.com</td>
                            <td><span class="verified">✓ Vérifié</span></td>
                            <td class="text-muted">17 avr. 2026</td>
                            <td>
                                <div class="actions"><button class="btn btn-edit"
                                        onclick="openEdit('Jacklyn Lueilwitz','jacobi.vesta@example.com')">Éditer</button><button
                                        class="btn btn-danger">Suppr.</button></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">186</td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-init" style="background:#E67E22;color:#fff">DT</div>Dr. Travon
                                    Kirlin
                                </div>
                            </td>
                            <td class="text-muted">gspinka@example.org</td>
                            <td><span class="verified">✓ Vérifié</span></td>
                            <td class="text-muted">17 avr. 2026</td>
                            <td>
                                <div class="actions"><button class="btn btn-edit"
                                        onclick="openEdit('Dr. Travon Kirlin','gspinka@example.org')">Éditer</button><button
                                        class="btn btn-danger">Suppr.</button></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">246</td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-init" style="background:#8E44AD;color:#fff">TL</div>Mrs. Tia
                                    Lemke
                                </div>
                            </td>
                            <td class="text-muted">tamia85@example.org</td>
                            <td><span class="verified">✓ Vérifié</span></td>
                            <td class="text-muted">17 avr. 2026</td>
                            <td>
                                <div class="actions"><button class="btn btn-edit"
                                        onclick="openEdit('Mrs. Tia Lemke','tamia85@example.org')">Éditer</button><button
                                        class="btn btn-danger">Suppr.</button></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">305</td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-init" style="background:#1ABC9C;color:#fff">ML</div>Mikel Lynch
                                </div>
                            </td>
                            <td class="text-muted">sbraun@example.net</td>
                            <td><span class="verified">✓ Vérifié</span></td>
                            <td class="text-muted">17 avr. 2026</td>
                            <td>
                                <div class="actions"><button class="btn btn-edit"
                                        onclick="openEdit('Mikel Lynch','sbraun@example.net')">Éditer</button><button
                                        class="btn btn-danger">Suppr.</button></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="pagination">
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <button class="page-btn">…</button>
                    <button class="page-btn">16</button>
                    <button class="page-btn">→</button>
                </div>
            </div>
        </div>
    </div>

    <!-- CREATE MODAL -->
    <div class="modal-overlay" id="createModal">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">Nouvel utilisateur</div>
                <button class="modal-close"
                    onclick="document.getElementById('createModal').classList.remove('open')">✕</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">Nom complet <span class="required">*</span></label>
                    <input type="text" class="form-control" name="name" placeholder="Prénom Nom" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Email <span class="required">*</span></label>
                    <input type="email" class="form-control" name="email" placeholder="utilisateur@exemple.com"
                        required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Mot de passe <span class="required">*</span></label>
                        <input type="password" class="form-control" name="password" placeholder="••••••••" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Confirmation <span class="required">*</span></label>
                        <input type="password" class="form-control" name="password_confirmation"
                            placeholder="••••••••" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" style="display:flex;align-items:center;gap:0.5rem;cursor:pointer">
                        <input type="checkbox" name="email_verified" style="accent-color:var(--accent)">
                        Marquer l'email comme vérifié
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-ghost"
                    onclick="document.getElementById('createModal').classList.remove('open')">Annuler</button>
                <button class="btn btn-primary">Créer l'utilisateur</button>
            </div>
        </div>
    </div>

    <!-- EDIT MODAL -->
    <div class="modal-overlay" id="editModal">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">Modifier l'utilisateur</div>
                <button class="modal-close"
                    onclick="document.getElementById('editModal').classList.remove('open')">✕</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">Nom complet <span class="required">*</span></label>
                    <input type="text" class="form-control" id="edit-name" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Email <span class="required">*</span></label>
                    <input type="email" class="form-control" id="edit-email" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Nouveau mot de passe</label>
                    <input type="password" class="form-control" name="password"
                        placeholder="Laisser vide pour ne pas changer">
                    <div class="form-hint" style="margin-top:0.3rem">Laisser vide pour conserver le mot de passe
                        actuel.</div>
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
        function openEdit(name, email) {
            document.getElementById('edit-name').value = name;
            document.getElementById('edit-email').value = email;
            document.getElementById('editModal').classList.add('open');
        }
        document.querySelectorAll('.modal-overlay').forEach(overlay => {
            overlay.addEventListener('click', e => {
                if (e.target === overlay) overlay.classList.remove('open');
            });
        });
    </script>
@endsection
