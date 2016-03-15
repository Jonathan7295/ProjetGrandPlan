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
        $__internal_ae43368c98a1caad39cab55454424b821505e745252f97de75e426d25a271bc9 = $this->env->getExtension("native_profiler");
        $__internal_ae43368c98a1caad39cab55454424b821505e745252f97de75e426d25a271bc9->enter($__internal_ae43368c98a1caad39cab55454424b821505e745252f97de75e426d25a271bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_ae43368c98a1caad39cab55454424b821505e745252f97de75e426d25a271bc9->leave($__internal_ae43368c98a1caad39cab55454424b821505e745252f97de75e426d25a271bc9_prof);

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
