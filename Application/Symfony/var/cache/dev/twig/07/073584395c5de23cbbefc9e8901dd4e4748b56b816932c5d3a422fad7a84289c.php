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
        $__internal_2c651ed8a7aa7865fa7bdd3eb2bbbf10bc82bc7f14330bcc67723497d4034d9f = $this->env->getExtension("native_profiler");
        $__internal_2c651ed8a7aa7865fa7bdd3eb2bbbf10bc82bc7f14330bcc67723497d4034d9f->enter($__internal_2c651ed8a7aa7865fa7bdd3eb2bbbf10bc82bc7f14330bcc67723497d4034d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_2c651ed8a7aa7865fa7bdd3eb2bbbf10bc82bc7f14330bcc67723497d4034d9f->leave($__internal_2c651ed8a7aa7865fa7bdd3eb2bbbf10bc82bc7f14330bcc67723497d4034d9f_prof);

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
