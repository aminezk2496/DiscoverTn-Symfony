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

/* base-front.html.twig */
class __TwigTemplate_8bd54a3f8cf558b0e73838a3fdd54f3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'Camping' => [$this, 'block_Camping'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 51
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "</head>
<body>
";
        // line 56
        $this->displayBlock('header', $context, $blocks);
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('Camping', $context, $blocks);
        // line 112
        $this->displayBlock('body', $context, $blocks);
        // line 115
        echo "
";
        // line 116
        $this->displayBlock('footer', $context, $blocks);
        // line 188
        echo "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style2.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/fontawesome.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "js/jquery.min.js\"></script>
        <!--<script src=\"js/jquery.easydropdown.js\"></script>-->
        <!--start slider -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/fwslider.css"), "html", null, true);
        echo "\" media=\"all\">
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/fwslider.js"), "html", null, true);
        echo "\"></script>
        <!--end slider -->
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
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 56
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 57
        echo "    <div class=\"header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"header-left\">
                        <div class=\"logo\">
                            <a href=\"index.html\"><img src=\"images/logo.png\" alt=\"\"/></a>
                        </div>
                        <div class=\"menu\">
                            <a class=\"toggleMenu\" href=\"#\"><img src=\"images/nav.png\" alt=\"\" /></a>
                            <ul class=\"nav\" id=\"nav\">
                                <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_front");
        echo "\">Accueil</a></li>
                                <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AddReclamation");
        echo "\">Contact</a></li>




                                <div class=\"clear\"></div>
                            </ul>
                            <script type=\"text/javascript\" src=\"js/responsive-nav.js\"></script>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div class=\"header_right\">
                        <!-- start search-->
                        <ul class=\"nav\" >

                        </ul>

                        <ul class=\"icon1 sub-icon1 profile_img\">
                            <li><a class=\"active-icon c1\" href=\"#\"> </a>
                                <ul class=\"sub-icon1 list\">
                                    <p>Bonjour  ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "nomUtilisateur", [], "any", false, false, false, 89), "html", null, true);
        echo "</p>
                                    <br>
                                <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, ("http:\\\\localhost\\" . twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "imageUtilisateur", [], "any", false, false, false, 91), 16)), "html", null, true);
        echo "\" alt=\"Profile\" style=\"width:50px ; border-radius: 50%\" class=\"rounded-circle\">
                                    <div class=\"login_buttons\">
                                        <div class=\"check_button\"><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("FuserUpdate");
        echo "\">Profile</a></div>
                                        <div class=\"login_button\"><a  href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_logout");
        echo "\">Logout</a></div>
                                        <div class=\"clear\"></div>
                                    </div>
                                    <div class=\"clear\"></div>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"clear\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 109
    public function block_Camping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Camping"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Camping"));

        // line 110
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 112
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 113
        echo "    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 116
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 117
        echo "    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">
                        <h4>Products</h4>
                        <li><a href=\"#\">Mens</a></li>
                        <li><a href=\"#\">Womens</a></li>
                        <li><a href=\"#\">Youth</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">
                        <h4>About</h4>
                        <li><a href=\"#\">Careers and internships</a></li>
                        <li><a href=\"#\">Sponserships</a></li>
                        <li><a href=\"#\">team</a></li>
                        <li><a href=\"#\">Catalog Request/Download</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">
                        <h4>Customer Support</h4>
                        <li><a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AddReclamation");
        echo "\">Contact Us</a></li>
                        <li><a href=\"#\">Shipping and Order Tracking</a></li>
                        <li><a href=\"#\">Easy Returns</a></li>
                        <li><a href=\"#\">Warranty</a></li>
                        <li><a href=\"#\">Replacement Binding Parts</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">
                        <h4>Newsletter</h4>
                        <div class=\"footer_search\">
                            <form>
                                <input type=\"text\" value=\"Enter your email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Enter your email';}\">
                                <input type=\"submit\" value=\"Go\">
                            </form>
                        </div>
                        <ul class=\"social\">
                            <li class=\"facebook\"><a href=\"#\"><span> </span></a></li>
                            <li class=\"twitter\"><a href=\"#\"><span> </span></a></li>
                            <li class=\"instagram\"><a href=\"#\"><span> </span></a></li>
                            <li class=\"pinterest\"><a href=\"#\"><span> </span></a></li>
                            <li class=\"youtube\"><a href=\"#\"><span> </span></a></li>
                        </ul>

                    </ul>
                </div>
            </div>
            <div class=\"row footer_bottom\">
                <div class=\"copy\">
                    <p>© 2014 Template by <a href=\"http://w3layouts.com\" target=\"_blank\">w3layouts</a></p>
                </div>
                <dl id=\"sample\" class=\"dropdown\">
                    <dt><a href=\"#\"><span>Change Region</span></a></dt>
                    <dd>
                        <ul>
                            <li><a href=\"#\">Australia<img class=\"flag\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/as.png"), "html", null, true);
        echo "\" alt=\"\" /><span class=\"value\">AS</span></a></li>
                            <li><a href=\"#\">Sri Lanka<img class=\"flag\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/srl.png"), "html", null, true);
        echo "\" alt=\"\" /><span class=\"value\">SL</span></a></li>
                            <li><a href=\"#\">Newziland<img class=\"flag\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/nz.png"), "html", null, true);
        echo "\" alt=\"\" /><span class=\"value\">NZ</span></a></li>
                            <li><a href=\"#\">Pakistan<img class=\"flag\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pk.png"), "html", null, true);
        echo "\" alt=\"\" /><span class=\"value\">Pk</span></a></li>
                            <li><a href=\"#\">United Kingdom<img class=\"flag\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/uk.png"), "html", null, true);
        echo "\" alt=\"\" /><span class=\"value\">UK</span></a></li>
                            <li><a href=\"#\">United States<img class=\"flag\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/us.png"), "html", null, true);
        echo "\" alt=\"\" /><span class=\"value\">US</span></a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  443 => 180,  439 => 179,  435 => 178,  431 => 177,  427 => 176,  423 => 175,  385 => 140,  360 => 117,  350 => 116,  339 => 113,  329 => 112,  318 => 110,  308 => 109,  284 => 94,  280 => 93,  275 => 91,  270 => 89,  247 => 69,  243 => 68,  230 => 57,  220 => 56,  209 => 52,  199 => 51,  161 => 23,  157 => 22,  153 => 21,  147 => 18,  137 => 11,  132 => 9,  128 => 8,  123 => 7,  113 => 6,  94 => 5,  83 => 188,  81 => 116,  78 => 115,  76 => 112,  74 => 109,  71 => 108,  69 => 56,  65 => 54,  62 => 51,  60 => 6,  56 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <link href=\"{{ asset('front/css/bootstrap.css') }}\" rel='stylesheet' type='text/css' />
        <link href=\"{{ asset('front/css/style.css') }}\" rel='stylesheet' type='text/css' />
        <link href=\"{{ asset('front/css/style2.css') }}\" rel='stylesheet' type='text/css' />

        <link href=\"{{ asset('front/css/fontawesome.min.css') }}\" rel='stylesheet' type='text/css' />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src=\"{{ asset('') }}js/jquery.min.js\"></script>
        <!--<script src=\"js/jquery.easydropdown.js\"></script>-->
        <!--start slider -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/fwslider.css') }}\" media=\"all\">
        <script src=\"{{ asset('front/js/jquery-ui.min.js') }}\"></script>
        <script src=\"{{ asset('front/js/fwslider.js') }}\"></script>
        <!--end slider -->
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
    {% endblock %}
    {% block javascripts %}

    {% endblock %}
