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
        $__internal_ed965781cc1bfe48a75c5c7bf091f01d0d1af03713208f99c89116ae41bf0c05 = $this->env->getExtension("native_profiler");
        $__internal_ed965781cc1bfe48a75c5c7bf091f01d0d1af03713208f99c89116ae41bf0c05->enter($__internal_ed965781cc1bfe48a75c5c7bf091f01d0d1af03713208f99c89116ae41bf0c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ed965781cc1bfe48a75c5c7bf091f01d0d1af03713208f99c89116ae41bf0c05->leave($__internal_ed965781cc1bfe48a75c5c7bf091f01d0d1af03713208f99c89116ae41bf0c05_prof);

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
