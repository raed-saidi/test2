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

/* base.html.twig */
class __TwigTemplate_0c596791b0f1382027db79c15bfbdd41 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" data-theme=\"light\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        yield "\">
    ";
        // line 14
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 15
        yield "</head>
<body>
<!-- Navigation -->
<nav class=\"navbar navbar-expand-lg navbar-dark glass-nav fixed-top\">
    <div class=\"container\">
        <a class=\"navbar-brand fw-bold text-gradient\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">
           OnlyBrands
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">
                        <i class=\"fas fa-home me-1\"></i> Home
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\">
                        <i class=\"fas fa-shopping-bag me-1\"></i> Products
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\">
                        <i class=\"fas fa-shopping-cart me-1\"></i> Cart
                        ";
        // line 43
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "session", [], "any", false, false, false, 43), "get", ["cart"], "method", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "                            <span class=\"badge bg-primary ms-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "session", [], "any", false, false, false, 44), "get", ["cart"], "method", false, false, false, 44)), "html", null, true);
            yield "</span>
                        ";
        }
        // line 46
        yield "                    </a>
                </li>
            </ul>

            <ul class=\"navbar-nav\">


                ";
        // line 53
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "                    <!-- User Dropdown -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\">
                            <i class=\"fas fa-user me-1\"></i>
                            ";
            // line 58
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "firstName", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "firstName", [], "any", false, false, false, 58), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "email", [], "any", false, false, false, 58), "@"), 0, [], "array", false, false, false, 58), "html", null, true)));
            yield "
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end glass-dropdown\">
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 62
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">
                                    <i class=\"fas fa-user me-2\"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 67
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_orders");
            yield "\">
                                    <i class=\"fas fa-shopping-bag me-2\"></i> My Orders
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 72
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_settings");
            yield "\">
                                    <i class=\"fas fa-cog me-2\"></i> Settings
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 78
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                    <i class=\"fas fa-sign-out-alt me-2\"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                ";
        } else {
            // line 85
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 86
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                            <i class=\"fas fa-sign-in-alt me-1\"></i> Login
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 91
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">
                            <i class=\"fas fa-user-plus me-1\"></i> Register
                        </a>
                    </li>
                ";
        }
        // line 96
        yield "            </ul>
        </div>
    </div>
</nav>

<!-- Flash Messages -->
";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "flashes", [], "any", false, false, false, 102));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 103
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 104
                yield "        <div class=\"alert alert-";
                yield ((($context["type"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true)));
                yield " alert-dismissible fade show flash-message\" role=\"alert\">
            ";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "
<!-- Main Content -->
<main class=\"main-content\">
    ";
        // line 113
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 114
        yield "</main>

<!-- Footer -->
<footer class=\"footer glass-footer mt-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 mb-4\">
                <h5 class=\"text-gradient mb-3\">OnlyBrands</h5>
                <p class=\"text-light-gray\">Your trusted destination for premium products from the world's leading brands.</p>
                <div class=\"social-links\">
                    <a href=\"#\" class=\"social-link\"><i class=\"fab fa-facebook\"></i></a>
                    <a href=\"#\" class=\"social-link\"><i class=\"fab fa-twitter\"></i></a>
                    <a href=\"#\" class=\"social-link\"><i class=\"fab fa-instagram\"></i></a>
                    <a href=\"#\" class=\"social-link\"><i class=\"fab fa-linkedin\"></i></a>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-6 mb-4\">
                <h6 class=\"mb-3\">Quick Links</h6>
                <ul class=\"list-unstyled\">
                    <li><a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"footer-link\">Home</a></li>
                    <li><a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"footer-link\">Products</a></li>
                    <li><a href=\"#\" class=\"footer-link\">About Us</a></li>
                    <li><a href=\"#\" class=\"footer-link\">Contact</a></li>
                </ul>
            </div>
            <div class=\"col-lg-2 col-md-6 mb-4\">
                <h6 class=\"mb-3\">Categories</h6>
                <ul class=\"list-unstyled\">
                    <li><a href=\"#\" class=\"footer-link\">Electronics</a></li>
                    <li><a href=\"#\" class=\"footer-link\">Clothing</a></li>
                    <li><a href=\"#\" class=\"footer-link\">Books</a></li>
                    <li><a href=\"#\" class=\"footer-link\">Home & Garden</a></li>
                </ul>
            </div>
            <div class=\"col-lg-2 col-md-6 mb-4\">
                <h6 class=\"mb-3\">Support</h6>
                <ul class=\"list-unstyled\">
                    <li><a href=\"#\" class=\"footer-link\">Help Center</a></li>
                    <li><a href=\"#\" class=\"footer-link\">Shipping Info</a></li>
                    <li><a href=\"#\" class=\"footer-link\">Returns</a></li>
                    <li><a href=\"#\" class=\"footer-link\">Size Guide</a></li>
                </ul>
            </div>
            <div class=\"col-lg-2 col-md-6 mb-4\">
                <h6 class=\"mb-3\">Account</h6>
                <ul class=\"list-unstyled\">
                    ";
        // line 160
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "user", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 161
            yield "                        <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"footer-link\">My Profile</a></li>
                        <li><a href=\"";
            // line 162
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_orders");
            yield "\" class=\"footer-link\">My Orders</a></li>
                        <li><a href=\"";
            // line 163
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
            yield "\" class=\"footer-link\">My Cart</a></li>
                    ";
        } else {
            // line 165
            yield "                        <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"footer-link\">Login</a></li>
                        <li><a href=\"";
            // line 166
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"footer-link\">Register</a></li>
                    ";
        }
        // line 168
        yield "                </ul>
            </div>
        </div>
        <hr class=\"border-light-gray my-4\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6\">
                <p class=\"text-light-gray mb-0\">&copy; ";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " OnlyBrands. All rights reserved.</p>
            </div>
            <div class=\"col-md-6 text-md-end\">
                <div class=\"payment-methods\">
                    <i class=\"fab fa-cc-visa fa-2x me-2\"></i>
                    <i class=\"fab fa-cc-mastercard fa-2x me-2\"></i>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
