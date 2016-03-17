<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_d6e10de0bf151a360c446c15c47084b76312929ab7c09439b7f8e4f0a3b9de06 extends Twig_Template
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
        $__internal_f51ac73fbe9ee82b65301ae2400650e89b90bbeb5f39b9af161b41e184f8cea2 = $this->env->getExtension("native_profiler");
        $__internal_f51ac73fbe9ee82b65301ae2400650e89b90bbeb5f39b9af161b41e184f8cea2->enter($__internal_f51ac73fbe9ee82b65301ae2400650e89b90bbeb5f39b9af161b41e184f8cea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_f51ac73fbe9ee82b65301ae2400650e89b90bbeb5f39b9af161b41e184f8cea2->leave($__internal_f51ac73fbe9ee82b65301ae2400650e89b90bbeb5f39b9af161b41e184f8cea2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
