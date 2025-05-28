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

/* debug/auth.html.twig */
class __TwigTemplate_77d0d6e7f3acf1534104a87d2c4765ea extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "debug/auth.html.twig"));

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

        yield "Authentication Debug";
        
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
        yield "    <div class=\"container mt-4\">
        <h1>Authentication Debug</h1>

        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <h2 class=\"h5 mb-0\">Current User</h2>
            </div>
            <div class=\"card-body\">
                ";
        // line 15
        if ((($tmp = (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 15, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "                    <table class=\"table\">
                        <tbody>
                        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 19
                yield "                            <tr>
                                <th>";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "</th>
                                <td>
                                    ";
                // line 22
                if (is_iterable($context["value"])) {
                    // line 23
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($context["value"], ", "), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 25
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "
                                    ";
                }
                // line 27
                yield "                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "                        </tbody>
                    </table>
                ";
        } else {
            // line 33
            yield "                    <p class=\"text-muted\">No user is currently logged in.</p>
                ";
        }
        // line 35
        yield "            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header\">
                <h2 class=\"h5 mb-0\">Sample Users</h2>
            </div>
            <div class=\"card-body\">
                ";
        // line 43
        if ((($tmp = (isset($context["sampleUsers"]) || array_key_exists("sampleUsers", $context) ? $context["sampleUsers"] : (function () { throw new RuntimeError('Variable "sampleUsers" does not exist.', 43, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Google User</th>
                            <th>Roles</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sampleUsers"]) || array_key_exists("sampleUsers", $context) ? $context["sampleUsers"] : (function () { throw new RuntimeError('Variable "sampleUsers" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 57
                yield "                            <tr>
                                <td>";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 58), "html", null, true);
                yield "</td>
                                <td>";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 59), "html", null, true);
                yield "</td>
                                <td>";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 60), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 60), "html", null, true);
                yield "</td>
                                <td>";
                // line 61
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isGoogleUser", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Yes") : ("No"));
                yield "</td>
                                <td>";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 62), ", "), "html", null, true);
                yield "</td>
                                <td>
                                    <form class=\"d-inline\" onsubmit=\"return testPassword(";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 64), "html", null, true);
                yield ");\">
                                        <div class=\"input-group input-group-sm\">
                                            <input type=\"password\" id=\"password-";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 66), "html", null, true);
                yield "\" class=\"form-control\" placeholder=\"Test password\">
                                            <button type=\"submit\" class=\"btn btn-outline-primary\">Test</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "                        </tbody>
                    </table>
                ";
        } else {
            // line 76
            yield "                    <p class=\"text-muted\">No users found in the database.</p>
                ";
        }
        // line 78
        yield "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        yield "    <script>
        function testPassword(userId) {
            const password = document.getElementById(`password-\${userId}`).value;
            if (!password) {
                alert('Please enter a password to test');
                return false;
            }

            fetch(`/debug/test-password/\${userId}/\${encodeURIComponent(password)}`)
                .then(response => response.text())
                .then(result => {
                    alert(result);
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error testing password');
                });

            return false;
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
        return "debug/auth.html.twig";
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
        return array (  249 => 84,  239 => 83,  228 => 78,  224 => 76,  219 => 73,  206 => 66,  201 => 64,  196 => 62,  192 => 61,  186 => 60,  182 => 59,  178 => 58,  175 => 57,  171 => 56,  157 => 44,  155 => 43,  145 => 35,  141 => 33,  136 => 30,  128 => 27,  122 => 25,  116 => 23,  114 => 22,  109 => 20,  106 => 19,  102 => 18,  98 => 16,  96 => 15,  86 => 7,  76 => 6,  59 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/debug/auth.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Authentication Debug{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1>Authentication Debug</h1>

        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <h2 class=\"h5 mb-0\">Current User</h2>
            </div>
            <div class=\"card-body\">
                {% if currentUser %}
                    <table class=\"table\">
                        <tbody>
                        {% for key, value in currentUser %}
                            <tr>
                                <th>{{ key }}</th>
                                <td>
                                    {% if value is iterable %}
                                        {{ value|join(', ') }}
                                    {% else %}
                                        {{ value }}
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                {% else %}
                    <p class=\"text-muted\">No user is currently logged in.</p>
                {% endif %}
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-header\">
                <h2 class=\"h5 mb-0\">Sample Users</h2>
            </div>
            <div class=\"card-body\">
                {% if sampleUsers %}
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Google User</th>
                            <th>Roles</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for user in sampleUsers %}
                            <tr>
                                <td>{{ user.id }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.firstName }} {{ user.lastName }}</td>
                                <td>{{ user.isGoogleUser ? 'Yes' : 'No' }}</td>
                                <td>{{ user.roles|join(', ') }}</td>
                                <td>
                                    <form class=\"d-inline\" onsubmit=\"return testPassword({{ user.id }});\">
                                        <div class=\"input-group input-group-sm\">
                                            <input type=\"password\" id=\"password-{{ user.id }}\" class=\"form-control\" placeholder=\"Test password\">
                                            <button type=\"submit\" class=\"btn btn-outline-primary\">Test</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                {% else %}
                    <p class=\"text-muted\">No users found in the database.</p>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        function testPassword(userId) {
            const password = document.getElementById(`password-\${userId}`).value;
            if (!password) {
                alert('Please enter a password to test');
                return false;
            }

            fetch(`/debug/test-password/\${userId}/\${encodeURIComponent(password)}`)
                .then(response => response.text())
                .then(result => {
                    alert(result);
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error testing password');
                });

            return false;
        }
    </script>
{% endblock %}", "debug/auth.html.twig", "C:\\Users\\Raed\\e-commerce\\e-commerce\\templates\\debug\\auth.html.twig");
    }
}
