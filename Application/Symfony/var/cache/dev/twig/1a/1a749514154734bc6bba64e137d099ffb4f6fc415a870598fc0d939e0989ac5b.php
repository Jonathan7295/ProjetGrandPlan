<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_369536f7838cd3f445846fb421092e8d183fb01c38e5a440586b260659acce63 extends Twig_Template
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
        $__internal_01950616144bb162de1dd2068c2ed6a2a686dde50752b298642d03ca4ee8f077 = $this->env->getExtension("native_profiler");
        $__internal_01950616144bb162de1dd2068c2ed6a2a686dde50752b298642d03ca4ee8f077->enter($__internal_01950616144bb162de1dd2068c2ed6a2a686dde50752b298642d03ca4ee8f077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_01950616144bb162de1dd2068c2ed6a2a686dde50752b298642d03ca4ee8f077->leave($__internal_01950616144bb162de1dd2068c2ed6a2a686dde50752b298642d03ca4ee8f077_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
