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

/* Back-office/Utilisateur/userUpdate.html.twig */
class __TwigTemplate_54bc6c09451d93e09b96b053162049bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/Utilisateur/userUpdate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/Utilisateur/userUpdate.html.twig"));

        $this->parent = $this->loadTemplate("base-admin.html.twig", "Back-office/Utilisateur/userUpdate.html.twig", 1);
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
                            <h1 class=\"card-title\">Modifier un Utilisateur</h1>
                            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                            <table class=\"table\">
                                <tr>
                                    <td>
                                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nomUtilisateur", [], "any", false, false, false, 15), 'label', ["label" => "Nom : "]);
        echo "
                                    </td><td>
                                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nomUtilisateur", [], "any", false, false, false, 17), 'widget');
        echo "
                                    </td>
                                    <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nomUtilisateur", [], "any", false, false, false, 19), 'errors');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prenomUtilisateur", [], "any", false, false, false, 23), 'label', ["label" => "Prenom : "]);
        echo "
                                    </td><td>
                                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prenomUtilisateur", [], "any", false, false, false, 25), 'widget');
        echo "
                                    </td>
                                    <td>";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prenomUtilisateur", [], "any", false, false, false, 27), 'errors');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "emailUtilisateur", [], "any", false, false, false, 31), 'label', ["label" => "Email : "]);
        echo "
                                    </td><td>
                                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "emailUtilisateur", [], "any", false, false, false, 33), 'widget');
        echo "
                                    </td>
                                    <td>";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "emailUtilisateur", [], "any", false, false, false, 35), 'errors');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "loginUtilisateur", [], "any", false, false, false, 39), 'label', ["label" => "login : "]);
        echo "
                                    </td><td>
                                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "loginUtilisateur", [], "any", false, false, false, 41), 'widget');
        echo "
                                    </td>
                                    <td>";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "loginUtilisateur", [], "any", false, false, false, 43), 'errors');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "mdpUtilisateur", [], "any", false, false, false, 47), 'label', ["label" => "Mot de passe : "]);
        echo "
                                    </td><td>
                                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "mdpUtilisateur", [], "any", false, false, false, 49), 'widget');
        echo "
                                    </td>
                                    <td>";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "mdpUtilisateur", [], "any", false, false, false, 51), 'errors');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "imageUtilisateur", [], "any", false, false, false, 55), 'label', ["label" => "Image : "]);
        echo "
                                    </td><td>
                                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "imageUtilisateur", [], "any", false, false, false, 57), 'widget');
        echo "
                                    </td>
                                    <td>";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "imageUtilisateur", [], "any", false, false, false, 59), 'errors');
        echo "</td>
                                </tr>

                                <tr>
                                    <td>
                                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "telephoneUtilisateur", [], "any", false, false, false, 64), 'label', ["label" => "Numero de telephone : "]);
        echo "
                                    </td><td>
                                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "telephoneUtilisateur", [], "any", false, false, false, 66), 'widget');
        echo "
                                    </td>
                                    <td>";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "telephoneUtilisateur", [], "any", false, false, false, 68), 'errors');
        echo "</td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "adresseUtilisateur", [], "any", false, false, false, 72), 'label', ["label" => "Adresse Postale : "]);
        echo "
                                    </td><td>
                                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "adresseUtilisateur", [], "any", false, false, false, 74), 'widget');
        echo "
                                    </td>
                                    <td>";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "adresseUtilisateur", [], "any", false, false, false, 76), 'errors');
        echo "</td>
                                </tr>
                            </table>
                            ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_end');
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
        return "Back-office/Utilisateur/userUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 79,  215 => 76,  210 => 74,  205 => 72,  198 => 68,  193 => 66,  188 => 64,  180 => 59,  175 => 57,  170 => 55,  163 => 51,  158 => 49,  153 => 47,  146 => 43,  141 => 41,  136 => 39,  129 => 35,  124 => 33,  119 => 31,  112 => 27,  107 => 25,  102 => 23,  95 => 19,  90 => 17,  85 => 15,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
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
                            <h1 class=\"card-title\">Modifier un Utilisateur</h1>
                            {{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}

                            <table class=\"table\">
                                <tr>
                                    <td>
                                        {{ form_label(form.nomUtilisateur,\"Nom : \") }}
                                    </td><td>
                                        {{ form_widget(form.nomUtilisateur) }}
                                    </td>
                                    <td>{{ form_errors(form.nomUtilisateur) }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ form_label(form.prenomUtilisateur,\"Prenom : \") }}
                                    </td><td>
                                        {{ form_widget(form.prenomUtilisateur) }}
                                    </td>
                                    <td>{{ form_errors(form.prenomUtilisateur) }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ form_label(form.emailUtilisateur,\"Email : \") }}
                                    </td><td>
                                        {{ form_widget(form.emailUtilisateur) }}
                                    </td>
                                    <td>{{ form_errors(form.emailUtilisateur) }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ form_label(form.loginUtilisateur,\"login : \") }}
                                    </td><td>
                                        {{ form_widget(form.loginUtilisateur) }}
                                    </td>
                                    <td>{{ form_errors(form.loginUtilisateur) }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ form_label(form.mdpUtilisateur,\"Mot de passe : \") }}
                                    </td><td>
                                        {{ form_widget(form.mdpUtilisateur) }}
                                    </td>
                                    <td>{{ form_errors(form.mdpUtilisateur) }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ form_label(form.imageUtilisateur,\"Image : \") }}
                                    </td><td>
                                        {{ form_widget(form.imageUtilisateur) }}
                                    </td>
                                    <td>{{ form_errors(form.imageUtilisateur) }}</td>
                                </tr>

                                <tr>
                                    <td>
                                        {{ form_label(form.telephoneUtilisateur,\"Numero de telephone : \") }}
                                    </td><td>
                                        {{ form_widget(form.telephoneUtilisateur) }}
                                    </td>
                                    <td>{{ form_errors(form.telephoneUtilisateur) }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        {{ form_label(form.adresseUtilisateur,\"Adresse Postale : \") }}
                                    </td><td>
                                        {{ form_widget(form.adresseUtilisateur) }}
                                    </td>
                                    <td>{{ form_errors(form.adresseUtilisateur) }}</td>
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



", "Back-office/Utilisateur/userUpdate.html.twig", "C:\\Users\\Amine\\Desktop\\Backup symfony pi\\PI\\discovertn\\templates\\Back-office\\Utilisateur\\userUpdate.html.twig");
    }
}
