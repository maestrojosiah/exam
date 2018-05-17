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
        $__internal_86d68412da9ee3c339ac93cf4c4a4c5c9e31f7a3b87aeeca7a1729c0f4586ff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d68412da9ee3c339ac93cf4c4a4c5c9e31f7a3b87aeeca7a1729c0f4586ff5->enter($__internal_86d68412da9ee3c339ac93cf4c4a4c5c9e31f7a3b87aeeca7a1729c0f4586ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/list.html.twig"));

        $__internal_0c3f9900349faf4f00f7cc99aa0f109c94959c13701b07bc47ad633a655671e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3f9900349faf4f00f7cc99aa0f109c94959c13701b07bc47ad633a655671e2->enter($__internal_0c3f9900349faf4f00f7cc99aa0f109c94959c13701b07bc47ad633a655671e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86d68412da9ee3c339ac93cf4c4a4c5c9e31f7a3b87aeeca7a1729c0f4586ff5->leave($__internal_86d68412da9ee3c339ac93cf4c4a4c5c9e31f7a3b87aeeca7a1729c0f4586ff5_prof);

        
        $__internal_0c3f9900349faf4f00f7cc99aa0f109c94959c13701b07bc47ad633a655671e2->leave($__internal_0c3f9900349faf4f00f7cc99aa0f109c94959c13701b07bc47ad633a655671e2_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a715c5cedc8d6eab3be48e3a30428a6f342e0c14a91ba24a76d467ede864e223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a715c5cedc8d6eab3be48e3a30428a6f342e0c14a91ba24a76d467ede864e223->enter($__internal_a715c5cedc8d6eab3be48e3a30428a6f342e0c14a91ba24a76d467ede864e223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_348ae34739de3046755cead37ff5cb03cc381095e2e09b7c5bd32acf0460a63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348ae34739de3046755cead37ff5cb03cc381095e2e09b7c5bd32acf0460a63e->enter($__internal_348ae34739de3046755cead37ff5cb03cc381095e2e09b7c5bd32acf0460a63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_348ae34739de3046755cead37ff5cb03cc381095e2e09b7c5bd32acf0460a63e->leave($__internal_348ae34739de3046755cead37ff5cb03cc381095e2e09b7c5bd32acf0460a63e_prof);

        
        $__internal_a715c5cedc8d6eab3be48e3a30428a6f342e0c14a91ba24a76d467ede864e223->leave($__internal_a715c5cedc8d6eab3be48e3a30428a6f342e0c14a91ba24a76d467ede864e223_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2baaaf07cc626e46cba88c4fd66fa339042c481de3857d35f372218296a2054c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2baaaf07cc626e46cba88c4fd66fa339042c481de3857d35f372218296a2054c->enter($__internal_2baaaf07cc626e46cba88c4fd66fa339042c481de3857d35f372218296a2054c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b885fb305a94e1b77f05dbba9cd907e36e46324d3707f21e9190a9d1fa05543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b885fb305a94e1b77f05dbba9cd907e36e46324d3707f21e9190a9d1fa05543->enter($__internal_9b885fb305a94e1b77f05dbba9cd907e36e46324d3707f21e9190a9d1fa05543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("examCompany/list.html.twig", "examCompany/list.html.twig", 15, "242827265")->display($context);
        
        $__internal_9b885fb305a94e1b77f05dbba9cd907e36e46324d3707f21e9190a9d1fa05543->leave($__internal_9b885fb305a94e1b77f05dbba9cd907e36e46324d3707f21e9190a9d1fa05543_prof);

        
        $__internal_2baaaf07cc626e46cba88c4fd66fa339042c481de3857d35f372218296a2054c->leave($__internal_2baaaf07cc626e46cba88c4fd66fa339042c481de3857d35f372218296a2054c_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_843a69c974ef73566e04f6268684601d83d54ccf2c84a866d497f3c0ddbf5c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_843a69c974ef73566e04f6268684601d83d54ccf2c84a866d497f3c0ddbf5c48->enter($__internal_843a69c974ef73566e04f6268684601d83d54ccf2c84a866d497f3c0ddbf5c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_81779fcb8ec5641f55e7b1d08f6e218ae8dae321de0949f40429c0a4edafd4ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81779fcb8ec5641f55e7b1d08f6e218ae8dae321de0949f40429c0a4edafd4ac->enter($__internal_81779fcb8ec5641f55e7b1d08f6e218ae8dae321de0949f40429c0a4edafd4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_81779fcb8ec5641f55e7b1d08f6e218ae8dae321de0949f40429c0a4edafd4ac->leave($__internal_81779fcb8ec5641f55e7b1d08f6e218ae8dae321de0949f40429c0a4edafd4ac_prof);

        
        $__internal_843a69c974ef73566e04f6268684601d83d54ccf2c84a866d497f3c0ddbf5c48->leave($__internal_843a69c974ef73566e04f6268684601d83d54ccf2c84a866d497f3c0ddbf5c48_prof);

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
class __TwigTemplate_463329241a9315c75ff5dc694b6eb38c9ba87c72669d373ce059031bbe7872c6_242827265 extends Twig_Template
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
        $__internal_94fa406ec5dd847adaa6c22c03fda82c04f03dd958129f2a9281bdaaf05e0625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94fa406ec5dd847adaa6c22c03fda82c04f03dd958129f2a9281bdaaf05e0625->enter($__internal_94fa406ec5dd847adaa6c22c03fda82c04f03dd958129f2a9281bdaaf05e0625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/list.html.twig"));

        $__internal_8e40a6d5e0be907ebc9728379785c0f3968b88f6f5253c2819b487ba1f37456b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e40a6d5e0be907ebc9728379785c0f3968b88f6f5253c2819b487ba1f37456b->enter($__internal_8e40a6d5e0be907ebc9728379785c0f3968b88f6f5253c2819b487ba1f37456b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examCompany/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94fa406ec5dd847adaa6c22c03fda82c04f03dd958129f2a9281bdaaf05e0625->leave($__internal_94fa406ec5dd847adaa6c22c03fda82c04f03dd958129f2a9281bdaaf05e0625_prof);

        
        $__internal_8e40a6d5e0be907ebc9728379785c0f3968b88f6f5253c2819b487ba1f37456b->leave($__internal_8e40a6d5e0be907ebc9728379785c0f3968b88f6f5253c2819b487ba1f37456b_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_2d77f00afa343da9f85063b039484a3b4cb8b05f7f464805df96fff0a41a2b1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d77f00afa343da9f85063b039484a3b4cb8b05f7f464805df96fff0a41a2b1c->enter($__internal_2d77f00afa343da9f85063b039484a3b4cb8b05f7f464805df96fff0a41a2b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ef723dfd59f645c6b00fad96c80a38938790c25d55e5ab743c3c275b35e0c50a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef723dfd59f645c6b00fad96c80a38938790c25d55e5ab743c3c275b35e0c50a->enter($__internal_ef723dfd59f645c6b00fad96c80a38938790c25d55e5ab743c3c275b35e0c50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ef723dfd59f645c6b00fad96c80a38938790c25d55e5ab743c3c275b35e0c50a->leave($__internal_ef723dfd59f645c6b00fad96c80a38938790c25d55e5ab743c3c275b35e0c50a_prof);

        
        $__internal_2d77f00afa343da9f85063b039484a3b4cb8b05f7f464805df96fff0a41a2b1c->leave($__internal_2d77f00afa343da9f85063b039484a3b4cb8b05f7f464805df96fff0a41a2b1c_prof);

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
