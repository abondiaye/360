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

/* index/home.html.twig */
class __TwigTemplate_1c620893d65ccd69d9e05ed12d0f47ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "InoSession.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/home.html.twig"));

        $this->parent = $this->loadTemplate("InoSession.html.twig", "index/home.html.twig", 1);
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
        echo "  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col mb-5 mt-2\">
        <h1 class=\"text-center animated-title\">Bienvenue ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "firstName", [], "any", false, false, false, 7), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "lastName", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
      </div>
    </div>
  
    <div class=\"row\">
      <div class=\"col mb-2 text-center\">
        <button type=\"button\" class=\"btn btn-outline-dark main_nav_buttons\" onclick=\"window.location.href='";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fl_index");
        echo "'\">
          <i class=\"fa-solid fa-hand-holding-dollar\"></i><br>Gestion Freelance
        </button>
      </div>
  
      <div class=\"col mb-2 text-center\">
        <button type=\"button\" class=\"btn btn-outline-dark main_nav_buttons\" onclick=\"window.location.href='";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("km_index");
        echo "'\">
          <i class=\"fa-solid fa-bank\"></i><br>Gestion Compte Bancaire
        </button>
      </div>
    </div>
  
    <div class=\"row mt-4\">
  <div class=\"col text-center\">
    <button type=\"button\" class=\"btn btn-outline-dark main_nav_buttons pulse-button\" onclick=\"window.location.href='";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "'\">
      <i class=\"fa-solid fa-right-from-bracket\"></i><br>Se déconnecter
    </button>
  </div>
