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

/* profile/settings.html.twig */
class __TwigTemplate_2ba95b008d1221b95b40cc0bbfcb2eec extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/settings.html.twig"));

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

        yield "Settings";
        
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
        yield "\" class=\"list-group-item list-group-item-action\">
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
        yield "\" class=\"list-group-item list-group-item-action active\">
                        <i class=\"fas fa-cog me-2\"></i> Settings
                    </a>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-9\">
            <div class=\"glass-card\">
                <h2 class=\"mb-4\">Account Settings</h2>
                
                <div class=\"settings-section mb-4\">
                    <h5>Notifications</h5>
                    <div class=\"form-check form-switch mb-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"emailNotifications\" checked>
                        <label class=\"form-check-label\" for=\"emailNotifications\">
                            Email notifications
                        </label>
                    </div>
                    <div class=\"form-check form-switch mb-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"orderUpdates\" checked>
                        <label class=\"form-check-label\" for=\"orderUpdates\">
                            Order updates
                        </label>
                    </div>
                    <div class=\"form-check form-switch mb-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"promotionalEmails\">
                        <label class=\"form-check-label\" for=\"promotionalEmails\">
                            Promotional emails
                        </label>
                    </div>
                </div>
                
                <div class=\"settings-section mb-4\">
                    <h5>Privacy</h5>
                    <div class=\"form-check form-switch mb-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"profileVisibility\">
                        <label class=\"form-check-label\" for=\"profileVisibility\">
                            Make profile public
                        </label>
                    </div>
                    <div class=\"form-check form-switch mb-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"dataSharing\">
                        <label class=\"form-check-label\" for=\"dataSharing\">
                            Allow data sharing for personalization
                        </label>
                    </div>
                </div>
                
                <div class=\"settings-section mb-4\">
                    <h5>Danger Zone</h5>
                    <p class=\"text-light-gray\">These actions cannot be undone.</p>
                    <button class=\"btn btn-outline-danger\" onclick=\"confirmAccountDeletion()\">
                        <i class=\"fas fa-trash me-2\"></i> Delete Account
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        yield "<script>
    function confirmAccountDeletion() {
        if (confirm('Are you sure you want to delete your account? This action cannot be undone.')) {
            alert('Account deletion functionality would be implemented here.');
        }
    }
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/settings.html.twig";
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
        return array (  206 => 91,  196 => 90,  127 => 28,  121 => 25,  115 => 22,  109 => 19,  102 => 15,  96 => 14,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Settings{% endblock %}

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
                    <a href=\"{{ path('app_profile') }}\" class=\"list-group-item list-group-item-action\">
                        <i class=\"fas fa-user me-2\"></i> Profile
                    </a>
                    <a href=\"{{ path('app_profile_edit') }}\" class=\"list-group-item list-group-item-action\">
                        <i class=\"fas fa-edit me-2\"></i> Edit Profile
                    </a>
                    <a href=\"{{ path('app_profile_orders') }}\" class=\"list-group-item list-group-item-action\">
                        <i class=\"fas fa-shopping-bag me-2\"></i> My Orders
                    </a>
                    <a href=\"{{ path('app_profile_settings') }}\" class=\"list-group-item list-group-item-action active\">
                        <i class=\"fas fa-cog me-2\"></i> Settings
                    </a>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-9\">
            <div class=\"glass-card\">
                <h2 class=\"mb-4\">Account Settings</h2>
                
                <div class=\"settings-section mb-4\">
                    <h5>Notifications</h5>
                    <div class=\"form-check form-switch mb-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"emailNotifications\" checked>
                        <label class=\"form-check-label\" for=\"emailNotifications\">
                            Email notifications
                        </label>
                    </div>
                    <div class=\"form-check form-switch mb-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"orderUpdates\" checked>
                        <label class=\"form-check-label\" for=\"orderUpdates\">
                            Order updates
                        </label>
                    </div>
                    <div class=\"form-check form-switch mb-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"promotionalEmails\">
                        <label class=\"form-check-label\" for=\"promotionalEmails\">
                            Promotional emails
                        </label>
                    </div>
                </div>
                
                <div class=\"settings-section mb-4\">
                    <h5>Privacy</h5>
                    <div class=\"form-check form-switch mb-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"profileVisibility\">
                        <label class=\"form-check-label\" for=\"profileVisibility\">
                            Make profile public
                        </label>
                    </div>
                    <div class=\"form-check form-switch mb-2\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"dataSharing\">
                        <label class=\"form-check-label\" for=\"dataSharing\">
                            Allow data sharing for personalization
                        </label>
                    </div>
                </div>
                
                <div class=\"settings-section mb-4\">
                    <h5>Danger Zone</h5>
                    <p class=\"text-light-gray\">These actions cannot be undone.</p>
                    <button class=\"btn btn-outline-danger\" onclick=\"confirmAccountDeletion()\">
                        <i class=\"fas fa-trash me-2\"></i> Delete Account
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
    function confirmAccountDeletion() {
        if (confirm('Are you sure you want to delete your account? This action cannot be undone.')) {
            alert('Account deletion functionality would be implemented here.');
        }
    }
</script>
{% endblock %}", "profile/settings.html.twig", "C:\\Users\\Raed\\e-commerce\\e-commerce\\templates\\profile\\settings.html.twig");
    }
}
