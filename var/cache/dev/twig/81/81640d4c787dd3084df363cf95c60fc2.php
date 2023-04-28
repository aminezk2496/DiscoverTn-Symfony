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

/* Back-Office/Utilisateur/index.html.twig */
class __TwigTemplate_8fc5b60648a2294731ec8c7e7bfabaf6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-Office/Utilisateur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-Office/Utilisateur/index.html.twig"));

        $this->parent = $this->loadTemplate("base-admin.html.twig", "Back-Office/Utilisateur/index.html.twig", 1);
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
        echo "    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
    <main id=\"main\" class=\"main\">
        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <input class=\"form-control form-control-navbar\" id=\"searchInput\" onkeyup=\"searchTable()\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <!-- Table with stripped rows -->
                            <table class=\"table\"    id=\"userTable\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Nom</th>
                                    <th scope=\"col\">Photo</th>
                                    <th scope=\"col\">Prenom</th>
                                    <th scope=\"col\">Email</th>
                                    <th scope=\"col\">Login</th>
                                    <th scope=\"col\">Telephone</th>

                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["users"]);
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 34
            echo "                                    <tr>
                                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "nomUtilisateur", [], "any", false, false, false, 35)), "html", null, true);
            echo "</td>
                                        <td><img src=\"";
            // line 36
            echo twig_escape_filter($this->env, ("http:\\\\localhost\\" . twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "imageUtilisateur", [], "any", false, false, false, 36), 16)), "html", null, true);
            echo "\" alt=\"Profile\" style=\"width:50px ; border-radius: 50%\" class=\"rounded-circle\"></td>
                                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "prenomUtilisateur", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "emailUtilisateur", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "loginUtilisateur", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "telephoneUtilisateur", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                        <td>
                                            <button  type=\"button\" class=\"btn btn-warning\"><a style=\"color: #fff\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userUpdate", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "idUtilisateur", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">Modifier</a></button>
                                            <button type=\"button\" class=\"btn btn-danger\"><a style=\"color: #fff\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dropuser", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "idUtilisateur", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Supprimer</a></button>
                                            <button type=\"button\" class=\"btn btn-success\"><a style=\"color: #fff\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users.pdf");
            echo "\">Extraire les Utilisateur</a></button>


                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "

                                </tbody>
                            </table>
                             ";
        // line 54
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 54, $this->source); })()));
        echo "



                            <!-- End Table with stripped rows -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
    <script>
        function searchTable() {
            // Get the search query from the input field
            var query = document.getElementById(\"searchInput\").value;

            // Send an AJAX request to the server
            \$.ajax({
                url: \"/search\", // The URL of the search endpoint
                type: \"GET\",
                data: {query: query}, // The search query
                success: function(data) {
                    // Parse the JSON data
                    var users = JSON.parse(data);

                    // Clear the existing table rows
                    \$(\"#userTable tbody\").empty();

                    // Loop through the search results and add new rows to the table
                    for (var i = 0; i < users.length; i++) {
                        var user = users[i];
                        var row = \"<tr>\" +
                            \"<td>\" + user.nomUtilisateur + \"</td>\" +
                            \"<td>\" + user.prenomUtilisateur+ \" </td>\" +
                            \"<td>\" + user.emailUtilisateur + \"</td>\" +
                            \"<td>\" + user.loginUtilisateur + \"</td>\" +
                            \"<td>\" + user.telephoneUtilisateur + \"</td>\" +
                            \"<td class='project-actions text-right'>\" +
                            \"<a class='btn btn-primary btn-sm' href='/user/show/\" + user.idUtilisateur + \"'>\" +
                            \"<i class='fas fa-folder'></i>View</a>\" +
                            \"<a class='btn btn-info btn-sm' href='/user/edit/\" + user.idUtilisateur + \"'>\" +
                            \"<i class='fas fa-pencil-alt'></i>Edit</a>\" +
                            \"<a class='btn btn-danger btn-sm' href='/user/delete/\" + user.idUtilisateur + \"'>\" +
                            \"<i class='fas fa-trash'></i>Delete</a>\" +
                            \"</td>\" +
                            \"</tr>\";
                        \$(\"#userTable tbody\").append(row);
                    }
                }
            });
        }
        \$(document).ready(function() {
            // Update the search results whenever the search query changes
            \$(\"#searchInput\").on(\"input\", searchTable);
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Back-Office/Utilisateur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 54,  169 => 50,  157 => 44,  153 => 43,  149 => 42,  144 => 40,  140 => 39,  136 => 38,  132 => 37,  128 => 36,  124 => 35,  121 => 34,  117 => 33,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-admin.html.twig' %}

{% block title %}Hello EvenementController!{% endblock %}

{% block body %}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
    <main id=\"main\" class=\"main\">
        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <input class=\"form-control form-control-navbar\" id=\"searchInput\" onkeyup=\"searchTable()\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <!-- Table with stripped rows -->
                            <table class=\"table\"    id=\"userTable\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Nom</th>
                                    <th scope=\"col\">Photo</th>
                                    <th scope=\"col\">Prenom</th>
                                    <th scope=\"col\">Email</th>
                                    <th scope=\"col\">Login</th>
                                    <th scope=\"col\">Telephone</th>

                                </tr>
                                </thead>
                                <tbody>
                                {% for users in users %}
                                    <tr>
                                        <td>{{ users.nomUtilisateur |upper}}</td>
                                        <td><img src=\"{{\"http:\\\\\\\\localhost\\\\\"~users.imageUtilisateur| slice(16) }}\" alt=\"Profile\" style=\"width:50px ; border-radius: 50%\" class=\"rounded-circle\"></td>
                                        <td>{{ users.prenomUtilisateur}}</td>
                                        <td>{{ users.emailUtilisateur}}</td>
                                        <td>{{ users.loginUtilisateur}}</td>
                                        <td>{{ users.telephoneUtilisateur}}</td>
                                        <td>
                                            <button  type=\"button\" class=\"btn btn-warning\"><a style=\"color: #fff\" href=\"{{ path('userUpdate',{'id':users.idUtilisateur}) }}\">Modifier</a></button>
                                            <button type=\"button\" class=\"btn btn-danger\"><a style=\"color: #fff\" href=\"{{ path('dropuser',{'id':users.idUtilisateur}) }}\">Supprimer</a></button>
                                            <button type=\"button\" class=\"btn btn-success\"><a style=\"color: #fff\" href=\"{{ path('users.pdf') }}\">Extraire les Utilisateur</a></button>


                                        </td>
                                    </tr>
                                {% endfor %}


                                </tbody>
                            </table>
                             {{ knp_pagination_render(users) }}



                            <!-- End Table with stripped rows -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
    <script>
        function searchTable() {
            // Get the search query from the input field
            var query = document.getElementById(\"searchInput\").value;

            // Send an AJAX request to the server
            \$.ajax({
                url: \"/search\", // The URL of the search endpoint
                type: \"GET\",
                data: {query: query}, // The search query
                success: function(data) {
                    // Parse the JSON data
                    var users = JSON.parse(data);

                    // Clear the existing table rows
                    \$(\"#userTable tbody\").empty();

                    // Loop through the search results and add new rows to the table
                    for (var i = 0; i < users.length; i++) {
                        var user = users[i];
                        var row = \"<tr>\" +
                            \"<td>\" + user.nomUtilisateur + \"</td>\" +
                            \"<td>\" + user.prenomUtilisateur+ \" </td>\" +
                            \"<td>\" + user.emailUtilisateur + \"</td>\" +
                            \"<td>\" + user.loginUtilisateur + \"</td>\" +
                            \"<td>\" + user.telephoneUtilisateur + \"</td>\" +
                            \"<td class='project-actions text-right'>\" +
                            \"<a class='btn btn-primary btn-sm' href='/user/show/\" + user.idUtilisateur + \"'>\" +
                            \"<i class='fas fa-folder'></i>View</a>\" +
                            \"<a class='btn btn-info btn-sm' href='/user/edit/\" + user.idUtilisateur + \"'>\" +
                            \"<i class='fas fa-pencil-alt'></i>Edit</a>\" +
                            \"<a class='btn btn-danger btn-sm' href='/user/delete/\" + user.idUtilisateur + \"'>\" +
                            \"<i class='fas fa-trash'></i>Delete</a>\" +
                            \"</td>\" +
                            \"</tr>\";
                        \$(\"#userTable tbody\").append(row);
                    }
                }
            });
        }
        \$(document).ready(function() {
            // Update the search results whenever the search query changes
            \$(\"#searchInput\").on(\"input\", searchTable);
        });
    </script>
{% endblock %}
", "Back-Office/Utilisateur/index.html.twig", "C:\\Users\\Amine\\Desktop\\Backup symfony pi\\PI\\discovertn\\templates\\Back-office\\Utilisateur\\index.html.twig");
    }
}
