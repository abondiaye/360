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

/* @KnpPaginator/Pagination/foundation_v6_pagination.html.twig */
class __TwigTemplate_8c6fb46f44a7ee6334bca75828f90d37 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            echo "    <nav aria-label=\"Pagination\">
        ";
            // line 3
            $context["classAlign"] = ((array_key_exists("align", $context)) ? ((" text-" . (isset($context["align"]) || array_key_exists("align", $context) ? $context["align"] : (function () { throw new RuntimeError('Variable "align" does not exist.', 3, $this->source); })()))) : (""));
            // line 4
            echo "        <ul class=\"pagination";
            echo twig_escape_filter($this->env, (isset($context["classAlign"]) || array_key_exists("classAlign", $context) ? $context["classAlign"] : (function () { throw new RuntimeError('Variable "classAlign" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\">
            ";
            // line 5
            if (array_key_exists("previous", $context)) {
                // line 6
                echo "                <li class=\"pagination-previous\">
                    <a rel=\"prev\" href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 7, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 7, $this->source); })()), (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 7, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 7, $this->source); })()))), "html", null, true);
                echo "\">
                        ";
                // line 8
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            } else {
                // line 12
                echo "                <li class=\"pagination-previous disabled\">
                    ";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "
                </li>
            ";
            }
            // line 16
            echo "
            ";
            // line 17
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 17, $this->source); })()) > 1)) {
                // line 18
                echo "                <li>
                    <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 19, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 19, $this->source); })()), 1, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 19, $this->source); })()))), "html", null, true);
                echo "\">1</a>
                </li>
                ";
                // line 21
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 21, $this->source); })()) == 3)) {
                    // line 22
                    echo "                    <li>
                        <a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 23, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 23, $this->source); })()), 2, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 23, $this->source); })()))), "html", null, true);
                    echo "\">2</a>
                    </li>
                ";
                } elseif ((                // line 25
(isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 25, $this->source); })()) != 2)) {
                    // line 26
                    echo "                    <li class=\"ellipsis\"></li>
                ";
                }
                // line 28
                echo "            ";
            }
            // line 29
            echo "
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 31
                echo "                ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 31, $this->source); })()))) {
                    // line 32
                    echo "                    <li>
                        <a href=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 33, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 33, $this->source); })()), $context["page"], (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 33, $this->source); })()))), "html", null, true);
                    echo "\">
                            ";
                    // line 34
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "
                        </a>
                    </li>
                ";
                } else {
                    // line 38
                    echo "                    <li class=\"current\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</li>
                ";
                }
                // line 40
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
            ";
            // line 42
            if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 42, $this->source); })()) > (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 42, $this->source); })()))) {
                // line 43
                echo "                ";
                if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 43, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 43, $this->source); })()) + 1))) {
                    // line 44
                    echo "                    ";
                    if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 44, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 44, $this->source); })()) + 2))) {
                        // line 45
                        echo "                        <li class=\"ellipsis\"></li>
                    ";
                    } else {
                        // line 47
                        echo "                        <li>
                            <a href=\"";
                        // line 48
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 48, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 48, $this->source); })()), ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 48, $this->source); })()) - 1), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 48, $this->source); })()))), "html", null, true);
                        echo "\">
                                ";
                        // line 49
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 49, $this->source); })()) - 1), "html", null, true);
                        echo "
                            </a>
                        </li>
                    ";
                    }
                    // line 53
                    echo "                ";
                }
                // line 54
                echo "                <li>
                    <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 55, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 55, $this->source); })()), (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 55, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 55, $this->source); })()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 55, $this->source); })()), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 58
            echo "
            ";
            // line 59
            if (array_key_exists("next", $context)) {
                // line 60
                echo "                <li class=\"pagination-next\">
                    <a rel=\"next\" href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 61, $this->source); })()), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 61, $this->source); })()), (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 61, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 61, $this->source); })()))), "html", null, true);
                echo "\">
                        ";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            } else {
                // line 66
                echo "                <li class=\"pagination-next disabled\">
                    ";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "
                </li>
            ";
            }
            // line 70
            echo "        </ul>
    </nav>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig";
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
        return array (  219 => 70,  213 => 67,  210 => 66,  203 => 62,  199 => 61,  196 => 60,  194 => 59,  191 => 58,  183 => 55,  180 => 54,  177 => 53,  170 => 49,  166 => 48,  163 => 47,  159 => 45,  156 => 44,  153 => 43,  151 => 42,  148 => 41,  142 => 40,  136 => 38,  129 => 34,  125 => 33,  122 => 32,  119 => 31,  115 => 30,  112 => 29,  109 => 28,  105 => 26,  103 => 25,  98 => 23,  95 => 22,  93 => 21,  88 => 19,  85 => 18,  83 => 17,  80 => 16,  74 => 13,  71 => 12,  64 => 8,  60 => 7,  57 => 6,  55 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pageCount > 1 %}
    <nav aria-label=\"Pagination\">
        {% set classAlign = (align is defined) ? \" text-#{align}\" : '' %}
        <ul class=\"pagination{{ classAlign }}\">
            {% if previous is defined %}
                <li class=\"pagination-previous\">
                    <a rel=\"prev\" href=\"{{ path(route, knp_pagination_query(query, previous, options)) }}\">
                        {{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}
                    </a>
                </li>
            {% else %}
                <li class=\"pagination-previous disabled\">
                    {{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}
                </li>
            {% endif %}

            {% if startPage > 1 %}
                <li>
                    <a href=\"{{ path(route, knp_pagination_query(query, 1, options)) }}\">1</a>
                </li>
                {% if startPage == 3 %}
                    <li>
                        <a href=\"{{ path(route, knp_pagination_query(query, 2, options)) }}\">2</a>
                    </li>
                {% elseif startPage != 2 %}
                    <li class=\"ellipsis\"></li>
                {% endif %}
            {% endif %}

            {% for page in pagesInRange %}
                {% if page != current %}
                    <li>
                        <a href=\"{{ path(route, knp_pagination_query(query, page, options)) }}\">
                            {{ page }}
                        </a>
                    </li>
                {% else %}
                    <li class=\"current\">{{ page }}</li>
                {% endif %}
            {% endfor %}

            {% if pageCount > endPage %}
                {% if pageCount > (endPage + 1) %}
                    {% if pageCount > (endPage + 2) %}
                        <li class=\"ellipsis\"></li>
                    {% else %}
                        <li>
                            <a href=\"{{ path(route, knp_pagination_query(query, (pageCount - 1), options)) }}\">
                                {{ pageCount - 1 }}
                            </a>
                        </li>
                    {% endif %}
                {% endif %}
                <li>
                    <a href=\"{{ path(route, knp_pagination_query(query, pageCount, options)) }}\">{{ pageCount }}</a>
                </li>
            {% endif %}

            {% if next is defined %}
                <li class=\"pagination-next\">
                    <a rel=\"next\" href=\"{{ path(route, knp_pagination_query(query, next, options)) }}\">
                        {{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}
                    </a>
                </li>
            {% else %}
                <li class=\"pagination-next disabled\">
                    {{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}
                </li>
            {% endif %}
        </ul>
    </nav>
{% endif %}
", "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig", "/Users/abdoulayendiaye/Documents/InoTool-master/vendor/knplabs/knp-paginator-bundle/templates/Pagination/foundation_v6_pagination.html.twig");
    }
}
