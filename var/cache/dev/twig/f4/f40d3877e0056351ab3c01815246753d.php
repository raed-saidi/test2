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

/* registration/register.html.twig */
class __TwigTemplate_eee965141e704a7787418d1a04be4291 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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

        yield "Register";
        
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
        yield "    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"glass-card animate-slideUp\">
                    <div class=\"text-center mb-4\">
                        <h1 class=\"mb-3\">Create an Account</h1>
                        <p class=\"text-light-gray\">Join us and experience the future of shopping</p>
                    </div>

                    ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), 'form_start');
        yield "
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "firstName", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-dark-gray border-0\">
                                    <i class=\"fas fa-user text-light-gray\"></i>
                                </span>
                                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "firstName", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "First Name"]]);
        yield "
                            </div>
                            <div class=\"form-text text-danger\">
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "firstName", [], "any", false, false, false, 27), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"col-md-6 mb-3\">
                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "lastName", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-dark-gray border-0\">
                                    <i class=\"fas fa-user text-light-gray\"></i>
                                </span>
                                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "lastName", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Last Name"]]);
        yield "
                            </div>
                            <div class=\"form-text text-danger\">
                                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "lastName", [], "any", false, false, false, 40), 'errors');
        yield "
                            </div>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-dark-gray border-0\">
                                <i class=\"fas fa-envelope text-light-gray\"></i>
                            </span>
                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email Address"]]);
        yield "
                        </div>
                        <div class=\"form-text text-danger\">
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "email", [], "any", false, false, false, 54), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "plainPassword", [], "any", false, false, false, 59), "first", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Password"]);
        yield "
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-dark-gray border-0\">
                                <i class=\"fas fa-lock text-light-gray\"></i>
                            </span>
                            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "plainPassword", [], "any", false, false, false, 64), "first", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password"]]);
        yield "
                            <button class=\"btn btn-outline-secondary toggle-password\" type=\"button\" data-target=\"first\">
                                <i class=\"fas fa-eye\"></i>
                            </button>
                        </div>
                        <div class=\"form-text text-danger\">
                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "plainPassword", [], "any", false, false, false, 70), "first", [], "any", false, false, false, 70), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "plainPassword", [], "any", false, false, false, 75), "second", [], "any", false, false, false, 75), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Confirm Password"]);
        yield "
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-dark-gray border-0\">
                                <i class=\"fas fa-lock text-light-gray\"></i>
                            </span>
                            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "plainPassword", [], "any", false, false, false, 80), "second", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Confirm Password"]]);
        yield "
                            <button class=\"btn btn-outline-secondary toggle-password\" type=\"button\" data-target=\"second\">
                                <i class=\"fas fa-eye\"></i>
                            </button>
                        </div>
                        <div class=\"form-text text-danger\">
                            ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), "plainPassword", [], "any", false, false, false, 86), "second", [], "any", false, false, false, 86), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"mb-4 form-check\">
                        ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 91, $this->source); })()), "agreeTerms", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                        ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 92, $this->source); })()), "agreeTerms", [], "any", false, false, false, 92), 'label', ["label_attr" => ["class" => "form-check-label"]]);
        yield "
                        <div class=\"form-text text-danger\">
                            ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 94, $this->source); })()), "agreeTerms", [], "any", false, false, false, 94), 'errors');
        yield "
                        </div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-gradient w-100 mb-3\">Register</button>

                    <div class=\"text-center\">
                        <p class=\"text-light-gray mb-3\">Or register with</p>
                        <div class=\"d-flex justify-content-center gap-2 mb-4\">
                            <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_google");
        yield "\" class=\"btn btn-outline-danger\">
                                <i class=\"fab fa-google\"></i>
                            </a>
                            <a href=\"#\" class=\"btn btn-outline-primary\">
                                <i class=\"fab fa-facebook-f\"></i>
                            </a>
                            <a href=\"#\" class=\"btn btn-outline-info\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                        </div>

                        <p class=\"mb-0\">Already have an account? <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"animated-link\">Login here</a></p>
                    </div>
                    ";
        // line 116
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 116, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 123
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle password visibility
            const toggleButtons = document.querySelectorAll('.toggle-password');

            toggleButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const target = this.dataset.target;
                    const passwordInput = document.querySelector(`#registration_form_plainPassword_\${target}`);

                    if (passwordInput) {
                        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                        passwordInput.setAttribute('type', type);

                        // Toggle icon
                        const icon = this.querySelector('i');
                        icon.classList.toggle('fa-eye');
                        icon.classList.toggle('fa-eye-slash');
                    }
                });
            });
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
        return "registration/register.html.twig";
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
        return array (  284 => 124,  274 => 123,  260 => 116,  255 => 114,  241 => 103,  229 => 94,  224 => 92,  220 => 91,  212 => 86,  203 => 80,  195 => 75,  187 => 70,  178 => 64,  170 => 59,  162 => 54,  156 => 51,  148 => 46,  139 => 40,  133 => 37,  125 => 32,  117 => 27,  111 => 24,  103 => 19,  97 => 16,  86 => 7,  76 => 6,  59 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/registration/register.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"glass-card animate-slideUp\">
                    <div class=\"text-center mb-4\">
                        <h1 class=\"mb-3\">Create an Account</h1>
                        <p class=\"text-light-gray\">Join us and experience the future of shopping</p>
                    </div>

                    {{ form_start(registrationForm) }}
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            {{ form_label(registrationForm.firstName, null, {'label_attr': {'class': 'form-label'}}) }}
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-dark-gray border-0\">
                                    <i class=\"fas fa-user text-light-gray\"></i>
                                </span>
                                {{ form_widget(registrationForm.firstName, {'attr': {'class': 'form-control', 'placeholder': 'First Name'}}) }}
                            </div>
                            <div class=\"form-text text-danger\">
                                {{ form_errors(registrationForm.firstName) }}
                            </div>
                        </div>

                        <div class=\"col-md-6 mb-3\">
                            {{ form_label(registrationForm.lastName, null, {'label_attr': {'class': 'form-label'}}) }}
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-dark-gray border-0\">
                                    <i class=\"fas fa-user text-light-gray\"></i>
                                </span>
                                {{ form_widget(registrationForm.lastName, {'attr': {'class': 'form-control', 'placeholder': 'Last Name'}}) }}
                            </div>
                            <div class=\"form-text text-danger\">
                                {{ form_errors(registrationForm.lastName) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(registrationForm.email, null, {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-dark-gray border-0\">
                                <i class=\"fas fa-envelope text-light-gray\"></i>
                            </span>
                            {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'Email Address'}}) }}
                        </div>
                        <div class=\"form-text text-danger\">
                            {{ form_errors(registrationForm.email) }}
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(registrationForm.plainPassword.first, 'Password', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-dark-gray border-0\">
                                <i class=\"fas fa-lock text-light-gray\"></i>
                            </span>
                            {{ form_widget(registrationForm.plainPassword.first, {'attr': {'class': 'form-control', 'placeholder': 'Password'}}) }}
                            <button class=\"btn btn-outline-secondary toggle-password\" type=\"button\" data-target=\"first\">
                                <i class=\"fas fa-eye\"></i>
                            </button>
                        </div>
                        <div class=\"form-text text-danger\">
                            {{ form_errors(registrationForm.plainPassword.first) }}
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(registrationForm.plainPassword.second, 'Confirm Password', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-dark-gray border-0\">
                                <i class=\"fas fa-lock text-light-gray\"></i>
                            </span>
                            {{ form_widget(registrationForm.plainPassword.second, {'attr': {'class': 'form-control', 'placeholder': 'Confirm Password'}}) }}
                            <button class=\"btn btn-outline-secondary toggle-password\" type=\"button\" data-target=\"second\">
                                <i class=\"fas fa-eye\"></i>
                            </button>
                        </div>
                        <div class=\"form-text text-danger\">
                            {{ form_errors(registrationForm.plainPassword.second) }}
                        </div>
                    </div>

                    <div class=\"mb-4 form-check\">
                        {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input'}}) }}
                        {{ form_label(registrationForm.agreeTerms, null, {'label_attr': {'class': 'form-check-label'}}) }}
                        <div class=\"form-text text-danger\">
                            {{ form_errors(registrationForm.agreeTerms) }}
                        </div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-gradient w-100 mb-3\">Register</button>

                    <div class=\"text-center\">
                        <p class=\"text-light-gray mb-3\">Or register with</p>
                        <div class=\"d-flex justify-content-center gap-2 mb-4\">
                            <a href=\"{{ path('connect_google') }}\" class=\"btn btn-outline-danger\">
                                <i class=\"fab fa-google\"></i>
                            </a>
                            <a href=\"#\" class=\"btn btn-outline-primary\">
                                <i class=\"fab fa-facebook-f\"></i>
                            </a>
                            <a href=\"#\" class=\"btn btn-outline-info\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                        </div>

                        <p class=\"mb-0\">Already have an account? <a href=\"{{ path('app_login') }}\" class=\"animated-link\">Login here</a></p>
                    </div>
                    {{ form_end(registrationForm) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle password visibility
            const toggleButtons = document.querySelectorAll('.toggle-password');

            toggleButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const target = this.dataset.target;
                    const passwordInput = document.querySelector(`#registration_form_plainPassword_\${target}`);

                    if (passwordInput) {
                        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                        passwordInput.setAttribute('type', type);

                        // Toggle icon
                        const icon = this.querySelector('i');
                        icon.classList.toggle('fa-eye');
                        icon.classList.toggle('fa-eye-slash');
                    }
                });
            });
        });
    </script>
{% endblock %}", "registration/register.html.twig", "C:\\Users\\Raed\\e-commerce\\e-commerce\\templates\\registration\\register.html.twig");
    }
}
