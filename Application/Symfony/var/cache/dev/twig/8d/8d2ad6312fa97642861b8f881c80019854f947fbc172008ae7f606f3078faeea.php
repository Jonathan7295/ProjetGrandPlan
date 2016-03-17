<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2cf45eca70e648297288c046aae3d34111e6b7f2044ecb0cd81f2d399910e4fa extends Twig_Template
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
        $__internal_5cac33681d293f82610cc8baae6d2d1fc33faa6aa7aaa782d2459d33f18ffabb = $this->env->getExtension("native_profiler");
        $__internal_5cac33681d293f82610cc8baae6d2d1fc33faa6aa7aaa782d2459d33f18ffabb->enter($__internal_5cac33681d293f82610cc8baae6d2d1fc33faa6aa7aaa782d2459d33f18ffabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5cac33681d293f82610cc8baae6d2d1fc33faa6aa7aaa782d2459d33f18ffabb->leave($__internal_5cac33681d293f82610cc8baae6d2d1fc33faa6aa7aaa782d2459d33f18ffabb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
