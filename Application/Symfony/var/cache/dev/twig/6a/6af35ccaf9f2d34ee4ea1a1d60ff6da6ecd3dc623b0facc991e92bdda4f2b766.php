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
        $__internal_2fd307d97ee5bec9744ecb985861f669c4b1ccef6b660fd8987057c9c0b61fbf = $this->env->getExtension("native_profiler");
        $__internal_2fd307d97ee5bec9744ecb985861f669c4b1ccef6b660fd8987057c9c0b61fbf->enter($__internal_2fd307d97ee5bec9744ecb985861f669c4b1ccef6b660fd8987057c9c0b61fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2fd307d97ee5bec9744ecb985861f669c4b1ccef6b660fd8987057c9c0b61fbf->leave($__internal_2fd307d97ee5bec9744ecb985861f669c4b1ccef6b660fd8987057c9c0b61fbf_prof);

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
