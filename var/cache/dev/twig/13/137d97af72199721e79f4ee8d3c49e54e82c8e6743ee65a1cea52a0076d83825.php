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

/* ent/gestemp.html.twig */
class __TwigTemplate_81d7fc4eb3d02698421e756e0409096bb9aebdfd37d2339fe2c308e541d8ca2d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ent/gestemp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ent/gestemp.html.twig"));

        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 4, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ent/gestemp.html.twig", 1);
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

        echo "Gestion Employés";
        
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
        echo "    <center>
        <h2>Gestion des Employés</h2>
    
        <div class=\"form-group col-sm-4\">
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
        
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 13, $this->source); })()), "matricule", [], "any", false, false, false, 13), 'row');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 14, $this->source); })()), "nomComplet", [], "any", false, false, false, 14), 'row');
        echo "
        </div>
        <div class=\"form-group col-sm-3\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 17, $this->source); })()), "dateNaissance", [], "any", false, false, false, 17), 'row');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 18, $this->source); })()), "salaire", [], "any", false, false, false, 18), 'row');
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 19, $this->source); })()), "idService", [], "any", false, false, false, 19), 'row');
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 20, $this->source); })()), 'rest');
        echo "
            <button type=\"submit\" class=\"btn btn-success\">
                ";
        // line 22
        if ((isset($context["monButton"]) || array_key_exists("monButton", $context) ? $context["monButton"] : (function () { throw new RuntimeError('Variable "monButton" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "                    Modifier
                ";
        } else {
            // line 25
            echo "                    Ajouter
                ";
        }
        // line 27
        echo "            </button>
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEmploye"]) || array_key_exists("formEmploye", $context) ? $context["formEmploye"] : (function () { throw new RuntimeError('Variable "formEmploye" does not exist.', 28, $this->source); })()), 'form_end');
        echo "

        </div>     
    </center> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ent/gestemp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 28,  139 => 27,  135 => 25,  131 => 23,  129 => 22,  124 => 20,  120 => 19,  116 => 18,  112 => 17,  106 => 14,  102 => 13,  97 => 11,  91 => 7,  81 => 6,  62 => 3,  51 => 1,  49 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion Employés{% endblock %}
{% form_theme formEmploye 'bootstrap_4_layout.html.twig' %}

{% block body %}
    <center>
        <h2>Gestion des Employés</h2>
    
        <div class=\"form-group col-sm-4\">
            {{ form_start(formEmploye)}}
        
            {{ form_row(formEmploye.matricule)}}
            {{ form_row(formEmploye.nomComplet)}}
        </div>
        <div class=\"form-group col-sm-3\">
            {{ form_row(formEmploye.dateNaissance)}}
            {{ form_row(formEmploye.salaire)}}
            {{ form_row(formEmploye.idService)}}
            {{ form_rest(formEmploye) }}
            <button type=\"submit\" class=\"btn btn-success\">
                {% if monButton %}
                    Modifier
                {% else %}
                    Ajouter
                {% endif %}
            </button>
            {{ form_end(formEmploye) }}

        </div>     
    </center> 
{% endblock %}", "ent/gestemp.html.twig", "/home/mister_d/entreprise/templates/ent/gestemp.html.twig");
    }
}
