<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2b54e9a967919af9b4fc98893eff6d92a1d02a877301ff0045d056816128f8a8 extends Twig_Template
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
        $__internal_3216d5c1887b38901df5ea0cac4e7fa1cce4dce5472cafa0fd79febd6c10d3a3 = $this->env->getExtension("native_profiler");
        $__internal_3216d5c1887b38901df5ea0cac4e7fa1cce4dce5472cafa0fd79febd6c10d3a3->enter($__internal_3216d5c1887b38901df5ea0cac4e7fa1cce4dce5472cafa0fd79febd6c10d3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3216d5c1887b38901df5ea0cac4e7fa1cce4dce5472cafa0fd79febd6c10d3a3->leave($__internal_3216d5c1887b38901df5ea0cac4e7fa1cce4dce5472cafa0fd79febd6c10d3a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
