<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_beae020e20d0b9d0b039d8f9268f1b0178d995028ec706d6b17f65ec804ec500 extends Twig_Template
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
        $__internal_19eeacab0b6a5cab392ef4d0735db0b4bb7314d213563e3263ab1c15b2c80fe7 = $this->env->getExtension("native_profiler");
        $__internal_19eeacab0b6a5cab392ef4d0735db0b4bb7314d213563e3263ab1c15b2c80fe7->enter($__internal_19eeacab0b6a5cab392ef4d0735db0b4bb7314d213563e3263ab1c15b2c80fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_19eeacab0b6a5cab392ef4d0735db0b4bb7314d213563e3263ab1c15b2c80fe7->leave($__internal_19eeacab0b6a5cab392ef4d0735db0b4bb7314d213563e3263ab1c15b2c80fe7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
