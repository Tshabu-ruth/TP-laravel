@extends('app')

@section('title', 'Articles — Le Blog')
@section('content')

    <div class="page-header">
        <div class="page-tag">Blog</div>
        <h1 class="page-title">Tous les articles</h1>
        <p class="page-count">50 articles publiés dans 5 catégories</p>
    </div>

    <div class="filters-bar">
        <div class="search-wrap">
            <input type="search" placeholder="Rechercher un article...">
        </div>
        <div class="filter-cats">
            <a href="#" class="cat-pill active">Tout</a>
            <a href="#" class="cat-pill">Vitae</a>
            <a href="#" class="cat-pill">Dignissimos</a>
            <a href="#" class="cat-pill">Optio</a>
            <a href="#" class="cat-pill">Aperiam</a>
            <a href="#" class="cat-pill">Tenetur</a>
        </div>
        <select class="sort-select">
            <option>Plus récents</option>
            <option>Plus anciens</option>
            <option>Plus commentés</option>
        </select>
    </div>

    <div class="main-layout">
        <div class="articles-col">
            <div class="articles-list">

                <a href="article.html" class="article-item">
                    <div>
                        <div class="ai-cat">Optio</div>
                        <div class="ai-title">Excepturi eligendi aliquid iste laboriosam et soluta cum</div>
                        <div class="ai-excerpt">Recusandae non totam rerum vero at. Vel ut soluta ipsum nihil aut natus
                            suscipit explicabo. Non pariatur accusantium possimus molestiae et numquam est aperiam.
                            Excepturi consequuntur et voluptatem adipisci doloribus.</div>
                        <div class="ai-meta"><span>Jacklyn Lueilwitz</span><span>15 juillet 2015</span><span>5
                                commentaires</span></div>
                    </div>
                    <div class="ai-thumb c1">E</div>
                </a>

                <a href="article.html" class="article-item">
                    <div>
                        <div class="ai-cat">Aperiam</div>
                        <div class="ai-title">Aut repellat ut qui et</div>
                        <div class="ai-excerpt">Pariatur nobis dicta esse cum. Magni nesciunt facere exercitationem.
                            Dolorum est facilis quia voluptatum architecto in quibusdam ex unde enim.</div>
                        <div class="ai-meta"><span>Dr. Travon Kirlin</span><span>8 octobre 2019</span><span>5
                                commentaires</span></div>
                    </div>
                    <div class="ai-thumb c2">A</div>
                </a>

                <a href="article.html" class="article-item">
                    <div>
                        <div class="ai-cat">Optio</div>
                        <div class="ai-title">Dignissimos et eaque aut sed fugiat et</div>
                        <div class="ai-excerpt">Voluptas quod nihil voluptatum animi voluptates mollitia sed.
                            Perspiciatis blanditiis libero earum quod eos omnis. Placeat nesciunt ut ut eos ut aut.
                        </div>
                        <div class="ai-meta"><span>Dr. Jenifer Sipes</span><span>23 septembre 1988</span><span>5
                                commentaires</span></div>
                    </div>
                    <div class="ai-thumb c3">D</div>
                </a>

                <a href="article.html" class="article-item">
                    <div>
                        <div class="ai-cat">Aperiam</div>
                        <div class="ai-title">Velit ad quo quo vel</div>
                        <div class="ai-excerpt">Eveniet asperiores ut alias repellendus ab architecto. Odio ipsam non
                            qui quam quod. Quas odio ipsum distinctio. Voluptatibus et quia aliquam nam maiores.</div>
                        <div class="ai-meta"><span>Janet Keeling IV</span><span>9 juillet 2009</span><span>5
                                commentaires</span></div>
                    </div>
                    <div class="ai-thumb c4">V</div>
                </a>

                <a href="article.html" class="article-item">
                    <div>
                        <div class="ai-cat">Vitae</div>
                        <div class="ai-title">Sed molestiae omnis ratione ea enim ea</div>
                        <div class="ai-excerpt">Aut amet eum voluptatem voluptatem quibusdam tempore. Quod non delectus
                            iste. Quos quo et qui. Ullam adipisci deserunt sit velit quam quia consequatur.</div>
                        <div class="ai-meta"><span>Annetta Runolfsson</span><span>21 janvier 2012</span><span>5
                                commentaires</span></div>
                    </div>
                    <div class="ai-thumb c5">S</div>
                </a>

                <a href="article.html" class="article-item">
                    <div>
                        <div class="ai-cat">Dignissimos</div>
                        <div class="ai-title">Blanditiis commodi qui iure optio</div>
                        <div class="ai-excerpt">Mollitia eum perspiciatis dolorum. Saepe itaque exercitationem unde
                            expedita quibusdam qui ipsum aspernatur. Ut officia veritatis esse sed itaque deserunt.
                        </div>
                        <div class="ai-meta"><span>Juwan Wiegand</span><span>27 juin 2000</span><span>5
                                commentaires</span></div>
                    </div>
                    <div class="ai-thumb c1">B</div>
                </a>

                <a href="article.html" class="article-item">
                    <div>
                        <div class="ai-cat">Tenetur</div>
                        <div class="ai-title">Ut iusto et veniam facere maxime</div>
                        <div class="ai-excerpt">Recusandae cum neque placeat enim omnis et. Sit iste veritatis dolorem
                            sint quis. Asperiores et qui impedit voluptate. Dolorem explicabo illo id sint.</div>
                        <div class="ai-meta"><span>Mrs. Tia Lemke</span><span>27 décembre 1977</span><span>5
                                commentaires</span></div>
                    </div>
                    <div class="ai-thumb c2">U</div>
                </a>

                <a href="article.html" class="article-item">
                    <div>
                        <div class="ai-cat">Vitae</div>
                        <div class="ai-title">Tempore aut est ad iste excepturi</div>
                        <div class="ai-excerpt">Voluptatem recusandae odit eum ea eius voluptates et. Eum enim nobis
                            fugiat saepe vel eveniet. Et esse enim non eos magnam reprehenderit exercitationem.</div>
                        <div class="ai-meta"><span>Shaun Balistreri</span><span>23 juin 1977</span><span>5
                                commentaires</span></div>
                    </div>
                    <div class="ai-thumb c3">T</div>
                </a>

            </div>
            <div class="pagination">
                <a href="#" class="page-btn active">1</a>
                <a href="#" class="page-btn">2</a>
                <a href="#" class="page-btn">3</a>
                <a href="#" class="page-btn">4</a>
                <a href="#" class="page-btn">5</a>
                <a href="#" class="page-btn">→</a>
            </div>
        </div>

        <aside class="sidebar-col">
            <div class="sidebar-block">
                <div class="sidebar-label">Catégories</div>
                <a href="#" class="cat-item">Vitae <span class="cat-count">10 articles</span></a>
                <a href="#" class="cat-item">Dignissimos <span class="cat-count">10 articles</span></a>
                <a href="#" class="cat-item">Optio <span class="cat-count">10 articles</span></a>
                <a href="#" class="cat-item">Aperiam <span class="cat-count">10 articles</span></a>
                <a href="#" class="cat-item">Tenetur <span class="cat-count">10 articles</span></a>
            </div>

            <div class="sidebar-block">
                <div class="sidebar-label">Articles populaires</div>
                <a href="article.html" class="popular-item">
                    <div class="pop-num">01</div>
                    <div>
                        <div class="pop-title">Excepturi eligendi aliquid iste laboriosam</div>
                        <div class="pop-cat">Optio</div>
                    </div>
                </a>
                <a href="article.html" class="popular-item">
                    <div class="pop-num">02</div>
                    <div>
                        <div class="pop-title">Aut repellat ut qui et</div>
                        <div class="pop-cat">Aperiam</div>
                    </div>
                </a>
                <a href="article.html" class="popular-item">
                    <div class="pop-num">03</div>
                    <div>
                        <div class="pop-title">Blanditiis commodi qui iure optio</div>
                        <div class="pop-cat">Dignissimos</div>
                    </div>
                </a>
                <a href="article.html" class="popular-item">
                    <div class="pop-num">04</div>
                    <div>
                        <div class="pop-title">Veritatis ut corrupti minus harum</div>
                        <div class="pop-cat">Optio</div>
                    </div>
                </a>
                <a href="article.html" class="popular-item">
                    <div class="pop-num">05</div>
                    <div>
                        <div class="pop-title">Sed laudantium facilis dolore non sunt</div>
                        <div class="pop-cat">Tenetur</div>
                    </div>
                </a>
            </div>

            <div class="sidebar-block">
                <div class="sidebar-label">Tags</div>
                <div class="tag-cloud">
                    <a href="#" class="tag">Vitae</a>
                    <a href="#" class="tag">Eligendi</a>
                    <a href="#" class="tag">Laboriosam</a>
                    <a href="#" class="tag">Optio</a>
                    <a href="#" class="tag">Soluta</a>
                    <a href="#" class="tag">Repellat</a>
                    <a href="#" class="tag">Blanditiis</a>
                    <a href="#" class="tag">Veniam</a>
                </div>
            </div>
        </aside>
    </div>

@endsection
