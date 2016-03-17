<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7285e880999f401254a72f74384778c2c42e1465a714f0f0ece271e34cf85df0 extends Twig_Template
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
        $__internal_38b96dd4d3e1cb737bbae6ed8b86022d214b17858ab29f7e37f3829cdcdd930e = $this->env->getExtension("native_profiler");
        $__internal_38b96dd4d3e1cb737bbae6ed8b86022d214b17858ab29f7e37f3829cdcdd930e->enter($__internal_38b96dd4d3e1cb737bbae6ed8b86022d214b17858ab29f7e37f3829cdcdd930e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_38b96dd4d3e1cb737bbae6ed8b86022d214b17858ab29f7e37f3829cdcdd930e->leave($__internal_38b96dd4d3e1cb737bbae6ed8b86022d214b17858ab29f7e37f3829cdcdd930e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
