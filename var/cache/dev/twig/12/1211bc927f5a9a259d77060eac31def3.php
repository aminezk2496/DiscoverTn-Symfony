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

/* Front-Office/Utilisateur/login.html.twig */
class __TwigTemplate_fbbc7d24c45a33bca22050a384874f8b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-Office/Utilisateur/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-Office/Utilisateur/login.html.twig"));

        // line 1
        echo "
<!DOCTYPE HTML>
<html>
<head>
    <title>DiscoverT</title>
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\".dropdown img.flag\").addClass(\"flagvisibility\");

            \$(\".dropdown dt a\").click(function() {
                \$(\".dropdown dd ul\").toggle();
            });

            \$(\".dropdown dd ul li a\").click(function() {
                var text = \$(this).html();
                \$(\".dropdown dt a span\").html(text);
                \$(\".dropdown dd ul\").hide();
                \$(\"#result\").html(\"Selected value is: \" + getSelectedValue(\"sample\"));
            });

            function getSelectedValue(id) {
                return \$(\"#\" + id).find(\"dt a span.value\").html();
            }

            \$(document).bind('click', function(e) {
                var \$clicked = \$(e.target);
                if (! \$clicked.parents().hasClass(\"dropdown\"))
                    \$(\".dropdown dd ul\").hide();
            });


            \$(\"#flagSwitcher\").click(function() {
                \$(\".dropdown img.flag\").toggleClass(\"flagvisibility\");
            });
        });
    </script>
</head>
<body>

<div class=\"header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"header-left\">
                    <div class=\"logo\">
                        <a href=\"index.html.twig\"><img src=\"images/logo.png\" alt=\"\"/></a>
                    </div>

                    <div class=\"clear\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"main\">
    <div class=\"shop_top\">
        <div class=\"container\">

            <div class=\"col-sm-4\">
                <div class=\"login-title\">
                    <h4 class=\"title\">S'authentifier</h4>
                    <div id=\"loginbox\" class=\"loginbox\">
                        ";
        // line 71
        if (array_key_exists("form", $context)) {
            // line 72
            echo "                        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "
                            <fieldset class=\"input\">
                                <p id=\"login-form-username\">
                                    <label>Username</label> </p>
                                    ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "login_utilisateur", [], "any", false, false, false, 76), 'widget');
            echo "
                                    ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "login_utilisateur", [], "any", false, false, false, 77), 'errors');
            echo "
                                <p id=\"login-form-password\">
                                    <label>Password</label> </p>
                                ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "mdp_utilisateur", [], "any", false, false, false, 80), 'widget');
            echo "
                                ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "mdp_utilisateur", [], "any", false, false, false, 81), 'errors');
            echo "

                                <div class=\"remember\">
                                    <button type=\"submit\" class=\"btn btn-secondary\">Valider</button>
                                    <a style=\"color: #2a3746\" href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resetpassword");
            echo "\">Mot de passe oublié ?</a>
                                </div>
                            </fieldset>
                        ";
            // line 88
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
            echo "

                    </div>

                </div>

                ";
        }
        // line 95
        echo "                <div class=\"clear\"></div>
            </div>
            <div class=\"col-sm-4\">
                <br>
                <br><br>
               <p>Pour vous inscrire à DiscoverTn, vous devez créer un compte ici. Le nom d'utilisateur et le mot de passe vous permettront de vous connecter à DiscoverTn et à d'autres plateforme Mobile tels que Desktop.</p>
                <br>
                <button type=\"submit\" class=\"btn btn-secondary\" ><a style=\"color: #FFFFFF\" href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_signup");
        echo "\">S'inscrire</a></button>
            </div>

        </div>
    </div>
    ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "session", [], "any", false, false, false, 107), "flashBag", [], "any", false, false, false, 107), "has", [0 => "info"], "method", false, false, false, 107)) {
            // line 108
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "session", [], "any", false, false, false, 109), "flashBag", [], "any", false, false, false, 109), "get", [0 => "info"], "method", false, false, false, 109));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 110
                echo "                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "        </div>
    ";
        }
        // line 114
        echo "</div>



