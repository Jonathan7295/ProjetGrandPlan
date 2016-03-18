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
        $__internal_3575688372568deafe7d8d8b0786d71948f188cebd7c315b36f4f88e9e642ea1 = $this->env->getExtension("native_profiler");
        $__internal_3575688372568deafe7d8d8b0786d71948f188cebd7c315b36f4f88e9e642ea1->enter($__internal_3575688372568deafe7d8d8b0786d71948f188cebd7c315b36f4f88e9e642ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3575688372568deafe7d8d8b0786d71948f188cebd7c315b36f4f88e9e642ea1->leave($__internal_3575688372568deafe7d8d8b0786d71948f188cebd7c315b36f4f88e9e642ea1_prof);

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
