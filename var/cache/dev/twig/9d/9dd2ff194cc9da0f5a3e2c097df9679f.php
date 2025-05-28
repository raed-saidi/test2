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

/* profile/order.html.twig */
class __TwigTemplate_26248d097f6ceee1243ab16097587602 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/order.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "My Orders";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"glass-card\">
                    <div class=\"text-center mb-4\">
                        <div class=\"profile-avatar mb-3\">
                            <i class=\"fas fa-user-circle fa-5x text-primary\"></i>
                        </div>
                        <h5>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "firstName", [], "any", false, false, false, 15), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "lastName", [], "any", false, false, false, 15), "html", null, true);
        yield "</h5>
                        <p class=\"text-light-gray\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>
                    </div>

                    <div class=\"list-group list-group-flush\">
                        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"list-group-item list-group-item-action\">
                            <i class=\"fas fa-user me-2\"></i> Profile
                        </a>
                        <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\" class=\"list-group-item list-group-item-action\">
                            <i class=\"fas fa-edit me-2\"></i> Edit Profile
                        </a>
                        <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_orders");
        yield "\" class=\"list-group-item list-group-item-action active\">
                            <i class=\"fas fa-shopping-bag me-2\"></i> My Orders
                        </a>
                        <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_settings");
        yield "\" class=\"list-group-item list-group-item-action\">
                            <i class=\"fas fa-cog me-2\"></i> Settings
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"col-md-9\">
                <div class=\"glass-card\">
                    <h2 class=\"mb-4\">My Orders</h2>

                    ";
        // line 40
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 40, $this->source); })())) > 0)) {
            // line 41
            yield "                        <div class=\"table-responsive\">
                            <table class=\"table table-borderless\">
                                <thead>
                                <tr>
                                    <th>Order #</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 53, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 54
                yield "                                    <tr>
                                        <td>#";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 55), "html", null, true);
                yield "</td>
                                        <td>";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 56), "M j, Y"), "html", null, true);
                yield "</td>
                                        <td>
                                            <span class=\"badge bg-primary\">";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 58)), "html", null, true);
                yield "</span>
                                        </td>
                                        <td>";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 60), 3), "html", null, true);
                yield " TND</td>
                                        <td>
                                            <a href=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">View</a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 70
            yield "                        <div class=\"text-center py-5\">
                            <i class=\"fas fa-shopping-bag fa-5x text-light-gray mb-4\"></i>
                            <h4>No Orders Yet</h4>
                            <p class=\"text-light-gray mb-4\">You haven't placed any orders yet.</p>
                            <a href=\"";
            // line 74
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
            yield "\" class=\"btn btn-primary\">
                                <i class=\"fas fa-shopping-bag me-2\"></i> Start Shopping
                            </a>
                        </div>
                    ";
        }
        // line 79
        yield "                </div>
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
        return "profile/order.html.twig";
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
        return array (  212 => 79,  204 => 74,  198 => 70,  192 => 66,  182 => 62,  177 => 60,  172 => 58,  167 => 56,  163 => 55,  160 => 54,  156 => 53,  142 => 41,  140 => 40,  126 => 29,  120 => 26,  114 => 23,  108 => 20,  101 => 16,  95 => 15,  85 => 7,  75 => 6,  58 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/profile/orders.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}My Orders{% endblock %}

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
                        <a href=\"{{ path('app_profile_orders') }}\" class=\"list-group-item list-group-item-action active\">
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
                    <h2 class=\"mb-4\">My Orders</h2>

                    {% if orders|length > 0 %}
                        <div class=\"table-responsive\">
                            <table class=\"table table-borderless\">
                                <thead>
                                <tr>
                                    <th>Order #</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for order in orders %}
                                    <tr>
                                        <td>#{{ order.id }}</td>
                                        <td>{{ order.createdAt|date('M j, Y') }}</td>
                                        <td>
                                            <span class=\"badge bg-primary\">{{ order.status|title }}</span>
                                        </td>
                                        <td>{{ order.total|number_format(3) }} TND</td>
                                        <td>
                                            <a href=\"{{ path('app_order_show', {'id': order.id}) }}\" class=\"btn btn-sm btn-outline-primary\">View</a>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    {% else %}
                        <div class=\"text-center py-5\">
                            <i class=\"fas fa-shopping-bag fa-5x text-light-gray mb-4\"></i>
                            <h4>No Orders Yet</h4>
                            <p class=\"text-light-gray mb-4\">You haven't placed any orders yet.</p>
                            <a href=\"{{ path('product_index') }}\" class=\"btn btn-primary\">
                                <i class=\"fas fa-shopping-bag me-2\"></i> Start Shopping
                            </a>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "profile/order.html.twig", "C:\\Users\\Raed\\e-commerce\\e-commerce\\templates\\profile\\order.html.twig");
    }
}
