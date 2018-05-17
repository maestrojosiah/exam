<?php

/* student/list.html.twig */
class __TwigTemplate_d924bbff480ee562b8e518fd967427fdda08f92ebea3597d2c338dd986368c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/list.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa7337f8ea9bd7d2f1de68f1dbe1dcf3c678671bf2ac9dcb0ff875ce4b898189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa7337f8ea9bd7d2f1de68f1dbe1dcf3c678671bf2ac9dcb0ff875ce4b898189->enter($__internal_fa7337f8ea9bd7d2f1de68f1dbe1dcf3c678671bf2ac9dcb0ff875ce4b898189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/list.html.twig"));

        $__internal_6cde5cd9c8bb3b2f9ef4e2c318292bf5f55cf682e11a2b36c4f1852f35a5fe5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cde5cd9c8bb3b2f9ef4e2c318292bf5f55cf682e11a2b36c4f1852f35a5fe5f->enter($__internal_6cde5cd9c8bb3b2f9ef4e2c318292bf5f55cf682e11a2b36c4f1852f35a5fe5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa7337f8ea9bd7d2f1de68f1dbe1dcf3c678671bf2ac9dcb0ff875ce4b898189->leave($__internal_fa7337f8ea9bd7d2f1de68f1dbe1dcf3c678671bf2ac9dcb0ff875ce4b898189_prof);

        
        $__internal_6cde5cd9c8bb3b2f9ef4e2c318292bf5f55cf682e11a2b36c4f1852f35a5fe5f->leave($__internal_6cde5cd9c8bb3b2f9ef4e2c318292bf5f55cf682e11a2b36c4f1852f35a5fe5f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d0ab88b59800e4280f1635004a98a81c15262e96400b56e1b959fc357ce81a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0ab88b59800e4280f1635004a98a81c15262e96400b56e1b959fc357ce81a0->enter($__internal_9d0ab88b59800e4280f1635004a98a81c15262e96400b56e1b959fc357ce81a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0ccb2a062b8907906b5308958438c1cb384b8f50316c58fa55bab437dd51d07c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ccb2a062b8907906b5308958438c1cb384b8f50316c58fa55bab437dd51d07c->enter($__internal_0ccb2a062b8907906b5308958438c1cb384b8f50316c58fa55bab437dd51d07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
    <!-- DataTables CSS -->
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-plugins/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- DataTables Responsive CSS -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-responsive/dataTables.responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_0ccb2a062b8907906b5308958438c1cb384b8f50316c58fa55bab437dd51d07c->leave($__internal_0ccb2a062b8907906b5308958438c1cb384b8f50316c58fa55bab437dd51d07c_prof);

        
        $__internal_9d0ab88b59800e4280f1635004a98a81c15262e96400b56e1b959fc357ce81a0->leave($__internal_9d0ab88b59800e4280f1635004a98a81c15262e96400b56e1b959fc357ce81a0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7591fb797e09c0b9d0ae168782f25a47841882d6f66fe2a4adc892f71659e887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7591fb797e09c0b9d0ae168782f25a47841882d6f66fe2a4adc892f71659e887->enter($__internal_7591fb797e09c0b9d0ae168782f25a47841882d6f66fe2a4adc892f71659e887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8cbc973bab572618fc4d2b4fb52d022c899e4301831f965e6a48f68acfe19aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cbc973bab572618fc4d2b4fb52d022c899e4301831f965e6a48f68acfe19aab->enter($__internal_8cbc973bab572618fc4d2b4fb52d022c899e4301831f965e6a48f68acfe19aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<body>
";
        // line 13
        echo twig_include($this->env, $context, "templates/header.html.twig");
        echo "
";
        // line 14
        echo twig_include($this->env, $context, "templates/aside.html.twig");
        echo "
";
        // line 15
        $this->loadTemplate("student/list.html.twig", "student/list.html.twig", 15, "974788253")->display($context);
        
        $__internal_8cbc973bab572618fc4d2b4fb52d022c899e4301831f965e6a48f68acfe19aab->leave($__internal_8cbc973bab572618fc4d2b4fb52d022c899e4301831f965e6a48f68acfe19aab_prof);

        
        $__internal_7591fb797e09c0b9d0ae168782f25a47841882d6f66fe2a4adc892f71659e887->leave($__internal_7591fb797e09c0b9d0ae168782f25a47841882d6f66fe2a4adc892f71659e887_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1a17b9d03cab6048dab1e322b3cf9021d0817b13785e460655418bd241fe485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a17b9d03cab6048dab1e322b3cf9021d0817b13785e460655418bd241fe485->enter($__internal_f1a17b9d03cab6048dab1e322b3cf9021d0817b13785e460655418bd241fe485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c9c44f0a6f090651573fa19a7effdf0f9988e6b1edc51142a6d4fca5dc3ec5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c44f0a6f090651573fa19a7effdf0f9988e6b1edc51142a6d4fca5dc3ec5f3->enter($__internal_c9c44f0a6f090651573fa19a7effdf0f9988e6b1edc51142a6d4fca5dc3ec5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-plugins/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-responsive/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>

    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true,
            \"pageLength\": ";
        // line 94
        echo twig_escape_filter($this->env, ($context["entriesPerPage"] ?? $this->getContext($context, "entriesPerPage")), "html", null, true);
        echo "
            
        });
    });
    </script>

";
        
        $__internal_c9c44f0a6f090651573fa19a7effdf0f9988e6b1edc51142a6d4fca5dc3ec5f3->leave($__internal_c9c44f0a6f090651573fa19a7effdf0f9988e6b1edc51142a6d4fca5dc3ec5f3_prof);

        
        $__internal_f1a17b9d03cab6048dab1e322b3cf9021d0817b13785e460655418bd241fe485->leave($__internal_f1a17b9d03cab6048dab1e322b3cf9021d0817b13785e460655418bd241fe485_prof);

    }

    public function getTemplateName()
    {
        return "student/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 94,  124 => 88,  120 => 87,  116 => 86,  113 => 85,  104 => 84,  94 => 15,  90 => 14,  86 => 13,  83 => 12,  74 => 11,  61 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}

    <!-- DataTables CSS -->
    <link href=\"{{ asset('vendor/datatables-plugins/dataTables.bootstrap.css') }}\" rel=\"stylesheet\">

    <!-- DataTables Responsive CSS -->
    <link href=\"{{ asset('vendor/datatables-responsive/dataTables.responsive.css') }}\" rel=\"stylesheet\">

{% endblock %}
{% block body %}
<body>
{{ include('templates/header.html.twig') }}
{{ include('templates/aside.html.twig') }}
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}

\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Students List - Class {{class}}
\t\t      </header>
\t\t      {% if students is not empty %}
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Full Name</th>
\t\t              <th>Gender</th>
\t\t              <th>UPI Number</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          {% for student in students %}
\t\t          <tr>
\t\t              <td><a href=\"{{path('student_profile', {'studentId': student.id})}}\">{{student.names}}</a></td>
\t\t              <td>{{student.gender|capitalize}}</td>
\t\t              <td>{{student.upiNumber}}</td>        
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Student\" href=\"{{path('new_student')}}\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Student\" href=\"{{path('edit_student', {'studentId': student.id})}}\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Student\" href=\"#deleteModal{{student.id}}\"><i class=\"icon_close_alt2\"></i></a>
\t\t                      <a class=\"btn btn-info\" title=\"View Progress\" href=\"{{path('student_profile', {'studentId': student.id})}}\"><i class=\"arrow_carrot-right_alt\"></i></a>
\t\t                  </div>
\t\t              </td>  
\t\t          </tr>
\t\t      \t  {% endfor %}
\t\t          </tbody>
\t\t      </table>
              {% else %}
                <div class=\"well\">
                  <h4>Hmm! You need to  <a href=\"{{path('new_student')}}\"> add some students </a> for class {{class.cTitle}}</h4>
                </div>
              {% endif %}
\t  </section>
\t\t</div>
\t\t{% for student in students %}
\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal{{student.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Student {{ student.names }}</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"{{ path('delete_student', { 'studentId': student.id } ) }}\" class=\"btn btn-danger\">Go Ahead</a>
\t\t\t          </div>
\t\t\t      </div>
\t\t\t  </div>
\t\t\t</div>\t\t    
\t\t{% endfor %}
\t{% endblock %}
{% endembed %}
{% endblock %}

{% block javascripts %}
    <!-- DataTables JavaScript -->
    <script src=\"{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/datatables-plugins/dataTables.bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/datatables-responsive/dataTables.responsive.js') }}\"></script>

    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true,
            \"pageLength\": {{entriesPerPage}}
            
        });
    });
    </script>

{% endblock %}", "student/list.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/student/list.html.twig");
    }
}


/* student/list.html.twig */
class __TwigTemplate_d924bbff480ee562b8e518fd967427fdda08f92ebea3597d2c338dd986368c9d_974788253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "student/list.html.twig", 15);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/content_draft.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f030df71e7696b48a19696235547cc09de6dfd5bc480821a0f8c9bf5e0e99e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f030df71e7696b48a19696235547cc09de6dfd5bc480821a0f8c9bf5e0e99e8b->enter($__internal_f030df71e7696b48a19696235547cc09de6dfd5bc480821a0f8c9bf5e0e99e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/list.html.twig"));

        $__internal_2192503e7ddb52ac78ba6caa87f1bd8f9183f9a00d7295c3951891ead19d5e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2192503e7ddb52ac78ba6caa87f1bd8f9183f9a00d7295c3951891ead19d5e98->enter($__internal_2192503e7ddb52ac78ba6caa87f1bd8f9183f9a00d7295c3951891ead19d5e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f030df71e7696b48a19696235547cc09de6dfd5bc480821a0f8c9bf5e0e99e8b->leave($__internal_f030df71e7696b48a19696235547cc09de6dfd5bc480821a0f8c9bf5e0e99e8b_prof);

        
        $__internal_2192503e7ddb52ac78ba6caa87f1bd8f9183f9a00d7295c3951891ead19d5e98->leave($__internal_2192503e7ddb52ac78ba6caa87f1bd8f9183f9a00d7295c3951891ead19d5e98_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_91d0727df5c506997219152b74199900ff464ce9825f3821881b81ee08ac6db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d0727df5c506997219152b74199900ff464ce9825f3821881b81ee08ac6db0->enter($__internal_91d0727df5c506997219152b74199900ff464ce9825f3821881b81ee08ac6db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7ea68a65b6fedbe013eb684c38110c0e2a76bc9548f9427037fce90e4bf366a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea68a65b6fedbe013eb684c38110c0e2a76bc9548f9427037fce90e4bf366a1->enter($__internal_7ea68a65b6fedbe013eb684c38110c0e2a76bc9548f9427037fce90e4bf366a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Students List - Class ";
        // line 21
        echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
        echo "
\t\t      </header>
\t\t      ";
        // line 23
        if ( !twig_test_empty(($context["students"] ?? $this->getContext($context, "students")))) {
            // line 24
            echo "\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Full Name</th>
\t\t              <th>Gender</th>
\t\t              <th>UPI Number</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 35
                echo "\t\t          <tr>
\t\t              <td><a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_profile", array("studentId" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "names", array()), "html", null, true);
                echo "</a></td>
\t\t              <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["student"], "gender", array())), "html", null, true);
                echo "</td>
\t\t              <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "upiNumber", array()), "html", null, true);
                echo "</td>        
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Student\" href=\"";
                // line 41
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_student");
                echo "\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Student\" href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_student", array("studentId" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Student\" href=\"#deleteModal";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                echo "\"><i class=\"icon_close_alt2\"></i></a>
\t\t                      <a class=\"btn btn-info\" title=\"View Progress\" href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_profile", array("studentId" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
                echo "\"><i class=\"arrow_carrot-right_alt\"></i></a>
\t\t                  </div>
\t\t              </td>  
\t\t          </tr>
\t\t      \t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t          </tbody>
\t\t      </table>
              ";
        } else {
            // line 52
            echo "                <div class=\"well\">
                  <h4>Hmm! You need to  <a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_student");
            echo "\"> add some students </a> for class ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["class"] ?? $this->getContext($context, "class")), "cTitle", array()), "html", null, true);
            echo "</h4>
                </div>
              ";
        }
        // line 56
        echo "\t  </section>
\t\t</div>
\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 59
            echo "\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Student ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "names", array()), "html", null, true);
            echo "</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_student", array("studentId" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Go Ahead</a>
\t\t\t          </div>
\t\t\t      </div>
\t\t\t  </div>
\t\t\t</div>\t\t    
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t";
        
        $__internal_7ea68a65b6fedbe013eb684c38110c0e2a76bc9548f9427037fce90e4bf366a1->leave($__internal_7ea68a65b6fedbe013eb684c38110c0e2a76bc9548f9427037fce90e4bf366a1_prof);

        
        $__internal_91d0727df5c506997219152b74199900ff464ce9825f3821881b81ee08ac6db0->leave($__internal_91d0727df5c506997219152b74199900ff464ce9825f3821881b81ee08ac6db0_prof);

    }

    public function getTemplateName()
    {
        return "student/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 80,  442 => 74,  434 => 69,  422 => 60,  419 => 59,  415 => 58,  411 => 56,  403 => 53,  400 => 52,  395 => 49,  384 => 44,  380 => 43,  376 => 42,  372 => 41,  366 => 38,  362 => 37,  356 => 36,  353 => 35,  349 => 34,  337 => 24,  335 => 23,  330 => 21,  324 => 17,  315 => 16,  286 => 15,  133 => 94,  124 => 88,  120 => 87,  116 => 86,  113 => 85,  104 => 84,  94 => 15,  90 => 14,  86 => 13,  83 => 12,  74 => 11,  61 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}

    <!-- DataTables CSS -->
    <link href=\"{{ asset('vendor/datatables-plugins/dataTables.bootstrap.css') }}\" rel=\"stylesheet\">

    <!-- DataTables Responsive CSS -->
    <link href=\"{{ asset('vendor/datatables-responsive/dataTables.responsive.css') }}\" rel=\"stylesheet\">

{% endblock %}
{% block body %}
<body>
{{ include('templates/header.html.twig') }}
{{ include('templates/aside.html.twig') }}
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}

\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Students List - Class {{class}}
\t\t      </header>
\t\t      {% if students is not empty %}
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Full Name</th>
\t\t              <th>Gender</th>
\t\t              <th>UPI Number</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          {% for student in students %}
\t\t          <tr>
\t\t              <td><a href=\"{{path('student_profile', {'studentId': student.id})}}\">{{student.names}}</a></td>
\t\t              <td>{{student.gender|capitalize}}</td>
\t\t              <td>{{student.upiNumber}}</td>        
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Student\" href=\"{{path('new_student')}}\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Student\" href=\"{{path('edit_student', {'studentId': student.id})}}\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Student\" href=\"#deleteModal{{student.id}}\"><i class=\"icon_close_alt2\"></i></a>
\t\t                      <a class=\"btn btn-info\" title=\"View Progress\" href=\"{{path('student_profile', {'studentId': student.id})}}\"><i class=\"arrow_carrot-right_alt\"></i></a>
\t\t                  </div>
\t\t              </td>  
\t\t          </tr>
\t\t      \t  {% endfor %}
\t\t          </tbody>
\t\t      </table>
              {% else %}
                <div class=\"well\">
                  <h4>Hmm! You need to  <a href=\"{{path('new_student')}}\"> add some students </a> for class {{class.cTitle}}</h4>
                </div>
              {% endif %}
\t  </section>
\t\t</div>
\t\t{% for student in students %}
\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal{{student.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Student {{ student.names }}</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"{{ path('delete_student', { 'studentId': student.id } ) }}\" class=\"btn btn-danger\">Go Ahead</a>
\t\t\t          </div>
\t\t\t      </div>
\t\t\t  </div>
\t\t\t</div>\t\t    
\t\t{% endfor %}
\t{% endblock %}
{% endembed %}
{% endblock %}

{% block javascripts %}
    <!-- DataTables JavaScript -->
    <script src=\"{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/datatables-plugins/dataTables.bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/datatables-responsive/dataTables.responsive.js') }}\"></script>

    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true,
            \"pageLength\": {{entriesPerPage}}
            
        });
    });
    </script>

{% endblock %}", "student/list.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/student/list.html.twig");
    }
}
