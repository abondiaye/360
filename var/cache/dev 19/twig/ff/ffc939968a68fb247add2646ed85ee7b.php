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

/* freelancermanager/services_overview.html.twig */
class __TwigTemplate_44471a3d96426c230e24e1d531802c6f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/services_overview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancermanager/services_overview.html.twig"));

        $this->parent = $this->loadTemplate("InoFreelancerManager.html.twig", "freelancermanager/services_overview.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_services_overview");
        echo "\">
              <i class=\"fa-solid fa-money-bill-1-wave fa-fw\"></i> Services Additionnels
            </a>
          </li>
        </ol>
      </nav>
    </div>
  </div>
  
  <form method=\"post\" action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_services_save");
        echo "\" novalidate class=\"needs-validation\" id=\"frm_services\">
    <div class=\"row mb-4\">
      <div class=\"col-xl-6 col-md-8 col-12\">
        <div class=\"card\">
          <div class=\"card-header\">
            <span>Veuillez choisir un projet et un service additionnel</span>
          </div>
          <div class=\"card-body\">
            <div class=\"form-floating mb-4\">
              <select name=\"fl_project\" id=\"fl_project\" class=\"form-select cfgload\" required=\"required\">
                <option value=\"\"></option>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["PROJECTS_LIST"]) || array_key_exists("PROJECTS_LIST", $context) ? $context["PROJECTS_LIST"] : (function () { throw new RuntimeError('Variable "PROJECTS_LIST" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 30
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "projectName", [], "any", false, false, false, 30), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "refCustomer", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "]</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "              </select>
              <label for=\"fl_project\">Sélectionner un projet</label>
            </div>
  
            <div class=\"form-floating\">
              <select name=\"fl_service\" id=\"fl_service\" class=\"form-select cfgload\" required=\"required\">
                <option value=\"\"></option>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["SERVICES_LIST"]) || array_key_exists("SERVICES_LIST", $context) ? $context["SERVICES_LIST"] : (function () { throw new RuntimeError('Variable "SERVICES_LIST" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["si"] => $context["st"]) {
            // line 40
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $context["si"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["st"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['si'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "              </select>
              <label for=\"fl_service\">Sélectionner un service additionnel</label>
            </div>
  
          </div>
        </div>
      </div>
    </div>
  
    <div class=\"row mb-4\">
      <div class=\"col-xl-6 col-md-8 col-12\" id=\"div_service_config\">
        <div class=\"placeholder w-100\"></div>
      </div>
    </div>
  
    <div class=\"row\">
      <div class=\"col-xl-6 col-md-8 col-12\">
        <button type=\"submit\" class=\"btn btn-primary\">
          <i class=\"fa-solid fa-floppy-disk\"></i> Enregistrer
        </button>
      </div>
    </div>
  
  </form>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "  <script>
  function loadConfig()
  {
    let pid = parseInt(\$(\"#fl_project\").val());
    let sid = parseInt(\$(\"#fl_service\").val());
    if(!pid || !sid)
    {
      \$(\"#div_service_config\").html('<div class=\"placeholder w-100\"></div>');
      console.log(\"Incomplet\");
      return;
    }
    
    console.log(\"Chargement de la configuration...\");
    
    \$.ajax(\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_services_ajax_cfgload");
        echo "\", {
        method: 'post',
        dataType: 'json',
        data: {
          'rtid': sid
        },
      }).done(function(json) {
        \$(\"#div_service_config\").html(json['HTML']);
      }).fail(function(jqXHR, textStatus, errorThrown) {
        let emsg = \"ERREUR : \"+textStatus+\" (\"+errorThrown+\")\";
        console.log(emsg);
      });
  }
  
  \$(\".cfgload\").on('change', function() {
    loadConfig();
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
        return "freelancermanager/services_overview.html.twig";
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
        return array (  203 => 83,  187 => 69,  177 => 68,  143 => 42,  132 => 40,  128 => 39,  119 => 32,  106 => 30,  102 => 29,  88 => 18,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
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
            <a href=\"{{ path(\"fl_services_overview\") }}\">
              <i class=\"fa-solid fa-money-bill-1-wave fa-fw\"></i> Services Additionnels
            </a>
          </li>
        </ol>
      </nav>
    </div>
  </div>
  
  <form method=\"post\" action=\"{{ path(\"fl_services_save\") }}\" novalidate class=\"needs-validation\" id=\"frm_services\">
    <div class=\"row mb-4\">
      <div class=\"col-xl-6 col-md-8 col-12\">
        <div class=\"card\">
          <div class=\"card-header\">
            <span>Veuillez choisir un projet et un service additionnel</span>
          </div>
          <div class=\"card-body\">
            <div class=\"form-floating mb-4\">
              <select name=\"fl_project\" id=\"fl_project\" class=\"form-select cfgload\" required=\"required\">
                <option value=\"\"></option>
                {% for p in PROJECTS_LIST %}
                  <option value=\"{{ p.id }}\">{{ p.projectName }} [{{ p.refCustomer.name }}]</option>
                {% endfor %}
              </select>
              <label for=\"fl_project\">Sélectionner un projet</label>
            </div>
  
            <div class=\"form-floating\">
              <select name=\"fl_service\" id=\"fl_service\" class=\"form-select cfgload\" required=\"required\">
                <option value=\"\"></option>
                {% for si,st in SERVICES_LIST %}
                  <option value=\"{{ si }}\">{{ st }}</option>
                {% endfor %}
              </select>
              <label for=\"fl_service\">Sélectionner un service additionnel</label>
            </div>
  
          </div>
        </div>
      </div>
    </div>
  
    <div class=\"row mb-4\">
      <div class=\"col-xl-6 col-md-8 col-12\" id=\"div_service_config\">
        <div class=\"placeholder w-100\"></div>
      </div>
    </div>
  
    <div class=\"row\">
      <div class=\"col-xl-6 col-md-8 col-12\">
        <button type=\"submit\" class=\"btn btn-primary\">
          <i class=\"fa-solid fa-floppy-disk\"></i> Enregistrer
        </button>
      </div>
    </div>
  
  </form>
  {% endblock %}
  
  {% block javascripts %}
  <script>
  function loadConfig()
  {
    let pid = parseInt(\$(\"#fl_project\").val());
    let sid = parseInt(\$(\"#fl_service\").val());
    if(!pid || !sid)
    {
      \$(\"#div_service_config\").html('<div class=\"placeholder w-100\"></div>');
      console.log(\"Incomplet\");
      return;
    }
    
    console.log(\"Chargement de la configuration...\");
    
    \$.ajax(\"{{ path(\"fl_services_ajax_cfgload\") }}\", {
        method: 'post',
        dataType: 'json',
        data: {
          'rtid': sid
        },
      }).done(function(json) {
        \$(\"#div_service_config\").html(json['HTML']);
      }).fail(function(jqXHR, textStatus, errorThrown) {
        let emsg = \"ERREUR : \"+textStatus+\" (\"+errorThrown+\")\";
        console.log(emsg);
      });
  }
  
  \$(\".cfgload\").on('change', function() {
    loadConfig();
  });
  </script>
  {% endblock %}
  ", "freelancermanager/services_overview.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/freelancermanager/services_overview.html.twig");
    }
}
