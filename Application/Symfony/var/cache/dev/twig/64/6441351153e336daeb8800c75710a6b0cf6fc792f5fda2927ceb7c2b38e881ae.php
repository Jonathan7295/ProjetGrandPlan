<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_66e661a7df72b3be56b54b46b5d5d44043f4da5eb8ace71da337d7e597b57501 extends Twig_Template
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
        $__internal_2cb82b456dc6f3fd5c90361f8be15419e1da4c08d85a717603071aa7059aad5c = $this->env->getExtension("native_profiler");
        $__internal_2cb82b456dc6f3fd5c90361f8be15419e1da4c08d85a717603071aa7059aad5c->enter($__internal_2cb82b456dc6f3fd5c90361f8be15419e1da4c08d85a717603071aa7059aad5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_2cb82b456dc6f3fd5c90361f8be15419e1da4c08d85a717603071aa7059aad5c->leave($__internal_2cb82b456dc6f3fd5c90361f8be15419e1da4c08d85a717603071aa7059aad5c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
