const Encore = require('@symfony/webpack-encore');

Encore
    // Répertoire où les fichiers compilés seront stockés
    .setOutputPath('public/build/')
    // Chemin public utilisé par le serveur pour accéder aux fichiers
    .setPublicPath('/build')
    
    // Entrée pour le JavaScript principal
    .addEntry('app', './src/app.js')
    
    // Entrée pour les styles CSS/SCSS
    .addStyleEntry('appStyles', './assets/styles/app.scss')
    
    // Activer le chunk d'exécution unique
    .enableSingleRuntimeChunk()
    
    // Activer le support pour Sass
    .enableSassLoader()
    
    // Nettoie le répertoire de sortie avant chaque build
    .cleanupOutputBeforeBuild()
    
    // Versionning des fichiers pour le cache-busting en production
    .enableVersioning(Encore.isProduction())

    // Notifications de build
    .enableBuildNotifications()
;

module.exports = Encore.getWebpackConfig();
