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

/* _partials/_nav.html.twig */
class __TwigTemplate_4254ba81fed83c785306b41cc2382b17 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav.html.twig"));

        // line 1
        yield "  <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
  \t<div class=\"container-fluid\">
    \t<a class=\"navbar-brand\" href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo1.png"), "html", null, true);
        yield "\" alt=\"Nom du Site\" height=\"48\"></a>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        yield "\"><h1><b>Village Green</b></h1></a>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t
\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", ["error"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            yield "\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "
\t\t\t";
        // line 13
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["error"], "method", false, false, false, 13))) {
            // line 14
            yield "\t\t\t\t\t<script>
\t\t\t\t\t\t\t// Redirection après 3 secondes
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\t\twindow.location.href = \"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("redirect_to", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["redirect_to"]) || array_key_exists("redirect_to", $context) ? $context["redirect_to"] : (function () { throw new RuntimeError('Variable "redirect_to" does not exist.', 17, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "headers", [], "any", false, false, false, 17), "get", ["referer"], "method", false, false, false, 17)) ?: ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact"))))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "headers", [], "any", false, false, false, 17), "get", ["referer"], "method", false, false, false, 17)) ?: ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact"))))), "html", null, true);
            yield "\";
\t\t\t\t\t\t\t}, 3000);
\t\t\t\t\t</script>
\t\t\t";
        }
        // line 21
        yield "
\t\t";
        // line 23
        yield "
\t\t\t\t\t<ul class=\"navbar-nav ms-auto mb-3 mb-lg-0\">\t
\t\t\t\t\t\t";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            yield "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
            // line 27
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_display");
            yield "\">Mon compte</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
            // line 30
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Deconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        } else {
            // line 33
            yield "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active text-bold\" aria-current=\"page\" href=\"";
            // line 34
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Inscription</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active text-bold\" aria-current=\"page\" href=\"";
            // line 37
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 40
        yield "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cart_2.png"), "html", null, true);
        yield "\" class=\"img-fluid\" width=\"26px\" alt=\"Panier\">
\t\t\t\t\t\t\t\t";
        // line 43
        if (((isset($context["cartTotalQuantity"]) || array_key_exists("cartTotalQuantity", $context) ? $context["cartTotalQuantity"] : (function () { throw new RuntimeError('Variable "cartTotalQuantity" does not exist.', 43, $this->source); })()) > 0)) {
            // line 44
            yield "\t\t\t\t\t\t\t\t\t<span class=\"position-absolute translate-middle badge rounded-pill bg-danger\">+";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cartTotalQuantity"]) || array_key_exists("cartTotalQuantity", $context) ? $context["cartTotalQuantity"] : (function () { throw new RuntimeError('Variable "cartTotalQuantity" does not exist.', 44, $this->source); })()), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">articles dans le panier</span>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 47
        yield "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_display");
        yield "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/usericon_1.png"), "html", null, true);
        yield "\" class=\"img-fluid\" width=\"28x\" alt=\"Mon compte\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
    \t</div>
  \t</div>
\t</nav> 
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_partials/_nav.html.twig";
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
        return array (  165 => 51,  161 => 50,  156 => 47,  149 => 44,  147 => 43,  143 => 42,  139 => 41,  136 => 40,  130 => 37,  124 => 34,  121 => 33,  115 => 30,  109 => 27,  106 => 26,  104 => 25,  100 => 23,  97 => 21,  90 => 17,  85 => 14,  83 => 13,  80 => 12,  71 => 9,  68 => 8,  64 => 7,  58 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("  <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
  \t<div class=\"container-fluid\">
    \t<a class=\"navbar-brand\" href=\"{{ path('app_main') }}\"><img src=\"{{ asset('images/logo1.png') }}\" alt=\"Nom du Site\" height=\"48\"></a>
\t\t\t<a class=\"navbar-brand\" href=\"{{ path('app_main') }}\"><h1><b>Village Green</b></h1></a>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t
\t\t\t{% for message in app.flashes('error') %}
\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t\t{{ message }}
\t\t\t\t\t</div>
\t\t\t{% endfor %}

\t\t\t{% if app.flashes('error') is not empty %}
\t\t\t\t\t<script>
\t\t\t\t\t\t\t// Redirection après 3 secondes
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\t\twindow.location.href = \"{{ redirect_to|default(app.request.headers.get('referer') ?: path('app_contact')) }}\";
\t\t\t\t\t\t\t}, 3000);
\t\t\t\t\t</script>
\t\t\t{% endif %}

\t\t{# Pour accéder  #}

\t\t\t\t\t<ul class=\"navbar-nav ms-auto mb-3 mb-lg-0\">\t
\t\t\t\t\t\t{% if(app.user) %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('profil_display') }}\">Mon compte</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_logout') }}\">Deconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active text-bold\" aria-current=\"page\" href=\"{{ path('app_register') }}\">Inscription</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active text-bold\" aria-current=\"page\" href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('cart_index') }}\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/cart_2.png') }}\" class=\"img-fluid\" width=\"26px\" alt=\"Panier\">
\t\t\t\t\t\t\t\t{% if cartTotalQuantity > 0 %}
\t\t\t\t\t\t\t\t\t<span class=\"position-absolute translate-middle badge rounded-pill bg-danger\">+{{ cartTotalQuantity }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">articles dans le panier</span>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('profil_display') }}\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/usericon_1.png') }}\" class=\"img-fluid\" width=\"28x\" alt=\"Mon compte\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
    \t</div>
  \t</div>
\t</nav> 
", "_partials/_nav.html.twig", "/home/ramand/Bureau/greenVillage/templates/_partials/_nav.html.twig");
    }
}
