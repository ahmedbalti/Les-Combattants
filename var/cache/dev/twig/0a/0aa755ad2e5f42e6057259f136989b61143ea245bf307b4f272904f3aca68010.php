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

/* avis/update.html.twig */
class __TwigTemplate_cd19c591f6028b4762ae45451c46b12a9065cf5813af36d8e7ff94de698abc34 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/update.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "avis/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row d-flex\">
            <div class=\"col-md-4 d-flex ftco-animate\">
                <div class=\"blog-entry align-self-stretch\">
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url(";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/image_1.jpg"), "html", null, true);
        echo ");\">
                    </a>
                    <div class=\"text mt-3\">
                        <div class=\"meta mb-2\">
                            <div><a href=\"#\">Oct. 30, 2019</a></div>
                            <div><a href=\"#\">Admin</a></div>
                            <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                        </div>
                        <h3 class=\"heading\"><a href=\"#\">Hotel Laico Hammamet</a></h3>
                        <p>Agréable hotel dans la zone touristique de Hammamet </p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 d-flex ftco-animate\">
                <div class=\"blog-entry align-self-stretch\">
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url(";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/image_2.jpg"), "html", null, true);
        echo ");\">
                    </a>
                    <div class=\"text mt-3\">
                        <div class=\"meta mb-2\">
                            <div><a href=\"#\">Oct. 30, 2019</a></div>
                            <div><a href=\"#\">Admin</a></div>
                            <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                        </div>
                        <h3 class=\"heading\"><a href=\"#\">Hotel La Cigale Tabarka</a></h3>
                        <p> Un des plus beaux Hotels de toute la Tunisie situé dans la région de Tabarka</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 d-flex ftco-animate\">
                <div class=\"blog-entry align-self-stretch\">
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url(";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/image_3.jpg"), "html", null, true);
        echo ");\">
                    </a>
                    <div class=\"text mt-3\">
                        <div class=\"meta mb-2\">
                            <div><a href=\"#\">Oct. 30, 2019</a></div>
                            <div><a href=\"#\">Admin</a></div>
                            <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                        </div>
                        <h3 class=\"heading\"><a href=\"#\">Hotel Hasdrubal Prestige Djerba</a></h3>
                        <p>Un merveilleux et luxueux hotel situé dans le sud tunisien exactement dans l'île des rêves Djerba</p>
                    </div>
                </div>
            </div>
            <center>
            <h2>Modifier Commentaire</h2>
";
        // line 54
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 54, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 55, $this->source); })()), 'form');
        echo "
                </center>
</section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "avis/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 55,  129 => 54,  111 => 39,  93 => 24,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block content %}
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row d-flex\">
            <div class=\"col-md-4 d-flex ftco-animate\">
                <div class=\"blog-entry align-self-stretch\">
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url({{ asset('back/images/image_1.jpg') }});\">
                    </a>
                    <div class=\"text mt-3\">
                        <div class=\"meta mb-2\">
                            <div><a href=\"#\">Oct. 30, 2019</a></div>
                            <div><a href=\"#\">Admin</a></div>
                            <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                        </div>
                        <h3 class=\"heading\"><a href=\"#\">Hotel Laico Hammamet</a></h3>
                        <p>Agréable hotel dans la zone touristique de Hammamet </p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 d-flex ftco-animate\">
                <div class=\"blog-entry align-self-stretch\">
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url({{ asset('back/images/image_2.jpg') }});\">
                    </a>
                    <div class=\"text mt-3\">
                        <div class=\"meta mb-2\">
                            <div><a href=\"#\">Oct. 30, 2019</a></div>
                            <div><a href=\"#\">Admin</a></div>
                            <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                        </div>
                        <h3 class=\"heading\"><a href=\"#\">Hotel La Cigale Tabarka</a></h3>
                        <p> Un des plus beaux Hotels de toute la Tunisie situé dans la région de Tabarka</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 d-flex ftco-animate\">
                <div class=\"blog-entry align-self-stretch\">
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url({{ asset('back/images/image_3.jpg') }});\">
                    </a>
                    <div class=\"text mt-3\">
                        <div class=\"meta mb-2\">
                            <div><a href=\"#\">Oct. 30, 2019</a></div>
                            <div><a href=\"#\">Admin</a></div>
                            <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                        </div>
                        <h3 class=\"heading\"><a href=\"#\">Hotel Hasdrubal Prestige Djerba</a></h3>
                        <p>Un merveilleux et luxueux hotel situé dans le sud tunisien exactement dans l'île des rêves Djerba</p>
                    </div>
                </div>
            </div>
            <center>
            <h2>Modifier Commentaire</h2>
{%  form_theme f 'bootstrap_4_layout.html.twig' %}
{{ form(f) }}
                </center>
</section>


{% endblock %}

", "avis/update.html.twig", "C:\\Les_Combattants1\\templates\\avis\\update.html.twig");
    }
}