</div>

  </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 37
        echo "  <style>
  /* Style des boutons */
  .main_nav_buttons {
    padding: 20px;
    font-size: 1.2rem;
    border-radius: 1rem;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.8s ease forwards;
  }
  
  .main_nav_buttons:nth-child(1) {
    animation-delay: 0.2s;
  }
  .main_nav_buttons:nth-child(2) {
    animation-delay: 0.4s;
  }
  .main_nav_buttons:nth-child(3) {
    animation-delay: 0.6s;
  }
  
  .main_nav_buttons:hover {
    background: linear-gradient(135deg, #ffd700 0%, #ffcc00 100%);
    color: #000;
    border: none;
    box-shadow: 0 0 20px #ffd700, 0 0 30px #ffcc00;
    transform: scale(1.05);
  }
  
  /* Animation FadeIn + Slide Up */
  @keyframes fadeInUp {
    0% {
      opacity: 0;
      transform: translateY(20px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  /* Animation sur le titre Bienvenue */
  .animated-title {
    opacity: 0;
    animation: fadeInTitle 1.5s ease forwards;
  }
  
  @keyframes fadeInTitle {
    0% {
      opacity: 0;
      transform: translateY(-20px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  <style>
/* Styles principaux des boutons (déjà présents) */
.main_nav_buttons {
  padding: 20px;
  font-size: 1.2rem;
  border-radius: 1rem;
  transition: all 0.3s ease-in-out;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 0.8s ease forwards;
}

/* Animations existantes */
.main_nav_buttons:nth-child(1) { animation-delay: 0.2s; }
.main_nav_buttons:nth-child(2) { animation-delay: 0.4s; }
.main_nav_buttons:nth-child(3) { animation-delay: 0.6s; }

.main_nav_buttons:hover {
  background: linear-gradient(135deg, #ffd700 0%, #ffcc00 100%);
  color: #000;
  border: none;
  box-shadow: 0 0 20px #ffd700, 0 0 30px #ffcc00;
  transform: scale(1.05);
}

/* Animation FadeIn Up */
@keyframes fadeInUp {
  0% { opacity: 0; transform: translateY(20px); }
  100% { opacity: 1; transform: translateY(0); }
}

/* Animation FadeIn sur le titre */
.animated-title {
  opacity: 0;
  animation: fadeInTitle 1.5s ease forwards;
}

@keyframes fadeInTitle {
  0% { opacity: 0; transform: translateY(-20px); }
  100% { opacity: 1; transform: translateY(0); }
}

/* Animation Pulse pour Se Déconnecter */
.pulse-button {
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0% { transform: scale(1); }
  50% { transform: scale(1.05); }
  100% { transform: scale(1); }
}
</style>

  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index/home.html.twig";
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
        return array (  133 => 37,  123 => 36,  105 => 27,  94 => 19,  85 => 13,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'InoSession.html.twig' %}

  {% block body %}
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col mb-5 mt-2\">
        <h1 class=\"text-center animated-title\">Bienvenue {{ app.user.firstName }} {{ app.user.lastName }}</h1>
      </div>
    </div>
  
    <div class=\"row\">
      <div class=\"col mb-2 text-center\">
        <button type=\"button\" class=\"btn btn-outline-dark main_nav_buttons\" onclick=\"window.location.href='{{ path(\"fl_index\") }}'\">
          <i class=\"fa-solid fa-hand-holding-dollar\"></i><br>Gestion Freelance
        </button>
      </div>
  
      <div class=\"col mb-2 text-center\">
        <button type=\"button\" class=\"btn btn-outline-dark main_nav_buttons\" onclick=\"window.location.href='{{ path(\"km_index\") }}'\">
          <i class=\"fa-solid fa-bank\"></i><br>Gestion Compte Bancaire
        </button>
      </div>
    </div>
  
    <div class=\"row mt-4\">
  <div class=\"col text-center\">
    <button type=\"button\" class=\"btn btn-outline-dark main_nav_buttons pulse-button\" onclick=\"window.location.href='{{ path(\"app_logout\") }}'\">
      <i class=\"fa-solid fa-right-from-bracket\"></i><br>Se déconnecter
    </button>
  </div>
</div>

  </div>
  {% endblock %}
  
  {% block stylesheets %}
  <style>
  /* Style des boutons */
  .main_nav_buttons {
    padding: 20px;
    font-size: 1.2rem;
    border-radius: 1rem;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.8s ease forwards;
  }
  
  .main_nav_buttons:nth-child(1) {
    animation-delay: 0.2s;
  }
  .main_nav_buttons:nth-child(2) {
    animation-delay: 0.4s;
  }
  .main_nav_buttons:nth-child(3) {
    animation-delay: 0.6s;
  }
  
  .main_nav_buttons:hover {
    background: linear-gradient(135deg, #ffd700 0%, #ffcc00 100%);
    color: #000;
    border: none;
    box-shadow: 0 0 20px #ffd700, 0 0 30px #ffcc00;
    transform: scale(1.05);
  }
  
  /* Animation FadeIn + Slide Up */
  @keyframes fadeInUp {
    0% {
      opacity: 0;
      transform: translateY(20px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  /* Animation sur le titre Bienvenue */
  .animated-title {
    opacity: 0;
    animation: fadeInTitle 1.5s ease forwards;
  }
  
  @keyframes fadeInTitle {
    0% {
      opacity: 0;
      transform: translateY(-20px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  <style>
/* Styles principaux des boutons (déjà présents) */
.main_nav_buttons {
  padding: 20px;
  font-size: 1.2rem;
  border-radius: 1rem;
  transition: all 0.3s ease-in-out;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 0.8s ease forwards;
}

/* Animations existantes */
.main_nav_buttons:nth-child(1) { animation-delay: 0.2s; }
.main_nav_buttons:nth-child(2) { animation-delay: 0.4s; }
.main_nav_buttons:nth-child(3) { animation-delay: 0.6s; }

.main_nav_buttons:hover {
  background: linear-gradient(135deg, #ffd700 0%, #ffcc00 100%);
  color: #000;
  border: none;
  box-shadow: 0 0 20px #ffd700, 0 0 30px #ffcc00;
  transform: scale(1.05);
}

/* Animation FadeIn Up */
@keyframes fadeInUp {
  0% { opacity: 0; transform: translateY(20px); }
  100% { opacity: 1; transform: translateY(0); }
}

/* Animation FadeIn sur le titre */
.animated-title {
  opacity: 0;
  animation: fadeInTitle 1.5s ease forwards;
}

@keyframes fadeInTitle {
  0% { opacity: 0; transform: translateY(-20px); }
  100% { opacity: 1; transform: translateY(0); }
}

/* Animation Pulse pour Se Déconnecter */
.pulse-button {
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0% { transform: scale(1); }
  50% { transform: scale(1.05); }
  100% { transform: scale(1); }
}
</style>

  {% endblock %}
  ", "index/home.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/index/home.html.twig");
    }
}
