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
        $__internal_f1795c98eec4a51432ca2f9ce69abdb8902ca72b6b7817e4b38e2e5cfdc05708 = $this->env->getExtension("native_profiler");
        $__internal_f1795c98eec4a51432ca2f9ce69abdb8902ca72b6b7817e4b38e2e5cfdc05708->enter($__internal_f1795c98eec4a51432ca2f9ce69abdb8902ca72b6b7817e4b38e2e5cfdc05708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_f1795c98eec4a51432ca2f9ce69abdb8902ca72b6b7817e4b38e2e5cfdc05708->leave($__internal_f1795c98eec4a51432ca2f9ce69abdb8902ca72b6b7817e4b38e2e5cfdc05708_prof);

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
