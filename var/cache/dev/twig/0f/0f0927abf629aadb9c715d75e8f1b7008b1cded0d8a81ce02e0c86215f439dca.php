<?php

/* templates/header.html.twig */
class __TwigTemplate_fd201b4a4b94ecad72a50be47241fdf6c91b047a38294fd1a4ecee5c993264ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1979c3cd42408547ab28a8b5fe529f55d6591e7284c5495e0f18182c9bc41d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1979c3cd42408547ab28a8b5fe529f55d6591e7284c5495e0f18182c9bc41d3b->enter($__internal_1979c3cd42408547ab28a8b5fe529f55d6591e7284c5495e0f18182c9bc41d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/header.html.twig"));

        $__internal_ef97aaf5a4485c161be4b02cc05583b2cfb253db50e2cb4e094fa4856270a083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef97aaf5a4485c161be4b02cc05583b2cfb253db50e2cb4e094fa4856270a083->enter($__internal_ef97aaf5a4485c161be4b02cc05583b2cfb253db50e2cb4e094fa4856270a083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/header.html.twig"));

        // line 1
        echo "      <!--header start-->
      <header class=\"header white-bg\">
            <div class=\"toggle-nav\">
                <div class=\"icon-reorder tooltips\" data-original-title=\"Toggle Navigation\" data-placement=\"bottom\"></div>
            </div>

            <!--logo start-->
            <a href=\"index.html\" class=\"logo\"><span>Exam</span><span class=\"lite\">Pro</span></a>
            <!--logo end-->

            <div class=\"nav search-row\" id=\"top_menu\">
                <!--  search form start -->
                <ul class=\"nav top-menu\">                    
                    <li>
                        <a><span>";
        // line 15
        if ($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "configs", array())), "schName", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "configs", array())), "schName", array()), "html", null, true);
            echo " ";
        }
        echo "</span></a>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class=\"top-nav notification-row\">                
                <!-- notificatoin dropdown start-->
                <ul class=\"nav pull-right top-menu\">
                    
                    <!-- task notificatoin start -->
                    <li id=\"task_notificatoin_bar\" class=\"dropdown\">
                    ";
        // line 27
        if ((array_key_exists("score_list", $context) &&  !twig_test_empty(($context["score_list"] ?? $this->getContext($context, "score_list"))))) {
            // line 28
            echo "                    ";
            $context["notifications"] = 0;
            // line 29
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["score_list"] ?? $this->getContext($context, "score_list")));
            foreach ($context['_seq'] as $context["_key"] => $context["list_item"]) {
                // line 30
                echo "                      ";
                if (($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array", false, true), 1, array(), "array", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 1, array(), "array")))) {
                    // line 31
                    echo "                      ";
                    $context["no_of_students"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 1, array(), "array"), "students", array()));
                    // line 32
                    echo "                      ";
                    $context["no_of_subjects"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array()));
                    // line 33
                    echo "                        ";
                    $context["no_of_items"] = 0;
                    // line 34
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["list_item"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 35
                        echo "                          ";
                        if (($this->getAttribute($this->getAttribute($context["item"], 0, array(), "array", false, true), "marks", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["item"], 0, array(), "array"), "marks", array()) > 0))) {
                            // line 36
                            echo "                            ";
                            $context["no_of_items"] = (($context["no_of_items"] ?? $this->getContext($context, "no_of_items")) + 1);
                            // line 37
                            echo "                            ";
                        }
                        // line 38
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 39
                    echo "                        ";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 1, array(), "array"), "students", array())) > 0)) {
                        // line 40
                        echo "                          ";
                        $context["percentage"] = ((($context["no_of_items"] ?? $this->getContext($context, "no_of_items")) / (($context["no_of_students"] ?? $this->getContext($context, "no_of_students")) * ($context["no_of_subjects"] ?? $this->getContext($context, "no_of_subjects")))) * 100);
                        // line 41
                        echo "                        ";
                    } else {
                        // line 42
                        echo "                          ";
                        $context["percentage"] = 0;
                        // line 43
                        echo "                        ";
                    }
                    // line 44
                    echo "                        ";
                    if ((($context["percentage"] ?? $this->getContext($context, "percentage")) < 100)) {
                        // line 45
                        echo "                            ";
                        $context["notifications"] = (($context["notifications"] ?? $this->getContext($context, "notifications")) + 1);
                        // line 46
                        echo "                        ";
                    }
                    // line 47
                    echo "                        ";
                }
                // line 48
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "  
                    ";
        }
        // line 50
        echo "                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <i class=\"icon-task-l\"></i>
                            ";
        // line 52
        if ((array_key_exists("score_list", $context) &&  !twig_test_empty(($context["score_list"] ?? $this->getContext($context, "score_list"))))) {
            // line 53
            echo "                                <span class=\"badge bg-important\">";
            echo twig_escape_filter($this->env, ($context["notifications"] ?? $this->getContext($context, "notifications")), "html", null, true);
            echo "</span>
                            ";
        }
        // line 55
        echo "                        </a>
                        <ul class=\"dropdown-menu extended tasks-bar\">
                            <div class=\"notify-arrow notify-arrow-blue\"></div>
                                <li>
                                    ";
        // line 59
        if ((array_key_exists("score_list", $context) &&  !twig_test_empty(($context["score_list"] ?? $this->getContext($context, "score_list"))))) {
            // line 60
            echo "                                        <p class=\"blue\">You have ";
            echo twig_escape_filter($this->env, ($context["notifications"] ?? $this->getContext($context, "notifications")), "html", null, true);
            echo " pending exam";
            if ((($context["notifications"] ?? $this->getContext($context, "notifications")) > 1)) {
                echo "s";
            }
            echo "</p>
                                    ";
        }
        // line 62
        echo "                                </li>

                                ";
        // line 64
        if ((array_key_exists("score_list", $context) &&  !twig_test_empty(($context["score_list"] ?? $this->getContext($context, "score_list"))))) {
            // line 65
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["score_list"] ?? $this->getContext($context, "score_list")));
            foreach ($context['_seq'] as $context["_key"] => $context["list_item"]) {
                // line 66
                echo "                                        ";
                if (($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array", false, true), 1, array(), "array", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 1, array(), "array")))) {
                    // line 67
                    echo "                                          ";
                    $context["no_of_students"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 1, array(), "array"), "students", array()));
                    // line 68
                    echo "                                          ";
                    $context["no_of_subjects"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array()));
                    // line 69
                    echo "                                            ";
                    $context["no_of_items"] = 0;
                    // line 70
                    echo "                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["list_item"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 71
                        echo "                                              ";
                        if (($this->getAttribute($this->getAttribute($context["item"], 0, array(), "array", false, true), "marks", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["item"], 0, array(), "array"), "marks", array()) > 0))) {
                            // line 72
                            echo "                                                ";
                            $context["no_of_items"] = (($context["no_of_items"] ?? $this->getContext($context, "no_of_items")) + 1);
                            // line 73
                            echo "                                                ";
                        }
                        // line 74
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                                            ";
                    if (((($context["no_of_students"] ?? $this->getContext($context, "no_of_students")) * ($context["no_of_subjects"] ?? $this->getContext($context, "no_of_subjects"))) > 0)) {
                        // line 76
                        echo "                                              ";
                        $context["percentage"] = ((($context["no_of_items"] ?? $this->getContext($context, "no_of_items")) / (($context["no_of_students"] ?? $this->getContext($context, "no_of_students")) * ($context["no_of_subjects"] ?? $this->getContext($context, "no_of_subjects")))) * 100);
                        // line 77
                        echo "                                            ";
                    } else {
                        // line 78
                        echo "                                              ";
                        $context["percentage"] = 0;
                        // line 79
                        echo "                                            ";
                    }
                    // line 80
                    echo "                                            ";
                    if ((($context["percentage"] ?? $this->getContext($context, "percentage")) < 100)) {
                        // line 81
                        echo "                                            <li>
                                                <a href=\"";
                        // line 82
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("record_scores", array("classId" => $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 1, array(), "array"), "id", array()), "companyId" => $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 2, array(), "array"), "id", array()))), "html", null, true);
                        echo "\">
                                                    <div class=\"task-info\">
                                                        <div class=\"desc\">";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 2, array(), "array"), "cTitle", array()), "html", null, true);
                        echo " </div>
                                                        <div class=\"percent\">";
                        // line 85
                        echo twig_escape_filter($this->env, twig_round(($context["percentage"] ?? $this->getContext($context, "percentage"))), "html", null, true);
                        echo "%</div>
                                                    </div>
                                                    <div class=\"progress progress-striped\">
                                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
                        // line 88
                        echo twig_escape_filter($this->env, ($context["percentage"] ?? $this->getContext($context, "percentage")), "html", null, true);
                        echo "%\">
                                                            <span class=\"sr-only\">";
                        // line 89
                        echo twig_escape_filter($this->env, twig_round(($context["percentage"] ?? $this->getContext($context, "percentage"))), "html", null, true);
                        echo "% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            ";
                    }
                    // line 95
                    echo "                                        ";
                }
                // line 96
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "  
                                ";
        }
        // line 98
        echo "                            <li class=\"external\">
                                <a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_examCompanies");
        echo "\">See All Exams</a>
                            </li>
                        </ul>
                    </li>
                    <!-- task notificatoin end -->
                    <!-- user login dropdown start-->
                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                           ";
        // line 110
        echo "                            <span class=\"username\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
                            <b class=\"caret\"></b>
                        </a>
                        <ul class=\"dropdown-menu extended logout\">
                            <div class=\"log-arrow-up\"></div>
                            <li class=\"eborder-top\">
                                <a href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_config");
        echo "\"><i class=\"icon_profile\"></i> Settings</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><i class=\"icon_key_alt\"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

