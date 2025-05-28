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

/* components/theme-preference.html.twig */
class __TwigTemplate_b29a5ed51474ac1893d0ce652640f1a4 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/theme-preference.html.twig"));

        // line 2
        yield "<div class=\"glass-card mb-4 theme-preferences\">
    <h4 class=\"mb-4\">Theme Preferences</h4>

    <div class=\"mb-4\">
        <label class=\"form-label\">Choose Theme</label>
        <div class=\"d-flex gap-3\">
            <div class=\"theme-option dark-option\" data-theme=\"dark\">
                <div class=\"theme-preview\">
                    <div class=\"theme-preview-header\"></div>
                    <div class=\"theme-preview-body\">
                        <div class=\"theme-preview-line\"></div>
                        <div class=\"theme-preview-line\"></div>
                        <div class=\"theme-preview-line short\"></div>
                    </div>
                </div>
                <div class=\"theme-option-label\">
                    <i class=\"fas fa-moon me-2\"></i> Dark
                </div>
            </div>

            <div class=\"theme-option light-option\" data-theme=\"light\">
                <div class=\"theme-preview\">
                    <div class=\"theme-preview-header\"></div>
                    <div class=\"theme-preview-body\">
                        <div class=\"theme-preview-line\"></div>
                        <div class=\"theme-preview-line\"></div>
                        <div class=\"theme-preview-line short\"></div>
                    </div>
                </div>
                <div class=\"theme-option-label\">
                    <i class=\"fas fa-sun me-2\"></i> Light
                </div>
            </div>

            <div class=\"theme-option auto-option\" data-theme=\"auto\">
                <div class=\"theme-preview split-preview\">
                    <div class=\"theme-preview-split dark\"></div>
                    <div class=\"theme-preview-split light\"></div>
                </div>
                <div class=\"theme-option-label\">
                    <i class=\"fas fa-adjust me-2\"></i> Auto
                </div>
            </div>
        </div>
    </div>

    <div class=\"mb-4\">
        <label class=\"form-label\">Accent Color</label>
        <div class=\"d-flex gap-2 flex-wrap\">
            <div class=\"color-option active\" style=\"--color: #6C63FF;\" data-color=\"#6C63FF\"></div>
            <div class=\"color-option\" style=\"--color: #FF3366;\" data-color=\"#FF3366\"></div>
            <div class=\"color-option\" style=\"--color: #00F5FF;\" data-color=\"#00F5FF\"></div>
            <div class=\"color-option\" style=\"--color: #4CAF50;\" data-color=\"#4CAF50\"></div>
            <div class=\"color-option\" style=\"--color: #FFC107;\" data-color=\"#FFC107\"></div>
            <div class=\"color-option\" style=\"--color: #9C27B0;\" data-color=\"#9C27B0\"></div>
        </div>
    </div>

    <div class=\"form-check form-switch mb-3\">
        <input class=\"form-check-input\" type=\"checkbox\" id=\"animationsToggle\" checked>
        <label class=\"form-check-label\" for=\"animationsToggle\">Enable animations</label>
    </div>

    <div class=\"form-check form-switch mb-3\">
        <input class=\"form-check-input\" type=\"checkbox\" id=\"blurEffectsToggle\" checked>
        <label class=\"form-check-label\" for=\"blurEffectsToggle\">Enable blur effects</label>
    </div>

    <button class=\"btn btn-primary\" id=\"savePreferences\">
        <i class=\"fas fa-save me-2\"></i> Save Preferences
    </button>
</div>

