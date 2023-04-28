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

/* base-admin.html.twig */
class __TwigTemplate_9950f2e9e2c6acaef444e20b85ac39e4 extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-admin.html.twig"));

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
        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "</head>
<body>
";
        // line 40
        $this->displayBlock('header', $context, $blocks);
        // line 261
        echo "
";
        // line 262
        $this->displayBlock('sidebar', $context, $blocks);
        // line 389
        echo "
";
        // line 390
        $this->displayBlock('body', $context, $blocks);
        // line 391
        echo "
";
        // line 392
        $this->displayBlock('footer', $context, $blocks);
        // line 407
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
        echo "        <!-- Google Fonts -->
        <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

        <!-- Vendor CSS Files -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Template Main CSS File -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "        <!-- Vendor JS Files -->
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/chart.js/chart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

        <!-- Template Main JS File -->
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 41
        echo "    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

        <div class=\"d-flex align-items-center justify-content-between\">
            <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_front");
        echo "\" class=\"logo d-flex align-items-center\">
                <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                <span class=\"d-none d-lg-block\">NiceAdmin</span>
            </a>
            <i class=\"bi bi-list toggle-sidebar-btn\"></i>
        </div><!-- End Logo -->

        <div class=\"search-bar\">
            <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
                <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class=\"header-nav ms-auto\">
            <ul class=\"d-flex align-items-center\">

                <li class=\"nav-item d-block d-lg-none\">
                    <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                        <i class=\"bi bi-search\"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class=\"nav-item dropdown\">

                    <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <i class=\"bi bi-bell\"></i>
                        <span class=\"badge bg-primary badge-number\">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                        <li class=\"dropdown-header\">
                            You have 4 new notifications
                            <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                            <i class=\"bi bi-exclamation-circle text-warning\"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                            <i class=\"bi bi-x-circle text-danger\"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                            <i class=\"bi bi-check-circle text-success\"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                            <i class=\"bi bi-info-circle text-primary\"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>
                        <li class=\"dropdown-footer\">
                            <a href=\"#\">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class=\"nav-item dropdown\">

                    <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <i class=\"bi bi-chat-left-text\"></i>
                        <span class=\"badge bg-success badge-number\">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                        <li class=\"dropdown-header\">
                            You have 3 new messages
                            <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"message-item\">
                            <a href=\"#\">
                                <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/img/messages-1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"rounded-circle\">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"message-item\">
                            <a href=\"#\">
                                <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/img/messages-2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"rounded-circle\">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"message-item\">
                            <a href=\"#\">
                                <img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/img/messages-3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"rounded-circle\">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"dropdown-footer\">
                            <a href=\"#\">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class=\"nav-item dropdown pe-3\">

                    <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                       <img src=\"";
        // line 212
        echo twig_escape_filter($this->env, ("http:\\\\localhost\\" . twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 212, $this->source); })()), "imageUtilisateur", [], "any", false, false, false, 212), 16)), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">

                       <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 214, $this->source); })()), "nomUtilisateur", [], "any", false, false, false, 214), "html", null, true);
        echo "</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                        <li class=\"dropdown-header\">
                        <h6>";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 219, $this->source); })()), "nomUtilisateur", [], "any", false, false, false, 219), "html", null, true);
        echo "</h6>
                            <span>Administrateur</span>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>


                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 232
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("FuserUpdate");
        echo "\">
                                <i class=\"bi bi-gear\"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>


                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 247
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_logout");
        echo "\">
                                <i class=\"bi bi-box-arrow-right\"></i>
                                <span>Sign Out </span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 262
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 263
        echo "    <!-- ======= Sidebar ======= -->
    <aside id=\"sidebar\" class=\"sidebar\">

        <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 269
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_front");
        echo "\">
                    <i class=\"bi bi-grid\"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-menu-button-wide\"></i><span>Evenements</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                            <i class=\"bi bi-circle\"></i><span>Gérer Evenements</span>
                        </a>
                            <i class=\"bi bi-circle\"></i><span>Gérer Reservations Evenements</span>
                    </a>
                    </li>
                </ul>
            </li><!-- End Evenements Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" data-bs-target=\"#utilisateurs-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-menu-button-wide\"></i><span>Utilisateurs</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"utilisateurs-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                        <a href=\"";
        // line 295
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("UsersHome");
        echo "\">
                            <i class=\"bi bi-circle\"></i><span>Gérer Utilisateurs</span>
                        </a>
                    </li>
                </ul>
                <ul id=\"utilisateurs-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                        <a href=\"";
        // line 302
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shownoadmins");
        echo "\">
                            <i class=\"bi bi-circle\"></i><span>Booster Utilisateur</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Utilisateurs Nav -->
            <li class=\"nav-item\">
                    <a class=\"nav-link collapsed\" data-bs-target=\"#blogs-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-menu-button-wide\"></i><span>Communauté</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"blogs-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                            <i class=\"bi bi-circle\"></i><span>Gérer les articles</span>
                        </a>
                    </li>
                    <li>
                        </a>
                    </li>
                    <li>
                            <i class=\"bi bi-circle\"></i><span>Gérer les commentaires</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End blogs Nav -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" data-bs-target=\"#Hotels-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-menu-button-wide\"></i><span>Hotels</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"Hotels-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                            <i class=\"bi bi-circle\"></i><span>Gérer Hotels</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Utilisateurs Nav -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" data-bs-target=\"#Sorties-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-menu-button-wide\"></i><span>Sorties</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"Sorties-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                            <i class=\"bi bi-circle\"></i><span>Gérer Sorties</span>

                        </a>

                            <i class=\"bi bi-circle\"></i><span>Gérer les Reservations Sorties</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Utilisateurs Nav -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" data-bs-target=\"#randonnees-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-menu-button-wide\"></i><span>Locations</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"randonnees-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                            <i class=\"bi bi-circle\"></i><span>Gérer Locations</span>
                        </a>
                    </li>
                    <li>
                            <i class=\"bi bi-circle\"></i><span>Statistique Locations</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Utilisateurs Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" data-bs-target=\"#reclam-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-menu-button-wide\"></i><span>Reclamations</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"reclam-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                        <a href=\"";
        // line 375
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_reclamation");
        echo "\">

                        <i class=\"bi bi-circle\"></i><span>Gérer Reclamations</span>
                        </a>
                    </li>

                </ul>


            </li><!-- End Reclamations Nav -->
        </ul>

    </aside><!-- End Sidebar-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 390
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 392
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 393
        echo "    <!-- ======= Footer ======= -->
    <footer id=\"footer\" class=\"footer\">
        <div class=\"copyright\">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class=\"credits\">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base-admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  691 => 393,  681 => 392,  663 => 390,  639 => 375,  563 => 302,  553 => 295,  524 => 269,  516 => 263,  506 => 262,  482 => 247,  464 => 232,  448 => 219,  440 => 214,  435 => 212,  409 => 189,  392 => 175,  375 => 161,  257 => 46,  253 => 45,  247 => 41,  237 => 40,  225 => 36,  219 => 33,  215 => 32,  211 => 31,  207 => 30,  203 => 29,  199 => 28,  195 => 27,  191 => 26,  188 => 25,  178 => 24,  166 => 21,  160 => 18,  156 => 17,  152 => 16,  148 => 15,  144 => 14,  140 => 13,  136 => 12,  129 => 7,  119 => 6,  100 => 5,  88 => 407,  86 => 392,  83 => 391,  81 => 390,  78 => 389,  76 => 262,  73 => 261,  71 => 40,  67 => 38,  65 => 24,  62 => 23,  60 => 6,  56 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <!-- Google Fonts -->
        <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

        <!-- Vendor CSS Files -->
        <link href=\"{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('admin/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('admin/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('admin/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('admin/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('admin/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('admin/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

        <!-- Template Main CSS File -->
        <link href=\"{{ asset('admin/css/style.css') }}\" rel=\"stylesheet\">
    {% endblock %}

    {% block javascripts %}
        <!-- Vendor JS Files -->
        <script src=\"{{ asset('admin/vendor/apexcharts/apexcharts.min.js') }}\"></script>
        <script src=\"{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
        <script src=\"{{ asset('admin/vendor/chart.js/chart.min.js') }}\"></script>
        <script src=\"{{ asset('admin/vendor/echarts/echarts.min.js') }}\"></script>
        <script src=\"{{ asset('admin/vendor/quill/quill.min.js') }}\"></script>
        <script src=\"{{ asset('admin/vendor/simple-datatables/simple-datatables.js') }}\"></script>
        <script src=\"{{ asset('admin/vendor/tinymce/tinymce.min.js') }}\"></script>
        <script src=\"{{ asset('admin/vendor/php-email-form/validate.js') }}\"></script>

        <!-- Template Main JS File -->
        <script src=\"{{ asset('admin/js/main.js') }}\"></script>
    {% endblock %}
