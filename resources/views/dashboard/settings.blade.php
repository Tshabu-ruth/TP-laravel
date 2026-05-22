@extends('dashboard')

@section('title', 'Réglages')

@section('content')
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
                <div class="panel-title--lg">Paramètres généraux</div>
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
                        <input type="url" class="form-control" name="site_url" value="https://leblog.example.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email de contact <span class="required">*</span></label>
                        <input type="email" class="form-control" name="admin_email" value="admin@leblog.example.com">
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
                <div class="panel-title--lg">Mon compte</div>
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
                    <div class="panel-title--lg" style="margin-bottom:1rem;font-size:0.85rem">Changer le mot de
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
                <div class="panel-title--lg">Paramètres de lecture</div>
                <div class="panel-desc">Contrôlez comment le contenu est affiché</div>
            </div>
            <div class="panel-body">
                <div id="alert-lecture" class="alert-success">✓ Modifications enregistrées.</div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Articles par page</label>
                        <input type="number" class="form-control" name="posts_per_page" value="10" min="1"
                            max="50">
                        <div class="form-hint">Nombre d'articles affichés sur la liste principale.</div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Articles à la une</label>
                        <input type="number" class="form-control" name="featured_count" value="3" min="1"
                            max="10">
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
                    <label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label>
                </div>
                <div class="toggle-row">
                    <div class="toggle-info">
                        <div class="toggle-name">Afficher les articles similaires</div>
                        <div class="toggle-desc">Suggère des articles similaires en bas de chaque page
                            d'article.</div>
                    </div>
                    <label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label>
                </div>
                <div class="toggle-row">
                    <div class="toggle-info">
                        <div class="toggle-name">Flux RSS activé</div>
                        <div class="toggle-desc">Génère un flux RSS/Atom pour votre blog.</div>
                    </div>
                    <label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label>
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
                <div class="panel-title--lg">Paramètres des commentaires</div>
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
                    <label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label>
                </div>
                <div class="toggle-row">
                    <div class="toggle-info">
                        <div class="toggle-name">Modération manuelle</div>
                        <div class="toggle-desc">Les commentaires doivent être approuvés manuellement avant
                            publication.</div>
                    </div>
                    <label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label>
                </div>
                <div class="toggle-row">
                    <div class="toggle-info">
                        <div class="toggle-name">Notification par email</div>
                        <div class="toggle-desc">Recevoir un email à chaque nouveau commentaire en attente.
                        </div>
                    </div>
                    <label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label>
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
                <div class="panel-title--lg">Configuration email</div>
                <div class="panel-desc">Paramètres SMTP pour l'envoi des emails</div>
            </div>
            <div class="panel-body">
                <div id="alert-email" class="alert-success">✓ Configuration email sauvegardée.</div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Serveur SMTP</label>
                        <input type="text" class="form-control" name="smtp_host" placeholder="smtp.example.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Port</label>
                        <input type="number" class="form-control" name="smtp_port" placeholder="587">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Utilisateur</label>
                        <input type="text" class="form-control" name="smtp_user" placeholder="user@example.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="smtp_password" placeholder="••••••••">
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
                        <input type="email" class="form-control" name="from_email" placeholder="noreply@leblog.com">
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
                <div class="panel-title--lg">Optimisation SEO</div>
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
                    <input type="text" class="form-control" name="title_format" value="{post_title} — Le Blog">
                    <div class="form-hint">Variables disponibles : {post_title}, {site_name}, {category_name}
                    </div>
                </div>
                <div class="toggle-row">
                    <div class="toggle-info">
                        <div class="toggle-name">Sitemap XML</div>
                        <div class="toggle-desc">Génère automatiquement un sitemap XML pour les moteurs de
                            recherche.</div>
                    </div>
                    <label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label>
                </div>
                <div class="toggle-row">
                    <div class="toggle-info">
                        <div class="toggle-name">Open Graph (réseaux sociaux)</div>
                        <div class="toggle-desc">Génère les balises Open Graph pour un meilleur partage sur les
                            réseaux.</div>
                    </div>
                    <label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label>
                </div>
                <div class="toggle-row">
                    <div class="toggle-info">
                        <div class="toggle-name">Twitter Cards</div>
                        <div class="toggle-desc">Génère les balises Twitter Card pour un partage optimisé.
                        </div>
                    </div>
                    <label class="toggle"><input type="checkbox" checked><span class="toggle-slider"></span></label>
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
                <div class="panel-title--lg">Zone de danger</div>
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
@endsection
