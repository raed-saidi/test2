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

/* home/index.html.twig */
class __TwigTemplate_f1991474eb3b16027c9a5eacf343f232 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield "OnlyBrands - Premium Products";
        
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
        yield "    <!-- Hero Section -->
    <section class=\"hero-section\">
        <div class=\"hero-background\"></div>
        <div class=\"container\">
            <div class=\"row align-items-center min-vh-100\">
                <div class=\"col-lg-6\">
                    <div class=\"hero-content animate-slideInLeft\">
                        <h1 class=\"hero-title\">
                            Welcome to <span class=\"text-gradient\">OnlyBrands</span>
                        </h1>
                        <p class=\"hero-subtitle\">
                            Discover premium products from the world's most trusted brands.
                            Experience quality, style, and innovation like never before.
                        </p>
                        <div class=\"hero-buttons\">
                            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"btn btn-gradient btn-lg me-3\">
                                <i class=\"fas fa-shopping-bag me-2\"></i> Shop Now
                            </a>
                            <a href=\"#categories\" class=\"btn btn-outline btn-lg\">
                                <i class=\"fas fa-compass me-2\"></i> Explore
                            </a>
                        </div>
                        <div class=\"hero-stats mt-4\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <div class=\"stat-item\">
                                        <h3 class=\"stat-number\">1000+</h3>
                                        <p class=\"stat-label\">Products</p>
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"stat-item\">
                                        <h3 class=\"stat-number\">50+</h3>
                                        <p class=\"stat-label\">Brands</p>
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"stat-item\">
                                        <h3 class=\"stat-number\">24/7</h3>
                                        <p class=\"stat-label\">Support</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"hero-visual animate-slideInRight\">
                        <div class=\"floating-card\">
                            <img src=\"https://via.placeholder.com/600x400?text=Premium+Products\" alt=\"Premium Products\" class=\"img-fluid rounded-3\">
                            <div class=\"floating-badge\">
                                <i class=\"fas fa-star text-warning\"></i>
                                <span>Premium Quality</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"scroll-indicator\">
            <a href=\"#categories\" class=\"scroll-down\">
                <i class=\"fas fa-chevron-down\"></i>
            </a>
        </div>
    </section>

    <!-- Categories Section -->
    <section id=\"categories\" class=\"categories-section py-5\">
        <div class=\"container\">
            <div class=\"section-header text-center mb-5 reveal reveal-hidden\">
                <h2 class=\"section-title\">Shop by Category</h2>
                <p class=\"section-subtitle\">Explore our carefully curated collection of premium brands</p>
            </div>

            <div class=\"row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4\">
                ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 82, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 83
            yield "                    <div class=\"col reveal reveal-hidden\" style=\"transition-delay: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 83) * 0.1), "html", null, true);
            yield "s\">
                        <a href=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index", ["category" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\" class=\"category-card\">
                            <div class=\"category-icon\">
                                <i class=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\CategoryExtension']->getCategoryIcon(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 86)), "html", null, true);
            yield "\"></i>
                            </div>
                            <h5 class=\"category-title\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 88), "html", null, true);
            yield "</h5>
                            <p class=\"category-count\">";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 89)), "html", null, true);
            yield " products</p>
                            <div class=\"category-overlay\">
                                <span class=\"explore-text\">Explore Now</span>
                            </div>
                        </a>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class=\"featured-products-section py-5\">
        <div class=\"container\">
            <div class=\"section-header d-flex justify-content-between align-items-center mb-5 reveal reveal-hidden\">
                <div>
                    <h2 class=\"section-title mb-0\">Featured Products</h2>
                    <p class=\"section-subtitle mb-0\">Handpicked items just for you</p>
                </div>
                <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"btn btn-outline\">
                    View All <i class=\"fas fa-arrow-right ms-2\"></i>
                </a>
            </div>

            <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4\">
                ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["featuredProducts"]) || array_key_exists("featuredProducts", $context) ? $context["featuredProducts"] : (function () { throw new RuntimeError('Variable "featuredProducts" does not exist.', 114, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 115
            yield "                    <div class=\"col reveal reveal-hidden\" style=\"transition-delay: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 115) * 0.1), "html", null, true);
            yield "s\">
                        <div class=\"product-card\">
                            <div class=\"product-img-container\">
                                ";
            // line 118
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 119
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 119))), "html", null, true);
                yield "\" class=\"product-img\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 119), "html", null, true);
                yield "\">
                                ";
            } else {
                // line 121
                yield "                                    <img src=\"https://via.placeholder.com/300x300?text=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 121), 0, 10), "html", null, true);
                yield "\" class=\"product-img\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 121), "html", null, true);
                yield "\">
                                ";
            }
            // line 123
            yield "                                <div class=\"product-overlay\">
                                    <a href=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 124)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-eye me-2\"></i> Quick View
                                    </a>
                                </div>
                                ";
            // line 128
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "averageRating", [], "any", false, false, false, 128) >= 4.5)) {
                // line 129
                yield "                                    <div class=\"product-badge\">
                                        <i class=\"fas fa-crown\"></i> Premium
                                    </div>
                                ";
            }
            // line 133
            yield "                            </div>
                            <div class=\"product-body\">
                                <h5 class=\"product-title\">";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 135), "html", null, true);
            yield "</h5>
                                <p class=\"product-price\">";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 136), 3), "html", null, true);
            yield " TND</p>
                                <p class=\"product-description\">";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 137), 0, 80), "html", null, true);
            yield "...</p>

                                ";
            // line 139
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "averageRating", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 140
                yield "                                    <div class=\"product-rating\">
                                        ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 142
                    yield "                                            ";
                    if (($context["i"] <= Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "averageRating", [], "any", false, false, false, 142), 0, "floor"))) {
                        // line 143
                        yield "                                                <i class=\"fas fa-star\"></i>
                                            ";
                    } elseif (((                    // line 144
$context["i"] <= Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "averageRating", [], "any", false, false, false, 144), 0, "ceil")) && ((Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "averageRating", [], "any", false, false, false, 144), 1) % 1) > 0))) {
                        // line 145
                        yield "                                                <i class=\"fas fa-star-half-alt\"></i>
                                            ";
                    } else {
                        // line 147
                        yield "                                                <i class=\"far fa-star\"></i>
                                            ";
                    }
                    // line 149
                    yield "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                yield "                                        <span class=\"ms-2\">(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 150)), "html", null, true);
                yield ")</span>
                                    </div>
                                ";
            }
            // line 153
            yield "
                                <div class=\"product-footer\">
                                    <form action=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 155)]), "html", null, true);
            yield "\" method=\"post\" class=\"add-to-cart-form\">
                                        <button type=\"submit\" class=\"btn btn-primary add-to-cart-btn\">
                                            <i class=\"fas fa-cart-plus\"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        yield "            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class=\"features-section py-5\">
        <div class=\"container\">
            <div class=\"row row-cols-1 row-cols-md-3 g-4\">
                <div class=\"col reveal reveal-hidden\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"fas fa-shipping-fast\"></i>
                        </div>
                        <h5 class=\"feature-title\">Free Shipping</h5>
                        <p class=\"feature-description\">Free shipping on all orders over 150 TND. Fast and reliable delivery.</p>
                    </div>
                </div>
                <div class=\"col reveal reveal-hidden\" style=\"transition-delay: 0.1s\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"fas fa-undo-alt\"></i>
                        </div>
                        <h5 class=\"feature-title\">Easy Returns</h5>
                        <p class=\"feature-description\">30-day return policy. No questions asked, hassle-free returns.</p>
                    </div>
                </div>
                <div class=\"col reveal reveal-hidden\" style=\"transition-delay: 0.2s\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"fas fa-shield-alt\"></i>
                        </div>
                        <h5 class=\"feature-title\">Secure Payments</h5>
                        <p class=\"feature-description\">Your payment information is always secure with SSL encryption.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class=\"newsletter-section py-5\">
        <div class=\"container\">
            <div class=\"newsletter-card reveal reveal-hidden\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 mb-4 mb-lg-0\">
                        <h3 class=\"newsletter-title\">Stay Updated</h3>
                        <p class=\"newsletter-subtitle\">Get the latest updates, deals, and exclusive offers delivered to your inbox.</p>
                    </div>
                    <div class=\"col-lg-6\">
                        <form class=\"newsletter-form\">
                            <div class=\"input-group\">
                                <input type=\"email\" class=\"form-control\" placeholder=\"Enter your email address\" required>
                                <button class=\"btn white rad btn-gradient\" type=\"submit\">
                                    <i class=\"fas white fa-paper-plane me-2\"></i> Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 230
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 231
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^=\"#\"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Add to cart animation
            document.querySelectorAll('.add-to-cart-form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    const button = this.querySelector('.add-to-cart-btn');
                    const icon = button.querySelector('i');

                    // Add loading state
                    button.disabled = true;
                    icon.className = 'fas fa-spinner fa-spin';

                    // Reset after form submission
                    setTimeout(() => {
                        button.disabled = false;
                        icon.className = 'fas fa-check';

                        setTimeout(() => {
                            icon.className = 'fas fa-cart-plus';
                        }, 1000);
                    }, 500);
                });
            });

            // Newsletter form
            document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
                e.preventDefault();
                const button = this.querySelector('button');
                const originalText = button.innerHTML;

                button.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i> Subscribing...';
                button.disabled = true;

                setTimeout(() => {
                    button.innerHTML = '<i class=\"fas fa-check me-2\"></i> Subscribed!';

                    setTimeout(() => {
                        button.innerHTML = originalText;
                        button.disabled = false;
                        this.reset();
                    }, 2000);
                }, 1000);
            });

            // Brands slider animation
            const brandsTrack = document.querySelector('.brands-track');
            if (brandsTrack) {
                let scrollAmount = 0;
                const scrollSpeed = 1;

                function scrollBrands() {
                    scrollAmount += scrollSpeed;
                    if (scrollAmount >= brandsTrack.scrollWidth / 2) {
                        scrollAmount = 0;
                    }
                    brandsTrack.style.transform = `translateX(-\${scrollAmount}px)`;
                    requestAnimationFrame(scrollBrands);
                }

                scrollBrands();
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
        return "home/index.html.twig";
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
        return array (  470 => 231,  460 => 230,  389 => 165,  365 => 155,  361 => 153,  354 => 150,  348 => 149,  344 => 147,  340 => 145,  338 => 144,  335 => 143,  332 => 142,  328 => 141,  325 => 140,  323 => 139,  318 => 137,  314 => 136,  310 => 135,  306 => 133,  300 => 129,  298 => 128,  291 => 124,  288 => 123,  280 => 121,  272 => 119,  270 => 118,  263 => 115,  246 => 114,  237 => 108,  223 => 96,  202 => 89,  198 => 88,  193 => 86,  188 => 84,  183 => 83,  166 => 82,  103 => 22,  86 => 7,  76 => 6,  59 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/home/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}OnlyBrands - Premium Products{% endblock %}

{% block body %}
    <!-- Hero Section -->
    <section class=\"hero-section\">
        <div class=\"hero-background\"></div>
        <div class=\"container\">
            <div class=\"row align-items-center min-vh-100\">
                <div class=\"col-lg-6\">
                    <div class=\"hero-content animate-slideInLeft\">
                        <h1 class=\"hero-title\">
                            Welcome to <span class=\"text-gradient\">OnlyBrands</span>
                        </h1>
                        <p class=\"hero-subtitle\">
                            Discover premium products from the world's most trusted brands.
                            Experience quality, style, and innovation like never before.
                        </p>
                        <div class=\"hero-buttons\">
                            <a href=\"{{ path('product_index') }}\" class=\"btn btn-gradient btn-lg me-3\">
                                <i class=\"fas fa-shopping-bag me-2\"></i> Shop Now
                            </a>
                            <a href=\"#categories\" class=\"btn btn-outline btn-lg\">
                                <i class=\"fas fa-compass me-2\"></i> Explore
                            </a>
                        </div>
                        <div class=\"hero-stats mt-4\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <div class=\"stat-item\">
                                        <h3 class=\"stat-number\">1000+</h3>
                                        <p class=\"stat-label\">Products</p>
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"stat-item\">
                                        <h3 class=\"stat-number\">50+</h3>
                                        <p class=\"stat-label\">Brands</p>
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"stat-item\">
                                        <h3 class=\"stat-number\">24/7</h3>
                                        <p class=\"stat-label\">Support</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"hero-visual animate-slideInRight\">
                        <div class=\"floating-card\">
                            <img src=\"https://via.placeholder.com/600x400?text=Premium+Products\" alt=\"Premium Products\" class=\"img-fluid rounded-3\">
                            <div class=\"floating-badge\">
                                <i class=\"fas fa-star text-warning\"></i>
                                <span>Premium Quality</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"scroll-indicator\">
            <a href=\"#categories\" class=\"scroll-down\">
                <i class=\"fas fa-chevron-down\"></i>
            </a>
        </div>
    </section>

    <!-- Categories Section -->
    <section id=\"categories\" class=\"categories-section py-5\">
        <div class=\"container\">
            <div class=\"section-header text-center mb-5 reveal reveal-hidden\">
                <h2 class=\"section-title\">Shop by Category</h2>
                <p class=\"section-subtitle\">Explore our carefully curated collection of premium brands</p>
            </div>

            <div class=\"row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4\">
                {% for category in categories %}
                    <div class=\"col reveal reveal-hidden\" style=\"transition-delay: {{ loop.index0 * 0.1 }}s\">
                        <a href=\"{{ path('product_index', {'category': category.id}) }}\" class=\"category-card\">
                            <div class=\"category-icon\">
                                <i class=\"{{ getCategoryIcon(category.name) }}\"></i>
                            </div>
                            <h5 class=\"category-title\">{{ category.name }}</h5>
                            <p class=\"category-count\">{{ category.products|length }} products</p>
                            <div class=\"category-overlay\">
                                <span class=\"explore-text\">Explore Now</span>
                            </div>
                        </a>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class=\"featured-products-section py-5\">
        <div class=\"container\">
            <div class=\"section-header d-flex justify-content-between align-items-center mb-5 reveal reveal-hidden\">
                <div>
                    <h2 class=\"section-title mb-0\">Featured Products</h2>
                    <p class=\"section-subtitle mb-0\">Handpicked items just for you</p>
                </div>
                <a href=\"{{ path('product_index') }}\" class=\"btn btn-outline\">
                    View All <i class=\"fas fa-arrow-right ms-2\"></i>
                </a>
            </div>

            <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4\">
                {% for product in featuredProducts %}
                    <div class=\"col reveal reveal-hidden\" style=\"transition-delay: {{ loop.index0 * 0.1 }}s\">
                        <div class=\"product-card\">
                            <div class=\"product-img-container\">
                                {% if product.image %}
                                    <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" class=\"product-img\" alt=\"{{ product.name }}\">
                                {% else %}
                                    <img src=\"https://via.placeholder.com/300x300?text={{ product.name|slice(0, 10) }}\" class=\"product-img\" alt=\"{{ product.name }}\">
                                {% endif %}
                                <div class=\"product-overlay\">
                                    <a href=\"{{ path('product_show', {'id': product.id}) }}\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-eye me-2\"></i> Quick View
                                    </a>
                                </div>
                                {% if product.averageRating >= 4.5 %}
                                    <div class=\"product-badge\">
                                        <i class=\"fas fa-crown\"></i> Premium
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"product-body\">
                                <h5 class=\"product-title\">{{ product.name }}</h5>
                                <p class=\"product-price\">{{ product.price|number_format(3) }} TND</p>
                                <p class=\"product-description\">{{ product.description|slice(0, 80) }}...</p>

                                {% if product.averageRating %}
                                    <div class=\"product-rating\">
                                        {% for i in 1..5 %}
                                            {% if i <= product.averageRating|round(0, 'floor') %}
                                                <i class=\"fas fa-star\"></i>
                                            {% elseif i <= product.averageRating|round(0, 'ceil') and product.averageRating|round(1) % 1 > 0 %}
                                                <i class=\"fas fa-star-half-alt\"></i>
                                            {% else %}
                                                <i class=\"far fa-star\"></i>
                                            {% endif %}
                                        {% endfor %}
                                        <span class=\"ms-2\">({{ product.reviews|length }})</span>
                                    </div>
                                {% endif %}

                                <div class=\"product-footer\">
                                    <form action=\"{{ path('cart_add', {'id': product.id}) }}\" method=\"post\" class=\"add-to-cart-form\">
                                        <button type=\"submit\" class=\"btn btn-primary add-to-cart-btn\">
                                            <i class=\"fas fa-cart-plus\"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class=\"features-section py-5\">
        <div class=\"container\">
            <div class=\"row row-cols-1 row-cols-md-3 g-4\">
                <div class=\"col reveal reveal-hidden\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"fas fa-shipping-fast\"></i>
                        </div>
                        <h5 class=\"feature-title\">Free Shipping</h5>
                        <p class=\"feature-description\">Free shipping on all orders over 150 TND. Fast and reliable delivery.</p>
                    </div>
                </div>
                <div class=\"col reveal reveal-hidden\" style=\"transition-delay: 0.1s\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"fas fa-undo-alt\"></i>
                        </div>
                        <h5 class=\"feature-title\">Easy Returns</h5>
                        <p class=\"feature-description\">30-day return policy. No questions asked, hassle-free returns.</p>
                    </div>
                </div>
                <div class=\"col reveal reveal-hidden\" style=\"transition-delay: 0.2s\">
                    <div class=\"feature-card\">
                        <div class=\"feature-icon\">
                            <i class=\"fas fa-shield-alt\"></i>
                        </div>
                        <h5 class=\"feature-title\">Secure Payments</h5>
                        <p class=\"feature-description\">Your payment information is always secure with SSL encryption.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class=\"newsletter-section py-5\">
        <div class=\"container\">
            <div class=\"newsletter-card reveal reveal-hidden\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 mb-4 mb-lg-0\">
                        <h3 class=\"newsletter-title\">Stay Updated</h3>
                        <p class=\"newsletter-subtitle\">Get the latest updates, deals, and exclusive offers delivered to your inbox.</p>
                    </div>
                    <div class=\"col-lg-6\">
                        <form class=\"newsletter-form\">
                            <div class=\"input-group\">
                                <input type=\"email\" class=\"form-control\" placeholder=\"Enter your email address\" required>
                                <button class=\"btn white rad btn-gradient\" type=\"submit\">
                                    <i class=\"fas white fa-paper-plane me-2\"></i> Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}

{% block javascripts %}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^=\"#\"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Add to cart animation
            document.querySelectorAll('.add-to-cart-form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    const button = this.querySelector('.add-to-cart-btn');
                    const icon = button.querySelector('i');

                    // Add loading state
                    button.disabled = true;
                    icon.className = 'fas fa-spinner fa-spin';

                    // Reset after form submission
                    setTimeout(() => {
                        button.disabled = false;
                        icon.className = 'fas fa-check';

                        setTimeout(() => {
                            icon.className = 'fas fa-cart-plus';
                        }, 1000);
                    }, 500);
                });
            });

            // Newsletter form
            document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
                e.preventDefault();
                const button = this.querySelector('button');
                const originalText = button.innerHTML;

                button.innerHTML = '<i class=\"fas fa-spinner fa-spin me-2\"></i> Subscribing...';
                button.disabled = true;

                setTimeout(() => {
                    button.innerHTML = '<i class=\"fas fa-check me-2\"></i> Subscribed!';

                    setTimeout(() => {
                        button.innerHTML = originalText;
                        button.disabled = false;
                        this.reset();
                    }, 2000);
                }, 1000);
            });

            // Brands slider animation
            const brandsTrack = document.querySelector('.brands-track');
            if (brandsTrack) {
                let scrollAmount = 0;
                const scrollSpeed = 1;

                function scrollBrands() {
                    scrollAmount += scrollSpeed;
                    if (scrollAmount >= brandsTrack.scrollWidth / 2) {
                        scrollAmount = 0;
                    }
                    brandsTrack.style.transform = `translateX(-\${scrollAmount}px)`;
                    requestAnimationFrame(scrollBrands);
                }

                scrollBrands();
            }
        });
    </script>
{% endblock %}", "home/index.html.twig", "C:\\Users\\Raed\\e-commerce\\e-commerce\\templates\\home\\index.html.twig");
    }
}
