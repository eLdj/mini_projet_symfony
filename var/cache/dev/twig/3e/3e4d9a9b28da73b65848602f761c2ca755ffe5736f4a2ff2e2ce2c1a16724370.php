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

/* ent/services.html.twig */
class __TwigTemplate_9a824a69a4da40b39d7f4ba85804758886345862b0c8fe560bf134e0b8498183 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ent/services.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ent/services.html.twig"));

        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formService"]) || array_key_exists("formService", $context) ? $context["formService"] : (function () { throw new RuntimeError('Variable "formService" does not exist.', 4, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ent/services.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Services";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container\">
    
    <center>
        <h2>Liste des services</h2>
   
        <table class=\"table table-striped table-bordered\" style=\"width: 50%\">
            <thead>
                <th>Nom du service</th>   
                <th></th>
            </thead>

            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            echo "   
                <tr>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "libelle", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_serv", ["id" => twig_get_attribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\"><button class=\"btn btn-outline-info\">Modifier</button></a></td>            
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </tbody>
        </table>
    </center>
</div>

<center>
    <h4>Ajout de service</h4>
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formService"]) || array_key_exists("formService", $context) ? $context["formService"] : (function () { throw new RuntimeError('Variable "formService" does not exist.', 32, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group col-sm-2\">
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formService"]) || array_key_exists("formService", $context) ? $context["formService"] : (function () { throw new RuntimeError('Variable "formService" does not exist.', 34, $this->source); })()), "libelle", [], "any", false, false, false, 34), 'row');
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formService"]) || array_key_exists("formService", $context) ? $context["formService"] : (function () { throw new RuntimeError('Variable "formService" does not exist.', 35, $this->source); })()), 'rest');
        echo "
        <button type=\"submit\" class=\"btn btn-success\">
            ";
        // line 37
        if ((isset($context["monButton"]) || array_key_exists("monButton", $context) ? $context["monButton"] : (function () { throw new RuntimeError('Variable "monButton" does not exist.', 37, $this->source); })())) {
            // line 38
            echo "                Modifier
            ";
        } else {
            // line 40
            echo "                Ajouter
            ";
        }
        // line 42
        echo "        </button>
        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formService"]) || array_key_exists("formService", $context) ? $context["formService"] : (function () { throw new RuntimeError('Variable "formService" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
    </div>
</center>      
       

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ent/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 43,  158 => 42,  154 => 40,  150 => 38,  148 => 37,  143 => 35,  139 => 34,  134 => 32,  125 => 25,  116 => 22,  112 => 21,  105 => 19,  91 => 7,  81 => 6,  62 => 3,  51 => 1,  49 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Services{% endblock %}
{% form_theme formService 'bootstrap_4_layout.html.twig' %}

{% block body %}
<div class=\"container\">
    
    <center>
        <h2>Liste des services</h2>
   
        <table class=\"table table-striped table-bordered\" style=\"width: 50%\">
            <thead>
                <th>Nom du service</th>   
                <th></th>
            </thead>

            <tbody>
                {% for type in services %}   
                <tr>
                    <td>{{type.libelle}}</td>
                    <td><a href=\"{{ path('edit_serv',{'id':type.id})}}\"><button class=\"btn btn-outline-info\">Modifier</button></a></td>            
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </center>
</div>

<center>
    <h4>Ajout de service</h4>
    {{ form_start(formService)}}
    <div class=\"form-group col-sm-2\">
        {{ form_row(formService.libelle)}}
        {{ form_rest(formService) }}
        <button type=\"submit\" class=\"btn btn-success\">
            {% if monButton %}
                Modifier
            {% else %}
                Ajouter
            {% endif %}
        </button>
        {{ form_end(formService) }}
    </div>
</center>      
       

{% endblock %}", "ent/services.html.twig", "/home/mister_d/entreprise/templates/ent/services.html.twig");
    }
}
