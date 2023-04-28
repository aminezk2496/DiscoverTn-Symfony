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

/* Front-office/Utilisateur/signup.html.twig */
class __TwigTemplate_746eca9bb35049560dc8500067e863df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/Utilisateur/signup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/Utilisateur/signup.html.twig"));

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
                            <h2 class=\"text-uppercase text-center mb-5\">Rejoindre DiscovetTn</h2>
                            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
                            <form action=\"signup\" method=\"post\" name=\"signup\">
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Nom</label>
                                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nomUtilisateur", [], "any", false, false, false, 26), 'widget');
        echo "
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Prenom</label>
                                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "prenomUtilisateur", [], "any", false, false, false, 30), 'widget');
        echo "
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Email</label>
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "emailUtilisateur", [], "any", false, false, false, 34), 'widget');
        echo "
                                    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "session", [], "any", false, false, false, 35), "flashBag", [], "any", false, false, false, 35), "has", [0 => "badmail"], "method", false, false, false, 35)) {
            // line 36
            echo "                                        <div class=\"alert alert-danger\">
                                            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "session", [], "any", false, false, false, 37), "flashBag", [], "any", false, false, false, 37), "get", [0 => "badmail"], "method", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 38
                echo "                                                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                                        </div>
                                    ";
        }
        // line 42
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "session", [], "any", false, false, false, 42), "flashBag", [], "any", false, false, false, 42), "has", [0 => "badmailformat"], "method", false, false, false, 42)) {
            // line 43
            echo "                                        <div class=\"alert alert-danger\">
                                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "session", [], "any", false, false, false, 44), "flashBag", [], "any", false, false, false, 44), "get", [0 => "badmailformat"], "method", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 45
                echo "                                                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                                        </div>
                                    ";
        }
        // line 49
        echo "                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Login</label>
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "loginUtilisateur", [], "any", false, false, false, 52), 'widget');
        echo "
                                    ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "session", [], "any", false, false, false, 53), "flashBag", [], "any", false, false, false, 53), "has", [0 => "badlogin"], "method", false, false, false, 53)) {
            // line 54
            echo "                                        <div class=\"alert alert-danger\">
                                            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "session", [], "any", false, false, false, 55), "flashBag", [], "any", false, false, false, 55), "get", [0 => "badlogin"], "method", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 56
                echo "                                                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                        </div>
                                    ";
        }
        // line 60
        echo "                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Mot de passe </label>
                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "mdpUtilisateur", [], "any", false, false, false, 63), 'widget');
        echo "
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Image  </label>
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "imageUtilisateur", [], "any", false, false, false, 67), 'widget');
        echo "
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Numero de telephone  </label>
                                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "telephoneUtilisateur", [], "any", false, false, false, 71), 'widget');
        echo "
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Adresse Postale </label>
                                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "adresseUtilisateur", [], "any", false, false, false, 75), 'widget');
        echo "
                                </div>


                                <button type=\"submit\" class=\"btn btn-secondary\">Valider</button>
                            </form>
                            <p class=\"text-center text-muted mt-5 mb-0\">Have already an account? <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_login");
        echo "\" class=\"fw-bold text-body\"><u>Login here</u></a></p>
                        </div>
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
        return "Front-office/Utilisateur/signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 81,  196 => 75,  189 => 71,  182 => 67,  175 => 63,  170 => 60,  166 => 58,  157 => 56,  153 => 55,  150 => 54,  148 => 53,  144 => 52,  139 => 49,  135 => 47,  126 => 45,  122 => 44,  119 => 43,  116 => 42,  112 => 40,  103 => 38,  99 => 37,  96 => 36,  94 => 35,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  48 => 4,  43 => 1,);
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
                            <h2 class=\"text-uppercase text-center mb-5\">Rejoindre DiscovetTn</h2>
                            {{ form_start(form) }}
                            <form action=\"signup\" method=\"post\" name=\"signup\">
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Nom</label>
                                    {{ form_widget(form.nomUtilisateur) }}
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Prenom</label>
                                    {{ form_widget(form.prenomUtilisateur) }}
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Email</label>
                                    {{ form_widget(form.emailUtilisateur) }}
                                    {% if app.session.flashBag.has('badmail') %}
                                        <div class=\"alert alert-danger\">
                                            {% for msg in app.session.flashBag.get('badmail') %}
                                                {{ msg }}
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                    {% if app.session.flashBag.has('badmailformat') %}
                                        <div class=\"alert alert-danger\">
                                            {% for msg in app.session.flashBag.get('badmailformat') %}
                                                {{ msg }}
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Login</label>
                                    {{ form_widget(form.loginUtilisateur) }}
                                    {% if app.session.flashBag.has('badlogin') %}
                                        <div class=\"alert alert-danger\">
                                            {% for msg in app.session.flashBag.get('badlogin') %}
                                                {{ msg }}
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Mot de passe </label>
                                    {{ form_widget(form.mdpUtilisateur) }}
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Image  </label>
                                    {{ form_widget(form.imageUtilisateur ) }}
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Numero de telephone  </label>
                                    {{ form_widget(form.telephoneUtilisateur) }}
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Adresse Postale </label>
                                    {{ form_widget(form.adresseUtilisateur) }}
                                </div>


                                <button type=\"submit\" class=\"btn btn-secondary\">Valider</button>
                            </form>
                            <p class=\"text-center text-muted mt-5 mb-0\">Have already an account? <a href=\"{{ path('user_login')}}\" class=\"fw-bold text-body\"><u>Login here</u></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>", "Front-office/Utilisateur/signup.html.twig", "C:\\Users\\Amine\\Desktop\\Backup symfony pi\\PI\\discovertn\\templates\\Front-office\\Utilisateur\\signup.html.twig");
    }
}
