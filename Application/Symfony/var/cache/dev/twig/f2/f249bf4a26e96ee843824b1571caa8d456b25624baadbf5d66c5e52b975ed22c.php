<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_f0f5c2d22c611b1af598d2b1bd77f65c1c7fce3b5c4a6b0d65176001abaa8742 extends Twig_Template
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
        $__internal_beac6c8dae8bb98690d848848f977465db14752ceb1fd3f9259815de6c3ed799 = $this->env->getExtension("native_profiler");
        $__internal_beac6c8dae8bb98690d848848f977465db14752ceb1fd3f9259815de6c3ed799->enter($__internal_beac6c8dae8bb98690d848848f977465db14752ceb1fd3f9259815de6c3ed799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_beac6c8dae8bb98690d848848f977465db14752ceb1fd3f9259815de6c3ed799->leave($__internal_beac6c8dae8bb98690d848848f977465db14752ceb1fd3f9259815de6c3ed799_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
