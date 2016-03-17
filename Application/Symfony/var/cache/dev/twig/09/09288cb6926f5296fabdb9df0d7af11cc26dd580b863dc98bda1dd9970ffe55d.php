<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_144127455b9fb9985fcd406e0722c17fde239a641c8743be1c77c99ba8cec866 extends Twig_Template
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
        $__internal_56816cb81756a4590f1149ad468b3a4847b97283edee5f1f5659184f9a5cd57e = $this->env->getExtension("native_profiler");
        $__internal_56816cb81756a4590f1149ad468b3a4847b97283edee5f1f5659184f9a5cd57e->enter($__internal_56816cb81756a4590f1149ad468b3a4847b97283edee5f1f5659184f9a5cd57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_56816cb81756a4590f1149ad468b3a4847b97283edee5f1f5659184f9a5cd57e->leave($__internal_56816cb81756a4590f1149ad468b3a4847b97283edee5f1f5659184f9a5cd57e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
