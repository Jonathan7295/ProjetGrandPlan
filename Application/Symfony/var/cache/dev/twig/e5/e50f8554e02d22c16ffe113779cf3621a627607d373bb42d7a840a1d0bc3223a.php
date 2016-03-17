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
        $__internal_68e78aac63b84e7ce152e0beb94f5149f2b049710038deebc5bfcfcf94f0ce3a = $this->env->getExtension("native_profiler");
        $__internal_68e78aac63b84e7ce152e0beb94f5149f2b049710038deebc5bfcfcf94f0ce3a->enter($__internal_68e78aac63b84e7ce152e0beb94f5149f2b049710038deebc5bfcfcf94f0ce3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_68e78aac63b84e7ce152e0beb94f5149f2b049710038deebc5bfcfcf94f0ce3a->leave($__internal_68e78aac63b84e7ce152e0beb94f5149f2b049710038deebc5bfcfcf94f0ce3a_prof);

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
