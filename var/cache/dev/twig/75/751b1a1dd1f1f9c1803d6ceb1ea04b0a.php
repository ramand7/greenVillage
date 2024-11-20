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

/* cart/index.html.twig */
class __TwigTemplate_c69d1523e1a0e0d9e8e723f91ad39d1e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        yield "Panier de commande";
        
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
";
        // line 7
        yield from         $this->loadTemplate("_partials/_nav.html.twig", "cart/index.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "
<h1 class=\"text-center text-success\">Votre panier</h1>

    <table class=\"table table-dark table-hover table-sm table-bordered border-light\">
        <thead>
            <tr>
                <th>Réf.</th>
                <th>Désignation</th>
\t\t\t\t\t\t\t\t<th>Prix unitaire</th>
\t\t\t\t\t\t\t\t<th>Quantité</th>   
                <th>TVA</th>
\t\t\t\t\t\t\t\t<th>Sous-total TTC</th>
\t\t\t\t\t\t\t\t<th>Action</th>
            </tr>
        </thead>
        <tbody>
        <div>
\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 25, $this->source); })()), "items", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            yield "\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 29), "libelle", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 30), "prixht", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 32), "tva", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\">Supprimer</a></td>\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 37), "prixht", [], "any", false, false, false, 37) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 37)), "html", null, true);
            yield " €</td>
\t\t\t\t\t\t</div>
    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 47
        yield "\t\t\t\t\t\t\t\t\t\t";
        // line 51
        yield "\t\t\t\t\t\t\t\t\t\t";
        // line 52
        yield "        \t\t\t\t\t";
        // line 53
        yield "    \t\t\t\t\t\t";
        // line 57
        yield "\t\t\t\t";
        // line 64
        yield "
    ";
        // line 65
        yield " 






";
        // line 84
        yield "
<h2>Total : ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 85, $this->source); })()), "items", [], "any", false, false, false, 85), function ($__total__, $__item__) use ($context, $macros) { $context["total"] = $__total__; $context["item"] = $__item__; return ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 85, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 85, $this->source); })()), "produit", [], "any", false, false, false, 85), "prixht", [], "any", false, false, false, 85) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 85, $this->source); })()), "quantity", [], "any", false, false, false, 85))); }, 0), "html", null, true);
        yield " €</h2>

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
        return "cart/index.html.twig";
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
        return array (  198 => 85,  195 => 84,  186 => 65,  183 => 64,  181 => 57,  179 => 53,  177 => 52,  175 => 51,  173 => 47,  168 => 40,  159 => 37,  152 => 33,  148 => 32,  144 => 31,  140 => 30,  136 => 29,  132 => 28,  128 => 26,  124 => 25,  105 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier de commande{% endblock %}

{% block body %}

{% include ('_partials/_nav.html.twig')  %}

<h1 class=\"text-center text-success\">Votre panier</h1>

    <table class=\"table table-dark table-hover table-sm table-bordered border-light\">
        <thead>
            <tr>
                <th>Réf.</th>
                <th>Désignation</th>
\t\t\t\t\t\t\t\t<th>Prix unitaire</th>
\t\t\t\t\t\t\t\t<th>Quantité</th>   
                <th>TVA</th>
\t\t\t\t\t\t\t\t<th>Sous-total TTC</th>
\t\t\t\t\t\t\t\t<th>Action</th>
            </tr>
        </thead>
        <tbody>
        <div>
\t\t\t\t\t{% for item in cart.items %}
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ item.produit.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ item.produit.libelle }}</td>
\t\t\t\t\t\t\t\t<td>{{ item.produit.prixht }}</td>
\t\t\t\t\t\t\t\t<td>{{ item.quantity }}</td>
\t\t\t\t\t\t\t\t<td>{{ item.produit.tva }}</td>
\t\t\t\t\t\t\t\t<td><a href=\"{{ path('cart_remove', { id: item.produit.id }) }}\">Supprimer</a></td>\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<td>{{ item.produit.prixht * item.quantity }} €</td>
\t\t\t\t\t\t</div>
    \t\t\t{% endfor %}

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{# <div>
\t\t\t\t\t\t\t\t{% for item in cart.items %}
        \t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t{# <img src=\"{{ item.produit.image }}\" alt=\"{{ item.produit.libelle }}\" width=\"100\"> #}
\t\t\t\t\t\t\t\t\t\t{# <h2>{{ item.produit.libelle }}</h2>
\t\t\t\t\t\t\t\t\t\t<p>Prix unitaire : {{ item.produit.prixht }} €</p>
\t\t\t\t\t\t\t\t\t\t<p>Quantité : {{ item.quantity }}</p>
\t\t\t\t\t\t\t\t\t\t{# <p>Sous-total : {{ item.produit.prixht * item.quantity }} €</p> #}
\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{ path('cart_remove', { id: item.produit.id }) }}\">Supprimer</a> #}
        \t\t\t\t\t{# </div> #}
    \t\t\t\t\t\t{# {% endfor %}
\t\t\t\t\t\t\t\t\t<td>{{ item.produit.prixht * item.quantity }}
            </tr> 
         #}
\t\t\t\t{# {% else %}
            <tr>
              <td colspan=\"4\">Aucune catégorie trouvée</td>
            </tr>
        {% endfor %}
        {# </tbody>
    </table> #}

    {# <a href=\"{{ path('app_categories_new') }}\">Create new</a> #} 






{# <div>
    {% for item in cart.items %}
        <div>
            <img src=\"{{ item.produit.image }}\" alt=\"{{ item.produit.libelle }}\" width=\"100\">
            <h2>{{ item.produit.libelle }}</h2>
            <p>Prix unitaire : {{ item.produit.prixht }} €</p>
            <p>Quantité : {{ item.quantity }}</p>
            <p>Sous-total : {{ item.produit.prixht * item.quantity }} €</p>
            <a href=\"{{ path('cart_remove', { id: item.produit.id }) }}\">Supprimer</a>
        </div>
    {% endfor %}
</div> #}

<h2>Total : {{ cart.items|reduce((total, item) => total + (item.produit.prixht * item.quantity), 0) }} €</h2>

{% endblock %}
", "cart/index.html.twig", "/home/ramand/Bureau/greenVillage20112024/templates/cart/index.html.twig");
    }
}
