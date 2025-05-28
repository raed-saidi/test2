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

/* checkout/index.html.twig */
class __TwigTemplate_f86f6729cd23f985eca692b8b7b9e46c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

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

        yield "Checkout";
        
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
        yield "    <h1 class=\"mb-4\">Checkout</h1>

    <div class=\"checkout-steps mb-4\">
        <div class=\"step completed\">
            <span>1</span>
            <span class=\"step-label\">Cart</span>
        </div>
        <div class=\"step active\">
            <span>2</span>
            <span class=\"step-label\">Checkout</span>
        </div>
        <div class=\"step\">
            <span>3</span>
            <span class=\"step-label\">Confirmation</span>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Shipping & Billing Information</h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start');
        yield "
                    <div class=\"mb-3\">
                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "shippingAddress", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Shipping Address"]);
        yield "
                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "shippingAddress", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "rows" => 3, "placeholder" => "Enter your complete shipping address"]]);
        yield "
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "shippingAddress", [], "any", false, false, false, 34), 'errors');
        yield "
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "billingAddress", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Billing Address"]);
        yield "
                        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "billingAddress", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "rows" => 3, "placeholder" => "Enter your complete billing address"]]);
        yield "
                        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "billingAddress", [], "any", false, false, false, 40), 'errors');
        yield "

                        <div class=\"form-check mt-2\">
                            <input class=\"form-check-input\" type=\"checkbox\" id=\"sameAsShipping\">
                            <label class=\"form-check-label\" for=\"sameAsShipping\">
                                Same as shipping address
                            </label>
                        </div>
                    </div>

                    <h5 class=\"mb-3\">Payment Information</h5>

                    <div class=\"mb-3\">
                        <label for=\"cardName\" class=\"form-label\">Name on Card</label>
                        <input type=\"text\" class=\"form-control\" id=\"cardName\" placeholder=\"Enter the name on your card\" required>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"cardNumber\" class=\"form-label\">Card Number</label>
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" id=\"cardNumber\" placeholder=\"XXXX XXXX XXXX XXXX\" required>
                            <span class=\"input-group-text\">
                                    <i class=\"fab fa-cc-visa me-1\"></i>
                                    <i class=\"fab fa-cc-mastercard me-1\"></i>
                                    <i class=\"fab fa-cc-amex\"></i>
                                </span>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <label for=\"cardExpiry\" class=\"form-label\">Expiration Date</label>
                            <input type=\"text\" class=\"form-control\" id=\"cardExpiry\" placeholder=\"MM/YY\" required>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <label for=\"cardCvv\" class=\"form-label\">CVV</label>
                            <input type=\"text\" class=\"form-control\" id=\"cardCvv\" placeholder=\"XXX\" required>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-arrow-left me-2\"></i> Back to Cart
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-check me-2\"></i> Place Order
                        </button>
                    </div>
                    ";
        // line 88
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Order Summary</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"mb-3\">
                        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 99, $this->source); })()));
        foreach ($context['_seq'] as $context["id"] => $context["item"]) {
            // line 100
            yield "                            <div class=\"d-flex justify-content-between mb-2\">
                                <div>
                                    <span>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 102), "name", [], "any", false, false, false, 102), "html", null, true);
            yield "</span>
                                    <small class=\"text-muted d-block\">Qty: ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 103), "html", null, true);
            yield "</small>
                                </div>
                                <span>\$";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 105), "price", [], "any", false, false, false, 105) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 105)), 2), "html", null, true);
            yield "</span>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['id'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "                    </div>
                    <hr>
                    <div class=\"d-flex justify-content-between mb-2\">
                        <span>Subtotal:</span>
                        <span>\$";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 112, $this->source); })()), 2), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"d-flex justify-content-between mb-2\">
                        <span>Shipping:</span>
                        <span>\$0.00</span>
                    </div>
                    <div class=\"d-flex justify-content-between mb-2\">
                        <span>Tax (10%):</span>
                        <span>\$";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 120, $this->source); })()) * 0.1), 2), "html", null, true);
        yield "</span>
                    </div>
                    <hr>
                    <div class=\"d-flex justify-content-between mb-3\">
                        <strong>Total:</strong>
                        <strong>\$";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 125, $this->source); })()) + ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 125, $this->source); })()) * 0.1)), 2), "html", null, true);
        yield "</strong>
                    </div>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Have a Coupon?</h5>
                </div>
                <div class=\"card-body\">
                    <form class=\"d-flex\">
                        <input type=\"text\" class=\"form-control me-2\" placeholder=\"Coupon code\">
                        <button type=\"submit\" class=\"btn btn-outline-primary\">Apply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 145
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 146
        yield "    <script>
        document.getElementById('sameAsShipping').addEventListener('change', function() {
            if (this.checked) {
                document.getElementById('";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "billingAddress", [], "any", false, false, false, 149), "vars", [], "any", false, false, false, 149), "id", [], "any", false, false, false, 149), "html", null, true);
        yield "').value = document.getElementById('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "shippingAddress", [], "any", false, false, false, 149), "vars", [], "any", false, false, false, 149), "id", [], "any", false, false, false, 149), "html", null, true);
        yield "').value;
            }
        });
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
        return "checkout/index.html.twig";
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
        return array (  301 => 149,  296 => 146,  286 => 145,  259 => 125,  251 => 120,  240 => 112,  234 => 108,  225 => 105,  220 => 103,  216 => 102,  212 => 100,  208 => 99,  194 => 88,  184 => 81,  140 => 40,  136 => 39,  132 => 38,  125 => 34,  121 => 33,  117 => 32,  112 => 30,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Checkout{% endblock %}

{% block body %}
    <h1 class=\"mb-4\">Checkout</h1>

    <div class=\"checkout-steps mb-4\">
        <div class=\"step completed\">
            <span>1</span>
            <span class=\"step-label\">Cart</span>
        </div>
        <div class=\"step active\">
            <span>2</span>
            <span class=\"step-label\">Checkout</span>
        </div>
        <div class=\"step\">
            <span>3</span>
            <span class=\"step-label\">Confirmation</span>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Shipping & Billing Information</h5>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form) }}
                    <div class=\"mb-3\">
                        {{ form_label(form.shippingAddress, 'Shipping Address', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.shippingAddress, {'attr': {'class': 'form-control', 'rows': 3, 'placeholder': 'Enter your complete shipping address'}}) }}
                        {{ form_errors(form.shippingAddress) }}
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.billingAddress, 'Billing Address', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.billingAddress, {'attr': {'class': 'form-control', 'rows': 3, 'placeholder': 'Enter your complete billing address'}}) }}
                        {{ form_errors(form.billingAddress) }}

                        <div class=\"form-check mt-2\">
                            <input class=\"form-check-input\" type=\"checkbox\" id=\"sameAsShipping\">
                            <label class=\"form-check-label\" for=\"sameAsShipping\">
                                Same as shipping address
                            </label>
                        </div>
                    </div>

                    <h5 class=\"mb-3\">Payment Information</h5>

                    <div class=\"mb-3\">
                        <label for=\"cardName\" class=\"form-label\">Name on Card</label>
                        <input type=\"text\" class=\"form-control\" id=\"cardName\" placeholder=\"Enter the name on your card\" required>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"cardNumber\" class=\"form-label\">Card Number</label>
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" id=\"cardNumber\" placeholder=\"XXXX XXXX XXXX XXXX\" required>
                            <span class=\"input-group-text\">
                                    <i class=\"fab fa-cc-visa me-1\"></i>
                                    <i class=\"fab fa-cc-mastercard me-1\"></i>
                                    <i class=\"fab fa-cc-amex\"></i>
                                </span>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <label for=\"cardExpiry\" class=\"form-label\">Expiration Date</label>
                            <input type=\"text\" class=\"form-control\" id=\"cardExpiry\" placeholder=\"MM/YY\" required>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <label for=\"cardCvv\" class=\"form-label\">CVV</label>
                            <input type=\"text\" class=\"form-control\" id=\"cardCvv\" placeholder=\"XXX\" required>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between\">
                        <a href=\"{{ path('cart_index') }}\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-arrow-left me-2\"></i> Back to Cart
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-check me-2\"></i> Place Order
                        </button>
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Order Summary</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"mb-3\">
                        {% for id, item in cart %}
                            <div class=\"d-flex justify-content-between mb-2\">
                                <div>
                                    <span>{{ item.product.name }}</span>
                                    <small class=\"text-muted d-block\">Qty: {{ item.quantity }}</small>
                                </div>
                                <span>\${{ (item.product.price * item.quantity)|number_format(2) }}</span>
                            </div>
                        {% endfor %}
                    </div>
                    <hr>
                    <div class=\"d-flex justify-content-between mb-2\">
                        <span>Subtotal:</span>
                        <span>\${{ total|number_format(2) }}</span>
                    </div>
                    <div class=\"d-flex justify-content-between mb-2\">
                        <span>Shipping:</span>
                        <span>\$0.00</span>
                    </div>
                    <div class=\"d-flex justify-content-between mb-2\">
                        <span>Tax (10%):</span>
                        <span>\${{ (total * 0.1)|number_format(2) }}</span>
                    </div>
                    <hr>
                    <div class=\"d-flex justify-content-between mb-3\">
                        <strong>Total:</strong>
                        <strong>\${{ (total + (total * 0.1))|number_format(2) }}</strong>
                    </div>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">Have a Coupon?</h5>
                </div>
                <div class=\"card-body\">
                    <form class=\"d-flex\">
                        <input type=\"text\" class=\"form-control me-2\" placeholder=\"Coupon code\">
                        <button type=\"submit\" class=\"btn btn-outline-primary\">Apply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        document.getElementById('sameAsShipping').addEventListener('change', function() {
            if (this.checked) {
                document.getElementById('{{ form.billingAddress.vars.id }}').value = document.getElementById('{{ form.shippingAddress.vars.id }}').value;
            }
        });
    </script>
{% endblock %}", "checkout/index.html.twig", "C:\\Users\\Raed\\e-commerce\\e-commerce\\templates\\checkout\\index.html.twig");
    }
}
