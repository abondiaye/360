<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/projects' => [[['_route' => 'admin_projects', '_controller' => 'App\\Controller\\AdminController::projects'], null, null, null, false, false, null]],
        '/admin/projects/add' => [[['_route' => 'admin_add_project', '_controller' => 'App\\Controller\\AdminController::addProject'], null, null, null, false, false, null]],
        '/admin/clients' => [[['_route' => 'admin_clients', '_controller' => 'App\\Controller\\AdminController::clients'], null, null, null, false, false, null]],
        '/admin/invoices' => [[['_route' => 'admin_invoices', '_controller' => 'App\\Controller\\AdminController::invoices'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'admin_logout', '_controller' => 'App\\Controller\\AdminController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, true, false, null]],
        '/freelancer/configuration/form' => [[['_route' => 'fl_configuration_form', '_controller' => 'App\\Controller\\FreelancerManager\\ConfigurationController::form'], null, null, null, false, false, null]],
        '/freelancer/configuration/save' => [[['_route' => 'fl_configuration_save', '_controller' => 'App\\Controller\\FreelancerManager\\ConfigurationController::save'], null, ['POST' => 0], null, false, false, null]],
        '/freelancer/configuration/delete-logo' => [[['_route' => 'fl_configuration_delete_logo', '_controller' => 'App\\Controller\\FreelancerManager\\ConfigurationController::RemoveLogo'], null, ['POST' => 0], null, false, false, null]],
        '/freelancer/customer/list' => [[['_route' => 'fl_customer_list', '_controller' => 'App\\Controller\\FreelancerManager\\CustomerController::list'], null, null, null, false, false, null]],
        '/freelancer/customer/ajax' => [[['_route' => 'fl_customer_ajax', '_controller' => 'App\\Controller\\FreelancerManager\\CustomerController::list_ajax'], null, null, null, false, false, null]],
        '/freelancer/customer/save' => [[['_route' => 'fl_customer_save', '_controller' => 'App\\Controller\\FreelancerManager\\CustomerController::save'], null, ['POST' => 0], null, false, false, null]],
        '/freelancer/customer/delete' => [[['_route' => 'fl_customer_delete', '_controller' => 'App\\Controller\\FreelancerManager\\CustomerController::RemoveCustomer'], null, ['POST' => 0], null, false, false, null]],
        '/freelancer' => [[['_route' => 'fl_index', '_controller' => 'App\\Controller\\FreelancerManager\\IndexController::index'], null, null, null, false, false, null]],
        '/freelancer/invoices/list' => [[['_route' => 'fl_invoices_list', '_controller' => 'App\\Controller\\FreelancerManager\\InvoicesController::list'], null, null, null, false, false, null]],
        '/freelancer/invoices/ajax' => [[['_route' => 'fl_invoices_ajax', '_controller' => 'App\\Controller\\FreelancerManager\\InvoicesController::list_ajax'], null, ['POST' => 0], null, false, false, null]],
        '/pdf/by-project' => [[['_route' => 'pdf_report_by_project', '_controller' => 'App\\Controller\\FreelancerManager\\PDFController::byproject'], null, null, null, false, false, null]],
        '/freelancer/projects/list' => [[['_route' => 'fl_projects_list', '_controller' => 'App\\Controller\\FreelancerManager\\ProjectsController::list'], null, null, null, false, false, null]],
        '/freelancer/projects/ajax' => [[['_route' => 'fl_projects_ajax', '_controller' => 'App\\Controller\\FreelancerManager\\ProjectsController::list_ajax'], null, null, null, false, false, null]],
        '/freelancer/projects/save' => [[['_route' => 'fl_projects_save', '_controller' => 'App\\Controller\\FreelancerManager\\ProjectsController::save'], null, ['POST' => 0], null, false, false, null]],
        '/freelancer/projects/delete' => [[['_route' => 'fl_projects_delete', '_controller' => 'App\\Controller\\FreelancerManager\\ProjectsController::RemoveProject'], null, ['POST' => 0], null, false, false, null]],
        '/freelancer/reporting/overview' => [[['_route' => 'fl_report_index', '_controller' => 'App\\Controller\\FreelancerManager\\ReportingController::index'], null, null, null, false, false, null]],
        '/freelancer/reporting/ajax/entries-yyyymm' => [[['_route' => 'fl_report_ajax_entries_yyyymm', '_controller' => 'App\\Controller\\FreelancerManager\\ReportingController::showEntriesForYYYYMM'], null, ['POST' => 0], null, false, false, null]],
        '/freelancer/reporting/by-project' => [[['_route' => 'fl_report_by_project', '_controller' => 'App\\Controller\\FreelancerManager\\ReportingController::reportByProject'], null, null, null, false, false, null]],
        '/freelancer/services/overview' => [[['_route' => 'fl_services_overview', '_controller' => 'App\\Controller\\FreelancerManager\\ServicesController::showServices'], null, null, null, false, false, null]],
        '/freelancer/services/cfgloader' => [[['_route' => 'fl_services_ajax_cfgload', '_controller' => 'App\\Controller\\FreelancerManager\\ServicesController::loadConfigTemplate'], null, ['POST' => 0], null, false, false, null]],
        '/freelancer/services/save' => [[['_route' => 'fl_services_save', '_controller' => 'App\\Controller\\FreelancerManager\\ServicesController::save'], null, ['POST' => 0], null, false, false, null]],
        '/freelancer/timetracking/save' => [[['_route' => 'fl_time_save', '_controller' => 'App\\Controller\\FreelancerManager\\TimeTrackingController::save'], null, ['POST' => 0], null, false, false, null]],
        '/freelancer/timetracking/delete' => [[['_route' => 'fl_time_delete', '_controller' => 'App\\Controller\\FreelancerManager\\TimeTrackingController::delete'], null, ['POST' => 0], null, false, false, null]],
        '/kontomanager/bankkonten' => [[['_route' => 'km_bank', '_controller' => 'App\\Controller\\KontoManager\\BankController::overview'], null, null, null, false, false, null]],
        '/kontomanager/bankkonten/speichern' => [[['_route' => 'km_bank_save', '_controller' => 'App\\Controller\\KontoManager\\BankController::save'], null, ['POST' => 0], null, false, false, null]],
        '/kontomanager/kategorien' => [[['_route' => 'km_categories', '_controller' => 'App\\Controller\\KontoManager\\CategoryController::list'], null, null, null, false, false, null]],
        '/kontomanager/kategorien/speichern' => [[['_route' => 'km_category_save', '_controller' => 'App\\Controller\\KontoManager\\CategoryController::Save'], null, ['POST' => 0], null, false, false, null]],
        '/kontomanager/kategorien/loeschen' => [[['_route' => 'km_category_del', '_controller' => 'App\\Controller\\KontoManager\\CategoryController::Delete'], null, ['POST' => 0], null, false, false, null]],
        '/kontomanager/csv-import' => [[['_route' => 'km_csvImport', '_controller' => 'App\\Controller\\KontoManager\\CsvImportController::importForm'], null, null, null, false, false, null]],
        '/kontomanager/import-csv' => [[['_route' => 'km_importCsv', '_controller' => 'App\\Controller\\KontoManager\\CsvImportController::doImport'], null, ['POST' => 0], null, false, false, null]],
        '/kontomanager/importfilter' => [[['_route' => 'km_importfilter', '_controller' => 'App\\Controller\\KontoManager\\ImportFilterController::index'], null, null, null, false, false, null]],
        '/kontomanager/importfilter/speichern' => [[['_route' => 'km_importfilter_save', '_controller' => 'App\\Controller\\KontoManager\\ImportFilterController::Save'], null, ['POST' => 0], null, false, false, null]],
        '/kontomanager/importfilter/loeschen' => [[['_route' => 'km_importfilter_del', '_controller' => 'App\\Controller\\KontoManager\\ImportFilterController::Delete'], null, ['POST' => 0], null, false, false, null]],
        '/kontomanager' => [[['_route' => 'km_index', '_controller' => 'App\\Controller\\KontoManager\\IndexController::index'], null, null, null, false, false, null]],
        '/kontomanager/liste' => [[['_route' => 'km_list', '_controller' => 'App\\Controller\\KontoManager\\OverviewController::index'], null, null, null, false, false, null]],
        '/kontomanager/print' => [[['_route' => 'km_print', '_controller' => 'App\\Controller\\KontoManager\\OverviewController::Print'], null, ['POST' => 0], null, false, false, null]],
        '/kontomanager/kategorie_aendern' => [[['_route' => 'km_catSaver', '_controller' => 'App\\Controller\\KontoManager\\OverviewController::CatSaver'], null, null, null, false, false, null]],
        '/kontomanager/form-speichern' => [[['_route' => 'km_accFormSave', '_controller' => 'App\\Controller\\KontoManager\\OverviewController::SaveForm'], null, ['POST' => 0], null, false, false, null]],
        '/kontomanager/liste-loeschen' => [[['_route' => 'km_accListDel', '_controller' => 'App\\Controller\\KontoManager\\OverviewController::RemoveEntries'], null, ['POST' => 0], null, false, false, null]],
        '/kontomanager/report/listeKatMonAjax' => [[['_route' => 'km_report_listCatMonAjax', '_controller' => 'App\\Controller\\KontoManager\\ReportingController::showDataForCategoryAndMonth'], null, ['POST' => 0], null, false, false, null]],
        '/kontomanager/report/speichernKatMon' => [[['_route' => 'km_report_listcat_save', '_controller' => 'App\\Controller\\KontoManager\\ReportingController::SaveFromCategoryAndMonth'], null, ['POST' => 0], null, false, false, null]],
        '/' => [
            [['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null],
            [['_route' => 'portfolio_home', '_controller' => 'App\\Controller\\PortfolioController::home'], null, null, null, false, false, null],
        ],
        '/home' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\IndexController::homepage'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'admin_login', '_controller' => 'App\\Controller\\IndexController::adminLogin'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\IndexController::logout'], null, null, null, false, false, null]],
        '/freelance' => [[['_route' => 'freelance_site', '_controller' => 'App\\Controller\\IndexController::freelanceSite'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'portfolio_about', '_controller' => 'App\\Controller\\PortfolioController::about'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'portfolio_services', '_controller' => 'App\\Controller\\PortfolioController::services'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'portfolio_blog', '_controller' => 'App\\Controller\\PortfolioController::blog'], null, null, null, false, false, null]],
        '/formations' => [[['_route' => 'portfolio_formations', '_controller' => 'App\\Controller\\PortfolioController::formations'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'portfolio_contact', '_controller' => 'App\\Controller\\PortfolioController::contact'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/projects/([^/]++)/(?'
                    .'|delete(*:236)'
                    .'|edit(*:248)'
                .')'
                .'|/freelancer/(?'
                    .'|customer/form(?:/([^/]++))?(*:299)'
                    .'|invoices/(?'
                        .'|download(?:/([^/]++))?(*:341)'
                        .'|form(?:/([^/]++))?(*:367)'
                    .')'
                    .'|projects/form(?:/([^/]++))?(*:403)'
                    .'|timetracking/(?'
                        .'|form(?:/([^/]++))?(*:445)'
                        .'|edit/([^/]++)(*:466)'
                    .')'
                .')'
                .'|/kontomanager/(?'
                    .'|bankkonten/(?'
                        .'|form(?:/([^/]++))?(*:525)'
                        .'|loeschen/([^/]++)(*:550)'
                    .')'
                    .'|kategorien/form(?:/([^/]++))?(*:588)'
                    .'|importfilter/form(?:/([^/]++))?(*:627)'
                    .'|form(?:/(\\d+))?(*:650)'
                    .'|report/(?'
                        .'|uebersicht(?:/([^/]++))?(*:692)'
                        .'|ajax\\-overview(?:/([^/]++))?(*:728)'
                        .'|kostenMonat(?'
                            .'|(?:/([^/]++))?(*:764)'
                            .'|Ajax(?:/([^/]++))?(*:790)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        236 => [[['_route' => 'admin_delete_project', '_controller' => 'App\\Controller\\AdminController::deleteProject'], ['id'], ['POST' => 0], null, false, false, null]],
        248 => [[['_route' => 'admin_edit_project', '_controller' => 'App\\Controller\\AdminController::editProject'], ['id'], null, null, false, false, null]],
        299 => [[['_route' => 'fl_customer_form', 'id' => 0, '_controller' => 'App\\Controller\\FreelancerManager\\CustomerController::form'], ['id'], null, null, false, true, null]],
        341 => [[['_route' => 'fl_invoices_dl', 'id' => 0, '_controller' => 'App\\Controller\\FreelancerManager\\InvoicesController::download'], ['id'], null, null, false, true, null]],
        367 => [[['_route' => 'fl_invoices_form', 'id' => 0, '_controller' => 'App\\Controller\\FreelancerManager\\InvoicesController::form'], ['id'], null, null, false, true, null]],
        403 => [[['_route' => 'fl_projects_form', 'id' => 0, '_controller' => 'App\\Controller\\FreelancerManager\\ProjectsController::form'], ['id'], null, null, false, true, null]],
        445 => [[['_route' => 'fl_time_form', 'date' => null, '_controller' => 'App\\Controller\\FreelancerManager\\TimeTrackingController::form'], ['date'], null, null, false, true, null]],
        466 => [[['_route' => 'fl_time_edit', '_controller' => 'App\\Controller\\FreelancerManager\\TimeTrackingController::edit'], ['id'], null, null, false, true, null]],
        525 => [[['_route' => 'km_bank_form', 'id' => 0, '_controller' => 'App\\Controller\\KontoManager\\BankController::form'], ['id'], null, null, false, true, null]],
        550 => [[['_route' => 'km_bank_del', '_controller' => 'App\\Controller\\KontoManager\\BankController::delete'], ['id'], null, null, false, true, null]],
        588 => [[['_route' => 'km_category_form', 'id' => 0, '_controller' => 'App\\Controller\\KontoManager\\CategoryController::Form'], ['id'], null, null, false, true, null]],
        627 => [[['_route' => 'km_importfilter_form', 'id' => 0, '_controller' => 'App\\Controller\\KontoManager\\ImportFilterController::Form'], ['id'], null, null, false, true, null]],
        650 => [[['_route' => 'km_accForm', 'id' => 0, '_controller' => 'App\\Controller\\KontoManager\\OverviewController::Form'], ['id'], null, null, false, true, null]],
        692 => [[['_route' => 'km_report_overview', 'year' => 0, '_controller' => 'App\\Controller\\KontoManager\\ReportingController::overview'], ['year'], null, null, false, true, null]],
        728 => [[['_route' => 'km_report_ajaxOverview', 'year' => 0, '_controller' => 'App\\Controller\\KontoManager\\ReportingController::loadData'], ['year'], null, null, false, true, null]],
        764 => [[['_route' => 'km_report_costsMonth', 'year' => 0, '_controller' => 'App\\Controller\\KontoManager\\ReportingController::showCostsPerMonth'], ['year'], null, null, false, true, null]],
        790 => [
            [['_route' => 'km_report_costsMonthAjax', 'year' => 0, '_controller' => 'App\\Controller\\KontoManager\\ReportingController::renderCostsPerMonth'], ['year'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
