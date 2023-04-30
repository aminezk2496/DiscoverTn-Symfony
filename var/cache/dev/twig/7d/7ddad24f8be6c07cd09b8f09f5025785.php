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

/* Front-office/Utilisateur/modifierUser.html.twig */
class __TwigTemplate_962cf9bb9a0d46715ab0a25652635fba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/Utilisateur/modifierUser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/Utilisateur/modifierUser.html.twig"));

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
                            <h2 class=\"text-uppercase text-center mb-5\">Modifier Votre compte</h2>
                            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
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
                                <div class=\"form-outline mb-4\" style=\"display: none\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Email</label>
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "emailUtilisateur", [], "any", false, false, false, 35), 'widget');
        echo "

                                </div>
                                <div class=\"form-outline mb-4\" style=\"display: none\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Login</label>
                                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "loginUtilisateur", [], "any", false, false, false, 40), 'widget');
        echo "
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Mot de passe </label>
                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "mdpUtilisateur", [], "any", false, false, false, 44), 'widget');
        echo "
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Image  </label>
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "imageUtilisateur", [], "any", false, false, false, 48), 'widget');
        echo "
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Numero de telephone  </label>
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "telephoneUtilisateur", [], "any", false, false, false, 52), 'widget');
        echo "
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Adresse Postale </label>
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "adresseUtilisateur", [], "any", false, false, false, 56), 'widget');
        echo "
                                </div>

                                <button type=\"submit\" class=\"btn btn-secondary\">Modifier</button>
                                <button type=\"button\" class=\"btn btn-secondary\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_front");
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_front");
        echo "\">Annuler</a></button>
                            </form>

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
        return "Front-office/Utilisateur/modifierUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 60,  127 => 56,  120 => 52,  113 => 48,  106 => 44,  99 => 40,  91 => 35,  83 => 30,  76 => 26,  69 => 22,  48 => 4,  43 => 1,);
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
                            <h2 class=\"text-uppercase text-center mb-5\">Modifier Votre compte</h2>
                            {{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}
                            <form action=\"signup\" method=\"post\" name=\"signup\">
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Nom</label>
                                    {{ form_widget(form.nomUtilisateur) }}
                                </div>
                                <div class=\"form-outline mb-4\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Prenom</label>
                                    {{ form_widget(form.prenomUtilisateur) }}

                                </div>
                                <div class=\"form-outline mb-4\" style=\"display: none\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Email</label>
                                    {{ form_widget(form.emailUtilisateur) }}

                                </div>
                                <div class=\"form-outline mb-4\" style=\"display: none\">
                                    <label class=\"form-label\" for=\"form3Example1cg\">Login</label>
                                    {{ form_widget(form.loginUtilisateur) }}
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

                                <button type=\"submit\" class=\"btn btn-secondary\">Modifier</button>
                                <button type=\"button\" class=\"btn btn-secondary\" href=\"{{ path('index_front') }}\"><a href=\"{{ path('index_front') }}\">Annuler</a></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>", "Front-office/Utilisateur/modifierUser.html.twig", "C:\\Users\\Amine\\Desktop\\Nouveau dossier (7)\\DiscoverTn-Symfony\\templates\\Front-office\\Utilisateur\\modifierUser.html.twig");
    }
}
