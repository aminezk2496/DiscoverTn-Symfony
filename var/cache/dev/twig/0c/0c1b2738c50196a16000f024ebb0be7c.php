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

/* Back-office/reclamation/index.html.twig */
class __TwigTemplate_68017fa8642562ee18f3969dabdb78f0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("base-admin.html.twig", "Back-office/reclamation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello EvenementController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
    <main id=\"main\" class=\"main\">
        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <!-- Table with stripped rows -->
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Nom</th>

                                    <th scope=\"col\">Email</th>
                                    <th scope=\"col\">Description</th>
                                    <th scope=\"col\">Prenom</th>

                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["reclams"]);
        foreach ($context['_seq'] as $context["_key"] => $context["reclams"]) {
            // line 31
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["reclams"], "etatReclamation", [], "any", false, false, false, 31) == "Pending")) {
                // line 32
                echo "                                    <tr>
                                        <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclams"], "nomUtilisateur", [], "any", false, false, false, 33)), "html", null, true);
                echo "</td>
                                        <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclams"], "emailUtilisateur", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                                        <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclams"], "descriptionReclamation", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                                        <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclams"], "etatReclamation", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>

                                        <td>
                                            <button  type=\"button\" class=\"btn btn-warning\"><a style=\"color: #fff\" href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reply_reclam", ["id" => twig_get_attribute($this->env, $this->source, $context["reclams"], "idReclamation", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\">Reply</a></button>
                                            <button  type=\"button\" class=\"btn btn-danger\"><a style=\"color: #fff\" href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("destroy_reclam", ["id" => twig_get_attribute($this->env, $this->source, $context["reclams"], "idReclamation", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\">Supprimer</a></button>

                                        </td>
                                    </tr>
                                    ";
            }
            // line 45
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclams'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                </tbody>
                            </table>
                            ";
        // line 48
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reclams"]) || array_key_exists("reclams", $context) ? $context["reclams"] : (function () { throw new RuntimeError('Variable "reclams" does not exist.', 48, $this->source); })()));
        echo "
                            <!-- End Table with stripped rows -->
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
        return "Back-office/reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 48,  160 => 46,  154 => 45,  146 => 40,  142 => 39,  136 => 36,  132 => 35,  128 => 34,  124 => 33,  121 => 32,  118 => 31,  114 => 30,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-admin.html.twig' %}

{% block title %}Hello EvenementController!{% endblock %}

{% block body %}
    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
    <main id=\"main\" class=\"main\">
        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <!-- Table with stripped rows -->
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Nom</th>

                                    <th scope=\"col\">Email</th>
                                    <th scope=\"col\">Description</th>
                                    <th scope=\"col\">Prenom</th>

                                </tr>
                                </thead>
                                <tbody>
                                {% for reclams in reclams %}
                                    {% if reclams.etatReclamation==\"Pending\" %}
                                    <tr>
                                        <td>{{ reclams.nomUtilisateur |upper}}</td>
                                        <td>{{ reclams.emailUtilisateur}}</td>
                                        <td>{{ reclams.descriptionReclamation}}</td>
                                        <td>{{ reclams.etatReclamation}}</td>

                                        <td>
                                            <button  type=\"button\" class=\"btn btn-warning\"><a style=\"color: #fff\" href=\"{{ path('reply_reclam',{'id':reclams.idReclamation}) }}\">Reply</a></button>
                                            <button  type=\"button\" class=\"btn btn-danger\"><a style=\"color: #fff\" href=\"{{ path('destroy_reclam',{'id':reclams.idReclamation}) }}\">Supprimer</a></button>

                                        </td>
                                    </tr>
                                    {% endif %}
                                {% endfor %}
                                </tbody>
                            </table>
                            {{ knp_pagination_render(reclams) }}
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

{% endblock %}
", "Back-office/reclamation/index.html.twig", "C:\\Users\\Amine\\Desktop\\Backup symfony pi\\PI\\discovertn\\templates\\Back-office\\reclamation\\index.html.twig");
    }
}
