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

/* base.html.twig */
class __TwigTemplate_d9877dd0e39f1521ed25d99cd653a789ad8ce762d5b34cf60fe62d78287c101d extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Favicons -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">


";
        // line 17
        $this->displayBlock('css', $context, $blocks);
        // line 29
        echo "    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>

<body>
<section id=\"container\">
";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 338
        echo "
</section>

";
        // line 341
        $this->displayBlock('js', $context, $blocks);
        // line 358
        echo "

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CulturaApp";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 18
        echo "    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--external css-->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/zabuto_calendar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/gritter/css/jquery.gritter.css"), "html", null, true);
        echo "\" />
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/chart-master/Chart.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class=\"header black-bg\">
        <div class=\"sidebar-toggle-box\">
            <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
        </div>
        <!--logo start-->
        <a href=\"index.html\" class=\"logo\"><b>Cultu<span>ra</span></b></a>
        <!--logo end-->
        <div class=\"nav notify-row\" id=\"top_menu\">
            <!--  notification start -->
            <ul class=\"nav top-menu\">
                <!-- settings start -->
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-tasks\"></i>
                        <span class=\"badge bg-theme\">4</span>
                    </a>
                    <ul class=\"dropdown-menu extended tasks-bar\">
                        <div class=\"notify-arrow notify-arrow-green\"></div>
                        <li>
                            <p class=\"green\">You have 4 pending tasks</p>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">Admin Panel</div>
                                    <div class=\"percent\">40%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                        <span class=\"sr-only\">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">Database Update</div>
                                    <div class=\"percent\">60%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                        <span class=\"sr-only\">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">Product Development</div>
                                    <div class=\"percent\">80%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                        <span class=\"sr-only\">80% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">Payments Sent</div>
                                    <div class=\"percent\">70%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%\">
                                        <span class=\"sr-only\">70% Complete (Important)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"external\">
                            <a href=\"#\">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id=\"header_inbox_bar\" class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-envelope-o\"></i>
                        <span class=\"badge bg-theme\">5</span>
                    </a>
                    <ul class=\"dropdown-menu extended inbox\">
                        <div class=\"notify-arrow notify-arrow-green\"></div>
                        <li>
                            <p class=\"green\">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ui-zac.jpg"), "html", null, true);
        echo "\"></span>
                                <span class=\"subject\">
                  <span class=\"from\">Zac Snider</span>
                  <span class=\"time\">Just now</span>
                  </span>
                                <span class=\"message\">
                  Hi mate, how is everything?
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ui-divya.jpg"), "html", null, true);
        echo "\"></span>
                                <span class=\"subject\">
                  <span class=\"from\">Divya Manian</span>
                  <span class=\"time\">40 mins.</span>
                  </span>
                                <span class=\"message\">
                  Hi, I need your help with this.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ui-danro.jpg"), "html", null, true);
        echo "\"></span>
                                <span class=\"subject\">
                  <span class=\"from\">Dan Rogers</span>
                  <span class=\"time\">2 hrs.</span>
                  </span>
                                <span class=\"message\">
                  Love your new Dashboard.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ui-sherman.jpg"), "html", null, true);
        echo "\"></span>
                                <span class=\"subject\">
                  <span class=\"from\">Dj Sherman</span>
                  <span class=\"time\">4 hrs.</span>
                  </span>
                                <span class=\"message\">
                  Please, answer asap.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id=\"header_notification_bar\" class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-bell-o\"></i>
                        <span class=\"badge bg-warning\">7</span>
                    </a>
                    <ul class=\"dropdown-menu extended notification\">
                        <div class=\"notify-arrow notify-arrow-yellow\"></div>
                        <li>
                            <p class=\"yellow\">You have 7 new notifications</p>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                Server Overloaded.
                                <span class=\"small italic\">4 mins.</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-warning\"><i class=\"fa fa-bell\"></i></span>
                                Memory #2 Not Responding.
                                <span class=\"small italic\">30 mins.</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                Disk Space Reached 85%.
                                <span class=\"small italic\">2 hrs.</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-success\"><i class=\"fa fa-plus\"></i></span>
                                New User Registered.
                                <span class=\"small italic\">3 hrs.</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class=\"top-menu\">
            <ul class=\"nav pull-right top-menu\">
                <li><a class=\"logout\" href=\"login.html\">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id=\"sidebar\" class=\"nav-collapse \">
            <!-- sidebar menu start-->
            <ul class=\"sidebar-menu\" id=\"nav-accordion\">
                <p class=\"centered\"><a href=\"\"><img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ui-sam.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" width=\"80\"></a></p>
                <h5 class=\"centered\">Admin</h5>
                <li class=\"mt\">
                    <a class=\"active\" href=\"index.html\">
                        <i class=\"fa fa-dashboard\"></i>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-desktop\"></i>
                        <span>Events</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"lieu.html\">Places</a></li>
                        <li><a href=\"events.html\">Events</a></li>
                    </ul>
                </li>


                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-desktop\"></i>
                        <span>Clubs</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"restaurants.html\">Restaurants</a></li>
                        <li><a href=\"tablesRestaurants.html\">Restaurants Tables</a></li>
                        <li><a href=\"bars.html\">Bars</a></li>
                        <li><a href=\"barsTables.html\">Bars Tables</a></li>
                    </ul>
                </li>



                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-desktop\"></i>
                        <span>Accommodation</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"hotels.html\">Hotels</a></li>
                        <li><a href=\"chambresHotels.html\">Hotels rooms</a></li>
                        <li><a href=\"maison.html\">Guest houses</a></li>
                        <li><a href=\"chambresMaison.html\">Houses rooms</a></li>
                    </ul>
                </li>


                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-desktop\"></i>
                        <span>Récompense</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"gifts.html\">Gifts</a></li>
                        <li><a href=\"promotion.html\">Promotions</a></li>
                    </ul>
                </li>


                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-comments-o\"></i>
                        <span>Chat Room</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"lobby.html\">Lobby</a></li>
                        <li><a href=\"chat_room.html\"> Chat Room</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"google_maps.html\">
                        <i class=\"fa fa-map-marker\"></i>
                        <span>Google Maps </span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    ";
        // line 334
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 335
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 341
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 342
        echo "<!-- js placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script class=\"include\" type=\"text/javascript\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 348
        echo "lib/jquery.nicescroll.js";
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
<!--common script for all pages-->
<script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/common-scripts.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/gritter/js/jquery.gritter.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/gritter-conf.js"), "html", null, true);
        echo "\"></script>
