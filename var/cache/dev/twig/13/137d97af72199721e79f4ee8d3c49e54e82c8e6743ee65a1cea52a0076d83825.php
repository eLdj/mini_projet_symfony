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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["FormEmploye"]) || array_key_exists("FormEmploye", $context) ? $context["FormEmploye"] : (function () { throw new RuntimeError('Variable "FormEmploye" does not exist.', 4, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["FormEmploye"]) || array_key_exists("FormEmploye", $context) ? $context["FormEmploye"] : (function () { throw new RuntimeError('Variable "FormEmploye" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormEmploye"]) || array_key_exists("FormEmploye", $context) ? $context["FormEmploye"] : (function () { throw new RuntimeError('Variable "FormEmploye" does not exist.', 12, $this->source); })()), "matricule", [], "any", false, false, false, 12), 'row', ["attr" => ["placeholder" => "Entrez un matricule"]]);
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormEmploye"]) || array_key_exists("FormEmploye", $context) ? $context["FormEmploye"] : (function () { throw new RuntimeError('Variable "FormEmploye" does not exist.', 13, $this->source); })()), "nomComplet", [], "any", false, false, false, 13), 'row', ["attr" => ["placeholder" => "Entrez un prénom et un nom"]]);
        echo "
        </div>
        <div class=\"form-group col-sm-3\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormEmploye"]) || array_key_exists("FormEmploye", $context) ? $context["FormEmploye"] : (function () { throw new RuntimeError('Variable "FormEmploye" does not exist.', 16, $this->source); })()), "dateNaissance", [], "any", false, false, false, 16), 'row', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormEmploye"]) || array_key_exists("FormEmploye", $context) ? $context["FormEmploye"] : (function () { throw new RuntimeError('Variable "FormEmploye" does not exist.', 17, $this->source); })()), "salaire", [], "any", false, false, false, 17), 'row', ["attr" => ["placeholder" => "Allouez un salaire"]]);
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormEmploye"]) || array_key_exists("FormEmploye", $context) ? $context["FormEmploye"] : (function () { throw new RuntimeError('Variable "FormEmploye" does not exist.', 18, $this->source); })()), "idService", [], "any", false, false, false, 18), 'row', ["attr" => ["label" => "Service"]]);
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["FormEmploye"]) || array_key_exists("FormEmploye", $context) ? $context["FormEmploye"] : (function () { throw new RuntimeError('Variable "FormEmploye" does not exist.', 19, $this->source); })()), 'rest');
        echo "
            <button type=\"submit\" class=\"btn btn-success\">
                ";
        // line 21
        if ((isset($context["monButton"]) || array_key_exists("monButton", $context) ? $context["monButton"] : (function () { throw new RuntimeError('Variable "monButton" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "                    Modifier
                ";
        } else {
            // line 24
            echo "                    Ajouter
                ";
        }
        // line 26
        echo "            </button>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["FormEmploye"]) || array_key_exists("FormEmploye", $context) ? $context["FormEmploye"] : (function () { throw new RuntimeError('Variable "FormEmploye" does not exist.', 27, $this->source); })()), 'form_end');
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
        return array (  141 => 27,  138 => 26,  134 => 24,  130 => 22,  128 => 21,  123 => 19,  119 => 18,  115 => 17,  111 => 16,  105 => 13,  101 => 12,  97 => 11,  91 => 7,  81 => 6,  62 => 3,  51 => 1,  49 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion Employés{% endblock %}
{% form_theme FormEmploye 'bootstrap_4_layout.html.twig' %}

{% block body %}
    <center>
        <h2>Gestion des Employés</h2>
    
        <div class=\"form-group col-sm-4\">
            {{ form_start(FormEmploye, {'attr': {'novalidate':'novalidate'}}) }}
            {{ form_row(FormEmploye.matricule,{'attr':{'placeholder':'Entrez un matricule'}} )}}
            {{ form_row(FormEmploye.nomComplet,{'attr':{'placeholder':'Entrez un prénom et un nom'}})}}
        </div>
        <div class=\"form-group col-sm-3\">
            {{ form_row(FormEmploye.dateNaissance, {'attr': {'novalidate':'novalidate'}}) }}
            {{ form_row(FormEmploye.salaire,{'attr':{'placeholder':'Allouez un salaire'}}) }}
            {{ form_row(FormEmploye.idService,{'attr':{'label':'Service'}} )}}
            {{ form_rest(FormEmploye) }}
            <button type=\"submit\" class=\"btn btn-success\">
                {% if monButton %}
                    Modifier
                {% else %}
                    Ajouter
                {% endif %}
            </button>
            {{ form_end(FormEmploye) }}

        </div>     
    </center> 
{% endblock %}", "ent/gestemp.html.twig", "/home/mister_d/entreprise/templates/ent/gestemp.html.twig");
    }
}
