<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5302f98de803bd68d0547d25730044986b9982aeae7919676f445e148211094d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6bd4c6e2b3f4d55fedd693ce3625455c55c3112b3f0b37b3ebce4f745b2ba0c = $this->env->getExtension("native_profiler");
        $__internal_b6bd4c6e2b3f4d55fedd693ce3625455c55c3112b3f0b37b3ebce4f745b2ba0c->enter($__internal_b6bd4c6e2b3f4d55fedd693ce3625455c55c3112b3f0b37b3ebce4f745b2ba0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_b6bd4c6e2b3f4d55fedd693ce3625455c55c3112b3f0b37b3ebce4f745b2ba0c->leave($__internal_b6bd4c6e2b3f4d55fedd693ce3625455c55c3112b3f0b37b3ebce4f745b2ba0c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
