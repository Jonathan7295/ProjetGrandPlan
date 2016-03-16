<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_f954e2d38a618e7d07ed984d2ca78c60ab15d74eade21047739a0551576f5c15 extends Twig_Template
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
        $__internal_b0e4fa0a66b5d205bde2b97a17777360acc7248e594252823f8a4b501c4d00c2 = $this->env->getExtension("native_profiler");
        $__internal_b0e4fa0a66b5d205bde2b97a17777360acc7248e594252823f8a4b501c4d00c2->enter($__internal_b0e4fa0a66b5d205bde2b97a17777360acc7248e594252823f8a4b501c4d00c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b0e4fa0a66b5d205bde2b97a17777360acc7248e594252823f8a4b501c4d00c2->leave($__internal_b0e4fa0a66b5d205bde2b97a17777360acc7248e594252823f8a4b501c4d00c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
