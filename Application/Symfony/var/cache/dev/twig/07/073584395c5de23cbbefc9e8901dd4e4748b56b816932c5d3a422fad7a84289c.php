<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_3733d3be6a9e6780b9599bd74d5a308bb0121b0b2ef2d9b2dc003c29828d03a1 extends Twig_Template
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
        $__internal_f8e212b7959aa8c7e9e2c6f5700c6d01d969ed1c60a4d883c4c0ba30277b4b4e = $this->env->getExtension("native_profiler");
        $__internal_f8e212b7959aa8c7e9e2c6f5700c6d01d969ed1c60a4d883c4c0ba30277b4b4e->enter($__internal_f8e212b7959aa8c7e9e2c6f5700c6d01d969ed1c60a4d883c4c0ba30277b4b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f8e212b7959aa8c7e9e2c6f5700c6d01d969ed1c60a4d883c4c0ba30277b4b4e->leave($__internal_f8e212b7959aa8c7e9e2c6f5700c6d01d969ed1c60a4d883c4c0ba30277b4b4e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
