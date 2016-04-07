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
        $__internal_1138dd6a0298c1abe6fe49dd67985027d8b3c6671e428fb691ecf60e9e6bb87d = $this->env->getExtension("native_profiler");
        $__internal_1138dd6a0298c1abe6fe49dd67985027d8b3c6671e428fb691ecf60e9e6bb87d->enter($__internal_1138dd6a0298c1abe6fe49dd67985027d8b3c6671e428fb691ecf60e9e6bb87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1138dd6a0298c1abe6fe49dd67985027d8b3c6671e428fb691ecf60e9e6bb87d->leave($__internal_1138dd6a0298c1abe6fe49dd67985027d8b3c6671e428fb691ecf60e9e6bb87d_prof);

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