<style>
    .theme-preferences {
        --preview-dark-bg: #1E1E24;
        --preview-dark-header: #121212;
        --preview-dark-line: #2D2D39;

        --preview-light-bg: #F5F5F7;
        --preview-light-header: #FFFFFF;
        --preview-light-line: #E8E8E8;
    }

    .theme-option {
        cursor: pointer;
        border-radius: var(--radius-md);
        padding: 10px;
        transition: all var(--transition-normal);
        border: 2px solid transparent;
    }

    .theme-option:hover {
        background-color: rgba(108, 99, 255, 0.1);
    }

    .theme-option.active {
        border-color: var(--primary);
    }

    .theme-preview {
        width: 80px;
        height: 60px;
        border-radius: var(--radius-sm);
        overflow: hidden;
        margin-bottom: 8px;
    }

    .theme-preview-header {
        height: 15px;
    }

    .theme-preview-body {
        height: 45px;
        padding: 5px;
    }

    .theme-preview-line {
        height: 4px;
        border-radius: 2px;
        margin-bottom: 5px;
    }

    .theme-preview-line.short {
        width: 60%;
    }

    .dark-option .theme-preview {
        background-color: var(--preview-dark-bg);
    }

    .dark-option .theme-preview-header {
        background-color: var(--preview-dark-header);
    }

    .dark-option .theme-preview-line {
        background-color: var(--preview-dark-line);
    }

    .light-option .theme-preview {
        background-color: var(--preview-light-bg);
    }

    .light-option .theme-preview-header {
        background-color: var(--preview-light-header);
    }

    .light-option .theme-preview-line {
        background-color: var(--preview-light-line);
    }

    .split-preview {
        display: flex;
    }

    .theme-preview-split {
        width: 50%;
        height: 100%;
    }

    .theme-preview-split.dark {
        background-color: var(--preview-dark-bg);
    }

    .theme-preview-split.light {
        background-color: var(--preview-light-bg);
    }

    .theme-option-label {
        text-align: center;
        font-size: 0.9rem;
        color: var(--text-primary);
    }

    .color-option {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: var(--color);
        cursor: pointer;
        transition: all var(--transition-normal);
        position: relative;
    }

    .color-option:hover {
        transform: scale(1.1);
    }

    .color-option.active::after {
        content: '\\f00c';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 14px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Theme options
        const themeOptions = document.querySelectorAll('.theme-option');
        const savedTheme = localStorage.getItem('theme') || 'dark';

        // Set active theme option
        themeOptions.forEach(option => {
            if (option.dataset.theme === savedTheme) {
                option.classList.add('active');
            }

            option.addEventListener('click', function() {
                // Remove active class from all options
                themeOptions.forEach(opt => opt.classList.remove('active'));

                // Add active class to clicked option
                this.classList.add('active');

                // Set theme
                const theme = this.dataset.theme;
                if (theme === 'auto') {
                    // Auto theme based on user's system preference
                    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                    setTheme(prefersDark ? 'dark' : 'light');

                    // Listen for changes in system preference
                    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                        setTheme(e.matches ? 'dark' : 'light');
                    });
                } else {
                    setTheme(theme);
                }
            });
        });

        // Color options
        const colorOptions = document.querySelectorAll('.color-option');
        const savedColor = localStorage.getItem('accentColor') || '#6C63FF';

        // Set active color option
        colorOptions.forEach(option => {
            if (option.dataset.color === savedColor) {
                option.classList.add('active');
            }

            option.addEventListener('click', function() {
                // Remove active class from all options
                colorOptions.forEach(opt => opt.classList.remove('active'));

                // Add active class to clicked option
                this.classList.add('active');

                // Set accent color
                const color = this.dataset.color;
                document.documentElement.style.setProperty('--primary', color);
                localStorage.setItem('accentColor', color);
            });
        });

        // Animation toggle
        const animationsToggle = document.getElementById('animationsToggle');
        const savedAnimations = localStorage.getItem('enableAnimations') !== 'false';
        animationsToggle.checked = savedAnimations;

        animationsToggle.addEventListener('change', function() {
            localStorage.setItem('enableAnimations', this.checked);
            if (!this.checked) {
                document.body.classList.add('no-animations');
            } else {
                document.body.classList.remove('no-animations');
            }
        });

        // Blur effects toggle
        const blurEffectsToggle = document.getElementById('blurEffectsToggle');
        const savedBlurEffects = localStorage.getItem('enableBlurEffects') !== 'false';
        blurEffectsToggle.checked = savedBlurEffects;

        blurEffectsToggle.addEventListener('change', function() {
            localStorage.setItem('enableBlurEffects', this.checked);
            if (!this.checked) {
                document.body.classList.add('no-blur');
            } else {
                document.body.classList.remove('no-blur');
            }
        });

        // Save preferences button
        const savePreferencesBtn = document.getElementById('savePreferences');
        savePreferencesBtn.addEventListener('click', function() {
            // Show success message
            const successMessage = document.createElement('div');
            successMessage.className = 'alert alert-success mt-3';
            successMessage.innerHTML = '<i class=\"fas fa-check-circle me-2\"></i> Your preferences have been saved successfully!';

            const themePreferences = document.querySelector('.theme-preferences');
            themePreferences.appendChild(successMessage);

            // Remove message after 3 seconds
            setTimeout(() => {
                successMessage.remove();
            }, 3000);
        });
    });
