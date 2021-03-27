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

/* recettes/show.html.twig */
class __TwigTemplate_f2cf9b0336ffe5d225caa8abf197ce41ce18c21ffdb563a618e71eb100847f82 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recettes/show.html.twig", 1);
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

        echo "Recettes
";
        
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
        echo "\t<h1 style=\"padding:15px\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col col-md-12\">
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 12, $this->source); })()), "images", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 13
            echo "        
            <img  src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 14))), "html", null, true);
            echo "\" alt=\"Image\" width=\"1100\" height=\"500\">
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\" style=\"padding:20px\">
\t\t\t<div class=\"col col-md-3\">
\t\t\t\t<h2>Ingrédients</h2>
\t\t\t\t\t";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 23, $this->source); })()), "ingredients", [], "any", false, false, false, 23), "html", null, true);
        echo "
\t\t\t</div>\t\t

\t\t\t<div class=\"col col-md-9\">
\t\t\t\t<h2>Préparation</h2>
\t\t\t\t";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 28, $this->source); })()), "preparation", [], "any", false, false, false, 28), "html", null, true);
        echo "
\t\t\t</div>\t
\t\t</div>
\t

\t<div class=\"row\">

\t\t<div class=\"col col-md-6\">
\t\t\t<button class=\"btn-primary\"><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recettes_index");
        echo "\" style=\"color:white\">Retourner à la liste</a></button>
\t\t</div>\t

\t\t<div class=\"col col-md-6\">
\t\t\t<button class=\"btn-primary\"><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recettes_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\" style=\"color:white\">Modifier</a></button>
\t\t</div>
\t</div>
</div>


\t";
        // line 46
        echo twig_include($this->env, $context, "recettes/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recettes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 46,  148 => 40,  141 => 36,  130 => 28,  122 => 23,  114 => 17,  105 => 14,  102 => 13,  98 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recettes
{% endblock %}

{% block body %}
\t<h1 style=\"padding:15px\">{{ recette.nom }}</h1>

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col col-md-12\">
\t\t\t\t{% for image in recette.images %}
        
            <img  src=\"{{ asset('/uploads/'~image.nom) }}\" alt=\"Image\" width=\"1100\" height=\"500\">
        
    {% endfor %}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\" style=\"padding:20px\">
\t\t\t<div class=\"col col-md-3\">
\t\t\t\t<h2>Ingrédients</h2>
\t\t\t\t\t{{ recette.ingredients }}
\t\t\t</div>\t\t

\t\t\t<div class=\"col col-md-9\">
\t\t\t\t<h2>Préparation</h2>
\t\t\t\t{{ recette.preparation }}
\t\t\t</div>\t
\t\t</div>
\t

\t<div class=\"row\">

\t\t<div class=\"col col-md-6\">
\t\t\t<button class=\"btn-primary\"><a href=\"{{ path('recettes_index') }}\" style=\"color:white\">Retourner à la liste</a></button>
\t\t</div>\t

\t\t<div class=\"col col-md-6\">
\t\t\t<button class=\"btn-primary\"><a href=\"{{ path('recettes_edit', {'id': recette.id}) }}\" style=\"color:white\">Modifier</a></button>
\t\t</div>
\t</div>
</div>


\t{{ include('recettes/_delete_form.html.twig') }}
{% endblock %}
", "recettes/show.html.twig", "C:\\MAMP\\htdocs\\symfony5\\marmiton2\\templates\\recettes\\show.html.twig");
    }
}
