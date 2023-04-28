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

/* Back-Office/Utilisateur/pdfusersdetails.html.twig */
class __TwigTemplate_e7577d613bead86839e3930d73095b4d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-Office/Utilisateur/pdfusersdetails.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-Office/Utilisateur/pdfusersdetails.html.twig"));

        // line 1
        echo "<section class=\"section\">
    <div class=\"row\">
        <div class=\"col-lg-12\">

            <div class=\"card\">
                <div class=\"card-body\">
                    <!-- Table with stripped rows -->
                    <table class=\"table\">
                        <thead>
                        <tr style=\"font-size: 10px\">
                            <th scope=\"col\"  style=\"font-size: 10px\">ID</th>
                            <th scope=\"col\"  style=\"font-size: 10px\">Nom</th>
                            <th scope=\"col\"  style=\"font-size: 10px\">Prenom</th>
                            <th scope=\"col\"  style=\"font-size: 10px\">Email</th>
                            <th scope=\"col\"  style=\"font-size: 10px\">Login</th>
                            <th scope=\"col\"  style=\"font-size: 10px\">Password SHA1</th>
                            <th scope=\"col\"  style=\"font-size: 10px\">Adresse</th>


                        </tr>
                        </thead>
                        <tbody>

                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userers"]) || array_key_exists("userers", $context) ? $context["userers"] : (function () { throw new RuntimeError('Variable "userers" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "
                            <tr  style=\"font-size: 10px\">
                                <td  style=\"font-size: 10px\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "idUtilisateur", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                <td  style=\"font-size: 10px\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nomUtilisateur", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                <td  style=\"font-size: 10px\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenomUtilisateur", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                <td  style=\"font-size: 10px\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "emailUtilisateur", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                <td  style=\"font-size: 10px\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "loginUtilisateur", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                <td  style=\"font-size: 10px\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "mdpUtilisateur", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                <td  style=\"font-size: 10px\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adresseUtilisateur", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                                <td>

                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back-Office/Utilisateur/pdfusersdetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 39,  100 => 33,  96 => 32,  92 => 31,  88 => 30,  84 => 29,  80 => 28,  76 => 27,  72 => 25,  68 => 24,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section\">
    <div class=\"row\">
        <div class=\"col-lg-12\">

            <div class=\"card\">
                <div class=\"card-body\">
                    <!-- Table with stripped rows -->
                    <table class=\"table\">
                        <thead>
                        <tr style=\"font-size: 10px\">
                            <th scope=\"col\"  style=\"font-size: 10px\">ID</th>
                            <th scope=\"col\"  style=\"font-size: 10px\">Nom</th>
                            <th scope=\"col\"  style=\"font-size: 10px\">Prenom</th>
                            <th scope=\"col\"  style=\"font-size: 10px\">Email</th>
                            <th scope=\"col\"  style=\"font-size: 10px\">Login</th>
                            <th scope=\"col\"  style=\"font-size: 10px\">Password SHA1</th>
                            <th scope=\"col\"  style=\"font-size: 10px\">Adresse</th>


                        </tr>
                        </thead>
                        <tbody>

                        {% for user in userers %}

                            <tr  style=\"font-size: 10px\">
                                <td  style=\"font-size: 10px\">{{ user.idUtilisateur}}</td>
                                <td  style=\"font-size: 10px\">{{ user.nomUtilisateur}}</td>
                                <td  style=\"font-size: 10px\">{{ user.prenomUtilisateur}}</td>
                                <td  style=\"font-size: 10px\">{{ user.emailUtilisateur}}</td>
                                <td  style=\"font-size: 10px\">{{ user.loginUtilisateur}}</td>
                                <td  style=\"font-size: 10px\">{{ user.mdpUtilisateur}}</td>
                                <td  style=\"font-size: 10px\">{{ user.adresseUtilisateur}}</td>
                                <td>

                                </td>
                            </tr>
                        {% endfor %}

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>", "Back-Office/Utilisateur/pdfusersdetails.html.twig", "C:\\Users\\Amine\\Desktop\\Backup symfony pi\\PI\\discovertn\\templates\\Back-office\\Utilisateur\\pdfusersdetails.html.twig");
    }
}