</script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/theme-preference.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/components/theme-preference.html.twig #}
<div class=\"glass-card mb-4 theme-preferences\">
    <h4 class=\"mb-4\">Theme Preferences</h4>

    <div class=\"mb-4\">
        <label class=\"form-label\">Choose Theme</label>
        <div class=\"d-flex gap-3\">
            <div class=\"theme-option dark-option\" data-theme=\"dark\">
                <div class=\"theme-preview\">
                    <div class=\"theme-preview-header\"></div>
                    <div class=\"theme-preview-body\">
                        <div class=\"theme-preview-line\"></div>
                        <div class=\"theme-preview-line\"></div>
                        <div class=\"theme-preview-line short\"></div>
                    </div>
                </div>
                <div class=\"theme-option-label\">
                    <i class=\"fas fa-moon me-2\"></i> Dark
                </div>
            </div>

            <div class=\"theme-option light-option\" data-theme=\"light\">
                <div class=\"theme-preview\">
                    <div class=\"theme-preview-header\"></div>
                    <div class=\"theme-preview-body\">
                        <div class=\"theme-preview-line\"></div>
                        <div class=\"theme-preview-line\"></div>
                        <div class=\"theme-preview-line short\"></div>
                    </div>
                </div>
                <div class=\"theme-option-label\">
                    <i class=\"fas fa-sun me-2\"></i> Light
                </div>
            </div>

            <div class=\"theme-option auto-option\" data-theme=\"auto\">
                <div class=\"theme-preview split-preview\">
                    <div class=\"theme-preview-split dark\"></div>
                    <div class=\"theme-preview-split light\"></div>
                </div>
                <div class=\"theme-option-label\">
                    <i class=\"fas fa-adjust me-2\"></i> Auto
                </div>
            </div>
        </div>
    </div>

    <div class=\"mb-4\">
        <label class=\"form-label\">Accent Color</label>
        <div class=\"d-flex gap-2 flex-wrap\">
            <div class=\"color-option active\" style=\"--color: #6C63FF;\" data-color=\"#6C63FF\"></div>
            <div class=\"color-option\" style=\"--color: #FF3366;\" data-color=\"#FF3366\"></div>
            <div class=\"color-option\" style=\"--color: #00F5FF;\" data-color=\"#00F5FF\"></div>
            <div class=\"color-option\" style=\"--color: #4CAF50;\" data-color=\"#4CAF50\"></div>
            <div class=\"color-option\" style=\"--color: #FFC107;\" data-color=\"#FFC107\"></div>
            <div class=\"color-option\" style=\"--color: #9C27B0;\" data-color=\"#9C27B0\"></div>
        </div>
    </div>

    <div class=\"form-check form-switch mb-3\">
        <input class=\"form-check-input\" type=\"checkbox\" id=\"animationsToggle\" checked>
        <label class=\"form-check-label\" for=\"animationsToggle\">Enable animations</label>
    </div>

    <div class=\"form-check form-switch mb-3\">
        <input class=\"form-check-input\" type=\"checkbox\" id=\"blurEffectsToggle\" checked>
        <label class=\"form-check-label\" for=\"blurEffectsToggle\">Enable blur effects</label>
    </div>

    <button class=\"btn btn-primary\" id=\"savePreferences\">
        <i class=\"fas fa-save me-2\"></i> Save Preferences
    </button>
</div>

