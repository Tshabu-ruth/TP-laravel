<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard — Le Blog</title>
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
            --accent2: #E67E22;
            --muted: #888;
            --border: #2E2E2E;
            --success: #27AE60;
            --warning: #F39C12;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--ink);
            min-height: 100vh;
            display: flex;
        }

        /* SIDEBAR */
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
            flex-shrink: 0;
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

        .nav-icon {
            width: 16px;
            text-align: center;
            font-size: 0.9rem;
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

        .user-avatar {
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

        .user-name {
            font-size: 0.85rem;
            font-weight: 500;
        }

        .user-role {
            font-size: 0.7rem;
            color: var(--muted);
        }

        /* MAIN */
        .main {
            margin-left: 240px;
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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

        .topbar-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .view-site {
            font-size: 0.78rem;
            color: var(--muted);
            text-decoration: none;
            padding: 0.45rem 1rem;
            border: 1px solid var(--border);
            transition: all 0.2s;
        }

        .view-site:hover {
            color: var(--ink);
            border-color: var(--muted);
        }

        .content {
            padding: 2rem;
            flex: 1;
        }

        /* STATS */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: var(--surface);
            border: 1px solid var(--border);
            padding: 1.5rem;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--accent);
        }

        .stat-card.green::before {
            background: var(--success);
        }

        .stat-card.orange::before {
            background: var(--accent2);
        }

        .stat-card.yellow::before {
            background: var(--warning);
        }

        .stat-label {
            font-size: 0.7rem;
            font-weight: 500;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 0.8rem;
        }

        .stat-value {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1;
        }

        .stat-change {
            font-size: 0.75rem;
            color: var(--muted);
            margin-top: 0.5rem;
        }

        .stat-change.up {
            color: var(--success);
        }

        /* DASHBOARD GRID */
        .dash-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 1.5rem;
        }

        .panel {
            background: var(--surface);
            border: 1px solid var(--border);
        }

        .panel-header {
            padding: 1.2rem 1.5rem;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .panel-title {
            font-size: 0.875rem;
            font-weight: 500;
        }

        .panel-action {
            font-size: 0.72rem;
            color: var(--accent);
            text-decoration: none;
        }

        .panel-action:hover {
            text-decoration: underline;
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            font-size: 0.65rem;
            font-weight: 500;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--muted);
            padding: 0.8rem 1.5rem;
            text-align: left;
            border-bottom: 1px solid var(--border);
        }

        td {
            padding: 0.9rem 1.5rem;
            font-size: 0.85rem;
            border-bottom: 1px solid var(--border);
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: var(--surface2);
        }

        .badge {
            font-size: 0.65rem;
            font-weight: 500;
            padding: 0.25rem 0.6rem;
            border-radius: 2px;
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }

        .badge-published {
            background: rgba(39, 174, 96, 0.15);
            color: var(--success);
        }

        .badge-draft {
            background: rgba(136, 136, 136, 0.15);
            color: var(--muted);
        }

        .text-muted {
            color: var(--muted);
            font-size: 0.8rem;
        }

        .truncate {
            max-width: 260px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        /* ACTIVITY FEED */
        .activity-list {
            padding: 0.5rem 0;
        }

        .activity-item {
            padding: 0.9rem 1.5rem;
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            border-bottom: 1px solid var(--border);
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--accent);
            margin-top: 5px;
            flex-shrink: 0;
        }

        .activity-dot.green {
            background: var(--success);
        }

        .activity-dot.orange {
            background: var(--accent2);
        }

        .activity-text {
            font-size: 0.83rem;
            line-height: 1.4;
        }

        .activity-time {
            font-size: 0.7rem;
            color: var(--muted);
            margin-top: 0.2rem;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .content {
            animation: fadeIn 0.3s ease;
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
            <a href="dashboard.html" class="nav-item active">
                <span class="nav-icon">◈</span> Dashboard
            </a>

            <div class="nav-section-label">Contenu</div>
            <a href="articles.html" class="nav-item">
                <span class="nav-icon">✦</span> Articles
                <span class="nav-badge">50</span>
            </a>
            <a href="categories.html" class="nav-item">
                <span class="nav-icon">◎</span> Catégories
            </a>
            <a href="#" class="nav-item">
                <span class="nav-icon">◇</span> Commentaires
                <span class="nav-badge">250</span>
            </a>

            <div class="nav-section-label">Utilisateurs</div>
            <a href="users.html" class="nav-item">
                <span class="nav-icon">○</span> Utilisateurs
            </a>

            <div class="nav-section-label">Paramètres</div>
            <a href="#" class="nav-item">
                <span class="nav-icon">◻</span> Réglages
            </a>
        </nav>
        <div class="sidebar-footer">
            <div class="sidebar-user">
                <div class="user-avatar">A</div>
                <div>
                    <div class="user-name">Admin</div>
                    <div class="user-role">Super administrateur</div>
                </div>
            </div>
        </div>
    </aside>

    <div class="main">
        <div class="topbar">
            <div class="topbar-title">Dashboard</div>
            <div class="topbar-actions">
                <a href="index.html" class="view-site">↗ Voir le blog</a>
            </div>
        </div>

        <div class="content">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-label">Articles publiés</div>
                    <div class="stat-value">26</div>
                    <div class="stat-change up">↑ Sur 50 total</div>
                </div>
                <div class="stat-card green">
                    <div class="stat-label">Commentaires</div>
                    <div class="stat-value">250</div>
                    <div class="stat-change">5 par article en moyenne</div>
                </div>
                <div class="stat-card orange">
                    <div class="stat-label">Utilisateurs</div>
                    <div class="stat-value">305</div>
                    <div class="stat-change up">↑ +12 ce mois</div>
                </div>
                <div class="stat-card yellow">
                    <div class="stat-label">Catégories</div>
                    <div class="stat-value">5</div>
                    <div class="stat-change">10 articles / catégorie</div>
                </div>
            </div>

            <div class="dash-grid">
                <div class="panel">
                    <div class="panel-header">
                        <div class="panel-title">Articles récents</div>
                        <a href="articles.html" class="panel-action">Voir tout →</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Catégorie</th>
                                <th>Statut</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="truncate">Excepturi eligendi aliquid iste laboriosam</td>
                                <td class="text-muted">Optio</td>
                                <td><span class="badge badge-published">Publié</span></td>
                                <td class="text-muted">15 jul. 2015</td>
                            </tr>
                            <tr>
                                <td class="truncate">Aut repellat ut qui et</td>
                                <td class="text-muted">Aperiam</td>
                                <td><span class="badge badge-published">Publié</span></td>
                                <td class="text-muted">8 oct. 2019</td>
                            </tr>
                            <tr>
                                <td class="truncate">Dignissimos et eaque aut sed fugiat et</td>
                                <td class="text-muted">Optio</td>
                                <td><span class="badge badge-published">Publié</span></td>
                                <td class="text-muted">23 sep. 1988</td>
                            </tr>
                            <tr>
                                <td class="truncate">Aut eveniet libero autem voluptatum eos</td>
                                <td class="text-muted">Optio</td>
                                <td><span class="badge badge-draft">Brouillon</span></td>
                                <td class="text-muted">—</td>
                            </tr>
                            <tr>
                                <td class="truncate">Veritatis ut corrupti minus harum</td>
                                <td class="text-muted">Optio</td>
                                <td><span class="badge badge-published">Publié</span></td>
                                <td class="text-muted">6 fév. 1984</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="panel">
                    <div class="panel-header">
                        <div class="panel-title">Activité récente</div>
                    </div>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-dot green"></div>
                            <div>
                                <div class="activity-text">Nouvel article publié par <strong>Jacklyn Lueilwitz</strong>
                                </div>
                                <div class="activity-time">Il y a 2 heures</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-dot"></div>
                            <div>
                                <div class="activity-text">Nouveau commentaire sur <strong>Excepturi
                                        eligendi...</strong></div>
                                <div class="activity-time">Il y a 4 heures</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-dot orange"></div>
                            <div>
                                <div class="activity-text">Nouvel utilisateur inscrit : <strong>Mikel Lynch</strong>
                                </div>
                                <div class="activity-time">Il y a 6 heures</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-dot green"></div>
                            <div>
                                <div class="activity-text">Article modifié par <strong>Dr. Travon Kirlin</strong></div>
                                <div class="activity-time">Hier à 14:32</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-dot"></div>
                            <div>
                                <div class="activity-text">5 nouveaux commentaires en attente de modération</div>
                                <div class="activity-time">Hier à 09:15</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
