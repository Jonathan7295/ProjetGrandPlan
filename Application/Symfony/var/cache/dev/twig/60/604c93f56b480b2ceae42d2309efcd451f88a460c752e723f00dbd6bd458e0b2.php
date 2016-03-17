<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a02bae778149ab14970111cd5346a922b81613d98bb54f3fb24dc16fbcbed60b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71449dfac4f0943ee43d73ffda2fe1f14cce9e7a8aa860deccd7c4bb0e613e13 = $this->env->getExtension("native_profiler");
        $__internal_71449dfac4f0943ee43d73ffda2fe1f14cce9e7a8aa860deccd7c4bb0e613e13->enter($__internal_71449dfac4f0943ee43d73ffda2fe1f14cce9e7a8aa860deccd7c4bb0e613e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_71449dfac4f0943ee43d73ffda2fe1f14cce9e7a8aa860deccd7c4bb0e613e13->leave($__internal_71449dfac4f0943ee43d73ffda2fe1f14cce9e7a8aa860deccd7c4bb0e613e13_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff4447b5cc93443112a5acc3d34d69b4f457e1a6628f8617c73106981cfe71ea = $this->env->getExtension("native_profiler");
        $__internal_ff4447b5cc93443112a5acc3d34d69b4f457e1a6628f8617c73106981cfe71ea->enter($__internal_ff4447b5cc93443112a5acc3d34d69b4f457e1a6628f8617c73106981cfe71ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ff4447b5cc93443112a5acc3d34d69b4f457e1a6628f8617c73106981cfe71ea->leave($__internal_ff4447b5cc93443112a5acc3d34d69b4f457e1a6628f8617c73106981cfe71ea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
