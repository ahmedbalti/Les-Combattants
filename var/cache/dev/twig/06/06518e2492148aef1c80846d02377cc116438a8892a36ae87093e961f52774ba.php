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

/* reponse_reclamation/read.html.twig */
class __TwigTemplate_83f2833d9ddb231798f98b7f5d120d63cb2e6c9c3bfc013a2ee55ca9f9cf15c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse_reclamation/read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse_reclamation/read.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reponse_reclamation/read.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <section id=\"container\">
        <section id=\"main-content\">
            <section class=\"wrapper\">
                <h3><i class=\"fa fa-angle-right\"></i> Gérer les réponses des réclamations</h3>


                <div class=\"row mt\">
                    <div class=\"col-md-12\">
                        <div class=\"content-panel\">
                            <table class=\"table table-striped table-advance table-hover\">
                                <h4><i class=\"fa fa-angle-right\"></i>Réponses Réclamations</h4>

";
        // line 71
        echo "
                                <form method=\"post\" action=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Recherche");
        echo "\">
                                    <label>Recherche</label>
                                    <input type=\"text\"  name=\"search\"><input type=\"submit\"  class=\"btn btn-primary btn-sm\" value=\"Recherche \">
                                </form>


                                <hr>
                                <thead>
                                <tr>
                                    ";
        // line 81
        $context["flashbag_notices"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "session", [], "any", false, false, false, 81), "flashbag", [], "any", false, false, false, 81), "get", [0 => "notice"], "method", false, false, false, 81);
        // line 82
        echo "                                    ";
        if ( !twig_test_empty((isset($context["flashbag_notices"]) || array_key_exists("flashbag_notices", $context) ? $context["flashbag_notices"] : (function () { throw new RuntimeError('Variable "flashbag_notices" does not exist.', 82, $this->source); })()))) {
            // line 83
            echo "                                        <ul class=\"msg\">
                                            ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashbag_notices"]) || array_key_exists("flashbag_notices", $context) ? $context["flashbag_notices"] : (function () { throw new RuntimeError('Variable "flashbag_notices" does not exist.', 84, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                // line 85
                echo "                                                <h3 align=\"center\"><li>";
                echo twig_escape_filter($this->env, $context["notice"], "html", null, true);
                echo "</li></h3>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                                        </ul>
                                    ";
        }
        // line 89
        echo "                                    <th><i class=\" fa fa-edit\"></i> Description</th>
                                    <th><i class=\" fa fa-edit\"></i> Actions</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>


                                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeTableau"]) || array_key_exists("listeTableau", $context) ? $context["listeTableau"] : (function () { throw new RuntimeError('Variable "listeTableau" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 98
            echo "                                    <tr>
                                        <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 99), "html", null, true);
            echo " </td>


                                        <td>
                                            <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                            <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateR", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            echo " \"  class=\"btn btn-primary btn-xs\" ><i class=\"fa fa-pencil\"></i></button></a>
                                            <a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteR", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\"><button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button></a>

                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                                <div class=\"top-menu\">
                                    <ul class=\"nav pull-right top-menu\" class=\"btn btn-primary btn-sm\">
                                        <li>
                                            <a class=\"logout\"  href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create");
        echo " \">Ajouter</a>
                                        </li>
                                    </ul>
                                </div>

                                </tbody>
                            </table>
                        </div>
                        <!-- /content-panel -->
                    </div>
                    <!-- /col-md-12 -->
                </div>
                <!-- /row -->
            </section>
        </section>
        <!-- /MAIN CONTENT -->
        <!--main content end-->
        <!--footer start-->
        <footer class=\"site-footer\">
            <div class=\"text-center\">
                <p>
                    <strong></strong>
                </p>
                <div class=\"credits\">

                    <a href=\"https://templatemag.com/\"> </a>
                </div>
                <a href=\"basic_table.html#\" class=\"go-top\">
                    <i class=\"fa fa-angle-up\"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reponse_reclamation/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 113,  182 => 110,  171 => 105,  167 => 104,  159 => 99,  156 => 98,  152 => 97,  142 => 89,  138 => 87,  129 => 85,  125 => 84,  122 => 83,  119 => 82,  117 => 81,  105 => 72,  102 => 71,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block content %}
    <section id=\"container\">
        <section id=\"main-content\">
            <section class=\"wrapper\">
                <h3><i class=\"fa fa-angle-right\"></i> Gérer les réponses des réclamations</h3>


                <div class=\"row mt\">
                    <div class=\"col-md-12\">
                        <div class=\"content-panel\">
                            <table class=\"table table-striped table-advance table-hover\">
                                <h4><i class=\"fa fa-angle-right\"></i>Réponses Réclamations</h4>

