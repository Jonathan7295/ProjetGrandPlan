<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1eb66022c8cbf86a55a656639a5eae32da34c419bd9860db70d7ef1ed16e9bac extends Twig_Template
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
        $__internal_7f4c4646cb292b71f2dcf83e720a3efc6ff84efe01cadf99fc6b9f7777fd98a8 = $this->env->getExtension("native_profiler");
        $__internal_7f4c4646cb292b71f2dcf83e720a3efc6ff84efe01cadf99fc6b9f7777fd98a8->enter($__internal_7f4c4646cb292b71f2dcf83e720a3efc6ff84efe01cadf99fc6b9f7777fd98a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7f4c4646cb292b71f2dcf83e720a3efc6ff84efe01cadf99fc6b9f7777fd98a8->leave($__internal_7f4c4646cb292b71f2dcf83e720a3efc6ff84efe01cadf99fc6b9f7777fd98a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
