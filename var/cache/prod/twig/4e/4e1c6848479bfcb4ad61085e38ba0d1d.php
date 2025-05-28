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

/* profile/index.html.twig */
class __TwigTemplate_1a8f5ccf09647535a01ac18d017cea7e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "My Profile";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"glass-card\">
                <div class=\"text-center mb-4\">
                    <div class=\"profile-avatar mb-3\">
                        <i class=\"fas fa-user-circle fa-5x text-primary\"></i>
                    </div>
                    <h5>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "firstName", [], "any", false, false, false, 14), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "lastName", [], "any", false, false, false, 14), "html", null, true);
        yield "</h5>
                    <p class=\"text-light-gray\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), "html", null, true);
        yield "</p>
                </div>
                
                <div class=\"list-group list-group-flush\">
                    <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"list-group-item list-group-item-action active\">
                        <i class=\"fas fa-user me-2\"></i> Profile
                    </a>
                    <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\" class=\"list-group-item list-group-item-action\">
                        <i class=\"fas fa-edit me-2\"></i> Edit Profile
                    </a>
                    <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_orders");
        yield "\" class=\"list-group-item list-group-item-action\">
                        <i class=\"fas fa-shopping-bag me-2\"></i> My Orders
                    </a>
                    <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_settings");
        yield "\" class=\"list-group-item list-group-item-action\">
                        <i class=\"fas fa-cog me-2\"></i> Settings
                    </a>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-9\">
            <div class=\"glass-card\">
                <h2 class=\"mb-4\">Profile Information</h2>
                
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-light-gray\">First Name</label>
                        <p class=\"fw-bold\">";
        // line 42
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", true, true, false, 42) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "firstName", [], "any", false, false, false, 42)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "firstName", [], "any", false, false, false, 42), "html", null, true)) : ("Not provided"));
        yield "</p>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-light-gray\">Last Name</label>
                        <p class=\"fw-bold\">";
        // line 46
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lastName", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "lastName", [], "any", false, false, false, 46)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "lastName", [], "any", false, false, false, 46), "html", null, true)) : ("Not provided"));
        yield "</p>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-light-gray\">Email</label>
                        <p class=\"fw-bold\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-light-gray\">Phone</label>
                        <p class=\"fw-bold\">";
        // line 54
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "phone", [], "any", false, false, false, 54)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "phone", [], "any", false, false, false, 54), "html", null, true)) : ("Not provided"));
        yield "</p>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-light-gray\">Member Since</label>
                        <p class=\"fw-bold\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "createdAt", [], "any", false, false, false, 58), "F j, Y"), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-light-gray\">Last Updated</label>
                        <p class=\"fw-bold\">";
        // line 62
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "updatedAt", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "updatedAt", [], "any", false, false, false, 62), "F j, Y"), "html", null, true)) : ("Never"));
        yield "</p>
                    </div>
                </div>
                
                <div class=\"mt-4\">
                    <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-edit me-2\"></i> Edit Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/index.html.twig";
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
        return array (  186 => 67,  178 => 62,  171 => 58,  164 => 54,  157 => 50,  150 => 46,  143 => 42,  126 => 28,  120 => 25,  114 => 22,  108 => 19,  101 => 15,  95 => 14,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Profile{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"glass-card\">
                <div class=\"text-center mb-4\">
                    <div class=\"profile-avatar mb-3\">
                        <i class=\"fas fa-user-circle fa-5x text-primary\"></i>
                    </div>
                    <h5>{{ user.firstName }} {{ user.lastName }}</h5>
                    <p class=\"text-light-gray\">{{ user.email }}</p>
                </div>
                
                <div class=\"list-group list-group-flush\">
                    <a href=\"{{ path('app_profile') }}\" class=\"list-group-item list-group-item-action active\">
                        <i class=\"fas fa-user me-2\"></i> Profile
                    </a>
                    <a href=\"{{ path('app_profile_edit') }}\" class=\"list-group-item list-group-item-action\">
                        <i class=\"fas fa-edit me-2\"></i> Edit Profile
                    </a>
                    <a href=\"{{ path('app_profile_orders') }}\" class=\"list-group-item list-group-item-action\">
                        <i class=\"fas fa-shopping-bag me-2\"></i> My Orders
                    </a>
                    <a href=\"{{ path('app_profile_settings') }}\" class=\"list-group-item list-group-item-action\">
                        <i class=\"fas fa-cog me-2\"></i> Settings
                    </a>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-9\">
            <div class=\"glass-card\">
                <h2 class=\"mb-4\">Profile Information</h2>
                
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-light-gray\">First Name</label>
                        <p class=\"fw-bold\">{{ user.firstName ?? 'Not provided' }}</p>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-light-gray\">Last Name</label>
                        <p class=\"fw-bold\">{{ user.lastName ?? 'Not provided' }}</p>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-light-gray\">Email</label>
                        <p class=\"fw-bold\">{{ user.email }}</p>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-light-gray\">Phone</label>
                        <p class=\"fw-bold\">{{ user.phone ?? 'Not provided' }}</p>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-light-gray\">Member Since</label>
                        <p class=\"fw-bold\">{{ user.createdAt|date('F j, Y') }}</p>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label text-light-gray\">Last Updated</label>
                        <p class=\"fw-bold\">{{ user.updatedAt ? user.updatedAt|date('F j, Y') : 'Never' }}</p>
                    </div>
                </div>
                
                <div class=\"mt-4\">
                    <a href=\"{{ path('app_profile_edit') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-edit me-2\"></i> Edit Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "profile/index.html.twig", "C:\\Users\\Raed\\e-commerce\\e-commerce\\templates\\profile\\index.html.twig");
    }
}
