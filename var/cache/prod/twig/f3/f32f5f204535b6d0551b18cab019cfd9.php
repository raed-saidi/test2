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

/* cart/index.html.twig */
class __TwigTemplate_79d866ade6a199b65d09518ee495257f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

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

        yield "Shopping Cart";
        
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
        <h1><i class=\"fas fa-shopping-cart me-2\"></i>Shopping Cart</h1>

        ";
        // line 9
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 9, $this->source); })())) > 0)) {
            // line 10
            yield "            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">Cart Items</h5>
                        </div>
                        <div class=\"card-body p-0\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-borderless mb-0\">
                                    <thead class=\"bg-light\">
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 30
                yield "                                        <tr>
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    ";
                // line 33
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 33), "image", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 34
                    yield "                                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 34), "image", [], "any", false, false, false, 34))), "html", null, true);
                    yield "\"
                                                             alt=\"";
                    // line 35
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                    yield "\"
                                                             class=\"me-3\"
                                                             style=\"width: 60px; height: 60px; object-fit: cover;\">
                                                    ";
                } else {
                    // line 39
                    yield "                                                        <img src=\"https://via.placeholder.com/60x60?text=No+Image\"
                                                             alt=\"No image\"
                                                             class=\"me-3\">
                                                    ";
                }
                // line 43
                yield "                                                    <div>
                                                        <h6 class=\"mb-0\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
                yield "</h6>
                                                        ";
                // line 45
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 45), "category", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 46
                    yield "                                                            <small class=\"text-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 46), "category", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
                    yield "</small>
                                                        ";
                }
                // line 48
                yield "                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 52), "price", [], "any", false, false, false, 52), 3), "html", null, true);
                yield " TND
                                            </td>
                                            <td class=\"align-middle\">
                                                <form action=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55)]), "html", null, true);
                yield "\"
                                                      method=\"post\"
                                                      class=\"d-inline\">
                                                    <div class=\"input-group\" style=\"width: 120px;\">
                                                        <input type=\"number\"
                                                               name=\"quantity\"
                                                               value=\"";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 61), "html", null, true);
                yield "\"
                                                               min=\"1\"
                                                               max=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 63), "stock", [], "any", false, false, false, 63), "html", null, true);
                yield "\"
                                                               class=\"form-control form-control-sm\">
                                                        <button type=\"submit\" class=\"btn btn-outline-secondary btn-sm\">
                                                            <i class=\"fas fa-sync\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td class=\"align-middle\">
                                                <strong>";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 72), "price", [], "any", false, false, false, 72) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 72)), 3), "html", null, true);
                yield " TND</strong>
                                            </td>
                                            <td class=\"align-middle\">
                                                <a href=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75)]), "html", null, true);
                yield "\"
                                                   class=\"btn btn-outline-danger btn-sm\"
                                                   onclick=\"return confirm('Are you sure you want to remove this item?')\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class=\"mt-3\">
                        <a href=\"";
            // line 90
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
            yield "\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Continue Shopping
                        </a>
                        <a href=\"";
            // line 93
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_clear");
            yield "\"
                           class=\"btn btn-outline-danger ms-2\"
                           onclick=\"return confirm('Are you sure you want to clear your cart?')\">
                            <i class=\"fas fa-trash me-2\"></i>Clear Cart
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">Order Summary</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"white\">Subtotal:</span>
                                <span class=\"white\" >";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 109, $this->source); })()), "subtotal", [], "any", false, false, false, 109), 3), "html", null, true);
            yield " TND</span>
                            </div>

                            ";
            // line 112
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 112, $this->source); })()), "coupon", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 113
                yield "                                <div class=\"d-flex justify-content-between mb-2 text-success\">
                                    <span class=\"white\">Discount (";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 114, $this->source); })()), "coupon", [], "any", false, false, false, 114), "code", [], "any", false, false, false, 114), "html", null, true);
                yield "):</span>
                                    <span class=\"white\">-";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 115, $this->source); })()), "discount", [], "any", false, false, false, 115), 3), "html", null, true);
                yield " TND</span>
                                </div>
                            ";
            }
            // line 118
            yield "
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"white\">Shipping:</span>
                                <span class=\"white\">
                                ";
            // line 122
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 122, $this->source); })()), "shipping", [], "any", false, false, false, 122) == 0)) {
                // line 123
                yield "                                    <span class=\"  text-success\">Free</span>
                                ";
            } else {
                // line 125
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 125, $this->source); })()), "shipping", [], "any", false, false, false, 125), 3), "html", null, true);
                yield " TND
                                ";
            }
            // line 127
            yield "                            </span>
                            </div>

                            <hr>

                            <div class=\"d-flex justify-content-between mb-3\">
                                <strong class=\"white\">Total:</strong>
                                <strong class=\"text-primary\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 134, $this->source); })()), "total", [], "any", false, false, false, 134), 3), "html", null, true);
            yield " TND</strong>
                            </div>

                            ";
            // line 137
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 137, $this->source); })()), "subtotal", [], "any", false, false, false, 137) < 150)) {
                // line 138
                yield "                                <div class=\"alert alert-info\">
                                    <small>
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Add ";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((150 - CoreExtension::getAttribute($this->env, $this->source, (isset($context["cartSummary"]) || array_key_exists("cartSummary", $context) ? $context["cartSummary"] : (function () { throw new RuntimeError('Variable "cartSummary" does not exist.', 141, $this->source); })()), "subtotal", [], "any", false, false, false, 141)), 3), "html", null, true);
                yield " TND more for free shipping!
                                    </small>
                                </div>
                            ";
            }
            // line 145
            yield "
                            <!-- Coupon Form -->
                            <div class=\"mb-3\">
                                <label for=\"couponCode\" class=\"form-label\">Coupon Code</label>
                                <div class=\"input-group\">
                                    <input type=\"text\"
                                           class=\"form-control\"
                                           id=\"couponCode\"
                                           placeholder=\"Enter coupon code\">
                                    <button class=\"btn white gray btn-outline-secondary\"
                                            type=\"button\"
                                            onclick=\"applyCoupon()\">
                                        Apply
                                    </button>
                                </div>
                            </div>

                            <div class=\"d-grid\">
                                <button class=\"btn btn-primary btn-lg\">
                                    <i class=\"fas fa-credit-card me-2\"></i>Proceed to Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 172
            yield "            <div class=\"text-center py-5\">
                <i class=\"fas fa-shopping-cart fa-5x text-muted mb-4\"></i>
                <h3>Your cart is empty</h3>
                <p class=\"text-muted mb-4\">Looks like you haven't added any items to your cart yet.</p>
                <a href=\"";
            // line 176
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
            yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-shopping-bag me-2\"></i>Start Shopping
                </a>
            </div>
        ";
        }
        // line 181
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 184
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 185
        yield "    <script>
        function applyCoupon() {
            const couponCode = document.getElementById('couponCode').value;

            if (!couponCode.trim()) {
                alert('Please enter a coupon code');
                return;
            }

            fetch('";
        // line 194
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
        return "cart/index.html.twig";
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
        return array (  391 => 194,  380 => 185,  370 => 184,  361 => 181,  353 => 176,  347 => 172,  318 => 145,  311 => 141,  306 => 138,  304 => 137,  298 => 134,  289 => 127,  283 => 125,  279 => 123,  277 => 122,  271 => 118,  265 => 115,  261 => 114,  258 => 113,  256 => 112,  250 => 109,  231 => 93,  225 => 90,  216 => 83,  202 => 75,  196 => 72,  184 => 63,  179 => 61,  170 => 55,  164 => 52,  158 => 48,  152 => 46,  150 => 45,  146 => 44,  143 => 43,  137 => 39,  130 => 35,  125 => 34,  123 => 33,  118 => 30,  114 => 29,  93 => 10,  91 => 9,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Shopping Cart{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1><i class=\"fas fa-shopping-cart me-2\"></i>Shopping Cart</h1>

        {% if cartItems|length > 0 %}
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">Cart Items</h5>
                        </div>
                        <div class=\"card-body p-0\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-borderless mb-0\">
                                    <thead class=\"bg-light\">
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for item in cartItems %}
                                        <tr>
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    {% if item.product.image %}
                                                        <img src=\"{{ asset('uploads/products/' ~ item.product.image) }}\"
                                                             alt=\"{{ item.product.name }}\"
                                                             class=\"me-3\"
                                                             style=\"width: 60px; height: 60px; object-fit: cover;\">
                                                    {% else %}
                                                        <img src=\"https://via.placeholder.com/60x60?text=No+Image\"
                                                             alt=\"No image\"
                                                             class=\"me-3\">
                                                    {% endif %}
                                                    <div>
                                                        <h6 class=\"mb-0\">{{ item.product.name }}</h6>
                                                        {% if item.product.category %}
                                                            <small class=\"text-muted\">{{ item.product.category.name }}</small>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ item.product.price|number_format(3) }} TND
                                            </td>
                                            <td class=\"align-middle\">
                                                <form action=\"{{ path('cart_update', {'id': item.product.id}) }}\"
                                                      method=\"post\"
                                                      class=\"d-inline\">
                                                    <div class=\"input-group\" style=\"width: 120px;\">
                                                        <input type=\"number\"
                                                               name=\"quantity\"
                                                               value=\"{{ item.quantity }}\"
                                                               min=\"1\"
                                                               max=\"{{ item.product.stock }}\"
                                                               class=\"form-control form-control-sm\">
                                                        <button type=\"submit\" class=\"btn btn-outline-secondary btn-sm\">
                                                            <i class=\"fas fa-sync\"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td class=\"align-middle\">
                                                <strong>{{ (item.product.price * item.quantity)|number_format(3) }} TND</strong>
                                            </td>
                                            <td class=\"align-middle\">
                                                <a href=\"{{ path('cart_remove', {'id': item.product.id}) }}\"
                                                   class=\"btn btn-outline-danger btn-sm\"
                                                   onclick=\"return confirm('Are you sure you want to remove this item?')\">
                                                    <i class=\"fas fa-trash\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class=\"mt-3\">
                        <a href=\"{{ path('product_index') }}\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Continue Shopping
                        </a>
                        <a href=\"{{ path('cart_clear') }}\"
                           class=\"btn btn-outline-danger ms-2\"
                           onclick=\"return confirm('Are you sure you want to clear your cart?')\">
                            <i class=\"fas fa-trash me-2\"></i>Clear Cart
                        </a>
                    </div>
                </div>

                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">Order Summary</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"white\">Subtotal:</span>
                                <span class=\"white\" >{{ cartSummary.subtotal|number_format(3) }} TND</span>
                            </div>

                            {% if cartSummary.coupon %}
                                <div class=\"d-flex justify-content-between mb-2 text-success\">
                                    <span class=\"white\">Discount ({{ cartSummary.coupon.code }}):</span>
                                    <span class=\"white\">-{{ cartSummary.discount|number_format(3) }} TND</span>
                                </div>
                            {% endif %}

                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"white\">Shipping:</span>
                                <span class=\"white\">
                                {% if cartSummary.shipping == 0 %}
                                    <span class=\"  text-success\">Free</span>
                                {% else %}
                                    {{ cartSummary.shipping|number_format(3) }} TND
                                {% endif %}
                            </span>
                            </div>

                            <hr>

                            <div class=\"d-flex justify-content-between mb-3\">
                                <strong class=\"white\">Total:</strong>
                                <strong class=\"text-primary\">{{ cartSummary.total|number_format(3) }} TND</strong>
                            </div>

                            {% if cartSummary.subtotal < 150 %}
                                <div class=\"alert alert-info\">
                                    <small>
                                        <i class=\"fas fa-info-circle me-1\"></i>
                                        Add {{ (150 - cartSummary.subtotal)|number_format(3) }} TND more for free shipping!
                                    </small>
                                </div>
                            {% endif %}

                            <!-- Coupon Form -->
                            <div class=\"mb-3\">
                                <label for=\"couponCode\" class=\"form-label\">Coupon Code</label>
                                <div class=\"input-group\">
                                    <input type=\"text\"
                                           class=\"form-control\"
                                           id=\"couponCode\"
                                           placeholder=\"Enter coupon code\">
                                    <button class=\"btn white gray btn-outline-secondary\"
                                            type=\"button\"
                                            onclick=\"applyCoupon()\">
                                        Apply
                                    </button>
                                </div>
                            </div>

                            <div class=\"d-grid\">
                                <button class=\"btn btn-primary btn-lg\">
                                    <i class=\"fas fa-credit-card me-2\"></i>Proceed to Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"text-center py-5\">
                <i class=\"fas fa-shopping-cart fa-5x text-muted mb-4\"></i>
                <h3>Your cart is empty</h3>
                <p class=\"text-muted mb-4\">Looks like you haven't added any items to your cart yet.</p>
                <a href=\"{{ path('product_index') }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-shopping-bag me-2\"></i>Start Shopping
                </a>
            </div>
        {% endif %}
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
    </script>
{% endblock %}", "cart/index.html.twig", "C:\\Users\\Raed\\e-commerce\\e-commerce\\templates\\cart\\index.html.twig");
    }
}