<!--script for this page-->
<script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/sparkline-chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/zabuto_calendar.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  590 => 356,  586 => 355,  581 => 353,  577 => 352,  573 => 351,  568 => 349,  564 => 348,  560 => 347,  556 => 346,  552 => 345,  547 => 343,  544 => 342,  534 => 341,  523 => 335,  504 => 334,  418 => 251,  336 => 172,  321 => 160,  306 => 148,  291 => 136,  193 => 40,  183 => 39,  171 => 27,  167 => 26,  163 => 25,  158 => 23,  154 => 22,  150 => 21,  145 => 19,  142 => 18,  132 => 17,  113 => 10,  98 => 358,  96 => 341,  91 => 338,  89 => 39,  77 => 29,  75 => 17,  69 => 14,  65 => 13,  59 => 10,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
    <title>{% block title %}CulturaApp{% endblock %}</title>

    <!-- Favicons -->
    <link href=\"{{ asset('img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">


{% block css %}
    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!--external css-->
    <link href=\"{{ asset('lib/font-awesome/css/font-awesome.css') }}\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/zabuto_calendar.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lib/gritter/css/jquery.gritter.css') }}\" />
    <!-- Custom styles for this template -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style-responsive.css') }}\" rel=\"stylesheet\">
    <script src=\"{{ asset('lib/chart-master/Chart.js') }}\"></script>
{% endblock %}
    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>

