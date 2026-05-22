<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réglages — Dashboard</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --bg: #0F0F0F;
            --surface: #1A1A1A;
            --surface2: #242424;
            --ink: #F0EDE8;
            --accent: #C0392B;
            --muted: #888;
            --border: #2E2E2E;
            --success: #27AE60;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--ink);
            min-height: 100vh;
            display: flex;
        }

        .sidebar {
            width: 240px;
            background: var(--surface);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            overflow-y: auto;
        }

        .sidebar-brand {
            padding: 1.5rem;
            border-bottom: 1px solid var(--border);
        }

        .sidebar-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            color: var(--ink);
            text-decoration: none;
            display: block;
        }

        .sidebar-sub {
            font-size: 0.7rem;
            color: var(--muted);
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-top: 0.2rem;
        }

        .sidebar-nav {
            padding: 1rem 0;
            flex: 1;
        }

        .nav-section-label {
            font-size: 0.62rem;
            font-weight: 500;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--muted);
            padding: 1rem 1.5rem 0.5rem;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.7rem 1.5rem;
            text-decoration: none;
            color: var(--muted);
            font-size: 0.875rem;
            transition: all 0.15s;
            border-left: 2px solid transparent;
        }

        .nav-item:hover {
            color: var(--ink);
            background: var(--surface2);
        }

        .nav-item.active {
            color: var(--ink);
            background: var(--surface2);
            border-left-color: var(--accent);
        }

        .nav-badge {
            margin-left: auto;
            background: var(--accent);
            color: #fff;
            font-size: 0.65rem;
            padding: 0.15rem 0.4rem;
            border-radius: 2px;
        }

        .sidebar-footer {
            padding: 1rem 1.5rem;
            border-top: 1px solid var(--border);
        }

        .sidebar-user {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .u-av {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.8rem;
            color: #fff;
            flex-shrink: 0;
        }

        .main {
            margin-left: 240px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .topbar {
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            padding: 0 2rem;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .topbar-title {
            font-size: 0.95rem;
            font-weight: 500;
        }

        .content {
            padding: 2rem;
            flex: 1;
            display: grid;
            grid-template-columns: 220px 1fr;
            gap: 2rem;
            align-items: start;
        }

        /* SETTINGS NAV */
        .settings-nav {
            background: var(--surface);
            border: 1px solid var(--border);
            position: sticky;
            top: 72px;
        }

        .settings-nav-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1.2rem;
            font-size: 0.85rem;
            color: var(--muted);
            cursor: pointer;
            border-left: 2px solid transparent;
            transition: all 0.15s;
            background: none;
            border-top: none;
            border-right: none;
            border-bottom: 1px solid var(--border);
            width: 100%;
            text-align: left;
            font-family: 'DM Sans', sans-serif;
        }

        .settings-nav-item:last-child {
            border-bottom: none;
        }

        .settings-nav-item:hover {
            color: var(--ink);
            background: var(--surface2);
        }

        .settings-nav-item.active {
            color: var(--ink);
            border-left-color: var(--accent);
            background: var(--surface2);
        }

        /* PANELS */
        .settings-panels {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .panel {
            background: var(--surface);
            border: 1px solid var(--border);
        }

        .panel-header {
            padding: 1.3rem 1.5rem;
            border-bottom: 1px solid var(--border);
        }

        .panel-title {
            font-size: 0.95rem;
            font-weight: 500;
            margin-bottom: 0.2rem;
        }

        .panel-desc {
            font-size: 0.78rem;
            color: var(--muted);
        }

        .panel-body {
            padding: 1.5rem;
        }

        .panel-footer {
            padding: 1rem 1.5rem;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: flex-end;
            gap: 0.8rem;
        }

        /* FORMS */
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
            margin-bottom: 1.2rem;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }

        .form-label {
            font-size: 0.72rem;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--muted);
        }

        .form-control {
            padding: 0.7rem 1rem;
            background: var(--bg);
            border: 1px solid var(--border);
            color: var(--ink);
            font-family: 'DM Sans', sans-serif;
            font-size: 0.9rem;
            outline: none;
            transition: border-color 0.2s;
            width: 100%;
        }

        .form-control:focus {
            border-color: var(--accent);
        }

        .form-hint {
            font-size: 0.72rem;
            color: var(--muted);
            margin-top: 0.3rem;
            line-height: 1.5;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 80px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        /* TOGGLE */
        .toggle-row {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 2rem;
            padding: 1rem 0;
            border-bottom: 1px solid var(--border);
        }

        .toggle-row:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .toggle-row:first-child {
            padding-top: 0;
        }

        .toggle-info {}

        .toggle-name {
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 0.2rem;
        }

        .toggle-desc {
            font-size: 0.78rem;
            color: var(--muted);
            line-height: 1.5;
        }

        .toggle {
            position: relative;
            width: 44px;
            height: 24px;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .toggle input {
            opacity: 0;
            width: 0;
            height: 0;
            position: absolute;
        }

        .toggle-slider {
            position: absolute;
            inset: 0;
            background: #3A3A3A;
            border-radius: 12px;
            cursor: pointer;
            transition: background 0.2s;
        }

        .toggle-slider::before {
            content: '';
            position: absolute;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #888;
            bottom: 3px;
            left: 3px;
            transition: all 0.2s;
        }

        .toggle input:checked+.toggle-slider {
            background: var(--accent);
        }

        .toggle input:checked+.toggle-slider::before {
            background: #fff;
            transform: translateX(20px);
        }

        /* SELECT */
        select.form-control {
            cursor: pointer;
        }

        /* DANGER ZONE */
        .danger-zone {
            border-color: #E74C3C;
        }

        .danger-zone .panel-header {
            border-bottom-color: #E74C3C;
        }

        .danger-zone .panel-title {
            color: #E74C3C;
        }

        .danger-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 0;
            border-bottom: 1px solid var(--border);
            gap: 2rem;
        }

        .danger-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .danger-item:first-child {
            padding-top: 0;
        }

        .danger-item-info .name {
            font-size: 0.875rem;
            font-weight: 500;
        }

        .danger-item-info .desc {
            font-size: 0.78rem;
            color: var(--muted);
            margin-top: 0.2rem;
            line-height: 1.5;
        }

        .btn {
            padding: 0.55rem 1.2rem;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.8rem;
            font-weight: 500;
            cursor: pointer;
            border: none;
            transition: all 0.2s;
        }

        .btn-primary {
            background: var(--accent);
            color: #fff;
        }

        .btn-primary:hover {
            opacity: 0.85;
        }

        .btn-ghost {
            background: transparent;
            color: var(--muted);
            border: 1px solid var(--border);
        }

        .btn-ghost:hover {
            color: var(--ink);
            border-color: var(--muted);
        }

        .btn-danger-outline {
            background: transparent;
            color: #E74C3C;
            border: 1px solid #E74C3C;
            white-space: nowrap;
        }

        .btn-danger-outline:hover {
            background: #E74C3C;
            color: #fff;
        }

        .required {
            color: var(--accent);
        }

        /* AVATAR UPLOAD */
        .avatar-upload {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .avatar-preview {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            background: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff;
            flex-shrink: 0;
        }

        .avatar-actions {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .avatar-hint {
            font-size: 0.72rem;
            color: var(--muted);
        }

        .alert-success {
            background: rgba(39, 174, 96, 0.1);
            border: 1px solid rgba(39, 174, 96, 0.3);
            color: var(--success);
            padding: 0.8rem 1.2rem;
            font-size: 0.85rem;
            margin-bottom: 1.5rem;
            display: none;
        }

        .alert-success.show {
            display: block;
        }
    </style>
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
            <a href="comments.html" class="nav-item"><span>◇</span> Commentaires <span class="nav-badge">250</span></a>
            <div class="nav-section-label">Utilisateurs</div>
            <a href="users.html" class="nav-item"><span>○</span> Utilisateurs</a>
            <div class="nav-section-label">Paramètres</div>
            <a href="settings.html" class="nav-item active"><span>◻</span> Réglages</a>
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
            <div class="topbar-title">Réglages</div>
            <a href="index.html"
                style="font-size:0.78rem;color:var(--muted);text-decoration:none;padding:0.45rem 1rem;border:1px solid var(--border)">↗
                Voir le blog</a>
        </div>

        <div class="content">

            <!-- NAV SETTINGS -->
            <nav class="settings-nav">
                <button class="settings-nav-item active" onclick="showSection('general',this)">◈ Général</button>
                <button class="settings-nav-item" onclick="showSection('compte',this)">○ Mon compte</button>
                <button class="settings-nav-item" onclick="showSection('lecture',this)">◎ Lecture</button>
                <button class="settings-nav-item" onclick="showSection('commentaires',this)">◇ Commentaires</button>
                <button class="settings-nav-item" onclick="showSection('email',this)">✉ Email</button>
                <button class="settings-nav-item" onclick="showSection('seo',this)">◆ SEO</button>
                <button class="settings-nav-item" onclick="showSection('danger',this)"
                    style="color:#E74C3C;margin-top:auto">⚠ Zone de danger</button>
            </nav>

            <!-- PANELS -->
            <div class="settings-panels">

                <!-- GENERAL -->
                <div class="panel" id="section-general">
                    <div class="panel-header">
                        <div class="panel-title">Paramètres généraux</div>
                        <div class="panel-desc">Informations de base de votre blog</div>
                    </div>
                    <div class="panel-body">
                        <div id="alert-general" class="alert-success">✓ Modifications enregistrées avec succès.</div>
                        <div class="form-group">
                            <label class="form-label">Nom du blog <span class="required">*</span></label>
                            <input type="text" class="form-control" name="site_name" value="Le Blog">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="site_description">Un espace de réflexion, d'exploration et de partage. Nous publions des articles soignés sur des sujets qui comptent vraiment.</textarea>
                            <div class="form-hint">Utilisé dans le header et le SEO. Maximum 160 caractères.</div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">URL du site <span class="required">*</span></label>
                                <input type="url" class="form-control" name="site_url"
                                    value="https://leblog.example.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email de contact <span class="required">*</span></label>
                                <input type="email" class="form-control" name="admin_email"
                                    value="admin@leblog.example.com">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Langue</label>
                                <select class="form-control" name="locale">
                                    <option value="fr" selected>Français</option>
                                    <option value="en">English</option>
                                    <option value="es">Español</option>
                                    <option value="de">Deutsch</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Fuseau horaire</label>
                                <select class="form-control" name="timezone">
                                    <option selected>Europe/Paris (UTC+2)</option>
                                    <option>Europe/London (UTC+1)</option>
                                    <option>America/New_York (UTC-4)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-ghost">Annuler</button>
                        <button class="btn btn-primary" onclick="showAlert('alert-general')">Enregistrer</button>
                    </div>
                </div>

                <!-- COMPTE -->
                <div class="panel" id="section-compte" style="display:none">
                    <div class="panel-header">
                        <div class="panel-title">Mon compte</div>
                        <div class="panel-desc">Gérez votre profil administrateur</div>
                    </div>
                    <div class="panel-body">
                        <div id="alert-compte" class="alert-success">✓ Profil mis à jour avec succès.</div>
                        <div class="avatar-upload">
                            <div class="avatar-preview">A</div>
                            <div class="avatar-actions">
                                <button class="btn btn-ghost" style="font-size:0.78rem;padding:0.4rem 1rem">Changer
                                    l'avatar</button>
                                <div class="avatar-hint">JPG, PNG. Max 2 MB.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Nom <span class="required">*</span></label>
                                <input type="text" class="form-control" value="Admin">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email <span class="required">*</span></label>
                                <input type="email" class="form-control" value="admin@leblog.example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Bio</label>
                            <textarea class="form-control" placeholder="Parlez de vous..."></textarea>
                        </div>
                        <div style="border-top:1px solid var(--border);padding-top:1.5rem;margin-top:0.5rem">
                            <div class="panel-title" style="margin-bottom:1rem;font-size:0.85rem">Changer le mot de
                                passe</div>
                            <div class="form-group">
                                <label class="form-label">Mot de passe actuel</label>
                                <input type="password" class="form-control" placeholder="••••••••">
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">Nouveau mot de passe</label>
                                    <input type="password" class="form-control" placeholder="••••••••">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Confirmer</label>
                                    <input type="password" class="form-control" placeholder="••••••••">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-ghost">Annuler</button>
                        <button class="btn btn-primary" onclick="showAlert('alert-compte')">Sauvegarder</button>
                    </div>
                </div>

                <!-- LECTURE -->
                <div class="panel" id="section-lecture" style="display:none">
                    <div class="panel-header">
                        <div class="panel-title">Paramètres de lecture</div>
                        <div class="panel-desc">Contrôlez comment le contenu est affiché</div>
                    </div>
                    <div class="panel-body">
                        <div id="alert-lecture" class="alert-success">✓ Modifications enregistrées.</div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Articles par page</label>
                                <input type="number" class="form-control" name="posts_per_page" value="10"
                                    min="1" max="50">
                                <div class="form-hint">Nombre d'articles affichés sur la liste principale.</div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Articles à la une</label>
                                <input type="number" class="form-control" name="featured_count" value="3"
                                    min="1" max="10">
                                <div class="form-hint">Nombre d'articles mis en avant sur la page d'accueil.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Page d'accueil — afficher</label>
                            <select class="form-control" name="homepage_display">
                                <option selected>Les derniers articles</option>
                                <option>Une page statique</option>
                            </select>
                        </div>
                        <div class="toggle-row">
                            <div class="toggle-info">
                                <div class="toggle-name">Afficher l'extrait</div>
                                <div class="toggle-desc">Affiche un résumé de l'article au lieu du contenu complet dans
                                    les listes.</div>
                            </div>
                            <label class="toggle"><input type="checkbox" checked><span
                                    class="toggle-slider"></span></label>
                        </div>
                        <div class="toggle-row">
                            <div class="toggle-info">
                                <div class="toggle-name">Afficher les articles similaires</div>
                                <div class="toggle-desc">Suggère des articles similaires en bas de chaque page
                                    d'article.</div>
                            </div>
                            <label class="toggle"><input type="checkbox" checked><span
                                    class="toggle-slider"></span></label>
                        </div>
                        <div class="toggle-row">
                            <div class="toggle-info">
                                <div class="toggle-name">Flux RSS activé</div>
                                <div class="toggle-desc">Génère un flux RSS/Atom pour votre blog.</div>
                            </div>
                            <label class="toggle"><input type="checkbox" checked><span
                                    class="toggle-slider"></span></label>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-ghost">Annuler</button>
                        <button class="btn btn-primary" onclick="showAlert('alert-lecture')">Enregistrer</button>
                    </div>
                </div>

                <!-- COMMENTAIRES -->
                <div class="panel" id="section-commentaires" style="display:none">
                    <div class="panel-header">
                        <div class="panel-title">Paramètres des commentaires</div>
                        <div class="panel-desc">Modérez et configurez les commentaires de votre blog</div>
                    </div>
                    <div class="panel-body">
                        <div id="alert-commentaires" class="alert-success">✓ Modifications enregistrées.</div>
                        <div class="toggle-row">
                            <div class="toggle-info">
                                <div class="toggle-name">Activer les commentaires</div>
                                <div class="toggle-desc">Autoriser les visiteurs à commenter les articles. Peut être
                                    désactivé par article.</div>
                            </div>
                            <label class="toggle"><input type="checkbox" checked><span
                                    class="toggle-slider"></span></label>
                        </div>
                        <div class="toggle-row">
                            <div class="toggle-info">
                                <div class="toggle-name">Modération manuelle</div>
                                <div class="toggle-desc">Les commentaires doivent être approuvés manuellement avant
                                    publication.</div>
                            </div>
                            <label class="toggle"><input type="checkbox" checked><span
                                    class="toggle-slider"></span></label>
                        </div>
                        <div class="toggle-row">
                            <div class="toggle-info">
                                <div class="toggle-name">Notification par email</div>
                                <div class="toggle-desc">Recevoir un email à chaque nouveau commentaire en attente.
                                </div>
                            </div>
                            <label class="toggle"><input type="checkbox" checked><span
                                    class="toggle-slider"></span></label>
                        </div>
                        <div class="toggle-row">
                            <div class="toggle-info">
                                <div class="toggle-name">Anti-spam automatique</div>
                                <div class="toggle-desc">Filtrer automatiquement les commentaires suspects.</div>
                            </div>
                            <label class="toggle"><input type="checkbox"><span class="toggle-slider"></span></label>
                        </div>
                        <div class="form-group" style="margin-top:1.5rem">
                            <label class="form-label">Fermer les commentaires après</label>
                            <select class="form-control" name="close_comments_after">
                                <option>Ne jamais fermer</option>
                                <option>14 jours</option>
                                <option selected>30 jours</option>
                                <option>60 jours</option>
                                <option>90 jours</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Mots blacklistés</label>
                            <textarea class="form-control" name="blacklist" placeholder="Un mot par ligne ou séparés par des espaces..."></textarea>
                            <div class="form-hint">Un commentaire contenant ces mots sera automatiquement mis en spam.
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-ghost">Annuler</button>
                        <button class="btn btn-primary" onclick="showAlert('alert-commentaires')">Enregistrer</button>
                    </div>
                </div>

                <!-- EMAIL -->
                <div class="panel" id="section-email" style="display:none">
                    <div class="panel-header">
                        <div class="panel-title">Configuration email</div>
                        <div class="panel-desc">Paramètres SMTP pour l'envoi des emails</div>
                    </div>
                    <div class="panel-body">
                        <div id="alert-email" class="alert-success">✓ Configuration email sauvegardée.</div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Serveur SMTP</label>
                                <input type="text" class="form-control" name="smtp_host"
                                    placeholder="smtp.example.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Port</label>
                                <input type="number" class="form-control" name="smtp_port" placeholder="587">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Utilisateur</label>
                                <input type="text" class="form-control" name="smtp_user"
                                    placeholder="user@example.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" name="smtp_password"
                                    placeholder="••••••••">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Chiffrement</label>
                            <select class="form-control" name="smtp_encryption">
                                <option value="tls" selected>TLS</option>
                                <option value="ssl">SSL</option>
                                <option value="">Aucun</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Email expéditeur</label>
                                <input type="email" class="form-control" name="from_email"
                                    placeholder="noreply@leblog.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nom expéditeur</label>
                                <input type="text" class="form-control" name="from_name" value="Le Blog">
                            </div>
                        </div>
                        <button class="btn btn-ghost" style="font-size:0.78rem">Envoyer un email de test</button>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-ghost">Annuler</button>
                        <button class="btn btn-primary" onclick="showAlert('alert-email')">Enregistrer</button>
                    </div>
                </div>

                <!-- SEO -->
                <div class="panel" id="section-seo" style="display:none">
                    <div class="panel-header">
                        <div class="panel-title">Optimisation SEO</div>
                        <div class="panel-desc">Améliorez le référencement de votre blog</div>
                    </div>
                    <div class="panel-body">
                        <div id="alert-seo" class="alert-success">✓ Paramètres SEO enregistrés.</div>
                        <div class="form-group">
                            <label class="form-label">Titre SEO par défaut</label>
                            <input type="text" class="form-control" name="seo_title"
                                value="Le Blog — Des idées qui valent la peine d'être lues">
                            <div class="form-hint">Utilisé quand aucun titre spécifique n'est défini. Max 60
                                caractères.</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Méta description par défaut</label>
                            <textarea class="form-control" name="seo_description">Un espace de réflexion, d'exploration et de partage. Nous publions des articles soignés sur des sujets qui comptent vraiment.</textarea>
                            <div class="form-hint">Max 160 caractères.</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Format du titre des articles</label>
                            <input type="text" class="form-control" name="title_format"
                                value="{post_title} — Le Blog">
                            <div class="form-hint">Variables disponibles : {post_title}, {site_name}, {category_name}
                            </div>
                        </div>
                        <div class="toggle-row">
                            <div class="toggle-info">
                                <div class="toggle-name">Sitemap XML</div>
                                <div class="toggle-desc">Génère automatiquement un sitemap XML pour les moteurs de
                                    recherche.</div>
                            </div>
                            <label class="toggle"><input type="checkbox" checked><span
                                    class="toggle-slider"></span></label>
                        </div>
                        <div class="toggle-row">
                            <div class="toggle-info">
                                <div class="toggle-name">Open Graph (réseaux sociaux)</div>
                                <div class="toggle-desc">Génère les balises Open Graph pour un meilleur partage sur les
                                    réseaux.</div>
                            </div>
                            <label class="toggle"><input type="checkbox" checked><span
                                    class="toggle-slider"></span></label>
                        </div>
                        <div class="toggle-row">
                            <div class="toggle-info">
                                <div class="toggle-name">Twitter Cards</div>
                                <div class="toggle-desc">Génère les balises Twitter Card pour un partage optimisé.
                                </div>
                            </div>
                            <label class="toggle"><input type="checkbox" checked><span
                                    class="toggle-slider"></span></label>
                        </div>
                        <div class="form-group" style="margin-top:1.5rem">
                            <label class="form-label">Code de vérification Google Search Console</label>
                            <input type="text" class="form-control" name="google_verify"
                                placeholder="google-site-verification=...">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Balises &lt;head&gt; personnalisées</label>
                            <textarea class="form-control" name="custom_head" placeholder="<!-- Scripts et balises supplémentaires... -->"></textarea>
                            <div class="form-hint">Inséré dans le &lt;head&gt; de chaque page. Utilisez avec
                                précaution.</div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-ghost">Annuler</button>
                        <button class="btn btn-primary" onclick="showAlert('alert-seo')">Enregistrer</button>
                    </div>
                </div>

                <!-- DANGER ZONE -->
                <div class="panel danger-zone" id="section-danger" style="display:none">
                    <div class="panel-header">
                        <div class="panel-title">Zone de danger</div>
                        <div class="panel-desc">Ces actions sont irréversibles. Procédez avec précaution.</div>
                    </div>
                    <div class="panel-body">
                        <div class="danger-item">
                            <div class="danger-item-info">
                                <div class="name">Vider le cache</div>
                                <div class="desc">Supprime tous les fichiers en cache. Le blog régénérera le cache à
                                    la prochaine visite.</div>
                            </div>
                            <button class="btn btn-danger-outline">Vider le cache</button>
                        </div>
                        <div class="danger-item">
                            <div class="danger-item-info">
                                <div class="name">Supprimer tous les commentaires spam</div>
                                <div class="desc">Supprime définitivement les 8 commentaires marqués comme spam.
                                </div>
                            </div>
                            <button class="btn btn-danger-outline">Supprimer le spam</button>
                        </div>
                        <div class="danger-item">
                            <div class="danger-item-info">
                                <div class="name">Exporter les données</div>
                                <div class="desc">Télécharge une archive ZIP contenant tous les articles,
                                    commentaires et utilisateurs.</div>
                            </div>
                            <button class="btn btn-danger-outline">Exporter</button>
                        </div>
                        <div class="danger-item">
                            <div class="danger-item-info">
                                <div class="name" style="color:#E74C3C">Supprimer le blog</div>
                                <div class="desc">Supprime définitivement tout le contenu, les utilisateurs et les
                                    données. Cette action est irréversible.</div>
                            </div>
                            <button class="btn btn-danger-outline" style="border-width:2px;font-weight:600">Supprimer
                                le blog</button>
                        </div>
                    </div>
                </div>

            </div><!-- end settings-panels -->
        </div>
    </div>

    <script>
        function showSection(id, btn) {
            document.querySelectorAll('[id^="section-"]').forEach(p => p.style.display = 'none');
            document.getElementById('section-' + id).style.display = 'block';
            document.querySelectorAll('.settings-nav-item').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        }

        function showAlert(id) {
            const el = document.getElementById(id);
            el.classList.add('show');
            setTimeout(() => el.classList.remove('show'), 3000);
        }
    </script>
</body>

</html>
