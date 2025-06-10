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

/* InoSession.html.twig */
class __TwigTemplate_122b28f56e5083fc41bd709f03930f3c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar_top' => [$this, 'block_navbar_top'],
            'navbar_title' => [$this, 'block_navbar_title'],
            'js_refresh' => [$this, 'block_js_refresh'],
            'toasts' => [$this, 'block_toasts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "InoBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "InoSession.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "InoSession.html.twig"));

        $this->parent = $this->loadTemplate("InoBase.html.twig", "InoSession.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_navbar_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_top"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_top"));

        // line 3
        echo "<header class=\"navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow\">
  <a class=\"navbar-brand col-md-3 col-lg-2 me-0 px-3\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">InoTool ";
        echo twig_escape_filter($this->env, (isset($context["APP_VERSION"]) || array_key_exists("APP_VERSION", $context) ? $context["APP_VERSION"] : (function () { throw new RuntimeError('Variable "APP_VERSION" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</a>
  <button class=\"navbar-toggler position-absolute d-md-none collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebarMenu\" aria-controls=\"sidebarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <span class=\"ino_navbar_title\">";
        // line 8
        $this->displayBlock('navbar_title', $context, $blocks);
        echo "</span>
  <div class=\"navbar-nav\">
    <div class=\"nav-item text-nowrap d-none d-lg-block\">
      <a class=\"nav-item pr-3 text-white\" href=\"#\" id=\"profile\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "firstname", [], "any", false, false, false, 11), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "lastname", [], "any", false, false, false, 11), "html", null, true);
        echo "</a>
    </div>
  </div>
</header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_navbar_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_js_refresh($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_refresh"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_refresh"));

        // line 17
        echo "<script>
  \$(document).ready(function() { function ping() {\$.ajax('";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajaxPing");
        echo "',{method: 'post',dataType: 'json'}).done(function(data) {}).fail(function(jqXHR, textStatus, errorThrown) {let emsg = \"AJAX-ERROR[UPDATE]: \"+textStatus+\" (\"+errorThrown+\")\";console.log(emsg);});setTimeout(ping,60000);}ping();});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_toasts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toasts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toasts"));

        // line 22
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "session", [], "any", false, false, false, 22), "flashbag", [], "any", false, false, false, 22), "peekAll", [], "method", false, false, false, 22))) {
            // line 23
            echo "<script>
  \$(document).ready(function() {
    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", [], "method", false, false, false, 25));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 26
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 27
                    echo "    ";
                    if (($context["label"] == "error")) {
                        // line 28
                        echo "    ";
                        $context["toast_type"] = "error";
                        // line 29
                        echo "    ";
                        $context["toast_title"] = "Fehler";
                        // line 30
                        echo "    ";
                    } elseif (($context["label"] == "warning")) {
                        // line 31
                        echo "    ";
                        $context["toast_type"] = "warning";
                        // line 32
                        echo "    ";
                        $context["toast_title"] = "Warnung";
                        // line 33
                        echo "    ";
                    } elseif (($context["label"] == "success")) {
                        // line 34
                        echo "    ";
                        $context["toast_type"] = "success";
                        // line 35
                        echo "    ";
                        $context["toast_title"] = "Erfolgreich";
                        // line 36
                        echo "    ";
                    } else {
                        // line 37
                        echo "    ";
                        $context["toast_type"] = "info";
                        // line 38
                        echo "    ";
                        $context["toast_title"] = "Information";
                        // line 39
                        echo "    ";
                    }
                    // line 40
                    echo "    \$.toast({
      text:'";
                    // line 41
                    echo twig_escape_filter($this->env, json_encode($context["message"]), "html", null, true);
                    echo "',
      position : 'bottom-right',
      'icon': '";
                    // line 43
                    echo twig_escape_filter($this->env, (isset($context["toast_type"]) || array_key_exists("toast_type", $context) ? $context["toast_type"] : (function () { throw new RuntimeError('Variable "toast_type" does not exist.', 43, $this->source); })()), "html", null, true);
                    echo "',
      'heading': '";
                    // line 44
                    echo twig_escape_filter($this->env, (isset($context["toast_title"]) || array_key_exists("toast_title", $context) ? $context["toast_title"] : (function () { throw new RuntimeError('Variable "toast_title" does not exist.', 44, $this->source); })()), "html", null, true);
                    echo "',
    });
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "  });
</script>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "InoSession.html.twig";
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
        return array (  241 => 48,  235 => 47,  226 => 44,  222 => 43,  217 => 41,  214 => 40,  211 => 39,  208 => 38,  205 => 37,  202 => 36,  199 => 35,  196 => 34,  193 => 33,  190 => 32,  187 => 31,  184 => 30,  181 => 29,  178 => 28,  175 => 27,  170 => 26,  166 => 25,  162 => 23,  160 => 22,  150 => 21,  137 => 18,  134 => 17,  124 => 16,  106 => 8,  89 => 11,  83 => 8,  74 => 4,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoBase.html.twig' %}
{% block navbar_top %}
<header class=\"navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow\">
  <a class=\"navbar-brand col-md-3 col-lg-2 me-0 px-3\" href=\"{{ path(\"home\") }}\">InoTool {{ APP_VERSION }}</a>
  <button class=\"navbar-toggler position-absolute d-md-none collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebarMenu\" aria-controls=\"sidebarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <span class=\"ino_navbar_title\">{% block navbar_title %}{% endblock %}</span>
  <div class=\"navbar-nav\">
    <div class=\"nav-item text-nowrap d-none d-lg-block\">
      <a class=\"nav-item pr-3 text-white\" href=\"#\" id=\"profile\">{{ app.user.firstname }} {{ app.user.lastname }}</a>
    </div>
  </div>
</header>
{% endblock %}
{% block js_refresh %}
<script>
  \$(document).ready(function() { function ping() {\$.ajax('{{ path(\"ajaxPing\") }}',{method: 'post',dataType: 'json'}).done(function(data) {}).fail(function(jqXHR, textStatus, errorThrown) {let emsg = \"AJAX-ERROR[UPDATE]: \"+textStatus+\" (\"+errorThrown+\")\";console.log(emsg);});setTimeout(ping,60000);}ping();});
</script>
{% endblock %}
{% block toasts %}
{% if app.session.flashbag.peekAll() is not empty %}
<script>
  \$(document).ready(function() {
    {% for label, messages in app.flashes() %}
    {% for message in messages %}
    {% if label == 'error' %}
    {% set toast_type  = 'error' %}
    {% set toast_title = 'Fehler' %}
    {% elseif label == 'warning' %}
    {% set toast_type = 'warning' %}
    {% set toast_title = 'Warnung' %}
    {% elseif label == 'success' %}
    {% set toast_type = 'success' %}
    {% set toast_title = 'Erfolgreich' %}
    {% else %}
    {% set toast_type = 'info' %}
    {% set toast_title = 'Information' %}
    {% endif %}
    \$.toast({
      text:'{{ message|json_encode }}',
      position : 'bottom-right',
      'icon': '{{ toast_type }}',
      'heading': '{{ toast_title }}',
    });
    {% endfor %}
    {% endfor %}
  });
</script>
{% endif %}
{% endblock %}
", "InoSession.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/InoSession.html.twig");
    }
}
