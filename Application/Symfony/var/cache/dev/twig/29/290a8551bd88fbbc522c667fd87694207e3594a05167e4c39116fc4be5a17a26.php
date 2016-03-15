<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_97fbda5f35294cfbeb80e0978ddeef055f2cb58f88dbf83c16dcd37be5b23f07 extends Twig_Template
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
        $__internal_162a75e8db99ead772b803838dda7ab42c58f74e7dc21979dbd891787a7c5597 = $this->env->getExtension("native_profiler");
        $__internal_162a75e8db99ead772b803838dda7ab42c58f74e7dc21979dbd891787a7c5597->enter($__internal_162a75e8db99ead772b803838dda7ab42c58f74e7dc21979dbd891787a7c5597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_162a75e8db99ead772b803838dda7ab42c58f74e7dc21979dbd891787a7c5597->leave($__internal_162a75e8db99ead772b803838dda7ab42c58f74e7dc21979dbd891787a7c5597_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
