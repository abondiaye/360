<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* freelancermanager/projects_form.html.twig */
class __TwigTemplate_3b2d0993553033e6a3e76a0f80d654fa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "InoFreelancerManager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/projects_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/projects_form.html.twig"));

        $this->parent = $this->loadTemplate("InoFreelancerManager.html.twig", "freelancermanager/projects_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"row\">
    <div class=\"col-12\">
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item h3\" aria-current=\"page\">
            <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_projects_list");
        echo "\">
              <i class=\"fa-solid fa-user-group fa-fw\"></i> Projets
            </a>
          </li>
          <li class=\"breadcrumb-item active h3\" aria-current=\"page\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["PAGE_TITLE"]) || array_key_exists("PAGE_TITLE", $context) ? $context["PAGE_TITLE"] : (function () { throw new RuntimeError('Variable "PAGE_TITLE" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</li>
        </ol>
      </nav>
    </div>
  </div>
  
  <form method=\"post\" action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_projects_save");
        echo "\" class=\"needs-validation\" novalidate>
    <input type=\"hidden\" name=\"PID\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["PROJECT"] ?? null), "id", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["PROJECT"] ?? null), "id", [], "any", false, false, false, 20), 0)) : (0)), "html", null, true);
        echo "\">
  
    <div class=\"row\">
      <div class=\"col-xxl-6 col-md-12 mb-3\">
        <div class=\"card\">
          <div class=\"card-header\">
            Détails du projet
            ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, (isset($context["PROJECT"]) || array_key_exists("PROJECT", $context) ? $context["PROJECT"] : (function () { throw new RuntimeError('Variable "PROJECT" does not exist.', 27, $this->source); })()), "createdOn", [], "any", false, false, false, 27) != "")) {
            // line 28
            echo "              <small class=\"text-muted\">(Créé le ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT"]) || array_key_exists("PROJECT", $context) ? $context["PROJECT"] : (function () { throw new RuntimeError('Variable "PROJECT" does not exist.', 28, $this->source); })()), "createdOn", [], "any", false, false, false, 28)), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["PROJECT"]) || array_key_exists("PROJECT", $context) ? $context["PROJECT"] : (function () { throw new RuntimeError('Variable "PROJECT" does not exist.', 28, $this->source); })()), "lastModifiedOn", [], "any", false, false, false, 28) != "")) {
                echo ", modifié le ";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT"]) || array_key_exists("PROJECT", $context) ? $context["PROJECT"] : (function () { throw new RuntimeError('Variable "PROJECT" does not exist.', 28, $this->source); })()), "lastModifiedOn", [], "any", false, false, false, 28)), "html", null, true);
            }
            echo ")</small>
            ";
        }
        // line 30
        echo "          </div>
          <div class=\"card-body\">
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating\">
                  <select class=\"form-select\" id=\"RefCustomerId\" name=\"RefCustomerId\" required>
                    <option value=\"\">--- Veuillez choisir ---</option>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["CUSTOMER_LIST"]) || array_key_exists("CUSTOMER_LIST", $context) ? $context["CUSTOMER_LIST"] : (function () { throw new RuntimeError('Variable "CUSTOMER_LIST" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 39
            echo "                      <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 39) == ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["PROJECT"] ?? null), "refCustomer", [], "any", false, true, false, 39), "id", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["PROJECT"] ?? null), "refCustomer", [], "any", false, true, false, 39), "id", [], "any", false, false, false, 39), 0)) : (0)))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                  </select>
                  <label for=\"RefCustomerId\">Projet lié au client</label>
                </div>
              </div>
            </div>
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mt-3\">
                  <input type=\"text\" class=\"form-control\" id=\"projectName\" name=\"projectName\" placeholder=\"Nom du projet\" required value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT"]) || array_key_exists("PROJECT", $context) ? $context["PROJECT"] : (function () { throw new RuntimeError('Variable "PROJECT" does not exist.', 50, $this->source); })()), "projectName", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
                  <label for=\"projectName\">Nom du projet</label>
                </div>
              </div>
            </div>
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mt-3\">
                  <textarea class=\"form-control def_height_textarea\" placeholder=\"Description du projet\" id=\"description\" name=\"description\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT"]) || array_key_exists("PROJECT", $context) ? $context["PROJECT"] : (function () { throw new RuntimeError('Variable "PROJECT" does not exist.', 59, $this->source); })()), "description", [], "any", false, false, false, 59), "html", null, true);
        echo "</textarea>
                  <label for=\"description\">Description du projet</label>
                </div>
              </div>
            </div>
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mt-3\">
                  <select name=\"status\" id=\"status\" class=\"form-select\">
                    <option value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_constant("App\\Entity\\FlProjects::PROJ_STATUS_ACTIVE"), "html", null, true);
        echo "\"";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["PROJECT"]) || array_key_exists("PROJECT", $context) ? $context["PROJECT"] : (function () { throw new RuntimeError('Variable "PROJECT" does not exist.', 69, $this->source); })()), "status", [], "any", false, false, false, 69) == twig_constant("App\\Entity\\FlProjects::PROJ_STATUS_ACTIVE"))) {
            echo " selected";
        }
        echo ">Actif</option>
                    <option value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_constant("App\\Entity\\FlProjects::PROJ_STATUS_INACTIVE"), "html", null, true);
        echo "\"";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["PROJECT"]) || array_key_exists("PROJECT", $context) ? $context["PROJECT"] : (function () { throw new RuntimeError('Variable "PROJECT" does not exist.', 70, $this->source); })()), "status", [], "any", false, false, false, 70) == twig_constant("App\\Entity\\FlProjects::PROJ_STATUS_INACTIVE"))) {
            echo " selected";
        }
        echo ">Inactif</option>
                  </select>
                  <label for=\"status\">Statut du projet</label>
                </div>
              </div>
  
              <div class=\"col\">
                <div class=\"form-check mt-3\">
                  <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"noReporting\" name=\"noReporting\" ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, (isset($context["PROJECT"]) || array_key_exists("PROJECT", $context) ? $context["PROJECT"] : (function () { throw new RuntimeError('Variable "PROJECT" does not exist.', 78, $this->source); })()), "noReporting", [], "any", false, false, false, 78) == true)) {
            echo " checked";
        }
        echo " data-bs-toggle=\"tooltip\" title=\"Cocher si ce projet ne doit pas apparaître dans les statistiques de chiffre d'affaires. Il sera uniquement visible via les rapports.\">
                  <label class=\"form-check-label\" for=\"noReporting\">Ne pas comptabiliser</label>
                </div>
              </div>
            </div>
  
            <div class=\"row mt-3\">
              <div class=\"col-3\">
                <div class=\"form-floating\">
                  <input type=\"text\" class=\"form-control\" id=\"workUnit\" name=\"workUnit\" placeholder=\"Minutes par unité\" required value=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT"]) || array_key_exists("PROJECT", $context) ? $context["PROJECT"] : (function () { throw new RuntimeError('Variable "PROJECT" does not exist.', 87, $this->source); })()), "workUnit", [], "any", false, false, false, 87), "html", null, true);
        echo "\" data-bs-toggle=\"tooltip\" title=\"Durée (en minutes) d'une unité de travail. En général : 60 minutes = 1h.\">
                  <label for=\"workUnit\">Unité de travail (min)</label>
                </div>
              </div>
  
              <div class=\"col-3\">
                <div class=\"form-floating\">
                  <input type=\"text\" class=\"form-control\" id=\"payPerWorkUnit\" name=\"payPerWorkUnit\" placeholder=\"Prix par unité\" required value=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT"]) || array_key_exists("PROJECT", $context) ? $context["PROJECT"] : (function () { throw new RuntimeError('Variable "PROJECT" does not exist.', 94, $this->source); })()), "payPerWorkUnit", [], "any", false, false, false, 94), "html", null, true);
        echo "\" data-bs-toggle=\"tooltip\" title=\"Prix par unité de travail (ex: taux horaire).\">
                  <label for=\"payPerWorkUnit\">Prix par unité</label>
                </div>
              </div>
  
              <div class=\"col-3\">
                <div class=\"form-floating\">
                  <input type=\"text\" class=\"form-control\" id=\"currency\" name=\"currency\" placeholder=\"Devise\" required value=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT"]) || array_key_exists("PROJECT", $context) ? $context["PROJECT"] : (function () { throw new RuntimeError('Variable "PROJECT" does not exist.', 101, $this->source); })()), "currency", [], "any", false, false, false, 101), "html", null, true);
        echo "\" data-bs-toggle=\"tooltip\" title=\"Devise utilisée pour ce projet (ex: EUR, USD, CHF).\">
                  <label for=\"currency\">Devise</label>
                </div>
              </div>
  
              <div class=\"col-3\">
                <div class=\"form-floating\">
                  <input type=\"text\" class=\"form-control\" id=\"timeBudget\" name=\"timeBudget\" placeholder=\"Budget temps\" required value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT"]) || array_key_exists("PROJECT", $context) ? $context["PROJECT"] : (function () { throw new RuntimeError('Variable "PROJECT" does not exist.', 108, $this->source); })()), "timeBudget", [], "any", false, false, false, 108), "html", null, true);
        echo "\" data-bs-toggle=\"tooltip\" title=\"Durée maximale prévue du projet en heures (0 = Pas de limite).\">
                  <label for=\"timeBudget\">Budget temps</label>
                </div>
              </div>
  
            </div>
  
          </div>
        </div>
      </div>
    </div>
  
    <div class=\"row\">
      <div class=\"col\">
        <button type=\"submit\" class=\"btn btn-primary\">
          <i class=\"far fa-save\"></i> Enregistrer
        </button>
        ";
        // line 125
        if (((twig_get_attribute($this->env, $this->source, ($context["PROJECT"] ?? null), "id", [], "any", true, true, false, 125)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["PROJECT"] ?? null), "id", [], "any", false, false, false, 125), 0)) : (0))) {
            // line 126
            echo "          <button type=\"button\" class=\"btn btn-danger\" id=\"btn_project_delete\">
            <i class=\"fa-solid fa-trash\"></i> Supprimer
          </button>
        ";
        }
        // line 130
        echo "        <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_projects_list");
        echo "'\">
          <i class=\"fa-solid fa-arrow-left\"></i> Retour
        </button>
      </div>
    </div>
  </form>
  
  <form method=\"post\" action=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_projects_delete");
        echo "\" id=\"frm_project_delete\">
    <input type=\"hidden\" name=\"PID\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PROJECT"]) || array_key_exists("PROJECT", $context) ? $context["PROJECT"] : (function () { throw new RuntimeError('Variable "PROJECT" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138), "html", null, true);
        echo "\">
  </form>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 143
        echo "  <script>
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle=\"tooltip\"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
  
  \$(\"#btn_project_delete\").on('click', function() {
    SwalConfirmSubmit(\"Voulez-vous vraiment supprimer ce projet ?<br>Toutes les données associées seront également supprimées !\", 'frm_project_delete');
  });
  </script>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "freelancermanager/projects_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  316 => 143,  306 => 142,  293 => 138,  289 => 137,  278 => 130,  272 => 126,  270 => 125,  250 => 108,  240 => 101,  230 => 94,  220 => 87,  206 => 78,  191 => 70,  183 => 69,  170 => 59,  158 => 50,  147 => 41,  132 => 39,  128 => 38,  118 => 30,  108 => 28,  106 => 27,  96 => 20,  92 => 19,  83 => 13,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoFreelancerManager.html.twig' %}

  {% block body %}
  <div class=\"row\">
    <div class=\"col-12\">
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item h3\" aria-current=\"page\">
            <a href=\"{{ path(\"fl_projects_list\") }}\">
              <i class=\"fa-solid fa-user-group fa-fw\"></i> Projets
            </a>
          </li>
          <li class=\"breadcrumb-item active h3\" aria-current=\"page\">{{ PAGE_TITLE }}</li>
        </ol>
      </nav>
    </div>
  </div>
  
  <form method=\"post\" action=\"{{ path(\"fl_projects_save\") }}\" class=\"needs-validation\" novalidate>
    <input type=\"hidden\" name=\"PID\" value=\"{{ PROJECT.id|default(0) }}\">
  
    <div class=\"row\">
      <div class=\"col-xxl-6 col-md-12 mb-3\">
        <div class=\"card\">
          <div class=\"card-header\">
            Détails du projet
            {% if PROJECT.createdOn != \"\" %}
              <small class=\"text-muted\">(Créé le {{ PROJECT.createdOn|format_datetime }}{% if PROJECT.lastModifiedOn != \"\" %}, modifié le {{ PROJECT.lastModifiedOn|format_datetime }}{% endif %})</small>
            {% endif %}
          </div>
          <div class=\"card-body\">
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating\">
                  <select class=\"form-select\" id=\"RefCustomerId\" name=\"RefCustomerId\" required>
                    <option value=\"\">--- Veuillez choisir ---</option>
                    {% for c in CUSTOMER_LIST %}
                      <option value=\"{{ c.id }}\"{% if c.id == PROJECT.refCustomer.id|default(0) %} selected{% endif %}>{{ c.name }}</option>
                    {% endfor %}
                  </select>
                  <label for=\"RefCustomerId\">Projet lié au client</label>
                </div>
              </div>
            </div>
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mt-3\">
                  <input type=\"text\" class=\"form-control\" id=\"projectName\" name=\"projectName\" placeholder=\"Nom du projet\" required value=\"{{ PROJECT.projectName }}\">
                  <label for=\"projectName\">Nom du projet</label>
                </div>
              </div>
            </div>
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mt-3\">
                  <textarea class=\"form-control def_height_textarea\" placeholder=\"Description du projet\" id=\"description\" name=\"description\">{{ PROJECT.description }}</textarea>
                  <label for=\"description\">Description du projet</label>
                </div>
              </div>
            </div>
  
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-floating mt-3\">
                  <select name=\"status\" id=\"status\" class=\"form-select\">
                    <option value=\"{{ constant('App\\\\Entity\\\\FlProjects::PROJ_STATUS_ACTIVE') }}\"{% if PROJECT.status == constant('App\\\\Entity\\\\FlProjects::PROJ_STATUS_ACTIVE') %} selected{% endif %}>Actif</option>
                    <option value=\"{{ constant('App\\\\Entity\\\\FlProjects::PROJ_STATUS_INACTIVE') }}\"{% if PROJECT.status == constant('App\\\\Entity\\\\FlProjects::PROJ_STATUS_INACTIVE') %} selected{% endif %}>Inactif</option>
                  </select>
                  <label for=\"status\">Statut du projet</label>
                </div>
              </div>
  
              <div class=\"col\">
                <div class=\"form-check mt-3\">
                  <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"noReporting\" name=\"noReporting\" {% if PROJECT.noReporting == true %} checked{% endif %} data-bs-toggle=\"tooltip\" title=\"Cocher si ce projet ne doit pas apparaître dans les statistiques de chiffre d'affaires. Il sera uniquement visible via les rapports.\">
                  <label class=\"form-check-label\" for=\"noReporting\">Ne pas comptabiliser</label>
                </div>
              </div>
            </div>
  
            <div class=\"row mt-3\">
              <div class=\"col-3\">
                <div class=\"form-floating\">
                  <input type=\"text\" class=\"form-control\" id=\"workUnit\" name=\"workUnit\" placeholder=\"Minutes par unité\" required value=\"{{ PROJECT.workUnit }}\" data-bs-toggle=\"tooltip\" title=\"Durée (en minutes) d'une unité de travail. En général : 60 minutes = 1h.\">
                  <label for=\"workUnit\">Unité de travail (min)</label>
                </div>
              </div>
  
              <div class=\"col-3\">
                <div class=\"form-floating\">
                  <input type=\"text\" class=\"form-control\" id=\"payPerWorkUnit\" name=\"payPerWorkUnit\" placeholder=\"Prix par unité\" required value=\"{{ PROJECT.payPerWorkUnit }}\" data-bs-toggle=\"tooltip\" title=\"Prix par unité de travail (ex: taux horaire).\">
                  <label for=\"payPerWorkUnit\">Prix par unité</label>
                </div>
              </div>
  
              <div class=\"col-3\">
                <div class=\"form-floating\">
                  <input type=\"text\" class=\"form-control\" id=\"currency\" name=\"currency\" placeholder=\"Devise\" required value=\"{{ PROJECT.currency }}\" data-bs-toggle=\"tooltip\" title=\"Devise utilisée pour ce projet (ex: EUR, USD, CHF).\">
                  <label for=\"currency\">Devise</label>
                </div>
              </div>
  
              <div class=\"col-3\">
                <div class=\"form-floating\">
                  <input type=\"text\" class=\"form-control\" id=\"timeBudget\" name=\"timeBudget\" placeholder=\"Budget temps\" required value=\"{{ PROJECT.timeBudget }}\" data-bs-toggle=\"tooltip\" title=\"Durée maximale prévue du projet en heures (0 = Pas de limite).\">
                  <label for=\"timeBudget\">Budget temps</label>
                </div>
              </div>
  
            </div>
  
          </div>
        </div>
      </div>
    </div>
  
    <div class=\"row\">
      <div class=\"col\">
        <button type=\"submit\" class=\"btn btn-primary\">
          <i class=\"far fa-save\"></i> Enregistrer
        </button>
        {% if PROJECT.id|default(0) %}
          <button type=\"button\" class=\"btn btn-danger\" id=\"btn_project_delete\">
            <i class=\"fa-solid fa-trash\"></i> Supprimer
          </button>
        {% endif %}
        <button type=\"button\" class=\"btn btn-secondary\" onclick=\"window.location.href='{{ path(\"fl_projects_list\") }}'\">
          <i class=\"fa-solid fa-arrow-left\"></i> Retour
        </button>
      </div>
    </div>
  </form>
  
  <form method=\"post\" action=\"{{ path(\"fl_projects_delete\") }}\" id=\"frm_project_delete\">
    <input type=\"hidden\" name=\"PID\" value=\"{{ PROJECT.id }}\">
  </form>
  {% endblock %}
  
  {% block javascripts %}
  <script>
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle=\"tooltip\"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
  
  \$(\"#btn_project_delete\").on('click', function() {
    SwalConfirmSubmit(\"Voulez-vous vraiment supprimer ce projet ?<br>Toutes les données associées seront également supprimées !\", 'frm_project_delete');
  });
  </script>
  {% endblock %}
  ", "freelancermanager/projects_form.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/freelancermanager/projects_form.html.twig");
    }
}