</head>
<body>
{% block header %}
    <div class=\"header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"header-left\">
                        <div class=\"logo\">
                            <a href=\"index.html\"><img src=\"images/logo.png\" alt=\"\"/></a>
                        </div>
                        <div class=\"menu\">
                            <a class=\"toggleMenu\" href=\"#\"><img src=\"images/nav.png\" alt=\"\" /></a>
                            <ul class=\"nav\" id=\"nav\">
                                <li><a href=\"{{ path('index_front') }}\">Accueil</a></li>
                                <li><a href=\"{{ path('AddReclamation')}}\">Contact</a></li>




                                <div class=\"clear\"></div>
                            </ul>
                            <script type=\"text/javascript\" src=\"js/responsive-nav.js\"></script>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div class=\"header_right\">
                        <!-- start search-->
                        <ul class=\"nav\" >

                        </ul>

                        <ul class=\"icon1 sub-icon1 profile_img\">
                            <li><a class=\"active-icon c1\" href=\"#\"> </a>
                                <ul class=\"sub-icon1 list\">
                                    <p>Bonjour  {{ user.nomUtilisateur }}</p>
                                    <br>
                                <img src=\"{{\"http:\\\\\\\\localhost\\\\\"~user.imageUtilisateur| slice(16) }}\" alt=\"Profile\" style=\"width:50px ; border-radius: 50%\" class=\"rounded-circle\">
                                    <div class=\"login_buttons\">
                                        <div class=\"check_button\"><a href=\"{{ path('FuserUpdate') }}\">Profile</a></div>
                                        <div class=\"login_button\"><a  href=\"{{ path('user_logout') }}\">Logout</a></div>
                                        <div class=\"clear\"></div>
                                    </div>
                                    <div class=\"clear\"></div>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"clear\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block Camping %}

