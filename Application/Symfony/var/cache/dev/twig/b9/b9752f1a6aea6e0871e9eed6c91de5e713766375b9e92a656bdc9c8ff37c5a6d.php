<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b5b166fad776d7458e2ced523faac4bd3fb2a794b4711e3e904f663f2261f1d3 extends Twig_Template
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
        $__internal_2aee5cd0342a93aa0a2183f0fe85773c58d02d46a3ea2a3cb7abde4c0fde7079 = $this->env->getExtension("native_profiler");
        $__internal_2aee5cd0342a93aa0a2183f0fe85773c58d02d46a3ea2a3cb7abde4c0fde7079->enter($__internal_2aee5cd0342a93aa0a2183f0fe85773c58d02d46a3ea2a3cb7abde4c0fde7079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2aee5cd0342a93aa0a2183f0fe85773c58d02d46a3ea2a3cb7abde4c0fde7079->leave($__internal_2aee5cd0342a93aa0a2183f0fe85773c58d02d46a3ea2a3cb7abde4c0fde7079_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
