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
        $__internal_fb42c6f2f76de38ee48150109a076eea67cff20bc314a81442905235e80eb3c0 = $this->env->getExtension("native_profiler");
        $__internal_fb42c6f2f76de38ee48150109a076eea67cff20bc314a81442905235e80eb3c0->enter($__internal_fb42c6f2f76de38ee48150109a076eea67cff20bc314a81442905235e80eb3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb42c6f2f76de38ee48150109a076eea67cff20bc314a81442905235e80eb3c0->leave($__internal_fb42c6f2f76de38ee48150109a076eea67cff20bc314a81442905235e80eb3c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ffd3e47af19e8d6f70b9a27acaa3e5097ecf2ee1e99247d44079f64283830f01 = $this->env->getExtension("native_profiler");
        $__internal_ffd3e47af19e8d6f70b9a27acaa3e5097ecf2ee1e99247d44079f64283830f01->enter($__internal_ffd3e47af19e8d6f70b9a27acaa3e5097ecf2ee1e99247d44079f64283830f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ffd3e47af19e8d6f70b9a27acaa3e5097ecf2ee1e99247d44079f64283830f01->leave($__internal_ffd3e47af19e8d6f70b9a27acaa3e5097ecf2ee1e99247d44079f64283830f01_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1696105cdc993c1f40347dba33321c748dfdb1d12b01af91acca08d287f3368b = $this->env->getExtension("native_profiler");
        $__internal_1696105cdc993c1f40347dba33321c748dfdb1d12b01af91acca08d287f3368b->enter($__internal_1696105cdc993c1f40347dba33321c748dfdb1d12b01af91acca08d287f3368b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1696105cdc993c1f40347dba33321c748dfdb1d12b01af91acca08d287f3368b->leave($__internal_1696105cdc993c1f40347dba33321c748dfdb1d12b01af91acca08d287f3368b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d3650e211cafbcbf61dfe80bb257f9ac9c9bcd4bfa79b1d8ecc98293011ba61 = $this->env->getExtension("native_profiler");
        $__internal_1d3650e211cafbcbf61dfe80bb257f9ac9c9bcd4bfa79b1d8ecc98293011ba61->enter($__internal_1d3650e211cafbcbf61dfe80bb257f9ac9c9bcd4bfa79b1d8ecc98293011ba61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1d3650e211cafbcbf61dfe80bb257f9ac9c9bcd4bfa79b1d8ecc98293011ba61->leave($__internal_1d3650e211cafbcbf61dfe80bb257f9ac9c9bcd4bfa79b1d8ecc98293011ba61_prof);

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
