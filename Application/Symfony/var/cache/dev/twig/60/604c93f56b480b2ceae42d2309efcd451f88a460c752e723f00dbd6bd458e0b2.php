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
        $__internal_1f6d08ebf90f41a0eac4b1355e0c11fd54c6031193e149856291036d1fd79036 = $this->env->getExtension("native_profiler");
        $__internal_1f6d08ebf90f41a0eac4b1355e0c11fd54c6031193e149856291036d1fd79036->enter($__internal_1f6d08ebf90f41a0eac4b1355e0c11fd54c6031193e149856291036d1fd79036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1f6d08ebf90f41a0eac4b1355e0c11fd54c6031193e149856291036d1fd79036->leave($__internal_1f6d08ebf90f41a0eac4b1355e0c11fd54c6031193e149856291036d1fd79036_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b05f4f052ed0cb1ea741faa7bd2a5f43f81a1c0769a48288635cd779ce8098cf = $this->env->getExtension("native_profiler");
        $__internal_b05f4f052ed0cb1ea741faa7bd2a5f43f81a1c0769a48288635cd779ce8098cf->enter($__internal_b05f4f052ed0cb1ea741faa7bd2a5f43f81a1c0769a48288635cd779ce8098cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b05f4f052ed0cb1ea741faa7bd2a5f43f81a1c0769a48288635cd779ce8098cf->leave($__internal_b05f4f052ed0cb1ea741faa7bd2a5f43f81a1c0769a48288635cd779ce8098cf_prof);

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
