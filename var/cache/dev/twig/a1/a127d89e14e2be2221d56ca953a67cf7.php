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
    \t<a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo1.png"), "html", null, true);
        yield "\" alt=\"Nom du Site\" height=\"50\"></a>
\t\t\t<a class=\"navbar-brand\" href=\"#\"><h1>Village Green</h1></a>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">\t
\t\t\t\t\t\t";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            yield "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
            // line 10
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_display");
            yield "\">Mon compte</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
            // line 13
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Me déconnecter</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        } else {
            // line 16
            yield "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active text-bold\" aria-current=\"page\" href=\"";
            // line 17
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">M'inscrire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active text-bold\" aria-current=\"page\" href=\"";
            // line 20
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Me connecter</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 23
        yield "
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cart_2.png"), "html", null, true);
        yield "\" class=\"img-fluid\" width=\"40px\" height=\"10px\" alt=\"Panier\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_display");
        yield "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 31
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
        return array (  111 => 31,  107 => 30,  100 => 26,  96 => 25,  92 => 23,  86 => 20,  80 => 17,  77 => 16,  71 => 13,  65 => 10,  62 => 9,  60 => 8,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("  <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
  \t<div class=\"container-fluid\">
    \t<a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('images/logo1.png') }}\" alt=\"Nom du Site\" height=\"50\"></a>
\t\t\t<a class=\"navbar-brand\" href=\"#\"><h1>Village Green</h1></a>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t
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
", "_partials/_nav.html.twig", "/home/ramand/Bureau/Copie de greenVillage/greenVillage19112024/templates/_partials/_nav.html.twig");
    }
}
