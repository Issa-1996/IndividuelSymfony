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

/* @EasyAdmin/page/content.html.twig */
class __TwigTemplate_b7029ae286d3e97a24c44b877585798fdba8cc3975fbeb96a3123475a65abb57 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'page_title' => [$this, 'block_page_title'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 2, $this->source); })()), "templatePath", [0 => "layout"], "method", false, false, false, 2), "@EasyAdmin/page/content.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/content.html.twig"));

        // line 3
        $context["__internal_dbbc14fe07be58bdf070eb437b3e6c0d4614c04e8b94a83176275081c2cf51b8"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "i18n", [], "any", false, false, false, 3), "translationDomain", [], "any", false, false, false, 3);
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo "page-content page-content-with-padding";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        $context["has_page_title"] = (        $this->hasBlock("page_title", $context, $blocks) &&  !twig_test_empty(twig_trim_filter(        $this->renderBlock("page_title", $context, $blocks))));
        // line 9
        echo "    ";
        $context["has_page_actions"] = (        $this->hasBlock("page_actions", $context, $blocks) &&  !twig_test_empty(twig_trim_filter(        $this->renderBlock("page_actions", $context, $blocks))));
        // line 10
        echo "    ";
        $context["has_page_footer"] = (        $this->hasBlock("page_footer", $context, $blocks) &&  !twig_test_empty(twig_trim_filter(        $this->renderBlock("page_footer", $context, $blocks))));
        // line 11
        echo "
    <div class=\"content\">
        ";
        // line 13
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 34
        echo "
        <section id=\"main\">
            ";
        // line 36
        $this->displayBlock('main', $context, $blocks);
        // line 48
        echo "            
        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header_wrapper"));

        // line 14
        echo "            ";
        if (((isset($context["has_page_title"]) || array_key_exists("has_page_title", $context) ? $context["has_page_title"] : (function () { throw new RuntimeError('Variable "has_page_title" does not exist.', 14, $this->source); })()) || (isset($context["has_page_actions"]) || array_key_exists("has_page_actions", $context) ? $context["has_page_actions"] : (function () { throw new RuntimeError('Variable "has_page_actions" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "                <section class=\"content-header\">
                    ";
            // line 16
            $this->displayBlock('content_header', $context, $blocks);
            // line 31
            echo "                </section>
            ";
        }
        // line 33
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 17
        echo "                        <div class=\"d-flex flex-row justify-content-between align-content-center w-100\">
                            <div class=\"content-header-title\">
                                ";
        // line 19
        if ((isset($context["has_page_title"]) || array_key_exists("has_page_title", $context) ? $context["has_page_title"] : (function () { throw new RuntimeError('Variable "has_page_title" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "                                    <h1 class=\"title\">
                                        ";
            // line 21
            $this->displayBlock('page_title', $context, $blocks);
            // line 22
            echo "                                    </h1>
                                ";
        }
        // line 24
        echo "                            </div>

                            ";
        // line 26
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 29
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions_wrapper"));

        // line 27
        echo "                                <div class=\"page-actions\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 37
        echo "                <div class=\"content-panel\">
                    <div class=\"content-panel-body without-header ";
        // line 38
        echo (( !(isset($context["has_page_footer"]) || array_key_exists("has_page_footer", $context) ? $context["has_page_footer"] : (function () { throw new RuntimeError('Variable "has_page_footer" does not exist.', 38, $this->source); })())) ? ("without-footer") : (""));
        echo "\">
                        ";
        // line 39
        $this->displayBlock('page_content', $context, $blocks);
        // line 40
        echo "                    </div>

                    ";
        // line 42
        if ((isset($context["has_page_footer"]) || array_key_exists("has_page_footer", $context) ? $context["has_page_footer"] : (function () { throw new RuntimeError('Variable "has_page_footer" does not exist.', 42, $this->source); })())) {
            // line 43
            echo "                        <section class=\"content-panel-footer without-padding\">
                            ";
            // line 44
            $this->displayBlock("page_footer", $context, $blocks);
            echo "
                        </section>
                    ";
        }
        // line 47
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 39,  246 => 47,  240 => 44,  237 => 43,  235 => 42,  231 => 40,  229 => 39,  225 => 38,  222 => 37,  215 => 36,  194 => 27,  187 => 26,  175 => 21,  167 => 29,  165 => 26,  161 => 24,  157 => 22,  155 => 21,  152 => 20,  150 => 19,  146 => 17,  139 => 16,  132 => 33,  128 => 31,  126 => 16,  123 => 15,  120 => 14,  113 => 13,  103 => 48,  101 => 36,  97 => 34,  95 => 13,  91 => 11,  88 => 10,  85 => 9,  82 => 8,  75 => 7,  62 => 5,  55 => 2,  53 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% extends ea.templatePath('layout') %}
{% trans_default_domain ea.i18n.translationDomain %}

{% block body_class 'page-content page-content-with-padding' %}

{% block content %}
    {% set has_page_title = block('page_title') is defined and block('page_title')|trim is not empty %}
    {% set has_page_actions = block('page_actions') is defined and block('page_actions')|trim is not empty %}
    {% set has_page_footer = block('page_footer') is defined and block('page_footer')|trim is not empty %}

    <div class=\"content\">
        {% block content_header_wrapper %}
            {% if has_page_title or has_page_actions %}
                <section class=\"content-header\">
                    {% block content_header %}
                        <div class=\"d-flex flex-row justify-content-between align-content-center w-100\">
                            <div class=\"content-header-title\">
                                {% if has_page_title %}
                                    <h1 class=\"title\">
                                        {% block page_title %}{% endblock %}
                                    </h1>
                                {% endif %}
                            </div>

                            {% block page_actions_wrapper %}
                                <div class=\"page-actions\">{% block page_actions %}{% endblock %}</div>
                            {% endblock %}
                        </div>
                    {% endblock content_header %}
                </section>
            {% endif %}
        {% endblock content_header_wrapper %}

        <section id=\"main\">
            {% block main %}
                <div class=\"content-panel\">
                    <div class=\"content-panel-body without-header {{ not has_page_footer ? 'without-footer' }}\">
                        {% block page_content %}{% endblock %}
                    </div>

                    {% if has_page_footer %}
                        <section class=\"content-panel-footer without-padding\">
                            {{ block('page_footer') }}
                        </section>
                    {% endif %}
                </div>
            {% endblock %}            
        </section>
    </div>
{% endblock content %}
", "@EasyAdmin/page/content.html.twig", "/home/seydina/Bureau/SON@TEL_ACADEMIE_COHORTE#3/ionic/application mobile/Codage/back/ionic/vendor/easycorp/easyadmin-bundle/src/Resources/views/page/content.html.twig");
    }
}
