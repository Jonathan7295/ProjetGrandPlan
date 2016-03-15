<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fef9118c65d564f5819a1ba7e5ec246bc3852bc6bef3eabc7ffe6d7f8eb2d6fb extends Twig_Template
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
        $__internal_19ae40452eed9b63da4de01249de38b42bf494d6ad2bbc045acb2cd19fe87e64 = $this->env->getExtension("native_profiler");
        $__internal_19ae40452eed9b63da4de01249de38b42bf494d6ad2bbc045acb2cd19fe87e64->enter($__internal_19ae40452eed9b63da4de01249de38b42bf494d6ad2bbc045acb2cd19fe87e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_19ae40452eed9b63da4de01249de38b42bf494d6ad2bbc045acb2cd19fe87e64->leave($__internal_19ae40452eed9b63da4de01249de38b42bf494d6ad2bbc045acb2cd19fe87e64_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
