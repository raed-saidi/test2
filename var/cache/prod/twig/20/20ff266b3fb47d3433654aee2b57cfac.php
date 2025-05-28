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
        yield "    <div class=\"row\">
        <div class=\"col-md-3 mb-4\">
            <div class=\"profile-sidebar\">
                <div class=\"text-center mb-4\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-user-circle fa-5x text-primary\"></i>
                    </div>
                    <h5 class=\"mb-1\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "fullName", [], "any", false, false, false, 13), "html", null, true);
        yield "</h5>
                    <p class=\"text-muted mb-0\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "email", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>
                </div>

                <hr>

                <nav class=\"nav flex-column\">
                    <a class=\"nav-link\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_index");
        yield "\">
                        <i class=\"fas fa-user me-2\"></i> My Profile
                    </a>
                    <a class=\"nav-link active\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_orders");
        yield "\">
                        <i class=\"fas fa-shopping-bag me-2\"></i> My Orders
                    </a>
                    <a class=\"nav-link\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit");
        yield "\">
                        <i class=\"fas fa-edit me-2\"></i> Edit Profile
                    </a>
                    <a class=\"nav-link text-danger\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                        <i class=\"fas fa-sign-out-alt me-2\"></i> Logout
                    </a>
                </nav>
            </div>
        </div>

        <div class=\"col-md-9\">
            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Order #";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39), "html", null, true);
        yield " Details</h5>
                    <span class=\"badge badge-status-";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 40, $this->source); })()), "status", [], "any", false, false, false, 40), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 40, $this->source); })()), "status", [], "any", false, false, false, 40)), "html", null, true);
        yield "</span>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <h6>Order Information</h6>
                            <p class=\"mb-1\"><strong>Order Date:</strong> ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 46, $this->source); })()), "createdAt", [], "any", false, false, false, 46), "F d, Y H:i"), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Customer Information</h6>
                            <p class=\"mb-1\"><strong>Name:</strong> ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "fullName", [], "any", false, false, false, 50), "html", null, true);
        yield "</p>
                            <p class=\"mb-1\"><strong>Email:</strong> ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "email", [], "any", false, false, false, 51), "html", null, true);
        yield "</p>
                        </div>
                    </div>

                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <h6>Shipping Address</h6>
                            <address>";
        // line 58
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 58, $this->source); })()), "shippingAddress", [], "any", false, false, false, 58), "html", null, true));
        yield "</address>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Billing Address</h6>
                            <address>";
        // line 62
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 62, $this->source); })()), "billingAddress", [], "any", false, false, false, 62), "html", null, true));
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
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 78, $this->source); })()), "items", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 79
            yield "                                <tr>
                                    <td>
                                        <a href=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81)]), "html", null, true);
            yield "\">
                                            ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
            yield "
                                        </a>
                                    </td>
                                    <td>\$";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 85), 2), "html", null, true);
            yield "</td>
                                    <td>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 86), "html", null, true);
            yield "</td>
                                    <td>\$";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 87), 2), "html", null, true);
            yield "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan=\"3\" class=\"text-end\"><strong>Subtotal:</strong></td>
                                <td>\$";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 94, $this->source); })()), "total", [], "any", false, false, false, 94), 2), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <td colspan=\"3\" class=\"text-end\"><strong>Shipping:</strong></td>
                                <td>\$0.00</td>
                            </tr>
                            <tr>
                                <td colspan=\"3\" class=\"text-end\"><strong>Tax:</strong></td>
                                <td>\$";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 102, $this->source); })()), "total", [], "any", false, false, false, 102) * 0.1), 2), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <td colspan=\"3\" class=\"text-end\"><strong>Total:</strong></td>
                                <td><strong>\$";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 106, $this->source); })()), "total", [], "any", false, false, false, 106) + (CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 106, $this->source); })()), "total", [], "any", false, false, false, 106) * 0.1)), 2), "html", null, true);
        yield "</strong></td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class=\"d-flex justify-content-between mt-3\">
                        <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_orders");
        yield "\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-arrow-left me-2\"></i> Back to Orders
                        </a>
                        ";
        // line 116
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 116, $this->source); })()), "status", [], "any", false, false, false, 116) == "pending")) {
            // line 117
            yield "                            <button class=\"btn btn-danger\" disabled>
                                <i class=\"fas fa-times me-2\"></i> Cancel Order
                            </button>
                        ";
        }
        // line 121
        yield "                    </div>
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
        return array (  283 => 121,  277 => 117,  275 => 116,  269 => 113,  259 => 106,  252 => 102,  241 => 94,  235 => 90,  226 => 87,  222 => 86,  218 => 85,  212 => 82,  208 => 81,  204 => 79,  200 => 78,  181 => 62,  174 => 58,  164 => 51,  160 => 50,  153 => 46,  142 => 40,  138 => 39,  125 => 29,  119 => 26,  113 => 23,  107 => 20,  98 => 14,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Order Details{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-3 mb-4\">
            <div class=\"profile-sidebar\">
                <div class=\"text-center mb-4\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-user-circle fa-5x text-primary\"></i>
                    </div>
                    <h5 class=\"mb-1\">{{ app.user.fullName }}</h5>
                    <p class=\"text-muted mb-0\">{{ app.user.email }}</p>
                </div>

                <hr>

                <nav class=\"nav flex-column\">
                    <a class=\"nav-link\" href=\"{{ path('profile_index') }}\">
                        <i class=\"fas fa-user me-2\"></i> My Profile
                    </a>
                    <a class=\"nav-link active\" href=\"{{ path('profile_orders') }}\">
                        <i class=\"fas fa-shopping-bag me-2\"></i> My Orders
                    </a>
                    <a class=\"nav-link\" href=\"{{ path('profile_edit') }}\">
                        <i class=\"fas fa-edit me-2\"></i> Edit Profile
                    </a>
                    <a class=\"nav-link text-danger\" href=\"{{ path('app_logout') }}\">
                        <i class=\"fas fa-sign-out-alt me-2\"></i> Logout
                    </a>
                </nav>
            </div>
        </div>

        <div class=\"col-md-9\">
            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Order #{{ order.id }} Details</h5>
                    <span class=\"badge badge-status-{{ order.status }}\">{{ order.status|capitalize }}</span>
                </div>
                <div class=\"card-body\">
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <h6>Order Information</h6>
                            <p class=\"mb-1\"><strong>Order Date:</strong> {{ order.createdAt|date('F d, Y H:i') }}</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Customer Information</h6>
                            <p class=\"mb-1\"><strong>Name:</strong> {{ order.user.fullName }}</p>
                            <p class=\"mb-1\"><strong>Email:</strong> {{ order.user.email }}</p>
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
                                    <td>\${{ item.price|number_format(2) }}</td>
                                    <td>{{ item.quantity }}</td>
                                    <td>\${{ item.total|number_format(2) }}</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan=\"3\" class=\"text-end\"><strong>Subtotal:</strong></td>
                                <td>\${{ order.total|number_format(2) }}</td>
                            </tr>
                            <tr>
                                <td colspan=\"3\" class=\"text-end\"><strong>Shipping:</strong></td>
                                <td>\$0.00</td>
                            </tr>
                            <tr>
                                <td colspan=\"3\" class=\"text-end\"><strong>Tax:</strong></td>
                                <td>\${{ (order.total * 0.1)|number_format(2) }}</td>
                            </tr>
                            <tr>
                                <td colspan=\"3\" class=\"text-end\"><strong>Total:</strong></td>
                                <td><strong>\${{ (order.total + (order.total * 0.1))|number_format(2) }}</strong></td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class=\"d-flex justify-content-between mt-3\">
                        <a href=\"{{ path('profile_orders') }}\" class=\"btn btn-outline-primary\">
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
{% endblock %}", "profile/order_show.html.twig", "C:\\Users\\Raed\\e-commerce\\e-commerce\\templates\\profile\\order_show.html.twig");
    }
}
