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
        $__internal_6ab55addc91138398ea35fc3461e4e2589698c955e1b12f4b09a1fad1637071d = $this->env->getExtension("native_profiler");
        $__internal_6ab55addc91138398ea35fc3461e4e2589698c955e1b12f4b09a1fad1637071d->enter($__internal_6ab55addc91138398ea35fc3461e4e2589698c955e1b12f4b09a1fad1637071d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6ab55addc91138398ea35fc3461e4e2589698c955e1b12f4b09a1fad1637071d->leave($__internal_6ab55addc91138398ea35fc3461e4e2589698c955e1b12f4b09a1fad1637071d_prof);

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
