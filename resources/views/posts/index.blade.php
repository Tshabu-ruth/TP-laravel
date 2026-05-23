@extends('app')

@section('title', 'Acceuil — Le Blog')

@section('content')
    <section class="hero">
        <div>
            <p class="hero-tag">Bienvenue sur notre blog</p>
            <h1 class="hero-title">Des idées qui valent la peine d'être lues</h1>
            <p class="hero-desc">Un espace de réflexion, d'exploration et de partage. Nous publions des articles soignés
                sur des sujets qui comptent vraiment.</p>
            <div class="hero-stats">
                <div>
                    <div class="stat-num">50</div>
                    <div class="stat-label">Articles publiés</div>
                </div>
                <div>
                    <div class="stat-num">5</div>
                    <div class="stat-label">Catégories</div>
                </div>
                <div>
                    <div class="stat-num">250</div>
                    <div class="stat-label">Commentaires</div>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <div class="stack-card">
                <div class="card-label">Vitae</div>
                <div class="card-title-sm">Sed molestiae omnis ratione ea enim</div>
                <div class="card-excerpt-sm">Un article fascinant sur les mystères de la vie quotidienne...</div>
            </div>
            <div class="stack-card">
                <div class="card-label">Dignissimos</div>
                <div class="card-title-sm">Veniam maxime autem enim</div>
                <div class="card-excerpt-sm">Explorer les chemins inattendus de la connaissance...</div>
            </div>
            <div class="stack-card">
                <div class="card-label" style="color:var(--accent)">À la une</div>
                <div class="card-title-sm" style="color:#F5F0E8">Excepturi eligendi aliquid iste laboriosam</div>
                <div class="card-excerpt-sm" style="color:#8C7B6B">Le dernier article qui fait parler tout le monde...
                </div>
            </div>
        </div>
    </section>

    <section class="section" style="padding-bottom:0">
        <div class="section-header">
            <h2 class="section-title">Catégories</h2>
            <a href="#" class="section-link">Voir toutes →</a>
        </div>
        <div class="categories-row">
            <a href="#" class="cat-pill active">Tout</a>
            <a href="#" class="cat-pill">Vitae</a>
            <a href="#" class="cat-pill">Dignissimos</a>
            <a href="#" class="cat-pill">Optio</a>
            <a href="#" class="cat-pill">Aperiam</a>
            <a href="#" class="cat-pill">Tenetur</a>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <h2 class="section-title">Derniers articles</h2>
            <a href="#" class="section-link">Voir tout →</a>
        </div>
        <div class="articles-grid">
            <a href="article.html" class="article-card featured">
                <div class="article-cat">Vitae &bull; À la une</div>
                <h2 class="article-title">Excepturi eligendi aliquid iste laboriosam et soluta cum</h2>
                <p class="article-excerpt">Recusandae non totam rerum vero at. Vel ut soluta ipsum nihil aut natus
                    suscipit explicabo. Non pariatur accusantium possimus molestiae et numquam est aperiam. Excepturi
                    consequuntur et voluptatem adipisci doloribus et. Tenetur eligendi earum qui sunt qui. Facilis unde
                    iure perferendis commodi corrupti blanditiis earum.</p>
                <div class="article-meta">
                    <span>Jacklyn Lueilwitz</span>
                    <span>15 juillet 2015</span>
                    <span>5 commentaires</span>
                </div>
            </a>
            <a href="article.html" class="article-card">
                <div class="article-cat">Aperiam</div>
                <h3 class="article-title">Aut repellat ut qui et</h3>
                <p class="article-excerpt">Pariatur nobis dicta esse cum. Magni nesciunt facere exercitationem. Dolorum
                    est facilis quia voluptatum architecto in quibusdam ex unde enim.</p>
                <div class="article-meta">
                    <span>Dr. Travon Kirlin</span>
                    <span>8 oct. 2019</span>
                </div>
            </a>
            <a href="article.html" class="article-card">
                <div class="article-cat">Optio</div>
                <h3 class="article-title">Dignissimos et eaque aut sed fugiat et</h3>
                <p class="article-excerpt">Voluptas quod nihil voluptatum animi voluptates mollitia sed. Perspiciatis
                    blanditiis libero earum quod eos omnis. Placeat nesciunt ut ut eos.</p>
                <div class="article-meta">
                    <span>Dr. Jenifer Sipes</span>
                    <span>23 sept. 1988</span>
                </div>
            </a>
        </div>
    </section>

    <div class="newsletter">
        <div>
            <h2 class="newsletter-title">Ne manquez aucun <em>article</em></h2>
            <p class="newsletter-sub">Inscrivez-vous et recevez nos meilleurs articles directement dans votre boîte
                mail.</p>
        </div>
        <div>
            <div class="newsletter-form">
                <input type="email" class="newsletter-input" placeholder="votre@email.com">
                <button class="newsletter-btn">S'inscrire</button>
            </div>
            <p style="color:#5A4A38;font-size:0.72rem;margin-top:0.7rem">Pas de spam. Désabonnement en un clic.</p>
        </div>
    </div>

@endsection