</head>
<body>
{% block header %}
    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

        <div class=\"d-flex align-items-center justify-content-between\">
            <a href=\"{{ path('index_front') }}\" class=\"logo d-flex align-items-center\">
                <img src=\"{{ asset('admin/img/logo.png') }}\" alt=\"\">
                <span class=\"d-none d-lg-block\">NiceAdmin</span>
            </a>
            <i class=\"bi bi-list toggle-sidebar-btn\"></i>
        </div><!-- End Logo -->

        <div class=\"search-bar\">
            <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
                <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class=\"header-nav ms-auto\">
            <ul class=\"d-flex align-items-center\">

                <li class=\"nav-item d-block d-lg-none\">
                    <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                        <i class=\"bi bi-search\"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class=\"nav-item dropdown\">

                    <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <i class=\"bi bi-bell\"></i>
                        <span class=\"badge bg-primary badge-number\">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                        <li class=\"dropdown-header\">
                            You have 4 new notifications
                            <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                            <i class=\"bi bi-exclamation-circle text-warning\"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                            <i class=\"bi bi-x-circle text-danger\"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                            <i class=\"bi bi-check-circle text-success\"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                            <i class=\"bi bi-info-circle text-primary\"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>
                        <li class=\"dropdown-footer\">
                            <a href=\"#\">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class=\"nav-item dropdown\">

                    <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <i class=\"bi bi-chat-left-text\"></i>
                        <span class=\"badge bg-success badge-number\">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                        <li class=\"dropdown-header\">
                            You have 3 new messages
                            <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"message-item\">
                            <a href=\"#\">
                                <img src=\"{{ asset('admin/img/messages-1.jpg') }}\" alt=\"\" class=\"rounded-circle\">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"message-item\">
                            <a href=\"#\">
                                <img src=\"{{ asset('admin/img/messages-2.jpg') }}\" alt=\"\" class=\"rounded-circle\">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"message-item\">
                            <a href=\"#\">
                                <img src=\"{{ asset('admin/img/messages-3.jpg') }}\" alt=\"\" class=\"rounded-circle\">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"dropdown-footer\">
                            <a href=\"#\">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class=\"nav-item dropdown pe-3\">

                    <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                       <img src=\"{{\"http:\\\\\\\\localhost\\\\\"~user.imageUtilisateur| slice(16) }}\" alt=\"Profile\" class=\"rounded-circle\">

                       <span class=\"d-none d-md-block dropdown-toggle ps-2\">{{ user.nomUtilisateur }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                        <li class=\"dropdown-header\">
                        <h6>{{ user.nomUtilisateur }}</h6>
                            <span>Administrateur</span>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>


                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('FuserUpdate') }}\">
                                <i class=\"bi bi-gear\"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>


                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('user_logout') }}\">
                                <i class=\"bi bi-box-arrow-right\"></i>
                                <span>Sign Out </span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
{% endblock %}

