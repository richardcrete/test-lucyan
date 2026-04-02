# test-lucyan
- Test réalisé pour l'entreprise Lucyan, à partir de maquettes Adobe XD
- Responsive sur les tailles d'écran `375px` et `1512px` comme spécifié

## Durée de réalisation (aperçu)
- Mise en place du projet (Docker et WordPress) : 1h
- Création du thème et sa base (variables, configuration webpack) : 2h
- Intégration "statique" des composants : 2j (14h)
- Dynamisation des composants et création de blocks et de groupes de champs ACF : 1j (7h)
- Mise en ligne : 2h
- Total : 27h environ

## Compte administrateur
- Identifiant et mot de passe fournis par mail

## Stack
- CMS : WordPress v6.9.4
- Langages : HTML, SCSS, PHP 8.5, TypeScript
- Base de données : MySQL
- Librairies JS : Swiper
- Module blunder : wepback
- Package manager : npm
- Serveur & administration web : Apache2 (reverse proxy), Docker (containers php-apache, mysql et adminer), Node.js, Volta, VPS (Hostinger), DNS (OVHCloud)

## Plugins
- Advanced Custom Fields PRO v6.6.2
- TinyPNG v3.6.12

## Thème
- `immo-waldhof`

## Property (Custom Post Type)
- Image
- Label
- Type
- Localisation
- Nombre de pièces
- Surface
- Prix

## Blocks ACF accessibles depuis l'éditeur Gutenberg
### Home Slider
- Sélection d'images
- Définition du gradient, de la durée d'autoplay et de la lecture en boucle
### Search Form
- Compteur d'annonces automatique (property publiés)
### Services
- Définition d'un titre et d'un sous-titre
- Répéréteur avec définition d'un titre, d'une description et d'un lien
### Properties Slider
- Définition d'un titre
- Sélection de biens (property) ou sélection automatique des 10 derniers biens
- Défitition d'un CTA
### Manifesto
- Définition d'un titre supérieur, d'un titre, d'une description et d'un CTA
- Définition d'un icon, d'un titre et d'une description pour 3 cards
### Spacer
- Définition de la couleur de fond
### Big CTA
- Définition d'un titre supérieur, d'un titre, d'une description et d'un CTA
- Définition de la couleur de fond
- Possibilité de déplacer le composant vers le haut
### Inline CTA
- Définition d'un titre et d'un CTA
- Définition de la couleur de fond
- Possibilité de déplacer le composant vers le haut
### Reviews (Google)
- Définition de la couleur de fond
- Possibilité de déplacer le composant vers le haut

## Pages options ACF
### Header & Menus
- Menu mobile
- Menu desktop principal
- Menu desktop secondaire
- Possibilité de mettre les liens sous forme de boutons
- Icons et liens téléphone, adresse mail et alerte
### Footer
- Adresse
- Lien page Facebook
- Boutons itinéraire, adresse mail et téléphone
- Liens utiles principaux (colonne de gauche)
- Liens utiles secondaires (2 colonnes de droite)
- Liens utiles tertiaires (bas du pied de page)

## Ajouts personnels (dev)
- Loader au chargement de la page
- Animations au scroll sur les Menus desktop et mobile
- Class TypeScript Slider commune à tous les sliders 
- Avis Google déroulables
- Favicon front et back offices
- Autorisation d'importer des SVGs
- Fichier gitignoré `.env.local` contenant le mot de passe de la base de données MySQL