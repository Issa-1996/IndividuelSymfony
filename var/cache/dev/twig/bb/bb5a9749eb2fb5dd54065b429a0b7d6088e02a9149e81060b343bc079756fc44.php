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

/* @EasyAdmin/crud/includes/_filters_modal.html.twig */
class __TwigTemplate_c477fd69564154a3fe455196ca3828057e5376e17852fa9b780b8cf332d6d4a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascript_filter_modal' => [$this, 'block_javascript_filter_modal'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/includes/_filters_modal.html.twig"));

        // line 1
        echo "<div id=\"modal-filters\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-sm btn-secondary\" id=\"modal-clear-button\" formtarget=\"_self\">
                    <i class=\"fa fa-close\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.button.clear", array(), "EasyAdminBundle"), "html", null, true);
        echo "
                </button>
                <h5 class=\"modal-title\">
                    <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", array(), "EasyAdminBundle"), "html", null, true);
        echo "
                </h5>
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-sm btn-primary\" id=\"modal-apply-button\" formtarget=\"_self\">
                    <i class=\"fa fa-check\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.button.apply", array(), "EasyAdminBundle"), "html", null, true);
        echo "
                </button>
            </div>
            <div class=\"modal-body p-0\">
                ";
        // line 17
        echo "                ";
        // line 18
        echo "            </div>
        </div>
    </div>
</div>

";
        // line 23
        $this->displayBlock('javascript_filter_modal', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_javascript_filter_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_filter_modal"));

        // line 24
        echo "    <script>
        const filterModal = document.querySelector('#modal-filters');

        const removeFilter = function(field) {
            field.closest('form').querySelectorAll('input[name^=\"filters['+field.dataset.filterProperty+']\"]').forEach(hidden => {
                hidden.remove();
            });
            field.remove();
        }

        document.querySelector('#modal-clear-button').addEventListener('click', function() {
            filterModal.querySelectorAll('.filter-field').forEach(filterField => {
                removeFilter(filterField);
            });

            filterModal.querySelector('form').submit();
        });

        document.querySelector('#modal-apply-button').addEventListener('click', function() {
            filterModal.querySelectorAll('.filter-checkbox:not(:checked)').forEach(notAppliedFilter => {
                removeFilter(notAppliedFilter.closest('.filter-field'));
            });
            filterModal.querySelector('form').submit();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/includes/_filters_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  76 => 23,  69 => 18,  67 => 17,  60 => 12,  54 => 9,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modal-filters\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-sm btn-secondary\" id=\"modal-clear-button\" formtarget=\"_self\">
                    <i class=\"fa fa-close\"></i> {{ 'filter.button.clear'|trans(domain = 'EasyAdminBundle') }}
                </button>
                <h5 class=\"modal-title\">
                    <i class=\"fa fa-filter fa-fw\"></i> {{ 'filter.title'|trans(domain = 'EasyAdminBundle') }}
                </h5>
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-sm btn-primary\" id=\"modal-apply-button\" formtarget=\"_self\">
                    <i class=\"fa fa-check\"></i> {{ 'filter.button.apply'|trans(domain = 'EasyAdminBundle') }}
                </button>
            </div>
            <div class=\"modal-body p-0\">
                {# The filters form will be loaded via AJAX for better performance #}
                {# See @EasyAdmin/default/filters.html.twig template #}
            </div>
        </div>
    </div>
</div>

{% block javascript_filter_modal %}
    <script>
        const filterModal = document.querySelector('#modal-filters');

        const removeFilter = function(field) {
            field.closest('form').querySelectorAll('input[name^=\"filters['+field.dataset.filterProperty+']\"]').forEach(hidden => {
                hidden.remove();
            });
            field.remove();
        }

        document.querySelector('#modal-clear-button').addEventListener('click', function() {
            filterModal.querySelectorAll('.filter-field').forEach(filterField => {
                removeFilter(filterField);
            });

            filterModal.querySelector('form').submit();
        });

        document.querySelector('#modal-apply-button').addEventListener('click', function() {
            filterModal.querySelectorAll('.filter-checkbox:not(:checked)').forEach(notAppliedFilter => {
                removeFilter(notAppliedFilter.closest('.filter-field'));
            });
            filterModal.querySelector('form').submit();
        });
    </script>
{% endblock javascript_filter_modal %}
", "@EasyAdmin/crud/includes/_filters_modal.html.twig", "/home/seydina/Bureau/SON@TEL_ACADEMIE_COHORTE#3/ionic/application mobile/Codage/back/ionic/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/includes/_filters_modal.html.twig");
    }
}
