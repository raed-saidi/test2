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

/* product/show.html.twig */
class __TwigTemplate_8bc4291ee559d14a5ab7ff0b3e46bd5e extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

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

        yield "Product";
        
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
        <!-- Breadcrumb -->
        <nav aria-label=\"breadcrumb\" class=\"mb-4\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Home}}</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\">Products</a></li>
                ";
        // line 12
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "category", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "                    <li class=\"breadcrumb-item\">
                        <a href=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index", ["category" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "category", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)]), "html", null, true);
            yield "\">
                            ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "category", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
            yield "
                        </a>
                    </li>
                ";
        }
        // line 19
        yield "                <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "</li>
            </ol>
        </nav>

        <div class=\"row\">
            <!-- Product Image -->
            <div class=\"col-lg-6 mb-4\">
                <div class=\"product-image-container\">
                    ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "image", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\"
                             alt=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
            yield "\"
                             class=\"img-fluid rounded shadow-lg product-main-image\"
                             id=\"mainImage\">
                    ";
        } else {
            // line 33
            yield "                        <img src=\"https://via.placeholder.com/600x500?text=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33)), "html", null, true);
            yield "\"
                             alt=\"No image available\"
                             class=\"img-fluid rounded shadow-lg product-main-image\"
                             id=\"mainImage\">
                    ";
        }
        // line 38
        yield "
                    <!-- Image zoom overlay -->
                    <div class=\"image-zoom-overlay\">
                        <i class=\"fas fa-search-plus\"></i>
                    </div>
                </div>

                <!-- Thumbnail images (if you have multiple images) -->
                <div class=\"product-thumbnails mt-3\">
                    <div class=\"row g-2\">
                        <div class=\"col-3\">
                            ";
        // line 49
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 49, $this->source); })()), "image", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\"
                                     alt=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), "html", null, true);
            yield "\"
                                     class=\"img-fluid rounded thumbnail-image active\"
                                     onclick=\"changeMainImage(this.src)\">
                            ";
        } else {
            // line 55
            yield "                                <img src=\"https://via.placeholder.com/150x150?text=1\"
                                     alt=\"Thumbnail 1\"
                                     class=\"img-fluid rounded thumbnail-image active\"
                                     onclick=\"changeMainImage(this.src)\">
                            ";
        }
        // line 60
        yield "                        </div>
                        <!-- Add more thumbnails here if you have multiple product images -->
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class=\"col-lg-6\">
                <div class=\"product-details\">
                    <h1 class=\"product-title mb-3\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 69, $this->source); })()), "name", [], "any", false, false, false, 69), "html", null, true);
        yield "</h1>

                    ";
        // line 71
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 71, $this->source); })()), "category", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "                        <div class=\"mb-3\">
                            <span class=\"badge bg-primary fs-6\">
                                <i class=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CategoryExtension']->getCategoryIcon(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 74, $this->source); })()), "category", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74)), "html", null, true);
            yield " me-1\"></i>
                                ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 75, $this->source); })()), "category", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
            yield "
                            </span>
                        </div>
                    ";
        }
        // line 79
        yield "
                    <!-- Rating -->
                    ";
        // line 81
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 81, $this->source); })()), "averageRating", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "                        <div class=\"product-rating mb-3\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"rating-stars me-2\">
                                    ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 86
                yield "                                        ";
                if (($context["i"] <= Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 86, $this->source); })()), "averageRating", [], "any", false, false, false, 86), 0, "floor"))) {
                    // line 87
                    yield "                                            <i class=\"fas fa-star text-warning\"></i>
                                        ";
                } elseif (((                // line 88
$context["i"] <= Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 88, $this->source); })()), "averageRating", [], "any", false, false, false, 88), 0, "ceil")) && ((Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 88, $this->source); })()), "averageRating", [], "any", false, false, false, 88), 1) % 1) > 0))) {
                    // line 89
                    yield "                                            <i class=\"fas fa-star-half-alt text-warning\"></i>
                                        ";
                } else {
                    // line 91
                    yield "                                            <i class=\"far fa-star text-warning\"></i>
                                        ";
                }
                // line 93
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "                                </div>
                                <span class=\"rating-value me-2\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 95, $this->source); })()), "averageRating", [], "any", false, false, false, 95), 1), "html", null, true);
            yield "</span>
                                <span class=\"text-muted\">(";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 96, $this->source); })()), "reviews", [], "any", false, false, false, 96)), "html", null, true);
            yield " review";
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 96, $this->source); })()), "reviews", [], "any", false, false, false, 96)) != 1)) ? ("s") : (""));
            yield ")</span>
                            </div>
                        </div>
                    ";
        }
        // line 100
        yield "
                    <!-- Price -->
                    <div class=\"product-price mb-4\">
                        <h2 class=\"price-current text-primary mb-0\">
                            ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 104, $this->source); })()), "price", [], "any", false, false, false, 104), 3), "html", null, true);
        yield " <small class=\"text-muted\">TND</small>
                        </h2>
                    </div>

                    <!-- Description -->
                    <div class=\"product-description mb-4\">
                        <h5>Description</h5>
                        <p class=\"text-muted\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 111, $this->source); })()), "description", [], "any", false, false, false, 111), "html", null, true);
        yield "</p>
                    </div>

                    <!-- Stock Status -->
                    <div class=\"stock-status mb-4\">
                        <h6>Availability:</h6>
                        ";
        // line 117
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 117, $this->source); })()), "stock", [], "any", false, false, false, 117) > 0)) {
            // line 118
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 118, $this->source); })()), "stock", [], "any", false, false, false, 118) > 10)) {
                // line 119
                yield "                                <span class=\"badge bg-success\">
                                    <i class=\"fas fa-check me-1\"></i>In Stock (";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 120, $this->source); })()), "stock", [], "any", false, false, false, 120), "html", null, true);
                yield " available)
                                </span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 122
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 122, $this->source); })()), "stock", [], "any", false, false, false, 122) > 5)) {
                // line 123
                yield "                                <span class=\"badge bg-warning\">
                                    <i class=\"fas fa-exclamation-triangle me-1\"></i>Limited Stock (";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 124, $this->source); })()), "stock", [], "any", false, false, false, 124), "html", null, true);
                yield " left)
                                </span>
                            ";
            } else {
                // line 127
                yield "                                <span class=\"badge bg-danger\">
                                    <i class=\"fas fa-fire me-1\"></i>Only ";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 128, $this->source); })()), "stock", [], "any", false, false, false, 128), "html", null, true);
                yield " left!
                                </span>
                            ";
            }
            // line 131
            yield "                        ";
        } else {
            // line 132
            yield "                            <span class=\"badge bg-secondary\">
                                <i class=\"fas fa-times me-1\"></i>Out of Stock
                            </span>
                        ";
        }
        // line 136
        yield "                    </div>

                    <!-- Add to Cart Form -->
                    ";
        // line 139
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 139, $this->source); })()), "stock", [], "any", false, false, false, 139) > 0)) {
            // line 140
            yield "                        <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 140, $this->source); })()), "id", [], "any", false, false, false, 140)]), "html", null, true);
            yield "\" method=\"post\" class=\"add-to-cart-form mb-4\">
                            <div class=\"row g-3 align-items-end\">
                                <div class=\"col-md-4\">
                                    <label for=\"quantity\" class=\"form-label\">Quantity:</label>
                                    <div class=\"quantity-selector\">
                                        <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" onclick=\"decreaseQuantity()\">
                                            <i class=\"fas fa-minus\"></i>
                                        </button>
                                        <input type=\"number\"
                                               id=\"quantity\"
                                               name=\"quantity\"
                                               value=\"1\"
                                               min=\"1\"
                                               max=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 153, $this->source); })()), "stock", [], "any", false, false, false, 153), "html", null, true);
            yield "\"
                                               class=\"form-control text-center mx-2\"
                                               style=\"width: 80px; display: inline-block;\">
                                        <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" onclick=\"increaseQuantity()\">
                                            <i class=\"fas fa-plus\"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class=\"col-md-8\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-lg w-100 add-to-cart-btn\">
                                        <i class=\"fas fa-cart-plus me-2\"></i>Add to Cart
                                    </button>
                                </div>
                            </div>
                        </form>
                    ";
        } else {
            // line 169
            yield "                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-triangle me-2\"></i>
                            This product is currently out of stock. Please check back later.
                        </div>
                    ";
        }
        // line 174
        yield "
                    <!-- Action Buttons -->
                    <div class=\"product-actions mb-4\">
                        <div class=\"row g-2\">
                            <div class=\"col-6\">
                                <button class=\"btn btn-outline-danger w-100\" onclick=\"addToWishlist(";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 179, $this->source); })()), "id", [], "any", false, false, false, 179), "html", null, true);
        yield ")\">
                                    <i class=\"far fa-heart me-2\"></i>Add to Wishlist
                                </button>
                            </div>
                            <div class=\"col-6\">
                                <button class=\"btn btn-outline-info w-100\" onclick=\"shareProduct()\">
                                    <i class=\"fas fa-share-alt me-2\"></i>Share
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Features -->
                    <div class=\"product-features\">
                        <h6>Features:</h6>
                        <ul class=\"list-unstyled\">
                            <li><i class=\"fas fa-truck text-success me-2\"></i>Free shipping on orders over 150 TND</li>
                            <li><i class=\"fas fa-undo text-info me-2\"></i>30-day return policy</li>
                            <li><i class=\"fas fa-shield-alt text-warning me-2\"></i>1-year warranty</li>
                            <li><i class=\"fas fa-headset text-primary me-2\"></i>24/7 customer support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Tabs -->
        <div class=\"row mt-5\">
            <div class=\"col-12\">
                <ul class=\"nav nav-tabs\" id=\"productTabs\" role=\"tablist\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link active\" id=\"description-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#description\" type=\"button\" role=\"tab\">
                            Description
                        </button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"specifications-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#specifications\" type=\"button\" role=\"tab\">
                            Specifications
                        </button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"reviews-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#reviews\" type=\"button\" role=\"tab\">
                            Reviews (";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 221, $this->source); })()), "reviews", [], "any", false, false, false, 221)), "html", null, true);
        yield ")
                        </button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"shipping-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#shipping\" type=\"button\" role=\"tab\">
                            Shipping & Returns
                        </button>
                    </li>
                </ul>

                <div class=\"tab-content\" id=\"productTabsContent\">
                    <!-- Description Tab -->
                    <div class=\"tab-pane fade show active\" id=\"description\" role=\"tabpanel\">
                        <div class=\"p-4\">
                            <h5>Product Description</h5>
                            <p>";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 236, $this->source); })()), "description", [], "any", false, false, false, 236), "html", null, true);
        yield "</p>
                        </div>
                    </div>

                    <!-- Specifications Tab -->
                    <div class=\"tab-pane fade\" id=\"specifications\" role=\"tabpanel\">
                        <div class=\"p-4\">
                            <h5>Specifications</h5>
                            <table class=\"table table-striped\">
                                <tbody>
                                <tr>
                                    <td><strong>Category</strong></td>
                                    <td>";
        // line 248
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 248, $this->source); })()), "category", [], "any", false, false, false, 248)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 248, $this->source); })()), "category", [], "any", false, false, false, 248), "name", [], "any", false, false, false, 248), "html", null, true)) : ("N/A"));
        yield "</td>
                                </tr>
                                <tr>
                                    <td><strong>Stock</strong></td>
                                    <td>";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 252, $this->source); })()), "stock", [], "any", false, false, false, 252), "html", null, true);
        yield " units</td>
                                </tr>
                                <tr>
                                    <td><strong>SKU</strong></td>
                                    <td>PRD-";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%06d", CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 256, $this->source); })()), "id", [], "any", false, false, false, 256)), "html", null, true);
        yield "</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Reviews Tab -->
                    <div class=\"tab-pane fade\" id=\"reviews\" role=\"tabpanel\">
                        <div class=\"p-4\">
                            ";
        // line 266
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 266, $this->source); })()), "reviews", [], "any", false, false, false, 266)) > 0)) {
            // line 267
            yield "                                <h5>Customer Reviews</h5>

                                <!-- Review Summary -->
                                <div class=\"review-summary mb-4 p-3 bg-light rounded\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-md-4 text-center\">
                                            <h2 class=\"mb-0\">";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 273, $this->source); })()), "averageRating", [], "any", false, false, false, 273), 1), "html", null, true);
            yield "</h2>
                                            <div class=\"rating-stars\">
                                                ";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 276
                yield "                                                    ";
                if (($context["i"] <= Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 276, $this->source); })()), "averageRating", [], "any", false, false, false, 276), 0, "floor"))) {
                    // line 277
                    yield "                                                        <i class=\"fas fa-star text-warning\"></i>
                                                    ";
                } elseif (((                // line 278
$context["i"] <= Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 278, $this->source); })()), "averageRating", [], "any", false, false, false, 278), 0, "ceil")) && ((Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 278, $this->source); })()), "averageRating", [], "any", false, false, false, 278), 1) % 1) > 0))) {
                    // line 279
                    yield "                                                        <i class=\"fas fa-star-half-alt text-warning\"></i>
                                                    ";
                } else {
                    // line 281
                    yield "                                                        <i class=\"far fa-star text-warning\"></i>
                                                    ";
                }
                // line 283
                yield "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            yield "                                            </div>
                                            <p class=\"text-muted mb-0\">";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 285, $this->source); })()), "reviews", [], "any", false, false, false, 285)), "html", null, true);
            yield " review";
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 285, $this->source); })()), "reviews", [], "any", false, false, false, 285)) != 1)) ? ("s") : (""));
            yield "</p>
                                        </div>
                                        <div class=\"col-md-8\">
                                            <!-- Rating breakdown would go here -->
                                        </div>
                                    </div>
                                </div>

                                <!-- Individual Reviews -->
                                ";
            // line 294
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 294, $this->source); })()), "reviews", [], "any", false, false, false, 294));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 295
                yield "                                    <div class=\"review-item mb-4 p-3 border rounded\">
                                        <div class=\"d-flex justify-content-between align-items-start mb-2\">
                                            <div>
                                                <h6 class=\"mb-1\">";
                // line 298
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "user", [], "any", false, false, false, 298), "firstName", [], "any", false, false, false, 298)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "user", [], "any", false, false, false, 298), "firstName", [], "any", false, false, false, 298) . " ") . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "user", [], "any", false, false, false, 298), "lastName", [], "any", false, false, false, 298)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "user", [], "any", false, false, false, 298), "lastName", [], "any", false, false, false, 298), 0, [], "array", false, false, false, 298) . ".")) : (""))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "user", [], "any", false, false, false, 298), "email", [], "any", false, false, false, 298), "@"), 0, [], "array", false, false, false, 298), "html", null, true)));
                yield "</h6>
                                                <div class=\"rating-stars\">
                                                    ";
                // line 300
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 301
                    yield "                                                        ";
                    if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 301))) {
                        // line 302
                        yield "                                                            <i class=\"fas fa-star text-warning\"></i>
                                                        ";
                    } else {
                        // line 304
                        yield "                                                            <i class=\"far fa-star text-warning\"></i>
                                                        ";
                    }
                    // line 306
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 307
                yield "                                                </div>
                                            </div>
                                            <small class=\"text-muted\">";
                // line 309
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "createdAt", [], "any", false, false, false, 309), "M j, Y"), "html", null, true);
                yield "</small>
                                        </div>
                                        ";
                // line 311
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["review"], "comment", [], "any", false, false, false, 311)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 312
                    yield "                                            <p class=\"mb-0\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "comment", [], "any", false, false, false, 312), "html", null, true);
                    yield "</p>
                                        ";
                }
                // line 314
                yield "                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            yield "                            ";
        } else {
            // line 317
            yield "                                <div class=\"text-center py-5\">
                                    <i class=\"fas fa-star fa-3x text-muted mb-3\"></i>
                                    <h5>No reviews yet</h5>
                                    <p class=\"text-muted\">Be the first to review this product!</p>
                                </div>
                            ";
        }
        // line 323
        yield "
                            <!-- Add Review Button -->
                            ";
        // line 325
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 325, $this->source); })()), "user", [], "any", false, false, false, 325)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 326
            yield "                                <div class=\"mt-4\">
                                    <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#reviewModal\">
                                        <i class=\"fas fa-star me-2\"></i>Write a Review
                                    </button>
                                </div>
                            ";
        } else {
            // line 332
            yield "                                <div class=\"alert alert-info mt-4\">
                                    <a href=\"";
            // line 333
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Login</a> to write a review.
                                </div>
                            ";
        }
        // line 336
        yield "                        </div>
                    </div>

                    <!-- Shipping Tab -->
                    <div class=\"tab-pane fade\" id=\"shipping\" role=\"tabpanel\">
                        <div class=\"p-4\">
                            <h5>Shipping Information</h5>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h6><i class=\"fas fa-truck text-success me-2\"></i>Standard Shipping</h6>
                                    <ul>
                                        <li>Free shipping on orders over 150 TND</li>
                                        <li>7 TND shipping fee for orders under 150 TND</li>
                                        <li>Delivery within 3-5 business days</li>
                                    </ul>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6><i class=\"fas fa-undo text-info me-2\"></i>Returns</h6>
                                    <ul>
                                        <li>30-day return policy</li>
                                        <li>Items must be in original condition</li>
                                        <li>Free return shipping</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <div class=\"row mt-5\">
            <div class=\"col-12\">
                <h3>Related Products</h3>
                <!-- You can add related products here -->
            </div>
        </div>
    </div>

    <!-- Review Modal -->
    ";
        // line 377
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 377, $this->source); })()), "user", [], "any", false, false, false, 377)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 378
            yield "        <div class=\"modal fade\" id=\"reviewModal\" tabindex=\"-1\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Write a Review</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                    </div>
                    <form action=\"#\" method=\"post\">
                        <div class=\"modal-body\">
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Rating</label>
                                <div class=\"rating-input\">
                                    ";
            // line 390
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 391
                yield "                                        <input type=\"radio\" name=\"rating\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" id=\"star";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" required>
                                        <label for=\"star";
                // line 392
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\"><i class=\"fas fa-star\"></i></label>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 394
            yield "                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"comment\" class=\"form-label\">Comment</label>
                                <textarea class=\"form-control\" id=\"comment\" name=\"comment\" rows=\"4\" placeholder=\"Share your experience with this product...\"></textarea>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                            <button type=\"submit\" class=\"btn btn-primary\">Submit Review</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 412
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 413
        yield "    <style>
        .product-main-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            cursor: zoom-in;
        }

        .product-image-container {
            position: relative;
            overflow: hidden;
            border-radius: 0.5rem;
        }

        .image-zoom-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            color: white;
            font-size: 2rem;
        }

        .product-image-container:hover .image-zoom-overlay {
            opacity: 1;
        }

        .thumbnail-image {
            height: 80px;
            object-fit: cover;
            cursor: pointer;
            border: 2px solid transparent;
            transition: border-color 0.3s ease;
        }

        .thumbnail-image.active,
        .thumbnail-image:hover {
            border-color: var(--bs-primary);
        }

        .quantity-selector {
            display: flex;
            align-items: center;
        }

        .rating-input {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
        }

        .rating-input input {
            display: none;
        }

        .rating-input label {
            color: #ddd;
            font-size: 1.5rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .rating-input input:checked ~ label,
        .rating-input label:hover,
        .rating-input label:hover ~ label {
            color: #ffc107;
        }

        .product-title {
            font-size: 2rem;
            font-weight: 600;
        }

        .price-current {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .add-to-cart-btn {
            transition: all 0.3s ease;
        }

        .add-to-cart-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .review-item {
            transition: box-shadow 0.3s ease;
        }

        .review-item:hover {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 517
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 518
        yield "    <script>
        function changeMainImage(src) {
            document.getElementById('mainImage').src = src;

            // Update active thumbnail
            document.querySelectorAll('.thumbnail-image').forEach(img => {
                img.classList.remove('active');
            });
            event.target.classList.add('active');
        }

        function increaseQuantity() {
            const input = document.getElementById('quantity');
            const max = parseInt(input.getAttribute('max'));
            const current = parseInt(input.value);

            if (current < max) {
                input.value = current + 1;
            }
        }

        function decreaseQuantity() {
            const input = document.getElementById('quantity');
            const min = parseInt(input.getAttribute('min'));
            const current = parseInt(input.value);

            if (current > min) {
                input.value = current - 1;
            }
        }

        function addToWishlist(productId) {
            // Implement wishlist functionality
            alert('Wishlist functionality would be implemented here');
        }

        function shareProduct() {
            if (navigator.share) {
                navigator.share({
                    title: '";
        // line 557
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 557, $this->source); })()), "name", [], "any", false, false, false, 557), "html", null, true);
        yield "',
                    text: '";
        // line 558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 558, $this->source); })()), "description", [], "any", false, false, false, 558), 0, 100), "html", null, true);
        yield "...',
                    url: window.location.href
                });
            } else {
                // Fallback: copy URL to clipboard
                navigator.clipboard.writeText(window.location.href).then(() => {
                    alert('Product URL copied to clipboard!');
                });
            }
        }

        // Add to cart with animation
        document.querySelector('.add-to-cart-form')?.addEventListener('submit', function(e) {
            const button = this.querySelector('.add-to-cart-btn');
            const originalText = button.innerHTML;

            button.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i>Adding...';
            button.disabled = true;

            // Re-enable after a short delay (form submits anyway)
            setTimeout(() => {
                button.innerHTML = '<i class=\"fas fa-check me-2\"></i>Added!';
                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.disabled = false;
                }, 1000);
            }, 500);
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
        return "product/show.html.twig";
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
        return array (  929 => 558,  925 => 557,  884 => 518,  874 => 517,  764 => 413,  754 => 412,  730 => 394,  722 => 392,  715 => 391,  711 => 390,  697 => 378,  695 => 377,  652 => 336,  646 => 333,  643 => 332,  635 => 326,  633 => 325,  629 => 323,  621 => 317,  618 => 316,  611 => 314,  605 => 312,  603 => 311,  598 => 309,  594 => 307,  588 => 306,  584 => 304,  580 => 302,  577 => 301,  573 => 300,  568 => 298,  563 => 295,  559 => 294,  545 => 285,  542 => 284,  536 => 283,  532 => 281,  528 => 279,  526 => 278,  523 => 277,  520 => 276,  516 => 275,  511 => 273,  503 => 267,  501 => 266,  488 => 256,  481 => 252,  474 => 248,  459 => 236,  441 => 221,  396 => 179,  389 => 174,  382 => 169,  363 => 153,  346 => 140,  344 => 139,  339 => 136,  333 => 132,  330 => 131,  324 => 128,  321 => 127,  315 => 124,  312 => 123,  310 => 122,  305 => 120,  302 => 119,  299 => 118,  297 => 117,  288 => 111,  278 => 104,  272 => 100,  263 => 96,  259 => 95,  256 => 94,  250 => 93,  246 => 91,  242 => 89,  240 => 88,  237 => 87,  234 => 86,  230 => 85,  225 => 82,  223 => 81,  219 => 79,  212 => 75,  208 => 74,  204 => 72,  202 => 71,  197 => 69,  186 => 60,  179 => 55,  172 => 51,  167 => 50,  165 => 49,  152 => 38,  143 => 33,  136 => 29,  131 => 28,  129 => 27,  117 => 19,  110 => 15,  106 => 14,  103 => 13,  101 => 12,  97 => 11,  93 => 10,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Product{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <!-- Breadcrumb -->
        <nav aria-label=\"breadcrumb\" class=\"mb-4\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('home') }}\">Home}}</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('product_index') }}\">Products</a></li>
                {% if product.category %}
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('product_index', {'category': product.category.id}) }}\">
                            {{ product.category.name }}
                        </a>
                    </li>
                {% endif %}
                <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ product.name }}</li>
            </ol>
        </nav>

        <div class=\"row\">
            <!-- Product Image -->
            <div class=\"col-lg-6 mb-4\">
                <div class=\"product-image-container\">
                    {% if product.image %}
                        <img src=\"{{ path('product_image', {'id': product.id}) }}\"
                             alt=\"{{ product.name }}\"
                             class=\"img-fluid rounded shadow-lg product-main-image\"
                             id=\"mainImage\">
                    {% else %}
                        <img src=\"https://via.placeholder.com/600x500?text={{ product.name|url_encode }}\"
                             alt=\"No image available\"
                             class=\"img-fluid rounded shadow-lg product-main-image\"
                             id=\"mainImage\">
                    {% endif %}

                    <!-- Image zoom overlay -->
                    <div class=\"image-zoom-overlay\">
                        <i class=\"fas fa-search-plus\"></i>
                    </div>
                </div>

                <!-- Thumbnail images (if you have multiple images) -->
                <div class=\"product-thumbnails mt-3\">
                    <div class=\"row g-2\">
                        <div class=\"col-3\">
                            {% if product.image %}
                                <img src=\"{{ path('product_image', {'id': product.id}) }}\"
                                     alt=\"{{ product.name }}\"
                                     class=\"img-fluid rounded thumbnail-image active\"
                                     onclick=\"changeMainImage(this.src)\">
                            {% else %}
                                <img src=\"https://via.placeholder.com/150x150?text=1\"
                                     alt=\"Thumbnail 1\"
                                     class=\"img-fluid rounded thumbnail-image active\"
                                     onclick=\"changeMainImage(this.src)\">
                            {% endif %}
                        </div>
                        <!-- Add more thumbnails here if you have multiple product images -->
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class=\"col-lg-6\">
                <div class=\"product-details\">
                    <h1 class=\"product-title mb-3\">{{ product.name }}</h1>

                    {% if product.category %}
                        <div class=\"mb-3\">
                            <span class=\"badge bg-primary fs-6\">
                                <i class=\"{{ getCategoryIcon(product.category.name) }} me-1\"></i>
                                {{ product.category.name }}
                            </span>
                        </div>
                    {% endif %}

                    <!-- Rating -->
                    {% if product.averageRating %}
                        <div class=\"product-rating mb-3\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"rating-stars me-2\">
                                    {% for i in 1..5 %}
                                        {% if i <= product.averageRating|round(0, 'floor') %}
                                            <i class=\"fas fa-star text-warning\"></i>
                                        {% elseif i <= product.averageRating|round(0, 'ceil') and product.averageRating|round(1) % 1 > 0 %}
                                            <i class=\"fas fa-star-half-alt text-warning\"></i>
                                        {% else %}
                                            <i class=\"far fa-star text-warning\"></i>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                                <span class=\"rating-value me-2\">{{ product.averageRating|number_format(1) }}</span>
                                <span class=\"text-muted\">({{ product.reviews|length }} review{{ product.reviews|length != 1 ? 's' : '' }})</span>
                            </div>
                        </div>
                    {% endif %}

                    <!-- Price -->
                    <div class=\"product-price mb-4\">
                        <h2 class=\"price-current text-primary mb-0\">
                            {{ product.price|number_format(3) }} <small class=\"text-muted\">TND</small>
                        </h2>
                    </div>

                    <!-- Description -->
                    <div class=\"product-description mb-4\">
                        <h5>Description</h5>
                        <p class=\"text-muted\">{{ product.description }}</p>
                    </div>

                    <!-- Stock Status -->
                    <div class=\"stock-status mb-4\">
                        <h6>Availability:</h6>
                        {% if product.stock > 0 %}
                            {% if product.stock > 10 %}
                                <span class=\"badge bg-success\">
                                    <i class=\"fas fa-check me-1\"></i>In Stock ({{ product.stock }} available)
                                </span>
                            {% elseif product.stock > 5 %}
                                <span class=\"badge bg-warning\">
                                    <i class=\"fas fa-exclamation-triangle me-1\"></i>Limited Stock ({{ product.stock }} left)
                                </span>
                            {% else %}
                                <span class=\"badge bg-danger\">
                                    <i class=\"fas fa-fire me-1\"></i>Only {{ product.stock }} left!
                                </span>
                            {% endif %}
                        {% else %}
                            <span class=\"badge bg-secondary\">
                                <i class=\"fas fa-times me-1\"></i>Out of Stock
                            </span>
                        {% endif %}
                    </div>

                    <!-- Add to Cart Form -->
                    {% if product.stock > 0 %}
                        <form action=\"{{ path('cart_add', {'id': product.id}) }}\" method=\"post\" class=\"add-to-cart-form mb-4\">
                            <div class=\"row g-3 align-items-end\">
                                <div class=\"col-md-4\">
                                    <label for=\"quantity\" class=\"form-label\">Quantity:</label>
                                    <div class=\"quantity-selector\">
                                        <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" onclick=\"decreaseQuantity()\">
                                            <i class=\"fas fa-minus\"></i>
                                        </button>
                                        <input type=\"number\"
                                               id=\"quantity\"
                                               name=\"quantity\"
                                               value=\"1\"
                                               min=\"1\"
                                               max=\"{{ product.stock }}\"
                                               class=\"form-control text-center mx-2\"
                                               style=\"width: 80px; display: inline-block;\">
                                        <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" onclick=\"increaseQuantity()\">
                                            <i class=\"fas fa-plus\"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class=\"col-md-8\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-lg w-100 add-to-cart-btn\">
                                        <i class=\"fas fa-cart-plus me-2\"></i>Add to Cart
                                    </button>
                                </div>
                            </div>
                        </form>
                    {% else %}
                        <div class=\"alert alert-warning\">
                            <i class=\"fas fa-exclamation-triangle me-2\"></i>
                            This product is currently out of stock. Please check back later.
                        </div>
                    {% endif %}

                    <!-- Action Buttons -->
                    <div class=\"product-actions mb-4\">
                        <div class=\"row g-2\">
                            <div class=\"col-6\">
                                <button class=\"btn btn-outline-danger w-100\" onclick=\"addToWishlist({{ product.id }})\">
                                    <i class=\"far fa-heart me-2\"></i>Add to Wishlist
                                </button>
                            </div>
                            <div class=\"col-6\">
                                <button class=\"btn btn-outline-info w-100\" onclick=\"shareProduct()\">
                                    <i class=\"fas fa-share-alt me-2\"></i>Share
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Features -->
                    <div class=\"product-features\">
                        <h6>Features:</h6>
                        <ul class=\"list-unstyled\">
                            <li><i class=\"fas fa-truck text-success me-2\"></i>Free shipping on orders over 150 TND</li>
                            <li><i class=\"fas fa-undo text-info me-2\"></i>30-day return policy</li>
                            <li><i class=\"fas fa-shield-alt text-warning me-2\"></i>1-year warranty</li>
                            <li><i class=\"fas fa-headset text-primary me-2\"></i>24/7 customer support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Tabs -->
        <div class=\"row mt-5\">
            <div class=\"col-12\">
                <ul class=\"nav nav-tabs\" id=\"productTabs\" role=\"tablist\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link active\" id=\"description-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#description\" type=\"button\" role=\"tab\">
                            Description
                        </button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"specifications-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#specifications\" type=\"button\" role=\"tab\">
                            Specifications
                        </button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"reviews-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#reviews\" type=\"button\" role=\"tab\">
                            Reviews ({{ product.reviews|length }})
                        </button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"shipping-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#shipping\" type=\"button\" role=\"tab\">
                            Shipping & Returns
                        </button>
                    </li>
                </ul>

                <div class=\"tab-content\" id=\"productTabsContent\">
                    <!-- Description Tab -->
                    <div class=\"tab-pane fade show active\" id=\"description\" role=\"tabpanel\">
                        <div class=\"p-4\">
                            <h5>Product Description</h5>
                            <p>{{ product.description }}</p>
                        </div>
                    </div>

                    <!-- Specifications Tab -->
                    <div class=\"tab-pane fade\" id=\"specifications\" role=\"tabpanel\">
                        <div class=\"p-4\">
                            <h5>Specifications</h5>
                            <table class=\"table table-striped\">
                                <tbody>
                                <tr>
                                    <td><strong>Category</strong></td>
                                    <td>{{ product.category ? product.category.name : 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Stock</strong></td>
                                    <td>{{ product.stock }} units</td>
                                </tr>
                                <tr>
                                    <td><strong>SKU</strong></td>
                                    <td>PRD-{{ '%06d'|format(product.id) }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Reviews Tab -->
                    <div class=\"tab-pane fade\" id=\"reviews\" role=\"tabpanel\">
                        <div class=\"p-4\">
                            {% if product.reviews|length > 0 %}
                                <h5>Customer Reviews</h5>

                                <!-- Review Summary -->
                                <div class=\"review-summary mb-4 p-3 bg-light rounded\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-md-4 text-center\">
                                            <h2 class=\"mb-0\">{{ product.averageRating|number_format(1) }}</h2>
                                            <div class=\"rating-stars\">
                                                {% for i in 1..5 %}
                                                    {% if i <= product.averageRating|round(0, 'floor') %}
                                                        <i class=\"fas fa-star text-warning\"></i>
                                                    {% elseif i <= product.averageRating|round(0, 'ceil') and product.averageRating|round(1) % 1 > 0 %}
                                                        <i class=\"fas fa-star-half-alt text-warning\"></i>
                                                    {% else %}
                                                        <i class=\"far fa-star text-warning\"></i>
                                                    {% endif %}
                                                {% endfor %}
                                            </div>
                                            <p class=\"text-muted mb-0\">{{ product.reviews|length }} review{{ product.reviews|length != 1 ? 's' : '' }}</p>
                                        </div>
                                        <div class=\"col-md-8\">
                                            <!-- Rating breakdown would go here -->
                                        </div>
                                    </div>
                                </div>

                                <!-- Individual Reviews -->
                                {% for review in product.reviews %}
                                    <div class=\"review-item mb-4 p-3 border rounded\">
                                        <div class=\"d-flex justify-content-between align-items-start mb-2\">
                                            <div>
                                                <h6 class=\"mb-1\">{{ review.user.firstName ? review.user.firstName ~ ' ' ~ (review.user.lastName ? review.user.lastName[0] ~ '.' : '') : review.user.email|split('@')[0] }}</h6>
                                                <div class=\"rating-stars\">
                                                    {% for i in 1..5 %}
                                                        {% if i <= review.rating %}
                                                            <i class=\"fas fa-star text-warning\"></i>
                                                        {% else %}
                                                            <i class=\"far fa-star text-warning\"></i>
                                                        {% endif %}
                                                    {% endfor %}
                                                </div>
                                            </div>
                                            <small class=\"text-muted\">{{ review.createdAt|date('M j, Y') }}</small>
                                        </div>
                                        {% if review.comment %}
                                            <p class=\"mb-0\">{{ review.comment }}</p>
                                        {% endif %}
                                    </div>
                                {% endfor %}
                            {% else %}
                                <div class=\"text-center py-5\">
                                    <i class=\"fas fa-star fa-3x text-muted mb-3\"></i>
                                    <h5>No reviews yet</h5>
                                    <p class=\"text-muted\">Be the first to review this product!</p>
                                </div>
                            {% endif %}

                            <!-- Add Review Button -->
                            {% if app.user %}
                                <div class=\"mt-4\">
                                    <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#reviewModal\">
                                        <i class=\"fas fa-star me-2\"></i>Write a Review
                                    </button>
                                </div>
                            {% else %}
                                <div class=\"alert alert-info mt-4\">
                                    <a href=\"{{ path('app_login') }}\">Login</a> to write a review.
                                </div>
                            {% endif %}
                        </div>
                    </div>

                    <!-- Shipping Tab -->
                    <div class=\"tab-pane fade\" id=\"shipping\" role=\"tabpanel\">
                        <div class=\"p-4\">
                            <h5>Shipping Information</h5>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h6><i class=\"fas fa-truck text-success me-2\"></i>Standard Shipping</h6>
                                    <ul>
                                        <li>Free shipping on orders over 150 TND</li>
                                        <li>7 TND shipping fee for orders under 150 TND</li>
                                        <li>Delivery within 3-5 business days</li>
                                    </ul>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6><i class=\"fas fa-undo text-info me-2\"></i>Returns</h6>
                                    <ul>
                                        <li>30-day return policy</li>
                                        <li>Items must be in original condition</li>
                                        <li>Free return shipping</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <div class=\"row mt-5\">
            <div class=\"col-12\">
                <h3>Related Products</h3>
                <!-- You can add related products here -->
            </div>
        </div>
    </div>

    <!-- Review Modal -->
    {% if app.user %}
        <div class=\"modal fade\" id=\"reviewModal\" tabindex=\"-1\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Write a Review</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                    </div>
                    <form action=\"#\" method=\"post\">
                        <div class=\"modal-body\">
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Rating</label>
                                <div class=\"rating-input\">
                                    {% for i in 1..5 %}
                                        <input type=\"radio\" name=\"rating\" value=\"{{ i }}\" id=\"star{{ i }}\" required>
                                        <label for=\"star{{ i }}\"><i class=\"fas fa-star\"></i></label>
                                    {% endfor %}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"comment\" class=\"form-label\">Comment</label>
                                <textarea class=\"form-control\" id=\"comment\" name=\"comment\" rows=\"4\" placeholder=\"Share your experience with this product...\"></textarea>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                            <button type=\"submit\" class=\"btn btn-primary\">Submit Review</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block stylesheets %}
    <style>
        .product-main-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            cursor: zoom-in;
        }

        .product-image-container {
            position: relative;
            overflow: hidden;
            border-radius: 0.5rem;
        }

        .image-zoom-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            color: white;
            font-size: 2rem;
        }

        .product-image-container:hover .image-zoom-overlay {
            opacity: 1;
        }

        .thumbnail-image {
            height: 80px;
            object-fit: cover;
            cursor: pointer;
            border: 2px solid transparent;
            transition: border-color 0.3s ease;
        }

        .thumbnail-image.active,
        .thumbnail-image:hover {
            border-color: var(--bs-primary);
        }

        .quantity-selector {
            display: flex;
            align-items: center;
        }

        .rating-input {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
        }

        .rating-input input {
            display: none;
        }

        .rating-input label {
            color: #ddd;
            font-size: 1.5rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .rating-input input:checked ~ label,
        .rating-input label:hover,
        .rating-input label:hover ~ label {
            color: #ffc107;
        }

        .product-title {
            font-size: 2rem;
            font-weight: 600;
        }

        .price-current {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .add-to-cart-btn {
            transition: all 0.3s ease;
        }

        .add-to-cart-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .review-item {
            transition: box-shadow 0.3s ease;
        }

        .review-item:hover {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
{% endblock %}

{% block javascripts %}
    <script>
        function changeMainImage(src) {
            document.getElementById('mainImage').src = src;

            // Update active thumbnail
            document.querySelectorAll('.thumbnail-image').forEach(img => {
                img.classList.remove('active');
            });
            event.target.classList.add('active');
        }

        function increaseQuantity() {
            const input = document.getElementById('quantity');
            const max = parseInt(input.getAttribute('max'));
            const current = parseInt(input.value);

            if (current < max) {
                input.value = current + 1;
            }
        }

        function decreaseQuantity() {
            const input = document.getElementById('quantity');
            const min = parseInt(input.getAttribute('min'));
            const current = parseInt(input.value);

            if (current > min) {
                input.value = current - 1;
            }
        }

        function addToWishlist(productId) {
            // Implement wishlist functionality
            alert('Wishlist functionality would be implemented here');
        }

        function shareProduct() {
            if (navigator.share) {
                navigator.share({
                    title: '{{ product.name }}',
                    text: '{{ product.description|slice(0, 100) }}...',
                    url: window.location.href
                });
            } else {
                // Fallback: copy URL to clipboard
                navigator.clipboard.writeText(window.location.href).then(() => {
                    alert('Product URL copied to clipboard!');
                });
            }
        }

        // Add to cart with animation
        document.querySelector('.add-to-cart-form')?.addEventListener('submit', function(e) {
            const button = this.querySelector('.add-to-cart-btn');
            const originalText = button.innerHTML;

            button.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i>Adding...';
            button.disabled = true;

            // Re-enable after a short delay (form submits anyway)
            setTimeout(() => {
                button.innerHTML = '<i class=\"fas fa-check me-2\"></i>Added!';
                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.disabled = false;
                }, 1000);
            }, 500);
        });
    </script>
{% endblock %}", "product/show.html.twig", "C:\\Users\\Raed\\e-commerce\\e-commerce\\templates\\product\\show.html.twig");
    }
}
