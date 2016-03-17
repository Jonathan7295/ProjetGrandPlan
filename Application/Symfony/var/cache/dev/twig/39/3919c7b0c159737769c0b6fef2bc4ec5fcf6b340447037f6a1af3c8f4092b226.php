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
        $__internal_19774cb4cd6e9f689c3468fa1dc23342cf5af7d31346a02d6f5b1c484756c566 = $this->env->getExtension("native_profiler");
        $__internal_19774cb4cd6e9f689c3468fa1dc23342cf5af7d31346a02d6f5b1c484756c566->enter($__internal_19774cb4cd6e9f689c3468fa1dc23342cf5af7d31346a02d6f5b1c484756c566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_19774cb4cd6e9f689c3468fa1dc23342cf5af7d31346a02d6f5b1c484756c566->leave($__internal_19774cb4cd6e9f689c3468fa1dc23342cf5af7d31346a02d6f5b1c484756c566_prof);

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
