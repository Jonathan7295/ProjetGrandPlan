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
        $__internal_42bd4164ea3a01c88f296e70d693b413b88bf2b761fbf6c18ab2faecd32f8b99 = $this->env->getExtension("native_profiler");
        $__internal_42bd4164ea3a01c88f296e70d693b413b88bf2b761fbf6c18ab2faecd32f8b99->enter($__internal_42bd4164ea3a01c88f296e70d693b413b88bf2b761fbf6c18ab2faecd32f8b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_42bd4164ea3a01c88f296e70d693b413b88bf2b761fbf6c18ab2faecd32f8b99->leave($__internal_42bd4164ea3a01c88f296e70d693b413b88bf2b761fbf6c18ab2faecd32f8b99_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_647114d8828467ec009f8f9b7c8346cbab7c6152adebb029debf7abbde3b8e16 = $this->env->getExtension("native_profiler");
        $__internal_647114d8828467ec009f8f9b7c8346cbab7c6152adebb029debf7abbde3b8e16->enter($__internal_647114d8828467ec009f8f9b7c8346cbab7c6152adebb029debf7abbde3b8e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_647114d8828467ec009f8f9b7c8346cbab7c6152adebb029debf7abbde3b8e16->leave($__internal_647114d8828467ec009f8f9b7c8346cbab7c6152adebb029debf7abbde3b8e16_prof);

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
