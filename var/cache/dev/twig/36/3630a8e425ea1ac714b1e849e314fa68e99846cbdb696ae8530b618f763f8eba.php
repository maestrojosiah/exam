<?php

/* templates/aside.html.twig */
class __TwigTemplate_b75792ef86550005eada58a3609cf3ef23a430ff2c8688b0aac891eabe2218f2 extends Twig_Template
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
        $__internal_de21888567e1e0cbd54c98e3b5f03716e2245a2a0f2b383523805b2a0bb976ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de21888567e1e0cbd54c98e3b5f03716e2245a2a0f2b383523805b2a0bb976ff->enter($__internal_de21888567e1e0cbd54c98e3b5f03716e2245a2a0f2b383523805b2a0bb976ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/aside.html.twig"));

        $__internal_0074dc8b2b4b31573be0d80c12d4b2f7f8c4bd59eea6f34996f821270dbd6624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0074dc8b2b4b31573be0d80c12d4b2f7f8c4bd59eea6f34996f821270dbd6624->enter($__internal_0074dc8b2b4b31573be0d80c12d4b2f7f8c4bd59eea6f34996f821270dbd6624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "templates/aside.html.twig"));

        // line 1
        echo "      <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\">                
                  <li class=\"active\">
                      <a class=\"\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                          <i class=\"icon_house_alt\"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" class=\"\" id=\"class_menu\">
                          <i class=\"icon_lightbulb_alt\"></i>
                          <span>Classes</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_class");
        echo "\">Add Class</a></li>
                          <li><a class=\"\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_classes");
        echo "\">List Classes</a></li>
                      </ul>
                  </li>
                  <li class=\"sub-menu\">                     
                      <a href=\"javascript:;\" class=\"\" id=\"subject_menu\">
                          <i class=\"icon_documents_alt\"></i>
                          <span>Subjects</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_subject");
        echo "\">Add Subject</a></li>
                          <li><a class=\"\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_subjects");
        echo "\">List Subjects</a></li>
                      </ul>                      
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" class=\"\">
                          <i class=\"icon_folder\"></i>
                          <span>Child Subjects</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_childSubject");
        echo "\">Add Child Subject</a></li>
                          <li><a class=\"\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_childSubjects");
        echo "\">List Child Subjects</a></li>
                      </ul>
                  </li>
                  
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" class=\"\" id=\"student_menu\">
                          <i class=\"icon_group\"></i>
                          <span>Students</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_student");
        echo "\">Add Student</a></li>                          
                          <li><a class=\"\" href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("choose_class");
        echo "\">List Students</a></li>
                      </ul>
                  </li>                  
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" class=\"\" id=\"exam_menu\">
                          <i class=\"icon_document_alt\"></i>
                          <span>Exams</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">                          
                          <li><a class=\"\" href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_examCompany");
        echo "\">Add Exam</a></li>
                          <li><a class=\"\" href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_examCompanies");
        echo "\"><span>List Exams</span></a></li>
                      </ul>
                  </li>
                  <li class=\"sub-menu\">
                      <a class=\"\" href=\"http://timetabler.local\">
                          <i class=\"icon_house_alt\"></i>
                          <span>Timetabler</span>
                      </a>
                  </li>
                  <li>
                      <a class=\"\" href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_config");
        echo "\">
                          <i class=\"icon_genius\"></i>
                          <span>Settings</span>
                      </a>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

";
        
        $__internal_de21888567e1e0cbd54c98e3b5f03716e2245a2a0f2b383523805b2a0bb976ff->leave($__internal_de21888567e1e0cbd54c98e3b5f03716e2245a2a0f2b383523805b2a0bb976ff_prof);

        
        $__internal_0074dc8b2b4b31573be0d80c12d4b2f7f8c4bd59eea6f34996f821270dbd6624->leave($__internal_0074dc8b2b4b31573be0d80c12d4b2f7f8c4bd59eea6f34996f821270dbd6624_prof);

    }

    public function getTemplateName()
    {
        return "templates/aside.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 75,  121 => 65,  117 => 64,  104 => 54,  100 => 53,  86 => 42,  82 => 41,  69 => 31,  65 => 30,  52 => 20,  48 => 19,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("      <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\">                
                  <li class=\"active\">
                      <a class=\"\" href=\"{{path('homepage')}}\">
                          <i class=\"icon_house_alt\"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" class=\"\" id=\"class_menu\">
                          <i class=\"icon_lightbulb_alt\"></i>
                          <span>Classes</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"{{path('new_class')}}\">Add Class</a></li>
                          <li><a class=\"\" href=\"{{path('list_classes')}}\">List Classes</a></li>
                      </ul>
                  </li>
                  <li class=\"sub-menu\">                     
                      <a href=\"javascript:;\" class=\"\" id=\"subject_menu\">
                          <i class=\"icon_documents_alt\"></i>
                          <span>Subjects</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"{{path('new_subject')}}\">Add Subject</a></li>
                          <li><a class=\"\" href=\"{{path('list_subjects')}}\">List Subjects</a></li>
                      </ul>                      
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" class=\"\">
                          <i class=\"icon_folder\"></i>
                          <span>Child Subjects</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"{{path('new_childSubject')}}\">Add Child Subject</a></li>
                          <li><a class=\"\" href=\"{{path('list_childSubjects')}}\">List Child Subjects</a></li>
                      </ul>
                  </li>
                  
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" class=\"\" id=\"student_menu\">
                          <i class=\"icon_group\"></i>
                          <span>Students</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"{{path('new_student')}}\">Add Student</a></li>                          
                          <li><a class=\"\" href=\"{{path('choose_class')}}\">List Students</a></li>
                      </ul>
                  </li>                  
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" class=\"\" id=\"exam_menu\">
                          <i class=\"icon_document_alt\"></i>
                          <span>Exams</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">                          
                          <li><a class=\"\" href=\"{{path('new_examCompany')}}\">Add Exam</a></li>
                          <li><a class=\"\" href=\"{{path('list_examCompanies')}}\"><span>List Exams</span></a></li>
                      </ul>
                  </li>
                  <li class=\"sub-menu\">
                      <a class=\"\" href=\"http://timetabler.local\">
                          <i class=\"icon_house_alt\"></i>
                          <span>Timetabler</span>
                      </a>
                  </li>
                  <li>
                      <a class=\"\" href=\"{{path('update_config')}}\">
                          <i class=\"icon_genius\"></i>
                          <span>Settings</span>
                      </a>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

", "templates/aside.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/templates/aside.html.twig");
    }
}
