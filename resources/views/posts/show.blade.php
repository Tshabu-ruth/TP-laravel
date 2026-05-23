@extends('app')

@section('title',  $post . ' — Le Blog')

@section('content')

    <div class="article-hero">
        <div class="breadcrumb">
            <a href="index.html">Accueil</a>
            <span>/</span>
            <a href="#">Articles</a>
            <span>/</span>
            <a href="#">Optio</a>
            <span>/</span>
            <span>Excepturi eligendi...</span>
        </div>
        <div class="article-cat">Optio</div>
        <h1 class="article-title">Excepturi eligendi aliquid iste laboriosam et soluta cum</h1>
        <div class="article-meta-bar">
            <div class="author-block">
                <div class="author-avatar">JL</div>
                <div>
                    <div class="author-name">Jacklyn Lueilwitz</div>
                    <div class="author-sub">Auteur</div>
                </div>
            </div>
            <div class="meta-item"><strong>Publié le</strong> 15 juillet 2015</div>
            <div class="meta-item"><strong>5</strong> commentaires</div>
            <div class="meta-item"><strong>Catégorie :</strong> Optio</div>
            <button class="share-btn">↗ Partager</button>
        </div>
    </div>

    <div class="article-layout">
        <main class="article-body">
            <p class="article-lead">Recusandae non totam rerum vero at. Vel ut soluta ipsum nihil aut natus suscipit
                explicabo. Non pariatur accusantium possimus molestiae et numquam est aperiam.</p>

            <div class="article-content">
                <p>Excepturi consequuntur et voluptatem adipisci doloribus et. Tenetur eligendi earum qui sunt qui.
                    Facilis unde iure perferendis commodi corrupti blanditiis earum. Harum veritatis qui ex animi
                    perspiciatis laudantium.</p>

                <p>Aut amet repellendus totam molestiae error. Doloremque qui aspernatur soluta laboriosam
                    necessitatibus voluptas animi. Dolore sint ab voluptas qui eaque. Sed qui amet laborum nemo
                    accusantium voluptatem placeat distinctio.</p>

                <h2>Une perspective nouvelle</h2>

                <p>Rem id et amet est. Nostrum ab inventore deserunt et fuga perferendis dolore. Quia nesciunt officia
                    voluptatum delectus voluptatem dolorum et. Doloremque unde aut explicabo quidem illum id odio
                    corrupti. Quas quas autem deleniti ut eveniet.</p>

                <blockquote>
                    "Ea officiis tempore dignissimos quia impedit rerum repudiandae et. Tenetur et et at. Sint omnis
                    mollitia dolor veniam et et architecto."
                </blockquote>

                <p>Rerum aut id ipsum voluptatem quia doloremque. Excepturi consequuntur et voluptatem adipisci. Tenetur
                    eligendi earum qui sunt qui facilis unde iure perferendis commodi corrupti blanditiis earum.</p>

                <h2>Pour aller plus loin</h2>

                <p>Harum veritatis qui ex animi perspiciatis laudantium. Aut amet repellendus totam molestiae error
                    perspiciatis. Doloremque qui aspernatur soluta laboriosam necessitatibus voluptas animi culpa sit.
                </p>

                <p>Rem id et amet est inventore deserunt. Nostrum ab inventore deserunt et fuga perferendis dolore
                    excepturi. Quia nesciunt officia voluptatum delectus voluptatem dolorum et ratione.</p>
            </div>

            <div class="article-tags">
                <a href="#" class="tag">Optio</a>
                <a href="#" class="tag">Laboriosam</a>
                <a href="#" class="tag">Eligendi</a>
                <a href="#" class="tag">Soluta</a>
            </div>
        </main>

        <aside class="sidebar">
            <div class="sidebar-block">
                <div class="sidebar-label">Table des matières</div>
                <ul class="toc-list">
                    <li><a href="#"><span>01</span>Introduction</a></li>
                    <li><a href="#"><span>02</span>Une perspective nouvelle</a></li>
                    <li><a href="#"><span>03</span>Pour aller plus loin</a></li>
                    <li><a href="#"><span>04</span>Commentaires</a></li>
                </ul>
            </div>

            <div class="sidebar-block">
                <div class="sidebar-label">Articles récents</div>
                <a href="article.html" class="related-card">
                    <div class="related-cat">Aperiam</div>
                    <div class="related-title">Aut repellat ut qui et</div>
                    <div class="related-date">8 octobre 2019</div>
                </a>
                <a href="article.html" class="related-card">
                    <div class="related-cat">Vitae</div>
                    <div class="related-title">Velit ad quo quo vel</div>
                    <div class="related-date">9 juillet 2009</div>
                </a>
                <a href="article.html" class="related-card">
                    <div class="related-cat">Tenetur</div>
                    <div class="related-title">Ut iusto et veniam facere maxime</div>
                    <div class="related-date">27 déc. 1977</div>
                </a>
            </div>

            <div class="sidebar-block">
                <div class="sidebar-label">Catégories</div>
                <div style="display:flex;flex-direction:column;gap:0.5rem">
                    <a href="#"
                        style="text-decoration:none;color:var(--ink);font-size:0.85rem;display:flex;justify-content:space-between;padding:0.4rem 0;border-bottom:1px solid var(--border)">Vitae
                        <span style="color:var(--muted)">10</span></a>
                    <a href="#"
                        style="text-decoration:none;color:var(--ink);font-size:0.85rem;display:flex;justify-content:space-between;padding:0.4rem 0;border-bottom:1px solid var(--border)">Dignissimos
                        <span style="color:var(--muted)">10</span></a>
                    <a href="#"
                        style="text-decoration:none;color:var(--ink);font-size:0.85rem;display:flex;justify-content:space-between;padding:0.4rem 0;border-bottom:1px solid var(--border)">Optio
                        <span style="color:var(--muted)">10</span></a>
                    <a href="#"
                        style="text-decoration:none;color:var(--ink);font-size:0.85rem;display:flex;justify-content:space-between;padding:0.4rem 0;border-bottom:1px solid var(--border)">Aperiam
                        <span style="color:var(--muted)">10</span></a>
                    <a href="#"
                        style="text-decoration:none;color:var(--ink);font-size:0.85rem;display:flex;justify-content:space-between;padding:0.4rem 0">Tenetur
                        <span style="color:var(--muted)">10</span></a>
                </div>
            </div>

            <div>
                <div class="sidebar-label">À propos de l'auteur</div>
                <div style="display:flex;gap:1rem;align-items:flex-start">
                    <div class="author-avatar" style="width:52px;height:52px;font-size:1rem;flex-shrink:0">JL</div>
                    <div>
                        <div style="font-weight:500;font-size:0.9rem;margin-bottom:0.3rem">Jacklyn Lueilwitz</div>
                        <div style="font-size:0.8rem;color:var(--muted);line-height:1.6">Rédactrice passionnée, elle
                            explore des sujets variés avec curiosité et rigueur.</div>
                    </div>
                </div>
            </div>
        </aside>
    </div>

    <!-- COMMENTS -->
    <div class="comments-section">
        <h2 class="comments-title">5 Commentaires</h2>

        <div class="comment">
            <div class="comment-avatar">UR</div>
            <div>
                <div class="comment-author">Ut Reiciendis</div>
                <div class="comment-date">17 avril 2026 à 06:35</div>
                <div class="comment-text">Ut reiciendis et totam animi sed commodi facere amet. Voluptatem itaque aut
                    accusamus perspiciatis.</div>
            </div>
        </div>

        <div class="comment">
            <div class="comment-avatar">VI</div>
            <div>
                <div class="comment-author">Voluptatem Itaque</div>
                <div class="comment-date">17 avril 2026 à 07:12</div>
                <div class="comment-text">Debitis cumque nihil est molestias iste et. Laudantium aliquam adipisci
                    tempora suscipit voluptatem rem quos reprehenderit.</div>
            </div>
        </div>

        <div class="comment">
            <div class="comment-avatar">TC</div>
            <div>
                <div class="comment-author">Temporibus Odit</div>
                <div class="comment-date">18 avril 2026 à 09:44</div>
                <div class="comment-text">Temporibus odit dolor ipsa sequi necessitatibus. Est quasi et deserunt harum
                    voluptas excepturi provident.</div>
            </div>
        </div>

        <div class="comment">
            <div class="comment-avatar">DC</div>
            <div>
                <div class="comment-author">Debitis Cumque</div>
                <div class="comment-date">19 avril 2026 à 14:20</div>
                <div class="comment-text">Laudantium aliquam adipisci tempora suscipit voluptatem rem quos. Debitis
                    cumque nihil est molestias iste.</div>
            </div>
        </div>

        <div class="comment">
            <div class="comment-avatar">EA</div>
            <div>
                <div class="comment-author">Ea Officiis</div>
                <div class="comment-date">20 avril 2026 à 11:05</div>
                <div class="comment-text">Ea officiis tempore dignissimos quia impedit rerum repudiandae et. Tenetur et
                    et at sint omnis mollitia.</div>
            </div>
        </div>

        <div class="comment-form">
            <h3>Laisser un commentaire</h3>
            <div class="form-row">
                <div class="form-group">
                    <label for="c-name">Nom *</label>
                    <input type="text" id="c-name" name="name" placeholder="Votre nom">
                </div>
                <div class="form-group">
                    <label for="c-email">Email *</label>
                    <input type="email" id="c-email" name="email" placeholder="votre@email.com">
                </div>
            </div>
            <div class="form-group">
                <label for="c-content">Commentaire *</label>
                <textarea id="c-content" name="content" placeholder="Votre commentaire..."></textarea>
            </div>
            <button type="submit" class="btn-primary">Publier le commentaire</button>
        </div>
    </div>
@endsection
