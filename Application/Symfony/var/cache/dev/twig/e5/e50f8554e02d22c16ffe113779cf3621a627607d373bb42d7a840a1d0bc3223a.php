<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_02e87ca9f877515ac5da6231e0dded9fd01dd6145133276a2daa7b941eeaa94e extends Twig_Template
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
        $__internal_3fce56867a21bac1ef47bcd9c95dc8428a59521eb0b5629e396322d447ec7f2f = $this->env->getExtension("native_profiler");
        $__internal_3fce56867a21bac1ef47bcd9c95dc8428a59521eb0b5629e396322d447ec7f2f->enter($__internal_3fce56867a21bac1ef47bcd9c95dc8428a59521eb0b5629e396322d447ec7f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3fce56867a21bac1ef47bcd9c95dc8428a59521eb0b5629e396322d447ec7f2f->leave($__internal_3fce56867a21bac1ef47bcd9c95dc8428a59521eb0b5629e396322d447ec7f2f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
