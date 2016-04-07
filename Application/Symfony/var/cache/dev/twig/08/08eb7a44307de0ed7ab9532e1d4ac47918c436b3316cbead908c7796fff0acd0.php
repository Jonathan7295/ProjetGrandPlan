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
        $__internal_26c06723828bde4c75874a09012bfb38db9bbe14c4356ab0cbc45a6ebff2de05 = $this->env->getExtension("native_profiler");
        $__internal_26c06723828bde4c75874a09012bfb38db9bbe14c4356ab0cbc45a6ebff2de05->enter($__internal_26c06723828bde4c75874a09012bfb38db9bbe14c4356ab0cbc45a6ebff2de05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_26c06723828bde4c75874a09012bfb38db9bbe14c4356ab0cbc45a6ebff2de05->leave($__internal_26c06723828bde4c75874a09012bfb38db9bbe14c4356ab0cbc45a6ebff2de05_prof);

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
