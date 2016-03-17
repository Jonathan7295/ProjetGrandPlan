<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e876d9d1b7fbde4bccf1706440655e20fbb6eda11df37eaf5be9dd824f1d3ade extends Twig_Template
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
        $__internal_ec1dc3c79658c77c9c575fddc70f0f647fa42584bce9ebec4d05e368414a4a9a = $this->env->getExtension("native_profiler");
        $__internal_ec1dc3c79658c77c9c575fddc70f0f647fa42584bce9ebec4d05e368414a4a9a->enter($__internal_ec1dc3c79658c77c9c575fddc70f0f647fa42584bce9ebec4d05e368414a4a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_ec1dc3c79658c77c9c575fddc70f0f647fa42584bce9ebec4d05e368414a4a9a->leave($__internal_ec1dc3c79658c77c9c575fddc70f0f647fa42584bce9ebec4d05e368414a4a9a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
