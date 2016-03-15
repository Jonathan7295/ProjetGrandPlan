<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6656c75ee8a192162d2718b987cbf1db39ee0a13e15f7db6d435706a73f70f46 extends Twig_Template
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
        $__internal_539f0ad2d328ccc89eecf241116a0246fef037cbe396f5b4f96c7f137c674c92 = $this->env->getExtension("native_profiler");
        $__internal_539f0ad2d328ccc89eecf241116a0246fef037cbe396f5b4f96c7f137c674c92->enter($__internal_539f0ad2d328ccc89eecf241116a0246fef037cbe396f5b4f96c7f137c674c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_539f0ad2d328ccc89eecf241116a0246fef037cbe396f5b4f96c7f137c674c92->leave($__internal_539f0ad2d328ccc89eecf241116a0246fef037cbe396f5b4f96c7f137c674c92_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
