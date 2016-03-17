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
        $__internal_4480aa6c1f88735ff52c23bb8cd5ea626762766b8d14f92920ff7c6c51e1ace5 = $this->env->getExtension("native_profiler");
        $__internal_4480aa6c1f88735ff52c23bb8cd5ea626762766b8d14f92920ff7c6c51e1ace5->enter($__internal_4480aa6c1f88735ff52c23bb8cd5ea626762766b8d14f92920ff7c6c51e1ace5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4480aa6c1f88735ff52c23bb8cd5ea626762766b8d14f92920ff7c6c51e1ace5->leave($__internal_4480aa6c1f88735ff52c23bb8cd5ea626762766b8d14f92920ff7c6c51e1ace5_prof);

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
