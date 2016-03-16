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
        $__internal_bf77dead7ec3a91501bd72a58d400d08287ac0fe401988c2fc26ea254ee56af9 = $this->env->getExtension("native_profiler");
        $__internal_bf77dead7ec3a91501bd72a58d400d08287ac0fe401988c2fc26ea254ee56af9->enter($__internal_bf77dead7ec3a91501bd72a58d400d08287ac0fe401988c2fc26ea254ee56af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf77dead7ec3a91501bd72a58d400d08287ac0fe401988c2fc26ea254ee56af9->leave($__internal_bf77dead7ec3a91501bd72a58d400d08287ac0fe401988c2fc26ea254ee56af9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_92663609a1b1e75dd368ffb04c01bcbcc65beab9c7d40b5dd14dfd4a3606f4b2 = $this->env->getExtension("native_profiler");
        $__internal_92663609a1b1e75dd368ffb04c01bcbcc65beab9c7d40b5dd14dfd4a3606f4b2->enter($__internal_92663609a1b1e75dd368ffb04c01bcbcc65beab9c7d40b5dd14dfd4a3606f4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_92663609a1b1e75dd368ffb04c01bcbcc65beab9c7d40b5dd14dfd4a3606f4b2->leave($__internal_92663609a1b1e75dd368ffb04c01bcbcc65beab9c7d40b5dd14dfd4a3606f4b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a78dff27ff4dc9fe138ef5a55b3462584f7836adf7ff77769445c5bc2193fdf6 = $this->env->getExtension("native_profiler");
        $__internal_a78dff27ff4dc9fe138ef5a55b3462584f7836adf7ff77769445c5bc2193fdf6->enter($__internal_a78dff27ff4dc9fe138ef5a55b3462584f7836adf7ff77769445c5bc2193fdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a78dff27ff4dc9fe138ef5a55b3462584f7836adf7ff77769445c5bc2193fdf6->leave($__internal_a78dff27ff4dc9fe138ef5a55b3462584f7836adf7ff77769445c5bc2193fdf6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ae491fcdc5dc8401524688724eff69ac04096d7113cf1a54eba0104e0d985b9 = $this->env->getExtension("native_profiler");
        $__internal_1ae491fcdc5dc8401524688724eff69ac04096d7113cf1a54eba0104e0d985b9->enter($__internal_1ae491fcdc5dc8401524688724eff69ac04096d7113cf1a54eba0104e0d985b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1ae491fcdc5dc8401524688724eff69ac04096d7113cf1a54eba0104e0d985b9->leave($__internal_1ae491fcdc5dc8401524688724eff69ac04096d7113cf1a54eba0104e0d985b9_prof);

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
