@extends('app')

@section('title', 'À propos — Le Blog')

@section('content')
    <!-- HERO -->
    <div class="about-hero">
        <div class="hero-left">
            <div class="page-tag">Notre histoire</div>
            <h1 class="page-title">Un blog fait avec <em>soin</em></h1>
            <p class="page-intro">Depuis notre création, nous publions des textes qui demandent du temps, de la
                curiosité et une attention profonde au monde qui nous entoure.</p>
            <div class="hero-stats">
                <div>
                    <div class="stat-num">50</div>
                    <div class="stat-label">Articles</div>
                </div>
                <div>
                    <div class="stat-num">305</div>
                    <div class="stat-label">Lecteurs</div>
                </div>
                <div>
                    <div class="stat-num">250</div>
                    <div class="stat-label">Commentaires</div>
                </div>
            </div>
        </div>
        <div class="hero-right">
            <div class="manifesto-block">
                <div class="manifesto-text">Nous croyons que chaque idée mérite d'être explorée pleinement, sans
                    raccourcis, sans sensationnalisme.</div>
                <div class="manifesto-sub">— La rédaction du Blog</div>
            </div>
        </div>
    </div>

    <!-- MISSION -->
    <div class="mission-section">
        <div>
            <h2 class="section-heading">Notre mission</h2>
        </div>
        <div class="mission-content">
            <p>Le Blog est né d'une conviction simple : à l'heure où l'information se fragmente en fils courts et en
                notifications incessantes, il reste un espace pour la pensée longue, pour les textes qui prennent le
                temps d'explorer, de nuancer, de revenir en arrière.</p>
            <p>Nous couvrons cinq grandes thématiques — Vitae, Dignissimos, Optio, Aperiam et Tenetur — qui sont autant
                de manières d'appréhender notre époque. Pas de hiérarchie entre elles : chacune éclaire l'autre.</p>
            <div class="highlight">
                "La qualité d'un article se mesure moins à sa longueur qu'à sa capacité de transformer légèrement la
                façon dont on regarde les choses."
            </div>
            <p>Notre équipe est composée d'auteurs aux profils variés — chercheurs, praticiens, passionnés — qui
                partagent une même exigence de clarté et une même curiosité pour ce qui résiste à la simplification.</p>
            <p>Chaque article est relu, discuté, souvent réécrit. Ce soin, nous le considérons comme un respect dû au
                lecteur.</p>
        </div>
    </div>

    <!-- VALUES -->
    <div class="values-section">
        <div class="values-header">
            <div class="values-tag">Ce qui nous guide</div>
            <h2 class="values-title">Nos valeurs éditoriales</h2>
        </div>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-num">01</div>
                <div class="value-name">Rigueur</div>
                <div class="value-desc">Chaque affirmation est vérifiée, chaque source citée. Nous préférons la
                    complexité honnête à la simplification rassurante.</div>
            </div>
            <div class="value-card">
                <div class="value-num">02</div>
                <div class="value-name">Indépendance</div>
                <div class="value-desc">Aucun annonceur, aucun partenaire ne dicte nos choix éditoriaux. Notre seule
                    boussole est la pertinence du propos.</div>
            </div>
            <div class="value-card">
                <div class="value-num">03</div>
                <div class="value-name">Accessibilité</div>
                <div class="value-desc">La pensée rigoureuse n'est pas réservée aux initiés. Nous travaillons pour que
                    chaque texte soit lisible sans sacrifier la profondeur.</div>
            </div>
            <div class="value-card">
                <div class="value-num">04</div>
                <div class="value-name">Durabilité</div>
                <div class="value-desc">Nous écrivons pour durer. Nos articles restent pertinents mois et années après
                    leur publication, loin du flux de l'actualité immédiate.</div>
            </div>
            <div class="value-card">
                <div class="value-num">05</div>
                <div class="value-name">Dialogue</div>
                <div class="value-desc">Chaque article est une invitation. Les commentaires sont modérés mais valorisés
                    : les meilleures idées émergent des échanges.</div>
            </div>
            <div class="value-card">
                <div class="value-num">06</div>
                <div class="value-name">Diversité</div>
                <div class="value-desc">Nous veillons à la diversité des voix, des expériences et des points de vue
                    représentés dans nos colonnes.</div>
            </div>
        </div>
    </div>

    <!-- TEAM -->
    <div class="team-section">
        <div class="team-header">
            <h2 class="team-title">L'équipe</h2>
            <span class="team-count">Quelques auteurs réguliers</span>
        </div>
        <div class="team-grid">
            <div class="team-card">
                <div class="team-avatar" style="background:#C0392B">JL</div>
                <div class="team-name">Jacklyn Lueilwitz</div>
                <div class="team-role">Rédactrice en chef</div>
                <div class="team-articles">3 articles publiés</div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="background:#2E86AB">DT</div>
                <div class="team-name">Dr. Travon Kirlin</div>
                <div class="team-role">Auteur — Aperiam</div>
                <div class="team-articles">2 articles publiés</div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="background:#27AE60">AR</div>
                <div class="team-name">Annetta Runolfsson</div>
                <div class="team-role">Auteure — Vitae</div>
                <div class="team-articles">2 articles publiés</div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="background:#8E44AD">DS</div>
                <div class="team-name">Dr. Jenifer Sipes</div>
                <div class="team-role">Auteure — Optio</div>
                <div class="team-articles">2 articles publiés</div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="background:#E67E22">TL</div>
                <div class="team-name">Mrs. Tia Lemke</div>
                <div class="team-role">Auteure — Tenetur</div>
                <div class="team-articles">2 articles publiés</div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="background:#1ABC9C">JW</div>
                <div class="team-name">Juwan Wiegand</div>
                <div class="team-role">Auteur — Dignissimos</div>
                <div class="team-articles">1 article publié</div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="background:#2C3E50">OS</div>
                <div class="team-name">Osborne Sanford</div>
                <div class="team-role">Auteur — Optio</div>
                <div class="team-articles">1 article publié</div>
            </div>
            <div class="team-card">
                <div class="team-avatar" style="background:#7F8C8D">EM</div>
                <div class="team-name">Esteban Murphy</div>
                <div class="team-role">Auteur — Tenetur</div>
                <div class="team-articles">1 article publié</div>
            </div>
        </div>
    </div>

    <!-- CONTACT CTA -->
    <div class="contact-section">
        <div>
            <h2 class="cta-title">Envie de <em>contribuer</em> ?</h2>
            <p class="cta-desc">Vous avez un sujet à explorer, une proposition d'article ou simplement une question ?
                Nous serions heureux de vous entendre.</p>
        </div>
        <div>
            <div class="cta-form">
                <input type="text" class="cta-input" placeholder="Votre nom">
                <input type="email" class="cta-input" placeholder="votre@email.com">
                <textarea class="cta-input" placeholder="Votre message..."></textarea>
                <button class="cta-btn">Envoyer le message</button>
            </div>
        </div>
    </div>
@endsection