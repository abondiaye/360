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

/* home/index.html.twig */
class __TwigTemplate_703156d944b2fcf782fc066c8f68580d extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "      ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css\">
      <style>
          .navbar-custom {
              display: flex;
              justify-content: center;
              gap: 2rem;
              background-color: #0f172a;
              padding: 1rem;
              box-shadow: 0 2px 8px rgba(0,0,0,0.2);
          }
  
          .navbar-custom a {
              color: #facc15;
              font-weight: 600;
              text-decoration: none;
              transition: color 0.3s;
          }
  
          .navbar-custom a:hover {
              color: #ffffff;
          }
  
          .swiper {
              width: 100%;
              padding-top: 50px;
              padding-bottom: 50px;
          }
  
          .swiper-slide {
              background-position: center;
              background-size: cover;
              width: 300px;
              height: 300px;
              border-radius: 20px;
              overflow: hidden;
              box-shadow: 0 10px 30px rgba(0,0,0,0.4);
          }
  
          .swiper-slide img {
              width: 100%;
              height: 100%;
              object-fit: cover;
          }
      </style>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "      <div class=\"content-wrapper\">
          <nav class=\"navbar-custom\">
              <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil</a>
              <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\">Services</a>
              <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
        echo "\">Blog</a>
              <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
          </nav>
  
          <div class=\"swiper\">
              <div class=\"swiper-wrapper\">
                  <div class=\"swiper-slide\">
                      <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\">
                          <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/diagnostic_pc.jpg"), "html", null, true);
        echo "\" alt=\"Diagnostic PC\">
                      </a>
                  </div>
                  <div class=\"swiper-slide\">
                      <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\">
                          <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/assistance_ia.jpg"), "html", null, true);
        echo "\" alt=\"Assistance IA\">
                      </a>
                  </div>
                  <div class=\"swiper-slide\">
                      <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\">
                          <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/cybersecurite.jpg"), "html", null, true);
        echo "\" alt=\"Cybersécurité\">
                      </a>
                  </div>
                  <div class=\"swiper-slide\">
                      <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\">
                          <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/support.jpg"), "html", null, true);
        echo "\" alt=\"Support à distance\">
                      </a>
                  </div>
                  <div class=\"swiper-slide\">
                      <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\">
                          <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cards/formation.jpg"), "html", null, true);
        echo "\" alt=\"Formation TI\">
                      </a>
                  </div>
              </div>
          </div>
      </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "      ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
      <script src=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js\"></script>
      <script>
          document.addEventListener('DOMContentLoaded', function () {
              new Swiper('.swiper', {
                  effect: 'coverflow',
                  grabCursor: true,
                  centeredSlides: true,
                  slidesPerView: 'auto',
                  coverflowEffect: {
                      rotate: 50,
                      stretch: 0,
                      depth: 100,
                      modifier: 1,
                      slideShadows: true,
                  },
                  loop: true,
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
        return "home/index.html.twig";
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
        return array (  237 => 93,  227 => 92,  210 => 84,  206 => 83,  199 => 79,  195 => 78,  188 => 74,  184 => 73,  177 => 69,  173 => 68,  166 => 64,  162 => 63,  153 => 57,  149 => 56,  145 => 55,  141 => 54,  137 => 52,  127 => 51,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

  {% block stylesheets %}
      {{ parent() }}
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css\">
      <style>
          .navbar-custom {
              display: flex;
              justify-content: center;
              gap: 2rem;
              background-color: #0f172a;
              padding: 1rem;
              box-shadow: 0 2px 8px rgba(0,0,0,0.2);
          }
  
          .navbar-custom a {
              color: #facc15;
              font-weight: 600;
              text-decoration: none;
              transition: color 0.3s;
          }
  
          .navbar-custom a:hover {
              color: #ffffff;
          }
  
          .swiper {
              width: 100%;
              padding-top: 50px;
              padding-bottom: 50px;
          }
  
          .swiper-slide {
              background-position: center;
              background-size: cover;
              width: 300px;
              height: 300px;
              border-radius: 20px;
              overflow: hidden;
              box-shadow: 0 10px 30px rgba(0,0,0,0.4);
          }
  
          .swiper-slide img {
              width: 100%;
              height: 100%;
              object-fit: cover;
          }
      </style>
  {% endblock %}
  
  {% block body %}
      <div class=\"content-wrapper\">
          <nav class=\"navbar-custom\">
              <a href=\"{{ path('homepage') }}\">Accueil</a>
              <a href=\"{{ path('services') }}\">Services</a>
              <a href=\"{{ path('blog_index') }}\">Blog</a>
              <a href=\"{{ path('contact') }}\">Contact</a>
          </nav>
  
          <div class=\"swiper\">
              <div class=\"swiper-wrapper\">
                  <div class=\"swiper-slide\">
                      <a href=\"{{ path('services') }}\">
                          <img src=\"{{ asset('images/cards/diagnostic_pc.jpg') }}\" alt=\"Diagnostic PC\">
                      </a>
                  </div>
                  <div class=\"swiper-slide\">
                      <a href=\"{{ path('services') }}\">
                          <img src=\"{{ asset('images/cards/assistance_ia.jpg') }}\" alt=\"Assistance IA\">
                      </a>
                  </div>
                  <div class=\"swiper-slide\">
                      <a href=\"{{ path('services') }}\">
                          <img src=\"{{ asset('images/cards/cybersecurite.jpg') }}\" alt=\"Cybersécurité\">
                      </a>
                  </div>
                  <div class=\"swiper-slide\">
                      <a href=\"{{ path('services') }}\">
                          <img src=\"{{ asset('images/cards/support.jpg') }}\" alt=\"Support à distance\">
                      </a>
                  </div>
                  <div class=\"swiper-slide\">
                      <a href=\"{{ path('services') }}\">
                          <img src=\"{{ asset('images/cards/formation.jpg') }}\" alt=\"Formation TI\">
                      </a>
                  </div>
              </div>
          </div>
      </div>
  {% endblock %}
  
  {% block javascripts %}
      {{ parent() }}
      <script src=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js\"></script>
      <script>
          document.addEventListener('DOMContentLoaded', function () {
              new Swiper('.swiper', {
                  effect: 'coverflow',
                  grabCursor: true,
                  centeredSlides: true,
                  slidesPerView: 'auto',
                  coverflowEffect: {
                      rotate: 50,
                      stretch: 0,
                      depth: 100,
                      modifier: 1,
                      slideShadows: true,
                  },
                  loop: true,
              });
          });
      </script>
  {% endblock %}
  ", "home/index.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/home/index.html.twig");
    }
}