<body>
<section id=\"container\">
{% block body %}
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class=\"header black-bg\">
        <div class=\"sidebar-toggle-box\">
            <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
        </div>
        <!--logo start-->
        <a href=\"index.html\" class=\"logo\"><b>Cultu<span>ra</span></b></a>
        <!--logo end-->
        <div class=\"nav notify-row\" id=\"top_menu\">
            <!--  notification start -->
            <ul class=\"nav top-menu\">
                <!-- settings start -->
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-tasks\"></i>
                        <span class=\"badge bg-theme\">4</span>
                    </a>
                    <ul class=\"dropdown-menu extended tasks-bar\">
                        <div class=\"notify-arrow notify-arrow-green\"></div>
                        <li>
                            <p class=\"green\">You have 4 pending tasks</p>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">Admin Panel</div>
                                    <div class=\"percent\">40%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                        <span class=\"sr-only\">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">Database Update</div>
                                    <div class=\"percent\">60%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                        <span class=\"sr-only\">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">Product Development</div>
                                    <div class=\"percent\">80%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                        <span class=\"sr-only\">80% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <div class=\"task-info\">
                                    <div class=\"desc\">Payments Sent</div>
                                    <div class=\"percent\">70%</div>
                                </div>
                                <div class=\"progress progress-striped\">
                                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%\">
                                        <span class=\"sr-only\">70% Complete (Important)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"external\">
                            <a href=\"#\">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id=\"header_inbox_bar\" class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-envelope-o\"></i>
                        <span class=\"badge bg-theme\">5</span>
                    </a>
                    <ul class=\"dropdown-menu extended inbox\">
                        <div class=\"notify-arrow notify-arrow-green\"></div>
                        <li>
                            <p class=\"green\">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"photo\"><img alt=\"avatar\" src=\"{{ asset('img/ui-zac.jpg') }}\"></span>
                                <span class=\"subject\">
                  <span class=\"from\">Zac Snider</span>
                  <span class=\"time\">Just now</span>
                  </span>
                                <span class=\"message\">
                  Hi mate, how is everything?
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"photo\"><img alt=\"avatar\" src=\"{{ asset('img/ui-divya.jpg') }}\"></span>
                                <span class=\"subject\">
                  <span class=\"from\">Divya Manian</span>
                  <span class=\"time\">40 mins.</span>
                  </span>
                                <span class=\"message\">
                  Hi, I need your help with this.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"photo\"><img alt=\"avatar\" src=\"{{ asset('img/ui-danro.jpg') }}\"></span>
                                <span class=\"subject\">
                  <span class=\"from\">Dan Rogers</span>
                  <span class=\"time\">2 hrs.</span>
                  </span>
                                <span class=\"message\">
                  Love your new Dashboard.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"photo\"><img alt=\"avatar\" src=\"{{ asset('img/ui-sherman.jpg') }}\"></span>
                                <span class=\"subject\">
                  <span class=\"from\">Dj Sherman</span>
                  <span class=\"time\">4 hrs.</span>
                  </span>
                                <span class=\"message\">
                  Please, answer asap.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id=\"header_notification_bar\" class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                        <i class=\"fa fa-bell-o\"></i>
                        <span class=\"badge bg-warning\">7</span>
                    </a>
                    <ul class=\"dropdown-menu extended notification\">
                        <div class=\"notify-arrow notify-arrow-yellow\"></div>
                        <li>
                            <p class=\"yellow\">You have 7 new notifications</p>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                Server Overloaded.
                                <span class=\"small italic\">4 mins.</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-warning\"><i class=\"fa fa-bell\"></i></span>
                                Memory #2 Not Responding.
                                <span class=\"small italic\">30 mins.</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                Disk Space Reached 85%.
                                <span class=\"small italic\">2 hrs.</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-success\"><i class=\"fa fa-plus\"></i></span>
                                New User Registered.
                                <span class=\"small italic\">3 hrs.</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class=\"top-menu\">
            <ul class=\"nav pull-right top-menu\">
                <li><a class=\"logout\" href=\"login.html\">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id=\"sidebar\" class=\"nav-collapse \">
            <!-- sidebar menu start-->
            <ul class=\"sidebar-menu\" id=\"nav-accordion\">
                <p class=\"centered\"><a href=\"\"><img src=\"{{ asset('img/ui-sam.jpg') }}\" class=\"img-circle\" width=\"80\"></a></p>
                <h5 class=\"centered\">Admin</h5>
                <li class=\"mt\">
                    <a class=\"active\" href=\"index.html\">
                        <i class=\"fa fa-dashboard\"></i>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-desktop\"></i>
                        <span>Events</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"lieu.html\">Places</a></li>
                        <li><a href=\"events.html\">Events</a></li>
                    </ul>
                </li>


                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-desktop\"></i>
                        <span>Clubs</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"restaurants.html\">Restaurants</a></li>
                        <li><a href=\"tablesRestaurants.html\">Restaurants Tables</a></li>
                        <li><a href=\"bars.html\">Bars</a></li>
                        <li><a href=\"barsTables.html\">Bars Tables</a></li>
                    </ul>
                </li>



                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-desktop\"></i>
                        <span>Accommodation</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"hotels.html\">Hotels</a></li>
                        <li><a href=\"chambresHotels.html\">Hotels rooms</a></li>
                        <li><a href=\"maison.html\">Guest houses</a></li>
                        <li><a href=\"chambresMaison.html\">Houses rooms</a></li>
                    </ul>
                </li>


                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-desktop\"></i>
                        <span>Récompense</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"gifts.html\">Gifts</a></li>
                        <li><a href=\"promotion.html\">Promotions</a></li>
                    </ul>
                </li>


                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-comments-o\"></i>
                        <span>Chat Room</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"lobby.html\">Lobby</a></li>
                        <li><a href=\"chat_room.html\"> Chat Room</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"google_maps.html\">
                        <i class=\"fa fa-map-marker\"></i>
                        <span>Google Maps </span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    {% block content %}

    {% endblock %}
{% endblock %}

</section>

{% block js %}
<!-- js placed at the end of the document so the pages load faster -->
<script src=\"{{ asset('lib/jquery/jquery.min.js') }}\"></script>

<script src=\"{{ asset('lib/bootstrap/js/bootstrap.min.js') }}\"></script>
<script class=\"include\" type=\"text/javascript\" src=\"{{ asset('lib/jquery.dcjqaccordion.2.7.js') }}\"></script>
<script src=\"{{ asset('lib/jquery.scrollTo.min.js') }}\"></script>
<script src=\"{{ ('lib/jquery.nicescroll.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('lib/jquery.sparkline.js') }}\"></script>
<!--common script for all pages-->
<script src=\"{{ asset('lib/common-scripts.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('lib/gritter/js/jquery.gritter.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('lib/gritter-conf.js') }}\"></script>
<!--script for this page-->
<script src=\"{{ asset('lib/sparkline-chart.js') }}\"></script>
<script src=\"{{ asset('lib/zabuto_calendar.js') }}\"></script>
{% endblock %}


</body>

</html>
", "base.html.twig", "C:\\Les_Combattants1\\templates\\base.html.twig");
    }
}
