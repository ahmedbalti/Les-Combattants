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

/* reponse_reclamation/update.html.twig */
class __TwigTemplate_c013eeb326ca449c5252e0b0086f0228191b25c07cb4a1102100e73deb4b5f47 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse_reclamation/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse_reclamation/update.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reponse_reclamation/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
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

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo " <section id=\"container\">
  <section id=\"main-content\">
   <section class=\"wrapper\">
    <h3><i class=\"fa fa-angle-right\"></i> Gérer les réponses des réclamations</h3>


    <div class=\"row mt\">
     <div class=\"col-md-12\">
      <div class=\"content-panel\">
       <table class=\"table table-striped table-advance table-hover\">
        <h4><i class=\"fa fa-angle-right\"></i> Modifier la réponse d'une réclmation</h4>
        <div class=\"top-menu\">
         <ul class=\"nav pull-right top-menu\" class=\"btn btn-primary btn-sm\">
         </ul>
        </div>
        <hr>

        <tbody>

        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 26, $this->source); })()), 'form');
        echo "

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
        return "reponse_reclamation/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 26,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
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
        <h4><i class=\"fa fa-angle-right\"></i> Modifier la réponse d'une réclmation</h4>
        <div class=\"top-menu\">
         <ul class=\"nav pull-right top-menu\" class=\"btn btn-primary btn-sm\">
         </ul>
        </div>
        <hr>

        <tbody>

        {{ form(f) }}

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


{# {% block content %}#}

{#<h1>update reponse réclamation</h1>#}

{#{{ form(f) }}#}

{# {% endblock %}#}
", "reponse_reclamation/update.html.twig", "C:\\Les_Combattants1\\templates\\reponse_reclamation\\update.html.twig");
    }
}
