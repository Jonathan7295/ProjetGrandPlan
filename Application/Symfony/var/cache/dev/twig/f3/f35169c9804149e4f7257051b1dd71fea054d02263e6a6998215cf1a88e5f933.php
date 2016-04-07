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
        $__internal_bbef0290b01ab7b3e246a5980b971b38a573ecc40e6980c23a65d3a2ec693d8e = $this->env->getExtension("native_profiler");
        $__internal_bbef0290b01ab7b3e246a5980b971b38a573ecc40e6980c23a65d3a2ec693d8e->enter($__internal_bbef0290b01ab7b3e246a5980b971b38a573ecc40e6980c23a65d3a2ec693d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbef0290b01ab7b3e246a5980b971b38a573ecc40e6980c23a65d3a2ec693d8e->leave($__internal_bbef0290b01ab7b3e246a5980b971b38a573ecc40e6980c23a65d3a2ec693d8e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c1bd03c807733eb80cb9cc2fe966c0b18258c41d2555432bc518731160ac40fe = $this->env->getExtension("native_profiler");
        $__internal_c1bd03c807733eb80cb9cc2fe966c0b18258c41d2555432bc518731160ac40fe->enter($__internal_c1bd03c807733eb80cb9cc2fe966c0b18258c41d2555432bc518731160ac40fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c1bd03c807733eb80cb9cc2fe966c0b18258c41d2555432bc518731160ac40fe->leave($__internal_c1bd03c807733eb80cb9cc2fe966c0b18258c41d2555432bc518731160ac40fe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e9dd43d0b1e88b0be96155719880069ae69175f913904fb564bedf4374627296 = $this->env->getExtension("native_profiler");
        $__internal_e9dd43d0b1e88b0be96155719880069ae69175f913904fb564bedf4374627296->enter($__internal_e9dd43d0b1e88b0be96155719880069ae69175f913904fb564bedf4374627296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e9dd43d0b1e88b0be96155719880069ae69175f913904fb564bedf4374627296->leave($__internal_e9dd43d0b1e88b0be96155719880069ae69175f913904fb564bedf4374627296_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44274ad14ada68ee1a5c5f39be6566bbab26f8be00112de6a0162d796ec82aa3 = $this->env->getExtension("native_profiler");
        $__internal_44274ad14ada68ee1a5c5f39be6566bbab26f8be00112de6a0162d796ec82aa3->enter($__internal_44274ad14ada68ee1a5c5f39be6566bbab26f8be00112de6a0162d796ec82aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_44274ad14ada68ee1a5c5f39be6566bbab26f8be00112de6a0162d796ec82aa3->leave($__internal_44274ad14ada68ee1a5c5f39be6566bbab26f8be00112de6a0162d796ec82aa3_prof);

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