";
        // line 188
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 189
        yield "</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "OnlyBrands";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 188
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  408 => 188,  392 => 113,  376 => 14,  359 => 6,  350 => 189,  348 => 188,  331 => 174,  323 => 168,  318 => 166,  313 => 165,  308 => 163,  304 => 162,  299 => 161,  297 => 160,  268 => 134,  264 => 133,  243 => 114,  241 => 113,  236 => 110,  222 => 105,  217 => 104,  212 => 103,  208 => 102,  200 => 96,  192 => 91,  184 => 86,  181 => 85,  171 => 78,  162 => 72,  154 => 67,  146 => 62,  139 => 58,  133 => 54,  131 => 53,  122 => 46,  116 => 44,  114 => 43,  109 => 41,  101 => 36,  93 => 31,  79 => 20,  72 => 15,  70 => 14,  66 => 13,  56 => 6,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" data-theme=\"light\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}OnlyBrands{% endblock %}</title>

    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
    {% block stylesheets %}{% endblock %}
</head>
<body>
<!-- Navigation -->
<nav class=\"navbar navbar-expand-lg navbar-dark glass-nav fixed-top\">
    <div class=\"container\">
        <a class=\"navbar-brand fw-bold text-gradient\" href=\"{{ path('home') }}\">
           OnlyBrands
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('home') }}\">
                        <i class=\"fas fa-home me-1\"></i> Home
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('product_index') }}\">
                        <i class=\"fas fa-shopping-bag me-1\"></i> Products
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('cart_index') }}\">
                        <i class=\"fas fa-shopping-cart me-1\"></i> Cart
                        {% if app.session.get('cart') %}
                            <span class=\"badge bg-primary ms-1\">{{ app.session.get('cart')|length }}</span>
                        {% endif %}
                    </a>
                </li>
            </ul>

            <ul class=\"navbar-nav\">


                {% if app.user %}
                    <!-- User Dropdown -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\">
                            <i class=\"fas fa-user me-1\"></i>
                            {{ app.user.firstName ? app.user.firstName : app.user.email|split('@')[0] }}
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end glass-dropdown\">
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_profile') }}\">
                                    <i class=\"fas fa-user me-2\"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_profile_orders') }}\">
                                    <i class=\"fas fa-shopping-bag me-2\"></i> My Orders
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_profile_settings') }}\">
                                    <i class=\"fas fa-cog me-2\"></i> Settings
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                                    <i class=\"fas fa-sign-out-alt me-2\"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_login') }}\">
                            <i class=\"fas fa-sign-in-alt me-1\"></i> Login
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_register') }}\">
                            <i class=\"fas fa-user-plus me-1\"></i> Register
                        </a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>

