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

/* Front-office/reclamation/index.html.twig */
class __TwigTemplate_594b9af1eb41243104d76d4c5adb767e extends Template
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
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/reclamation/index.html.twig"));

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
        // line 52
        echo "
    ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "</head>
<body>
";
        // line 58
        $this->displayBlock('header', $context, $blocks);
        // line 108
        echo "
<div class=\"main\">
    <div class=\"shop_top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-7\">
                    <div class=\"map\">
                        <div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe class=\"gmap_iframe\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=690&amp;height=400&amp;hl=en&amp;q=Esprit School of Business&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed\"></iframe><a href=\"https://mcpepro.com/\">Minecraft Download</a></div><style>.mapouter{position:relative;text-align:right;width:690px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:690px!important;height:400px!important;}</style></div>                    </div>
                </div>
                <div class=\"col-md-5\">
                    <p class=\"m_8\">L'École supérieure privée d'ingénierie et de technologie ou ESPRIT est une école d'ingénieurs privée de Tunisie basée à l'Ariana et agréée par le ministère de l'Enseignement supérieur et de la Recherche scientifique.</p>
                    <div class=\"address\">

                        <p>Tunisia</p>
                        <p>Phone:(216) 70 685 685</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 contact\">
                    ";
        // line 128
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <input type=\"text\" class=\"text\"  value=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 129, $this->source); })()), "prenom", [], "any", false, false, false, 129), "html", null, true);
        echo "\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email';}\" disabled>
                    <input type=\"text\" class=\"text\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "nom", [], "any", false, false, false, 130), "html", null, true);
        echo "\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Name';}\" disabled>
                    <input type=\"text\" class=\"text\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 131, $this->source); })()), "email", [], "any", false, false, false, 131), "html", null, true);
        echo "\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email';}\" disabled>
                    <br>
                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "descriptionReclamation", [], "any", false, false, false, 133), 'widget');
        echo "

                    <button type=\"submit\" class=\"btn btn-success\">Envoyer</button>
                    <button  type=\"button\" class=\"btn btn-danger\"><a style=\"color: #fff\" href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_front");
        echo "\">Annuler</a></button>


                </div>


                ";
        // line 142
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>

</div>

";
        // line 151
        $this->displayBlock('body', $context, $blocks);
        // line 154
        echo "
";
        // line 155
        $this->displayBlock('footer', $context, $blocks);
        // line 221
        echo "</body>
