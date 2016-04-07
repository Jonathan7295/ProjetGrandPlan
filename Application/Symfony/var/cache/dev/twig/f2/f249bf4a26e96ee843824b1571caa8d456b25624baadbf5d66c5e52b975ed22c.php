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
        $__internal_3fa46b6a64da36bc994467754dbc180068274764e17a53e3d95d4e6a86a06fcb = $this->env->getExtension("native_profiler");
        $__internal_3fa46b6a64da36bc994467754dbc180068274764e17a53e3d95d4e6a86a06fcb->enter($__internal_3fa46b6a64da36bc994467754dbc180068274764e17a53e3d95d4e6a86a06fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3fa46b6a64da36bc994467754dbc180068274764e17a53e3d95d4e6a86a06fcb->leave($__internal_3fa46b6a64da36bc994467754dbc180068274764e17a53e3d95d4e6a86a06fcb_prof);

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
