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
        $__internal_3e4ac23016fbb6ab749774b3da9108cdb5b0fcdf4bbc95ff7648d4572ff4c3f5 = $this->env->getExtension("native_profiler");
        $__internal_3e4ac23016fbb6ab749774b3da9108cdb5b0fcdf4bbc95ff7648d4572ff4c3f5->enter($__internal_3e4ac23016fbb6ab749774b3da9108cdb5b0fcdf4bbc95ff7648d4572ff4c3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_3e4ac23016fbb6ab749774b3da9108cdb5b0fcdf4bbc95ff7648d4572ff4c3f5->leave($__internal_3e4ac23016fbb6ab749774b3da9108cdb5b0fcdf4bbc95ff7648d4572ff4c3f5_prof);

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