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
        $__internal_a1b2059e8f16374070ed57619538038eaef5dc41fe5bf51cc5f0c834f092bb10 = $this->env->getExtension("native_profiler");
        $__internal_a1b2059e8f16374070ed57619538038eaef5dc41fe5bf51cc5f0c834f092bb10->enter($__internal_a1b2059e8f16374070ed57619538038eaef5dc41fe5bf51cc5f0c834f092bb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a1b2059e8f16374070ed57619538038eaef5dc41fe5bf51cc5f0c834f092bb10->leave($__internal_a1b2059e8f16374070ed57619538038eaef5dc41fe5bf51cc5f0c834f092bb10_prof);

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
