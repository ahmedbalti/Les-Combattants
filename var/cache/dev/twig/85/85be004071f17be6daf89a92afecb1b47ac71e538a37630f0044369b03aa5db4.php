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

/* avis/read.html.twig */
class __TwigTemplate_04934fb2afd4c21317b44b2bd809e4cb0d3e2bd74b1cf841955a6494f5c39348 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/read.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "avis/read.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/image_1.jpg"), "html", null, true);
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
                        <a href=\"#\" class=\"btn btn-secondary rounded\">More info</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 d-flex ftco-animate\">
                <div class=\"blog-entry align-self-stretch\">
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url(";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/image_2.jpg"), "html", null, true);
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
                        <a href=\"#\" class=\"btn btn-secondary rounded\">More info</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 d-flex ftco-animate\">
                <div class=\"blog-entry align-self-stretch\">
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url(";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/image_3.jpg"), "html", null, true);
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
                        <a href=\"#\" class=\"btn btn-secondary rounded\">More info</a>
                    </div>
                </div>
            </div>
            </div>


<table border=\"0\">
    <tr>
";
        // line 61
        echo "        <th>note-</th>
        <th>date-</th>
        <th>description</th>
";
        // line 66
        echo "    </tr>
    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeTableau"]) || array_key_exists("listeTableau", $context) ? $context["listeTableau"] : (function () { throw new RuntimeError('Variable "listeTableau" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 68
            echo "        <tr>
";
            // line 70
            echo "            <td> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "note", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
            <td> ";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
            echo "</td>
            <td> ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateR", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">Update</a></td>
            <td><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\">Supprimer</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "avis/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 77,  167 => 74,  163 => 73,  159 => 72,  155 => 71,  150 => 70,  147 => 68,  143 => 67,  140 => 66,  135 => 61,  113 => 41,  94 => 25,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
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
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url({{ asset('front/images/image_1.jpg') }});\">
                    </a>
                    <div class=\"text mt-3\">
                        <div class=\"meta mb-2\">
                            <div><a href=\"#\">Oct. 30, 2019</a></div>
                            <div><a href=\"#\">Admin</a></div>
                            <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                        </div>
                        <h3 class=\"heading\"><a href=\"#\">Hotel Laico Hammamet</a></h3>
                        <p>Agréable hotel dans la zone touristique de Hammamet </p>
                        <a href=\"#\" class=\"btn btn-secondary rounded\">More info</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 d-flex ftco-animate\">
                <div class=\"blog-entry align-self-stretch\">
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url({{ asset('front/images/image_2.jpg') }});\">
                    </a>
                    <div class=\"text mt-3\">
                        <div class=\"meta mb-2\">
                            <div><a href=\"#\">Oct. 30, 2019</a></div>
                            <div><a href=\"#\">Admin</a></div>
                            <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                        </div>
                        <h3 class=\"heading\"><a href=\"#\">Hotel La Cigale Tabarka</a></h3>
                        <p> Un des plus beaux Hotels de toute la Tunisie situé dans la région de Tabarka</p>
                        <a href=\"#\" class=\"btn btn-secondary rounded\">More info</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 d-flex ftco-animate\">
                <div class=\"blog-entry align-self-stretch\">
                    <a href=\"blog-single.html\" class=\"block-20 rounded\" style=\"background-image: url({{ asset('front/images/image_3.jpg') }});\">
                    </a>
                    <div class=\"text mt-3\">
                        <div class=\"meta mb-2\">
                            <div><a href=\"#\">Oct. 30, 2019</a></div>
                            <div><a href=\"#\">Admin</a></div>
                            <div><a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a></div>
                        </div>
                        <h3 class=\"heading\"><a href=\"#\">Hotel Hasdrubal Prestige Djerba</a></h3>
                        <p>Un merveilleux et luxueux hotel situé dans le sud tunisien exactement dans l'île des rêves Djerba</p>
                        <a href=\"#\" class=\"btn btn-secondary rounded\">More info</a>
                    </div>
                </div>
            </div>
            </div>


<table border=\"0\">
    <tr>
{#        <th>id</th>#}
        <th>note-</th>
        <th>date-</th>
        <th>description</th>
{#        <th>update</th>#}
{#        <th>delete</th>#}
    </tr>
    {% for p in listeTableau %}
        <tr>
{#            <td> {{ p.id }}</td>#}
            <td> {{ p.note }}</td>
            <td> {{ 'now'|date('d-m-Y') }}</td>
            <td> {{ p.description }}</td>
            <td><a href=\"{{ path('updateR',{'id':p.id  })}}\">Update</a></td>
            <td><a href=\"{{ path('delete',{'id':p.id  })}}\">Supprimer</a></td>
        </tr>
    {% endfor %}
        </section>

{% endblock %}


", "avis/read.html.twig", "C:\\Les_Combattants1\\templates\\avis\\read.html.twig");
    }
}