</html>
";
        
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
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "js/jquery.min.js\"></script>
        <!--<script src=\"js/jquery.easydropdown.js\"></script>-->
        <!--start slider -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/fwslider.css"), "html", null, true);
        echo "\" media=\"all\">
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 18
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

    // line 53
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 58
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 59
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
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_front");
        echo "\">Accueil</a></li>

                                <li><a href=\"";
        // line 72
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
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })()), "nom", [], "any", false, false, false, 88), "html", null, true);
        echo "</p>
                                    <br>
                                    <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, ("http:\\\\localhost\\" . twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "imgpath", [], "any", false, false, false, 90), 16)), "html", null, true);
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

    // line 151
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 152
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 155
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 156
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
                        <li><a href=\"#\">Contact Us</a></li>
                        <li><a href=\"#\">Shipping and Order Tracking</a></li>
                        <li><a href=\"#\">Easy Returns</a></li>
                        <li><a href=\"#\">Warranty</a></li>
                        <li><a href=\"#\">Replacement Binding Parts</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">

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

                    <dd>
                        <ul>
                            <li><a href=\"#\">Australia<img class=\"flag\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/as.png"), "html", null, true);
        echo "\" alt=\"\" /><span class=\"value\">AS</span></a></li>
                            <li><a href=\"#\">Sri Lanka<img class=\"flag\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/srl.png"), "html", null, true);
        echo "\" alt=\"\" /><span class=\"value\">SL</span></a></li>
                            <li><a href=\"#\">Newziland<img class=\"flag\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/nz.png"), "html", null, true);
        echo "\" alt=\"\" /><span class=\"value\">NZ</span></a></li>
                            <li><a href=\"#\">Pakistan<img class=\"flag\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pk.png"), "html", null, true);
        echo "\" alt=\"\" /><span class=\"value\">Pk</span></a></li>
                            <li><a href=\"#\">United Kingdom<img class=\"flag\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/uk.png"), "html", null, true);
        echo "\" alt=\"\" /><span class=\"value\">UK</span></a></li>
                            <li><a href=\"#\">United States<img class=\"flag\" src=\"";
        // line 213
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
        return "Front-office/reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 213,  465 => 212,  461 => 211,  457 => 210,  453 => 209,  449 => 208,  395 => 156,  385 => 155,  374 => 152,  364 => 151,  340 => 94,  336 => 93,  330 => 90,  325 => 88,  306 => 72,  301 => 70,  288 => 59,  278 => 58,  267 => 54,  257 => 53,  213 => 18,  209 => 17,  205 => 16,  199 => 13,  191 => 8,  186 => 7,  176 => 6,  157 => 5,  145 => 221,  143 => 155,  140 => 154,  138 => 151,  126 => 142,  117 => 136,  111 => 133,  106 => 131,  102 => 130,  98 => 129,  94 => 128,  72 => 108,  70 => 58,  66 => 56,  64 => 53,  61 => 52,  59 => 6,  55 => 5,  49 => 1,);
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
                                    <p>Bonjour  {{ user.nom }}</p>
                                    <br>
                                    <img src=\"{{\"http:\\\\\\\\localhost\\\\\"~user.imgpath| slice(16) }}\" alt=\"Profile\" style=\"width:50px ; border-radius: 50%\" class=\"rounded-circle\">

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

<div class=\"main\">
    <div class=\"shop_top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-7\">
                    <div class=\"map\">
                        <div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe class=\"gmap_iframe\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=690&amp;height=400&amp;hl=en&amp;q=Esprit School of Business&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed\"></iframe><a href=\"https://mcpepro.com/\">Minecraft Download</a></div><style>.mapouter{position:relative;text-align:right;width:690px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:690px!important;height:400px!important;}</style></div>                    </div>
                </div>
                <div class=\"col-md-5\">
                    <p class=\"m_8\">L'École supérieure privée d'ingénierie et de technologie ou ESPRIT est une école d'ingénieurs privée de Tunisie basée à l'Ariana et agréée par le ministère de l'Enseignement supérieur et de la Recherche scientifique.</p>
                    <div class=\"address\">

                        <p>Tunisia</p>
                        <p>Phone:(216) 70 685 685</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 contact\">
                    {{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}
                    <input type=\"text\" class=\"text\"  value=\"{{ user.prenom }}\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email';}\" disabled>
                    <input type=\"text\" class=\"text\" value=\"{{ user.nom }}\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Name';}\" disabled>
                    <input type=\"text\" class=\"text\" value=\"{{ user.email }}\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email';}\" disabled>
                    <br>
                    {{ form_widget(form.descriptionReclamation) }}

                    <button type=\"submit\" class=\"btn btn-success\">Envoyer</button>
                    <button  type=\"button\" class=\"btn btn-danger\"><a style=\"color: #fff\" href=\"{{ path('index_front')}}\">Annuler</a></button>


                </div>


                {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>

</div>

{% block body %}

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
                        <li><a href=\"#\">Contact Us</a></li>
                        <li><a href=\"#\">Shipping and Order Tracking</a></li>
                        <li><a href=\"#\">Easy Returns</a></li>
                        <li><a href=\"#\">Warranty</a></li>
                        <li><a href=\"#\">Replacement Binding Parts</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3\">
                    <ul class=\"footer_box\">

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
</html>
", "Front-office/reclamation/index.html.twig", "C:\\Users\\Amine\\Desktop\\Nouveau dossier (7)\\DiscoverTn-Symfony\\templates\\Front-office\\reclamation\\index.html.twig");
    }
}
