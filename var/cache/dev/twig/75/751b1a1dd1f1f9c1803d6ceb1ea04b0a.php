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
<h1 class=\"text text-center text-primary\">Votre panier</h1>

    <p></p>
\t\t";
        // line 13
        yield "
    ";
        // line 15
        yield "    ";
        // line 16
        yield "    <!-- Ajoutez d'autres informations du panier ici -->

<div class=\"container-fluid w-50\">
\t<div class=\"col-12\">
    <table class=\"table table-hover table-primary\">
        ";
        // line 22
        yield "            <tr class=\"text-center\">
                ";
        // line 24
        yield "\t\t\t\t\t\t\t\t<th>Désignation</th>
\t\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t\t<th>Qté</th>   
                <th>TVA</th>
\t\t\t\t\t\t\t\t<th>Sous-total</th>
\t\t\t\t\t\t\t\t<th>Action</th>
            </tr>
        ";
        // line 32
        yield "        ";
        // line 33
        yield "        ";
        // line 34
        yield "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 34, $this->source); })()), "items", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            yield "\t\t\t\t\t\t";
            // line 36
            yield "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t";
            // line 38
            yield "\t\t\t\t\t\t\t\t<td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 38), "libelle", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 39), "prixht", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 41), "tva", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 42), "prixht", [], "any", false, false, false, 42) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 42)) * (1 + CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 42), "tva", [], "any", false, false, false, 42))), "html", null, true);
            yield " €</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\"><div>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "quantity" => 1]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-danger\"><b>Supprimer</b></a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-success\"><b>+</b></a>
                  <a href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_decrease", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-danger\"><b>-</b></a>
\t\t\t\t\t\t\t\t</div></td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t";
            // line 50
            yield "    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "\t\t\t\t";
        // line 52
        yield "\t\t\t";
        // line 53
        yield "   \t</table>
\t</div>
\t<div class=\"col-3 ms-1\">\t\t\t
\t\t<h4 class=\"text-center\"><b>Total :</b> ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 56, $this->source); })()), "items", [], "any", false, false, false, 56), function ($__total__, $__item__) use ($context, $macros) { $context["total"] = $__total__; $context["item"] = $__item__; return ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 56, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "produit", [], "any", false, false, false, 56), "prixht", [], "any", false, false, false, 56) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "quantity", [], "any", false, false, false, 56))); }, 0), "html", null, true);
        yield " €</h4>
\t</div>
\t<td><a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        yield "\" class=\"btn btn-sm btn-outline-primary\"><b>Page d'accueil</b></a></td>
\t<td><a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation_commande");
        yield "\" class=\"btn btn-sm btn-outline-success\"><b>Passez la commande</b></a></td>\t\t\t\t\t\t
</div>\t

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
        return array (  209 => 59,  205 => 58,  200 => 56,  195 => 53,  193 => 52,  191 => 51,  185 => 50,  179 => 46,  175 => 45,  171 => 44,  166 => 42,  162 => 41,  158 => 40,  154 => 39,  149 => 38,  146 => 36,  144 => 35,  139 => 34,  137 => 33,  135 => 32,  126 => 24,  123 => 22,  116 => 16,  114 => 15,  111 => 13,  105 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier de commande{% endblock %}

{% block body %}

{% include ('_partials/_nav.html.twig')  %}

<h1 class=\"text text-center text-primary\">Votre panier</h1>

    <p></p>
\t\t{# <h1>Votre Panier</h1> #}

    {# <p><b>Panier ID :</b> {{ cart.id }}</p> #}
    {# <p><b>Utilisateur : </b>{{ cart.user.nom }}</p> #}
    <!-- Ajoutez d'autres informations du panier ici -->

<div class=\"container-fluid w-50\">
\t<div class=\"col-12\">
    <table class=\"table table-hover table-primary\">
        {# <thead> #}
            <tr class=\"text-center\">
                {# <th>id</th> #}
\t\t\t\t\t\t\t\t<th>Désignation</th>
\t\t\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t\t\t<th>Qté</th>   
                <th>TVA</th>
\t\t\t\t\t\t\t\t<th>Sous-total</th>
\t\t\t\t\t\t\t\t<th>Action</th>
            </tr>
        {# </thead> #}
        {# <tbody> #}
        {# <div> #}
\t\t\t\t\t{% for item in cart.items %}
\t\t\t\t\t\t{# <div> #}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t{# <td>{{ item.produit.id }}</td> #}
\t\t\t\t\t\t\t\t<td>{{ item.produit.libelle }}</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ item.produit.prixht }}</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ item.quantity }}</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ item.produit.tva }}</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ (item.produit.prixht * item.quantity) * (1 + item.produit.tva) }} €</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\"><div>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('cart_remove', { id: item.produit.id, quantity: 1  }) }}\" class=\"btn btn-sm btn-outline-danger\"><b>Supprimer</b></a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('cart_add', { id: item.produit.id }) }}\" class=\"btn btn-sm btn-success\"><b>+</b></a>
                  <a href=\"{{ path('cart_decrease', { id: item.produit.id }) }}\" class=\"btn btn-sm btn-danger\"><b>-</b></a>
\t\t\t\t\t\t\t\t</div></td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t{# </div> #}
    \t\t\t{% endfor %}
\t\t\t\t{# </div> #}
\t\t\t{# </tbody> #}
   \t</table>
\t</div>
\t<div class=\"col-3 ms-1\">\t\t\t
\t\t<h4 class=\"text-center\"><b>Total :</b> {{ cart.items|reduce((total, item) => total + (item.produit.prixht * item.quantity), 0) }} €</h4>
\t</div>
\t<td><a href=\"{{ path('app_main') }}\" class=\"btn btn-sm btn-outline-primary\"><b>Page d'accueil</b></a></td>
\t<td><a href=\"{{ path('validation_commande') }}\" class=\"btn btn-sm btn-outline-success\"><b>Passez la commande</b></a></td>\t\t\t\t\t\t
</div>\t

{% endblock %}\t\t\t\t\t\t




", "cart/index.html.twig", "/home/ramand/Bureau/greenVillage/templates/cart/index.html.twig");
    }
}
