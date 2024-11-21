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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo1.png"), "html", null, true);
        yield "\" alt=\"Nom du Site\" height=\"50\"></a>
\t\t\t<a class=\"navbar-brand\" href=\"#\"><h1>Village Green</h1></a>
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
\t\t\t\t\t\t\tsetTimeout(function () {
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
\t\t\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">\t
\t\t\t\t\t\t";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            yield "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_display");
            yield "\">Mon compte</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
            // line 28
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Me déconnecter</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        } else {
            // line 31
            yield "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active text-bold\" aria-current=\"page\" href=\"";
            // line 32
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">M'inscrire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active text-bold\" aria-current=\"page\" href=\"";
            // line 35
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Me connecter</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 38
        yield "
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cart_2.png"), "html", null, true);
        yield "\" class=\"img-fluid\" width=\"40px\" height=\"10px\" alt=\"Panier\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_display");
        yield "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/usericon_1.png"), "html", null, true);
        yield "\" class=\"img-fluid\" width=\"42x\" height=\"42px\" alt=\"Mon compte\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
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
        return array (  149 => 46,  145 => 45,  138 => 41,  134 => 40,  130 => 38,  124 => 35,  118 => 32,  115 => 31,  109 => 28,  103 => 25,  100 => 24,  98 => 23,  94 => 21,  87 => 17,  82 => 14,  80 => 13,  77 => 12,  68 => 9,  65 => 8,  61 => 7,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("  <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
  \t<div class=\"container-fluid\">
    \t<a class=\"navbar-brand\" href=\"{{ path('app_accueil') }}\"><img src=\"{{ asset('images/logo1.png') }}\" alt=\"Nom du Site\" height=\"50\"></a>
\t\t\t<a class=\"navbar-brand\" href=\"#\"><h1>Village Green</h1></a>
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
\t\t\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\t\t\twindow.location.href = \"{{ redirect_to|default(app.request.headers.get('referer') ?: path('app_contact')) }}\";
\t\t\t\t\t\t\t}, 3000);
\t\t\t\t\t</script>
\t\t\t{% endif %}

\t\t\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">\t
\t\t\t\t\t\t{% if(app.user) %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('profil_display') }}\">Mon compte</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_logout') }}\">Me déconnecter</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active text-bold\" aria-current=\"page\" href=\"{{ path('app_register') }}\">M'inscrire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active text-bold\" aria-current=\"page\" href=\"{{ path('app_login') }}\">Me connecter</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('cart_index') }}\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/cart_2.png') }}\" class=\"img-fluid\" width=\"40px\" height=\"10px\" alt=\"Panier\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('profil_display') }}\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/usericon_1.png') }}\" class=\"img-fluid\" width=\"42x\" height=\"42px\" alt=\"Mon compte\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
    \t</div>
  \t</div>
\t</nav> 
", "_partials/_nav.html.twig", "/home/ramand/Bureau/greenVillage21112024/templates/_partials/_nav.html.twig");
    }
}
