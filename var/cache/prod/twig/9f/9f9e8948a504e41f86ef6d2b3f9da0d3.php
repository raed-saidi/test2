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

/* product/index.html.twig */
class __TwigTemplate_01a5d695e1e8409252f4d69e619dfa08 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

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

        yield "Products";
        
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
        <h1>Products</h1>

        ";
        // line 9
        if ((array_key_exists("products", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 9, $this->source); })())) > 0))) {
            // line 10
            yield "            <div class=\"row\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 12
                yield "                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            ";
                // line 14
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 15
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 15)]), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15), "html", null, true);
                    yield "\" class=\"card-img-top\" style=\"height: 200px; object-fit: cover;\">
                            ";
                } else {
                    // line 17
                    yield "                                <img src=\"https://via.placeholder.com/300x200?text=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17)), "html", null, true);
                    yield "\" alt=\"No image available\" class=\"card-img-top\" style=\"height: 200px; object-fit: cover;\">
                            ";
                }
                // line 19
                yield "                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20), "html", null, true);
                yield "</h5>
                                <p class=\"card-text\">
                                    ";
                // line 22
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 22)) > 100)) {
                    // line 23
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 23), 0, 100), "html", null, true);
                    yield "...
                                    ";
                } else {
                    // line 25
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 25), "html", null, true);
                    yield "
                                    ";
                }
                // line 27
                yield "                                </p>
                                <p class=\"card-text\"><strong>";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28), 3), "html", null, true);
                yield " TND</strong></p>
                                <p class=\"card-text\"><small class=\"text-muted\">Stock: ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 29), "html", null, true);
                yield "</small></p>
                                ";
                // line 30
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 31
                    yield "                                    <span class=\"badge bg-primary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
                    yield "</span>
                                ";
                }
                // line 33
                yield "                                <div class=\"mt-3\">
                                    <a href=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm\">
                                        View Details
                                    </a>
                                    <form method=\"post\" action=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                yield "\" style=\"display:inline-block;\">
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" />
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("add-to-cart-" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 39))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-success btn-sm ms-2\">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "            </div>
        ";
        } else {
            // line 51
            yield "            <div class=\"alert alert-info\">
                <h4>No products found</h4>
                <p>No products are available at the moment.</p>
                <a href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            yield "\" class=\"btn btn-primary\">Go to Home</a>
            </div>
        ";
        }
        // line 57
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "product/index.html.twig";
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
        return array (  205 => 57,  199 => 54,  194 => 51,  190 => 49,  174 => 39,  169 => 37,  163 => 34,  160 => 33,  154 => 31,  152 => 30,  148 => 29,  144 => 28,  141 => 27,  135 => 25,  129 => 23,  127 => 22,  122 => 20,  119 => 19,  113 => 17,  105 => 15,  103 => 14,  99 => 12,  95 => 11,  92 => 10,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Products{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1>Products</h1>

        {% if products is defined and products|length > 0 %}
            <div class=\"row\">
                {% for product in products %}
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            {% if product.image %}
                                <img src=\"{{ path('product_image', {'id': product.id}) }}\" alt=\"{{ product.name }}\" class=\"card-img-top\" style=\"height: 200px; object-fit: cover;\">
                            {% else %}
                                <img src=\"https://via.placeholder.com/300x200?text={{ product.name|url_encode }}\" alt=\"No image available\" class=\"card-img-top\" style=\"height: 200px; object-fit: cover;\">
                            {% endif %}
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ product.name }}</h5>
                                <p class=\"card-text\">
                                    {% if product.description|length > 100 %}
                                        {{ product.description|slice(0, 100) }}...
                                    {% else %}
                                        {{ product.description }}
                                    {% endif %}
                                </p>
                                <p class=\"card-text\"><strong>{{ product.price|number_format(3) }} TND</strong></p>
                                <p class=\"card-text\"><small class=\"text-muted\">Stock: {{ product.stock }}</small></p>
                                {% if product.category %}
                                    <span class=\"badge bg-primary\">{{ product.category.name }}</span>
                                {% endif %}
                                <div class=\"mt-3\">
                                    <a href=\"{{ path('product_show', {'id': product.id}) }}\" class=\"btn btn-primary btn-sm\">
                                        View Details
                                    </a>
                                    <form method=\"post\" action=\"{{ path('cart_add', {'id': product.id}) }}\" style=\"display:inline-block;\">
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" />
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('add-to-cart-' ~ product.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-success btn-sm ms-2\">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <div class=\"alert alert-info\">
                <h4>No products found</h4>
                <p>No products are available at the moment.</p>
                <a href=\"{{ path('home') }}\" class=\"btn btn-primary\">Go to Home</a>
            </div>
        {% endif %}
    </div>
{% endblock %}", "product/index.html.twig", "C:\\Users\\Raed\\e-commerce\\e-commerce\\templates\\product\\index.html.twig");
    }
}
