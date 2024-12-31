const Encore = require('@symfony/webpack-encore');

Encore
    // Répertoire où les fichiers compilés seront stockés
    .setOutputPath('public/build/')
    
    // Chemin public utilisé par le serveur pour accéder aux fichiers
    .setPublicPath('/build')

    // Entrée principale pour les fichiers JS
    .addEntry('app', './assets/app.js')

    // Entrée principale pour les fichiers CSS/SCSS
    .addStyleEntry('styles', './assets/styles/styles.scss')

    // Activer le chunk d'exécution unique
    .enableSingleRuntimeChunk()

    // Activer le support pour Sass/SCSS
    .enableSassLoader()

    // Nettoie le répertoire de sortie avant chaque build
    .cleanupOutputBeforeBuild()

    // Versionning des fichiers pour le cache-busting en production
    .enableVersioning(Encore.isProduction())

    // Notifications de build
    .enableBuildNotifications();

module.exports = Encore.getWebpackConfig();
