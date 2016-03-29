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
        $__internal_8c981d02bc63a53c74372cca4bc5deec7bdde960939ba67804fa6ed78c878e12 = $this->env->getExtension("native_profiler");
        $__internal_8c981d02bc63a53c74372cca4bc5deec7bdde960939ba67804fa6ed78c878e12->enter($__internal_8c981d02bc63a53c74372cca4bc5deec7bdde960939ba67804fa6ed78c878e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_8c981d02bc63a53c74372cca4bc5deec7bdde960939ba67804fa6ed78c878e12->leave($__internal_8c981d02bc63a53c74372cca4bc5deec7bdde960939ba67804fa6ed78c878e12_prof);

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
