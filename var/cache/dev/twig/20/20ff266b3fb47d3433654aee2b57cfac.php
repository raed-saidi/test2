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

/* profile/order_show.html.twig */
class __TwigTemplate_114594ed12fa3e6c072702837239167a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/order_show.html.twig"));

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

        yield "Order Details";
        
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
        yield "    <div class=\"container mt-5\">
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
        yield "\" class=\"list-group-item list-group-item-action active\">
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
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Order #";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "html", null, true);
        yield " Details</h5>
                        <span class=\"badge bg-primary\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 39, $this->source); })()), "status", [], "any", false, false, false, 39)), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row mb-4\">
                            <div class=\"col-md-6\">
                                <h6>Order Information</h6>
                                <p class=\"mb-1\"><strong>Order Date:</strong> ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 45, $this->source); })()), "createdAt", [], "any", false, false, false, 45), "F d, Y H:i"), "html", null, true);
        yield "</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h6>Customer Information</h6>
                                <p class=\"mb-1\"><strong>Name:</strong> ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "fullName", [], "any", false, false, false, 49), "html", null, true);
        yield "</p>
                                <p class=\"mb-1\"><strong>Email:</strong> ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), "html", null, true);
        yield "</p>
                            </div>
                        </div>

                        <div class=\"row mb-4\">
                            <div class=\"col-md-6\">
                                <h6>Shipping Address</h6>
                                <address>";
        // line 57
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 57, $this->source); })()), "shippingAddress", [], "any", false, false, false, 57), "html", null, true));
        yield "</address>
                            </div>
                            <div class=\"col-md-6\">
                                <h6>Billing Address</h6>
                                <address>";
        // line 61
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 61, $this->source); })()), "billingAddress", [], "any", false, false, false, 61), "html", null, true));
        yield "</address>
                            </div>
                        </div>

                        <h6>Order Items</h6>
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 77, $this->source); })()), "items", [], "any", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 78
            yield "                                    <tr>
                                        <td>
                                            <a href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\">
                                                ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 81), "name", [], "any", false, false, false, 81), "html", null, true);
            yield "
                                            </a>
                                        </td>
                                        <td>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 84), 2), "html", null, true);
            yield " TND</td>
                                        <td>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 85), "html", null, true);
            yield "</td>
                                        <td>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 86), 2), "html", null, true);
            yield " TND</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan=\"3\" class=\"text-end\"><strong>Subtotal:</strong></td>
                                    <td>";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 93, $this->source); })()), "total", [], "any", false, false, false, 93), 2), "html", null, true);
        yield " TND</td>
                                </tr>
                                <tr>
                                    <td colspan=\"3\" class=\"text-end\"><strong>Shipping:</strong></td>
                                    <td>0.00 TND</td>
                                </tr>
                                <tr>
                                    <td colspan=\"3\" class=\"text-end\"><strong>Tax:</strong></td>
                                    <td>";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 101, $this->source); })()), "total", [], "any", false, false, false, 101) * 0.1), 2), "html", null, true);
        yield " TND</td>
                                </tr>
                                <tr>
                                    <td colspan=\"3\" class=\"text-end\"><strong>Total:</strong></td>
                                    <td><strong>";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 105, $this->source); })()), "total", [], "any", false, false, false, 105) + (CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 105, $this->source); })()), "total", [], "any", false, false, false, 105) * 0.1)), 2), "html", null, true);
        yield " TND</strong></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class=\"d-flex justify-content-between mt-3\">
                            <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_orders");
        yield "\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-arrow-left me-2\"></i> Back to Orders
                            </a>
                            ";
        // line 115
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 115, $this->source); })()), "status", [], "any", false, false, false, 115) == "pending")) {
            // line 116
            yield "                                <button class=\"btn btn-danger\" disabled>
                                    <i class=\"fas fa-times me-2\"></i> Cancel Order
                                </button>
                            ";
        }
        // line 120
        yield "                        </div>
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
        return "profile/order_show.html.twig";
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
        return array (  282 => 120,  276 => 116,  274 => 115,  268 => 112,  258 => 105,  251 => 101,  240 => 93,  234 => 89,  225 => 86,  221 => 85,  217 => 84,  211 => 81,  207 => 80,  203 => 78,  199 => 77,  180 => 61,  173 => 57,  163 => 50,  159 => 49,  152 => 45,  143 => 39,  139 => 38,  126 => 28,  120 => 25,  114 => 22,  108 => 19,  101 => 15,  95 => 14,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Order Details{% endblock %}

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
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Order #{{ order.id }} Details</h5>
                        <span class=\"badge bg-primary\">{{ order.status|capitalize }}</span>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row mb-4\">
                            <div class=\"col-md-6\">
                                <h6>Order Information</h6>
                                <p class=\"mb-1\"><strong>Order Date:</strong> {{ order.createdAt|date('F d, Y H:i') }}</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h6>Customer Information</h6>
                                <p class=\"mb-1\"><strong>Name:</strong> {{ user.fullName }}</p>
                                <p class=\"mb-1\"><strong>Email:</strong> {{ user.email }}</p>
                            </div>
                        </div>

                        <div class=\"row mb-4\">
                            <div class=\"col-md-6\">
                                <h6>Shipping Address</h6>
                                <address>{{ order.shippingAddress|nl2br }}</address>
                            </div>
                            <div class=\"col-md-6\">
                                <h6>Billing Address</h6>
                                <address>{{ order.billingAddress|nl2br }}</address>
                            </div>
                        </div>

                        <h6>Order Items</h6>
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for item in order.items %}
                                    <tr>
                                        <td>
                                            <a href=\"{{ path('product_show', {'id': item.product.id}) }}\">
                                                {{ item.product.name }}
                                            </a>
                                        </td>
                                        <td>{{ item.price|number_format(2) }} TND</td>
                                        <td>{{ item.quantity }}</td>
                                        <td>{{ item.total|number_format(2) }} TND</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan=\"3\" class=\"text-end\"><strong>Subtotal:</strong></td>
                                    <td>{{ order.total|number_format(2) }} TND</td>
                                </tr>
                                <tr>
                                    <td colspan=\"3\" class=\"text-end\"><strong>Shipping:</strong></td>
                                    <td>0.00 TND</td>
                                </tr>
                                <tr>
                                    <td colspan=\"3\" class=\"text-end\"><strong>Tax:</strong></td>
                                    <td>{{ (order.total * 0.1)|number_format(2) }} TND</td>
                                </tr>
                                <tr>
                                    <td colspan=\"3\" class=\"text-end\"><strong>Total:</strong></td>
                                    <td><strong>{{ (order.total + (order.total * 0.1))|number_format(2) }} TND</strong></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class=\"d-flex justify-content-between mt-3\">
                            <a href=\"{{ path('app_profile_orders') }}\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-arrow-left me-2\"></i> Back to Orders
                            </a>
                            {% if order.status == 'pending' %}
                                <button class=\"btn btn-danger\" disabled>
                                    <i class=\"fas fa-times me-2\"></i> Cancel Order
                                </button>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "profile/order_show.html.twig", "C:\\Users\\Raed\\e-commerce\\e-commerce\\templates\\profile\\order_show.html.twig");
    }
}
