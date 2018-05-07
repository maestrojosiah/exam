<?php

/* config/configuration.html.twig */
class __TwigTemplate_639b1ac28aa89bd8323217a3199f42ff7834a503e2d71762674f8bdd69e528a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "config/configuration.html.twig", 1);
        $this->blocks = array(
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
        $__internal_6270cebb38902594a546cd19485bfedf9efe3c82b1f047199fbbea9940e9c172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6270cebb38902594a546cd19485bfedf9efe3c82b1f047199fbbea9940e9c172->enter($__internal_6270cebb38902594a546cd19485bfedf9efe3c82b1f047199fbbea9940e9c172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "config/configuration.html.twig"));

        $__internal_876302c6e599042786cc29fa23ac3451a5dc6f54118186a3d4a90ea4eaa2d2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876302c6e599042786cc29fa23ac3451a5dc6f54118186a3d4a90ea4eaa2d2fe->enter($__internal_876302c6e599042786cc29fa23ac3451a5dc6f54118186a3d4a90ea4eaa2d2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "config/configuration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6270cebb38902594a546cd19485bfedf9efe3c82b1f047199fbbea9940e9c172->leave($__internal_6270cebb38902594a546cd19485bfedf9efe3c82b1f047199fbbea9940e9c172_prof);

        
        $__internal_876302c6e599042786cc29fa23ac3451a5dc6f54118186a3d4a90ea4eaa2d2fe->leave($__internal_876302c6e599042786cc29fa23ac3451a5dc6f54118186a3d4a90ea4eaa2d2fe_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d32481d3ca2d49ac5d63b3bcd5f8c9a50db8d8abdfb4b087bab4423819c2b324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32481d3ca2d49ac5d63b3bcd5f8c9a50db8d8abdfb4b087bab4423819c2b324->enter($__internal_d32481d3ca2d49ac5d63b3bcd5f8c9a50db8d8abdfb4b087bab4423819c2b324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a07a0e563f2779a24567505233fa1372da9bc86edd51bd40b0cda7acbd22252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a07a0e563f2779a24567505233fa1372da9bc86edd51bd40b0cda7acbd22252->enter($__internal_2a07a0e563f2779a24567505233fa1372da9bc86edd51bd40b0cda7acbd22252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<body>
";
        // line 4
        echo twig_include($this->env, $context, "templates/header.html.twig");
        echo "           
";
        // line 5
        echo twig_include($this->env, $context, "templates/aside.html.twig");
        echo "            
";
        // line 6
        $this->loadTemplate("config/configuration.html.twig", "config/configuration.html.twig", 6, "1611783048")->display($context);
        
        $__internal_2a07a0e563f2779a24567505233fa1372da9bc86edd51bd40b0cda7acbd22252->leave($__internal_2a07a0e563f2779a24567505233fa1372da9bc86edd51bd40b0cda7acbd22252_prof);

        
        $__internal_d32481d3ca2d49ac5d63b3bcd5f8c9a50db8d8abdfb4b087bab4423819c2b324->leave($__internal_d32481d3ca2d49ac5d63b3bcd5f8c9a50db8d8abdfb4b087bab4423819c2b324_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a3d890b788d88fc71353f2e4b6660e97435df45820c8a7ae58d2dbdf34fc575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3d890b788d88fc71353f2e4b6660e97435df45820c8a7ae58d2dbdf34fc575->enter($__internal_3a3d890b788d88fc71353f2e4b6660e97435df45820c8a7ae58d2dbdf34fc575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_731791a4faa5eb9f0b69c4f0e7275fe20ddc8310d1c453b21584ccbf34adabf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731791a4faa5eb9f0b69c4f0e7275fe20ddc8310d1c453b21584ccbf34adabf3->enter($__internal_731791a4faa5eb9f0b69c4f0e7275fe20ddc8310d1c453b21584ccbf34adabf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#classs_c_title\").focus();
    });    
  </script>
";
        
        $__internal_731791a4faa5eb9f0b69c4f0e7275fe20ddc8310d1c453b21584ccbf34adabf3->leave($__internal_731791a4faa5eb9f0b69c4f0e7275fe20ddc8310d1c453b21584ccbf34adabf3_prof);

        
        $__internal_3a3d890b788d88fc71353f2e4b6660e97435df45820c8a7ae58d2dbdf34fc575->leave($__internal_3a3d890b788d88fc71353f2e4b6660e97435df45820c8a7ae58d2dbdf34fc575_prof);

    }

    public function getTemplateName()
    {
        return "config/configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 46,  71 => 45,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
{% block body %}
<body>
{{ include('templates/header.html.twig') }}           
{{ include('templates/aside.html.twig') }}            
{% embed \"templates/content_draft.html.twig\" %}
  {% block content %}
  <div class=\"col-lg-6\">
    <section class=\"panel\">
        <header class=\"panel-heading\">
        Update Settings
        {% if not form.vars.valid %}
                <div class=\"alert alert-warning\">
                {{ form_errors(form) }}
                </div>        
              {% endif %}           
        </header>
        <div class=\"panel-body\">
          {{ form_start(form, {'method': 'post', 'action': path('update_config'), 'attr': {'class': '' }} ) }}
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Name</label>
                  {{ form_widget(form.sch_name, {'attr': {'class': 'form-control', 'placeholder': 'School name', 'id': 'school_name' }} ) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Address</label>
                  {{ form_widget(form.address, {'attr': {'class': 'form-control', 'placeholder': 'School Address', 'id': 'school_address' }} ) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Telephone</label>
                  {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder': 'school_telephone', 'id': 'school_name' }} ) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">Results Per Page</label>
                  {{ form_widget(form.results_per_page, {'attr': {'class': 'form-control', 'id': 'results_per_page' }} ) }}
                </div>
              {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary' }} ) }}
            <!-- /.col-lg-6 (nested) -->
          ` {{ form_end(form) }}
        </div>
    </section>
  </div>
{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}
  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#classs_c_title\").focus();
    });    
  </script>
{% endblock %}", "config/configuration.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/config/configuration.html.twig");
    }
}


/* config/configuration.html.twig */
class __TwigTemplate_639b1ac28aa89bd8323217a3199f42ff7834a503e2d71762674f8bdd69e528a5_1611783048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("templates/content_draft.html.twig", "config/configuration.html.twig", 6);
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
        $__internal_f38bfc1fde3f11c51e3aabd4ce51d7b38c08d1c565b20d305067e7826703f941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38bfc1fde3f11c51e3aabd4ce51d7b38c08d1c565b20d305067e7826703f941->enter($__internal_f38bfc1fde3f11c51e3aabd4ce51d7b38c08d1c565b20d305067e7826703f941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "config/configuration.html.twig"));

        $__internal_0f5931f1753a6774adeea89e1b07973abc9e511a2a8969c19041e4d9bef0ca50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5931f1753a6774adeea89e1b07973abc9e511a2a8969c19041e4d9bef0ca50->enter($__internal_0f5931f1753a6774adeea89e1b07973abc9e511a2a8969c19041e4d9bef0ca50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "config/configuration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f38bfc1fde3f11c51e3aabd4ce51d7b38c08d1c565b20d305067e7826703f941->leave($__internal_f38bfc1fde3f11c51e3aabd4ce51d7b38c08d1c565b20d305067e7826703f941_prof);

        
        $__internal_0f5931f1753a6774adeea89e1b07973abc9e511a2a8969c19041e4d9bef0ca50->leave($__internal_0f5931f1753a6774adeea89e1b07973abc9e511a2a8969c19041e4d9bef0ca50_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_6046d93900d621d3a31ddb5d134bbcb4dce6ca48fda572b9c87670c735d4c003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6046d93900d621d3a31ddb5d134bbcb4dce6ca48fda572b9c87670c735d4c003->enter($__internal_6046d93900d621d3a31ddb5d134bbcb4dce6ca48fda572b9c87670c735d4c003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_eef63b1d917daa8b011a61df23be36e2802fc059a0911a49afc5f80ade963f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef63b1d917daa8b011a61df23be36e2802fc059a0911a49afc5f80ade963f66->enter($__internal_eef63b1d917daa8b011a61df23be36e2802fc059a0911a49afc5f80ade963f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "  <div class=\"col-lg-6\">
    <section class=\"panel\">
        <header class=\"panel-heading\">
        Update Settings
        ";
        // line 12
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 13
            echo "                <div class=\"alert alert-warning\">
                ";
            // line 14
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                </div>        
              ";
        }
        // line 16
        echo "           
        </header>
        <div class=\"panel-body\">
          ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_config"), "attr" => array("class" => "")));
        echo "
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Name</label>
                  ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sch_name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "School name", "id" => "school_name")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Address</label>
                  ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "School Address", "id" => "school_address")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Telephone</label>
                  ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "school_telephone", "id" => "school_name")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">Results Per Page</label>
                  ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "results_per_page", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "results_per_page")));
        echo "
                </div>
              ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
            <!-- /.col-lg-6 (nested) -->
          ` ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </section>
  </div>
";
        
        $__internal_eef63b1d917daa8b011a61df23be36e2802fc059a0911a49afc5f80ade963f66->leave($__internal_eef63b1d917daa8b011a61df23be36e2802fc059a0911a49afc5f80ade963f66_prof);

        
        $__internal_6046d93900d621d3a31ddb5d134bbcb4dce6ca48fda572b9c87670c735d4c003->leave($__internal_6046d93900d621d3a31ddb5d134bbcb4dce6ca48fda572b9c87670c735d4c003_prof);

    }

    public function getTemplateName()
    {
        return "config/configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 38,  274 => 36,  269 => 34,  262 => 30,  255 => 26,  248 => 22,  242 => 19,  237 => 16,  231 => 14,  228 => 13,  226 => 12,  220 => 8,  211 => 7,  182 => 6,  80 => 46,  71 => 45,  61 => 6,  57 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
{% block body %}
<body>
{{ include('templates/header.html.twig') }}           
{{ include('templates/aside.html.twig') }}            
{% embed \"templates/content_draft.html.twig\" %}
  {% block content %}
  <div class=\"col-lg-6\">
    <section class=\"panel\">
        <header class=\"panel-heading\">
        Update Settings
        {% if not form.vars.valid %}
                <div class=\"alert alert-warning\">
                {{ form_errors(form) }}
                </div>        
              {% endif %}           
        </header>
        <div class=\"panel-body\">
          {{ form_start(form, {'method': 'post', 'action': path('update_config'), 'attr': {'class': '' }} ) }}
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Name</label>
                  {{ form_widget(form.sch_name, {'attr': {'class': 'form-control', 'placeholder': 'School name', 'id': 'school_name' }} ) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Address</label>
                  {{ form_widget(form.address, {'attr': {'class': 'form-control', 'placeholder': 'School Address', 'id': 'school_address' }} ) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">School Telephone</label>
                  {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder': 'school_telephone', 'id': 'school_name' }} ) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"classs_c_title\">Results Per Page</label>
                  {{ form_widget(form.results_per_page, {'attr': {'class': 'form-control', 'id': 'results_per_page' }} ) }}
                </div>
              {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary' }} ) }}
            <!-- /.col-lg-6 (nested) -->
          ` {{ form_end(form) }}
        </div>
    </section>
  </div>
{% endblock %}
{% endembed %}
{% endblock %}
{% block javascripts %}
  <script type=\"text/javascript\">
    \$(function() {
      \$(\"#classs_c_title\").focus();
    });    
  </script>
{% endblock %}", "config/configuration.html.twig", "/home/maestrojosiah/projects/exam/app/Resources/views/config/configuration.html.twig");
    }
}
