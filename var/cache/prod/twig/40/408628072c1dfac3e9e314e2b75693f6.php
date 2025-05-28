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

/* checkout/success.html.twig */
class __TwigTemplate_6170c7e9ff767b48c31a0419da63ce72 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/success.html.twig"));

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

        yield "Order Confirmation";
        
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
        yield "    <div class=\"checkout-steps mb-4\">
        <div class=\"step completed\">
            <span>1</span>
            <span class=\"step-label\">Cart</span>
        </div>
        <div class=\"step completed\">
            <span>2</span>
            <span class=\"step-label\">Checkout</span>
        </div>
        <div class=\"step completed\">
            <span>3</span>
            <span class=\"step-label\">Confirmation</span>
        </div>
    </div>

    <div class=\"text-center mb-5\">
        <i class=\"fas fa-check-circle text-success\" style=\"font-size: 5rem;\"></i>
        <h1 class=\"mt-3\">Thank You for Your Order!</h1>
        <p class=\"lead\">Your order has been placed successfully.</p>
    </div>

    <div class=\"card mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">Order #";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "html", null, true);
        yield " Details</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                    <h6>Order Information</h6>
                    <p class=\"mb-1\"><strong>Order Date:</strong> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 35, $this->source); })()), "createdAt", [], "any", false, false, false, 35), "F d, Y H:i"), "html", null, true);
        yield "</p>
                    <p class=\"mb-1\"><strong>Order Status:</strong> <span class=\"badge bg-warning\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 36, $this->source); })()), "status", [], "any", false, false, false, 36)), "html", null, true);
        yield "</span></p>
                </div>
                <div class=\"col-md-6\">
                    <h6>Customer Information</h6>
                    <p class=\"mb-1\"><strong>Name:</strong> ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "fullName", [], "any", false, false, false, 40), "html", null, true);
        yield "</p>
                    <p class=\"mb-1\"><strong>Email:</strong> ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "email", [], "any", false, false, false, 41), "html", null, true);
        yield "</p>
                </div>
            </div>

            <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                    <h6>Shipping Address</h6>
                    <address>";
        // line 48
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 48, $this->source); })()), "shippingAddress", [], "any", false, false, false, 48), "html", null, true));
        yield "</address>
                </div>
                <div class=\"col-md-6\">
                    <h6>Billing Address</h6>
                    <address>";
        // line 52
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 52, $this->source); })()), "billingAddress", [], "any", false, false, false, 52), "html", null, true));
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
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 68, $this->source); })()), "items", [], "any", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 69
            yield "                        <tr>
                            <td>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
            yield "</td>
                            <td>\$";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 71), 2), "html", null, true);
            yield "</td>
                            <td>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 72), "html", null, true);
            yield "</td>
                            <td>\$";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 73), 2), "html", null, true);
            yield "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan=\"3\" class=\"text-end\"><strong>Subtotal:</strong></td>
                        <td>\$";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 80, $this->source); })()), "total", [], "any", false, false, false, 80), 2), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" class=\"text-end\"><strong>Shipping:</strong></td>
                        <td>\$0.00</td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" class=\"text-end\"><strong>Tax:</strong></td>
                        <td>\$";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 88, $this->source); })()), "total", [], "any", false, false, false, 88) * 0.1), 2), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" class=\"text-end\"><strong>Total:</strong></td>
                        <td><strong>\$";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 92, $this->source); })()), "total", [], "any", false, false, false, 92) + (CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 92, $this->source); })()), "total", [], "any", false, false, false, 92) * 0.1)), 2), "html", null, true);
        yield "</strong></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <div class=\"text-center\">
        <p>A confirmation email has been sent to your email address.</p>
        <div class=\"d-flex justify-content-center gap-3\">
            <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_orders");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-list me-2\"></i> View My Orders
            </a>
            <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"btn btn-outline-primary\">
                <i class=\"fas fa-shopping-bag me-2\"></i> Continue Shopping
            </a>
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
        return "checkout/success.html.twig";
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
        return array (  242 => 106,  236 => 103,  222 => 92,  215 => 88,  204 => 80,  198 => 76,  189 => 73,  185 => 72,  181 => 71,  177 => 70,  174 => 69,  170 => 68,  151 => 52,  144 => 48,  134 => 41,  130 => 40,  123 => 36,  119 => 35,  110 => 29,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Order Confirmation{% endblock %}

{% block body %}
    <div class=\"checkout-steps mb-4\">
        <div class=\"step completed\">
            <span>1</span>
            <span class=\"step-label\">Cart</span>
        </div>
        <div class=\"step completed\">
            <span>2</span>
            <span class=\"step-label\">Checkout</span>
        </div>
        <div class=\"step completed\">
            <span>3</span>
            <span class=\"step-label\">Confirmation</span>
        </div>
    </div>

    <div class=\"text-center mb-5\">
        <i class=\"fas fa-check-circle text-success\" style=\"font-size: 5rem;\"></i>
        <h1 class=\"mt-3\">Thank You for Your Order!</h1>
        <p class=\"lead\">Your order has been placed successfully.</p>
    </div>

    <div class=\"card mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">Order #{{ order.id }} Details</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                    <h6>Order Information</h6>
                    <p class=\"mb-1\"><strong>Order Date:</strong> {{ order.createdAt|date('F d, Y H:i') }}</p>
                    <p class=\"mb-1\"><strong>Order Status:</strong> <span class=\"badge bg-warning\">{{ order.status|capitalize }}</span></p>
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
                            <td>{{ item.product.name }}</td>
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
        </div>
    </div>

    <div class=\"text-center\">
        <p>A confirmation email has been sent to your email address.</p>
        <div class=\"d-flex justify-content-center gap-3\">
            <a href=\"{{ path('profile_orders') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-list me-2\"></i> View My Orders
            </a>
            <a href=\"{{ path('product_index') }}\" class=\"btn btn-outline-primary\">
                <i class=\"fas fa-shopping-bag me-2\"></i> Continue Shopping
            </a>
        </div>
    </div>
{% endblock %}", "checkout/success.html.twig", "C:\\Users\\Raed\\e-commerce\\e-commerce\\templates\\checkout\\success.html.twig");
    }
}
