# Évaluation — Mini Blog Laravel / Blade (Version Ruth Tsabu)

**Module :** Développement Web avec Laravel
**Niveau :** L3 — Informatique et Logiciels

---

## Travail à réaliser

### Question 1 — Layouts Blade (racines des deux parties)

**Questions :**

1. Quelle est la différence entre `@yield('title')` et `@yield('title', 'Valeur par défaut')` ?
   **Réponse :** La directive `@yield('title')` définit un emplacement nommé qui restera vide si aucune section correspondante n'est fournie par la vue descendante. En revanche, `@yield('title', 'Valeur par défaut')` permet de définir une "fallback value" (valeur de repli) qui sera injectée automatiquement si la section `title` n'est pas explicitement définie dans l'enfant.

2. Pourquoi utilise-t-on `@extends` plutôt que d'inclure le header et le footer manuellement dans chaque fichier de vue ?
   **Réponse :** L'utilisation de `@extends` repose sur le principe de l'héritage de template. Cela permet de centraliser la structure globale (le "squelette") du document HTML. Contrairement à une inclusion manuelle qui duplique la structure dans chaque fichier, l'héritage facilite la maintenance : une modification dans le layout parent se répercute instantanément sur toutes les pages enfants, respectant ainsi le principe DRY (*Don't Repeat Yourself*).

3. Comment s'assure-t-on qu'une vue du dashboard n'étende jamais accidentellement le layout public ?
   **Réponse :** Cette sécurité repose sur une organisation rigoureuse des répertoires de vues et une convention de nommage stricte. En plaçant les layouts dans des dossiers séparés ou en utilisant des noms explicites comme `dashboard.blade.php`, et en vérifiant systématiquement la directive `@extends('dashboard')` au sommet des fichiers situés dans `resources/views/dashboard/`, on évite toute confusion structurelle.

---

### Question 3 — Assets & Composants du dashboard

**Questions :**

1. Comment rendre la classe `active` d'un lien de la sidebar **dynamique** selon la route courante ?
   **Réponse :** On exploite l'objet de requête de Laravel au sein d'une expression ternaire dans l'attribut class :
   ```blade
   <a href="{{ route('dashboard.index') }}" 
      class="{{ request()->routeIs('dashboard.index') ? 'bg-blue-500 text-white' : 'text-gray-600' }}">
      Tableau de bord
   </a>
   ```
   L'appel à `request()->routeIs()` compare le nom de la route actuelle avec le pattern fourni.

2. Pourquoi est-il préférable de placer les composants du dashboard dans un sous-dossier `components/dashboard/` ?
   **Réponse :** C'est une question d'architecture logicielle et de modularité. La séparation des composants par contexte d'utilisation (public vs administration) évite la surcharge du répertoire racine `components/` et prévient les conflits de nommage entre des éléments qui pourraient avoir des fonctions similaires mais des designs radicalement différents.

---

### Question 4 — Création des routes

**Questions :**

1. Quelle est la différence entre `Route::get()` et `Route::post()` ?
   **Réponse :** Le verbe `GET` est sémantiquement réservé à la récupération et à l'affichage de ressources (opérations idempotentes sans effet de bord). Le verbe `POST` est utilisé pour soumettre des données au serveur afin de créer ou modifier une ressource, garantissant une meilleure sécurité (les données ne transitent pas par l'URL).

2. Comment déclarer et nommer une route avec la méthode `->name()` ? Pourquoi est-ce indispensable ?
   **Réponse :** On chaîne la méthode `name` à la définition de la route : `Route::get('/profil', [UserController::class, 'profile'])->name('user.profile');`. Le nommage est crucial car il découple l'URI logique (l'URL) de sa référence dans le code. Si l'URL `/profil` devient `/mon-compte`, l'utilisation de `route('user.profile')` dans les vues Blade ne nécessitera aucune modification.

3. Qu'est-ce qu'un paramètre de route dynamique comme `{id}` ?
   **Réponse :** Il s'agit d'un segment d'URL variable agissant comme un jeton. Laravel extrait automatiquement cette valeur de l'URI demandée et la passe en argument à la méthode correspondante du contrôleur, permettant ainsi de charger dynamiquement des données spécifiques (ex: un article précis via son ID ou son slug).

4. Que se passe-t-il si deux routes ont la même URL mais des méthodes HTTP différentes ?
   **Réponse :** Laravel les traite comme deux entités totalement distinctes dans sa table de routage. Il est donc parfaitement valide (et recommandé par l'architecture REST) d'avoir `GET /articles` pour lister et `POST /articles` pour créer, sans risque de collision.

---

### Question 5 — Groupement des routes du dashboard

**Questions :**

1. Quelle est la syntaxe complète pour créer un groupe de routes avec un préfixe d'URL et de nom ?
   **Réponse :**
   ```php
   Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
       Route::get('/', [DashboardController::class, 'index'])->name('index');
       // Les routes ici auront l'URL /dashboard/... et le nom dashboard....
   });
   ```

2. Quelle est la différence entre `Route::prefix()` et `Route::middleware()` ?
   **Réponse :** `prefix()` agit sur la structure de l'URL (le chemin d'accès), tandis que `middleware()` agit sur la couche de sécurité et de filtrage (ex: vérifier si l'utilisateur est authentifié ou s'il possède le rôle "admin") avant que la requête n'atteigne le contrôleur.

3. Qu'est-ce que `Route::resource()` ?
   **Réponse :** C'est une macro-méthode qui génère en une seule ligne les 7 routes standards nécessaires pour un CRUD (Create, Read, Update, Delete). Elle est particulièrement pertinente pour les entités comme les Articles ou les Utilisateurs, car elle impose une convention RESTful uniforme sur l'ensemble du projet.

---

### Question 6 — Création des contrôleurs

**Questions :**

1. Quelle est la commande artisan pour générer un contrôleur de ressource ?
   **Réponse :** On utilise la commande `php artisan make:controller NomController --resource`. L'option `--resource` pré-remplit la classe avec les méthodes `index`, `create`, `store`, `show`, `edit`, `update`, et `destroy`.

2. Quelle est la convention de nommage des méthodes d'un contrôleur de ressource ?
   **Réponse :**
   - `index` : Affichage de la liste.
   - `create` : Formulaire de création.
   - `store` : Enregistrement des données.
   - `show` : Détail d'un élément.
   - `edit` : Formulaire de modification.
   - `update` : Mise à jour des données.
   - `destroy` : Suppression de l'élément.

3. Quelle est la différence entre les trois façons de passer des données à une vue ?
   **Réponse :** Sur le plan fonctionnel, elles sont identiques.
   - Le **tableau associatif** est la syntaxe de base universelle.
   - `compact()` est un raccourci PHP pratique pour transformer des variables existantes en tableau.
   - `->with()` est une méthode fluide de l'objet View qui permet de chaîner plusieurs passages de données, améliorant parfois la lisibilité.

---

**Bonne évaluation ! — Ruth Tsabu**
