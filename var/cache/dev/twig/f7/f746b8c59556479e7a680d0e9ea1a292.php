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

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_d4c868cd9c8eb87d4e92f44fe22b3271 extends Template
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
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        yield "    ";
        $context["request_handler"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 5
            yield "        ";
            yield CoreExtension::callMacro($macros["_self"], "macro_set_handler", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 5, $this->source); })()), "controller", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
            yield "
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        yield "
    ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "redirect", [], "any", false, false, false, 8)) {
            // line 9
            yield "        ";
            $context["redirect_handler"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 10
                yield "            ";
                yield CoreExtension::callMacro($macros["_self"], "macro_set_handler", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "redirect", [], "any", false, false, false, 10), "controller", [], "any", false, false, false, 10), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "redirect", [], "any", false, false, false, 10), "route", [], "any", false, false, false, 10), ((("GET" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "redirect", [], "any", false, false, false, 10), "method", [], "any", false, false, false, 10))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "redirect", [], "any", false, false, false, 10), "method", [], "any", false, false, false, 10)) : (""))], 10, $context, $this->getSourceContext());
                yield "
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            yield "    ";
        }
        // line 13
        yield "
    ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "forwardtoken", [], "any", false, false, false, 14)) {
            // line 15
            yield "        ";
            $context["forward_profile"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 15, $this->source); })()), "childByToken", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "forwardtoken", [], "any", false, false, false, 15)], "method", false, false, false, 15);
            // line 16
            yield "        ";
            $context["forward_handler"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 17
                yield "            ";
                yield CoreExtension::callMacro($macros["_self"], "macro_set_handler", [(((isset($context["forward_profile"]) || array_key_exists("forward_profile", $context) ? $context["forward_profile"] : (function () { throw new RuntimeError('Variable "forward_profile" does not exist.', 17, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["forward_profile"]) || array_key_exists("forward_profile", $context) ? $context["forward_profile"] : (function () { throw new RuntimeError('Variable "forward_profile" does not exist.', 17, $this->source); })()), "collector", ["request"], "method", false, false, false, 17), "controller", [], "any", false, false, false, 17)) : ("n/a"))], 17, $context, $this->getSourceContext());
                yield "
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 19
            yield "    ";
        }
        // line 20
        yield "
    ";
        // line 21
        $context["request_status_code_color"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "statuscode", [], "any", false, false, false, 21) >= 400)) ? ("red") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "statuscode", [], "any", false, false, false, 21) >= 300)) ? ("yellow") : ("green"))));
        // line 22
        yield "
    ";
        // line 23
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 24
            yield "        <span class=\"sf-toolbar-status sf-toolbar-status-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["request_status_code_color"]) || array_key_exists("request_status_code_color", $context) ? $context["request_status_code_color"] : (function () { throw new RuntimeError('Variable "request_status_code_color" does not exist.', 24, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "statuscode", [], "any", false, false, false, 24), "html", null, true);
            yield "</span>
        ";
            // line 25
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "route", [], "any", false, false, false, 25)) {
                // line 26
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 26, $this->source); })()), "redirect", [], "any", false, false, false, 26)) {
                    yield "<span class=\"sf-toolbar-request-icon\">";
                    yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/redirect.svg");
                    yield "</span>";
                }
                // line 27
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "forwardtoken", [], "any", false, false, false, 27)) {
                    yield "<span class=\"sf-toolbar-request-icon\">";
                    yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/forward.svg");
                    yield "</span>";
                }
                // line 28
                yield "            <span class=\"sf-toolbar-label\">";
                ((("GET" != CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 28, $this->source); })()), "method", [], "any", false, false, false, 28))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 28, $this->source); })()), "method", [], "any", false, false, false, 28), "html", null, true)) : (yield ""));
                yield " @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "route", [], "any", false, false, false, 29), "html", null, true);
                yield "</span>
        ";
            }
            // line 31
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        yield "
    ";
        // line 33
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 37, $this->source); })()), "statuscode", [], "any", false, false, false, 37), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 37, $this->source); })()), "statustext", [], "any", false, false, false, 37), "html", null, true);
            yield "</span>
            </div>

            ";
            // line 40
            if (("GET" != CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "method", [], "any", false, false, false, 40))) {
                // line 41
                yield "<div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "method", [], "any", false, false, false, 43), "html", null, true);
                yield "</span>
                </div>";
            }
            // line 46
            yield "
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["request_handler"]) || array_key_exists("request_handler", $context) ? $context["request_handler"] : (function () { throw new RuntimeError('Variable "request_handler" does not exist.', 49, $this->source); })()), "html", null, true);
            yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 54), "n/a")) : ("n/a")), "html", null, true);
            yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
            // line 59
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "sessionmetadata", [], "any", false, false, false, 59))) {
                yield "yes";
            } else {
                yield "no";
            }
            yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Stateless Check</b>
                <span>";
            // line 64
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "statelesscheck", [], "any", false, false, false, 64)) {
                yield "yes";
            } else {
                yield "no";
            }
            yield "</span>
            </div>
        </div>

        ";
            // line 68
            if (array_key_exists("redirect_handler", $context)) {
                // line 69
                yield "<div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 72, $this->source); })()), "redirect", [], "any", false, false, false, 72), "status_code", [], "any", false, false, false, 72), "html", null, true);
                yield "</span>
                        Redirect from
                    </b>
                    <span>
                        ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["redirect_handler"]) || array_key_exists("redirect_handler", $context) ? $context["redirect_handler"] : (function () { throw new RuntimeError('Variable "redirect_handler" does not exist.', 76, $this->source); })()), "html", null, true);
                yield "
                        (<a href=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 77, $this->source); })()), "redirect", [], "any", false, false, false, 77), "token", [], "any", false, false, false, 77)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 77, $this->source); })()), "redirect", [], "any", false, false, false, 77), "token", [], "any", false, false, false, 77), "html", null, true);
                yield "</a>)
                    </span>
                </div>
            </div>
        ";
            }
            // line 82
            yield "
        ";
            // line 83
            if (array_key_exists("forward_handler", $context)) {
                // line 84
                yield "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["forward_handler"]) || array_key_exists("forward_handler", $context) ? $context["forward_handler"] : (function () { throw new RuntimeError('Variable "forward_handler" does not exist.', 88, $this->source); })()), "html", null, true);
                yield "
                        (<a href=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 89, $this->source); })()), "forwardtoken", [], "any", false, false, false, 89)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 89, $this->source); })()), "forwardtoken", [], "any", false, false, false, 89), "html", null, true);
                yield "</a>)
                    </span>
                </div>
            </div>
        ";
            }
            // line 94
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        yield "
    ";
        // line 96
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 96, $this->source); })())]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 100
        yield "    <span class=\"label\">
        <span class=\"icon\">";
        // line 101
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/request.svg");
        yield "</span>
        <strong>Request / Response</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 107
        yield "    ";
        $context["controller_name"] = CoreExtension::callMacro($macros["_self"], "macro_set_handler", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 107, $this->source); })()), "controller", [], "any", false, false, false, 107)], 107, $context, $this->getSourceContext());
        // line 108
        yield "    <h2>
        ";
        // line 109
        ((CoreExtension::inFilter("n/a", (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 109, $this->source); })()))) ? (yield "Request / Response") : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 109, $this->source); })()), "html", null, true)));
        yield "
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                ";
        // line 117
        $context["has_no_query_post_or_files"] = ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 117, $this->source); })()), "requestquery", [], "any", false, false, false, 117), "all", [], "any", false, false, false, 117)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 117, $this->source); })()), "requestrequest", [], "any", false, false, false, 117), "all", [], "any", false, false, false, 117))) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 117, $this->source); })()), "requestfiles", [], "any", false, false, false, 117)));
        // line 118
        yield "                ";
        if ((isset($context["has_no_query_post_or_files"]) || array_key_exists("has_no_query_post_or_files", $context) ? $context["has_no_query_post_or_files"] : (function () { throw new RuntimeError('Variable "has_no_query_post_or_files" does not exist.', 118, $this->source); })())) {
            // line 119
            yield "                    <div class=\"empty-query-post-files\" style=\"display: flex; align-items: stretch\">
                        <div>
                            <h3>GET Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>POST Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>Uploaded Files</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                    </div>
                ";
        } else {
            // line 134
            yield "                    <h3>GET Parameters</h3>

                    ";
            // line 136
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 136, $this->source); })()), "requestquery", [], "any", false, false, false, 136), "all", [], "any", false, false, false, 136))) {
                // line 137
                yield "                        <div class=\"empty\">
                            <p>No GET parameters</p>
                        </div>
                    ";
            } else {
                // line 141
                yield "                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 141, $this->source); })()), "requestquery", [], "any", false, false, false, 141), "maxDepth" => 1], false);
                yield "
                    ";
            }
            // line 143
            yield "
                    <h3>POST Parameters</h3>

                    ";
            // line 146
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 146, $this->source); })()), "requestrequest", [], "any", false, false, false, 146), "all", [], "any", false, false, false, 146))) {
                // line 147
                yield "                        <div class=\"empty\">
                            <p>No POST parameters</p>
                        </div>
                    ";
            } else {
                // line 151
                yield "                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 151, $this->source); })()), "requestrequest", [], "any", false, false, false, 151), "maxDepth" => 1], false);
                yield "
                    ";
            }
            // line 153
            yield "
                    <h4>Uploaded Files</h4>

                    ";
            // line 156
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 156, $this->source); })()), "requestfiles", [], "any", false, false, false, 156))) {
                // line 157
                yield "                        <div class=\"empty\">
                            <p>No files were uploaded</p>
                        </div>
                    ";
            } else {
                // line 161
                yield "                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 161, $this->source); })()), "requestfiles", [], "any", false, false, false, 161), "maxDepth" => 1], false);
                yield "
                    ";
            }
            // line 163
            yield "                ";
        }
        // line 164
        yield "
                <h3>Request Attributes</h3>

                ";
        // line 167
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 167, $this->source); })()), "requestattributes", [], "any", false, false, false, 167), "all", [], "any", false, false, false, 167))) {
            // line 168
            yield "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 172
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 172, $this->source); })()), "requestattributes", [], "any", false, false, false, 172)], false);
            yield "
                ";
        }
        // line 174
        yield "
                <h3>Request Headers</h3>
                ";
        // line 176
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 176, $this->source); })()), "requestheaders", [], "any", false, false, false, 176), "labels" => ["Header", "Value"], "maxDepth" => 1], false);
        yield "

                <h3>Request Content</h3>

                ";
        // line 180
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 180, $this->source); })()), "content", [], "any", false, false, false, 180) == false)) {
            // line 181
            yield "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 184
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 184, $this->source); })()), "content", [], "any", false, false, false, 184)) {
            // line 185
            yield "                    <div class=\"sf-tabs\">
                        ";
            // line 186
            $context["prettyJson"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 186, $this->source); })()), "isJsonRequest", [], "any", false, false, false, 186)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 186, $this->source); })()), "prettyJson", [], "any", false, false, false, 186)) : (null));
            // line 187
            yield "                        ";
            if ( !(null === (isset($context["prettyJson"]) || array_key_exists("prettyJson", $context) ? $context["prettyJson"] : (function () { throw new RuntimeError('Variable "prettyJson" does not exist.', 187, $this->source); })()))) {
                // line 188
                yield "                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Pretty</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\" style=\"max-height: 500px; overflow-y: auto;\">
                                    <pre class=\"break-long-words\">";
                // line 192
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prettyJson"]) || array_key_exists("prettyJson", $context) ? $context["prettyJson"] : (function () { throw new RuntimeError('Variable "prettyJson" does not exist.', 192, $this->source); })()), "html", null, true);
                yield "</pre>
                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 197
            yield "
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Raw</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\">
                                    <pre class=\"break-long-words\">";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 202, $this->source); })()), "content", [], "any", false, false, false, 202), "html", null, true);
            yield "</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 208
            yield "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 212
        yield "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 221
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 221, $this->source); })()), "responseheaders", [], "any", false, false, false, 221), "labels" => ["Header", "Value"], "maxDepth" => 1], false);
        yield "
            </div>
        </div>

        <div class=\"tab ";
        // line 225
        yield (((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 225, $this->source); })()), "requestcookies", [], "any", false, false, false, 225), "all", [], "any", false, false, false, 225)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 225, $this->source); })()), "responsecookies", [], "any", false, false, false, 225), "all", [], "any", false, false, false, 225)))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                ";
        // line 231
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 231, $this->source); })()), "requestcookies", [], "any", false, false, false, 231), "all", [], "any", false, false, false, 231))) {
            // line 232
            yield "                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                ";
        } else {
            // line 236
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 236, $this->source); })()), "requestcookies", [], "any", false, false, false, 236)], false);
            yield "
                ";
        }
        // line 238
        yield "
                <h3>Response Cookies</h3>

                ";
        // line 241
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 241, $this->source); })()), "responsecookies", [], "any", false, false, false, 241), "all", [], "any", false, false, false, 241))) {
            // line 242
            yield "                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                ";
        } else {
            // line 246
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 246, $this->source); })()), "responsecookies", [], "any", false, false, false, 246)], true);
            yield "
                ";
        }
        // line 248
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 251
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 251, $this->source); })()), "sessionmetadata", [], "any", false, false, false, 251))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Session";
        // line 252
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 252, $this->source); })()), "sessionusages", [], "any", false, false, false, 252))) {
            yield " <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 252, $this->source); })()), "sessionusages", [], "any", false, false, false, 252)), "html", null, true);
            yield "</span>";
        }
        yield "</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 257
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 257, $this->source); })()), "sessionmetadata", [], "any", false, false, false, 257))) {
            // line 258
            yield "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 262
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 262, $this->source); })()), "sessionmetadata", [], "any", false, false, false, 262)], false);
            yield "
                ";
        }
        // line 264
        yield "
                <h3>Session Attributes</h3>

                ";
        // line 267
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 267, $this->source); })()), "sessionattributes", [], "any", false, false, false, 267))) {
            // line 268
            yield "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 272
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 272, $this->source); })()), "sessionattributes", [], "any", false, false, false, 272), "labels" => ["Attribute", "Value"]], false);
            yield "
                ";
        }
        // line 274
        yield "
                <h3>Session Usage</h3>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 279, $this->source); })()), "sessionusages", [], "any", false, false, false, 279)), "html", null, true);
        yield "</span>
                        <span class=\"label\">Usages</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 284
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 284, $this->source); })()), "statelesscheck", [], "any", false, false, false, 284)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                        <span class=\"label\">Stateless check enabled</span>
                    </div>
                </div>

                ";
        // line 289
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 289, $this->source); })()), "sessionusages", [], "any", false, false, false, 289))) {
            // line 290
            yield "                    <div class=\"empty\">
                        <p>Session not used.</p>
                    </div>
                ";
        } else {
            // line 294
            yield "                    <table class=\"session_usages\">
                        <thead>
                        <tr>
                            <th class=\"full-width\">Usage</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
            // line 302
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 302, $this->source); })()), "sessionusages", [], "any", false, false, false, 302));
            foreach ($context['_seq'] as $context["key"] => $context["usage"]) {
                // line 303
                yield "                            <tr>
                                <td class=\"font-normal\">";
                // line 305
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "file", [], "any", false, false, false, 305), CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "line", [], "any", false, false, false, 305));
                // line 306
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 306, $this->source); })())) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 306, $this->source); })()), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 306), "html", null, true);
                    yield "\">";
                } else {
                    yield "<span title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 306), "html", null, true);
                    yield "\">";
                }
                // line 307
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 307), "html", null, true);
                // line 308
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 308, $this->source); })())) {
                    yield "</a>";
                } else {
                    yield "</span>";
                }
                // line 309
                yield "                                    <div class=\"text-small font-normal\">
                                        ";
                // line 310
                $context["usage_id"] = ("session-usage-trace-" . $context["key"]);
                // line 311
                yield "                                        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usage_id"]) || array_key_exists("usage_id", $context) ? $context["usage_id"] : (function () { throw new RuntimeError('Variable "usage_id" does not exist.', 311, $this->source); })()), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
                                    </div>
                                    <div id=\"";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usage_id"]) || array_key_exists("usage_id", $context) ? $context["usage_id"] : (function () { throw new RuntimeError('Variable "usage_id" does not exist.', 313, $this->source); })()), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                        ";
                // line 314
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "trace", [], "any", false, false, false, 314), 2);
                yield "
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['usage'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            yield "                        </tbody>
                    </table>
                ";
        }
        // line 322
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 325
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 325, $this->source); })()), "flashes", [], "any", false, false, false, 325))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 331
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 331, $this->source); })()), "flashes", [], "any", false, false, false, 331))) {
            // line 332
            yield "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 336
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 336, $this->source); })()), "flashes", [], "any", false, false, false, 336)], false);
            yield "
                ";
        }
        // line 338
        yield "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                ";
        // line 346
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 346, $this->source); })()), "dotenvvars", [], "any", false, false, false, 346)], false);
        yield "

                <h4>Defined as regular env variables</h4>
                ";
        // line 349
        $context["requestserver"] = [];
        // line 350
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 350, $this->source); })()), "requestserver", [], "any", false, false, false, 350), function ($_____, $__key__) use ($context, $macros) { $context["_"] = $_____; $context["key"] = $__key__; return !CoreExtension::inFilter($context["key"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 350, $this->source); })()), "dotenvvars", [], "any", false, false, false, 350), "keys", [], "any", false, false, false, 350)); }));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 351
            yield "                    ";
            $context["requestserver"] = Twig\Extension\CoreExtension::merge((isset($context["requestserver"]) || array_key_exists("requestserver", $context) ? $context["requestserver"] : (function () { throw new RuntimeError('Variable "requestserver" does not exist.', 351, $this->source); })()), [$context["key"] => $context["value"]]);
            // line 352
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => (isset($context["requestserver"]) || array_key_exists("requestserver", $context) ? $context["requestserver"] : (function () { throw new RuntimeError('Variable "requestserver" does not exist.', 353, $this->source); })())], false);
        yield "
            </div>
        </div>

        ";
        // line 357
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 357, $this->source); })()), "parent", [], "any", false, false, false, 357)) {
            // line 358
            yield "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 363, $this->source); })()), "parent", [], "any", false, false, false, 363), "token", [], "any", false, false, false, 363)]), "html", null, true);
            yield "\">Return to parent request</a>
                    <small>(token = ";
            // line 364
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 364, $this->source); })()), "parent", [], "any", false, false, false, 364), "token", [], "any", false, false, false, 364), "html", null, true);
            yield ")</small>
                </h3>

                ";
            // line 367
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 367, $this->source); })()), "parent", [], "any", false, false, false, 367), "getcollector", ["request"], "method", false, false, false, 367), "requestattributes", [], "any", false, false, false, 367)], false);
            yield "
            </div>
        </div>
        ";
        }
        // line 371
        yield "
        ";
        // line 372
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 372, $this->source); })()), "children", [], "any", false, false, false, 372))) {
            // line 373
            yield "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 374
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 374, $this->source); })()), "children", [], "any", false, false, false, 374)), "html", null, true);
            yield "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 377
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 377, $this->source); })()), "children", [], "any", false, false, false, 377));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 378
                yield "                    <h3>
                        ";
                // line 379
                yield CoreExtension::callMacro($macros["_self"], "macro_set_handler", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getcollector", ["request"], "method", false, false, false, 379), "controller", [], "any", false, false, false, 379)], 379, $context, $this->getSourceContext());
                yield "
                        <small>(token = <a href=\"";
                // line 380
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 380)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 380), "html", null, true);
                yield "</a>)</small>
                    </h3>

                    ";
                // line 383
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getcollector", ["request"], "method", false, false, false, 383), "requestattributes", [], "any", false, false, false, 383)], false);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 385
            yield "            </div>
        </div>
        ";
        }
        // line 388
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 391
    public function macro_set_handler($__controller__ = null, $__route__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "controller" => $__controller__,
            "route" => $__route__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "set_handler"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 392
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, false, 392)) {
                // line 393
                if (((array_key_exists("method", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 393, $this->source); })()), false)) : (false))) {
                    yield "<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 393, $this->source); })()), "html", null, true);
                    yield "</span>";
                }
                // line 394
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 394, $this->source); })()), "file", [], "any", false, false, false, 394), CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 394, $this->source); })()), "line", [], "any", false, false, false, 394));
                // line 395
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 395, $this->source); })())) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 395, $this->source); })()), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 395, $this->source); })()), "class", [], "any", false, false, false, 395), "html", null, true);
                    yield "\">";
                } else {
                    yield "<span title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 395, $this->source); })()), "class", [], "any", false, false, false, 395), "html", null, true);
                    yield "\">";
                }
                // line 397
                if (((array_key_exists("route", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 397, $this->source); })()), false)) : (false))) {
                    // line 398
                    yield "@";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 398, $this->source); })()), "html", null, true);
                } else {
                    // line 400
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 400, $this->source); })()), "class", [], "any", false, false, false, 400))), "html", null, true);
                    // line 401
                    ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 401, $this->source); })()), "method", [], "any", false, false, false, 401)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((" :: " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 401, $this->source); })()), "method", [], "any", false, false, false, 401)), "html", null, true)) : (yield ""));
                }
                // line 404
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 404, $this->source); })())) {
                    yield "</a>";
                } else {
                    yield "</span>";
                }
            } else {
                // line 406
                yield "<span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("route", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 406, $this->source); })()), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 406, $this->source); })()))) : ((isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 406, $this->source); })()))), "html", null, true);
                yield "</span>";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/request.html.twig";
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
        return array (  975 => 406,  968 => 404,  965 => 401,  963 => 400,  959 => 398,  957 => 397,  945 => 395,  943 => 394,  937 => 393,  934 => 392,  914 => 391,  902 => 388,  897 => 385,  889 => 383,  881 => 380,  877 => 379,  874 => 378,  870 => 377,  864 => 374,  861 => 373,  859 => 372,  856 => 371,  849 => 367,  843 => 364,  839 => 363,  832 => 358,  830 => 357,  822 => 353,  816 => 352,  813 => 351,  808 => 350,  806 => 349,  800 => 346,  790 => 338,  784 => 336,  778 => 332,  776 => 331,  767 => 325,  762 => 322,  757 => 319,  746 => 314,  742 => 313,  736 => 311,  734 => 310,  731 => 309,  725 => 308,  722 => 307,  710 => 306,  708 => 305,  705 => 303,  701 => 302,  691 => 294,  685 => 290,  683 => 289,  675 => 284,  667 => 279,  660 => 274,  654 => 272,  648 => 268,  646 => 267,  641 => 264,  635 => 262,  629 => 258,  627 => 257,  615 => 252,  611 => 251,  606 => 248,  600 => 246,  594 => 242,  592 => 241,  587 => 238,  581 => 236,  575 => 232,  573 => 231,  564 => 225,  557 => 221,  546 => 212,  540 => 208,  531 => 202,  524 => 197,  516 => 192,  510 => 188,  507 => 187,  505 => 186,  502 => 185,  500 => 184,  495 => 181,  493 => 180,  486 => 176,  482 => 174,  476 => 172,  470 => 168,  468 => 167,  463 => 164,  460 => 163,  454 => 161,  448 => 157,  446 => 156,  441 => 153,  435 => 151,  429 => 147,  427 => 146,  422 => 143,  416 => 141,  410 => 137,  408 => 136,  404 => 134,  387 => 119,  384 => 118,  382 => 117,  371 => 109,  368 => 108,  365 => 107,  352 => 106,  337 => 101,  334 => 100,  321 => 99,  308 => 96,  305 => 95,  301 => 94,  291 => 89,  287 => 88,  281 => 84,  279 => 83,  276 => 82,  266 => 77,  262 => 76,  255 => 72,  250 => 69,  248 => 68,  237 => 64,  225 => 59,  217 => 54,  209 => 49,  204 => 46,  199 => 43,  195 => 41,  193 => 40,  185 => 37,  180 => 34,  178 => 33,  175 => 32,  171 => 31,  166 => 29,  161 => 28,  154 => 27,  147 => 26,  145 => 25,  138 => 24,  136 => 23,  133 => 22,  131 => 21,  128 => 20,  125 => 19,  118 => 17,  115 => 16,  112 => 15,  110 => 14,  107 => 13,  104 => 12,  97 => 10,  94 => 9,  92 => 8,  89 => 7,  82 => 5,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set request_handler %}
        {{ _self.set_handler(collector.controller) }}
    {% endset %}

    {% if collector.redirect %}
        {% set redirect_handler %}
            {{ _self.set_handler(collector.redirect.controller, collector.redirect.route, 'GET' != collector.redirect.method ? collector.redirect.method) }}
        {% endset %}
    {% endif %}

    {% if collector.forwardtoken %}
        {% set forward_profile = profile.childByToken(collector.forwardtoken) %}
        {% set forward_handler %}
            {{ _self.set_handler(forward_profile ? forward_profile.collector('request').controller : 'n/a') }}
        {% endset %}
    {% endif %}

    {% set request_status_code_color = (collector.statuscode >= 400) ? 'red' : (collector.statuscode >= 300) ? 'yellow' : 'green' %}

    {% set icon %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}\">{{ collector.statuscode }}</span>
        {% if collector.route %}
            {% if collector.redirect %}<span class=\"sf-toolbar-request-icon\">{{ source('@WebProfiler/Icon/redirect.svg') }}</span>{% endif %}
            {% if collector.forwardtoken %}<span class=\"sf-toolbar-request-icon\">{{ source('@WebProfiler/Icon/forward.svg') }}</span>{% endif %}
            <span class=\"sf-toolbar-label\">{{ 'GET' != collector.method ? collector.method }} @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">{{ collector.route }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>{{ collector.statuscode }} {{ collector.statustext }}</span>
            </div>

            {% if 'GET' != collector.method -%}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>{{ collector.method }}</span>
                </div>
            {%- endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>{{ request_handler }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>{{ collector.route|default('n/a') }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>{% if collector.sessionmetadata|length %}yes{% else %}no{% endif %}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Stateless Check</b>
                <span>{% if collector.statelesscheck %}yes{% else %}no{% endif %}</span>
            </div>
        </div>

        {% if redirect_handler is defined -%}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">{{ collector.redirect.status_code }}</span>
                        Redirect from
                    </b>
                    <span>
                        {{ redirect_handler }}
                        (<a href=\"{{ path('_profiler', { token: collector.redirect.token }) }}\">{{ collector.redirect.token }}</a>)
                    </span>
                </div>
            </div>
        {% endif %}

        {% if forward_handler is defined %}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        {{ forward_handler }}
                        (<a href=\"{{ path('_profiler', { token: collector.forwardtoken }) }}\">{{ collector.forwardtoken }}</a>)
                    </span>
                </div>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/request.svg') }}</span>
        <strong>Request / Response</strong>
    </span>
{% endblock %}

{% block panel %}
    {% set controller_name = _self.set_handler(collector.controller) %}
    <h2>
        {{ 'n/a' in controller_name ? 'Request / Response' : controller_name }}
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                {% set has_no_query_post_or_files = collector.requestquery.all is empty and collector.requestrequest.all is empty and collector.requestfiles is empty %}
                {% if has_no_query_post_or_files %}
                    <div class=\"empty-query-post-files\" style=\"display: flex; align-items: stretch\">
                        <div>
                            <h3>GET Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>POST Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>Uploaded Files</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                    </div>
                {% else %}
                    <h3>GET Parameters</h3>

                    {% if collector.requestquery.all is empty %}
                        <div class=\"empty\">
                            <p>No GET parameters</p>
                        </div>
                    {% else %}
                        {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestquery, maxDepth: 1 }, with_context = false) }}
                    {% endif %}

                    <h3>POST Parameters</h3>

                    {% if collector.requestrequest.all is empty %}
                        <div class=\"empty\">
                            <p>No POST parameters</p>
                        </div>
                    {% else %}
                        {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestrequest, maxDepth: 1 }, with_context = false) }}
                    {% endif %}

                    <h4>Uploaded Files</h4>

                    {% if collector.requestfiles is empty %}
                        <div class=\"empty\">
                            <p>No files were uploaded</p>
                        </div>
                    {% else %}
                        {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestfiles, maxDepth: 1 }, with_context = false) }}
                    {% endif %}
                {% endif %}

                <h3>Request Attributes</h3>

                {% if collector.requestattributes.all is empty %}
                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestattributes }, with_context = false) }}
                {% endif %}

                <h3>Request Headers</h3>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestheaders, labels: ['Header', 'Value'], maxDepth: 1 }, with_context = false) }}

                <h3>Request Content</h3>

                {% if collector.content == false %}
                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                {% elseif collector.content %}
                    <div class=\"sf-tabs\">
                        {% set prettyJson = collector.isJsonRequest ? collector.prettyJson : null %}
                        {% if prettyJson is not null %}
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Pretty</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\" style=\"max-height: 500px; overflow-y: auto;\">
                                    <pre class=\"break-long-words\">{{ prettyJson }}</pre>
                                </div>
                            </div>
                        </div>
                        {% endif %}

                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Raw</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\">
                                    <pre class=\"break-long-words\">{{ collector.content }}</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responseheaders, labels: ['Header', 'Value'], maxDepth: 1 }, with_context = false) }}
            </div>
        </div>

        <div class=\"tab {{ collector.requestcookies.all is empty and collector.responsecookies.all is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                {% if collector.requestcookies.all is empty %}
                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestcookies }, with_context = false) }}
                {% endif %}

                <h3>Response Cookies</h3>

                {% if collector.responsecookies.all is empty %}
                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responsecookies }, with_context = true) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.sessionmetadata is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Session{% if collector.sessionusages is not empty %} <span class=\"badge\">{{ collector.sessionusages|length }}</span>{% endif %}</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                {% if collector.sessionmetadata is empty %}
                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionmetadata }, with_context = false) }}
                {% endif %}

                <h3>Session Attributes</h3>

                {% if collector.sessionattributes is empty %}
                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionattributes, labels: ['Attribute', 'Value'] }, with_context = false) }}
                {% endif %}

                <h3>Session Usage</h3>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.sessionusages|length }}</span>
                        <span class=\"label\">Usages</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ source('@WebProfiler/Icon/' ~ (collector.statelesscheck ? 'yes' : 'no') ~ '.svg') }}</span>
                        <span class=\"label\">Stateless check enabled</span>
                    </div>
                </div>

                {% if collector.sessionusages is empty %}
                    <div class=\"empty\">
                        <p>Session not used.</p>
                    </div>
                {% else %}
                    <table class=\"session_usages\">
                        <thead>
                        <tr>
                            <th class=\"full-width\">Usage</th>
                        </tr>
                        </thead>

                        <tbody>
                        {% for key, usage in collector.sessionusages %}
                            <tr>
                                <td class=\"font-normal\">
                                    {%- set link = usage.file|file_link(usage.line) %}
                                    {%- if link %}<a href=\"{{ link }}\" title=\"{{ usage.name }}\">{% else %}<span title=\"{{ usage.name }}\">{% endif %}
                                        {{ usage.name }}
                                    {%- if link %}</a>{% else %}</span>{% endif %}
                                    <div class=\"text-small font-normal\">
                                        {% set usage_id = 'session-usage-trace-' ~ key %}
                                        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ usage_id }}\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
                                    </div>
                                    <div id=\"{{ usage_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                        {{ profiler_dump(usage.trace, maxDepth=2) }}
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.flashes is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                {% if collector.flashes is empty %}
                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.flashes }, with_context = false) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.dotenvvars }, with_context = false) }}

                <h4>Defined as regular env variables</h4>
                {% set requestserver = [] %}
                {% for key, value in collector.requestserver|filter((_, key) => key not in collector.dotenvvars.keys) %}
                    {% set requestserver = requestserver|merge({(key): value}) %}
                {% endfor %}
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: requestserver }, with_context = false) }}
            </div>
        </div>

        {% if profile.parent %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"{{ path('_profiler', { token: profile.parent.token }) }}\">Return to parent request</a>
                    <small>(token = {{ profile.parent.token }})</small>
                </h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: profile.parent.getcollector('request').requestattributes }, with_context = false) }}
            </div>
        </div>
        {% endif %}

        {% if profile.children|length %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">{{ profile.children|length }}</span></h3>

            <div class=\"tab-content\">
                {% for child in profile.children %}
                    <h3>
                        {{ _self.set_handler(child.getcollector('request').controller) }}
                        <small>(token = <a href=\"{{ path('_profiler', { token: child.token }) }}\">{{ child.token }}</a>)</small>
                    </h3>

                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: child.getcollector('request').requestattributes }, with_context = false) }}
                {% endfor %}
            </div>
        </div>
        {% endif %}
    </div>
{% endblock %}

{% macro set_handler(controller, route, method) %}
    {% if controller.class is defined -%}
        {%- if method|default(false) %}<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">{{ method }}</span>{% endif -%}
        {%- set link = controller.file|file_link(controller.line) %}
        {%- if link %}<a href=\"{{ link }}\" title=\"{{ controller.class }}\">{% else %}<span title=\"{{ controller.class }}\">{% endif %}

            {%- if route|default(false) -%}
                @{{ route }}
            {%- else -%}
                {{- controller.class|abbr_class|striptags -}}
                {{- controller.method ? ' :: ' ~ controller.method -}}
            {%- endif -%}

        {%- if link %}</a>{% else %}</span>{% endif %}
    {%- else -%}
        <span>{{ route|default(controller) }}</span>
    {%- endif %}
{% endmacro %}
", "@WebProfiler/Collector/request.html.twig", "/home/ramand/Bureau/greenVillage20112024/vendor/symfony/web-profiler-bundle/Resources/views/Collector/request.html.twig");
    }
}