{#                                <h2>Search A Post !! </h2>#}
{#                                <div class=\"sidebar-search\">#}
{#                                    <div class=\"input-group custom-search-form\">#}
{#                                        <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search here\">#}
{#                                    </div>#}
{#                                </div>#}
{#                                <ul class=\"nav\" id=\"side-menu\">#}
{#                                    <li>#}
{#                                        <a href=\"#\">Search Results<span class=\"fa arrow\"></span></a>#}
{#                                    </li>#}
{#                                </ul>#}
{#                                <script type=\"text/javascript\" >#}
{#                                    jQuery(document).ready(function ()#}
{#                                    {#}
{#                                        var searchRequest = null;#}
{#                                        \$(\"#search\").keyup(function (){#}
{#                                            var minlength=1;#}
{#                                            var that = this;#}
{#                                            var value = \$(this).val();#}
{#                                            var entitySelector = \$(\"entitiesNav\").html('');#}
{#                                            if (value.length>=minlength){#}
{#                                                if(searchRequest !=null){#}
{#                                                    searchRequest.abort();#}
{#                                                    searchRequest=\$.ajax({#}
{#                                                        type:\"GET\",#}
{#                                                        url:\"{{ path('ajax_search') }}\",#}
{#                                                        data:{#}
{#                                                            'q': value#}
{#                                                        },#}
{#                                                        dataType: \"text\",#}
{#                                                        success: funtion(msg){#}
{#                                                            if(value===\$(that).val()){#}
{#                                                                var result = JSON.parse(msg);#}
{#                                                                \$.each(result,function(key,arr){#}
{#                                                                    \$.each(arr,function (id,value){#}
{#                                                                        if(key==='posts'){#}
{#                                                                            if(id!=='error'){#}
{#                                                                                console.log(value[1]);#}
{#                                                                                entitySelector.append('<li><b>'+value[1]+'</b><a href=\"read\"</a></li>');#}
{#                                                                            }else{#}
{#                                                                                entitySelector.append('<li class=\"errorLi\">'+value+'</li>');#}
{#                                                                            }#}
{#                                                                        }#}
{#                                                                    });#}
{#                                                                });#}
{#                                                            }#}
{#                                                    }#}
{#                                                    }#}
{#                                                }#}
{#                                            }#}
{#                                        });#}
{#                                    });#}
{#                                </script>#}

                                <form method=\"post\" action=\"{{ path('Recherche') }}\">
                                    <label>Recherche</label>
                                    <input type=\"text\"  name=\"search\"><input type=\"submit\"  class=\"btn btn-primary btn-sm\" value=\"Recherche \">
                                </form>


                                <hr>
                                <thead>
                                <tr>
                                    {% set flashbag_notices = app.session.flashbag.get('notice') %}
                                    {% if flashbag_notices is not empty %}
                                        <ul class=\"msg\">
                                            {% for notice in flashbag_notices %}
                                                <h3 align=\"center\"><li>{{ notice }}</li></h3>
                                            {% endfor %}
                                        </ul>
                                    {% endif %}
                                    <th><i class=\" fa fa-edit\"></i> Description</th>
                                    <th><i class=\" fa fa-edit\"></i> Actions</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>


                                {% for p in listeTableau %}
                                    <tr>
                                        <td>{{ p.description }} </td>


                                        <td>
                                            <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                            <a href=\"{{ path('updateR', {'id': p.id}) }} \"  class=\"btn btn-primary btn-xs\" ><i class=\"fa fa-pencil\"></i></button></a>
                                            <a href=\"{{ path('deleteR', {'id': p.id}) }}\"><button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button></a>

                                        </td>
                                    </tr>
                                {% endfor %}
                                <div class=\"top-menu\">
                                    <ul class=\"nav pull-right top-menu\" class=\"btn btn-primary btn-sm\">
                                        <li>
                                            <a class=\"logout\"  href=\"{{ path('create') }} \">Ajouter</a>
                                        </li>
                                    </ul>
                                </div>

                                </tbody>
                            </table>
                        </div>
                        <!-- /content-panel -->
                    </div>
                    <!-- /col-md-12 -->
                </div>
                <!-- /row -->
            </section>
        </section>
        <!-- /MAIN CONTENT -->
        <!--main content end-->
        <!--footer start-->
        <footer class=\"site-footer\">
            <div class=\"text-center\">
                <p>
                    <strong></strong>
                </p>
                <div class=\"credits\">

                    <a href=\"https://templatemag.com/\"> </a>
                </div>
                <a href=\"basic_table.html#\" class=\"go-top\">
                    <i class=\"fa fa-angle-up\"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>
{% endblock %}



{#{% extends 'base.html.twig' %}#}

{# {% block content %}#}

{#<table border=\"2\">#}
{#    <tr>#}
{#        <th>id</th>#}
{#        <th>description</th>#}
{#        <th>update</th>#}
{#        <th>delete</th>#}
{#    </tr>#}
{#    {% for p in listeTableau %}#}
{#    <tr>#}
{#        <td> {{ p.id }}</td>#}
{#        <td> {{ p.description }}</td>#}
{#        <td><a href=\"{{ path('update',{'id':p.id  })}}\">Update</a></td>#}
{#        <td><a href=\"{{ path('delete',{'id':p.id  })}}\">Supprimer</a></td>#}
{#    </tr>#}
{#{%endfor %}#}
{#  {% endblock %}#}", "reponse_reclamation/read.html.twig", "C:\\Les_Combattants1\\templates\\reponse_reclamation\\read.html.twig");
    }
}
