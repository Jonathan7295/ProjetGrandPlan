<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3d8d2eda71b975f68477ffb4a93549dcc6aed5d04ffb24d6c294f6e16ef2f515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_5b2dbae38b6163aea65599699bfa1c0e1999c6f94d8076e518abbd92bab7ab5a = $this->env->getExtension("native_profiler");
        $__internal_5b2dbae38b6163aea65599699bfa1c0e1999c6f94d8076e518abbd92bab7ab5a->enter($__internal_5b2dbae38b6163aea65599699bfa1c0e1999c6f94d8076e518abbd92bab7ab5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b2dbae38b6163aea65599699bfa1c0e1999c6f94d8076e518abbd92bab7ab5a->leave($__internal_5b2dbae38b6163aea65599699bfa1c0e1999c6f94d8076e518abbd92bab7ab5a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_722b823ed97897e3f6eaa09d87c2945f7af2799da01d4bcdda07c1d8a71350fc = $this->env->getExtension("native_profiler");
        $__internal_722b823ed97897e3f6eaa09d87c2945f7af2799da01d4bcdda07c1d8a71350fc->enter($__internal_722b823ed97897e3f6eaa09d87c2945f7af2799da01d4bcdda07c1d8a71350fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_722b823ed97897e3f6eaa09d87c2945f7af2799da01d4bcdda07c1d8a71350fc->leave($__internal_722b823ed97897e3f6eaa09d87c2945f7af2799da01d4bcdda07c1d8a71350fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2bd70281e9236b59d1c37bb9819e3a71d0ce64b627203d02e145ef8321ab79e8 = $this->env->getExtension("native_profiler");
        $__internal_2bd70281e9236b59d1c37bb9819e3a71d0ce64b627203d02e145ef8321ab79e8->enter($__internal_2bd70281e9236b59d1c37bb9819e3a71d0ce64b627203d02e145ef8321ab79e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2bd70281e9236b59d1c37bb9819e3a71d0ce64b627203d02e145ef8321ab79e8->leave($__internal_2bd70281e9236b59d1c37bb9819e3a71d0ce64b627203d02e145ef8321ab79e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2467856dea00db9fdfe4739cf9b287ee148f81bc67c40861bf6985c9af378f00 = $this->env->getExtension("native_profiler");
        $__internal_2467856dea00db9fdfe4739cf9b287ee148f81bc67c40861bf6985c9af378f00->enter($__internal_2467856dea00db9fdfe4739cf9b287ee148f81bc67c40861bf6985c9af378f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2467856dea00db9fdfe4739cf9b287ee148f81bc67c40861bf6985c9af378f00->leave($__internal_2467856dea00db9fdfe4739cf9b287ee148f81bc67c40861bf6985c9af378f00_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
