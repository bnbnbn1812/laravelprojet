# laravelprojet

Notre projet a pour base de réaliser un site ecommerce avec le framework LARAVEL afin de mettre en place plusieurs :

collaborateurs :  gracieux, ilyass, jules, alexis

_fonctionnalités attendues_ :
*généralités*
GIT obligatoire (pensez au readme !)
Déploiement HEROKU obligatoire
mentions légales
RGPD

*ecommerce*
gestion utilisateurs
gestion des categories de produit
gestion des droits utilisateur
gestion des produits
generation automatique des factures et envoie par mail
gestion des modes de livraison / expédition
gestion de la TVA
gestion de regroupements de produits mis en vente
gestion de déclinaison de produits par attributs spécifiques (couleur, taille, etc...)
gestion des paiements via Stripe

*rendu*
Par groupe :
rappel du sujet
un lien GIT (publique)
lien vers le site heroku en prod et fonctionnel
des accès par "type" d'utilisateur pour me permettre de tout tester sans m'inscrire

# installation

1.Clone the repo and cd into it<br/>
2.composer install<br/>
3.Rename or copy .env.example file to .env<br/>
4.php artisan key:generate<br/>
5.Set your database credentials in your .env file<br/>
6.Set your Stripe credentials in your .env file. Specifically STRIPE_KEY and STRIPE_SECRET<br/>
7.Set your Algolia credentials in your .env file. Specifically ALGOLIA_APP_ID and ALGOLIA_SECRET. See this episode.<br/>
8.Set your Braintree credentials in your .env file if you want to use PayPal. Specifically BT_MERCHANT_ID, BT_PUBLIC_KEY, BT_PRIVATE_KEY. See this episode. If you don't, it should still work but won't show the paypal payment at checkout.<br/>
9.Set your APP_URL in your .env file. This is needed for Voyager to correctly resolve asset URLs.
10.Set ADMIN_PASSWORD in your .env file if you want to specify an admin password. If not, the default password is 'password'<br/>
11.php artisan ecommerce:install. This will migrate the database and run any seeders necessary. See this episode.<br/>
12.npm install<br/>
13.npm run dev<br/>
14.php artisan serve or use Laravel Valet or Laravel Homestead<br/>
15.Visit localhost:8000 in your browser<br/>
