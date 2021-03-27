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

/* recettes/home.html.twig */
class __TwigTemplate_72a540533c68f3293fa59c8b775ce4617c777b21ea3d03a225937385b97567bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recettes/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recettes/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h1>
\t\tBienvenue sur Marmytho' !</h1>


\t<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita officia id minima nihil, libero laboriosam obcaecati ipsam, nostrum, natus odio laborum ratione non incidunt aspernatur nam corrupti praesentium eveniet dolore. Distinctio vitae sint adipisci, itaque deserunt doloremque libero rerum odio, impedit sequi ea fugit aliquid praesentium quidem, neque omnis! Sapiente?</p>
\t<p>Consectetur dolor rerum temporibus distinctio, cum aliquam quam, aliquid repellendus vel iste quas repellat laborum laudantium recusandae, veniam maiores optio! Dolor eos corporis placeat quisquam, incidunt est necessitatibus dignissimos quaerat distinctio. Nisi, porro possimus? Et deleniti repudiandae explicabo tempora placeat fuga doloremque sequi laudantium assumenda soluta! Tempora ullam magni dignissimos.</p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recettes/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<h1>
\t\tBienvenue sur Marmytho' !</h1>


\t<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita officia id minima nihil, libero laboriosam obcaecati ipsam, nostrum, natus odio laborum ratione non incidunt aspernatur nam corrupti praesentium eveniet dolore. Distinctio vitae sint adipisci, itaque deserunt doloremque libero rerum odio, impedit sequi ea fugit aliquid praesentium quidem, neque omnis! Sapiente?</p>
\t<p>Consectetur dolor rerum temporibus distinctio, cum aliquam quam, aliquid repellendus vel iste quas repellat laborum laudantium recusandae, veniam maiores optio! Dolor eos corporis placeat quisquam, incidunt est necessitatibus dignissimos quaerat distinctio. Nisi, porro possimus? Et deleniti repudiandae explicabo tempora placeat fuga doloremque sequi laudantium assumenda soluta! Tempora ullam magni dignissimos.</p>

{% endblock %}
", "recettes/home.html.twig", "/media/DEV/AFPA/mission-8/marmiton2/templates/recettes/home.html.twig");
    }
}
