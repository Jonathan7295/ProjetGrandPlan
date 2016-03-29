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
        $__internal_bef69b32f9a5d5c10acdd1c36ef92f3a62b08779d3ef85467baf196932c22d31 = $this->env->getExtension("native_profiler");
        $__internal_bef69b32f9a5d5c10acdd1c36ef92f3a62b08779d3ef85467baf196932c22d31->enter($__internal_bef69b32f9a5d5c10acdd1c36ef92f3a62b08779d3ef85467baf196932c22d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bef69b32f9a5d5c10acdd1c36ef92f3a62b08779d3ef85467baf196932c22d31->leave($__internal_bef69b32f9a5d5c10acdd1c36ef92f3a62b08779d3ef85467baf196932c22d31_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0af227f8b3aae7a08993df87c9b24a251f3d6981c36fb5a30f4a34e45becc53c = $this->env->getExtension("native_profiler");
        $__internal_0af227f8b3aae7a08993df87c9b24a251f3d6981c36fb5a30f4a34e45becc53c->enter($__internal_0af227f8b3aae7a08993df87c9b24a251f3d6981c36fb5a30f4a34e45becc53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0af227f8b3aae7a08993df87c9b24a251f3d6981c36fb5a30f4a34e45becc53c->leave($__internal_0af227f8b3aae7a08993df87c9b24a251f3d6981c36fb5a30f4a34e45becc53c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4aebff7b7cc715da7040bf5239de6bfe123b1b61be2fede416c171cd87733914 = $this->env->getExtension("native_profiler");
        $__internal_4aebff7b7cc715da7040bf5239de6bfe123b1b61be2fede416c171cd87733914->enter($__internal_4aebff7b7cc715da7040bf5239de6bfe123b1b61be2fede416c171cd87733914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4aebff7b7cc715da7040bf5239de6bfe123b1b61be2fede416c171cd87733914->leave($__internal_4aebff7b7cc715da7040bf5239de6bfe123b1b61be2fede416c171cd87733914_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_332c53d79bb85f66dad9bb237bc79f2a38c60911708b4fe6389ff53bc460c72f = $this->env->getExtension("native_profiler");
        $__internal_332c53d79bb85f66dad9bb237bc79f2a38c60911708b4fe6389ff53bc460c72f->enter($__internal_332c53d79bb85f66dad9bb237bc79f2a38c60911708b4fe6389ff53bc460c72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_332c53d79bb85f66dad9bb237bc79f2a38c60911708b4fe6389ff53bc460c72f->leave($__internal_332c53d79bb85f66dad9bb237bc79f2a38c60911708b4fe6389ff53bc460c72f_prof);

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
