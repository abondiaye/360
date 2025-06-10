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

/* index/index.html.twig */
class __TwigTemplate_02ca322ee13419365aaec429ce3bd2cb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("InoBase.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <style>
      body, html {
        height: 100%;
      }
    </style>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <noscript>
    <div class=\"alert alert-danger mt-2 mb-2 text-center\">
      Cette application nécessite JavaScript pour fonctionner correctement !
    </div>
  </noscript>
  
  <div class=\"container h-100\">
    <div class=\"row align-items-center h-100\">
      <div class=\"col-xl-4 col-lg-6 col-md-8 col-10 mx-auto text-center\">
        
        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["APP_LOGIN_LOGO"]) || array_key_exists("APP_LOGIN_LOGO", $context) ? $context["APP_LOGIN_LOGO"] : (function () { throw new RuntimeError('Variable "APP_LOGIN_LOGO" does not exist.', 22, $this->source); })())), "html", null, true);
        echo "\" id=\"index_logo\" alt=\"Logo\" class=\"pb-2 img-fluid\">
        
        <h4>GenuisPro360° ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["APP_VERSION"]) || array_key_exists("APP_VERSION", $context) ? $context["APP_VERSION"] : (function () { throw new RuntimeError('Variable "APP_VERSION" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</h4>
  
        ";
        // line 26
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "          <div class=\"alert alert-danger mt-2 mb-2\">
            ";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 28, $this->source); })()), "messageKey", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 28, $this->source); })()), "messageData", [], "any", false, false, false, 28), "security"), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 31
        echo "        
        <div class=\"mt-3 mb-3\">
          <hr>
        </div>
  
        <form method=\"post\" action=\"#\" id=\"frm_login\" novalidate>
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
  
          <div class=\"form-floating mb-3\">
            <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" required autofocus>
            <label for=\"email\">Votre adresse e-mail</label>
          </div>
  
          <div class=\"form-floating mb-3\">
            <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" required>
            <label for=\"password\">Votre mot de passe</label>
          </div>
  
          <div class=\"mb-5\">
            <button type=\"submit\" class=\"btn btn-outline-dark\">
              <i class=\"fas fa-sign-in-alt\"></i> Se connecter
            </button>
          </div>
        </form>
  
      </div>
    </div>
  </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "  <script>
  \$(document).ready(function() {
    \$(\"#frm_login\").validate({
      rules: {
        email: {
          required: true,
          email: true,
        },
        password: {
          required: true,
          minlength: 8,
        },
      },
      messages: {
        email: \"Veuillez entrer une adresse e-mail valide\",
        password: {
          required: \"Veuillez entrer votre mot de passe\",
          minlength: \"Le mot de passe doit contenir au moins 8 caractères\",
        },
      },
    });
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
        return "index/index.html.twig";
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
        return array (  179 => 62,  169 => 61,  136 => 37,  128 => 31,  122 => 28,  119 => 27,  117 => 26,  112 => 24,  107 => 22,  95 => 12,  85 => 11,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoBase.html.twig' %}

  {% block stylesheets %}
    <style>
      body, html {
        height: 100%;
      }
    </style>
  {% endblock %}
  
  {% block body %}
  <noscript>
    <div class=\"alert alert-danger mt-2 mb-2 text-center\">
      Cette application nécessite JavaScript pour fonctionner correctement !
    </div>
  </noscript>
  
  <div class=\"container h-100\">
    <div class=\"row align-items-center h-100\">
      <div class=\"col-xl-4 col-lg-6 col-md-8 col-10 mx-auto text-center\">
        
        <img src=\"{{ asset(APP_LOGIN_LOGO) }}\" id=\"index_logo\" alt=\"Logo\" class=\"pb-2 img-fluid\">
        
        <h4>GenuisPro360° {{ APP_VERSION }}</h4>
  
        {% if error %}
          <div class=\"alert alert-danger mt-2 mb-2\">
            {{ error.messageKey|trans(error.messageData, 'security') }}
          </div>
        {% endif %}
        
        <div class=\"mt-3 mb-3\">
          <hr>
        </div>
  
        <form method=\"post\" action=\"#\" id=\"frm_login\" novalidate>
          <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
  
          <div class=\"form-floating mb-3\">
            <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" required autofocus>
            <label for=\"email\">Votre adresse e-mail</label>
          </div>
  
          <div class=\"form-floating mb-3\">
            <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" required>
            <label for=\"password\">Votre mot de passe</label>
          </div>
  
          <div class=\"mb-5\">
            <button type=\"submit\" class=\"btn btn-outline-dark\">
              <i class=\"fas fa-sign-in-alt\"></i> Se connecter
            </button>
          </div>
        </form>
  
      </div>
    </div>
  </div>
  {% endblock %}
  
  {% block javascripts %}
  <script>
  \$(document).ready(function() {
    \$(\"#frm_login\").validate({
      rules: {
        email: {
          required: true,
          email: true,
        },
        password: {
          required: true,
          minlength: 8,
        },
      },
      messages: {
        email: \"Veuillez entrer une adresse e-mail valide\",
        password: {
          required: \"Veuillez entrer votre mot de passe\",
          minlength: \"Le mot de passe doit contenir au moins 8 caractères\",
        },
      },
    });
  });
  </script>
  {% endblock %}
  ", "index/index.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/index/index.html.twig");
    }
}