{% endblock %}
{% block body %}
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
{% endblock %}

{% block footer %}
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">
                        <h4>Products</h4>
                        <li><a href=\"#\">Mens</a></li>
                        <li><a href=\"#\">Womens</a></li>
                        <li><a href=\"#\">Youth</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">
                        <h4>About</h4>
                        <li><a href=\"#\">Careers and internships</a></li>
                        <li><a href=\"#\">Sponserships</a></li>
                        <li><a href=\"#\">team</a></li>
                        <li><a href=\"#\">Catalog Request/Download</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">
                        <h4>Customer Support</h4>
                        <li><a href=\"{{ path('AddReclamation')}}\">Contact Us</a></li>
                        <li><a href=\"#\">Shipping and Order Tracking</a></li>
                        <li><a href=\"#\">Easy Returns</a></li>
                        <li><a href=\"#\">Warranty</a></li>
                        <li><a href=\"#\">Replacement Binding Parts</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">
                        <h4>Newsletter</h4>
                        <div class=\"footer_search\">
                            <form>
                                <input type=\"text\" value=\"Enter your email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Enter your email';}\">
                                <input type=\"submit\" value=\"Go\">
                            </form>
                        </div>
                        <ul class=\"social\">
                            <li class=\"facebook\"><a href=\"#\"><span> </span></a></li>
                            <li class=\"twitter\"><a href=\"#\"><span> </span></a></li>
                            <li class=\"instagram\"><a href=\"#\"><span> </span></a></li>
                            <li class=\"pinterest\"><a href=\"#\"><span> </span></a></li>
                            <li class=\"youtube\"><a href=\"#\"><span> </span></a></li>
                        </ul>

                    </ul>
                </div>
            </div>
            <div class=\"row footer_bottom\">
                <div class=\"copy\">
                    <p>© 2014 Template by <a href=\"http://w3layouts.com\" target=\"_blank\">w3layouts</a></p>
                </div>
                <dl id=\"sample\" class=\"dropdown\">
                    <dt><a href=\"#\"><span>Change Region</span></a></dt>
                    <dd>
                        <ul>
                            <li><a href=\"#\">Australia<img class=\"flag\" src=\"{{ asset('images/as.png') }}\" alt=\"\" /><span class=\"value\">AS</span></a></li>
                            <li><a href=\"#\">Sri Lanka<img class=\"flag\" src=\"{{ asset('images/srl.png') }}\" alt=\"\" /><span class=\"value\">SL</span></a></li>
                            <li><a href=\"#\">Newziland<img class=\"flag\" src=\"{{ asset('images/nz.png') }}\" alt=\"\" /><span class=\"value\">NZ</span></a></li>
                            <li><a href=\"#\">Pakistan<img class=\"flag\" src=\"{{ asset('images/pk.png') }}\" alt=\"\" /><span class=\"value\">Pk</span></a></li>
                            <li><a href=\"#\">United Kingdom<img class=\"flag\" src=\"{{ asset('images/uk.png') }}\" alt=\"\" /><span class=\"value\">UK</span></a></li>
                            <li><a href=\"#\">United States<img class=\"flag\" src=\"{{ asset('images/us.png') }}\" alt=\"\" /><span class=\"value\">US</span></a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
{% endblock %}
</body>
</html>", "base-front.html.twig", "C:\\Users\\Amine\\Desktop\\Nouveau dossier (7)\\DiscoverTn-Symfony\\templates\\base-front.html.twig");
    }
}
