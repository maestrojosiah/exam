<?php

/* examCompany/list.html.twig */
class __TwigTemplate_463329241a9315c75ff5dc694b6eb38c9ba87c72669d373ce059031bbe7872c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "examCompany/list.html.twig", 1);
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
        $__internal_e61b4dc5ec9fa1bbd935575b92f6b85579d5bb7871ebbd21ce5ae6461ef47a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e61b4dc5ec9fa1bbd935575b92f6b85579d5bb7871ebbd21ce5ae6461ef47a14->enter($__internal_e61b4dc5ec9fa1bbd935575b92f6b85579d5bb7871ebbd21ce5ae6461ef47a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/list.html.twig"));

        $__internal_14337a7a325396c4483988a23e16827e165e1433fa8de73ed82fb3fec43664c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14337a7a325396c4483988a23e16827e165e1433fa8de73ed82fb3fec43664c7->enter($__internal_14337a7a325396c4483988a23e16827e165e1433fa8de73ed82fb3fec43664c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e61b4dc5ec9fa1bbd935575b92f6b85579d5bb7871ebbd21ce5ae6461ef47a14->leave($__internal_e61b4dc5ec9fa1bbd935575b92f6b85579d5bb7871ebbd21ce5ae6461ef47a14_prof);

        
        $__internal_14337a7a325396c4483988a23e16827e165e1433fa8de73ed82fb3fec43664c7->leave($__internal_14337a7a325396c4483988a23e16827e165e1433fa8de73ed82fb3fec43664c7_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b3daf0ea6250a747e477ee5abffd2cedf0d65f67b165929e9f5dccfffa662740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3daf0ea6250a747e477ee5abffd2cedf0d65f67b165929e9f5dccfffa662740->enter($__internal_b3daf0ea6250a747e477ee5abffd2cedf0d65f67b165929e9f5dccfffa662740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_acfb26726c7548157028a82744e221e2472f9a83b118c1f45159d131f876fbc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfb26726c7548157028a82744e221e2472f9a83b118c1f45159d131f876fbc5->enter($__internal_acfb26726c7548157028a82744e221e2472f9a83b118c1f45159d131f876fbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_acfb26726c7548157028a82744e221e2472f9a83b118c1f45159d131f876fbc5->leave($__internal_acfb26726c7548157028a82744e221e2472f9a83b118c1f45159d131f876fbc5_prof);

        
        $__internal_b3daf0ea6250a747e477ee5abffd2cedf0d65f67b165929e9f5dccfffa662740->leave($__internal_b3daf0ea6250a747e477ee5abffd2cedf0d65f67b165929e9f5dccfffa662740_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6812c7af12e2b9ab32f13db53a61958c5ec1a98a13aa7bf90a022661409bde88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6812c7af12e2b9ab32f13db53a61958c5ec1a98a13aa7bf90a022661409bde88->enter($__internal_6812c7af12e2b9ab32f13db53a61958c5ec1a98a13aa7bf90a022661409bde88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01a8b7c4b34a04e13fa3b52eb487273d7d588fa4804fbe9101257fc6bc8d2d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a8b7c4b34a04e13fa3b52eb487273d7d588fa4804fbe9101257fc6bc8d2d9f->enter($__internal_01a8b7c4b34a04e13fa3b52eb487273d7d588fa4804fbe9101257fc6bc8d2d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<body>
";
        // line 13
        echo twig_include($this->env, $context, "templates/header.html.twig");
        echo "        \t\t
";
        // line 14
        echo twig_include($this->env, $context, "templates/aside.html.twig");
        echo "        \t\t
";
        // line 15
        $this->loadTemplate("examCompany/list.html.twig", "examCompany/list.html.twig", 15, "1503633284")->display($context);
        
        $__internal_01a8b7c4b34a04e13fa3b52eb487273d7d588fa4804fbe9101257fc6bc8d2d9f->leave($__internal_01a8b7c4b34a04e13fa3b52eb487273d7d588fa4804fbe9101257fc6bc8d2d9f_prof);

        
        $__internal_6812c7af12e2b9ab32f13db53a61958c5ec1a98a13aa7bf90a022661409bde88->leave($__internal_6812c7af12e2b9ab32f13db53a61958c5ec1a98a13aa7bf90a022661409bde88_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df3106a33765a7e5d6148abae4b60bc6faa459a9dd9b11f4191ee883f9950d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df3106a33765a7e5d6148abae4b60bc6faa459a9dd9b11f4191ee883f9950d44->enter($__internal_df3106a33765a7e5d6148abae4b60bc6faa459a9dd9b11f4191ee883f9950d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8e0fce8d3441bd0d0a4586829e2cefbcbf9613be8a22a8512a5d47b76239afeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0fce8d3441bd0d0a4586829e2cefbcbf9613be8a22a8512a5d47b76239afeb->enter($__internal_8e0fce8d3441bd0d0a4586829e2cefbcbf9613be8a22a8512a5d47b76239afeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-plugins/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-responsive/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>

    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true,
            \"pageLength\": ";
        // line 86
        echo twig_escape_filter($this->env, ($context["entriesPerPage"] ?? $this->getContext($context, "entriesPerPage")), "html", null, true);
        echo "
            
        });
    });
    </script>

";
        
        $__internal_8e0fce8d3441bd0d0a4586829e2cefbcbf9613be8a22a8512a5d47b76239afeb->leave($__internal_8e0fce8d3441bd0d0a4586829e2cefbcbf9613be8a22a8512a5d47b76239afeb_prof);

        
        $__internal_df3106a33765a7e5d6148abae4b60bc6faa459a9dd9b11f4191ee883f9950d44->leave($__internal_df3106a33765a7e5d6148abae4b60bc6faa459a9dd9b11f4191ee883f9950d44_prof);

    }

    public function getTemplateName()
    {
        return "examCompany/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 86,  124 => 80,  120 => 79,  116 => 78,  113 => 77,  104 => 76,  94 => 15,  90 => 14,  86 => 13,  83 => 12,  74 => 11,  61 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
{{ include('templates/header.html.twig') }}        \t\t
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}

\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Exams
\t\t      </header>
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Exam Title</th>
\t\t              <th>Class</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          {% for examCompany in examCompanies %}
\t\t          <tr>
\t\t              <td><a href=\"{{path('record_scores', {'classId': examCompany.class.id, 'companyId': examCompany.id})}}\" >{{examCompany.cTitle}}</a></td>
\t\t              <td>{{examCompany.class}}</td>        
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Exam Company\" href=\"{{path('new_examCompany')}}\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Exam Company\" href=\"{{path('edit_examCompany', {'examCompanyId': examCompany.id})}}\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Company\" href=\"#deleteModal{{examCompany.id}}\"><i class=\"icon_close_alt2\"></i></a>
\t\t                      <a class=\"btn btn-info\" title=\"Edit Scores\" href=\"{{path('record_scores', {'classId': examCompany.class.id, 'companyId': examCompany.id})}}\"><i class=\"arrow_carrot-right_alt\"></i></a>
\t\t                  </div>
\t\t              </td>  
\t\t          </tr>
\t\t      \t  {% endfor %}
\t\t          </tbody>
\t\t      </table>
\t\t  </section>
\t\t</div>
\t\t{% for examCompany in examCompanies %}
\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal{{examCompany.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Exam {{ examCompany.cTitle }}</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"{{ path('delete_examCompany', { 'examCompanyId': examCompany.id } ) }}\" class=\"btn btn-danger\">Go Ahead</a>
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

{% endblock %}", "examCompany/list.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/examCompany/list.html.twig");
    }
}


/* examCompany/list.html.twig */
class __TwigTemplate_463329241a9315c75ff5dc694b6eb38c9ba87c72669d373ce059031bbe7872c6_1503633284 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "examCompany/list.html.twig", 15);
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
        $__internal_1f1b92e72458e8029ba20e1348ff54fcc014a2137c7fb2082137a7a6da4be3e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1b92e72458e8029ba20e1348ff54fcc014a2137c7fb2082137a7a6da4be3e9->enter($__internal_1f1b92e72458e8029ba20e1348ff54fcc014a2137c7fb2082137a7a6da4be3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/list.html.twig"));

        $__internal_14fb78a03090b621ca121f32d4341dd9e7ffae144c8ef3f539735f7f906f3fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14fb78a03090b621ca121f32d4341dd9e7ffae144c8ef3f539735f7f906f3fc9->enter($__internal_14fb78a03090b621ca121f32d4341dd9e7ffae144c8ef3f539735f7f906f3fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f1b92e72458e8029ba20e1348ff54fcc014a2137c7fb2082137a7a6da4be3e9->leave($__internal_1f1b92e72458e8029ba20e1348ff54fcc014a2137c7fb2082137a7a6da4be3e9_prof);

        
        $__internal_14fb78a03090b621ca121f32d4341dd9e7ffae144c8ef3f539735f7f906f3fc9->leave($__internal_14fb78a03090b621ca121f32d4341dd9e7ffae144c8ef3f539735f7f906f3fc9_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_e1bf887a7fac33b581a1bb01868e1d2810280cae30913c6e1f9c39af4be4898e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1bf887a7fac33b581a1bb01868e1d2810280cae30913c6e1f9c39af4be4898e->enter($__internal_e1bf887a7fac33b581a1bb01868e1d2810280cae30913c6e1f9c39af4be4898e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_942ac3f8855c345c2d6ffc91dffc21b32c2150cfb941dee76268ff26a97579b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_942ac3f8855c345c2d6ffc91dffc21b32c2150cfb941dee76268ff26a97579b6->enter($__internal_942ac3f8855c345c2d6ffc91dffc21b32c2150cfb941dee76268ff26a97579b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Exams
\t\t      </header>
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Exam Title</th>
\t\t              <th>Class</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["examCompanies"] ?? $this->getContext($context, "examCompanies")));
        foreach ($context['_seq'] as $context["_key"] => $context["examCompany"]) {
            // line 33
            echo "\t\t          <tr>
\t\t              <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("record_scores", array("classId" => $this->getAttribute($this->getAttribute($context["examCompany"], "class", array()), "id", array()), "companyId" => $this->getAttribute($context["examCompany"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["examCompany"], "cTitle", array()), "html", null, true);
            echo "</a></td>
\t\t              <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["examCompany"], "class", array()), "html", null, true);
            echo "</td>        
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Exam Company\" href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_examCompany");
            echo "\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Exam Company\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_examCompany", array("examCompanyId" => $this->getAttribute($context["examCompany"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Company\" href=\"#deleteModal";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["examCompany"], "id", array()), "html", null, true);
            echo "\"><i class=\"icon_close_alt2\"></i></a>
\t\t                      <a class=\"btn btn-info\" title=\"Edit Scores\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("record_scores", array("classId" => $this->getAttribute($this->getAttribute($context["examCompany"], "class", array()), "id", array()), "companyId" => $this->getAttribute($context["examCompany"], "id", array()))), "html", null, true);
            echo "\"><i class=\"arrow_carrot-right_alt\"></i></a>
\t\t                  </div>
\t\t              </td>  
\t\t          </tr>
\t\t      \t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['examCompany'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t          </tbody>
\t\t      </table>
\t\t  </section>
\t\t</div>
\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["examCompanies"] ?? $this->getContext($context, "examCompanies")));
        foreach ($context['_seq'] as $context["_key"] => $context["examCompany"]) {
            // line 51
            echo "\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["examCompany"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Exam ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["examCompany"], "cTitle", array()), "html", null, true);
            echo "</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_examCompany", array("examCompanyId" => $this->getAttribute($context["examCompany"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Go Ahead</a>
\t\t\t          </div>
\t\t\t      </div>
\t\t\t  </div>
\t\t\t</div>\t\t    
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['examCompany'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t";
        
        $__internal_942ac3f8855c345c2d6ffc91dffc21b32c2150cfb941dee76268ff26a97579b6->leave($__internal_942ac3f8855c345c2d6ffc91dffc21b32c2150cfb941dee76268ff26a97579b6_prof);

        
        $__internal_e1bf887a7fac33b581a1bb01868e1d2810280cae30913c6e1f9c39af4be4898e->leave($__internal_e1bf887a7fac33b581a1bb01868e1d2810280cae30913c6e1f9c39af4be4898e_prof);

    }

    public function getTemplateName()
    {
        return "examCompany/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 72,  408 => 66,  400 => 61,  388 => 52,  385 => 51,  381 => 50,  375 => 46,  364 => 41,  360 => 40,  356 => 39,  352 => 38,  346 => 35,  340 => 34,  337 => 33,  333 => 32,  316 => 17,  307 => 16,  278 => 15,  133 => 86,  124 => 80,  120 => 79,  116 => 78,  113 => 77,  104 => 76,  94 => 15,  90 => 14,  86 => 13,  83 => 12,  74 => 11,  61 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
{{ include('templates/header.html.twig') }}        \t\t
{{ include('templates/aside.html.twig') }}        \t\t
{% embed \"templates/content_draft.html.twig\" %}
\t{% block content %}

\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Exams
\t\t      </header>
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Exam Title</th>
\t\t              <th>Class</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          {% for examCompany in examCompanies %}
\t\t          <tr>
\t\t              <td><a href=\"{{path('record_scores', {'classId': examCompany.class.id, 'companyId': examCompany.id})}}\" >{{examCompany.cTitle}}</a></td>
\t\t              <td>{{examCompany.class}}</td>        
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Exam Company\" href=\"{{path('new_examCompany')}}\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Exam Company\" href=\"{{path('edit_examCompany', {'examCompanyId': examCompany.id})}}\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Company\" href=\"#deleteModal{{examCompany.id}}\"><i class=\"icon_close_alt2\"></i></a>
\t\t                      <a class=\"btn btn-info\" title=\"Edit Scores\" href=\"{{path('record_scores', {'classId': examCompany.class.id, 'companyId': examCompany.id})}}\"><i class=\"arrow_carrot-right_alt\"></i></a>
\t\t                  </div>
\t\t              </td>  
\t\t          </tr>
\t\t      \t  {% endfor %}
\t\t          </tbody>
\t\t      </table>
\t\t  </section>
\t\t</div>
\t\t{% for examCompany in examCompanies %}
\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal{{examCompany.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Exam {{ examCompany.cTitle }}</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"{{ path('delete_examCompany', { 'examCompanyId': examCompany.id } ) }}\" class=\"btn btn-danger\">Go Ahead</a>
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

{% endblock %}", "examCompany/list.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/examCompany/list.html.twig");
    }
}
