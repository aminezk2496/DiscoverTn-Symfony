<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Front-office/Utilisateur/confirmcode.html.twig */
class __TwigTemplate_a6fecbc5c807213e48dc99760bd0d483 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/Utilisateur/confirmcode.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/Utilisateur/confirmcode.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/signupcss.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<section class=\"vh-100 bg-image\" style=\"background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');\">
    <div class=\"mask d-flex align-items-center h-100 gradient-custom-3\">
        <div class=\"container h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-12 col-md-9 col-lg-7 col-xl-6\">
                    <div class=\"card\" style=\"border-radius: 15px;\">
                        <div class=\"card-body p-5\">
                            <h2 class=\"text-uppercase text-center mb-5\">Recuperer votre mot de passe</h2>
                            ";
        // line 22
        if (array_key_exists("form", $context)) {
            // line 23
            echo "
                                ";
            // line 24
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "
                                <fieldset class=\"input\">
                                    <p >
                                        <label>Code</label> </p>
                                    ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "email_utilisateur", [], "any", false, false, false, 28), 'widget');
            echo "
                                    ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "session", [], "any", false, false, false, 29), "flashBag", [], "any", false, false, false, 29), "has", [0 => "info"], "method", false, false, false, 29)) {
                // line 30
                echo "                                        <div class=\"alert alert-danger\">
                                            ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "session", [], "any", false, false, false, 31), "flashBag", [], "any", false, false, false, 31), "get", [0 => "info"], "method", false, false, false, 31));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 32
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "                                        </div>
                                    ";
            }
            // line 36
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "email_utilisateur", [], "any", false, false, false, 36), 'errors');
            echo "
                                    <div class=\"remember\">
                                        <br><br>
                                        <button type=\"submit\" class=\"btn btn-secondary\">Verifier le code</button>

                                    </div>
                                </fieldset>
                                ";
            // line 43
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
            echo "
                            ";
        }
        // line 45
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Front-office/Utilisateur/confirmcode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 45,  118 => 43,  107 => 36,  103 => 34,  94 => 32,  90 => 31,  87 => 30,  85 => 29,  81 => 28,  74 => 24,  71 => 23,  69 => 22,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <link href=\"{{ asset('front/css/signupcss.css') }}\" rel='stylesheet' type='text/css' />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<section class=\"vh-100 bg-image\" style=\"background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');\">
    <div class=\"mask d-flex align-items-center h-100 gradient-custom-3\">
        <div class=\"container h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-12 col-md-9 col-lg-7 col-xl-6\">
                    <div class=\"card\" style=\"border-radius: 15px;\">
                        <div class=\"card-body p-5\">
                            <h2 class=\"text-uppercase text-center mb-5\">Recuperer votre mot de passe</h2>
                            {% if form is defined %}

                                {{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}
                                <fieldset class=\"input\">
                                    <p >
                                        <label>Code</label> </p>
                                    {{ form_widget(form.email_utilisateur) }}
                                    {% if app.session.flashBag.has('info') %}
                                        <div class=\"alert alert-danger\">
                                            {% for msg in app.session.flashBag.get('info') %}
                                                {{ msg }}
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                    {{ form_errors(form.email_utilisateur) }}
                                    <div class=\"remember\">
                                        <br><br>
                                        <button type=\"submit\" class=\"btn btn-secondary\">Verifier le code</button>

                                    </div>
                                </fieldset>
                                {{ form_end(form) }}
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>", "Front-office/Utilisateur/confirmcode.html.twig", "C:\\Users\\Amine\\Desktop\\Nouveau dossier (7)\\DiscoverTn-Symfony\\templates\\Front-office\\Utilisateur\\confirmcode.html.twig");
    }
}
