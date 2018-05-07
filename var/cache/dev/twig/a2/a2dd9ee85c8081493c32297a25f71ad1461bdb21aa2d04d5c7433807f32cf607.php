<?php

/* subject/list.html.twig */
class __TwigTemplate_edf8e5fece4bda7e95dd8a33553996eb66a9c9119066fcb4c7cb551f253c57f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "subject/list.html.twig", 1);
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
        $__internal_13169e973bf95424cd8c1cb78078e208a5592ad29e1641e6331b14090aaaaaa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13169e973bf95424cd8c1cb78078e208a5592ad29e1641e6331b14090aaaaaa0->enter($__internal_13169e973bf95424cd8c1cb78078e208a5592ad29e1641e6331b14090aaaaaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "subject/list.html.twig"));

        $__internal_9bb878908356c346217fdcb0d944e9cb5e65bbba34621b004f122c430eba44ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb878908356c346217fdcb0d944e9cb5e65bbba34621b004f122c430eba44ef->enter($__internal_9bb878908356c346217fdcb0d944e9cb5e65bbba34621b004f122c430eba44ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "subject/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13169e973bf95424cd8c1cb78078e208a5592ad29e1641e6331b14090aaaaaa0->leave($__internal_13169e973bf95424cd8c1cb78078e208a5592ad29e1641e6331b14090aaaaaa0_prof);

        
        $__internal_9bb878908356c346217fdcb0d944e9cb5e65bbba34621b004f122c430eba44ef->leave($__internal_9bb878908356c346217fdcb0d944e9cb5e65bbba34621b004f122c430eba44ef_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d9eb272fcf4bf1f13c29eaf8cb4eb350414491aa840a703c691a1673681dcf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d9eb272fcf4bf1f13c29eaf8cb4eb350414491aa840a703c691a1673681dcf0->enter($__internal_3d9eb272fcf4bf1f13c29eaf8cb4eb350414491aa840a703c691a1673681dcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_31271b8c8d3976aed2a6bcc7afaa70b4480377754c880ff76d1b1b533b4268fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31271b8c8d3976aed2a6bcc7afaa70b4480377754c880ff76d1b1b533b4268fa->enter($__internal_31271b8c8d3976aed2a6bcc7afaa70b4480377754c880ff76d1b1b533b4268fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_31271b8c8d3976aed2a6bcc7afaa70b4480377754c880ff76d1b1b533b4268fa->leave($__internal_31271b8c8d3976aed2a6bcc7afaa70b4480377754c880ff76d1b1b533b4268fa_prof);

        
        $__internal_3d9eb272fcf4bf1f13c29eaf8cb4eb350414491aa840a703c691a1673681dcf0->leave($__internal_3d9eb272fcf4bf1f13c29eaf8cb4eb350414491aa840a703c691a1673681dcf0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd0b08b0c12cbcacfdf1622771d4f3db6019c9bd7524b29ac573b2d9ad47be33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd0b08b0c12cbcacfdf1622771d4f3db6019c9bd7524b29ac573b2d9ad47be33->enter($__internal_fd0b08b0c12cbcacfdf1622771d4f3db6019c9bd7524b29ac573b2d9ad47be33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0633d7509577822af0dfdaf4ad4dd3bb1a1f137933bb6277905a0a5117b1687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0633d7509577822af0dfdaf4ad4dd3bb1a1f137933bb6277905a0a5117b1687->enter($__internal_d0633d7509577822af0dfdaf4ad4dd3bb1a1f137933bb6277905a0a5117b1687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("subject/list.html.twig", "subject/list.html.twig", 15, "2074446917")->display($context);
        
        $__internal_d0633d7509577822af0dfdaf4ad4dd3bb1a1f137933bb6277905a0a5117b1687->leave($__internal_d0633d7509577822af0dfdaf4ad4dd3bb1a1f137933bb6277905a0a5117b1687_prof);

        
        $__internal_fd0b08b0c12cbcacfdf1622771d4f3db6019c9bd7524b29ac573b2d9ad47be33->leave($__internal_fd0b08b0c12cbcacfdf1622771d4f3db6019c9bd7524b29ac573b2d9ad47be33_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_133b3f6c5e87d0e6b5ce8ab81e560a952491b5de537f3fb39cb3247b9d571d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133b3f6c5e87d0e6b5ce8ab81e560a952491b5de537f3fb39cb3247b9d571d25->enter($__internal_133b3f6c5e87d0e6b5ce8ab81e560a952491b5de537f3fb39cb3247b9d571d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d56613100a769754407d5e126296144e70cb1dbd17ca4f6df90041f56b78d1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56613100a769754407d5e126296144e70cb1dbd17ca4f6df90041f56b78d1a1->enter($__internal_d56613100a769754407d5e126296144e70cb1dbd17ca4f6df90041f56b78d1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-plugins/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/datatables-responsive/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>

    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').DataTable({
            responsive: true,
            \"pageLength\": ";
        // line 83
        echo twig_escape_filter($this->env, ($context["entriesPerPage"] ?? $this->getContext($context, "entriesPerPage")), "html", null, true);
        echo "
            
        });
    });
    </script>

";
        
        $__internal_d56613100a769754407d5e126296144e70cb1dbd17ca4f6df90041f56b78d1a1->leave($__internal_d56613100a769754407d5e126296144e70cb1dbd17ca4f6df90041f56b78d1a1_prof);

        
        $__internal_133b3f6c5e87d0e6b5ce8ab81e560a952491b5de537f3fb39cb3247b9d571d25->leave($__internal_133b3f6c5e87d0e6b5ce8ab81e560a952491b5de537f3fb39cb3247b9d571d25_prof);

    }

    public function getTemplateName()
    {
        return "subject/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 83,  124 => 77,  120 => 76,  116 => 75,  113 => 74,  104 => 73,  94 => 15,  90 => 14,  86 => 13,  83 => 12,  74 => 11,  61 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
\t\t          Striped Table
\t\t      </header>
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Subject Title</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          {% for subject in subjects %}
\t\t          <tr>
\t\t              <td>{{subject.sTitle}}</td>
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Subject\" href=\"{{path('new_subject')}}\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Subject\" href=\"{{path('edit_subject', {'subjectId': subject.id})}}\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Subject\" href=\"#deleteModal{{subject.id}}\"><i class=\"icon_close_alt2\"></i></a>
\t\t                  </div>
\t\t              </td>          
\t\t          </tr>
\t\t      \t  {% endfor %}
\t\t          </tbody>
\t\t      </table>
\t\t  </section>
\t\t</div>
\t\t{% for subject in subjects %}
\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal{{subject.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Subject {{ subject.sTitle }}</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"{{ path('delete_subject', { 'subjectId': subject.id } ) }}\" class=\"btn btn-danger\">Go Ahead</a>
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

{% endblock %}", "subject/list.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/subject/list.html.twig");
    }
}


/* subject/list.html.twig */
class __TwigTemplate_edf8e5fece4bda7e95dd8a33553996eb66a9c9119066fcb4c7cb551f253c57f5_2074446917 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "subject/list.html.twig", 15);
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
        $__internal_69e3c8b80048460a742c0d3f9554dd57a4869bf08dea4afe8a24c40efce9a118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e3c8b80048460a742c0d3f9554dd57a4869bf08dea4afe8a24c40efce9a118->enter($__internal_69e3c8b80048460a742c0d3f9554dd57a4869bf08dea4afe8a24c40efce9a118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "subject/list.html.twig"));

        $__internal_3e810aa0148313b7e3f1bb1da8420b20059fcd4627a6687728bb038f16b4558c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e810aa0148313b7e3f1bb1da8420b20059fcd4627a6687728bb038f16b4558c->enter($__internal_3e810aa0148313b7e3f1bb1da8420b20059fcd4627a6687728bb038f16b4558c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "subject/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69e3c8b80048460a742c0d3f9554dd57a4869bf08dea4afe8a24c40efce9a118->leave($__internal_69e3c8b80048460a742c0d3f9554dd57a4869bf08dea4afe8a24c40efce9a118_prof);

        
        $__internal_3e810aa0148313b7e3f1bb1da8420b20059fcd4627a6687728bb038f16b4558c->leave($__internal_3e810aa0148313b7e3f1bb1da8420b20059fcd4627a6687728bb038f16b4558c_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_7db4ea2745f5f150fcff9ae3dce5e3dbe96991c22321cfb65ffb8e72ca68bcdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db4ea2745f5f150fcff9ae3dce5e3dbe96991c22321cfb65ffb8e72ca68bcdb->enter($__internal_7db4ea2745f5f150fcff9ae3dce5e3dbe96991c22321cfb65ffb8e72ca68bcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c89ae4a1f5f99a2ab60e2fb97f42f314ed836416104560e376f7a5c968e614cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89ae4a1f5f99a2ab60e2fb97f42f314ed836416104560e376f7a5c968e614cd->enter($__internal_c89ae4a1f5f99a2ab60e2fb97f42f314ed836416104560e376f7a5c968e614cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
\t\t<div class=\"col-sm-8\">
\t\t  <section class=\"panel\">
\t\t      <header class=\"panel-heading\">
\t\t          Striped Table
\t\t      </header>
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Subject Title</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 32
            echo "\t\t          <tr>
\t\t              <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "sTitle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Subject\" href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_subject");
            echo "\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Subject\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_subject", array("subjectId" => $this->getAttribute($context["subject"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Subject\" href=\"#deleteModal";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "id", array()), "html", null, true);
            echo "\"><i class=\"icon_close_alt2\"></i></a>
\t\t                  </div>
\t\t              </td>          
\t\t          </tr>
\t\t      \t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t          </tbody>
\t\t      </table>
\t\t  </section>
\t\t</div>
\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 48
            echo "\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Subject ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "sTitle", array()), "html", null, true);
            echo "</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_subject", array("subjectId" => $this->getAttribute($context["subject"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Go Ahead</a>
\t\t\t          </div>
\t\t\t      </div>
\t\t\t  </div>
\t\t\t</div>\t\t    
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t";
        
        $__internal_c89ae4a1f5f99a2ab60e2fb97f42f314ed836416104560e376f7a5c968e614cd->leave($__internal_c89ae4a1f5f99a2ab60e2fb97f42f314ed836416104560e376f7a5c968e614cd_prof);

        
        $__internal_7db4ea2745f5f150fcff9ae3dce5e3dbe96991c22321cfb65ffb8e72ca68bcdb->leave($__internal_7db4ea2745f5f150fcff9ae3dce5e3dbe96991c22321cfb65ffb8e72ca68bcdb_prof);

    }

    public function getTemplateName()
    {
        return "subject/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 69,  394 => 63,  386 => 58,  374 => 49,  371 => 48,  367 => 47,  361 => 43,  350 => 38,  346 => 37,  342 => 36,  336 => 33,  333 => 32,  329 => 31,  313 => 17,  304 => 16,  275 => 15,  133 => 83,  124 => 77,  120 => 76,  116 => 75,  113 => 74,  104 => 73,  94 => 15,  90 => 14,  86 => 13,  83 => 12,  74 => 11,  61 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
\t\t          Striped Table
\t\t      </header>
\t\t      <table class=\"table table-striped table-hover\" id=\"dataTables-example\">
\t\t          <thead>
\t\t          <tr>
\t\t              <th>Subject Title</th>
\t\t              <th>Manage</th>
\t\t          </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t          {% for subject in subjects %}
\t\t          <tr>
\t\t              <td>{{subject.sTitle}}</td>
\t\t\t\t\t  <td>
\t\t                  <div class=\"btn-group\">
\t\t                      <a class=\"btn btn-primary\" title=\"Add Subject\" href=\"{{path('new_subject')}}\"><i class=\"icon_plus_alt2\"></i></a>
\t\t                      <a class=\"btn btn-success\" title=\"Edit Subject\" href=\"{{path('edit_subject', {'subjectId': subject.id})}}\"><i class=\"icon_pencil\"></i></a>
\t\t                      <a class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Delete Subject\" href=\"#deleteModal{{subject.id}}\"><i class=\"icon_close_alt2\"></i></a>
\t\t                  </div>
\t\t              </td>          
\t\t          </tr>
\t\t      \t  {% endfor %}
\t\t          </tbody>
\t\t      </table>
\t\t  </section>
\t\t</div>
\t\t{% for subject in subjects %}
\t\t    <!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"deleteModal{{subject.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t      <div class=\"modal-content\">
\t\t\t          <div class=\"modal-header\">
\t\t\t              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t              <h4 class=\"modal-title\">Are you sure?</h4>
\t\t\t          </div>
\t\t\t          <div class=\"modal-body\">

\t\t\t              <p>Are you sure you want to delete Subject {{ subject.sTitle }}</p>

\t\t\t          </div>
\t\t\t          <div class=\"modal-footer\">
\t\t\t              <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>
\t\t\t              <a href=\"{{ path('delete_subject', { 'subjectId': subject.id } ) }}\" class=\"btn btn-danger\">Go Ahead</a>
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

{% endblock %}", "subject/list.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/subject/list.html.twig");
    }
}
