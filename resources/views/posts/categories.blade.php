@extends('app')

@section('title', 'Catégories — Le Blog') 

@section('content')
    <div class="page-header">
        <div class="page-tag">Explorer</div>
        <h1 class="page-title">Catégories</h1>
        <p class="page-desc">Parcourez notre contenu organisé en 5 thématiques distinctes, chacune explorée avec rigueur
            et passion.</p>
    </div>

    <!-- HERO GRID -->
    <div class="cats-hero">
        <a href="#vitae" class="cat-hero-card">
            <div class="ch-num">01</div>
            <div>
                <div class="ch-name">Vitae</div>
                <div class="ch-count">10 articles</div>
                <div class="ch-arrow">→</div>
            </div>
        </a>
        <a href="#dignissimos" class="cat-hero-card">
            <div class="ch-num">02</div>
            <div>
                <div class="ch-name">Dignissimos</div>
                <div class="ch-count">10 articles</div>
                <div class="ch-arrow">→</div>
            </div>
        </a>
        <a href="#optio" class="cat-hero-card">
            <div class="ch-num">03</div>
            <div>
                <div class="ch-name">Optio</div>
                <div class="ch-count">10 articles</div>
                <div class="ch-arrow">→</div>
            </div>
        </a>
        <a href="#aperiam" class="cat-hero-card">
            <div class="ch-num">04</div>
            <div>
                <div class="ch-name">Aperiam</div>
                <div class="ch-count">10 articles</div>
                <div class="ch-arrow">→</div>
            </div>
        </a>
        <a href="#tenetur" class="cat-hero-card">
            <div class="ch-num">05</div>
            <div>
                <div class="ch-name">Tenetur</div>
                <div class="ch-count">10 articles</div>
                <div class="ch-arrow">→</div>
            </div>
        </a>
    </div>

    <div class="cats-content">

        <!-- VITAE -->
        <div class="cat-section" id="vitae">
            <div class="cat-section-header">
                <div class="cat-section-meta">
                    <div class="cs-tag">Catégorie 01</div>
                    <div class="cs-name">Vitae</div>
                    <div class="cs-desc">Explorations profondes sur les questions essentielles de l'existence et de la
                        vie quotidienne.</div>
                    <div class="cs-count">10 articles publiés</div>
                    <a href="articles-public.html" class="cs-link">Voir tous les articles →</a>
                </div>
                <div class="cat-articles">
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Sed molestiae omnis ratione ea enim ea</div>
                        <div class="ca-meta"><span>Annetta Runolfsson</span><span>21 jan. 2012</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Sit ad perferendis possimus ut</div>
                        <div class="ca-meta"><span>Janet Davis</span><span>20 nov. 1996</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Veniam maxime autem enim</div>
                        <div class="ca-meta"><span>Madalyn Lowe</span><span>1 oct. 1990</span></div>
                    </a>
                </div>
            </div>
        </div>

        <!-- DIGNISSIMOS -->
        <div class="cat-section" id="dignissimos">
            <div class="cat-section-header">
                <div class="cat-section-meta">
                    <div class="cs-tag">Catégorie 02</div>
                    <div class="cs-name">Dignissimos</div>
                    <div class="cs-desc">Réflexions sur la dignité, l'éthique et les valeurs qui fondent nos sociétés
                        contemporaines.</div>
                    <div class="cs-count">10 articles publiés</div>
                    <a href="articles-public.html" class="cs-link">Voir tous les articles →</a>
                </div>
                <div class="cat-articles">
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Neque consectetur dolorem in vel aliquam</div>
                        <div class="ca-meta"><span>Emelie Lynch</span><span>18 oct. 1993</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Maxime eius et laboriosam assumenda dolores</div>
                        <div class="ca-meta"><span>Emmanuel Hermiston</span><span>8 juin 1998</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Modi voluptatem autem libero esse pariatur</div>
                        <div class="ca-meta"><span>Leland Pacocha</span><span>9 fév. 1999</span></div>
                    </a>
                </div>
            </div>
        </div>

        <!-- OPTIO -->
        <div class="cat-section" id="optio">
            <div class="cat-section-header">
                <div class="cat-section-meta">
                    <div class="cs-tag">Catégorie 03</div>
                    <div class="cs-name">Optio</div>
                    <div class="cs-desc">Analyses des choix qui s'offrent à nous — des petites décisions aux grands
                        tournants de l'existence.</div>
                    <div class="cs-count">10 articles publiés</div>
                    <a href="articles-public.html" class="cs-link">Voir tous les articles →</a>
                </div>
                <div class="cat-articles">
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Excepturi eligendi aliquid iste laboriosam</div>
                        <div class="ca-meta"><span>Jacklyn Lueilwitz</span><span>15 juil. 2015</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Dignissimos et eaque aut sed fugiat et</div>
                        <div class="ca-meta"><span>Dr. Jenifer Sipes</span><span>23 sept. 1988</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Veritatis ut corrupti minus harum</div>
                        <div class="ca-meta"><span>Osborne Sanford</span><span>6 fév. 1984</span></div>
                    </a>
                </div>
            </div>
        </div>

        <!-- APERIAM -->
        <div class="cat-section" id="aperiam">
            <div class="cat-section-header">
                <div class="cat-section-meta">
                    <div class="cs-tag">Catégorie 04</div>
                    <div class="cs-name">Aperiam</div>
                    <div class="cs-desc">Ouvertures vers de nouvelles perspectives — des sujets qui élargissent notre
                        compréhension du monde.</div>
                    <div class="cs-count">10 articles publiés</div>
                    <a href="articles-public.html" class="cs-link">Voir tous les articles →</a>
                </div>
                <div class="cat-articles">
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Aut repellat ut qui et</div>
                        <div class="ca-meta"><span>Dr. Travon Kirlin</span><span>8 oct. 2019</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Velit ad quo quo vel</div>
                        <div class="ca-meta"><span>Janet Keeling IV</span><span>9 juil. 2009</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Quam sint eaque nihil aut</div>
                        <div class="ca-meta"><span>Travon Cartwright</span><span>8 juil. 2010</span></div>
                    </a>
                </div>
            </div>
        </div>

        <!-- TENETUR -->
        <div class="cat-section" id="tenetur">
            <div class="cat-section-header">
                <div class="cat-section-meta">
                    <div class="cs-tag">Catégorie 05</div>
                    <div class="cs-name">Tenetur</div>
                    <div class="cs-desc">Ce qui nous tient — les engagements, responsabilités et liens qui structurent
                        nos vies.</div>
                    <div class="cs-count">10 articles publiés</div>
                    <a href="articles-public.html" class="cs-link">Voir tous les articles →</a>
                </div>
                <div class="cat-articles">
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Ut iusto et veniam facere maxime</div>
                        <div class="ca-meta"><span>Mrs. Tia Lemke</span><span>27 déc. 1977</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Eveniet optio dolorum nisi</div>
                        <div class="ca-meta"><span>Marian Brekke</span><span>2 juin 1999</span></div>
                    </a>
                    <a href="article.html" class="ca-card">
                        <div class="ca-title">Sed laudantium facilis dolore non sunt</div>
                        <div class="ca-meta"><span>Esteban Murphy</span><span>4 nov. 1980</span></div>
                    </a>
                </div>
            </div>
        </div>

    </div>

@endsection