</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Front-Office/Utilisateur/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 114,  206 => 112,  197 => 110,  193 => 109,  190 => 108,  188 => 107,  180 => 102,  171 => 95,  161 => 88,  155 => 85,  148 => 81,  144 => 80,  138 => 77,  134 => 76,  126 => 72,  124 => 71,  63 => 13,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE HTML>
<html>
<head>
    <title>DiscoverT</title>
    <link href=\"{{ asset('front/css/bootstrap.css')}}\" rel='stylesheet' type='text/css' />
    <link href=\"{{ asset('front/css/style.css')}}\" rel='stylesheet' type='text/css' />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src=\"{{ asset('js/jquery.min.js')}}\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\".dropdown img.flag\").addClass(\"flagvisibility\");

            \$(\".dropdown dt a\").click(function() {
                \$(\".dropdown dd ul\").toggle();
            });

            \$(\".dropdown dd ul li a\").click(function() {
                var text = \$(this).html();
                \$(\".dropdown dt a span\").html(text);
                \$(\".dropdown dd ul\").hide();
                \$(\"#result\").html(\"Selected value is: \" + getSelectedValue(\"sample\"));
            });

            function getSelectedValue(id) {
                return \$(\"#\" + id).find(\"dt a span.value\").html();
            }

            \$(document).bind('click', function(e) {
                var \$clicked = \$(e.target);
                if (! \$clicked.parents().hasClass(\"dropdown\"))
                    \$(\".dropdown dd ul\").hide();
            });


            \$(\"#flagSwitcher\").click(function() {
                \$(\".dropdown img.flag\").toggleClass(\"flagvisibility\");
            });
        });
    </script>
</head>
<body>

<div class=\"header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"header-left\">
                    <div class=\"logo\">
                        <a href=\"index.html.twig\"><img src=\"images/logo.png\" alt=\"\"/></a>
                    </div>

                    <div class=\"clear\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"main\">
    <div class=\"shop_top\">
        <div class=\"container\">

            <div class=\"col-sm-4\">
                <div class=\"login-title\">
                    <h4 class=\"title\">S'authentifier</h4>
                    <div id=\"loginbox\" class=\"loginbox\">
                        {% if form is defined %}
                        {{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}
                            <fieldset class=\"input\">
                                <p id=\"login-form-username\">
                                    <label>Username</label> </p>
                                    {{ form_widget(form.login_utilisateur) }}
                                    {{ form_errors(form.login_utilisateur) }}
                                <p id=\"login-form-password\">
                                    <label>Password</label> </p>
                                {{form_widget(form.mdp_utilisateur) }}
                                {{form_errors(form.mdp_utilisateur) }}

                                <div class=\"remember\">
                                    <button type=\"submit\" class=\"btn btn-secondary\">Valider</button>
                                    <a style=\"color: #2a3746\" href=\"{{ path('resetpassword')}}\">Mot de passe oublié ?</a>
                                </div>
                            </fieldset>
                        {{ form_end(form) }}

                    </div>

                </div>

                {% endif %}
                <div class=\"clear\"></div>
            </div>
            <div class=\"col-sm-4\">
                <br>
                <br><br>
               <p>Pour vous inscrire à DiscoverTn, vous devez créer un compte ici. Le nom d'utilisateur et le mot de passe vous permettront de vous connecter à DiscoverTn et à d'autres plateforme Mobile tels que Desktop.</p>
                <br>
                <button type=\"submit\" class=\"btn btn-secondary\" ><a style=\"color: #FFFFFF\" href=\"{{ path('user_signup')}}\">S'inscrire</a></button>
            </div>

        </div>
    </div>
    {% if app.session.flashBag.has('info') %}
        <div class=\"alert alert-danger\">
            {% for msg in app.session.flashBag.get('info') %}
                {{ msg }}
            {% endfor %}
        </div>
    {% endif %}
</div>



</body>
</html>", "Front-Office/Utilisateur/login.html.twig", "C:\\Users\\Amine\\Desktop\\Backup symfony pi\\PI\\discovertn\\templates\\Front-office\\Utilisateur\\login.html.twig");
    }
}
