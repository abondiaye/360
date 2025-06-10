const Encore = require('@symfony/webpack-encore');

if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // 📦 Répertoire de sortie
    .setOutputPath('public/build/')
    .setPublicPath('/build')

    // 🔑 Entrées JavaScript/SCSS pour chaque page
    .addEntry('app', './assets/app.js')                      // Entrée principale
    .addEntry('home', './assets/js/home.js')                 // Page d'accueil
    .addEntry('about', './assets/js/about.js')               // Page À propos
    .addEntry('services', './assets/js/services.js')         // Page Services
    .addEntry('blog', './assets/js/blog.js')                 // Page Blog
    .addEntry('formations', './assets/js/formations.js')     // Page Formations
    .addEntry('contact', './assets/js/contact.js')           // Page Contact
    .addEntry('training', './assets/js/training.js')
    .addStyleEntry('footer_light', './assets/scss/footer_light.scss')
    

    // ⚙️ Optimisations
    .splitEntryChunks()
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())

    // 🧠 Babel + Polyfills
    .configureBabelPresetEnv(config => {
        config.useBuiltIns = 'usage';
        config.corejs = '3.38';
    })

    // 🎨 Support SCSS
    .enableSassLoader()
;

module.exports = Encore.getWebpackConfig();