<style>
    .theme-preferences {
        --preview-dark-bg: #1E1E24;
        --preview-dark-header: #121212;
        --preview-dark-line: #2D2D39;

        --preview-light-bg: #F5F5F7;
        --preview-light-header: #FFFFFF;
        --preview-light-line: #E8E8E8;
    }

    .theme-option {
        cursor: pointer;
        border-radius: var(--radius-md);
        padding: 10px;
        transition: all var(--transition-normal);
        border: 2px solid transparent;
    }

    .theme-option:hover {
        background-color: rgba(108, 99, 255, 0.1);
    }

    .theme-option.active {
        border-color: var(--primary);
    }

    .theme-preview {
        width: 80px;
        height: 60px;
        border-radius: var(--radius-sm);
        overflow: hidden;
        margin-bottom: 8px;
    }

    .theme-preview-header {
        height: 15px;
    }

    .theme-preview-body {
        height: 45px;
        padding: 5px;
    }

    .theme-preview-line {
        height: 4px;
        border-radius: 2px;
        margin-bottom: 5px;
    }

    .theme-preview-line.short {
        width: 60%;
    }

    .dark-option .theme-preview {
        background-color: var(--preview-dark-bg);
    }

    .dark-option .theme-preview-header {
        background-color: var(--preview-dark-header);
    }

    .dark-option .theme-preview-line {
        background-color: var(--preview-dark-line);
    }

    .light-option .theme-preview {
        background-color: var(--preview-light-bg);
    }

    .light-option .theme-preview-header {
        background-color: var(--preview-light-header);
    }

    .light-option .theme-preview-line {
        background-color: var(--preview-light-line);
    }

    .split-preview {
        display: flex;
    }

    .theme-preview-split {
        width: 50%;
        height: 100%;
    }

    .theme-preview-split.dark {
        background-color: var(--preview-dark-bg);
    }

    .theme-preview-split.light {
        background-color: var(--preview-light-bg);
    }

    .theme-option-label {
        text-align: center;
        font-size: 0.9rem;
        color: var(--text-primary);
    }

    .color-option {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: var(--color);
        cursor: pointer;
        transition: all var(--transition-normal);
        position: relative;
    }

    .color-option:hover {
        transform: scale(1.1);
    }

    .color-option.active::after {
        content: '\\f00c';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 14px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Theme options
        const themeOptions = document.querySelectorAll('.theme-option');
        const savedTheme = localStorage.getItem('theme') || 'dark';

        // Set active theme option
        themeOptions.forEach(option => {
            if (option.dataset.theme === savedTheme) {
                option.classList.add('active');
            }

            option.addEventListener('click', function() {
                // Remove active class from all options
                themeOptions.forEach(opt => opt.classList.remove('active'));

                // Add active class to clicked option
                this.classList.add('active');

                // Set theme
                const theme = this.dataset.theme;
                if (theme === 'auto') {
                    // Auto theme based on user's system preference
                    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                    setTheme(prefersDark ? 'dark' : 'light');

                    // Listen for changes in system preference
                    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                        setTheme(e.matches ? 'dark' : 'light');
                    });
                } else {
                    setTheme(theme);
                }
            });
        });

        // Color options
        const colorOptions = document.querySelectorAll('.color-option');
        const savedColor = localStorage.getItem('accentColor') || '#6C63FF';

        // Set active color option
        colorOptions.forEach(option => {
            if (option.dataset.color === savedColor) {
                option.classList.add('active');
            }

            option.addEventListener('click', function() {
                // Remove active class from all options
                colorOptions.forEach(opt => opt.classList.remove('active'));

                // Add active class to clicked option
                this.classList.add('active');

                // Set accent color
                const color = this.dataset.color;
                document.documentElement.style.setProperty('--primary', color);
                localStorage.setItem('accentColor', color);
            });
        });

        // Animation toggle
        const animationsToggle = document.getElementById('animationsToggle');
        const savedAnimations = localStorage.getItem('enableAnimations') !== 'false';
        animationsToggle.checked = savedAnimations;

        animationsToggle.addEventListener('change', function() {
            localStorage.setItem('enableAnimations', this.checked);
            if (!this.checked) {
                document.body.classList.add('no-animations');
            } else {
                document.body.classList.remove('no-animations');
            }
        });

        // Blur effects toggle
        const blurEffectsToggle = document.getElementById('blurEffectsToggle');
        const savedBlurEffects = localStorage.getItem('enableBlurEffects') !== 'false';
        blurEffectsToggle.checked = savedBlurEffects;

        blurEffectsToggle.addEventListener('change', function() {
            localStorage.setItem('enableBlurEffects', this.checked);
            if (!this.checked) {
                document.body.classList.add('no-blur');
            } else {
                document.body.classList.remove('no-blur');
            }
        });

        // Save preferences button
        const savePreferencesBtn = document.getElementById('savePreferences');
        savePreferencesBtn.addEventListener('click', function() {
            // Show success message
            const successMessage = document.createElement('div');
            successMessage.className = 'alert alert-success mt-3';
            successMessage.innerHTML = '<i class=\"fas fa-check-circle me-2\"></i> Your preferences have been saved successfully!';

            const themePreferences = document.querySelector('.theme-preferences');
            themePreferences.appendChild(successMessage);

            // Remove message after 3 seconds
            setTimeout(() => {
                successMessage.remove();
            }, 3000);
        });
    });
</script>", "components/theme-preference.html.twig", "C:\\Users\\Raed\\e-commerce\\e-commerce\\templates\\components\\theme-preference.html.twig");
    }
}
