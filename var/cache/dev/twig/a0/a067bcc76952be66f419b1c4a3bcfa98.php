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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"mb-4\"><i class=\"fas fa-credit-card me-2\"></i>Checkout</h1>

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

        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["error"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            yield "            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"card mb-4\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\">Shipping & Billing Information</h5>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["id" => "checkout-form"]]);
        yield "
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <h6>Shipping Address</h6>
                                <div class=\"mb-3\">
                                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "shippingAddress", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Shipping Address"]);
        yield "
                                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "shippingAddress", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Enter your complete shipping address"]]);
        yield "
                                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "shippingAddress", [], "any", false, false, false, 42), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <h6>Billing Address</h6>
                                <div class=\"form-check mb-3\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"sameAsShipping\" checked>
                                    <label class=\"form-check-label\" for=\"sameAsShipping\">Same as shipping address</label>
                                </div>
                                <div id=\"billingFields\">
                                    <div class=\"mb-3\">
                                        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "billingAddress", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Billing Address"]);
        yield "
                                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "billingAddress", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Enter your complete billing address"]]);
        yield "
                                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "billingAddress", [], "any", false, false, false, 55), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6 class=\"mt-4\">Payment Method</h6>
                        <div class=\"mb-3\">
                            <div class=\"form-check\">
                                <input type=\"radio\" class=\"form-check-input\" id=\"paymentCredit\" name=\"payment_method\" value=\"credit\" required checked>
                                <label class=\"form-check-label\" for=\"paymentCredit\">Credit Card</label>
                            </div>
                            <div class=\"form-check\">
                                <input type=\"radio\" class=\"form-check-input\" id=\"paymentPaypal\" name=\"payment_method\" value=\"paypal\">
                                <label class=\"form-check-label\" for=\"paymentPaypal\">PayPal</label>
                            </div>
                        </div>
                        <div id=\"creditCardFields\">
                            <div class=\"mb-3\">
                                <label for=\"cardName\" class=\"form-label\">Name on Card</label>
                                <input type=\"text\" class=\"form-control\" id=\"cardName\" name=\"card_name\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"cardNumber\" class=\"form-label\">Card Number</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"cardNumber\" name=\"card_number\" placeholder=\"XXXX XXXX XXXX XXXX\" required>
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
                                    <input type=\"text\" class=\"form-control\" id=\"cardExpiry\" name=\"card_expiry\" placeholder=\"MM/YY\" required>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"cardCvv\" class=\"form-label\">CVV</label>
                                    <input type=\"text\" class=\"form-control\" id=\"cardCvv\" name=\"card_cvv\" placeholder=\"XXX\" required>
                                </div>
                            </div>
                        </div>

                        <div class=\"d-flex justify-content-between mt-4\">
                            <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-arrow-left me-2\"></i> Back to Cart
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-check me-2\"></i> Place Order
                            </button>
                        </div>
                        ";
        // line 108
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_end');
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
                        ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 118, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 119
            yield "                            <div class=\"d-flex justify-content-between mb-2\">
                                <div>
                                    <span>";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121), "html", null, true);
            yield "</span>
                                    <small class=\"text-muted d-block\">Qty: ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 122), "html", null, true);
            yield "</small>
                                </div>
                                <span>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 124), "price", [], "any", false, false, false, 124) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 124)), 3), "html", null, true);
            yield " TND</span>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "                        <hr>
                        <div class=\"d-flex justify-content-between mb-2\">
                            <span>Subtotal:</span>
                            <span>";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 130, $this->source); })()), "subtotal", [], "any", false, false, false, 130), 3), "html", null, true);
        yield " TND</span>
                        </div>
                        ";
        // line 132
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 132, $this->source); })()), "coupon", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 133
            yield "                            <div class=\"d-flex justify-content-between mb-2 text-success\">
                                <span>Discount (";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 134, $this->source); })()), "coupon", [], "any", false, false, false, 134), "code", [], "any", false, false, false, 134), "html", null, true);
            yield "):</span>
                                <span>-";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 135, $this->source); })()), "discount", [], "any", false, false, false, 135), 3), "html", null, true);
            yield " TND</span>
                            </div>
                        ";
        }
        // line 138
        yield "                        <div class=\"d-flex justify-content-between mb-2\">
                            <span>Shipping:</span>
                            <span>
                                ";
        // line 141
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 141, $this->source); })()), "shipping", [], "any", false, false, false, 141) == 0)) {
            // line 142
            yield "                                    <span class=\"text-success\">Free</span>
                                ";
        } else {
            // line 144
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 144, $this->source); })()), "shipping", [], "any", false, false, false, 144), 3), "html", null, true);
            yield " TND
                                ";
        }
        // line 146
        yield "                            </span>
                        </div>
                        <div class=\"d-flex justify-content-between mb-2\">
                            <span>Tax (10%):</span>
                            <span>";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 150, $this->source); })()), "subtotal", [], "any", false, false, false, 150) * 0.1), 3), "html", null, true);
        yield " TND</span>
                        </div>
                        <hr>
                        <div class=\"d-flex justify-content-between mb-3\">
                            <strong>Total:</strong>
                            <strong class=\"text-primary\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 155, $this->source); })()), "total", [], "any", false, false, false, 155) + (CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 155, $this->source); })()), "subtotal", [], "any", false, false, false, 155) * 0.1)), 3), "html", null, true);
        yield " TND</strong>
                        </div>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\">Have a Coupon?</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" id=\"couponCode\" placeholder=\"Coupon code\">
                            <button class=\"btn btn-outline-primary\" type=\"button\" onclick=\"applyCoupon()\">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 176
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 177
        yield "    <script>
        function applyCoupon() {
            const couponCode = document.getElementById('couponCode').value;
            if (!couponCode.trim()) {
                alert('Please enter a coupon code');
                return;
            }
            fetch('";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coupon_apply");
        yield "', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'code=' + encodeURIComponent(couponCode)
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while applying the coupon');
                });
        }

        document.getElementById('sameAsShipping').addEventListener('change', function() {
            const billingFields = document.getElementById('billingFields');
            const billingAddress = document.getElementById('";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "billingAddress", [], "any", false, false, false, 207), "vars", [], "any", false, false, false, 207), "id", [], "any", false, false, false, 207), "html", null, true);
        yield "');
            const shippingAddress = document.getElementById('";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "shippingAddress", [], "any", false, false, false, 208), "vars", [], "any", false, false, false, 208), "id", [], "any", false, false, false, 208), "html", null, true);
        yield "');
            if (this.checked) {
                billingAddress.value = shippingAddress.value;
                billingFields.style.display = 'none';
            } else {
                billingFields.style.display = 'block';
            }
        });

        document.getElementById('paymentCredit').addEventListener('change', function() {
            document.getElementById('creditCardFields').style.display = 'block';
        });

        document.getElementById('paymentPaypal').addEventListener('change', function() {
            document.getElementById('creditCardFields').style.display = 'none';
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
        return array (  398 => 208,  394 => 207,  368 => 184,  359 => 177,  349 => 176,  321 => 155,  313 => 150,  307 => 146,  301 => 144,  297 => 142,  295 => 141,  290 => 138,  284 => 135,  280 => 134,  277 => 133,  275 => 132,  270 => 130,  265 => 127,  256 => 124,  251 => 122,  247 => 121,  243 => 119,  239 => 118,  226 => 108,  216 => 101,  167 => 55,  163 => 54,  159 => 53,  145 => 42,  141 => 41,  137 => 40,  129 => 35,  119 => 27,  110 => 25,  106 => 24,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Checkout{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\"><i class=\"fas fa-credit-card me-2\"></i>Checkout</h1>

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

        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endfor %}

        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"card mb-4\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\">Shipping & Billing Information</h5>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form, {'attr': {'id': 'checkout-form'}}) }}
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <h6>Shipping Address</h6>
                                <div class=\"mb-3\">
                                    {{ form_label(form.shippingAddress, 'Shipping Address', {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(form.shippingAddress, {'attr': {'class': 'form-control', 'rows': 4, 'placeholder': 'Enter your complete shipping address'}}) }}
                                    {{ form_errors(form.shippingAddress) }}
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <h6>Billing Address</h6>
                                <div class=\"form-check mb-3\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"sameAsShipping\" checked>
                                    <label class=\"form-check-label\" for=\"sameAsShipping\">Same as shipping address</label>
                                </div>
                                <div id=\"billingFields\">
                                    <div class=\"mb-3\">
                                        {{ form_label(form.billingAddress, 'Billing Address', {'label_attr': {'class': 'form-label'}}) }}
                                        {{ form_widget(form.billingAddress, {'attr': {'class': 'form-control', 'rows': 4, 'placeholder': 'Enter your complete billing address'}}) }}
                                        {{ form_errors(form.billingAddress) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6 class=\"mt-4\">Payment Method</h6>
                        <div class=\"mb-3\">
                            <div class=\"form-check\">
                                <input type=\"radio\" class=\"form-check-input\" id=\"paymentCredit\" name=\"payment_method\" value=\"credit\" required checked>
                                <label class=\"form-check-label\" for=\"paymentCredit\">Credit Card</label>
                            </div>
                            <div class=\"form-check\">
                                <input type=\"radio\" class=\"form-check-input\" id=\"paymentPaypal\" name=\"payment_method\" value=\"paypal\">
                                <label class=\"form-check-label\" for=\"paymentPaypal\">PayPal</label>
                            </div>
                        </div>
                        <div id=\"creditCardFields\">
                            <div class=\"mb-3\">
                                <label for=\"cardName\" class=\"form-label\">Name on Card</label>
                                <input type=\"text\" class=\"form-control\" id=\"cardName\" name=\"card_name\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"cardNumber\" class=\"form-label\">Card Number</label>
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"cardNumber\" name=\"card_number\" placeholder=\"XXXX XXXX XXXX XXXX\" required>
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
                                    <input type=\"text\" class=\"form-control\" id=\"cardExpiry\" name=\"card_expiry\" placeholder=\"MM/YY\" required>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"cardCvv\" class=\"form-label\">CVV</label>
                                    <input type=\"text\" class=\"form-control\" id=\"cardCvv\" name=\"card_cvv\" placeholder=\"XXX\" required>
                                </div>
                            </div>
                        </div>

                        <div class=\"d-flex justify-content-between mt-4\">
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
                        {% for item in cart %}
                            <div class=\"d-flex justify-content-between mb-2\">
                                <div>
                                    <span>{{ item.product.name }}</span>
                                    <small class=\"text-muted d-block\">Qty: {{ item.quantity }}</small>
                                </div>
                                <span>{{ (item.product.price * item.quantity)|number_format(3) }} TND</span>
                            </div>
                        {% endfor %}
                        <hr>
                        <div class=\"d-flex justify-content-between mb-2\">
                            <span>Subtotal:</span>
                            <span>{{ cartSummary.subtotal|number_format(3) }} TND</span>
                        </div>
                        {% if cartSummary.coupon %}
                            <div class=\"d-flex justify-content-between mb-2 text-success\">
                                <span>Discount ({{ cartSummary.coupon.code }}):</span>
                                <span>-{{ cartSummary.discount|number_format(3) }} TND</span>
                            </div>
                        {% endif %}
                        <div class=\"d-flex justify-content-between mb-2\">
                            <span>Shipping:</span>
                            <span>
                                {% if cartSummary.shipping == 0 %}
                                    <span class=\"text-success\">Free</span>
                                {% else %}
                                    {{ cartSummary.shipping|number_format(3) }} TND
                                {% endif %}
                            </span>
                        </div>
                        <div class=\"d-flex justify-content-between mb-2\">
                            <span>Tax (10%):</span>
                            <span>{{ (cartSummary.subtotal * 0.1)|number_format(3) }} TND</span>
                        </div>
                        <hr>
                        <div class=\"d-flex justify-content-between mb-3\">
                            <strong>Total:</strong>
                            <strong class=\"text-primary\">{{ (cartSummary.total + (cartSummary.subtotal * 0.1))|number_format(3) }} TND</strong>
                        </div>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\">Have a Coupon?</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" id=\"couponCode\" placeholder=\"Coupon code\">
                            <button class=\"btn btn-outline-primary\" type=\"button\" onclick=\"applyCoupon()\">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        function applyCoupon() {
            const couponCode = document.getElementById('couponCode').value;
            if (!couponCode.trim()) {
                alert('Please enter a coupon code');
                return;
            }
            fetch('{{ path('coupon_apply') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'code=' + encodeURIComponent(couponCode)
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while applying the coupon');
                });
        }

        document.getElementById('sameAsShipping').addEventListener('change', function() {
            const billingFields = document.getElementById('billingFields');
            const billingAddress = document.getElementById('{{ form.billingAddress.vars.id }}');
            const shippingAddress = document.getElementById('{{ form.shippingAddress.vars.id }}');
            if (this.checked) {
                billingAddress.value = shippingAddress.value;
                billingFields.style.display = 'none';
            } else {
                billingFields.style.display = 'block';
            }
        });

        document.getElementById('paymentCredit').addEventListener('change', function() {
            document.getElementById('creditCardFields').style.display = 'block';
        });

        document.getElementById('paymentPaypal').addEventListener('change', function() {
            document.getElementById('creditCardFields').style.display = 'none';
        });
    </script>
{% endblock %}", "checkout/index.html.twig", "C:\\Users\\Raed\\e-commerce\\e-commerce\\templates\\checkout\\index.html.twig");
    }
}
