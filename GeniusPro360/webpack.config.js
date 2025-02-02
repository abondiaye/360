const Encore = require('@symfony/webpack-encore');

Encore
    // Répertoire où les fichiers compilés seront stockés
    .setOutputPath('public/build/')
    
    // Chemin public utilisé par le serveur pour accéder aux fichiers
    .setPublicPath('/build')

    // Entrée principale pour les fichiers JS
    .addEntry('app', './assets/app.js')
    .addEntry('diagnostic_js', './assets/js/diagnostic.js') // Nom unique pour JS

    // Entrée principale pour les fichiers CSS/SCSS
    .addStyleEntry('styles', './assets/styles/styles.scss')
    .addStyleEntry('diagnostic_styles', './assets/styles/diagnostic.scss') // Nom unique pour CSS

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

Encore.configureWatchOptions(watchOptions => {
    watchOptions.poll = true; // Active le mode "polling"
});

// Exporte la configuration
module.exports = Encore.getWebpackConfig();
