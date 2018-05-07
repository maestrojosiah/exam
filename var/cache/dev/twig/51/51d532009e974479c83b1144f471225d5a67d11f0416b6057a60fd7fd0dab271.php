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
        $__internal_0688c011cea3046e7e3571b9193188177333f35a95b11fd63ebd540ba1fc7e9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0688c011cea3046e7e3571b9193188177333f35a95b11fd63ebd540ba1fc7e9c->enter($__internal_0688c011cea3046e7e3571b9193188177333f35a95b11fd63ebd540ba1fc7e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_35228d32f4d0eca526f6ade443f73a9d69ac46fe1615a39d5d6a635717c4b64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35228d32f4d0eca526f6ade443f73a9d69ac46fe1615a39d5d6a635717c4b64e->enter($__internal_35228d32f4d0eca526f6ade443f73a9d69ac46fe1615a39d5d6a635717c4b64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0688c011cea3046e7e3571b9193188177333f35a95b11fd63ebd540ba1fc7e9c->leave($__internal_0688c011cea3046e7e3571b9193188177333f35a95b11fd63ebd540ba1fc7e9c_prof);

        
        $__internal_35228d32f4d0eca526f6ade443f73a9d69ac46fe1615a39d5d6a635717c4b64e->leave($__internal_35228d32f4d0eca526f6ade443f73a9d69ac46fe1615a39d5d6a635717c4b64e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb4f3abb223f9ed1cc71d52d6ad76f3a41ec4d787d5ace6f0348790e66acd154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4f3abb223f9ed1cc71d52d6ad76f3a41ec4d787d5ace6f0348790e66acd154->enter($__internal_bb4f3abb223f9ed1cc71d52d6ad76f3a41ec4d787d5ace6f0348790e66acd154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6d267726b1073333836c66da3265eb8ea50dd50e5292ad27891a5533afd04e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d267726b1073333836c66da3265eb8ea50dd50e5292ad27891a5533afd04e86->enter($__internal_6d267726b1073333836c66da3265eb8ea50dd50e5292ad27891a5533afd04e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6d267726b1073333836c66da3265eb8ea50dd50e5292ad27891a5533afd04e86->leave($__internal_6d267726b1073333836c66da3265eb8ea50dd50e5292ad27891a5533afd04e86_prof);

        
        $__internal_bb4f3abb223f9ed1cc71d52d6ad76f3a41ec4d787d5ace6f0348790e66acd154->leave($__internal_bb4f3abb223f9ed1cc71d52d6ad76f3a41ec4d787d5ace6f0348790e66acd154_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e9b1d4b87a481fc3e89aab5621de212e0ce1b71815a8ec2d8f58e389638af67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9b1d4b87a481fc3e89aab5621de212e0ce1b71815a8ec2d8f58e389638af67->enter($__internal_6e9b1d4b87a481fc3e89aab5621de212e0ce1b71815a8ec2d8f58e389638af67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_18e926d24c1d3fa2e0bb71a7d90b6218603e902734027dec2fa849ccda6c6587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e926d24c1d3fa2e0bb71a7d90b6218603e902734027dec2fa849ccda6c6587->enter($__internal_18e926d24c1d3fa2e0bb71a7d90b6218603e902734027dec2fa849ccda6c6587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_18e926d24c1d3fa2e0bb71a7d90b6218603e902734027dec2fa849ccda6c6587->leave($__internal_18e926d24c1d3fa2e0bb71a7d90b6218603e902734027dec2fa849ccda6c6587_prof);

        
        $__internal_6e9b1d4b87a481fc3e89aab5621de212e0ce1b71815a8ec2d8f58e389638af67->leave($__internal_6e9b1d4b87a481fc3e89aab5621de212e0ce1b71815a8ec2d8f58e389638af67_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1199752a79b1e81e0a557bf752994758a16fde081679b91858223dca1c8c666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1199752a79b1e81e0a557bf752994758a16fde081679b91858223dca1c8c666->enter($__internal_c1199752a79b1e81e0a557bf752994758a16fde081679b91858223dca1c8c666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f125fe50729994564921a63583c13f77a959f4475918719c9bd62501444e8470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f125fe50729994564921a63583c13f77a959f4475918719c9bd62501444e8470->enter($__internal_f125fe50729994564921a63583c13f77a959f4475918719c9bd62501444e8470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f125fe50729994564921a63583c13f77a959f4475918719c9bd62501444e8470->leave($__internal_f125fe50729994564921a63583c13f77a959f4475918719c9bd62501444e8470_prof);

        
        $__internal_c1199752a79b1e81e0a557bf752994758a16fde081679b91858223dca1c8c666->leave($__internal_c1199752a79b1e81e0a557bf752994758a16fde081679b91858223dca1c8c666_prof);

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
