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

/* portfolio/contact.html.twig */
class __TwigTemplate_14610235673097b2db0c7d0ca847701f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contact - GeniusPro360°";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap\" rel=\"stylesheet\">
    <style>
        * {
            margin: 0;
            padding: 0;
            outline: none;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 10px;
            background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
        }
        .container {
            max-width: 800px;
            background: #fff;
            width: 800px;
            padding: 25px 40px 10px 40px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        .container .text {
            text-align: center;
            font-size: 41px;
            font-weight: 600;
            background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .container form {
            padding: 30px 0 0 0;
        }
        .form-row {
            display: flex;
            margin: 32px 0;
        }
        .input-data {
            width: 100%;
            height: 40px;
            margin: 0 20px;
            position: relative;
        }
        .textarea {
            height: 70px;
        }
        input, textarea {
            display: block;
            width: 100%;
            height: 100%;
            border: none;
            font-size: 17px;
            border-bottom: 2px solid rgba(0,0,0, 0.12);
        }
        input:focus ~ label, textarea:focus ~ label,
        input:valid ~ label, textarea:valid ~ label {
            transform: translateY(-20px);
            font-size: 14px;
            color: #3498db;
        }
        textarea {
            resize: none;
            padding-top: 10px;
        }
        label {
            position: absolute;
            pointer-events: none;
            bottom: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .textarea label {
            width: 100%;
            bottom: 40px;
            background: #fff;
        }
        .underline {
            position: absolute;
            bottom: 0;
            height: 2px;
            width: 100%;
        }
        .underline:before {
            position: absolute;
            content: \"\";
            height: 2px;
            width: 100%;
            background: #3498db;
            transform: scaleX(0);
            transform-origin: center;
            transition: transform 0.3s ease;
        }
        input:focus ~ .underline:before,
        input:valid ~ .underline:before,
        textarea:focus ~ .underline:before,
        textarea:valid ~ .underline:before {
            transform: scale(1);
        }
        .submit-btn .input-data {
            overflow: hidden;
            height: 45px!important;
            width: 25%!important;
        }
        .submit-btn .input-data .inner {
            height: 100%;
            width: 300%;
            position: absolute;
            left: -100%;
            background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
            transition: all 0.4s;
        }
        .submit-btn .input-data:hover .inner {
            left: 0;
        }
        .submit-btn input {
            background: none;
            border: none;
            color: #fff;
            font-size: 17px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            position: relative;
            z-index: 2;
        }
        @media (max-width: 700px) {
            .container .text { font-size: 30px; }
            .form-row { display: block; }
            .input-data { margin: 35px 0!important; }
            .submit-btn .input-data { width: 40%!important; }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 144
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 145
        echo "    <div class=\"container\">
        <div class=\"text\">Contactez-nous</div>
        <form action=\"#\">
            <div class=\"form-row\">
                <div class=\"input-data\">
                    <input type=\"text\" required>
                    <div class=\"underline\"></div>
                    <label for=\"\">Prénom</label>
                </div>
                <div class=\"input-data\">
                    <input type=\"text\" required>
                    <div class=\"underline\"></div>
                    <label for=\"\">Nom</label>
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"input-data\">
                    <input type=\"email\" required>
                    <div class=\"underline\"></div>
                    <label for=\"\">Adresse email</label>
                </div>
                <div class=\"input-data\">
                    <input type=\"text\" required>
                    <div class=\"underline\"></div>
                    <label for=\"\">Sujet</label>
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"input-data textarea\">
                    <textarea rows=\"8\" required></textarea>
                    <div class=\"underline\"></div>
                    <label for=\"\">Votre message</label>
                </div>
            </div>
            <div class=\"form-row submit-btn\">
                <div class=\"input-data\">
                    <div class=\"inner\"></div>
                    <input type=\"submit\" value=\"Envoyer\">
                </div>
            </div>
        </form>
        <div style=\"text-align: center; margin-top: 2rem;\">
            <a href=\"";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"
               style=\"background-color: #facc15; color: #1e293b; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: bold; box-shadow: 0 4px 10px rgba(0,0,0,0.3); transition: background-color 0.3s;\">
                ⬅ Retour à l'accueil
            </a>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 194
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 195
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('input, textarea').on('focus', function() {
                \$(this).siblings('.underline').addClass('active');
            }).on('blur', function() {
                if (\$(this).val() === '') {
                    \$(this).siblings('.underline').removeClass('active');
                }
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
        return "portfolio/contact.html.twig";
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
        return array (  319 => 195,  309 => 194,  292 => 187,  248 => 145,  238 => 144,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact - GeniusPro360°{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap\" rel=\"stylesheet\">
    <style>
        * {
            margin: 0;
            padding: 0;
            outline: none;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 10px;
            background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
        }
        .container {
            max-width: 800px;
            background: #fff;
            width: 800px;
            padding: 25px 40px 10px 40px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        .container .text {
            text-align: center;
            font-size: 41px;
            font-weight: 600;
            background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .container form {
            padding: 30px 0 0 0;
        }
        .form-row {
            display: flex;
            margin: 32px 0;
        }
        .input-data {
            width: 100%;
            height: 40px;
            margin: 0 20px;
            position: relative;
        }
        .textarea {
            height: 70px;
        }
        input, textarea {
            display: block;
            width: 100%;
            height: 100%;
            border: none;
            font-size: 17px;
            border-bottom: 2px solid rgba(0,0,0, 0.12);
        }
        input:focus ~ label, textarea:focus ~ label,
        input:valid ~ label, textarea:valid ~ label {
            transform: translateY(-20px);
            font-size: 14px;
            color: #3498db;
        }
        textarea {
            resize: none;
            padding-top: 10px;
        }
        label {
            position: absolute;
            pointer-events: none;
            bottom: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .textarea label {
            width: 100%;
            bottom: 40px;
            background: #fff;
        }
        .underline {
            position: absolute;
            bottom: 0;
            height: 2px;
            width: 100%;
        }
        .underline:before {
            position: absolute;
            content: \"\";
            height: 2px;
            width: 100%;
            background: #3498db;
            transform: scaleX(0);
            transform-origin: center;
            transition: transform 0.3s ease;
        }
        input:focus ~ .underline:before,
        input:valid ~ .underline:before,
        textarea:focus ~ .underline:before,
        textarea:valid ~ .underline:before {
            transform: scale(1);
        }
        .submit-btn .input-data {
            overflow: hidden;
            height: 45px!important;
            width: 25%!important;
        }
        .submit-btn .input-data .inner {
            height: 100%;
            width: 300%;
            position: absolute;
            left: -100%;
            background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
            transition: all 0.4s;
        }
        .submit-btn .input-data:hover .inner {
            left: 0;
        }
        .submit-btn input {
            background: none;
            border: none;
            color: #fff;
            font-size: 17px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            position: relative;
            z-index: 2;
        }
        @media (max-width: 700px) {
            .container .text { font-size: 30px; }
            .form-row { display: block; }
            .input-data { margin: 35px 0!important; }
            .submit-btn .input-data { width: 40%!important; }
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"text\">Contactez-nous</div>
        <form action=\"#\">
            <div class=\"form-row\">
                <div class=\"input-data\">
                    <input type=\"text\" required>
                    <div class=\"underline\"></div>
                    <label for=\"\">Prénom</label>
                </div>
                <div class=\"input-data\">
                    <input type=\"text\" required>
                    <div class=\"underline\"></div>
                    <label for=\"\">Nom</label>
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"input-data\">
                    <input type=\"email\" required>
                    <div class=\"underline\"></div>
                    <label for=\"\">Adresse email</label>
                </div>
                <div class=\"input-data\">
                    <input type=\"text\" required>
                    <div class=\"underline\"></div>
                    <label for=\"\">Sujet</label>
                </div>
            </div>
            <div class=\"form-row\">
                <div class=\"input-data textarea\">
                    <textarea rows=\"8\" required></textarea>
                    <div class=\"underline\"></div>
                    <label for=\"\">Votre message</label>
                </div>
            </div>
            <div class=\"form-row submit-btn\">
                <div class=\"input-data\">
                    <div class=\"inner\"></div>
                    <input type=\"submit\" value=\"Envoyer\">
                </div>
            </div>
        </form>
        <div style=\"text-align: center; margin-top: 2rem;\">
            <a href=\"{{ path('homepage') }}\"
               style=\"background-color: #facc15; color: #1e293b; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: bold; box-shadow: 0 4px 10px rgba(0,0,0,0.3); transition: background-color 0.3s;\">
                ⬅ Retour à l'accueil
            </a>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('input, textarea').on('focus', function() {
                \$(this).siblings('.underline').addClass('active');
            }).on('blur', function() {
                if (\$(this).val() === '') {
                    \$(this).siblings('.underline').removeClass('active');
                }
            });
        });
    </script>
{% endblock %}", "portfolio/contact.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/templates/portfolio/contact.html.twig");
    }
}
