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
        $__internal_17464be3b2f9c440ab2615dab4413856f5d25525e1ae4a8fce9326fcc9ecd756 = $this->env->getExtension("native_profiler");
        $__internal_17464be3b2f9c440ab2615dab4413856f5d25525e1ae4a8fce9326fcc9ecd756->enter($__internal_17464be3b2f9c440ab2615dab4413856f5d25525e1ae4a8fce9326fcc9ecd756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_17464be3b2f9c440ab2615dab4413856f5d25525e1ae4a8fce9326fcc9ecd756->leave($__internal_17464be3b2f9c440ab2615dab4413856f5d25525e1ae4a8fce9326fcc9ecd756_prof);

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
