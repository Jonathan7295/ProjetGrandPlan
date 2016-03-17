<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d7bc665648796c401897a205fb4996d5ad9f46fdf9a1e6f7a752f86f01f69d9c extends Twig_Template
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
        $__internal_3662794873955ab61c7fdfefdb210d8d9fea0fd2d8482afb359002100fb8aaff = $this->env->getExtension("native_profiler");
        $__internal_3662794873955ab61c7fdfefdb210d8d9fea0fd2d8482afb359002100fb8aaff->enter($__internal_3662794873955ab61c7fdfefdb210d8d9fea0fd2d8482afb359002100fb8aaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_3662794873955ab61c7fdfefdb210d8d9fea0fd2d8482afb359002100fb8aaff->leave($__internal_3662794873955ab61c7fdfefdb210d8d9fea0fd2d8482afb359002100fb8aaff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
