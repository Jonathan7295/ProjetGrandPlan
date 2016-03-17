<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6b840b20aec1211a2cfc732ebf3d183a21ef38169dffda4d0e09910dee3b23ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb37b72b89d159e169ff90059a7b2b4096de71417f088cdf5d9f6213b97ec064 = $this->env->getExtension("native_profiler");
        $__internal_cb37b72b89d159e169ff90059a7b2b4096de71417f088cdf5d9f6213b97ec064->enter($__internal_cb37b72b89d159e169ff90059a7b2b4096de71417f088cdf5d9f6213b97ec064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb37b72b89d159e169ff90059a7b2b4096de71417f088cdf5d9f6213b97ec064->leave($__internal_cb37b72b89d159e169ff90059a7b2b4096de71417f088cdf5d9f6213b97ec064_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f20e4a3b261b3694fdfa4c4a15e2433564bad0656e4ccd496821e5c6fe3df57 = $this->env->getExtension("native_profiler");
        $__internal_3f20e4a3b261b3694fdfa4c4a15e2433564bad0656e4ccd496821e5c6fe3df57->enter($__internal_3f20e4a3b261b3694fdfa4c4a15e2433564bad0656e4ccd496821e5c6fe3df57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3f20e4a3b261b3694fdfa4c4a15e2433564bad0656e4ccd496821e5c6fe3df57->leave($__internal_3f20e4a3b261b3694fdfa4c4a15e2433564bad0656e4ccd496821e5c6fe3df57_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4cd10e5790c79b6a2cd32b760397a976d6d506e292b0be6902dc48ea86053cd0 = $this->env->getExtension("native_profiler");
        $__internal_4cd10e5790c79b6a2cd32b760397a976d6d506e292b0be6902dc48ea86053cd0->enter($__internal_4cd10e5790c79b6a2cd32b760397a976d6d506e292b0be6902dc48ea86053cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4cd10e5790c79b6a2cd32b760397a976d6d506e292b0be6902dc48ea86053cd0->leave($__internal_4cd10e5790c79b6a2cd32b760397a976d6d506e292b0be6902dc48ea86053cd0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f102d463654f3613c8818186a047fa9410952fd9b92f28391a965ea4ead2819 = $this->env->getExtension("native_profiler");
        $__internal_5f102d463654f3613c8818186a047fa9410952fd9b92f28391a965ea4ead2819->enter($__internal_5f102d463654f3613c8818186a047fa9410952fd9b92f28391a965ea4ead2819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5f102d463654f3613c8818186a047fa9410952fd9b92f28391a965ea4ead2819->leave($__internal_5f102d463654f3613c8818186a047fa9410952fd9b92f28391a965ea4ead2819_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
