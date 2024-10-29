const Encore = require('@symfony/webpack-encore');

Encore
    // Répertoire où les fichiers compilés seront stockés
    .setOutputPath('public/build/')
    // Chemin public utilisé par le serveur pour accéder aux fichiers
    .setPublicPath('/build')
    // Entrée principale
    .addEntry('app', './src/app.js')
    // Activer le chunk d'exécution unique
    .enableSingleRuntimeChunk() // ou .disableSingleRuntimeChunk() selon vos préférences
;

module.exports = Encore.getWebpackConfig();