{% block sidebar %}
    <!-- ======= Sidebar ======= -->
    <aside id=\"sidebar\" class=\"sidebar\">

        <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"{{ path('index_front') }}\">
                    <i class=\"bi bi-grid\"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-menu-button-wide\"></i><span>Evenements</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                            <i class=\"bi bi-circle\"></i><span>Gérer Evenements</span>
                        </a>
                            <i class=\"bi bi-circle\"></i><span>Gérer Reservations Evenements</span>
                    </a>
                    </li>
                </ul>
            </li><!-- End Evenements Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" data-bs-target=\"#utilisateurs-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-menu-button-wide\"></i><span>Utilisateurs</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"utilisateurs-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                        <a href=\"{{ path('UsersHome') }}\">
                            <i class=\"bi bi-circle\"></i><span>Gérer Utilisateurs</span>
                        </a>
                    </li>
                </ul>
                <ul id=\"utilisateurs-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                        <a href=\"{{ path('shownoadmins') }}\">
                            <i class=\"bi bi-circle\"></i><span>Booster Utilisateur</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Utilisateurs Nav -->
            <li class=\"nav-item\">
                    <a class=\"nav-link collapsed\" data-bs-target=\"#blogs-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-menu-button-wide\"></i><span>Communauté</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"blogs-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                            <i class=\"bi bi-circle\"></i><span>Gérer les articles</span>
                        </a>
                    </li>
                    <li>
                        </a>
                    </li>
                    <li>
                            <i class=\"bi bi-circle\"></i><span>Gérer les commentaires</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End blogs Nav -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" data-bs-target=\"#Hotels-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-menu-button-wide\"></i><span>Hotels</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"Hotels-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                            <i class=\"bi bi-circle\"></i><span>Gérer Hotels</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Utilisateurs Nav -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" data-bs-target=\"#Sorties-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-menu-button-wide\"></i><span>Sorties</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"Sorties-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                            <i class=\"bi bi-circle\"></i><span>Gérer Sorties</span>

                        </a>

                            <i class=\"bi bi-circle\"></i><span>Gérer les Reservations Sorties</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Utilisateurs Nav -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" data-bs-target=\"#randonnees-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-menu-button-wide\"></i><span>Locations</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"randonnees-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                            <i class=\"bi bi-circle\"></i><span>Gérer Locations</span>
                        </a>
                    </li>
                    <li>
                            <i class=\"bi bi-circle\"></i><span>Statistique Locations</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Utilisateurs Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" data-bs-target=\"#reclam-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-menu-button-wide\"></i><span>Reclamations</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"reclam-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                        <a href=\"{{ path('display_reclamation') }}\">

                        <i class=\"bi bi-circle\"></i><span>Gérer Reclamations</span>
                        </a>
                    </li>

                </ul>


            </li><!-- End Reclamations Nav -->
        </ul>

    </aside><!-- End Sidebar-->
{% endblock %}

{% block body %}{% endblock %}

{% block footer %}
    <!-- ======= Footer ======= -->
    <footer id=\"footer\" class=\"footer\">
        <div class=\"copyright\">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class=\"credits\">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->
{% endblock %}
</body>
</html>
", "base-admin.html.twig", "C:\\Users\\Amine\\Desktop\\Backup symfony pi\\PI\\discovertn\\templates\\base-admin.html.twig");
    }
}
