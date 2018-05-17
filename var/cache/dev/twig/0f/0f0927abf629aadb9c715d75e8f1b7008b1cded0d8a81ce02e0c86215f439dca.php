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
        $__internal_49b35540273d4ee7d441f0cbc1b86ed82cffa3b36c28f6ac2008031183100360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b35540273d4ee7d441f0cbc1b86ed82cffa3b36c28f6ac2008031183100360->enter($__internal_49b35540273d4ee7d441f0cbc1b86ed82cffa3b36c28f6ac2008031183100360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/header.html.twig"));

        $__internal_7d012be417933206928ea2a34ea15302f31d1197abbcb8aaf682aa46dffd56ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d012be417933206928ea2a34ea15302f31d1197abbcb8aaf682aa46dffd56ab->enter($__internal_7d012be417933206928ea2a34ea15302f31d1197abbcb8aaf682aa46dffd56ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/header.html.twig"));

        // line 1
        echo "      <!--header start-->
      <header class=\"header white-bg\">
            <div class=\"toggle-nav\">
                <div class=\"icon-reorder tooltips\" data-original-title=\"Toggle Navigation\" data-placement=\"bottom\"></div>
            </div>

            <!--logo start-->
            <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"logo\"><span>Exam</span><span class=\"lite\">Pro</span></a>
            <!--logo end-->
            ";
        // line 10
        if ((array_key_exists("info", $context) && (($context["info"] ?? $this->getContext($context, "info")) == "with_print_material"))) {
            // line 11
            echo "                <button id=\"triggerPrint\" class=\"btn btn-info btn-lg\" style=\"margin-top:5;\">Print</button>
            ";
        }
        // line 13
        echo "            <div class=\"nav search-row\" id=\"top_menu\">
                <!--  search form start -->
                <ul class=\"nav top-menu\">                    
                    <li>
                        <a><span>";
        // line 17
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
        // line 29
        if ((array_key_exists("score_list", $context) &&  !twig_test_empty(($context["score_list"] ?? $this->getContext($context, "score_list"))))) {
            // line 30
            echo "                    ";
            $context["notifications"] = 0;
            // line 31
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["score_list"] ?? $this->getContext($context, "score_list")));
            foreach ($context['_seq'] as $context["_key"] => $context["list_item"]) {
                // line 32
                echo "                      ";
                if (($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array", false, true), 1, array(), "array", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 1, array(), "array")))) {
                    // line 33
                    echo "                      ";
                    $context["no_of_students"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 1, array(), "array"), "students", array()));
                    // line 34
                    echo "                      ";
                    $context["no_of_subjects"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array()));
                    // line 35
                    echo "                        ";
                    $context["no_of_items"] = 0;
                    // line 36
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["list_item"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 37
                        echo "                          ";
                        if (($this->getAttribute($this->getAttribute($context["item"], 0, array(), "array", false, true), "marks", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["item"], 0, array(), "array"), "marks", array()) > 0))) {
                            // line 38
                            echo "                            ";
                            $context["no_of_items"] = (($context["no_of_items"] ?? $this->getContext($context, "no_of_items")) + 1);
                            // line 39
                            echo "                            ";
                        }
                        // line 40
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "                        ";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 1, array(), "array"), "students", array())) > 0)) {
                        // line 42
                        echo "                          ";
                        $context["percentage"] = ((($context["no_of_items"] ?? $this->getContext($context, "no_of_items")) / (($context["no_of_students"] ?? $this->getContext($context, "no_of_students")) * ($context["no_of_subjects"] ?? $this->getContext($context, "no_of_subjects")))) * 100);
                        // line 43
                        echo "                        ";
                    } else {
                        // line 44
                        echo "                          ";
                        $context["percentage"] = 0;
                        // line 45
                        echo "                        ";
                    }
                    // line 46
                    echo "                        ";
                    if ((($context["percentage"] ?? $this->getContext($context, "percentage")) < 100)) {
                        // line 47
                        echo "                            ";
                        $context["notifications"] = (($context["notifications"] ?? $this->getContext($context, "notifications")) + 1);
                        // line 48
                        echo "                        ";
                    }
                    // line 49
                    echo "                        ";
                }
                // line 50
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "  
                    ";
        }
        // line 52
        echo "                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <i class=\"icon-task-l\"></i>
                            ";
        // line 54
        if ((array_key_exists("score_list", $context) &&  !twig_test_empty(($context["score_list"] ?? $this->getContext($context, "score_list"))))) {
            // line 55
            echo "                                ";
            if ((($context["notifications"] ?? $this->getContext($context, "notifications")) > 0)) {
                // line 56
                echo "                                <span class=\"badge bg-important\">";
                echo twig_escape_filter($this->env, ($context["notifications"] ?? $this->getContext($context, "notifications")), "html", null, true);
                echo "</span>
                                ";
            }
            // line 58
            echo "                            ";
        }
        // line 59
        echo "                        </a>
                        <ul class=\"dropdown-menu extended tasks-bar\">
                            <div class=\"notify-arrow notify-arrow-blue\"></div>
                                <li>
                                    ";
        // line 63
        if ((array_key_exists("score_list", $context) &&  !twig_test_empty(($context["score_list"] ?? $this->getContext($context, "score_list"))))) {
            // line 64
            echo "                                        ";
            if ((($context["notifications"] ?? $this->getContext($context, "notifications")) > 0)) {
                // line 65
                echo "                                        <p class=\"blue\">You have ";
                echo twig_escape_filter($this->env, ($context["notifications"] ?? $this->getContext($context, "notifications")), "html", null, true);
                echo " pending exam";
                if ((($context["notifications"] ?? $this->getContext($context, "notifications")) > 1)) {
                    echo "s";
                }
                echo "</p>
                                        ";
            }
            // line 67
            echo "                                    ";
        }
        // line 68
        echo "                                </li>

                                ";
        // line 70
        if ((array_key_exists("score_list", $context) &&  !twig_test_empty(($context["score_list"] ?? $this->getContext($context, "score_list"))))) {
            // line 71
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["score_list"] ?? $this->getContext($context, "score_list")));
            foreach ($context['_seq'] as $context["_key"] => $context["list_item"]) {
                // line 72
                echo "                                        ";
                if (($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array", false, true), 1, array(), "array", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 1, array(), "array")))) {
                    // line 73
                    echo "                                          ";
                    $context["no_of_students"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 1, array(), "array"), "students", array()));
                    // line 74
                    echo "                                          ";
                    $context["no_of_subjects"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "subjects", array()));
                    // line 75
                    echo "                                            ";
                    $context["no_of_items"] = 0;
                    // line 76
                    echo "                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["list_item"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 77
                        echo "                                              ";
                        if (($this->getAttribute($this->getAttribute($context["item"], 0, array(), "array", false, true), "marks", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["item"], 0, array(), "array"), "marks", array()) > 0))) {
                            // line 78
                            echo "                                                ";
                            $context["no_of_items"] = (($context["no_of_items"] ?? $this->getContext($context, "no_of_items")) + 1);
                            // line 79
                            echo "                                                ";
                        }
                        // line 80
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 81
                    echo "                                            ";
                    if (((($context["no_of_students"] ?? $this->getContext($context, "no_of_students")) * ($context["no_of_subjects"] ?? $this->getContext($context, "no_of_subjects"))) > 0)) {
                        // line 82
                        echo "                                              ";
                        $context["percentage"] = ((($context["no_of_items"] ?? $this->getContext($context, "no_of_items")) / (($context["no_of_students"] ?? $this->getContext($context, "no_of_students")) * ($context["no_of_subjects"] ?? $this->getContext($context, "no_of_subjects")))) * 100);
                        // line 83
                        echo "                                            ";
                    } else {
                        // line 84
                        echo "                                              ";
                        $context["percentage"] = 0;
                        // line 85
                        echo "                                            ";
                    }
                    // line 86
                    echo "                                            ";
                    if ((($context["percentage"] ?? $this->getContext($context, "percentage")) < 100)) {
                        // line 87
                        echo "                                            <li>
                                                <a href=\"";
                        // line 88
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("record_scores", array("classId" => $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 1, array(), "array"), "id", array()), "companyId" => $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 2, array(), "array"), "id", array()))), "html", null, true);
                        echo "\">
                                                    <div class=\"task-info\">
                                                        <div class=\"desc\">";
                        // line 90
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["list_item"], 0, array(), "array"), 2, array(), "array"), "cTitle", array()), "html", null, true);
                        echo " </div>
                                                        <div class=\"percent\">";
                        // line 91
                        echo twig_escape_filter($this->env, twig_round(($context["percentage"] ?? $this->getContext($context, "percentage"))), "html", null, true);
                        echo "%</div>
                                                    </div>
                                                    <div class=\"progress progress-striped\">
                                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
                        // line 94
                        echo twig_escape_filter($this->env, ($context["percentage"] ?? $this->getContext($context, "percentage")), "html", null, true);
                        echo "%\">
                                                            <span class=\"sr-only\">";
                        // line 95
                        echo twig_escape_filter($this->env, twig_round(($context["percentage"] ?? $this->getContext($context, "percentage"))), "html", null, true);
                        echo "% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            ";
                    }
                    // line 101
                    echo "                                        ";
                }
                // line 102
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "  
                                ";
        }
        // line 104
        echo "                            <li class=\"external\">
                                <a href=\"";
        // line 105
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
        // line 116
        echo "                            <span class=\"username\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
                            <b class=\"caret\"></b>
                        </a>
                        <ul class=\"dropdown-menu extended logout\">
                            <div class=\"log-arrow-up\"></div>
                            <li class=\"eborder-top\">
                                <a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_config");
        echo "\"><i class=\"icon_profile\"></i> Settings</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 125
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
        
        $__internal_49b35540273d4ee7d441f0cbc1b86ed82cffa3b36c28f6ac2008031183100360->leave($__internal_49b35540273d4ee7d441f0cbc1b86ed82cffa3b36c28f6ac2008031183100360_prof);

        
        $__internal_7d012be417933206928ea2a34ea15302f31d1197abbcb8aaf682aa46dffd56ab->leave($__internal_7d012be417933206928ea2a34ea15302f31d1197abbcb8aaf682aa46dffd56ab_prof);

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
        return array (  324 => 125,  318 => 122,  308 => 116,  297 => 105,  294 => 104,  285 => 102,  282 => 101,  273 => 95,  269 => 94,  263 => 91,  259 => 90,  254 => 88,  251 => 87,  248 => 86,  245 => 85,  242 => 84,  239 => 83,  236 => 82,  233 => 81,  227 => 80,  224 => 79,  221 => 78,  218 => 77,  213 => 76,  210 => 75,  207 => 74,  204 => 73,  201 => 72,  196 => 71,  194 => 70,  190 => 68,  187 => 67,  177 => 65,  174 => 64,  172 => 63,  166 => 59,  163 => 58,  157 => 56,  154 => 55,  152 => 54,  148 => 52,  139 => 50,  136 => 49,  133 => 48,  130 => 47,  127 => 46,  124 => 45,  121 => 44,  118 => 43,  115 => 42,  112 => 41,  106 => 40,  103 => 39,  100 => 38,  97 => 37,  92 => 36,  89 => 35,  86 => 34,  83 => 33,  80 => 32,  75 => 31,  72 => 30,  70 => 29,  51 => 17,  45 => 13,  41 => 11,  39 => 10,  34 => 8,  25 => 1,);
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
            <a href=\"{{path('homepage')}}\" class=\"logo\"><span>Exam</span><span class=\"lite\">Pro</span></a>
            <!--logo end-->
            {% if info is defined and info == \"with_print_material\" %}
                <button id=\"triggerPrint\" class=\"btn btn-info btn-lg\" style=\"margin-top:5;\">Print</button>
            {% endif %}
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
                                {% if notifications > 0 %}
                                <span class=\"badge bg-important\">{{notifications}}</span>
                                {% endif %}
                            {% endif %}
                        </a>
                        <ul class=\"dropdown-menu extended tasks-bar\">
                            <div class=\"notify-arrow notify-arrow-blue\"></div>
                                <li>
                                    {% if score_list is defined and score_list is not empty %}
                                        {% if notifications > 0 %}
                                        <p class=\"blue\">You have {{notifications}} pending exam{% if notifications > 1 %}s{% endif %}</p>
                                        {% endif %}
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
