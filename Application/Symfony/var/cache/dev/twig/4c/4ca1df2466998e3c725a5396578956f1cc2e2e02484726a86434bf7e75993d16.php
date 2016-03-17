<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_cb68d0f964bac0c09a6f91c0bf55bf6515b004ffb6682c1b852acf9ed3261fec extends Twig_Template
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
        $__internal_7101bde8efc46a7b50572c392cb015775b40272b82c481df0a3522e98a43610b = $this->env->getExtension("native_profiler");
        $__internal_7101bde8efc46a7b50572c392cb015775b40272b82c481df0a3522e98a43610b->enter($__internal_7101bde8efc46a7b50572c392cb015775b40272b82c481df0a3522e98a43610b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7101bde8efc46a7b50572c392cb015775b40272b82c481df0a3522e98a43610b->leave($__internal_7101bde8efc46a7b50572c392cb015775b40272b82c481df0a3522e98a43610b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
