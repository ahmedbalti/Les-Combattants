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

/* reponse_reclamation/create.html.twig */
class __TwigTemplate_06a21809847f6067337e5d9fa2b50d1b9257871fcba22917aaf63770e1379cf6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse_reclamation/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse_reclamation/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reponse_reclamation/create.html.twig", 1);
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
        echo " <section id=\"container\">
  <section id=\"main-content\">
   <section class=\"wrapper\">
    <h3><i class=\"fa fa-angle-right\"></i> Gérer les réponses des réclamations</h3>


    <div class=\"row mt\">
     <div class=\"col-md-12\">
      <div class=\"content-panel\">
       <table class=\"table table-striped table-advance table-hover\">
        <h4><i class=\"fa fa-angle-right\"></i> Ajouter la réponse d'une réclamation</h4>
        <div class=\"top-menu\">
         <ul class=\"nav pull-right top-menu\" class=\"btn btn-primary btn-sm\">
          <li>

          </li>
         </ul>
        </div>
        <br>
        <hr>

        <tbody>

        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 29, $this->source); })()), 'form_start');
        echo "

        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), 'row');
        echo "


        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 34, $this->source); })()), 'form_end');
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
        return "reponse_reclamation/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 34,  118 => 31,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
        <h4><i class=\"fa fa-angle-right\"></i> Ajouter la réponse d'une réclamation</h4>
        <div class=\"top-menu\">
         <ul class=\"nav pull-right top-menu\" class=\"btn btn-primary btn-sm\">
          <li>

          </li>
         </ul>
        </div>
        <br>
        <hr>

        <tbody>

        {{ form_start (f) }}

        {{ form_row(f.description)  }}


        {{ form_end(f) }}



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


{#{{ form_start (f) }}#}

{#{{ form_row(f.description) }}#}


{#{{ form_end(f) }}#}


", "reponse_reclamation/create.html.twig", "C:\\Les_Combattants1\\templates\\reponse_reclamation\\create.html.twig");
    }
}
