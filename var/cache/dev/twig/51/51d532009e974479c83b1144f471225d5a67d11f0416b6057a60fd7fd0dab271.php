<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc550cf460c7b72e2debca02de7c701abd3922bbeb7e896bfe64ba845c575bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc550cf460c7b72e2debca02de7c701abd3922bbeb7e896bfe64ba845c575bee->enter($__internal_dc550cf460c7b72e2debca02de7c701abd3922bbeb7e896bfe64ba845c575bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_355fcad62623ced02da81f9e9e07783e702e19e45f6275c740cb0828c482dd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355fcad62623ced02da81f9e9e07783e702e19e45f6275c740cb0828c482dd3a->enter($__internal_355fcad62623ced02da81f9e9e07783e702e19e45f6275c740cb0828c482dd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_dc550cf460c7b72e2debca02de7c701abd3922bbeb7e896bfe64ba845c575bee->leave($__internal_dc550cf460c7b72e2debca02de7c701abd3922bbeb7e896bfe64ba845c575bee_prof);

        
        $__internal_355fcad62623ced02da81f9e9e07783e702e19e45f6275c740cb0828c482dd3a->leave($__internal_355fcad62623ced02da81f9e9e07783e702e19e45f6275c740cb0828c482dd3a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba72a01510252a3fb3f4731f4b676c9c6b14ab99b0db9da35c43927a751d053a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba72a01510252a3fb3f4731f4b676c9c6b14ab99b0db9da35c43927a751d053a->enter($__internal_ba72a01510252a3fb3f4731f4b676c9c6b14ab99b0db9da35c43927a751d053a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_969a121b929b36a6389c7a5f557e225bbb6885b00e3f7697c874aa59ebced39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969a121b929b36a6389c7a5f557e225bbb6885b00e3f7697c874aa59ebced39c->enter($__internal_969a121b929b36a6389c7a5f557e225bbb6885b00e3f7697c874aa59ebced39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_969a121b929b36a6389c7a5f557e225bbb6885b00e3f7697c874aa59ebced39c->leave($__internal_969a121b929b36a6389c7a5f557e225bbb6885b00e3f7697c874aa59ebced39c_prof);

        
        $__internal_ba72a01510252a3fb3f4731f4b676c9c6b14ab99b0db9da35c43927a751d053a->leave($__internal_ba72a01510252a3fb3f4731f4b676c9c6b14ab99b0db9da35c43927a751d053a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_675682f99eca0fa8222b68c9b249743e8de10a73d853a34dbfa9f6efc933800f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675682f99eca0fa8222b68c9b249743e8de10a73d853a34dbfa9f6efc933800f->enter($__internal_675682f99eca0fa8222b68c9b249743e8de10a73d853a34dbfa9f6efc933800f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e1e73a53288d0c7a10f7d8af16dfb382101b7a6482299cb26e293f24083dd074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e73a53288d0c7a10f7d8af16dfb382101b7a6482299cb26e293f24083dd074->enter($__internal_e1e73a53288d0c7a10f7d8af16dfb382101b7a6482299cb26e293f24083dd074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e1e73a53288d0c7a10f7d8af16dfb382101b7a6482299cb26e293f24083dd074->leave($__internal_e1e73a53288d0c7a10f7d8af16dfb382101b7a6482299cb26e293f24083dd074_prof);

        
        $__internal_675682f99eca0fa8222b68c9b249743e8de10a73d853a34dbfa9f6efc933800f->leave($__internal_675682f99eca0fa8222b68c9b249743e8de10a73d853a34dbfa9f6efc933800f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b8c84c394e01f69f4ca09db34d067a62eefb73a9f7315b2184d7eedff321097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8c84c394e01f69f4ca09db34d067a62eefb73a9f7315b2184d7eedff321097->enter($__internal_4b8c84c394e01f69f4ca09db34d067a62eefb73a9f7315b2184d7eedff321097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cb1673163860d3d7ce7665f954813612029b4b70cab597c39abcc5761b11c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb1673163860d3d7ce7665f954813612029b4b70cab597c39abcc5761b11c41->enter($__internal_2cb1673163860d3d7ce7665f954813612029b4b70cab597c39abcc5761b11c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2cb1673163860d3d7ce7665f954813612029b4b70cab597c39abcc5761b11c41->leave($__internal_2cb1673163860d3d7ce7665f954813612029b4b70cab597c39abcc5761b11c41_prof);

        
        $__internal_4b8c84c394e01f69f4ca09db34d067a62eefb73a9f7315b2184d7eedff321097->leave($__internal_4b8c84c394e01f69f4ca09db34d067a62eefb73a9f7315b2184d7eedff321097_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/maestrojosiah/projects/exam/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
