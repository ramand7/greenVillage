<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin/produits/index.html.twig */
class __TwigTemplate_4872875bdb371aafc8e852cfac0ed625 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/produits/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/produits/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/produits/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Produit index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    
    <h1 class=\"my-4 text-center text-primary\">LISTE DES PRODUITS</h1>
    <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
        yield "\" class=\"btn btn-success mb-1\">CRÉER</a>
    <table class=\"table table-striped-column table-bordered\">
    ";
        // line 11
        yield "     <thead class=\"table-light text-center\">
    ";
        // line 13
        yield "        ";
        // line 14
        yield "            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th>Description</th>
                <th>Prixht</th>
                <th>Tva</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 26
            yield "            <tr>
              <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
              <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "libelle", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
              <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
              <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prixht", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
              <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "tva", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
              <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                ";
            // line 34
            yield "              <td class=\"col text-center \">
                   
\t\t\t\t\t\t\t";
            // line 37
            yield "\t\t\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm my-1\">Voir</a>
                <a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary btn-sm my-1\">Editer</a> 
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr ?');\">
                  ";
            // line 41
            yield "                \t<button class=\"btn btn-outline-danger btn-sm align-center\">Supprimer</button>
                </form>
              </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            yield "            <tr>
                <td colspan=\"8\" class=\"text-center\">Aucun produit trouvé.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "        </tbody>
    </table>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/produits/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  194 => 50,  185 => 46,  176 => 41,  172 => 39,  168 => 38,  163 => 37,  159 => 34,  155 => 32,  151 => 31,  147 => 30,  143 => 29,  139 => 28,  135 => 27,  132 => 26,  127 => 25,  114 => 14,  112 => 13,  109 => 11,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produit index{% endblock %}

{% block body %}
    
    <h1 class=\"my-4 text-center text-primary\">LISTE DES PRODUITS</h1>
    <a href=\"{{ path('app_produit_new') }}\" class=\"btn btn-success mb-1\">CRÉER</a>
    <table class=\"table table-striped-column table-bordered\">
    {# <h1>Produit index</h1> #}
     <thead class=\"table-light text-center\">
    {# <table class=\"table\"> #}
        {# <thead> #}
            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th>Description</th>
                <th>Prixht</th>
                <th>Tva</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for produit in produits %}
            <tr>
              <td>{{ produit.id }}</td>
              <td>{{ produit.libelle }}</td>
              <td>{{ produit.description }}</td>
              <td>{{ produit.prixht }}</td>
              <td>{{ produit.tva }}</td>
              <td>{{ produit.stock }}</td>
                {# <td>{{ produit.photo }}</td> #}
              <td class=\"col text-center \">
                   
\t\t\t\t\t\t\t{# <a href=\"{{ path('app_produit_show', {'id': produit.id}) }}\">VOIR</a> #}
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_produit_show', {'id': produit.id}) }}\" class=\"btn btn-outline-primary btn-sm my-1\">Voir</a>
                <a href=\"{{ path('app_produit_edit', {'id': produit.id}) }}\" class=\"btn btn-outline-secondary btn-sm my-1\">Editer</a> 
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_produit_delete', {'id': produit.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr ?');\">
                  {# <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ produit.id) }}\"> #}
                \t<button class=\"btn btn-outline-danger btn-sm align-center\">Supprimer</button>
                </form>
              </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\" class=\"text-center\">Aucun produit trouvé.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {# <a href=\"{{ path('app_produit_new') }}\">Create new</a> #}
{% endblock %}
", "admin/produits/index.html.twig", "/home/ramand/Bureau/greenVillage20112024/templates/admin/produits/index.html.twig");
    }
}
