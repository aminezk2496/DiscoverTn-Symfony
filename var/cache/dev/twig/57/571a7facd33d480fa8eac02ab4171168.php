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

/* Back-office/Utilisateur/AddUser.html.twig */
class __TwigTemplate_1c36b7a3627771aa928e96552278aa70 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/Utilisateur/AddUser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/Utilisateur/AddUser.html.twig"));

        $this->parent = $this->loadTemplate("base-admin.html.twig", "Back-office/Utilisateur/AddUser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <main id=\"main\" class=\"main\">
        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h1 class=\"card-title\">Ajouter un Utilisateur</h1>
                            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                            <table class=\"table\">
                            <tr>
                                    <td>
                                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nom_utilisateur", [], "any", false, false, false, 15), 'label', ["label" => "Nom : "]);
        echo "
                                    </td><td>
                                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nom_utilisateur", [], "any", false, false, false, 17), 'widget');
        echo "
                                    </td>
                                    <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nom_utilisateur", [], "any", false, false, false, 19), 'errors');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prenom_utilisateur", [], "any", false, false, false, 23), 'label', ["label" => "Prenom : "]);
        echo "
                                    </td><td>
                                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prenom_utilisateur", [], "any", false, false, false, 25), 'widget');
        echo "
                                    </td>
                                    <td>";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prenom_utilisateur", [], "any", false, false, false, 27), 'errors');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email_utilisateur", [], "any", false, false, false, 31), 'label', ["label" => "Email : "]);
        echo "
                                    </td><td>
                                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email_utilisateur", [], "any", false, false, false, 33), 'widget');
        echo "
                                    </td>
                                    <td>";
        // line 35
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "session", [], "any", false, false, false, 35), "flashBag", [], "any", false, false, false, 35), "has", [0 => "badmail"], "method", false, false, false, 35)) {
            // line 36
            echo "                                            <div class=\"alert alert-danger\">
                                                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "session", [], "any", false, false, false, 37), "flashBag", [], "any", false, false, false, 37), "get", [0 => "badmail"], "method", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 38
                echo "                                                    ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                                            </div>
                                        ";
        }
        // line 41
        echo "</td>
                                    <td>";
        // line 42
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "session", [], "any", false, false, false, 42), "flashBag", [], "any", false, false, false, 42), "has", [0 => "badmailformat"], "method", false, false, false, 42)) {
            // line 43
            echo "                                            <div class=\"alert alert-danger\">
                                                ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "session", [], "any", false, false, false, 44), "flashBag", [], "any", false, false, false, 44), "get", [0 => "badmailformat"], "method", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 45
                echo "                                                    ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                                            </div>
                                        ";
        }
        // line 48
        echo "</td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "login_utilisateur", [], "any", false, false, false, 52), 'label', ["label" => "login : "]);
        echo "
                                    </td><td>
                                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "login_utilisateur", [], "any", false, false, false, 54), 'widget');
        echo "
                                    </td>
                                    <td>   ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "session", [], "any", false, false, false, 56), "flashBag", [], "any", false, false, false, 56), "has", [0 => "badlogin"], "method", false, false, false, 56)) {
            // line 57
            echo "                                            <div class=\"alert alert-danger\">
                                                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "session", [], "any", false, false, false, 58), "flashBag", [], "any", false, false, false, 58), "get", [0 => "badlogin"], "method", false, false, false, 58));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 59
                echo "                                                    ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                                            </div>
                                        ";
        }
        // line 63
        echo "                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "mdp_utilisateur", [], "any", false, false, false, 67), 'label', ["label" => "Mot de passe : "]);
        echo "
                                    </td><td>
                                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "mdp_utilisateur", [], "any", false, false, false, 69), 'widget');
        echo "
                                    </td>
                                    <td>";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "mdp_utilisateur", [], "any", false, false, false, 71), 'errors');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "my_file", [], "any", false, false, false, 75), 'label', ["label" => "Image : "]);
        echo "
                                    </td><td>
                                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "my_file", [], "any", false, false, false, 77), 'widget');
        echo "
                                    </td>
                                    <td>";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "my_file", [], "any", false, false, false, 79), 'errors');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "telephone_utilisateur", [], "any", false, false, false, 83), 'label', ["label" => "Numero de telephone : "]);
        echo "
                                    </td><td>
                                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "telephone_utilisateur", [], "any", false, false, false, 85), 'widget');
        echo "
                                    </td>
                                    <td>";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "telephone_utilisateur", [], "any", false, false, false, 87), 'errors');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "adresse_utilisateur", [], "any", false, false, false, 91), 'label', ["label" => "Adresse Postale : "]);
        echo "
                                    </td><td>
                                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "adresse_utilisateur", [], "any", false, false, false, 93), 'widget');
        echo "
                                    </td>
                                    <td>";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "adresse_utilisateur", [], "any", false, false, false, 95), 'errors');
        echo "</td>
                                </tr>
                            </table>
                            ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Back-office/Utilisateur/AddUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 98,  281 => 95,  276 => 93,  271 => 91,  264 => 87,  259 => 85,  254 => 83,  247 => 79,  242 => 77,  237 => 75,  230 => 71,  225 => 69,  220 => 67,  214 => 63,  210 => 61,  201 => 59,  197 => 58,  194 => 57,  192 => 56,  187 => 54,  182 => 52,  176 => 48,  172 => 47,  163 => 45,  159 => 44,  156 => 43,  154 => 42,  151 => 41,  147 => 40,  138 => 38,  134 => 37,  131 => 36,  129 => 35,  124 => 33,  119 => 31,  112 => 27,  107 => 25,  102 => 23,  95 => 19,  90 => 17,  85 => 15,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-admin.html.twig' %}
{% block body %}
    <main id=\"main\" class=\"main\">
        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h1 class=\"card-title\">Ajouter un Utilisateur</h1>
                            {{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}

                            <table class=\"table\">
                            <tr>
                                    <td>
                                        {{ form_label(form.nom_utilisateur,\"Nom : \") }}
                                    </td><td>
                                        {{ form_widget(form.nom_utilisateur) }}
                                    </td>
                                    <td>{{ form_errors(form.nom_utilisateur) }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ form_label(form.prenom_utilisateur,\"Prenom : \") }}
                                    </td><td>
                                        {{ form_widget(form.prenom_utilisateur) }}
                                    </td>
                                    <td>{{ form_errors(form.prenom_utilisateur) }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ form_label(form.email_utilisateur,\"Email : \") }}
                                    </td><td>
                                        {{ form_widget(form.email_utilisateur) }}
                                    </td>
                                    <td>{% if app.session.flashBag.has('badmail') %}
                                            <div class=\"alert alert-danger\">
                                                {% for msg in app.session.flashBag.get('badmail') %}
                                                    {{ msg }}
                                                {% endfor %}
                                            </div>
                                        {% endif %}</td>
                                    <td>{% if app.session.flashBag.has('badmailformat') %}
                                            <div class=\"alert alert-danger\">
                                                {% for msg in app.session.flashBag.get('badmailformat') %}
                                                    {{ msg }}
                                                {% endfor %}
                                            </div>
                                        {% endif %}</td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ form_label(form.login_utilisateur,\"login : \") }}
                                    </td><td>
                                        {{ form_widget(form.login_utilisateur) }}
                                    </td>
                                    <td>   {% if app.session.flashBag.has('badlogin') %}
                                            <div class=\"alert alert-danger\">
                                                {% for msg in app.session.flashBag.get('badlogin') %}
                                                    {{ msg }}
                                                {% endfor %}
                                            </div>
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ form_label(form.mdp_utilisateur,\"Mot de passe : \") }}
                                    </td><td>
                                        {{ form_widget(form.mdp_utilisateur) }}
                                    </td>
                                    <td>{{ form_errors(form.mdp_utilisateur) }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ form_label(form.my_file,\"Image : \") }}
                                    </td><td>
                                        {{ form_widget(form.my_file) }}
                                    </td>
                                    <td>{{ form_errors(form.my_file) }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ form_label(form.telephone_utilisateur,\"Numero de telephone : \") }}
                                    </td><td>
                                        {{ form_widget(form.telephone_utilisateur) }}
                                    </td>
                                    <td>{{ form_errors(form.telephone_utilisateur) }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ form_label(form.adresse_utilisateur,\"Adresse Postale : \") }}
                                    </td><td>
                                        {{ form_widget(form.adresse_utilisateur) }}
                                    </td>
                                    <td>{{ form_errors(form.adresse_utilisateur) }}</td>
                                </tr>
                            </table>
                            {{ form_end(form) }}
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
{% endblock %}



", "Back-office/Utilisateur/AddUser.html.twig", "C:\\Users\\Amine\\Desktop\\Backup symfony pi\\PI\\discovertn\\templates\\Back-office\\Utilisateur\\AddUser.html.twig");
    }
}