";
        
        $__internal_1979c3cd42408547ab28a8b5fe529f55d6591e7284c5495e0f18182c9bc41d3b->leave($__internal_1979c3cd42408547ab28a8b5fe529f55d6591e7284c5495e0f18182c9bc41d3b_prof);

        
        $__internal_ef97aaf5a4485c161be4b02cc05583b2cfb253db50e2cb4e094fa4856270a083->leave($__internal_ef97aaf5a4485c161be4b02cc05583b2cfb253db50e2cb4e094fa4856270a083_prof);

    }

    public function getTemplateName()
    {
        return "templates/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 119,  296 => 116,  286 => 110,  275 => 99,  272 => 98,  263 => 96,  260 => 95,  251 => 89,  247 => 88,  241 => 85,  237 => 84,  232 => 82,  229 => 81,  226 => 80,  223 => 79,  220 => 78,  217 => 77,  214 => 76,  211 => 75,  205 => 74,  202 => 73,  199 => 72,  196 => 71,  191 => 70,  188 => 69,  185 => 68,  182 => 67,  179 => 66,  174 => 65,  172 => 64,  168 => 62,  158 => 60,  156 => 59,  150 => 55,  144 => 53,  142 => 52,  138 => 50,  129 => 48,  126 => 47,  123 => 46,  120 => 45,  117 => 44,  114 => 43,  111 => 42,  108 => 41,  105 => 40,  102 => 39,  96 => 38,  93 => 37,  90 => 36,  87 => 35,  82 => 34,  79 => 33,  76 => 32,  73 => 31,  70 => 30,  65 => 29,  62 => 28,  60 => 27,  41 => 15,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("      <!--header start-->
      <header class=\"header white-bg\">
            <div class=\"toggle-nav\">
                <div class=\"icon-reorder tooltips\" data-original-title=\"Toggle Navigation\" data-placement=\"bottom\"></div>
            </div>

            <!--logo start-->
            <a href=\"index.html\" class=\"logo\"><span>Exam</span><span class=\"lite\">Pro</span></a>
            <!--logo end-->

            <div class=\"nav search-row\" id=\"top_menu\">
                <!--  search form start -->
                <ul class=\"nav top-menu\">                    
                    <li>
                        <a><span>{% if app.user.configs|first.schName is defined %} {{app.user.configs|first.schName}} {% endif %}</span></a>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class=\"top-nav notification-row\">                
                <!-- notificatoin dropdown start-->
                <ul class=\"nav pull-right top-menu\">
                    
                    <!-- task notificatoin start -->
                    <li id=\"task_notificatoin_bar\" class=\"dropdown\">
                    {% if score_list is defined and score_list is not empty %}
                    {% set notifications = 0 %}
                    {% for list_item in score_list %}
                      {% if list_item[0][1] is defined and list_item[0][1] is not empty %}
                      {% set no_of_students = list_item[0][1].students|length %}
                      {% set no_of_subjects = app.user.subjects|length %}
                        {% set no_of_items = 0 %}
                        {% for item in list_item %}
                          {% if item[0].marks is defined and item[0].marks > 0 %}
                            {% set no_of_items = no_of_items + 1 %}
                            {% endif %}
                        {% endfor %}
                        {% if list_item[0][1].students|length > 0 %}
                          {% set percentage = (no_of_items / (no_of_students * no_of_subjects)) * 100 %}
                        {% else %}
                          {% set percentage = 0 %}
                        {% endif %}
                        {% if percentage < 100 %}
                            {% set notifications = notifications + 1 %}
                        {% endif %}
                        {% endif %}
                    {% endfor %}  
                    {% endif %}
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <i class=\"icon-task-l\"></i>
                            {% if score_list is defined and score_list is not empty %}
                                <span class=\"badge bg-important\">{{notifications}}</span>
                            {% endif %}
                        </a>
                        <ul class=\"dropdown-menu extended tasks-bar\">
                            <div class=\"notify-arrow notify-arrow-blue\"></div>
                                <li>
                                    {% if score_list is defined and score_list is not empty %}
                                        <p class=\"blue\">You have {{notifications}} pending exam{% if notifications > 1 %}s{% endif %}</p>
                                    {% endif %}
                                </li>

                                {% if score_list is defined and score_list is not empty %}
                                    {% for list_item in score_list %}
                                        {% if list_item[0][1] is defined and list_item[0][1] is not empty %}
                                          {% set no_of_students = list_item[0][1].students|length %}
                                          {% set no_of_subjects = app.user.subjects|length %}
                                            {% set no_of_items = 0 %}
                                            {% for item in list_item %}
                                              {% if item[0].marks is defined and item[0].marks > 0 %}
                                                {% set no_of_items = no_of_items + 1 %}
                                                {% endif %}
                                            {% endfor %}
                                            {% if no_of_students * no_of_subjects > 0 %}
                                              {% set percentage = (no_of_items / (no_of_students * no_of_subjects)) * 100 %}
                                            {% else %}
                                              {% set percentage = 0 %}
                                            {% endif %}
                                            {% if percentage < 100 %}
                                            <li>
                                                <a href=\"{{path('record_scores', {'classId': list_item[0][1].id, 'companyId':list_item[0][2].id})}}\">
                                                    <div class=\"task-info\">
                                                        <div class=\"desc\">{{list_item[0][2].cTitle}} </div>
                                                        <div class=\"percent\">{{percentage|round}}%</div>
                                                    </div>
                                                    <div class=\"progress progress-striped\">
                                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{percentage}}%\">
                                                            <span class=\"sr-only\">{{percentage|round}}% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            {% endif %}
                                        {% endif %}
                                    {% endfor %}  
                                {% endif %}
                            <li class=\"external\">
                                <a href=\"{{path('list_examCompanies')}}\">See All Exams</a>
                            </li>
                        </ul>
                    </li>
                    <!-- task notificatoin end -->
                    <!-- user login dropdown start-->
                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                           {#  <span class=\"profile-ava\">
                                <img alt=\"\" src=\"img/avatar1_small.jpg\">
                            </span> #}
                            <span class=\"username\">{{app.user.username}}</span>
                            <b class=\"caret\"></b>
                        </a>
                        <ul class=\"dropdown-menu extended logout\">
                            <div class=\"log-arrow-up\"></div>
                            <li class=\"eborder-top\">
                                <a href=\"{{path('update_config')}}\"><i class=\"icon_profile\"></i> Settings</a>
                            </li>
                            <li>
                                <a href=\"{{path('logout')}}\"><i class=\"icon_key_alt\"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

", "templates/header.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/templates/header.html.twig");
    }
}
