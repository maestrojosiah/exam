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
        $__internal_1eb8fc82c09f9a7781935082aa72876fa94fb9ac22e13345da220b9eb35c49e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb8fc82c09f9a7781935082aa72876fa94fb9ac22e13345da220b9eb35c49e0->enter($__internal_1eb8fc82c09f9a7781935082aa72876fa94fb9ac22e13345da220b9eb35c49e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_dabdea4acc6c3ed61a67babfaa627c18d6dbad2e7f6fbc941041ae7dc1ee147a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabdea4acc6c3ed61a67babfaa627c18d6dbad2e7f6fbc941041ae7dc1ee147a->enter($__internal_dabdea4acc6c3ed61a67babfaa627c18d6dbad2e7f6fbc941041ae7dc1ee147a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1eb8fc82c09f9a7781935082aa72876fa94fb9ac22e13345da220b9eb35c49e0->leave($__internal_1eb8fc82c09f9a7781935082aa72876fa94fb9ac22e13345da220b9eb35c49e0_prof);

        
        $__internal_dabdea4acc6c3ed61a67babfaa627c18d6dbad2e7f6fbc941041ae7dc1ee147a->leave($__internal_dabdea4acc6c3ed61a67babfaa627c18d6dbad2e7f6fbc941041ae7dc1ee147a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf54c5614b664dbbe22d8ebe34887f470a0a868caab553e11be80871615355ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf54c5614b664dbbe22d8ebe34887f470a0a868caab553e11be80871615355ab->enter($__internal_bf54c5614b664dbbe22d8ebe34887f470a0a868caab553e11be80871615355ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2343e6ccf125cd7d9f32f807cf6235dbe4ca985cf33c8e7ccc8d2a05035dee4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2343e6ccf125cd7d9f32f807cf6235dbe4ca985cf33c8e7ccc8d2a05035dee4c->enter($__internal_2343e6ccf125cd7d9f32f807cf6235dbe4ca985cf33c8e7ccc8d2a05035dee4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2343e6ccf125cd7d9f32f807cf6235dbe4ca985cf33c8e7ccc8d2a05035dee4c->leave($__internal_2343e6ccf125cd7d9f32f807cf6235dbe4ca985cf33c8e7ccc8d2a05035dee4c_prof);

        
        $__internal_bf54c5614b664dbbe22d8ebe34887f470a0a868caab553e11be80871615355ab->leave($__internal_bf54c5614b664dbbe22d8ebe34887f470a0a868caab553e11be80871615355ab_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_29e691a8b3a55ffd84c882f7a1686a6550b927369e91470913c309acbf49cde4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e691a8b3a55ffd84c882f7a1686a6550b927369e91470913c309acbf49cde4->enter($__internal_29e691a8b3a55ffd84c882f7a1686a6550b927369e91470913c309acbf49cde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be3b3df1b4c0de1345039f7e512a285fe807890e9f98b22d9f3c307745fb6f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3b3df1b4c0de1345039f7e512a285fe807890e9f98b22d9f3c307745fb6f47->enter($__internal_be3b3df1b4c0de1345039f7e512a285fe807890e9f98b22d9f3c307745fb6f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_be3b3df1b4c0de1345039f7e512a285fe807890e9f98b22d9f3c307745fb6f47->leave($__internal_be3b3df1b4c0de1345039f7e512a285fe807890e9f98b22d9f3c307745fb6f47_prof);

        
        $__internal_29e691a8b3a55ffd84c882f7a1686a6550b927369e91470913c309acbf49cde4->leave($__internal_29e691a8b3a55ffd84c882f7a1686a6550b927369e91470913c309acbf49cde4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_623bbcbfd8e85d9eb54670f448f84cdc720f5e7b10e1817f0fac9ed2f68fa24a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_623bbcbfd8e85d9eb54670f448f84cdc720f5e7b10e1817f0fac9ed2f68fa24a->enter($__internal_623bbcbfd8e85d9eb54670f448f84cdc720f5e7b10e1817f0fac9ed2f68fa24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39a6dd4fa5915ef1307bf0b073179c0cf9808018d32bf039201aae8a8764b0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a6dd4fa5915ef1307bf0b073179c0cf9808018d32bf039201aae8a8764b0e0->enter($__internal_39a6dd4fa5915ef1307bf0b073179c0cf9808018d32bf039201aae8a8764b0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_39a6dd4fa5915ef1307bf0b073179c0cf9808018d32bf039201aae8a8764b0e0->leave($__internal_39a6dd4fa5915ef1307bf0b073179c0cf9808018d32bf039201aae8a8764b0e0_prof);

        
        $__internal_623bbcbfd8e85d9eb54670f448f84cdc720f5e7b10e1817f0fac9ed2f68fa24a->leave($__internal_623bbcbfd8e85d9eb54670f448f84cdc720f5e7b10e1817f0fac9ed2f68fa24a_prof);

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