<!-- Flash Messages -->
{% for type, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ type == 'error' ? 'danger' : type }} alert-dismissible fade show flash-message\" role=\"alert\">
            {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}
{% endfor %}

<!-- Main Content -->
<main class=\"main-content\">
    {% block body %}{% endblock %}
</main>

<!-- Footer -->
<footer class=\"footer glass-footer mt-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 mb-4\">
                <h5 class=\"text-gradient mb-3\">OnlyBrands</h5>
                <p class=\"text-light-gray\">Your trusted destination for premium products from the world's leading brands.</p>
                <div class=\"social-links\">
                    <a href=\"#\" class=\"social-link\"><i class=\"fab fa-facebook\"></i></a>
                    <a href=\"#\" class=\"social-link\"><i class=\"fab fa-twitter\"></i></a>
                    <a href=\"#\" class=\"social-link\"><i class=\"fab fa-instagram\"></i></a>
                    <a href=\"#\" class=\"social-link\"><i class=\"fab fa-linkedin\"></i></a>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-6 mb-4\">
                <h6 class=\"mb-3\">Quick Links</h6>
                <ul class=\"list-unstyled\">
                    <li><a href=\"{{ path('home') }}\" class=\"footer-link\">Home</a></li>
                    <li><a href=\"{{ path('product_index') }}\" class=\"footer-link\">Products</a></li>
                    <li><a href=\"#\" class=\"footer-link\">About Us</a></li>
                    <li><a href=\"#\" class=\"footer-link\">Contact</a></li>
                </ul>
            </div>
            <div class=\"col-lg-2 col-md-6 mb-4\">
                <h6 class=\"mb-3\">Categories</h6>
                <ul class=\"list-unstyled\">
                    <li><a href=\"#\" class=\"footer-link\">Electronics</a></li>
                    <li><a href=\"#\" class=\"footer-link\">Clothing</a></li>
                    <li><a href=\"#\" class=\"footer-link\">Books</a></li>
                    <li><a href=\"#\" class=\"footer-link\">Home & Garden</a></li>
                </ul>
            </div>
            <div class=\"col-lg-2 col-md-6 mb-4\">
                <h6 class=\"mb-3\">Support</h6>
                <ul class=\"list-unstyled\">
                    <li><a href=\"#\" class=\"footer-link\">Help Center</a></li>
                    <li><a href=\"#\" class=\"footer-link\">Shipping Info</a></li>
                    <li><a href=\"#\" class=\"footer-link\">Returns</a></li>
                    <li><a href=\"#\" class=\"footer-link\">Size Guide</a></li>
                </ul>
            </div>
            <div class=\"col-lg-2 col-md-6 mb-4\">
                <h6 class=\"mb-3\">Account</h6>
                <ul class=\"list-unstyled\">
                    {% if app.user %}
                        <li><a href=\"{{ path('app_profile') }}\" class=\"footer-link\">My Profile</a></li>
                        <li><a href=\"{{ path('app_profile_orders') }}\" class=\"footer-link\">My Orders</a></li>
                        <li><a href=\"{{ path('cart_index') }}\" class=\"footer-link\">My Cart</a></li>
                    {% else %}
                        <li><a href=\"{{ path('app_login') }}\" class=\"footer-link\">Login</a></li>
                        <li><a href=\"{{ path('app_register') }}\" class=\"footer-link\">Register</a></li>
                    {% endif %}
                </ul>
            </div>
        </div>
        <hr class=\"border-light-gray my-4\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6\">
                <p class=\"text-light-gray mb-0\">&copy; {{ 'now'|date('Y') }} OnlyBrands. All rights reserved.</p>
            </div>
            <div class=\"col-md-6 text-md-end\">
                <div class=\"payment-methods\">
                    <i class=\"fab fa-cc-visa fa-2x me-2\"></i>
                    <i class=\"fab fa-cc-mastercard fa-2x me-2\"></i>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>", "base.html.twig", "C:\\Users\\Raed\\e-commerce\\e-commerce\\templates\\base.html.twig");
    }
}
